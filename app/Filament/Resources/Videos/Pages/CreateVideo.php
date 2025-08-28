<?php

namespace App\Filament\Resources\Videos\Pages;

use App\Filament\Resources\Videos\VideoResource;
use App\Services\VideoProcessingService;
use Filament\Resources\Pages\CreateRecord;

class CreateVideo extends CreateRecord
{
    protected static string $resource = VideoResource::class;

    protected function afterCreate(): void
    {
        $record = $this->record;
        if (! $record || ! $record->url) {
            return;
        }

        // $service = app(VideoProcessingService::class);

        // Generate thumbnail from original first
        // $thumbnail = $service->thumbnail($record->url);

        // Compress and point url to processed file
        // $processed = $service->compress($record->url);

        // $record->update([
        //     'url' => $processed,
        //     'thumbnail' => $thumbnail,
        // ]);
    }
}
