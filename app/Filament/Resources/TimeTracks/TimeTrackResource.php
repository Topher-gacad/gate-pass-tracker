<?php

namespace App\Filament\Resources\TimeTracks;

use App\Filament\Resources\TimeTracks\Pages\CreateTimeTrack;
use App\Filament\Resources\TimeTracks\Pages\EditTimeTrack;
use App\Filament\Resources\TimeTracks\Pages\ListTimeTracks;
use App\Filament\Resources\TimeTracks\Schemas\TimeTrackForm;
use App\Filament\Resources\TimeTracks\Tables\TimeTracksTable;
use App\Models\TimeTrack;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TimeTrackResource extends Resource
{
    protected static ?string $model = TimeTrack::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TimeTrackForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TimeTracksTable::configure($table);
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
            'index' => ListTimeTracks::route('/'),
            'create' => CreateTimeTrack::route('/create'),
            'edit' => EditTimeTrack::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
