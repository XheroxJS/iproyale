<?php
$morado="\033[1;35m";
$rojo="\033[1;31m";
$verde="\033[1;32m";
$azul="\033[1;34m";
$amarillo="\033[1;33m";
$cyan="\033[1;36m";
$gris="\033[1;30m";
$blanco="\033[1;37m";
$negro="\033[0;30m";
$naranja="\033[0;33m";
$purpura="\033[0;35m";
$rojo2="\033[0;31m";
$ijo="\033[92m";
$pth="\033[37m";
$kn="\033[33m";
$tr="\033[36m";
$tik=[$tr,$ijo,$tr,$ijo,$tr,$ijo];
$a=1;
$token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE2NTM3ODk4NzQsImp0aSI6IjAxRjZUWFZCN1k1RUU1UjRBRlpGVlFEN0szIiwiaWF0IjoxNjIyMjUzODc0LCJzdWIiOiIwMUVaQjcxNks2WEc3TUZKRDVOSEI3WVg2SyJ9.tK5Mo4mMSMiD5hLBKQaYNlqF166u2w5EAb9QjjS0ciQ";
echo " ▀ █▀▄ █▀▀▄ ▄▀▄ ▀▄░▄▀ ▄▀▄ █░░ █▀▀
 █ █░█ █▐█▀ █░█ ░░█░░ █▀█ █░▄ █▀▀
 ▀ █▀░ ▀░▀▀ ░▀░ ░░▀░░ ▀░▀ ▀▀▀ ▀▀▀\n";
echo " Creador : t.me/xheroxjs\n\n";

$ua = array();
$ua[]="Host: api.iproyal.com";
$ua[]="access-token: ".$token;
$ua[]="content-type: application/json";
$ua[]="accept: application/json";
$ua[]="x-app-os: android";
$ua[]="x-app-arch: aarch64";
$ua[]="x-app-version: 0.0.9";
$ua[]="user-agent: okhttp/4.9.0";
$nb=0;
$ch = curl_init ();
 curl_setopt ($ch, CURLOPT_URL, "https://api.iproyal.com/v1/users/me");
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt($ch, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_PORT,"443");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
  curl_setopt($ch, CURLOPT_ENCODING, '');
 $result = curl_exec ($ch);
 curl_close($ch);
 
 $hash = json_decode($result,true)["hash"];
 $username = json_decode($result,true)["username"];
$email = json_decode($result,true)["email"];
$balance = json_decode($result,true)["balance"];
$traffic_sold = json_decode($result,true)["traffic_sold"];

echo " User $username  Email $email\n Balance $balance  TrafficSold $traffic_sold\n";
/*
sleep(1);
$ch = curl_init ();
 curl_setopt ($ch, CURLOPT_URL, "https://api.iproyal.com/v1/ips");
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt($ch, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_PORT,"443");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$ua1 = array();
$ua1[]="Host: api.iproyal.com";
$ua1[]="content-type: application/json";
$ua1[]="accept: application/json";
$ua1[]="x-app-os: android";
$ua1[]="x-app-arch: aarch64";
$ua1[]="x-app-version: 0.0.9";
$ua1[]="user-agent: okhttp/4.9.0";
curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua1);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
  curl_setopt($ch, CURLOPT_ENCODING, '');
 $result = curl_exec ($ch);
 curl_close($ch);
 
 $ip = json_decode($result,true)["data"][0]["ip"];
 
 sleep(1);
 $ch = curl_init ();
 curl_setopt ($ch, CURLOPT_URL, "https://api.iproyal.com/v1/reverse-proxies/latest");
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt($ch, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_PORT,"443");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
  curl_setopt($ch, CURLOPT_ENCODING, '');
 $result = curl_exec ($ch);
 curl_close($ch);
 
 $server_ip = json_decode($result,true)["server_ip"];
$server_port = json_decode($result,true)["server_port"];
$token = json_decode($result,true)["token"];
$available_port = json_decode($result,true)["available_port"];

echo " UserIP $ip  ServerIP $server_ip\n Port $available_port  DefaultPort $server_port\n\n";

sleep(1);
$data='{"password":"5RHsg2UQBmhKZyL","port":'.$server_port.',"meta":{"user_ip":"'.$ip.'","os_name":"Android 8.0.0","cpus":"8"},"ip":"'.$server_ip.'","username":"RT0cFOhAJWtwm0h"}';
 $ch = curl_init ();
 curl_setopt ($ch, CURLOPT_URL, "https://api.iproyal.com/v1/peers");
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt($ch, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_PORT,"443");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt ($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
  curl_setopt($ch, CURLOPT_ENCODING, '');
 $result = curl_exec ($ch);
 curl_close($ch);
$hash = json_decode($result,true)["hash"];
*/
sleep(3);
//01F6W1F115AT46V4J79535K8Y6
while(true){
	
$url="https://api.iproyal.com/v1/peers/01F6XRWHPEYR0FGK20CFZCHNB1/mark-alive";
	$ch = curl_init ();
 curl_setopt ($ch, CURLOPT_URL, $url);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt($ch, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_PORT,"443");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt ($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
  curl_setopt($ch, CURLOPT_ENCODING, '');
 $result = curl_exec ($ch);
 curl_close($ch);
 $r = json_decode($result,true);
/*$getheaders = get_headers($url);
 $getCookiecfduid= $getheaders[5];
 $getCookiesid= $getheaders[9];*/
 
if($r==true){
	echo " Keep-Alive -> OK✓";
	}else{
		var_dump($result);
		}
if($nb==20){
$ch = curl_init ();
 curl_setopt ($ch, CURLOPT_URL, "https://api.iproyal.com/v1/users/me");
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt($ch, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_PORT,"443");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
  curl_setopt($ch, CURLOPT_ENCODING, '');
 $result = curl_exec ($ch);
 curl_close($ch);
 
 $hash = json_decode($result,true)["hash"];
 $username = json_decode($result,true)["username"];
$email = json_decode($result,true)["email"];
$balance = json_decode($result,true)["balance"];
$traffic_sold = json_decode($result,true)["traffic_sold"];

echo " Balance $balance  TrafficSold $traffic_sold\n";
$nb=0;
}
$nb++;
for ($i=rand(22,33);$i>-1;$i--){
$a1=str_repeat("•",$a);$tok=$tik[$a-1];
echo $pth."[".$tok."•••••••".$pth."]  $i sec $a1";
if($a==6){$a=1;}else{$a++;}sleep(1);
echo 
"\r                                              \r";}
sleep(1);
}
