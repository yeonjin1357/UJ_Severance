<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg ortho-bg">
	<p>YONSEI WONPLANT</p>
	<h2>디오 디지털교정</h2>
</div>
<?php
	include_once(G5_PATH.'/ortho_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('디오 디지털교정');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>YONSEI WONPLANT</p>
			<h3>디오 디지털교정</h3>
		</div>
		<h4 class="middle-title point-color">이젠 교정도 디지털, 100% 환자맞춤형 치아교정</h4>
		<ul class="basic-box">
            <li>
		        <img src="<? echo G5_THEME_IMG_URL; ?>/sub/dio_digital_01.jpg" alt="">
            </li>
            <li>
                <h5><span class="point-color">디오 디지털교정</span></h5>
		        <p><span class="point-color">1.</span> 치아 이동이 빠른 3D 프린트 브라켓
					<span class="point-color">2.</span> 구강스캐너를 이용한 환자 맞춤형 설측 브라켓
					<span class="point-color">3.</span> 이물감 최소화 & 정교한 치아 이동
                </p>
            </li>
        </ul>
	</div>
</section>
<section class="content">
	<div class="inner">
		<h4 class="middle-title">디오 디지털교정의 특별함</h4>
		<ul class="col-3">
			<li class="circle-list">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/dio_digital_02.jpg" alt="">
					<p>치아 안쪽에<br>
					브라켓을 부착하므로
					</p>
					<h5 class="point-color">티가 나지 않아요!</h5>
				</div>
			</li>
			<li class="circle-list">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/dio_digital_03.jpg" alt="">
					<p>치료 전 컴퓨터 시뮬레이션을<br>
					통해 교정 과정 및 결과를
					</p>
					<h5 class="point-color">미리 볼 수 있어요!</h5>
				</div>
			</li>
			<li class="circle-list">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/dio_digital_04.jpg" alt="">
					<p>디오만의 특허 받은 브라켓으로<br>
					치아에 빠르고 정확하게 부착하여
					</p>
					<h5 class="point-color">진료시간이 짧아요!</h5>
				</div>
			</li>
		</ul>

		<ul class="col-3">
			<li class="circle-list">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/dio_digital_05.jpg" alt="">
					<p>약한 힘을<br>
					일정하게 주기 때문에
					</p>
					<h5 class="point-color">통증이 적어요!</h5>
				</div>
			</li>
			<li class="circle-list">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/dio_digital_06.jpg" alt="">
					<p>치아 이동이<br>
					빠르기에
					</p>
					<h5 class="point-color">치료기간이 짧아요!</h5>
				</div>
			</li>
			<li class="circle-list">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/dio_digital_07.jpg" alt="">
					<p>환자 맞춤형<br>
					브라켓이라
					</p>
					<h5 class="point-color">정교한 교정이 가능해요!</h5>
				</div>
			</li>
		</ul>
	</div>
</section>

<style>
	

.basic-box li:last-child {
    margin-left: 7%;
}

h4{
    margin: 50px 0 !important;
}

.col-3 p{
	margin-top: 5%;
}

.col-3 h5{
	margin: 0 !important;
}

ul.col-3:last-child{
	margin-top: 5%;
}
</style>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>