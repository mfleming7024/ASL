<?php
$id = $this->uri->segment(3);
$query = $this->db->get_where('users', array('id' => $id));
$result = $query->row_array();


?>


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
            <form action="/user/update_user" id="add_info" enctype="multipart/form-data" method="post">
                <h3>Last Name:</h3>
                <input type="hidden" name="id" value="<?php echo $id;?>" />
                <input id="goalName" name="lastname" placeholder="Last Name" value="<?php echo $result['lastname'];?>" >
                <?php echo form_error('lastname'); ?>
                <h3>First Name:</h3>
                <input id="goalName" name="firstname" placeholder="First Name" value="<?php echo $result['firstname'];?>" >
                <h3>Username:</h3>
                <input id="goalName" name="username" placeholder="Username" >
                <h3>Password:</h3>
                <input id="goalName" type="password" name="password" placeholder="password" >
                <h3>Email:</h3>
                <input id="goalName" name="email" placeholder="Email" >
                <h3>Date:</h3>
                <input id="dateInput" type="date" name="dateInput">
                <h3>Notes:</h3>
                <input type="textarea" id="add_description" name="notes">
                <button class="goal_btn" named="edit">EDIT</button>
                <?php
                echo validation_errors('<p class="error">');
                ?>
            </form>

        </div> <!-- end goal-->

        <div id="btm_add_goal">
            <a href="/user/login"><h3>Back</h3></a>
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


