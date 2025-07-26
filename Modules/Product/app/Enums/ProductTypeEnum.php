<?php

namespace Modules\Product\Enums;

use App\Traits\EnumToArray;

enum ProductTypeEnum: string
{
    use EnumToArray;

    case READY = 'ready';
    case CUSTOM = 'custom';

}
