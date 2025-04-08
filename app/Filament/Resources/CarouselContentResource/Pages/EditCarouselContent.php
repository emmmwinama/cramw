<?php

namespace App\Filament\Resources\CarouselContentResource\Pages;

use App\Filament\Resources\CarouselContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarouselContent extends EditRecord
{
    protected static string $resource = CarouselContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
