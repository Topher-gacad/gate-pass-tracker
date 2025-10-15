<?php

namespace App\Filament\Resources\TimeTracks\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class TimeTrackForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('date'),
                TextInput::make('name'),
                TextInput::make('company'),
                TextInput::make('department'),
                TextInput::make('role'),
                TextInput::make('reason'),
                TextInput::make('type'),
                TextInput::make('time'),
                TextInput::make('status'),
                
            ]);
    }
}
