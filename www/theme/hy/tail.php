<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>

<!-- 하단 시작 -->
 <footer id="footer">
	<div class="inner">
		<img src="<? echo G5_THEME_IMG_URL; ?>/logo.jpg" alt="">
		<p>운정세브란스치과의원 │ 대표 : 최영수 │ 사업자등록번호 : 572-70-00298 <br />
		주소 : 경기도 파주시 책향기로 573, 2층 203호, 204호 │ 전화 : 031-943-7575</p>
		<p class="copyright">Copyright ⓒ 2021 운정세브란스치과의원. 
		Design by 혜윰앤컴퍼니 All rights reserved</p>
	</div>
</footer>
<!-- 하단 끝 -->

<!-- tob_btn 사용 시 주석 해제 -->
<!-- <button type="button" id="top_btn">
	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
</button> -->

<!-- <style>
#quick_menu {position: absolute; top: 125px; right: 0; z-index: 999999 !important;}
</style> -->

<!-- 퀵메뉴 시작 -->
<div id="quick_menu">
	<ul>
		<li>LOGIN</li>
		<!-- <li>
			<a href="http://naver.com" target="_blank">
				<img src="<?php echo G5_THEME_IMG_URL ?>/quick/quick_naver.png" alt="네이버예약">
				<span>네이버예약</span>
			</a>
		</li> -->
		<li>
			<a href="http://pf.kakao.com/_FuQCb/chat" target="_blank">
				<img src="<?php echo G5_THEME_IMG_URL ?>/quick/quick_kakao.png" alt="카카오톡상담">
				<span>카카오톡상담</span>
			</a>
		</li>
		<li>
			<a href="https://blog.naver.com/unjeong-sevdent" target="_blank">
				<img src="<? echo G5_THEME_IMG_URL; ?>/quick/quick_blog.png" alt="블로그">
				<span>블로그</span>
			</a>
		</li>
		<li>
			<a href="https://www.instagram.com/severance_unjeong/?utm_medium=copy_link" target="_blank">
				<img src="<? echo G5_THEME_IMG_URL; ?>/quick/quick_insta.png" alt="인스타그램">
				<span>인스타그램</span>
			</a>
		</li>
		<!-- <li>
			<a href="https://talk.naver.com" target="_blank">
				<img src="<? echo G5_THEME_IMG_URL; ?>/quick/quick_talk.png" alt="네이버톡톡">
				<span>네이버톡톡</span>
			</a>
		</li> -->
		<li>
			<a href="<? echo G5_URL; ?>/info_map.php" target="_self">
				<img src="<? echo G5_THEME_IMG_URL; ?>/quick/quick_info.png" alt="진료안내">
				<span>진료안내</span>
			</a>
		</li>
		<li>
			<a href="<? echo G5_URL; ?>/info_map.php#map" target="_self">
				<img src="<?php echo G5_THEME_IMG_URL ?>/quick/quick_map.png" alt="오시는길">
				<span>오시는길</span>
			</a>
		</li>
		<li id="call">
			<a href="tel:031-943-7575" target="_self">
				<img src="<?php echo G5_THEME_IMG_URL ?>/quick/quick_countling.png" alt="상담문의">
				<span>상담문의</span>
			</a>
		</li>
		<li id="top">
			<button type="button" id="top_btn">
				<img src="<?php echo G5_THEME_IMG_URL ?>/quick/quick_top.png" alt="위로">
				<span>TOP</span>
			</button>
		</li>
	</ul>
</div>
<!-- 퀵메뉴 끝 -->
<script>

$(function() {
    $("#top_btn").on("click", function() {
        $("html, body").animate({scrollTop:0}, '500');
        return false;
    });

	$("#quick_menu li:first-child").click(function(){
		location.href = "http://ujseverancedent.co.kr/bbs/login.php"
	});
});
</script>

<!-- 하단 끝 -->
<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>