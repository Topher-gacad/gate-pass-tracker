<?php

namespace App\Filament\Resources\TimeTracks\Pages;

use App\Filament\Resources\TimeTracks\TimeTrackResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditTimeTrack extends EditRecord
{
    protected static string $resource = TimeTrackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
