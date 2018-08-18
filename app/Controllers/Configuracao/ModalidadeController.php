<?php

namespace SysPlenus\Controllers\Configuracao;


use Doctrine\ORM\EntityManager;
use SysPlenus\Controllers\Controller;
use SysPlenus\Models\TbProgramaModalidade;

class ModalidadeController extends Controller
{
    private $modalidadeDao;

    public function __construct()
    {
        parent::__construct();
        $this->modalidadeDao = new TbProgramaModalidade();
    }

    public function index()
    {
        $titulo = 'Modalidade';

        return $this->view('configuracao/geral/modalidade/index.html', compact('titulo'));
    }

    public function novo()
    {
        return $this->view('configuracao/geral/modalidade/new.html');
    }

    public function salvar()
    {
        $x = $_POST;
        $this->modalidadeDao->setName($_POST['nome']);
        $z = $this->entityManager->getEntityManager();
        dump($z);
        $query = $em->createQuery('SELECT u FROM MyProject\Model\User u WHERE u.age > 20');
        $users = $query->getResult();
    }

    public function editar()
    {
        return $this->view('configuracao/geral/modalidade/edit.html');
    }

    public function excluir()
    {
        //TODO: excluir e retornar json confirmando a exclusão
    }
}