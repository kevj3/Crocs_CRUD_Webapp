<style>
        table,tr,th,td{
            padding: 10px;
            border-collapse: collapse;
            border: 1px solid black;
            border-color: black;
        }
        li {
            display: inline;
            padding: 10px;
         }

</style>

<?php if(empty($_SESSION['user_login_in'])){ ?>
<Nav>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="controller.php?action=create">Sign up</a></li>
  <li><a href="controller.php?action=login"">Login</a></li>
  <li><a href="controller.php?action=users"">Users</a></li>
</ul>
</Nav>
    <?php } else { ?>
<Nav>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="controller.php?action=crocs">Crocs</a></li>
  <li><a href="controller.php?action=collection">Collection</a></li>
  <li><a href="controller.php?action=logout">Logout</a></li>
  <li><a href="controller.php?action=users"">Users</a></li>
</ul>
</Nav>
    <?php } ?>
