<?php
$user = 'name'; //username for the MyTCG admin panel
$pass = 'pass'; //password for the MyTCG admin panel


/********************/
$tcgemail = 'you@yoursite.com'; //email address for all TCG email
$tcgname = 'My TCG'; //name of your TCG
$tcgowner = 'You'; //I don't think this is actually implemented by default, but you can use it anywhere
$tcgurl = 'http://tcg.mysite.com'; //your TCG's URL
$tcgcardurl = 'http://tcg.mysite.com/cards/'; /* URL path to your cards. If you plan on having more than
one type of card directory, you NEED to define it in this file. Put a $ in front of the category name you
want, followed by the link to that directory (like $membercard = '../mc/' or $items = '../items/', etc.*/
$header = '/home/YOURNAME/public_html/TCGNAME/header.php'; //FULL PATH to your header file
$footer = '/home/YOURNAME/public_html/TCGNAME/footer.php'; //FULL PATH to your footer file
$width = '##'; //Only used in mem_panel.php by default
$height = '##'; //Not used by default
$ext = 'png'; /* Your cards' extension, e.g. gif, png, jpg. Do not put a period, change it here if you ever
change formats of your card */
$br = '<br />'; //Not used by default


/********************/
$db_server = 'localhost'; //Usually localhost, sometimes not. Unsure? Check with your host
$db_user = 'name'; //username on your database
$db_password = 'pass!'; //password on you database
$db_database = 'mytcg'; //database name you're designating to your TCG
$table_members = 'members'; //db table name for members
$table_cards = 'cards'; //db table name for cards
$table_upcoming = 'upcoming'; //db table name for future
$table_affiliates = 'affiliates'; //db table name for affiliates
$table_games = 'games'; //db table name for games


/********************/
$num_levels = '10'; //level count. Can be changed. Doesn't include pending or hiatus
$level[1] = '1'; //name of your levels. can be words or numbers here
$level[2] = 'two';
$level[3] = 'novice';
$level[4] = 'Gandalf the Grey';
$level[5] = 'Gandalf the White'; //etc.
$level[6] = '#';
$level[7] = '#';
$level[8] = '#';
$level[9] = '#';
$level[10] = '#';
$levelcount[1] = '001 - 199'; //number of cards for each level. Only used on info page by default
$levelcount[2] = '200 - 399';
$levelcount[3] = '400 - 599';
$levelcount[4] = '600 - 799';
$levelcount[5] = '800 - 999';
$levelcount[6] = '1000 - 1199';
$levelcount[7] = '1200 - 1399';
$levelcount[8] = '1400 - 1599';
$levelcount[9] = '1600 - 1799';
$levelcount[10] = '1800 - 1999';


/********************/
$num_categories = '3'; //number of card categories in your TCG. can be changed later.
$category[1] = 'Regular'; //category names of cards. can be added to later (must change above variable).
$category[2] = 'Special';
$category[3] = 'Member';
/* The following is the number of cards in your regular decks. The included random.php only works with 
decks that are all the same number. If you need a different setup, change the random.php yourself or use 
a different randomizer (Rahenna's, maybe?) */
$digits = array (
	"01",
	"02",
	"03",
	"04",
	"05",
	"06",
	"07",
	"08",
	"09",
	"10",
	"11",
	"12",
	"13",
	"14",
	"15",
	"16",
	"17",
	"18",
	"19",
	"20"
);
/* The following is the number of cards in your special decks. The included random.php only works with 
decks that are all the same number. If you need a different setup, change the random.php yourself or use 
a different randomizer (Rahenna's, maybe?) */
$digits_spc = array (
	"01",
	"02",
	"03",
	"04",
	"05",
	"06",
	"07",
	"08",
	"09",
	"10",
	"11",
	"12",
	"13",
	"14",
	"15"
);
/********************/


$num_gamecats = '3'; //number of game categories
$gamecat[1] = 'Group A'; //category names
$gamecat[2] = 'Group B';
$gamecat[3] = 'Group C';
/********************/


$buttonsize = '88x31'; //affiliate button size, width x height
$buttonurl = 'http://tcg.you.com/affiliates/'; //url to your affiliate image folder WITH TRAILING SLASH
$num_affiliates = '3'; //affiliate categories
$affiliates[1] = 'Pending'; //names for affiliate categories
$affiliates[2] = 'Active';
$affiliates[3] = 'Hiatus';
/********************/


$num_startreg = '5'; //starter pack number of regular cards
$num_startspc = '0'; //starter pack number of special cards
$num_startchoice = '2'; //starter pack number of collecting deck cards
$num_lvlreg = '2'; //number of regular card for level up
$num_lvlchoice = '1'; //number of choice cards for level up
$num_lvlspc = '0'; //number of choice cards for level up
$num_maschoice = '2'; //number of choice cards for mastering a deck
$num_masreg = '3'; //number of random regular cards for mastering a deck
$num_masspc = '0'; //number of random special cards for mastering a deck
/********************/


//don't edit here
	$users = array($user => md5($pass));
	$salt = substr(md5(date("F")), 8);
	$connect = mysqli_connect("$db_server", "$db_user", "$db_password")
		or die( "DATABASE_CONNECT_ERROR" . mysqli_error($connect) );
	mysqli_select_db($connect, "$db_database")
		or die( "DATABASE_CONNECT_ERROR" . mysqli_error($connect) );
	
        if (function_exists('CleanUp')) {	
	function CleanUp($data) {
   		$data = trim(htmlentities(strip_tags($data)));
   		return $data;
		  }
    }
	if (function_exists('escape_sql')) {
        function escape_sql($sql) {
    	if (get_magic_quotes_gpc()) $sql = stripslashes($sql);
    	return mysql_real_escape_string($sql);
		  }
    }
?>
