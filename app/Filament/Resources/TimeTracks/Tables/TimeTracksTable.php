<?php

namespace App\Filament\Resources\TimeTracks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class TimeTracksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date'),
                TextColumn::make('name'),
                TextColumn::make('company'),
                TextColumn::make('department'),
                TextColumn::make('role'),
                TextColumn::make('reason'),
                TextColumn::make('type'),
                TextColumn::make('time'),
                TextColumn::make('status'),
                TextColumn::make('action'),

            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
