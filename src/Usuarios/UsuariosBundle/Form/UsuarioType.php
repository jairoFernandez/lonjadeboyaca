<?php
namespace Usuarios\UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombres')
            ->add('apellidos')
            ->add('email')
            ->add('password')
            
            ->add('role')
            ->add('status')
            ->add('documento')
            ->add('tipodocumento')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Usuarios\UsuariosBundle\Entity\Usuario'
        ));
    }

    public function getName()
    {
        return 'usuarios_usuariosbundle_usuariotype';
    }
}
