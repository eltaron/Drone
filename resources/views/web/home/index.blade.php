@extends('web.layouts.landingapp')
@push('styles')
    <link rel="stylesheet" href="{{asset('web_files')}}/css/landing.css">
@endpush
@section('content')
    <!-- Start Bullets -->
    <nav>
      <ul class="navi d-none d-md-block">
        <a href="#Home"><li id="bullet" class="Home bullet1 active"><p></p></li></a>
        <a href="#Stores"><li id="bullet" class="Stores bullet2"><p></p></li></a>
        <a href="#Articles"><li id="bullet" class="Articles bullet3"><p></p></li></a>
        <a href="#Contact"><li id="bullet" class="Contact bullet4"><p></p></li></a>
        <a href="#About"><li id="bullet" class="About bullet5"><p></p></li></a>
      </ul>
    </nav>
    <!-- End Bullets -->

    <!-- Start Main -->
    <div class="col-12 d-flex flex-row main">
        <div class="col-5 blob">
          <img id="b" src="{{asset('web_files')}}/images/blob.png" alt="">
        </div>
        <div id="revolve" class="col-5 d-none d-md-flex align-self-center revolve">
          <img src="{{asset('web_files')}}/images/rotate.png" alt="">
        </div>
      </div>
      <div id="arrow" class="col-2 align-self-end justify-content-center arrow">
        <img src="{{asset('web_files')}}/images/arrow.png" alt="">
      </div>
    <!-- End Main -->

    <!-- Start Home -->
    <section id="Home" class="col-12 d-flex flex-md-row flex-column justify-content-center align-items-center">
      <div class="col-12 col-md-6 drone">
        <img src="{{asset('web_files')}}/images/drone.png" alt="">
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-center flex-column align-items-center text-center txt">
        <p class="m-title">CROPCOPTER</p>
        <p class="s-title">Future of Agriculture</p>
        <p class="desc">We help the farmers , and all who
          lands to control the process of
          farming with easy , expert
            and technical solution.</p>
      </div>
    </section>
    <!-- End Home -->

    <!-- Start Stores -->
    <section id="Stores" class="col-12 d-flex flex-md-row flex-column justify-content-center align-items-center">
      <div class="col-12 col-md-6 store">
        <img src="{{asset('web_files')}}/images/store.png" alt="">
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-center flex-column align-items-center text-center txt">
        <p class="mS-title">CROPCOPTER</p>
        <p class="desc-str w-75">Here , You can find the most popular agricultural stores all over Egypt. Inciluding fertilizers, pesticides, Software application, spare parts and much more. You can sell, buy and also deliver.

        </p>
        <button onclick="window.location.href='{{url('stores')}}'" ;>
          <span>Discover Now!</span>
          <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
            <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0" />
          </svg>
        </button>

      </div>
    </section>
    <!-- End Stores -->

    <!-- Start Articles -->
    <section id="Articles" class="col-12 d-flex flex-md-row flex-column justify-content-center align-items-center">
      <div class="col-12 col-md-6 article">
        <img src="{{asset('web_files')}}/images/articles.png" alt="">
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-center flex-column align-items-center text-center txt">
        <p class="mA-title">CROPCOPTER</p>
        <p class="desc-art text-center">Here, you have the opportunity to expand your knowledge on modern agricultural techniques, acquire insights into the field of agriculture, and engage in knowledge sharing with others.
        </p>
        <button onclick="window.location.href='{{url('articles')}}'" ;>
            <span>Discover Now!</span>
            <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
              <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0" />
            </svg>
          </button>
        </div>
    </section>
    <!-- End Articles -->

    <!-- Start Contact -->
    <section id="Contact" class="col-12 d-flex flex-md-row flex-column justify-content-center align-items-center">
      <div id="contactContainer">
        <h1>&bull; Keep in Touch &bull;</h1>
        <div class="underline">
        </div>
        <div class="icon_wrapper">
          <svg class="icon" viewBox="0 0 145.192 145.192">
            <path
              d="M126.82,32.694c-2.804,0-5.08,2.273-5.08,5.075v2.721c-1.462,0-2.646,1.185-2.646,2.647v1.995    c0,1.585,1.286,2.873,2.874,2.873h20.577c1.462,0,2.646-1.185,2.646-2.647v-3.041c0-1.009-0.816-1.825-1.823-1.825v-2.722    c0-2.802-2.276-5.075-5.079-5.075h-1.985v-3.829c0-3.816-3.095-6.912-6.913-6.912h-0.589h-20.45c0-2.67-2.164-4.835-4.833-4.835    H56.843c-2.67,0-4.835,2.165-4.835,4.835H34.356v-3.384h-9.563v3.384v1.178h-7.061v1.416c-2.67,0.27-10.17,1.424-13.882,5.972    c-1.773,2.17-2.44,4.791-1.983,7.793c0.463,3.043,1.271,6.346,2.128,9.841c2.354,9.616,5.024,20.515,0.549,28.077    C2.647,79.44-3.125,90.589,2.201,99.547c4.123,6.935,13.701,10.44,28.5,10.44c1.186,0,2.405-0.023,3.658-0.068v9.028h-0.296    c-2.516,0-4.558,2.039-4.558,4.558v4.566h100.04v-4.564c0-2.519-2.039-4.558-4.558-4.558h-0.297V84.631h0.297    c2.519,0,4.558-2.037,4.558-4.556v-0.009c0-2.516-2.039-4.556-4.556-4.556l-36.786-0.009V61.973c0-2.193-1.777-3.971-3.972-3.971    v-4.711h0.456c1.629,0,2.952-1.32,2.952-2.949h14.227V34.459h1.658c2.672,0,4.834-2.165,4.834-4.834h20.45v3.069H126.82z     M34.06,75.511c-2.518,0-4.558,2.04-4.558,4.556v0.009c0,2.519,2.042,4.556,4.558,4.556h0.296v24.12l-0.042-1.168    c-15.994,0.574-26.122-2.523-30.106-9.229C-0.464,90.5,4.822,80.347,6.55,77.423c4.964-8.382,2.173-19.774-0.29-29.825    c-0.843-3.442-1.639-6.696-2.088-9.638c-0.354-2.35,0.129-4.3,1.484-5.958c3.029-3.714,9.509-4.805,12.076-5.1v1.233h7.061v1.49    v2.684c-2.403,1.114-4.153,2.997-4.676,5.237H18.15c-0.584,0-1.056,0.474-1.056,1.056v0.83c0,0.584,0.475,1.056,1.056,1.056h1.984    c0.561,2.18,2.304,3.999,4.658,5.092v0.029c0,0-2.282,20.823,16.479,22.099v1.102c0,1.177,0.955,2.133,2.133,2.133h3.297    c1.178,0,2.133-0.956,2.133-2.133V50.135c0-1.177-0.955-2.132-2.133-2.132h-3.297c-1.178,0-2.133,0.955-2.133,2.132    c-1.575-0.235-5.532-1.17-6.635-4.547c2.36-1.092,4.109-2.913,4.669-5.097h1.308c0.722,0,1.309-0.584,1.309-1.308v-0.578    c0-0.584-0.475-1.056-1.056-1.056h-1.539c-0.542-2.332-2.416-4.271-4.968-5.363v-2.559h17.651c0,2.67,2.166,4.835,4.836,4.835 h2.392v15.88h13.639c0,1.629,1.321,2.949,2.951,2.949h0.899v4.711c-2.194,0-3.972,1.778-3.972,3.971v13.529L34.06,75.511z     M95.188,101.78c0,8.655-7.012,15.665-15.664,15.665c-8.653,0-15.667-7.01-15.667-15.665c0-8.647,7.014-15.664,15.667-15.664    C88.177,86.116,95.188,93.132,95.188,101.78z M97.189,45.669h-9.556c0-0.896-0.726-1.62-1.619-1.62H74.494    c-0.896,0-1.621,0.727-1.621,1.62h-8.967v-11.21h33.283V45.669z">
            </path>
            <path
              d="M70.865,101.78c0,4.774,3.886,8.657,8.66,8.657c4.774,0,8.657-3.883,8.657-8.657c0-4.773-3.883-8.656-8.657-8.656    C74.751,93.124,70.865,97.006,70.865,101.78z">
            </path>
          </svg>
        </div>
        <form id="contact_form">
            @csrf
          <div class="name">
            <label for="name"></label>
            <input type="text" placeholder="My name is" name="name" id="name_input" required>
          </div>
          <div class="email">
            <label for="email"></label>
            <input type="email" placeholder="My e-mail is" name="email" id="email_input" >
          </div>
          <div class="telephone">
            <label for="name"></label>
            <input type="text" placeholder="My number is" name="telephone" id="telephone_input" required>
          </div>
          <div class="message">
            <label for="message"></label>
            <textarea name="message" placeholder="I'd like to chat about" id="message_input" cols="30" rows="4"
              required></textarea>
          </div>
          <div class="submit">
            <input type="button" value="Send Message" id="form_button" />
          </div>
        </form><!-- // End form -->
      </div>
    </section>
    <!-- End Contact -->

    <!-- Start About -->
    <section id="About" class="col-12 d-flex flex-md-row flex-column justify-content-center align-items-center">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner d-flex justify-contnet-center align-items-center">
          <div class="carousel-item active">
            <h3 class="Atitle">About CropCopter</h3>
            <p class="Acc-content p-4">
              Countries strive for UN Sustainable
              Development Goals to combat global starvation and epidemics. Our 2030 vision prioritizes
              conservation and export growth.

              Our project utilizes robots and drones for
              disease detection, fire prevention, land
              assessment, and resource optimization. These technologies integrate into a website for
              product exchange and productivity awareness.

              With our drone-based solution, we
              revolutionize agriculture, improving land
              monitoring, product quality, and irrigation.
              Leveraging advanced tech like LI-Fi and AI,
              we drive agricultural innovation. Our software platforms educate and support agriculture
              related groups.
            </p>
          </div>
          <div class="carousel-item">
            <h3 class="Atitle">Web Application Aims</h3>
            <p class="Acc-content p-4">
              More important than modern agricultural
              techniques is the awareness of their proper usage. Farmers should not only focus on crop production but also on
              effective selling and
              marketing strategies to maximize profits.
              An integrated environment should be created to facilitate buying and selling, with reliable delivery services for
              online
              transactions.
              To ensure secure and private financial
              transactions, a virtual currency has been
              introduced on the website, encouraging
              investments. The website offers various
              account types: trader, delivery, and user.
              Traders have a control panel to manage their products, while users can browse and interact with the available items.
              The
              delivery
              account handles product transportation
              Between farmers, traders, and users. Users can earn points by uploading highly-rated
              articles, which can be used on the website or converted into real currency. The website also features a section of our
              main product which is the drone. In the future, a section
              detailing agricultural land specifics, including strengths and weaknesses, will be added.
            </p>
          </div>
          <div class="carousel-item">
            <h3 class="Atitle">Embedded Systems Usage</h3>
            <p class="Acc-content p-4">
              Farmers face challenges that demand new
              technologies and techniques for increased
              productivity. CropCopter is a remote-controlled drone with machine learning capabilities,
              ntegrated with web and mobile apps.

              CropCopter's hardware captures farm segment images, enabling land monitoring. It offers two control options: a
              long-range remote
              controller and a limited-range mobile app.
              The drone scans diverse green lands, using
              specific points or GPS to determine land shape.
              It provides live streaming and collects
              weather data (temperature, humidity, smoke, raindrops) for fire detection.

              Furthermore, CropCopter controls equipment like pumps. It consists of two units: one
              collects, processes, and transmits data, while the other receives data and operates
              equipment. The transmitting unit gathers
              temperature, humidity, and soil moisture data, processes it, and transmits control signals via light. The receiving
              unit
              operates actuators and collects data from the transmitting unit or drone.

              Both units use solar cells, light sources, and
              detectors for data transmission and reception.
            </p>
          </div>
          <div class="carousel-item">
            <h3 class="Atitle">Machine Learning Function</h3>
            <p class="Acc-content p-4">
              Plant disease detection combines EfficientNet B3 and YOLOv8 architectures. A dataset of plant images, with and without
              diseases
              contains 52 type of disease, is collected and
              divided for training, validation, and testing.
              Preprocessing ensures uniformity in size,
              brightness, and contrast. This combination
              effectively identifies plant diseases, enabling early intervention for farmers with model
              accuracy 97%.

              For fire detection, the model employs YOLOv8 trained on a large dataset of fire images. Bounding boxes are labeled for
              training,
              enabling real-time detection in videos or images. By recognizing flame and smoke
              characteristics, the model accurately locates fires.

              Using Google Earth with NDVI factor facilitates vegetation health monitoring and land use tracking. NDVI data
              identifies
              healthy and stressed vegetation. Farmers create disease management maps using this information. High NDVI values
              indicate healthy vegetation, aiding in monitoring crop growth and assessing forest health.
            </p>
          </div>
          <div class="carousel-item">
            <h3 class="Atitle">Li-Fi</h3>
            <p class="Acc-content p-4">
              Li-Fi based irrigation system mainly consists of two parts, they are transmitter part and receiver part.
              The sensors in the transmitting part collect the information of soil moisture and temperature of different crops in
              different period and then an algorithm was developed with the threshold values of temperature and soil moisture that
              was
              programmed into a micro-controller based gateway to control water quantity.
              This contrast describes a complete wireless networking system and uses bi-directional communication system.
              The input signal at the transmitter section can be modulated with a specific time period then send the data using LED
              bulbs in 0’s and 1’s forms.
              At the receiver end, a photo-diode is used to receive the LED flashes strengthens the signal and gives the output.
              The input of transmitter can be any kind of data like text, voice, etc. The speed of this system is very high.
              Irrigation system that consists of a distributed wireless network of soil moisture and temperature sensors deployed in
              plant root zones. Each sensor node involved a soil-moisture probe, a temperature probe, a micro-controller for data
              acquisition.
            </p>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- End About -->
    <script src="{{asset('web_files')}}/js/jquery.js"></script>
        <script>
            $(document).ready(function() {
                $('#form_button').click(function(e){
                    e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: "{{ url('/contact') }}",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: $('#contact_form').serialize(),
                        success: function(msg) {
                            $('#name_input').val('');
                            $('#email_input').val('');
                            $('#telephone_input').val('');
                            $('#message_input').val('');
                            $('#form_button').val('sent successfully');
                        },
                        error: function(data) {
                        alert("some Error");
                    }
                    });
                });
            });

        </script>
@endsection
