<?php
$id = $this->uri->segment(3);
$query = $this->db->get_where('users', array('id' => $id));
$result = $query->row_array();


?>


<div id="middle_two" class="clearfix">
    <div id="view_user">
        <h3><?php
            echo $result['lastname'] . ", " . $result['firstname'] ;?></h3>
    </div>
    <nav id="admin_nav">
        <ul id="upload_bar">
            <li class="add_user"><h3>Add Album</h3></li>

            <li>
                <form action="/user/addAlbum" method="post"
                      ENCTYPE="multipart/form-data">
                    <input type="text" name="albumName" >
                    <input type="submit" value="Create">
                </form>
            </li>
        </ul>
    </nav>

    <div id="admin_bg">
        <!-- <table id="view_user_table">
            <thead>
                <tr>
                    <th width="15%">Album Name</th>
                    <th width="15%">Created Date</th>
                    <th width="15%">Location</th>
                    <th width="70%">Notes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Kids</td>
                    <td>2013/06/26</td>
                    <td>Orlando</td>
                    <td>some notes</td>
                </tr>
            </tbody>
        </table> -->
        <ul class="albums">
            <li class="item-type-1">
                <a href="/user/photos">
                    <span>Cats</span>
                    <img src="/img/1.jpg" height="120" width="160">
                </a>
            </li>
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