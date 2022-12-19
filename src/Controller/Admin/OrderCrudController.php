<?php

namespace App\Controller\Admin;

use App\Entity\Order;
use App\Entity\StaticScope\OrderStatus;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class OrderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Order::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            Field::new('id')->onlyOnIndex(),
            ChoiceField::new('status')->renderAsBadges([
                'Created' => 'success',
                'Processed' => 'warning',
                'Denied' => 'danger'
                ]
            )->setChoices([
                'Created' => 'Created',
                'Processed' => 'Processed',
                'Denied' => 'Denied',
            ]),
            MoneyField::new('totalPrice', 'Total Price')->setCurrency('EUR'),
            AssociationField::new('user'),
        ];
    }

}
