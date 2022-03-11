<?php

namespace Core\Controller;

use Core\Component\HttpComponent\Request;
use Core\Component\HttpComponent\Response;
use Core\Component\SeoComponent\Meta;
use Core\Component\SessionComponent\Session;
use Core\Kernel;
use Exception;
use League\Plates\Engine;

class AbstractController implements ControllerInterface
{

    protected Meta $meta;
    protected Session $session;
    protected Request $request;
    protected Response $response;
    private array $routes;
    private Engine $view;
    private array $templateData;

    public function __construct()
    {
        $kernel = new Kernel();
        $this->session = new Session($kernel->getConfig('APP_SECRET'));
        $this->session->init();
        $this->response = new Response();
        $this->request = new Request($this->session->get('csrf_token'));
        $this->generateToken();

        $this->routes = $kernel->getPlainRoutes();
        $this->meta = new Meta($kernel->getConfig('meta'));
        $this->addTemplateData('meta', $this->meta);
        $this->view = new Engine(project_root . $kernel->getConfig('template_base_path'));

    }

    private function generateToken(): void
    {
        $csrfToken = null;
        try {
            $csrfToken = sha1(random_bytes(9));
        } catch (Exception $e) {
        }

        $this->session->set('csrf_token', $csrfToken);
    }

    /**
     * @param string $key
     * @param $value
     * @return void
     */
    private function addTemplateData(string $key, $value): void
    {
        $this->templateData[$key] = $value;
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

    /**
     * @param string $template path to the template being rendered without ".php"
     * @param array $data data put along the template
     * @return string
     */
    public function render(string $template, array $data = []): string
    {
        foreach ($data as $key => $value) {
            $this->addTemplateData($key, $value);
        }
        return $this->view->render($template, $this->templateData);
    }

    /**
     * @return Meta
     */
    private function getMeta(): Meta
    {
        return $this->meta;
    }

    /**
     * @param Meta $meta
     */
    private function setMeta(Meta $meta): void
    {
        $this->meta = $meta;
    }

}
