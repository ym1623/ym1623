<?php
	/*
	 * Kiyo : An open source web application framework.
	 *
	 * @author		Kiyo Team <kiyo@nexche.com>, TA Nithin<nexche@gmail.com>
	 * @copyright	Copyright (c) 2011 by http://www.nexche.com
	 * @license		http://kiyo.nexche.com/license
	 * @link		http://kiyo.nexche.com
	 */
	
	/*
	 * To Submit bugs, comments, feedbacks or anything please use the following email addresses.
	 * 
	 * Kiyo Team <kiyo@nexche.com> 
	 * TA Nithin <nexche@gmail.com>
	 */

	/**
	 * Class to tell any number in words. This class uses a string based alogrithm 
	 * So you can tell big numbers in to words.
	 * 
	 * I've stoped it at Quintillion, But you may go beyond by just mentioning them in SECTION1 and SECTION2.
	 * 
	 */
	class KString
	{
		/**
		 * Helper for kiToWords function
		 * @ignore
		 * 
		 * convert number to string with out points, only integer part.
		 * @param type $number number to tell.
		 * @return string number in words.
		 */
		private static function _kiToWordsLeft($number)
		{
			/*
			 * To get support for bigger numbers than Billion add the number in $_t array and $_s array. You can add any number.
			 */
				$_t = array( '0' => 'Zero', '1' => 'One', '2' => 'Two', '3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
				'7' => 'Seven', '8'=> 'Eight', '9'=> 'Nine', '10' => 'Ten',
				'11' => 'Eleven', '12' => 'Twelve', '13' => 'Thirteen', '14' => 'Fourteen', '15' => 'Fifteen', '16' => 'Sixteen',
				'17' => 'Seventeen', '18' => 'Eighteen', '19' => 'Nineteen',
				'20' => 'Twenty', '30' => 'Thirty', '40' => 'Fourty',
				'50' => 'Fifty', '60' => 'Sixty', '70' => 'Seventy', '80' => 'Eighty', '90' => 'Nenety' , '100' => 'Hundred',
				'1000' => 'Thousand', '1000000' => 'Million', '1000000000' => 'Billion',
				'1000000000000' => 'Trillion', '1000000000000000' => 'Quadrillion', '1000000000000000000' => 'Quintillion',
				/* #SECTION1 Number and its name here. (also add the same name at #SECTION2)*/) ;

			if( isset($_t[$number]) )
			{
				return $_t[$number] ;
			}
			$_s = array( '1', '10', '100', '1000', '1000000', '1000000000'
				//  trillion               quadrilion        quintilion          ...
				, '1000000000000', '1000000000000000', '1000000000000000000',
				/* #SECTION2 Only number here (also number and name at #SECTION1)*/ ) ;

			$n = array_pop($_s) ;
			$w = '' ;
			$and = false ;
			while( $n > 0 )
			{
				/*
				 * (For faster but small numbers use this code)
				 *
				 * $x = (int) ($number / $n) ;
				 *
				 * OR
				 */
				$x = substr($number, 0, strlen($number) - (strlen($n)-1) ) ;

				$valid = (strlen($number) > (strlen($n)-1) ) ;
				if( $x >= 1 && $valid )
				{
					if( $w )
					{
						if( $and )
						{
							$w .= ' And ' ;
							/*
							 * OR
							 * If you dont need 'And' between numbers use the following
							 * $w .= ' ' ;
							 */
						}
						else
						{
							$w .= ' ' ;
						}
					}
					//Do a $n * $x in string way ( 10000000 * 123 )
					$_nx = str_pad(ltrim($x, '0'), strlen($n), '0') ;
					if( isset($_t[$_nx]) )
					{
						if( $n == 10 &&  isset($_t[$number]) )
						{
							//Reached last 1 or two digits.. stop here...
							$number = ltrim($number, '0') ;
							$_s = array() ; //finish array..
							$w .= $_t[$number] ;
						}
						else
						{
							/*
							 * If you need 'One Hundred', 'One Thousand' Instead of 'Hudred', 'Thousand' uncomment below..
							if( $n >= 100 )
							{
								$w .= ' One ' ;
							}
							 *
							 */
							$_xn = str_pad( ltrim($x, '0'), strlen($n), '0' ) ;
							$w .= $_t[$_xn] ;
						}
					}
					else if( isset($_t[$n]) )
					{
						$_x = false ;
						if( isset($_t[$x]) )
						{
							$_x = $_t[$x] ;
						}
						else
						{
							//recurse to convert '3 thousand' to 'three thousand'
							$_x = self::_kiToWordsLeft($x) ;
						}
						$w .= $_x . ' ' . $_t[$n] ;
					}
					//Add "and" for every values above 100..
					if( $n >= 100 )
					{
						$and = true ;
					}
					else
					{
						$and = false ;
					}
					/*
					 * (For faster but small numbers use this code)
					 *
					 * $number = (int) $number % $n ;
					 *
					 * Or
					 */
					$number = substr($number, strlen($number) - (strlen($n)-1) ) ;
				}
				//get next value
				$n = array_pop($_s) ;
			};
			return $w ;
		}
		/**
		 * Helper for kiToWords function
		 * @ignore
		 * 
		 * convert number to string with out points, only fractional part.
		 * @param type $number number to tell.
		 * @return string number in words.
		 */
		private static function _kiToWordsRight($number)
		{
			$_a = array( '0' => 'Zero', '1' => 'One', '2' => 'Two', '3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
				'7' => 'Seven', '8'=> 'Eight', '9'=> 'Nine') ;

			$str = '' ;
			$len = strlen($number) ;
			for( $i = 0; $i < $len; $i ++ )
			{
				if( $str )
				{
					$str .= ' ' ;
				}
				$c = substr($number, $i, 1) ;
				$str .= $_a[$c] ;
			}
			return $str ;
		}
		/**
		 * Convert a number to words.
		 *
		 * @param int|string $number number to convert.
		 * @return string number in words.
		 */
		public static function kiToWords($number)
		{
			if( ($number !== 0) && (! $number) )
			{
				trigger_error('Bad Argument(s)', E_USER_WARNING) ;
				return false ;
			}
			$res = false ;
			if( strlen($number) > 0 )
			{
				if( $number[0] == '-' )
				{
					$res = 'Negative ' ;
					$number = substr($number, 1) ;
				}
				$parts = explode('.', $number) ;
				if( count($parts) == 2 )
				{
					$res .= self::_kiToWordsLeft($parts[0]) ;
					$res .= ' Point ' ;
					$res .= self::_kiToWordsRight($parts[1]) ;
				}
				else
				{
					$res .= self::_kiToWordsLeft($parts[0]) ;
				}
			}
			return $res;
		}
	}
?>