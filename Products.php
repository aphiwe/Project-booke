<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
 
    <title>Something Else</title>
 
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
 
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
 
  <body>
    <?php 
        // this will make 'home', 'view products' and 'view cart' appear
        include 'Navigation.php' 
    ?>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href='index.php' class='customButton'>Home</a></li>
            <li><a href="#">About</a></li>
			<li><a href='Products.php' class='customButton'>View Products</a></li>
			 <li><a href='Cart.php' class='customButton'>View Cart <?php echo "({$cartItemCount})"; ?></a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
 
 
    <div class="container">
   
      <!--<div class="starter-template">
       <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>-->
 
    </div><!-- /.container -->
     

 
    
    <div class='sectionContents'>
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
		 <h1>&nbsp;</h1>
		 
		 <h2>Product page</h2>
		 
         <?php
  	if($_GET['action']=='add'){
    	echo "<div>" . $_GET['name'] . " was added to your cart.</div>";
	}

	if($_GET['action']=='exists'){
   	 echo "<div>" . $_GET['name'] . " already exists in your cart.</div>";
	}

		require "libs/DbConnect.php";

	$query = "SELECT id, name, price FROM products";
	$stmt = $con->prepare( $query );
	$stmt->execute();

	$num = $stmt->rowCount();

	if($num>0){
   	 echo "<table border='0'>";//start table
    
        // our table heading
        echo "<tr>";
            echo "<th class='textAlignLeft'>Product Name</th>";
            echo "<th>Price (USD)</th>";
            echo "<th>Action</th>";
        echo "</tr>";
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            
            //creating new table row per record
            echo "<tr>";
                echo "<td>{$name}</td>";
                echo "<td class='textAlignRight'>{$price}</td>";
                echo "<td class='textAlignCenter'>";
                    echo "<a href='addToCart.php?id={$id}&name={$name}' class='customButton'>";
                        echo "<img src='images/add-to-cart.png' title='Add To Cart' />";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
        }
        
    echo "</table>";
}

// no products in the database
else{
    echo "No products found.";
}
?>
    </div>

  </body>
</html>

