<?php
include 'ctwitter_stream2.php';

$bernie = new ctwitter_stream();
//consumer_key, consumer_secret, access_token, access_secret
//$bernie->login('N6FxSdrmn0sgndHoei5q5xU7W', 'eeIG8b3FKIgwnumwNECP6FGH1eOdl08CwEtnuRYbFeYrQ0He1N', '713575682123689984-hVdTyi6X6PnlyHKDVovalf9gwk9icrv', 'Stg7sRpQdEeWWaAJScxdnQ6WtEyh7CuYJO4pSZmz3kvZV');
//$bernie->login('jsAD3bau9gluHLqCZJsXJqpFj', 'hVyLQMlUCG6TQOIyE1HUrB7X3dAuKCg9XAlrWG10Xggez9xAPF', '1906785391-Bny1U8Z1l23owARJBurOFBIIzWZF4ZoXUqjXd22', 'osR2LawNxTZi5xfWacSqKlE6l07o8Xq8ozYpzbt6z1kOm');
//$bernie->login('M4ZYU4iEYdwYu6lYxxXpNyoTU', 'ACcm8u0pRzo0QjJI6vuzBKYXaQR2H6TJguEV8GeCSwISJhei2U', '713906058536816640-qPGMWulobk2hsQHewDqMWTrDplVT6GX', 'f6VXuGS8W5PSZhvh8eHDJDWvv5UouPdv6CUxfPXLum4dP');
$bernie->login('yyoOGDcsOpku99v4lg2BWm34P', 'vfuesnrhxnLH7dD5K1UoYucNhwhCXCCpxrYebE4ZF69H5snmyF', '713925728983769089-39Psc0GbyskeaN2Nw4Vh1sIInwrAdpi', 'pt4JrcPf1C9sch9V4ak8nSA759hFJvP4QAb2WuPtwD3vT');

$bernie->start(array('bernie', 'sanders', 'berniesanders', 'hillary', 'clinton', 'hillaryclinton')); 

?>