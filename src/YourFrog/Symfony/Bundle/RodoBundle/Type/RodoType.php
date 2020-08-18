<?php

namespace YourFrog\Symfony\Bundle\RodoBundle\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints;

/**
 * Checkbox dla rodo
 */
class RodoType extends \Symfony\Component\Form\Extension\Core\Type\CheckboxType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->resetViewTransformers();
    }

	/**
	 *	@inheritDoc
	 */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'required' => true,
            'constraints' => [
                new Constraints\Required(),
                new Constraints\NotBlank(),
                new Constraints\IsTrue()
            ]
        ]);
    }
}