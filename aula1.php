<?php

/*
*   Propriety promotion >>>>
*/
class Service1
{
    public function execute()
    {
        return "Fisrt service running!";
    }
}

class Service2
{
    public function __construct(
        private Service1 $service
    ) {
    }

    public function handle()
    {
        return $this->service->execute();
    }
}

$service2 = new Service2(new Service1());

echo $service2->handle();
