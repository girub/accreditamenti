<?php

namespace Accreditamenti\CongressiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RispostaType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
                ->add('descrizione')
                ->add('vero')
                ->add('aperta', null, array(
                    'required' => false
                ))
                ->add('textarea', null, array(
                    'required' => false
                ))
                ->add('domanda')
        ;
    }

    public function getName() {
        return 'accreditamenti_congressibundle_rispostatype';
    }

}
