<div id="middle_two" class="clearfix">
    <div id="view_user">
        <h3><?php
            echo $lastname . ", " . $firstname ;?></h3>
    </div>
    <nav id="admin_nav">

    </nav>

    <div id="admin_bg">
        <ul class="albums">
            <?php
            foreach($query2->result() as $row){
                if($row->userId == $id){
                    echo '<li class="item-type-1">';
                    echo '<a class="album_lightbox" href="/user/user_photos/'.$row->albumId.'">';
                    echo '<span>'.$row->albumName.'</span>';
                    echo '<img src="/img/1.jpg" height="120" width="160">';
                    echo '</a>';
                    echo '</li>';
                }
            }
            ?>
        </ul>
    </div>

</div> <!-- end middle-->

<div id="footer_goal" class="clearfix">
    <div id="footer_column">
        <div class="admin_col">
            <img class="footer_logo"src="/img/logo.png" alt="Orgame Logo">
            <p>&copy; Erwin Angeles</p>
        </div> <!-- end col1-->
    </div><!-- end footer column -->
</div> <!-- end footer -->