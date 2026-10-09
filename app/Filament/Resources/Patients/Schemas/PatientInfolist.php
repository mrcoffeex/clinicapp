<?php

namespace App\Filament\Resources\Patients\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PatientInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('code'),
                TextEntry::make('name'),
                TextEntry::make('address'),
                TextEntry::make('phone')
                    ->placeholder('-'),
                TextEntry::make('date_of_birth')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('gender'),
                TextEntry::make('height')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('weight')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
