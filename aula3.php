<?php

/*
*   Enums >>>>
*/

enum Status: int
{
    case PAID = 1;
    case PAIDING = 2;
    case CANCELED = 0;

    public function color(): string
    {
        return match ($this) {
            self::PAID => 'green',
            self::PAIDING => 'yellow',
            self::CANCELED => 'red',
        };
    }
}

class CheckoutService
{
    public function handle(Status $status)
    {
        return $status->color();
    }
}

$service = new CheckoutService();
echo $service->handle(Status::CANCELED);
