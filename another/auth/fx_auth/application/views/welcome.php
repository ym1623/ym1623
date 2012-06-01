Hi, <strong><?php echo $username; ?></strong>! You are logged in now. 
<br /><?=anchor('/auth/logout/', 'Logout') ?>
<br /><?=anchor('/auth/change_password', 'Change Password') ?>
<br /><?=anchor('/auth/change_email', 'Change Email') ?>
<br /><?=anchor('/auth/unregister', 'Unregister') ?>
