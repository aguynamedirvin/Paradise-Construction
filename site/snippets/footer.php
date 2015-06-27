		<!-- Footer -->
		<footer id="footer" role="footer">
			<div class="footer-widgets">
				<div class="wrap">
					<div class="widget contact">
						<h3>Talk to us</h3>
						<ul>
							<li><i class="fa fa-phone"></i> <b><?php echo $site->phone_text() ?>:</b> <a href="tel:<?php echo $site->phone() ?>"><?php echo $site->phone() ?></a></li>
							<li><i class="fa fa-envelope"></i> <b><?php echo $site->email_text() ?>:</b> <a href="mailto:<?php echo $site->email() ?>"><?php echo $site->email() ?></a></li>
							<li><i class="fa fa-map-marker"></i> <b><?php echo $site->address_text() ?>:</b> <?php echo $site->address() ?></li>
						</ul>
					</div>

					<div class="widget social">
						<h3>Stay in touch</h3>
						<div class="social-networks">
							<!-- Facebook -->
							<span><a href="<?php echo $site->facebook() ?>">&#xf09a;</a></span>

							<!-- Twitter -->
							<span><a href="<?php echo $site->twitter() ?>">&#xf099;</a></span>

							<!-- Google Plus -->
							<span><a href="<?php echo $site->google_plus() ?>">&#xf0d5;</a></span>
						</div>
					</div>

					<div class="widget company">
						<h3>Company</h3>
						<ul>
							<?php foreach($pages->visible() as $p): ?>
							<li><a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
							<?php endforeach ?>
						</ul>
					</div>

					<div class="widget language">
						<h3>Language</h3>
						<ul>
							<?php foreach($site->languages() as $language): ?>
								<li<?php e($site->language() == $language, ' class="active"') ?>>
									<a href="<?php echo $page->url($language->code()) ?>">
										<?php echo html($language->name()) ?>
									</a>
								</li>
							<?php endforeach ?>
						</ul>
					</div>

				</div>
			</div>
			<div class="footer-note">
				<div class="wrap">
					<div class="site-info">
						<div class="alignleft"><?php echo $site->copyright()->kirbytext() ?></div>
						<div class="alignright">Proudly crafted by <a href="http://squarepixl.com"><span class="square-pixl">&#xf04d;</span> SquarePixl</a>.</div>
					</div>
				</div>
			</div>
		</footer>





		<!-- JavaScript -->
		<script>
			Modernizr.load([
				{
					load: 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
					complete: function () {
						if ( !window.jQuery ) {
							Modernizr.load('<?php echo $site->url() ?>/assets/js/vendor/jquery-1.11.3.min.js');
						}
					}
				},
				// All other neccesary scrips
				{
					load: [
						'<?php echo $site->url() ?>/assets/js/main.min.js',
					],
					complete: function() {
						// This is to run the before and after plugin: TwentyTwenty
						jQuery('.before-after').twentytwenty();
					}

				},
				// If the device is mobile
				{
					test: Modernizr.mq('only all and (max-width: 868px)'),
					yep: {
						'mobile': '<?php echo $site->url() ?>/assets/js/mobile.min.js',
					},
					callback: {
						'mobile': function() {
							//console.log('Mobile jQuery Loaded!');
							FastClick.attach(document.body); 
						},
					}
				},
			]);
		</script>




		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='https://www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-XXXXX-X','auto');ga('send','pageview');
		</script>

	</body>
</html>