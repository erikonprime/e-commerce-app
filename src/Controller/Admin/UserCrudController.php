<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Factory\UserFactory;
use App\Repository\Interface\UserRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserCrudController extends AbstractCrudController
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository,
        private readonly UserFactory $userFactory
    )
    {
    }

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
            TextField::new('password')
                ->setFormType(PasswordType::class)
                ->onlyOnForms()
        ];
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if ($entityInstance instanceof User) {
            $user = $this->userFactory->create(
                $entityInstance->getEmail(),
                $entityInstance->getPassword(),
                $entityInstance->getRoles()
            );

            $this->userRepository->add($user);
        }
    }

    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if ($entityInstance instanceof User) {
            $user = $this->userFactory->create(
                $entityInstance->getEmail(),
                $entityInstance->getPassword(),
                $entityInstance->getRoles()
            );
            $entityInstance->setPassword($user->getPassword());
            $this->userRepository->add($entityInstance);
        }
    }

}
