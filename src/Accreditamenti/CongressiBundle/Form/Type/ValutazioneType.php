<?php
namespace Accreditamenti\CongressiBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ValutazioneType extends AbstractType
{
    public function getDefaultOptions(array $options)
    {
        return array(
            'choices' => array(
                '1' => 'Molto rilevante',
                '2' => 'Abbastanza rilevante',
                '2' => 'Rilevante',
                '2' => 'Poco rilevante',
                '2' => 'Non rilevante',
            )
        );
    }

    public function getParent(array $options)
    {
        return 'choice';
    }

    public function getName()
    {
        return 'valutazione';
    }
}

?>
