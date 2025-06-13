<?php

namespace App\Filament\Resources\EstudiantesResource\Pages;

use App\Filament\Resources\EstudiantesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewEstudiantes extends ViewRecord
{
    protected static string $resource = EstudiantesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
