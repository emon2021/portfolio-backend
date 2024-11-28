<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Testimonial;
use Faker\Provider\ar_EG\Text;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TestimonialResource\Pages;
use App\Filament\Resources\TestimonialResource\RelationManagers;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->placeholder('Client Name')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),

                TextInput::make('designation')
                    ->placeholder('Designation')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),

                FileUpload::make('image')
                    ->columnSpanFull()
                    ->required()
                    ->image()
                    ->disk('uploads')
                    ->directory('testimonials')
                    ->maxSize(5000),

                RichEditor::make('description')
                    ->placeholder('Description')
                    ->required()
                    ->minLength(3)
                    ->columnSpanFull()
                    ->maxLength(1500),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('designation'),
                Tables\Columns\ImageColumn::make('image')
                                    ->disk('uploads'),
                Tables\Columns\TextColumn::make('description')
                                    ->wrap()
                                    ->limit(50)
                                    ->html(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    // Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
