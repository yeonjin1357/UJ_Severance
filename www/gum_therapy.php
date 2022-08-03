<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
include_once(G5_THEME_PATH.'/meta/basic_meta_tag.html');
?>
<div class="banner-bg gum-therapy-bg">
	<p>UJ SEVERANCE DENT</p>
	<h2>잇몸치료</h2>
</div>
<?php
	include_once(G5_PATH.'/basic_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('잇몸치료');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>UJ SEVERANCE DENT</p>
			<h3>잇몸치료</h3>
			<p class="title-text">붓고 피나는 잇몸병의 주된 원인, 바로 치태와 치석 입니다.</p>	
		</div>
		<ul class="col-2 line-box">
			<li>
				<h5 class="point-color">치태란?</h5>
				<p>치아 표면에 세균이 특정한 타액과 만나면 <br />치아 표면에 끈끈하고 
				투명한 세균막이 <br />생기는데 이것을 치태라고 하며, 
				치석의 <br />전단계로 치주질병의 주요 원인입니다.</p>
			</li>
			<li>
				<h5 class="point-color">치석이란?</h5>
				<p>치아 표면에 있는 세균막이 각종 타액등과 <br />함께 침착되어 
				만들어진 것으로, 세균과 <br />무기질로 이루어진 딱딱한 세균 덩어리 <br />입니다.</p>
			</li>
		</ul>
	</div>
</section>
<section class="content">
	<div class="inner">
		<h4 class="middle-title">잇몸 치료의 대상</h4>
		<ul class="col-5">
			<li class="circle-box">
				<p>더운물 혹은 찬물이 닿았을 떄
				이가 시린 경우</p>
			</li>
			<li class="circle-box">
				<p>잇몸이 내려가 있고
				예전에 비해 치아가
				길어졌다 싶은 경우</p>
			</li>
			<li class="circle-box">
				<p>잇몸이 아프고 치아가
				조금 흔들린다 싶은 경우</p>
			</li>
			<li class="circle-box">
				<p>입냄새가 심하고,
				입맛이 나쁜 경우</p>
			</li>
			<li class="circle-box">
				<p>치석이 쌓여있는 걸
				느끼는 경우</p>
			</li>
		</ul>
	</div>
</section>
<section class="content">
	<div class="inner">
		<div class="middle-title">
			<h4>잇몸 질환 치료 방법</h4>
			<p>잇몸병의 원인이 되는 치석을 제거하는 치료입니다.
			어디에 있는 치석을 제거하느냐에 따라 조금씩 차이가 있습니다.</p>
		</div>
		<img src="<? echo G5_THEME_IMG_URL; ?>/sub/gum_therapy_01.jpg" alt="" class="gum">
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/gum_therapy_02.jpg" alt=""></li>
			<li class="num" data-num="01">
				<h5>치석제거 (스케일링)</h5>
				<p>치아 표면에 붙어 있는 치태, 치석 등을 제거하여 
				치아의 표면을 윤택하게 합니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/gum_therapy_03.jpg" alt=""></li>
			<li class="num" data-num="02">
				<h5>치근활택술 / 치주소파술</h5>
				<p>치석이 잇몸 안쪽까지 진행됐다면 잇몸 안쪽에 자리잡고 있는
				치석과 잇몸 염증을 긁어내는 치료가 필요합니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/gum_therapy_04.jpg" alt=""></li>
			<li class="num" data-num="03">
				<h5>치주수술 (잇몸수술)</h5>
				<p>이가 흔들리거나 잇몸에 고름이 있는 경우, 마취 후 잇몸 속까지 기구를 넣어
				치료를 하는데 경우에 따라 잇몸을 절개하여 진행하기도 합니다.</p>
			</li>
		</ul>
	</div>
</section>
<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>