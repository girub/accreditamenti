<?php

namespace Accreditamenti\CongressiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AccreditamentoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('numero_accreditamento')
            ->add('titolo')
            ->add('luogo')
            ->add('data_inizio')
            ->add('data_fine')
            ->add('ore_formative')
            ->add('obiettivo_formativo')
            ->add('numero_crediti')
            ->add('congresso')
        ;
    }

    public function getName()
    {
        return 'accreditamenti_congressibundle_accreditamentotype';
    }
}