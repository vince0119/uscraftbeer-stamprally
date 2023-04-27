// JavaScript Document


$(document).ready(function () {

	// グローバルナビ 開閉
	$(function () {
		$('.g-nav__btn').click(function () {
			$(this).toggleClass('active');
			if ($(this).hasClass('active')) {
				$('.g-nav').addClass('active');
			} else {
				$('.g-nav').removeClass('active');
				$('html').removeClass('is-fixed');
			}
		});

	});
$('.g-nav a[href]').on('click', function () {
		$('.g-nav__btn').trigger('click');
	});
	// ページ内リンクをスムーズスクロール
	$(function () {
		var headerHeight = 0;
		$('[href^="#"]').click(function () {
			var href = $(this).attr("href");
			var target = $(href == "#" || href == "" ? 'html' : href);
			var position = target.offset().top - headerHeight;
			$("html, body").animate({
				scrollTop: position
			}, 500, "swing");
			return false;
		});
	});
// アクションボタン
	var nav = $('.navwrap');
	
		var display = $(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				nav.fadeIn();
			} else {
				nav.fadeOut();
			}
		});
		$('.navBtnClose').click(function () {
			$('.navBtn').fadeOut();
			$(display).off();
		});
});

	
