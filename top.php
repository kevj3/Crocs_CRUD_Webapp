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
  <li><a href="controller.php?action=create">Create a user</a></li>
  <li><a href="controller.php?action=login"">Login</a></li>
</ul>
</Nav>
    <?php } else { ?>
<Nav>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="controller.php?action=secret">Secret</a></li>
  <li><a href="controller.php?action=logout">Logout</a></li>
</ul>
</Nav>
    <?php } ?>
