<?php

namespace App\Filament\Resources\CategoryResource;

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
                ->sortable()
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
                ->requiresConfirmation()
                ->modalSubmitActionLabel('Yes, delete it')
                ->modalCancelAction(function ($action) {
                    return $action
                        ->color('gray')
                        ->extraAttributes([
                            'class' => 'bg-gray-500 text-white hover:bg-gray-600 rounded-md px-3 py-2',
                        ]);
                }),
        ];
    }
}
