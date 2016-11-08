<!DOCTYPE html>
<head>
	<!-- tell to browser how to display websites -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- This is for mobile versions -->
	<title>Education Online | Für Lerner und Lehrende</title>
		<link href="../css/jquery.bxslider.css" rel="stylesheet" /> <!-- CSS for Image Slider if needed -->
		<link href="../css/font-awesome.min.css" rel="stylesheet"/> <!-- CSS For Front-Awseome -->		 
        <link href="../css/css.css" rel="stylesheet"> <!-- General CSS -->
        <link href="../css/menu_3/style.css" rel="stylesheet"> <!-- General CSS -->            
        <link rel="stylesheet" type="text/css" href="../css/back_to_top/style.css" /> <!-- CSS for Back to the Top Button -->
        <link rel="shortcut icon" type="image/png" href="../img/w3-favicon.png"/> <!-- Favicon -->
		<script src="js/modernizr.custom.js"></script>   
</head>
<body>
    <!-- Start - Header -->
    <?php
   		include 'header.php';
	?>
    <!-- Start - Header -->
  	<!-- Start - Navigation -->
    <?php
   		include 'navigation.php';
	?>
    <!-- End - Navigation -->
	<!--- Start Banner Wrapper -->
		<div id="banner-wrapper article">
        	<div class="full-width">   
            	<h1>Artikel verfassen</h1>        
                <!-- Make sure the path to CKEditor is correct. -->
                <script src="ckeditor/ckeditor.js"></script>              
                 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <textarea name="editor" id="editor" rows="50" cols="100"></textarea>
                    <input name="place" type="submit" value="place" />
                    <script>                   
                        CKEDITOR.replace( 'editor' );
                    </script>
                </form>   
                 <?php
					if ($_POST['place']) 
					{						
						$con=mysqli_connect("localhost","root","","education-online");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						
						// Perform queries
						
						$text = mysql_real_escape_string($_POST['editor']);				
						
						mysqli_query($con,"INSERT INTO article (content, author, date_created) VALUES ('$text', 'Max Mustermann', '')");						
						
						$sql = "SELECT content FROM article";
						
						$result = $con->query($sql);
						
						if ($result->num_rows > 0) 
						{						
							while($row = $result->fetch_assoc()) 
							{
								echo "<div class='output'>";
									echo $row["content"];								
								echo "</div>";
							}
						
						} else 
						{
							echo "0 results";
						}
						$con->close();				
					}
				?>
               </div>	                   
            </div>		
			<div class="one-half"> <!--- The half space of the whole page-width-->
				<h3>Für Lernende</h3>
				<p>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata 
                    sanctus es
                    Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd 
                    gubergren, no 
                    sea takimata sanctus est Lorem ipsum dolor sit amet.
				</p>
			</div>
			<div class="one-half"> <!--- The half space of the whole page-width-->
				<h3>Für Lehrende</h3>
				<p>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata 
                    sanctus est 
                    Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd 
                    gubergren, no 
                    sea takimata sanctus est Lorem ipsum dolor sit amet.
				</p>
			</div>
		</div>		
	<!--- End Banner Wrapper -->
	<div class="clear"></div>
	<!--- Start Footer -->
	<?php
		include 'footer.php'; 
	?>
    <!--- End Footer -->
    <div class="clear"></div>
    <!--- Start - Back to The Top Button -->
    <?php
		include 'back_to_top.php'; 
	?>   
    <!--- End - Back to The Top Button -->       
    <!---Start: In order to fix the navigation on the top after scrolling -->
     <?php
		include 'fix_top_menu.php'; 
	?>   
    <!---End: In order to fix the navigation on the top after scrolling -->
</body>
</html>