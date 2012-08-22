<?php
	/*
	 * 
	 * Kiyo: An open source web application framework.
	 *
	 * @author		Kiyo Team <kiyo@nexche.com> | Nithin TA<nexche@gmail.com>
	 * @copyright	Copyright (c) 2011 by http://www.nexche.com
	 * @license		http://kiyo.nexche.com/license
	 * @link		http://kiyo.nexche.com
	 */
	
	/*
	 * To Submit bugs, comments, feedbacks or anything please use the following email addresses.
	 * 
	 * Kiyo Team <kiyo@nexche.com> 
	 * Nithin TA <nexche@gmail.com>
	 */

	include 'kstring.php' ;

	echo KString::kiToWords('1024') ; //Thousand And Twenty Four
	echo '<br/>' ;
	echo KString::kiToWords('1234567890.123') ; //Billion And Two Hundred And Thirty Four Million And Five Hundred And Sixty Seven Thousand And Eight Hundred And Nenety Point One Two Three
?>