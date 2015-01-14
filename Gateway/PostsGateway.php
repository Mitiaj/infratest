<?php

namespace Gateway;

class PostsGateway
{
    /**
     * table structure
     * id, user_id, subject, body
     */
    public function __construct() {}

    /**
     * query with in statement
     *
     * @return array $posts swapped by user Id
     */
    public function getAllPostsByUserIds()
    {
        return [
            123 => [
                0 => [
                    'id' => 12,
                    'user_id' => 123,
                    'subject' => 'test',
                    'body' => 'super body'
                ],
                1 => [
                    'id' => 13,
                    'user_id' => 123,
                    'subject' => 'test',
                    'body' => 'super body'
                ],
                2 => [
                    'id' => 14,
                    'user_id' => 123,
                    'subject' => 'test',
                    'body' => 'super body'
                ],
            ],
            213 => [
                0 => [
                    'id' => 2,
                    'user_id' => 213,
                    'subject' => 'test',
                    'body' => 'super body'
                ],
            ],
            312 => [
                0 => [
                    'id' => 5,
                    'user_id' => 312,
                    'subject' => 'test',
                    'body' => 'super body'
                ],
                1 => [
                    'id' => 6,
                    'user_id' => 312,
                    'subject' => 'test',
                    'body' => 'super body'
                ],
                2 => [
                    'id' => 7,
                    'user_id' => 312,
                    'subject' => 'test',
                    'body' => 'super body'
                ],
            ],
        ];
    }
}
