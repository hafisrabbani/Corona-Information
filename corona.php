<?php
error_reporting(0);
    echo "#################################\n";
    echo "#      Corona Information       #\n";
    echo "#      Create By MarsHall       #\n";
    echo "#################################\n";
    echo "Pilih Nomor 1 - 108 : ";
    $i = trim(fgets(STDIN));
function http_request($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 5.0.2; Redmi Note 3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.96 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);      
    return $output;
}
$sh = http_request("https://api.kawalcorona.com");
$sh = json_decode($sh, TRUE);



$neg = $sh[$i]['attributes']['Country_Region'];
$up  = $sh[$i]['attributes']['Last_Update'];
$det = $sh[$i]['attributes']['Deaths'];

echo "Negara          : $neg\n";
echo "Terakhir Update : $up\n";
echo "Meninggal       : $det\n";
 

?>