<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroSectionResource\Pages;
use App\Filament\Resources\HeroSectionResource\RelationManagers;
use App\Models\HeroSection;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroSectionResource extends Resource
{
    protected static ?string $model = HeroSection::class;
    protected static ?string $navigationLabel = 'Hero Section';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->required()
                ->minLength(3)
                ->maxLength(100)
                ->placeholder('Title'),

                TextInput::make('greetings')
                ->required()
                ->minLength(3)
                ->maxLength(100)
                ->placeholder('Greetings'),

                TextInput::make('name')
                ->required()
                ->minLength(3)
                ->maxLength(100)
                ->placeholder('Dev Name'),

                TextInput::make('facebook')
                ->nullable()
                ->placeholder('Facebook URL'),

                TextInput::make('linkedin')
                ->nullable()
                ->placeholder('Linkedin URL'),

                TextInput::make('github')
                ->nullable()
                ->placeholder('Github URL'),


                TagsInput::make('rand_text')
                ->required()
                ->separator(',')
                ->placeholder('Random Text')
                ->suggestions([
                    'Programmer',
                    'Web Developer',
                    'UI/UX Designer',
                    'Graphic Designer',
                    'Content Creator',
                    'Video Editor',
                    'Photographer',
                    'Copywriter',
                    'Social Media Manager',
                    'Digital Marketer',
                    'Data Analyst',
                    'Data Scientist',
                    'Data Engineer',
                ]),

                FileUpload::make('image')
                ->disk('uploads')
                ->directory('images')
                ->required()
                ->image()
                ->maxSize(5000)
                ->rules([
                    'required',
                    'mimes:png,jpg,jpeg,webp,svg,gif,avif',
                ]),

                RichEditor::make('description')
                ->columnSpanFull()
                ->required()
                ->minLength(3)
                ->placeholder('Description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('greetings'),
                TextColumn::make('name'),
                ImageColumn::make('image')
                    ->disk('uploads'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    EditAction::make(),
                    //ViewAction::make(),
                ])
            ])
            ->bulkActions([

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
            'index' => Pages\ListHeroSections::route('/'),
            'create' => Pages\CreateHeroSection::route('/create'),
            'edit' => Pages\EditHeroSection::route('/{record}/edit'),
        ];
    }

    //  create option disable
    public static function canCreate(): bool
    {
        return false;
    }
    //  delete option disable
    public static function canDelete(Model $record): bool
    {
        return false;
    }
}
