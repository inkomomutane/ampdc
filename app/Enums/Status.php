<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 *
 * @method static self Done()
 * @method static self Progress()
 * @method static self Pending()
 * @method static self Undone()
 * @method static self Refused()
 */

final class Status extends Enum
{
    protected static function labels() : array
    {
        return [
            'Done' => 'Feito',
            'Progress' => 'Em andamento',
            'Pending' => 'Pendente',
            'Undone' => 'Não feito',
            'Refused' => 'Recusado'
        ];
    }
}
