<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="?p=teletobise">WtfWeb</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php foreach ($nav as $wtf) { ?>
                    <li <?= Controller\PageController::Active($_GET['p'], $wtf->slug)?>>
                        <a  href="?p=<?= $wtf->slug ?>"><?= $wtf->slug ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<?php
