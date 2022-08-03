<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
include_once(G5_THEME_PATH.'/meta/basic_meta_tag.html');
?>
<div class="banner-bg caries-bg">
	<p>UJ SEVERANCE DENT</p>
	<h2>충치치료</h2>
</div>
<?php
	include_once(G5_PATH.'/basic_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('충치치료');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>UJ SEVERANCE DENT</p>
			<h3>충치치료</h3>
			<p class="title-text">사람마다 치아의 크기, 모양, 마모 등이 모두 다릅니다. <br /> 
			때문에 개별 구강 상태에 맞는 맞춤 치료 계획으로 
			소중한 자연치아를 최대한 살릴 수 있도록 해야 합니다.</p>
		</div>
		<ul class="col-4 circle-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/caries_01.jpg" alt="">
				<h5>1. 범랑질 충치</h5>
				<p>치아 겉면인 법랑질의 충치로
				통증이 거의 없습니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/caries_02.jpg" alt="">
				<h5>2. 상아질 충치</h5>
				<p>법랑질 안쪽에 있는 상아질까지
				충치가 진행되어 뜨겁거나
				차가운 음식을 먹으면
				시린 증상이 나타납니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/caries_03.jpg" alt="">
				<h5>3. 치수염 충치</h5>
				<p>상아질 안쪽 신경까지 염증이
				진행되어 극심한 통증으로
				참기 어려운 정도가 됩니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/caries_04.jpg" alt="">
				<h5>4. 치수 괴사</h5>
				<p>치아 내부에 있는조직이
				괴사되고, 뿌리 주변의
				염증으로 인하여
				뼈가 점차 소실됩니다.</p>
			</li>
		</ul>
	</div>
</section>
<section class="content">
	<div class="inner">
		<h4 class="middle-title">충치 치료방법</h4>
		<ul class="col-3 line-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/caries_05.jpg" alt="">
				<h5 class="point-color">레진</h5>
				<p>심미성이 우수하고 치아 삭제량이 적어<br>
				주로 잇몸 부위의 치아가 손상되어 시린 경우,<br>
				치아 사이 공간 치아가 깨진 경우에 사용됩니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/caries_06.jpg" alt="">
				<h5 class="point-color">세라믹</h5>
				<p>세라믹은 강도가 높고 심미성이 우수하여<br>
				자연치아와 가장 가깝게 치료가 가능합니다.<br>
				외부 충격 및 접착력이 우수한 치과 재료입니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/caries_07.jpg" alt="">
				<h5 class="point-color">골드</h5>
				<p>특성상 잘 늘어나고 펴지기 때문에<br>
				치아의 형태에 따라 정확하게 만들기 쉽습니다.<br>
				또한 인체에 무해한 치과 재료입니다.</p>
			</li>
		</ul>
	</div>
</section>
<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>