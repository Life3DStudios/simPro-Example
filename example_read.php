<?php
require_once 'library/autoload.php';
require_once 'client.php';

// Our sandbox direct access credentials
//$host = 'sandbox.simpro.co';
//$consumer = 'life3d-studios';
//$consumer_secret = 'dUNZUsiTZg1enuO2il9kHeuar-IL1uQ5H66FC1qG0VeSu9s1MquSY5YrMxavq_KUnNUEqoi56e4ujcxC6WDslA';

// Live system
$host = 'mcse.simprocloud.com';
$consumer = 'life3d-directaccess-c';
$consumer_secret = 'P67zVIui4qMM6mS10bpZ_ArJ-sdx3DmhrqPJJrN9Td91qvyKEJVdz_QM1kWKvcFOkfQ8bMFiRpJDUjntevxe0A';

$client = new SimPro\Api\Client($host, $consumer, $consumer_secret);


// Sandbox company id
// $company_id = 29
$company_id = 0;
$company = $client->CompanyRetrieve($company_id);


// Outputing the client object for verification
echo '<pre>';
var_dump($client);
echo '</pre>';

// Viewing the company information
echo '<pre>';
var_dump($company);
echo '</pre>';