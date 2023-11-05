<script src="{{asset('/')}}/front-end-assets//js/jquery-3.6.3.min.js"></script>
<script src="{{asset('/')}}/front-end-assets//js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}/front-end-assets//js/owl.carousel.js"></script>
<script>
    function validate(){
        var name= document.getElementById('reviewerName').value;
        var comment = document.getElementById('comment').value;

        if (name == '' || comment == ''){
            alert('Name or Comment cannot be Null!!');
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
