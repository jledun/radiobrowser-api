<?php
require 'db.php';

if (isset($_REQUEST['action'])) {
    openDB();
    if ($_REQUEST['action'] == 'tags') {
        print_tags($_REQUEST['term']);
    }
    if ($_REQUEST['action'] == 'countries') {
        print_countries($_REQUEST['term']);
    }
    if ($_REQUEST['action'] == 'states') {
        print_states($_REQUEST['term']);
    }
    if ($_REQUEST['action'] == 'languages') {
        print_languages($_REQUEST['term']);
    }
    if ($_REQUEST['action'] == 'stats') {
        print_stats();
    }
    if ($_REQUEST['action'] == 'data_search_topvote') {
        print_stations_top_vote_data();
    }
    if ($_REQUEST['action'] == 'data_search_topclick') {
        print_stations_top_click_data();
    }
    if ($_REQUEST['action'] == 'data_search_lastclick') {
        print_stations_last_click_data();
    }
    if ($_REQUEST['action'] == 'data_search_lastchange') {
        print_stations_last_change_data();
    }
    if ($_REQUEST['action'] == 'data_search') {
        print_stations_list_data('Name');
    }
    if ($_REQUEST['action'] == 'data_search_name') {
        print_stations_list_data('Name');
    }
    if ($_REQUEST['action'] == 'data_search_name_exact') {
        print_stations_list_data_exact('Name',false);
    }
    if ($_REQUEST['action'] == 'data_search_bycountry') {
        print_stations_list_data('Country');
    }
    if ($_REQUEST['action'] == 'data_search_bycountry_exact') {
        print_stations_list_data_exact('Country', false);
    }
    if ($_REQUEST['action'] == 'data_search_bylanguage') {
        print_stations_list_data('Language');
    }
    if ($_REQUEST['action'] == 'data_search_bylanguage_exact') {
        print_stations_list_data_exact('Language', false);
    }
    if ($_REQUEST['action'] == 'data_search_bytag') {
        print_stations_list_data('Tags');
    }
    if ($_REQUEST['action'] == 'data_search_bytag_exact') {
        print_stations_list_data_exact('Tags', true);
    }
    if ($_REQUEST['action'] == 'data_search_byid') {
        print_stations_list_data_exact('StationID', false);
    }

    if ($_REQUEST['action'] == 'add') {
        addStation($_REQUEST['name'], $_REQUEST['url'], $_REQUEST['homepage'], $_REQUEST['favicon'], $_REQUEST['country'], $_REQUEST['language'], $_REQUEST['tags'], $_REQUEST['subcountry']);
    }
    if ($_REQUEST['action'] == 'edit') {
        editStation($_REQUEST['stationid'], $_REQUEST['name'], $_REQUEST['url'], $_REQUEST['homepage'], $_REQUEST['favicon'], $_REQUEST['country'], $_REQUEST['language'], $_REQUEST['tags'], $_REQUEST['subcountry']);
    }
    if ($_REQUEST['action'] == 'delete') {
        echo 'delete:'.$_REQUEST['stationid'];
        deleteStation($_REQUEST['stationid']);
    }
    if ($_REQUEST['action'] == 'vote') {
        voteForStation($_REQUEST['id']);
    }
    if ($_REQUEST['action'] == 'negativevote') {
        negativeVoteForStation($_REQUEST['id']);
    }
    if ($_REQUEST['action'] == 'clicked') {
        if (isset($_REQUEST['id'])) {
            clickedStationID($_REQUEST['id']);
        }
    }
} else {
    ?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="refresh" content="0; URL=http://www.radio-browser.info/gui/">
		<meta charset="utf-8">
		<title>Community Radio Station Board</title>
	</head>
	<body>
	</body>
</html>
<?php

}
?>
