<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>PHP script (class)</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<style type="text/css">
		<!--
		@import url("poll.css");
		-->
	</style>
</head>
<body>
<?php
error_reporting(0);
///////////////////////////////////////////////
// Example 1

// include the cf polling class file
	include('cfPolling/cf.poll.class.php');

// your poll question
	$poll_question ='What do you think about this site?';

// In this variable you can enter the answers (voting options),
// which are selectable by the visitors.
// Each vote option gets an own variable. Example
	$answers[] = 'Good';
	$answers[] = 'Excellent';
	$answers[] = 'Bad';
	$answers[] = 'Can Be Improved';
	$answers[] = 'No Comment';

// Make new poll
	$new_poll = new cf_poll($poll_question,$answers);

// (Option)
// if you do not want to use cookies to log if a user has voted.
// if you are not using one_vote there is no need to use this.
//	$new_poll -> setCookieOff(); //(new 0.93)

// (Option)
// One vote per ip address (and cookies if not off)
	$new_poll -> one_vote();

// (Option)
// Number of days to run the poll for
	$new_poll -> poll_for(100);// end in 100 days
//	$new_poll -> endPollOn(02,03,2010);// (D,M,Y) the date to end the poll on (new 0.92)

// (Option)
// Set the Poll container id (used for css)
	$new_poll -> css_id('cfpoll1');

// chack to see if a vote has been cast
// used if the user has javascript off
	$new_poll -> new_vote($_POST);

// echo/print poll to page
	echo $new_poll -> poll_html($_GET);


echo '<hr/>';
///////////////////////////////////////////////
// Example 2
	$poll_question2 ='What do you think about this poll?';
	$answers2 = array('Awesome!', 'Well, it\'s ok.', 'Could be better.', 'Awful...');
	$new_poll2 = new cf_poll($poll_question2.' ',$answers2);
	$new_poll2 -> css_id('cf_poll2');
	$new_poll -> new_vote($_POST);
	echo $new_poll2 -> poll_html($_GET);


echo '<hr/>';
///////////////////////////////////////////////
// Example 3
	$poll_question3 ='How many hours a week do you spend in front of a computer?';
	$answers3 = array('Less then 10', 'Between 10 abd 20', 'Between 20 abd 50', 'More then 50 hours');
	$new_poll3 = new cf_poll($poll_question3,$answers3);
	$new_poll3 -> setCookieOff();
	$new_poll3 -> one_vote();
	$new_poll3 -> endPollOn(25,12,2011);
	$new_poll3 -> css_id();
	$new_poll -> new_vote($_POST);
	echo $new_poll3 -> poll_html($_GET);

?>
<br/><br/><br/>
</body>
</html>