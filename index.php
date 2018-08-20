<?php
    require_once("/src/Facebook/autoload.php");

    $fb = new Facebook\Facebook([
    'app_id' => '1798555086905353', // Replace {app-id} with your app id
    'app_secret' => '5418e3c0ce8eb6cd0af54d1f78b51869',
    'default_graph_version' => 'v3.1',
    ]);
    $helper = $fb->getRedirectLoginHelper();

    $permissions = ['email']; // Optional permissions
    $loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);
    $permissions = ['public_profile', 'email', 'user_photos']; // Optional permissions
    $loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php facebook</title>
</head>
<body>
    
</body>
</html>

