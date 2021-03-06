<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class ="wrapper">
    <div id="top" class="clearfix">
        <div class="header">
            <div class="logo">
                <a href="/"><img src="/img/logo.png" alt="Orgame Logo"></a>
            </div> <!-- end logo -->
            <a href="/"><button class="btn_logout">LOGOUT</button></a>

        </div> <!-- end header -->
    </div> <!-- end top -->

    <div id="middle_two" class="clearfix">
        <div id="add_goal">
            <h3>Add User</h3>
        </div> <!--end goalmanager -->
        <div class="add_goal_panel"> <!-- end color_coding -->
            <form action="/user/perform_register" id="add_info" enctype="multipart/form-data" method="post">
                <h3>User Type:</h3>
                <select name="user_type"><option value="2">User</option><option value="1">Admin</option></select>
                <h3>Last Name:</h3>
                <input id="goalName" name="lastname" placeholder="Last Name" >
                <?php echo form_error('lastname'); ?>
                <h3>First Name:</h3>
                <input id="goalName" name="firstname" placeholder="First Name" >
                 <?php echo form_error('firstname'); ?>
                <h3>Username:</h3>
                <input id="goalName" name="username" placeholder="Username" >
                 <?php echo form_error('username') ?>
                <h3>Password:</h3>
                <input id="goalName" type="password" name="password" placeholder="password" >
                 <?php echo form_error('password'); ?>
                <h3>Email:</h3>
                <input id="goalName" name="email" placeholder="Email" >
                 <?php echo form_error('email'); ?>
                <h3>Date:</h3>
                <input id="dateInput" type="date" name="dateInput">
                 <?php echo form_error('date'); ?>
                <h3>Notes:</h3>
                <input type="textarea" id="add_description" name="notes">
                 <?php echo form_error('add_description'); ?>
                <button class="goal_btn">ADD</button>
            </form>

        </div> <!-- end goal-->

        <div id="btm_add_goal">
            <a href="/user/admin"><h3>Back</h3></a>
        </div> <!--end goalmanager -->
    </div> <!-- end middle-->

    <div id="footer_add_user" class="clearfix">
        <div id="footer_column">

            <div class="admin_col">
                <img class="footer_logo"src="/img/logo.png" alt="Orgame Logo">
                <p>&copy; Erwin Angeles</p>
            </div> <!-- end col1-->
        </div><!-- end footer column -->
    </div> <!-- end footer -->
</div>


