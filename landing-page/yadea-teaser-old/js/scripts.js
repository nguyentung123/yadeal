import Common from './modules/common';
import Home from './modules/home';
import Clock from './modules/clock';

$(document).ready(function() {
    // Behavior Use For All Page
    let common = new Common();

    // Behavior for page-wrapper with ID = "home-page"
    if($('#yadea-teaser-page').length > 0){
        let home = new Home();
    }

    if($('#countdown-clock').length > 0){
        let clock = new Clock();
    }
});