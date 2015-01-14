<?php

namespace Controller;

use Gateway\PostsGateway;
use Gateway\UsersGateway;
use Model\PostsModel;

class MainController
{
    public function indexAction()
    {
        //it should be taken from DI container
        $postsModel = new PostsModel(new UsersGateway(), new PostsGateway());

        $posts = $postsModel->getAllPostsWithAuthors();

        var_dump($posts);
    }
}
