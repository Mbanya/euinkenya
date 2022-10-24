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
                        <h2 class="secondery-font wow fadeInDown" data-wow-delay="0.2s"> EU - Kenya Business Forum </h2>
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
                                    The EU is also the largest export destination for Kenyan products and its third source of goods.
                                    Kenyans ship flowers and agriculture products to Europe but can increase their trade by €242 M ($236 M) per year.
                                    On the other hand, they buy a wide range of manufacturing goods from Europeans but this trade can be increased by €295 ($287) M more.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 space-bottom-50">
                        <div class="jevent-wrap">
                            <div class="jevent-content">
                                <a href="#" class="jevent-title-1 wow fadeInDown"  data-wow-delay="0.2s"> Business talking  <span class="theme-color"> to business </span> </a>
                                <p class="wow fadeInDown"  data-wow-delay="1.0s">
                                    Kenya and the EU are key economic partners. EU investment represents more than 30% of Kenya’s total FDI stock and can be expanded.
                                    Kenya’s strong growth prospects are supported by an emerging middle class and an increasing appetite for high-value good and services
                                    that European firms offer.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 space-bottom-50">
                        <div class="jevent-wrap">
                            <div class="jevent-content">
                                <a href="#" class="jevent-title-1 wow fadeInDown"  data-wow-delay="0.2s"> Investment  <span class="theme-color"> facilitation </span> </a>
                                <p class="wow fadeInDown"  data-wow-delay="1.0s">
                                    The EU-Kenya Business Forum aims to foster European trade & investment in Kenya by highlighting economic opportunities and potential whilst
                                    discussing areas for improvements. The event will promote Kenya as a business destination, boost trade, create decent jobs and promote
                                    sustainable and diversified growth. In line with its strategic vision, the EU and its Member states, being major trade and investment partners,
                                    are committed to support the formulation and implementation of reforms oriented towards a sustainable economic diversification of
                                    the Kenyan economy.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 space-bottom-50">
                        <div class="jevent-wrap">
                            <div class="jevent-content">
                                <a href="#" class="jevent-title-1 wow fadeInDown"  data-wow-delay="0.2s"> Event  <span class="theme-color"> Format </span> </a>
                                <p class="wow fadeInDown"  data-wow-delay="1.0s">
                                    The EU-Kenya Business Forum will be the first of its kind. It is a deliverable of the EU-Kenya Strategic Dialogue to market Kenya´s
                                    trade & investment potential highlighting key successes and opportunities as well as remaining challenges.
                                    It will be held in Nairobi in Feb 2023 and includes a platform for direct interaction between companies (B2B)
                                    and between firms and policymakers (B2G).
                                    Jointly organised by the EU, its Member States in partnership with the European Business Council, the Kenya Private Sector
                                    Alliance and the firms, they selected the sectors to highlight as circular economy, agriculture, energy & ICT & other
                                    infrastructure. Specific panels will showcase business cases and opportunities.
                                    The forum will gather public officials from the EU and the Kenyan government, investors, business support
                                    organisations and financial institutions to discuss trade & investment opportunities and challenges in concrete terms.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 space-bottom-50">
                        <div class="jevent-wrap">
                            <div class="jevent-content">
                                <a href="#" class="jevent-title-1 wow fadeInDown"  data-wow-delay="0.2s"> Event  <span class="theme-color"> Audience </span> </a>

                                <p class="wow fadeInDown" data-wow-delay="1.0s">
                                    This high-level event is hosted by the EU Commission and the Kenyan presidency. A wide range of EU officials will collaborate,
                                    from the political side to the more technical sides such as the Directorate Generals of International Partnerships and Trade,
                                    among others.
                                    The event is organised in a team Europe spirit and includes the 27 EU Member States representations and business.
                                    From the Kenyan side, officials from key government state departments and agencies as well as Business Support Organisations
                                    are on board.
                                    A special role will be given to financing institutions that can help companies in Kenya & Europe. Finally and above all,
                                    firms already established in Kenya and potential exporters & investors are at the core of all activities
                                    in the Business Forum.
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- / Welcome To Jevent Ends -->




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

        <!-- Event Schedule Start -->
        <section id="event-schedule" class="space-45">
            <div class="container theme-container">
                <div class="title-wrap space-bottom-50">
                    <h2 class="section-heading wow fadeInDown"  data-wow-delay="0.2s">EVENT  <span class="theme-color"> PROGRAMME </span> </h2>
                    <p class="title-devider wow fadeInUp"  data-wow-delay="0.2s"> <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span></p>
                </div>

                <div class="event-schedule-wrap col-md-10">
                    <h4>
                        Day 1 : TRADING & INVESTING IN <span class="theme-color">KENYA</span>
                    </h4>

                    <ul class="nav-tabs secondery-font schedule-tabs" role="tablist" style="list-style: none;">

                            <li class="wow active fadeInDown"  data-wow-delay="0.6s" role="presentation">
                                <a aria-expanded="false" href="#8am" role="tab" data-toggle="tab" >
                                    <span class="number"><b> 8:00 </b></span>
                                    <span class="day"><b>  </b> Session</span>
                                </a>
                            </li>
                        <li class="wow fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#9am" role="tab" data-toggle="tab" >
                                <span class="number"><b> 9:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>
                        <li class="wow fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#930am" role="tab" data-toggle="tab" >
                                <span class="number"><b> 9:30 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li class="wow fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#10am" role="tab" data-toggle="tab" >
                                <span class="number"><b> 10:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>
                        <li class="wow fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#1030am" role="tab" data-toggle="tab" >
                                <span class="number"><b> 10:30 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>
                        <li class="wow fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#11am" role="tab" data-toggle="tab" >
                                <span class="number"><b> 11:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>
                        <li class="wow fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#1130am" role="tab" data-toggle="tab" >
                                <span class="number"><b> 11:30 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li class="wow fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#15pm" role="tab" data-toggle="tab" >
                                <span class="number"><b> 15:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>
                        <li class="wow fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#1630pm" role="tab" data-toggle="tab" >
                                <span class="number"><b> 16:30 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>




                    </ul>


                    <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fadeIn active" id="8am">
                                <ul class="schedule-list no-margin">
                                    <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                        <a href="#" class="jevent-title-1 toggle"> Breakfast </a>
                                        <div class="schedule-details">
                                            <div class="schedule-box">
                                                <h6 class="secondery-font"> <span class="black-color">8:00 - 8:45 </span>  </h6>
                                                <p>
                                                    Networking Breakfast
                                                </p>
                                                <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> </span> </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        <div role="tabpanel" class="tab-pane fadeIn" id="9am">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> KENYA: A DESTINATION FOR EU <span class="theme-color">INVESTMENTS & EXPORTS</span>  </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">8:00 - 8:45 </span>  </h6>
                                            <p>
                                                Opening Remarks
                                                Vladis Dombrovskis, Executive Vice-President and EU Commissioner for Trade (tbc) H.E. Willian Ruto, President of Kenya (tbc)
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color"> </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fadeIn" id="930am">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> EU – KENYA TRADE & INVESTMENT PARTNERSHIPS  TOWARDS A GREENER ECONOMY &  <span class="theme-color">HUMAN-CENTERED DIGITALISATION</span>  </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:30 - 10:00 </span>  </h6>
                                            <p>
                                                Henriette Geiger, EU Ambassador to Kenya on EU support to the private sector in Kenya
                                                Flora Mutai, Chairman at the Kenya Private Sector Alliance (KEPSA) on FDI opportunities in Kenya
                                                Darren Gillen, Chairman at the European Business Council on tbc
                                                Tbc, CS for trade, industry & investment
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">Panel moderated by tbc </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fadeIn" id="10am">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> OPPORTUNITTIES FOR  <span class="theme-color">EU BUSINESS</span>  </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">10:00 - 11:00 </span>  </h6>
                                            <p>
                                                Minister of Agriculture
                                                Minister of Trade
                                                tbc on  digitalisation
                                                tbc on  infrastructure
                                                Q&As
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">Panel moderated by the EU Delegation to Kenya </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fadeIn" id="1030am">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> SIGNING CEREMONIES </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">10:30 - 11:00 </span>  </h6>
                                            <p>
                                                Signing Ceremony
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>


                        <div role="tabpanel" class="tab-pane fadeIn" id="11am">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Press Conference   </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">11:30 - 11:30 </span>  </h6>
                                            <p>
                                                Press Conference
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">Panel moderated by tbc </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fadeIn" id="1130am">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in <span class="theme-color">CIRCULAR ECONOMY</span>   </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">11:30 - 13:00 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms
                                                Regulation in the sector by the . Kenyan Association/Gov agency to be identified
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in  <span class="theme-color">AGRICULTURE</span>   </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">11:30 - 13:00 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms
                                                Regulation in the sector by the . Kenyan Association/Gov agency to be identified
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in  <span class="theme-color">DIGITALISATION</span>   </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">11:30 - 13:00 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms
                                                Regulation in the sector by the . Kenyan Association/Gov agency to be identified
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>


                        <div role="tabpanel" class="tab-pane fadeIn" id="15pm">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in  <span class="theme-color">WATER & WASTE MANAGEMENT</span>   </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">15:00 - 16:30 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms
                                                Regulation in the sector by the . Kenyan Association/Gov agency to be identified
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in  <span class="theme-color">Blue Economy</span>   </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">15:00 - 16:30 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms
                                                Regulation in the sector by the . Kenyan Association/Gov agency to be identified
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in  <span class="theme-color">AGRO-PROCESSING</span>   </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">15:00 - 16:30 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms
                                                Regulation in the sector by the . Kenyan Association/Gov agency to be identified
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in  <span class="theme-color">HEALTH</span>   </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">15:00 - 16:30 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms
                                                Regulation in the sector by the . Kenyan Association/Gov agency to be identified
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fadeIn" id="1630pm">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Closure </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">16:30 - 17:30 </span>  </h6>
                                            <p>
                                                Henriette Geiger, EU Ambassador to Kenya and moderators on the key takeaways per panel
                                                Hon. Betty C. Maina Minister of Trade & Industry of Kenya on follow-up actions (tbc)
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>






                        </div>




                    </div>


                </div>

                <div class="event-schedule-wrap col-md-10">
                    <h4>
                        Day 2 : INFRASTRUCTURE &  <span class="theme-color">BUSINESS ENVIRONMENT</span>
                    </h4>

                    <ul class="nav-tabs secondery-font schedule-tabs" role="tablist" style="list-style: none;">

                        <li class="wow active fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#830amd2" role="tab" data-toggle="tab" >
                                <span class="number"><b> 8:30 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>
                        <li class="wow fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#945amd2" role="tab" data-toggle="tab" >
                                <span class="number"><b> 9:45 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>
                        <li class="wow fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#10amd2" role="tab" data-toggle="tab" >
                                <span class="number"><b> 10:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li class="wow fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#1130amd2" role="tab" data-toggle="tab" >
                                <span class="number"><b> 11:30 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li class="wow fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#1230pmd2" role="tab" data-toggle="tab" >
                                <span class="number"><b> 12:30 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>




                    </ul>


                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane fadeIn active" id="830amd2">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in <span class="theme-color">WATER INFRASTRUCTURE</span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">8:30 - 9:45 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms

                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified.
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in <span class="theme-color">e-MOBILITY & URBAN TRANSPORT</span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">8:30 - 10:00 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms

                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified.
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in <span class="theme-color">RENEWABLE ENERGY & HYDROGEN</span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">8:30 - 10:00 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms

                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified.
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fadeIn" id="945amd2">

                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in <span class="theme-color">CONSTRUCTION</span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:45 - 11:15 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms

                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified.
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fadeIn" id="10amd2">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in <span class="theme-color">LOGISTICS & FREIGHT</span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">10:00 - 11:30 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms

                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified.
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in <span class="theme-color">ENERGY TRANSMISSION</span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">10:00 - 11:30 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms

                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified.
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>




                        </div>

                        <div role="tabpanel" class="tab-pane fadeIn" id="1130amd2">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> FINANCE & SUPPORT   <span class="theme-color">FOR INVESTMENT & TRADE</span>  </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">11:30 - 12:30 </span>  </h6>
                                            <p>
                                                Strategic investment Finance tools - sovereign and commercial subovereign (tbc)
                                                Mid Caps- Private Sector Finance (tbc)
                                                SMEs finance (tbc)
                                                IYBA launch
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">Panel moderated by EIB</span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fadeIn" id="1230pmd2">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> BUSINESS ENVIRONMENT  (Closure) </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">12:30 - 13:30 </span>  </h6>
                                            <p>
                                                Henriette Geiger, EU Ambassador to Kenya and moderators on the key takeaways per panel
                                                Flora Mutai, Chairman at the Kenya Private Sector Alliance (KEPSA) on harnessing business opportunities, milestones in overcoming business environment challenges
                                                XXX, Minister of EAC on XXXX
                                                Hon. Betty C. Maina Minister of Trade & Industry of Kenya on follow-up actions (tbc)
                                            </p>
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
