<div class="lineups-widget">
            <div class="lineups-widget-team-select-buttons-container">     
                <div class="tablineups">
                    <div class="tablinkslineups" onclick="openCity(event, 'London')" id="defaultOpenlineup"><?php echo $event['homeTeam']['name'] ?></div>
                    <div class="tablinkslineups" onclick="openCity(event, 'Paris')"><?php echo $event['awayTeam']['name'] ?></div>
                </div>
            </div>
            <div id="London" class="tabcontentLineups homelineups">
                <div class="lineups-widget-list-container">
                    <?php
                    $playerPosition = 0;
                    $playerPositionText = "";
                    if($event['detail']['coverageId'] == 2){  
                       echo "<div class='players-list-title-container'>Players</div>"; 
                    } 
                    foreach ($event['lineup']['homePlayers'] as $homelineups) {
                         if($event['detail']['coverageId'] == 1){   
                        if ($homelineups['position'] != $playerPosition) {
                            if ($homelineups['position'] == 1) {
                                $playerPositionText = "Goalkeeper";
                            } else if ($homelineups['position'] == 2) {
                                $playerPositionText = "Defender";
                            } else if ($homelineups['position'] == 3) {
                                $playerPositionText = "Midfielder";
                            } else if ($homelineups['position'] == 4) {
                                $playerPositionText = "Forward";
                            } else if ($homelineups['position'] == 5) {
                                $playerPositionText = "Substituter";
                            } else {
                                $playerPositionText = "Player";
                            }
                            echo "<div class='players-list-title-container'>" . $playerPositionText . "</div>";
                        }
                         }
                        ?>
                        <div class="players-list-item  pointer">
                            <div class="players-list-item-player-details">
                                <div class="players-list-item-player-number">
                                    <div><?php 
                                     if($event['detail']['coverageId'] == 1){   
                                    echo $homelineups['number']; 
                                     }
                                            ?></div>
                                </div>
                                <div class="players-list-item-player-with-season-stats">
                                    <div class="players-list-item-player-name-and-position">
                                        <div class="players-list-item-player-name  "><?php echo $homelineups['firstName'] . " " . $homelineups['lastName'] ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="players-list-item-player-icons">
                                <div class="players-list-item-events-container">
                                    
                                </div>
                            </div>
                        </div>
                        <?php
                        $playerPosition = $homelineups['position'];
                    }
                    ?>

                </div>
            </div>

            <div id="Paris" class="tabcontentLineups awaylineups">
                <div class="lineups-widget-list-container">
                    <?php
                    $playerPosition = 0;
                    $playerPositionText = "";
                    if($event['detail']['coverageId'] == 2){  
                       echo "<div class='players-list-title-container'>Players</div>"; 
                    } 
                    foreach ($event['lineup']['awayPlayers'] as $awaylineups) {
 if($event['detail']['coverageId'] == 1){   
                        if ($awaylineups['position'] != $playerPosition) {
                            if ($awaylineups['position'] == 1) {
                                $playerPositionText = "Goalkeeper";
                            } else if ($awaylineups['position'] == 2) {
                                $playerPositionText = "Defender";
                            } else if ($awaylineups['position'] == 3) {
                                $playerPositionText = "Midfielder";
                            } else if ($awaylineups['position'] == 4) {
                                $playerPositionText = "Forward";
                            } else if ($awaylineups['position'] == 5) {
                                $playerPositionText = "Substituter";
                            } else {
                                $playerPositionText = "Player";
                            }
                            echo "<div class='players-list-title-container'>" . $playerPositionText . "</div>";
                        }
 }
                        ?>
                        <div class="players-list-item  pointer">
                            <div class="players-list-item-player-details">
                                
                                <div class="players-list-item-player-number">
                                    <div><?php 
                                     if($event['detail']['coverageId'] == 1){   
                                    echo $awaylineups['number']; 
                                     }
                                            ?></div>
                                </div>
                                <div class="players-list-item-player-with-season-stats">
                                    <div class="players-list-item-player-name-and-position">
                                        <div class="players-list-item-player-name  "><?php echo $awaylineups['firstName'] . " " . $awaylineups['lastName'] ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="players-list-item-player-icons"></div>
                        </div>
                        <?php
                        $playerPosition = $awaylineups['position'];
                    }
                    ?>

                </div>
            </div>
        </div>