<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg info-time-bg">
	<p>YONSEI WONPLANT</p>
	<h2>진료안내</h2>
</div>
<?php
	include_once(G5_PATH.'/about_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('진료안내');
	});
</script>
<section class="content info-time">
	<div class="inner">
		<div class="title">
			<p>YONSEI WONPLANT</p>
			<h3>진료안내</h3>
		</div>
		<ul>
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/time.png" alt=""></li>
			<li>
            <h6>평일</h6>
					<h6>AM 10:00 ~ PM 07:00</h6>
					<h6 class="night-time">화 · 목(야간 진료)</h6>
					<h6>AM 10:00 ~ PM 09:00</h6>
					<h6>토요일</h6>
					<h6>AM 10:00 ~ PM 03:00</h6>
					<h6>점심시간(평일)</h6>
					<h6>PM 01:00 ~ PM 02:00</h6>
			</li>
		</ul>
		<p>※ 토요일은 점심시간 없이 진료합니다.</p>
		<p>※ 일요일, 공휴일은 휴무입니다.</p>
		<h5>
			<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_time_icon.jpg" alt="">
			예약 및 상담 <span class="point-color">031-890-2228</span>
		</h5>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>