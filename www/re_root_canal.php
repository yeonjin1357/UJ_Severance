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
		$('.sub-menu02').prev().html('미세현미경 재신경치료');
	});
</script>
<section class="content tac">
	<div class="inner">
		<div class="title">
			<p>YONSEI BARUN</p>
			<h3>미세현미경 재신경치료</h3>
		</div>
		<img src="<? echo G5_THEME_IMG_URL; ?>/sub/re_root_canal_01.jpg" alt="">
		<h4 class="mt3">재신경치료도 미세현미경과 함께</h4>
		<p class="mt3">미세현미경을 통해 기존 신경치료에서 문제가 발생한 원인을 찾아내고, <br />
		염증 부위까지 기구를 접근시킬 수 있는 치과보존과 원장의 숙련된 손길이 더하면 <br />
		재신경치료 성공률을 높일 수 있습니다.</p>
	</div>
</section>
<section class="content bg-gray">
	<div class="inner">
		<div class="title">
			<p>YONSEI BARUN</p>
			<h3>결과로 보여주는 실력</h3>
		</div>
		<h6 class="sub-title"><b>재신경치료</b><span>재신경치료 케이스1</span></h6>
		<ul class="col-2 line-list">
			<li class="num" data-num="01"><img src="<? echo G5_THEME_IMG_URL; ?>/sub/re_root_canal_02.jpg" alt=""></li>
			<li class="num" data-num="02"><img src="<? echo G5_THEME_IMG_URL; ?>/sub/re_root_canal_03.jpg" alt=""></li>
			<li class="num" data-num="03"><img src="<? echo G5_THEME_IMG_URL; ?>/sub/re_root_canal_04.jpg" alt=""></li>
			<li class="num" data-num="04"><img src="<? echo G5_THEME_IMG_URL; ?>/sub/re_root_canal_05.jpg" alt=""></li>
		</ul>
		<h6 class="sub-title"><b>재신경치료</b><span>재신경치료 케이스2</span></h6>
		<ul class="col-3 line-list">
			<li class="arrow"><img src="<? echo G5_THEME_IMG_URL; ?>/sub/re_root_canal_06.jpg" alt=""></li>
			<li class="arrow"><img src="<? echo G5_THEME_IMG_URL; ?>/sub/re_root_canal_07.jpg" alt=""></li>
			<li class="arrow"><img src="<? echo G5_THEME_IMG_URL; ?>/sub/re_root_canal_08.jpg" alt=""></li>
		</ul>
		<p class="middle-text mb3">미세현미경을 통한 재신경치료로<br />
		뿌리 끝 염증이 생겼던 원인을 찾아 <b>해결할 가능성을 버리지 마세요.</b><br>
		어떤 상황이라도 발치는 <b>최후의 선택</b>이 되어야 합니다.</p>
	</div>
</section>
<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>