var d, w, c;
w = document.getElementsByClassName('map-wrapper')[0];
d = document.getElementsByClassName('map-forms-wrapper')[0];
c = d.querySelector('.map-form-input .title');
f = d.querySelector('.map-form-output .title');
c.ondragstart = function(){
    return false;
};
f.ondragstart = function(){
    return false;
};
c.onmousedown = function(e) { 
        var shiftX, shiftY, coords;		
        shiftX = e.pageX - getCoords(d).left;
        shiftY = e.pageY - getCoords(d).top;  
        moveAt(e);
        function moveAt(e) {
            d.style.left = e.pageX - shiftX+'px';
            d.style.top = e.pageY - shiftY+'px';
        };  
        w.onmousemove = function(e) {
            moveAt(e);
        };  
        c.onmouseup = function() {
            w.onmousemove = null;
            c.onmouseup = null;
        };
};
f.onmousedown = function(e) { 
        var shiftX, shiftY, coords;		
        shiftX = e.pageX - getCoords(d).left;
        shiftY = e.pageY - getCoords(d).top;  
        moveAt(e);
        function moveAt(e) {
            d.style.left = e.pageX - shiftX+'px';
            d.style.top = e.pageY - shiftY+'px';
        };  
        w.onmousemove = function(e) {
            moveAt(e);
        };  
        f.onmouseup = function() {
        w.onmousemove = null;
        f.onmouseup = null;
        };
};
function getCoords(elem) { // кроме IE8-
        var box = elem.getBoundingClientRect();
        return {
                top: box.top + pageYOffset,
                left: box.left + pageXOffset
        };
};