<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\CategoryFormConfig;
use App\Filament\Resources\CategoryResource\CategoryTableConfig;
use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'mdi-layers';

    public static function form(Form $form): Form
    {
        return $form->schema(CategoryFormConfig::getSchema());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(Category::query()->whereNull('parent_id'))
            ->columns(CategoryTableConfig::getColumns())
            ->defaultSort('id', 'desc')
            ->filters([])
            ->actions(CategoryTableConfig::getColumnActions())
            ->bulkActions([])
            ->emptyStateIcon('mdi-file-search-outline')
            ->emptyStateHeading('No Categories Found!')
            ->emptyStateDescription('It seems there are currently no entries to display in this table. Please check back later or try adding new data.');

    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
        ];
    }
}
