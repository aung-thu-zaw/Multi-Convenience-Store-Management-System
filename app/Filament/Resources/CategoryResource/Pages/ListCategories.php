<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Colors\Color;

class ListCategories extends ListRecords
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->icon('mdi-plus')
                ->color(Color::hex('#F2890A'))
                ->extraAttributes([
                    'class' => 'px-3 py-2.5 text-sm',
                ]),
        ];
    }
}
