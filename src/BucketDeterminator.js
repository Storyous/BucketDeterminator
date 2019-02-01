
module.exports = (bucketSize = 32) => {
    const determine = (objectId) => {
        if (!/^[0-9a-f]{24}$/g.test(objectId)) {
            throw new Error('ObjectId must consist of hex compatible characters and have length of 24 characters');
        }

        const random = objectId.substr(-6, 6);
        const number = parseInt(random, 16);

        return number % bucketSize;
    };

    return { determine };
};
