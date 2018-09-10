<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=1;$i < 5;$i++)
        {
            $user = new User();
            $user->setNom('Fab'.$i)
                ->setPrenom('Fabien')
                ->setEmail('fab@alti-com.fr')
                ->setPassword('123456')
                ->setdateCreate(new \DateTime())
                ->setdateLastLogin(new \DateTime());
            $manager->persist($user);
        }

        $manager->flush();
    }
}
