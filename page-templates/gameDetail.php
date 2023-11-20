<style>
    .game-center-header{
        background-color: white;
        min-height: 152px;
        padding: 8px 0;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        text-align: center;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-flex-direction: column;
        -moz-box-orient: vertical;
        -moz-box-direction: normal;
        flex-direction: column;
        width: 100%;
        position: relative;
    }
    .game-center-header-container{
        position: relative;
        -webkit-flex-direction: column;
        -moz-box-orient: vertical;
        -moz-box-direction: normal;
        flex-direction: column;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
    }
    .game-center-header-title-container{
        width: 100%;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        font-weight: 500;
        font-size: 14px;
        margin-bottom: 4px;
    }
    .game-center-header-competitors-and-scores-container{
        width: 100%;
        -webkit-align-items: flex-start;
        -moz-box-align: start;
        align-items: flex-start;
        min-height: 128px;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
    }
    .game-center-header-team-details{
        -webkit-flex-direction: column;
        -moz-box-orient: vertical;
        -moz-box-direction: normal;
        flex-direction: column;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        text-decoration: none;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-flex: 1 1;
        -moz-box-flex: 1;
        flex: 1 1;
        margin: 0 8px;
    }
    .game-center-header-team-details-flag-container.game-center-header-team-details-home-team{
        position: relative;
        width: 64px;
        height: 64px;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
    }
    .game-center-header-team-details-name-container{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: flex-start;
        -moz-box-align: start;
        align-items: flex-start;
        margin: 4px 0;
        font-size: 18px;
        max-height: 42px;
        width: 152px;
    }
    .game-center-header-content-container{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-flex-direction: column;
        -moz-box-orient: vertical;
        -moz-box-direction: normal;
        flex-direction: column;
        -webkit-align-self: center;
        align-self: center;
    }
    .game-center-header-module-game-status{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        height: 24px;
    }
    .rectangle-label-container.game-center-header-label-container{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        font-size: 12px;
        text-align: center;
        background: gray;
        padding: 1px 8px;
        white-space: nowrap;
        min-height: 20px;
        border-radius: 30px;
        color: white;
    }
    .game-center-header-score-text-options{
        min-width: 164px;
        height: 44px;
        font-size: 32px;
        white-space: nowrap;
        font-weight: 500;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: flex-start;
        -moz-box-align: start;
        align-items: flex-start;
        line-height: normal;
    }
    .game-score_container{
        display: grid;
        grid-template-rows: auto auto;
        grid-template-areas:
            "home-score divider away-score"
            "home-fouls empty away-fouls";
    }
    .game-score_competitor_score_container{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        height: 100%;
        grid-area: home-score;
    }
    .game-center-header-score-divider{
        margin: 0 6px;
        min-width: 16px;
    }
    .game-score_away_competitor_score_container{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        height: 100%;
        grid-area: home-score;
        -webkit-flex-direction: row-reverse;
        -moz-box-orient: horizontal;
        -moz-box-direction: reverse;
        flex-direction: row-reverse;
        grid-area: away-score;
    }
    .game-center-header-button-score-text{
        height: 20px;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        font-weight: 500;
        font-size: 15px;
        margin-bottom: 4px;
    }
    .game-center-header-team-details{
        -webkit-flex-direction: column;
        -moz-box-orient: vertical;
        -moz-box-direction: normal;
        flex-direction: column;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        text-decoration: none;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-flex: 1 1;
        -moz-box-flex: 1;
        flex: 1 1;
        margin: 0 8px;
    }
    .game-center-header-team-details-away-team{
        position: relative;
        width: 64px;
        height: 64px;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
    }
    .game-center-header-team-details-name-container{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: flex-start;
        -moz-box-align: start;
        align-items: flex-start;
        margin: 4px 0;
        font-size: 18px;
        max-height: 42px;
        width: 152px;
    }


    .tabcontent {
        color: black;
        display: none;

        height: 100%;
    }
    .game-center-tabs-module-tab-button-container{
        background-color: var(--secondaryBackground);
        min-width: 90px;
        width: 100%;
        text-decoration: none;
        height: 32px;
        border: unset;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        text-align: center;
        text-transform: none;
        font-size: 14px;
        font-weight: 400;
        color: var(--medium);
        margin: 0;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        letter-spacing: -.5px;
        height: 32px;
    }

    .game-center-tabs-module-tab-button-container.tablink.active{
        border-bottom: 2px solid #03a9f4;
        font-weight: bold;
    }

    .matchaction-table{
        background: white;
    }
    .matchaction-table td{
        border: inherit;
    }
    *[class^='res_'] {
  width: 18px;
  height: 18px;
}
    .res_1 {
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
  background: url(/wp-content/themes/spacious/images/football/sub-in.png) no-repeat;
}

.res_6 {
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
  background: url(/wp-content/themes/spacious/images/football/football-goal-2.png) no-repeat;
}

.res_3 {
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
  background: url(/wp-content/themes/spacious/images/football/yellow-card-2.png) no-repeat;
}

.res_4 {
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
  background: url(/wp-content/themes/spacious/images/football/yellow-red-card.png) no-repeat;
}

.res_7 {
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
  background: url(/wp-content/themes/spacious/images/football/pen_scored.png) no-repeat;
}

.res_8 {
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
  background: url(/wp-content/themes/spacious/images/football/pen_not_scored.png) no-repeat;
}

.res_5 {
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
  background: url("/wp-content/themes/spacious/images/football/red-card-2.png") no-repeat;
}
.res_-1 {
  text-indent: 100%;
  white-space: nowrap;
  background: url(/wp-content/themes/spacious/images/football/sub-out.png) no-repeat;
}
.res_6 {
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
  background: url(/wp-content/themes/spacious/images/football/football-goal-2.png) no-repeat;
}
.res_20 {
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
  background: url(/wp-content/themes/spacious/images/icehockey/penalty-1.png) no-repeat;
}

.res_10 {
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
  background: url(/wp-content/themes/spacious/images/icehockey/puck3.png) no-repeat;
}

.res_30 {
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
  background: url(/wp-content/themes/spacious/images/icehockey/assist3.png) no-repeat;
}

/*match actions*/

.matchaction-table {
  width: 100%;
}
.matchActionContainer {
  padding-right:7px;
}
.matchaction-table tr:hover {
  background: rgba(255, 255, 255, 0.2);
}

.matchaction-table .home-action-td, .matchaction-table .away-action-td {
  width: 40%;
}

.matchaction-table .home-action-result, .matchaction-table .away-action-result {
  width: 30px;
  white-space: nowrap;
  text-align: center;
  font-weight: bold;
}

.matchaction-table .home-action-td {
  text-align: right;
}

.matchaction-table .away-action-td {
  text-align: left;
}

.matchaction-table .matchaction-time {
  width: 10%;
  text-align: center;
}

.matchaction-table .goal, .matchaction-table .updated-goall {
  background: url(/wp-content/themes/spacious/images/football/small-icons.png) 0px 4px no-repeat;
  width: 12px;
  height: 22px;
  float: left;
}

.matchaction-table .yellowcard {
  background: url(/wp-content/themes/spacious/images/football/small-icons.png) 0px -243px no-repeat;
  width: 12px;
  height: 22px;
}

.matchaction-table .redcard {
  background: url(/wp-content/themes/spacious/images/football/small-icons.png) 0px -185px no-repeat;
  width: 12px;
  height: 12px;
}

.matchaction-table .yellowtored {
  background: url(/wp-content/themes/spacious/images/football/red_yellow_card.png) no-repeat;
  width: 12px;
  height: 12px;

}

.matchaction-table .res_460-sub {
  background: url(/wp-content/themes/spacious/images/football/small-icons.png) 0px -59px no-repeat;
  width: 12px;
  height: 22px;
}

.matchaction-table .res_461-sub {
  background: url(/wp-content/themes/spacious/images/football/small-icons.png) 0px -120px no-repeat;
  width: 12px;
  height: 22px;
}

.matchaction-table.type_101 .goal, .matchaction-table.type_101 .updated-goall {
  background: url(/wp-content/themes/spacious/images/icehockey/puck3.png) no-repeat;
  width: 18px;
  height: 18px;
}

.matchaction-table.type_101 .assist-hockey {
  background: url(/wp-content/themes/spacious/images/icehockey/assistans-1.png) no-repeat;
  width: 18px;
  height: 18px;

}

.matchaction-table.type_101 .res_490 {
  background: url(/wp-content/themes/spacious/images/icehockey/penalty-1.png) no-repeat;
  width: 18px;
  height: 18px;

}

.matchaction-table .action-float-right {
  float: right;
}

.matchaction-table .action-float-right div {
  float: right;
  padding: 0 2px;
  line-height: 20px;
}

.matchaction-table .action-float-right .clearfix-actions {
  clear: both;
}

.matchaction-table .action-float-left {
  float: left;
}

.matchaction-table .action-float-left div {
  float: left;
  padding: 0 2px;
  line-height: 20px;
}

.matchaction-table .matchaction-time {
  line-height: 22px;
  font-size: 14px;
  background: rgba(255, 255, 255, 0.2);
}

.matchaction-table .action-resultscore, .matchaction-table .action-playername.type_400, .matchaction-table .action-playername.type_440 {
  font-weight: bold;
}
.matchaction-table .action-playername span:hover{
  text-decoration: underline;
  cursor: pointer;
}

.matchaction-table .AwayTeam-lineup {
  text-align: right;
}
    /* Style the tab */
    .tablineups {
        overflow: hidden;
    }

    /* Style the buttons inside the tab */
    .tablineups div {
        background-color: inherit;
        float: left;
        outline: none;
        cursor: pointer;
        transition: 0.3s;

    }

    /* Change background color of buttons on hover */


    /* Create an active/current tablink class */
    .tablineups div.active {
        background-color: #03a9f4;
        color: white;
    }

    /* Style the tab content */
    .tabcontentLineups {
        display: none;
       
        border-top: none;
    }


    .lineups-widget-team-select-buttons-container{
        display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    justify-content: center;
    padding-top: 32px;
    height: 36px;
    }
    .tablineups{
        display: -webkit-flex;
    display: -moz-box;
    display: flex;
    max-width: 448px;
    min-width: 240px;
    height: 36px;
    }
    .tablinkslineups{
        display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    font-size: 13px;
    line-height: 1;
    letter-spacing: -.3px;
    font-weight: 400;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    text-align: center;
    flex: 1 1;
    min-width: 120px;
    border: 1px solid #03a9f4;
    }
    .lineups-widget-list-container{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-flex-direction: column;
        -moz-box-orient: vertical;
        -moz-box-direction: normal;
        flex-direction: column;
        width: 100%;
    }
    .players-list-title-container{
        font-size: 13px;
        color: var(--medium);
        margin: 16px 8px 6px;
    }
    .players-list-item{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        height: 48px;
        background-color: white;
        margin-bottom: 1px;
    }
    .players-list-item-player-details{
        -webkit-flex: 98 1;
        -moz-box-flex: 98;
        flex: 98 1;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
    }
    .players-list-item-player-number{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-flex-direction: column;
        -moz-box-orient: vertical;
        -moz-box-direction: normal;
        flex-direction: column;
        -webkit-justify-content: space-evenly;
        -moz-box-pack: space-evenly;
        justify-content: space-evenly;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        font-size: 11px;
        margin: 0 2px;
        font-weight: 400;
        width: 14px;
        padding: 0 3px;
        text-align: center;
        height: 30px;
    }
    .players-list-item-player-name-and-position{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-flex-direction: column;
        -moz-box-orient: vertical;
        -moz-box-direction: normal;
        flex-direction: column;
        margin: 0 8px;
        font-size: 13px;
    }
    .players-list-item-player-name{
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /*head2head*/
    .widget-card-wrapper-container{
        width: 100%;
    }
    .widget-card-wrapper-header-container{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        padding: 0 6px;
        -webkit-justify-content: space-between;
        -moz-box-pack: justify;
        justify-content: space-between;
    }
    .card-title-container.widget-card-wrapper-header-title{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        margin-bottom: 2px;
        height: 100%;
        font-weight: 400;
        margin: 3px;
        font-size: 12px;
        color: var(--medium);
        line-height: normal;
        padding: inherit;
    }
    .previous-meetings-widget_view_container{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-flex-direction: column;
        -moz-box-orient: vertical;
        -moz-box-direction: normal;
        flex-direction: column;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        width: 100%;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .previous-meetings-widget_view_title{
        font-size: 16px;
        text-align: center;
        padding-top: 13px;
        background-color: white;
        font-weight: 500;
    }
    .previous-meetings-widget_header_container{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        background-color: white;
        padding-bottom: 21px;
        height: 138px;
        margin-bottom: 1px;
    }
    .previous-meetings-widget_competitor-details_competitor_details_container{
        -webkit-flex: 1 1;
        -moz-box-flex: 1;
        flex: 1 1;
        -webkit-flex-direction: column;
        -moz-box-orient: vertical;
        -moz-box-direction: normal;
        flex-direction: column;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
    }
    .previous-meetings-widget_competitor-details_competitor_details_logo{
        width: auto;
        height: 55px;
        margin-bottom: 12px;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
    }
    .previous-meetings-widget_competitor-details_competitor_details_logo img{
        max-width: 55px;
        max-height: 55px;
        width: auto;
        height: auto;
        visibility: visible;
        margin: 0;
        vertical-align: inherit;
    }
    .previous-meetings-widget_competitor-details_competitor_details_name{
        font-size: 14px;
        font-weight: 500;
        margin-bottom: -10px;
        max-height: 35px;
        text-align: center;
        line-height: normal;
    }
    .previous-meetings-widget_total-scores_container{
        -webkit-flex: 1 1;
        -moz-box-flex: 1;
        flex: 1 1;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        line-height: normal;
    }
    .previous-meetings-widget_score-result_container{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-flex-direction: column;
        -moz-box-orient: vertical;
        -moz-box-direction: normal;
        flex-direction: column;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        margin: 0 20px;
    }
    .previous-meetings-widget_score-result_score{
        font-size: 32px;
        font-weight: 500;
        color: var(--smallTitles);
        text-align: center;
    }
    .previous-meetings-widget_score-result_type{
        font-size: 12px;
        color: var(--medium);
        margin-top: 0;
    }
    .previous-meetings-widget_total-scores_divider{
        height: 24px;
        display: inline-block;
        border-right: 1px solid black;
        width: 2px;
        margin-top: 6px;
    }

    .previous-meetings-widget_match-row_match_row{
        position: relative;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        font-size: 14px;
        margin-bottom: 1px;
        padding: 0 8px;
        background-color: white;
        height: 64px;
    }
    .previous-meetings-widget_match-row_content_container{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        text-align: center;
        width: 100%;
    }
    .previous-meetings-widget_match-row_content_competitor_container{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: flex-end;
        -moz-box-pack: end;
        justify-content: flex-end;
        -webkit-flex: 5 1;
        -moz-box-flex: 5;
        flex: 5 1;
        height: 24px;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        text-align: center;
        position: relative;
    }
    .previous-meetings-widget_match-row_center{
        width: 100px;
    }
    .previous-meetings-widget_match-row_content_center{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
    }
    .previous-meetings-widget_match-row_content_main_text{
        width: 100px;
        text-align: center;
        font-size: 16px;
        font-weight: 500;
    }
    .previous-meetings-widget_match-row_secondary_text.previous-meetings-widget_match-row_date_text{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        color: var(--medium);
        font-size: 10px;
        height: 12px;
        white-space: nowrap;
    }
    .previous-meetings-widget_match-row_content_competitor_away{
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-justify-content: flex-end;
        -moz-box-pack: end;
        justify-content: flex-end;
        -webkit-flex: 5 1;
        -moz-box-flex: 5;
        flex: 5 1;
        height: 24px;
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        text-align: center;
        position: relative;
        -webkit-justify-content: flex-start;
        -moz-box-pack: start;
        justify-content: flex-start;
    }
    
    
    .recent-form-widget_full-view_competitor_container{
        width: 100%;
    margin-top: 16px;
    }
    .recent-form-widget_full-view_competitor_title{
        display: flex;
    align-items: center;
    margin: 0px 8px 2px;
    }
    .recent-form-widget_full-view_competitor_container img{
        margin: 0;
    }
    .recent-form-widget_full-view_competitor_name{
        font-size: 12px;
    color: var(--medium);
    margin: 0px 4px;
    }
    .recent-form-widget_full-view_match_container{
        position: relative;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 12px;
    margin-bottom: 1px;
    background-color: white;
    padding: 0px 8px;
    }
    .recent-form-widget_full-view_match_date{
        display: flex;
    justify-content: flex-start;
    color: var(--medium);
    flex: 1 1 0%;
    }
    .recent-form-widget_full-view_match_center_container{
        display: flex;
    justify-content: center;
    position: absolute;
    width: 100%;
    flex-direction: column;
    }
    .recent-form-widget_full-view_match_top_and_bottom_main_text{
        height: 14px;
    display: flex;
    justify-content: center;
    color: var(--medium);
    font-size: 10px;
    line-height: normal;
    }
    .recent-form-widget_full-view_match_main_text{
        display: flex;
    justify-content: center;
    align-items: center;
    }
    .recent-form-widget_full-view_match_competitor_name{
        display: flex;
    flex: 5 1 0%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    }
    .recent-form-widget_full-view_match_home_competitor{
        justify-content: flex-end;
    }
    .recent-form-widget_full-view_match_score{
        width: 80px;
    text-align: center;
    font-size: 16px;
    font-weight: 500;
    }
    .recent-form-widget_full-view_match_away_competitor{
        justify-content: flex-start;
    }
    .recent-form-widget_partial-view_recent_form_widget_game_badge {
        border-radius: 50%;
    color: var(--secondaryText);
    font-size: 12px;
    text-align: center;
    margin: 0px 4px;
    }
    .game-badge-text-container.recent-form-widget_game-badge_badge_text{
        height: 32px;
    width: 32px;
    position: absolute;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    color: #fff;
    line-height: normal;
    }
    .recent-form-widget_partial-view_recent_form_widget_game_badge_icon.game-badge-icon-container{
        visibility: visible;
    margin: 0;
    vertical-align: inherit;
    height: 32px;
    width: 32px;
    }
    
    .stats-widget-bar-section-container{
        display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-flex-direction: column;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
    margin: 0;
    }
    .stats-widget-bar-section-name{
        padding: 16px 0 1px 8px;
    margin-bottom: 4px;
    font-size: 12px;
    }
    .stats-widget-bar-section-rows{
        padding: 15px 0;
    background-color: white;
    }
    .stats-widget-bar-section-row{
        margin-bottom: 20px;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-flex-direction: column;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
    }
    .bar-chart-container{
        display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    -webkit-flex-direction: column;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
    width: 100%;
    }
    .bar-chart-scores-container{
        width: 95%;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    justify-content: center;
    -webkit-flex-direction: row;
    -moz-box-orient: horizontal;
    -moz-box-direction: normal;
    flex-direction: row;
    margin-bottom: 3px;
    }
    .bar-chart-label{
        -webkit-flex: 1 1;
    -moz-box-flex: 1;
    flex: 1 1;
    font-weight: 500;
    font-size: 13px;
    white-space: nowrap;
    }
    .bar-chart-name-label{
        -webkit-flex: 98 1;
    -moz-box-flex: 98;
    flex: 98 1;
    font-size: 13px;
    text-align: center;
    }
    .bar-chart-line-container{
       width: 95%;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    justify-content: center;
    max-height: 5px;
    -webkit-align-items: flex-end;
    -moz-box-align: end;
    align-items: flex-end; 
    }
    .bar-chart-line-sub-container{
       -webkit-flex: 1 1;
    -moz-box-flex: 1;
    flex: 1 1;
    display: -webkit-flex;
    display: -moz-box;
    display: flex; 
    }
    .bar-chart-light-line{
       height: 1px;
    -webkit-align-self: flex-end;
    align-self: flex-end; 
    }
    .bar-chart-bold-line{
        height: 3px;
    }
</style>

<?php
$host = 'https://sc.score24.com/scorecenter/api/livescore/game/detail.json?partner=' . $partner . '&gameId=' . $urlgameId . '&includes=all';
$user_name = $partner;
$password = $liveapiPass;
if ($password == "") {
    $password = getLiveAuth();
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
if($httpcode == 401){
curl_close($ch);
$password = getLiveAuth();
$ch = curl_init($host);
$headers = array(
'Content-Type: application/json',
'Authorization: Bearer '.$password.''
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
//$tableLists = $decoded_json['tables'];

$event = $decoded_json['event'];
//echo $event['homeTeam']['name'];
$homePlayers = array();
$awayPlayers = array();
$homeTeamId=$event['homeTeam']['id'];
$awayTeamId=$event['awayTeam']['id'];
$teams = array();
$teams[$event['homeTeam']['id']] = $event['homeTeam']['name'];
$teams[$event['awayTeam']['id']] = $event['awayTeam']['name'];
 if($event['detail']['coverageId'] == 1 || $event['detail']['coverageId'] == 2){ 
foreach ($event['lineup']['homePlayers'] as $homePlayer) {
    $homePlayers[$homePlayer['id']] = $homePlayer['firstName'] . " " . $homePlayer['lastName'];
}
foreach ($event['lineup']['awayPlayers'] as $awayPlayer) {
    $awayPlayers[$awayPlayer['id']] = $awayPlayer['firstName'] . " " . $awayPlayer['lastName'];
}
 }
        
 
            $homeleagueName = $event['homeTeam']["name"];
        $homeleagueName = preg_replace("/[\s-]+/", " ", $homeleagueName);
        $homeleagueName = preg_replace("/[\s_]/", "-", $homeleagueName);
        $hometeamlink = "/".$pagename."/".$event['homeTeam']["country"]."/" . $homeleagueName . "/" . $event['detail']["leagueId"] . "/team-".$event['homeTeam']["id"];
        $awayleagueName = $event['awayTeam']["name"];
        $awayleagueName = preg_replace("/[\s-]+/", " ", $homeleagueName);
        $awayleagueName = preg_replace("/[\s_]/", "-", $homeleagueName);
        $awayteamlink = "/".$pagename."/".$event['awayTeam']["country"]."/" . $awayleagueName . "/" . $event['detail']["leagueId"] . "/team-".$event['awayTeam']["id"];
?>



<div class="website-module-content-container">
    <div class="game-center-header ">

        <div class="game-center-header-container">
            <div  class="game-center-header-title-container"><?php echo $event['detail']['country']['name'] ?>, <?php echo $event['detail']['leagueName'] ?></div>
            <div class="game-center-header-competitors-and-scores-container">
                <a class="game-center-header-team-details" rel="" href="<?php echo $hometeamlink;?>">
                    <div class="game-center-header-team-details-flag-container game-center-header-team-details-home-team">

                        <img class="game-center-header-team-details-entity-logo  " width="109" height="128" alt="" title=""  style="max-width: 64px; max-height: 64px; width: auto; height: auto; visibility: visible;" src="https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/<?php echo $event['homeTeam']['id']; ?>.png">
                    </div>
                    <div class="game-center-header-team-details-name-container bold   "><?php echo $event['homeTeam']['name'] ?></div>
                </a>
                <div class="game-center-header-content-container">
                    <div class="game-center-header-module-game-status">
                        <?php
                        $statusText="NS";
                        if($event['status'] == 1100 && $event['scores']['sportId'] == 6046){
                            $statusText="Live"." ".$event['scores']['minutes'];
                        }
                         else if($event['status'] == 1100){
                            $statusText="Live";
                        }
                        else if($event['status'] == 1400 || $event['status'] == 1420 || $event['status'] == 1500){
                            $statusText="Final";
                        }
                        ?>
                        <div class=" rectangle-label-container  game-center-header-label-container"><?php echo $statusText;?></div>
                    </div>
                    <div class="game-center-header-score-text-options">
                        <div class="game-score_container">
                            <div class=" game-center-header-competitor-score-bonus game-score_competitor_score_container"><?php echo $event['scores']['score']['homeScore'] ?></div>
                            <div class="game-center-header-score-divider">-</div>
                            <div class=" game-center-header-competitor-score-bonus game-score_competitor_score_container game-score_away_competitor_score_container"><?php echo $event['scores']['score']['awayScore'] ?></div>
                        </div>
                    </div>
                    <div class="game-center-header-button-score-text"><?php echo $event['date'] ?></div>
                </div>
                <a class="game-center-header-team-details" rel="" href="<?php echo $awayteamlink;?>">
                    <div class="game-center-header-team-details-flag-container game-center-header-team-details-away-team">

                        <img class="game-center-header-team-details-entity-logo  " width="125" height="128" alt="" title=""  style="max-width: 64px; max-height: 64px; width: auto; height: auto; visibility: visible;" src="https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/<?php echo $event['awayTeam']['id']; ?>.png">
                    </div>
                    <div class="game-center-header-team-details-name-container    "><?php echo $event['awayTeam']['name'] ?></div>

                </a>
            </div>
        </div>
    </div>
    <div class="tabButtons" style="display: flex;background: white;"> 
        <?php
        if($event['detail']['coverageId'] == 1 || $event['detail']['coverageId'] == 2){
            if($event['status']!=1000){
                ?>
        <a class="game-center-tabs-module-tab-button-container tablink" onclick="openPage('Home', this, 'white',event)" id="defaultOpen">Match</a>
        <?php
            }
            else{
                ?>
         <a class="game-center-tabs-module-tab-button-container tablink" onclick="openPage('Home', this, 'white',event)">Match</a>
        <?php
            }
            ?>
        
        
        <a class="game-center-tabs-module-tab-button-container tablink" onclick="openPage('News', this, 'white',event)" >Lineups</a>
        
        <?php
        }
        ?>
        <?php
        if($sportId=="6046"){
            ?>
         <a class="game-center-tabs-module-tab-button-container tablink" onclick="openPage('Contact', this, 'white',event)">Stats</a>
        <?php
        }
        else if($event['detail']['coverageId'] == 1){
            ?>
        <a class="game-center-tabs-module-tab-button-container tablink" onclick="openPage('Contact', this, 'white',event)">Stats</a>
        <?php
        }
        ?>
       <?php if($event['detail']['coverageId'] == 1 || $event['detail']['coverageId'] == 2){ ?>
        <?php
        if($event['status'] == 1000){
            ?>
         <a class="game-center-tabs-module-tab-button-container tablink" id="defaultOpen" onclick="openPage('About', this, 'white',event)">Head to Head</a>
        <?php
        }
        else{
            ?>
         <a class="game-center-tabs-module-tab-button-container tablink" onclick="openPage('About', this, 'white',event)">Head to Head</a>
       <?php     
        }
        ?>
       
          <?php
       }
          else{
              ?>
        <a class="game-center-tabs-module-tab-button-container tablink" id="defaultOpen" onclick="openPage('About', this, 'white',event)">Head to Head</a>
        <?php
          }
        ?>
    </div>
    <?php
    if($event['detail']['coverageId'] == 1 || $event['detail']['coverageId'] == 2){
        
    ?>
    <div id="Home" class="tabcontent">
        <div class="widget-card-wrapper-header-container">
            <h2 class="card-title-container widget-card-wrapper-header-title">Match Events</h2>

        </div>

        <?php include 'matchHistory.php'; ?>
        
    </div>

    <div id="News" class="tabcontent">
        <?php include 'lineUps.php'; ?> 
    </div>
    <?php
    }
    ?>
 <?php
        if($sportId=="6046" || $sportId=="35232"){
            ?>
    <div id="Contact" class="tabcontent">
         <?php include 'matchStats.php'; ?> 
        

    </div>
    <?php
        }
    ?>

    <div id="About" class="tabcontent">
         <?php include 'head2headGameDetail.php'; ?> 
    </div>

    <script>
        function openPage(pageName, elmnt, color,evt) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
                 tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

        document.getElementById("defaultOpenlineup").click();

        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontentLineups");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinkslineups");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

</div>

