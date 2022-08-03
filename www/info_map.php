<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
include_once(G5_THEME_PATH.'/meta/about_meta_tag.html');
?>
<div class="banner-bg info-map-bg">
	<p>UJ SEVERANCE DENT</p>
	<h2>진료안내 / 오시는 길</h2>
</div>
<?php
	include_once(G5_PATH.'/about_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('진료안내 / 오시는 길');
	});
</script>

<section class="content info-time">
	<div class="inner">
		<div class="title">
			<p>UJ SEVERANCE DENT</p>
			<h3>진료안내</h3>
		</div>
		<ul>
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/main/time.png" alt=""></li>
			<li>
				<h6>월 · 금</h6>
				<h6>AM 09:30 ~ PM 06:30</h6>
				<h6 class="night-time">화 · 목(야간 진료)</h6>
				<h6>AM 09:30 ~ <span class="point-color">PM 09:00</span></h6>
				<h6>수요일</h6>
				<h6>PM 02:30 ~ PM 06:30</h6>
				<h6>토요일</h6>
				<h6>AM 10:00 ~ PM 02:00</h6>
				<h6>점심시간</h6>
				<h6>PM 01:00 ~ PM 02:30</h6>
			</li>
		</ul>
		<p>※ 토요일은 점심시간 없이 진료합니다.</p>
		<p>※ 일요일, 공휴일은 휴무입니다.</p>
		<h5>
			<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_time_icon.jpg" alt="">
			예약 및 상담 <span class="point-color">031-943-7575</span>
		</h5>
	</div>
</section>

<section class="content info-map" id="map">
	<div class="inner">
		<div class="title">
			<p>UJ SEVERANCE DENT</p>
			<h3>오시는 길</h3>
		</div>
		<!-- * 카카오맵 - 지도퍼가기 -->
			<!-- 1. 지도 노드 -->
			<div id="daumRoughmapContainer1637903600401" class="root_daum_roughmap root_daum_roughmap_landing"></div>

			<!--
				2. 설치 스크립트
				* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
			-->
			<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

			<!-- 3. 실행 스크립트 -->
			<script charset="UTF-8">
				new daum.roughmap.Lander({
					"timestamp" : "1637903600401",
					"key" : "2888i",
					"mapWidth" : "1200",
					"mapHeight" : "360"
				}).render();
			</script>
		<ul>
			<li style="text-align: center;">
				<div>
					<h6 class="point-color">치과 주소</h6>
					<p style="font-weight: 500; font-size: 18px;">경기도 파주시 책향기로 573<br>
					월드타워 3차 2층</p>
				</div>
			</li>
			<li style="text-align: center;">
				<div>
					<h6 class="point-color">주차장 주소</h6>
					<p style="font-weight: 500; font-size: 18px;">1. 치과건물 주차<br>
					2. 산내마을 공영주차장 이용<br>
					<span id="ll">* 건물 주차장이 협소하오니 참고 바랍니다.</span></p>
				</div>
			</li>
			<li style="text-align: center;">
				<div>
					<h6 class="point-color">대중교통으로 오시는 길</h6>
					<p style="font-size: 18px;">경의중앙선운정역 하차후 1번출구 <b class="point-color">></b><br>
					운정역정류장에서 80번 버스 <b class="point-color">또는</b> 080B 버스 승차 <b class="point-color">></b><br>
					산내마을 중심상가(중)정류장 하차</p>
				</div>
			</li>
		</ul>
	</div>
</section>

<style>
	span#ll{font-weight: 200 !important; color: #999;}

    .num-list .num {
        margin-bottom: 3%;
        position: relative;
        padding-left: 50px;
    }

    .num-list .num::before {
        position: absolute;
        top: 20%;
        width: 35px;
        height: 35px;
        font-size: 1.3em;
        display: inline-block;
        transform:translateX(-25%);
        left: 25%;
    }
</style>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>