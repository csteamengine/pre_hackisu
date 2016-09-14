$(document).ready(function(){

    $("#showPig").click(function(){
        $("#pig").show();
    });

    $("#hidePig").click(function(){
        $("#pig").hide();
    });

    $("#fadePig").click(function(){
        $("#pig").fadeOut();
    });

    $("#flyPig").click(function(){
        $("#pig").slideUp();

    });

    $("#zoomPig").click(function(){
        $("#pig").width("500px");
        $("#pig").height("500px");
    });

});
