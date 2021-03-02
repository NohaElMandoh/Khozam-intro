<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="theme-color" content="#2b2b2b" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <title>khozam</title>
</head>

<body>
    <div id="page" class="hfeed site">
        <!--           start content-->
        <div class="main-container">
            <main class="main wrapper">



                <div class="hearder-section" style="opacity: 0; visibility: hidden; height: 1px;">
                    ...
                </div>

                <!-- contactUs-section -->
                <div class="contactUs-section padding-0" id="contect-section">
                    <div class="container-fluid">
                        <div class="row" style="justify-content: center;">
                            <div class="Video col-lg-12 col-md-12" style="padding: 0;">
                                <div style="height: 100%;" class="video-box">
                                    <video width="100%" height="100%" controls loop>
                                        <source src="assets/img/video1.mp4" type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="justify-content: center;">
                            <div class="col-lg-6 col-md-12">
                                <div class="contactUs-box">
                                    <h2 class="contactUs-title">
                                        Submit your data
                                    </h2>
                                    <form id='send_data_form' action="" class="contactUs-form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control"  placeholder="{{__('home.your_name')}}"  aria-describedby="helpId"  required/>
{{-- 
                                            <input type="text" name="your-Name" id="your-Name" class="form-control"
                                                placeholder="Name" aria-describedby="helpId" /> --}}
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="{{__('home.Phone')}}" aria-describedby="helpId" required />

                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" id="email" class="form-control"  placeholder=" {{__('home.Email')}}"aria-describedby="helpId" required />

                                        </div>
                                        <div class="form-group">
                                            <select name="unit_id" class="select-style" id="unit_id">
                                                <option value="" selected disabled>-- Select the unit type --</option>
                                                @foreach($units as $unit)
                                                <option value="{{$unit->id}}">{{$unit->name}}</option>
                                                @endforeach
                                                {{-- <option value="1Bedroom">Standalone</option>
                                                <option value="2Bedroom">Twinhouse</option>
                                                <option value="3Bedroom">Townhouse</option>
                                                <option value="3Bedroom">apartment</option>
                                                <option value="3Bedroom">Duplex</option>
                                                <option value="3Bedroom">Penthouse</option>
                                                <option value="3Bedroom">Commercial</option>
                                                <option value="3Bedroom">Admin Office</option> --}}
                                            </select>
                                        </div>
                                        <div class="link-box">
                                            <button type="submit">{{__('home.SignUp')}}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- contactUs-section -->
            </main>
        </div>
        <!--           end content-->

        <!--           start footer-->
        <div class="footer-container">
            <footer class="wrapper">
                <!-- footer-section -->
                <div class="footer-section">
                    <div class="container">
                        <div class="row" style="justify-content: space-between;">


                            <div class="col-lg-8 col-md-12">
                                <div class="footer-box">
                                    <!-- <h3 class="footer-title">
                                            Contact Us
                                        </h3> -->
                                </div>
                                <div class="footer-ul-box">
                                    <a href="tel:19791" class="hot-line" data-call="19791">
                                        <img src="{{Voyager::image(setting('site.hotline_logo'))}}" style="height: 50px;width: 255" alt="" class="img-fluid" />

                                        {{-- <img src="assets/img/otline.png" style="height: 45px;" alt="" class="img-fluid"> --}}
                                    </a>
                                    <div class="sochile-box">
                                        <a target="_blank" href="https://instagram.com/khozam_developments?r=nametag">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <a target="_blank" href="https://www.facebook.com/khozamdevelopment/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-12">
                                <div class="logo-box">
                                    <a href="#" class="logo-link">
                                        <img src="{{Voyager::image(setting('site.logo'))}}" alt="" class="img-fluid" />
                                        {{-- <img src="assets/img/logo1.png" alt="" class="img-fluid" /> --}}
                                        {{-- <p>Part Of KHOZAM group since 1960</p> --}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer-section -->
            </footer>
        </div>
        <!--           end footer-->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/js/script.js')}} "></script>

    <script type="text/javascript">

        $('#send_data_form').on('submit',function(event){
            event.preventDefault();

            let name = $('#name').val();
            let email = $('#email').val();
            let phone = $('#phone').val();
            let unit_id = $('#unit_id').val();
            $.ajax({
                url: "send_data",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    name:name,
                    email:email,
                    phone:phone,
                    unit_id:unit_id,
                },
                success:function(response){
                    console.log(response);
                },
            });
        });
    </script>
</body>

</html>
