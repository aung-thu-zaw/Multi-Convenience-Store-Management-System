<?php

namespace App\Filament\Resources\CategoryResource;

use App\Models\Category;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Support\Colors\Color;

class CategoryFormConfig
{
    public static function getSchema(): array
    {
        return [
            TextInput::make('name')
                ->label('Parent Category')
                ->placeholder('Enter parent category name')
                ->required()
                ->rule(function (Category $record) {
                    return !$record->products()->exists()
                        ? null
                        : 'This category is associated with products and cannot be modified.';
                })
                ->unique(ignoreRecord:true)
                ->string()
                ->maxLength(255)
                ->columnSpanFull(),

            Repeater::make('children')
                ->label('Child Categories')
                ->simple(
                    TextInput::make('name')
                        ->label('Child Category')
                        ->placeholder('Enter child category name')
                        ->required()
                        ->string()
                        ->maxLength(255)
                )
                ->defaultItems(1)
                ->columnSpanFull()
                ->required()
                ->hint('Please add at least one child category before creating a parent category.')
                ->hintColor(Color::hex('#7B7F87'))
                ->reorderable(false)
                ->addActionLabel('Add Child Category')
                ->deleteAction(
                    function (Action $action) {
                        $action
                            ->requiresConfirmation()
                            ->modalSubmitActionLabel('Yes, delete it')
                            ->modalCancelAction(function ($action) {
                                return $action
                                    ->extraAttributes([
                                        'class' => '!bg-gray-600 text-white',
                                    ]);
                            });
                    }
                ),
        ];
    }
}
