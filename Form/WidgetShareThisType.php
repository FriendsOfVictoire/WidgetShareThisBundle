<?php

namespace Victoire\Widget\ShareThisBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Bundle\CoreBundle\Form\WidgetType;
use Victoire\Bundle\FormBundle\Form\Type\LinkType;
use Victoire\Bundle\WidgetBundle\Model\Widget;

/**
 * WidgetShareThis form type.
 */
class WidgetShareThisType extends WidgetType
{
    /**
     * define form fields.
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('facebookEnabled', null, [
                'label'    => 'victoire.sharethis.form.facebookEnabled.label',
                'required' => false, ])
            ->add('twitterEnabled', null, [
                'label'    => 'victoire.sharethis.form.twitterEnabled.label',
                'required' => false, ])
            ->add('googleplusEnabled', null, [
                'label'    => 'victoire.sharethis.form.googleplusEnabled.label',
                'required' => false, ])
            ->add('linkedinEnabled', null, [
                'label'    => 'victoire.sharethis.form.linkedinEnabled.label',
                'required' => false, ])
            ->add('viadeoEnabled', null, [
                'label'    => 'victoire.sharethis.form.viadeoEnabled.label',
                'required' => false, ])
            ->add('emailEnabled', null, [
                'label'    => 'victoire.sharethis.form.emailEnabled.label',
                'required' => false, ])
            ->add('pinterestEnabled', null, [
                'label'    => 'victoire.sharethis.form.pinterestEnabled.label',
                'required' => false, ])
            ->add('bufferEnabled', null, [
                'label'    => 'victoire.sharethis.form.bufferEnabled.label',
                'required' => false, ])
            ->add('shareThisEnabled', null, [
                'label'    => 'victoire.sharethis.form.shareThisEnabled.label',
                'required' => false, ])
            ->add('link', LinkType::class, [
                'linkTypeChoices' => array_merge(LinkType::getDefaultLinkTypeChoices(), [
                    'none'        => 'victoire.sharethis.form.linkType.choices.none.label',
                ]),
            ]);

        if ($options['mode'] === Widget::MODE_STATIC) {
            $builder
                ->add('twitterVia', null, [
                    'label'    => 'victoire.sharethis.form.twitterVia.label',
                    'required' => false, ]);
        }

        parent::buildForm($builder, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\ShareThisBundle\Entity\WidgetShareThis',
            'widget'             => 'ShareThis',
            'translation_domain' => 'victoire',
        ]);
    }
}
