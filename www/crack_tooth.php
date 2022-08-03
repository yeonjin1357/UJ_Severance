<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg microscope-bg">
	<p>YONSEI BARUN</p>
	<h2>미세현미경 클리닉</h2>
</div>
<?php
	include_once(G5_PATH.'/microscope_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('치아균열증후군');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>YONSEI BARUN</p>
			<h3>치아균열증후군</h3>
		</div>
		<div class="tac">
			<h4 class="bg-title3">미세현미경으로 뚜렷하게 관찰되는 미세균열들</h4>
		</div>
		<ul class="col-3 line-list">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_04.jpg" alt=""></li>
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_05.jpg" alt=""></li>
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_06.jpg" alt=""></li>
		</ul>
		<ul class="col-2 line-box mt3">
			<li>
				<h5 class="point-color">정밀진단</h5>
				<p>모든 치아 균열을 현미경으로 관찰할 수 있는 것은  아닙니다.<br />
				하지만 씹을 때 찌릿찌릿 아픈데도 원인을 몰라 <br /> 
				답답해하는 경우에 균열을 확인할 수 있는 수단으로 <br />  
				현미경은 매우 좋은 진단 도구 중 하나입니다.</p>
			</li>
			<li>
				<h5 class="point-color">치료</h5>
				<p>균열이 있는 치아는 다시 붙지 않습니다.<br />
				때문에 치아를 뽑아야 하는 최악의 상황까지<br /> 
				균열이 진행되기 전에 진행속도를 최소화하기 위해<br /> 
				적극적인 예방치료가 필요한 경우가 많습니다.</p>
			</li>
		</ul>
	</div>
</section>
<section class="content crack-tooth">
	<div class="inner">
		<h4 class="middle-title">치아균열증후군의 치료</h4>
		<ul class="col-3 circle-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/crack_tooth_01.jpg" alt="">
				<h5 class="point-color">1단계</h5>
				<p>금이 간 치아를
				단단히 둘러싸 잡아 주기 위하여
				크라운 치료를 진행합니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/crack_tooth_02.jpg" alt="">
				<h5 class="point-color">2단계</h5>
				<p>크라운 치료 후에도
				증상이 지속되는 경우
				신경치료가 필요합니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/crack_tooth_03.jpg" alt="">
				<h5 class="point-color">3단계</h5>
				<p>신경치료 완료 후에도 개선이 없다면
				치아 균열이 뿌리까지 진행되어
				발치가 필요할 가능성이 높습니다.</p>
			</li>
		</ul>
		<p>치료는 증상에 따라 2단계, 3단계로 차례대로 넘어가게 됩니다. <br />
		위와 같이 단계별로 치료를 진행하는 이유는 증상만으로 치아균열로 진단을 내리더라도 <br />
		<b class="point-color">그 균열이 어디까지 이르렀는지 정확히 진단하기가 불가능하기 때문</b>입니다. <br /> <br />
		부득이하게 3단계 발치로 넘어가게 되면 "왜 처음부터 발치하지 않았을까"라고 후회와 원망을 하실 수도 있습니다. <br />
		하지만 저희 병원에서는 <b class="point-color">조금의 가능성이라도 있다면 단 하나의 치아라도 가급적이면 빼지 않고</b> <br />
		<b class="point-color">보존하고자 하는 마음으로 단계별 진료를 진행</b>하고 있습니다.</p>
	</div>
	<img src="<? echo G5_THEME_IMG_URL; ?>/sub/crack_tooth_bg.png" alt="">
</section>
<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>