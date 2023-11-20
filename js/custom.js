// A $( document ).ready() block.
//function onMessage(event) {
//    var message = event.data;
//    var arr = message.split(",");
//
//    var receivedHeight = arr[1];
//    if (jQuery('#livescore').length) {
//        //console.log("exist");
//        receivedHeight = receivedHeight - 300
//        jQuery("#livescore").css({
//            'height': receivedHeight + 'px'
//        });
//    } else {
//        jQuery("#livescoreFrame").css({
//            'height': receivedHeight + 'px'
//        });
//    }
//
//    //console.log(receivedHeight);
//}
function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
jQuery(document).ready(function () {
    let MY_LEAGUES_COOKIE_NAME = "MY_LEAGUES";
    let allFixturesarr = [];
    let allTeamFixturesarr = [];
    let allTeamResultsarr = [];
    //init2();
//    var jQueryscrollingDiv = jQuery("#secondary");
//    jQuery(window).scroll(function () {
//
//        var primaryHeight = 0;
//        if (jQuery('#livescore').length) {
//            primaryHeight = jQuery("#livescore").height()
//        } else {
//            primaryHeight = jQuery("#livescoreFrame").height()
//        }
//
//        var topScroll = jQuery(window).scrollTop();
//        if (topScroll > 100) {
//            topScroll = topScroll - 100;
//        }
//
//        if (topScroll > (primaryHeight - 550)) {
//            topScroll = primaryHeight - 550;
//        }
//        jQueryscrollingDiv.stop().animate({"marginTop": topScroll + "px"}, "fast");
//
//    });

//    function init2() {
//        if (window.addEventListener) {  // all browsers except IE before version 9
//            window.addEventListener("message", onMessage, false);
//        } else {
//            if (window.attachEvent) {   // IE before version 9
//                window.attachEvent("onmessage", onMessage);
//            }
//        }
//    }

    /*jQuery('#livescore').on('load', function () {
     try {
     setTimeout(function () {
     var clientHeight = jQuery(".page-container").height();
     var y = clientHeight;
     var message = "false," + y + "," + 0;
     window.parent.postMessage(message, "*");
     console.log("hello");
     }, 2000);
     } catch (err) {
     }
     
     });*/


    jQuery('.lang-list a').on('click', function () {
        ell = jQuery(this).data('lang');
        //console.log(ell);
        var d = new Date();
        d.setFullYear(d.getFullYear() + 1);
        setCookie("lang", ell, '/', d);
        location.reload(true);
    });

    jQuery('.country-heading-container').on('click', function () {
        // if(jQuery(this).find(".collpsable").hasClass("closed")){
        
        
        if(jQuery(this).parent().find(".collpsable").hasClass("collpsed")){
            jQuery(this).parent().find(".collpsable").css("display","none");
            jQuery(this).parent().find(".collpsable").removeClass("collpsed")
        }else{
            jQuery(this).parent().find(".collpsable").css("display","block");
            jQuery(this).parent().find(".collpsable").addClass("collpsed");
        }
        
        //jQuery(this).find(".collpsable").
        //}


//console.log("asdsad");
    });
     jQuery('.standing-league-heading-wrapper').on('click', function () {
        
          jQuery(".dropdown_list.standings-preview-widget-dropdown-list-container").toggle();
  });
  
  jQuery('.standings-preview-widget-item-container').on('click', function () {
      
       var leagueID = jQuery(this).find(".standings-preview-widget-item-text").data("id");
       var pageName = jQuery(this).find(".standings-preview-widget-item-text").data("sport");
       
      jQuery(".dropdown_list.standings-preview-widget-dropdown-list-container").toggle();
               jQuery.ajax({
            beforeSend: function (request) {
                request.setRequestHeader("Authorization", "Bearer " + getCookie("apiToken") + "'");
            },
            dataType: "json",
            url: 'https://sc.score24.com/scorecenter/api/stats/v2/tables/season.json?partner=5score&subjectId=' + leagueID,
            success: function (data) {
//                        
//jQuery.each(data, function (key, data1) {
//    console.log(key)
//   jQuery.each(data1, function (index, data2) {
//        console.log('index', data2.eventName);
//    });
//});
            tableRowString="";
            jQuery.each(data['tables'], function (index, table) {
                 //tableRows= ;
                 
                leagueId= table.id;
                jQuery.each(table['tableRows'], function (index, tableRow) {
                 //tableRows= ;
                //console.log(tableRow.team.id);
                leagueName= tableRow['team']['name'];
                leagueName = leagueName.replace(/\s+/g, '-');
                //link="/football/standing/" + leagueName+  "/" + leagueId + "/league";
                link = "/"+pageName+"/"+tableRow['team']["nationality"]+"/" + leagueName + "/" + leagueId + "/team-"+tableRow['team']["id"];
                tableRowString=tableRowString+"<tr class='standings-widget_table_row'>"+
             "<td class='standings-widget_first_cell'>"+ tableRow.pos + "</td>"+
             "<td class='standings-widget_table_text_cell'><img alt title class='teamLogo_standing' src='https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/25x25/"+ tableRow.team.id+".png' /></td>"+
             "<td class='standings-widget_competitor_name'><a href='"+link+"'><div>" + tableRow['team']['name'] + "</div></a></td>"+
             "<td class='standings-widget_table_text_cell standings-widget_table_cell_border'>" + tableRow['total']['gp'] + "</td>"+
             "<td class='standings-widget_table_text_cell'>" + tableRow['total']['gf']+":"+tableRow['total']['ga']+ "</td>"+
             "<td class='standings-widget_table_text_cell'>" + tableRow['total']['gd'] + "</td>"+
             "<td class='standings-widget_table_text_cell'>" + tableRow['total']['pts'] + "</td>"+
             "</tr>";
                });
                });
                
               jQuery(".standing-table-preview-widget-right tbody").empty();
                jQuery(".standing-table-preview-widget-right tbody").append(jQuery(tableRowString));
               
            }
        });
 });
  
     jQuery('.option-stripe-medium-container').on('click', function () {
        
          jQuery(this).find(".dropdown-content").toggle();
  });
       jQuery('.dropdown-content.leagueFixtures a').on('click', function (e) {
         
          e.preventDefault();
          var ftype = jQuery(this).data("ftype");
           var leagueID = jQuery(this).data("id");
           var pageName = jQuery(this).data("sport");
          if(ftype == "all" || ftype == "result"){
               jQuery(".fixtures_widget.recentmatchsblock").css("display", "none");
              if(jQuery(".fixturesCard").length){
                  jQuery(".fixturesCard").remove();
              }
            
              
              if(allFixturesarr.length==0){
                 
                   loadAllFixtures(leagueID,ftype,pageName);
                   jQuery(".fixtures_widget.allfixtures").css("display", "inherit");
              }
              else{
              fixtureWrapper(allFixturesarr,ftype,pageName);
             jQuery(".fixtures_widget.allfixtures").css("display", "inherit");
         }
          }
          else{
               jQuery(".fixtures_widget.allfixtures").css("display", "none");
               jQuery(".fixtures_widget.recentmatchsblock").css("display", "inherit");
          }
          
         //console.log(ftype);
  });
         jQuery('.dropdown-content.teamFistures a').on('click', function (e) {
         
                   e.preventDefault();
          var ftype = jQuery(this).data("ftype");
           var teamID = jQuery(this).data("id");
           var pageName = jQuery(this).data("sport");
          if(ftype == "allFixturesteam"){
               jQuery(".fixtures_widget.recentmatchsblock").css("display", "none");
              if(jQuery(".fixturesCard").length){
                  jQuery(".fixturesCard").remove();
              }
            
              
              if(allTeamFixturesarr.length==0){
                 
                   loadAllTeamFixtures(teamID,ftype,'1',pageName);
                   jQuery(".fixtures_widget.allfixtures").css("display", "inherit");
              }
              else{
              teamfixtureWrapper(allTeamFixturesarr,ftype,pageName);
              console.log(allTeamFixturesarr);
             jQuery(".fixtures_widget.allfixtures").css("display", "inherit");
         }
          }
          else if( ftype == "resultteam"){
                             jQuery(".fixtures_widget.recentmatchsblock").css("display", "none");
              if(jQuery(".fixturesCard").length){
                  jQuery(".fixturesCard").remove();
              }
            
              
              if(allTeamResultsarr.length==0){
                 
                   loadAllTeamFixtures(teamID,ftype,'0',pageName);
                   jQuery(".fixtures_widget.allfixtures").css("display", "inherit");
              }
              else{
              teamfixtureWrapper(allTeamResultsarr,ftype,pageName);
             jQuery(".fixtures_widget.allfixtures").css("display", "inherit");
         }
          }
          else{
               jQuery(".fixtures_widget.allfixtures").css("display", "none");
               jQuery(".fixtures_widget.recentmatchsblock").css("display", "inherit");
          }
          
         //console.log(ftype);

  });
  
  function loadAllFixtures(leagueIDs,ftype,pageName){
     
        // if(jQuery(this).find(".collpsable").hasClass("closed")){
         leagueID = leagueIDs;
        //console.log(leagueID);
        //jQuery(this).find(".collpsable").
        //}


        jQuery.ajax({
            beforeSend: function (request) {
                request.setRequestHeader("Authorization", "Bearer " + getCookie("apiToken") + "'");
            },
            dataType: "json",
            url: '//sc.score24.com/scorecenter/api/stats/v2/fixtures/league.json?partner=5score&subjectId=' + leagueID,
            success: function (data) {
//                        
//jQuery.each(data, function (key, data1) {
//    console.log(key)
//   jQuery.each(data1, function (index, data2) {
//        console.log('index', data2.eventName);
//    });
//});
                allFixturesarr=data["events"];
                
                fixtureWrapper(allFixturesarr,ftype,pageName);
                //console.log(allFixturesarr.length);

            }
        });

  }
  
    function loadAllTeamFixtures(teamIDs,ftype,offset,pageName){
     
        // if(jQuery(this).find(".collpsable").hasClass("closed")){
         teamID = teamIDs;
        //console.log(leagueID);
        //jQuery(this).find(".collpsable").
        //}


        jQuery.ajax({
            beforeSend: function (request) {
                request.setRequestHeader("Authorization", "Bearer " + getCookie("apiToken") + "'");
            },
            dataType: "json",
            url: '//sc.score24.com/scorecenter/api/stats/v2/fixtures/participant.json?partner=5score&subjectId=0&participant='+teamID+'&offset='+offset,
            success: function (data) {
//                        
//jQuery.each(data, function (key, data1) {
//    console.log(key)
//   jQuery.each(data1, function (index, data2) {
//        console.log('index', data2.eventName);
//    });
//});
                if(offset == "0"){
                     allTeamResultsarr=data["participants"][0]['events'];
               // console.log(allTeamFixturesarr);
                
                teamfixtureWrapper(allTeamResultsarr,ftype,pageName);
                }
                else{
                     allTeamFixturesarr=data["participants"][0]['events'];
               // console.log(allTeamFixturesarr);
                
                teamfixtureWrapper(allTeamFixturesarr,ftype,pageName);
                }
               
                //console.log(allTeamFixturesarr.length);

            }
        });

  }
  
  function fixtureWrapper(dataArray,ftype,pageName){
                      allFixturesContainer = jQuery(" <div class='fixturesCard'></div>");

                jQuery.each(dataArray, function (index, data2) {
                    //console.log('index', data2.eventName);
                   leagueName= data2.league;
                    leagueName = leagueName.replace(/\s+/g, '-');
                    homeTeamUrl=data2.homeName.replace(' ', ',');
                                homeTeamUrl=homeTeamUrl.replace('-', ',');
                                 homeTeamUrl=homeTeamUrl.replace('/', ',');
                                awayTeamUrl=data2.awayName.replace(' ', ',');
                                awayTeamUrl=awayTeamUrl.replace('-', ',');
                                awayTeamUrl=awayTeamUrl.replace('/', ',');
                   link = "/"+pageName+"/" +homeTeamUrl+"-"+awayTeamUrl+ "/" + leagueName + "/" + data2.leagueId + "/"+data2.id;
                    if (data2.status == "CLOSED" && ftype =="result") {
                    //console.log("inclosed");
                    eventDate = data2.date;
                    eventDate = eventDate.split(" ");
                         fixtureCardMain = jQuery(" <div class='game-card_container'></div>");
                        fixtureCard = jQuery("  <div class='drawer-container'>" +
                                " <a class='game-card_game_card_link' href='"+link+"'>" +
                                "<div class='date'>" + eventDate[0] + "</div>" +
                                "<div class='ellipsis game-card-competitor'>" + data2.homeName + "</div>" +
                                "<img alt title src='https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/" + data2.homeId + ".png' class='game-card-competitor_logo homeTeam_logo' />" +
                                " <div class='game-card-top_view'>Final</div>" +
                                "<div class='game-card-center_center_score'>" +
                                "<div class='game-score_competitor_score_container'>" + data2.homeScore + "</div>" +
                                "<div class='game-card-center_score_divider'>-</div>" +
                                "<div class='game-score_competitor_score_container  game-score_away_competitor_score_container'>" + data2.awayScore + "</div>" +
                                " </div>" +
                                "<img alt title src='https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/" + data2.awayId + ".png' class='game-card-competitor_logo awayTeam_logo' />" +
                                "<div class='ellipsis game-card-competitor awayTeam_name'>" + data2.awayName + "</div>" +
                                "</a></div> ");
                        fixtureCardMain.append(fixtureCard);
                        allFixturesContainer = allFixturesContainer.append(fixtureCardMain);
                    } else if(ftype =="all" && data2.status == "NOT_STARTED"){
                        //console.log("in allfixtures");
                         eventDate = data2.date;
                    eventDate = eventDate.split(" ");
                         fixtureCardMain = jQuery(" <div class='game-card_container'></div>");
                        fixtureCard = jQuery("  <div class='drawer-container'>" +
                                " <a class='game-card_game_card_link' href='"+link+"'>" +
                                "<div class='date'>" + eventDate[0] + "</div>" +
                                "<div class='ellipsis game-card-competitor'>" + data2.homeName + "</div>" +
                                "<img alt title src='https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/" + data2.homeId + ".png' class='game-card-competitor_logo homeTeam_logo' />" +
                                " <div class='game-card-center_center_score'>" + eventDate[1] + "</div>" +
                                "<img alt title src='https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/" + data2.awayId + ".png' class='game-card-competitor_logo awayTeam_logo' />" +
                                "<div class='ellipsis game-card-competitor awayTeam_name'>" + data2.awayName + "</div>" +
                                "</a></div> ");
                        fixtureCardMain.append(fixtureCard);
                        allFixturesContainer = allFixturesContainer.append(fixtureCardMain);
                    }

                    //allFixturesContainer = allFixturesContainer.append(fixtureCardMain);
                });

                jQuery(".fixtures_widget.allfixtures").append(allFixturesContainer);
                //console.log(data["events"]);
  }
    
      function teamfixtureWrapper(dataArray,ftype,pageName){
                      allFixturesContainer = jQuery(" <div class='fixturesCard'></div>");

                jQuery.each(dataArray, function (index, data2) {
                    //console.log('index', data2.eventName);
                   leagueName= data2.league;
                    leagueName = leagueName.replace(/\s+/g, '-');
                    homeTeamUrl=data2.homeName.replace(' ', ',');
                                homeTeamUrl=homeTeamUrl.replace('-', ',');
                                 homeTeamUrl=homeTeamUrl.replace('/', ',');
                                awayTeamUrl=data2.awayName.replace(' ', ',');
                                awayTeamUrl=awayTeamUrl.replace('-', ',');
                                awayTeamUrl=awayTeamUrl.replace('/', ',');
                   link = "/"+pageName+"/" +homeTeamUrl+"-"+awayTeamUrl+  "/" + leagueName + "/" + data2.leagueId + "/"+data2.id;
                    if (data2.status == "CLOSED" && ftype =="resultteam") {
                    //console.log("inclosed");
                    eventDate = data2.date;
                    eventDate = eventDate.split(" ");
                         fixtureCardMain = jQuery(" <div class='game-card_container'></div>");
                         fixtureCardHeading =jQuery(" <div class='team-league-heading-wrapper'><div class='team-league-heading'>"+data2['league']+"</div></div>");
                        fixtureCard = jQuery("  <div class='drawer-container'>" +
                                " <a class='game-card_game_card_link' href='"+link+"'>" +
                                "<div class='date'>" + eventDate[0] + "</div>" +
                                "<div class='ellipsis game-card-competitor'>" + data2.homeName + "</div>" +
                                "<img alt title src='https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/" + data2.homeId + ".png' class='game-card-competitor_logo homeTeam_logo' />" +
                                " <div class='game-card-top_view'>Final</div>" +
                                "<div class='game-card-center_center_score'>" +
                                "<div class='game-score_competitor_score_container'>" + data2.homeScore + "</div>" +
                                "<div class='game-card-center_score_divider'>-</div>" +
                                "<div class='game-score_competitor_score_container  game-score_away_competitor_score_container'>" + data2.awayScore + "</div>" +
                                " </div>" +
                                "<img alt title src='https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/" + data2.awayId + ".png' class='game-card-competitor_logo awayTeam_logo' />" +
                                "<div class='ellipsis game-card-competitor awayTeam_name'>" + data2.awayName + "</div>" +
                                "</a></div> ");
                        allFixturesContainer=allFixturesContainer.append(fixtureCardHeading);
                        fixtureCardMain.append(fixtureCard);
                        allFixturesContainer = allFixturesContainer.append(fixtureCardMain);
                    } else if(ftype =="allFixturesteam" && data2.status == "NOT_STARTED"){
                        //console.log("in allfixtures");
                         eventDate = data2.date;
                    eventDate = eventDate.split(" ");
                         fixtureCardMain = jQuery(" <div class='game-card_container'></div>");
                         fixtureCardHeading =jQuery(" <div class='team-league-heading-wrapper'><div class='team-league-heading'>"+data2['league']+"</div></div>");
                        fixtureCard = jQuery("  <div class='drawer-container'>" +
                                " <a class='game-card_game_card_link' href='"+link+"'>" +
                                "<div class='date'>" + eventDate[0] + "</div>" +
                                "<div class='ellipsis game-card-competitor'>" + data2.homeName + "</div>" +
                                "<img alt title src='https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/" + data2.homeId + ".png' class='game-card-competitor_logo homeTeam_logo' />" +
                                " <div class='game-card-center_center_score'>" + eventDate[1] + "</div>" +
                                "<img alt title src='https://d32w7lk5b0fi14.cloudfront.net/scorecenter/images/team-logo/60x60/" + data2.awayId + ".png' class='game-card-competitor_logo awayTeam_logo' />" +
                                "<div class='ellipsis game-card-competitor awayTeam_name'>" + data2.awayName + "</div>" +
                                "</a></div> ");
                         allFixturesContainer=allFixturesContainer.append(fixtureCardHeading);
                        fixtureCardMain.append(fixtureCard);
                        allFixturesContainer = allFixturesContainer.append(fixtureCardMain);
                    }

                    //allFixturesContainer = allFixturesContainer.append(fixtureCardMain);
                });

                jQuery(".fixtures_widget.allfixtures").append(allFixturesContainer);
                //console.log(data["events"]);
  }

  jQuery(document).on("click", 'img.favourite', function(event) {
             var _favId = jQuery(this).attr("id");
             var sportId = jQuery(this).data("sportid");
             //console.log(sportId);
            var _linkId = _favId.replace("fav_", "");
            var eventId = _favId.split('_')[2];
             var countryId = jQuery(this).data("countryid");
            var eventName = jQuery(this).data("leaguename");
              var countryName = jQuery(this).data("countryname");
            var href = jQuery('#'+_linkId).attr("href");
            //console.log(eventName); 
            //var countryURL = options.countriesFlagURL + '/' + countryId+ '.gif';
                    
                    
              var favouriteClasses = jQuery(this).attr("class");
              //console.log(favouriteClasses);
              if (favouriteClasses.includes("fav-selected")) {
                // removing favourite selection in the leagues list (top and country league)
                jQuery("#fav_top_" + eventId).removeClass("fav-selected");
                jQuery("#fav_country_" + eventId).removeClass("fav-selected");
                jQuery("#fav_league_" + eventId).removeClass("fav-selected");
                // removing li from my-leagues section
                  jQuery(this).attr("src", "/wp-content/themes/spacious/images/staricon.svg");
                 //jQuery(this).attr("src", "/fivescore/wp-content/themes/spacious/images/staricon.svg");
                
                jQuery('#fav_'+eventId).remove();
                // removing id from cookie
                removeIdFromCookie(eventId,sportId);
            } else {
                // adding leagueId to cookie
                var isNew = addIdToCookie(eventId,sportId);
                if (isNew) {
                    // adding favourite selection in the leagues list (top and country league)
                    jQuery("#fav_top_" + eventId).addClass("fav-selected");
                    jQuery("#fav_country_" + eventId).addClass("fav-selected");
                    jQuery("#fav_league_" + eventId).addClass("fav-selected");

                    jQuery(this).attr("src", "/wp-content/themes/spacious/images/starmarked.svg");
                    //jQuery(this).attr("src", "/fivescore/wp-content/themes/spacious/images/starmarked.svg");
                    // adding league to my leagues section
//                    var myGame = '<li id="fav_' + eventId + '" class="list-group-item">'
//                        + '<a rel="nofollow" class="leagues_link t_leagues_link" href="' + href + '" title="' + eventName + '">'
//                        + '<img width="19" src="' + countryURL + '" alt=""/><span class="league-name">' + eventName + '</span>'
//                        + '</a><i class="fas fa-star fav-selected fav-removed" event-id="' + eventId + '"></li>';
//                    $("#my-leagues").append(myGame);
                    var leaguecard=jQuery("  <div class='top-league-link-wrapper' id='fav_"+eventId+"'>" +
                                        "<a class='top-league-detail-link' href='"+href+"'>"+
                                        "<div class='entity-details_container'>"+
                                        "<div class='s24-medals-data-icon s24-country-icon-"+countryId+"'></div>"+
                                        "<div class='entity-details_competitor_and_country'>"+
                                        "<div class='entity-details_content bold'>"+eventName+"</div>"+
                                        "<div class='entity-details_country_name'>"+countryName+"</div>"+
                                        "</div></div></a>"+
                                        "<div class='mini-drawer' style='width: 32px; right: 0;'>"+
                                        "<div> <img class='fav-removed fav-selected' data-sportid='"+sportId+"' event-id='"+eventId+"' width='16' height='16' alt='' title=''  decoding='async' style='visibility: visible;' src='/wp-content/themes/spacious/images/starmarked.svg' /></div></div></div>");
                                
                                jQuery(".fav-league-container .top-league-container").append(leaguecard);
                                
                }
            }

        });
                // use to remove league from my-leagues section
                  jQuery(document).on("click", 'img.fav-removed', function(event) {
           // jQuery(this).parent().parent().parent().remove();
            //console.log("hello");
             var sportId = jQuery(this).data("sportid");
            var eventId = jQuery(this).attr("event-id");
            jQuery("img#fav_top_" + eventId).removeClass("fav-selected");
            jQuery("img#fav_country_" + eventId).removeClass("fav-selected");
            jQuery("img#fav_league_" + eventId).removeClass("fav-selected");
            jQuery("#fav_top_" + eventId).attr("src", "/wp-content/themes/spacious/images/staricon.svg");
            jQuery("#fav_country_" + eventId).attr("src", "/wp-content/themes/spacious/images/staricon.svg");
            jQuery("#fav_league_" + eventId).attr("src", "/wp-content/themes/spacious/images/staricon.svg");
            removeIdFromCookie(eventId,sportId);
            jQuery('#fav_'+eventId).remove();
        });
//console.log(getCookie("apiToken"));
function addIdToCookie(id,sportid){
     var sportId = sportid;
        var gameIdWithSport = id + "_" + sportId;
        var rawCookieValue = Cookies.get(MY_LEAGUES_COOKIE_NAME);  // reading cookie
        rawCookieValue = rawCookieValue == undefined ? "" : rawCookieValue;
        var gameIds = rawCookieValue.split(",");
        var isNew = true;
        for (k = 0; k < gameIds.length; k++) {
            if (gameIds[k] == gameIdWithSport) {
                isNew = false;
            }
        }
        if (isNew) {
            rawCookieValue += (rawCookieValue == '' ? "" : ",") + gameIdWithSport;
            Cookies.set(MY_LEAGUES_COOKIE_NAME, rawCookieValue, {path: '/'});
        }
        return isNew;
}
function removeIdFromCookie(id,sportid){
    var sportId = sportid;
        var gameIdWithSport = id + "_" + sportId;
        var rawCookieValue = Cookies.get(MY_LEAGUES_COOKIE_NAME);  // reading cookie
        if (rawCookieValue != null && rawCookieValue != "") {
            var gameIds = rawCookieValue.split(",");
            var newCookieValue = '';
            for (l = 0; l < gameIds.length; l++) {
                if (gameIds[l] != gameIdWithSport) {
                    newCookieValue += (newCookieValue == '' ? "" : ",") + gameIds[l];
                }
            }
            Cookies.set(MY_LEAGUES_COOKIE_NAME, newCookieValue, {path: '/'});
        }
}
});



/*
 * Cookies management functions
 * */
/*********************************************************
 gets the value of a cookie
 **********************************************************/
function getCookie(sName) {
    sName = sName.toLowerCase();
    var oCrumbles = document.cookie.split(';');
    for (var i = 0; i < oCrumbles.length; i++) {
        var oPair = oCrumbles[i].split('=');
        var sKey = decodeURIComponent(oPair[0].trim().toLowerCase());
        if (sKey == sName) {
            var sValue = oPair.length > 1 ? oPair[1] : '';
            return decodeURIComponent(sValue);
        }
    }
    return '';
}
/*********************************************************
 sets the value of a cookie
 **********************************************************/
function setCookie(sName, sValue, path, expire, domain, secure) {
    var oDate = new Date();
    oDate.setTime(oDate.getTime() + (2 * 24 * 60 * 60 * 1000)); // 2 days expiry by default
    var sCookie = encodeURIComponent(sName) + '=' + encodeURIComponent(sValue)
    sCookie += (expire) ? ("; expires=" + expire.toUTCString()) : "; expires=" + oDate.toUTCString();
    sCookie += (domain) ? ("; domain=" + domain) : "";
    sCookie += (path) ? ("; path=" + path) : "";
    sCookie += (secure) ? "; Secure" : "";
    document.cookie = sCookie;
}
/*********************************************************
 removes the value of a cookie
 **********************************************************/
function removeCookie(sName) {
    setCookie(sName, '');
}