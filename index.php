<?php

function CallAPI($cardNumber) {
  $curl = curl_init();
  $url = 'https://binlist.net/';
  $headers = array(
    'Accept: application/json',
    'Content-Type: application/json',
  );

  $body = '{ "cardNumber":' + $cardNumber + '}';

  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_HEADER, 0);

  curl_exec($curl);
  curl_close($curl);

  return;
}
