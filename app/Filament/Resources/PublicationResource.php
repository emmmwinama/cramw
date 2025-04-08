<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicationResource\Pages;
use App\Filament\Resources\PublicationResource\RelationManagers;
use App\Models\Publication;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PublicationResource extends Resource
{
    protected static ?string $model = Publication::class;
    protected static ?string $navigationLabel = "Publications";
    protected static ?string $navigationIcon = "heroicon-o-clipboard-document";
    protected static ?string $navigationGroup = "Uploads";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Publication Name'),
                Forms\Components\Textarea::make('description')
                    ->label('Description'),
                Forms\Components\FileUpload::make('file')
                    ->required()
                    ->preserveFilenames()
                    ->acceptedFileTypes([
                        'application/zip',
                        'application/x-zip-compressed',
                        'multipart/x-zip',
                        'application/pdf',
                        'application/vnd.rar',
                        'application/x-rar-compressed'
                    ])
                    ->rules(['mimes:zip,pdf,rar'])
                    ->directory('/uploads/documents'), // Ensure this matches your storage disk
                Forms\Components\Select::make('type')
                    ->options([
                        'report' => 'Report',
                        'research' => 'Research',
                        'general' => 'General',
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Publication Name'),
                Tables\Columns\TextColumn::make('description')
                    ->label('Description'),
                Tables\Columns\TextColumn::make('type')
                    ->label('Type'),
                Tables\Columns\TextColumn::make('file')
                    ->label('File')
                    ->url(fn ($record) => $record->file, true)
                    ->limit(20),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime(),
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
            'index' => Pages\ListPublications::route('/'),
            'create' => Pages\CreatePublication::route('/create'),
            'edit' => Pages\EditPublication::route('/{record}/edit'),
        ];
    }
}
