<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
// $host = 'scp108.hosting.reg.ru';
// $user = 'u0921714_work';
// $pass = 'FrwB2.K7xfLi';
// $conn = new mysqli($host, $user, $pass);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } else {
//     echo "Connected to MySQL successfully!";
// }

try {
    $db = new PDO("mysql:dbname=u0921714_calc;host=scp108.hosting.reg.ru","u0921714_work","FrwB2.K7xfLi");
    echo 'connected!';
} catch(PDOException $e){
    echo $e;
	die('Ошибка подключения к серверу баз данных.');
}
?>