
    $(document).on("scroll" , function (){
        if($(document).scrollTop()>200){
            $("div.navigation").addClass("navbar-fixed-top");
        } else {
            $("div.navigation").removeClass("navbar-fixed-top");
        }
    });


    $(function() {
        $('#main-menu').smartmenus({
            subMenusSubOffsetX: 1,
            subMenusSubOffsetY: -20
        });
    });


    $(document).ready(function() {
        $("#test-carousel").owlCarousel({
            navigation : true, // Show next and prev buttons
            navigationText: ["<i class='fa fa-angle-left' style='color:red'></i>","<i class='fa fa-angle-right' style='color:red'></i>"],
            slideSpeed : 300,
            paginationSpeed : 400,
            pagination: false,
            singleItem:true,
            autoPlay: true,
            stopOnHover: true
        });

    });
