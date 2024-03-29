<?php

//require_once "C:/xampp/htdocs/fivescore/wp-content/guzzle/vendor/autoload.php";
//$client = new \GuzzleHttp\Client();
//session_start();
/**
 * Template Name: Full-width Custom HTML, No Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

include "auth.php";
$partner = "5score";
$apiKey = "BCC*}7`w3c=|/T*_.WNVV(VX<}Le^K";
$cookie_name = "apiToken";
$apiPass = $_COOKIE["apiToken"];
$liveapiPass = $_COOKIE["apiLiveToken"];
$favLeagues = $_COOKIE["MY_LEAGUES"];
$favLeagueIds = [];
$favLeaguesArray = explode(",", $favLeagues);
//print_r($favLeaguesArray);

//print_r($favLeagueIds);
//$favLeaguList = implode(',', $favLeagueIds);
//echo  $favLeaguList;
$urlcountryName = get_query_var("countryName");
$urlleagueName = get_query_var("leagueName");
$urlleagueName = str_replace("-", " ", $urlleagueName);
$urlleagueIdarray = [];
$urlleagueIdarray[0] = get_query_var("leagueId");
$urlleagueId1 = explode("-", $urlleagueIdarray[0]);
$urlleagueId = $urlleagueId1[0];
$viewType = $urlleagueId1[1];
//echo $viewType;
$urlgameIdArray = [];
$urlgameIdArray[0] = get_query_var("gameId");
$urlgameId1 = explode("-", $urlgameIdArray[0]);
$urlgameId = $urlgameId1[0];
$urlteamId = $urlgameId1[1];
if (is_numeric($urlgameId)) {
    //echo "numaric valid";
} else {
    //echo "not";
}


//echo get_query_var('nouman');
//echo get_query_var('leagueId');
//echo get_query_var('gameId');
get_header();
?>
<?php
$lang = "eng"; //$current_language = get_locale();
$current_language = "eng";
switch ($current_language) {
    case "en_EN":
    $lang = "eng";
    break;
    case "zh_CN":
    $lang = "chn";
    break;
    case "ru_RU":
    $lang = "rus";
    break;
    case "ar":
    $lang = "ara";
    break;
    case "hr":
    $lang = "hrv";
    break;
    case "cs_CZ":
    $lang = "cze";
    break;
    case "da_DK":
    $lang = "dan";
    break;
    case "nl_NL":
    $lang = "ned";
    break;
    case "fi":
    $lang = "fin";
    break;
    case "fr_FR":
    $lang = "fra";
    break;
    case "de_DE":
    $lang = "ger";
    break;
    case "hu_HU":
    $lang = "hun";
    break;
    case "it_IT":
    $lang = "ita";
    break;
    case "ja":
    $lang = "jpn";
    break;
    case "ko_KR":
    $lang = "kor";
    break;
    case "nn_NO":
    $lang = "nor";
    break;
    case "pl_PL":
    $lang = "pol";
    break;
    case "pt_PT":
    $lang = "por";
    break;
    case "es_ES":
    $lang = "esp";
    break;
    case "tr_TR":
    $lang = "tur";
    break;
    case "sv_SE":
    $lang = "swe";
    break;
    default:
    $lang = "eng";
} /* if(!isset($_COOKIE["lang"])) {
  $lang="eng";
  } else {
  $lang=$_COOKIE["lang"];

} */
$pagename = "";
$pagename = basename(get_permalink());
if ($pagename == "www.24hscore.com") {
    $pagename = "football";
}
$sport = "Soccer";
$sportId = "6046";
switch ($pagename) {
    case "icehockey":
    $sport = "IceHockey";
    $sportId = "35232";
    break;
    case "floorball":
    $sport = "Floorball";
    $sportId = "35706";
    break;
    case "handball":
    $sport = "Handball";
    $sportId = "35709";
    break;
    case "bandy":
    $sport = "Bandy";
    $sportId = "46957";
    break;
    case "basketball":
    $sport = "Basket";
    $sportId = "48242";
    break;
    case "tennis":
    $sport = "Tennis";
    $sportId = "54094";
    break;
    case "volleyball":
    $sport = "Volleyball";
    $sportId = "154830";
    break;
    case "baseball":
    $sport = "Baseball";
    $sportId = "154914";
    break;
    case "american-football":
    $sport = "AmericanFootball";
    $sportId = "131506";
    break;
    case "table-tennis":
    $sport = "table-tennis";
    $sportId = "265917";
    break;
    case "waterpolo":
    $sport = "waterpolo";
    $sportId = "388764";
    break;
    case "futsal":
    $sport = "futsal";
    $sportId = "687887";
    break;
    case "esports":
    $sport = "esports";
    $sportId = "2133683";
    break;
    case "speedway":
    $sport = "speedway";
    $sportId = "50617";
    break;
    default:
    $sport = "Soccer";
    $sportId = "6046";
}
foreach ($favLeaguesArray as $favLeagues) {
    if (str_contains($favLeagues, "_" . $sportId)) {
        array_push($favLeagueIds, str_replace("_" . $sportId, "", $favLeagues));
    }
}

//include 'breadcrum.php';
?>

<div id="primary" class="site-content">
    <div id="content" role="main">
        <div class="container page-container">

            <div class="row">
                <?php  ?>
                <style>
                    .callendarDays {    padding: 0.5rem 0.25rem !important;}
                    .main-left {  width: 69%;position:relative;}
                    @media (max-width: 600px){
                        .main-left {width: 99%;}
                    }
                    
                    .widget-container a {
                        display:none !important;
                    }
                    .widget-container--live-score {min-height:800px;}
                    
                </style>

                <div class="main-left">   

                    <?php echo get_field('custom-html-main-2', get_the_ID()) ?>                 
                    <?php echo do_shortcode(get_field('top_content_text')) ?>

                    

                    <div class="2h-live-score-frame" style="position:relative;">
                        <a class="24hscore-ads" style="
                        width: 100%;
                        height: 50px;
                        background: #666666;
                        position: absolute;
                        background-image: url(https://24hscore.com/wp-content/uploads/2023/12/1xbet-banner.jpg);
                        background-size: contain;
                        " href="https://www.24hscore.com/bookmaker/go/1xbet"></a>
                        <?php echo get_field('custom-html-main', get_the_ID()) ?>
                    </div>
                </div>

                <div class="col-right_right">
                    <div class="rightcontent">
                        <div class="titlesidebar bullet-header-title"><span class="titlesidebarspan">Betting Sites</span></div>
                        <div id="rightlinks">
                            <div class="linkbookcenter"><a href="https://www.24hscore.com/bookmaker/go/1xbet" target="_blank" rel="noopener nofollow" class="linkgo" title="house 1"><span class="logobookcenter"><img src="/wp-content/themes/spacious/images/new4.png" width="64" height="26" alt="house 3" class="bonusrateimage"></span><div class="bookposmain"><p class="posinside1">1&#xBA;</p><p class="posinside2">Position</p></div><div class="bookcenterbonus"><div class="posinside4"><p class="posinside1 posinside3">100 %</p><p class="posinside2">Bonus</p></div></div><div class="buttonbookcenter"><span class="buttonbookcenterlabel">Get Now</span></div></a></div>
                            <div class="linkbookcenter"><a href="https://www.24hscore.com/bookmaker/go/1xbet" target="_blank" rel="noopener nofollow" class="linkgo" title="house 2"><span class="logobookcenter"><img src="/wp-content/themes/spacious/images/new1.png" width="64" height="26" alt="house 1" class="bonusrateimage"></span><div class="bookposmain"><p class="posinside1">2&#xBA;</p><p class="posinside2">Position</p></div><div class="bookcenterbonus"><div class="posinside4"><p class="posinside1 posinside3">100 &#x20AC;</p><p class="posinside2">Bonus</p></div></div><div class="buttonbookcenter"><span class="buttonbookcenterlabel">Get Now</span></div></a></div>
                            <!--<div class="linkbookcenter"><a href="#" target="_blank" rel="noopener nofollow" class="linkgo" title="house 2"><span class="logobookcenter"><img src="/wp-content/themes/spacious/images/new2.png" width="64" height="26" alt="house 2" class="bonusrateimage"></span><div class="bookposmain"><p class="posinside1">2&#xBA;</p><p class="posinside2">Position</p></div><div class="bookcenterbonus"><div class="posinside4"><p class="posinside1 posinside3">100 %</p><p class="posinside2">Bonus</p></div></div><div class="buttonbookcenter"><span class="buttonbookcenterlabel">Get Now</span></div></a></div>-->

                            <!--<div class="linkbookcenter"><a href="#" target="_blank" rel="noopener nofollow" class="linkgo" title="house 4"><span class="logobookcenter"><img src="/wp-content/themes/spacious/images/new45.png" width="64" height="26" alt="house 4" class="bonusrateimage"></span><div class="bookposmain"><p class="posinside1">4&#xBA;</p><p class="posinside2">Position</p></div><div class="bookcenterbonus"><div class="posinside4"><p class="posinside1 posinside3">100 %</p><p class="posinside2">Bonus</p></div></div><div class="buttonbookcenter"><span class="buttonbookcenterlabel">Get Now</span></div></a></div>-->
                            <div class="linkbookcenter"><a href="https://www.24hscore.com/bookmaker/go/1xbet" target="_blank" rel="noopener nofollow" class="linkgo" title="house 3"><span class="logobookcenter"><img src="/wp-content/themes/spacious/images/new6.png" width="64" height="26" alt="house 5" class="bonusrateimage"></span><div class="bookposmain"><p class="posinside1">3&#xBA;</p><p class="posinside2">Position</p></div><div class="bookcenterbonus"><div class="posinside4"><p class="posinside1 posinside3">122 %</p><p class="posinside2">Bonus</p></div></div><div class="buttonbookcenter"><span class="buttonbookcenterlabel">Get Now</span></div></a></div>


                        </div>

                    </div>
                    <?php //include 'standing.php'; ?> 

                    <div class="rightcontent bg-white">
                        <?php echo apply_filters('the_content', get_field('widget_bottom_text')); ?>
                    </div><!-- End Class rightcontent -->   


                    
                </div>
            </div>
        </div>





        <?php

        while (have_posts()):
            the_post(); ?>
            <?php get_template_part("content", "page"); ?>
            <?php comments_template("", true); ?>
            <?php
        endwhile;

// End of the loop.
        ?>

    </div><!-- #content -->
</div><!-- #primary -->
<?php get_sidebar("right"); ?>

<?php get_footer(); ?>
