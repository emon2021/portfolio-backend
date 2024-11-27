<?php

namespace App\Filament\Resources\HeroSectionResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\HeroSectionResource;

class EditHeroSection extends EditRecord
{
    protected static string $resource = HeroSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Delete the existing image if a new one is uploaded
        if (isset($data['image'])) {
            Storage::disk('uploads')->delete($this->record->image);
        }

        return $data;
    }
}
