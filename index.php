<?php require __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- my style -->
    <link rel="stylesheet" href="./asset/style.css">
    <title>Document</title>
</head>
<body>
    <header class="bg-dark">
        <div class="p-3">
            <img class="logo-spotify" src="./asset/spotify-logo.png" alt="">
        </div>
    </header>

    <main class="bg-dark">
        <div class="container">
            <div class="row row-cols-3 g-3 pt-5">
                <!-- inizio ciclo -->
                <?php  foreach( $database as $elem ) {?>
                    <div>
                        <div class="col text-white text-center">
                            <img src="<?php echo $elem ['poster'] ?>" alt="poster" class="mt-3 img-fluid width">
                            <h2 class="fs-5 mt-4"><?php echo $elem ['title'] ?></h2>
                            <div><?php echo $elem ['author'] ?></div>
                            <span><?php echo $elem ['year'] ?></span>
                        </div>
                    </div>
                <?php } ?>
                <!-- fine ciclo -->
            </div>
        </div>
    </main>


<!-- script Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>