<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_THEME_PATH.'/meta/main_meta_tag.html');
?>


<!-- 상단 시작 { -->
<div id="hd">
	<div id="skip_to_container"><a href="#container">본문 바로가기</a></div>
	<div id="visual-media"><video width="100%" height="auto" autoplay="" loop muted><source src="<? echo G5_THEME_URL; ?>/video/video1.mp4" type="video/mp4"></video></div>
	<?php
		if(defined('_INDEX_')) { // index에서만 실행
			include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
		}
	?>
		<header id="header">
		<div id="pc-gnb">
			<ul>
				<?php if ($is_member) {  ?>
				<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">MEMBER</a></li>
				<li><a href="<?php echo G5_BBS_URL ?>/logout.php">LOGOUT</a></li>
				<?php if ($is_admin) {  ?>
				<li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>">ADMIN</a></li>
				<?php }  ?>
				<?php } else {  ?>
				<li><a href="<?php echo G5_BBS_URL ?>/login.php">LOGIN</a></li>
				<li><a href="<?php echo G5_BBS_URL ?>/register.php">JOIN</a></li>
				<?php }  ?>
				<li><a href="tel:031-943-7575">031-943-7575</a></li>
			</ul> 
		</div>
		<div class="menu-wrap">
			<a id="phone-call" href="tel:031-943-7575"><img src="<? echo G5_THEME_IMG_URL; ?>/phone.png" alt="운정세브란스치과"></a>
			<a id="m_logo" href="<?php echo G5_URL ?>/index.php"><img src="<? echo G5_THEME_IMG_URL; ?>/logo.jpg" alt="운정세브란스치과"></a>
			<div class="spinner-master">
				<input type="checkbox" id="spinner-form" />
				<label for="spinner-form" class="spinner-spin">
				<div class="spinner diagonal part-1"></div>
				<div class="spinner horizontal"></div>
				<div class="spinner diagonal part-2"></div>
				</label>
			</div>
			<ul class="mobile-gnb">
				<?php if ($is_member) {  ?>
				<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"><i class="fa fa-cog" aria-hidden="true"></i> MEMBER</a></li>
				<li><a href="<?php echo G5_BBS_URL ?>/logout.php">LOGOUT</a></li>
				<?php if ($is_admin) {  ?>
				<li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>">ADMIN</a></li>
				<?php }  ?>
				<?php } else {  ?>
				<li><a href="<?php echo G5_BBS_URL ?>/login.php">LOGIN</a></li>
				<li><a href="<?php echo G5_BBS_URL ?>/register.php">JOIN</a></li>
				<?php }  ?>
			</ul>
			<a id="logo" href="<?php echo G5_URL ?>/index.php"><img src="<? echo G5_THEME_IMG_URL; ?>/logo.jpg" alt="운정세브란스치과"></a>
			<nav id="menu" class="inner menu">
            <ul class="dropdown">
					<li>
						<a href="<?php echo G5_URL ?>/about.php" target="_self">치과소개</a>
						<ul class="subMenu">
							<li><a href="<?php echo G5_URL ?>/about.php" target="_self">운정에서 만나는 세브란스</a></li>
							<li><a href="<?php echo G5_URL ?>/info_dentist.php" target="_self">의료진 소개</a></li>
							<li><a href="<?php echo G5_URL ?>/info_equipment.php" target="_self">첨단장비 소개</a></li>
							<!-- <li><a href="<?php echo G5_URL ?>/info_time.php" target="_self">진료안내</a></li> -->
							<li><a href="<?php echo G5_URL ?>/info_interior.php" target="_self">병원 둘러보기</a></li>
							<li><a href="<?php echo G5_URL ?>/info_map.php" target="_self">진료안내 / 오시는길</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/special01.php" target="_self">대학병원 수준의<br>특별한 진료</a>
						<ul class="subMenu">
							<li><a href="<?php echo G5_URL ?>/special01.php" target="_self">자연치아 보존 우선</a></li>
							<li><a href="<?php echo G5_URL ?>/special02.php" target="_self">임플란트 재수술</a></li>
							<li><a href="<?php echo G5_URL ?>/special03.php" target="_self">전악 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/special04.php" target="_self">턱관절 / 구강 악안면 특별진료</a></li>
							<li><a href="<?php echo G5_URL ?>/special05.php" target="_self">전신질환 치과치료</a></li>
							<li><a href="<?php echo G5_URL ?>/special06.php" target="_self">난케이스 사랑니 무통발치</a></li>

						</ul>
					</li>
                    <!-- <li>
                        <a href="<?php echo G5_URL ?>/jaw_joint.php" target="_self">전문적인 노하우<br>턱관절 특화진료</a>
                        <ul>
                            <li><a href="<?php echo G5_URL ?>/jaw_joint.php" target="_self">턱관절 진료</a></li>
                        </ul>
                    </li> -->
					<li>
						<a href="<?php echo G5_URL ?>/imp_oneday.php" target="_self">혈관, 신경, 재생까지<br>고려한 임플란트</a>
						<ul class="subMenu">
							<li><a href="<?php echo G5_URL ?>/imp_oneday.php" target="_self">당일식립 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_navigation.php" target="_self">네비게이션 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_repbone.php" target="_self">자가골이식 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_highlevel.php" target="_self">뼈이식 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_blockbone.php" target="_self">블록 본(Block Bone Graft)</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_disease.php" target="_self">전신질환 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_custom.php" target="_self">맞춤 임플란트</a></li>
							<li><a href="<?php echo G5_URL ?>/imp_denture.php" target="_self">임플란트 틀니</a></li>
							
							<li><a href="<?php echo G5_URL ?>/imp_insurance.php" target="_self">건강보험 임플란트</a></li>
							
							<li><a href="<?php echo G5_URL ?>/imp_caution.php" target="_self">임플란트 주의사항</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/ortho_age.php" target="_self">구강외과 전문의 협진<br>치아교정</a>
						<ul class="subMenu">
							<li><a href="<?php echo G5_URL ?>/ortho_age.php" target="_self">연령별 치아교정</a></li>
							<li><a href="<?php echo G5_URL ?>/ortho_braces.php" target="_self">장치별 치아교정</a></li>
							<li><a href="<?php echo G5_URL ?>/ortho_retainer.php" target="_self">치아교정 유지관리</a></li>
							<li><a href="<?php echo G5_URL ?>/ortho_caution.php" target="_self">치아교정 주의사항</a></li>
							<li><a href="<?php echo G5_URL ?>/ortho_clippy.php" target="_self">클리피씨 교정</a></li>
							<li><a href="<?php echo G5_URL ?>/ortho_trans.php" target="_self">투명교정</a></li>
<!-- 							<li><a href="<?php echo G5_URL ?>/dio_digital.php" target="_self">디오 디지털교정</a></li> -->
						</ul>
					</li>
				<!-- 	<li>
						<a href="<?php echo G5_URL ?>/microscope.php" target="_self">미세현미경 클리닉</a>
						<ul>
							<li><a href="<?php echo G5_URL ?>/microscope.php" target="_self">미세현미경이란?</a></li>
							<li><a href="<?php echo G5_URL ?>/crack_tooth.php" target="_self">치아균열증후군</a></li>
							<li><a href="<?php echo G5_URL ?>/root_canal.php" target="_self">미세현미경 신경치료</a></li>
							<li><a href="<?php echo G5_URL ?>/re_root_canal.php" target="_self">미세현미경 재신경치료</a></li>
							<li><a href="<?php echo G5_URL ?>/apicoectomy.php" target="_self">치근단절제술/<br />의도적치아재식술</a></li>
						</ul>
					</li> -->
					<li>
                        <a href="<?php echo G5_URL ?>/caries.php" target="_self">보다 전문적인<br>일반진료</a>
						<ul class="subMenu">
							<li><a href="<?php echo G5_URL ?>/caries.php" target="_self">충치치료</a></li>
							<li><a href="<?php echo G5_URL ?>/root_canal.php" target="_self">신경치료</a></li>
							<li><a href="<?php echo G5_URL ?>/gum_therapy.php" target="_self">잇몸치료</a></li>
							<li><a href="<?php echo G5_URL ?>/aesthetic.php" target="_self">심미 / 보철치료</a></li>
						</ul>
					</li>
					
				</ul>
			</nav>
			<script>
				$('ul li:has(ul)').addClass('has-submenu');
				$('ul li ul').addClass('sub-menu');

				var $menu = $('#menu'), $menulink = $('#spinner-form'), $menuTrigger = $('.has-submenu > a');
				
				$menulink.click(function (e) {
					$menulink.toggleClass('active');
					$menu.toggleClass('active');
					$('.mobile-gnb').toggleClass('active');

				});
				// 트리거 버튼 클릭시
				$menuTrigger.click(function (e) {
					if($(window).width() <=1199){ 
						// 해상도 1199px이하보다 작을 때
						e.preventDefault();
						// 이벤트 적용 하지 말고
						var t = $(this);
						t.toggleClass('active').next('ul').toggleClass('active');
					}
				});

				

				$('.sub-menu li > a').click(function(){
					$menulink.removeClass('active');
					$menu.removeClass('active');
					$('.mobile-gnb').removeClass('active');
					$('.spinner-master input').prop('checked', false);
				});
				/*
				$(window).resize(function(){
					var windowWidth = $(window).width();
					var headertop = $('#header').offset().top;

					console.log('윈도우 창의 넓이 : '+  windowWidth);
					console.log('헤더의 오프셋 값 : '+  headertop);
				});

				headertop = $('#header').offset().top;
				windowWidth = $(window).width();

				$(window).on('scroll' , function () {
					headertop = $('#header').offset().top;
					windowWidth = $(window).width();

				 if ($(window).scrollTop() > headertop) {
					 $('#header').addClass('header-fixed');
					 $('#wrapper').css({'margin-top':'0px'});
				 }
				  if ($(window).scrollTop() <= headertop) {
					 $('#header').removeClass('header-fixed');
					 $('#wrapper').css({'margin-top':'210px'});
				 }
				console.log('스크롤 시 윈도우 창의 넓이 : '+  windowWidth);
				console.log('스크롤 시 헤더의 오프셋 값 : '+  headertop);
				}); 

				*/
				 $( window ).scroll(function() {
					 var defaultPosition = $('#visual-media').height();

					 if($(window).innerWidth() > 1201){
						if($(window).scrollTop() > defaultPosition){
							 $( "#header" ).addClass("header-fixed");
							 $( "#wrapper" ).css("margin-top","207.94px")
						 } else {
							 $( "#header" ).removeClass("header-fixed");
							 $( "#wrapper" ).css("margin-top","0")
						 }
					 }

					 if($(window).innerWidth() <= 1200){
						if($(window).scrollTop() > defaultPosition){
							 $( "#header" ).addClass("header-fixed");
							 $( "#wrapper" ).css("margin-top","97.94px")
						 } else {
							 $( "#header" ).removeClass("header-fixed");
							 $( "#wrapper" ).css("margin-top","0")
						 }
					 }

					 if($(window).innerWidth() <= 769){
						if($(window).scrollTop() > defaultPosition){
							 $( "#header" ).addClass("header-fixed");
							 $( "#wrapper" ).css("margin-top","65.94px")
						 } else {
							 $( "#header" ).removeClass("header-fixed");
							 $( "#wrapper" ).css("margin-top","0")
						 }
					 }
					 
					 
				 });
			</script>
		</div>
	</header>


<!-- } 상단 끝 -->
<!-- 콘텐츠 시작 { -->
<main id="wrapper">


	<!-- 콘텐츠를 입력하세요 -->
	<section class="content">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/s_01.jpg" alt="slide01">
					<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/ms_01.jpg" alt="m_slide01">
				</div>
				<div class="swiper-slide">
					<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/s_02.jpg" alt="slide02">
					<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/ms_02.jpg" alt="m_slide02">
				</div>
				<div class="swiper-slide">
					<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/s_03.jpg" alt="slide03">
					<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/ms_03.jpg" alt="m_slide03">
				</div>
				<div class="swiper-slide">
					<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/s_04.jpg" alt="slide04">
					<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/ms_04.jpg" alt="m_slide04">
				</div>
				<div class="swiper-slide">
					<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/main/s_05.jpg" alt="slide05">
					<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/main/ms_05.jpg" alt="m_slide05">
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</section>
	<section class="content">
		<div class="inner">
			<div class="title">
				<p>UJ SEVERANCE DENT</p>
				<h3>진료과목</h3>
			</div>
			<ul class="treatment">
				<li>
					<a href="<?php echo G5_URL ?>/special01.php">
						<img src="<? echo G5_THEME_IMG_URL; ?>/main/treatment_01.jpg" alt="">
					</a>
				</li>
				<li>
                    <a href="<?php echo G5_URL ?>/special02.php">
						<img src="<? echo G5_THEME_IMG_URL; ?>/main/treatment_02.jpg" alt="">
					</a>
				</li>
				<li>
                    <a href="<?php echo G5_URL ?>/special03.php">
						<img src="<? echo G5_THEME_IMG_URL; ?>/main/treatment_03.jpg" alt="">
					</a>
				</li>
                <li>
					<a href="<?php echo G5_URL ?>/special04.php">
						<img src="<? echo G5_THEME_IMG_URL; ?>/main/treatment_04.jpg" alt="">
					</a>
				</li>
				<li>
                    <a href="<?php echo G5_URL ?>/special05.php">
						<img src="<? echo G5_THEME_IMG_URL; ?>/main/treatment_05.jpg" alt="">
					</a>
				</li>
				<li>
                    <a href="<?php echo G5_URL ?>/special06.php">
						<img src="<? echo G5_THEME_IMG_URL; ?>/main/treatment_06.jpg" alt="">
					</a>
				</li>
            </ul>
            <ul class="treatment">
				
            </ul>
		</div>
	</section>
    <!-- <section class="content">
		<div class="inner">

			
		</div>
	</section> -->
	<section class="content special">
		<div class="inner">
			<div class="title">
				<h3>운정세브란스치과의 특별함</h3>
			</div>
			<ul>
				<li data-number="01">
					<div class="img-box">
						<img src="<? echo G5_THEME_IMG_URL; ?>/main/special_01.jpg" alt="">
					</div>
					<h5>진료의 원칙을 세우는 병원</h5>
					<!-- <a href="<?php echo G5_URL ?>/special01.php" target="_self" class="detail-btn">자세히 보기</a> -->
				</li>
				<li data-number="02">
					<div class="img-box">
						<img src="<? echo G5_THEME_IMG_URL; ?>/main/special_02.jpg" alt="">
					</div>
					<h5>정확성 높은 정직한 치료</h5>
					<!-- <a href="<?php echo G5_URL ?>/special02.php" target="_self" class="detail-btn">자세히 보기</a> -->
				</li>
				<li data-number="03">
					<div class="img-box">
						<img src="<? echo G5_THEME_IMG_URL; ?>/main/special_03.jpg" alt="">
					</div>
					<h5>통증 없는 최소 침습 진료</h5>
					<!-- <a href="<?php echo G5_URL ?>/special06.php" target="_self" class="detail-btn">자세히 보기</a> -->
				</li>
			</ul>
		</div>
	</section>
	<section class="content time-table">
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
		</div>
	</section>
	<section class="content map">
		<div class="inner">
			<div class="title">
				<p>UJ SEVERANCE DENT</p>
				<h3>오시는길</h3>
			</div>
			<ul>
				<li>
					<img src="<? echo G5_THEME_IMG_URL; ?>/main/map_01.png" alt="">
					<h6>경기도 파주시 책향기로 573<br>
					월드타워 3차 2층</h6>
				</li>
				<li>
					<img src="<? echo G5_THEME_IMG_URL; ?>/main/map_02.png" alt="">
					<h6>1. 치과건물 주차<br>
					2. 산내마을 공영주차장 이용<br>
					* 건물 주차장이 협소하오니 참고 바랍니다.</h6>
				</li>
				<li>
					<img src="<? echo G5_THEME_IMG_URL; ?>/main/map_03.png" alt="">
					<h6>031-943-7575</h6>
				</li>
			</ul>
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
		</div>
	</section>
</main>
</div>

<script>
	const swiper = new Swiper('.swiper-container', {
		// Default parameters
		slidesPerView: 1,
		spaceBetween: 10,
		autoplay : {
			delay : 2500,
		},
		speed: 1000,
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
		}
	
	});

</script>

<style>
	video{z-index: 9999999; position: relative; top: 0;}
	/* #header{position: sticky !important; top: 0;} */
	/* main{margin-top: 0; transition:0.5s ease;} */
	#hd{scroll-behavior: smooth;}

</style>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>	