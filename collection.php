<?php
$dsn = 'mysql:host=localhost;dbname=cs_350';
$username = 'student';
$password = 'CS350';

try{
$db = new PDO($dsn, $username, $password);

$select = "SELECT color, ownerId
            FROM final_crocs";   
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
      body{
        background-color:black; 
        color: white;
      }
        table,tr,th,td{
            padding: 10px;
            border-collapse: collapse;
            border: 1px solid black;
            border-color: white;
        }
        li {
  display: inline;
    }
    </style>
</head>
<body>
<table>
    <tr>
    <th>Color</th>
    <th>Owner</th>
    </tr>
   <?php foreach($results as $row): ?>
    <tr>
    <td><?php echo $row['color']; ?> </td>
    <td><?php echo $row['ownerId']; ?> </td>
    <td><a href="controller_update.php?id=<?php echo $row['id']  ?>">Update</a></td>
    <td><a href="controller_delete.php?id=<?php echo $row['id']  ?>">Delete</a></td>
   </tr>
   <?php endforeach; ?>
</table>