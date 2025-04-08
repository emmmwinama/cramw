<?php

namespace App\Filament\Resources\CarouselContentResource\Pages;

use App\Filament\Resources\CarouselContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarouselContents extends ListRecords
{
    protected static string $resource = CarouselContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
