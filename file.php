<?php
    if (isset($_POST['comment']) && isset($_POST['name'])) {
        $comment = $_POST['name'] . '***' . $_POST['comment'];
    
        if (file_get_contents('comments.txt')) {
            $comment = '|||' . $comment;
        }

        file_put_contents('comments.txt', $comment, FILE_APPEND);
    }

    $text = file_get_contents('comments.txt');
    $comments = explode("|||", $text);
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
        <div class="row mb-3">
            <div class="col-12">
                    <p>Сейчас: <?php echo date("d.m.Y H:i:s", time()+30*60*60) ?></p>
                <form action="">
                    <div class="mb-3">
                        <label for="comment" class="form-label">String 1</label>
                        <!-- <input type="number" class="form-control" id="number1" name="number1" step="0.000001" value=" <?= $_POST['string1'] ?? '' ?>"> -->
                        <textarea class="form-control" name="comment" id="string1" rows="10"><?= $_POST['comment'] ?? '' ?></textarea>
                       
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Result</button>
                    </div>
                    <?php if (isset($result)) : ?>
                        <div class="mb-3">
                            <label for="result" class="form-label">Result</label>
                            <textarea class="form-control" id="result" rows="20"><?= $result ?></textarea>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($array)) : ?>
                        <pre><?php print_r($array); ?></pre>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>