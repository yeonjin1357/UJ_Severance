<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
include_once(G5_THEME_PATH.'/meta/about_meta_tag.html');
?>
<div class="banner-bg about-bg">
	<p>UJ SEVERANCE DENT</p>
	<h2>운정에서 만나는 세브란스</h2>
</div>
<?php
	include_once(G5_PATH.'/about_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('운정에서 만나는 세브란스');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>UJ SEVERANCE DENT</p>
			<h3>운정에서 만나는 세브란스</h3>
		</div>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/about_01.jpg" alt=""></li>
			<li class="num" data-num="01">
				<h5><b class="point-color">진료의 원칙</b>을 세우는 병원</h5>
				<p>수십 년의 경험을 통해 다져진 원칙으로
				치료의 올바른 기준점이 되겠습니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/about_02.jpg" alt=""></li>
			<li class="num" data-num="02">
				<!-- <h5><span class="point-color"></span></h5> -->
				<h5><b class="point-color">정확성 높은</b> 진단, <b class="point-color">정직한</b> 치료</h5>
				<p>구강외과 전문의 정확성 높은 진단과 검사를 통해
				환자분들에게 꼭 필요한 진료만을 권해드립니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/about_03.jpg" alt=""></li>
			<li class="num" data-num="03">
				<h5>통증 없는 <b class="point-color">최소 침습 치료</b></h5>
				<p>자연치아 보존 바탕의 최소 침습 치료로
				빠른 회복을 도와드립니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/about_04.jpg" alt=""></li>
			<li class="num" data-num="04">
				<h5><b class="point-color">대학병원 출신의 수준 높은 의료진</b></h5>
				<p>먼 거리의 대학병원까지 내원해야 했던 지난날들.
                운정세브란스치과 교수 출신 의료진이 치료해드리겠습니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/about_05.jpg" alt=""></li>
			<li class="num" data-num="05">
				<h5><b class="point-color">무통 마취</b> 솔루션</h5>
				<p>치료가 무서운 분들을 위해 무통마취기를 활용한
				마취 솔루션을 도입했습니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/about_06.jpg" alt=""></li>
			<li class="num" data-num="06">
				<h5>엄격한 <b class="point-color">멸균과 소독</b></h5>
				<p>포스트코로나 시대에 발맞추어
				엄격한 규정을 적용한
				멸균 및 소독을 진행합니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/about_07.jpg" alt=""></li>
			<li class="num" data-num="07">
				<h5>끊임없는 <b class="point-color">연구와 노력</b></h5>
				<p>발전하는 의료기술에 대해 끊임없이
				연구하고 발전하도록 노력하고 있습니다.</p>
			</li>
		</ul>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>