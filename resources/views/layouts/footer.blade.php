<footer>
    <section class="home-newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="single">	    	
                    <form action="" method="post">
                        <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter Your Email Address" name="email_subscribe">
                             <span class="input-group-btn">
                             <button class="btn btn-theme" type="submit" name="form_subscribe">Subscribe</button>
                             </span>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 copyright">
                    copyright 2024
                </div>
            </div>
        </div>
    </div>
    
    
    <a href="#" class="scrollup">
        <i class="fa fa-angle-up"></i>
    </a>
    
    
    
    <script src={{ asset("assets/js/jquery-2.2.4.min.js") }}></script>
    <script src={{ asset("assets/js/bootstrap.min.js") }}></script>
    <script src="https://js.stripe.com/v2/"></script>
    <script src={{ asset("assets/js/megamenu.js") }}></script>
    <script src={{ asset("assets/js/owl.carousel.min.js") }}></script>
    <script src={{ asset("assets/js/owl.animate.js") }}></script>
    <script src={{ asset("assets/js/jquery.bxslider.min.js") }}></script>
    <script src={{ asset("assets/js/jquery.magnific-popup.min.js") }}></script>
    <script src={{ asset("assets/js/rating.js") }}></script>
    <script src={{ asset("assets/js/jquery.touchSwipe.min.js") }}></script>
    <script src={{ asset("assets/js/bootstrap-touch-slider.js") }}></script>
    <script src={{ asset("assets/js/select2.full.min.js") }}></script>
    <script src={{ asset("assets/js/custom.js") }}></script>
    <script>
        function confirmDelete()
        {
            return confirm("Sure you want to delete this data?");
        }
        $(document).ready(function () {
            advFieldsStatus = $('#advFieldsStatus').val();
    
            $('#paypal_form').hide();
            $('#stripe_form').hide();
            $('#bank_form').hide();
    
            $('#advFieldsStatus').on('change',function() {
                advFieldsStatus = $('#advFieldsStatus').val();
                if ( advFieldsStatus == '' ) {
                    $('#paypal_form').hide();
                    $('#stripe_form').hide();
                    $('#bank_form').hide();
                } else if ( advFieldsStatus == 'PayPal' ) {
                       $('#paypal_form').show();
                    $('#stripe_form').hide();
                    $('#bank_form').hide();
                } else if ( advFieldsStatus == 'Stripe' ) {
                       $('#paypal_form').hide();
                    $('#stripe_form').show();
                    $('#bank_form').hide();
                } else if ( advFieldsStatus == 'Bank Deposit' ) {
                    $('#paypal_form').hide();
                    $('#stripe_form').hide();
                    $('#bank_form').show();
                }
            });
        });
    
    
        $(document).on('submit', '#stripe_form', function () {
            // createToken returns immediately - the supplied callback submits the form if there are no errors
            $('#submit-button').prop("disabled", true);
            $("#msg-container").hide();
            Stripe.card.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
                // name: $('.card-holder-name').val()
            }, stripeResponseHandler);
            return false;
        });
        Stripe.setPublishableKey('');
        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('#submit-button').prop("disabled", false);
                $("#msg-container").html('<div style="color: red;border: 1px solid;margin: 10px 0px;padding: 5px;"><strong>Error:</strong> ' + response.error.message + '</div>');
                $("#msg-container").show();
            } else {
                var form$ = $("#stripe_form");
                var token = response['id'];
                form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                form$.get(0).submit();
            }
        }
    </script>
</footer>