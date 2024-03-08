<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$g5_debug['php']['begin_time'] = $begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    // 상태바에 표시될 제목
    $g5_head_title = implode(' | ', array_filter(array($g5['title'], $config['cf_title'])));
}

$g5['title'] = strip_tags($g5['title']);
$g5_head_title = strip_tags($g5_head_title);

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<?php
/* if (G5_IS_MOBILE) {
    echo '<meta name="viewport" id="meta_viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10">'.PHP_EOL;
    echo '<meta name="HandheldFriendly" content="true">'.PHP_EOL;
    echo '<meta name="format-detection" content="telephone=no">'.PHP_EOL;
} else {
    echo '<meta http-equiv="imagetoolbar" content="no">'.PHP_EOL;
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">'.PHP_EOL;
} */

if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>
<!-- <title><?php echo $g5_head_title; ?></title> -->
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<title>한국마케팅진흥원</title>
<?php
$shop_css = '';
if (defined('_SHOP_')) $shop_css = '_shop';
echo '<link rel="stylesheet" href="'.run_replace('head_css_url', G5_THEME_CSS_URL.'/'.(G5_IS_MOBILE?'mobile':'default').$shop_css.'.css?ver='.G5_CSS_VER, G5_THEME_URL).'">'.PHP_EOL;
?>
<!--[if lte IE 8]>
<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
<![endif]-->
<script>
    // 자바스크립트에서 사용하는 전역변수 선언
    var g5_url       = "<?php echo G5_URL ?>";
    var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
    var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
    var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
    var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
    var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
    var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
    var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
    var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
    <?php if (defined('G5_USE_SHOP') && G5_USE_SHOP) { ?>
    var g5_theme_shop_url = "<?php echo G5_THEME_SHOP_URL; ?>";
    var g5_shop_url = "<?php echo G5_SHOP_URL; ?>";
    <?php } ?>
    <?php if(defined('G5_IS_ADMIN')) { ?>
    var g5_admin_url = "<?php echo G5_ADMIN_URL; ?>";
    <?php } ?>
</script>

<?php
    // add_javascript('<script src="'.G5_JS_URL.'/jquery-1.12.4.min.js"></script>', 0);
    // add_javascript('<script src="'.G5_JS_URL.'/jquery-migrate-1.4.1.min.js"></script>', 0);
    // if (defined('_SHOP_')) {
    //     if(!G5_IS_MOBILE) {
    //         add_javascript('<script src="'.G5_JS_URL.'/jquery.shop.menu.js?ver='.G5_JS_VER.'"></script>', 0);
    //     }
    // } else {
    //     add_javascript('<script src="'.G5_JS_URL.'/jquery.menu.js?ver='.G5_JS_VER.'"></script>', 0);
    // }
    // add_javascript('<script src="'.G5_JS_URL.'/common.js?ver='.G5_JS_VER.'"></script>', 0);
    // add_javascript('<script src="'.G5_JS_URL.'/wrest.js?ver='.G5_JS_VER.'"></script>', 0);
    // add_javascript('<script src="'.G5_JS_URL.'/placeholders.min.js"></script>', 0);
    // add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/font-awesome/css/font-awesome.min.css">', 0);

    // if(G5_IS_MOBILE) {
    //     add_javascript('<script src="'.G5_JS_URL.'/modernizr.custom.70111.js"></script>', 1); // overflow scroll 감지
    // }
    // if(!defined('G5_IS_ADMIN'))
    //     echo $config['cf_add_script'];
?>

    <!-- css -->
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/copy.css">
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/style.css">
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/jquery.scrollbar.css">
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/gh/sun-typeface/SUIT/fonts/variable/woff2/SUIT-Variable.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/font-awesome-4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/fontawesome-free-6.5.1-web/css/brands.min.css">
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/fontawesome-free-6.5.1-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/fontawesome-free-6.5.1-web/css/regular.min.css">
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/fontawesome-free-6.5.1-web/css/solid.min.css">
    <!-- js -->
    <script src='<?php echo G5_THEME_JS_URL ?>/jquery-3.7.1.min.js'></script>
    <script src='<?php echo G5_THEME_JS_URL ?>/swiper-bundle.min.js'></script>
    <script src='<?php echo G5_THEME_JS_URL ?>/jquery.scrollbar.js'></script>
    <script src='<?php echo G5_THEME_JS_URL ?>/main.js' defer></script>
    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollToPlugin.min.js"></script>
    <script src="https://unpkg.com/split-type"></script>









    <!-- md copy -->
    <!-- css -->
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/md/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/md/flaticon.css" />
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/md/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/md/owl.theme.css" />
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/md/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/md/lightgallery.css" />
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/md/woocommerce.css" />
    <!-- <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/md/royal-preload.css" /> -->
    <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/copy.css" />
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_CSS_URL ?>/settings.css">   
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_CSS_URL ?>/navigation.css">
    <!--==========================-->

    <!-- js -->
    <!-- <script src="<?php echo G5_THEME_JS_URL ?>/md/jquery-1.12.4.min.js?ver=191202"></script>
    <script src="<?php echo G5_THEME_JS_URL ?>/md/jquery-migrate-1.4.1.min.js?ver=191202"></script>
    <script src="<?php echo G5_THEME_JS_URL ?>/md/jquery.menu.js?ver=191202"></script>
    <script src="<?php echo G5_THEME_JS_URL ?>/md/common.js?ver=191202"></script>
    <script src="<?php echo G5_THEME_JS_URL ?>/md/wrest.js?ver=191202"></script>
    <script src="<?php echo G5_THEME_JS_URL ?>/md/placeholders.min.js?ver=191202"></script> -->
    <script src='<?php echo G5_THEME_JS_URL ?>/md/scripts.js' defer></script>
    <!-- //md copy -->













</head>




<body data-offset='90' data-spy='scroll' data-target='.navbar' <?php echo isset($g5['body_script']) ? $g5['body_script'] : ''; ?>>
<?php
if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
    $sr_admin_msg = '';
    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";

    echo '<div id="hd_login_msg">'.$sr_admin_msg.get_text($member['mb_nick']).'님 로그인 중 ';
    echo '<a href="'.G5_BBS_URL.'/logout.php">로그아웃</a></div>';
}