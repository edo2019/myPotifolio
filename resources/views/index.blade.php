@extends('layouts.app')

@section ('content')





    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Who am I ?</h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3">A Web and App Designer  / Developer Located In Dodoma Tanzania</h5>
                <p class="mt-20">I design and develop websites and mobile applications that are both visually 
                    appealing and incredibly useful. I'm able to develop seamless user experiences that support 
                    your company's goals due to my design and technical implementation abilities. I deliver
                     cutting-edge digital solutions for your online presence by integrating creativity, problem-solving, and current knowledge.</p>
                <button class="btn btn-outline-danger"><i class="icon-down-circled2 "></i>Download My CV</button>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Personal Info</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Born</span> : Iringa, Tanzania</li>
                    <li><span>Lives</span> : Dodoma, Tanzania</li>
                    <li><span>Nick name</span> : Edo</li>
                    <li><span>Email</span> : edwardyosphat@gmail.com</li>
                    <li><span>Phone</span> : 0767828365</li>
                    <li><span>Instagram </span> : EddoKafuka.jr </li>
                    <li><span>Address</span> :  Dodoma cbd</li>
                </ul>
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link" href="https://getbootstrap.com/docs/4.3/getting-started/download/"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                </ul>  
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">My Expertise</h3>
                <span class="line mb-5"></span>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>UX Design</h6>
                        <p class="subtitle"> I have a solid background in UX design, enabling me to develop simple,
                             user-friendly interfaces that improve the user experience as a whole. My ability to 
                             fully understand the needs and desires of customers allows me to design attractive and 
                             effective digital products.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Web Development</h6>
                        <p class="subtitle">I can create powerful and dynamic websites according to my strong web
                             development talents. I can develop high-quality, functional, and visually attractive 
                             web solutions because to my skills in programming languages and frameworks.</p>
                        <hr>
                    </div>
                </div>

               
                </div>
            </div>
        </div>
    </div>

   @endsection