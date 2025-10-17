<?php

namespace App\Filament\Resources\TimeTracks\Pages;

use App\Filament\Resources\TimeTracks\TimeTrackResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTimeTracks extends ListRecords
{
    protected static string $resource = TimeTrackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
