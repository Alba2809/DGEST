<?php

namespace App\Exports;

use App\Models\Modulo1Egresado;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class Modulo1Export implements FromQuery
{
    use Exportable;
    public function __construct(Collection $egresados)
    {
        $this->egresados = $egresados;
    }

    public function query()
    {
        return Modulo1Egresado::query()->whereIn('no_control_egresado', $this->egresados);
    }
}
