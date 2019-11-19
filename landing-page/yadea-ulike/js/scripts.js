import Common from './modules/common';
import Home from './modules/home';

$(document).ready(function() {
    // Behavior for page-wrapper with ID = "home-page"
    if($('#yadea-ulike-page').length > 0){
        let home = new Home();
    }
});