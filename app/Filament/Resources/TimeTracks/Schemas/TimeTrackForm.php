<?php

namespace App\Filament\Resources\TimeTracks\Schemas;

Use App\Enums\UserStatusEnum;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class TimeTrackForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('date')
                    ->required()
                    ->numeric(),
                TextInput::make('name')
                    ->required()
                    ->unique(),
                TextInput::make('company')->required(),
                TextInput::make('department')->required(),
                TextInput::make('role')->required(),
                TextInput::make('reason')->required(),
                TextInput::make('type')->required(),
                TextInput::make('time')->required(),
                Select::make('status')
                    ->options(UserStatusEnum::class)
                    ->required(),
                
            ]);
    }
}
