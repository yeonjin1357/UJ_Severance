<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg prosthetic-bg">
	<p>YONSEI WONPLANT</p>
	<h2>보철치료</h2>
</div>
<?php
	include_once(G5_PATH.'/basic_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('보철치료');
	});
</script>
<section class="content table-wrap">
	<div class="inner">
		<div class="title">
			<p>YONSEI WONPLANT</p>
			<h3>인레이 치료</h3>
			<p class="title-text">치아의 썩은 부위를 제거한 후 금이나 
			레진 또는 세라믹으로 손실된 부분의 치아 원형과<br />
			똑같은 모양을 만들어 접착제로 붙여 넣어 
			썩은 치아의 기능과 형태를 회복시켜 주는 치료입니다.</p>
		</div>
		<img src="<? echo G5_THEME_IMG_URL; ?>/sub/prosthetic_01.jpg" alt="">
		<div class="table-scroll">
			<table>
				<colgroup>
					<col width="25%">
					<col width="75%">
				</colgroup>
				<tbody>
					<tr>
						<td class="table-point"><b><span class="point-color">금</span> 인레이</b></td>
						<td>금은 자연치아와 가장 유사한 물리적 성질로 <span class="point-color">생체 적합성</span>을 가지고 있어
						오래 전부터 썩은 치아를 대체하여 사용 해 왔습니다.
						치아의 손상 부위가 큰 경우에도 사용 가능하며 <span class="point-color">오랫동안 사용할 수 있습니다.</span></td>
					</tr>
					<tr>
						<td class="table-point"><b><span class="point-color">레진</span> 인레이</b></td>
						<td>금에 비해 덜 단단하지만 <span class="point-color">접착력이 우수</span>하고 <span class="point-color">비용이 저렴</span>하며
						기존 <span class="point-color">치아 색과 유사</span>한 장점이 있습니다.</td>
					</tr>
					<tr>
						<td class="table-point"><b><span class="point-color">세라믹</span> 인레이</b></td>
						<td>레진보다 강도가 좋아 <span class="point-color">안정성</span>이 비교적 좋은 편이며
						기존의 치아와 색이 유사하기 때문에 <span class="point-color">심미적으로 유리</span>합니다.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
<section class="content table-wrap">
	<div class="inner">
		<div class="title">
			<p>YONSEI WONPLANT</p>
			<h3>크라운 치료</h3>
			<p class="title-text">크라운 치료는 충치를 모두 제거한 후 
			치아 전체를 덮어 씌워 치아를 보호하는 충치 치료입니다.<br />
			충전재에 따라 골드 크라운, PFM/PFG, 
			올세라믹 크라운, 지르코니아 크라운 등으로 나뉩니다.</p>
		</div>
		<img src="<? echo G5_THEME_IMG_URL; ?>/sub/prosthetic_02.jpg" alt="">
		<div class="table-scroll">
			<table>
				<colgroup>
					<col width="25%">
					<col width="75%">
				</colgroup>
				<tbody>
					<tr>
						<td class="table-point"><b><span class="point-color">Gold Crown</span>
						( 금니 )</b></td>
						<td>가장 생체 친화적인 금을 이용하여 치아를 덮는 크라운입니다.</td>
					</tr>
					<tr>
						<td class="table-point"><b><span class="point-color">PFM / PFG</span>
						( 세라믹과 합금 / 
						세라믹과 금합금 )</b></td>
						<td>최근 가장 많이 사용되는 크라운 종류로
						겉은 자연치아와 동일한 색의 세라믹이 도포되고
						안쪽은 합금 혹은 금합금을 사용하여 크라운에 가해지는 충격을 지지합니다.</td>
					</tr>
					<tr>
						<td class="table-point"><b><span class="point-color">IPS e.max All ceramic</span>
						( 이멕스 올세라믹 )</b></td>
						<td>앞니의 심미치료, 미용치료에 주로 사용되는 크라운입니다.
						자연치아와 동일한 색상의 세라믹을 사용하기 때문에
						심미적인 효과가 우수합니다.</td>
					</tr>
					<tr>
						<td class="table-point"><b><span class="point-color">Zirconia All ceramic</span>
						( 지르코니아 올세라믹 )</b></td>
						<td>올세라믹의 단점인 약한 강도를 보완하기 위해 하얀색의
						Zirconia(지르코니아)를 이용하여 안쪽의 재질을 강화시킨 크라운 입니다.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>