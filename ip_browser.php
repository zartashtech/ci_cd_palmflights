<?php


if (function_exists('curl_get_contents')) {
    // echo "Function Exists"; 
} else {
    // echo "Function Not Found, This name Can be used!";
    function curl_get_contents($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
}

if (isset($_SERVER['HTTP_CLIENT_IP'])) {
    $real_ip_adress = $_SERVER['HTTP_CLIENT_IP'];
}

if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $real_ip_adress = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $real_ip_adress = $_SERVER['REMOTE_ADDR'];
}

$cip = $real_ip_adress;
$iptolocation = 'https://api.hostip.info/country.php?ip=' . $cip;
// $ip_country = file_get_contents($iptolocation);
$ip_country = curl_get_contents($iptolocation);

$ip = $real_ip_adress;


?>


<input name="query_date" type="hidden" value='<?php echo strip_tags(htmlspecialchars(date("Y-m-d h:i:sa"))); ?>'>
<input name="ip" type="hidden" value="<?php echo strip_tags(htmlspecialchars($ip)); ?>">
<input name="ip_country" type="hidden" value="<?php echo strip_tags(htmlspecialchars($ip_country)); ?>">