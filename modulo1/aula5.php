<?php

/*
*   Atributes >>>>
*/

class Request
{
    public string $uri;
    public string $method;

    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];
    }
}

#[Attribute]
class Http
{
    public function __construct(
        private Request $uri,
        private Request $method
    ) {
    }
}

class MyController
{
    #[Http(uri: '/myself', method: 'GET')]
    public function me()
    {
        return "welcome to my web app!";
    }
}

class Router
{
    public function handle(Request $request)
    {
        $controller = new ReflectionClass(MyController::class);

        $methods = $controller->getMethods();

        foreach ($methods as $method) {
            $atributes = $method->getAttributes();

            foreach ($atributes as $atribute) {
                $uri = explode('/', $atribute->getArguments()['uri']);
                $requestUri = explode('/', $request->method);

                $http = $atribute->getArguments()['method'];
                $requestHttp = $request->method;

                if (
                    $uri != $requestUri ||
                    $http != $requestHttp
                ) {
                    continue;
                }

                return $method->invoke(
                    $method->getDeclaringClass()->newInstance()
                );
            }
        }
        return "route not found";
    }
}

$request = new Request();
$router = new Router();
echo $router->handle($request);
