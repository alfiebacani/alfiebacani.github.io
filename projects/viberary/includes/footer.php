<div class="stickyfooter">
	<div class="vbry-player">
		<div class="d-flex justify-content-between">
			<div class="vbry-audio d-flex my-auto flex-grow-1">
				<div class="vbry-controls d-flex my-auto">
					<div class="my-auto">
						<a href="#" class="prev mx-1 mx-md-2">
							<ion-icon name="play-skip-back-sharp"></ion-icon>
							<span class="sr-only">Back</span>
						</a>
					</div>
					<div class="my-auto">
						<a href="#" class="pause-play mx-1 mx-md-2" id="mainPLayer">
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
							<span class="sr-only">Play/Pause</span>
						</a>
					</div>
					<div class="my-auto">
						<a href="#" class="next mx-1 mx-md-2">
							<ion-icon name="play-skip-forward-sharp"></ion-icon>
							<span class="sr-only">forward</span>
						</a>
					</div>
				</div>
				<div class="audio-meta my-auto mx-sm-3 mx-1">
					<span class="title">Revolution Countdown Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime repellat quos accusamus quae exercitationem quisquam, quidem nobis at, delectus mollitia quibusdam atque voluptatum porro dolore possimus suscipit. Similique, distinctio, excepturi!</span>
					<span class="sub">Cinematic</span>
				</div>
				<div class="track-preview my-auto mx-3 d-flex flex-grow-1">
					<div class="mx-auto">
						<a href="#" id="closePreview" class="py-2 mb-4">
							<span class="sr-only">Close</span>
							<i data-feather="chevron-down"></i>
						</a>
					</div>
					<div class="vinyl-grp-wrap playing mx-auto w-100">
						<div class="vinyl-grp">
							<div class="vinyl-img">
								<img src="images/disk.png" width="320" height="320" alt="album cover" loading="lazy" draggable="false">
							</div>
						</div>
					</div>
					<div class="d-flex flex-grow-1 waveform-wrap">
						<div class="vbry-playback flex-grow-1">
							<div class="d-flex">
								<div class="timestamp my-auto px-2">
									<span id="seekTime">0:00</span>
								</div>
								<div class="vbry-wave flex-grow-1 px-2 text-center my-lg-auto my-2">
									<!-- main player -->
									<div id="waveform"></div>
									<!-- other waves in playlist -->
									<div class="d-none" id="waveform_sample1"></div>
									<div class="d-none" id="waveform_sample"></div>
									<div class="d-none" id="waveform_sample2"></div>
									<div class="d-none" id="waveform_sample5"></div>
									<div class="d-none" id="waveform_sample3"></div>
									<div class="d-none" id="waveform_sample4"></div>
								</div>
								<div class="length my-auto px-2">
									<span id="endTime">0:00</span>
								</div>
							</div>
						</div>
						<div class="vbry-controls d-flex my-2 mx-auto justify-content-center">
							<div class="my-auto">
								<a href="#" class="prev mx-1 mx-md-2">
									<ion-icon name="play-skip-back-sharp"></ion-icon>
									<span class="sr-only">Back</span>
								</a>
							</div>
							<div class="my-auto">
								<a href="#" class="pause-play mx-1 mx-md-2" id="mainPLayer">
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
									<span class="sr-only">Play/Pause</span>
								</a>
							</div>
							<div class="my-auto">
								<a href="#" class="next mx-1 mx-md-2">
									<ion-icon name="play-skip-forward-sharp"></ion-icon>
									<span class="sr-only">forward</span>
								</a>
							</div>
						</div>
						<div class="audio-meta py-2 mx-auto text-center">
							<span class="title">Revolution Countdown</span>
							<span class="sub">Cinematic</span>
						</div>
						<div class="vrby-vol my-auto d-flex px-3 py-2">
							<div class="vrby-mute my-auto mx-1 mx-lg-2">
								<a href="#" class="volume high" id="volumeCtr">
									<i data-feather="volume"></i>
									<i data-feather="volume-1"></i>
									<i data-feather="volume-2"></i>
									<i data-feather="volume-x"></i>
									<span class="sr-only">Mute</span>
								</a>
							</div>
							<div class="volslider my-auto mx-1 mx-lg-2 px-4 px-lg-3">
								<input type="range" min="1" max="100" value="80" class="slider" id="volRange">
							</div>
						</div>
					</div>
					<div>
						<a href="#" class="download-mobile btn-yellow my-2">
							<span>Download</span>
							<i data-feather="download"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="dl my-auto d-none d-lg-flex mx-1 mx-md-2">
				<a href="#" class="dl-link">
					<i data-feather="download"></i>
					<span class="sr-only">Download</span>
				</a>
			</div>
			<div class="cta my-auto d-flex d-lg-none mx-1">
				<a href="#" class="mobile-more" id="mobilepreview">
					<i data-feather="more-vertical"></i>
				</a>
			</div>
		</div>
	</div>
</div>