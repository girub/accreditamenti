<?php

namespace Accreditamenti\CongressiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class QuestionarioEcmType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('descrizione')
              ->add('data_inizio_compilazione', 'date', array(
                    'label' => 'Data Inizio Compilazione',
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy')
                )    
               ->add('data_fine_compilazione', 'date', array(
                    'label' => 'Data Fine Compilazione',
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy')
                )    
            //->add('data_inizio_compilazione')
            //->add('data_fine_compilazione')
            ->add('percentuale_risposte_esatte')
            ->add('numero_tentativi_compilazione')
            ->add('accreditamento')
        ;
    }

    public function getName()
    {
        return 'accreditamenti_congressibundle_questionarioecmtype';
    }
}
