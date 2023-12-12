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
$ch = "";

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

                <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                
                <div class="wm-competition slick-slider">
                    <a href="">Bundesliga</a>                        
                    <a href="">Ligue 1</a>
                    <a href="">Premier League</a>
                    <a href="">Serie A</a>
                    <a href="">UEFA Champions League</a>
                    
                </div>
                <style>
                    .wm-competition{
                        margin-bottom: 10px;
                        overflow: hidden;
                        display: flex !important;
                    }
                    .wm-competition a{
                        padding: 5px 15px;
                        color: #000;
                        font-size: 16px;
                        line-height: 30px;
                        position: relative;
                        background: #fff;
                        border-radius: 40px;
                        margin-right: 10px;
                        display: block;
                    }
                    .wm-competition a:hover {
                        color: #fff;
                        background: #da1818;
                    }
                </style>
                <script>
                    (function($){
                        $(document).ready(function(){
                            $('.wm-competition').slick({
                                dots: false,
                                infinite: false,
                                speed: 500,
                                swipe: true,
                                centerMode: false,
                                variableWidth: true,
                                swipeToSlide: true,
                                arrows: false
                            });
                        });
                    })(jQuery);
                </script>
                
                <div class="main-left">
                    <?php echo do_shortcode('[anwpfl-matches competition_id="2549,8570,4324" show_secondary="0" season_id="" league_id="" group_id="" type="fixture" limit="20" date_from="" date_to="" stadium_id="" filter_by_clubs="" home_club="" away_club="" filter_by_matchweeks="" days_offset="" days_offset_to="" sort_by_date="desc" sort_by_matchweek="asc" group_by="competition" group_by_header_style="" show_club_logos="1" show_match_datetime="1" competition_logo="1" include_ids="" exclude_ids="" outcome_id="" no_data_text="" layout="" show_load_more="0"]

                    ') ?>

                   <?php echo get_field('custom-html-main-2', get_the_ID()) ?>
                   
                    <div class="2h-live-score-frame" style="position:relative;">
                        <div class="24hscore-ads" style="
                                width: 100%;
                                height: 50px;
                                background: #666666;
                                position: absolute;
                                background-image: url(https://24hscore.com/wp-content/uploads/2023/12/1xbet-banner.jpg);
                                background-size: contain;
                            "></div>
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
                        <?php echo do_shortcode('[anwpfl-standing title="" id="468" exclude_ids="" layout="" partial="" bottom_link="" link_text="" show_notes="1"]'); ?>
                    </div><!-- End Class rightcontent -->   


                    
                </div>
            </div>
        </div>





        <?php
        curl_close($ch);
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
