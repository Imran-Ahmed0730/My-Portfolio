<script src="{{asset('/')}}/front-end-assets//js/jquery-3.6.3.min.js"></script>
<script src="{{asset('/')}}/front-end-assets//js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}/front-end-assets//js/owl.carousel.js"></script>
<script>
    function hide() {
        var x = document.getElementById("comments");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

</script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
    });
</script>
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script>
