<div id="middle_two" class="clearfix">
    <div id="view_photos">
        <h3></h3>
    </div>
    <nav id="admin_nav">

    </nav>
    <div id="admin_bg">
        <ul class="photos">
            <?php

            foreach($query2->result() as $row){
                if($row->albumId == $id){
                    echo '<li class="item-type-1">';
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