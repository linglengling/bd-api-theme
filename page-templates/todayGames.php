<style>
    .all-scores-widget-competition_all_scores_widget_competition_header_container{
        width: 100%;
    height: 36px;
    background-color: white;
    display: grid;
    grid-template-rows: 18px 18px;
    grid-template-columns: 32px 32px auto;
    grid-template-areas:
        "star logo competition-name loader-indicator"
        "star logo country-name loader-indicator";
    place-items: center;
    margin-bottom: 1px;
    }
    .all-scores-widget-competition_all_scores_widget_competition_info_star_container{
        grid-area: star;
    margin-top: 2px;
    }
    .all-scores-widget-competition_all_scores_widget_competition_info_star_container img{
visibility: visible;
    margin: 0;
    vertical-align: inherit;
    }
    .all-scores-widget-competition_all_scores_widget_competition_info_logo_container{
        max-width: 24px;
    max-height: 24px;
    width: auto;
    height: auto;
    visibility: visible;
    margin: 0;
    vertical-align: inherit;
    grid-area: logo;
    }
    .all-scores-widget-competition_all_scores_widget_competition_info_name{
        white-space: nowrap;
    font-size: 13px;
    color: var(--textColor);
    justify-self: flex-start;
    padding: 0 4px;
    grid-area: competition-name;
    }
    .all-scores-widget-competition_all_scores_widget_competition_info_country_name{
        white-space: nowrap;
    font-size: 13px;
    color: var(--medium);
    justify-self: flex-start;
    padding: 0 4px;
    grid-area: country-name;
    }
    .game-card-competitor_container{
        -webkit-line-clamp: 2;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    white-space: unset;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    -webkit-flex-wrap: nowrap;
    flex-wrap: nowrap;
    text-align: right;
    -webkit-flex-direction: row-reverse;
    -moz-box-orient: horizontal;
    -moz-box-direction: reverse;
    flex-direction: row-reverse;
    color: var(--textColor);
    width: 100%;
    position: relative;
    padding: 0 8px;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    grid-area: home-competitor-name;
    font-size: 14px;
    }
    .game-card-competitor_logo_wrap{
        max-width: 34px;
    max-height: 34px;
    width: auto;
    height: auto;
    visibility: visible;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    position: relative;
    grid-area: home-competitor-logo;
    margin: 0;
    }
    .game-card-competitor_away_competitor{
        max-width: 34px;
    max-height: 34px;
    width: auto;
    height: auto;
    visibility: visible;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    position: relative;
    grid-area: away-competitor-logo;
    margin: 0;
    }
    .game-card-competitor_container_away{
        -webkit-line-clamp: 2;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    white-space: unset;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    -webkit-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-flex-direction: row-reverse;
    -moz-box-orient: horizontal;
    -moz-box-direction: reverse;
    flex-direction: row-reverse;
    color: var(--textColor);
    width: 100%;
    position: relative;
    padding: 0 8px;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    font-size: 14px;
    text-align: left;
    -webkit-flex-direction: row;
    -moz-box-orient: horizontal;
    -moz-box-direction: normal;
    flex-direction: row;
    grid-area: away-competitor-name;
    }
    .s24-medals-data-icon{
        grid-area: logo;
    }
    .emptyBlock.first{
        display:none;
    }
    .emptyBlock.two{
        margin-bottom: 6px;
    }
    
    
    .scores-list-header-module{
        display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    justify-content: center;
    margin-bottom: 8px;
    }
    .option-stripe-small-container{
        display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    width: 126px;
    height: 32px;
    background-color: white;
    -webkit-clip-path: polygon(0 0,-webkit-calc(100% - 14px) 0,100% 100%,0 100%);
    clip-path: polygon(0 0,-moz-calc(100% - 14px) 0,100% 100%,0 100%);
    clip-path: polygon(0 0,calc(100% - 14px) 0,100% 100%,0 100%);
    }
    .scores-bar-widget-toolbar_filter{
        display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    }
    .scores-bar-widget-toolbar_live_toggle.switch-button_container{
        width: 50px;
    height: 24px;
    position: relative;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    background-color: #ecf0f3;
    border-radius: 12px;
    -o-object-fit: contain;
    object-fit: contain;
    box-shadow: inset 0 1px 3px 0 rgb(0 0 0 / 50%);
    cursor: pointer;
    color: #fff;
    }
    .option-stripe-large-container{
        -webkit-clip-path: polygon(0 0,-webkit-calc(100% - 14px) 0,100% 100%,14px 100%);
    clip-path: polygon(0 0,-moz-calc(100% - 14px) 0,100% 100%,14px 100%);
    clip-path: polygon(0 0,calc(100% - 14px) 0,100% 100%,14px 100%);
    width: -webkit-calc(100% - 320px);
    width: -moz-calc(100% - 320px);
    width: calc(100% - 320px);
    height: 32px;
    background-color: white;
    margin: 0 -12px;
    padding: 0 12px;
    }
    .switch-button_toggle{
        width: 38px;
    height: 24px;
    position: absolute;
    -o-object-fit: contain;
    object-fit: contain;
    background-color: #7f97ab;
    color: #f8f9fa;
    border-radius: 12px;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    font-size: 13px;
    -webkit-transition: -webkit-transform .1s ease-in-out;
    transition: -webkit-transform .1s ease-in-out;
    -o-transition: -o-transform .1s ease-in-out;
    -moz-transition: transform .1s ease-in-out,-moz-transform .1s ease-in-out;
    transition: transform .1s ease-in-out;
    transition: transform .1s ease-in-out,-webkit-transform .1s ease-in-out,-moz-transform .1s ease-in-out,-o-transform .1s ease-in-out;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    }
    .header-date-selector-date-container{
        border-left: 14px solid transparent;
    border-right: 0 solid transparent;
    width: 210px;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    justify-content: center;
    }
    .switch-button_active_toggle{
        background-color: #ff5200;
        -webkit-transform: translateX(12px);
    -moz-transform: translateX(12px);
    -o-transform: translateX(12px);
    transform: translateX(12px);
    }
    .header-date-selector-container{
        display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    -webkit-justify-content: space-between;
    -moz-box-pack: justify;
    justify-content: space-between;
    height: 100%;
    font-size: 13px;
    font-weight: 500;
    color: var(--medium);
    position: absolute;
    top: -16px;
    }
    .header-date-selector-arrows-container{
        -webkit-flex: 1 1;
    -moz-box-flex: 1;
    flex: 1 1;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    }
    .header-date-selector-arrow-container{
        -webkit-flex: 1 1;
    -moz-box-flex: 1;
    flex: 1 1;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    width: 6px;
    margin: 0 8px;
    cursor: pointer;
    }
    .header-date-selector-date{
      max-width: 88px;
    text-align: center;
    margin: 0 4px;
    white-space: nowrap;  
    }
    .header-date-selector-calender-button-container{
        background: none;
    color: inherit;
    border: none;
    padding: 0;
    font: inherit;
    cursor: pointer;
    outline: inherit;
    cursor: pointer;
    padding-top: 2px;
    margin: 0 10px;
    }
    #todaygamespicker{
       padding: 0;
    margin: 0;
    background: none;
    border: 0; 
    }
    .picker__holder{
        width: 300px;
    }
    .picker__button--today, .picker__button--clear, .picker__button--close{
        color: inherit;
    }
    .livenow_game{
     color:#ff5200;
    }
    </style>


<?php

$host = 'https://sc.score24.com/scorecenter/api/livescore/games/list.json?partner=5score&lang=eng&sportId='.$sportId;
$user_name = $partner;
$password = $liveapiPass;
if ($password == "") {
    $password = getLiveAuth();
}
//if(!isset($_SESSION["apiKey"])) {
//	$password = getAuth();
//	$_SESSION["apiKey"]=$password;
//	//setCookies($password);
//}
//else{
//	//echo "taken from session";
//$password=$_SESSION["apiKey"];
//}
$ch = curl_init($host);
$headers = array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $password . ''
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if($httpcode == 401){
curl_close($ch);
$password = getLiveAuth();
$ch = curl_init($host);
$headers = array(
'Content-Type: application/json',
'Authorization: Bearer '.$password.''
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
}
if (curl_errno($ch)) {
// throw the an Exception.
    throw new Exception(curl_error($ch));
}
//curl_close($ch);
//echo $response;

$decoded_json = json_decode($response, true);
//$tableLists = $decoded_json['tables'];

$liveLeaguesGames = $decoded_json['liveLeaguesGames'];
$nonLiveLeaguesGames = $decoded_json['nonLiveLeaguesGames'];

?>
<div class="all-scores-container" data-sportname="<?php echo $pagename; ?>" data-sportid="<?php echo $sportId; ?>">
    <div class="widget-tab-header">
        <?php
        if(basename(get_permalink()) == "www.24hscore.com"){
            ?>
        <h2 class="card-title-container trapezoid-card-title">All Scores - Football</h2>
        <?php
        }
        else{
            ?>
        <h2 class="card-title-container trapezoid-card-title">All Scores - <?php echo $sport; ?></h2>
        <?php
        }
        ?>
        
    </div>
    
    <div class="scores-list-header-module">
   <div class="scores-header">
      <div class="option-stripe-container ">
          <div class="option-stripe-small-container">
              <div class="scores-bar-widget-toolbar_filter">
   <div class="scores-bar-widget-toolbar_live_toggle switch-button_container switch-button_label_included">
      <div class="switch-button_toggle">Live</div>
   </div>
</div>
          </div>
         <div class="option-stripe-large-container"></div>
         <div class="header-date-selector-date-container option-stripe-medium-container">
            <div class=" header-date-selector-container">
               <div class=" header-date-selector-arrows-container">
                  <div>
                     <span class="header-date-selector-arrow-container clickable">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" class="arrow clickable">
                           <path d="M.405 9.009l8.485 8.485 1.215-1.215L2.83 9.006l7.289-7.288L8.908.506.405 9.009z"></path>
                        </svg>
                     </span>
                  </div>
                  <div class="header-date-selector-date"><input id="todaygamespicker" class="datepicker" type="text" value="" readonly /></div>
                  <div>
                     <span class="header-date-selector-arrow-container clickable">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" class="arrow clickable">
                           <path fill-rule="evenodd" d="M10.545 9.009L2.06 17.494.845 16.28l7.273-7.273L.83 1.718 2.042.506l8.503 8.503z"></path>
                        </svg>
                     </span>
                  </div>
               </div>
               <div aria-expanded="false">
                  <div>
                     <button class="header-date-selector-calender-button-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21">
                           <g fill="#7f97ab" fill-rule="nonzero">
                              <path d="M19.643 1.4h-2.5V.35c0-.194-.16-.35-.357-.35h-2.5a.353.353 0 0 0-.357.35V1.4H6.07V.35c0-.194-.16-.35-.357-.35h-2.5a.353.353 0 0 0-.357.35V1.4h-2.5A.353.353 0 0 0 0 1.75V20.65c0 .194.16.35.357.35h19.286a.353.353 0 0 0 .357-.35V1.75c0-.194-.16-.35-.357-.35zm-5-.7h1.786v2.1h-1.786V.7zM3.57.7h1.786v2.1H3.571V.7zM.714 2.1h2.143v1.05c0 .194.16.35.357.35h2.5a.353.353 0 0 0 .357-.35V2.1h7.858v1.05c0 .194.16.35.357.35h2.5a.353.353 0 0 0 .357-.35V2.1h2.143v3.15H.714V2.1zm0 18.2V5.95h18.572V20.3H.714z"></path>
                              <path d="M12.947 8H3v10h14V8h-4.053zm-2.579.69h2.58v2.413h-2.58V8.69zm2.58 5.517h-2.58v-2.414h2.58v2.414zm-5.895-2.414h2.579v2.414h-2.58v-2.414zm0-3.103h2.579v2.413h-2.58V8.69zm-3.316 0h2.579v2.413h-2.58V8.69zm0 3.103h2.579v2.414h-2.58v-2.414zm2.579 5.517h-2.58v-2.413h2.58v2.413zm3.316 0h-2.58v-2.413h2.58v2.413zm3.315 0h-2.579v-2.413h2.58v2.413zm3.316 0h-2.579v-2.413h2.58v2.413zm0-3.103h-2.579v-2.414h2.58v2.414zm0-5.517v2.413h-2.579V8.69h2.58z"></path>
                           </g>
                        </svg>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
    

    <div class="list_container">
        <div class="all-scores-widget-competition_all_scores_widget_competition_container">
<?php
                        $leagueId = "";
                        $gamesList = "";
                        $gamesHeaderPadding = "first";
            foreach ($liveLeaguesGames as $liveGames){
    
    if($liveGames['detail']['leagueId'] != $leagueId){
        $isFav ="";
        $favStarIcon="/wp-content/themes/spacious/images/staricon.svg";
                                 if (in_array($liveGames['detail']['leagueId'], $favLeagueIds)){
                                  $isFav="fav-selected";
                                   $favStarIcon="/wp-content/themes/spacious/images/starmarked.svg";
                                 }
                                $leagueId=$liveGames['detail']['leagueId'];
                                $countryNameURL=$liveGames['detail']['country']['name'];
                                $countryNameURL = preg_replace("/[\s-]+/", " ", $countryNameURL);
                                $countryNameURL = preg_replace("/[\s_]/", "-", $countryNameURL);
                                $leagueName = $liveGames['detail']['leagueName'];
                                $leagueName = preg_replace("/[\s-]+/", " ", $leagueName);
                                $leagueName = preg_replace("/[\s_]/", "-", $leagueName);
                                 $leagueName = str_replace( array( '\'','/','"', ',' , ';', '<', '>' ), '-', $leagueName);
                                $link="/".$pagename."/" . $countryNameURL . "/" . $leagueName . "/" . $leagueId . "/league";
            echo '<div class="emptyBlock '.$gamesHeaderPadding.'"></div>';
            echo '<div class="all-scores-widget-competition_all_scores_widget_competition_header_container">
                <div class="all-scores-widget-competition_all_scores_widget_competition_info_star_container"><img class="clickable favourite '.$isFav.'" id="fav_league_'.$liveGames['detail']['leagueId'].'" data-sportid="'.$liveGames['detail']['sportId'].'" data-countryid="'.$liveGames['detail']['country']['id'].'" data-countryname="'.$liveGames['detail']['country']['name'].'" data-leaguename="'.$liveGames['detail']['leagueName'].'" width="16" height="16" alt="" title=""  decoding="async" style="visibility: visible;" src="'.$favStarIcon.'"></div>
                <div class="s24-medals-data-icon s24-country-icon-'.$liveGames['detail']['country']['id'].'"></div><a class="all-scores-widget-competition_all_scores_widget_competition_info_name" rel="" href="'.$link.'">'.$liveGames['detail']['leagueName'].'</a>
                <div class="all-scores-widget-competition_all_scores_widget_competition_info_country_name">'.$liveGames['detail']['country']['name'].'</div>
            </div>';
            $gamesHeaderPadding="two";
                    }
                                $countryNameURL=$liveGames['detail']['country']['name'];
                                $countryNameURL = preg_replace("/[\s-]+/", " ", $countryNameURL);
                                $countryNameURL = preg_replace("/[\s_]/", "-", $countryNameURL);
                                $homeTeamUrl=str_replace(' ', ',', $liveGames['homeTeam']['name']);
                                $homeTeamUrl=str_replace('-', ',', $homeTeamUrl);
                                 $homeTeamUrl=str_replace('/', ',', $homeTeamUrl);
                                $awayTeamUrl=str_replace(' ', ',', $liveGames['awayTeam']['name']);
                                $awayTeamUrl=str_replace('-', ',', $awayTeamUrl);
                                 $awayTeamUrl=str_replace('/', ',', $awayTeamUrl);
                                $leagueName = $liveGames['detail']['leagueName'];
                                $leagueName = preg_replace("/[\s-]+/", " ", $leagueName);
                                $leagueName = preg_replace("/[\s_]/", "-", $leagueName);
                                 $leagueName = str_replace( array( '\'','/','"', ',' , ';', '<', '>' ), '-', $leagueName);
                                $leagueId = $liveGames['detail']['leagueId'];
                                $eventId=$liveGames['id'];
                                $link="/".$pagename."/" . $homeTeamUrl."-".$awayTeamUrl. "/" . $leagueName . "/" . $leagueId . "/" .$eventId;
?>
            <div class="game-card_container game-card_full_view status_<?php echo $liveGames['status'];?>">
                <div class="drawer-container game-card_mini_drawer_container mini-drawer-start-icon mini-drawer-ltr open-from-left active-transparent  mini-drawer-star-icon-container game-card_mini_drawer_container mini-drawer-ltr open-from-left active-transparent ">
                    <a class="game-card_game_card_link game-card_game_card game-card_clickable" rel="" href="<?php echo $link; ?>">
                        <div class="ellipsis game-card-competitor_container game-card-competitor_name  ellipsis-line-clamp" style="-webkit-line-clamp: 2;"><?php echo $liveGames['homeTeam']['name']; ?></div>
                        <img class="game-card-competitor_logo_wrap" width="68" height="68" alt="" title=""  decoding="async" style="max-width: 34px; max-height: 34px; width: auto; height: auto; visibility: visible;" src="https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/<?php echo $liveGames['homeTeam']['id']; ?>.png">
                      
                     <?php
                        $eventDate = $liveGames['date'];
                        $eventDate = explode(" ", $eventDate);
                                 
                        
                        if($liveGames['status'] == 1000 || $liveGames['status'] == 1010){
                            ?>
                        
                        <div class="game-card-center_center_score"><?php echo  $eventDate[1]; ?></div>
                        <?php  } ?>
                        <?php
                        if($liveGames['status'] == 1100 || $liveGames['status'] == 1400 || $liveGames['status'] == 1420 || $liveGames['status'] == 1500){
                            if($liveGames['status'] == 1100 && $sportId=="6046" ){
                                 date_default_timezone_set("CET");
                                $datee= date("Y-m-d H:i");
                                $datetimenow=$datee;
                                $timeFirst  = strtotime($datetimenow);
                                
                                $timeSecond = strtotime($liveGames['date']);
                                $differenceInSeconds = $timeFirst - $timeSecond;
                                $matchTimer= $differenceInSeconds/60;
                                                                $liveTimer=1;
                                                                 if($matchTimer < 46){
                                   $liveTimer=$matchTimer;
                                }
                                else if($matchTimer > 45 && $matchTimer < 61){
                                    $liveTimer="HT";
                                }
                                else if($matchTimer > 60 && $matchTimer < 106){
                                    $liveTimer=$matchTimer-15;
                                    
                                }
                                else if($matchTimer > 105){
                                    $liveTimer="90+";
                                }
                                else {
                                     $liveTimer="";
                                }
                                
                               
                            ?>                       
                        <div class="game-card-top_view game-card-top_top_view_container game-card-top_status_badge livenow_game">Live <?php echo $liveTimer;?></div> 
                        <?php  }
                        else if($liveGames['status'] == 1100){
                            ?>
                        <div class="game-card-top_view game-card-top_top_view_container game-card-top_status_badge livenow_game">Live</div> 
                        <?php
                        }
                        else{
                            ?>
                        <div class="game-card-top_view game-card-top_top_view_container game-card-top_status_badge">Final</div> 
                        <?php
                        }
?>
                        <div class="game-card-center_center_score"><?php echo  $liveGames['scores']['score']['homeScore']; ?> - <?php echo  $liveGames['scores']['score']['awayScore']; ?></div>
                        <?php  } ?>
                        <img class="game-card-competitor_logo_wrap game-card-competitor_away_competitor " width="56" height="68" alt="" title=""  decoding="async" style="max-width: 34px; max-height: 34px; width: auto; height: auto; visibility: visible;" src="https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/<?php echo $liveGames['awayTeam']['id']; ?>.png">
                        <div class="ellipsis game-card-competitor_container game-card-competitor_name game-card-competitor_container_away ellipsis-line-clamp" style="-webkit-line-clamp: 2;"><?php echo $liveGames['awayTeam']['name']; ?></div>
                    </a>
                    <div class="mini-drawer " style="width: 40px; left: -40px;">
<!--                        <div><img class="star-icon-spin-close clickable" width="16" height="16" alt="" title=""  decoding="async" style="visibility: visible;" src=""></div>-->
                    </div>
                </div>
            </div>
        
        <?php
}
        ?>
            
            <?php
                        $leagueId = "";
                        $gamesList = "";
                        $gamesHeaderPadding = "first";
            foreach ($nonLiveLeaguesGames as $liveGames){
    
    if($liveGames['detail']['leagueId'] != $leagueId){
       $leagueId=$liveGames['detail']['leagueId'];
        $countryNameURL=$liveGames['detail']['country']['name'];
         $isFav ="";
        $favStarIcon="/wp-content/themes/spacious/images/staricon.svg";
                                 if (in_array($liveGames['detail']['leagueId'], $favLeagueIds)){
                                  $isFav="fav-selected";
                                   $favStarIcon="/wp-content/themes/spacious/images/starmarked.svg";
                                 }
                                $countryNameURL = preg_replace("/[\s-]+/", " ", $countryNameURL);
                                $countryNameURL = preg_replace("/[\s_]/", "-", $countryNameURL);
                                $leagueName = $liveGames['detail']['leagueName'];
                                $leagueName = preg_replace("/[\s-]+/", " ", $leagueName);
                                $leagueName = preg_replace("/[\s_]/", "-", $leagueName);
                                 $leagueName = str_replace( array( '\'','/','"', ',' , ';', '<', '>' ), '-', $leagueName);
                                $link="/".$pagename."/" . $countryNameURL . "/" . $leagueName . "/" . $leagueId . "/league";
            echo '<div class="emptyBlock '.$gamesHeaderPadding.'"></div>';
            echo '<div class="all-scores-widget-competition_all_scores_widget_competition_header_container">
                <div class="all-scores-widget-competition_all_scores_widget_competition_info_star_container"><img class="clickable favourite '.$isFav.'" id="fav_league_'.$liveGames['detail']['leagueId'].'" data-sportid="'.$liveGames['detail']['sportId'].'" data-countryid="'.$liveGames['detail']['country']['id'].'" data-countryname="'.$liveGames['detail']['country']['name'].'" data-leaguename="'.$liveGames['detail']['leagueName'].'" width="16" height="16" alt="" title=""  decoding="async" style="visibility: visible;" src="'.$favStarIcon.'"></div>
                <div class="s24-medals-data-icon s24-country-icon-'.$liveGames['detail']['country']['id'].'"></div><a class="all-scores-widget-competition_all_scores_widget_competition_info_name" rel="" href="'.$link.'">'.$liveGames['detail']['leagueName'].'</a>
                <div class="all-scores-widget-competition_all_scores_widget_competition_info_country_name">'.$liveGames['detail']['country']['name'].'</div>
            </div>';
            $gamesHeaderPadding="two";
                    }
                                $countryNameURL=$liveGames['detail']['country']['name'];
                                $countryNameURL = preg_replace("/[\s-]+/", " ", $countryNameURL);
                                $countryNameURL = preg_replace("/[\s_]/", "-", $countryNameURL);
                                $homeTeamUrl=str_replace(' ', ',', $liveGames['homeTeam']['name']);
                                $homeTeamUrl=str_replace('-', ',', $homeTeamUrl);
                                $homeTeamUrl=str_replace('/', ',', $homeTeamUrl);
                                $awayTeamUrl=str_replace(' ', ',', $liveGames['awayTeam']['name']);
                                $awayTeamUrl=str_replace('-', ',', $awayTeamUrl);
                                $awayTeamUrl=str_replace('/', ',', $awayTeamUrl);
                                $leagueName = $liveGames['detail']['leagueName'];
                                $leagueName = preg_replace("/[\s-]+/", " ", $leagueName);
                                $leagueName = preg_replace("/[\s_]/", "-", $leagueName);
                                 $leagueName = str_replace( array( '\'','/','"', ',' , ';', '<', '>' ), '-', $leagueName);
                                $leagueId = $liveGames['detail']['leagueId'];
                                $eventId=$liveGames['id'];
                                $link="/".$pagename."/" . $homeTeamUrl."-".$awayTeamUrl . "/" . $leagueName . "/" . $leagueId . "/" .$eventId;
?>
            <div class="game-card_container game-card_full_view status_<?php echo $liveGames['status'];?>">
                <div class="drawer-container game-card_mini_drawer_container mini-drawer-start-icon mini-drawer-ltr open-from-left active-transparent  mini-drawer-star-icon-container game-card_mini_drawer_container mini-drawer-ltr open-from-left active-transparent ">
                    <a class="game-card_game_card_link game-card_game_card game-card_clickable" rel="" href="<?php echo $link;?>">
                        <div class="ellipsis game-card-competitor_container game-card-competitor_name  ellipsis-line-clamp" style="-webkit-line-clamp: 2;"><?php echo $liveGames['homeTeam']['name']; ?></div>
                        <img class="game-card-competitor_logo_wrap" width="68" height="68" alt="" title=""  decoding="async" style="max-width: 34px; max-height: 34px; width: auto; height: auto; visibility: visible;" src="https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/<?php echo $liveGames['homeTeam']['id']; ?>.png">
                      
                     <?php
                        $eventDate = $liveGames['date'];
                        $eventDate = explode(" ", $eventDate);
                        if($liveGames['status'] == 1000 || $liveGames['status'] == 1010){
                            ?>
                        
                        <div class="game-card-center_center_score"><?php echo  $eventDate[1]; ?></div>
                        <?php  } ?>
                        <?php
                        if($liveGames['status'] == 1100 || $liveGames['status'] == 1400 || $liveGames['status'] == 1420 || $liveGames['status'] == 1500){
                            if($liveGames['status'] == 1100 && $sportId=="6046"){
                                date_default_timezone_set("CET");
                                $datee= date("Y-m-d H:i");
                                $datetimenow=$datee;
                                $timeFirst  = strtotime($datetimenow);
                                
                                $timeSecond = strtotime($liveGames['date']);
                                $differenceInSeconds = $timeFirst - $timeSecond;
                                $matchTimer= $differenceInSeconds/60;
                                
                                                                $liveTimer=1;
                                                                 if($matchTimer < 46){
                                   $liveTimer=$matchTimer;
                                }
                                else if($matchTimer > 45 && $matchTimer < 61){
                                    $liveTimer="HT";
                                }
                                else if($matchTimer > 60 && $matchTimer < 106){
                                    $liveTimer=$matchTimer-15;
                                    
                                }
                                else if($matchTimer > 105){
                                    $liveTimer="90+";
                                }
                                else {
                                     $liveTimer="";
                                }
                                
                            ?>                       
                        <div class="game-card-top_view game-card-top_top_view_container game-card-top_status_badge">Live <?php echo $liveTimer;?></div> 
                        <?php  }
                        else if($liveGames['status'] == 1100){
                            ?>
                         <div class="game-card-top_view game-card-top_top_view_container game-card-top_status_badge">Live</div> 
                        <?php
                        }
                        else{
                            ?>
                        <div class="game-card-top_view game-card-top_top_view_container game-card-top_status_badge">Final</div> 
                        <?php
                        }
?>
                        <div class="game-card-center_center_score"><?php echo  $liveGames['scores']['score']['homeScore']; ?> - <?php echo  $liveGames['scores']['score']['awayScore']; ?></div>
                        <?php  } ?>
                        <img class="game-card-competitor_logo_wrap game-card-competitor_away_competitor " width="56" height="68" alt="" title=""  decoding="async" style="max-width: 34px; max-height: 34px; width: auto; height: auto; visibility: visible;" src="https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/<?php echo $liveGames['awayTeam']['id']; ?>.png">
                        <div class="ellipsis game-card-competitor_container game-card-competitor_name game-card-competitor_container_away ellipsis-line-clamp" style="-webkit-line-clamp: 2;"><?php echo $liveGames['awayTeam']['name']; ?></div>
                    </a>
                    <div class="mini-drawer " style="width: 40px; left: -40px;">
<!--                        <div><img class="star-icon-spin-close clickable" width="16" height="16" alt="" title=""  decoding="async" style="visibility: visible;" src=""></div>-->
                    </div>
                </div>
            </div>
        
        <?php
}
        ?>
            </div>
    </div>

</div>

