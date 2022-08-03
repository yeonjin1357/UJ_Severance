<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

if(defined('_INDEX_')) {
    $idx_nav = ' navigation';
    $menu_href = '';
} else {
    $idx_nav = '';
    $menu_href = G5_URL;
}

?>
<!-- 이벤트 게시판 -->
<?php 
include_once('./_common.php'); 
include_once(G5_LIB_PATH.'/latest.lib.php'); 
?> 
<!-- 상단 시작 { -->
<div id="hd">
	<div id="skip_to_container"><a href="#container">본문 바로가기</a></div>
	<?php
		if(defined('_INDEX_')) { // index에서만 실행
			include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
		}

		if ($bo_table == "online") {
		 include_once(G5_THEME_PATH.'/online_nav.php');	
		} else if ($bo_table == "qna") {
		   include_once(G5_THEME_PATH.'/qna_nav.php');
		} else if ($bo_table == "around") {
		   include_once(G5_THEME_PATH.'/around_nav.php');
		};
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
						<ul>
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
						<ul>
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
						<ul>
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
						<ul>
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
						<ul>
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

				$('.has-submenu').click(function(){
					if($(this).children('.sub-menu').hasClass('active') === false){
						$(this).children('.sub-menu').removeClass('active');
						$(this).children('a').removeClass('active');
					} else{
						$('.has-submenu > a').removeClass('active');
						$('.sub-menu').removeClass('active');
						$(this).children('.sub-menu').addClass('active');
						$(this).children('a').addClass('active');
					}

				});
			</script>
		</div><!-- header_wrap -->
	</header>
</div>



<!-- } 상단 끝 -->
<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container">
        <?php if ((!$bo_table || $w == 's' ) && !defined("_INDEX_")) { ?><div id="container_title" class="center"><?php echo $g5['title'] ?></div><?php } ?> 
		<!-- board, login, join, etc (backend develop part) : 수정 불가 -->