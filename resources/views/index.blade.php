@extends('layout.app')

@section('assets')

@endsection

@section('content')
    <main class="wrapper">
        <!-- Header -->
        @include('partials.header')
        <!-- /Header -->

        <!-- Banner Start -->
        <section id="banner" class="">
            <div class="banner-wrap relative-div upper-text">
                <span class="mask-overlay"></span>
                <div class="banner-details relative-div white-color text-center">
                    <div class="container theme-container">
                        <h2 class="secondery-font wow fadeInDown" data-wow-delay="0.2s"> EU in Kenya Business Forum </h2>
                        <div class="title-wrap">
                            <h3 class="section-title  wow flipInX" data-wow-delay="1.8s"><span> 21st & 22nd  February 2023</span> </h3>
                        </div>
                        <div class="parent">
                            <div class="child" style="background-color: white">
                                <img src="{{asset('assets/Europe.png')}}" alt="" width="180">
                            </div>
                            <div class="child">
                                <div class="countdown-wrapper space-bottom-45">
                                    <div id="dealCountdown2" class="defaultCountdown clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <a class="theme-btn-big btn wow zoomIn goto-register" data-wow-delay="0.2s" href="#register">Register</a>

                    </div>
                </div>
            </div>
        </section>
        <!-- / Banner Ends -->

        <!-- Latest Event Start -->
        <section id="latest-event" class="space-bottom-50">
            <div class="container theme-container latest-container">
                <div class="col-md-9 col-sm-11 col-md-offset-1 wow fadeInUp animated" data-wow-delay="0.2s">
                    <h2 class="vertical-text theme-color-bg white-color wow zoomIn" data-wow-delay="0.6s"> Latest Event </h2>
                    <div class="latest-event">

                        <div class="col-sm-6 feature-box">
                            <div class="feature-icon wow zoomIn" data-wow-delay="0.2s">
                                <i class="fa  fa-map-marker  theme-color"></i>
                            </div>
                            <div class="feature-info secondery-font wow fadeInRight" data-wow-delay="0.2s">
                                <a href="#" class="theme-color"> <b> Location </b> </a>
                                <h5>Westlands Nairobi Kenya</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 feature-box">
                            <div class="feature-icon wow zoomIn" data-wow-delay="0.2s">
                                <i class="fa fa-microphone theme-color"></i>
                            </div>
                            <div class="feature-info secondery-font wow fadeInRight" data-wow-delay="0.2s">
                                <a href="#" class="theme-color"> <b> Speakers </b> </a>
                                <h5>24 Professional Speakers</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Latest Event Ends -->

        <!-- Welcome To Jevent Start -->
        <section id="jevent" class="space-top-45">
            <div class="container theme-container">
                <div class="title-wrap space-50">
                    <h2 class="section-heading wow fadeInDown"  data-wow-delay="0.2s"> Welcome To <span class="theme-color"> EU in Kenya Business Forum </span> </h2>
                    <p class="title-devider wow fadeInUp"  data-wow-delay="0.2s">
                        <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s"></span>
                        <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s"></span>
                        <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s"></span>
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 space-bottom-50">
                        <div class="jevent-wrap">
                            <div class="jevent-content">
                                <a href="#" class="jevent-title-1 wow fadeInDown"  data-wow-delay="0.2s"> About <span class="theme-color"> us </span> </a>
                                <p class="wow fadeInDown"  data-wow-delay="1.0s">
                                    The first-ever EU-Kenya Business Forum will kick off a series of public-private dialogues around Kenya´s
                                    reforms to support private sector investment and business links.
                                    Besides the panels on 21 Feb, you can connect with business and government officials from 7th to 28th Feb
                                    organising bilateral meetings.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 space-bottom-50">
                        <div class="jevent-wrap">
                            <div class="jevent-content">
                                <a href="#" class="jevent-title-1 wow fadeInDown"  data-wow-delay="0.2s"> Business talking  <span class="theme-color"> to business </span> </a>
                                <p class="wow fadeInDown"  data-wow-delay="1.0s">
                                    Organized by the EU in partnership with Kenyan authorities and the private sector,
                                    areas with the highest investment & business potential for Europeans will
                                    be the focus of the forum. It is taking place in the framework of
                                    EU-Africa public-private sector dialogues supported by the EU-Africa Business Forum (EABF), which is jointly
                                    or by the European Union and the African Union. Firms already operating
                                    in Kenya will tell us why they invest there and the opportunities they see ahead.
                                    More than 20 CEOs are confirmed and will share their personal experiences with us.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 space-bottom-50">
                        <div class="jevent-wrap">
                            <div class="jevent-content">
                                <a href="#" class="jevent-title-1 wow fadeInDown"  data-wow-delay="0.2s"> Investment  <span class="theme-color"> facilitation </span> </a>
                                <p class="wow fadeInDown"  data-wow-delay="1.0s">
                                    The Kenya-EU Sustainable Investment Facilitation Agreement (SIFA) is about to be concluded.
                                    The agreement will be enhancing the transparency of investment measures, simplify procedures,
                                    promote responsible investment, contribute to Kenya’s economic diversification and help small
                                    and medium-sized enterprises (SMEs). The negotiators behind this agreement will be there to explain
                                    how firms can make the most of it when investing in Kenya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 space-bottom-50">
                        <div class="jevent-wrap">
                            <div class="jevent-content">
                                <a href="#" class="jevent-title-1 wow fadeInDown"  data-wow-delay="0.2s"> Access to   <span class="theme-color"> finance </span> </a>
                                <p class="wow fadeInDown"  data-wow-delay="1.0s">
                                    Any investment has a risk component. To help you mitigate this risk, the European External Investment Plan and its financial pillar, the
                                    European Fund for Sustainable Development plus (EFSD+), have a series of tools that can be used to scale up private sector investment.
                                    They will be presented to you by the Financial Institutions involved.
                                    Besides, the monetary policy is key and Kenya has implemented and planned substantial reforms in this area. The National Bank of Kenya will tell us what we can expect.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 space-bottom-50">
                        <div class="jevent-wrap">
                            <div class="jevent-content">
                                <a href="#" class="jevent-title-1 wow fadeInDown"  data-wow-delay="0.2s"> How can you benefit from this  <span class="theme-color"> event? </span> </a>

                                <ul class="wow fadeInDown" data-wow-delay="1.0s">
                                    <li>
                                        Listen to key firms and public authorities about investment & business opportunities in Kenya.
                                    </li>
                                    <li>
                                        Pose your questions to each session and get your replies.
                                    </li>
                                    <li>
                                        If you want a bilateral meeting with a firm or government official,
                                        check the matchmaking tool and book your slot. The receiver will be able to meet you on this platform or beyond.
                                    </li>
                                    <li>
                                        Complete your profile to be contacted by possible business partners as well.
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- / Welcome To Jevent Ends -->


        <!-- Brands Slider Start -->
        <section id="brands-slider" class="space-50">
            <div class="light-bg space-30">
                <div class="container theme-container">
                    <div class="title-wrap space-bottom-30">
                        <h2 data-wow-delay="0.2s" class="section-heading wow fadeInDown" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;"> Our   <span class="theme-color"> Sponsors </span> </h2>
                        <p data-wow-delay="0.2s" class="title-devider wow fadeInUp" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"> <span data-wow-delay="2.0s" class="line-1 wow fadeInUp" style="visibility: visible; animation-delay: 2s; animation-name: fadeInUp;">  </span> <span data-wow-delay="1.8s" class="line-2 wow fadeInUp" style="visibility: visible; animation-delay: 1.8s; animation-name: fadeInUp;">  </span> <span data-wow-delay="1.6s" class="line-3 wow fadeInUp" style="visibility: visible; animation-delay: 1.6s; animation-name: fadeInUp;">  </span></p>
                    </div>
                    <div class="brands-slider light-bg wow fadeInDown"  data-wow-delay="0.2s">
                        <div id="brands-carousel-slider" class="owl-carousel">
                            <div class="item"> <a href="#"> <img src="{{asset('')}}" alt=" "> </a> </div>
                            <div class="item"> <a href="#"> <img src="{{asset('')}}" alt=" "> </a> </div>
                            <div class="item"> <a href="#"> <img src="{{asset('')}}" alt=" "> </a> </div>
                            <div class="item"> <a href="#"> <img src="{{asset('')}}" alt=" "> </a> </div>
                            <div class="item"> <a href="#"> <img src="{{asset('')}}" alt=" "> </a> </div>
                            <div class="item"> <a href="#"> <img src="{{asset('')}}" alt=" "> </a> </div>
                            <div class="item"> <a href="#"> <img src="{{asset('')}}" alt=" "> </a> </div>
                            <div class="item"> <a href="#"> <img src="{{asset('')}}" alt=" "> </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Brands Slider Ends -->

        <!-- Event Schedule Start -->
        <section id="event-schedule" class="space-45">
            <div class="container theme-container">
                <div class="title-wrap space-bottom-50">
                    <h2 class="section-heading wow fadeInDown"  data-wow-delay="0.2s">EVENT  <span class="theme-color"> PROGRAMME </span> </h2>
                    <p class="title-devider wow fadeInUp"  data-wow-delay="0.2s"> <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span></p>
                </div>
                <div class="event-schedule-wrap col-md-10">
                    <h4>
                        Day 1
                    </h4>
                    <ul class="nav-tabs secondery-font schedule-tabs" role="tablist" style="list-style: none;">
                        <li class="active wow fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#8am" role="tab" data-toggle="tab" >
                                <span class="number"><b> 8:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li role="presentation" class="wow fadeInDown"  data-wow-delay="0.3s">
                            <a aria-expanded="false" href="#9am" role="tab" data-toggle="tab">
                                <span class="number"><b> 9:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li role="presentation" class="wow fadeInDown"  data-wow-delay="0.3s">
                            <a aria-expanded="false" href="#12pm" role="tab" data-toggle="tab">
                                <span class="number"><b> 12:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li role="presentation" class="wow fadeInDown"  data-wow-delay="0.3s">
                            <a aria-expanded="false" href="#1pm" role="tab" data-toggle="tab">
                                <span class="number"><b> 13:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li role="presentation" class="wow fadeInDown"  data-wow-delay="0.3s">
                            <a aria-expanded="false" href="#2pm" role="tab" data-toggle="tab">
                                <span class="number"><b> 14:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li role="presentation" class="wow fadeInDown"  data-wow-delay="0.3s">
                            <a aria-expanded="false" href="#3pm" role="tab" data-toggle="tab">
                                <span class="number"><b> 15:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li role="presentation" class="wow fadeInDown"  data-wow-delay="0.3s">
                            <a aria-expanded="false" href="#5pm" role="tab" data-toggle="tab">
                                <span class="number"><b> 17:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="8am">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> KENYA: A NEW DESTINATION FOR  <span class="theme-color"> EU INVESTMENTS </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">8:00 - 9:00 </span>  </h6>
                                            <p>
                                                Justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales,
                                                diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="9am">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business Opportunities in <span class="theme-color"> AGRICULTURE & AGROPROCESSING </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:00 - 12:00, </span> <span> Virtual </span> </h6>
                                            <p>
                                                Business opportunities in Agriculture & Agro-Processing
                                                Room Brussels/Stockholm
                                                Moderated by the Netherlands-African Business Council (NABC)
                                                Opportunities & challenges by Inalca (Italy), Castel (France), Gauff (Germany), Fazenda Girassol (Spain), and Signature Agri-Investments (Netherlands)
                                                Reforms in the sector by the Minister of Agriculture of Kenya
                                                Q&As
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>


                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business Opportunities in <span class="theme-color"> RENEWABLE ENERGY </span> </a>
                                    <div class="schedule-details">

                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:00 - 12:00, </span> <span> Virtual </span> </h6>
                                            <p>
                                                Business opportunities in Renewable Energy
                                                Room Oslo/Copenhagen
                                                Moderated by the Delegation of German Industries and Commerce (AHK), and Afrika Verein
                                                Opportunities & challenges by Siemens Energy (Germany), Total Energies (France), Exergia (Portugal), TNO (Netherlands)
                                                Energy and Water Regulator Institute IRSEA (Kenya)
                                                Roadmap by the Minister of Energy and Water (Kenya)
                                                Q&As
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business Opportunities in <span class="theme-color"> DIGITISATION </span> </a>
                                    <div class="schedule-details">

                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:00 - 12:00, </span> <span> Virtual </span> </h6>
                                            <p>
                                                Business opportunities in Digitalisation

                                                Room Royal

                                                Moderated by the Chamber of Commerce Portugal – Kenya (CCIPA)

                                                Opportunities & challenges by Heetch (France), SAP (Germany), and Satec (Spain)

                                                Facilities to invest in innovation in the sector by the Kenyan National Bank (BNA)

                                                Q&As
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business Opportunities in <span class="theme-color"> MANUFACTURING </span> </a>
                                    <div class="schedule-details">

                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:00 - 12:00, </span> <span> Virtual </span> </h6>
                                            <p>
                                                Business opportunities in Manufacturing

                                                Room Oslo/Copenhagen

                                                Moderated by Business France and the Movement of the Enterprises of France

                                                Opportunities & challenges by ALPLA (Austria), AWDC (Belgium), Arslanian (Belgium), and Saint Gobain (France)

                                                Reforms in the sector by the Minister of Industry and Trade of Kenya

                                                Q&As
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business Opportunities in <span class="theme-color"> LOGISTICS </span> </a>
                                    <div class="schedule-details">

                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:00 - 12:00, </span> <span> Virtual </span> </h6>
                                            <p>
                                                Business opportunities in Logistics

                                                Room Brussels/Stockholm

                                                Moderated by the European Business Council for Africa (EBCAM)

                                                Opportunities & challenges by Flying Swans (Netherlands), Vecturis (Belgium), and Port of Antwerp (Belgium)

                                                Reforms in the sector by the Ministry of Transportation of Kenya

                                                Q&As
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business Opportunities in <span class="theme-color"> WATER INFRASTRUCTURE </span> </a>
                                    <div class="schedule-details">

                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:00 - 12:00, </span> <span> Virtual </span> </h6>
                                            <p>
                                                Business opportunities in Water Infrastructure
                                                Room Royal
                                                Moderated by the Austrian Trade Commission for Southern Africa, and the Council of French Enterprises in Africa (CIAN)
                                                Opportunities & challenges by John Cockerill Environment (Belgium), Mota-Engil (Portugal), and Suez (France)
                                                Reforms and PPPs by the Minister of Energy and Water of Kenya
                                                Q&As
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>



                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="12pm">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> EU-KENYA  <span class="theme-color"> PARTNERSHIP </span> </a>
                                    <div class="schedule-details">

                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">12:00 - 13:00, </span> <span> Virtual </span> </h6>
                                            <p>Justo vitae risus viverra vulputate.Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="1pm">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> VIRTUAL <span class="theme-color"> LUNCH </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">13:00 - 14:00, </span> <span> Virtual </span> </h6>
                                            <p>Justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="2pm">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> POLICY OPTIONS TO SUPPORT EUROPEAN INVESTMENT IN <span class="theme-color"> KENYA </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">14:00 - 15:00, </span> <span> Virtual </span> </h6>
                                            <p>Justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="3pm">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> HOW TO MAKE THE MOST OF EU-KENYA <span class="theme-color"> INVESTMENT & TRADE AGREEMENTS </span> </a>
                                    <div class="schedule-details">

                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">15:00 - 17:00, </span> <span> Virtual </span> </h6>
                                            <p>Justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> BANKING REFORMS & THE EU EXTERNAL INVESTMENT PLAN SUPPORT TO <span class="theme-color"> FINANCE FOR INVESTMENT </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">15:00 - 17:00 </span> <span> Virtual </span> </h6>
                                            <p>Justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="5pm">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> <span class="theme-color"> CLOSURE </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">17:00, </span> <span> Virtual </span> </h6>
                                            <p>Justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="event-schedule-wrap col-md-10">
                    <h4>
                        Day 2
                    </h4>
                    <ul class="nav-tabs secondery-font schedule-tabs" role="tablist" style="list-style: none;">
                        <li class="active wow fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#8amDay2" role="tab" data-toggle="tab" >
                                <span class="number"><b> 8:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li role="presentation" class="wow fadeInDown"  data-wow-delay="0.3s">
                            <a aria-expanded="false" href="#9amDay2" role="tab" data-toggle="tab">
                                <span class="number"><b> 9:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li role="presentation" class="wow fadeInDown"  data-wow-delay="0.3s">
                            <a aria-expanded="false" href="#12pmDay2" role="tab" data-toggle="tab">
                                <span class="number"><b> 12:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li role="presentation" class="wow fadeInDown"  data-wow-delay="0.3s">
                            <a aria-expanded="false" href="#1pmDay2" role="tab" data-toggle="tab">
                                <span class="number"><b> 13:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li role="presentation" class="wow fadeInDown"  data-wow-delay="0.3s">
                            <a aria-expanded="false" href="#2pmDay2" role="tab" data-toggle="tab">
                                <span class="number"><b> 14:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li role="presentation" class="wow fadeInDown"  data-wow-delay="0.3s">
                            <a aria-expanded="false" href="#3pmDay2" role="tab" data-toggle="tab">
                                <span class="number"><b> 15:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li role="presentation" class="wow fadeInDown"  data-wow-delay="0.3s">
                            <a aria-expanded="false" href="#5pmDay2" role="tab" data-toggle="tab">
                                <span class="number"><b> 17:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="8amDay2">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> KENYA: A NEW DESTINATION FOR  <span class="theme-color"> EU INVESTMENTS </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">8:00 - 9:00 </span>  </h6>
                                            <p>Justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="9amDay2">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business Opportunities in <span class="theme-color"> AGRICULTURE & AGROPROCESSING </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:00 - 12:00, </span> <span> Virtual </span> </h6>
                                            <p>
                                                Business opportunities in Agriculture & Agro-Processing
                                                Room Brussels/Stockholm
                                                Moderated by the Netherlands-African Business Council (NABC)
                                                Opportunities & challenges by Inalca (Italy), Castel (France), Gauff (Germany), Fazenda Girassol (Spain), and Signature Agri-Investments (Netherlands)
                                                Reforms in the sector by the Minister of Agriculture of Kenya
                                                Q&As
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>


                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business Opportunities in <span class="theme-color"> RENEWABLE ENERGY </span> </a>
                                    <div class="schedule-details">

                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:00 - 12:00, </span> <span> Virtual </span> </h6>
                                            <p>
                                                Business opportunities in Renewable Energy
                                                Room Oslo/Copenhagen
                                                Moderated by the Delegation of German Industries and Commerce (AHK), and Afrika Verein
                                                Opportunities & challenges by Siemens Energy (Germany), Total Energies (France), Exergia (Portugal), TNO (Netherlands)
                                                Energy and Water Regulator Institute IRSEA (Kenya)
                                                Roadmap by the Minister of Energy and Water (Kenya)
                                                Q&As
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business Opportunities in <span class="theme-color"> DIGITISATION </span> </a>
                                    <div class="schedule-details">

                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:00 - 12:00, </span> <span> Virtual </span> </h6>
                                            <p>
                                                Business opportunities in Digitalisation

                                                Room Royal

                                                Moderated by the Chamber of Commerce Portugal – Kenya (CCIPA)

                                                Opportunities & challenges by Heetch (France), SAP (Germany), and Satec (Spain)

                                                Facilities to invest in innovation in the sector by the Kenyan National Bank (BNA)

                                                Q&As
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business Opportunities in <span class="theme-color"> MANUFACTURING </span> </a>
                                    <div class="schedule-details">

                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:00 - 12:00, </span> <span> Virtual </span> </h6>
                                            <p>
                                                Business opportunities in Manufacturing

                                                Room Oslo/Copenhagen

                                                Moderated by Business France and the Movement of the Enterprises of France

                                                Opportunities & challenges by ALPLA (Austria), AWDC (Belgium), Arslanian (Belgium), and Saint Gobain (France)

                                                Reforms in the sector by the Minister of Industry and Trade of Kenya

                                                Q&As
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business Opportunities in <span class="theme-color"> LOGISTICS </span> </a>
                                    <div class="schedule-details">

                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:00 - 12:00, </span> <span> Virtual </span> </h6>
                                            <p>
                                                Business opportunities in Logistics

                                                Room Brussels/Stockholm

                                                Moderated by the European Business Council for Africa (EBCAM)

                                                Opportunities & challenges by Flying Swans (Netherlands), Vecturis (Belgium), and Port of Antwerp (Belgium)

                                                Reforms in the sector by the Ministry of Transportation of Kenya

                                                Q&As
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business Opportunities in <span class="theme-color"> WATER INFRASTRUCTURE </span> </a>
                                    <div class="schedule-details">

                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:00 - 12:00, </span> <span> Virtual </span> </h6>
                                            <p>
                                                Business opportunities in Water Infrastructure
                                                Room Royal
                                                Moderated by the Austrian Trade Commission for Southern Africa, and the Council of French Enterprises in Africa (CIAN)
                                                Opportunities & challenges by John Cockerill Environment (Belgium), Mota-Engil (Portugal), and Suez (France)
                                                Reforms and PPPs by the Minister of Energy and Water of Kenya
                                                Q&As
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>



                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="12pmDay2">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> EU-KENYA  <span class="theme-color"> PARTNERSHIP </span> </a>
                                    <div class="schedule-details">

                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">12:00 - 13:00, </span> <span> Virtual </span> </h6>
                                            <p>Justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="1pmDay2">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> VIRTUAL <span class="theme-color"> LUNCH </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">13:00 - 14:00, </span> <span> Virtual </span> </h6>
                                            <p>Justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="2pmDay2">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> POLICY OPTIONS TO SUPPORT EUROPEAN INVESTMENT IN <span class="theme-color"> KENYA </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">14:00 - 15:00, </span> <span> Virtual </span> </h6>
                                            <p>Justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="3pmDay2">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> HOW TO MAKE THE MOST OF EU-KENYA <span class="theme-color"> INVESTMENT & TRADE AGREEMENTS </span> </a>
                                    <div class="schedule-details">

                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">15:00 - 17:00, </span> <span> Virtual </span> </h6>
                                            <p>Justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> BANKING REFORMS & THE EU EXTERNAL INVESTMENT PLAN SUPPORT TO <span class="theme-color"> FINANCE FOR INVESTMENT </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">15:00 - 17:00 </span> <span> Virtual </span> </h6>
                                            <p>Justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="5pmDay2">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> <span class="theme-color"> CLOSURE </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">17:00, </span> <span> Virtual </span> </h6>
                                            <p>Justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> John Doe</span> </p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Event Schedule Ends -->

        <!-- Our Speakers Start -->
        <section id="our-speakers" class="space-45">
            <div class="our-speakers-bg relative-div">
                <span class="mask-overlay"></span>
                <div class="container theme-container relative-div">
                    <div class="title-wrap space-45">
                        <h2 class="section-heading white-color wow fadeInDown"  data-wow-delay="0.2s"> Our Speakers </h2>
                        <p class="title-devider dark wow fadeInUp"  data-wow-delay="0.2s"> <span class="white-line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> <span class="white-line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> <span class="white-line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span></p>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 space-bottom-50 speakers-wrap">
                            <div class="speakers-media wow fadeInDown"  data-wow-delay="0.6s">
                                <img src="{{asset('assets/img/speakers/speakers-1.png')}}" alt="">
                                <div class="social-overlay">
                                    <ul>
                                        <li> <a href="#"><span class="fa fa-twitter"></span> </a> </li>
                                        <li> <a href="#"><span class="fa fa-facebook"></span> </a> </li>
                                        <li> <a href="#"><span class="fa fa-envelope"></span> </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="speakers-name secondery-font text-center wow fadeInUp"  data-wow-delay="0.6s">
                                <a class="name" href="#">Sandra Doe</a>
                                <h6 class="designation  gray-color">Communications Expert</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 space-bottom-50 speakers-wrap">
                            <div class="speakers-media wow fadeInDown"  data-wow-delay="1.1s">
                                <img src="{{asset('assets/img/speakers/speakers-2.png')}}" alt="">
                                <div class="social-overlay">
                                    <ul>
                                        <li> <a href="#"><span class="fa fa-twitter"></span> </a> </li>
                                        <li> <a href="#"><span class="fa fa-facebook"></span> </a> </li>
                                        <li> <a href="#"><span class="fa fa-envelope"></span> </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="speakers-name secondery-font text-center wow fadeInUp"  data-wow-delay="1.1s" >
                                <a class="name" href="#">Peter Doe</a>
                                <h6 class="designation  gray-color">M&E Expert</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 space-bottom-50 speakers-wrap">
                            <div class="speakers-media wow fadeInDown"  data-wow-delay="1.4s">
                                <img src="{{asset('assets/img/speakers/speakers-3.png')}}" alt="">
                                <div class="social-overlay">
                                    <ul>
                                        <li> <a href="#"><span class="fa fa-twitter"></span> </a> </li>
                                        <li> <a href="#"><span class="fa fa-facebook"></span> </a> </li>
                                        <li> <a href="#"><span class="fa fa-envelope"></span> </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="speakers-name secondery-font text-center wow fadeInUp"  data-wow-delay="1.4s">
                                <a class="name" href="#">Jane Doe</a>
                                <h6 class="designation  gray-color">Governance Expert </h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 space-bottom-50 speakers-wrap">
                            <div class="speakers-media wow fadeInDown"  data-wow-delay="1.7s">
                                <img src="{{asset('assets/img/speakers/speakers-4.png')}}" alt="">
                                <div class="social-overlay">
                                    <ul>
                                        <li> <a href="#"><span class="fa fa-twitter"></span> </a> </li>
                                        <li> <a href="#"><span class="fa fa-facebook"></span> </a> </li>
                                        <li> <a href="#"><span class="fa fa-envelope"></span> </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="speakers-name secondery-font text-center wow fadeInUp"  data-wow-delay="1.4s">
                                <a class="name" href="#">John Doe</a>
                                <h6 class="designation  gray-color">Policy Expert</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Our Speakers Ends -->

        <!-- Event FAQS Start -->
        <section id="opportunity" class="">
            <div class="light-bg event-faqs-wrap space-100">
                <div class="container theme-container">
                    <div class="title-wrap space-bottom-30">
                        <h2 class="section-heading wow fadeInDown"  data-wow-delay="0.2s"> Kenyan   <span class="theme-color"> Opportunities </span> </h2>
                        <p class="title-devider wow fadeInUp"  data-wow-delay="0.2s"> <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span></p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-5">
                            <ul class="nav-tabs secondery-font event-faqs-tabs" role="tablist">
                                <li class="active wow fadeInLeft"  data-wow-delay="0.2s"  role="presentation">
                                    <a aria-expanded="false" href="#faqs-1" role="tab" data-toggle="tab" > OVERVIEW</a>
                                </li>
                                <li  role="presentation" class="wow fadeInLeft"  data-wow-delay="1.1s">
                                    <a aria-expanded="false" href="#faqs-2" role="tab" data-toggle="tab" >  WHAT CAN Kenya OFFER TO BUSINESS? </a>
                                </li>
                                <li  role="presentation" class="wow fadeInLeft"  data-wow-delay="1.4s">
                                    <a aria-expanded="false" href="#faqs-3" role="tab" data-toggle="tab" >  CHALLENGES  </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8 col-sm-7">
                            <div class="tab-content event-faqs">
                                <div id="faqs-1" class="tab-pane fade active in" role="tabpanel">
                                    <ul class="wow fadeInDown"  data-wow-delay="0.6s">
                                        <li>
                                            Location: in Southern Africa on the west coast of the continent. Bordered with the Atlantic Ocean to the West; Namibia to the South; the Democratic Republic of Congo to the North and East; and Zambia to the East.
                                        </li>
                                        <li>
                                            Geography: has a rainforest in the north, just over 1000 km of Atlantic coastline from north to south, an interior highland rising between 1,200 m and 1,800 m, and savannas in the interior south and southeast. The highest Peak in Kenya is Morro de Moco at 2,620 m above sea level.
                                            Languages: Portuguese (official).
                                        </li>

                                        <li>
                                            Political System: Democratic Presidential Republic.
                                        </li>
                                        <li>
                                            Current President: João Manuel Gonçalves Lourenço, since 2017.
                                        </li>
                                        <li>
                                            Currency: Kwanza (AOA).
                                        </li>
                                        <li>
                                            Capital: Luanda is inhabited by 8 M people, approximately the same as Switzerland
                                        </li>
                                    </ul>


                                </div>
                                <div id="faqs-2" class="tab-pane fade" role="tabpanel">
                                    <p class="wow fadeInDown"  data-wow-delay="0.6s">
                                        <strong>Gateway to Access Southern & Central Africa</strong> <br>
                                        Its geostrategic position allows investors access to the regional market (SADC) of 16 countries, with a total GDP of USD 600 billion, and more than 200 million consumers.
                                        Access by sea, with four neighboring countries: D.R. Congo, Congo Brazzaville, Zambia, and Namibia.
                                        <br>

                                        <strong>High Potential of the Internal Market</strong> <br>
                                        The market is composed of mostly youth, 70% under ’30s.
                                        This Young population means that the cost of labor for less-skilled workers is very low.
                                        Kenya possesses a considerable market of more than 30M inhabitants with a GDP per capita of € 1,672.
                                        Investment in the priority sectors carries the possibility of replacing imports in the amount of US $ 3.3 billion.
                                        <br>

                                        <strong>Diversity and Abundance of Natural Resources</strong> <br>
                                        Minerals: Access to 38 of the top 50 minerals used in various industries, such as diamonds, iron, gold, phosphates, manganese, copper, lead, zinc, volphamium, tungsten, titanium, chromium, marble, granite, and uranium. Kenya is the second-largest oil producer in sub-Saharan Africa and one of the largest in the mining industry.
                                        Agriculture: The presence of several microclimates allows for a variety of agricultural production during the 12 months of the year, with  35 million hectares of fertile land of which only 14% is being used.
                                        Forest: 69M Ha (hectares) of forestry extension comprised of woods of great economic values such as ebony, African sandalwood, and rosewood, and commercial plantations of pine and eucalyptus trees.
                                        Fisheries: Access to just over 1000 km of coastline with abundant stocks of fishery products such as mackerel and tuna, shellfish, sardines, and seafood, among others.
                                        Political Stability with Young Population
                                        Political stability since 2002.
                                        Regular presidential elections.
                                        A stable Parliament with the representation of 5 parties.
                                        Young and growing middle-class workforce. <br>

                                        <strong>Kenya is Determined to Attract Investment and Improve its Business Environment</strong>
                                        <br>
                                        Attractive for FDI in recent years. International financial support.
                                        Long-term strategy (LTS 2025) foresees important infrastructure investment projects that constitute major business opportunities.
                                        Bilateral agreements on the promotion and protection of investments with several countries, with an emphasis on Germany,
                                        Spain, Italy, Portugal. Outside the EU, it has agreements with the UK, Russia, Switzerland, South Africa, and Guinea Bissau.
                                        <br>

                                        <strong>Support to EU investors</strong> <br>
                                        The Kenya-EU Sustainable Investment Facilitation Agreement (SIFA) is about to be concluded. The agreement will be enhancing the transparency of investment measures, simplify procedures, promote responsible investment, contribute to Kenya’s economic diversification and help small and medium-sized enterprises (SMEs).

                                        The negotiators behind this agreement will be there to explain how firms can make the most of it when investing in Kenya.
                                        <br>
                                    </p>

                                </div>
                                <div id="faqs-3" class="tab-pane fade" role="tabpanel">
                                    <ul class="wow fadeInDown"  data-wow-delay="0.6s">
                                        <li>
                                            High vulnerability to oil price fluctuations: 98% of export earnings come from oil production.
                                        </li>
                                        <li>
                                            High level of Bureaucracy.
                                        </li>
                                        <li>
                                            The challenging judicial system.
                                        </li>
                                        <li>
                                            Inadequate infrastructure, i.e. roads, energy, telecommunications, and water.
                                        </li>
                                        <li>
                                            Lack of sufficient qualified workforce and skilled labor.
                                        </li>
                                        <li>
                                            The high unemployment rate sustains the high poverty rate.
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Event FAQS Ends -->

        <!-- Register Start -->
        <section id="register">
            <div class="register-bg">
                <div class="container theme-container space-100">
                    <div class="title-wrap space-bottom-50">
                        <h2 class="section-heading white-color wow fadeInDown"  data-wow-delay="0.2s"> Register </h2>
                        <p class="title-devider wow fadeInUp"  data-wow-delay="0.2s">
                            <span class="white-line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span>
                            <span class="white-line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span>
                            <span class="white-line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
                        </p>
                    </div>
                    <form class="contact-form" id="registration-form" method="post" action="#">
                        <div class="row">
                            <div class="form-group col-sm-12 form-alert"></div>
                            <div class="form-group col-sm-3 wow fadeInDown"  data-wow-delay="0.6s">
                                <label class="sr-only" for="rf_first_name">First Name</label>
                                <input type="text" placeholder="First Name" name="rf_first_name" id="rf_first_name" value="" data-toggle="tooltip" title="First Name is required" class="form-control input-first-name">
                            </div>
                            <div class="form-group col-sm-3 wow fadeInDown"  data-wow-delay="0.2s">
                                <label class="sr-only" for="rf_last_name">Last Name</label>
                                <input type="text" placeholder="Last Name" name="rf_last_name" id="rf_last_name" value="" data-toggle="tooltip" title="Last Name is required" class="form-control input-last-name">
                            </div>
                            <div class="form-group col-sm-3 wow fadeInDown"  data-wow-delay="1.1s">
                                <label class="sr-only" for="rf_email">Email Address</label>
                                <input type="text" placeholder="Email Address" name="rf_email" id="rf_email" value="" data-toggle="tooltip" title="Email is required" class="form-control input-email">
                            </div>
                            <div class="form-group col-sm-3 wow fadeInDown"  data-wow-delay="1.4s">
                                <label class="sr-only" for="rf_phone">Phone Number</label>
                                <input type="text" placeholder="Phone Number" name="rf_phone" id="rf_phone" value="" data-toggle="tooltip" title="Phone is required" class="form-control input-phone">
                            </div>
                            <div class="form-group col-sm-offset-3 col-sm-6 button-style">
                                <label class="theme-btn btn wow zoomIn"  data-wow-delay="0.2s">
                                    <input type="submit" name="rf_submit" id="rf_submit" value="Register Now" class="form-button form-button-submit submit-button">
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- / Register Ends -->

        <!-- FOOTER -->
        @include('partials.footer')
        <!-- /FOOTER -->

        <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

    </main>

@endsection
