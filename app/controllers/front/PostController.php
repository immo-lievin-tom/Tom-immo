<?php 

namespace App\Controllers\Front;

use App\Controllers\Front\AppController;

class PostController extends AppController{


    public function indexAction()
    {
        
            $tabPosts = ['name' => 'undeundeu'];
            $this->render('posts.index', $tabPosts);
    }

    public function categoriesAction()
    {
        
    }

}