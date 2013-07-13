<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<script>
    function confirmation() {
        return confirm("Are you sure you want to delete this record?")
    }
</script>
<?php

$query = $this->db->query("SELECT * FROM users;");

foreach ($query->result('User') as $row)
{
   // echo $row->lastname; // call attributes
    //echo $row->reverse_name(); // or methods defined on the 'User' class
}
?>

</div> <!-- end top -->

<div id="middle_two" class="clearfix">
    <div id="view_user">
        <h3>View User List</h3>
    </div>
    <nav id="admin_nav">
        <ul>
            <li class="add_user"><a href="/user/add_user"><h3>Add User</h3></a>
        </ul>
    </nav>
    <div id="admin_bg">

        <table id="view_user_table">
            <thead>
            <tr>
                <th width="1%">Albm</th>
                <th width="10%">Last Name</th>
                <th width="10%">First Name</th>
                <th width="10%">User Name</th>
                <th width="15%">email</th>
                <th width="10%">Created Date</th>
                <th width="20%">Note</th>
                <th width="1%">Action</th>
            </tr>
            </thead>
            <?php
            foreach($query->result('User') as $row){
                echo '<tbody>';
                echo '<tr>';
                echo '<td><a href="/user/album/'.$row->id.'"><img src="/img/arrow.png"></a> </td>';
                echo '<td>'. $row->lastname .'</td>';
                echo '<td>'. $row->firstname .'</td>';
                echo '<td>'. $row->username .'</td>';
                echo '<td>'. $row->email .'</td>';
                echo '<td>'. $row->date .'</td>';
                echo '<td>'. $row->notes .'</td>';
                echo '<td> <a href="/user/update/'.$row->id .'">EDIT</a> | <a onclick="return confirmation();" href="/user/delete/'.$row->id .'" >DELETE </a></td>';
                echo '</tr>';
                echo '</tbody>';
            }
            ?>
        </table>
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
