![](http://oi68.tinypic.com/ffcm4x.jpg)

# BucketDeterminator

This is small helper library to determine bucket allegiance based on MongoDB/ObjectId.

## Usage
```php
    use BucketDeterminator\BucketDeterminator;

    $bucketDeterminator = new BucketDeterminator(32);
    echo $bucketDeterminator->determine('5576a1a886157828c11bac4f'); // 15
```

```javascript
    const bucketDeterminator = require('../src/BucketDeterminator');
    const determinator = bucketDeterminator();
    return determinator.determine('5576a1a886157828c11bac4f'); //15

```

## Run tests
```
php vendor/bin/tester --coverage ./coverage.html --coverage-src ./src -c /path/to/php-ini/php.ini tests
```

```shell
npm run test
```

## License
MIT License

Copyright (c) 2018 storyous.com s.r.o.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
