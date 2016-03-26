<?php
include 'ctwitter_stream.php';

$t = new ctwitter_stream();

//consumer_key, consumer_secret, access_token, access_secret
$t->login('N6FxSdrmn0sgndHoei5q5xU7W', 'eeIG8b3FKIgwnumwNECP6FGH1eOdl08CwEtnuRYbFeYrQ0He1N', '713575682123689984-hVdTyi6X6PnlyHKDVovalf9gwk9icrv', 'Stg7sRpQdEeWWaAJScxdnQ6WtEyh7CuYJO4pSZmz3kvZV');

$t->start(array('bernie', 'sanders', 'berniesanders')); 

?>