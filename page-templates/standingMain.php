<?php
$host="";
 if(get_query_var('leagueId') != ""){
$host = 'https://sc.score24.com/scorecenter/api/stats/v2/tables/season.json?partner='.$partner.'&subjectId='.$urlleagueId;
 }
 else{
   $host = 'https://sc.score24.com/scorecenter/api/stats/v2/tables/season.json?partner='.$partner.'&subjectId=6117';  
 }
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
//	//echo "taken from session";
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
//echo $response;

$decoded_json = json_decode($response, true);
$tableLists = $decoded_json['tables'];
?>
                                <div class="standing-widget">
                                    <div class="">
   <div class="">
      <div class="standing-league-heading">
         <img src="/wp-content/themes/spacious/images/league-logo/6117.png"/>
         <div class="standings-preview-widget-item-text"><?php echo $urlleagueName;?> - Table</div>
      </div>
   </div>
</div>
                                        <table>
                                            <thead>
                                                <tr class="standings-widget_table_header">
                                                    <th class="pos-th">&nbsp;</th>
                                                    <th class="pos-th">&nbsp;</th>
                                                    <th class="team-th">Team</th>
                                                    <th class="gp-th">
                                                        GP
                                                    </th>
                                                    <th class="w-th">
                                                        W
                                                    </th>
                                                    <th class="d-th">
                                                        D
                                                    </th>
                                                    <th class="l-th">
                                                        L
                                                        </a>
                                                    </th>
                                                    <th class="gf-th hidden-xs">
                                                        GF
                                                    </th>
                                                    <th class="ga-th hidden-xs">
                                                        GA
                                                    </th>
                                                    <th class="gd-th hidden-xs">
                                                        GD
                                                    </th>
                                                    <th class="pts-th">
                                                        Pts
                                                    </th>
                                                </tr>

                                            </thead>

<?php                                

foreach($tableLists as $tableList) {
   $tableRows= $tableList['tableRows'];
   $leagueId = $tableList['id'];
   foreach($tableRows as $tableRow) {
        $leagueName = $tableRow['team']['name'];
        $leagueName = preg_replace("/[\s-]+/", " ", $leagueName);
        $leagueName = preg_replace("/[\s_]/", "-", $leagueName);
        //$link = "/football/standing/" . $leagueName . "/" . $leagueId . "/league";
        $link = "/".$pagename."/".$tableRow['team']["nationality"]."/" . $leagueName . "/" . $leagueId . "/team-".$tableRow['team']["id"];
       echo "<tr class='standings-widget_table_row'>";
            echo "<td class='standings-widget_first_cell'>" . $tableRow['pos'] . "</td>";
            echo "<td class='standings-widget_table_text_cell'><img class='teamLogo_standing' src='https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/25x25/". $tableRow['team']['id'].".png' /></td>";
            echo "<td class='standings-widget_competitor_name'><a href='" . $link . "'><div>" . $tableRow['team']['name'] . "</div></a></td>";
            echo "<td class='standings-widget_table_text_cell standings-widget_table_cell_border'>" . $tableRow['home']['gp'] . "</td>";
            echo "<td class='standings-widget_table_text_cell'>" . $tableRow['home']['w'] . "</td>";
            echo "<td class='standings-widget_table_text_cell'>" . $tableRow['home']['d'] . "</td>";
            echo "<td class='standings-widget_table_text_cell'>" . $tableRow['home']['l'] . "</td>";
            echo "<td class='standings-widget_table_text_cell'>" . $tableRow['home']['gf'] . "</td>";
            echo "<td class='standings-widget_table_text_cell'>" . $tableRow['home']['ga'] . "</td>";
            echo "<td class='standings-widget_table_text_cell'>" . $tableRow['home']['gd'] . "</td>";
            echo "<td class='standings-widget_table_text_cell'>" . $tableRow['home']['pts'] . "</td>";
            echo "</tr>";

   }
}
?>
        </table>

    </div>

