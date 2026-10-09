<?php

namespace App\Filament\Resources\Patients\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PatientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Patient Information')
                    ->columnSpanFull()
                    ->columns(3)
                    ->schema([
                        TextInput::make('code')
                            ->required(),
                        TextInput::make('name')
                            ->columnSpan(2)
                            ->required(),
                        Textarea::make('address')
                            ->columnSpanFull()
                            ->rows(3)
                            ->required(),
                        TextInput::make('phone')
                            ->tel(),
                        DatePicker::make('date_of_birth'),
                        Select::make('gender')
                            ->required()
                            ->options([
                                'male' => 'Male',
                                'female' => 'Female',
                            ]),
                        TextInput::make('height')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(250)
                            ->suffix('cm')
                            ->helperText('Height in centimeters')
                            ->required(),
                        TextInput::make('weight')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(300)
                            ->suffix('kg')
                            ->helperText('Weight in kilograms')
                            ->required(),
                    ]),
            ]);
    }
}
