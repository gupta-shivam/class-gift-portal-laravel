<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Options</title>
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
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
        
        <table class="table bordered highlight responsive-table centered">
            <form method="post" action="payment">
                <thead>
                <tr>
                    <th data-field="name">Name</th>
                    <th data-field="description">Description</th>
                    <th data-field="price">Price</th>
                    <th data-field="image">image</th>
                    <th data-field="select">select</th>
                </tr>
                </thead>
                <?php for($i = 0; $i < count($options)-1; $i++): ?>
                    <tr>
                        <td class="col-sm-2"><?php echo e($options[$i]->name); ?></td>
                        <td class="col-sm-3"><?php echo e($options[$i]->description); ?></td>
                        <td class="col-sm-2"><?php echo e($options[$i]->price); ?></td>
                        <td class="col-sm-3"><img src="images/<?php echo e($options[$i]->img_path); ?>" height="100" width="150"></td>
                        <td class="col-sm-2">
                            <input type="radio" name="choice" id="<?php echo e($options[$i]->id); ?>" value="<?php echo e($options[$i]->id); ?>">
                            <label for="<?php echo e($options[$i]->id); ?>"></label>
                        </td>
                    </tr>
                <?php endfor; ?>
                <tr>
                    <td class="col-sm-2"><?php echo e($options[$options->count()-1]->name); ?></td>
                    <td class="col-sm-3"><?php echo e($options[$options->count()-1]->description); ?></td>
                    <td class="col-sm-2"></td>
                    <td class="col-sm-2"></td>

                    
                    <td class="col-sm-2">
                        <input type="radio" name="choice" id="100" value="100" checked>
                        <label for="100"></label>
                    </td>
                </tr>
                
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        </table>
        <input type="submit" value="choice">
        </form>
        <input type="button" onclick="location.href='/login';" value="Log Out" />
    </div>
</main>
<footer class="page-footer">
    <div class="container">
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
