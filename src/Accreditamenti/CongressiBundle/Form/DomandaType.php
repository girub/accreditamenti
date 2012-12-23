<?php

namespace Accreditamenti\CongressiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class DomandaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('descrizione')
            ->add('questionarioecm')
        ;
    }

    public function getName()
    {
        return 'accreditamenti_congressibundle_domandatype';
    }
}
