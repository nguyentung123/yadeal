import Home from './modules/home';
import LazyLoadImage from "./modules/lazy-load";

// Run Lazy Load Image Function First
LazyLoadImage();
$(document).ready(function() {
    var demo = new Home();
});