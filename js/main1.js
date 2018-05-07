 
    // code by <a class="vglnk" href="http://www.voidcanvas.com" rel="nofollow"><span>www</span><span>.</span><span>voidcanvas</span><span>.</span><span>com</span></a>
    var textDiv = $("#ssn-text");
    var sentence = textDiv.html().split("");
    var vcTimeline = new TimelineMax({
        repeat : 1,
        repeatDelay : 0.4,
        yoyo : true
    });
 
    textDiv.html("");
 
    $.each(sentence, function(index, val) {
        if (val == " ") {
            val = " ";
        }
        var letter = $("", {
            id : "txt" + index
        }).html(val).appendTo(textDiv);
        vcTimeline.to(letter, 1, {
            rotationY : 360,
            rotationX : 360,
            textShadow : "0px 0px 0px blue",
            color : "none",
            autoAlpha : 1,
            ease : Back.easeOut,
            transformOrigin : "50% 50% -20"
        }, index * 0.05);
    });
 
});