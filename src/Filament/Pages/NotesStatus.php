<?php

namespace TomatoPHP\FilamentNotes\Filament\Pages;

use Filament\Pages\Page;
use TomatoPHP\FilamentNotes\Filament\Resources\NoteResource\Pages\ManageNotes;
use TomatoPHP\FilamentTypes\Pages\BaseTypePage;
use TomatoPHP\FilamentTypes\Services\Contracts\Type;

class NotesStatus extends BaseTypePage
{
    public function getTitle(): string
    {
        return trans('filament-notes::messages.pages.status');
    }

    public function getType(): string
    {
        return "status";
    }

    public function getFor(): string
    {
        return "notes";
    }

    public function getBackUrl()
    {
        return ManageNotes::getUrl(); // TODO: Change the autogenerated stub
    }

    public function getTypes(): array
    {
        return [
            Type::make('pending')
                ->name([
                    "ar" => "قيد الانتظار",
                    "en" => "Pending"
                ])
                ->color('#bf2222')
                ->icon('heroicon-o-clock'),
            Type::make('processing')
                ->name([
                    "ar" => "جاري التنفيذ",
                    "en" => "Processing"
                ])
                ->color('#db7516')
                ->icon('heroicon-o-arrow-path-rounded-square'),
            Type::make('done')
                ->name([
                    "ar" => "تم التنفيذ",
                    "en" => "Done"
                ])
                ->color('#76bf24')
                ->icon('heroicon-o-check-circle'),
        ];
    }
}
