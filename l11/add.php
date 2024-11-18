<?php



include_once('config.php');



if(isset($_POST['submit'])){

    $username = $_POST['username'];

    $name = $_POST['name'];

    $surname = $_POST['surname'];

    $email = $_POST['email'];





    try{



        //Prepare SQL with hashed password



        $sql ="INSERT INTO users (username, name, surname, email) VALUES (:username, :name, :surname, :email)";



        $insertSql = $pdo->prepare($sql);



        $insertSql->bindParam(':username', $username);

        $insertSql->bindParam(':name', $name);

        $insertSql->bindParam(':surname', $surname);

        $insertSql->bindParam(':email', $email);



        $insertSql->execite();



        echo "The user has been added succefully <br>";

        echo "<a href="dashboard.php">Dashboard</a>";

    }catch(PDOException $e){

        echo "Error:" . $e->getMessage();

    }

}


