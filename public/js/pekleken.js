jQuery(document).ready(function($) {

    $("#about-information").hide();

    $("#RandomQuestion").click(function() {
        $.post("/ajax/randomquestion", function(data) {
            $(".question").replaceWith(data);
        });
        
        
        return false;
    });

    $("#om-pekleken").click(function() {
        if($("#about-information").is(":visible")) {
            $("#about-information").slideUp(500);
        }
        else {
            $("#about-information").slideDown(500);
        }
        
        return false;
    });

});
