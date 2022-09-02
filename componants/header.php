<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizir</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./componants/css/sstyle.css">
</head>

<body>

    <section class="header">

        <div id="nav">

            <a href="">logo</a>
            <div class="barreDeRecherche">
                <div class="col-12">
                 
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                       
                    </div>
                </div>
            </div>
            <div class="barreDeRecherche deuxLogoCranter">
                <a href=""><i class="fa-solid fa-message"></i></a>
                <a href="setting.php"><i class="fa-solid fa-gear"></i></a>
            </div>
        </div>

        <div id="menu">
            <a href="index.php" class="rectangle active">
                Home
            </a>
            <a class="rectangle">
                Stories
            </a>

            <a href="friends.php" class="rectangle">
                Amis
            </a>

            <a href="profil.php" class="rectangle">
                Profil
            </a>

        </div>


        <div class="menuBas">
            <a href="index.php"><i class="fa-solid fa-house-user active"></i></a>
            <a href=""><i class="fa-brands fa-snapchat"></i></a>
            <a href="friends.php"><i class="fa-solid fa-user-group"></i></a>
            <a href="profil.php"><i class="fa-solid fa-user"></i></a>
        </div>
    </section>