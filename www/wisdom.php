<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg wisdom-bg">
	<p>YONSEI WONPLANT</p>
	<h2>사랑니</h2>
</div>
<?php
	include_once(G5_PATH.'/basic_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('사랑니');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>YONSEI WONPLANT</p>
			<h3>사랑니</h3>
		</div>
		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/wisdom_01.jpg" alt="">
			</li>
			<li>
				<h5 class="point-color">사랑니란?</h5>
				<p>입안 제일 뒤쪽의 세 번째로 큰 어금니를 말합니다.
				보통은 위턱에 2개, 아래턱에 2개로 모두 4개의 사랑니를 가지고 있지만
				진화론적인 측면에서 턱뼈가 작아지고 치아 보철술의 발달로
				어금니의 상실률이 적어지게 되면서 나와야 할 치아가 공간상의 문제로
				나오지 못하고 턱뼈 속에 묻히게 되는 경우가 발생하고 있을 뿐 아니라
				사랑니 자체가 아예 발육되지 않는 경우도 있습니다.</p>
			</li>
		</ul>
	</div>
</section>
<section class="content">
	<div class="inner">
		<h4 class="middle-title">사랑니 형태</h4>
		<ul class="col-3 circle-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/wisdom_02.png" alt="">
				<h5>수평으로 
				숨어있는 사랑니</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/wisdom_03.png" alt="">
				<h5>각도를 가지고
				숨어있는 사랑니</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/wisdom_04.png" alt="">
				<h5>수직으로
				숨어있는 사랑니</h5>
			</li>
		</ul>
	</div>
</section>
<section class="content">
	<div class="inner">
		<h4 class="middle-title">사랑니 발치 후 주의사항</h4>
		<div class="num-list wisdom">
			<p class="num" data-num="01">거즈는 약 2~3시간 정도 꽉 물고 입안의 고인 침과 피는 삼키거나 닦아주세요.</p>
			<p class="num" data-num="02">지혈이 되어도 빨대 사용은 자제해 주세요.</p>
			<p class="num" data-num="03">사랑니 발치 후 목욕, 운동, 음주, 흡연은 피해주세요.</p>
			<p class="num" data-num="04">발치 부위에 혀를 대거나 거친 음식물 등으로 자극을 주지 마세요.</p>
			<p class="num" data-num="05">약은 처방에 맞게 복용 해 주세요.</p>
		</div>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>