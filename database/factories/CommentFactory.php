<?php
/**
 * Application
 *
 * @author       Duminda Namal
 * @version      $Id: v1.0.0 2019-March-10 Exp $;
 * @copyright    Copyright &copy; NextDevelopers.
 */

use Faker\Generator as Faker;

use App\Post;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'postId' => function(){
            return Post::all() -> random();
        },
        'commentAuthor' => $faker -> firstNameMale, 
        'comment' => $faker -> paragraph
    ];
});
