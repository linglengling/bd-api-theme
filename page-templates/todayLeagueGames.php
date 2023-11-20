<div class="fixtures_widget todayfixtures recentmatchsblock">
<div class='fixtures_roundTitle'>Today</div>
                                   <?php
                           
                           if(get_query_var('leagueId') != ""){

$host = 'https://sc.score24.com/scorecenter/api/stats/v2/fixtures/league.json?partner='.$partner.'&subjectId='.$urlleagueId.'&date='.date("Y-m-d");
$user_name = $partner;
$password = $apiPass;
 
if($password == ""){
    $password = getAuth();
}
//if(!isset($_SESSION["apiKey"])) {
//
//	$_SESSION["apiKey"]=$password;
//
//}
//else{
//	echo "taken from session";
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
$eventLists = $decoded_json['events'];
  
         foreach($eventLists as $eventList) {
             $eventDate = $eventList['date'];
             $eventDate = explode(" ", $eventDate);
             
             $homescore=0;
             $awayscore=0;
              foreach($eventList['periodScores'] as $periodScores) {
                $homescore=$homescore+$periodScores['homeScore'];
                $awayscore=$awayscore+$periodScores['awayScore'];
              }
              $countryNameURL = "match-detail";

        $leagueName = $eventList['league'];
        $leagueName = preg_replace("/[\s-]+/", " ", $leagueName);
        $leagueName = preg_replace("/[\s_]/", "-", $leagueName);
        $leagueName = str_replace(array('\'', '/', '"', ',', ';', '<', '>'), '-', $leagueName);
        $leagueId = $eventList['leagueId'];
        $eventId = $eventList['id'];
                                        $homeTeamUrl = str_replace(' ', ',', $eventList['homeName']);
        $homeTeamUrl = str_replace('-', ',', $homeTeamUrl);
        $homeTeamUrl = str_replace('/', ',', $homeTeamUrl);
        $awayTeamUrl = str_replace(' ', ',', $eventList['awayName']);
        $awayTeamUrl = str_replace('-', ',', $awayTeamUrl);
        $awayTeamUrl = str_replace('/', ',', $awayTeamUrl);
        $link = "/" . $pagename . "/" . $homeTeamUrl."-".$awayTeamUrl . "/" . $leagueName . "/" . $leagueId . "/" . $eventId;
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