<?php
$host = "";
// if(get_query_var('leagueId') != ""){
//$host = 'https://sc.score24.com/scorecenter/api/stats/v2/tables/season.json?partner='.$partner.'&subjectId='.$urlleagueId;
// }
// else{
//   $host = 'https://sc.score24.com/scorecenter/api/stats/v2/tables/season.json?partner='.$partner.'&subjectId=6117';  
// }

if ($sportId == "6046") {
    $host = 'https://sc.score24.com/scorecenter/api/stats/v2/tables/season.json?partner=' . $partner . '&subjectId=6117';
} else if ($sportId == "35232") {
    $host = 'https://sc.score24.com/scorecenter/api/stats/v2/tables/season.json?partner=' . $partner . '&subjectId=35238';
} else if ($sportId == "48242") {
    $host = 'https://sc.score24.com/scorecenter/api/stats/v2/tables/season.json?partner=' . $partner . '&subjectId=48245';
} else if ($sportId == "35709") {
    $host = 'https://sc.score24.com/scorecenter/api/stats/v2/tables/season.json?partner=' . $partner . '&subjectId=325868';
} else if ($sportId == "35706") {
    $host = 'https://sc.score24.com/scorecenter/api/stats/v2/tables/season.json?partner=' . $partner . '&subjectId=35708';
} else {
    $host = 'https://sc.score24.com/scorecenter/api/stats/v2/tables/season.json?partner=' . $partner . '&subjectId=6117';
}
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

$decoded_json = json_decode($response, true);
$tableLists = $decoded_json['tables'];
?>
<style>
    .standing-league-heading-wrapper{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        height: 36px;
        background-color: var(--secondaryBackground);
        position: relative;
        z-index: 20;
    }
    .standings-preview-widget-item-container{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        height: 36px;
        background-color: white;
        padding: 0 8px;
        border-top: 2px solid #ecf0f3;
        width: 100%;
    }
    .standings-preview-widget-item-logo-container{
        margin: 0;
        vertical-align: inherit;
    }
</style>
<div class="standing-widget">
    <div class="">
        <div class="standing-league-heading-wrapper">
            <div class="standing-league-heading">
                <img src=""/>
                <?php
                if ($sportId == "6046") {
                    ?>
                    <div class="standings-preview-widget-item-text">Premier League - Table</div>
                    <?php
                } else if ($sportId == "35232") {
                    ?>
                    <div class="standings-preview-widget-item-text">SHL - Table</div>

                    <?php
                } else if ($sportId == "48242") {
                    ?>
                    <div class="standings-preview-widget-item-text">Basketligan - Table</div>

                    <?php
                } else if ($sportId == "35709") {
                    ?>
                    <div class="standings-preview-widget-item-text">SHE - Table</div>
                    <?php
                } else if ($sportId == "35706") {
                    ?>
                    <div class="standings-preview-widget-item-text">Svenska Superligan - Table</div>
                    <?php
                } else {
                    ?>
                    <div class="standings-preview-widget-item-text">Premier League - Table</div>
                    <?php
                }
                ?>
            </div>
            <div class="dropdown_arrow_container">
                <div class="dropdown_arrow_down" style="border-top: 5px solid rgb(156, 155, 155);">

                </div>

            </div>


        </div>


        <?php
        if ($sportId == "35232") {
            ?>
            <div class="list_container dropdown_list standings-preview-widget-dropdown-list-container" style="display: none;">
                <div class="standings-preview-widget-item-container  pointer">
                    <img class="standings-preview-widget-item-logo-container" width="40" height="40" alt="" title=""  decoding="async" style="max-width: 20px; max-height: 20px; width: auto; height: auto; visibility: visible;" src="">
                    <div class="standings-preview-widget-item-text" data-id="35238" data-sport="<?php echo $pagename; ?>">SHL</div>
                </div>
                <div class="standings-preview-widget-item-container  pointer">
                    <img class="standings-preview-widget-item-logo-container" width="40" height="40" alt="" title="" decoding="async" style="max-width: 20px; max-height: 20px; width: auto; height: auto; visibility: visible;" src="">
                    <div class="standings-preview-widget-item-text" data-id="35235" data-sport="<?php echo $pagename; ?>">Liiga</div>
                </div>
            </div>

            <?php
        } else if ($sportId == "48242") {
            ?>
            <div class="list_container dropdown_list standings-preview-widget-dropdown-list-container" style="display: none;">
                <div class="standings-preview-widget-item-container  pointer">
                    <img class="standings-preview-widget-item-logo-container" width="40" height="40" alt="" title=""  decoding="async" style="max-width: 20px; max-height: 20px; width: auto; height: auto; visibility: visible;" src="">
                    <div class="standings-preview-widget-item-text" data-id="48245" data-sport="<?php echo $pagename; ?>">Basketligan</div>
                </div>
            </div>

            <?php
        } else if ($sportId == "35709") {
            ?>
            <div class="list_container dropdown_list standings-preview-widget-dropdown-list-container" style="display: none;">
                <div class="standings-preview-widget-item-container  pointer">
                    <img class="standings-preview-widget-item-logo-container" width="40" height="40" alt="" title=""  decoding="async" style="max-width: 20px; max-height: 20px; width: auto; height: auto; visibility: visible;" src="">
                    <div class="standings-preview-widget-item-text" data-id="325868" data-sport="<?php echo $pagename; ?>">SHE</div>
                </div>
            </div>

    <?php
} else if ($sportId == "35706") {
    ?>
            <div class="list_container dropdown_list standings-preview-widget-dropdown-list-container" style="display: none;">
                <div class="standings-preview-widget-item-container  pointer">
                    <img class="standings-preview-widget-item-logo-container" width="40" height="40" alt="" title=""  decoding="async" style="max-width: 20px; max-height: 20px; width: auto; height: auto; visibility: visible;" src="">
                    <div class="standings-preview-widget-item-text" data-id="35708" data-sport="<?php echo $pagename; ?>">Svenska Superligan</div>
                </div>
            </div>

    <?php
} else {
    ?>
            <div class="list_container dropdown_list standings-preview-widget-dropdown-list-container" style="display: none;">
                <div class="standings-preview-widget-item-container  pointer">
                    <img class="standings-preview-widget-item-logo-container" width="40" height="40" alt="" title=""  decoding="async" style="max-width: 20px; max-height: 20px; width: auto; height: auto; visibility: visible;" src="">
                    <div class="standings-preview-widget-item-text" data-id="6117" data-sport="<?php echo $pagename; ?>">Premier League</div>
                </div>
                <div class="standings-preview-widget-item-container  pointer">
                    <img class="standings-preview-widget-item-logo-container" width="40" height="40" alt="" title="" decoding="async" style="max-width: 20px; max-height: 20px; width: auto; height: auto; visibility: visible;" src="">
                    <div class="standings-preview-widget-item-text" data-id="6115" data-sport="<?php echo $pagename; ?>">Bundesliga</div>
                </div>
                <div class="standings-preview-widget-item-container  pointer">
                    <img class="standings-preview-widget-item-logo-container" width="40" height="40" alt="" title=""  decoding="async" style="max-width: 20px; max-height: 20px; width: auto; height: auto; visibility: visible;" src="">
                    <div class="standings-preview-widget-item-text" data-id="6112" data-sport="<?php echo $pagename; ?>">LaLiga</div>
                </div>
                <div class="standings-preview-widget-item-container  pointer">
                    <img class="standings-preview-widget-item-logo-container" width="40" height="40" alt="" title=""  decoding="async" style="max-width: 20px; max-height: 20px; width: auto; height: auto; visibility: visible;" src="">
                    <div class="standings-preview-widget-item-text" data-id="6097" data-sport="<?php echo $pagename; ?>">Allsvenskan</div>
                </div>
            </div>

    <?php
}
?>
    </div>
    <table class="standing-table-preview-widget-right">
        <thead>
            <tr class="standings-widget_table_header">
                <th class="pos-th">&nbsp;</th>
                <th class="pos-th">&nbsp;</th>
                <th class="team-th">Team</th>
                <th class="gp-th">
                    P
                </th>

                <th class="gf-th hidden-xs">
                    Goals
                </th>
                <th class="gd-th hidden-xs">
                    +/-
                </th>
                <th class="pts-th">
                    Pts
                </th>
            </tr>

        </thead>

<?php
// foreach ($tableLists as $tableList) {
   
//     $leagueId = $tableList['id'];
//     $tableRows = $tableList['tableRows'];
//     foreach ($tableRows as $tableRow) {
//          $leagueName = $tableRow['team']['name'];
//         $leagueName = preg_replace("/[\s-]+/", " ", $leagueName);
//         $leagueName = preg_replace("/[\s_]/", "-", $leagueName);
//         //$link = "/football/standing/" . $leagueName . "/" . $leagueId . "/league";
//         $link = "/".$pagename."/".$tableRow['team']["nationality"]."/" . $leagueName . "/" . $leagueId . "/team-".$tableRow['team']["id"];
//         echo "<tr class='standings-widget_table_row'>";
//         echo "<td class='standings-widget_first_cell'>" . $tableRow['pos'] . "</td>";
//         echo "<td class='standings-widget_table_text_cell'><img title alt class='teamLogo_standing' src='https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/25x25/" . $tableRow['team']['id'] . ".png' /></td>";
//         echo "<td class='standings-widget_competitor_name'><a href='" . $link . "'><div>" . $tableRow['team']['name'] . "</div></a></td>";
//         echo "<td class='standings-widget_table_text_cell standings-widget_table_cell_border'>" . $tableRow['total']['gp'] . "</td>";
//         echo "<td class='standings-widget_table_text_cell'>" . $tableRow['total']['gf'] . ":" . $tableRow['total']['ga'] . "</td>";
//         echo "<td class='standings-widget_table_text_cell'>" . $tableRow['total']['gd'] . "</td>";
//         echo "<td class='standings-widget_table_text_cell'>" . $tableRow['total']['pts'] . "</td>";
//         echo "</tr>";
//     }
// }
?>
    </table>

</div>

