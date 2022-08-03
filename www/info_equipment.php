<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
include_once(G5_THEME_PATH.'/meta/about_meta_tag.html');
?>
<div class="banner-bg info-equipment-bg">
	<p>UJ SEVERANCE DENT</p>
	<h2>첨단 장비 소개</h2>
</div>
<?php
	include_once(G5_PATH.'/about_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('첨단 장비 소개');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>UJ SEVERANCE DENT</p>
			<h3>첨단 장비 소개</h3>
		</div>
		<ul class="col-5 line-list">
			<li class="num" data-num="01">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_01.jpg" alt="">
				<h5>3D CT</h5>
				<p>HDX Eco-X 3D CT</p>
			</li>
			<li class="num" data-num="02">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_02.jpg" alt="">
				<h5>디지털 임플란트 가이드</h5>
				<p>Varoguide</p>
			</li>
			<li class="num" data-num="03">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_03.jpg" alt="">
				<h5>친수성 활성기</h5>
				<p>Osteoactive</p>
			</li>
			<li class="num" data-num="04">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_04.jpg" alt="">
				<h5>소형원심분리기</h5>
				<p>Gyrogen 406</p>
			</li>
			<li class="num" data-num="05">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_05.jpg" alt="">
				<h5>턱관절 물리치료기</h5>
				<p>PHL-15</p>
			</li>
			<li class="num" data-num="06">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_06.jpg" alt="">
				<h5>멸균기</h5>
				<p>Explasma Z7</p>
			</li>
		</ul>
	</div>
</section>

<style>
 

    .num p{
        margin-bottom: 20px;
    }

    .line-list li img {
        border: none !important;
    }
</style>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>