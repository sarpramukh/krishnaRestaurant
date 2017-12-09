   <!DOCTYPE html>
<html>
<head>
		<title>KRISHNA RESTAURANT - INDIAN AUTHENTIC CUISINE</title>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta http-equiv="X-UA-Compatible" content="IE=8">
        <meta http-equiv="X-UA-Compatible" content="IE=9">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<!-- <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="all"> -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/lightbox.css" >
		<script type="text/javascript" src="js/jquery-1.6.js" ></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script type="text/javascript" src="js/main.js" ></script>
		<script>
		  $(function() {
			$( "#tabs-l" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
			$( "#tabs-l li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
			
		  });
		  $(function() {
			$( "#tabs-d" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
			$( "#tabs-d li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
			
		  });
		</script>
		 <style>
			  .ui-tabs-vertical { width: 936px; }
			  .ui-tabs-vertical .ui-tabs-nav { padding: 5px 5px 5px 5x; float: left; width: 150px; }
			  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px 3px 0; }
			  .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
			  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; }
			  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 730px;}
		  </style>
</head>

<body>

	<header> 
		<div class="headerTital"> 
			<h1 > SAR RESTAURANT </h1>
		</div>
		<div class="navBar">
			<nav>
				<ul class="navMenu">
					<li><a href="index.php"> Home </a> </li>
					<li><a href="about.php"> About Us </a> </li>
					<li><a href="menu.php"> Menu </a> </li>
					<li><a href="contact.php"> Contact Us </a> </li>
				</ul>
			</nav>
		</div>
	</header>
	
	<section>
		<div class="menuText"> <h2> Lunch Menu </h2> </div>
		<div id="tabs-l">
  <ul>
    <li><a href="#tabs-l-1">Apetizer</a></li>
    <li><a href="#tabs-l-2">Veg Curries</a></li>
    <li><a href="#tabs-l-3">Drinks</a></li>
  </ul>
  <div id="tabs-l-1">
    <h2>Apetizer</h2>
    <table>
		<tr class="text_bottom"> <td> Name </td> <td> Prizes </td>  </tr>
		<tr> <td> Paneer Pakora </td> <td> $5.5 </td>  </tr>
		<tr> <td> Aloo Tikka </td> <td> $6 </td>  </tr>
		<tr> <td> Samosa </td> <td> $5 </td>  </tr>
		<tr> <td> Bhajiya - Eggplant </td> <td> $4 </td>  </tr>
		<tr> <td> Lasaniya Bhajiya </td> <td> $4 </td>  </tr>
	</table>
  </div>
  <div id="tabs-l-2">
    <h2>Veg Curries</h2>
    <table>
		<tr class="text_bottom"> <td> Name </td> <td> Prizes </td>  </tr>
		<tr> <td> Potato Subji </td> <td> $15</td>  </tr>
		<tr> <td> Baigan Bhartha</td> <td> $15</td>  </tr>
		<tr> <td> Shahi Paneer</td> <td> $15</td>  </tr>
		<tr> <td> Palak Paneer</td> <td> $15</td>  </tr>
		<tr> <td> Paneer Bhurji </td> <td> $15 </td>  </tr>
	</table>
  </div>
  <div id="tabs-l-3">
    <h2>Drinks</h2>
   <table>
		<tr class="text_bottom"> <td> Name  </td> <td> Prizes </td>  </tr>
		<tr> <td> Diet Coke </td> <td> $2 </td>  </tr>
		<tr> <td> Coke </td> <td> $2 </td>  </tr>
		<tr> <td> Lassi </td> <td> $3 </td>  </tr>
		<tr> <td> Mango Lassi </td> <td> $3</td>  </tr>
		<tr> <td> Butter Milk </td> <td> $3 </td>  </tr>
	</table>
  </div>
</div>


<!--  Dinner Menu   -->
<div class="menuText"> <h2> Dinner Menu </h2> </div>
		<div id="tabs-d">
  <ul>
    <li><a href="#tabs-d-6">Apetizer</a></li>
    <li><a href="#tabs-d-7">Veg Curries</a></li>
    <li><a href="#tabs-d-8">Drinks</a></li>
  </ul>
  <div id="tabs-d-6">
    <h2>Apetizer</h2>
    <table>
		<tr class="text_bottom"> <td> Name </td> <td> Prizes </td>  </tr>
		<tr> <td> Paneer Pakora </td> <td> $5.5 </td>  </tr>
		<tr> <td> Aloo Tikka </td> <td> $6 </td>  </tr>
		<tr> <td> Samosa </td> <td> $5 </td>  </tr>
		<tr> <td> Bhajiya - Eggplant </td> <td> $4 </td>  </tr>
		<tr> <td> Lasaniya Bhajiya </td> <td> $4 </td>  </tr>
	</table>
  </div>
  <div id="tabs-d-7">
    <h2>Veg Curries</h2>
   <table>
		<tr class="text_bottom"> <td> Name </td> <td> Prizes </td>  </tr>
		<tr> <td> Potato Subji </td> <td> $15</td>  </tr>
		<tr> <td> Baigan Bhartha</td> <td> $15</td>  </tr>
		<tr> <td> Shahi Paneer</td> <td> $15</td>  </tr>
		<tr> <td> Palak Paneer</td> <td> $15</td>  </tr>
		<tr> <td> Paneer Bhurji </td> <td> $15 </td>  </tr>
		<tr> <td> Veg Biryani </td> <td> $13 </td>  </tr>
		<tr> <td> Pulav </td> <td> $12 </td>  </tr>
	</table>
  </div>
  <div id="tabs-d-8">
    <h2>Drinks</h2>
    <table>
		<tr class="text_bottom"> <td> Name  </td> <td> Prizes </td>  </tr>
		<tr> <td> Diet Coke </td> <td> $2 </td>  </tr>
		<tr> <td> Coke </td> <td> $2 </td>  </tr>
		<tr> <td> Lassi </td> <td> $3 </td>  </tr>
		<tr> <td> Mango Lassi </td> <td> $3</td>  </tr>
		<tr> <td> Butter Milk </td> <td> $3 </td>  </tr>
	</table>
  </div>
</div>
	</section>
	<footer>
		<div class="footerBar">
			<nav>
				<ul class="footerMenu">
					<li><a href="index.php"> Home <span class="dash"> - </span></a> </li>
					<li><a href="about.php"> About <span class="dash"> - </span></a> </li>
					<li><a href="menu.php"> Menu <span class="dash"> - </span></a> </li>
					<li><a href="contact.php"> Contact </a> </li>
				</ul>
			</nav>
		</div>
		<div class="social">
		<nav>
			<ul class="socialMenu">
					<li class="fb"><a href="#"> Facebook<span class="dash"> - </span> </a> </li>
					<li class="Tw"><a href="#"> Twitter<span class="dash"> - </span></a> </li>
					<li class="LI"><a href="#"> Linked<span class="in">In</span> </a> </li>
			</ul>
		</nav>
		</div>
	</footer>
</body>
</html>