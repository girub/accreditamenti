<?php

namespace Accreditamenti\CongressiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CongressoType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
                ->add('codice_congresso')
                ->add('url')
                ->add('titolo')
                ->add('descrizione')
                ->add('data_inizio', 'genemu_jquerydate')
                ->add('data_fine', 'genemu_jquerydate', array(
                    'widget' => 'single_text'
                ))
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
