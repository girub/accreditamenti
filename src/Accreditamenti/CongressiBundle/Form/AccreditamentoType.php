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
            //->add('data_inizio')
            //->add('data_fine')
              ->add('data_inizio', 'date', array(
                    'label' => 'Data Inizio',
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy')
                )    
               ->add('data_fine', 'date', array(
                    'label' => 'Data Fine',
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy')
                )
            ->add('ore_formative')
            ->add('obiettivo_formativo')
            ->add('numero_crediti')
            ->add('supporto_aziende_sponsor')
            ->add('certificato_ecm', 'file', array('required' => false, 'label' => 'Certificato ECM'))
            ->add('congresso')
        ;
    }

    public function getName()
    {
        return 'accreditamenti_congressibundle_accreditamentotype';
    }
}
