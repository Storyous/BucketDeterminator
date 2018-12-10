<?php

namespace BucketDeterminator;


class BucketDeterminator
{

    /**
     * Specified size of a bucket.
     * @var integer
     */
    private $bucketSize;

    /**
     * @param integer $bucketSize
     */
    function __construct($bucketSize = 32)
    {
        $this->bucketSize = $bucketSize;
    }

    /**
     * @param string $objectId
     * @return integer
     * @throws \InvalidArgumentException
     */
    function determine($objectId)
    {
        if (strlen($objectId) !== 24)
        {
            throw new \InvalidArgumentException('ObjectId must have length of 24 characters');
        }

        if (!ctype_xdigit($objectId))
        {
            throw new \InvalidArgumentException('ObjectId must consist of hex compatible characters');
        }

        $random = substr($objectId, -6);
        $number = intval($random, 16);

        return $number % $this->bucketSize;
    }
}
