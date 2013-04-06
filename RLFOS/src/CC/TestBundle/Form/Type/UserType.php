<?php

namespace CC\TestBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType {
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('login', 'text');
		$builder->add('password', 'password');
		$builder->add('email', 'email');
		$builder->add('secondname', 'text');
		$builder->add('firstname', 'text');
		$builder->add('patronymic', 'text');
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'CC\TestBundle\Entity\User',
		));
	}
	
	public function getName()
	{
		return 'user';
	}
}