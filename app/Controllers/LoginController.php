<?php

namespace SysPlenus\Controllers;

use SysPlenus\Form\LoginForm;
use SysPlenus\Helpers\Response;
use SysPlenus\Helpers\SecurityHelper;

class LoginController extends Controller
{
    /**
    * @Route("/")
    * @Method("GET")
    */
    public function index()
    {
        $form = LoginForm::form();

        if (empty($_SESSION['id'])) {
            return $this->view('index.html.twig', array('form' => $form));
        }

        return $this->view('template.html.twig');
    }

    /**
    * @Route("/login")
    * @Method("POST")
    */
    public function login()
    {

        $usuario = SecurityHelper::filtraDado($_POST['usuario']);
        $senha = SecurityHelper::filtraDado($_POST['senha']);

        $user = $this->entityManager->getRepository('SysPlenus\Models\TbUsuario')
            ->findOneBy(['usuario' => $usuario, 'senha' => sha1($senha)]);

        if (is_null($user)) {
            return Response::response(['retorno' => false], 200);

        }

        $_SESSION['id'] = $user->getId();
        return Response::response(['retorno' => true], 200);
    }

    /**
    * @Route("/logout")
    * @Method("GET")
    */
    public function logout()
    {
        session_destroy();
        return $this->view('index.html');
    }
}