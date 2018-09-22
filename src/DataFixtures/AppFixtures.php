<?php

namespace App\DataFixtures;

use App\Entity\Score;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $score1 = new Score();
        $score1->setField('d20');
        $score1->setValue(40);

        $score2 = new Score();
        $score2->setField('t20');
        $score2->setValue(60);

        $score3 = new Score();
        $score3->setField('db');
        $score3->setValue(50);

        $score4 = new Score();
        $score4->setField('b');
        $score4->setValue(25);

        $score5 = new Score();
        $score5->setField('20');
        $score5->setValue(20);

        $score6 = new Score();
        $score6->setField('13');
        $score6->setValue(14);

        $manager->persist($score1);
        $manager->persist($score2);
        $manager->persist($score3);
        $manager->persist($score4);
        $manager->persist($score5);
        $manager->persist($score6);

        $manager->flush();
    }
}