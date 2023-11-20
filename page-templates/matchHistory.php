<table class="matchaction-table table">
            <tbody>
                <?php
                foreach ($event['actions'] as $matchActions) {
                    if (array_key_exists($matchActions['playerId'], $homePlayers)) {
                        ?>
                        <tr>
                            <td class="home-action-result"></td>
                            <td class="home-action-td">
                                <div class="action-float-right">
                                    <div class="res_<?php echo $matchActions['resultType']; ?>"></div>
                                    <div class="action-playername">
                                        <span class="teamfullname">
                                            <?php echo $homePlayers[$matchActions['playerId']]; ?>
                                        </span>
                                        <span class="teamshortname"></span>
                                    </div>
                                </div>
                            </td>
                            <td class="matchaction-time period_100">
                                <?php echo $matchActions['minute']['minutes']; ?>'
                            </td>
                            <td class="away-action-td"></td>
                            <td class="away-action-result"></td>
                        </tr>
                        <?php
                    }
                    if (array_key_exists($matchActions['playerId'], $awayPlayers)) {
                        ?>
                        <tr>
                            <td class="home-action-result"></td>
                            <td class="home-action-td"></td>
                            <td class="matchaction-time period_100">
                                <?php echo $matchActions['minute']['minutes']; ?>'
                            </td>
                            <td class="away-action-td">
                                <div class="action-float-left">
                                    <div class="res_<?php echo $matchActions['resultType']; ?>"></div>
                                    <div class="action-playername">
                                        <span class="teamfullname">
                                            <?php echo $awayPlayers[$matchActions['playerId']]; ?>
                                        </span>
                                        <span class="teamshortname"></span>
                                    </div>
                                </div>
                            </td>
                            <td class="away-action-result"></td>
                        </tr>
                        <?php
                    }
                }
                ?>

            </tbody>
        </table>

