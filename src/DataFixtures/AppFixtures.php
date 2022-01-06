<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $categTvShows = new Category();
        $categTvShows->setName('TV Shows');
        $categMovies = new Category();
        $categMovies->setName('Movies');
        $categOriginals = new Category();
        $categOriginals->setName('Originals');

        $movie1 = new Movie();
        $movie1->setCategory($categTvShows);
        $movie1->setTitle('13 Reasons Why');
        $movie1->setDescription('Lorem ipsum');
        $movie1->setYear(2020);
        $movie1->setImg('https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p7.PNG?raw=true');
        $movie1->setLikes(4);
        $movie1->setLink("https://www.youtube.com/embed/QkT-HIMSrRk");

        $movie2 = new Movie();
        $movie2->setCategory($categMovies);
        $movie2->setTitle('Guardians Of The Galaxy');
        $movie2->setDescription('Lorem ipsum');
        $movie2->setYear(2018);
        $movie2->setImg('https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m3.PNG?raw=true');
        $movie2->setLikes(0);
        $movie2->setLink("https://www.youtube.com/embed/ry19UYQoAro");

        $movie3 = new Movie();
        $movie3->setCategory($categOriginals);
        $movie3->setTitle('Rick & Morty');
        $movie3->setDescription('Lorem ipsum');
        $movie3->setYear(2009);
        $movie3->setImg('https://assets.change.org/photos/6/or/bi/UeorbIYnzrPxsSP-800x450-noPad.jpg?1538805188');
        $movie3->setLikes(0);
        $movie3->setLink("https://www.youtube.com/embed/hl1U0bxTHbY");

        $movie4 = new Movie();
        $movie4->setCategory($categOriginals);
        $movie4->setTitle('New Girl');
        $movie4->setDescription('Lorem ipsum');
        $movie4->setYear(2020);
        $movie4->setImg('https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv5.PNG?raw=true');
        $movie4->setLikes(0);
        $movie4->setLink("https://www.youtube.com/embed/h8Hfph2wXIY");

        $movie5 = new Movie();
        $movie5->setCategory($categOriginals);
        $movie5->setTitle('Queer Eye');
        $movie5->setDescription('Lorem ipsum');
        $movie5->setYear(2017);
        $movie5->setImg('https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv10.PNG?raw=true');
        $movie5->setLikes(1);
        $movie5->setLink("https://www.youtube.com/embed/GZMrivD2Aok");

        $movie6 = new Movie();
        $movie6->setCategory($categMovies);
        $movie6->setTitle('Brain On Fire');
        $movie6->setDescription('Lorem ipsum');
        $movie6->setYear(2018);
        $movie6->setImg('https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o4.PNG?raw=true');
        $movie6->setLikes(0);
        $movie6->setLink('https://www.youtube.com/embed/VZn6G0M9wNs');

        $movie7 = new Movie();
        $movie7->setCategory($categOriginals);
        $movie7->setTitle('Arrested Development');
        $movie7->setDescription('Lorem ipsum');
        $movie7->setYear(2020);
        $movie7->setImg('https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o6.PNG?raw=true');
        $movie7->setLikes(0);
        $movie7->setLink('https://www.youtube.com/embed/vzVhPCMAxWQ');

        $movie8 = new Movie();
        $movie8->setCategory($categTvShows);
        $movie8->setTitle('Cooking');
        $movie8->setDescription('Lorem ipsum');
        $movie8->setYear(2019);
        $movie8->setImg('https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv9.PNG?raw=true');
        $movie8->setLikes(8);
        $movie8->setLink('https://www.youtube.com/embed/epMAq5WYJk4');

        $movie9 = new Movie();
        $movie9->setCategory($categTvShows);
        $movie9->setTitle('Stranger Things');
        $movie9->setDescription('Lorem ipsum');
        $movie9->setYear(2018);
        $movie9->setImg('https://cdn.static01.nicematin.com/media/npo/mobile_1440w/2020/04/raw.jpg');
        $movie9->setLikes(10);
        $movie9->setLink('https://www.youtube.com/embed/XcnHOQ-cHa0');

        $movie10 = new Movie();
        $movie10->setCategory($categTvShows);
        $movie10->setTitle('Killing Eve');
        $movie10->setDescription('Lorem ipsum');
        $movie10->setYear(2018);
        $movie10->setImg('https://lepetitjournal.com/sites/default/files/styles/main_article/public/2020-04/Capture%20d%E2%80%99e%CC%81cran%202020-04-24%20a%CC%80%2018.52.00.png?itok=Rpq6A79r');
        $movie10->setLikes(15);
        $movie10->setLink('https://www.youtube.com/embed/Kk0PyD-XNZA');

        $manager->persist($categTvShows);
        $manager->persist($categMovies);
        $manager->persist($categOriginals);

        $manager->persist($movie1);
        $manager->persist($movie2);
        $manager->persist($movie3);
        $manager->persist($movie4);
        $manager->persist($movie4);
        $manager->persist($movie5);
        $manager->persist($movie6);
        $manager->persist($movie7);
        $manager->persist($movie8);
        $manager->persist($movie9);
        $manager->persist($movie10);
        $manager->flush();

        $manager->flush();
    }
}
