<?php
error_reporting(0);
$config = array(
	Coin		=>	"DOGE",	//Coin you Want Use Dice, Example BTC, DASH, LTC, DOGE, ETH, DGB, BCH

	Cookie		=>	"__cfduid=d23a871da94052d3ef63086df5f9ab01f1586012293; _ga=GA1.2.1126498613.1586012296; faucetpay=nf7p9tq88dgga8vg7f09iaetcj; _gid=GA1.2.1955633204.1586432254; cookieconsent_status=dismiss; remember_me=184500%3Ac2de1c536f31838725cdcf7d7835f09eac12ad0e6f6cbf324edd425f07a12f0a%3A42a60d8ccf1434c2ff73def06c473e11a14295040aa627b4d89e53f1e2bec468; session_token=d2f251f3921254bdf7ec454c8bb1981f11baa8dfaf0e40ee53cd3f0ffa4bfcca; sc_is_visitor_unique=rx12149426.1586455331.63B8C2B573374F3A1FCBEB083D194149.4.4.4.3.2.2.2.2.2",	//Your Cookie For Login Script
	Name		=>	"Fauce by: RBS Terra",
	Base_Bet	=>	"0.00005",	//Base Bet For Frist Roll, Example 0.00000001

	//Your Win Chance Want use ,Example Min 1 and Max 94
	Min_winChance	=>	"10", //Win Chance Minimum 1
	Max_winChance	=>	"19", //Win Chance Maximum 94

	//Change Bet if Lose or If Win, Using Percent
	if_lose		=>	"20", //Change Bet If Lose, Example 100 for 2x Bet if Lose
	if_win		=>	"60", //Change Bet if Win, Example 20 for 0.2x Bet if Win

	//Choise 1 for HI ,2 for Low, 3 for Random
	Bet_on		=>	"3", //Only Write 1, 2, or 3

	//Refresh to Base Bet if Profit
	Refresh		=>	"1000", //Refresh if Profit, Example 0.001
	Stop_Profit =>	"0.001", //Stop If Profit to Target, Example 100.00

	//Reset Next if Win
	Roll_win	=>	"2"	//If Win Bet Change for How Much Roll, Example 1, 2, 3, 4, 5, etc.
	);
$json = json_encode($config);


