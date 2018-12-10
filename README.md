# BucketDeterminator

This is small helper library to determine bucket allegiance based on MongoDB/ObjectId.

## Usage
```php
    use BucketDeterminator\BucketDeterminator;

    $bucketDeterminator = new BucketDeterminator(32);
    echo $bucketDeterminator->determine('5576a1a886157828c11bac4f'); // 15
```

## Run tests
```
php vendor/bin/tester --coverage ./coverage.html --coverage-src ./src -c /path/to/php-ini/php.ini tests
```