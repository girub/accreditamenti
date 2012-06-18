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
            ->add('data_inizio_compilazione')
            ->add('data_fine_compilazione')
            ->add('percentuale_risposte_esatte')
            ->add('numero_tentativi_compilazione')
            ->add('accreditamento_id')
        ;
    }

    public function getName()
    {
        return 'accreditamenti_congressibundle_questionarioecmtype';
    }
}
