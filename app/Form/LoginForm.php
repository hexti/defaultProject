<?php

namespace SysPlenus\Form;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Forms;

class LoginForm
{
	public function form()
	{
		$defaults = array(
            'dueDate' => new \DateTime('tomorrow'),
        );

        $formFactory = Forms::createFormFactory(FormType::class, $defaults);

        $form = $formFactory->createBuilder()
            ->add('usuario', TextType::class, array(
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('senha', PasswordType::class, array(
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->getForm();

        return $form->createView();
	}
}