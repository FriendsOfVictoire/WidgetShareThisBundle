<?php

namespace Victoire\Widget\ShareThisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Bundle\CoreBundle\Form\EntityProxyFormType;
use Victoire\Bundle\CoreBundle\Form\WidgetType;


/**
 * WidgetShareThis form type
 */
class WidgetShareThisType extends WidgetType
{

    /**
     * define form fields
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $namespace = $options['namespace'];
        $entityName = $options['entityName'];

        if ($entityName !== null) {
            if ($namespace === null) {
                throw new \Exception('The namespace is mandatory if the entity_name is given.');
            }
        }

        //choose form mode
        if ($entityName === null) {
            //if no entity is given, we generate the static form
            $builder;

        }

        parent::buildForm($builder, $options);
    }


    /**
     * bind form to WidgetShareThis entity
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults(array(
            'data_class'         => 'Victoire\Widget\ShareThisBundle\Entity\WidgetShareThis',
            'widget'             => 'sharethis',
            'translation_domain' => 'victoire'
        ));
    }


    /**
     * get form name
     *
     * @return string The name of the form
     */
    public function getName()
    {
        return 'victoire_widget_form_sharethis';
    }
}
