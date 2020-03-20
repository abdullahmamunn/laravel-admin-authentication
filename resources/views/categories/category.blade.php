@extends('front-end.master')
@section('content')
    <!--//-->
    <div class=" banner-buying">
        <div class=" container">
            <h3><span>Deal</span>ers</h3>
            <!---->
            <div class="menu-right">
                <ul class="menu">
                    <li class="item1"><a href="#"> Menu<i class="glyphicon glyphicon-menu-down"> </i> </a>
                        <ul class="cute">
                            <li class="subitem1"><a href="buy.html">Buy </a></li>
                            <li class="subitem2"><a href="buy.html">Rent </a></li>
                            <li class="subitem3"><a href="buy.html">Hostels </a></li>
                            <li class="subitem1"><a href="buy.html">Resale </a></li>
                            <li class="subitem2"><a href="loan.html">Home Loan</a></li>
                            <li class="subitem3"><a href="buy.html">Apartment </a></li>
                            <li class="subitem3"><a href="dealers.html">Dealers</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
            <!--initiate accordion-->
            <script type="text/javascript">
                $(function() {
                    var menu_ul = $('.menu > li > ul'),
                        menu_a  = $('.menu > li > a');
                    menu_ul.hide();
                    menu_a.click(function(e) {
                        e.preventDefault();
                        if(!$(this).hasClass('active')) {
                            menu_a.removeClass('active');
                            menu_ul.filter(':visible').slideUp('normal');
                            $(this).addClass('active').next().stop(true,true).slideDown('normal');
                        } else {
                            $(this).removeClass('active');
                            $(this).next().stop(true,true).slideUp('normal');
                        }
                    });

                });
            </script>

        </div>
    </div>
    <!--//header-->
    <!--Dealers-->
    <div class="dealers">
        <div class="container">
            <h3>Dealers</h3>
            <div class="dealer">
                <h4>Find The Right Dealer For You</h4>
                <div class="dealer-grid">
                    <div class="col-sm-4 dealer-grid1">
                        <div class="dealer-grid-top">
                            <span>1</span>
                            <h6><a href="single.html">Lorem Ipsum is simply dummy text </a></h6>
                            <div class="clearfix"> </div>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                    <div class="col-sm-4 dealer-grid1">
                        <div class="dealer-grid-top">
                            <span>2</span>
                            <h6><a href="single.html">Lorem Ipsum is simply dummy text</a></h6>
                            <div class="clearfix"> </div>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                    <div class="col-sm-4 dealer-grid1">
                        <div class="dealer-grid-top">
                            <span>3</span>
                            <h6><a href="single.html">Lorem Ipsum is simply dummy text</a></h6>
                            <div class="clearfix"> </div>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="dealer-top">
                <h4>Recent Deals</h4>
                <div class="deal-top-top">
                    <div class="col-md-3 top-deal-top">
                        <div class=" top-deal">
                            <a href="{{route('details')}}" class="mask"><img src="{{asset('front-end/images/de.jpg')}}" class="img-responsive zoom-img" alt=""></a>
                            <div class="deal-bottom">
                                <div class="top-deal1">
                                    <h5><a href="single.html"> ut perspiciatis</a></h5>
                                    <p>Plot Area : 150 Sq.Yrds</p>
                                    <p>Price: $250000</p>
                                </div>
                                <div class="top-deal2">
                                    <a href="single.html" class="hvr-sweep-to-right more">More</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 top-deal-top">
                        <div class=" top-deal">
                            <a href="single.html" class="mask"><img src="{{asset('front-end/images/de1.jpg')}}" class="img-responsive zoom-img" alt=""></a>
                            <div class="deal-bottom">
                                <div class="top-deal1">
                                    <h5><a href="single.html"> ut perspiciatis</a></h5>
                                    <p>Plot Area : 150 Sq.Yrds</p>
                                    <p>Price: $250000</p>
                                </div>
                                <div class="top-deal2">
                                    <a href="single.html" class="hvr-sweep-to-right more">More</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 top-deal-top">
                        <div class=" top-deal">
                            <a href="single.html" class="mask"><img src="{{asset('front-end/images/de2.jpg')}}" class="img-responsive zoom-img" alt=""></a>
                            <div class="deal-bottom">
                                <div class="top-deal1">
                                    <h5><a href="single.html"> ut perspiciatis</a></h5>
                                    <p>Plot Area : 150 Sq.Yrds</p>
                                    <p>Price: $250000</p>
                                </div>
                                <div class="top-deal2">
                                    <a href="single.html" class="hvr-sweep-to-right more">More</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 top-deal-top ">
                        <div class=" top-deal">
                            <a href="single.html" class="mask"><img src="{{asset('front-end/images/de3.jpg')}}" class="img-responsive zoom-img" alt=""></a>
                            <div class="deal-bottom">
                                <div class="top-deal1">
                                    <h5><a href="single.html"> ut perspiciatis</a></h5>
                                    <p>Plot Area : 150 Sq.Yrds</p>
                                    <p>Price: $250000</p>
                                </div>
                                <div class="top-deal2">
                                    <a href="single.html" class="hvr-sweep-to-right more">More</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="deal-top-top">
                    <div class="col-md-3 top-deal-top">
                        <div class=" top-deal">
                            <a href="single.html" class="mask"><img src="{{asset('front-end/images/de4.jpg')}}" class="img-responsive zoom-img" alt=""></a>
                            <div class="deal-bottom">
                                <div class="top-deal1">
                                    <h5><a href="single.html"> ut perspiciatis</a></h5>
                                    <p>Plot Area : 150 Sq.Yrds</p>
                                    <p>Price: $250000</p>
                                </div>
                                <div class="top-deal2">
                                    <a href="single.html" class="hvr-sweep-to-right more">More</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 top-deal-top">
                        <div class=" top-deal">
                            <a href="single.html" class="mask"><img src="{{asset('front-end/images/de5.jpg')}}" class="img-responsive zoom-img" alt=""></a>
                            <div class="deal-bottom">
                                <div class="top-deal1">
                                    <h5><a href="single.html"> ut perspiciatis</a></h5>
                                    <p>Plot Area : 150 Sq.Yrds</p>
                                    <p>Price: $250000</p>
                                </div>
                                <div class="top-deal2">
                                    <a href="single.html" class="hvr-sweep-to-right more">More</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 top-deal-top">
                        <div class=" top-deal">
                            <a href="single.html" class="mask"><img src="{{asset('front-end/images/de6.jpg')}}" class="img-responsive zoom-img" alt=""></a>
                            <div class="deal-bottom">
                                <div class="top-deal1">
                                    <h5><a href="single.html"> ut perspiciatis</a></h5>
                                    <p>Plot Area : 150 Sq.Yrds</p>
                                    <p>Price: $250000</p>
                                </div>
                                <div class="top-deal2">
                                    <a href="single.html" class="hvr-sweep-to-right more">More</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 top-deal-top">
                        <div class=" top-deal">
                            <a href="single.html" class="mask"><img src="{{asset('front-end/images/de7.jpg')}}" class="img-responsive zoom-img" alt=""></a>
                            <div class="deal-bottom">
                                <div class="top-deal1">
                                    <h5><a href="single.html"> ut perspiciatis</a></h5>
                                    <p>Plot Area : 150 Sq.Yrds</p>
                                    <p>Price: $250000</p>
                                </div>
                                <div class="top-deal2">
                                    <a href="single.html" class="hvr-sweep-to-right more">More</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="deal-top-top">
                    <div class="col-md-3 top-deal-top">
                        <div class=" top-deal">
                            <a href="single.html" class="mask"><img src="{{asset('front-end/images/de8.jpg')}}" class="img-responsive zoom-img" alt=""></a>
                            <div class="deal-bottom">
                                <div class="top-deal1">
                                    <h5><a href="single.html"> ut perspiciatis</a></h5>
                                    <p>Plot Area : 150 Sq.Yrds</p>
                                    <p>Price: $250000</p>
                                </div>
                                <div class="top-deal2">
                                    <a href="single.html" class="hvr-sweep-to-right more">More</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 top-deal-top">
                        <div class=" top-deal">
                            <a href="single.html" class="mask"><img src="{{asset('front-end/images/de9.jpg')}}" class="img-responsive zoom-img" alt=""></a>
                            <div class="deal-bottom">
                                <div class="top-deal1">
                                    <h5><a href="single.html"> ut perspiciatis</a></h5>
                                    <p>Plot Area : 150 Sq.Yrds</p>
                                    <p>Price: $250000</p>
                                </div>
                                <div class="top-deal2">
                                    <a href="single.html" class="hvr-sweep-to-right more">More</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 top-deal-top">
                        <div class=" top-deal">
                            <a href="single.html" class="mask"><img src="{{asset('front-end/images/de10.jpg')}}" class="img-responsive zoom-img" alt=""></a>
                            <div class="deal-bottom">
                                <div class="top-deal1">
                                    <h5><a href="single.html"> ut perspiciatis</a></h5>
                                    <p>Plot Area : 150 Sq.Yrds</p>
                                    <p>Price: $250000</p>
                                </div>
                                <div class="top-deal2">
                                    <a href="single.html" class="hvr-sweep-to-right more">More</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 top-deal-top">
                        <div class=" top-deal">
                            <a href="single.html" class="mask"><img src="{{asset('front-end/images/de11.jpg')}}" class="img-responsive zoom-img" alt=""></a>
                            <div class="deal-bottom">
                                <div class="top-deal1">
                                    <h5><a href="single.html"> ut perspiciatis</a></h5>
                                    <p>Plot Area : 150 Sq.Yrds</p>
                                    <p>Price: $250000</p>
                                </div>
                                <div class="top-deal2">
                                    <a href="single.html" class="hvr-sweep-to-right more">More</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
@endsection