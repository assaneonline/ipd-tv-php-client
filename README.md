Installation options :

1. Require the [composer](https://getcomposer.org/) package :

```sh
composer require assaneonline/ipdtv-php-client
````

2. Clone this repository from GitHub :

```sh
git clone https://github.com/assaneonline/ipd-tv-php-client
```

then include the autoload in your PHP project :

```php
require_once(path_to_this/vendor/autoload.php)
```

Here is an example of how to send data to IPD TV :

```php
use IpdTv\Client;

$ipdTvClient = new Client([
    'application_id' => '<REPLACE_WITH_YOUR_APPLICATION_ID>',
    'application_secret' => '<REPLACE_WITH_YOUR_APPLICATION_SECRET>'
]);

$response = $ipdTvClient->pushData('data_source-13939', [
    "data:1" => 'Widget title', // Widget title
    "data:2" => 'account-multiple-outline', // Widget icon
    "data:3" => rand(1000, 999), // Widget numeric value
    "data:4" => "voyageurs enregistrés", // Widget subtitle
]);
```