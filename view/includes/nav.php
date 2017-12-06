        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Simple PHP</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li<?php if($page == 'home') {echo ' class="active"';}?>><a href="/">Home</a></li>
                    <li<?php if($page == 'phonebook') {echo ' class="active"';}?>><a href="/index.php?page=phonebook">Phonebook</a></li>
                    <li<?php if($page == 'login') {echo ' class="active"';}?>><a href="/index.php?page=auth&action=login">Login</a></li>
                </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container">