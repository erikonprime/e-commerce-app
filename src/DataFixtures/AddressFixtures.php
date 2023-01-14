<?php

namespace App\DataFixtures;

use App\Entity\Address;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AddressFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
//        $address = new Address();
//        $address->setCity('Riga');
//        $address->setCountry('Latvia');
//        $address->setPhone('+37122222222');
//        $address->setPostalCode('LV-1082');
//        $address->setStreet('Main street, 34-45');
//
//        $manager->persist($address);
//        $manager->flush();
//
//        $this->addReference('address_1', $address);
    }
}
