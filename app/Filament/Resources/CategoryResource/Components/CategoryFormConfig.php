<?php

namespace App\Filament\Resources\CategoryResource;

use Filament\Forms\Components\TextInput;

class CategoryFormConfig
{
    public static function getSchema(): array
    {
        return [
            TextInput::make('parent_id')
                ->numeric(),
            TextInput::make('name')
                ->required()
                ->maxLength(255),
            TextInput::make('slug')
                ->required()
                ->maxLength(255),
        ];
    }
}
