<?php
    $host = 'https://api.sandbox.quadx.xyz/v2';

    $api_key = '222668605c1cd137c70';
    $secret = 'bca152c083a521000feb50c58939e95d';
    $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIyMjI2Njg2MDVjMWNkMTM3YzcwIiwidXVpZCI6IkJLWHZQd3h6SFROWWpSSHNEeFNMcmxzWHh4ZjEiLCJpYXQiOjE2MTY2NTIyMzV9.ZlI982kfwLIXsk_jB2J6T01MkgmNqjbwXrjKZEDqmWY';
    
    // change this when updating order
    $tracking_no = '3774-8421-HMNP';

    // status
    $newStatus = 'for-pickup';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $host . '/orders/'. $tracking_no . '/' . $newStatus);
    curl_setopt($curl, CURLOPT_PUT, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $token,
    ));

    curl_exec($curl);
    curl_close($curl);

?>

