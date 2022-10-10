<?php

namespace Vivek\RestApi\Api;

interface RestApiInterface
{
    /**
     * get test Api data.
     *
     * @api
     *
     *s
     * @return \Vivek\Api\Api\Data\TestApiInterface
     */
    public function getAllPosts(): array;
}
