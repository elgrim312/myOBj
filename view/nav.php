<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="?p=">WtfWeb</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php foreach ($nav as $link) : ?>
                    <li <?= Controller\PageController::Active($_GET['p'], $link->slug)?>>
                        <a  href="?p=<?= $link->slug ?>"><?= $link->slug ?></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</nav>
<?php
