<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Success</title>
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<style type="text/css">
    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main {
        flex: 1 0 auto;
    }
</style>
<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<header>
    <nav>
        <div class="container">
            <style class="brand-logo">Materialize</style>
        </div>
    </nav>
</header>
<main>
    <div clas="container col-sm-12">
        <div class="jumbotron text-xs-center">
            <h1 class="display-2 center blue-text text-darken-3">Thank You for your Gift!</h1>
        </div>
        <div class="center">
            <button class=" btn waves-effect waves-light" onclick="location.href='/login';"
                    type="submit" name="action" value="Log Out">Log Out
            </button>
        </div>

    </div>
</main>
<footer class="page-footer">
    <div class="container ">
        <div class="row">
            <div class="col s6">
                <h5 class="white-text">Footer Content</h5>
            </div>
            <div class="col l4 offset-l2 s6">
                <h5 class="white-text">Links</h5>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
