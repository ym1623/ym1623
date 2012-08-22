<?php

require 'facebook.php';
$facebook = new OFacebook ();

echo '<html ' . $facebook->getHtml() . ' >';
echo '<head>' . $facebook->getHead() . ' </head>';
echo $facebook->getScript();
echo $facebook->getPlugin('like');
echo '</html>';
?>
