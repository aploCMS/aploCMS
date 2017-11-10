

 <meta  charset='utf-8' />
  
 <title><?=$post['titlos']?></title>
    <meta name='copyright' content='Copyright <?=$setting['site_name']?>'>
    <meta name="description" content="<?=$post['mini_keimeno']?>" />
    <meta name="keywords" content="<?=$post['keywords']?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="<?=$post['name']?>" />
    <meta name="application-name" content="aploCMS" />
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="shortcut icon" href="favicon.ico">
    
 <!-- For Facebook -->   
<meta property="og:title" content="<?=$post['titlos']?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="http://<?=$_SERVER['SERVER_NAME'].'/'.$img_u ?>" />
<meta property="og:url" content="<?=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
<meta property="og:description" content="<?=$post['mini_keimeno']?>" />

<meta property="og:tags" content="<?=$post['keywords']; ?>"/>
<meta property="article:published_time" content="<?=date("d F Y H:i:s.", filectime($dir));  ?>" />
<meta property="article:author" contnet="<?=$post['name']; ?>"/> 


<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?=$post['titlos']?>" />
<meta name="twitter:description" content="<?=$post['mini_keimeno']?>" />
<meta name="twitter:image" content="http://<?=$_SERVER['SERVER_NAME'].'/'.$img_u ?>" />


<meta name="geo.region" content="GR-A1" />
<meta name="geo.placename" content="Athens" />
<meta name="geo.position" content=" " />
<meta name="ICBM" content=" " />
</head>
