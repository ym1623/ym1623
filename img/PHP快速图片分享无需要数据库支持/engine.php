<?
header("content-Type: text/html; charset=utf-8");
/* -----------------------------------------

  Chevereto - Script de hosting de imagenes
  Nightly Build 1.9r1 (29/08/2010)
  http://www.chevereto.com/

  Released under the GPL 2.0
  Copyright (C) 2008 by Rodolfo Berrios
  <inbox at rodolfoberrios dot com>

  ----------------------------------------- */

// VERSION DEL SCRIPT
define('SC_VERSION','NB1.9r1');

// Config
require('config.php');

// Pseudo Debug
if(!$debug_mode) {
	error_reporting(0);
}

// Critital error box
$o_errorbox = '<div style="background: #F00; color: #FFF; font-family: Courier, monospace; font-weight: bold; padding: 1em; text-align: center;">';
$c_errorbox = '</div>';

// Fx para comprobar variables
function check_var($var) {
	if(!isset($var) && empty($var)) {
		return false;
	} else {
		return true;
	}
}

// Fx para comprobar las keys
function check_key($var) {
	if(check_var($var)) {
		session_unset();
		header('Location: '.URL_SCRIPT);
	}
}

function check_permissions($dir) {
	global $o_errorbox, $c_errorbox;
	if(!is_writable($dir)) {
		echo $o_errorbox.'Critital error 01: There is no write permission in '.$dir.$c_errorbox;
		die();
	}
}
// CH-Ch-Check Permissions
check_permissions(DIR_UP);
check_permissions(DIR_IM);
check_permissions(DIR_WORKING);
check_permissions(DIR_TEMP);
check_permissions(DIR_TH);

// CH-CH-Check Upload config
$ini_upload = trim(ini_get('upload_max_filesize'), 'M');
if($ini_upload<$max_mb) {
	echo $o_errorbox.'Critital error 02: Max. image size ('.$max_mb.'Mb) is greater than the value in php.ini ('.$ini_upload.'Mb)'.$c_errorbox;
	die();
}

// CH-CH-Check GD
if (!extension_loaded('gd') && !function_exists('gd_info')) {
	echo $o_errorbox.'Critital error 03: You must load the GD extension. <a href="http://php.net/manual/en/book.image.php">http://php.net/manual/en/book.image.php</a>'.$c_errorbox;
	die();
}

// CH-CH-Check $DOM_SCRIPT
if(!isset($DOM_SCRIPT) or empty($DOM_SCRIPT)) {
	echo $o_errorbox.'Critital error 04: Invalid $DOM_SCRIPT, edit it manually in config.php'.$c_errorbox;
	die();
}

// CH-CH-Chek cURL
if (!extension_loaded('curl')) {
	echo $o_errorbox.'Critital error 05: You must load the cURL extension. <a href="http://php.net/manual/en/book.curl.php">http://php.net/manual/en/book.curl.php</a>'.$c_errorbox;
	die();
}

// DOCTITLE
define('ESP_TITULO',' | ');

// VARIABLES
$lup = $_FILES['fileup'];
$remota = $_POST['remota'];
$postedkey = $_POST['postkey'];
$resizf = str_replace(' ', '', $_POST['resize']); // Resize via POST
$url = $_GET['url'];
$urlrez = $_GET['urlrez'];
$v = $_GET['v'];  if ($v=='.htaccess') { unset($v); $v=''; }
$page = $_GET['p'];
$view_fld = $_GET['folder'];
$resizr = $_GET['ancho']; // Resize via GET

// SHORT URL SERVICE
switch($cut_url_service) {
	case 'tinyurl':
		$tiny_api = 'http://tinyurl.com/api-create.php?url=';
		$tiny_service = 'TinyURL';
		break;
	default:
		$tiny_api = 'http://tinyurl.com/api-create.php?url=';
		$tiny_service = 'TinyURL';
		break;
}

// LANGUAGE
include('lang/'.LANG.'.php');
if (LANG!=='es') { $lang = LANG; }

// SET Modo default
$modo = 1;

// DE DONDE VIENES?
$referer = parse_url($_SERVER['HTTP_REFERER']);
if (empty($referer['host']) && !isset($referer['host'])) {
	$referido = $DOM_SCRIPT;
} else {
	$referido = $referer['host'];
}

if (isset($remota)) {
	$ref3 = explode('?',$ref2); // img.godlike.cl?urlrez=http:
	$refok = $ref3['0'];
} else {
	$refok = $ref2;
}

// Limite de actividad
if (isset($lup) || isset($remota)) {
	if ($referido !== $DOM_SCRIPT && $lim_act==true) {
		if (!isset($url)) {
			echo $o_errorbox.ERROR_REF.$c_errorbox;
			die;
		}
	}
}

// EL REZ
if (isset($resizr)) {
		$resize = str_replace(' ', '', $resizr);
	} else {
		$resize = str_replace(' ', '', $resizf);
	}

// MANEJEMOS LA RUP
if (isset($url)) {
		$rup = str_replace(' ', '', $url);
	} else {
		$rup = str_replace(' ', '', $remota);
	}

// DETERMINAMOS QUE MOSTRAMOS Y HACEMOS
	//  1 = Mostrar formulario.
	//  2 = Muetsra el visualizador
	//  3 = Sube un archivo
	//  4 = muestra la pag del error de redimensionamiento
	//  5 = Muestra una pag. estatica
	//  spit = devuelve los mensajes de error.

// Modo pagina
if (isset($page)) {
	unset($modo);
	$modo = 5;
	// haga el switch
	switch ($page) {
		// Los errores
		case '400':
        	$h1 = TITLE_400;
			$explained = DESC_400;
        break;
		case '401':
        	$h1 = TITLE_401;
			$explained = DESC_401;
        break;
		case '403':
        	$h1 = TITLE_403;
			$explained = DESC_403;
        break;
		case '404':
        	$h1 = TITLE_404;
			$explained = DESC_404;
        break;
		case '500':
        	$h1 = TITLE_500;
			$explained = DESC_500;
		case '503':
        	$h1 = TITLE_503;
			$explained = DESC_503;
        break;
		default:
			$h1 = TITLE_404;
			$explained = DESC_404;
			$page = 'generico';
		break;
	}
	$titulo = $h1.ESP_TITULO;
}

// FX validate URL
function isValidURL($url) {
	return preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url);
}

// FX Filtro (REMOTO)
function checkremota($rup) {
	if(isValidURL($rup)) {
		$info = getimagesize($rup);
		if(!empty($info)) {
			return true;
		} else {
			return false;
		}
	} else {
		return false;
	}
}

// Si hay posteo / urleo
if (isset($lup) || isset($remota) || isset($url)) {
	if ($lup[size] ==! null || !empty($remota) || !empty($url)) {
		unset($modo);
		$modo = 3;
	} else {
		unset($modo);
		$modo = 1;
		$spit = true;
		$errormsg = FORM_INCOMPLETE;
		$titulo = TITLE_FORM_INCOMPLETE.ESP_TITULO;
	}
}

// SI HAY DOBLE POSTEO...
if (!empty($rup) && !empty($lup['type'])) {
	unset($modo);
	$modo = 1;
	$spit = true;
	$errormsg = DOBLE_POSTED;
	$titulo = FATAL_ERROR_TITLE.ESP_TITULO;
}

// Si hay urlrez, seteamos el modo rr
if (isset($urlrez)) {
	if (!empty($urlrez)) {
		
		// Valid URL?
		if(!isValidURL($urlrez) or !checkremota($urlrez)) {
			unset($modo);
			$modo = 1;
			$spit = true;
			$errormsg = CRITIC_ERROR_INPUT;
			$titulo = ERROR_UPLOADING.ESP_TITULO;
		} else {
			// veamos la extension...
			$info_rez = getimagesize($urlrez);		
			if (preg_match("@image/(gif|pjpeg|jpeg|png|x-png|bmp)$@", $info_rez['mime'])) {
				unset($modo);
				$modo = 'rr';
				$titulo = ENTER_WIDTH.ESP_TITULO;
			} else { 
				$spit = true;
				$errormsg = INVALID_EXT;
				$titulo = INVALID_TITLE.ESP_TITULO;
			}
		}
	} else {
		$spit = true;
		$errormsg = NOTHING_TO_RESIZE;
		$titulo = INPUT_ERROR.ESP_TITULO;
	}
}

// Si hay V, seteamos el modo 2
if (isset($v)) {
	if (!empty($v)) {
		unset($modo);
		$modo = 2;
		$name = $v;
	} else {
		$spit = true;
		$errormsg = NO_ID;
		$titulo = NO_ID_TITLE.ESP_TITULO;
	}
}

$string = $rup.$urlrez;

if (preg_match("@".$DOM_SCRIPT."/(site-img|js)/@", $string)) {
	unset($modo);
	$modo = 1;
	$spit = true;
	$errormsg = NO_SELF_UPLOAD;
	$titulo = CANT_UPLOAD_TITLE.ESP_TITULO;	
}

if($modo==1) {
	
	// Vemos si ya existe un postkey
	session_start();
	check_key($_SESSION['postedkey']);
	session_write_close();
	
	// Generamos la postkey para el formulario
	$postkey = md5(uniqid(rand(), true));
}

/* HAGAMOS EL UPLOADING ---MODO 3--- */
if ($modo==3) {
	session_start();
	check_key($_SESSION['postedkey']);
	$_SESSION['postedkey'] = $postedkey;
	session_write_close();

	// Primer filtro (LOCAL)
	function checklocal($lup) {	
		if (preg_match("@image/(gif|pjpeg|jpeg|png|x-png|bmp)$@", $lup['type'])) { return true; }
		if ($lup['size']<$max_by) { return true; }
		return false;
	}
	

	if (checklocal($lup) || checkremota($rup)) {
			
		// LA SUBIDA LOCAL
		if ($lup['size'] ==! null) {
			
			copy($lup['tmp_name'], DIR_WORKING.$lup['name']);		
			$tmp_name = $lup[name]; // Temp name
		}
		// LA SUBIDA REMOTA
		if (!empty($rup)) {
			// Veamos si viene del resize
			$grabname = substr("$rup", -21); // up/temp/000000000.jpg
			if (file_exists($grabname)) {
				$tmp_name = substr("$rup", -13);
				rename($grabname, DIR_WORKING.$tmp_name);
			} else {
				// GET A NAME
				$partes = explode('/', $rup);
				$rname = $partes[count($partes) - 1];		
				// Conectando
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL,$rup);
				curl_setopt($ch, CURLOPT_HEADER, false);
				curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				set_time_limit(300); // 5 Min. PHP
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,300); // 5 Min.cURL
				curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.0; es-ES; rv:1.9.0.6) Gecko/2009011913 Firefox/3.0.6');
				
				$rup_parse = parse_url($rup);
				$rup_temp = substr($rup_parse['path'], 1);
				
				if (preg_match("@".DIR_TEMP."@", $rup_temp)) {
					$delete_temp = true;
				}
								
				$out = fopen(DIR_WORKING.$rname, 'wb');
				curl_setopt($ch, CURLOPT_FILE, $out);
				// grab
				$resultado = curl_exec($ch);
				fclose($out);
				curl_close($ch);
				$tmp_name = $rname;
			}
		} // remota
			
		// Manejemos la temporal
		$handlework = DIR_WORKING.$tmp_name;
		
		$info = getimagesize($handlework);
		
		// Otras lecturas
		$statinfo = @stat($handlework);
		$tamano = $statinfo['size']; // BYTES
		$tamano_kb = round($tamano/1024,2);
		$mimosa = $info['mime']; // SI POR LA CONCHETUMADRE
		$ancho = $info[0]; // Fijate en esto!
		$alto = $info[1];
		$mime = $info['mime'];

		if (!$ancho || !$alto || !$mime || !$tamano) { // Fallan esas leseras
			$invalida = true;
			$inv_txt = INVALID_CORRUPT;
			$no = true; 
		}
		if ($tamano > $max_by) { // Muy pesada
			$peso = true;
			$no = true;
		}
			
		// Manejemos el mime tipe para los "amigos" que usan otras extensiones...
		if ($mimosa=="image/gif") { $exten = 'gif'; }
		if ($mimosa=="image/pjeg") { $exten = 'jpg'; }
		if ($mimosa=="image/jpeg") { $exten = 'jpg'; }
		if ($mimosa=="image/png") { $exten = 'png'; }
		if ($mimosa=="image/bmp" or $mimosa=="image/x-ms-bmp") {
			$exten = 'bmp';
			
			// Si es BMP la pasamos a GD...
			function bmp2gd($src, $dest = false) {
				/*** try to open the file for reading ***/
				if(!($src_f = fopen($src, "rb"))) {
					return false;
				}
			
				/*** try to open the destination file for writing ***/
				if(!($dest_f = fopen($dest, "wb"))) {
					return false;
				}
				
				/*** grab the header ***/
				$header = unpack("vtype/Vsize/v2reserved/Voffset", fread( $src_f, 14));
				
				/*** grab the rest of the image ***/
				$info = unpack("Vsize/Vwidth/Vheight/vplanes/vbits/Vcompression/Vimagesize/Vxres/Vyres/Vncolor/Vimportant",
				fread($src_f, 40));
				
				/*** extract the header and info into varibles ***/
				extract($info);
				extract($header);
				
				/*** check for BMP signature ***/
				if($type != 0x4D42) {
					return false;
				}
				
				/*** set the pallete ***/
				$palette_size = $offset - 54;
				$ncolor = $palette_size / 4;
				$gd_header = "";
				
				/*** true-color vs. palette ***/
				$gd_header .= ($palette_size == 0) ? "\xFF\xFE" : "\xFF\xFF";
				$gd_header .= pack("n2", $width, $height);
				$gd_header .= ($palette_size == 0) ? "\x01" : "\x00";
				if($palette_size) {
					$gd_header .= pack("n", $ncolor);
				}
				/*** we do not allow transparency ***/
				$gd_header .= "\xFF\xFF\xFF\xFF";
				
				/*** write the destination headers ***/
				fwrite($dest_f, $gd_header);
				
				/*** if we have a valid palette ***/
				if($palette_size) {
					/*** read the palette ***/
					$palette = fread($src_f, $palette_size);
					/*** begin the gd palette ***/
					$gd_palette = "";
					$j = 0;
					/*** loop of the palette ***/
					while($j < $palette_size)
					{
						$b = $palette{$j++};
						$g = $palette{$j++};
						$r = $palette{$j++};
						$a = $palette{$j++};
						/*** assemble the gd palette ***/
						$gd_palette .= "$r$g$b$a";
					}
					/*** finish the palette ***/
					$gd_palette .= str_repeat("\x00\x00\x00\x00", 256 - $ncolor);
					/*** write the gd palette ***/
					fwrite($dest_f, $gd_palette);
				}
				
				/*** scan line size and alignment ***/
				$scan_line_size = (($bits * $width) + 7) >> 3;
				$scan_line_align = ($scan_line_size & 0x03) ? 4 - ($scan_line_size & 0x03) : 0;
				
				/*** this is where the work is done ***/
				for($i = 0, $l = $height - 1; $i < $height; $i++, $l--) {
					/*** create scan lines starting from bottom ***/
					fseek($src_f, $offset + (($scan_line_size + $scan_line_align) * $l));
					$scan_line = fread($src_f, $scan_line_size);
					if($bits == 24)
					{
						$gd_scan_line = "";
						$j = 0;
						while($j < $scan_line_size)
						{
							$b = $scan_line{$j++};
							$g = $scan_line{$j++};
							$r = $scan_line{$j++};
							$gd_scan_line .= "\x00$r$g$b";
						}
					}
					elseif($bits == 8) {
						$gd_scan_line = $scan_line;
					}
					elseif($bits == 4) {
						$gd_scan_line = "";
						$j = 0;
						while($j < $scan_line_size) {
							$byte = ord($scan_line{$j++});
							$p1 = chr($byte >> 4);
							$p2 = chr($byte & 0x0F);
							$gd_scan_line .= "$p1$p2";
						}
						$gd_scan_line = substr($gd_scan_line, 0, $width);
					}
					elseif($bits == 1) {
						$gd_scan_line = "";
						$j = 0;
						while($j < $scan_line_size) {
							$byte = ord($scan_line{$j++});
							$p1 = chr((int) (($byte & 0x80) != 0));
							$p2 = chr((int) (($byte & 0x40) != 0));
							$p3 = chr((int) (($byte & 0x20) != 0));
							$p4 = chr((int) (($byte & 0x10) != 0));
							$p5 = chr((int) (($byte & 0x08) != 0));
							$p6 = chr((int) (($byte & 0x04) != 0));
							$p7 = chr((int) (($byte & 0x02) != 0));
							$p8 = chr((int) (($byte & 0x01) != 0));
							$gd_scan_line .= "$p1$p2$p3$p4$p5$p6$p7$p8";
						}
					/*** put the gd scan lines together ***/
					$gd_scan_line = substr($gd_scan_line, 0, $width);
					}
					/*** write the gd scan lines ***/
					fwrite($dest_f, $gd_scan_line);
				}
				/*** close the source file ***/
				fclose($src_f);
				/*** close the destination file ***/
				fclose($dest_f);
				
				return true;
			}
			

			function ImageCreateFromBmp($filename) {
				/*** create a temp file ***/
				$tmp_name = tempnam("/tmp", "GD");
				/*** convert to gd ***/
				if(bmp2gd($filename, $tmp_name)) {
					/*** create new image ***/
					$img = imagecreatefromgd($tmp_name);
					/*** remove temp file ***/
					unlink($tmp_name);
					/*** return the image ***/
					return $img;
				}
				return false;
			}
			
			$bmp_img = ImageCreateFromBmp($handlework);
			unlink($handlework);

			$bmp2png = DIR_WORKING.substr($tmp_name, 0, -3).'png';
			imagepng($bmp_img, $bmp2png);
			
			unset($handlework); $handlework = $bmp2png;		
			unset($exten); $exten = 'png';
			
		}
		
		if (!isset($no)) {
			$up = true;
		}
		
		if ($no==true) {
            // Eliminamos la imagen del up/working..
            unlink($handlework);

            $spit = true;
            unset($modo);
            $modo = 1;
            if ($peso==true && $invalida==false) {
                $pes_txt = TOO_HEAVY.' ('.$max_mb.'MB max.)';
                $errormsg = $pes_txt;
            }
            elseif ($peso==true && $invalida==true) {
                $pes_txt = TOO_HEAVY.' ('.$max_mb.'MB max.)';
                $ademas = ' '.ANDTEXT.' ';
                $errormsg = $pes_txt.$ademas;
            } else {
                $errormsg = INVALID_EXT;
            }
            
        } // no!
		
		// Hay subida compadre...
		if ($up) {
			
			/* TODO opciones de renombre */
			
			// Limpiemos el nombre
			// --> Tambien me quedo "super rico".
			$lower = strtolower($tmp_name); // Solo minusculas
			$alnum = ereg_replace("[^[:alnum:]]","",$lower); // Solo alfanumericos
			if ($exten==peg) { unset($exten); $exten = 'jpg'; }
			$clear = substr_replace($alnum, '', -3); // sin extension ni punto
			// Cortemos el nombre (si hace falta)
			$conteo = strlen($clear);
			
			// Random
			$ch_1 = chr(rand(ord("a"), ord("z")));
			$ch_2 = chr(rand(ord("z"), ord("a")));
			
			if ($conteo>$max_name) {
				$renombre = substr("$clear", 0, $max_name);
			} else {
				if (empty($clear)) {
					$renombre = $ch_1.$ch_2.$ch_1;
				} else {
					$renombre = $clear;
				}
			}
				
			// Si existe el nombre, renombramos el que estamos subiendo.
        	if (file_exists(DIR_IM.$renombre.'.'.$exten)) {
				if ($conteo>$totalchars) { 
					// Si el nombre es muy largo, corta
					$renombra = substr("$renombre", 0, $max_name-4); // 4 -> El remplazo de mas abajo			
				} else { 
					$renombra = $renombre;	
				}
				// Vamos a darle caracteres aleatorios.			
				$name = $renombra.$ch_1.$ch_2.$ch_1.'.'.$exten;
			} else { 
				$name = $renombre.'.'.$exten;
			}		
			
			// Setiemos el redimensionamiento
			if (!empty($resize)) {				
				if(preg_match("/[^0-9\.]/",$resize)) { // Queremos solo numeros!
					$errormsg = JUST_NUMBERS;
					$titulo = UPLOADED_BUT_NOT_RESIZED.ESP_TITULO;
					$spit = true;
					$red = 2;
				} else {
					if($allow_over_resize==false && $resize>$ancho) {
						$errormsg = OVER_RESIZE_ERROR.' ('.$ancho.'px)';
						$titulo = UPLOADED_BUT_NOT_RESIZED.ESP_TITULO;
						$spit = true;
						$red = 2;				
					} else {
						if ($resize<=$higres && $resize>=$lowres) {
							$new_alto = round($resize*$alto/$ancho);
							// Seteamos el nuevo alto y ancho
							unset($ancho);
							unset($alto);
							$ancho = $resize;
							$alto = $new_alto;
							$red = 1;
						} else {
							$errormsg = RESIZE_LIMITS.' '.$lowres.' '.ANDTEXT.' '.$higres.' (pixels)';
							$titulo = UPLOADED_BUT_NOT_RESIZED.ESP_TITULO;
							$spit = true;
							$red = 2;
						}
					}
				}
			}
						
			
			// Target -> Archivo a redimensionar (handlework)
			// Archivo -> Archivo work (DIR_WORKING.$name)
			function redimensionar($tipo,$target,$archivo,$ancho_n,$alto_n) {
				
				/* TODO agregar un handle pa esta wea cuando se cae */
				if ($tipo==gif) {
					$src = imagecreatefromgif($target);
				}
				if ($tipo==png) {
					$src = imagecreatefrompng($target);
				}
				if ($tipo==jpg) {
					$src = imagecreatefromjpeg($target);
				}
						
				$era_x = imageSX($src);
				$era_y = imageSY($src);
				$destino = imagecreatetruecolor($ancho_n,$alto_n);
				
				// gif
				if ($tipo==gif) {
					$transparente = imagecolortransparent($src);
					imagepalettecopy($src, $destino);
					imagefill($destino, 0, 0, $transparente);
					imagecolortransparent($destino, $transparente);
					imagetruecolortopalette($destino, true, 256);
				} else {
					imagecolortransparent($destino, imagecolorallocate($destino, 0, 0, 0) );
				}			
				
				imagealphablending($destino, false);
        		imagesavealpha($destino, true);
				
				imagecopyresampled($destino,$src,0,0,0,0,$ancho_n,$alto_n,$era_x,$era_y);
				
				if ($tipo==gif) { imagegif($destino, $archivo); }
				if ($tipo==png) { imagepng($destino, $archivo); }
				if ($tipo==jpg) { imagejpeg($destino, $archivo, 86); }
				if ($tipo==bmp) { imagewbmp($destino, $archivo); }
				
				imagedestroy($destino); 
				imagedestroy($src);	
				
			} // La funcion
			
			if (empty($resize)) {
				// Haga como si nada...
				copy($handlework, DIR_IM.$name);
				$titulo = UPLOAD_OK.ESP_TITULO;
			}
			if ($red==1) {
				// Correr la funcion redimensionamiento *img en el working
				redimensionar($exten,$handlework,DIR_WORKING.$name,$ancho,$alto);
						
				// Mover la redimensionada
				copy(DIR_WORKING.$name, DIR_IM.$name);
				$titulo = UPLOAD_AND_RESIZED.ESP_TITULO;
								
				// Borramos
				unlink(DIR_WORKING.$name);
				if($delete_temp==true) { unlink($rup_temp); }

			}
			if ($red==2) {
				// No red correcto, renombra la temp (vea si esta)
				$tname = DIR_TEMP.$name;			
				if (file_exists(DIR_TEMP.$name)) {
					$numletra = ereg_replace("[^[:alnum:]]","",$name);
					$cleartemp = substr_replace($numletra, '', -3); // sin extension ni punto
					$randtemp = rand(000,999);
					$tname = DIR_TEMP.$cleartemp.$randtemp.'.'.$exten;						
				} else {
					$tname = DIR_TEMP.$name;
				}
				rename($handlework, $tname);
				$URLrdn = URL_SCRIPT.$tname;
				
				// Setea el modo 4!
				unset($modo);
				$modo = 4;
			}
			
			// si se sube algo creemos el thumb
			if ((empty($resize) || $red==1)) {
				// thumb
				if ($ancho>$alto) {
					unset($mini_alto);
					$mini_alto = round($mini_ancho*$alto/$ancho);	
				}
				if ($ancho<$alto) {
					unset($mini_ancho);
					$mini_ancho = round($mini_alto*$ancho/$alto);
				}
				// Thumb
				redimensionar($exten,$handlework,DIR_TH.$name,$mini_ancho,$mini_alto);	
				// Chao work
				unlink($handlework);		
			}
			
		}
	
	} else { // Check local + remote 
		unset($modo);
		$modo = 1;
		$spit = true;
		$errormsg = CRITIC_ERROR_INPUT;
		$titulo = ERROR_UPLOADING.ESP_TITULO;
	}
		
}

if ($modo==2 || $modo==3) {
	// INFORMACION (ANCHO, ALTO y PESO)
	if ($modo==2) {
		if ($_GET['v']) {
			$id = $_GET['v'];
			$imagen = DIR_IM.$id;
			if (file_exists($imagen)==true) {
				$titulo = SEEING.' '.$id.' '.AT.' ';
				$info = getimagesize($imagen); //Obtenemos la informacion
				$statinfo = @stat($imagen);
					$ancho = $info[0];
					$alto = $info[1];	
					$mime = $info['mime']; 
						$tamano = $statinfo['size']; //Bytes
						$tamano_kb = round($tamano*0.0009765625, 2);
					$canales = $info['channels'];
			} else {
				unset($modo);
				$modo = 1;
				$spit = true;
				$errormsg = NOT_EXISTS;
				$titulo = NOT_EXISTS_TITLE.ESP_TITULO;
			}
		}
	}
	
	// LAS URL
	$URLimg = URL_SCRIPT.DIR_IM.$name;
	$URLthm = URL_SCRIPT.DIR_TH.$name;
	$URLvim = URL_SCRIPT.'?v='.$name;
	$URLshr = $URLvim; // Para no cambiar mas abajo
	$eu_img = urlencode($URLimg);
	
	// Short URL using services like TinyURL.com		
	function cortar_url($url) {	
		global $tiny_api;
		$tiny = $tiny_api.$url;
		$chtny = curl_init();
		curl_setopt($chtny, CURLOPT_URL, $tiny);
		curl_setopt($chtny, CURLOPT_RETURNTRANSFER, 1);
		$ShortURL = curl_exec($chtny);
		curl_close($chtny);
		return $ShortURL;
	}
	
	// SI esta habilitado cortar url.. hagamolo.
	if ($cut_url==true) {
		
		// Si se da a elegir al usuario, cortemos si el quiere.
		if ($cut_url_user==true) {
			// El usuario quiere cortar url...
			if (isset($_COOKIE['prefurl'])) {
				$ShortURL = cortar_url($URLimg);
			}
		// Cortamos si o si ya que la prefencia es de script y no de usuario.
		} else {
			$ShortURL = cortar_url($URLimg);
		}

	}

}

if (!isset($titulo)) {
	$titulo = WELCOME;
}

?>