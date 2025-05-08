<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use App\Models\Inquiry;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class OverviewStats extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Customers', Customer::count()),
            Card::make('Total Inquiries', Inquiry::count()),
        ];
    }
}
