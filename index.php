<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="images/assets/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="images/assets/slick/slick/slick-theme.css">
	<title>СТО Живчик</title>
</head>
<body>
		<div class="wrapper">
<?php
	require_once('pages/header.php');
?>
	
<?php   
  $page = $_GET['page'];
    if (!isset($page)) {
       require('pages/main.php');
    } elseif ($page == 'news') {
        include('pages/news.php');
    } elseif ($page == 'contacts') {
        include('pages/contacts.php');
    } elseif ($page == 'service-1') {
        include('pages/service-1.php');
    }elseif ($page == 'service-2') {
        include('pages/service-2.php');
    }elseif ($page == 'service-3') {
        include('pages/service-3.php');
    }elseif ($page == 'service-4') {
        include('pages/service-4.php');
    }elseif ($page == 'service-5') {
        include('pages/service-5.php');
    }
 ?>
<?php
		require_once('pages/footer.php');
?>	
</div>
	<script src="images/assets/jquery/jquery-3.2.1.min.js" defer></script>		

	<script src="js/main.js" type="text/javascript" defer></script>
	<script type="text/javascript" src="images/assets/slick/slick/slick.min.js" defer></script>	
</body>

</html>