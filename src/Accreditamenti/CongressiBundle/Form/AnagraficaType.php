<?php

namespace Accreditamenti\CongressiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AnagraficaType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
                ->add('tipo_iscrizione', 'choice', array(
                    'choices' => array(
                        'P' => 'Partecipante',
                        'D' => 'Docente',
                        'R' => 'Relatore',
                        'T' => 'Tutor',
                        )))
                ->add('nome')
                ->add('accreditamento')
                ->add('cognome')
                ->add('data_nascita')
                ->add('luogo_nascita')
                ->add('codice_fiscale')
                ->add('ordine_numero')
                ->add('ordine_citta')
                ->add('indirizzo')
                ->add('indirizzo_cap')
                ->add('indirizzo_citta')
                ->add('indirizzo_provincia')
                ->add('telefono')
                ->add('cellulare')
                ->add('email')
                ->add('professione', 'choice', array(
                    'choices' => array(
                        '1' => 'MEDICO GHIRURGO',
                        '2' => 'ODONTOIATRA',
                        '3' => 'FARMACISTA',
                        '14' => 'INFERMIERE',
                        '15' => 'INFERMIERE PEDIATRICO',
                        '18' => 'OSTETRICA/O',
                    )
                        )
                )
                ->add('disciplina', 'choice', array(
                    'choices' => array(
                        '42' => 'ANATOMIA PATOLOGICA',
                        '32' => 'CHIRURGIA PEDIATRICA',
                        '5' => 'EMATOLOGIA',
                        '40' => 'OTORINOLARINGOIATRIA',
                        '24' => 'PEDIATRIA',
                        '60' => 'PEDIATRIA (PEDIATRI DI LIBERA SCELTA)',
                        '89' => 'OSTETRICA/O',
                    )
                ))
                ->add('qualifica', 'choice', array(
                    'choices' => array(
                        'D' => 'Dipendente',
                        'L' => 'Libero Professionista',
                        'C' => 'Convenzionato',
                    )
                ))
                ->add('sponsor')
                ->add('sponsor_azienda')
                ->add('privacy')
        ;
    }

    public function getName() {
        return 'accreditamenti_congressibundle_anagraficatype';
    }

}