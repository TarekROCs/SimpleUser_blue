
<!DOCTYPE HTML>
<html>
<head>
<title> Algerian Partners </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="/SimpleUser_blue/public/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="/SimpleUser_blue/public/assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="/SimpleUser_blue/public/assets/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="/SimpleUser_blue/public/assets/css/font-awesome.css" rel="stylesheet"> 

</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.html"> <h1>DATA EXTRACTOR</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->

							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="/SimpleUser_blue/public/assets/images/p1.png" alt=""> </span> 
												<div class="user-name">
													<p><?php echo $data['name'].' '.$data['lastname']; ?></p>
													<span><?php echo $data['sector']; ?></span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="/SimpleUser_blue/public/profil/index"><i class="fa fa-user"></i> Profile</a> </li> 
											<li > <a href="/SimpleUser_blue/public/home/index" onclick="destroy()"  ><i class="fa fa-sign-out" ></i> Se deconnecter</a> </li>





										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block"   >
    <div class="price-block-main">
    	<div class="prices-head">
    		<h2>Secteurs</h2>
    	</div>
    	<div class="price-tables">
    		    <div class="col-md-3 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr1" style = "background-image: url('../../public/assets/images/itsolution.jpg')  ;   background-repeat: no-repeat;
    background-size: cover; height: 180px ">
		    				<h4>IT solution</h4>

		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
			    					<li  style = "font-size: 3em;" ><?php echo  $data['nbp'][3]." partenaires"  ;    ?></li>
			    				</ul>
		    				</div>
		    			</div>

		    		</div>
	    		</div>
	    		<div class="col-md-3 price-grid">
	    		   <div class="price-block">
		    			<div class="price-gd-top pric-clrg" style = "background-image: url('../../public/assets/images/industrie.jpg')  ;   background-repeat: no-repeat;
    background-size: cover; height: 180px ">
		    				<h4>Industrie</h4>

		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
			    					<li  style = "font-size: 3em;" ><?php echo  $data['nbp'][0]." partenaires"  ;    ?></li>

			    				</ul>
		    				</div>
		    			</div>
		    		</div>
	    		</div>

	    		<div class="col-md-3 price-grid">
	    			<div class="price-block"> 
		    			<div class="price-gd-top pric-clr3" style = "background-image: url('../../public/assets/images/construction.jpg')  ;   background-repeat: no-repeat;
    background-size: cover; height: 180px ">
		    				<h4>Construction</h4>

		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
			    					<li  style = "font-size: 3em;" ><?php echo  $data['nbp'][2]." partenaires"   ;    ?></li>
			    				</ul>
		    				</div>
		    			</div>
		    		</div>
    	       </div>
    	       	    		<div class="col-md-3 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr2" style = "background-image: url('../../public/assets/images/agriculture.jpg')  ;   background-repeat: no-repeat;
    background-size: cover; height: 180px " >
		    				<h4>Agriculture</h4>
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
                                    <li  style = "font-size: 3em;" ><?php echo  $data['nbp'][1]." partenaires"   ;    ?></li>
			    				</ul>
		    				</div>
		    			</div>
		    		</div>
	    		</div>
    	       

	    		<div class="col-md-3 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr2" style = "background-image: url('../../public/assets/images/total.png')  ;   background-repeat: no-repeat;
    background-size: cover; height: 180px ">
		    				<h4>Total</h4>

		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
			    					<li  style = "font-size: 3em;" ><?php echo  $data['nbp'][0] + $data['nbp'][1] + $data['nbp'][2] +  $data['nbp'][3]." partenaires" ;    ?></li>
			    				</ul>
		    				</div>
		    			</div>
		    		</div>
	    		</div>
	    		
    	  <div class="clearfix"> </div>
    	  </div>
   </div>
</div>
<!--inner block end here-->
<!--inner block end here-->

</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		       	<li id="menu-home" ><a href="/SimpleUser_blue/public/stat/index"><i class="fa fa-bar-chart"></i><span>Tableau de board</span></a></li>
		        <li id="menu-home" ><a href="/SimpleUser_blue/public/extractor/index"><i class="fa fa-book nav_icon"></i><span>Extraction de données</span></a></li>
		        <li id="menu-home" ><a href="#"><i class="fa fa-cogs"></i><span>Gestion des Aministrateurs</span></a></li>
		        <li id="menu-home" ><a href="#"><i class="fa fa-tachometer"></i><span>Gestion des utilisateurs</span></a></li>
		        <li id="menu-home" ><a href="#"><i class="fa fa-envelope"></i><span>Mailing</span></a></li>
		        <li id="menu-home" ><a href="#"><i class="fa fa-file-text"></i><span>Carte visite</span></a></li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
function destroy(){
		$.post("/SimpleUser_blue/public/profil/index",{
			choix:'donne'
		},function(data) {
			
		});
	}
</script>
<!--scrolling js-->
		<script src="/SimpleUser_blue/public/assets/js/jquery.nicescroll.js"></script>
		<script src="/SimpleUser_blue/public/assets/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="/SimpleUser_blue/public/assets/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
