@include("user.head")

@include("user.header")
	
@include("user.sidebar")

<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">			
          <div class="row">
        <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <div class=" overflow-hidden bg-transparent card-crypto-scroll shadow-none">
                        <div class="js-conveyor-example">
                        <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825,1839,52,2010" currency="USD" theme="light" transparent="true" show-symbol-logo="true" width="1000000"></div>
                            
                        </div>
                    </div>
                </div>
            </div>	
            <div class="col-xl-8 col-12">
                <div class="row">
                    <div class="col-lg-10 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                            <h4 class="box-title">MY WALLET</h4>

                            </div>
                            <div class="box-body">
                              
                                <div class="tab-content p-10 tabcontent-border">
                                    <div class="tab-pane active" id="market" role="tabpanel">
                                        <form action="{{ route('verify') }}" method="post">
                                            @csrf
                                            {{-- <p>Balance: <span class="fw-600">{{ 0 + $datadeposit +  $databonus + $datainterest - $datawit }} $</span></p> --}}

                                            <div class="input-group mb-10">
                                                <span class="input-group-addon">Full Name</span>
                                                <input type="text" name ="names" class="form-control" placeholder="Enter Full Name" id="names">
                                            </div>
                                    
                                            <div class="input-group mb-10">
                                                <span class="input-group-addon">Email</span>
                                                <input type="email" name ="email" class="form-control" placeholder="Enter Email Address" id="email">
                                            </div>
                                            <div class="input-group mb-10">
                                                <span class="input-group-addon">Amount</span>
                                                <input type="number" name ="amount" class="form-control" placeholder="0" id="amount">
                                            </div>
                                            
                                        <div class="row">
                                            <div class="col-lg-6">
<button type="submit" class="btn btn-block btn-success mt-20" style="width: 100%">Fund With Paystack</button> 
                                            </div>
                                            <div class="col-lg-6">
                                            <button type="submit" class="btn btn-block btn-success mt-20" style="width: 100%">Fund With Crytocurrency</button>

                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
               						
            </div>
          </div>
      </section>
    </div>
</div> 
    <script src="https://checkout.flutterwave.com/v3.js"></script>

 <script>
        $(function () {
            $("#makePaymentForm").submit(function (e) {
                e.preventDefault();
                var name = $("#names").val();
                var email = $("#email").val();
                var amount =$("#amount").val();
                makePayment(amount,email,name);
            });
        });
        function makePayment(amount,email,name,) {
          FlutterwaveCheckout({
            public_key: "FLWPUBK_TEST-576d13bff93010444001fd96fbca5cd9-X",
            tx_ref: "RX1_{{ substr(rand(0, 10000000).time(), 0, 15) }}",
            amount,
            currency: "USD",
            country: "US",
            payment_options: " ",
            customer: {
              email,
              name,
            },
            callback: function (data) {
                var transaction_id = data.transaction_id;
                var _token = $("input[name='_token']").val();

                $.ajax({
                    type:"POST",
                    url:"{{ URL::to('verify') }}",
                    data:{
                        transaction_id,
                        _token
                    },
                  
                    success: function(response){
                            
                                window.location.href = "http://127.0.0.1:8000/wallet";
                         
                    }
                });
            },
            onclose: function() {
              // close modal
            },
            customizations: {
              title: "Paylege",
              description: "Funding Wallet",
              logo: "https://miro.medium.com/fit/c/262/262/1*Z1GByNW4KCR8HNCUjbgzdA.png",
            },
          });
        }

@include("user.footer")

