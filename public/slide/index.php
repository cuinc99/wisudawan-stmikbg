<?php require_once '../config/config.php'; ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>Slide Wisudawan 2017</title>

		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/black.css">

		<!-- Theme used for syntax highlighting of code -->
		<link rel="stylesheet" href="lib/css/zenburn.css">
		<link rel="stylesheet" href="font/css/font-awesome.min.css"> 

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC" rel="stylesheet">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>

		<style type="text/css">
			html.dim .backgrounds {
			 filter: blur(9px);
			 transform: scale(1.1)
			}

			.reveal h2 {
			  text-transform: none;
			  text-shadow: 3px 2px rgba(0, 0, 0, 0.15);
			  font-family: '', sans-serif;}

			.reveal table th,
			.reveal table td {
			  text-align: left;
			  padding: 0.2em 0.5em 0.2em 0.5em;
			  border-bottom: 0px;
			  font-family: 'Josefin Slab', serif;
			  font-size: 90%;
			}

			.reveal section img {
			  margin: 15px 0px;
			   }

			.material-icons.md-48 { font-size: 48px; }

			.material-icons.md-dark { color: #7f0000; }
			.material-icons.md-dark.md-inactive { color: #7f0000; }


		</style>

				
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
          
	</head>
	<body>
		<div class="reveal">
			<div class="slides">
			    <section data-transition="slide" data-background="background/backdrop.jpg">
			        <div class='row'>
			            <div class='col-md-6'>
			                <img src="logo_stmik.png" width="30%">
			            </div>
			            <div class='col-md-6'>
			                <img src="logo_stiba.png" width="30%">
			            </div>
			            </div>
			            <h1 style="color:yellow;">RAPAT SENAT TERBUKA</h1>
					    <h3>DALAM RANGKA<br>WISUDA KE-XXVI DAN DIES NATALIS KE-XXIX STMIK BUMIGORA MATARAM<br>WISUDA KE-III DAN DIES NATALIS KE-III STIBA BUMIGORA MATARAM</h3>
					    <hr width="30%">
					    <h4 style='color:#FFF59D;'>MATARAM, 12 OKTOBER 2017</h4>
					    <hr width="30%">
			        
				</section>
				
				<!-- STMIK BUMIGORA MATARAM -->
				<section data-transition="slide" data-background-video="background/video_stmik.mp4" data-background-video-loop="loop" data-background-transition="zoom" data-state="dim" data-background-transition="zoom">
					<img src="logo_stmik.png" width="20%">
					<h1>WISUDA & DIES NATALIS</h1>
					<h3>STMIK BUMIGORA MATARAM & STIBA BUMIGORA MATARAM</h3>
				</section>

				<section data-transition="slide" data-background="background/terbaik.jpg">
					<h1>WISUDAWAN TERBAIK</h1>
					<img src="logo_stmik.png" width="20%">
				</section>

				<?php include 'slide/stmik_terbaik.php'; ?>
				
				<section data-transition="slide" data-background="background/terbaik.jpg">
					<h1>WISUDAWAN BERPRESTASI</h1>
					<img src="logo_stmik.png" width="20%">
				</section>

				<?php include 'slide/stmik_berprestasi.php'; ?>

				<section data-transition="slide" data-background="background/info.jpg" data-background-transition="zoom">
					<img src="logo_stmik.png" width="20%">
					<h1>STMIK BUMIGORA MATARAM</h1>
					<h3>WISUDA KE-XXVI & DIES NATALIS KE-XXIX STMIK BUMIGORA MATARAM</h3>
				</section>


				<!-- S1 Teknik Informatika -->
				<section data-transition="slide" data-background="background/prodi.png" data-background-transition="zoom">
					<h1>PROGRAM STUDI</h1>
					<h1>S1 TEKNIK INFORMATIKA</h1>
					<img src="logo_stmik.png" width="20%">
				</section>

				<?php include 'slide/s1ti.php'; ?>
				
				<!-- D3 Teknik Informatika -->
				<section data-transition="slide" data-background="background/prodi.png" data-background-transition="zoom">
					<h1>PROGRAM STUDI</h1>
					<h1>D3 TEKNIK INFORMATIKA</h1>
					<img src="logo_stmik.png" width="20%">
				</section>

				<?php include 'slide/d3ti.php'; ?>

                <!-- D3 Manajemen Informatika -->
				<section data-transition="slide" data-background="background/prodi.png" data-background-transition="zoom">
					<h1>PROGRAM STUDI</h1>
					<h1>D3 MANAJEMEN INFORMATIKA</h1>
					<img src="logo_stmik.png" width="20%">
				</section>

				<?php include 'slide/d3mi.php'; ?>




                <!-- STIBA BUMIGORA MATARAM -->
				<section data-transition="slide" data-background="background/info.jpg" data-background-transition="zoom">
					<img src="logo_stiba.png" width="20%">
					<h1>STIBA BUMIGORA MATARAM</h1>
					<h3>WISUDA KE-III & DIES NATALIS KE-III STIBA BUMIGORA MATARAM</h3>
				</section>

				<!-- D3 STIBA Bumigora -->
				<section data-transition="slide" data-background="background/prodi.png" data-background-transition="zoom">
					<h1>PROGRAM STUDI</h1>
					<h1>D3 STIBA BUMIGORA MATARAM</h1>
					<img src="logo_stiba.png" width="20%">
				</section>

				<?php include 'slide/d3stiba.php'; ?>
				
				<section data-transition="slide" data-background="background/backdrop.jpg">
				</section>

			</div>
		</div>

		<script src="lib/js/head.min.js"></script>
		<script src="js/reveal.js"></script>

		<script>
			// More info about config & dependencies:
			// - https://github.com/hakimel/reveal.js#configuration
			// - https://github.com/hakimel/reveal.js#dependencies
			Reveal.initialize({
				dependencies: [
					{ src: 'plugin/markdown/marked.js' },
					{ src: 'plugin/markdown/markdown.js' },
					{ src: 'plugin/notes/notes.js', async: true },
					{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } }
				],
				center: true,
				width: 2000,
				height: 1000,
				margin: 0,
			});
		</script>
	</body>
</html>
