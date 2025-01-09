<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\CategoryFormConfig;
use App\Filament\Resources\CategoryResource\CategoryTableConfig;
use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
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
            ->filters([
                //
            ])
            ->actions(CategoryTableConfig::getColumnActions())
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
