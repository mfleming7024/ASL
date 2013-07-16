<div id="middle_two" class="clearfix">
    <div id="view_user">
        <h3><?php
            echo $result['lastname'] . ", " . $result['firstname'] ;?></h3>
    </div>
    <nav id="admin_nav">
        <ul id="upload_bar">
            <li class="add_user"><h3>Add Album</h3></li>

            <li>
                <form action="/user/create_album/<?php echo $id;?>" method="post"
                      ENCTYPE="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id;?>" />
                    <input type="text" name="album_name" value="album name">
                    <input type="submit" value="Create">
                </form>
            </li>
        </ul>
    </nav>

    <div id="admin_bg">
        <ul class="albums">
        <?php
        foreach($query2->result() as $row){
            //echo $row->userId;
            if($row->userId == $id){
               //echo '<ul class="albums">' ;
                echo '<li class="item-type-1">';
                echo '<a href="/user/photos/'.$row->albumId.'">';
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