<?php  
function create($user, $pass){
    $dsn = 'mysql:host=localhost;dbname=cs_350';
    $username = 'student';
    $password = 'CS350';
    $db = new PDO($dsn, $username, $password);
   
    $pass = password_hash($pass,PASSWORD_DEFAULT);

$insert = "INSERT INTO final_users
    (username, password)
    VALUES
    (:user,:pass)";
$statement = $db->prepare($insert);
$statement->bindValue(':user',$user);
$statement->bindValue(':pass',$pass);
$statement->execute();
$statement->closeCursor();
header("Location:index1.php?action=login");
}

function login($user, $pass){
    $dsn = 'mysql:host=localhost;dbname=cs_350';
    $username = 'student';
    $password = 'CS350';
    $db = new PDO($dsn, $username, $password);

$select = "SELECT username,password
            FROM final_users
            WHERE username = \"$user\"";   
$statement = $db->prepare($select);
$statement->execute();
$results = $statement->fetch();
$statement->closeCursor();

if(password_verify($pass, $results["password"])) {
    echo 'Password is valid!';
    $_SESSION["user_login_in"] = true;
    $_SESSION['user'] = $user;
} else {
    echo 'Invalid password.';
}  
}

function logout(){
unset($_SESSION["user_login_in"]);
echo "LOGGED OUT";
}