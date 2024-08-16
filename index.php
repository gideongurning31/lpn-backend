<?php

function CallAPI()
{
  $curl = curl_init();
  $url = 'https://binlist.net/';
  $headers = array(
    'Accept: application/json',
    'Content-Type: application/json',
  );

  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_HEADER, 0);

  curl_close($curl);

  return;
}
