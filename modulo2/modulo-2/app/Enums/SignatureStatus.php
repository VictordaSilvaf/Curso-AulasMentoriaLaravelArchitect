<?php

namespace App\Enums;

enum SignatureStatus: int
{
    case ACTIVED = 1;
    case DEACTIVED = 2;
    case CANCELED = 3;
    case SUSPENDED = 4;
}
