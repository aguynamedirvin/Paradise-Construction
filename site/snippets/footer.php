		<!-- Footer -->
		<footer id="footer" role="footer">
			<div class="footer__widgets">
				<div class="wrap">
					<div class="widget contact">
						<h3><?php echo l::get('contact_us') ?></h3>
						<ul>
							<li><i class="fa fa-phone"></i> <b><?php echo l::get('phone') ?>:</b> <a href="tel:<?php echo $site->phone() ?>"><?php echo $site->phone() ?></a></li>
							<li><i class="fa fa-envelope"></i> <b><?php echo l::get('email') ?>:</b> <a href="mailto:<?php $email = $site->email(); echo emailencode("" . $email . "") ?>"><?php echo emailencode("" . $email . "") ?></a></li>
							<li><i class="fa fa-map-marker"></i> <b><?php echo l::get('address') ?>:</b> <?php echo $site->address() ?></li>
						</ul>
					</div>

					<div class="widget social">
						<h3><?php echo l::get('follow_us') ?></h3>
						<div class="social-networks">
							<!-- Facebook -->
							<span><a href="<?php echo $site->facebook() ?>">&#xf09a;</a></span>

							<!-- Google Plus -->
							<span><a href="<?php echo $site->google_plus() ?>">&#xf0d5;</a></span>
						</div>
					</div>

					<div class="widget company">
						<h3><?php echo l::get('company') ?></h3>
						<ul>
							<?php foreach($pages->visible() as $p): ?>
							<li><a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
							<?php endforeach ?>
						</ul>
					</div>

					<div class="widget language">
						<h3><?php echo l::get('language') ?></h3>
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

					<div class="widget bbb">
						<a href="http://www.bbb.org/elpaso/business-reviews/roofing-contractors/paradise-construction-in-el-paso-tx-99130588">
							<img src="<?php echo $site->url() . '/assets/images/bbb_logo.png' ?>" width="70">
						</a>
					</div>

				</div>
			</div>
			<div class="footer__note">
				<div class="wrap">
					<div class="site-info">
						<div class="alignleft"><?php echo $site->copyright()->kirbytext() ?></div>
						<div class="alignright"><?php echo l::get('square_pixl') ?></div>
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
					callback: function() {
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


		<?php if($site->google_analytics()->isNotEmpty()): ?>
		
		<!-- Google Analytics -->
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='https://www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','<?php echo $site->google_analytics() ?>','auto');ga('send','pageview');
		</script>

		<?php endif ?>

	</body>
</html>