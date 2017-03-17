<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Options</title>
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
<script>
    $(document).ready(function () {
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal(
                {
                    dismissible: true, // Modal can be dismissed by clicking outside of the modal
                    opacity: .5, // Opacity of modal background
                    inDuration: 300, // Transition in duration
                    outDuration: 200, // Transition out duration
                    startingTop: '4%', // Starting top style attribute
                    endingTop: '10%', // Ending top style attribute
                 });
        $('#modal1').modal('open');
    });
</script>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Gift your Caution Money</h4>
        <p>Student donating the caution money as gift will get free hardcopy of yearbook!!</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">OK,I Got It</a>
    </div>
</div>
<header>
    <nav>
        <div class="container">
            <style class="brand-logo">Materialize</style>
        </div>
    </nav>
</header>
<main>
    <div class="center">
        <h5> Select any of methods to donate</h5>
        <div class="divider"></div>
        <div class="section">
            <h5>Donate Class Gift</h5>
            {{--<form action="choice" method="post">--}}
                <button onclick="window.location='{{ url("choice") }}'" class="btn waves-effect waves-light" type="submit" name="action1" value="options">
                    Submit
                    <i class="material-icons right">send</i>
                </button>
                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
            {{--</form>--}}
        </div>
        <div class="divider"></div>
        <div class="section">
            <h5>Donate through SAIL portal</h5>
                {{--<form action="donate" method="post">--}}
                    <a href="https://auto.iitg.ernet.in/epay/donation/donation.jsp?" target="_blank">
                    <button onclick="window.location='{{ url("donate") }}'" class="btn waves-effect waves-light" type="submit" name="action" value="options">Submit
                        <i class="material-icons right">send</i>
                    </button>
                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                    </a>
                {{--</form>--}}
        </div>
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
