<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title;  ?> </title>
<link href="./css/style.css" rel="stylesheet">


<?php include 'include/extraforhead.php'; ?>
</head>

<body>
<?php include'include/openbody.php'; ?>


<style>
.bar{
    background-color: black;
    width: 100%;
    height: 50px;
   
}
</style>
<div class="bar" >
<?php echo $select_menu['basic_menu'],$select_menu['post_menu'] ;?>
</div>
