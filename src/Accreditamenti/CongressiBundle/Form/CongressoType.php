<?php

namespace Accreditamenti\CongressiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CongressoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('codice_congresso')
            ->add('url')
            ->add('titolo')
            ->add('descrizione')
            ->add('data_inizio')
            ->add('data_fine')
            ->add('luogo')
            ->add('manifesto')
            ->add('path_pdf_programma')
            ->add('path_pdf_iscrizione')
            ->add('path_pdf_prenotazione')
            ->add('email_referente', 'text', array(
                'required' => false
            ))
            ->add('ricezione_abstract')
            ->add('pagina_sponsor')
            ->add('abilitato')
        ;
    }

    public function getName()
    {
        return 'accreditamenti_congressibundle_congressotype';
    }
}
