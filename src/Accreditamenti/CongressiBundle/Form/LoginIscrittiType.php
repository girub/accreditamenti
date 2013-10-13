<?php

namespace Accreditamenti\CongressiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class LoginIscrittiType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
                ->add('codice_accesso', 'text', array('required' => true))

        ;
    }

    public function getName() {
        return 'accreditamenti_congressibundle_loginiscrittitype';
    }

}
