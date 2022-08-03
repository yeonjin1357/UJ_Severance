$(function(){
	//메인슬라이드
	$(".visualUl").slick({
		dots: true,
		arrows: true,
		fade: true,
		autoplay: true,
		autoplaySpeed: 4000
	})

	//풀페이지
	$("#contents").fullpage({
		
	});

	//준비중입니다.
	$(".notyet").on("click",function(){
		alert("준비중입니다.");
		return false;
	})
})