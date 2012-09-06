<?php

// enter the path to the folder containing your slideshow images below

$photodir = "photos";

// enable/disable custom strings (type "1" to enable the setting, leave blank to disable it)

$shuffle_photos       = "1"; // randomly loads the images in array on each page load
$time_interval        = "2000"; // time between slides, in miliseconds
$disable_panning      = "1"; // disables panning of oversized photos during playback
$disable_fading       = ""; // disables fading images in/out
$enable_autoplay      = "1"; // viewer starts playing the slideshow automatically when slideshow link/button is clicked
$enable_loop          = "1"; // images loop start to finish indefinitely
$disable_email_link   = ""; // hide email link in toolbar
$disable_photo_link   = ""; // hide photo link in toolbar
$disable_toolbar      = ""; // hide the toolbar completely
$text_font_size       = "14"; // input caption text font size, in pixels
$border_width         = "20"; // sets the photo's border width, in pixels
$disable_shade        = ""; // disables the shaded background
$shade_color          = "#000000"; // sets the shade color
$shade_opacity        = "0.7"; // sets the opacity of the shade. 0.0 is fully transparent, 1.0 is fully opaque
$background_color     = "#000000"; // input player background color, in hex fomat (eg. #123456)

// enter any other custom javascript strings below (see http://slideshow.triptracker.net/howto.html for details).
// this section makes it easy to plug future new functionality into the existing script...

$custom_options = "\n
        viewer.setOnClickEvent(viewer.startSlideShow);
";

// finished. leave the rest of this script as-is

?>

<html>

    <head>

        <title>shuffled slideshow</title>

        <script type="text/javascript"
	        src="http://slideshow.triptracker.net/slide.js"></script>

        <script type="text/javascript">
        <!--

        var viewer = new PhotoViewer();

        <?php

        $photos = array();

        $dh = opendir($photodir);

        while ($filename = readdir($dh)) {

            if ((($filename != ".") && ($filename != "..")) &&
            ((preg_match("/jpg/i",$filename)) or (preg_match("/gif/i",$filename)))){

                $photos[] = $filename;

            }

        }

        closedir($dh);

        if ($shuffle_photos) {

            shuffle($photos);

        }

        foreach ($photos as $photo) {

            echo "\n        viewer.add('".$photodir."/".$photo."'";

            $enabled_extensions = get_loaded_extensions();

                if (in_array(exif, $enabled_extensions)) {

                    $exif = exif_read_data ($photodir."/".$photo);

                    while (list($key,$val)=each($exif)){

                        if ($key == "DateTimeOriginal"){

                            $TIME = explode(" ",$val);

                            $DATE = explode(":", $TIME[0]);

                            echo ", 'Taken on ".$DATE[2].".".$DATE[1].".".$DATE[0]." at ".$TIME[1]."'";

                        }

                    }

                }

            echo ");";

        }

        if ($time_interval) { echo "\n        viewer.setSlideDuration($time_interval);"; }

        if ($disable_panning) { echo "\n        viewer.disablePanning();"; }

        if ($disable_fading) { echo "\n        viewer.disableFading();"; }

        if ($enable_autoplay) { echo "\n        viewer.enableAutoPlay();"; }

        if ($enable_loop) { echo "\n        viewer.enableLoop();"; }

        if ($disable_email_link) { echo "\n        viewer.disableEmailLink();"; }

        if ($disable_photo_link) { echo "\n        viewer.disablePhotoLink();"; }

        if ($disable_toolbar) { echo "\n        viewer.disableToolbar();"; }

        if ($text_font_size) { echo "\n        viewer.setFontSize($text_font_size);"; }

        if ($background_color) { echo "\n        viewer.setBackgroundColor('$background_color');"; }

        if ($border_width) { echo "\n        viewer.setBorderWidth($border_width);"; }

        if ($disable_shade) { echo "\n        viewer.disableShade();"; }

        if ($shade_color) { echo "\n        viewer.setShadeColor('$shade_color');"; }

        if ($shade_opacity) { echo "\n        viewer.setShadeOpacity($shade_opacity);"; }

        echo "$custom_options";

        ?>

        //-->
        </script>

    </head>

    <body>

        [ <a href="javascript:void(viewer.show(0))">play</a> ]

    </body>

</html>
