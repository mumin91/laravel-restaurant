 $(document).ready(function(){
    $("#maincarousel").carousel( { interval: 3500 } );
    $("#carousel-button").click(function(){
        if ($("#carousel-button").children("span").hasClass("fa-pause")) {
            $("#maincarousel").carousel('pause');
            $("#carousel-button").children("span").removeClass("fa-pause");
            $("#carousel-button").children("span").addClass("fa-play");
        }
        else if ($("#carousel-button").children("span").hasClass("fa-play")) {
            $("#maincarousel").carousel('cycle');
            $("#carousel-button").children("span").addClass("fa-pause");
            $("#carousel-button").children("span").removeClass("fa-play");
        }
    });

    $("#loginModalButton").click(function() {
        $("#loginModal").modal();
    });

    $("#reserveModalButton").click(function() {
        $("#reserveModal").modal();
    });
});