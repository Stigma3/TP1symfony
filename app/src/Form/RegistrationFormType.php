<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Validator\Constraints\Regex;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', textType:: class,[ 'attr' => ['class' => 'space'],])
            ->add('pseudo', textType:: class,[ 'attr' => ['class' => 'space'],])
            ->add('name', TextType:: class,[ 'attr' => ['class' => 'space'],])
            ->add('surname', TextType:: class,[ 'attr' => ['class' => 'space'],])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', RepeatedType::class, [
                
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'options'=> ['attr'=> ['class'=>'exempleNom' ]],
                'type'=> PasswordType::class,
                'first_options'=>array('label'=>'label.password'),
                'second_options'=>array('label'=>'label.confirm_password'),
                'required'=>true,
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password', 'class' => 'space'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 4,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 50,

                    ]),
                    new Regex(
                        [
                            'pattern' => '/[a-z]/',
                            'message' => 'there is no letter.../',

                        ]
                    ),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
