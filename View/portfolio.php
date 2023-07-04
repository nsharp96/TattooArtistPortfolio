<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../View/navbar.css">
    <link rel="stylesheet" type="text/css" href="../View/footer.css">
    <link rel="stylesheet" type="text/css" href="../View/portfolio.css">
    <script src="https://kit.fontawesome.com/9f6f7766a8.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>
<body>
    <?php require_once "navbar.php" ?>

    <div id="image-gallery">
    <h1 class="port">Portfolio</h1>

        <div id="filter-buttons">
            <p> Filter by: </p>

            <form action="./portfolioController.php" method="post">
            <input class="btn" type="submit" name="showall" value="Show All" />
                <input class="btn" type="submit" name="black" value="Blackwork Traditional" />
                <input class="btn" type="submit" name="colTrad" value="Colour Traditional" />
                <input class="btn" type="submit" name="fineline" value="Fineline" />
                <input class="btn" type="submit" name="illustrate" value="Illustration" />
            </form>

        </div>

        <div class="images">

            <?php foreach ($images as $single): ?>
                <div class="imgBox">
                    <img src=<?= $single->imageLink ?> onclick="modalImage('<?= $single->imageLink ?>')" alt="">
                </div>
            <?php endforeach ?>
            
        </div>


    </div>

    <div id="modal-container">
        <span class="close" onclick="closeModal()"> &times; </span>
        <img class="modal-content" id="img01" src="">
    </div>

    

    <?php require_once "footer.php" ?>

    <script src="../View/portfolio.js"></script>
    
</body>
</html>