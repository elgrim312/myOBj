<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://localhost:8888/new_obj/CMSG1/?p=teletobise">WtfWeb</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
               <?php
                while ($row = $nav->fetchObject()) {
                   echo '<li><a href="http://localhost:8888/new_obj/CMSG1/?p='.$row->slug.'">'.$row->slug.'</a></li>';
                }
               ?>
            </ul>
        </div>
    </div>
</nav>
