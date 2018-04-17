# iziroam-library-php
iziroam library php [API for travel's akun](https://iziroam.com/api-document/)
![alt text](https://iziroam.com/asset/img/logo-for-midtrans.png)

### Example
```php
require_once('Iziroam.php');
Iziroam_Config::$secretKey ="SECRETKEY";
Iziroam_Config::$mID = "MID";

//Get Info my profile
$result = Iziroam_Method::my_profile();

//Check stock device available
$parameter= array(
    'date_delivery'=>'2018-04-17 22:00:00',
    'date_return'=>'2018-04-20 00:00:00',
    'date_startrent'=>'2018-04-18 00:00:00',
    'date_endrent'=>'2018-04-19 00:00:00',
    'pid'=>89,
    'qty'=>1
);
$result = Iziroam_Method::check_stock($parameter);
```
