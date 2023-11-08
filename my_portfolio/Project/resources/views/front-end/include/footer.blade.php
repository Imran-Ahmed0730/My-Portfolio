<div class="container">
    <footer class="footer p-3 pt-4">
        <div class="row" id="contact">
            <div class="col-md-3 mb-5 quick-link">
                <h2 class="mb-3">Quick Links</h2>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact Me</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-5">
                <h2 class="mb-3">Contact Me</h2>
                <div class="direct-contact">
                    <p><span ><i class="bi bi-envelope-fill"></i></span> i.ahmed0730@gmail.com</p>
                    <p><span><i class="bi bi-telephone-fill"></i></span> +8801620132642</p>
                </div>
                <p class="virtual_contact">
                    <span class=""><a href="https://www.facebook.com/profile.php?id=100015296888300" target="_blank" class="btn" title="Facebook"><i class="bi bi-facebook"></i></a></span>
                    <span class="mx-3"><a href="https://www.linkedin.com/in/imran-ahmed-aa7b2b1ab" target="_blank"  class="btn" title="Linkedin"><i class="bi bi-linkedin"></i></a></span>
                    <span class=""><a href="https://github.com/Imran-Ahmed0730" class="btn" target="_blank" title="Github"><i class="bi bi-github"></i></a></span>
                </p>
                <a href="{{asset('front-end-assets')}}/Imran Ahmed Cv.pdf" class="cv btn">Download CV</a>
            </div>
            <div class="col-md-5 msg-form mb-5">
                <h2 class="mb-3">Message Me</h2>
                <form action="{{route('message')}}" method="post" onsubmit="return validateMessage()">
                    @csrf
                    <div class="form-group row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="message_name" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="message" class="col-sm-2 col-form-label">Your Message</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="message" rows="5" id="massage" placeholder="Your Message"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="message" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="sub-btn btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p align="center" class="copyright">Designed By Imran Ahmed | Copyright &copy 2023. All Rights Are Reserved</p>
            </div>
        </div>
    </footer>
</div>
