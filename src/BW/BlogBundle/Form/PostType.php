<?php

namespace BW\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('heading')
            ->add('category', 'entity', [
                'class' =>  'BW\BlogBundle\Entity\Category',
                'property'  =>  'heading',
                'required'  => false,
                'empty_value'   =>  '< No ctaegory >',
                'expanded'  => true,
            ])
            ->add('description')
            ->add('published', 'checkbox', [
                'label' => 'Опубликовано',
                'required' => false,
                ])
           // ->add('createdon')
           // ->add('updatedon')
            ->add('author')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BW\BlogBundle\Entity\Post'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bw_blogbundle_post';
    }
}
