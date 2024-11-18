<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>

    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;

        }

        tr, td, th {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
    include_once("config.php");

    $getUser = $pdo-prepare("SELECT * FROM users");
    $getUser->execute();

    $users = $getUser->fetchAll();


    ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            <?php

            foreach($users as $user):

            ?>

            <tr>
                <td><?= htmlspecialchars($user['id']) ?></td>
                <td><?= htmlspecialchars($user['username']) ?></td>
                <td><?= htmlspecialchars($user['name']) ?></td>
                <td><?= htmlspecialchars($user['surname']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
            
            <td>
                <a href="delete.php id=<?=urlencode($user['id'])?>">delete</a>
                <a href="edit.php id=<?=urlencode($user['id'])?>">uptade</a>
                
            
            
            
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php">Add user</a>
</body>
</html>
