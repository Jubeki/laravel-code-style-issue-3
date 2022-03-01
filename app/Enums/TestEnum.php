<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum Status
{
    use EnumTrait;

    case DRAFT;
    case PUBLISHED;
    case ARCHIVED;
}
