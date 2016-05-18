<?php

namespace Victoire\Widget\QuoteBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Victoire\Bundle\CoreBundle\Form\WidgetType;
use Victoire\Bundle\MediaBundle\Form\Type\MediaType;

class WidgetQuoteType extends WidgetType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quote', null, [
                'label' => 'widget_quote.form.quote.label'
            ])
            ->add('avatar', MediaType::class, [
                'label' => 'widget_quote.form.avatar.label'
            ])
            ->add('job', null, [
                'label' => 'widget_quote.form.job.label'
            ])
            ->add('name', null, [
                'label' => 'widget_quote.form.name.label'
            ]);
        parent::buildForm($builder, $options);

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(array(
            'data_class'         => 'Victoire\Widget\QuoteBundle\Entity\WidgetQuote',
            'widget'             => 'Quote',
            'translation_domain' => 'victoire'
        ));
    }
}
