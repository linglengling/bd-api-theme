<div class="widget-card-wrapper-container">
            <div class="widget-card-wrapper-header-container">
                <h2 class="card-title-container widget-card-wrapper-header-title">Head to Head</h2>
            </div>
            <div class="previous-meetings-widget_view_container">


                <div class="previous-meetings-widget_view_title">H2H</div>

                <div class="previous-meetings-widget_header_container">
                    <div class="previous-meetings-widget_competitor-details_competitor_details_container">
                        <div class="previous-meetings-widget_competitor-details_competitor_details_logo"><a class="" rel="" href="<?php echo $hometeamlink;?>"><img width="94" height="110" alt="" title=""  decoding="async" style="max-width: 55px; max-height: 55px; width: auto; height: auto; visibility: visible;" src="https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/<?php echo $event['homeTeam']['id']; ?>.png"></a></div>
                        <div class="previous-meetings-widget_competitor-details_competitor_details_name">
                            <div class=""><?php echo $teams[$event['homeTeam']['id']]; ?></div>
                        </div>
                    </div>
                    <div class="previous-meetings-widget_total-scores_container">
                        <div class="previous-meetings-widget_score-result_container">
                            <div class="previous-meetings-widget_score-result_score"><?php echo $event['head2Head']['head2HeadStats']['totalWins']['homeScore']; ?></div>
                            <div class="previous-meetings-widget_score-result_type">Wins</div>
                        </div>
                        <div class="previous-meetings-widget_total-scores_divider"></div>
                        <div class="previous-meetings-widget_score-result_container">
                            <div class="previous-meetings-widget_score-result_score"><?php echo $event['head2Head']['head2HeadStats']['totalDraws']; ?></div>
                            <div class="previous-meetings-widget_score-result_type">Draws</div>
                        </div>
                        <div class="previous-meetings-widget_total-scores_divider"></div>
                        <div class="previous-meetings-widget_score-result_container">
                            <div class="previous-meetings-widget_score-result_score"><?php echo $event['head2Head']['head2HeadStats']['totalWins']['awayScore']; ?></div>
                            <div class="previous-meetings-widget_score-result_type">Wins</div>
                        </div>
                    </div>
                    <div class="previous-meetings-widget_competitor-details_competitor_details_container">
                        <div class="previous-meetings-widget_competitor-details_competitor_details_logo"><a class="" rel="" href="<?php echo $awayteamlink;?>"><img width="108" height="110" alt="" title=""  decoding="async" style="max-width: 55px; max-height: 55px; width: auto; height: auto; visibility: visible;" src="https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/<?php echo $event['awayTeam']['id']; ?>.png"></a></div>
                        <div class="previous-meetings-widget_competitor-details_competitor_details_name">
                            <div class=""><?php echo $teams[$event['awayTeam']['id']]; ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="list_container">
                <?php
                foreach ($event['head2Head']['previousGames'] as $previousGames) {
                    ?>
                    <a class="previous-meetings-widget_match-row_match_row" rel="" href="#">
                        <div class="previous-meetings-widget_match-row_content_container">
                            <div class="previous-meetings-widget_match-row_content_competitor_container bold">
                                <div class=""><?php echo $teams[$previousGames['homeTeamId']]; ?></div>
                                <div class="previous-meetings-widget_match-row_competitor_extra_data_title"></div>
                            </div>
                            <div class="previous-meetings-widget_match-row_center">
                                <div class="previous-meetings-widget_match-row_content_center">
                                    <div class="previous-meetings-widget_match-row_content_main_text"><?php echo $previousGames['score']['homeScore']; ?> - <?php echo $previousGames['score']['awayScore']; ?></div>
                                </div>
                                <div class="previous-meetings-widget_match-row_secondary_text previous-meetings-widget_match-row_date_text"><?php echo $previousGames['date']; ?></div>
                            </div>
                            <div class="previous-meetings-widget_match-row_content_competitor_container previous-meetings-widget_match-row_content_loser previous-meetings-widget_match-row_content_competitor_away">
                                <div class=""><?php echo $teams[$previousGames['awayTeamId']]; ?></div>
                                <div class="previous-meetings-widget_match-row_competitor_extra_data_title"></div>
                            </div>
                        </div>
                    </a>
                    <?php
                }
                ?>

            </div>

            <div>

                <div class="recent-form-widget_full-view_competitor_container">
                    <div class="recent-form-widget_full-view_competitor_title">
                        <img width="41" height="48" alt="" title=""  decoding="async" style="max-width: 24px; max-height: 24px; width: auto; height: auto; visibility: visible;" src="https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/25x25/<?php echo $event['homeTeam']['id']; ?>.png">
                        <div class="recent-form-widget_full-view_competitor_name">Recent Form - <?php echo $teams[$event['homeTeam']['id']]; ?></div>
                    </div>
                    <div class="list_container">
                        <?php
                        foreach ($event['formGuide']['formGuideHome']['games'] as $formguideHomeGames) {
                            $leagueName = $formguideHomeGames['leagueName'];
        $leagueName = preg_replace("/[\s-]+/", " ", $leagueName);
        $leagueName = preg_replace("/[\s_]/", "-", $leagueName);
        $leagueName = str_replace(array('\'', '/', '"', ',', ';', '<', '>'), '-', $leagueName);
        $leagueId = $formguideHomeGames['leagueId'];
        $eventId = $formguideHomeGames['gameId'];
        $link = "/" . $pagename . "/game-detail/" . $leagueName . "/" . $leagueId . "/" . $eventId;
                            ?>
                            <a class="recent-form-widget_full-view_match_container" rel="" href="<?php echo $link;?>">
                                <div class="recent-form-widget_full-view_match_date"><?php echo $formguideHomeGames['startDate']; ?></div>
                                <div class="recent-form-widget_full-view_match_center_container">
                                    <div class="recent-form-widget_full-view_match_top_and_bottom_main_text"><?php echo $formguideHomeGames['leagueName']; ?></div>
                                    <div class="recent-form-widget_full-view_match_main_text">
                                        <div class="recent-form-widget_full-view_match_competitor_name bold recent-form-widget_full-view_match_home_competitor">
                                            <div class=""><?php echo $formguideHomeGames['homeTeam']['name']; ?></div>
                                        </div>
                                        <div class="recent-form-widget_full-view_match_score"><?php echo $formguideHomeGames['score']['homeScore']; ?> - <?php echo $formguideHomeGames['score']['awayScore']; ?></div>
                                        <div class="recent-form-widget_full-view_match_competitor_name recent-form-widget_full-view_match_away_competitor">
                                            <div class=""><?php echo $formguideHomeGames['awayTeam']['name']; ?></div>
                                        </div>
                                    </div>
                                    <div class="recent-form-widget_full-view_match_top_and_bottom_main_text"></div>
                                </div>
                                <?php
                                $resultLetter="";
                                if($formguideHomeGames['homeTeam']['id'] == $event['homeTeam']['id']){
                                     if($formguideHomeGames['score']['homeScore'] > $formguideHomeGames['score']['awayScore']){
                                        $resultLetter="W";
                                    }
                                    else if($formguideHomeGames['score']['homeScore'] < $formguideHomeGames['score']['awayScore']){
                                        $resultLetter="L";
                                    }
                                    else if($formguideHomeGames['score']['homeScore'] == $formguideHomeGames['score']['awayScore']){
                                        $resultLetter="D";
                                    }
                                }
                                 else if($formguideHomeGames['awayTeam']['id'] == $event['homeTeam']['id']){
                                    if($formguideHomeGames['score']['awayScore'] > $formguideHomeGames['score']['homeScore']){
                                        $resultLetter="W";
                                    }
                                    else if($formguideHomeGames['score']['awayScore'] < $formguideHomeGames['score']['homeScore']){
                                        $resultLetter="L";
                                    }
                                    else if($formguideHomeGames['score']['awayScore'] == $formguideHomeGames['score']['homeScore']){
                                        $resultLetter="D";
                                    }
                                }
                                ?>
                                <span class="recent-form-widget_partial-view_recent_form_widget_game_badge ">
                                    <div class="game-badge-text-container recent-form-widget_game-badge_badge_text"><?php echo $resultLetter;?></div>
                                    <img class="recent-form-widget_partial-view_recent_form_widget_game_badge_icon game-badge-icon-container" alt="" title=""  decoding="async" src="https://imagecache.365scores.com/image/upload/f_svg,w_32,h_32,q_auto:eco,dpr_1/v2/Website/AssetsSVG/FormBadges/1" width="24" height="24" style="visibility: visible;">
                                </span>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>

<div class="recent-form-widget_full-view_competitor_container">
                    <div class="recent-form-widget_full-view_competitor_title">
                        <img width="41" height="48" alt="" title=""  decoding="async" style="max-width: 24px; max-height: 24px; width: auto; height: auto; visibility: visible;" src="https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/25x25/<?php echo $event['awayTeam']['id']; ?>.png">
                        <div class="recent-form-widget_full-view_competitor_name">Recent Form - <?php echo $teams[$event['awayTeam']['id']]; ?></div>
                    </div>
                    <div class="list_container">
                        <?php
                        foreach ($event['formGuide']['formGuideAway']['games'] as $formguideAwayGames) {
                            $leagueName = $formguideAwayGames['leagueName'];
        $leagueName = preg_replace("/[\s-]+/", " ", $leagueName);
        $leagueName = preg_replace("/[\s_]/", "-", $leagueName);
        $leagueName = str_replace(array('\'', '/', '"', ',', ';', '<', '>'), '-', $leagueName);
        $leagueId = $formguideAwayGames['leagueId'];
        $eventId = $formguideAwayGames['gameId'];
        $link = "/" . $pagename . "/game-detail/" . $leagueName . "/" . $leagueId . "/" . $eventId;
                            ?>
                            <a class="recent-form-widget_full-view_match_container" rel="" href="<?php echo $link;?>">
                                <div class="recent-form-widget_full-view_match_date"><?php echo $formguideAwayGames['startDate']; ?></div>
                                <div class="recent-form-widget_full-view_match_center_container">
                                    <div class="recent-form-widget_full-view_match_top_and_bottom_main_text"><?php echo $formguideAwayGames['leagueName']; ?></div>
                                    <div class="recent-form-widget_full-view_match_main_text">
                                        <div class="recent-form-widget_full-view_match_competitor_name bold recent-form-widget_full-view_match_home_competitor">
                                            <div class=""><?php echo $formguideAwayGames['homeTeam']['name']; ?></div>
                                        </div>
                                        <div class="recent-form-widget_full-view_match_score"><?php echo $formguideAwayGames['score']['homeScore']; ?> - <?php echo $formguideAwayGames['score']['awayScore']; ?></div>
                                        <div class="recent-form-widget_full-view_match_competitor_name recent-form-widget_full-view_match_away_competitor">
                                            <div class=""><?php echo $formguideAwayGames['awayTeam']['name']; ?></div>
                                        </div>
                                    </div>
                                    <div class="recent-form-widget_full-view_match_top_and_bottom_main_text"></div>
                                </div>
                                 <?php
                                $resultLetter="";
                                if($formguideAwayGames['homeTeam']['id'] == $event['awayTeam']['id']){
                                     if($formguideAwayGames['score']['homeScore'] > $formguideAwayGames['score']['awayScore']){
                                        $resultLetter="W";
                                    }
                                    else if($formguideAwayGames['score']['homeScore'] < $formguideAwayGames['score']['awayScore']){
                                        $resultLetter="L";
                                    }
                                    else if($formguideAwayGames['score']['homeScore'] == $formguideAwayGames['score']['awayScore']){
                                        $resultLetter="D";
                                    }
                                }
                                 else if($formguideAwayGames['awayTeam']['id'] == $event['awayTeam']['id']){
                                    if($formguideAwayGames['score']['awayScore'] > $formguideAwayGames['score']['homeScore']){
                                        $resultLetter="W";
                                    }
                                    else if($formguideAwayGames['score']['awayScore'] < $formguideAwayGames['score']['homeScore']){
                                        $resultLetter="L";
                                    }
                                    else if($formguideAwayGames['score']['awayScore'] == $formguideAwayGames['score']['homeScore']){
                                        $resultLetter="D";
                                    }
                                }
                                ?>
                                <span class="recent-form-widget_partial-view_recent_form_widget_game_badge ">
                                    <div class="game-badge-text-container recent-form-widget_game-badge_badge_text"><?php echo $resultLetter;?></div>
                                    <img class="recent-form-widget_partial-view_recent_form_widget_game_badge_icon game-badge-icon-container" alt="" title=""  decoding="async" src="https://imagecache.365scores.com/image/upload/f_svg,w_32,h_32,q_auto:eco,dpr_1/v2/Website/AssetsSVG/FormBadges/1" width="24" height="24" style="visibility: visible;">
                                </span>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>