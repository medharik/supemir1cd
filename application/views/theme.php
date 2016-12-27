<style type="text/css">
	
	body{
		position: relative;
	}
	.footer{
	position: absolute;
	bottom: 0;
	background: black;
	width: 100%;
	height: 100px;

	}
	.menu{
display: flex;
list-style: none;
	}
	.menu li{

border: red solid 5px;
	}
	.menu a {
		display: block;
color: white;
list-style:none;
background: green;
padding: 10px;

	}
.menu a:hover{
background: yellow;
color: blue
}
</style>
<!DOCTYPE html>
<html>
<head>
	<title><?=$titre?></title>

</head>
<body>
<?php //  $this->load->view('menu', $menu, FALSE);?>
<?=$pages;
?>


<?php 
//$this->load->view('footer');

?>
</body>
</html>