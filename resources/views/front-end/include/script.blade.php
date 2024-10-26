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
            // alert('Your Message Has been Sent Successfully!!');
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
<script src="https://www.google.com/recaptcha/api.js?render={{config('services.recaptcha.site_key')}}"></script>
<script>
    function onMessageSubmit(token) {
        document.getElementById('messageForm').submit();
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "5000",
    }

    @if (session('success'))
    toastr.success("{{ session('success') }}");
    @endif

    @if (session('error'))
    toastr.error("{{ session('error') }}");
    @endif

    @if (session('info'))
    toastr.info("{{ session('info') }}");
    @endif

    @if (session('warning'))
    toastr.warning("{{ session('warning') }}");
    @endif
</script>
@stack('js')
