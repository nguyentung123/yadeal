// Custom Ultilities Functions
let contextFadeIn = ($containerBlock = null, callback = null, additionalElement = [], speed = 0.55, stagger=0.275 ) => {
    console.log('context fade in was called');
    if($containerBlock != null){
        let $title = $containerBlock.find('.feature-title');
        let $subTitle = $containerBlock.find('.feature-sub-title');
        let $detail = $containerBlock.find('.feature-content');
        let $line = $containerBlock.find('.grad-line');

        return TweenMax.to([$title, $subTitle, $detail, $line, ...additionalElement],
            speed,
            { opacity: 1, y: 0, x: 0, scaleX: 1, onComplete: callback });
    } else {
        return TweenMax.to([...additionalElement],
            speed,
            { opacity: 1, y: 0, x: 0, scaleX: 1, onComplete: callback });
    }
}


let reachSection = ($target = null) => {
    if($target.offset().top > 0){
        if( window.pageYOffset > $target.offset().top - window.innerHeight / 1.5 &&
            window.pageYOffset < $target.offset().top + window.innerHeight / 2){
            return true;
        } else {
            return false;
        }
    }
    return false;
}

let contextInit = ($containerBlock = null, additionalElement = []) => {
    if($containerBlock != null){
        let $title = $containerBlock.find('.feature-title');
        let $subTitle = $containerBlock.find('.feature-sub-title');
        let $detail = $containerBlock.find('.feature-content');
        let $line = $containerBlock.find('.grad-line');

        TweenMax.set([$title, $subTitle, $detail, ...additionalElement],
            {opacity: 0});

        TweenMax.set($line, {opacity: 0, y: 0, scaleX: 0, transformOrigin: '0% 50%'});
    }
}

// Custom Event Listener
function pageListener() {
    this.events = {};
}

pageListener.prototype.on = function(eventType, listener) {
    // If the eventType Property not exist yet, create an empty aray of that property
    this.events[eventType] = this.events[eventType] || [];
    this.events[eventType].push(listener);
};

pageListener.prototype.emit = function(eventType) {
    // Loop through the events[eventType] array of function and invoke each of them
    this.events[eventType].forEach( function(item) {
        item();
    });
}


export { contextFadeIn, contextInit, reachSection, pageListener };