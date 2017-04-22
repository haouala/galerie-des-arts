<?php

namespace Esprit\GalerieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvenementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomEvenement')
            ->add('typeEvenement')
            ->add('dateEvenement')
            ->add('nbrParticipants')
            ->add('descriptionEvenement')
            ->add('noteEvenement')
            ->add('nbrSignaux')
            ->add('photoEvenement')
            ->add('dateCreationEvenement')
            ->add('fkArtiste')
            ->add('fkSalle')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\GalerieBundle\Entity\Evenement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'esprit_galeriebundle_evenement';
    }
}
