<?php

namespace Mineur\TwitterStreamApi\Http;

interface StreamClient
{
    /**
     * Post request
     *
     * @param string $endpoint
     * @param array $options
     * @return mixed
     */
    public function post(
        string $endpoint,
        array $options
    );

    /**
     * Read stream
     */
    public function read(): array;
}