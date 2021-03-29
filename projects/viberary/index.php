<?php include 'includes/head.php'; ?>

<!-- Start main content -->
	<div class="container-fluid homepage-banner">
		<!-- Homepage Banner -->
		<div class="banner-wrap">
			<div class="banner-frame">
				<div class="row">
					<div class="col-12">
						<div class="logo-line">
							<a href="#" class="d-inline-block">
								<img src="images/Logo-white.png" alt="Viberary" draggable="false" width="216" height="56">
							</a>
						</div>
						<div class="herobanner-wrap">
							<div class="hero-banner" id="particles-js" style="background-image: url('images/banners/pexels-vishnu-r-nair-1105666-image.jpg');"></div>
							<div class="caption">
								<h2 class="title">
									<span class="lg d-block">Get Unlimited Free</span>
									Music For Your Videos
								</h2>
								<p>Create stunning videos with <br class="d-block d-md-none">the best royalty-free music</p>
							</div>
							<a href="#top" class="scroll" onclick="_scrollToTop(document.getElementById('top').getBoundingClientRect().top+document.documentElement.scrollTop,500); return false;">
								<ion-icon name="arrow-down-circle-outline"></ion-icon>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- Homepage Banner end -->
	<!-- Header -->
	<header id="top" class="header-wrap position-sticky">
		<div class="container-fluid">
			<?php include 'includes/header.php' ?>
		</div>
	</header>
	<!-- Header end-->
	<section id="main" class="main-viewport">
		<div class="container-fluid content-wrap p-0">
			<!-- Content start -->
			<div class="row no-gutters flex-no-wrap">
				<div class="d-lg-flex col-auto sbar-w">
					<div class="vbry-filters position-sticky w-100">
						<div class="filter-lbl">
							<i data-feather="sliders"></i>
							Filter By
						</div>
						<div class="accordions">
							<div class="accordion active">
								<div class="accordion-trigger">
									<span>Mood</span>
								</div>
								<div class="accordion-content">
									<ul class="menu-list">
										<li><a href="#"><span>Upbeat</span></a></li>
										<li><a href="#"><span>Inspirational</span></a></li>
										<li><a href="#" class="active"><span>Cinematic</span></a></li>
										<li><a href="#"><span>Romantic</span></a></li>
										<li><a href="#"><span>Crime</span></a></li>
										<li><a href="#"><span>Comedy</span></a></li>
										<li><a href="#"><span>Seasonal</span></a></li>
										<li><a href="#"><span>Magical</span></a></li>
									</ul>
								</div>
							</div>
							<div class="accordion">
								<div class="accordion-trigger">
									<span>Genre</span>
								</div>
								<div class="accordion-content">
									<ul class="menu-list">
										<li><a href="#"><span>Upbeat</span></a></li>
										<li><a href="#"><span>Inspirational</span></a></li>
										<li><a href="#"><span>Cinematic</span></a></li>
										<li><a href="#"><span>Romantic</span></a></li>
										<li><a href="#"><span>Crime</span></a></li>
										<li><a href="#"><span>Comedy</span></a></li>
										<li><a href="#"><span>Seasonal</span></a></li>
										<li><a href="#"><span>Magical</span></a></li>
									</ul>
								</div>
							</div>
							<div class="accordion">
								<div class="accordion-trigger">
									<span>Tempo</span>
								</div>
								<div class="accordion-content">
									<div class="px-4">
										<div class="tempo-filter">
											<div id="temposlider"></div>
											<small class="d-block" id="tempovalue"></small>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion">
								<a href="#" class="link">
									<span>Vlog/Travel</span>
								</a>
							</div>
							<div class="accordion">
								<a href="#" class="link">
									<span>Corporate</span>
								</a>
							</div>
							<div class="accordion">
								<a href="#" class="link">
									<span>Wedding</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-auto flex-grow-1">
					<div class="content-wrap-inner flex-wrap d-flex flex-column justify-content-between">
						<div class="vbry-playlist vinyl-grp-wrap playing">
							<div class="playlist-wrap">
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="album-cover">
											<div class="title-label">
												<span>MOOD</span>
											</div>
											<div class="title">
												<h1>Cinematic</h1>
											</div>
											<div class="meta">
												<span class="d-inline-block pr-2">
													25 Songs
												</span>
												&bull;
												<span class="d-inline-block pl-2 pr-3">
													2 hrs 56 min
												</span>
												<a href="#" class="play-all">PLAY ALL <ion-icon name="play-sharp"></ion-icon></a>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="vinyl-crop">
											<div class="vinyl-grp">
												<div class="vinyl-img">
													<img src="images/disk.png" width="320" height="320" alt="album cover" loading="lazy" draggable="false">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="play-table">
									<div class="heading d-flex">
										<div class="title-col px-1">
											<span>TITLE</span>
										</div>
										<div class="duration-col px-1">
											<span>DURATION</span>
										</div>
										<div class="tempo-col px-1">
											<span>TEMPO</span>
										</div>
									</div>
									<div class="queue">
										<div class="song-row d-flex">
											<div class="play-col px-1 my-auto">
												<a href="#" class="pause-play mx-lg-2">
													<div class="pie-timer">
														<div class="timer first-half">
															<div class="left-mask"></div>
															<div class="right-half"></div>
															<div class="left-half spinner"></div>
														</div>
														<div class="disk"></div>
													</div>
													<ion-icon name="play-sharp"></ion-icon>
													<ion-icon name="pause-sharp"></ion-icon>
												</a>
											</div>
											<div class="title-col px-1 my-auto">
												<a href="#" class="title">
													<span>Change of Heart Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Quos nisi nostrum voluptates reiciendis ratione repellat similique quia soluta enim libero officiis quidem voluptatibus commodi delectus autem doloremque repellendus, minus vel.</span>
													<span class="title-label d-block d-lg-none">Inspirational</span>
												</a>
											</div>
											<div class="duration-col px-1 my-auto">
												<span>3:00</span>
											</div>
											<div class="tempo-col px-1 my-auto">
												<span>20 bpm</span>
											</div>
											<div class="preview-col flex-grow-1 my-auto mx-lg-4">
												<div id="minimap_sample1"></div>
											</div>
											<div class="download-col my-auto mx-lg-2">
												<a href="#" class="dl-link">
													<span class="sr-only">Download</span>
													<i data-feather="download"></i>
												</a>
											</div>
										</div>
										<div class="song-row d-flex">
											<div class="play-col px-1 my-auto">
												<a href="#" class="pause-play mx-lg-2">
													<div class="pie-timer">
														<div class="timer first-half">
															<div class="left-mask"></div>
															<div class="right-half"></div>
															<div class="left-half spinner"></div>
														</div>
														<div class="disk"></div>
													</div>
													<ion-icon name="play-sharp"></ion-icon>
													<ion-icon name="pause-sharp"></ion-icon>
												</a>
											</div>
											<div class="title-col px-1 my-auto">
												<a href="#" class="title">
													<span>Change of Heart</span>
													<span class="title-label d-block d-lg-none">Inspirational</span>
												</a>
											</div>
											<div class="duration-col px-1 my-auto">
												<span>3:00</span>
											</div>
											<div class="tempo-col px-1 my-auto">
												<span>20 bpm</span>
											</div>
											<div class="preview-col flex-grow-1 my-auto mx-lg-4">
												<div id="minimap"></div>
											</div>
											<div class="download-col my-auto mx-lg-2">
												<a href="#" class="dl-link">
													<span class="sr-only">Download</span>
													<i data-feather="download"></i>
												</a>
											</div>
										</div>
										<div class="song-row d-flex">
											<div class="play-col px-1 my-auto">
												<a href="#" class="pause-play mx-lg-2">
													<div class="pie-timer">
														<div class="timer first-half">
															<div class="left-mask"></div>
															<div class="right-half"></div>
															<div class="left-half spinner"></div>
														</div>
														<div class="disk"></div>
													</div>
													<ion-icon name="play-sharp"></ion-icon>
													<ion-icon name="pause-sharp"></ion-icon>
												</a>
											</div>
											<div class="title-col px-1 my-auto">
												<a href="#" class="title">
													<span>Change of Heart</span>
													<span class="title-label d-block d-lg-none">Inspirational</span>
												</a>
											</div>
											<div class="duration-col px-1 my-auto">
												<span>3:00</span>
											</div>
											<div class="tempo-col px-1 my-auto">
												<span>20 bpm</span>
											</div>
											<div class="preview-col flex-grow-1 my-auto mx-lg-4">
												<div id="minimap_sample"></div>
											</div>
											<div class="download-col my-auto mx-lg-2">
												<a href="#" class="dl-link">
													<span class="sr-only">Download</span>
													<i data-feather="download"></i>
												</a>
											</div>
										</div>
										<div class="song-row d-flex">
											<div class="play-col px-1 my-auto">
												<a href="#" class="pause-play mx-lg-2">
													<div class="pie-timer">
														<div class="timer first-half">
															<div class="left-mask"></div>
															<div class="right-half"></div>
															<div class="left-half spinner"></div>
														</div>
														<div class="disk"></div>
													</div>
													<ion-icon name="play-sharp"></ion-icon>
													<ion-icon name="pause-sharp"></ion-icon>
												</a>
											</div>
											<div class="title-col px-1 my-auto">
												<a href="#" class="title">
													<span>Change of Heart</span>
													<span class="title-label d-block d-lg-none">Inspirational</span>
												</a>
											</div>
											<div class="duration-col px-1 my-auto">
												<span>3:00</span>
											</div>
											<div class="tempo-col px-1 my-auto">
												<span>20 bpm</span>
											</div>
											<div class="preview-col flex-grow-1 my-auto mx-lg-4">
												<div id="minimap_sample2"></div>
											</div>
											<div class="download-col my-auto mx-lg-2">
												<a href="#" class="dl-link">
													<span class="sr-only">Download</span>
													<i data-feather="download"></i>
												</a>
											</div>
										</div>
										<div class="song-row d-flex">
											<div class="play-col px-1 my-auto">
												<a href="#" class="pause-play mx-lg-2">
													<div class="pie-timer">
														<div class="timer first-half">
															<div class="left-mask"></div>
															<div class="right-half"></div>
															<div class="left-half spinner"></div>
														</div>
														<div class="disk"></div>
													</div>
													<ion-icon name="play-sharp"></ion-icon>
													<ion-icon name="pause-sharp"></ion-icon>
												</a>
											</div>
											<div class="title-col px-1 my-auto">
												<a href="#" class="title">
													<span>Change of Heart</span>
													<span class="title-label d-block d-lg-none">Inspirational</span>
												</a>
											</div>
											<div class="duration-col px-1 my-auto">
												<span>3:00</span>
											</div>
											<div class="tempo-col px-1 my-auto">
												<span>20 bpm</span>
											</div>
											<div class="preview-col flex-grow-1 my-auto mx-lg-4">
												<div id="minimap_sample5"></div>
											</div>
											<div class="download-col my-auto mx-lg-2">
												<a href="#" class="dl-link">
													<span class="sr-only">Download</span>
													<i data-feather="download"></i>
												</a>
											</div>
										</div>
										<div class="song-row d-flex">
											<div class="play-col px-1 my-auto">
												<a href="#" class="pause-play mx-lg-2">
													<div class="pie-timer">
														<div class="timer first-half">
															<div class="left-mask"></div>
															<div class="right-half"></div>
															<div class="left-half spinner"></div>
														</div>
														<div class="disk"></div>
													</div>
													<ion-icon name="play-sharp"></ion-icon>
													<ion-icon name="pause-sharp"></ion-icon>
												</a>
											</div>
											<div class="title-col px-1 my-auto">
												<a href="#" class="title">
													<span>Change of Heart</span>
													<span class="title-label d-block d-lg-none">Inspirational</span>
												</a>
											</div>
											<div class="duration-col px-1 my-auto">
												<span>3:00</span>
											</div>
											<div class="tempo-col px-1 my-auto">
												<span>20 bpm</span>
											</div>
											<div class="preview-col flex-grow-1 my-auto mx-lg-4">
												<div id="minimap_sample3"></div>
											</div>
											<div class="download-col my-auto mx-lg-2">
												<a href="#" class="dl-link">
													<span class="sr-only">Download</span>
													<i data-feather="download"></i>
												</a>
											</div>
										</div>
										<div class="song-row d-flex">
											<div class="play-col px-1 my-auto">
												<a href="#" class="pause-play mx-lg-2">
													<div class="pie-timer">
														<div class="timer first-half">
															<div class="left-mask"></div>
															<div class="right-half"></div>
															<div class="left-half spinner"></div>
														</div>
														<div class="disk"></div>
													</div>
													<ion-icon name="play-sharp"></ion-icon>
													<ion-icon name="pause-sharp"></ion-icon>
												</a>
											</div>
											<div class="title-col px-1 my-auto">
												<a href="#" class="title">
													<span>Change of Heart</span>
													<span class="title-label d-block d-lg-none">Inspirational</span>
												</a>
											</div>
											<div class="duration-col px-1 my-auto">
												<span>3:00</span>
											</div>
											<div class="tempo-col px-1 my-auto">
												<span>20 bpm</span>
											</div>
											<div class="preview-col flex-grow-1 my-auto mx-lg-4">
												<div id="minimap_sample4"></div>
											</div>
											<div class="download-col my-auto mx-lg-2">
												<a href="#" class="dl-link">
													<span class="sr-only">Download</span>
													<i data-feather="download"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="pagination my-4 py-md-4">
								<ul class="d-flex justify-content-center mx-auto my-2 pb-4">
									<li class="mx-1 mx-sm-2 mx-md-3">
										<a href="#" class="prev">
											<i data-feather="chevron-left"></i>
											<span class="sr-only">Previous</span>
										</a>
									</li>
									<li class="mx-1 mx-sm-2 mx-md-3"><a href="#" class="active">01</a></li>
									<li class="mx-1 mx-sm-2 mx-md-3"><a href="#">02</a></li>
									<li class="mx-1 mx-sm-2 mx-md-3"><a href="#">03</a></li>
									<li class="mx-1 mx-sm-2 mx-md-3"><a href="#">04</a></li>
									<li class="mx-1 mx-sm-2 mx-md-3"><span>&hellip;</span></li>
									<li class="mx-1 mx-sm-2 mx-md-3"><a href="#">20</a></li>
									<li class="mx-1 mx-sm-2 mx-md-3">
										<a href="#" class="next">
											<i data-feather="chevron-right"></i>
											<span class="sr-only">Next</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<footer id="mainFooter">
							 <div class="px-md-4 mx-md-4">
							 	<div class="d-flex footer-menu justify-content-center mb-2 flex-wrap">
							 		<a href="#" class="mx-2 mx-md-4 px-md-4 mb-2">Home</a>
							 		<a href="#" class="mx-2 mx-md-4 px-md-4 mb-2">About</a>
							 		<a href="#" class="mx-2 mx-md-4 px-md-4 mb-2">Blogs</a>
							 		<a href="#" class="mx-2 mx-md-4 px-md-4 mb-2">Contact Us</a>
							 	</div>
							 	<div class="bottom-links d-md-flex my-4 justify-content-between flex-wrap text-center">
							 		<div class="order-1 order-md-2 mb-4 mb-md-auto mt-md-auto px-1 pb-3 mx-auto">
								 		<div class="row justify-content-center">
								 			<div class="col-auto">
								 				<a href="#">License Terms</a>
								 			</div>
								 			<div class="col-auto">
								 				<a href="#">Privacy Policy</a>
								 			</div>
								 			<div class="col-auto">
								 				<a href="#">Terms of Use</a>
								 			</div>
								 		</div>
								 	</div>
							 		<p class="order-2 order-md-1 my-auto pb-3 px-1 mx-auto">Viberary.com All Rights Reserved. Copyright &copy; 2021</p>
							 	</div>
							 </div>
						</footer>
					</div>
				</div>
			</div>
			<!-- Content end -->
		</div>
		<!-- Footer -->
		<footer id="bottom" class="footer-wrap position-sticky player-ready">
			<div class="container-fluid">
				<?php include 'includes/footer.php' ?>
			</div>
		</footer>
		<!-- Footer end-->
	</section>

	<script src="js/particles.min.js" defer></script>
	<script src="js/wavesurfer.js" defer></script>
	<script src="js/wavesurfer.minimap.js" defer></script>
	<script src="js/nouislider.min.js" defer></script>
	<script src="js/wNumb.min.js" defer></script>
	<!-- audio waveform -->
	<script>
		//https://davidwalsh.name/javascript-debounce-function
		function debounce(func, wait, immediate) {
			var timeout;
			return function() {
				var context = this, args = arguments;
				var later = function() {
					timeout = null;
					if (!immediate) func.apply(context, args);
				};
				var callNow = immediate && !timeout;
				clearTimeout(timeout);
				timeout = setTimeout(later, wait);
				if (callNow) func.apply(context, args);
			};
		};
	</script>
	<script>
		'use strict';
		// Create an instance
		let wavesurfer = {};
		let demo1 = {}, demo2 = {}, demo3 = {}, demo4 = {}, demo5 = {}, demo6  = {};

		// Init & load audio file
		document.addEventListener('DOMContentLoaded', function() {
			// REFACTOR LOADING (TODO) also attach events for playlist
			demo1 = WaveSurfer.create({container: '#waveform_sample1',barWidth: 2,barHeight: 1.6,barGap: null,waveColor: '#ebebeb',progressColor: '#ffd300',cursorColor: '#fff0',height: 60,plugins: [WaveSurfer.minimap.create({container: '#minimap_sample',waveColor: '#ebebeb',progressColor: '#ffd300',cursorColor: '#fff0',height: 34,barHeight: 2,barWidth: 0})]});
			demo2 = WaveSurfer.create({container: '#waveform_sample',barWidth: 2,barHeight: 1.6,barGap: null,waveColor: '#ebebeb',progressColor: '#ffd300',cursorColor: '#fff0',height: 60,plugins: [WaveSurfer.minimap.create({container: '#minimap_sample1',waveColor: '#ebebeb',progressColor: '#ffd300',cursorColor: '#fff0',height: 34,barHeight: 2,barWidth: 0})]});
			demo3 = WaveSurfer.create({container: '#waveform_sample2',barWidth: 2,barHeight: 1.6,barGap: null,waveColor: '#ebebeb',progressColor: '#ffd300',cursorColor: '#fff0',height: 60,plugins: [WaveSurfer.minimap.create({container: '#minimap_sample2',waveColor: '#ebebeb',progressColor: '#ffd300',cursorColor: '#fff0',height: 34,barHeight: 2,barWidth: 0})]});
			demo4 = WaveSurfer.create({container: '#waveform_sample5',barWidth: 2,barHeight: 1.6,barGap: null,waveColor: '#ebebeb',progressColor: '#ffd300',cursorColor: '#fff0',height: 60,plugins: [WaveSurfer.minimap.create({container: '#minimap_sample3',waveColor: '#ebebeb',progressColor: '#ffd300',cursorColor: '#fff0',height: 34,barHeight: 2,barWidth: 0})]});
			demo5 = WaveSurfer.create({container: '#waveform_sample3',barWidth: 2,barHeight: 1.6,barGap: null,waveColor: '#ebebeb',progressColor: '#ffd300',cursorColor: '#fff0',height: 60,plugins: [WaveSurfer.minimap.create({container: '#minimap_sample4',waveColor: '#ebebeb',progressColor: '#ffd300',cursorColor: '#fff0',height: 34,barHeight: 2,barWidth: 0})]});
			demo6 = WaveSurfer.create({container: '#waveform_sample4',barWidth: 2,barHeight: 1.6,barGap: null,waveColor: '#ebebeb',progressColor: '#ffd300',cursorColor: '#fff0',height: 60,plugins: [WaveSurfer.minimap.create({container: '#minimap_sample5',waveColor: '#ebebeb',progressColor: '#ffd300',cursorColor: '#fff0',height: 34,barHeight: 2,barWidth: 0})]});
			demo1.load('demo-files/audio/stereo.mp3');
			demo2.load('demo-files/audio/stereo.mp3');
			demo3.load('demo-files/audio/stereo.mp3');
			demo4.load('demo-files/audio/stereo.mp3');
			demo5.load('demo-files/audio/stereo.mp3');
			demo6.load('demo-files/audio/stereo.mp3');

			// N: (TODO) if you can find a way to have multiple minimaps, minimaps are responsive, you can perhaps use this instead of the actual wavesurfer
			// responsive via resettting drawer: wavesurfer.drawBuffer();
			// how to get container width: wavesurfer.drawer.getWidth()
			wavesurfer = WaveSurfer.create({
				container: '#waveform',
				barWidth: 2,
				barHeight: 1.6,
				barGap: null,
				waveColor: '#ebebeb',
				progressColor: '#ffd300',
				cursorColor: '#fff0',
				height: 60,
				plugins: [
					WaveSurfer.minimap.create({
						container: '#minimap',
						waveColor: '#ebebeb',
						progressColor: '#ffd300',
						cursorColor: '#fff0',
						height: 34,
						barHeight: 2,
						barWidth: 0
					})
				]
			});
			wavesurfer.on('error', function(e) {
				console.warn(e);
			});
			function timeFormat(flt){
				var min = parseInt(flt/60),
					 sec = parseInt(flt%60) < 10 ? "0"+parseInt(flt%60) : parseInt(flt%60).toString();
				return min+":"+sec;
			}
			// Load audio from URL
			wavesurfer.load('demo-files/audio/stereo.mp3');
			wavesurfer.on("ready",function(){
				document.getElementById("endTime").textContent = timeFormat(wavesurfer.getDuration());
			});

			// refresh width - responsive fix
			var debouncedRefreshWave = debounce(function() {
				// console.log("hit!");
				wavesurfer.drawBuffer();
			}, 300);
			window.addEventListener('resize', debouncedRefreshWave);
			// Play control
			document.getElementById("mainPLayer").addEventListener("click",function(e){
				e.preventDefault();
				this.classList.toggle("playing");
				wavesurfer.playPause();
			});
			// waveform interraction
			var playbackTimeout;
			function refreshPie(thisPie, wavesurfObj){
				setTimeout(function(){
					var curTime = wavesurfObj.getCurrentTime(),
						 endTime = wavesurfObj.getDuration(),
						 spinnerAngle = (curTime/endTime)*360;
					// console.log(curTime + " vs "+ endTime);
					thisPie.querySelector(".spinner").style.transform = "rotate("+spinnerAngle+"deg)";
					if(spinnerAngle > 180){
						thisPie.querySelector(".timer").classList.remove("first-half");
					}else{
						thisPie.querySelector(".timer").classList.add("first-half");
					}
					document.getElementById("seekTime").textContent = timeFormat(curTime+0.3); //intervals at .3 sec
				},300);
			}
			wavesurfer.on("interaction", function(){
				// console.log("seek");
				refreshPie(document.getElementById("mainPLayer"), wavesurfer);
				if(wavesurfer.isPlaying()){
					document.getElementById("mainPLayer").classList.add("playing");
					clearInterval(playbackTimeout);
					playbackTimeout = setInterval(function(){
						refreshPie(document.getElementById("mainPLayer"), wavesurfer);
					},1000);
				}else{
					clearInterval(playbackTimeout);
					document.getElementById("mainPLayer").classList.remove("playing")
				}
			});
			wavesurfer.on("play", function(){
				// console.log("play");
				refreshPie(document.getElementById("mainPLayer"), wavesurfer);
				document.getElementById("mainPLayer").classList.add("playing");
				clearInterval(playbackTimeout);
				playbackTimeout = setInterval(function(){
					refreshPie(document.getElementById("mainPLayer"), wavesurfer);
				},500);
			});
			wavesurfer.on("finish", function(){
				// console.log("finished");
				clearInterval(playbackTimeout);
				document.getElementById("mainPLayer").classList.remove("playing");
			});
		});
	</script>
	<script>
		// Hero Banner Scroll Animate - Vanilla JS
		// Noriel: Refactor if you want
		var _scrollToTop=function(l,t){var c=document.scrollingElement||document.documentElement,m=c.scrollTop,a=l-m,s=performance.now(),i=function(o){var n,e,r=o-s;c.scrollTop=parseInt((n=r,e=m,o=a,(n/=t/2)<1?o/2*n*n+e:-o/2*(--n*(n-2)-1)+e)),r<t?requestAnimationFrame(i):c.scrollTop=l};requestAnimationFrame(i)};

		window.addEventListener('load',function(e){
			//particle js init - Hero Banner 
			// N: **note - this plugin doesn't have a refresh callback, resizing window leads to inconsistensies
			// https://github.com/VincentGarreau/particles.js/#readme
			particlesJS("particles-js", {"particles": {"number": {"value": 80,"density": {"enable": true,"value_area": 800}},"color": {"value": "#ffffff"},"shape": {"type": "circle","stroke": {"width": 0,"color": "#000000"},"polygon": {"nb_sides": 5},"image": {"src": "img/github.svg","width": 100,"height": 100}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"opacity_min": 0.1,"sync": false}},"size": {"value": 2,"random": true,"anim": {"enable": false,"speed": 40,"size_min": 0.1,"sync": false}},"line_linked": {"enable": true,"distance": 150,"color": "#ffffff","opacity": 0.4,"width": 1},"move": {"enable": true,"speed": 2,"direction": "none","random": false,"straight": false,"out_mode": "out","bounce": false,"attract": {"enable": false,"rotateX": 600,"rotateY": 1200}}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": true,"mode": "grab"},"onclick": {"enable": true,"mode": "push"},"resize": true},"modes": {"grab": {"distance": 150,"line_linked": {"opacity": 1}},"bubble": {"distance": 400,"size": 40,"duration": 2,"opacity": 8,"speed": 3},"repulse": {"distance": 200,"duration": 0.4},"push": {"particles_nb": 4},"remove": {"particles_nb": 2}}},"retina_detect": true});
			// accordions
			var accdEl = document.querySelectorAll(".accordion-trigger");
			Array.prototype.forEach.call(accdEl, function(el, i){
				el.addEventListener('click',function(e){
					e.preventDefault();
					el.parentNode.classList.toggle("active");
				});
			});
			// Tempo range filter 
			var slider = document.getElementById('temposlider');
			noUiSlider.create(slider, {
				start: [20, 120],
				connect: true,
				range: {
					'min': 20,
					'max': 400
				},
				format: wNumb({
					decimals: 0,
					suffix: ' bpm'
				})
			});
			var nonLinearStepSliderValueElement = document.getElementById('tempovalue');
			slider.noUiSlider.on('update', function (values) {
				nonLinearStepSliderValueElement.innerHTML = values.join(' - ');
			});
			// Volume slider
			function refreshSlider(el,val){
				el.style.background = 'linear-gradient(to right, #ffd300 0%, #ffd300 ' + val + '%, #e9e9e9 ' + val + '%, #e9e9e9 100%)';
			}
			var volSlider = document.getElementById("volRange"),
				 inputVal = volSlider.value,
				 control = document.getElementById("volumeCtr");
			refreshSlider(volSlider,inputVal);
			volSlider.oninput = function(){
				var value = (this.value-this.min)/(this.max-this.min)*100
				refreshSlider(this,value);
				// audio integration, refactor if you want: https://wavesurfer-js.org/api/class/src/wavesurfer.js~WaveSurfer.html#instance-method-setVolume
				wavesurfer.setVolume(value/100);
				if(value > 50){
					control.classList.remove("mute","low","off")
					control.classList.add("high");
				}else{
					if(value == 0){
						if(!control.classList.contains("mute")){
							control.classList.remove("mute","low","high")
							control.classList.add("off");
						}
					}else{
						if(value <= 50){
							control.classList.remove("mute","high","off")
							control.classList.add("low");
						}
					}
				}
			};
			control.addEventListener("click", function(e){
				e.preventDefault();
				if(!control.classList.contains("mute")){
					inputVal = volSlider.value
					volSlider.value = 0;
					refreshSlider(volSlider,0);
				}else{
					volSlider.value = inputVal;
					refreshSlider(volSlider,inputVal);
				}
				wavesurfer.toggleMute();
				control.classList.toggle("mute");
				return false;
			});

			// Mobile interactions
			// Search click
			document.getElementById("top").querySelector(".search-btn").addEventListener("click",function(e){
				e.preventDefault();
				// focus to top
				_scrollToTop(document.querySelector('.vbry-logo').getBoundingClientRect().top+document.documentElement.scrollTop,500);
				document.getElementById("top").querySelector(".search-btn").classList.toggle("active");
				document.getElementById("top").querySelector(".search-box").classList.toggle("active");
				document.body.classList.toggle("overlay");
			});
			document.querySelector('.sfield .cancel').addEventListener("click",function(e){
				e.preventDefault();
				document.getElementById("top").querySelector(".search-btn").classList.remove("active");
				document.getElementById("top").querySelector(".search-box").classList.remove("active");
				document.body.classList.remove("overlay");
			});
			// filters
			document.getElementById("top").querySelector(".filter-btn").addEventListener("click",function(e){
				e.preventDefault();
				// focus to top
				_scrollToTop(document.querySelector('.vbry-logo').getBoundingClientRect().top+document.documentElement.scrollTop,200);
				document.querySelector(".vbry-filters").classList.toggle("active");
				document.body.classList.toggle("prevent-scroll");
			});
			// Player preview
			document.getElementById("bottom").querySelector(".mobile-more").addEventListener("click",function(e){
				e.preventDefault();
				document.body.classList.toggle("prevent-scroll");
				document.querySelector(".footer-wrap").classList.toggle("showing-preview");
				document.querySelector(".track-preview").classList.toggle("active");
				// refresh waveforms
				wavesurfer.drawBuffer();
			});
			document.getElementById("closePreview").addEventListener("click",function(e){
				e.preventDefault();
				document.body.classList.remove("prevent-scroll");
				document.querySelector(".footer-wrap").classList.remove("showing-preview");
				document.querySelector(".track-preview").classList.remove("active");
			});

			// Remove loader demo
			setTimeout(function(){
				document.getElementById("app").classList.remove("loading");
			},3000);
			// refresh waveforms to remove horizontal scrolls
			setTimeout(function(){
				wavesurfer.drawBuffer();
				wavesurfer.minimap._onResize();
				demo1.minimap._onResize();
				demo2.minimap._onResize();
				demo3.minimap._onResize();
				demo4.minimap._onResize();
				demo5.minimap._onResize();
				demo6.minimap._onResize();
			},3600);
		});
	</script>
<!-- End main content -->

<?php include 'includes/foot.php'; ?>