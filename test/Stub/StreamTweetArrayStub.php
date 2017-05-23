<?php

namespace Mineur\TwitterStreamApiTest\Stub;

use Faker\Factory;

/**
 * Class StreamTweetStub
 * This Stub returns an array representing a tweet
 * from the twitter streaming feed
 *
 * @package Mineur\TwitterStreamApiTest\Stub
 */
class StreamTweetArrayStub
{
    public static function create(): array
    {
        $factory = Factory::create();

        return [
            'text'           => $factory->text(),
            'lang'           => $factory->languageCode(),
            'created_at'     => $factory->time('D M d H:m:s Z Y', 'now'),
            'timestamp_ms'   => $factory->unixTime(),
            'geo'            => $factory->shuffleArray(),
            'coordinates'    => $factory->shuffleArray(),
            'place'          => $factory->shuffleArray(),
            'retweet_count'  => $factory->numberBetween(0, 100),
            'favorite_count' => $factory->numberBetween(0, 100),
            'user'           => $factory->shuffleArray()
        ];
    }
}