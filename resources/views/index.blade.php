<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hotel Vatnsholt - Guesthouse</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">



  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <div class="site-navbar-wrap js-site-navbar bg-white">
    <nav class="site-navbar navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img class="logo-img" src="images/logo.png" alt="" srcset=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Our_Rooms">Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Restaurant">Restaurant</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About_us">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Location">Location</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="events">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Contact_Us">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link cool-btn" href="#booknow">Book Now</a>
            </li>
          </ul>
        </div>
      </nav>
  </div>
  <div class="site-wrap">
    <div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover overlay" style="background-image: url(images/vholt1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">

              <h1 class="mb-2">Welcome To Vatnsholt</h1>
              <h2 class="caption">Hotel &amp; Guesthouse
                <div style="margin-bottom: 50px;"></div>
                <a href="#booknow" class="cool-btn2">Book Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url(images/Vatnsholt-view-Yellow-house.jpg);" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">Experience Icelandic Countryside</h1>
              <h2 class="caption">Enjoy With Us</h2>
              <div style="margin-bottom: 50px;"></div>
              <a href="#booknow" class="cool-btn2">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="Our_Rooms">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Our Rooms</h2>
          </div>
        </div>
        <div class="row">
          <div class="room-detail col-md-6 col-lg-4 mb-5" data-details='{"name" : "Deluxe Room", "price": 26030, "details":"We offer one deluxe room with king size bed. There is private bathroom with bath.",
                    "images" : ["images/deluxe_01.jpg", "images/deluxe_02.jpg", "images/deluxe_03.jpg", "images/deluxe_04.jpg", "images/deluxe_05.jpg"]}'
            id="0">
            <div class="hotel-room text-center">
              <a class="d-block mb-0 thumbnail">
                <img src="images/Delux-room-nr.-9-1024x426.jpg" alt="Image" class=" img-fluid double-image">
                <img src="images/WC-Delux-room-nr.-9.jpg" alt="Image" class=" img-fluid double-image">
              </a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0">
                  <a href="#">Deluxe Room</a>
                </h3>
                <strong class="price">With deluxe bath</strong>
                <br>
                <strong class="price">26.030 kr / per night</strong>
              </div>
            </div>
          </div>
          <div class="room-detail col-md-6 col-lg-4 mb-5" data-details='{"name" : "Double Room", "price": 19810, "details":"Are you looking for the cheapest offer? Choose one of ours rooms with shared bathroom. There is one double bed or two single beds in each room and on the same floor, you can find shared bathroom (shared with 2 or 3 other rooms).You can choose from 2 or 3 bathrooms in the house, so there is always some available for you.",
            "images": ["images/dbl_no_bath1.png", "images/dbl_no_bath2.png", "images/dbl_no_bath3.png"]}' id="1">
            <div class="hotel-room text-center">
              <a class="d-block mb-0 thumbnail">
                <img src="images/White-house-double-room-5-1024x787.jpg" alt="Image" class="img-fluid room-img">
              </a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0">
                  <a href="#">Double Room</a>
                </h3>
                <strong class="price">With shared bath</strong>
                <br>
                <strong class="price">19.810 kr / per night</strong>
              </div>
            </div>
          </div>
          <div class="room-detail col-md-6 col-lg-4 mb-5" data-details='{"name" : "Double Room", "price": 23990, "details":"Double room with a private bathroom. There is one double bed or two single beds in each room. ",
          "images":["images/Long-building-double-bed-1-1024x787.jpg", "images/Long-building-double-bed-1024x787.jpg", 
          "images/Long-building-Twin-bed-1024x787.jpg", "images/Long-building-WC-1024x787.jpg", "images/Hallway-Long-building-1024x787.jpg"]}'>
            <div class="hotel-room text-center">
              <a class="d-block mb-0 thumbnail">
                <img src="images/Long-building-double-bed-1-1024x787.jpg" alt="Image" class="img-fluid room-img">
              </a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0">
                  <a href="#">Double Room</a>
                </h3>
                <strong class="price">With private bath</strong>
                <br>
                <strong class="price">23.990 kr / per night</strong>
              </div>
            </div>
          </div>

          <div class="room-detail col-md-6 col-lg-4 mb-5" data-details='{"name" : "Family Room", "price": 34090, "details":"We offer two family rooms for 4 people. Every family room at our farmhouse has private bathroom with shower and toilet. There is one double bed and one bunk bed in the room.",
          "images": ["images/4_preson_fam_1.png", "images/4_person_fam_fixed1.png", "images/4_person_fam_3.png",
          "images/4_person_fam_4.png", "images/4_person_fam_fixed2.png"]}'>
            <div class="hotel-room text-center">
              <a class="d-block mb-0 thumbnail">
                <img src="images/4_preson_fam_1.png" alt="Image" class="img-fluid room-img">
              </a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0">
                  <a href="#">Family Room</a>
                </h3>
                <strong class="price">With private bath, 4 Person</strong>
                <br>
                <strong class="price">34.090 kr / per night</strong>
              </div>
            </div>
          </div>
          <div class="room-detail col-md-6 col-lg-4 mb-5" data-details='{"name" : "Family Room", "price": 40310, "details":"We offer one family rooms for 6 people. Every family room at our farmhouse has private bathroom with shower and toilet. There is one double bed and two bunk beds in the room.", 
          "images": ["images/6_pers_fam.jpg", "images/6_pers_fam1.jpg"]}'>
            <div class="hotel-room text-center">
              <a class="d-block mb-0 thumbnail">
                <img src="images/6_pers_fam.jpg" alt="Image" class="img-fluid room-img">
              </a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0">
                  <a href="#">Family Room</a>
                </h3>
                <strong class="price">With private bath, 5-6 Person</strong>
                <br>
                <strong class="price">40.310 kr / per night</strong>
              </div>
            </div>
          </div>
          <div class="room-detail col-md-6 col-lg-4 mb-5" data-details='{"name" : "Cottage", "price": 24910, "details":"Although the cottage looks small, there is a comfy bed, a table and a small bathroom with a shower. The view from the window while waking up is amazing.\n 1 double bed",
            "images": ["images/cott_1.png", "images/cott_2.png", "images/cott_3.png", "images/cott_4.png"]}'>
            <div class="hotel-room text-center">
              <a class="d-block mb-0 thumbnail">
                <img src="images/Cottage-out-side-1024x787.jpg" alt="Image" class="img-fluid room-img">
              </a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0">
                  <a href="#">Cottage</a>
                </h3>
                <strong class="price">With private bath</strong>
                <br>
                <strong class="price">24.910 kr / per night</strong>
              </div>
            </div>
          </div>
          <div class="room-detail col-md-6 col-lg-4 mb-5" data-details='{"name" : "Container", "price": 16750, "details": "Container bulding with 4 rooms, nice view out on the field, private bathroom.\n One single bed and one bunk bed.",
              "images": ["images/container_1.png", "images/container_2.png", "images/container_3.png", "images/container_4.png"]}'>
            <div class="hotel-room text-center">
              <a class="d-block mb-0 thumbnail">
                <img src="images/725c1541_z.jpg" alt="Image" class="img-fluid room-img">
              </a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0">
                  <a href="#">Containers</a>
                </h3>
                <strong class="price">With private bath</strong>
                <br>
                <strong class="price">16.750 kr / per night</strong>
              </div>
            </div>
          </div>
          <div class="room-detail col-md-6 col-lg-4 mb-5" data-details='{"name" : "Three Bedroom Apartment", "price": 16750, "details":"", "images":["images/studio.jpg"]}'>
            <div class="hotel-room text-center">
              <a class="d-block mb-0 thumbnail">
                <img src="images/studio.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0">
                  <a href="#">Studio Apartment</a>
                </h3>
                <strong class="price">With private bathroom</strong>
                <br>
                <strong class="price">50.750 kr / per night</strong>
              </div>
            </div>
          </div>
          <div class="room-detail col-md-6 col-lg-4 mb-5" data-details='{"name" : "Blue House", "price": 16750, "details":"A beautiful house, just for youself and your family", "images":["images/studio.jpg"]}'>
            <div class="hotel-room text-center">
              <a class="d-block mb-0 thumbnail">
                <img src="images/studio.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0">
                  <a href="#">Blue House</a>
                </h3>
                <strong class="price">With private bathroom</strong>
                <br>
                <strong class="price">XX.XXX kr / per night</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Hotel Features</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="text-center p-4 item">
              <span class="fa fa-wifi display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Free WiFi</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="text-center p-4 item">
              <span class="fa fa-mug-hot display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Free Coffee</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="text-center p-4 item">
              <span class="fa fa-parking display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Free Car Parking</h2>
            </div>
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="text-center p-4 item">
              <span class="fa fa-glass-cheers display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Bar</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="text-center p-4 item">
              <span class="fa fa-utensils display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Restaurant</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="text-center p-4 item">
              <span class="fa fa-smoking-ban display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Smoke Free Rooms</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p style="text-align: center;">In Vatnsholt we pride our selves in laying special emphasis on Icelandic cultural characteristics, closeness
              to the countryside, nature and wild life, let alone our personal albeit informal and warm touch. The management
              and staff are looking forward to welcoming you to Vatnsholt.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="Restaurant">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Restaurants</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="resturant">
              <img src="images/food1.jpg" alt="">
              <h3 class="section-subheading">Hotel Restaurant</h3>
              <p>Our restaurant and its adjacent catering- and facility rooms occupy the old quarters in which the long gone
                Vatnsholt farm hey- & cow-barn used to be, both of which have been carefully converted into an exquisite
                cathedral ceiling open space eatery and bar – beautifully designed with capacity up to 300 guests. These
                are three separated rooms, two of which (the smaller rooms) can be opened up and turned into one adjoining
                room for up to 80 guests.</p>
              <a class="see-more" href="#Contact_Us">Book Now →</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="resturant">
              <img src="images/demo2.jpg" alt="">
              <h3 class="section-subheading">Blind Raven</h3>
              <p>Blind Raven takes place in a dark restaurant, where the customers do not see the food they are eating. The
                basic concept is that the removal of vision enhances the other senses and increases gastronomic pleasure.
                Since 1999 such restaurants have opened in many parts of the world. In blind Raven you will be experiencing
                both the exquisite Icelandic cusine and your favorite foods in a new light, or lack there of.</p>
              <a class="see-more" href="https://www.blindraven.is" target="_blank">See more →</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="About_us">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">About Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <iframe class="tubeyou" width="470" height="405" src="https://www.youtube.com/embed/BbTDu1Or_IU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <div class="col-md-6 ml-auto">
            <p class="mb-4">Við eigendur staðarins erum hjónin Jóhann Helgi Hlöðversson og Margrét Ormsdóttir. Árið 2005 festum við kaup
              á jörðinni Vartnsholti, tókum okkur upp og fluttum ásamt börnum okkar úr Hafnarfirði austur fyrir fjall og
              settumst að í Vatnsholti.
              <br> Húsakynni vöru í talsverðri niðurníðslu og máttum við því heldur betur taka til hendinni. Kreppan árið 2008
              setti stórt strik í reikninginn, bankar urðu gjaldþrota, lán hækkuðu og viðskiptu drógust saman. En þrátt fyrir
              ógnarhramm kreppunnar og mikil fjárútlát við endurbætur, snerum við vörn í sókn og árið 2010 opnuðum við sveitagistiheimilið
              Vatnsholt með 14 gistiherbergum.
              <br> Skömmu síðar værðum við enn út kvíarnar, og í dag getum við boðið 34 gistiherbergi og veitingasali fyrir allt
              að 300 manns.
              <br> Vatnsholt er líf okkar og yndi og við lítum á gesti okkar sem hluta fjölskyldunnar, meðan þeir staldra við.
              Það er okkur persónulegur heiður að fá að taka á móti ykkur hér í sveitasælunni, í von um að þið eigið hjá
              okkur góða daga.
              <br> Hér er meðfylgjandi myndband sem lýsir þeim breytingum sem orðið hafa á Vatnsholti í tímans rás:</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-light" id="Activities">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2 class="mb-5">Activities</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="activity">
            <img src="images/activity2.jpg" alt="">
            <h3 class="section-subheading">Nature</h3>
            <p>Vatnsholt is surrounded by the beautiful Icelandic nature, which you can easly explore. We the owners at Vatnsholt
              have a reputation for being nature- and animal lovers. For years we have nurtured a small herd of domesticated
              animals, kindly dubbed by our guests as the Lilliputian Zoo.</p>
            <a class="see-more" href="https://www.myvisiticeland.is/south/nature/?fbclid=IwAR0cqzzYX4O9RqPY1_uG1bXGNpPou5FRx_mrz9d-L-p_pQC1g5EpXhO0Dsw" target="_blank">See more →</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="activity">
            <img src="images/Northern-lights-5.jpg" alt="">
            <h3 class="section-subheading">Northern Lights</h3>
            <p>The Northern Lights are a spectacular natural occurrence which appears in the dark sky near the Earth’s poles
              around the Arctic and Antarctic Circles. This surreal phenomenon can light up the night sky and take on breathtaking
              shapes and colors to the awe and wonder of those who are lucky enough to witness it.</p>
            <a class="see-more" href="https://adventures.is/information/about-northern-lights/" target="_blank">See more →</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="activity">
            <img src="images/activity1.jpg" alt="">
            <h3 class="section-subheading">Activities</h3>
            <p>Outdoor enthusiasts feel at home in South Iceland. Not only does the region have amazing places to visit, but
              a whole lot of avtivities as well. These activities might include river rafting, mountain climbing, horse riding
              and many more.</p>
            <a class="see-more" href="https://www.myvisiticeland.is/south/activities/?fbclid=IwAR3V8Gr8yuEp8-pxtozR1TLZ4x5r99j_ZXbDrX5uRGNmE48thwYkbPPlyQE" target="_blank">See more →</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section" id="Location">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2 class="mb-5">Where Are We</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-5 mb-md-0">
          <p class="mb-4">The guesthouse Vatnsholt is situated in south Iceland, surrounding is the beautiful Icelandic nature. The official
            address is Vatnsholt 2, 801 Selfoss.</p>
          <iframe class="map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.is/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Vatnsholt+Bed+%26+Breakfast,+Villingaholt&amp;aq=0&amp;oq=vatnsholt&amp;sll=64.925265,-19.02117&amp;sspn=8.878183,33.815918&amp;ie=UTF8&amp;hq=Vatnsholt+Bed+%26+Breakfast,+Villingaholt&amp;hnear=&amp;ll=63.877047,-20.80553&amp;spn=0.287261,1.056747&amp;t=m&amp;z=11&amp;iwloc=A&amp;cid=4902794287333613319&amp;output=embed"></iframe>
        </div>
        <div class="col-md-2 mb-5 mb-md-0">
          <div class="certificates">
            <div id="TA_certificateOfExcellence318" class="TA_certificateOfExcellence">
              <ul id="cIrsNpZ2zOal" class="TA_links q6hdD1JYGe0D">
                <li id="sFddZUmQXml" class="rS4uVxQlZ27">
                  <a target="_blank" href="https://www.tripadvisor.com/Hotel_Review-g315852-d1903557-Reviews-Vatnsholt-Selfoss_South_Region.html">
                    <img src="https://www.tripadvisor.com/img/cdsi/img2/awards/CoE2017_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg"
                      id="CDSWIDCOELOGO" />
                  </a>
                </li>
              </ul>
            </div>
            <script async src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=318&amp;locationId=1903557&amp;lang=en_US&amp;year=2019&amp;display_version=2"
              data-loadtrk onload="this.loadtrk=true"></script>
            <div id="TA_certificateOfExcellence735" class="TA_certificateOfExcellence">
              <ul id="c1boikElAX" class="TA_links JvVCmc">
                <li id="AADyij" class="MBdhF1c">
                  <a target="_blank" href="https://www.tripadvisor.com/Hotel_Review-g315852-d1903557-Reviews-Vatnsholt-Selfoss_South_Region.html">
                    <img src="https://www.tripadvisor.com/img/cdsi/img2/awards/CoE2017_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg"
                      id="CDSWIDCOELOGO" />
                  </a>
                </li>
              </ul>
            </div>
            <script async src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=735&amp;locationId=1903557&amp;lang=en_US&amp;year=2017&amp;display_version=2"
              data-loadtrk onload="this.loadtrk=true"></script>
            <div id="TA_certificateOfExcellence48" class="TA_certificateOfExcellence">
              <ul id="GPR7WWyqtZ" class="TA_links U9p4yG0">
                <li id="LMv9W0Q6Sq" class="gZo73DZcK">
                  <a target="_blank" href="https://www.tripadvisor.com/">
                    <img src="https://www.tripadvisor.com/img/cdsi/img2/awards/CoE2017_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg"
                      id="CDSWIDCOELOGO" />
                  </a>
                </li>
              </ul>
            </div>
            <script async src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=48&amp;locationId=1903557&amp;lang=en_US&amp;year=2015&amp;display_version=2"
              data-loadtrk onload="this.loadtrk=true"></script>
            <div id="TA_certificateOfExcellence271" class="TA_certificateOfExcellence">
              <ul id="gUIHWC1Wqg" class="TA_links rg2SkLq4">
                <li id="6CweDboiJY1u" class="ZXGvKFz2Z">
                  <a target="_blank" href="https://www.tripadvisor.com/">
                    <img src="https://www.tripadvisor.com/img/cdsi/img2/awards/CoE2017_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg"
                      id="CDSWIDCOELOGO" />
                  </a>
                </li>
              </ul>
            </div>
            <script async src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=271&amp;locationId=1903557&amp;lang=en_US&amp;year=2014&amp;display_version=2"
              data-loadtrk onload="this.loadtrk=true"></script>
          </div>
        </div>
        <div class="col-md-4 mb-5 mb-md-0">
          <div class="cert2">
            <div id="TA_selfserveprop960" class="TA_selfserveprop">
                <ul id="6FQLII8ERcN0" class="TA_links N3ACdz">
                  <li id="oFVujVgCHOQ" class="N0OZhp0C">
                    <a target="_blank" href="https://www.tripadvisor.com/">
                      <img src="https://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor" />
                    </a>
                  </li>
                </ul>
              </div>
          </div>
          <script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=960&amp;locationId=1903557&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2"
            data-loadtrk onload="this.loadtrk=true"></script>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-light" id="booknow">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2 class="mb-5">Book Now</h2>
        </div>
      </div>
      <div id='bookWidget-11801-21258-0-1558713438'> </div>
    </div>
  </div>

  <div class="site-section site-section-sm" id="Contact_Us">
    <div class="container">
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Get In Touch</h2>
          </div>
      <div class="row">
        <div class="col-md-12 col-lg-8 mb-5">
          <form method="POST" action="/send_msg" class="p-5 bg-white" onsubmit="return false">
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Full Name</label>
                <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Full Name">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone #">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us" required></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Send Message" class="btn btn-primary pill px-4 py-2">
              </div>
            </div>
          </form>
        </div>

        <div class="col-lg-4">
          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3" style="font-family: 'Playfair Display';">Contact Info</h3>
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">Vatnsholt 2, 801 Selfoss, Iceland.</p>

            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4">
              <a href="#">+354 899 7748</a>
            </p>

            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0">
              <a href="mailto:info@hotelvatnsholt.is">info@hotelvatnsholt.is</a>
            </p>

          </div>


        </div>
      </div>
    </div>
  </div>
  <footer class="page-footer font-small stylish-color-dark pt-4">
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center social-buttons">
      <li class="list-inline-item">
        <a class="social-button" href="https://www.facebook.com/HotelVatnsholt/" rel="noopener noreferrer" target="_blank">
          <span class="icon-facebook"></span>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="social-button" href="https://twitter.com/vatnsholt" rel="noopener noreferrer" target="_blank">
          <span class="icon-twitter"></span>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="social-button" href="https://www.instagram.com/vatnsholt/">
          <span class="icon-instagram"></span>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <b> Vatnsholt</b>
    </div>
    <!-- Copyright -->

  </footer>
  </div>

  <div class="modal fade" id="roomDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-room-title"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators indicators-fo-us-dawg" id="room-indicators">
            </ol>
            <div class="carousel-inner" id="room-det-carusel">
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <h4 class="modal-heading" style="margin-top: 20px; margin-bottom: 20px;">About the room</h4>
          <h6 id="modal-room-details" style="padding-left: 20px; color: #333"></h6>
          <h6 id="modal-room-price" style="padding-left: 20px; color: black; font-weight: 500;"></h6>

          <h4 class="modal-heading" style="margin-top: 20px;">Room facilities</h4>
          <ul>
            <li>
              <h5 class="modal-heading">
                Free WiFi
                <i class="fas fa-check"></i>
              </h5>
            </li>
            <li>
              <h5 class="modal-heading">
                Loundry Service
                <i class="fas fa-check"></i>
              </h5>
            </li>
            <li>
              <h5 class="modal-heading">Contenental Breakfast
                <i class="fas fa-check"></i>
              </h5>
            </li>
            <li>
              <h5 class="modal-heading">Parking
                <i class="fas fa-check"></i>
              </h5>
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <a href="https://property.godo.is/booking.php?propid=21258&type=0&referer=BookingButton">
            <button type="button" class="btn btn-primary">Book Now</button>
          </a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div id="message-sent-msg" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Message Sent</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Your message has been sent, we will answer as soon as possible.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div id="message-error-msg" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Could Not Send</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Could not send your message, pleas try again later</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>


  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/main.js"></script>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

      for (var i = 0; i < total; i++) {
        new MediaElementPlayer(mediaElements[i], {
          pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
          shimScriptAccess: 'always',
          success: function () {
            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
            for (var j = 0; j < targetTotal; j++) {
              target[j].style.visibility = 'visible';
            }
          }
        });
      }
    });
  </script>
  <script src='https://media.xmlcal.com/widget/1.00/js/bookWidget.min.js'></script>
  <script>
      jQuery(document).ready(function() {
        jQuery('#bookWidget-11801-21258-0-1558713438').bookWidget({
          propid:21258,
          buttonBackgroundColor:'#f23a2e',
          buttonColor:'#ffffff',
          dateSelection:2,
          formAction:'https://property.godo.is/booking.php',
          widgetLang:'en',
          widgetType:'BookingBox'
        });
      });
      </script>
</body>

</html>