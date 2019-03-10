<?php
/**
 * Application
 *
 * @author       Duminda Namal
 * @version      $Id: v1.0.0 2019-March-10 Exp $;
 * @copyright    Copyright &copy; NextDevelopers.
 */


use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'postTitle' => $faker -> word,
        'postContent' => $faker -> paragraph,
        'postImage' => $faker -> image($dir = '/home/namal/Documents/WorkPlace/Programming/WebApp/img', $width = 640, $height = 480),
        'postAuthor' => $faker -> firstNameMale
    ];
});
