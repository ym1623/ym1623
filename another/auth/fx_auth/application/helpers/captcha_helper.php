<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter CAPTCHA Helper
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/helpers/xml_helper.html
 */

// ------------------------------------------------------------------------

/**
 * Create CAPTCHA
 *
 * @access	public
 * @param	array	array of data for the CAPTCHA
 * @param	string	path to create the image in
 * @param	string	URL to the CAPTCHA image folder
 * @param	string	server path to font
 * @return	string
 */
if ( ! function_exists('create_captcha'))
{
	function create_captcha($data = '', $img_path = '', $img_url = '', $font_path = '')
	{
		/**
			* Function to create a random color
			* Note: We aren't using this outside this function so we will sit it inside
			* @auteur mastercode.nl
			* @param $type string Mode for the color
			* @return int
			**/
		function color($type)
		{
			switch($type)
			{
				case "bg":
					$color = rand(224,255);
				break;
				case "text":
					$color = rand(0,127);
				break;
				case "grid":
					$color = rand(200,224);
				break;
				default:
					$color = rand(0,255);
				break;
			}
			return $color;
		}

		$defaults = array('word' => '', 'img_path' => '', 'img_url' => '', 'img_width' => '150', 'img_height' => '30', 'font_size' => '', 'font_path' => '', 'show_grid' => true, 'skew' => true, 'expiration' => 7200);

		foreach ($defaults as $key => $val)
		{
			if ( ! is_array($data))
			{
				if ( ! isset($$key) OR $$key == '')
				{
					$$key = $val;
				}
			}
			else
			{
				$$key = ( ! isset($data[$key])) ? $val : $data[$key];
			}
		}

		if ($img_path == '' OR $img_url == '')
		{
			return FALSE;
		}

		if ( ! @is_dir($img_path))
		{
			return FALSE;
		}

		if ( ! is_really_writable($img_path))
		{
			return FALSE;
		}

		if ( ! extension_loaded('gd'))
		{
			return FALSE;
		}

		// -----------------------------------
		// Select random Font from folder
		// -----------------------------------

		if ( is_dir($font_path) )
		{
			$handle = opendir($font_path);

			while(($file = @readdir($handle)) !== false)
			{
				if(!in_array($file,array('.','..')) && substr($file, strlen($file)-4, 4) == '.ttf' )
				{
					$fonts[] = $file;
				}
			}

			$font_file = $font_path. DIRECTORY_SEPARATOR .$fonts[array_rand($fonts)];
		}
		else
		{
			$font_file = $font_path;
		}

		// -----------------------------------
		// Remove old images
		// -----------------------------------

		list($usec, $sec) = explode(" ", microtime());
		$now = ((float)$usec + (float)$sec);

		$current_dir = @opendir($img_path);

		while($filename = @readdir($current_dir))
		{
			if ($filename != "." and $filename != ".." and $filename != "index.html")
			{
				$name = str_replace(".png", "", $filename);

				if (($name + $expiration) < $now)
				{
					@unlink($img_path.$filename);
				}
			}
		}

		@closedir($current_dir);

		// -----------------------------------
		// Do we have a "word" yet?
		// -----------------------------------

		 if ($word == '')
		 {
			// No Zero (for user clarity);
			$pool = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

			$str = '';
			for ($i = 0; $i < 6; $i++)
			{
				$str .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
			}

			$word = strtoupper($str);
		 }

		// -----------------------------------
		// Length of Word
		// -----------------------------------

		$length	= strlen($word);

		// -----------------------------------
		// Create image
		// -----------------------------------

		$im = ImageCreateTruecolor($img_width, $img_height);

		// -----------------------------------
		//  Assign colors
		// -----------------------------------

		$bg_color		= imagecolorallocate ($im, color('bg'), color('bg'), color('bg'));
		$border_color	= imagecolorallocate ($im, 153, 102, 102);
		$text_color		= imagecolorallocate ($im, color('text'), color('text'), color('text'));
		$grid_color[]	= imagecolorallocate($im, color('grid'), color('grid'), color('grid'));
		$grid_color[]	= $grid_color[0] + 150;
		$grid_color[]	= $grid_color[0] + 180;
		$grid_color[]	= $grid_color[0] + 210;
		$shadow_color	= imagecolorallocate($im, 255, 240, 240);

		// -----------------------------------
		//  Create the rectangle
		// -----------------------------------

		ImageFilledRectangle($im, 0, 0, $img_width, $img_height, $bg_color);

		if ( $show_grid == TRUE )
		{
			// X grid
			$grid = rand(20,25);
			for ($x = 0; $x < $img_width; $x += mt_rand($grid - 2, $grid + 2))
			{
				$current_colour = $grid_color[array_rand($grid_color)];
				imagedashedline($im, mt_rand($x -3, $x + 3), mt_rand(0, 4), mt_rand($x -3, $x + 3), mt_rand($img_height - 5, $img_height), $current_colour);
			}

			// Y grid
			for ($y = 0; $y < $img_height; $y += mt_rand($grid - 2, $grid + 2))
			{
				$current_colour = $grid_color[array_rand($grid_color)];
				imageline($im, mt_rand(0,4), mt_rand($y - 3, $y), mt_rand($img_width - 5, $img_width), mt_rand($y - 3, $y), $current_colour);
			}
		}

		// -----------------------------------
		//  Write the text
		// -----------------------------------

		$use_font = ($font_file != '' AND file_exists($font_file) AND function_exists('imagettftext')) ? TRUE : FALSE;

		if ($use_font == FALSE)
		{
			$font_size = 5;
			$x = rand(2, $img_width/($length/3));
			// y isnt used here
		}
		else
		{
			// Make font proportional to the image size
			$font_size	= !empty($font_size) ? $font_size : mt_rand(18,25);
			$x = rand(4, $img_width - (($font_size + ($font_size >> 1)) * $length));
			// y isnt used here
		}

		for ($i = 0; $i < strlen($word); $i++)
		{
			if ($use_font == FALSE)
			{
				$y = rand(0 , $img_height/2);
				imagestring($im, $font_size, $x, $y, substr($word, $i, 1), $text_color);
				$x += ($font_size*2);
			}
			else
			{
				$letter = substr($word, $i, 1);
				$less_rotate = array('c', 'N', 'U', 'Z', '7', '6', '9'); //letters that we don't want rotated too much...

				$angle = $skew == TRUE ? (in_array($letter, $less_rotate)) ? rand(-5, 5) : rand(-15, 15) : 0;
				$y = $img_height/2 + ($font_size >> 1) + ($skew == TRUE ? rand(-9, 9) : 0);
				$x += ($font_size >> 2);
				imagettftext($im, $font_size, $angle, $x, $y, $text_color, $font_file, $letter);
				$x += $font_size + ($font_size >> 2);
			}
		}


		// -----------------------------------
		//  Create the border
		// -----------------------------------

		imagerectangle($im, 0, 0, $img_width-1, $img_height-1, $border_color);

		// -----------------------------------
		//  Generate the image
		// -----------------------------------

		$img_name = $now.'.png';

		ImagePNG($im, $img_path.$img_name);

		$img = "<img src=\"$img_url$img_name\" width=\"$img_width\" height=\"$img_height\" style=\"border:0;\" alt=\" \" />";

		ImageDestroy($im);

		return array('word' => $word, 'time' => $now, 'image' => $img);
	}
}

// ------------------------------------------------------------------------

/* End of file captcha_helper.php */
/* Location: ./system/heleprs/captcha_helper.php */