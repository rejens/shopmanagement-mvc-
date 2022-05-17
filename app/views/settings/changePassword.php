<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>public/css/style.css">
</head>

<body style="background-image: url('<?php echo IMG ?>darkGradient.jpg') ;">

    <div class=" d-flex justify-content-center align-items-center  " style="min-height: 100vh;">
        <div class=" card text-white bg-secondary mb-3  " style="width:380px">
            <div class="card-header text-center fs-3">change your password</div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="old password">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="new password">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="confirm password">
                </div>

            </div>
        </div>
    </div>

</body>

</html>