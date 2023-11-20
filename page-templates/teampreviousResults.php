<style>
    .team-league-heading-wrapper{
        margin-bottom: 2px;
    }
    .team-league-heading{
        display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    height: 36px;
    background-color: white;
    position: relative;
    z-index: 20;
    padding: 0 8px;
    font-size: 12px;
    }
    .game-card_container{
            margin-bottom: 7px;
    }
    </style>

<div class="fixtures_widget previousResults recentmatchsblock">
<div class='fixtures_roundTitle'>Recent Matches</div>
                                   <?php
                           
                           if(get_query_var('leagueId') != ""){

//$host = 'https://sc.score24.com/scorecenter/api/stats/v2/fixtures/league.json?partner='.$partner.'&subjectId='.$urlleagueId.'&offset=0&count=10';
$host = 'https://sc.score24.com/scorecenter/api/stats/v2/fixtures/participant.json?partner=5score&subjectId=0&participant='.$urlteamId.'&offset=0&count=10';
$user_name = $partner;
$password = $apiPass;
if($password == ""){
    $password = getAuth();
}
//if(!isset($_SESSION["apiKey"])) {
//	$password = getAuth();
//	$_SESSION["apiKey"]=$password;
//	//setCookies($password);
//}
//else{
//	echo //"taken from session";
//$password=$_SESSION["apiKey"];
//}
$ch = curl_init($host);
$headers = array(
'Content-Type: application/json',
'Authorization: Bearer '.$password.''
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
if(curl_errno($ch)){
// throw the an Exception.
throw new Exception(curl_error($ch));
}
//curl_close($ch);

$decoded_json = json_decode($response, true);
$eventLists = $decoded_json['participants'][0];

  
         foreach($eventLists['events'] as $eventList) {
             $eventDate = $eventList['date'];
             $eventDate = explode(" ", $eventDate);
             
             $homescore=0;
             $awayscore=0;
              foreach($eventList['periodScores'] as $periodScores) {
                $homescore=$homescore+$periodScores['homeScore'];
                $awayscore=$awayscore+$periodScores['awayScore'];
              }
                                $countryNameURL="match-detail";
                                
                                $leagueName = $eventList['league'];
                                $leagueName = preg_replace("/[\s-]+/", " ", $leagueName);
                                $leagueName = preg_replace("/[\s_]/", "-", $leagueName);
                                 $leagueName = str_replace( array( '\'','/','"', ',' , ';', '<', '>' ), '-', $leagueName);
                                $leagueId = $eventList['leagueId'];
                                $eventId=$eventList['id'];
                                $homeTeamUrl = str_replace(' ', ',', $eventList['homeName']);
        $homeTeamUrl = str_replace('-', ',', $homeTeamUrl);
        $homeTeamUrl = str_replace('/', ',', $homeTeamUrl);
        $awayTeamUrl = str_replace(' ', ',', $eventList['awayName']);
        $awayTeamUrl = str_replace('-', ',', $awayTeamUrl);
        $awayTeamUrl = str_replace('/', ',', $awayTeamUrl);
        $link="/".$pagename."/" . $homeTeamUrl."-".$awayTeamUrl . "/" . $leagueName . "/" . $leagueId . "/" .$eventId;
              
              echo '<div class="team-league-heading-wrapper">
                <div class="team-league-heading">'.$eventList['league'].'</div>
            </div>';
             ?>
                                   
                                    <div class="game-card_container">
                                     <div class="drawer-container">
                                        
                                         <a class="game-card_game_card_link" href="<?php echo $link; ?>">
                                              <div class="date"><?php echo $eventDate[0];?></div> 
                                             <div class="ellipsis game-card-competitor"><?php   echo $eventList['homeName'];?></div> 
                                             <img alt title src="https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/<?php echo $eventList['homeId'];?>.png" class="game-card-competitor_logo homeTeam_logo" />
                                             <?php
                                             if($eventList['status'] == "CLOSED"){
                                               
                                                 ?>
                                             <div class="game-card-top_view">Final</div>
                                             <div class="game-card-center_center_score">
                                                 <div class="game-score_competitor_score_container"><?php echo $homescore;?></div>
                                                 <div class="game-card-center_score_divider">-</div>
                                                 <div class="game-score_competitor_score_container  game-score_away_competitor_score_container"><?php echo $awayscore;?></div>
                                                 <?php //echo $eventDate[1];?>
                                             </div>
                                             <?php
                                             }
                                             else {
                                             ?>
                                             
                                             <div class="game-card-center_center_score"><?php echo $eventDate[1];?></div>
                                             
                                             <?php
                                             }
                                             ?>
                                             <img alt title src="https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/<?php echo $eventList['awayId'];?>.png" class="game-card-competitor_logo awayTeam_logo" />
                                             <div class="ellipsis game-card-competitor awayTeam_name"><?php   echo $eventList['awayName'];?></div> 
                                         </a>
                                    </div>   
                                        
                                    
                                    </div>
             <?php                       
            
         }
        
        
    
        
    
   
    
}

                                   ?>
                                </div>