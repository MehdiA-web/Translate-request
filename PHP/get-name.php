<?php

// Get the information of the currently logged-in user
$userinfo = userInfo(@@USER_LOGGED);

// Concatenate the user's first name and last name and assign it to the 'txt_translatorName' variable
@@txt_translatorName = $userinfo['firstname'] . " " . $userinfo['lastname'];
