@extends('front-end.master')
@section('content')
    <!--//-->
    <div class=" banner-buying">
        <div class=" container">
            <h3><span>Cont</span>act</h3>
            <!---->
            <div class="menu-right">
                <ul class="menu">
                    <li class="item1"><a href="#"> Menu<i class="glyphicon glyphicon-menu-down"> </i> </a>
                        <ul class="cute">
                            <li class="subitem1"><a href="buy.html">Buy </a></li>
                            <li class="subitem2"><a href="buy.html">Rent </a></li>
                            <li class="subitem3"><a href="buy.html">Hostels </a></li>
                            <li class="subitem1"><a href="buy.html">Resale</a></li>
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
    <!--contact-->
    <div class="contact">
        <div class="container">
            <h3>Contact</h3>
            <div class="contact-top">
                <div class="col-md-6 contact-top1">
                    <h4 > Info</h4>
                    <p class="text-contact">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took.</p>
                    <div class="contact-address">
                        <div class="col-md-6 contact-address1">
                            <h5>Address</h5>
                            <p><b>The Company Name</b></p>
                            <p>25478 charms of pleasur</p>
                            <p>On the other hand, we denounce</p>
                        </div>
                        <div class="col-md-6 contact-address1">
                            <h5>Email Address </h5>
                            <p>General :<a href="malito:mail@demolink.org"> info(at)Lorem.com</a></p>
                            <p>Office :<a href="malito:mail@demolink.org"> info(at)Lorem.com</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="contact-address">
                        <div class="col-md-6 contact-address1">
                            <h5 >Phone </h5>
                            <p>Landline : 254-8974-5847</p>
                            <p>Mobile : +174 1478 74755</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 contact-right">

                    <form>
                        <input type="text"  placeholder="Name" required="">
                        <input type="text" placeholder="Email" required="">
                        <input type="text" placeholder="Subject" required="">
                        <textarea  placeholder="Message" requried=""></textarea>
                        <label class="hvr-sweep-to-right">
                            <input type="submit" value="Submit">
                        </label>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
        </div>
    </div>
    <!--//contact-->
@endsection