<?php
$urlcountryName = get_query_var('countryName');
$urlleagueName = get_query_var('leagueName');
$urlleagueName = str_replace('-', ' ', $urlleagueName);
$urlleagueIdarray=array();
$urlleagueIdarray[0] = get_query_var('leagueId');
$urlleagueId1=explode("-",$urlleagueIdarray[0]);
$urlleagueId= $urlleagueId1[0];
$viewType=$urlleagueId1[1];

$urlgameIdArray = array();
$urlgameIdArray[0]=get_query_var('gameId');
$urlgameId1=explode("-", $urlgameIdArray[0]);
$urlgameId=$urlgameId1[0];
$urlteamId=$urlgameId1[1];

if (get_query_var('leagueId') != "") {
    $basefixturesLink=basename(get_permalink())."/".get_query_var('countryName')."/".get_query_var('leagueName')."/".$urlleagueId."/league/";
    $baseStandingLink = basename(get_permalink())."/".get_query_var('countryName')."/".get_query_var('leagueName')."/".$urlleagueId."-standing/league/";
    //echo $baseStandingLink;
    ?>
    <div class="breadcrumbs_container">
        <div class="breadcrumbs_content">
            <a class="breadcrumbs_item" href="<?php echo "/".basename(get_permalink());?>"><?php echo basename(get_permalink()); ?> > </a>
            <span class="breadcrumbs_item breadcrumbs_last_item"><?php echo urldecode(str_replace('-', ' ', get_query_var('leagueName'))); ?></span>

        </div>
    </div>

    <div class="mega-header-module-container">
        <div class="mega-header-module-sub-container">
            <a href="#" class="mega-header-mobile_link">
                <span class="mega-header-mobile_logo_link">
                    <div>
                        <img src='/wp-content/themes/spacious/images/league-logo/<?php echo $urlleagueId;?>.png' alt title/>
                    </div>
                </span>
            </a>
            <div class="mega-header-module-content">
                <div class="mega-header-module-entity">
                    <div class="mega-header-module-entity-container">
                        <div>
                            <a class="" rel="" href="#">
                                <h1 class="mega-header-module-entity-name"><?php echo urldecode(str_replace('-', ' ', get_query_var('leagueName'))); ?></h1>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                if($urlteamId){
                    ?>
                                <div class="mega-header-module-buttons-container">
                    <div class="mega-header-buttons_buttons_container">
                        <a class="mega-header-buttons_button_container mega-header-buttons_active_button" rel="" href="/<?php echo $basefixturesLink;?>">
                            <h2 class="mega-header-buttons_button_name_container">Scores</h2>
                        </a>
<!--                        <a class="mega-header-buttons_button_container" rel="" href="/<?php echo $baseStandingLink;?>">
                            <h2 class="mega-header-buttons_button_name_container">Table</h2>
                        </a>-->
                        
<!--                        <a class="mega-header-buttons_button_container" rel="" href="#">
                            <h2 class="mega-header-buttons_button_name_container">Stats</h2>
                        </a>-->
                    </div>
                </div>
                <?php
                }
                else {
                ?>
                <div class="mega-header-module-buttons-container">
                    <div class="mega-header-buttons_buttons_container">
                        <a class="mega-header-buttons_button_container mega-header-buttons_active_button" rel="" href="/<?php echo $basefixturesLink;?>">
                            <h2 class="mega-header-buttons_button_name_container">Scores</h2>
                        </a>
                        <a class="mega-header-buttons_button_container" rel="" href="/<?php echo $baseStandingLink;?>">
                            <h2 class="mega-header-buttons_button_name_container">Table</h2>
                        </a>
<!--                        <a class="mega-header-buttons_button_container" rel="" href="#">
                            <h2 class="mega-header-buttons_button_name_container">Stats</h2>
                        </a>-->
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>

    </div>
    <?php
}
?>