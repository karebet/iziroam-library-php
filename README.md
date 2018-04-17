# iziroam-library-php
iziroam library php [API for travel's akun](https://iziroam.com/api-document/)

### Example
```php
require_once('Iziroam.php');
Iziroam_Config::$secretKey ="SECRETKEY";
Iziroam_Config::$mID = "MID";

$result = Iziroam_Method::my_profile();
```
