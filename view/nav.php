<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="?p=<?=$default?>"><?= $home ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php foreach ($nav as $wtf) { ?>
                    <li class="<?=isActive($wtf->slug, $slug)?>">
                        <a  href="?p=<?= $wtf->slug ?>"><?= $wtf->slug ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<?php
