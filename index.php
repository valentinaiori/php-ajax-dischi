
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="style.css">
    <title>Vue Dischi</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="container-logo">
                <img src="https://ajourneyintosound.de/wp-content/uploads/2019/02/spotify_logo.png" alt="">
            </div>
        </div>
    </header>
    <main>
    <div class="container">
            <?php include __DIR__ . '/albums.php' ?> 
            <?php foreach ($albums as $album) : ?>
                <div class="card">
                    <img src="<?php echo $album['poster'] ?>" alt="">
                    <h3 class="title"><?= $album["title"] ?></h3>
                    <div class="info">
                        <div><?= $album['author'] ?></div>
                        <div><?= $album['year'] ?></div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
</main>
</body>
</html>

