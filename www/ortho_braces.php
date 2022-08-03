<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
include_once(G5_THEME_PATH.'/meta/ortho_meta_tag.html');
?>
<div class="banner-bg ortho-bg">
	<p>UJ SEVERANCE DENT</p>
	<h2>장치별 치아교정</h2>
</div>
<?php
	include_once(G5_PATH.'/ortho_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('장치별 치아교정');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>UJ SEVERANCE DENT</p>
			<h3>장치별 치아교정</h3>
		</div>
		<ul class="col-4 line-list">
			<li class="num" data-num="01">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_01.jpg" alt="">
				<h5>메탈 교정</h5>
				<p>치아 교정에 가장 많이 사용되는 재료로
				정밀도가 우수하고 음식물의 부착이나 
				착색이 적어 관리가 용이한 교정장치입니다.</p>
			</li>
			<li class="num" data-num="02">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_02.jpg" alt="">
				<h5>세라믹 교정</h5>
				<p>치아 색상과 흡사한 세라믹 재질의  
				브라켓을 치아 외부에 부착하는 것으로  
				기존 메탈 교정 장치에 비해 심미적인 장치입니다.</p>
			</li>
			<li class="num" data-num="03">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_03.jpg" alt="">
				<h5>클리피씨 교정</h5>
				<p>자가 결찰 교정인 클리피씨 교정은  
				브라켓 자체에 열고 닫는 문짝 형식의 장치가 있어  
				스스로 와이어를 고정시켜 줄 수 있는 브라켓입니다.</p>
			</li>
			<li class="num" data-num="04">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_04.jpg" alt="">
				<h5>데이몬 교정</h5>
				<p>데이몬 교정은 철사를 묶어 고정하는 것이 아닌  
				슬라이딩 도어 형식의 교정 장치입니다.  
				치아를 원하는 위치로 더욱 빠르고 쉽게 움직일 수  
				있어 치료 기간이 4~6개월 정도 단축될 수 있습니다.</p>
			</li>
			<li class="num" data-num="05">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_05.jpg" alt="">
				<h5>데이몬 클리어</h5>
				<p>기존 데이몬 교정의 단점인  
				심미성이 보완된 장치입니다.  
				브라켓 크기가 작으며 치아 색상과 비슷한  
				세라믹으로 제작하여 매우 심미적입니다.</p>
			</li>
			<li class="num" data-num="06">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_06.jpg" alt="">
				<h5>콤비 교정</h5>
				<p>설측, 순측 교정을 혼합하여 사용하는  
				교정 방법입니다. 윗니는 보이지 않게
				혀 안쪽으로 붙이는 설측 교정, 아랫니는  
				일반 순측 교정장치로 교정하는 방법입니다.</p>
			</li>
			<li class="num" data-num="07">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_07.jpg" alt="">
				<h5>설측 교정</h5>
				<p>치아의 바깥 면에 부착되는 일반적인 교정장치와 달리  
				치아의 안쪽 면에 교정장치가 부착되어  
				겉으로 교정 장치가 보이지 않는 교정 방법입니다.</p>
			</li>
			<li class="num" data-num="08">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_08.jpg" alt="">
				<h5>투명 교정</h5>
				<p>특수 강화 플라스틱으로 된 틀을 사용하여 
				치아를 움직여 교정하는 치료방법입니다.
				기존의 브라켓을 치아에 부착하여 고정하는 
				방식과는 달리 탈착이 가능하며 심미적입니다.</p>
			</li>
		</ul>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>