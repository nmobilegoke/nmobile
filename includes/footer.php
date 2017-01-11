<footer id="footerMainWrap" class="sectWrap">
	<div class="sectInnerWrap">
		<ul class="footMenu_ul">
			<li class="footSectTitle">
				MAIN MENU
				<div style="width:100px; height: 2px; display: block; margin-top: 10px;">
					<div style="width: 70%; height: 2px; float: right; background: #323232;"></div>
					<div style="width: 28%; height: 2px; float: left; background: #b8e351; margin-right: 2px;"></div>
					<span class="clear"></span>
				</div>
			</li>
			<li class="footMenu_ul_li">> About Us</li>
			<li class="footMenu_ul_li">> Services</li>
			<li class="footMenu_ul_li">> Log In</li>
			<li class="footMenu_ul_li">> Register</li>
			<li class="footMenu_ul_li">> N-SMS</li>
			<li class="footMenu_ul_li">> Quick Services</li>
		</ul>
		<ul class="footMenu_ul">
			<li class="footSectTitle">
				OUR SERVICES
				<div style="width:100px; height: 2px; display: block; margin-top: 10px;">
					<div style="width: 70%; height: 2px; float: right; background: #323232;"></div>
					<div style="width: 28%; height: 2px; float: left; background: #b8e351; margin-right: 2px;"></div>
					<span class="clear"></span>
				</div>
			</li>
			<li class="footMenu_ul_li">NComms</li>
			<li class="footMenu_ul_li">Airtime</li>
			<li class="footMenu_ul_li">TV Subscriptions</li>
			<li class="footMenu_ul_li">NPhones</li>
			<li class="footMenu_ul_li">Nmoney</li>
			<li class="footMenu_ul_li">NSure</li>
			<li class="footMenu_ul_li">Bill Payments</li>
			<li class="footMenu_ul_li">NJobs</li>
		</ul>
		<ul class="footMenu_ul">
			<li class="footSectTitle">
				CONTACT US
				<div style="width:100px; height: 2px; display: block; margin-top: 10px;">
					<div style="width: 70%; height: 2px; float: right; background: #323232;"></div>
					<div style="width: 28%; height: 2px; float: left; background: #b8e351; margin-right: 2px;"></div>
					<span class="clear"></span>
				</div>
			</li>
			<li class="footMenu_ul_li">
				<p style="color: #cbcbcb; font-weight: bold; cursor: default;">Head Office:</p>
				<p style="color: #a8a8a8; cursor: default;">299 Herbert Macaulay Way Sabo-Yaba, Lagos, Nigeria.</p>
			</li>
			<li class="footMenu_ul_li">
				<p style="color: #cbcbcb; font-weight: bold; cursor: default;">Email:</p>
				<p style="color: #a8a8a8; cursor: default;">info@nmobile.ng</p>
			</li>
			<li class="footMenu_ul_li">
				<p style="color: #cbcbcb; font-weight: bold; cursor: default;">Tel:</p>
				<p style="color: #a8a8a8; cursor: default;">0700nmobile</p>
			</li>
		</ul>
	</div>
	<div id="footSub" class="sectInnerWrap">
		<div id="footSocialMediaWrap">
			<p style="color: #a8a8a8; font-size: 12px; margin-bottom: 10px;">follow us on:</p>
			<a href="https://www.facebook.com/nmobileng/" target="blank"><i class="fa fa-facebook topIcons" aria-hidden="true"></i></a>
			<a href="https://twitter.com/nmobile_ng" target="blank"><i class="fa fa-twitter topIcons" aria-hidden="true"></i></a>
			<a href="https://www.linkedin.com/in/nmobile-communication-527335107?trk=hp-identity-name" target="blank"><i class="fa fa-linkedin topIcons" aria-hidden="true"></i></a>
		</div>
		<div id="footNewsletter">
			<p style="color: #a8a8a8; font-size: 12px; margin-bottom: 10px;">subscribe to our newsletters:</p>
			<input type="text" name="txt_subscribe" id="txt_subscribe" placeholder="enter your email here">
			<button name="btn_subscribe" id="btn_subscribe">Subscribe</button>
		</div>
	</div>
	<div style="width: 100%; background: #111111; margin-top: 20px; padding: 10px 0px;">
		<div class="sectInnerWrap" style="min-height: 10px; font-size: 12px; color: #3d3d3d; padding: 10px 0px; position: relative;">
			<p style="position: absolute; left: 0px;">Copyrights <span style="font-weight: bold; color: #b8e351;">Nmobile</span> 2016. All rights reserved.</p>
			<ul style="position: absolute; right: 0px;">
				<li class="footMenu_li">NComms</li>
				<li class="footMenu_li">Airtime</li>
				<li class="footMenu_li">TV Subscriptions</li>
				<li class="footMenu_li">NPhones</li>
				<li class="footMenu_li">Nmoney</li>
				<li class="footMenu_li">NSure</li>
				<li class="footMenu_li">Bill Payments</li>
				<li class="footMenu_li">NJobs</li>
			</ul>
		</div>
	</div>
</footer>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="slider/dist/skippr.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#theTarget").skippr({

	        transition: 'fade',
	        speed: 1000,
	        easing: 'easeOutQuart',
	        navType: 'none',
	        childrenElementType: 'div',
	        arrows: false,
	        autoPlay: true,
	        autoPlayDuration: 5000,
	        keyboardOnAlways: true,
	        hidePrevious: false

	    });

	    $('#topMenuICO').on('click', function(){
			var e = document.getElementById('main_menu');

			if(e.style.display == 'block')
			  e.style.display = 'none';
			else
			  e.style.display = 'block';
			return false;
		});
	});
</script>