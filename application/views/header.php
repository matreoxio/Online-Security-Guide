<?php 



$site = "http://localhost:8082/SecFinal/Sec"; 

if(session_status() == PHP_SESSION_NONE) 
{
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<title><?php echo $title; ?></title>

<?php

if(!empty($meta))
{
   echo $meta;
}
 
 
?>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<link rel="icon" type="image/png" href="<?= $site ?>/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="<?= $site ?>/favicon-16x16.png" sizes="16x16" />

<script type="text/javascript" src="<?= $site ?>/javascript/jquery-1.11.min.js"></script>

<!-- jQuery UI CDN
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
	integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
	crossorigin="anonymous">
</script>
-->
<script type="text/javascript" src="<?= $site ?>/javascript/jquery-ui.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?= $site ?>/css/jquery-ui.css" />



<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?= $site ?>/javascript/jquery.form.js"></script>

<link rel="stylesheet" type="text/css" href="<?= $site ?>/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="<?= $site ?>/css/bootstrap3.min.css" />
<link rel="stylesheet" type="text/css" href="<?= $site ?>/fonts/openSans/open-sans.css" />


<link rel="stylesheet" type="text/css" href="<?= $site ?>/css/general.css" />

<?php
if($page_stylesheet !== '')
{
	echo"<link rel='stylesheet' type='text/css' href='$site/css/$page_stylesheet' />";
}

?>

<style type='text/css'>
a {
    color: #00AEFF;
}

.navbar-nav > li.active > a {
    color: gray;
    background: green;
    border: 4px solid #eee;
    margin: 1em;
    padding: 2em;
    color: #fff;
}


.navbar-nav > li > a {
    color: gray;
    background: #fff;
    border: 4px solid #eee;
    margin: 1em;
    padding: 2em;
}

/* CSS used here will be applied after bootstrap.css */
.navbar-fixed-left {
  width: 160px;
  position: fixed;
  border-radius: 0;
  height: 100%;
}

.navbar-fixed-left .navbar-nav > li {
  float: none;  /* Cancel default li float: left */
  width: 160px;
}

.navbar-fixed-left + .container {
  padding-left: 160px;
}

.container {
  height: 1000px;
}

.wrapper {
  margin-left: 160px;
  margin-right: 0;
}
body,html{
    height: 100%;
  }

  nav.sidebar, .main{
    -webkit-transition: margin 200ms ease-out;
      -moz-transition: margin 200ms ease-out;
      -o-transition: margin 200ms ease-out;
      transition: margin 200ms ease-out;
  }

  .main{
    padding: 10px 10px 0 10px;
  }

 @media (min-width: 765px) {

    .main{
      position: absolute;
      width: calc(100% - 40px); 
      margin-left: 40px;
      float: right;
    }

    nav.sidebar:hover + .main{
      margin-left: 200px;
    }

    nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
      margin-left: 0px;
    }

    nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
      text-align: center;
      width: 100%;
      margin-left: 0px;
    }
    
    nav.sidebar a{
      padding-right: 13px;
    }

    nav.sidebar .navbar-nav > li:first-child{
      
    }

    nav.sidebar .navbar-nav > li{
      
    }

    nav.sidebar .navbar-nav .open .dropdown-menu {
      position: static;
      float: none;
      width: auto;
      margin-top: 0;
      background-color: transparent;
      border: 0;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
      padding: 0 0px 0 0px;
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
      color: #777;
    }

    nav.sidebar{
      width: 150px;
      height: 100%;
      margin-left: -160px;
      float: left;
      margin-bottom: 0px;
	  z-index: 1;
    }

    nav.sidebar li {
      width: 100%;
    }

    nav.sidebar:hover{
      margin-left: 0px;
    }

    .forAnimate{
      opacity: 0;
    }
  }
   
  @media (min-width: 1330px) {

    .main{
      width: calc(100% - 200px);
      margin-left: 200px;
    }

    nav.sidebar{
      margin-left: 0px;
      float: left;
    }

    nav.sidebar .forAnimate{
      opacity: 1;
    }
  }

  nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
    background-color: transparent;
  }

  nav:hover .forAnimate{
    opacity: 1;
  }
  section{
    padding-left: 15px;
  }

</style>

</head>

<body data-spy='scroll' data-target='.scroll-spy'>

<div class='row'>
<div class='col-xs-2'></div>

<div class='col-xs-8'>

<nav class="navbar navbar-fixed-left sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"  > <a style="padding:0px;" href="<?php echo site_url('Home/index');?>"> <img src="../../images/cyberSec.png" style="width:100%; heigh:100%;"></a></li>
		
		<!--Logo source https://pixabay.com/en/cyber-security-cyber-security-1782578/ -->
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Emails <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="<?php echo site_url('EmailTutorialCont/index');?>">Tutorial</a></li>
            <li class="divider"></li>
			<li><a href="<?php echo site_url('EmailQuizCont/index');?>">Quiz</a></li>
            <li class="divider"></li>
          </ul>
        </li>

<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Passwords <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
			<li><a href="<?php echo site_url('Passwords/index');?>">Passwords</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo site_url('PasswordTester/index');?>">Password Test</a></li>
            <li class="divider"></li>
          </ul>
        </li>                

<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">General Knowledge <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-asterisk"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-asterisk"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
			<li><a href="<?php echo site_url('GeneralKnowledge/index');?>">General Knowledge</a></li>
            <li class="divider"></li>
			<li><a href="<?php echo site_url('testGeneralKnowledge/index');?>">Knowledge Test</a></li>
            <li class="divider"></li>
			<li><a href="<?php echo site_url('testGeneralKnowledgeScenario/index');?>">Real-Life Scenarios</a></li>
            <li class="divider"></li>
			          </ul>
        </li>  
			
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Browsing <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
			<li><a href="<?php echo site_url('SecureBrowsing/index');?>">Secure Browsing</a></li>
            <li class="divider"></li>
          </ul>
        </li>   
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
<!--end navigation-->
<div class="wrapper">
<div class="container-fluid" id="home">
 