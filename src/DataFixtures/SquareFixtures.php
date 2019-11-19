<?php

namespace App\DataFixtures;

use App\Entity\Squares;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SquareFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $json_a = json_decode(file_get_contents(__DIR__ . '/../../assets/json/arron2.json'),true);

        foreach ($json_a as $value){
            $square = new Squares();
            $square
                ->setSquare($value['square'])
                ->setPolygon($value['polygon'])
                ->setCenter($value['center'])
                ->setZoom($value['zoom'])
            ;
            $manager->persist($square);
        }

        $manager->flush();
    }
}
