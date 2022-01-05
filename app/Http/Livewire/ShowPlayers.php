<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Player;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ShowPlayers extends LivewireDatatable
{
    public $model = Player::class;
    function columns()
    {
        return [
            NumberColumn::name('id')->label('ID')->sortBy('id')->defaultSort('asc'),
            Column::name('name')->label('Name'),
            Column::name('height')->label('Height')
        ];
    }
}
