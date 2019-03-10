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

use App\Post;

class Comment extends Model
{
    
    public function post(){
        return $this -> belongsTo(Post::class, 'postId');
    }
}
