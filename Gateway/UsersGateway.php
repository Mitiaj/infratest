<?php

namespace Gateway;

class UsersGateway
{
    /**
     * ex table
     * id, user_name, user_email
     */
    public function __contruct() {}

    /**
     * sql query should go here
     * @return array users swapped by id
     */
    public function getAllUsers()
    {
        return [
            123 => [
                'id' => 123,
                'user_name' => 'Michal',
                'email' => 'michal@cvbankas.lt'
            ],
            213 => [
                'id' => 213,
                'user_name' => 'Roman',
                'email' => 'roman@cvbankas.lt'
            ],
            312 => [
                'id' =>312,
                'user_name' => 'jonas',
                'email' => 'jonas@cvbankas.lt'
            ],

        ];
    }
}
