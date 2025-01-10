<?php

namespace App\Filament\Resources\CategoryResource;

use App\Models\Category;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;

class CategoryTableConfig
{
    public static function getColumns(): array
    {
        return [
            TextColumn::make('name')
                ->label('Parent Category')
                ->sortable()
                ->searchable(),

            TextColumn::make('children.name')
                ->label('Child Categories')
                ->default('-')
                ->searchable(),
        ];
    }

    public static function getColumnActions(): array
    {
        return [
            EditAction::make()
                ->button()
                ->extraAttributes([
                    'class' => 'px-2.5 py-2.5 text-xs',
                ])
                ->mutateRecordDataUsing(function (array $data): array {
                    if (isset($data['id'])) {
                        $category = Category::find($data['id']);
                        $data['children'] = $category->children()->pluck('name')->toArray();
                    }

                    return $data;
                })
                ->using(function (Category $record, array $data): Category {
                    $existingChildren = $record->children()->pluck('name', 'id');

                    $processedChildIds = [];

                    if (isset($data['children']) && is_array($data['children'])) {
                        foreach ($data['children'] as $childName) {

                            $existingChild = $existingChildren->search($childName);

                            if ($existingChild !== false) {
                                $processedChildIds[] = $existingChild;
                            } else {
                                $newChild = $record->children()->create(['name' => $childName]);
                                $processedChildIds[] = $newChild->id;
                            }
                        }
                    }

                    $record->children()
                        ->whereNotIn('id', $processedChildIds)
                        ->delete();

                    $record->update(["name" => $data["name"]]);

                    return $record;
                })
                ->modalCancelAction(function ($action) {
                    return $action
                        ->extraAttributes([
                            'class' => '!bg-gray-600 text-white',
                        ]);
                }),

            DeleteAction::make()
                ->button()
                ->extraAttributes(function (Category $record) {
                    return [
                        'class' => 'px-2.5 py-2.5 text-xs '.($record->children()->exists() || $record->products()->exists() ? 'cursor-not-allowed' : ''),
                    ];
                })
                ->disabled(function (Category $record) {
                    return $record->children()->exists() || $record->products()->exists();
                })
                // ->tooltip(function (Category $record) {
                //     if ($record->children()->exists()) {
                //         return 'This category has child categories and cannot be deleted.';
                //     } elseif ($record->products()->exists()) {
                //         return 'This category is linked to products and cannot be deleted.';
                //     }

                //     return null;
                // })
                ->requiresConfirmation()
                ->modalSubmitActionLabel('Yes, delete it')
                ->modalCancelAction(function ($action) {
                    return $action
                        ->extraAttributes([
                            'class' => '!bg-gray-600 text-white',
                        ]);
                }),
        ];
    }
}
