<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>



<!-- 콘텐츠 시작 { -->
    <div id="wrap">
    <!-- header -->
    <header>
        <!-- logo-box -->
        <div class="logo-box">
            <a href="#">
                <img src="<?php echo G5_THEME_IMG_URL ?>/km/header-logo.svg" alt="">
            </a>
        </div>
        <!-- menu-box -->
        <ul class='menu-box'>
            <li>
                <a class='scroll' href="#main-slide">
                    Main
                </a>
            </li>
            <li>
                <a class='scroll' href="#about-us">
                    About us
                </a>
            </li>
            <li>
                <a class='scroll' href="#business01">
                    국내판로지원
                </a>
            </li>
            <li>
                <a class='scroll' href="#business02">
                    해외시장개척
                </a>
            </li>
            <li>
                <a class='scroll' href="#business03">
                    맞춤형 마케팅컨설팅
                </a>
            </li>
            <li>
                <a class='scroll' href="#business04">
                    마케팅교육 및 역량강화
                </a>
            </li>
            <li>
                <a class='scroll' href="#business05">
                    홍보·마케팅
                </a>
            </li>
            <li>
                <a class='scroll' href="#business06">
                    디자인 개선
                </a>
            </li>
            <li>
                <a class='scroll' href="#closing">
                    Contact us
                </a>
            </li>
        </ul>
        <!-- icon-box -->
        <div class="icon-box">
            <ul>
                <li>
                    <a href="#">
                        <!-- icon01 -->
                    </a>
                </li>
                <li>
                    <!-- icon02 -->
                    <a href="#" class="hamburger-box">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <!-- hamburger-wrap -->
                    <div class="hamburger-wrap">
                        <ul>
                            <li>
                                <a class='scroll' href="#main-slide">
                                    <span>
                                        Main
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class='scroll' href="#about-us">
                                    <span>
                                        About us
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class='scroll' href="#business01">
                                    <span>
                                        국내판로지원
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class='scroll' href="#business02">
                                    <span>
                                        해외시장개척
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class='scroll' href="#business03">
                                    <span>
                                        맞춤형 마케팅컨설팅
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class='scroll' href="#business04">
                                    <span>
                                        마케팅교육 및 역량강화
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class='scroll' href="#business05">
                                    <span>
                                        홍보·마케팅
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class='scroll' href="#business06">
                                    <span>
                                        디자인 개선
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class='scroll' href="#closing">
                                    <span>
                                        Contact us
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- header -->