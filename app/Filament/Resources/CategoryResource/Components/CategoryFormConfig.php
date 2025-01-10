<?php

namespace App\Filament\Resources\CategoryResource;

use App\Models\Category;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
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
                ->unique(ignoreRecord: true)
                ->string()
                ->maxLength(255)
                ->columnSpanFull(),

            Repeater::make('children')
                ->label('Child Categories')
                ->simple(
                    TextInput::make('name')
                        ->placeholder('Enter child category name')
                        ->required()
                        ->string()
                        ->maxLength(255)
                        ->readOnly(function (Get $get): bool {
                            $category = Category::where('name', $get()['name'])->first();
                            if ($category && $category->products()->exists()) {
                                return true;
                            }
                            return false;
                        })
                )
                ->defaultItems(1)
                ->columnSpanFull()
                ->required()
                // ->hint('Please add at least one child category before creating a parent category.')
                ->hintColor(Color::hex('#7B7F87'))
                ->reorderable(false)
                ->addActionLabel('Add Child Category')
                ->deleteAction(
                    function (Action $action) {
                        $action
                        ->disabled(function (array $arguments, Repeater $component): bool {
                            $items = $component->getState();
                            $childCategory = $items[$arguments['item']];
                            $category = Category::where('name', $childCategory)->first();
                            if ($category && $category->products()->exists()) {
                                return true;
                            }
                            return false;
                        });
                    }
                ),
        ];
    }
}
