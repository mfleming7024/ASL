<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Darkroom: Photography</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/main.css">

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700,300,200' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div id="top" class="clearfix">
    <div class="header">
        <div class="logo">
            <a href="/"><img src="/img/logo.png" alt="Orgame Logo"></a>
        </div> <!-- end logo -->
        <div id="topNav">
            <ul>
                <li class="plans"> <a href="">about</a>
                <li class="plans"> <a href="">image gallery</a>
            </ul>
        </div> <!-- end topNav -->
        <!--        <div id="inputs">-->


        <!--            <input class="inputs" name="username" id="username" placeholder="Username" >-->
        <!--            <input class="inputs" name="password" id="password" placeholder="Password" >-->
        <!--            <input type="button" name="login" value="LOGIN">LOGIN</input>-->
        <!--        </div> <!-- end inputs -->

        <?php

        $username = $this->session->userdata('username');

        if($this->session->userdata('is_logged_in')){
        echo '<div id="greeting">';
		echo '		<h4>Welcome, <span>';  echo $username; echo '</span></h4> ';
        echo  '</div> ';
            echo '<a href="/user/logout"><button class="btn_logout">LOGOUT</button></a>';
        }else{
            echo '<form id="inputs" action="home/process" enctype="multipart/form-data" method="post">';
            echo '<input class="inputs" name="username" id="username" placeholder="Username" > ';
            echo '<input class="inputs" type="password" name="password" id="password" placeholder="Password" > ';

            echo '<button class="btn">LOGIN</button>' ;
            echo '</form>';
        }
        ?>

    </div> <!-- end header -->
</div> <!-- end top -->

