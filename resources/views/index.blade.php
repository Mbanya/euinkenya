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
                                <h5>Radisson Blu Hotel Upper Hill</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 feature-box">
                            <div class="feature-icon wow zoomIn" data-wow-delay="0.2s">
                                <i class="fa fa-mail-reply theme-color"></i>
                            </div>
                            <div class="feature-info secondery-font wow fadeInRight" data-wow-delay="0.2s">
                                <a href="#" class="theme-color"> <b> Support Team </b> </a>
                                <h5>
                                    contact@eu-kenya-businessforum.com
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-12 feature-box">
                            <div class="feature-icon wow zoomIn" data-wow-delay="0.2s">
                                <i class="fa fa-newspaper-o theme-color"></i>
                            </div>
                            <div class="feature-info secondery-font wow fadeInRight" data-wow-delay="0.2s">
                                <a href="#" class="theme-color"> <b> Press enquiries  </b> </a>
                                <h5>
                                    beatrice.hongo@eeas.europa.eu
                                </h5>
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
                                    The EU-Kenya Business Forum is the first of its kind in Kenya. It is jointly organised by the EU,
                                    its Member States in partnership with the European Business Council, and the Government of Kenya.
                                    The two-day High-Level Business Forum to be held in Nairobi, on the 21st and 22nd February 2023
                                    will gather public officials from the EU and the Kenyan government, investors, business support
                                    organisations and financial institutions to discuss trade & investment opportunities and challenges in concrete terms.
                                    In attendance will be amongst others, Kenyan and European policymakers, public sector agencies,
                                    EU Member States embassies and consulates, private sector trade support institutions, business
                                    associations and Chambers of Commerce, captains of industries, financial and non-financial
                                    intermediaries, investors, development partners and donor agencies, academia, and the civil society.
                                    It will provide participants with an opportunity to network exchange experiences and explore win-win
                                    investment and trade opportunities.

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 space-bottom-50">
                        <div class="jevent-wrap">
                            <div class="jevent-content">
                                <a href="#" class="jevent-title-1 wow fadeInDown"  data-wow-delay="0.2s"> Business talking  <span class="theme-color"> to business </span> </a>
                                <p class="wow fadeInDown"  data-wow-delay="1.0s">
                                    The forum includes a platform for direct interaction between companies (B2B) and between firms and policymakers (B2G).
                                    These are structured networking and matchmaking sessions will assist you to elevate your personal and organizational brand,
                                    discover new business partners, discover new investment opportunities or investors among the hundreds of trade and
                                    investment professionals. One to one meetings (physical and online) will be arranged between Kenyan and EU companies,
                                    investors and public stakeholders. For the B2B meetings, appointments will be pre-scheduled as per the interest of the participants
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
                                    There will also be a series of workshops & side events to assist you interact with leading trade and business
                                    associations and Government agencies to get insights on promising sectors for investments, markets for exports
                                    and hear about business opportunities, government policies and success stories. A dedicated workshop will focus
                                    on how to export to the EU markets. The Forum provides a platform for networking and deal making.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 space-bottom-50">
                        <div class="jevent-wrap">
                            <div class="jevent-content">
                                <a href="#" class="jevent-title-1 wow fadeInDown"  data-wow-delay="0.2s"> WHY<span class="theme-color"> ATTEND? </span> </a>


                                    <ul class="wow fadeInDown" data-wow-delay="1.0s" style="margin-left: 1rem;">
                                    <li>Learn about EU and Kenyan policies and initiatives promoting trade, investment, and business?</li>
                                    <li>Understand the Kenyan market</li>
                                    <li>Explore the EU market opportunities and find EU partners</li>
                                    <li>Explore the Kenyan market opportunities and find Kenyan partners</li>
                                    <li>Meet key decision-makers, network and build partnerships on the ground through the sector focused high level panel discussions</li>
                                </ul>



                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- / Welcome To Jevent Ends -->




        <!-- Event Schedule Start -->
        <section id="event-schedule" class="space-45 ">
            <div class="container theme-container">
                <div class="title-wrap space-bottom-50">
                    <h2 class="section-heading wow fadeInDown"  data-wow-delay="0.2s">EVENT  <span class="theme-color"> PROGRAMME </span> </h2>
                    <p class="title-devider wow fadeInUp"  data-wow-delay="0.2s">
                        <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s"></span>
                        <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span>
                        <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
                    </p>

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
                            <a aria-expanded="false" href="#1015am" role="tab" data-toggle="tab" >
                                <span class="number"><b> 10:15 </b></span>
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
                            <a aria-expanded="false" href="#1120am" role="tab" data-toggle="tab" >
                                <span class="number"><b> 11:20 </b></span>
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
                                                <h6 class="secondery-font"> <span class="black-color">8:00 - 9:00 </span>  </h6>
                                                <p>
                                                    Registration & networking space
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
                                            <h6 class="secondery-font"> <span class="black-color">9:00 - 9:30 </span>  </h6>
                                            <p>
                                                Opening Remarks
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
                                            <h6 class="secondery-font"> <span class="black-color">9:30 - 10:15 </span>  </h6>
                                            <p>
{{--                                                Henriette Geiger, EU Ambassador to Kenya on EU support to the private sector in Kenya--}}
{{--                                                Flora Mutai, Chairman at the Kenya Private Sector Alliance (KEPSA) on FDI opportunities in Kenya--}}
{{--                                                Darren Gillen, Chairman at the European Business Council on TBC--}}
{{--                                                TBC, CS for trade, industry & investment--}}
                                            </p>
                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">Panel moderated by ... </span> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fadeIn" id="1015am">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> OPPORTUNITTIES FOR  <span class="theme-color">EU BUSINESS</span>  </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">10:15 - 11:00 </span>  </h6>
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

                        <div role="tabpanel" class="tab-pane fadeIn" id="11am">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> SIGNING CEREMONIES </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">11:00 - 11:20 </span>  </h6>
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
                                    <a href="#" class="jevent-title-1 toggle"> Tea break & networking space </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">11:00 - 11:30 </span>  </h6>
                                            <p>
                                                Tea break & networking space
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>


                        <div role="tabpanel" class="tab-pane fadeIn" id="1120am">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Press Conference   </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">11:20 - 12:00 </span>  </h6>
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
                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified
                                            </p>
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
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
                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified
                                            </p>
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
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
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
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
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
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
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
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
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Grow your business
                                        <span class="theme-color">PRE-ORGANISED B2Bs</span>   </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">15:00 - 17:00 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms
                                                Regulation in the sector by the . Kenyan Association/Gov agency to be identified
                                            </p>
                                            {{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fadeIn" id="1630pm">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Follow Up </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">16:30 - 17:30 </span>  </h6>
                                            <p>
{{--                                                Henriette Geiger, EU Ambassador to Kenya and moderators on the key takeaways per panel--}}
{{--                                                Hon. Betty C. Maina Minister of Trade & Industry of Kenya on follow-up actions (tbc)--}}
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
                            <a aria-expanded="false" href="#930amd2" role="tab" data-toggle="tab" >
                                <span class="number"><b> 9:30 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>
                        <li class="wow fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#11amd2" role="tab" data-toggle="tab" >
                                <span class="number"><b> 11:00 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>

                        <li class="wow fadeInDown"  data-wow-delay="0.6s" role="presentation">
                            <a aria-expanded="false" href="#1230amd2" role="tab" data-toggle="tab" >
                                <span class="number"><b> 12:30 </b></span>
                                <span class="day"><b>  </b> Session</span>
                            </a>
                        </li>






                    </ul>


                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fadeIn active" id="830amd2">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> BUSINESS <span class="theme-color">ENVIRONMENT</span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">8:30 - 9:30 </span>  </h6>
                                            <p>

                                            </p>
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fadeIn active" id="930amd2">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in <span class="theme-color">WATER INFRASTRUCTURE</span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:30 - 11:00 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms

                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified.
                                            </p>
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in <span class="theme-color">e-MOBILITY & URBAN TRANSPORT</span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:30 - 11:00 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms

                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified.
                                            </p>
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in <span class="theme-color">RENEWABLE ENERGY 1</span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:30 - 11:00  </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms

                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified.
                                            </p>
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in <span class="theme-color">e-MOBILITY & URBAN INFRASTRUCTURE </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:30 - 11:00  </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms

                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified.
                                            </p>
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in <span class="theme-color">FINANCE & SUPPORT FOR INVESTMENT & TRADE </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">9:30 - 11:00  </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms

                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified.
                                            </p>
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fadeIn" id="11amd2">

                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in <span class="theme-color">LOGISTICS & FREIGHT</span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">11:00 - 12:30 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms

                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified.
                                            </p>
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in <span class="theme-color">RENEWABLE ENERGY 2 </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">11:00 - 12:30 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms

                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified.
                                            </p>
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in <span class="theme-color">CONSTRUCTION </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">11:00 - 12:30 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms

                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified.
                                            </p>
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> Business opportunities in <span class="theme-color">FINANCE & SUPPORT FOR SMEs  </span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">11:00 - 12:30 </span>  </h6>
                                            <p>
                                                Opportunities & challenges by firms

                                                Regulation in the sector by the Kenyan Association/Gov agency to be identified.
                                            </p>
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fadeIn" id="1230amd2">
                            <ul class="schedule-list no-margin">
                                <li class="wow fadeInUp"  data-wow-delay="0.2s">
                                    <a href="#" class="jevent-title-1 toggle"> CLOSURE<span class="theme-color"></span> </a>
                                    <div class="schedule-details">
                                        <div class="schedule-box">
                                            <h6 class="secondery-font"> <span class="black-color">12:30 - 13:00 </span>  </h6>
                                            <p>
                                                Followed by B2Bs/B2Gs& field visits organised by the Business Associations
                                            </p>
{{--                                            <p class="secondery-font"><span class="black-color">Speakers:</span> <span class="theme-color">EU BSO </span> </p>--}}
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
