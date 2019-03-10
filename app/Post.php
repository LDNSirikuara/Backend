<?php
/**
 * Application
 *
 * @author       Duminda Namal
 * @version      $Id: v1.0.0 2019-March-10 Exp $;
 * @copyright    Copyright &copy; NextDevelopers.
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Comment;

class Post extends Model
{
    public function comments(){
        return $this ->hasMany(Comment::class, 'postId'); //pass the foringn key here
    }
}
