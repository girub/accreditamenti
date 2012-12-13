<?php

namespace Accreditamenti\CongressiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CongressoType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
                ->add('codice_congresso', 'text', array('required' => false))
                ->add('url', 'text', array('required' => false))
                ->add('titolo')
                ->add('descrizione','text', array('required' => false))
                ->add('data_inizio', 'date', array(
                    'label' => 'Data Inizio',
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy')
                )
                
                
                //->add('data_inizio')
                //->add('data_fine')
                ->add('data_fine', 'date', array(
                    'label' => 'Data Inizio',
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy')
                )
                ->add('luogo')
                ->add('manifesto', 'file', array('required' => false, 'label' => 'Locandina del Congresso'))
                ->add('path_pdf_programma', 'file', array('required' => false, 'label' => 'Programma PDF'))
                ->add('path_pdf_iscrizione', 'file', array('required' => false, 'label' => 'Iscrizione PDF'))
                ->add('path_pdf_prenotazione', 'file', array('required' => false, 'label' => 'Prenotazione PDF'))
                ->add('email_referente', 'text', array('required' => false))
                ->add('ricezione_abstract')
                ->add('pagina_sponsor')
                ->add('abilitato')
        ;
    }

    public function getName() {
        return 'accreditamenti_congressibundle_congressotype';
    }

}
