<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php

$this->db->delete('users', array('id' => $id));
?>

</div> <!-- end top -->

<div id="middle_two" class="clearfix">
    <div id="view_user">
        <h3>Delete User</h3>
    </div>
    <nav id="admin_nav">
        <ul>
            <li class="add_user"><a href="/user/add_user"><h3>Add User</h3></a>
        </ul>
    </nav>
    <div id="admin_bg">

        Are you sure?
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
