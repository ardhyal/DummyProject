<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">

    
        <link rel="stylesheet"
</head>
<body>
<div class="container">
    <h1>WBS Generator</h1>
    <?php echo form_open_multipart('generate/upload') ?>
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <!--<label class="btn btn-default btn-file" for="upload" name="file"> Upload Data <span class="fa fa-search-plus"></span></label>-->
            <input type="file" name="file" id="file"><br /><br />
            <input type="submit" value="upload">
        </div>
    </form>
    <?php echo form_close() ?>
    
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
<!-- jQuery 2.1.4 -->
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>
</html>