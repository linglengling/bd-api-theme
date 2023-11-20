

<?php
if($event['detail']['coverageId'] == 1){
?>
<div class="stats-widget-bar-section-container">
   <div class="stats-widget-bar-section-name">Match Stats</div>
   <div class="stats-widget-bar-section-rows">
      <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $event['stats']['ballPossession']['homeScore']; ?></div>
               <div class="bar-chart-name-label">Ball Possession</div>
               <div class="bar-chart-label"><?php echo $event['stats']['ballPossession']['awayScore']; ?></div>
            </div>
             <?php
             $totalCount=$event['stats']['ballPossession']['homeScore'] + $event['stats']['ballPossession']['awayScore'];
             $homebar=($event['stats']['ballPossession']['homeScore'] / $totalCount) * 100;
            $awaybar =($event['stats']['ballPossession']['awayScore'] / $totalCount) * 100;
                     
             ?>
            <div class="bar-chart-line-container">
               <div class="bar-chart-line-sub-container">
                  <div class="bar-chart-light-line" style="flex: <?php echo $awaybar; ?> 1 0%; background-color: rgb(118, 179, 0);"></div>
                  <div class="bar-chart-bold-line" style="flex: <?php echo $homebar; ?> 1 0%; background-color: rgb(118, 179, 0);"></div>
               </div>
               <div class="bar-chart-line-sub-container">
                  <div class="bar-chart-bold-line" style="flex: <?php echo $awaybar; ?> 1 0%; background-color: rgb(3, 169, 244);"></div>
                  <div class="bar-chart-light-line" style="flex: <?php echo $homebar; ?> 1 0%; background-color: rgb(3, 169, 244);"></div>
               </div>
            </div>
         </div>
      </div>
             <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $event['stats']['shotsOn']['homeScore']; ?></div>
               <div class="bar-chart-name-label">Shots on target</div>
               <div class="bar-chart-label"><?php echo $event['stats']['shotsOn']['awayScore']; ?></div>
            </div>
             <?php
             $totalCount=$event['stats']['shotsOn']['homeScore'] + $event['stats']['shotsOn']['awayScore'];
             $homebar=($event['stats']['shotsOn']['homeScore'] / $totalCount) * 100;
            $awaybar =($event['stats']['shotsOn']['awayScore'] / $totalCount) * 100;
                     
             ?>
            <div class="bar-chart-line-container">
               <div class="bar-chart-line-sub-container">
                  <div class="bar-chart-light-line" style="flex: <?php echo $awaybar; ?> 1 0%; background-color: rgb(118, 179, 0);"></div>
                  <div class="bar-chart-bold-line" style="flex: <?php echo $homebar; ?> 1 0%; background-color: rgb(118, 179, 0);"></div>
               </div>
               <div class="bar-chart-line-sub-container">
                  <div class="bar-chart-bold-line" style="flex: <?php echo $awaybar; ?> 1 0%; background-color: rgb(3, 169, 244);"></div>
                  <div class="bar-chart-light-line" style="flex: <?php echo $homebar; ?> 1 0%; background-color: rgb(3, 169, 244);"></div>
               </div>
            </div>
         </div>
      </div>
     <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $event['stats']['shotsOff']['homeScore']; ?></div>
               <div class="bar-chart-name-label">Shots Off target</div>
               <div class="bar-chart-label"><?php echo $event['stats']['shotsOff']['awayScore']; ?></div>
            </div>
             <?php
             $totalCount=$event['stats']['shotsOff']['homeScore'] + $event['stats']['shotsOff']['awayScore'];
             $homebar=($event['stats']['shotsOff']['homeScore'] / $totalCount) * 100;
            $awaybar =($event['stats']['shotsOff']['awayScore'] / $totalCount) * 100;
                     
             ?>
            <div class="bar-chart-line-container">
               <div class="bar-chart-line-sub-container">
                  <div class="bar-chart-light-line" style="flex: <?php echo $awaybar; ?> 1 0%; background-color: rgb(118, 179, 0);"></div>
                  <div class="bar-chart-bold-line" style="flex: <?php echo $homebar; ?> 1 0%; background-color: rgb(118, 179, 0);"></div>
               </div>
               <div class="bar-chart-line-sub-container">
                  <div class="bar-chart-bold-line" style="flex: <?php echo $awaybar; ?> 1 0%; background-color: rgb(3, 169, 244);"></div>
                  <div class="bar-chart-light-line" style="flex: <?php echo $homebar; ?> 1 0%; background-color: rgb(3, 169, 244);"></div>
               </div>
            </div>
         </div>
      </div>
            <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $event['stats']['corners']['homeScore']; ?></div>
               <div class="bar-chart-name-label">Corners</div>
               <div class="bar-chart-label"><?php echo $event['stats']['corners']['awayScore']; ?></div>
            </div>
             <?php
             $totalCount=$event['stats']['corners']['homeScore'] + $event['stats']['corners']['awayScore'];
             $homebar=($event['stats']['corners']['homeScore'] / $totalCount) * 100;
            $awaybar =($event['stats']['corners']['awayScore'] / $totalCount) * 100;
                     
             ?>
            <div class="bar-chart-line-container">
               <div class="bar-chart-line-sub-container">
                  <div class="bar-chart-light-line" style="flex: <?php echo $awaybar; ?> 1 0%; background-color: rgb(118, 179, 0);"></div>
                  <div class="bar-chart-bold-line" style="flex: <?php echo $homebar; ?> 1 0%; background-color: rgb(118, 179, 0);"></div>
               </div>
               <div class="bar-chart-line-sub-container">
                  <div class="bar-chart-bold-line" style="flex: <?php echo $awaybar; ?> 1 0%; background-color: rgb(3, 169, 244);"></div>
                  <div class="bar-chart-light-line" style="flex: <?php echo $homebar; ?> 1 0%; background-color: rgb(3, 169, 244);"></div>
               </div>
            </div>
         </div>
      </div>
       
                   <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $event['stats']['fouls']['homeScore']; ?></div>
               <div class="bar-chart-name-label">Fouls</div>
               <div class="bar-chart-label"><?php echo $event['stats']['fouls']['awayScore']; ?></div>
            </div>
             <?php
             $totalCount=$event['stats']['fouls']['homeScore'] + $event['stats']['fouls']['awayScore'];
             $homebar=($event['stats']['fouls']['homeScore'] / $totalCount) * 100;
            $awaybar =($event['stats']['fouls']['awayScore'] / $totalCount) * 100;
                     
             ?>
            <div class="bar-chart-line-container">
               <div class="bar-chart-line-sub-container">
                  <div class="bar-chart-light-line" style="flex: <?php echo $awaybar; ?> 1 0%; background-color: rgb(118, 179, 0);"></div>
                  <div class="bar-chart-bold-line" style="flex: <?php echo $homebar; ?> 1 0%; background-color: rgb(118, 179, 0);"></div>
               </div>
               <div class="bar-chart-line-sub-container">
                  <div class="bar-chart-bold-line" style="flex: <?php echo $awaybar; ?> 1 0%; background-color: rgb(3, 169, 244);"></div>
                  <div class="bar-chart-light-line" style="flex: <?php echo $homebar; ?> 1 0%; background-color: rgb(3, 169, 244);"></div>
               </div>
            </div>
         </div>
      </div>
                          <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $event['stats']['offsides']['homeScore']; ?></div>
               <div class="bar-chart-name-label">Offsides</div>
               <div class="bar-chart-label"><?php echo $event['stats']['offsides']['awayScore']; ?></div>
            </div>
             <?php
             $totalCount=$event['stats']['offsides']['homeScore'] + $event['stats']['fouls']['awayScore'];
             $homebar=($event['stats']['offsides']['homeScore'] / $totalCount) * 100;
            $awaybar =($event['stats']['offsides']['awayScore'] / $totalCount) * 100;
                     
             ?>
            <div class="bar-chart-line-container">
               <div class="bar-chart-line-sub-container">
                  <div class="bar-chart-light-line" style="flex: <?php echo $awaybar; ?> 1 0%; background-color: rgb(118, 179, 0);"></div>
                  <div class="bar-chart-bold-line" style="flex: <?php echo $homebar; ?> 1 0%; background-color: rgb(118, 179, 0);"></div>
               </div>
               <div class="bar-chart-line-sub-container">
                  <div class="bar-chart-bold-line" style="flex: <?php echo $awaybar; ?> 1 0%; background-color: rgb(3, 169, 244);"></div>
                  <div class="bar-chart-light-line" style="flex: <?php echo $homebar; ?> 1 0%; background-color: rgb(3, 169, 244);"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
}
?>

<?php
if($sportId=="6046"){
$host = 'https://sc.score24.com/scorecenter/api/stats/v2/team/stats/overview.json?partner=' . $partner . '&subjectId=' . $urlleagueId . '&teamId='.$homeTeamId.'&teamId='.$awayTeamId;
$user_name = $partner;
$password = $apiPass;
if ($password == "") {
    $password = getAuth();
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
//echo $httpcode;
if ($httpcode == 401) {
    curl_close($ch);
    $password = getAuth();
    $ch = curl_init($host);
    $headers = array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $password . ''
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

$decoded_json_2 = json_decode($response, true);
$teamSeasonStats = $decoded_json_2['teamSeasonStats'];

?>

<style>
    
</style>
<div>
    <div>
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Win", "Losses"];
var yValues = [<?php echo $teamSeasonStats[0]['totalStat']['wins']; ?>, <?php echo $teamSeasonStats[0]['totalStat']['losts']; ?>];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "<?php echo $event['homeTeam']['name']; ?>"
    }
  }
});
</script>
    </div>
    <div>
        <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Win", "Losses"];
var yValues = [<?php echo $teamSeasonStats[1]['totalStat']['wins']; ?>, <?php echo $teamSeasonStats[1]['totalStat']['losts']; ?>];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart2", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "<?php echo $event['awayTeam']['name']; ?>"
    }
  }
});
</script>
    </div>
</div>



<div class="stats-widget-bar-section-container">
   <div class="stats-widget-bar-section-name">Total Season Stats</div>
   <div class="stats-widget-bar-section-rows">
      <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['totalStat']['leagueRank']; ?></div>
               <div class="bar-chart-name-label">League Rank</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['totalStat']['leagueRank']; ?></div>
            </div>

         </div>
      </div>
             <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['totalStat']['gamesPlayed']; ?></div>
               <div class="bar-chart-name-label">Games</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['totalStat']['gamesPlayed']; ?></div>
            </div>


         </div>
      </div>
     <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['totalStat']['wins']; ?></div>
               <div class="bar-chart-name-label">Wins</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['totalStat']['wins']; ?></div>
            </div>


         </div>
      </div>
            <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['totalStat']['draws']; ?></div>
               <div class="bar-chart-name-label">Draws</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['totalStat']['draws']; ?></div>
            </div>


         </div>
      </div>
       
                   <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['totalStat']['losts']; ?></div>
               <div class="bar-chart-name-label">Losses</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['totalStat']['losts']; ?></div>
            </div>


         </div>
      </div>
<div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['totalStat']['cleanSheets']; ?></div>
               <div class="bar-chart-name-label">Clean Sheets</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['totalStat']['cleanSheets']; ?></div>
            </div>


         </div>
      </div>
       <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['totalStat']['goalStrikeRate']; ?></div>
               <div class="bar-chart-name-label">Goal Strike Rate</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['totalStat']['goalStrikeRate']; ?></div>
            </div>


         </div>
      </div>
              <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['totalStat']['goalConcedeRate']; ?></div>
               <div class="bar-chart-name-label">Goal Concede Rate</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['totalStat']['goalConcedeRate']; ?></div>
            </div>


         </div>
      </div>
   </div>
</div>

<div class="stats-widget-bar-section-container">
   <div class="stats-widget-bar-section-name">Season Home Record</div>
   <div class="stats-widget-bar-section-rows">
      <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['homeStat']['leagueRank']; ?></div>
               <div class="bar-chart-name-label">League Rank</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['homeStat']['leagueRank']; ?></div>
            </div>

         </div>
      </div>
             <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['homeStat']['gamesPlayed']; ?></div>
               <div class="bar-chart-name-label">Games</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['homeStat']['gamesPlayed']; ?></div>
            </div>


         </div>
      </div>
     <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['homeStat']['wins']; ?></div>
               <div class="bar-chart-name-label">Wins</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['homeStat']['wins']; ?></div>
            </div>


         </div>
      </div>
            <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['homeStat']['draws']; ?></div>
               <div class="bar-chart-name-label">Draws</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['homeStat']['draws']; ?></div>
            </div>


         </div>
      </div>
       
                   <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['homeStat']['losts']; ?></div>
               <div class="bar-chart-name-label">Losses</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['homeStat']['losts']; ?></div>
            </div>


         </div>
      </div>
<div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['homeStat']['cleanSheets']; ?></div>
               <div class="bar-chart-name-label">Clean Sheets</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['homeStat']['cleanSheets']; ?></div>
            </div>


         </div>
      </div>
       <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['homeStat']['goalStrikeRate']; ?></div>
               <div class="bar-chart-name-label">Goal Strike Rate</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['homeStat']['goalStrikeRate']; ?></div>
            </div>


         </div>
      </div>
              <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['homeStat']['goalConcedeRate']; ?></div>
               <div class="bar-chart-name-label">Goal Concede Rate</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['homeStat']['goalConcedeRate']; ?></div>
            </div>


         </div>
      </div>
   </div>
</div>
<div class="stats-widget-bar-section-container">
   <div class="stats-widget-bar-section-name">Season Away Record</div>
   <div class="stats-widget-bar-section-rows">
      <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['awayStat']['leagueRank']; ?></div>
               <div class="bar-chart-name-label">League Rank</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['awayStat']['leagueRank']; ?></div>
            </div>

         </div>
      </div>
             <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['awayStat']['gamesPlayed']; ?></div>
               <div class="bar-chart-name-label">Games</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['awayStat']['gamesPlayed']; ?></div>
            </div>


         </div>
      </div>
     <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['awayStat']['wins']; ?></div>
               <div class="bar-chart-name-label">Wins</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['awayStat']['wins']; ?></div>
            </div>


         </div>
      </div>
            <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['awayStat']['draws']; ?></div>
               <div class="bar-chart-name-label">Draws</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['awayStat']['draws']; ?></div>
            </div>


         </div>
      </div>
       
                   <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['awayStat']['losts']; ?></div>
               <div class="bar-chart-name-label">Losses</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['awayStat']['losts']; ?></div>
            </div>


         </div>
      </div>
<div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['awayStat']['cleanSheets']; ?></div>
               <div class="bar-chart-name-label">Clean Sheets</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['awayStat']['cleanSheets']; ?></div>
            </div>


         </div>
      </div>
       <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['awayStat']['goalStrikeRate']; ?></div>
               <div class="bar-chart-name-label">Goal Strike Rate</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['awayStat']['goalStrikeRate']; ?></div>
            </div>


         </div>
      </div>
              <div class="stats-widget-bar-section-row">
         <div class="bar-chart-container">
            <div class="bar-chart-scores-container">
               <div class="bar-chart-label"><?php echo $teamSeasonStats[0]['awayStat']['goalConcedeRate']; ?></div>
               <div class="bar-chart-name-label">Goal Concede Rate</div>
               <div class="bar-chart-label"><?php echo $teamSeasonStats[1]['awayStat']['goalConcedeRate']; ?></div>
            </div>


         </div>
      </div>
   </div>
</div>

<?php
}
?>
