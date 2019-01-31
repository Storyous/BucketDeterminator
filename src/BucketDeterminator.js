
module.exports = (bucketSize = 32) => {
    const determine = (objectId) => {
        if (objectId.length !== 24) {
            throw new Error('ObjectId must have length of 24 characters');
        }

        if (!/[0-9A-Fa-f]{24}/g.test(objectId)) {
            throw new Error('ObjectId must consist of hex compatible characters');
        }

        const random = objectId.substr(-6, 6);
        const number = parseInt(random, 16);

        return number % bucketSize;
    };

    return { determine };
};
