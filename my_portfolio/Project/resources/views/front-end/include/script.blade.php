<script src="{{asset('/')}}/front-end-assets//js/jquery-3.6.3.min.js"></script>
<script src="{{asset('/')}}/front-end-assets//js/owl.carousel.js"></script>
<script src="{{asset('/')}}/front-end-assets//js/bootstrap.bundle.min.js"></script>
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
                items:4
            }
        }
    })
</script>
<script>
    function validate(){
        var name= document.getElementById('reviewerName').value;
        var comment = document.getElementById('comment').value;
        var project = document.getElementById('projectId').value;

        if (name == '' || comment == ''){
            alert('Name or Comment cannot be Null!!');
            return false;
        }
        if (project == ''){
            alert('Please Select A Project!!');
            return false;
        }
        else {
            alert('Your Comment Posted Successfully!!');
            return true;
        }
    }
</script>
<script>
    function validateMessage(){
        var name = document.getElementById('message_name').value;
        var message = document.getElementById('massage').value;

        if (name == '' || message == ''){
            alert('Name or Message cannot be Null!!');
            return false;
        }
        else {
            alert('Your Message Has been Sent Successfully!!');
            return true;
        }
    }
</script>
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
