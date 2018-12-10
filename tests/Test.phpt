<?php

use BucketDeterminator\BucketDeterminator;
use Tester\Assert;
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/BucketDeterminator.php';

Tester\Environment::setup();


function testSuccess()
{
    $objId1 = '5576a1a886157828c11bac4f';
    $objId2 = '55f664e8e72943a8f38dfc7a';
    $objId3 = '59e487e137729704bca06c98';

    $bucketDeterminator = new BucketDeterminator(32);

    $res1 = $bucketDeterminator->determine($objId1);
    $res2 = $bucketDeterminator->determine($objId2);
    $res3 = $bucketDeterminator->determine($objId3);

    Assert::equal($res1, 15);
    Assert::equal($res2, 26);
    Assert::equal($res3, 24);
}


function testInvalidObjectId()
{
    $shortObjIdFailed = false;
    $noHexObjIdFailed = false;

    $shortObjId = '59e487e137729704bca06c9';
    $noHexObjId = '59e487e137729704bca06c9x';

    $bucketDeterminator = new BucketDeterminator();

    try {
        $bucketDeterminator->determine($shortObjId);
    } catch (Exception $exception) {
        $shortObjIdFailed = true;
    }

    try {
        $bucketDeterminator->determine($noHexObjId);
    } catch (Exception $exception) {
        $noHexObjIdFailed = true;
    }

    Assert::true($shortObjIdFailed);
    Assert::true($noHexObjIdFailed);
}

testSuccess();
testInvalidObjectId();
