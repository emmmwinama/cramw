<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarouselContentResource\Pages;
use App\Filament\Resources\CarouselContentResource\RelationManagers;
use App\Models\CarouselContent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;

class CarouselContentResource extends Resource
{
    protected static ?string $model = CarouselContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Slideshow Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(100)
                    ->placeholder('Slide title'),
                TextInput::make('description')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Slide description'),
                TextInput::make('button_text')
                    ->required()
                    ->maxLength(10)
                    ->placeholder('Slide button text'),
                TextInput::make('button_link')
                    ->required()
                    ->maxLength(500)
                    ->placeholder('Slide button link'),
                FileUpload::make('image')
                    ->required()
                    ->image()
                    ->directory('uploads/carousel')
                    ->preserveFilenames()
                    ->imageResizeMode('cover')
                    ->enableDownload()
                    ->enableOpen()
                    ->imageCropAspectRatio('4:3')
                    ->imageResizeTargetWidth(1200)
                    ->imageResizeTargetHeight(900),
                Select::make('alignment')
                    ->required()
                    ->label('Alignment')
                    ->options([
                        'items-start' => 'left',
                        'items-center' => 'center',
                        'items-end' => 'right',
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('button_text')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('alignment')
                    ->searchable()
                    ->sortable()
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
            'index' => Pages\ListCarouselContents::route('/'),
            'create' => Pages\CreateCarouselContent::route('/create'),
            'edit' => Pages\EditCarouselContent::route('/{record}/edit'),
        ];
    }
}
