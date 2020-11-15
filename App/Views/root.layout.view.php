
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="public/css.css">
        <link rel="stylesheet" href="semestralka/public/styles.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="navbar-brand" href="?c=home">
                            <img src="https://icon-library.com/images/quest-icon/quest-icon-3.jpg" width="10" height="30" class="d-inline-block " alt="" loading="lazy">
                            NEWS
                        </a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1.25rem; line-height: 1.1; color:white">
                            <img src="https://www.wowisclassic.com/static/images/menu/guides.4b9da26c7b31.png" width="30" height="30" class="d-inline-block" alt="" loading="lazy">
                            GUIDES
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?c=home&a=races">RACES</a>
                            <a class="dropdown-item" href="?c=home&a=classes">CLASSES</a>
                            <a class="dropdown-item" href="?c=home&a=howToStart">HOW TO START</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1.25rem; line-height: 1.1; color:white">
                            <img src="https://pm1.narvii.com/6425/d2f5119049e5c1edb11fd00c91d37e27eccc1363_00.jpg" width="30" height="30" class="d-inline-block" alt="" loading="lazy">
                            LORE
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">HISTORY</a>
                            <a class="dropdown-item" href="#">TIMELINE</a>
                            <a class="dropdown-item" href="#">CHARACTERS</a>
                        </div>
                    </li>

                </ul>
            </div>

            <?php
            if (isset($_SESSION['userId']))
            {
            ?>
                <a href="?c=registration&a=logout"  class="text-decoration-none">Logout</a>
            <?php
            } else {
            ?>
            <form class="form-inline ">
                <a href="?c=registration&a=login" class="btn btn-primary btn-sm active" role="button" aria-pressed="true" style="margin-top: 8%; font-size: large">Login</a>
                <a href="?c=registration&a=add" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true" style="margin-top: 8%; font-size: large">Registration</a>
            </form>
            <?php
            }
            ?>



        </nav>

        <div class="logo"></div>

        <div class="web-content">
            <?= $contentHTML ?>
        </div>

    </body>
</html>
