<?php

    function send_request($address, $tag){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.yelp.com/v3/businesses/search?term='.$tag.'&location='.$address,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer 6HrQ7gN8q4fquRybnXjjc6htXjxvPxHj6wRQaWYOeiRDJoSAf9AKSv9rY3WfxbTXpn984tQ3B8P5Oo9iwQmQkz9h_j0OSFqvmHl1NdcytNpwRV1aqShf8MJ4dUZLYHYx'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }