<style>
.basic_menu{
   color: white;
   background: blue;
   font-size: large;
   padding: 4px;
   border: 0px; 
}

</style>
<?php
$select_menu=array();
$select_menu['basic_menu']='
<select id="basic_menu" class="basic_menu" onChange="window.location.href=this.value">
    <option value=""  style="display: none; selected">Basic menu</option>
    <option value="index.php">Home</option>
    <option value="cat.php">Category</option>
    <option value="setting.php">Setting</option>
    <option value="users.php">Users</option>
    <option value="" disabled></option>
    <option value="logout.php">Logout</option>
</select>
';

$select_menu['post_menu']='
  <select id="post_menu" class="basic_menu" onChange="window.location.href=this.value">
    <option value=""  style="display: none; selected">Post menu</option>
    <option value="post.php">Add new Post</option>
    <option value="post_show.php">Show Post</option>
    
</select>
';


?>
