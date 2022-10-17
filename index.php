
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
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

<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

img {
    width: 100%;

}

body {
    height: 100vh;
}

header{
    background-color: #2e3a46;
    height: 150px;
    color: white;
    text-transform: uppercase;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 50px;
}

main {
    background-color: #1e2d3b;
}

.container {
    padding-top: 100px;
    width: 65%;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    row-gap: 10px;
}

.container-logo {
    width: 100px;
    height: 100px;
}

.card {
    background-color: #2e3a46;
    width: calc(100% / 5 - 10px);
    padding: 20px;
    display: flex;
    flex-direction: column;
    height: 300px;
    justify-content: space-between;
}

.title {
    text-align: center;
    color: white;
    text-transform: uppercase;
}

.info {
    text-align: center;
    color: grey;
}

</style>