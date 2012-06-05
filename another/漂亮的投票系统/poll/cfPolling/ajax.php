<?
	$dir = dirname(__FILE__);
// include the cf polling class file
	include($dir.'/cf.poll.class.php');
	if( isset($_POST['results']) ){
		$_GET['results'] = $_POST['results'];
		$new_poll = new cf_poll($_POST["question"]);
		$new_poll-> new_vote($_POST);
		echo $new_poll -> poll_html($_GET);
	}
?>