<?php

namespace Accreditamenti\CongressiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class DomandaValutazioneType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('descrizione')
            ->add('questionarioValutazione')
        ;
    }

    public function getName()
    {
        return 'accreditamenti_congressibundle_domandatype';
    }
}
