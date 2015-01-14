<?php

namespace Model;

use Gateway\PostsGateway;
use Gateway\UsersGateway;

class PostsModel
{
    private $usersGateway;
    private $postsGateway;

    /**
     * super model to get all posts
     *
     * @param UsersGateway $usersGateway
     * @param PostsGateway $postsGateway
     */
    public function __construct(UsersGateway $usersGateway, PostsGateway $postsGateway)
    {
        $this->usersGateway = $usersGateway;
        $this->postsGateway = $postsGateway;
    }

    /**
     * combine 2 arrays to avoid join statements
     * @return array $data
     */
    public function getAllPostsWithAuthors()
    {
        $posts = $this->postsGateway->getAllPostsByUserIds();
        $users = $this->usersGateway->getAllUsers();

        $data = $this->array_merge_recursive_new($posts, $users);

        return $data;
    }


    /**
     * I dont give a fuck how it works, just copy-paste from php.net
     * its used because original array_merge_recursive overrides integer keys
     * @return mixed
     */
    private function array_merge_recursive_new() {
    $arrays = func_get_args();
    $base = array_shift($arrays);

    foreach ($arrays as $array) {
        reset($base); //important
        while (list($key, $value) = @each($array)) {
            if (is_array($value) && @is_array($base[$key])) {
                $base[$key] = $this->array_merge_recursive_new($base[$key], $value);
            } else {
                $base[$key] = $value;
            }
        }
    }

    return $base;
    }
}
