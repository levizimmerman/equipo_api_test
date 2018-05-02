<?php
$url = 'https://api.equipovoetbalreizen.nl/matches?match_id=1696&portal_id=0';

// Open cURL connection, return instance
$curl = curl_init($url);
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
));

if (curl_exec($curl)) {
    $info = curl_getinfo($curl);
    echo $info['total_time'];
};
curl_close($curl);
