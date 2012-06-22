<?php

namespace Accreditamenti\CongressiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RispostaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('descrizione')
            ->add('vero')
            ->add('domanda')
        ;
    }

    public function getName()
    {
        return 'accreditamenti_congressibundle_rispostatype';
    }
}
