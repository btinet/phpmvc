<?php

namespace Core\Controller;

use Core\Kernel;
use League\Plates\Engine;

class AbstractController implements ControllerInterface
{

    protected array $routes = array();
    protected Engine $view;

    public function __construct()
    {
        $kernel = new Kernel();
        $this->routes = $kernel->getPlainRoutes();
        $this->view = new Engine(project_root.'/templates');

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
