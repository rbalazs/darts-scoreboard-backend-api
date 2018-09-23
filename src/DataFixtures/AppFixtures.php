<?php

namespace App\DataFixtures;

use App\Entity\Player;
use Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i < 12; $i++) {
            $player = new Player();
            $player->setName($faker->name);
            $manager->persist($player);
        }

        $manager->flush();
    }
}