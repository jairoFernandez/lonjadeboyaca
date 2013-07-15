<?php

namespace Usuarios\UsuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UsuariosBundle:Default:index.html.twig');
    }
    
    public function loginAction()
    {
        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        $error = $peticion->attributes->get(
             SecurityContext::AUTHENTICATION_ERROR,
             $sesion->get(SecurityContext::AUTHENTICATION_ERROR)
             );
        return $this->render('UsuariosBundle:Default:login.html.twig', array(
            'error' => $error
        ));
    }
}
