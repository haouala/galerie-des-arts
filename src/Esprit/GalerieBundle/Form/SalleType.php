<?php

namespace Esprit\GalerieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SalleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomSalle')
            ->add('adresseSalle')
            ->add('capaciteSalle')
            ->add('noteSalle')
            ->add('nbrSignaux')
            ->add('fkProprietaire')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\GalerieBundle\Entity\Salle'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'esprit_galeriebundle_salle';
    }
}
