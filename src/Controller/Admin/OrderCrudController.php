<?php

namespace App\Controller\Admin;

use App\Entity\Orders;
use App\Entity\StaticScope\OrderStatus;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;

class OrderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Orders::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            Field::new('id')->onlyOnIndex(),
            ChoiceField::new('status')
                ->setChoices(OrderStatus::getAsArray()),
            MoneyField::new('totalPrice', 'Total Price')
                ->setCurrency('EUR'),
            AssociationField::new('user'),
            AssociationField::new('orderProduct'),
        ];
    }

}
