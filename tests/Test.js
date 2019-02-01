const assert = require('assert');
const bucketDeterminator = require('../src/BucketDeterminator');


function testSuccess()
{
    objId1 = '5576a1a886157828c11bac4f';
    objId2 = '55f664e8e72943a8f38dfc7a';
    objId3 = '59e487e137729704bca06c98';

    const determinator = bucketDeterminator();

    res1 = determinator.determine(objId1);
    res2 = determinator.determine(objId2);
    res3 = determinator.determine(objId3);

    assert.equal(res1, 15);
    assert.equal(res2, 26);
    assert.equal(res3, 24);
}


function testInvalidObjectId()
{
    shortObjIdFailed = false;
    noHexObjIdFailed = false;

    shortObjId = '59e487e137729704bca06c9';
    noHexObjId = '59e487e137729704bca06c9x';

    const determinator = bucketDeterminator();

    try {
        determinator.determine(shortObjId);
    } catch (exception) {
        shortObjIdFailed = true;
    }

    try {
        determinator.determine(noHexObjId);
    } catch (exception) {
        noHexObjIdFailed = true;
    }

    assert(shortObjIdFailed);
    assert(noHexObjIdFailed);
}

testSuccess();
testInvalidObjectId();
