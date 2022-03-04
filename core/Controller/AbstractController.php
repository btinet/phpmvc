<?php

namespace Core\Controller;

use Core\Kernel;

class AbstractController implements ControllerInterface
{

    private array $routes = array();

    public function __construct()
    {
        $kernel = new Kernel();
        $this->routes = $kernel->getPlainRoutes();
    }

    /**
     * @return array Ausgabe aller registrierten Routen als Array (ohne manuelle Routen)
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * @param string $routeName Name der Route, zu der der Link generiert wird
     * @return string
     */
    public function generateUrlFromRoute(string $routeName): string
    {
        /**
         * Todo: Url aus Route-Array (von ./config/routes.yaml) generieren und als String ausgeben.
         * In HTML-Dokumenten sollen so die Links zu anderen Controllern und dessen Methoden ausgegeben werden.
         */

        return '';
    }

}
