<?php
declare(strict_types=1);

require_once __DIR__ . '/FilmReview.php';
require_once __DIR__ . '/Comedy.php';
require_once __DIR__ . '/Horror.php';

try {
    $grownUps = new Comedy("Grown Ups", "Denis Dugan", 2010);
    $scenes = [
        "Meeting of old friends",
        "Bad Basketball Game",
         "Adventures at a party at a basketball player's house"
    ];
    $comedyScenes = $grownUps->comedyScenes($scenes);
    $favoriteJoke = $grownUps->favoriteJoke("If you remember the 60s, you weren't there!");
    $ratingGrownUps = $grownUps->calcRating([5, 4, 1.6, 3.8]);
    $recommendation =  $grownUps->isRecommend($ratingGrownUps);
    print_r($comedyScenes);
    print_r($favoriteJoke);
    print_r("Rating is $ratingGrownUps. $recommendation");

    $theMist = new Horror("The Mist", "Frank Darabont", 2007);
    $culminationTime = $theMist->culmination("1:45:30");
    $monster = $theMist->monsterMeeting("Mist");
    $ratingTheMist = $theMist->calcRating([1.9, 2, 4.6, 2.8]);
    $recommendation =  $theMist->isRecommend($ratingTheMist);
    print_r($culminationTime);
    print_r($monster);
    print_r("Rating is $ratingTheMist. $recommendation");
} catch (Exception $exception) {
//    echo $exception->getMessage() . PHP_EOL;
} finally {
//    echo 'Finally!' . PHP_EOL;
}
