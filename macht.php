<?php
    if (
        isset($_GET['string1'])
        
    ) {
        // $result = abs($_GET['number1']);
        // $result = sqrt($_GET['number1']);
        // $result = ceil($_GET['number1']);
        // $result = floor($_GET['number1']);
        // $result = round($_GET['number1'], 0, PHP_ROUND_HALF_EVEN);
        // $result = min($_GET['number1'], $_GET['number2'], $_GET['number3']);
        // $result = max($_GET['number1'], $_GET['number2'], $_GET['number3']);
        // $result = max($_GET);
        // $numbers = [$_GET['number1'], $_GET['number2']];
        // $numbers[] = $_GET['number3'];
        // $result = max($numbers);
        $result = mb_strtolower($_GET['string1']);
    }
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
            <div class="col-12">
                <form action="">
                    <div class="mb-3">
                        <label for="string1" class="form-label">String 1</label>
                        <!-- <input type="number" class="form-control" id="number1" name="number1" step="0.000001" value=" <?= $_GET['string1'] ?? '' ?>"> -->
                        <textarea class="form-control" name="string1" id="string1" rows="10"><?= $_GET['string1'] ?? '' ?></textarea>
                       
                    </div>
                    <!-- <div class="mb-3">
                        <label for="string2" class="form-label">String 2</label>
                        <input type="number" class="form-control" id="number2" name="number2" step="0.000001" value="<?= $_GET['string2'] ?? '' ?>">
                        <textarea class="from-control" name="string2" id="string2" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="string3" class="form-label">String 3</label>
                        <input type="number" class="form-control" id="number3" name="number3" step="0.000001" value="<?= $_GET['string3'] ?? '' ?>">
                        <textarea class="from-control" name="string3" id="string3" cols="30" rows="10"></textarea>
                    </div> -->
                    <div class="mb-3">
                        <button class="btn btn-primary">Result</button>
                    </div>
                    <?php if (isset($result)) : ?>
                        <div class="mb-3">
                            <label for="result" class="form-label">Result</label>
                            <textarea class="form-control" id="string1" rows="10"><?= $result ?></textarea>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>