<?php
/**
 * Theme Footer Section for our theme.
 *
 * Displays all of the footer section and closing of the #main div.
 *
 * @package    ThemeGrill
 * @subpackage Spacious
 * @since      Spacious 1.0
 */
?>

</div><!-- .inner-wrap -->
</div><!-- #main -->
<?php do_action( 'spacious_before_footer' ); ?>

<footer id="colophon" class="clearfix">
	<?php get_sidebar( 'footer' ); ?>
<!--	<div class="footer-socket-wrapper clearfix">
		<div class="inner-wrap">
			<div class="footer-socket-area">

				</nav>
			</div>
		</div>
	</div>-->
</footer>
<a href="#masthead" id="scroll-up"></a>
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- <div style='color:#21282d;background: #21282d;'><a href='https://w88vb.com/' style='color:#21282d;background: #21282d;'>nhà cái w88</a></div> -->
<script>
    jQuery(document).ready(function () {
        
        var favLeagues = getCookie("MY_LEAGUES");
        var favLeagueIds = [];
        favLeaguesArray = (favLeagues || '').split(",");
        //console.log(favLeaguesArray);
        sportsId=jQuery('.all-scores-container').data('sportid');
        
        for (l = 0; l < favLeaguesArray.length; l++) {
            //console.log(favLeaguesArray[l]);
            if(favLeaguesArray[l].includes("_"+sportsId)){
                //console.log(favLeaguesArray[l]);
                favLeagueIds.push(favLeaguesArray[l].replace("_"+sportsId,''));
            }
        }
        console.log(favLeagueIds);
        var today = new Date();
        var dd = today.getDate();

        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        if (dd < 10)
        {
            dd = '0' + dd;
        }

        if (mm < 10)
        {
            mm = '0' + mm;
        }
        today = yyyy + '-' + mm + '-' + dd;
//jQuery('.datepicker').pickadate();
let  loadGamesInterval = window.setInterval(loadGames, 60000);
        var todayDate = today;
        jQuery("#todaygamespicker").val(todayDate);

        if (typeof pickadate !== "undefined") { 

        jQuery('.datepicker').pickadate({
            onClose: function (selectedDate) {
                if (todayDate != jQuery("#todaygamespicker").val()) {
                    todayDate=jQuery("#todaygamespicker").val();
                    // var sep = "&";
                    //window.location.href = '/scorecenter/apps/sc/games/tournament/6097/score24/all-games-today?lang=eng&allleagues=true' + sep + 'customDate=' + ($("#todaygamespicker").val());
                    console.log(jQuery("#todaygamespicker").val());
                    
                    if(todayDate==today){
                         loadGames();
                       loadGamesInterval = window.setInterval(loadGames, 60000); 
                    }
                    else{
                         clearInterval(loadGamesInterval);
                        loadGames();
                    }
                       
                }
            },
            format: 'yyyy-mm-dd',
            editable: false,
            clear: ''
        });

    }
        
        jQuery('.switch-button_toggle').on('click', function () {
            if( jQuery('.switch-button_toggle').hasClass("switch-button_active_toggle")){
                jQuery('.switch-button_toggle').removeClass("switch-button_active_toggle");
                 jQuery('.game-card_container').css("display","inherit");
                jQuery('.all-scores-widget-competition_all_scores_widget_competition_header_container').css("display","grid");
            }
            else{
                jQuery('.switch-button_toggle').addClass("switch-button_active_toggle");
                jQuery('.game-card_container').css("display","none");
                jQuery('.all-scores-widget-competition_all_scores_widget_competition_header_container').css("display","none");
                 jQuery('.game-card_container.status_1100').css("display","inherit");
            }
         
         
  });
        
        function loadGames(){
                                jQuery.ajax({
                        beforeSend: function (request) {
                            request.setRequestHeader("Authorization", "Bearer " + getCookie("apiLiveToken") + "'");
                        },
                        dataType: "json",
                        url: '//sc.score24.com/scorecenter/api/livescore/games/list.json?partner=5score&lang=eng&sportId='+sportsId+'&date=' + jQuery("#todaygamespicker").val(),
                        success: function (data) {
//                        
//jQuery.each(data, function (key, data1) {
//    console.log(key)
//   jQuery.each(data1, function (index, data2) {
//        console.log('index', data2.eventName);
//    });
//});
                            console.log(data);

                            liveLeagueGames = data["liveLeaguesGames"];
                            nonLiveLeagueGames = data["nonLiveLeaguesGames"];
                            jQuery(".all-scores-widget-competition_all_scores_widget_competition_container").empty();
                            allGamesTodayContainer = " <div class='all-scores-widget-competition_all_scores_widget_competition_container'></div>";
                            todatMatches(liveLeagueGames);
                            todatMatches(nonLiveLeagueGames);
                            
                                        if( jQuery('.switch-button_toggle').hasClass("switch-button_active_toggle")){
               jQuery('.game-card_container').css("display","none");
                jQuery('.all-scores-widget-competition_all_scores_widget_competition_header_container').css("display","none");
                 jQuery('.game-card_container.status_1100').css("display","inherit");
            }
           
                            

                        }
                    });
        }
        
                jQuery(".header-date-selector-calender-button-container").on('click',function (event) {
            var input = jQuery('.datepicker').pickadate()
            var picker = input.pickadate('picker')
            if (picker.get('open')) {
                picker.close()
            } else {
                picker.open()
            }
            event.stopPropagation()
        }).on('mousedown', function (event) {
            event.preventDefault()
        });


        function todatMatches(liveLeagueGames) {
            console.log(favLeagueIds);
            leagueId = "";
            gamesList = "";
            gamesHeaderPadding = "first";
            allGamesTodayContainer = jQuery(" <div class='all-scores-widget-competition_all_scores_widget_competition_container'></div>");
            jQuery.each(liveLeagueGames, function (index, liveGames) {


                               countryNameURL=liveGames['detail']['country']['name'];
                                countryNameURL =  countryNameURL.replace(/\s+/g, '-');
                                leagueName = liveGames['detail']['leagueName'];
                                leagueName = leagueName.replace(/\s+/g, '-');
                                leagueIdd = liveGames['detail']['leagueId'];
                                eventId=liveGames['id'];
                                sportsName=jQuery('.all-scores-container').data('sportname');
                                homeTeamUrl=liveGames['homeTeam']['name'].replace(' ', ',');
                                homeTeamUrl=homeTeamUrl.replace('-', ',');
                                 homeTeamUrl=homeTeamUrl.replace('/', ',');
                                awayTeamUrl=liveGames['awayTeam']['name'].replace(' ', ',');
                                awayTeamUrl=awayTeamUrl.replace('-', ',');
                                awayTeamUrl=awayTeamUrl.replace('/', ',');
                                link="/"+sportsName+"/" + homeTeamUrl+"-"+awayTeamUrl+ "/" + leagueName + "/" + leagueIdd + "/" +eventId;
                                linkLeague="";
                                

                if (liveGames['detail']['leagueId'] != leagueId) {
                    leagueId = liveGames['detail']['leagueId'];
                    linkLeague="/"+sportsName+"/" + countryNameURL + "/" + leagueName + "/" + leagueId + "/league";
                    isFav ="";
                    favStarIcon="/wp-content/themes/spacious/images/staricon.svg";
                                    if(favLeagueIds.includes(leagueId.toString())){
                                        console.log("included");
                                    isFav="fav-selected";
                                   favStarIcon="/wp-content/themes/spacious/images/starmarked.svg";
                                 }
                    emptyBlock = jQuery("<div class='emptyBlock " + gamesHeaderPadding + "'></div>");
                    allGamesTodayContainer.append(emptyBlock);
                    headerBlock = jQuery("<div class='all-scores-widget-competition_all_scores_widget_competition_header_container'>" +
                            "<div class='all-scores-widget-competition_all_scores_widget_competition_info_star_container'><img class='clickable favourite "+isFav+"' id='fav_league_"+liveGames['detail']['leagueId']+"' data-sportid='"+liveGames['detail']['sportId']+"' data-countryid='"+liveGames['detail']['country']['id']+"' data-countryname='"+liveGames['detail']['country']['name']+"' data-leaguename='"+liveGames['detail']['leagueName']+"' width='16' height='16' alt='' title=''  decoding='async' style='visibility: visible;' src='"+favStarIcon+"'></div>" +
                            "<div class='s24-medals-data-icon s24-country-icon-" + liveGames['detail']['country']['id'] + "'></div><a class='all-scores-widget-competition_all_scores_widget_competition_info_name' rel='' href='"+linkLeague+"'>" + liveGames['detail']['leagueName'] + "</a>" +
                            "<div class='all-scores-widget-competition_all_scores_widget_competition_info_country_name'>" + liveGames['detail']['country']['name'] + "</div>" +
                            "</div>");
                    allGamesTodayContainer.append(headerBlock);
                    gamesHeaderPadding = "two";
                }

                todayGameCardString = "<div class='game-card_container game-card_full_view status_"+liveGames['status']+"'>" +
                        "<div class='drawer-container game-card_mini_drawer_container mini-drawer-start-icon mini-drawer-ltr open-from-left active-transparent  mini-drawer-star-icon-container game-card_mini_drawer_container mini-drawer-ltr open-from-left active-transparent '>" +
                        "<a class='game-card_game_card_link game-card_game_card game-card_clickable' rel='' href='"+link+"'>" +
                        "<div class='ellipsis game-card-competitor_container game-card-competitor_name  ellipsis-line-clamp' style='-webkit-line-clamp: 2;'>" + liveGames['homeTeam']['name'] + "</div>" +
                        "<img class='game-card-competitor_logo_wrap' width='68' height='68' alt='' title=''  decoding='async' style='max-width: 34px; max-height: 34px; width: auto; height: auto; visibility: visible;' src='https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/" + liveGames['homeTeam']['id'] + ".png'>";

                eventDate = liveGames['date'];
                eventDate = eventDate.split(" ");
                if (liveGames['status'] == 1000 || liveGames['status'] == 1010) {


                    todayGameCardString = todayGameCardString + "<div class='game-card-center_center_score'>" + eventDate[1] + "</div>";
                }

                if (liveGames['status'] == 1100 || liveGames['status'] == 1400 ||  liveGames['status'] == 1420 || liveGames['status'] == 1500) {
                  if (liveGames['status'] == 1100 && liveGames['scores']['sportId']== 6046){
                      var todaydate = new Date();
                    var dd = todaydate.getDate();
                    var mm = todaydate.getMonth() + 1;
                    var yyyy = todaydate.getFullYear();
                    if (dd < 10)
                    {
                        dd = '0' + dd;
                    }
                    if (mm < 10)
                    {
                        mm = '0' + mm;
                    }
                    todaydateonly = yyyy + '-' + mm + '-' + dd;
                    var abc=(todaydate.getHours() < 10)?"0":""
                    var rar=(todaydate.getMinutes() < 10)?"0":""
                    var time = abc+todaydate.getHours() + ":" + rar+todaydate.getMinutes();  
                    var dateTime = todaydateonly+' '+time;
                    
                    let dateOne = new Date(dateTime);
                    let dateTwo = new Date(liveGames['date']);
                    let msDifference =  dateOne - dateTwo;
                    let minutes = Math.floor(msDifference/1000/60);
                    //console.log(minutes);
                    
                   $liveTimer=1;
                              if(minutes < 46){
                                   liveTimer=minutes;
                                }
                                else if(minutes > 45 && minutes < 61){
                                    liveTimer="HT";
                                }
                                else if(minutes > 60 && minutes < 106){
                                    liveTimer=minutes-15;
                                    
                                }
                                else if(minutes > 105){
                                    liveTimer="90+";
                                }
                                else {
                                     liveTimer="";
                                }
                      todayGameCardString = todayGameCardString + "<div class='game-card-top_view game-card-top_top_view_container game-card-top_status_badge livenow_game'>Live "+liveTimer+"</div><div class='game-card-center_center_score'>" + liveGames['scores']['score']['homeScore'] + " - " + liveGames['scores']['score']['awayScore'] + "</div>"; 
                  }
                  else if(liveGames['status'] == 1100){
                      todayGameCardString = todayGameCardString + "<div class='game-card-top_view game-card-top_top_view_container game-card-top_status_badge livenow_game'>Live</div><div class='game-card-center_center_score'>" + liveGames['scores']['score']['homeScore'] + " - " + liveGames['scores']['score']['awayScore'] + "</div>"; 
                  }
                      
                  else{
                     todayGameCardString = todayGameCardString + "<div class='game-card-top_view game-card-top_top_view_container game-card-top_status_badge'>Final</div><div class='game-card-center_center_score'>" + liveGames['scores']['score']['homeScore'] + " - " + liveGames['scores']['score']['awayScore'] + "</div>";  
                  }
                   
                }
                todayGameCardString = todayGameCardString + "<img class='game-card-competitor_logo_wrap game-card-competitor_away_competitor ' width='56' height='68' alt='' title=''  decoding='async' style='max-width: 34px; max-height: 34px; width: auto; height: auto; visibility: visible;' src='https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/" + liveGames['awayTeam']['id'] + ".png'>" +
                        "<div class='ellipsis game-card-competitor_container game-card-competitor_name game-card-competitor_container_away ellipsis-line-clamp' style='-webkit-line-clamp: 2;'>" + liveGames['awayTeam']['name'] + "</div>" +
                        "</a>" +
                        "<div class='mini-drawer ' style='width: 40px; left: -40px;'>" +
                        
                        "</div>" +
                        "</div>" +
                        "</div>";
//                "<div><img class='star-icon-spin-close clickable' width='16' height='16' alt='' title=''  decoding='async' style='visibility: visible;' src=''></div>" +
                todayGameCard = jQuery(todayGameCardString);
                allGamesTodayContainer.append(todayGameCard);
            });


            jQuery(".all-scores-widget-competition_all_scores_widget_competition_container").append(allGamesTodayContainer);
            
              
             
        }
    });

</script>
<script type='text/javascript' src='/wp-content/themes/spacious/js/date/picker.js?ver=5.9.1' id='mycustom-js2'></script>
<script type='text/javascript' src='/wp-content/themes/spacious/js/date/picker.date.js?ver=5.9.1' id='mycustom-js3'></script>
<script type='text/javascript' src='/wp-content/themes/spacious/js/date/legacy.js?ver=5.9.1' id='mycustom-js4'></script>
</body>
</html>
