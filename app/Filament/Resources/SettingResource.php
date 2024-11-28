<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-s-cog-6-tooth';

    protected static ?int $navigationSort = 20;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('logo_name')
                    ->label('Logo Name')
                    ->placeholder('Ex: A.E')
                    ->required()
                    ->maxLength(20),

                FileUpload::make('logo')
                    ->label('Logo')
                    ->image()
                    ->nullable()
                    ->maxSize(5000)
                    ->disk('uploads')
                    ->directory('settings'),

                FileUpload::make('favicon')
                    ->label('Favicon')
                    ->image()
                    ->nullable()
                    ->maxSize(2000)
                    ->disk('uploads')
                    ->directory('settings'),

                FileUpload::make('resume')
                    ->label('Resume')
                    ->nullable()
                    ->rules('mimes:pdf')
                    ->maxSize(2000)
                    ->disk('uploads')
                    ->directory('settings'),

                TextInput::make('address')
                    ->placeholder('Ex: 123 Main St, New York, NY 10001')
                    ->label('Address')
                    ->nullable()
                    ->maxLength(255),

                TextInput::make('phone')
                    ->placeholder('Ex: 01xxxxxxx')
                    ->label('Phone')
                    ->nullable()
                    ->maxLength(11),

                TextInput::make('email')
                    ->placeholder('Ex: admin@example.com')
                    ->label('Email')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('logo_name'),
                Tables\Columns\ImageColumn::make('logo')
                    ->disk('uploads'),
                Tables\Columns\ImageColumn::make('favicon')
                    ->disk('uploads'),
                Tables\Columns\ImageColumn::make('resume')
                    ->disk('uploads'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('email'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
