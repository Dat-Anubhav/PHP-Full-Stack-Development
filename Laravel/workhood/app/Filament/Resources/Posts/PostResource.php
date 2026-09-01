<?php

namespace App\Filament\Resources\Posts;

use App\Filament\Resources\Posts\Pages\CreatePost;
use App\Filament\Resources\Posts\Pages\EditPost;
use App\Filament\Resources\Posts\Pages\ListPosts;
use App\Filament\Resources\Posts\Pages\ViewPost;
use App\Filament\Resources\Posts\Schemas\PostForm;
use App\Filament\Resources\Posts\Schemas\PostInfolist;
use App\Filament\Resources\Posts\Tables\PostsTable;
use App\Models\Post;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PostForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PostInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        // return PostsTable::configure($table);

        // return $table->columns([
        //     TextColumn::make('title')
        //     ->searchable()
        //     ->sortable(),
            
        //     // Add your content column with a character limit
        //     TextColumn::make('content')
        //         ->limit(50), 
        // ]);

        return $table
    ->columns([
        TextColumn::make('title')
            ->searchable()
            ->sortable(),

        TextColumn::make('content')
            ->label('Content Preview') // Name that shows up in the checkbox menu
            ->formatStateUsing(function (?string $state): string {
                if (! $state) {
                    return '';
                }

                $clean = strip_tags($state);
                $firstLine = Str::before($clean, "\n");

                return Str::limit($firstLine, 50, '...'); // Appends ... to the first line
            })
            ->toggleable()                  // Adds the checkbox to the toggle menu
            ->toggledHiddenByDefault(),     // Hides it by default until you check the box
    ])->recordActions([
        ViewAction::make(),
        EditAction::make(),
    ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getNavigationLabel(): string
{
    return 'Blog Posts';
}

    public static function getPages(): array
    {
        return [
            'index' => ListPosts::route('/'),
            'create' => CreatePost::route('/create'),
            'view' => ViewPost::route('/{record}'),
            'edit' => EditPost::route('/{record}/edit'),
        ];
    }
}
