
<script language="javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/p5/scetcher/libraries/p5.sound.min.js"></script>
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package under2
 */

get_header(); ?>



<script language="javascript"  type="text/javascript">
	var noise;
	var fft;
	var filter, filterFreq, filterWidth;

	function setup() {

		var myCanvas = createCanvas(windowWidth, windowHeight);
  	myCanvas.parent("canvasContainer");

	  filter = new p5.BandPass();

	  noise = new p5.Noise();

	  noise.disconnect(); // Disconnect soundfile from master output...
	  filter.process(noise); // ...and connect to filter so we'll only hear BandPass.
	  noise.start();
	  fft = new p5.FFT();
		filter.set(999, 33);
	}

	function draw() {
	background(51,51,51);
	fill(33, 33, 33);

	  // Map mouseX to a bandpass freq from the FFT spectrum range: 10Hz - 22050Hz
	  filterFreq = map (mouseX, 0, width, 20, 9567);
	  // Map mouseY to resonance/width
	  filterWidth = map(mouseY, 0, height, 20, 90);
	  // set filter parameters
	  //

	  // Draw every value in the FFT spectrum analysis where
	  // x = lowest (10Hz) to highest (22050Hz) frequencies,
	  // h = energy / amplitude at that frequency
	  var spectrum = fft.analyze();
	  noStroke();
	  for (var i = 0; i< spectrum.length; i++){
	    var x = map(i, 0, spectrum.length, 0, width);
	    var h = -height + map(spectrum[i], 0, 255, height, 0);
	    rect(x, height, width/spectrum.length, h) ;
	  }

	}

	function mousePressed() {
		filter.set(filterFreq, filterWidth);
	}
	function touchMoved() {
		filter.set(filterFreq, filterWidth);
	}


</script>

<div id="canvasContainer"  style="position: absolute; z-index:-1;"></div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



			<section class="error-404 not-found">



				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Page not found.', 'under2' ); ?></h1>
				</header><!-- .page-header -->

				<div class="textwidget">
					<a href="http://ashshaosh.ru" sl-processed="1"><img src="http://ashshaosh.ru/wp-content/uploads/2017/03/ByMe-Artwork.png" alt="ByMe" width="63" class="navimage"></a>
					<a href="http://ashshaosh.ru/deregulator/" sl-processed="1"><img src="http://ashshaosh.ru/wp-content/uploads/2017/03/icon-60@3x-4.png" alt="Deregulator" width="63" class="navimage"></a>
					<a href="http://ashshaosh.ru/self-a-fuzz/" sl-processed="1"><img src="http://ashshaosh.ru/wp-content/uploads/2017/03/icon-60@3x.png" alt="Self-a-Fuzz" width="63" class="navimage"></a>
					<a href="http://ashshaosh.ru/zhsh/" sl-processed="1"><img src="http://ashshaosh.ru/wp-content/uploads/2017/03/zhshIcon.png" alt="ZhSh" width="63" class="navimage"></a>
			</div>

				<div class="page-content" style="height:340px;">
					<p>
						It looks like page you requested is not exist.
					</p>
					<p>
						Try to explore one of my projects listed above.
					</p>
					<p>
						Or just setup and listen some noise here.
					</p>

				</div><!-- .page-content -->



			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->





<?php
get_footer();
