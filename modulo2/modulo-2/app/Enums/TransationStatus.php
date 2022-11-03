<?php

namespace App\Enums;

enum TransationStatus: int
{
    case PAID = 1;
    case PENDING = 2;
    case CANCELED = 3;
    case FAILED = 0;
}
