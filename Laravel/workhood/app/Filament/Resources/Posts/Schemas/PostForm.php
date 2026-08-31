<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxlength(200)
                    ->label('Post Title'),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull()
                    ->label('Post Content'),
            ]);
    }
}
