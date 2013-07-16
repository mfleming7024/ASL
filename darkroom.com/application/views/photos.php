<?php

$query = $this->db->query("SELECT * FROM images;");


?>
<div id="middle_two" class="clearfix">
    <div id="view_photos">
        <h3></h3>
    </div>
    <nav id="admin_nav">
        <ul id="upload_bar">
            <li class="add_user"><h3>Upload Images</h3></li>
            <li>
                <?php echo $error;?>
                <form action="/user/uploads" method="post"
                      ENCTYPE="multipart/form-data">
                    <input type="file" name="userfile" accept="image/gif, image/jpeg, image/png">
                    <input type="submit" value="Upload">
                </form>


<!--                --><?php //echo form_open_multipart('user/uploads');?>
<!---->
<!--                <input type="file" name="userfile" size="20" />-->
<!---->
<!--                <br /><br />-->
<!---->
<!--                <input type="submit" value="upload" />-->

                </form>
            </li>
        </ul>
    </nav>
    <div id="admin_bg">
        <ul class="photos">

<!--            --><?php
//            foreach ($data as $img) {
//                echo '
//
//						<li class="item-type-1">
//							<a href="/upload/' . $img["name"] . '">
//								<span>' . $img["name"] . '</span>
//								<img src="/upload/' . $img["name"] . '" height="120" width="160">
//							</a>
//						</li>
//
//						';
//            }

            foreach($query->result() as $row){
                //echo $row->userId;

                    //echo '<ul class="albums">' ;
                    echo '<li class="item-type-1">';
                    echo '<a href="/uploads/'. $row->name .'">';
                    echo '<span></span>';
                    echo '<img src="/uploads/'. $row->name .'" height="120" width="160">';
                    echo '</a>';
                    echo '</li>';
                    // echo '</ul>';

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