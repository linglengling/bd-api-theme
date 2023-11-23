<?php

//require_once "C:/xampp/htdocs/fivescore/wp-content/guzzle/vendor/autoload.php";  
//$client = new \GuzzleHttp\Client();
//session_start();
/**
 * Template Name: Football API
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script
    type="module"
    src="https://widgets.api-sports.io/2.0.3/widgets.js">
</script>
<!-- <script
type="module"
src="https://widgets.api-sports.io/football/1.1.8/widget.js">
</script> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css"/>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/page-templates/football-widget/widgets.css">


<main>
    <div class="container page-container">
        <div class="row">

            <div class="main-left">
                <h2>PINNED LEAGUES</h2>
                <div class="pin-leagues">
                    <a href="#" class="_link active" data-season="<?php echo date('Y')?>" data-league=""><span></span> All League</a>
                    <a href="#" class="_link " data-season="<?php echo date('Y')?>" data-league="39"><span class="fi fi-gb-eng"></span> Premier League</a>
                    <a href="#" class="_link" data-season="<?php echo date('Y')?>" data-league="61"><span class="fi fi-fr"></span> Ligue 1</a>
                    <a href="#" class="_link" data-season="<?php echo date('Y')?>" data-league="78"><span class="fi fi-de"></span> Bundesliga</a>
                    <a href="#" class="_link" data-season="<?php echo date('Y')?>" data-league="135"><span class="fi fi-it"></span> Serie A</a>
                    <a href="#" class="_link" data-season="<?php echo date('Y')?>" data-league="140"><span class="fi fi-es"></span> Laliga</a>
                    <a href="#" class="_link" data-season="<?php echo date('Y')?>" data-league="4"><span class="fi fi-eu"></span> Euro</a>
                    <a href="#" class="_link" data-season="<?php echo date('Y')?>" data-league="4265"><span class="fi fi-eu"></span> World Cup</a>
                    <a href="#" class="_link" data-season="<?php echo date('Y')?>" data-league="2"><span class="fi fi-eu"></span> Champions League</a>
                    <a href="#" class="_link" data-season="<?php echo date('Y')?>" data-league="3"><span class="fi fi-eu"></span> Europa League</a>
                </div>
            </div>

            <div class="main-right">

                <!-- <div id="wg-api-football-fixtures"
                    data-host="v3.football.api-sports.io"
                    data-refresh="60"
                    data-date="<?php //echo date('Y-m-d') ?>"
                    data-key="51ba8ffa0ab79c0023b052e6b74d9feb"
                    data-theme="false"
                    data-league=""
                    data-show-toolbar="true"
                    data-season="<?php //echo date('Y') ?>"
                    data-show-errors="true"
                    class="api_football_loader">
                </div> -->

                <div class="main-football" style="width:100%">
                    <div id="wg-api-football-games"
                    data-host="v3.football.api-sports.io"
                    data-key="51ba8ffa0ab79c0023b052e6b74d9feb"
                    data-date=""
                    data-league=""
                    data-season=""
                    data-theme="false"
                    data-refresh="false"
                    data-show-toolbar="true"
                    data-show-errors="false"
                    data-show-logos="true"
                    data-modal-game="true"
                    data-modal-standings="true"
                    data-modal-show-logos="true">
                </div>
            </div>             
        </div>
    </div>
</main>

<script>
    document.addEventListener('click', function (event) {
        if (!event.target.matches('._link')) return
        event.preventDefault()
        // let cusid_ele = document.getElementsByClassName('_link');
        // cusid_ele.classList.remove("_link");
        const el = document.querySelector('._link')
        el.classList.remove("active")

        event.target.classList.add("active")

        let id = event.target.getAttribute('data-league')
        let season = event.target.getAttribute('data-season')

        let standings = document.getElementById('wg-api-football-games')
            standings.innerHTML = ''
            standings.setAttribute('data-league', id);
            standings.setAttribute('data-season', season);

        window.document.dispatchEvent(new Event("DOMContentLoaded", {
          bubbles: true,
          cancelable: true
        }));
    })
</script>



<style type="text/css">
    .main-left{
        width: 20%;
        padding-right: 15px;
    }
    .main-left h2{
        display: flex;
        margin: 0 0 12px 8px;
        padding-bottom: 8px;
        border-bottom: 1px solid rgba(0,20,30,.06);
        font-size: 13px;
        font-weight: 700;
        letter-spacing: .4px;
        overflow: hidden;
        text-overflow: ellipsis;
        text-transform: uppercase;
        white-space: nowrap;
        color: rgb(0,20,30);
    }
    .main-right{
        width: 80%;

    }
    .pin-leagues{

    }
    .pin-leagues a{
        align-items: center;
        display: flex;
        flex: 1;
        line-height: 19px;
        min-height: 25px;
        overflow: hidden;
        padding: 0 8px;
        text-decoration: none;
        color: #00141e;
        font-size: 13px;
    }
    .pin-leagues a span{
        background-size: 18px 13px;
        flex: 0 0 18px;
        height: 13px;
        margin-right: 8px;
        display: block;
    }
    .pin-leagues a.active{
        color: #1297BA;
        font-weight: bold;
        background: rgba(200,205,205,.3);
    }

    #wg-api-football-games img{
        margin: 0;
    }
</style>
<?php //get_sidebar('right'); ?>

<?php get_footer(); ?>
