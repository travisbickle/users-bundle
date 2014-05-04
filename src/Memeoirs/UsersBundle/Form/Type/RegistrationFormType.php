<?php
namespace Memeoirs\UsersBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        //$builder->add('name');
        $builder->remove('username');  // we use email as the username
    }

    public function getName()
    {
        return 'memeoirs_user_registration';
    }
}