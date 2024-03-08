<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>


</div>
<!-- //#wrap -->

<!--Footer Start-->
<footer id="site-footer" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                <div class="widget-footer">
                    <img src="/off2/img/logo3.png" class="footer-logo" alt="" style="width: 90%; max-width: 243px;">
                    <!-- <p>
                        사단법인 한국마케팅진흥원은 중소기업, 소상공인, 창업기업, 벤처기업의 판로개척과 상품성 향상을 목표 삼는 기업 성장 지원 전문 그룹입니다.<br><br>
                        입점 판매 교육, 품평회, 구매상담회, 판매촉진전, 코칭 및 컨설팅, 마케팅지원을 포함한 전문적인 커리큘럼으로 지원 대상 기업의 등대가 되어 판로개척, 판매량 증가, 자생력 확보, 지속적인 성장이라는 항구에 무사히 도달할 수 있도록 이끌고 있습니다.
                    </p> -->
                    <div class="footer-social list-social">
                        <ul>
                            <li><a href="http://facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="http://instagram" target="_self"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                <div class="widget-footer">
                    <h6>Contacts</h6>
                    <ul class="footer-list">
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="fa-solid fa-location-dot"></i></span>
                            <span class="list-item-text" style="line-height: 24px;">(14353) 경기도 광명시 덕안로104번길 17 (일직동) 광명역 M클러스터 816호</span>
                        </li>
                        <!-- <li class="footer-list-item">
                            <span class="list-item-icon"><i class="fa-solid fa-paper-plane"></i></span>
                            <span class="list-item-text">email@naver.com</span>
                        </li> -->
                        <!-- <li class="footer-list-item">
                            <span class="list-item-icon"><i class="fa-solid fa-phone"></i></span>
                            <span class="list-item-text">070-8838-8181</span>
                        </li> -->
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="fa-solid fa-print"></i></span>
                            <span class="list-item-text">FAX</span>
                        </li>
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="fa-solid fa-comment"></i></span>
                            <a href="https://marketing.or.kr/board/urgency/urgency.html" target="_blank"><span class="list-item-text">문의하기</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                <div class="widget-footer widget-contact">
                    <h6>Information</h6>
                    <ul>
                        <li><a href="#">상호명 : 사단법인 한국마케팅진흥원</a></li>
                        <li><a href="#">사업자등록번호 : 569-82-00086</a></li>
                        <li><a href="#">진흥원 원장 : 전준혁</a></li>
                        <li><a href="#">정보책임자 : 이민근</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #site-footer -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                <p>Copyright © 2024 <a class="text-light">사단법인 한국마케팅진흥원</a>. All Rights Reserved.</p>
            </div>
            <!-- <div class="col-lg-5 col-md-12 align-self-center MpB70">
                <ul class="icon-list-items inline-items justify-content-lg-end" style="width: 100%;">
                    <li class="icon-list-item inline-item hidden-xs">
                        <a href="http://www.korea-md.or.kr/bbs/board.php?bo_table=md_1"><span class="icon-list-text">admin</span></a>
                    </li>
                    <li class="icon-list-item inline-item hidden-xs">
                        <a href="http://www.korea-md.or.kr/bbs/board.php?bo_table=md_3"><span class="icon-list-text">admin2</span></a>
                    </li>
                    <li class="icon-list-item inline-item">
                        <a href="http://www.korea-md.or.kr/bbs/board.php?bo_table=md_2"><span class="icon-list-text">Privacy Policy</span></a>
                    </li>
                    <li class="icon-list-item inline-item">
                        <a href="http://inje-mc.org/" target="_blank"><span class="icon-list-text">인제마케팅센터</span></a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
</div>
<!--Footer End-->


<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");