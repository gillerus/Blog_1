<?php

namespace AppBundle\Entity;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadPostData
 *
 * @author coderslab
 */
class LoadPostData implements FixtureInterface {

    public function load(ObjectManager $manager) {

        $faker = \Faker\Factory::create();

        for ($i = 0; $i <= 1000; $i++) {
            $post = new Post();
            $post->setTitle($faker->sentence(3));
            $post->setLead($faker->text(300));
            $post->setContent($faker->text(1500));
            $post->setCreatedAt($faker->dateTimeThisMonth);

            $manager->persist($post);
        }
        $manager->flush();
    }

}
