<?php

namespace SysPlenus\Controllers;


use phpDocumentor\Plugin\Scrybe\Template\Twig;
use Config\EntityDB;
use Symfony\Component\Form\Forms;
use Symfony\Bridge\Twig\Extension\FormExtension;
use Symfony\Component\Form\FormRenderer;
use Symfony\Bridge\Twig\Form\TwigRendererEngine;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\RuntimeLoader\FactoryRuntimeLoader;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\XliffFileLoader;
use Symfony\Bridge\Twig\Extension\TranslationExtension;

abstract class Controller
{
    private $twig;
    protected $entityManager;

    public function __construct()
    {
        $entityManager = new EntityDB();
        $this->entityManager = $entityManager->getEntityManager();

        $defaultFormTheme = 'form_div_layout.html.twig';

        $appVariableReflection = new \ReflectionClass('\Symfony\Bridge\Twig\AppVariable');
        $vendorTwigBridgeDirectory = dirname($appVariableReflection->getFileName());

        $viewsDirectory = dirname(__DIR__).'/../app/Views/';

        $this->twig = new Environment(new FilesystemLoader(array(
            $viewsDirectory,
            $vendorTwigBridgeDirectory.'/Resources/views/Form',
        )));
        $formEngine = new TwigRendererEngine(array($defaultFormTheme), $this->twig);
        $this->twig->addRuntimeLoader(new FactoryRuntimeLoader(array(
            FormRenderer::class => function () use ($formEngine) {
                return new FormRenderer($formEngine);
            },
        )));

        $this->twig->addExtension(new FormExtension());
        $translator = new Translator('en');

        $translator->addLoader('xlf', new XliffFileLoader());
        $translator->addResource(
            'xlf',
            dirname(__DIR__).'/message.xlf',
            'en'
        );

        $this->twig->addExtension(new TranslationExtension($translator));
        $this->insertFunctions();
    }

    private function insertFunctions()
    {
        $this->debugger();
        $this->assets();
    }

    public function addFunctions($name, $function)
    {
        $func = new \Twig_Function($name, $function);

        $this->twig->addFunction($func);
    }

    private function debugger()
    {
        $this->addFunctions('dump', 'dump');
    }

    private function assets()
    {
        $this->addFunctions('assets', function($path) {
            return URL_BASE.'/'.$path;
        });
    }

    protected function view(string $view, $data = [])
    {
        echo $this->twig->render($view, $data);
    }
}