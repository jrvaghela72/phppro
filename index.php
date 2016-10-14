<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="bower_components/material/css/material.min.css" rel="stylesheet">
    <link href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import Google Icon Font-->
</head>
<body>

<!--NAV content-->
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Title</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                <a class="mdl-navigation__link" href="">HOME</a>
                <a class="mdl-navigation__link" href="">ABOUT</a>
                <a class="mdl-navigation__link" href="">CONTACT</a>
                <a class="mdl-navigation__link" href="">DROPDOWN</a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Title</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">ONE</a>
            <a class="mdl-navigation__link" href="">TWO</a>
            <a class="mdl-navigation__link" href="">THREE</a>
            <a class="mdl-navigation__link" href="">FOUR</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="page-content">
            <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                <i class="material-icons">add</i>
            </button>
        </div>
    </main>
</div>

<!--/NAV Content-->

<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/material/js/material.min.js"></script>
<script type="text/javascript" src="script/script.js"></script>
<!--/NAV Content-->
</body>
</html>

