<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonnelResource\Pages;
use App\Filament\Resources\PersonnelResource\RelationManagers;
use App\Models\Personnel;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PersonnelResource extends Resource
{
    protected static ?string $model = Personnel::class;

    protected static ?string $navigationGroup = 'CRA Staff';

    protected static ?string $navigationLabel = 'Leadership & Staff';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Full name'),
                TextInput::make('position')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Position'),
                Forms\Components\Select::make('level')
                    ->options([
                        'board'=>'board',
                        'management'=>'management',
                        'staff'=>'staff'
                    ])
                    ->required()
                    ->label('Level'),
                TextInput::make('rank')
                    ->required()
                    ->unique()
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(100)
                    ->helperText('Please enter the rank of the officer with 1 as the controlling officer or Board Chair, whichever is applicable. All ranks should be unique'),
                Forms\Components\FileUpload::make('picture')
                    ->required()
                    ->image()
                    ->directory('uploads/management')
                    ->preserveFilenames()
                    ->imageResizeMode('cover')
                    ->enableDownload()
                    ->enableOpen()
                    ->imageCropAspectRatio('1:1')
                    ->imageResizeTargetWidth(1000)
                    ->imageResizeTargetHeight(1000)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('position')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('level')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('rank')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPersonnels::route('/'),
            'create' => Pages\CreatePersonnel::route('/create'),
            'edit' => Pages\EditPersonnel::route('/{record}/edit'),
        ];
    }
}
