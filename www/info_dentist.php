<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
include_once(G5_THEME_PATH.'/meta/about_meta_tag.html');
?>
<div class="banner-bg info-dentist-bg">
	<p>UJ SEVERANCE DENT</p>
	<h2>의료진 소개</h2>
</div>
<?php
	include_once(G5_PATH.'/about_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('의료진 소개');
	});
</script>
<section class="content tab-wrap">
	<div class="inner">
		<div class="title">
			<p>UJ SEVERANCE DENT</p>
			<h3>의료진 소개</h3>
			<p class="title-text">18년 경력의 前연세대학교 치과대학병원 구강악안면외과 교수출신의 특진</p>
		</div>
		<ul class="dentist">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/doctor_04.jpg" alt="">
			</li>
			<li>
				<div class="name">
					<h4>최영수 <span class="point-color">대표원장</span></h4>
					<p>ㆍ보건복지부 인증 구강악안면외과 전문의</p>
				</div>
				<ul class="disc-list">
					<li>前 연세대학교 치과대학 구강악안면외과 교수</li>
					<li>구강악안면외과 전문의 제 177호</li>
					<li>강남세브란스 구강악안면외과 임상강사 및 임상연구조교수</li>
					<li>강남세브란스 외국인진료소 교수</li>
					<li>대한구강악안면외과학회 전속지도의, 정회원, 평생회원</li>
					<li>대한악안면성형재건외과학회 정회원, 평생회원</li>
					<li>대한구강악안면임플란트학회 정회원</li>
					<li>대한치과마취과학회 정회원</li>
					<li>대한심미치과학회 정회원</li>

                    <span class="point-color">[논문]</span>
					<li>악교정 수술 골절단술시 컴퓨터 네비게이션 시스템의 이용</li>
					<li>대한악안면성형재건외과학회지. Vol. 32, No. 3, 2010
						하악골 골절에 대한 수술시 예방적 항생제 사용과 술후 항생제 투여의 효율성</li>
					<li>대한구강악안면외과학회지. Vol. 35, No. 1, 2009
						Navigation-assisted Intraoral Vertical Ramus Osteotomy</li>
					<li>J Oal Maxillofac Surg. 2010.05.021
						간경화증과 치주염으로 과도한 치은출혈을 보인 응급환자에서 최후 지혈방법으로 치관제거와 치근관 배농술</li>
					<li>대한구강악안면외과학회지. Vol. 36, No. 3, 2010
					기관지 천식과 편도 증식증 환자에서 상악 정중부 과잉치 발치 전 포크랄과 케타민 투여 진정요법시 발생된 기도폐쇄와 호흡장애
					대한치과마취과학회지. 2010. 10. 34~44\</li>
					<span class="point-color">[언론]</span>
					<li>부산 MBC 교양프로 TV닥터인사이드 2회 출연</li>
					<li>부산 MBC 라디오 건강정보 7회 출연</li>
				</ul>
			</li>
		</ul>
        <div class="thesis">
            <div>
                <h5>논문 및 포스터</h5>
                <ul class="col-2 line-list">
                    <li>
                        <img src="<? echo G5_THEME_IMG_URL; ?>/sub/thesis_01.jpg" alt="">
                        <p>Br JOMS journal 논문1</p>
                    </li>
                    <li>
                        <img src="<? echo G5_THEME_IMG_URL; ?>/sub/thesis_02.jpg" alt="">
                        <p>JOMS journal 논문2</p>
                    </li>
                </ul>
                <h5>논문 및 포스터</h5>
                <ul class="col-3 line-list">
                    <li>
                        <img src="<? echo G5_THEME_IMG_URL; ?>/sub/thesis_03.jpg" alt="">
                    </li>
                    <li>
                        <img src="<? echo G5_THEME_IMG_URL; ?>/sub/thesis_04.jpg" alt="">
                    </li>
                    <li>
                        <img src="<? echo G5_THEME_IMG_URL; ?>/sub/thesis_14.jpg" alt="">
                    </li>
                </ul>
                <p class="middle-text">ㆍ부산 MBC 교양프로 TV닥터인사이드 2회 출연<br>
                ㆍ부산 MBC 라디오 건강정보 6회 출연
                </p>
            </div>
        </div>
	</div>
</section>

<style>
    .col-2{margin-bottom: 3%;}
</style>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>