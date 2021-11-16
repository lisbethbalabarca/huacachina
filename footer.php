	
<footer>
	<div class="container py-5">
		<div class="row">
			<div class="col-md-5 social-media">
				<img class="mb-3 w-75" src="<?php bloginfo('template_url') ?>/img/home/huacachina.png" alt="huacachina logo">
				<?php the_field('text_summary','options'); ?>
			</div>
			<div class="col-md-4 quick-links offset-md-3">
				<h4>QUICK LINKS</h4>
				<?php wp_nav_menu(array(
					'theme_location'  => 'Footer'
				)); ?>
					<!-- <ul>
						<li>Huacachina Info</li>
						<li>Sandboarding/Dunebuggy</li>
						<li>Nazca Lines Flight</li>
						<li>Day Trips</li>
						<li>Where To Stay</li>
						<li>How To Get There</li>
						<li>Other Tours</li>
					</ul> -->
				</div>
			</div>
		</div>
	</footer>

	<!-- Modal -->
	<div id="myModal" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-body">
	            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="modalClose">&times;</button>
	            	<img src="https://www.huacachina.com/wp-content/uploads/2020/08/huacachina-pop-up-1.jpg" class="w-100">
	                <div class="logo-huacachina">
	                	<img src="https://www.huacachina.com/wp-content/uploads/2020/08/huacachina-logo.png" alt="">
	                </div>
	                <div class="form-group">
	                	<p class="title">Discover Huacachina Oasis in 2021!</p>
	                	<p>Sign up now for a chance to win a Dunebuggy/ Sandboarding tour in 2021</p>
	                	<form action="<?php esc_url( $_SERVER['REQUEST_URI'] ) ?>" method="post" id="free-things" onsubmit="return myFunction()">
	                		<input type="email" class="form-control text-center" placeholder="Enter email address" name="email-things">
	                		<input type="text" id="website" value="huacachina" style="display:none;" name="website">
	                		<input id="btn_send_email" value="Sign Up" class="btn_send_email text-center font-weight-bold" type="submit">
		                </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>





	<style type="text/css">
		html {
			margin-top: 0px !important;
		}

		.hide{
			display: none !important;
		}
		#myModal .modal-body{
			padding: 0;
		}

		#myModal .modal-body button.close{
			position: absolute;
		    color: #fff;
		    right: 14px;
		    font-size: 35px;
		    top: 5px;
		}

		#myModal .form-group{
			position: absolute;
			bottom: 0;
			width: 90%;
			left: 5%
		}
		#myModal .modal-body .logo-huacachina{
			position: absolute;
		    top: 9px;
		    left: 34%;
		}
		#myModal .form-group p{
			font-weight: 300;
			font-size: 22px;
			line-height: 110%;
			font-family: Helvetica;
			font-style: normal;
			color: #000000;
			text-align: center;
		}
		#myModal .form-group p.title{
			font-weight: bold;
		    font-size: 44px;
		    line-height: 45px;
		    font-family: Helvetica;
		    color: #FFFFFF;
		    font-style: normal;
		    text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
		    text-align: center;
		}
		#myModal .form-group #btn_send_email{
			background: #000000;
			box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
			border-radius: 5px;
			color: #fff;
			font-weight: bold;
			font-size: 20px;
			line-height: 23px;
			margin-top: 10px;
			padding: 8px;
			padding-bottom: 8px;
			display: block;
			width: 100%;
			border:none;
		}
		@media screen and (max-width: 767px){
			#myModal{
				display: none;
			}
		}
	</style>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
	<!-- SCROLL NAVBAR -->
	<script>
		$(window).on("scroll", function() {
			if($(window).scrollTop() > 100) {
				$(".navbar").addClass("bg_shadow");
			} else {
                //remove the background property so it comes transparent again (defined in your css)
                $(".navbar").removeClass("bg_shadow");
            }
        });
    </script>
    <script type="text/javascript">
		//Smooth scrolling with links
		$('a[href*=\\#]').on('click', function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top -70}, 400);
		});	    
	</script>

	<script>
		$(document).ready(() => {
	        console.log(window.localStorage.modal);
	        if (window.localStorage.modal != "true") {
	            setTimeout(function(){
	                $("#myModal").modal('show');
	                window.localStorage.modal = true;
	            }, 4000);
	        }
		})

	</script>	
	<script>
	    $(function () {
	        $('#modalClose').on('click', function () {
	            $('#myModal').modal('hide');
	            localStorage.setItem('enviado', 'true');
	            if (localStorage.getItem('enviado')){
	              $('#myModal').modal('hide');
	          }
	        })
	    })
	</script>
	<script type="text/javascript">
		$ = jQuery.noConflict();
		$( document ).ready(function() {
			var $formfooter = $('#free-things');

			function validateEmail1(email) {
				var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				return re.test(String(email).toLowerCase());
			}

			var urlfooter = 'https://script.google.com/macros/s/AKfycbzyt8s7Jb5oEj-cQ7p4YiwPwOQwSq-zbp1y4p9UJq8JvWteSpmT/exec';

			if (localStorage.getItem('enviado')){
				$('#myModal').modal('hide');


			}
			$('#btn_send_email').on('click', function(e) {
				e.preventDefault();
				var campo_email_banner = $('input[name="email-things"]').val();
				var website = $('input[name="website"]').val();
				console.log("data enviada",$formfooter.serialize());
				if(campo_email_banner && website ){
					if(validateEmail1(campo_email_banner) === true && website){
						var jqxhr = $.ajax({
							url: urlfooter,
							method: "GET",
							dataType: "json",
							data: $formfooter.serialize()
						}).done(function(){

							localStorage.setItem('enviado', 'true');
							
							$('#myModal').modal('hide');
							
							window.location.reload();
						}
						);

						$('#myModal').modal('hide');

					}else{
						alert("The mail is invalid");
					}
				}else{
					alert("Please, complete all the fields");
				}


			})
		});
	</script>

</body>
</html>