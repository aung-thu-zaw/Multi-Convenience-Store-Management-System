<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use App\Models\Category;
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
                    'class' => 'py-2.5 text-sm',
                ])
                ->modalCancelAction(function ($action) {
                    return $action
                        ->extraAttributes([
                            'class' => '!bg-gray-600 text-white',
                        ]);
                })
                ->createAnother(false)
                ->using(function (array $data): Category {
                    $children = $data['children'] ?? [];

                    $category = static::getModel()::create(['name' => $data['name']]);

                    foreach ($children as $subcategory) {
                        static::getModel()::create([
                            'parent_id' => $category->id,
                            'name' => $subcategory,
                        ]);
                    }

                    return $category;
                }),
        ];
    }
}
