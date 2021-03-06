<?php 
session_start(); 
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Supermarket Jessica</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../../../css/estilos.css" rel="stylesheet" type="text/css" media="all">
<link href="../../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../../../css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="../../../css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<link href="../../../css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
<link href="../../../css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="../../../css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="../../../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="../../../js/jquery-2.2.3.min.js"></script> 
<!-- //js --> 
<!-- web-fonts -->
<link href='../../..///fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='../../..///fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='../../..///fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='../../..///fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<script src="../../js/owl.carousel.js"></script>  
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({ 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds 
	  items :4,
	  itemsDesktop : [640,5],
	  itemsDesktopSmall : [480,2],
	  navigation : true
 
	}); 
}); 
</script>
<script src="../../../js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="../../../js/move-top.js"></script>
<script type="text/javascript" src="../../../js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
<script src="../../../js/bootstrap.js"></script>	
</head>
<body>
	<script>
		$('#myModal88').modal('show');
	</script> 
	<!-- header -->
	<div class="header">
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
				<p><a href="#">Los Mejores descuentos en tus compras </a></p>
			</div>
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
                        <?php
                        include '../../../config/conexionBD.php';

                        $codigo = $_SESSION['codigo'];

                        $sql= "SELECT * FROM usuario WHERE usu_codigo = '$codigo'";
                            $result= $conn->query($sql);
                            if($result->num_rows> 0) {
                                while($row= $result->fetch_assoc()) {
                        ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> 
                        <?php echo $row['usu_nombres'] ?>&nbsp<?php echo $row['usu_apellidos'] ?><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="administracion.php">Administración del Sitio</a></li> 
							<li><a href="../../../public/vista/index.html">Cerrar Sesión</a></li> 							
                        </ul> 
                        <?php
                                    }
                                }
                        ?>
					</li> 
				</ul>
			</div>
			<div class="clearfix"> </div> 
		</div>
		
		
	</div>
	
	<div>
		
            <!--MIS DATOS -->
            <div class="deals"> 
                    <div class="container"> 
                        <h3 class="w3ls-title">ADMINISTRACIÓN </h3>
                        <div class="deals-row">
                            <div class="col-md-3 focus-grid"> 
                                <a href="pedidos.php" class="wthree-btn"> 
                                    <div class="focus-image"><i class="fa fa-mobile"></i></div>
                                    <h4 class="clrchg">Pedidos</h4> 
                                </a>
                            </div>
                            <div class="col-md-3 focus-grid"> 
                                <a href="datos_admin.php" class="wthree-btn wthree1"> 
                                    <div class="focus-image"><i class="fa fa-laptop"></i></div>
                                    <h4 class="clrchg"> Inicio de Sesión y Seguridad</h4> 
                                </a>
                            </div>
                            <div class="col-md-3 focus-grid w3focus-grid-mdl"> 
                                <a href="products9.html" class="wthree-btn wthree3"> 
                                    <div class="focus-image"><i class="fa fa-book"></i></div>
                                    <h4 class="clrchg">Facturas</h4> 
                                </a>
                            </div>
                            <div class="col-md-3 focus-grid"> 
                                <a href="sucursales.php" class="wthree-btn wthree"> 
                                    <div class="focus-image"><i class="fa fa-home"></i></div>
                                    <h4 class="clrchg">Sucursales</h4>
                                </a>
                            </div> 
                            <div class="col-md-3 focus-grid w3focus-grid-mdl"> 
                                <a href="productos.php" class="wthree-btn wthree4"> 
                                    <div class="focus-image"><i class="fa fa-asterisk"></i></div>
                                    <h4 class="clrchg">Productos</h4>
                                </a>
                            </div>
                            <div class="col-md-3 focus-grid"> 
                                <a href="usuarios_clientes.php" class="wthree-btn wthree2"> 
                                    <div class="focus-image"><i class="fa fa-wheelchair"></i></div>
                                    <h4 class="clrchg">Clientes o Usuarios</h4>
                                </a>
                            </div> 
                            <div class="col-md-3 focus-grid"> 
							<a href="products3.html" class="wthree-btn wthree3"> 
								<div class="focus-image"><i class="fa fa-home"></i></div>
								<h4 class="clrchg">Errores de la pagina</h4>
							</a>
						    </div>
                        
                            <div class="clearfix"> </div>
                        </div>  	
                    </div>  	
                </div> 		
	</div>
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h2><a href="index.html"><span>S</span>mart <i>Bazaar</i></a></h2>
						<h6>Your stores. Your place.</h6>
					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> 123 San Sebastian, New York City USA.</li>
						<li><i class="fa fa-mobile"></i> 333 222 3333 </li>
						<li><i class="fa fa-phone"></i> +222 11 4444 </li>
						<li><i class="fa fa-envelope-o"></i> <a href="mailto:example@mail.com"> mail@example.com</a></li>
					</ul> 
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="marketplace.html">Marketplace</a></li>  
							<li><a href="values.html">Core Values</a></li>  
							<li><a href="privacy.html">Privacy Policy</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Services</h3>
						<ul>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="login.html">Returns</a></li> 
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="sitemap.html">Site Map</a></li>
							<li><a href="login.html">Order Status</a></li>
						</ul> 
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Payment Methods</h3>
						<ul>
							<li><i class="fa fa-laptop" aria-hidden="true"></i> Net Banking</li>
							<li><i class="fa fa-money" aria-hidden="true"></i> Cash On Delivery</li>
							<li><i class="fa fa-pie-chart" aria-hidden="true"></i>EMI Conversion</li>
							<li><i class="fa fa-gift" aria-hidden="true"></i> E-Gift Voucher</li>
							<li><i class="fa fa-credit-card" aria-hidden="true"></i> Debit/Credit Card</li>
						</ul>  
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer -->		
	<div class="copy-right"> 
		<div class="container">
			<p>© 2019 Supermaxi Fabiola . Todos los derechos reservados diseñado por<a href="http://w3layouts.com"> Ing. UPS</a></p>
		</div>
	</div> 
	<!-- cart-js -->
	<script src="../../../js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->	
	<!-- countdown.js -->	
	<script src="../../../js/jquery.knob.js"></script>
	<script src="../../../js/jquery.throttle.js"></script>
	<script src="../../../js/jquery.classycountdown.js"></script>
		<script>
			$(document).ready(function() {
				$('#countdown1').ClassyCountdown({
					end: '1388268325',
					now: '1387999995',
					labels: true,
					style: {
						element: "",
						textResponsive: .5,
						days: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#1abc9c",
								lineCap: 'round'
							},
							textCSS: 'font-weight:300; color:#fff;'
						},
						hours: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#05BEF6",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						minutes: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#8e44ad",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						seconds: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#f39c12",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						}

					},
					onEndCallback: function() {
						console.log("Time out!");
					}
				});
			});
		</script>
	<!-- //countdown.js -->
	<!-- menu js aim -->
	<script src="../../../js/jquery.menu-aim.js"> </script>
	<script src="../../../js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
</body>
</html>