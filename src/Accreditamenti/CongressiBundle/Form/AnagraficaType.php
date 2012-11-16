<?php

namespace Accreditamenti\CongressiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AnagraficaType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
                ->add('ente_appartenenza')
                ->add('ente_citta')
                ->add('ente_provincia')
                ->add('ente_cap')
                ->add('ente_via')
                ->add('ente_numero_civico')
                ->add('ente_telefono')
                ->add('tipo_iscrizione', 'choice', array(
                    'choices' => array(
                        'P' => 'Partecipante',
                        'D' => 'Docente',
                        'R' => 'Relatore',
                        'T' => 'Tutor',
                        )))
                ->add('nome')
                ->add('cognome')
                ->add('accreditamento')
                //->add('data_nascita', 'birthday')
                ->add('data_nascita', 'birthday', array(
                    'label' => 'Data Nascita',
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy'
                        )
                )
                ->add('luogo_nascita')
                ->add('codice_fiscale')
                ->add('ordine_numero')
                ->add('ordine_citta')
                ->add('indirizzo_via')
                ->add('indirizzo_cap')
                ->add('indirizzo_numero_civico')
                ->add('indirizzo_citta')
                ->add('indirizzo_provincia')
                ->add('telefono')
                ->add('cellulare')
                ->add('email')
                ->add('professione', 'choice', array(
                    'choices' => array(
                        '1' => 'Medico Chirurgo',
                    ),
                        )
                )
                ->add('disciplina', 'choice', array(
                    'choices' => array(
                        '1' => 'Allergologia ed immunologia clinica',
                        '3' => 'Cardiologia',
                        '4' => 'Dermatologia e venereologia',
                        '6' => 'Endocrinologia',
                        '10' => 'Malattie metaboliche e diabetologia',
                        '11' => 'Malattie dell\'apparato respiratorio',
                        '12' => 'Malattie infettive',
                        '18' => 'Medicina dello sport',
                        '20' => 'Neonatologia',
                        '21' => 'Neurologia',
                        '22' => 'Neuropsichiatria infantile',
                        '24' => 'Pediatria',
                        '36' => 'Ginecologia e ostetricia',
                        '38' => 'Oftalmologia',
                        '39' => 'Ortopedia e traumatologia',
                        '40' => 'Otorinolaringoiatria',
                        '41' => 'Urologia',
                        '45' => 'Farmacologia e tossicologia clinica',
                        '55' => 'Igiene, epidemiologia e sanità pubblica',
                        '56' => 'Igiene degli alimenti e della nutrizione',
                        '58' => 'Medicina generale (medici di famiglia)',
                        '59' => 'Continuità assistenziale',
                        '60' => 'Pediatria (pediatri di libera scelta)',
                        '106' => 'Scienza dell\'alimentazione e dietetica
',
                    ),
                        )
                )


//                ->add('disciplina', 'entity', array(
//                    'class' => 'AccreditamentiCongressiBundle:Disciplina',
//                    'property' => 'nome',
//                    'query_builder' => function (\Accreditamenti\CongressiBundle\Entity\DisciplinaRepository $repository) {
//                        return $repository->createQueryBuilder('s')
//                                ->where('s.professione = 1')
//                                ->add('orderBy', 's.codice');
//                    }
//                        )
//                )
                ->add('qualifica', 'choice', array(
                    'choices' => array(
                        'D' => 'Dipendente',
                        'L' => 'Libero Professionista',
                        'C' => 'Convenzionato',
                    )
                ))
                ->add('iscritto_in_modo_autonomo')
                ->add('sponsor_azienda')
                ->add('privacy')
        ;
    }

    public function getName() {
        return 'accreditamenti_congressibundle_anagraficatype';
    }

}
