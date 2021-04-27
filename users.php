<?php
$dsn = 'mysql:host=localhost;dbname=cs_350';
$username = 'student';
$password = 'CS350';

try{
$db = new PDO($dsn, $username, $password);

$select = "SELECT username, password
            FROM final_users";   
$statement = $db->prepare($select);
$statement->execute();
$results = $statement->fetchAll();
$statement->closeCursor();
}catch(PDOException $e){
$msg = $e->getMessage();
echo"<p> ERROR: $msg</p>";
}
?>

<head>
    <style>
        table,tr,th,td{
            padding: 10px;
            border-collapse: collapse;
            border: 1px solid black;
            border-color: black;
        }
        li {
  display: inline;
    }
    </style>
</head>
<body>
<table>
    <tr>
    <th>Username</th>
    <th>Password</th>
    </tr>
   <?php foreach($results as $row): ?>
    <tr>
    <td><?php echo $row['username']; ?> </td>
    <td><?php echo $row['password']; ?> </td>
   </tr>
   <?php endforeach; ?>
</table>