<?php

namespace Toiba\FullCalendarBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Toiba\FullCalendarBundle\Entity\Event;

class EventType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class, [
            'constraints' => new NotBlank(),
        ]);
        $builder->add('allDay', CheckboxType::class, [
            'required' => false,
        ]);
        $builder->add('startDate', DateTimeType::class, [
            'constraints' => new NotBlank(),
        ]);
        $builder->add('endDate', DateTimeType::class, [
            'required' => false,
        ]);
        $builder->add('url', UrlType::class, [
            'required' => false,
        ]);
        $builder->add('className', TextType::class, [
            'required' => false,
        ]);
        $builder->add('editable', CheckboxType::class, [
            'required' => false,
        ]);
        $builder->add('startEditable', CheckboxType::class, [
            'required' => false,
        ]);
        $builder->add('durationEditable', CheckboxType::class, [
            'required' => false,
        ]);
        $builder->add('color', ColorType::class, [
            'required' => false,
        ]);
        $builder->add('backgroundColor', ColorType::class, [
            'required' => false,
        ]);
        $builder->add('textColor', ColorType::class, [
            'required' => false,
        ]);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }

}
