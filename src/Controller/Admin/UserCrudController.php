<?php

namespace App\Controller\Admin;

use App\Entity\Address;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            EmailField::new('email'),
            ArrayField::new('roles'),
            BooleanField::new('isActive'),
            TextField::new('password')->setFormType(PasswordType::class)->onlyOnDetail(),
          //  AssociationField::new('address')->setFieldFqcn(Address::class)
        ];
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if ($entityInstance instanceof User) {
            $user = $entityInstance;
            $encodedPassword = $this->encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($encodedPassword);

            $entityManager->persist($user);
            $entityManager->flush();
        }
    }
//
//    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
//    {
//        if ($entityInstance instanceof User) {
//            $user = $entityInstance;
//            if (null !== $user->getPlainPassword()) {
//                $encodedPassword = $this->encoder->encodePassword($user, $user->getPlainPassword());
//                $user->setPassword($encodedPassword);
//            }
//            $entityManager->persist($user);
//            $entityManager->flush();
//        }
//    }

}
