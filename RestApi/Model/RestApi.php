<?php

namespace Vivek\RestApi\Model;

/**
 * Marketplace Product Model.
 *
 * @method \Webkul\Marketplace\Model\ResourceModel\Product _getResource()
 * @method \Webkul\Marketplace\Model\ResourceModel\Product getResource()
 */
class RestApi  implements \Vivek\RestApi\Api\RestApiInterface
{
    private $posts = [
        [
            "id" => 1,
            "title" => "My Post 1",
            "categories" => ["my posts", "custom posts"],
            "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting ind"
        ],
        [
            "id" => 2,
            "title" => "My Post 2",
            "categories" => ["my posts", "custom post2"],
            "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting ind"

        ]
    ];
    public function getAllPosts(): array
    {
        return $this->posts;
    }
}
