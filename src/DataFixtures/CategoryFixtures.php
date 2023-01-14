<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setTitle('Electronic');
        $category->setSlug('electronic');
        $manager->persist($category);

        $category1 = new Category();
        $category1->setTitle('fashion');
        $category1->setSlug('fashion');
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setTitle('Sports & Leisure');
        $category2->setSlug('sports-leisure');
        $manager->persist($category2);

        $manager->flush();

        $this->addReference('category_1', $category);
    }
}
