<div id="middle_two" class="clearfix">
    <div id="view_photos">
        <h3><?php
            echo $result['albumName'];?></h3>
    </div>
    <nav id="admin_nav">
        <ul id="upload_bar">
        <a id="back_btn" style="color: white" href="/user/album/<?php echo $this->session->userdata('viewedUserId'); ?>">&#60; Back</a>
            <li class="add_user"><h3>Upload Images</h3></li>
            <li>
                <?php echo $error;?>
                <form action="/user/uploads/<?php echo $id ;?>" method="post"
                      ENCTYPE="multipart/form-data">
                    <input type="file" name="userfile" accept="image/gif, image/jpeg, image/png">
                    <input type="hidden" name="id" value="<?php echo $id;?>" />
                    <input type="submit" value="Upload">
                </form>
            </li>
        </ul>
    </nav>
    <div id="admin_bg">
        <ul class="photos">
            <?php

            foreach($query2->result() as $row){
                if($row->albumId == $id){
                    echo '<li>';
                    echo '<a href="/uploads/'. $row->name .'" data-lightbox="album" title="">';
                    echo '<span>' . $row->name . '</span>';
                    echo '<img src="/uploads/'. $row->name .'" height="120" width="160">';
                    echo '</a>';
                    echo '</li>';
                }
            }
            ?>
        </ul>
    </div>

</div> <!-- end middle-->
<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/js/lightbox-2.6.min.js"></script>
<div id="footer_goal" class="clearfix">
    <div id="footer_column">

        <div class="admin_col">
            <img class="footer_logo"src="/img/logo.png" alt="Orgame Logo">
            <p>&copy; Erwin Angeles</p>
        </div> <!-- end col1-->
    </div><!-- end footer column -->
</div> <!-- end footer -->