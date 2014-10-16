<?php
require_once 'library/autoload.php';
require_once 'client.php';

//
//$host = 'sandbox.simpro.co';
//$consumer = 'life3d-studios';
//$consumer_secret = 'dUNZUsiTZg1enuO2il9kHeuar-IL1uQ5H66FC1qG0VeSu9s1MquSY5YrMxavq_KUnNUEqoi56e4ujcxC6WDslA';
//

/*
 * $settings['oAuth']['host'] = 'https://mcse.simprocloud.com/api/';
$settings['oAuth']['consumer'] = 'life3d-directaccess-c';
$settings['oAuth']['consumer_secret'] ='P67zVIui4qMM6mS10bpZ_ArJ-sdx3DmhrqPJJrN9Td91qvyKEJVdz_QM1kWKvcFOkfQ8bMFiRpJDUjntevxe0A';

 */

$host = 'mcse.simprocloud.com';
$consumer = 'life3d-directaccess-c';
$consumer_secret = 'P67zVIui4qMM6mS10bpZ_ArJ-sdx3DmhrqPJJrN9Td91qvyKEJVdz_QM1kWKvcFOkfQ8bMFiRpJDUjntevxe0A';


$client = new SimPro\Api\Client($host, $consumer, $consumer_secret);

echo '<pre>';
var_dump($client);
echo '</pre>';

$company = $client->CompanyRetrieve(0);


echo '<pre>';
var_dump($company);
echo '</pre>';