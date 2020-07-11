# Ukranian Bank Bin Database

[![Latest Stable Version](https://poser.pugx.org/ua-opendata/bank-bin/version)](https://packagist.org/packages/ua-opendata/bank-bin)
[![Total Downloads](https://poser.pugx.org/ua-opendata/bank-bin/downloads)](https://packagist.org/packages/ua-opendata/bank-bin)
[![Build Status](https://travis-ci.org/ua-opendata/bank-bin.svg?branch=master)](https://travis-ci.org/ua-opendata/bank-bin)
[![codecov](https://codecov.io/gh/ua-opendata/bank-bin/branch/master/graph/badge.svg)](https://codecov.io/gh/ua-opendata/bank-bin)

- [JSON Database](docs/db.json)
- [Online JSON Database](https://ua-opendata.github.io/bank-bin/db.json)

## Installation
Using composer:
```bash
composer require ua-opendata/bank-bin:^1.0
```

## Usage

```php
<?php declare(strict_types=1);

use UaOpenData\BankRepository;

$bank = BankRepository::instance()->bank(537541); // Monobank
```

## License
[MIT](./LICENSE)