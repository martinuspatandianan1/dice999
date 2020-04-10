<?php

//Warna//
$merah = "\033[0;31m";
$biru = "\033[1;34m";
$kuning = "\033[0;33m";
$ijo = "\033[0;32m";
$putih = "\033[0;37m";
//end Warna//
@error_reporting(0);
require('fp_config.php');
$jsn = json_decode($json);
$banner = "{$biru}
:hhhhhhyyssssssssssssssssssssssssssssssssyyhhhhhh:
+MMMNmmmdyyssssssssssssssssssssssssssssyhdmmmNMMM+
+MNmmd+.                                  .+dmmNM+
+Nmms                                      smmN+
/mmy                                          ymm/
/mm/                                          /mm/
/mm/      ------------.  ---------.         /mm/
/mm/      :mmmmmmmmmmmm+ mmmmmmmmmmmh+      /mm/
/mm/      :mmmh////////- mmmm////+smmmd-     /mm/
/mm/      :mmmy          mmmm      :mmmd     /mm/
/mm/      :mmmy          mmmm      -mmmd     /mm/
/mm/      :mmmmddddddd+  mmmm::::/odmmm/     /mm/
/mm/      :mmmdyyyyyyy/  mmmmmmmmmmmds-      /mm/
/mm/      :mmmy          mmmm:::::-.         /mm/
/mm/      :mmmy          mmmm                /mm/
/mm/      :mmmy          mmmm                /mm/
/mm/      :ddds          dddd                /mm/
/mm/                                          /mm/
/mm/                                          /mm/
/mm/                                          /mm/
/mmy                                          ymm/
+Nmms                                      `smmN+
+MNmmd+.                                  .+dmmNM+
+MMMNmmmdhyssssssssssssssssssssssssssssyhdmmmNMMM+
:hhhhhyyyssssssssssssssssssssssssssssssssyyyhhhhh:
\n{$putih}";

function dices($send, $coki){
$ch = curl_init('https://faucetpay.io/dice/play');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = array();
 $headers[] = 'accept-encoding: json';
 $headers[] = 'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
 $headers[] = 'content-length: 136';
 $headers[] = 'content-type: application/x-www-form-urlencoded; charset=UTF-8';
 $headers[] = "cookie: ".$coki;
 $headers[] = 'user-agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36';
 $headers[] = 'x-requested-with: XMLHttpRequest';
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $send);
 $responses = curl_exec($ch);
 if ($responses == null){
 echo("failed");
    }else{
      return $responses;
   }
}
function seed($length)
{
   $string = "";
   $chars = "abcdefghijklmanopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
   $size = strlen($chars);
   for ($i = 0; $i < $length; $i++) {
       $string .= $chars[rand(0, $size - 1)];
   }
   return $string;
}
$pit = 0;
$pt = 10;
system('clear');
echo $banner;
system('clear');
$coki = $jsn->Cookie;
echo "Wait to Login ....\n";
RSET:
$bet = '0.00000001';
$wcs = number_format(rand(70,80),2);
$nas = 95 / $wcs;
$gp = number_format($nas, 5);
$prof = $gp * 100;
$prof = $prof / 100 * $bet;
$prof = (int)($prof*100000000) / 100000000;
$prof = number_format((float)$prof - $bet,8);
$send = "play=true&coin=".$jsn->Coin."&client_seed=RUUFuGsc5lQPgMXdOVo&bet_amt=".$bet."&profit=".$prof."&payout=".$gp."&winning_chance=".$wcs."&prediction=1";
$log = dices($send, $coki);
$login = json_decode($log);
if($login->error == 0){
 $blk = $login->balance;
 $bets=$jsn->Base_Bet;
 $cb=$jsn->if_lose;
 $wcmin=$jsn->Min_winChance;
 $wcmax=$jsn->Max_winChance;
 $sp=$jsn->Stop_Profit;
 $ref=$jsn->Refresh;
 $cl=$jsn->if_win;
 $pr=$jsn->Bet_on;
 $lwin=$jsn->Roll_win;
 $coin=$jsn->Coin;
 if($pr == 1){
  $prt = "HI";
  $pr = 1;
 }
 if($pr == 2){
  $prt = "LOW";
  $pr = 2;
 }
 if($pr == 3){
  $prt = "RANDOM";
  $pr = rand(1,2);
 }

if($coin == DOGE){
$mjake = number_format(10, 8);
}
if($coin == DGB){
$mjake = number_format(5, 8);
}
if($coin == BTC){
$mjake = number_format(0.00005, 8);
}
if($coin == BCH){
$mjake = number_format(0.00005, 8);
}
if($coin == ETH){
$mjake = number_format(0.0001, 8);
}
if($coin == DASH){
$mjake = number_format(0.0002, 8);
}
if($coin == LTC){
$mjake = number_format(0.0003, 8);
}
$gwin = 0;
$glos = 0;
RBS:
$cwin = 0;
$clos = 0;
$bet = number_format($bets,8);
$wc = number_format(rand($wcmin,$wcmax),2);
$nas = 95 / $wc;
$gp = number_format($nas, 5);
$prof = $gp * 100;
$prof = $prof / 100 * $bet;
$prof = (int)($prof*100000000) / 100000000;
$prof = number_format((float)$prof - $bet,8);
$seed = seed(19);
$predic = $pr;
$send = "play=true&coin=".$coin."&client_seed=".$seed."&bet_amt=".$bet."&profit=".$prof."&payout=".$gp."&winning_chance=".$wc."&prediction=".$predic;
while(true){
$rg = rand(1,3);
if ($cwin >= 1){
$bet = number_format((float)$bet +(($cl / 100) * $bet) ,8);
$wc = number_format(rand($wcmin,$wcmax),2);
$nas = 95 / $wc;
$gp = number_format($nas, 5);
$prof = $gp * 100;
$prof = $prof / 100 * $bet;
$prof = (int)($prof*100000000) / 100000000;
$prof = number_format((float)$prof - $bet,8);
$seed = seed(19);
$predic = rand(1,2);
$send = "play=true&coin=".$coin."&client_seed=".$seed."&bet_amt=".$bet."&profit=".$prof."&payout=".$gp."&winning_chance=".$wc."&prediction=".$predic;
}
if ($cwin == $lwin){
 goto RBS;
}
if ($clos >= 1 ){
$bet = number_format((float)$bet +(($cb / 100) * $bet) ,8);
$wc = number_format(rand($wcmin,$wcmax),2);
$nas = 95 / $wc;
$gp = number_format($nas, 5);
$prof = $gp * 100;
$prof = $prof / 100 * $bet;
$prof = (int)($prof*100000000) / 100000000;
$prof = number_format((float)$prof - $bet,8);
$seed = seed(19);
$predic = rand(1,2);
$send = "play=true&coin=".$coin."&client_seed=".$seed."&bet_amt=".$bet."&profit=".$prof."&payout=".$gp."&winning_chance=".$wc."&prediction=".$predic;
}
$ga = json_decode(dices($send, $coki),true);
 if($ga['error'] == 1){
  echo "\n{$kuning}Today Is Your Bad Day, Try Again Tomorrow\nYour balance is not enough\n{$putih}";
  exit();
 }
 if($ga['win'] == 1){
  $pits = number_format($ga['balance'] - $blk, 8);
  $rak = number_format($pit + $prof, 8);
  $cwin++;
  $gwin++;
  echo"\r                                                                                         \r";
  echo "{$ijo}WIN {$putih}|| Profit : {$ijo}".$rak." {$putih}{$coin} || Balance : {$kuning}".$ga['balance']."\n{$putih}";
echo "\r{$putih}Win Streak : {$ijo}".$gwin." {$putih}| Lose Streak : {$merah}".$glos." {$putih}| Ballance : {$kuning}".$ga['balance']." {$putih}{$coin}\r";
  $glos = 0;
  if($pits >= $sp){
   echo "\n{$ijo}Congratulation Your Profit to Target\n\n{$putih}";
   goto RSET;
  }
  if($rak >= $ref){
   echo"\r                                                                                         \r";
   echo "{$kuning}Refresh......\n{$putih}";
    if($rak >= $mjake){
     echo "\nCongratulation Your Get Jakepot \nTotal : ".$rak."\n\n{$putih}";
     goto RBS;
    }
   goto RBS;
  }
 }
 if($ga['win'] == 0){
  $pits = number_format($ga['balance'] - $blk, 8);
  $rak = number_format($pit - $bet, 8);
  echo"\r                                                                                         \r";
  echo "{$merah}LOSE {$putih}|| Profit : {$merah}".$rak." {$putih}{$coin} || Balance : {$kuning}".$ga['balance']."\n{$putih}";
  $clos++;
  $glos++;
  $cwin = 0;
echo "\r{$putih}Win Streak : {$ijo}".$gwin." {$putih}| Lose Streak : {$merah}".$glos." {$putih}| Ballance : {$kuning}".$ga['balance']." {$putih}{$coin}\r";
  $gwin = 0;
 }
}
}else{
 echo "\nLogin Failed\n";
 exit();
}


?>