<?php
//
//   CF Polls v0.94
//   -------------------------------
//
//   Author:    codefuture.co.uk
//   Version:   0.94
//   Date:      2-Jan-11
//
//
//   30-Dec-10
//   0.92 - Added a new Option (On by default) the script can  use cookies as well as the IP address logging
//          to help prevent multiple votes by people with dynamic IP's address.
//          You can turn cookies off by using 'setCookieOff()' before 'one_vote()'....
//
//   28-Dec-10
//   0.92 - Added a new Option to set the end date for the poll
//          endPollOn(day,month,year)
//
//   06-Jun-10 
//   0.91 - fix script was not letting you add new answer to a poll what is running..
//
//   download the latest version from - http://codefuture.co.uk/projects/cf_polling/
//   Copyright (c) 2010 codefuture.co.uk
//
////////////////////////////////////////////////////////////////////////////////////
error_reporting(0);

	define('CFPOLLS_VOTE', 			'Vote');
	define('CFPOLLS_VOTE_OPEN_TO', 	'Poll open to');
	define('CFPOLLS_VOTE_END_ON',	'Poll closed on');
	define('CFPOLLS_VIEW_RESULTS',	'View Results');
	define('CFPOLLS_RESULTS',		'Results');
	define('CFPOLLS_VOTE_IN_POLL',	'Vote in this poll');
	define('CFPOLLS_TOTAL',			'Total: %s votes.');

////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////

// Please make sure that the folder "polls" in folder cfPolling is writable (chmod 777).
	define('CFPOLLS_SAVE_DATA',		'polls');

////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////

//global sitting
$cfp_js = false;


class cf_poll{

	private $votes;
	private $filr_dir;
	private $question_file;
	private $ip_file;
	private $one_vote_ip = false;
	private $one_vote_cookie = false;
	private $cookie;
	private $cookie_url = null;
	private $cookieOff = 0;//false;
	private $voted = false;
	private $voteSaved = false;
	private $pollEnded = false;
	private $question;
	private $poll_id;
	private $poll_start_date;
	private $poll_end_date;
	private $total;
	private $answer_list;
	private $results;
	private $css_id_name = 'cf_poll';
	private $indexdb = array(); //Poll Index db
	private $pollIndexFile; //Poll Index Address

	public function cf_poll($question,$answers = null){
	// set file address
		$dir = dirname(__FILE__).'/'.CFPOLLS_SAVE_DATA.'/';
		$this->question_file = $dir.md5($question).'.cfp';
		$this->ip_file = $dir.md5($question).'ip.cfp';
		$this->pollIndexFile = $dir.'poll_index.cfp';

		$this->question = $question;
		//$this->polls_index();
		$this->loadIndex();

		if(!file_exists($this->question_file)){
			$i = 1;
			foreach ($answers as $v){
				$new_answers[] = array(	'id' => $i, 'answer'=> $v, 'votes' => 0 );
				$i++;
			}
			$this->save_db($this->question_file,$new_answers);
			$this->votes = $new_answers;
		}else{//0.91
			$this->votes = $this->load_db($this->question_file);
			if(!is_null($answers) && count($this->votes) < count($answers)){
				foreach ($answers as $v){
					if(!$this->in_array_recursive($v,$this->votes)){
						$this->votes[] = array(	'id' => $i, 'answer'=> $v, 'votes' => 0 );
						$added_new = 1;
					}
				}
				if($added_new){
					$this->save_db($this->question_file,$this->votes);
				}
			}
		}
	}

	public function one_vote(){
		$this->one_vote_ip = true;
		$this->one_vote_cookie = true;

		if(!$this->cookieOff && isset($_COOKIE['Poll_'.preg_replace("/[^0-9]/", "", md5($this->question))])){
			$this->voted = true;
			return;
		}

		$ips = $this->load_db($this->ip_file); // load ip array
		if(in_array($_SERVER['REMOTE_ADDR'],$ips)){ // submit vote
		$this->set_cookie();
			$this->voted = true;
		}

	}

	public function poll_for($day){
		$time_dif = time() - $this->poll_start_date;
		$time_dif = round( abs($time_dif / 86400));
		if (empty($this->poll_end_date))
			$this->poll_end_date = $this->poll_start_date + ($day * 86400);
		if($time_dif >= $day){
			$this->voted = true;
			$this->pollEnded = true;
		}
		}

	public function endPollOn( $d,$m,$y ){
		$gd_a = getdate($this->poll_start_date);
		$a_new = mktime( 12, 0, 0, $gd_a['mon'], $gd_a['mday'], $gd_a['year'] );
		$b_new = mktime( 12, 0, 0, $m, $d, $y );
		$this->poll_end_date = $b_new;
		if ($b_new < $a_new)
			$this->poll_for(0);
		else
			$this->poll_for(round( abs( $a_new - $b_new ) / 86400 ));

	}

	public function new_vote($vote = null){
		if(is_null($vote)) return;
		if(!isset($vote['vote_'.$this->poll_id]))return;

		$vote_id = $vote['vote_'.$this->poll_id];

		$ips = $this->load_db($this->ip_file); // load ip array
		if(isset($vote_id) && (!in_array($_SERVER['REMOTE_ADDR'],$ips) || !$this->one_vote_ip)){ // submit vote

			foreach($this->votes as $k => $v){
				if ($v['id']==$vote_id) $this->votes[$k]['votes']++; // add vote
			}
			$this -> save_db( $this -> question_file, $this->votes); // save vote

			if($this->one_vote_ip){
				$ips[] = $_SERVER['REMOTE_ADDR']; // add new ip
				$this->save_db( $this -> ip_file, $ips); // save ip
				$this->voted = true;
			}
			if($this->one_vote_cookie && !isset($_COOKIE['Poll_'.md5($this->question)])){
				$this->set_cookie();
				$this->voted = true;
			}
			$this->voteSaved = true;
		}
	}

	public function setCookieURL($var){$this->cookie_url = $var;}

	public function setCookieOff(){$this->cookieOff = true;}

	private function set_cookie(){
		if(!$this->cookieOff ){
			if(is_null($this->cookie_url)){
				$domain = $_SERVER['HTTP_HOST'];
				if ( !strtolower( substr($domain, 0, 4) ) == 'www.' )
					$domain = substr($domain, 4);	// Fix the domain to accept domains with and without 'www.'. 
				if ( substr($domain, 0, 1) != '.' )
					$domain = '.'.$domain;	// Add the dot prefix to ensure compatibility with subdomains
				$self = $_SERVER['PHP_SELF'];
				$script_url = 'http://www'.$domain.mb_substr($self,0,-mb_strlen(strrchr($self,"/")));
				$this->cookie = '<img src="'.$script_url.'/cfPolling/cf.poll.class.php?id='.preg_replace("/[^0-9]/", "", md5($this->question)).'" height="1" width="1" />';
			}else{
				$this->cookie = '<img src="'.$this->cookie_url.'?id='.preg_replace("/[^0-9]/", "", md5($this->question)).'" height="1" width="1" />';
			}
		}
	}

	public function make_poll_list(){

	//total votes
		foreach($this->votes as $k => $v){
			$this->total += $v['votes'];
		}

	//lists
		foreach($this->votes as $k => $v){
			//list possible answers
			if (!$this->voted)
				$this->answer_list .=  '<label><input type="radio" name="vote_'.$this->poll_id.'" value="'.$v['id'].'" id="answer-'.$v['id'].'"/>'.$v['answer'].'</label>';
			//list Results
			$this->results .= '<label>'.$v['answer'].' ('.$v['votes'].')</label>
						<div class="barempty"><div class="barfull" style="width:'.$this->percent($v['votes'],$this->total).'%"><div class="percent">'.$this->percent($v['votes'],$this->total).'%</div></div></div>';
		}
	}

	private function loadIndex(){
	//if no index file then make it
		if(!file_exists($this->pollIndexFile)){
		//make index db
			$this->indexdb[] = array(
									'id'	=> 1,
									'file'	=> md5($this->question),
									'date'	=> time(),
									'css'	=> null,
									'vote'	=> 0,
									'cookie'=> 0,
									);
			$this->poll_id = 1; // set poll id
			$this->poll_start_date = time(); // set poll start date
		// save index
			$this->save_db($this->pollIndexFile,$this->indexdb);
		}else{
	//read index file
		// load index to db
			$this->indexdb = $this->load_db($this->pollIndexFile);
		// see if poll is in db
			$temp_id = 1; //for poll if not found in the db
			foreach($this->indexdb as $k => $v){
				if($v['id'] >= $temp_id) $temp_id = $v['id'] + 1;
				if($v['file'] == md5($this->question)){
					$this->poll_id			= $v['id'];
					$this->poll_start_date	= $v['date'];
					$this->css_id_name		= $v['css'];
					$this->cookieOff		= $v['cookie'];
					if($v['vote']) $this->one_vote();
					$found_poll = 1;
				}
			}
		// if poll not found then add it to db
			if(!isset($found_poll)){
				$this->indexdb[] = array(
										'id'	=> $temp_id,
										'file'	=> md5($this->question),
										'date'	=> time(),
										'css'	=> null,
										'vote'	=> 0,
										'cookie'=> 0,
										);
				$this->poll_id = $temp_id; // set poll id
				$this->poll_start_date = time(); // set poll start date
			// save index
				$this->save_db($this->pollIndexFile,$this->indexdb);
			}
		}
	}

	private function updateIndex(){
		if (isset($this->indexdb) && is_array($this->indexdb)){
			foreach($this->indexdb as $k => $v){
				if($v['file'] == md5($this->question)){
					$this->indexdb[$k]['css']	= $this->css_id_name;
					$this->indexdb[$k]['vote']	= $this->one_vote_ip;
					$this->indexdb[$k]['cookie']= $this->cookieOff;
					$this->save_db($this->pollIndexFile,$this->indexdb);
					return true;
				}
			}
		}
	}

	private function in_array_recursive($string, $array, $type=false){
	/*** an recursive iterator object ***/
		$it = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));

	/*** traverse the $iterator object ***/
		while($it->valid()){
		/*** check for a match ***/
			if( $type === false ){
				if( $it->current() == $string ){
					return true;
				}
			}else{
				if( $it->current() === $string ){
					return true;
				}
			}
			$it->next();
		}
	/*** if no match is found ***/
		return false;
	}

	private function percent($num_amount, $num_total) {
		if($num_total <= 0) return 0;
		$count1 = $num_amount / $num_total;
		$count2 = $count1 * 100;
		$count = number_format($count2, 0);
		return $count;
	}

	private function load_db($fileaddress){
		if (file_exists($fileaddress))
			$filearray = unserialize(file_get_contents($fileaddress)); 
		else
			$filearray = array();
		return $filearray;
	}

	private function save_db($fileaddress,$db){
		$fp = fopen($fileaddress, 'w+') or die('I could not open poll DB');
		fwrite($fp, serialize($db));
		fclose($fp);
		return true;
	}

	public function css_id($var = 'cf_poll'){$this->css_id_name = $var;}

	public function poll_html($show){
		global $cfp_js;
		$this->make_poll_list();

		$SHOW_RESULTS = '';

		if (!$this->voted){
			if(isset($show['results']) || isset($show['results_'.$this->poll_id])){
				$SHOW_VOTE		= ' style="display:none"';
				$SHOW_RESULTS	= ' style="display:block"';
			}else{
				$SHOW_VOTE		= ' style="display:block"';
				$SHOW_RESULTS	= ' style="display:none"';
			}
		}

	// not needed once voted (ajax box)
		if(!$this->voteSaved)
			$poll_echo = $this->cookie.'<div id="cfp'.$this->poll_id.'" class="'.$this->css_id_name.'">';
		$poll_echo .= '<div id="'.$this->css_id_name.'">';

/////////////////////////////////////////
// VOTE PAGE
		if (!$this->voted){
			$poll_echo .= '
			<div id="vote-'.$this->poll_id.'"'.$SHOW_VOTE.'>
				<h3>'.CFPOLLS_VOTE.'</h3>';
			if(!$this->pollEnded && !empty($this->poll_end_date))
				$poll_echo .= '<div class="end_date">'.CFPOLLS_VOTE_OPEN_TO.' '.gmdate('d M y',$this->poll_end_date).'</div>';
			$poll_echo .= '
				<div class="question">'.$this->question.'</div>
				<form action="javascript:get(\''.$this->question.'\','.$this->poll_id.');" name="poll_'.$this->poll_id.'" id="poll_'.$this->poll_id.'" method="post">
					'.$this -> answer_list.'<input type="submit" value="'.CFPOLLS_VOTE.'" class="button" />
				</form>
				<div class="footer">
					<noscript><a href="'.$_SERVER["PHP_SELF"].'?results_'.$this->poll_id.'" alt="'.CFPOLLS_VIEW_RESULTS.'">'.CFPOLLS_VIEW_RESULTS.'</a></noscript>
					<a href="javascript:showpoll('.$this->poll_id.');" alt="'.CFPOLLS_VIEW_RESULTS.'">'.CFPOLLS_VIEW_RESULTS.'</a>
				</div>
			</div>';
		}
//  VOTE PAGE END
/////////////////////////////////////////

/////////////////////////////////////////
// RESULTS PAGE
			$poll_echo .= '<div id="results-'.$this->poll_id.'" '.$SHOW_RESULTS.'><h3>'.CFPOLLS_RESULTS.'</h3>';

		// date open to/closed on
			if($this->pollEnded && !empty($this->poll_end_date))
				$poll_echo .= '<div class="end_date">'.CFPOLLS_VOTE_END_ON.' '.gmdate('d M y',$this->poll_end_date).'</div>';
			elseif(!empty($this->poll_end_date))
				$poll_echo .= '<div class="end_date">'.CFPOLLS_VOTE_OPEN_TO.' '.gmdate('d M y',$this->poll_end_date).'</div>';
		// question
			$poll_echo .= '<div class="question">'.$this->question.'</div>';
		// result list (make_poll_list)
			$poll_echo .= $this -> results;
		// footer
			$poll_echo .= '<div class="footer">';
			$poll_echo .= '<div class="total">'.sprintf(CFPOLLS_TOTAL,$this->total).'</div>';

			if (!$this->voted){
				$poll_echo .= '
					<noscript><a href="'.$_SERVER["PHP_SELF"].'" alt="'.CFPOLLS_VOTE_IN_POLL.'">'.CFPOLLS_VOTE_IN_POLL.'</a></noscript>
					<a href="javascript:showpoll('.$this->poll_id.');" alt="'.CFPOLLS_VOTE_IN_POLL.'">'.CFPOLLS_VOTE_IN_POLL.'</a>';
			}
			$poll_echo .= '</div></div>';
// RESULTS PAGE END
/////////////////////////////////////////
			if(!$this->voteSaved) $poll_echo .= '</div>';
			$poll_echo .= '</div>';

		if (!$this->voted && !$cfp_js){

			$poll_echo .='
		<script language="Javascript">
			var requestID = \'\';
			function get(oP,poll,vote){
				xmlhttp=GetXmlHttpObject();
				if (xmlhttp==null){
					alert ("Browser does not support HTTP Request");
					return;
				}
				var setPost = "";
				setPost = "question="+oP+"&";
				setPost += "results="+poll;
				setPost += "&vote_"+poll+"="+getCheckedValue(document.forms[\'poll_\'+poll].elements[\'vote_\'+poll]);

				requestID = "cfp" + poll;
				xmlhttp.onreadystatechange=stateChanged;
				xmlhttp.open("POST","cfPolling/cf.poll.class.php",true);
				xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xmlhttp.setRequestHeader("Content-length", setPost.length);
				xmlhttp.setRequestHeader("Connection", "close");
				xmlhttp.send(setPost);
			}

			function stateChanged(){
				if(xmlhttp.readyState == 1){
					//document.getElementById(requestID).innerHTML="loading";
				}
				if (xmlhttp.readyState==4){
				//	if (xmlhttp.status == 200) {
						document.getElementById(requestID).innerHTML=xmlhttp.responseText;
				//	} else {
				//		alert(\'There was a problem with the request.\');
				//	}
				}
			}

			function GetXmlHttpObject(){
				if (window.XMLHttpRequest){
					return new XMLHttpRequest();// code for IE7+, Firefox, Chrome, Opera, Safari
				}
				if (window.ActiveXObject){
					return new ActiveXObject("Microsoft.XMLHTTP");// code for IE6, IE5
				}
				return null;
			}

			function getCheckedValue(radioObj) {
				if(!radioObj)
					return "";
				var radioLength = radioObj.length;
				if(radioLength == undefined)
					if(radioObj.checked)
						return radioObj.value;
					else
						return "";
				for(var i = 0; i < radioLength; i++) {
					if(radioObj[i].checked) {
						return radioObj[i].value;
					}
				}
				return "";
			}
			function showpoll(poll_id){
				var vote = document.getElementById(\'vote-\'+poll_id).style;
				var results = document.getElementById(\'results-\'+poll_id).style;
				if(vote.display === "block"){
					vote.display	= "none";
					results.display = "block";
				}else{
					vote.display	= "block";
					results.display = "none";
				}
			}
	</script>';
			$cfp_js = 1;
		}

		$this->updateIndex();

		return $poll_echo;
	}
}

//////////////////////////////////
// ajax

	if( isset($_POST['results']) ){
		$_GET['results'] = $_POST['results'];
		$new_poll = new cf_poll($_POST["question"]);
		$new_poll-> new_vote($_POST);
		echo $new_poll -> poll_html($_GET);
	}

//////////////////////////////////
// set cookie
// this code below can be moved to any file (say like poll_img.php),
// then you would need to set $new->setCookieURL( http://address/to/poll_img.php )

	if(isset($_GET['id']) && is_numeric($_GET['id'])){
		set_cookie($_GET['id']);
		Header( "Content-type: image/gif");
		Header( "Expires: Wed, 29 Dec 2010 11:11:11 GMT");
		Header( "Cache-Control: no-cache");
		Header( "Cache-Control: must-revalidate");
		printf ("%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%",
				71,73,70,56,57,97,1,0,1,0,128,255,0,192,192,192,0,0,0,33,249,4,1,0,0,0,0,44,0,0,0,0,1,0,1,0,0,2,2,68,1,0,59);
		exit;
	}

	function set_cookie($id){
		$domain = $_SERVER['HTTP_HOST'];
		if ( strtolower( substr($domain, 0, 4) ) == 'www.' )
			$domain = substr($domain, 4);	// Fix the domain to accept domains with and without 'www.'. 
		if ( substr($domain, 0, 1) != '.' )
			$domain = '.'.$domain;	// Add the dot prefix to ensure compatibility with subdomains
		setcookie('Poll_'.$id,0, time()+60*60*24*355 , '/',$domain);
	}

// set cookie
//////////////////////////////////
?>