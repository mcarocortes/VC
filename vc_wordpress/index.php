<?php get_header(); ?>

<section>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
       <div class="date"><?php the_time( 'M j y' ); ?></div>
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <div class="author"><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_content(); ?>
       <?php edit_post_link(); ?>
       <?php wp_link_pages(); ?> 
    </div><!--end entry-->
    <div class="post-footer">
       <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
  </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

</section>
<!-- Slider Area -->
<section class="slider">
	<div class="hero-slider">
		<!-- Start Single Slider -->
		<div class="single-slider" style="background-image:url('img/background4.png')">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-6 col-6 ml-5">
						<div class="text">
							<p>BIENVENIDOS A VC</p>
							<h1><span>Te ayudo </span>a construir tu <span>bienestar</span></h1>
							<div class="button">
								<a href="#contacto" class="btn">Consultar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Single Slider -->
		<!-- Start Single Slider -->

		<div class="single-slider" style="background-image:url('img/background1.png')">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-6 col-6 ml-5">
						<div class="text">
							<p>BIENVENIDOS A VC</p>
							<h1>¡Ánimo, ya has dado el <span>primer paso</span> entrando <span>aquí!</span></h1>
							<div class="button">
								<a href="#contacto" class="btn">Consultar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--
				<div class="single-slider" style="background-image:url('img/background2.png')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-6 col-5 ml-5">
								<div class="text">
									<p>MÚLTIPLES SOLUCIONES</p>
									<h1>Servicios de <span>Mediación Familiar</span></h1>
									<div class="button">
										<a href="#contacto" class="btn">Consultar</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				 -->

	</div>
</section>
<!--/ End Slider Area -->



<section id="servicios" class="Feautes2" style="background-color: rgb(31,70,75);">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title" style="margin-top: 50px; ">
					<h6>Bienvenidos a tu web de consultas</h6>
					<h1>VC Servicios</h1>
					<hr>
					<p>Encuentra todos los servicios que necesites adaptados a tus necesidades.<br> <b>Atención online y
							presencial</b></p>
				</div>
			</div>
		</div>
	</div>
</section>




<!-- Start Schedule Area -->
<section class="schedule">
	<div class="container">
		<div class="schedule-inner">
			<div class="row ">
				<div class="col-lg-4 col-md-4 col-12 ">
					<!-- single-schedule -->
					<div class="single-schedule">
						<div class="inner" style="min-height: 100px;">
							<div class="icon">
								<i class="icofont-court-hammer"></i>
							</div>
							<div class="single-content">
								<span>Mediación</span>
								<h4>Familiar</h4>
								<p class="d-none d-sm-block">
									La mediación ayuda a resolver conflictos sin ir a juicio. Previo a un jucio de
									familia, la ley exige una mediación por pensión de alimentos, visitas y cuidado
									personal.
								</p>
								<a href="#" data-toggle="modal" data-target="#modalMediacion">LEER MÁS<i
										class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 ">
					<!-- single-schedule -->
					<div class="single-schedule">
						<div class="inner" style="min-height: 100px;">
							<div class="icon">
								<i class="icofont-brain"></i>
							</div>
							<div class="single-content">
								<span>Terapia complementaria</span>
								<h4>Con Flores de Bach</h4>
								<p class="d-none d-sm-block">
									Las enfermedades físicas tienen un origen emocional. Las flores de Bach se utilizan
									en momentos de ruptura, miedo, soledad, desesperación, estrés, depresión y
									obsesiones.
								</p>
								<a href="#" data-toggle="modal" data-target="#modalFloresBach">LEER MÁS<i
										class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<!-- single-schedule -->
					<div class="single-schedule middle">
						<div class="inner" style="min-height: 100px;">
							<div class="icon">
								<i class="icofont-prescription"></i>
							</div>
							<div class="single-content">
								<span>Test </span>
								<h4>ADOS-2</h4>
								<p class="d-none d-sm-block">
									Evaluación estándar para diagnosticar sospechas de trastorno del espectro autista
									(TEA) en niños y adultos.
								</p>
								<a href="#" data-toggle="modal" data-target="#modalADOS2">LEER MÁS<i
										class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
</section>
<!--/End Start schedule Area -->



<!-- Modal Mediación Familiar -->
<div class="modal fade" id="modalMediacion" tabindex="-1" role="dialog" aria-labelledby="modalMediacionLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalMediacionLabel">Mediación Familiar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Antes de iniciar un juicio de familia la ley exige que haya una mediación por tres motivos
				principales.<br>
				<br>
				- Pensión de alimentos (Aumentos/Rebaja/Cese)<br>
				- Relación directa y regular (visitas)<br>
				- Cuidado personal<br>
				<br>
				<b>• SERVICIO COMPLETO: MEDIACIÓN CON Y SIN ACUERDO</b>
				<br><b>Incluye:</b><br>
				1. Notificacion de las partes<br>
				2. Redacción de documento <br>
				3. Tramitación ante tribunal correspondiente
				<br><b>Costo:</b> $120.000<br>
				<br>


				<b>• ACTA DE MEDIACIÓN FRUSTRADA</b><br>
				En caso de que exista denuncia por vif.
				<br>Se entrega documento mismo dia.
				<br><b>Costo:</b> $40.000<br>
				<br>


				<b>• MEDIACIÓN FAMILIAR ONLINE:</b> 1 sesión<br>
				<b>Incluye:</b><br>
				1. Citación a las partes<br>
				2. Si no hay acuerdo en esta sesión, se entrega acta de mediación frustrada, sin recargo extra.<br>
				<b>Costo:</b> $50.000<br>
				<br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn" data-dismiss="modal" style="background-color: rgb(31,70,75); 
;">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal Terapia con Flores de Bach -->
<div class="modal fade" id="modalFloresBach" tabindex="-1" role="dialog" aria-labelledby="modalFloresBachLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalFloresBachLabel">Terapia con Flores de Bach</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Las enfermedades físicas tienen un origen emocional y si los conflictos emocionales subsisten por mucho
				tiempo, la enfermedad del cuerpo empieza a aparecer. (e. Bach)
				<br>
				Utilizada para momentos de: ruptura, miedos, soledad, desesperación, estrés, depresión, obsesiones,
				entre otros.
				<br><br>

				<b>• PRIMERA CONSULTA:</b> Incluye 1 frasco<br>
				<b>Costo:</b> $25.000<br><br>
				<i>El retiro de cada frasco en las siguientes sesiones tiene un costo de $10.000</i>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn" data-dismiss="modal"
					style="background-color: rgb(31,70,75);">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal Test ADOS-2 -->
<div class="modal fade" id="modalADOS2" tabindex="-1" role="dialog" aria-labelledby="modalADOS2Label"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalADOS2Label">Test ADOS-2</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Evaluación estandarizada que se utiliza para ayudar a diagnosticar tanto en niños como adultos alguna
				sospecha de trastorno del espectro autista (tea).
				<br><br>

				<b>• SERVICIO COMPLETO:</b><br>
				<b>Incluye:</b><br>
				1. Entrevista Inicial<br>
				2. Sesión de Evaluación<br>
				3. Entrega de informe y devolución<br>
				<b>Costo:</b> $120.000<br><br>

				<i>Para agendar, se debe realizar el pago anticipado de la mitad del servicio.</i>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn" data-dismiss="modal"
					style="background-color: rgb(31,70,75);">Cerrar</button>
			</div>
		</div>
	</div>
</div>



<!-- Start Why choose -->
<section id="mision" class="why-choose section"
	style="background: linear-gradient(to bottom, rgb(230, 222, 199), white)">
	<div class="container">

		<div class="row">
			<div class="col-lg-4 col-12">
				<!-- Start Choose Left -->
				<div class="choose-left">
					<h6>Comprometida con mis Clientes</h6>
					<h1>Visión y Propósito</h1>
					<p>Mi visión consiste en facilitar la resolución pacífica de conflictos familiares y mejorar el
						bienestar emocional de las personas. </p>

					<ul class="list d-none d-lg-block">
						<li><i class="icofont-check"></i>Generar Relaciones Saludables </li>
						<li><i class="icofont-check"></i>Brindar Apoyo Profesional</li>
						<li><i class="icofont-check"></i>Promover la Resolución Pacífica</li>
						<li><i class="icofont-check"></i>Empatía y Comprensión</li>
					</ul>



				</div>
				<!-- End Choose Left -->
			</div>

			<!--IMAGEN CENTRAL-->
			<div class="col-lg-4 col d-flex align-items-end">
				<div class="d-flex align-items-end" style="height: 100%;">
					<img id="selfie" src="img/valezka.png" alt="#">
				</div>
			</div>

			<!--BLOQUES LATERALES-->
			<div class="col-lg-4 col-6 d-flex flex-column justify-content-around">

				<!--SINGLE-->
				<div id="items" class="row">
					<div class="col-lg-3 col-md-3 col-sm-1 d-flex align-items-center">
						<p id="logo" class="icofont-ui-calendar d-none d-md-block">
							<div class="linea d-none d-md-block"
								style="height: 40px; width: 6px; border: 1px solid gray; border-radius: 3px; margin-left: 20px;">
							</div>
					</div>
					<div class="col">
						<h8>Calendarizar</h8>
						<h5>Mediación</h5>
					</div>
					<div class="col-lg-2 col-md-2  col-sm-2 d-flex align-items-center">
						<p class="icofont-play-alt-1 d-none d-sm-block" style="font-size: 30px; color:rgb(209,162,70)">
					</div>
				</div>

				<!--SINGLE-->
				<div id="items" class="row">
					<div class="col-lg-3 col-md-3 col-sm-1 d-flex align-items-center">
						<p id="logo" class="icofont-ui-calendar d-none d-md-block">
							<div class="linea d-none d-md-block"
								style="height: 40px; width: 6px; border: 1px solid gray; border-radius: 3px; margin-left: 20px;">
							</div>
					</div>
					<div class="col">
						<h8>Calendarizar</h8>
						<h5>Terapia</h5>
					</div>
					<div class="col-lg-2 col-md-2  col-sm-2 d-flex align-items-center">
						<p class="icofont-play-alt-1 d-none d-sm-block" style="font-size: 30px; color:rgb(209,162,70)">
					</div>
				</div>

				<!--SINGLE-->
				<div id="items" class="row">
					<div class="col-lg-3 col-md-3 col-sm-1 d-flex align-items-center">
						<p id="logo" class="icofont-ui-calendar d-none d-md-block">
							<div class="linea d-none d-md-block"
								style="height: 40px; width: 6px; border: 1px solid gray; border-radius: 3px; margin-left: 20px;">
							</div>
					</div>
					<div class="col">
						<h8>Calendarizar</h8>
						<h5>Test ADOS-2</h5>
					</div>
					<div class="col-lg-2 col-md-2  col-sm-2 d-flex align-items-center">
						<p class="icofont-play-alt-1 d-none d-sm-block" style="font-size: 30px; color:rgb(209,162,70)">
					</div>
				</div>


			</div>



			<!--FIN DE LATERALES-->
		</div>
	</div>
</section>
<!--/ End Why choose -->

<!-- Start Fun-facts -->
<div id="fun-facts" class="fun-facts section overlay">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-6">
				<!-- Start Single Fun -->
				<div class="single-fun">
					<i class="icofont-holding-hands"></i>
					<div class="content">
						<p>Más de</p>
						<span class="counter">20</span>
						<p>Acuerdos</p>
					</div>
				</div>
				<!-- End Single Fun -->
			</div>
			<div class="col-lg-3 col-md-6 col-6">
				<!-- Start Single Fun -->
				<div class="single-fun">
					<i class="icofont icofont-user-alt-3"></i>
					<div class="content">
						<p>Más de</p>
						<span class="counter">10</span>
						<p>Empresas </p>
					</div>
				</div>
				<!-- End Single Fun -->
			</div>
			<div class="col-lg-3 col-md-6 col-6">
				<!-- Start Single Fun -->
				<div class="single-fun">
					<i class="icofont-simple-smile"></i>
					<div class="content">
						<p>Más de</p>
						<span class="counter">100</span>
						<p>Pacientes Felices</p>
					</div>
				</div>
				<!-- End Single Fun -->
			</div>
			<div class="col-lg-3 col-md-6 col-6">
				<!-- Start Single Fun -->
				<div class="single-fun">
					<i class="icofont icofont-table"></i>
					<div class="content">
						<span class="counter">9</span>
						<p>Años de Experiencia</p>
					</div>
				</div>
				<!-- End Single Fun -->
			</div>
		</div>
	</div>
</div>
<!--/ End Fun-facts -->






<!-- Start service -->
<section class="services section" style="background: linear-gradient(to top, rgb(230, 222, 199), white)">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h6>Encuentra tus posibilidades</h6>
					<h1>Soluciones para Mejorar Tu Vida</h1>
					<hr>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont-brainstorming"></i>
					<h4><a href="service-details.html">Depresión Adultos</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
					</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont-speech-comments"></i>
					<h4><a href="service-details.html">Problemas del Lenguaje</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
					</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont-listening"></i>
					<h4><a href="service-details.html">Test de Autismo</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
					</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont-law-alt-1"></i>
					<h4><a href="service-details.html">Mediacion Familiar</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
					</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont-flora"></i>
					<h4><a href="service-details.html">Flores de Bash</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
					</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="icofont-people"></i>
					<h4><a href="service-details.html">Selección de Personal</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.
					</p>
				</div>
				<!-- End Single Service -->
			</div>
		</div>
	</div>
</section>
<!--/ End service -->


<!-- Start portfolio -->
<section class="portfolio section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-12">
				<div class="owl-carousel portfolio-slider">
					<div class="single-pf">
						<img src="img/pf1.jpg" alt="#">
						<!--<a href="portfolio-details.html" class="btn">View Details</a>-->
						<a class="btn">Terapia Familiar</a>
					</div>
					<div class="single-pf">
						<img src="img/pf2.jpg" alt="#">
						<a class="btn">Terapia Adultos</a>
					</div>
					<div class="single-pf">
						<img src="img/pf3.jpg" alt="#">
						<a class="btn">Mediaciones</a>
					</div>
					<div class="single-pf">
						<img src="img/pf4.jpg" alt="#">
						<a class="btn">Terapia Infantil</a>
					</div>
					<div class="single-pf">
						<img src="img/pf1.jpg" alt="#">
						<a class="btn">Terapia Familiar</a>
					</div>
					<div class="single-pf">
						<img src="img/pf2.jpg" alt="#">
						<a class="btn">Terapia Adultos</a>
					</div>
					<div class="single-pf">
						<img src="img/pf3.jpg" alt="#">
						<a class="btn">Mediaciones</a>
					</div>
					<div class="single-pf">
						<img src="img/pf4.jpg" alt="#">
						<a class="btn">Terapia Infantil</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End portfolio -->



<!-- Start Appointment -->
<section class="appointment" id="contacto">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 ">
				<div class="appointment-image d-none d-md-block" style="height: 100%;">
					<img id="selfie" src="img/contacto.svg" alt="#"
						style="position:relative; height: 100%; object-fit: fill;">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<form class="form" action="send_email.php" method="post">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12" style="text-align: center;">
							<h1>Contacto</h1>
							<hr>
							<p>Envíanos tus consultas y responderemos a la brevedad. Realizamos atención online y
								presencial</p> <br>
						</div>
						<div class="col-lg-12 col-md-12 col-12">
							<div class="form-group">
								<input name="name" type="text" placeholder="Nombre y Apellidos " required>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-12">
							<div class="form-group">
								<input name="email" type="email" placeholder="Email" required>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-12">
							<div class="form-group">
								<input name="phone" type="text" placeholder="Teléfono" required>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-12">
							<div class="form-group">
								<textarea name="message" placeholder="Escribe tu Mensaje" required></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-5 col-md-6 col-6">
							<div class="form-group">
								<div class="button">
									<button type="submit" class="btn">Enviar Solicitud</button>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-6 col-6">
							<p>(Recibirás tu respuesta por email)</p>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</section>
<!-- End Appointment -->

<?php get_footer(); ?>