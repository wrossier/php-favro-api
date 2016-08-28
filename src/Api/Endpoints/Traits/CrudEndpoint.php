<?php

namespace seregazhuk\Favro\Api\Endpoints\Traits;

use seregazhuk\Favro\Contracts\HttpInterface;

/**
 * Class CrudEndpoint
 * @package seregazhuk\Favro\Api\Endpoints\Traits
 *
 * @method HttpInterface getHttp
 */
trait CrudEndpoint
{

    /**
     * @param array $attributes
     * @return array
     */
    public function create(array $attributes)
    {
        return $this
            ->getHttp()
            ->post(
                $this->makeRequestUrl(),
                $attributes,
                $this->getHeaders()
            );
    }

    /**
     * @param string $itemId
     * @param array $attributes
     * @return mixed
     */
    public function update($itemId, array $attributes)
    {
        return $this
            ->getHttp()
            ->put(
                $this->makeRequestUrl($itemId),
                $attributes,
                $this->getHeaders()
            );
    }

    /**
     * @param string $itemId
     * @return mixed
     */
    public function delete($itemId)
    {
        return $this
            ->getHttp()
            ->delete(
                $this->makeRequestUrl($itemId),
                [],
                $this->getHeaders()
            );
    }
}
