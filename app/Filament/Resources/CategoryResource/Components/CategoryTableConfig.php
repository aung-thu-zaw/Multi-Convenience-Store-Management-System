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
                ]),

            DeleteAction::make()
                ->button()
                ->extraAttributes([
                    'class' => 'px-2.5 py-2.5 text-xs',
                ])
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
                        ->color('gray')
                        ->extraAttributes([
                            'class' => '!bg-gray-600 text-white',
                        ]);
                }),
        ];
    }
}
