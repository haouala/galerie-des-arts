<?php

namespace Esprit\GalerieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArtisteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomAbonne')
            ->add('prenomAbonne')
            ->add('dateNaissanceAbonne')
            ->add('emailAbonne')
            ->add('loginAbonne')
            ->add('passwordAbonne')
            ->add('photoArtiste')
            ->add('domaineArt')
            ->add('role')
            ->add('isConnected')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\GalerieBundle\Entity\Artiste'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'esprit_galeriebundle_artiste';
    }
}
