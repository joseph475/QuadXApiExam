<?php
    $host = 'https://api.sandbox.quadx.xyz/v2';

    $api_key = '222668605c1cd137c70';
    $secret = 'bca152c083a521000feb50c58939e95d';
    $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIyMjI2Njg2MDVjMWNkMTM3YzcwIiwidXVpZCI6IkJLWHZQd3h6SFROWWpSSHNEeFNMcmxzWHh4ZjEiLCJpYXQiOjE2MTY2NTIyMzV9.ZlI982kfwLIXsk_jB2J6T01MkgmNqjbwXrjKZEDqmWY';

    $data = '{
        "currency": "PHP",
        "total": "3153.25",
        "payment_method": "cod",
        "status": "pending",
        "payment_provider": "lbcx",
        "shipment": "big-pouch",
        "buyer_name": "Test buyer",
        "buyer_id": "12345",
        "own_print": true,
        "pickup_total": 200.00,
        "metadata": {"key_1":"value_1","key_2":"value_2"},
        "delivery_address": {
          "name": "Test buyer",
          "company": "Maxis",
          "phone_number": "6358972",
          "mobile_number": "+63907117421",
          "line_1": "3F U311 Bldg. C",
          "line_2": "Jade St.",
          "district": "San Fernando",
          "city": "Mangaldan",
          "state": "Pangasinan",
          "postal_code": "4233",
          "country": "PH",
          "remarks": "Optional notes / remarks go here."
        },
        "return_address": {
          "name": "JJ. ABC",
          "company": "Maxis",
          "phone_number": "6358972",
          "mobile_number": "+63907117421",
          "line_1": "3F U311 Bldg. C",
          "line_2": "Jade St.",
          "city": "Baguio City",
          "state": "Benguet",
          "postal_code": "1226",
          "country": "PH",
          "remarks": "Optional notes / remarks go here."
        },
        "pickup_address": {
          "name": "JJJ. Doe",
          "company": "Maxis",
          "phone_number": "6358972",
          "mobile_number": "+63907117421",
          "line_1": "3F U311 Bldg. C",
          "line_2": "Jade St.",
          "city": "Baguio City",
          "state": "Benguet",
          "postal_code": "1226",
          "country": "PH",
          "remarks": "Optional notes / remarks go here."
        },
        "preferred_pickup_time": "morning",
        "preferred_delivery_time": "3pm - 5pm",
        "reference_id": "'. time() . rand(10*45, 100*98) . '",
        "email": "johndoe@email.com",
        "contact_number": "+639172274819",
        "items": [
          {
            "type": "product",
            "description": "Red Shirt",
            "amount": 1250,
            "quantity": 1,
            "metadata": {"size":"medium","color":"red"}
          },
          {
            "type": "product",
            "description": "Blue Shirt",
            "amount": 700,
            "quantity": 2,
            "metadata": {"size":"medium","color":"blue"}
          },
          {
            "type": "tax",
            "description": "Tax",
            "amount": 132.50
          },
          {
            "type": "shipping",
            "description": "Expedited Shipping",
            "amount": 150
          },
          {
            "type": "fee",
            "description": "Handling Fee",
            "amount": 20
          },
          {
            "type": "fee",
            "description": "Gift Wrapping Fee",
            "amount": 50.75
          },
          {
            "type": "insurance",
            "description": "Insurance",
            "amount": 150
          }
        ]
      }';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $host . '/orders');
  
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $token,
    ));

    
    curl_exec($curl);
    curl_close($curl);

    // $ch = curl_init();

    // curl_setopt($ch, CURLOPT_URL, $host . "/orders");
    // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    //         'Authorization: Bearer ' . $token,
    //     ));
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output = curl_exec($ch);
    // curl_close($ch);   

    // $dec = json_decode($output);
    // $orders = array();
    // if (!empty($dec->data)) {
    //     echo '<table><tr><th>Tracking #</th><th>Status</th></tr>';
    //     foreach ($dec->data as $order) {
    //     }
    //     echo '</table>';
    // }
    

?>

