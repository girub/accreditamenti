<?php

namespace Accreditamenti\CongressiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class QuestionarioValutazioneType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('descrizione')
            ->add('data_inizio_compilazione')
            ->add('data_fine_compilazione')
            ->add('accreditamento')
        ;
    }

    public function getName()
    {
        return 'accreditamenti_congressibundle_questionario_valutazione_type';
    }
}
