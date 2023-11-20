<?php
$jsonFileName=$pagename."-".$sportId.".json";
$people_json = file_get_contents($jsonFileName);

                    $decoded_json = json_decode($people_json, true);
                    $coverageList = $decoded_json['coverageList'];
//print_r($coverageList);
                    $countryName1 = "";
                    $leagueName = "";
                    $leagueId = "";
                    $leaguesList = "";
                    ?>
<div class="my-selections-widget-group-container">
    <div class="bullet-header-container clickable">
   <div class="bullet-header-title">
      <div class="bullet-header-square"></div>
      My Leagues
   </div>
   <svg viewBox="0 0 24 24" class="bullet-header-arrow" style="fill: rgb(127, 151, 171); width: 16px; height: 16px;">
      <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path>
   </svg>
</div>
    <div class="fav-league-container">
                            <div class="top-league-container">
                        <?php
                        foreach ($coverageList as $leagues) {
                           //if (str_contains($favLeagueIds, $leagues["eventId"])) {
                               if (in_array($leagues["eventId"], $favLeagueIds)){
                                  $isFav="fav-selected";   
                                $countryName = $leagues['countryName'];
                                $countryId = $leagues['countryId'];

                                $countryName1 = $countryName;
                                $countryNameURL = $countryName1;
                                $countryNameURL = preg_replace("/[\s-]+/", " ", $countryNameURL);
                                $countryNameURL = preg_replace("/[\s_]/", "-", $countryNameURL);
                                $leagueName = $leagues['leagueName'];
                                $leagueName = preg_replace("/[\s-]+/", " ", $leagueName);
                                $leagueName = preg_replace("/[\s_]/", "-", $leagueName);
                                $leagueId = $leagues['eventId'];
                                //echo "<div class='league-link-wrapper'><a href=/fivescore/football/" . $countryNameURL . "/" . $leagueName . "/" . $leagueId . ">" . $leagues['leagueName'] . "</a></div>";
                                echo "<div class='top-league-link-wrapper' id='fav_".$leagueId."'><a  class='top-league-detail-link' href=/".$pagename."/" . $countryNameURL . "/" . $leagueName . "/" . $leagueId ."/league/". "><div class='entity-details_container'><div class='s24-medals-data-icon s24-country-icon-".$countryId."'></div><div class='entity-details_competitor_and_country'><div class='entity-details_content bold'>".$leagues['leagueName']."</div><div class='entity-details_country_name'>".$leagues['countryName']."</div></div></div></a><div class='mini-drawer ' style='width: 32px; right: 0;'><div><img event-id='".$leagueId."' data-sportid='".$sportId."' data-countryid='".$leagues['countryId']."' data-leaguename='".$leagues['leagueName']."' data-countryname='".$leagues['countryName']."' class='fav-removed fav-selected' width='16' height='16' alt='' title='' data-src='/wp-content/themes/spacious/images/starmarked.svg' decoding='async' style='visibility: visible;' src='/wp-content/themes/spacious/images/starmarked.svg'></div></div></div>";
                                //$leaguesList.=$league;
                                //echo "<a href=/nicescore/test/".$countryName1."/".$leagueName."/".$leagueId.">".$leagues['leagueName']."</a>";
                            }
                        }
                        ?>
                    </div>
        
    </div>
</div>   
                    <h2 class="card-title-container trapezoid-card-title">Popular Leagues</h2>
                    <div class="top-league-container">
                        <div class="top-league-link-wrapper">
	<a id="top_6117" class="top-league-detail-link" href="/football/International/World-Cup/2180798/league/">
		<div class="entity-details_container"><img alt="" title="" src="">
			<div class="entity-details_competitor_and_country">
				<div class="entity-details_content bold">World Cup</div>
				<div class="entity-details_country_name">International</div>
			</div>
		</div>
	</a>
	<div class="mini-drawer " style="width: 32px; right: 0;">
		<div><img id="fav_top_2180798" data-sportid="6046" data-countryid="xx" data-leaguename="World Cup" data-countryname="International" class="favourite " width="16" height="16" alt="" title="" data-src="/wp-content/themes/spacious/images/staricon.svg" decoding="async" style="visibility: visible;" src="/wp-content/themes/spacious/images/staricon.svg"></div>
	</div>
</div>
                        <?php
                        foreach ($coverageList as $leagues) {
                            if ($leagues["top"] == true) {
                                $countryName = $leagues['countryName'];
                                $countryId = $leagues['countryId'];
                                $isFav ="";
                                $favStarIcon="/wp-content/themes/spacious/images/staricon.svg";
                                 if (in_array($leagues["eventId"], $favLeagueIds)){
                                  $isFav="fav-selected";
                                  $favStarIcon="/wp-content/themes/spacious/images/starmarked.svg";
                                 }
                                $countryName1 = $countryName;
                                $countryNameURL = $countryName1;
                                $countryNameURL = preg_replace("/[\s-]+/", " ", $countryNameURL);
                                $countryNameURL = preg_replace("/[\s_]/", "-", $countryNameURL);
                                $leagueName = $leagues['leagueName'];
                                $leagueName = preg_replace("/[\s-]+/", " ", $leagueName);
                                $leagueName = preg_replace("/[\s_]/", "-", $leagueName);
                                $leagueId = $leagues['eventId'];
                                
                                //echo "<div class='league-link-wrapper'><a href=/fivescore/football/" . $countryNameURL . "/" . $leagueName . "/" . $leagueId . ">" . $leagues['leagueName'] . "</a></div>";
                                echo "<div class='top-league-link-wrapper'><a id='top_".$leagueId."' class='top-league-detail-link' href=/".$pagename."/" . $countryNameURL . "/" . $leagueName . "/" . $leagueId . "/league/"."><div class='entity-details_container'><img alt title src='/wp-content/themes/spacious/images/league-logo/icons/".$leagueId.".png'><div class='entity-details_competitor_and_country'><div class='entity-details_content bold'>".$leagues['leagueName']."</div><div class='entity-details_country_name'>".$leagues['countryName']."</div></div></div></a><div class='mini-drawer ' style='width: 32px; right: 0;'><div><img id='fav_top_".$leagueId."' data-sportid='".$sportId."' data-countryid='".$leagues['countryId']."' data-leaguename='".$leagues['leagueName']."' data-countryname='".$leagues['countryName']."' class='favourite ".$isFav."' width='16' height='16' alt='' title='' data-src='/wp-content/themes/spacious/images/staricon.svg' decoding='async' style='visibility: visible;' src='".$favStarIcon."'></div></div></div>";
                                //$leaguesList.=$league;
                                //echo "<a href=/nicescore/test/".$countryName1."/".$leagueName."/".$leagueId.">".$leagues['leagueName']."</a>";
                            }
                        }
                        ?>
                    </div>
                    <h2 class="card-title-container trapezoid-card-title">All Leagues A-Z</h2>
                    <div class="league-container">
                        <div class="sport-heading">
                            <?php echo $sport; ?>
                        </div>                                
                        <?php
                        $countryName1 = "";
                        $leagueName = "";
                        $leagueId = "";
                        $leaguesList = "";
                        foreach ($coverageList as $leagues) {
                            $countryName = $leagues['countryName'];
                            $countryId = $leagues['countryId'];
                            if ($countryName1 == $countryName) {
                                $isFav ="";
                                 $favStarIcon="/wp-content/themes/spacious/images/staricon.svg";
                                 if (in_array($leagues["eventId"], $favLeagueIds)){
                                  $isFav="fav-selected";
                                   $favStarIcon="/wp-content/themes/spacious/images/starmarked.svg";
                                 }
                                $countryNameURL = $countryName1;
                                $countryNameURL = preg_replace("/[\s-]+/", " ", $countryNameURL);
                                $countryNameURL = preg_replace("/[\s_]/", "-", $countryNameURL);
                                $leagueName = $leagues['leagueName'];
                                $leagueName = preg_replace("/[\s-]+/", " ", $leagueName);
                                $leagueName = preg_replace("/[\s_]/", "-", $leagueName);
                                $leagueId = $leagues['eventId'];
                                $league = "<div class='league-link-wrapper'><a id='country_".$leagueId."' href=/".$pagename."/" . $countryNameURL . "/" . $leagueName . "/" . $leagueId . "/league/". ">" . $leagues['leagueName'] . "</a><div class='mini-drawer ' style='width: 32px; right: 0;'><div><img id='fav_country_".$leagueId."' data-sportid='".$sportId."'  data-countryid='".$leagues['countryId']."' data-leaguename='".$leagues['leagueName']."'  data-countryname='".$leagues['countryName']."'  class='favourite ".$isFav."' width='16' height='16' alt='' title='' data-src='/wp-content/themes/spacious/images/staricon.svg' decoding='async' style='visibility: visible;' src='".$favStarIcon."'></div></div></div>";
                                $leaguesList .= $league;
                                //echo "<a href=/nicescore/test/".$countryName1."/".$leagueName."/".$leagueId.">".$leagues['leagueName']."</a>";
                            } else {

                                if ($countryName1 !== $countryName) {

                                    echo "<div class='collpsable'>" . $leaguesList . "</div>";
                                    $leaguesList = "";
                                    echo "</div>";
                                }
                                $isFav ="";
                                $favStarIcon="/wp-content/themes/spacious/images/staricon.svg";
                                 if (in_array($leagues["eventId"], $favLeagueIds)){
                                  $isFav="fav-selected";
                                  $favStarIcon="/wp-content/themes/spacious/images/starmarked.svg";
                                 }
                                $countryName1 = $countryName;
                                $countryNameURL = $countryName1;
                                $countryNameURL = preg_replace("/[\s-]+/", " ", $countryNameURL);
                                $countryNameURL = preg_replace("/[\s_]/", "-", $countryNameURL);
                                $leagueName = $leagues['leagueName'];
                                $leagueName = preg_replace("/[\s-]+/", " ", $leagueName);
                                $leagueName = preg_replace("/[\s_]/", "-", $leagueName);
                                $leagueId = $leagues['eventId'];
                                echo "<div class='country-container'>";
                                echo "<div class='country-heading-container'>";
                                echo "<div class='s24-medals-data-icon s24-country-icon-" . $countryId . "'></div>";
                                echo "<div class='country-heading'>" . $countryName1 . "</div>";
                                echo "</div>";
                                $league = "<div class='league-link-wrapper'><a id='country_".$leagueId."' href=/".$pagename."/" . $countryNameURL . "/" . $leagueName . "/" . $leagueId . "/league/". ">" . $leagues['leagueName'] . "</a><div class='mini-drawer ' style='width: 32px; right: 0;'><div><img id='fav_country_".$leagueId."' data-sportid='".$sportId."' data-countryid='".$leagues['countryId']."' data-leaguename='".$leagues['leagueName']."' data-countryname='".$leagues['countryName']."' class='favourite ".$isFav."' width='16' height='16' alt='' title='' data-src='/wp-content/themes/spacious/images/staricon.svg' decoding='async' style='visibility: visible;' src='".$favStarIcon."'></div></div></div>";
                                $leaguesList .= $league;
                                //echo "<a href=/nicescore/test/".$countryName1."/".$leagueName."/".$leagueId.">".$leagues['leagueName']."</a>";
                            }
                        }
                        ?>
                    </div>