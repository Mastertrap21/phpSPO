<?php

$env_global = explode(";",getenv("phpSPO"));

$Settings = array(
	'Url' => "https://mediadev88.sharepoint.com",
    'OneDriveUrl' => "https://mediadev88-my.SharePoint.com",
    'Password' => $env_global[1],
    'UserName' => $env_global[0]
);


$AppSettings = array(
	'TenantName' => "mediadev88.onmicrosoft.com",
	'ClientId' => "d426369e-c84b-47db-b6b1-b9c824ac2ea2",
	'ClientSecret' => "wrizJBW41]|=@govNEDR059",
	'Title' => "Office365 Graph explorer",
	'RedirectUrl' => "http://localhost:8078/GraphExplorer/SignIn.php"
);

