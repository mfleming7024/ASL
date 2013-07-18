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
                //echo $row->userId;
                if($row->userId == $id){
                    //echo '<ul class="albums">' ;
                    echo '<li class="item-type-1">';
                    echo '<a href="/user/user_photos/'.$row->albumId.'">';
                    echo '<span>'.$row->albumName.'</span>';
                    echo '<img src="/img/1.jpg" height="120" width="160">';
                    echo '</a>';
                    echo '</li>';
                    // echo '</ul>';
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