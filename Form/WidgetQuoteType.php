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
            ->add('color', ChoiceType::class, [
                'label' => 'widget_quote.form.color.label',
                'choices' => array (
                    'widget_quote.form.quote.color.success' => 'success',
                    'widget_quote.form.quote.color.info' => 'info',
                    'widget_quote.form.quote.color.warning' => 'warning',
                ),
                'choices_as_values' => true,
            ])
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
            ])
            ->add('companyLogo', MediaType::class, [
                'label' => 'widget_quote.form.company.label'
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
