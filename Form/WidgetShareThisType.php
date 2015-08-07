<?php

namespace Victoire\Widget\ShareThisBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Bundle\CoreBundle\Form\WidgetType;
use Victoire\Bundle\WidgetBundle\Model\Widget;

/**
 * WidgetShareThis form type
 */
class WidgetShareThisType extends WidgetType
{
    /**
     * define form fields
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $mode = $options['mode'];
        $namespace = $options['namespace'];
        $entityName = $options['entityName'];

        if ($entityName !== null) {
            if ($namespace === null) {
                throw new \Exception('The namespace is mandatory if the entity_name is given.');
            }
        }

        $builder
            ->add('facebookEnabled', null, array(
                'label'    => 'victoire.sharethis.form.facebookEnabled.label',
                'required' => false, ))
            ->add('twitterEnabled', null, array(
                'label'    => 'victoire.sharethis.form.twitterEnabled.label',
                'required' => false, ))
            ->add('googleplusEnabled', null, array(
                'label'    => 'victoire.sharethis.form.googleplusEnabled.label',
                'required' => false, ))
            ->add('linkedinEnabled', null, array(
                'label'    => 'victoire.sharethis.form.linkedinEnabled.label',
                'required' => false, ))
            ->add('viadeoEnabled', null, array(
                'label'    => 'victoire.sharethis.form.viadeoEnabled.label',
                'required' => false, ))
            ->add('emailEnabled', null, array(
                'label'    => 'victoire.sharethis.form.emailEnabled.label',
                'required' => false, ))
            ->add('pinterestEnabled', null, array(
                'label'    => 'victoire.sharethis.form.pinterestEnabled.label',
                'required' => false, ))
            ->add('bufferEnabled', null, array(
                'label'    => 'victoire.sharethis.form.bufferEnabled.label',
                'required' => false, ))
            ->add('shareThisEnabled', null, array(
                'label'    => 'victoire.sharethis.form.shareThisEnabled.label',
                'required' => false, ))
            ;

        if ($mode === Widget::MODE_STATIC) {
            $builder
                ->add('twitterVia', null, array(
                    'label' => 'victoire.sharethis.form.twitterVia.label',
                    'required' => false,))
            ;
        }

        parent::buildForm($builder, $options);
    }

    /**
     * bind form to WidgetShareThis entity
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults(array(
            'data_class'         => 'Victoire\Widget\ShareThisBundle\Entity\WidgetShareThis',
            'widget'             => 'ShareThis',
            'translation_domain' => 'victoire',
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
