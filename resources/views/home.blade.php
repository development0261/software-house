@extends('layouts.app')
@section('title','Software House')
@section('content')
<section class="main_video_wrp">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="video_text_wrp">
                    <h1>We create <strong>ideas</strong><br>into real <strong>products</strong></h1>
                    <p>We make your ideas come to life with the latest technology and assured quality</p>
                    <a class="nav-link book_call_btn" href="#"><img src="{{ URL::asset('public/assets/images/call_btn_icon.png') }}" class="img-fluid"> Book a call</a>
                </div>
                <div class="client_logo">
                    <h2>Our beloved clients</h2>
                    <div class="client_logo_pic">
                        <img src="{{ URL::asset('public/assets/images/logo_square_1.png') }}" class="img-fluid">
                        <img src="{{ URL::asset('public/assets/images/logo_square_2.png') }}" class="img-fluid">
                        <img src="{{ URL::asset('public/assets/images/logo_square_3.png') }}" class="img-fluid">
                        <img src="{{ URL::asset('public/assets/images/logo_square_4.png') }}" class="img-fluid">  
                    </div>
                    <a href="#">See all 50+ clients</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="video_box_wrp">
                    <img src="{{ URL::asset('public/assets/images/video_bg.png') }}" class="img-fluid">
                    <button type="button" data-toggle="modal" data-target="#VideoPop"><img src="{{ URL::asset('public/assets/images/play_circle_filled.png') }}" class="img-fluid"></button>
                    <!-- Modal -->
                    <div class="modal fade VideoPopup" id="VideoPop" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-body p-0">
                              <iframe width="100%" height="500" src="https://www.youtube.com/embed/X7R-q9rsrtU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about_wrp">
    <div class="container p-0">
        <div class="title_heading">
            <div class="container">
                <h2>Client say about Us</h2>
            </div>
        </div>
        <div class="client_slider_wrp owl-carousel owl-theme">
            <div class="item">
                <div class="client_slider_item">
                    <img src="{{ URL::asset('public/assets/images/quotes.png') }}" class="img-fluid quotes_img">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.</p>
                    <div class="client_say">
                        <div class="client_say_img">
                            <img src="{{ URL::asset('public/assets/images/client_pic.png') }}" class="img-fluid">
                        </div>
                        <div class="client_say_desc">
                            <h3>Jessica Mey</h3>
                            <p>Jessica Mey</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="client_slider_item">
                    <img src="{{ URL::asset('public/assets/images/quotes.png') }}" class="img-fluid quotes_img">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.</p>
                    <div class="client_say">
                        <div class="client_say_img">
                            <img src="{{ URL::asset('public/assets/images/client_pic.png') }}" class="img-fluid">
                        </div>
                        <div class="client_say_desc">
                            <h3>Jessica Mey</h3>
                            <p>Jessica Mey</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="client_slider_item">
                    <img src="{{ URL::asset('public/assets/images/quotes.png') }}" class="img-fluid quotes_img">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.</p>
                    <div class="client_say">
                        <div class="client_say_img">
                            <img src="{{ URL::asset('public/assets/images/client_pic.png') }}" class="img-fluid">
                        </div>
                        <div class="client_say_desc">
                            <h3>Jessica Mey</h3>
                            <p>Jessica Mey</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="client_slider_item">
                    <img src="{{ URL::asset('public/assets/images/quotes.png') }}" class="img-fluid quotes_img">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.</p>
                    <div class="client_say">
                        <div class="client_say_img">
                            <img src="{{ URL::asset('public/assets/images/client_pic.png') }}" class="img-fluid">
                        </div>
                        <div class="client_say_desc">
                            <h3>Jessica Mey</h3>
                            <p>Jessica Mey</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="client_slider_item">
                    <img src="{{ URL::asset('public/assets/images/quotes.png') }}" class="img-fluid quotes_img">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.</p>
                    <div class="client_say">
                        <div class="client_say_img">
                            <img src="{{ URL::asset('public/assets/images/client_pic.png') }}" class="img-fluid">
                        </div>
                        <div class="client_say_desc">
                            <h3>Jessica Mey</h3>
                            <p>Jessica Mey</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="client_slider_item">
                    <img src="{{ URL::asset('public/assets/images/quotes.png') }}" class="img-fluid quotes_img">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.</p>
                    <div class="client_say">
                        <div class="client_say_img">
                            <img src="{{ URL::asset('public/assets/images/client_pic.png') }}" class="img-fluid">
                        </div>
                        <div class="client_say_desc">
                            <h3>Jessica Mey</h3>
                            <p>Jessica Mey</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="client_slider_item">
                    <img src="{{ URL::asset('public/assets/images/quotes.png') }}" class="img-fluid quotes_img">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.</p>
                    <div class="client_say">
                        <div class="client_say_img">
                            <img src="{{ URL::asset('public/assets/images/client_pic.png') }}" class="img-fluid">
                        </div>
                        <div class="client_say_desc">
                            <h3>Jessica Mey</h3>
                            <p>Jessica Mey</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="client_slider_item">
                    <img src="{{ URL::asset('public/assets/images/quotes.png') }}" class="img-fluid quotes_img">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.</p>
                    <div class="client_say">
                        <div class="client_say_img">
                            <img src="{{ URL::asset('public/assets/images/client_pic.png') }}" class="img-fluid">
                        </div>
                        <div class="client_say_desc">
                            <h3>Jessica Mey</h3>
                            <p>Jessica Mey</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="counter_wrp">
    <div class="container">
        <div class="counter_list">
            <div class="counter_item">
                <div class="counter_pic">
                    <img src="{{ URL::asset('public/assets/images/alarm_add.png') }}" class="img-fluid">
                </div>
                <div class="counter_desc">
                    <h3>10+</h3>
                    <p>Years in business</p>
                </div>
            </div>
            <div class="counter_item">
                <div class="counter_pic">
                    <img src="{{ URL::asset('public/assets/images/find_iphone.png') }}" class="img-fluid">
                </div>
                <div class="counter_desc">
                    <h3>15+</h3>
                    <p>Countries</p>
                </div>
            </div>
            <div class="counter_item">
                <div class="counter_pic">
                    <img src="{{ URL::asset('public/assets/images/men.png') }}" class="img-fluid">
                </div>
                <div class="counter_desc">
                    <h3>100+</h3>
                    <p>Employees</p>
                </div>
            </div>
            <div class="counter_item">
                <div class="counter_pic">
                    <img src="{{ URL::asset('public/assets/images/project.png') }}" class="img-fluid">
                </div>
                <div class="counter_desc">
                    <h3>450+</h3>
                    <p>Projects</p>
                </div>
            </div>
            <div class="counter_item">
                <div class="counter_pic">
                    <img src="{{ URL::asset('public/assets/images/target.png') }}" class="img-fluid">
                </div>
                <div class="counter_desc">
                    <h3>250+</h3>
                    <p>Clients</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="recent_project_wrp">
    <div class="container">
        <h2 class="heading_title">Recent projects</h2>
        <div class="recent_project_list">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="recent_project_pic">
                        <img src="{{ URL::asset('public/assets/images/project_01.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="recent_project_desc">
                        <h1>Food Odering Mobile App for Dubai</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.  Ac aliquam ac volutpat, viverra magna risus. Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.  Ac aliquam ac volutpat, viverra magna risuse.</p>
                        <h2>Teams  who are responsible</h2>
                        <div class="team_wrp">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="team_item">
                                        <div class="team_pic">
                                            <img src="{{ URL::asset('public/assets/images/proj01.png') }}" class="img-fluid">
                                        </div>
                                        <div class="team_desc">
                                            <h3>Andry Ford</h3>
                                            <p>Android Developer</p>
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="team_item">
                                        <div class="team_pic">
                                            <img src="{{ URL::asset('public/assets/images/proj02.png') }}" class="img-fluid">
                                        </div>
                                        <div class="team_desc">
                                            <h3>Andry Ford</h3>
                                            <p>Android Developer</p>
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="team_item">
                                        <div class="team_pic">
                                            <img src="{{ URL::asset('public/assets/images/proj03.png') }}" class="img-fluid">
                                        </div>
                                        <div class="team_desc">
                                            <h3>Andry Ford</h3>
                                            <p>Android Developer</p>
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="team_item">
                                        <div class="team_pic">
                                            <img src="{{ URL::asset('public/assets/images/proj04.png') }}" class="img-fluid">
                                        </div>
                                        <div class="team_desc">
                                            <h3>Andry Ford</h3>
                                            <p>Android Developer</p>
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="team_item">
                                        <div class="team_pic">
                                            <img src="{{ URL::asset('public/assets/images/proj05.png') }}" class="img-fluid">
                                        </div>
                                        <div class="team_desc">
                                            <h3>Andry Ford</h3>
                                            <p>Android Developer</p>
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="recent_project_list">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="recent_project_desc">
                        <h1>Food Odering Mobile App for Dubai</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.  Ac aliquam ac volutpat, viverra magna risus. Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.  Ac aliquam ac volutpat, viverra magna risuse.</p>
                        <h2>Teams  who are responsible</h2>
                        <div class="team_wrp">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="team_item">
                                        <div class="team_pic">
                                            <img src="{{ URL::asset('public/assets/images/proj01.png') }}" class="img-fluid">
                                        </div>
                                        <div class="team_desc">
                                            <h3>Andry Ford</h3>
                                            <p>Android Developer</p>
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="team_item">
                                        <div class="team_pic">
                                            <img src="{{ URL::asset('public/assets/images/proj02.png') }}" class="img-fluid">
                                        </div>
                                        <div class="team_desc">
                                            <h3>Andry Ford</h3>
                                            <p>Android Developer</p>
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="team_item">
                                        <div class="team_pic">
                                            <img src="{{ URL::asset('public/assets/images/proj03.png') }}" class="img-fluid">
                                        </div>
                                        <div class="team_desc">
                                            <h3>Andry Ford</h3>
                                            <p>Android Developer</p>
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="team_item">
                                        <div class="team_pic">
                                            <img src="{{ URL::asset('public/assets/images/proj04.png') }}" class="img-fluid">
                                        </div>
                                        <div class="team_desc">
                                            <h3>Andry Ford</h3>
                                            <p>Android Developer</p>
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="team_item">
                                        <div class="team_pic">
                                            <img src="{{ URL::asset('public/assets/images/proj05.png') }}" class="img-fluid">
                                        </div>
                                        <div class="team_desc">
                                            <h3>Andry Ford</h3>
                                            <p>Android Developer</p>
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="recent_project_pic">
                        <img src="{{ URL::asset('public/assets/images/project_02.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="recent_project_list">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="recent_project_pic">
                        <img src="{{ URL::asset('public/assets/images/project_03.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="recent_project_desc">
                        <h1>Food Odering Mobile App for Dubai</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.  Ac aliquam ac volutpat, viverra magna risus. Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.  Ac aliquam ac volutpat, viverra magna risuse.</p>
                        <h2>Teams  who are responsible</h2>
                        <div class="team_wrp">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="team_item">
                                        <div class="team_pic">
                                            <img src="{{ URL::asset('public/assets/images/proj01.png') }}" class="img-fluid">
                                        </div>
                                        <div class="team_desc">
                                            <h3>Andry Ford</h3>
                                            <p>Android Developer</p>
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="team_item">
                                        <div class="team_pic">
                                            <img src="{{ URL::asset('public/assets/images/proj02.png') }}" class="img-fluid">
                                        </div>
                                        <div class="team_desc">
                                            <h3>Andry Ford</h3>
                                            <p>Android Developer</p>
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="team_item">
                                        <div class="team_pic">
                                            <img src="{{ URL::asset('public/assets/images/proj03.png') }}" class="img-fluid">
                                        </div>
                                        <div class="team_desc">
                                            <h3>Andry Ford</h3>
                                            <p>Android Developer</p>
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="team_item">
                                        <div class="team_pic">
                                            <img src="{{ URL::asset('public/assets/images/proj04.png') }}" class="img-fluid">
                                        </div>
                                        <div class="team_desc">
                                            <h3>Andry Ford</h3>
                                            <p>Android Developer</p>
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="team_item">
                                        <div class="team_pic">
                                            <img src="{{ URL::asset('public/assets/images/proj05.png') }}" class="img-fluid">
                                        </div>
                                        <div class="team_desc">
                                            <h3>Andry Ford</h3>
                                            <p>Android Developer</p>
                                            <a href="#">See Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="seemore_link">See More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
    </div>
</section>
<section class="service_wrp">
    <div class="container">
        <h2 class="heading_title">We provide the best services <br>Upto the market</h2>
    </div>
    <div class="service_slider_wrp">
        <div class="container">
            <div class="services_slide owl-carousel owl-theme">
                <div class="item">
                    <div class="services_slide_item">
                        <h2>Web Development</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa. Ac aliquam ac volutpat, viverra magna risus. </p>
                        <a href="#">Experienced team</a>
                    </div>    
                </div>
                <div class="item">
                    <div class="services_slide_item">
                        <h2>Mobile Development</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa. Ac aliquam ac volutpat, viverra magna risus. </p>
                        <a href="#">Experienced team</a>
                    </div>    
                </div>
                <div class="item">
                    <div class="services_slide_item">
                        <h2>Digital Product Design</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa. Ac aliquam ac volutpat, viverra magna risus. </p>
                        <a href="#">Experienced team</a>
                    </div>    
                </div>
                <div class="item">
                    <div class="services_slide_item">
                        <h2>Search Enginee Optimization</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa. Ac aliquam ac volutpat, viverra magna risus. </p>
                        <a href="#">Experienced team</a>
                    </div>    
                </div>
                <div class="item">
                    <div class="services_slide_item">
                        <h2>Web Development</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa. Ac aliquam ac volutpat, viverra magna risus. </p>
                        <a href="#">Experienced team</a>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<section class="work_process_wrp">
    <div class="container">
        <h2>Metholodgy behind our working process</h2>
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ URL::asset('public/assets/images/white_bg.png') }}" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <div class="work_process_box">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="work_process_item">
                                <h3>Audit</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa. Ac aliquam ac volutpat, viverra magna risus. </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="work_process_item teamwork">
                                <h3>Teamwork</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa. Ac aliquam ac volutpat, viverra magna risus. </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="work_process_item create">
                                <h3>Create</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa. Ac aliquam ac volutpat, viverra magna risus. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="">Experienced team <i class="fa fa-angle-right" aria-hidden="true"></i></a>
    </div>
</section>
@endsection
