<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
include_once(G5_THEME_PATH.'/meta/special_meta_tag.html');
?>
<div class="banner-bg special-bg">
	<p>UJ SEVERANCE DENT</p>
	<h2>전신질환 치과치료</h2>
</div>
<?php
	include_once(G5_PATH.'/special_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('전신질환 치과치료');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>UJ SEVERANCE DENT</p>
			<h3>전신질환 치과치료</h3>
		</div>
		<div class="middle-title">
			<p>환자의 불편함과 통증에 공감하며, 정성을 다해 진료하는 것이 습관인 의사.
			전신질환에 깊은 이해도가 있습니다.</p>
		</div>
		<ul class="basic-box">
            <li>
		        <img src="<? echo G5_THEME_IMG_URL; ?>/sub/special05_01.jpg" alt="">
            </li>
            <li>
                <h5><span class="point-color">응급실 근무를 통해 얻은 경험</span></h5>
		        <p>오랫동안 전신마취 수술 및 입원환자,
				응급실 근무를 해왔던 대표원장의 경험이 있습니다.
				다양한 전신질환들에 깊은 이해를 가지고
				연관된 치과 진료의 적절한 관리를 도와드릴 수 있습니다.</p>
            </li>
        </ul>
	</div>
</section>

<section class="content">
	<div class="inner">
		<h4 class="middle-title">치료 가능한 전신질환</h4>
		<ul class="col-3 line-list">
			<li class="num" data-num="01">
                <img src="<? echo G5_THEME_IMG_URL; ?>/sub/special05_02.jpg" alt="">
				<h5>고혈압 환자</h5>
			</li>
			<li class="num" data-num="02">
                <img src="<? echo G5_THEME_IMG_URL; ?>/sub/special05_03.jpg" alt="">
				<h5>당뇨병 환자</h5>
			</li>
			<li class="num" data-num="03">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special05_04.jpg" alt="">
				<h5>골다골증 환자</h5>
			</li>
		</ul>
        <ul class="col-3 line-list">
			<li class="num" data-num="04">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special05_05.jpg" alt="">
				<h5>아스피린 복용자</h5>
			</li>
			<li class="num" data-num="05">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special05_06.jpg" alt="">
				<h5>혈전용해제 복용자</h5>
			</li>
			<li class="num" data-num="06">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special05_07.jpg" alt="">
				<h5>신장질환 환자</h5>
			</li>
		</ul>
        <ul class="col-3 line-list">
			<li class="num" data-num="07">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special05_08.jpg" alt="">
				<h5>고지혈증 환자</h5>
			</li>
			<li class="num" data-num="08">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special05_09.jpg" alt="">
				<h5>심장질환 환자</h5>
			</li>
			<li class="num" data-num="09">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special05_10.jpg" alt="">
				<h5>천식 환자</h5>
			</li>
		</ul>
		<div class="middle-title">
			<p>전신질환을 가진 환자라면 치과치료가 잘 진행될 수 있도록 치료 전 담당 주치의와
			모든 사항을 공유하여 대응할 수 있도록 협조해 주셔야 합니다.</p>
		</div>
	</div>
</section>

<section class="content bg-color">
	<div class="inner">
		
        <h4 class="middle-title point-color">전신질환자 치과치료 원칙</h4>
		<div class="num-list wisdom">
			<p class="num" data-num="01">모든 내원환자에 대해 전신병력에 대한 문진을 실시합니다.</p>
			<p class="num" data-num="02">전신질환이 있는 경우 현재의 치료 상황을 파악하여야 합니다.</p>
			<p class="num" data-num="03">내과 전문의에게 자문을 구합니다.</p>
			<p class="num" data-num="04">치과 진료 시 특별한 처치가 요구되는지 판단합니다.</p>
			<p class="num" data-num="05">환자에게 치과 치료 후 나타날 수 있는 합병증에 대해 충분히 설명합니다.</p>
            <p class="num" data-num="06">전신질환자의 치료는 가능한 오전에 시행합니다.</p>
		</div>
	</div>
</section>

<style>

    h5{
        padding: 10px 0 30px;
    }
</style>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>