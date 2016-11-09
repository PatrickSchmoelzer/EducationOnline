<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- This is for mobile versions -->
	<title><?php echo  $title; ?></title>
    
    	<!-- CSS -->
		<link href="styles/jquery.bxslider.css" rel="stylesheet" /> <!-- Image Slider if needed -->
		<link href="styles/font-awesome.min.css" rel="stylesheet"/> <!-- Front-Awseome -->		 
        <link href="styles/css.css" rel="stylesheet"> <!-- General CSS -->
        <link href="styles/menu_3/style.css" rel="stylesheet"> <!-- Menu -->            
        <link rel="stylesheet" type="text/css" href="styles/back_to_top/style.css" /> <!-- For Back to the Top Button -->
        
        <!-- Favicon -->        
        <link rel="shortcut icon" type="image/png" href="img/w3-favicon.png"/>
        
        <!-- JavaScript -->    
		<script src="js/modernizr.custom.js"></script>   
</head>
<body>
    <!-- Start - Header -->
		<?php include 'components/header.php'; ?>
    <!-- Start - Header -->
    
  	<!-- Start - Navigation -->
		<?php include 'components/navigation.php'; ?>
    <!-- End - Navigation -->
    
    <!-- Start - Content -->
    	<?php echo $content; ?>
    <!-- End - Content -->
    
	<!--- Start Footer -->
		<?php include 'components/footer.php'; ?>
    <!--- End Footer -->
    
    <!--- Start: Treat Floating Issue -->
    	<div class="clear"></div>
    <!--- End: Treat Floating Issue -->
    
    <!--- Start - Back to The Top Button -->
		<?php include 'components/back_to_top.php'; ?>   
    <!--- End - Back to The Top Button -->    
       
    <!---Start: In order to fix the navigation on the top after scrolling -->
		<?php include 'components/fix_top_menu.php'; ?>   
    <!---End: In order to fix the navigation on the top after scrolling -->
</body>
</html>