<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BillOfQuantityResource\Pages;
use App\Filament\Resources\BillOfQuantityResource\RelationManagers;
use App\Models\BillOfQuantity;
use App\Models\Item;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BillOfQuantityResource extends Resource
{
    protected static ?string $model = BillOfQuantity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('item_id')
                    ->required()
                    ->options(Item::all()->pluck('description'))
                    ->searchable()
                    ->label('البند'),
                    
                TextInput::make('quantity')
                    ->required()
                    ->label('الكمية')
                    ->numeric(),
                    
                TextInput::make('price')
                    ->required()
                    ->label('السعر')
                    ->numeric()
                    ->prefix('ريال')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getModelLabel(): string
    {
        return __('جدول كمية');
    }

    public static function getPluralModelLabel(): string
    {
        return __('جدول كميات');
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageBillOfQuantities::route('/'),
        ];
    }
}