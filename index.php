<?php include('header.php'); ?>
<style>
	body#login::before {
    content: "";
    background: #222000036;
    position: left;
    top: 50px;
    /* z-index: 1; */
    left: 10px;
  
}
	
</style>
<body id="login">
    <div class="container" style="position: relative">
		<div class="row-fluid">
			<div class="span6"><div class="title_index"><?php include('title.php'); ?></div></div>
			<div style="margin-right:-400px;" class="span6"><div class="pull-right"><?php include('login_form.php'); ?></div></div>
		</div>
		<div class="row-fluid">
			<div class="span12"><div class="index-footer"><?php include('link_home.php'); ?></div></div>
		</div>
			<?php include('footer.php'); ?>
    </div>
<?php include('script.php'); ?>
</body>
</html>
