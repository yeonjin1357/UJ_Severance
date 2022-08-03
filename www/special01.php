<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
include_once(G5_THEME_PATH.'/meta/special_meta_tag.html');
?>
<div class="banner-bg special-bg">
	<p>UJ SEVERANCE DENT</p>
	<h2>대학병원 수준의 특별한 진료</h2>
</div>
<?php
	include_once(G5_PATH.'/special_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('자연치아 보존 우선');
	});
</script>

<section class="content">
	<div class="inner">
		<div class="title">
			<p>UJ SEVERANCE DENT</p>
			<h3>자연치아 보존 우선</h3>
		</div>
		<div class="middle-title">
		<p>환자의 상태를 거짓없이 진단하고, 치료 방향을 진솔하게 터놓고 상의할 수 있는 병원
		임플란트 식립 전 자연치아 살리기가 우선입니다.</p>
		</div>
        <ul class="basic-box">
            <li>
		        <img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_01.jpg" alt="">
            </li>
            <li>
                <h5><span class="point-color">왜 자연치아를 살려야 하나요?</span></h5>
		        <p>영구치가 나온 후 더 이상 새로운 치아가 나오지 않습니다.
                    임플란트라는 좋은 대체 치아가 있으나, 자연치아를 대체할 순 없습니다.
                    그렇기에 소중한 자연치아를 살려 오래 쓰는 것이 좋습니다.
                </p>
            </li>
        </ul>
	</div>
</section>

<section class="content">
	<div class="inner">
		<h4 class="middle-title">윤정세브란스치과의 자연치아살리기 솔루션</h4>
		<ul class="col-4">
			<li class="circle-box">
				<p>가장 기반이 되는
                    <span class="point-color">잇몸치료</span>
                </p>
			</li>
			<li class="circle-box">
                <p>신경관 폐쇄에 효과 UP!
                    <span class="point-color">MTA 신경치료</span>
                </p>
			</li>
			<li class="circle-box">
				<p>재신경치료를 못한다면
				    <span class="point-color">치근단절제술</span>
                </p>
			</li>
			<li class="circle-box">
				<p>치아보존 최후의 수단
				    <span class="point-color">치아재식술</span>
                </p>
			</li>
		</ul>
	</div>
</section>

<section class="content bg-color">
	<div class="inner">
		<h4 class="middle-title">자연치아 보존 CASE</h4>
		<ul class="col-3 line-list">
			<li>
                <img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_02.jpg" alt="">
				<span>왼쪽 윗<br>
				어금니 신경치료</span>
			</li>
			<li>
                <img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_03.jpg" alt="">
				<span>오른쪽 아래<br>
				두개의 어금니 신경치료</span>
			</li>
			<li>
                <img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_04.jpg" alt="">
				<span>왼쪽 위 두개의<br>
				어금니 신경치료</span>
			</li>
		</ul>
		
		<div class="small-box">
			<ul class="col-2 line-list">
				<li>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_05.jpg" alt="">
					<span>오른쪽 윗 어금니<br>
					보철치료 전 신경치료</span>
				</li>
				<li class="arrow">
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special01_06.jpg" alt="">
					<span>오른쪽 윗 어금니<br>
					보철치료 후 신경치료</span>
				</li>
			</ul>
		</div>
	</div>
</section>


<style>
	.line-list span{color: #fff; display: inline-block; background-color: #203864; width: 100%; padding: 10px 0; font-size: 24px; font-weight: 500;}
    /* .line-list li:last-child span{background-color: #2056b6;} */
	.line-list{margin-bottom: 3%;}
	.line-list li img {border : none;}
	/* .line-list li{border : 1px solid #eee;} */

	
@media screen and (max-width: 425px){
	.line-list span{height: 100px;}
}
</style>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>