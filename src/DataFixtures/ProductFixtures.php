<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ProductFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setTitle('Samsung UE43AU7100K 43" 4K LED LCD Smart TV');
        $product->setSlug('Samsung-UE43AU7100K-43');
        $product->setDescription('Samsung UE43AU7100K 43" 4K LED LCD Smart TV');
        $product->setCategory($this->getReference('category_1'));
        $product->setPrice(1099.99);
        $product->setQuantity(123);
        $manager->persist($product);

        $manager->flush();

    }
}
