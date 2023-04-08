<?php
$database = new PDO("mysql:host=127.0.0.1:3307;dbname=Rm1;", "root", "");//подключение к БД
$query = $database->query("SELECT id, title, text FROM statya");//выполняем запрос
// foreach ($query as $row) {//перебор возвращенных значений
//     print_r($row);
// }
$articles = $query->fetchAll(PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <?php foreach($query as $row): ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['title'] . $id?></h5>
                        <!-- <p class="card-text"><?= $row['text']?></p> -->
                        <a href="article.php?id=" class="btn btn-primary">Пщсмотреть</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
                    