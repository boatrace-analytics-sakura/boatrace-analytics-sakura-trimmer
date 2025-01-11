# Trimmer in the Boatrace Venture Project

[![Build Status](https://github.com/BoatraceVentureProject/Trimmer/workflows/tests/badge.svg)](https://github.com/BoatraceVentureProject/Trimmer/actions?query=workflow%3Atests)
[![Coverage Status](https://coveralls.io/repos/github/BoatraceVentureProject/Trimmer/badge.svg?branch=main)](https://coveralls.io/github/BoatraceVentureProject/Trimmer?branch=main)
[![Latest Stable Version](https://poser.pugx.org/bvp/trimmer/v/stable)](https://packagist.org/packages/bvp/trimmer)
[![Latest Unstable Version](https://poser.pugx.org/bvp/trimmer/v/unstable)](https://packagist.org/packages/bvp/trimmer)
[![License](https://poser.pugx.org/bvp/trimmer/license)](https://packagist.org/packages/bvp/trimmer)

## Installation
```bash
composer require bvp/trimmer
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Boatrace\Venture\Project\Trimmer;

var_dump(Trimmer::trim(null)); // NULL
var_dump(Trimmer::trim(' 競艇 ')); // string(6) "競艇"

var_dump(Trimmer::ltrim(null)); // NULL
var_dump(Trimmer::ltrim(' 競艇 ')); // string(7) "競艇 "

var_dump(Trimmer::rtrim(null)); // NULL
var_dump(Trimmer::rtrim(' 競艇 ')); // string(7) " 競艇"
```

## License
Trimmer in the Boatrace Venture Project is open source software licensed under the [MIT license](LICENSE).
