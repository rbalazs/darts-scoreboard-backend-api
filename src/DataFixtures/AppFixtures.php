<?php

namespace App\DataFixtures;

use App\Entity\Encounter;
use App\Entity\Player;
use Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    /**
     * @var array
     */
    private $players = [];

    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();

        $player1 = new Player();
        $player1->setName($faker->name);

        $player2 = new Player();
        $player2->setName($faker->name);

        $player3 = new Player();
        $player3->setName($faker->name);

        $player4 = new Player();
        $player4->setName($faker->name);

        $manager->persist($player1);
        $manager->persist($player2);
        $manager->persist($player3);
        $manager->persist($player4);

        $encounter1 = new Encounter();
        $encounter2 = new Encounter();

        $encounter1->addPlayer($player1)->addPlayer($player2)->addPlayer($player3)->addPlayer($player4)->setFinished(true)->setType('301');
        $encounter2->addPlayer($player1)->addPlayer($player4)->setFinished(false)->setType('501');

        $manager->persist($encounter1);
        $manager->persist($encounter2);

        $manager->flush();
    }
}