@include("user.head")

@include("user.header")
	
@include("user.sidebar")
<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->	  
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h4 class="page-title">Trading Room</h4>
                  
              </div>
              
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
          <div class="row">				
              
              <!-- /.col -->
              <div class="col-xl-8 col-lg-7">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title">Create Trade</h4>
                    <p>You can create a trade here and ask the other party to join using the unique id provided.
                    </p>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                   
                     
                    <div class="row">
                      <div class="col-12">
                         <form action="{{ route('createtrade') }}" method="post">
                           @csrf
                              <div class="form-group row">
                                  <p>STEP 1</p>
                                <h4 class="box-title">Select currencies
                                </h4>
                                
                                <div class="col-sm-12">
                                    <select class="form-select" name="originalcoin" >
                                        <option>Select Currency 1</option>

                                        @foreach ($datacs as $datac)
                                        <option>{{ $datac->coinName }}</option>
                                        @endforeach
                                    </select>                                
                                </div>
                                <small>This is the original cryptocurrency, This goes with the coin in demand from either the buyer or the seller.

                                    
                                </small>
                              </div>
                              <div class="form-group row">
                            
                              <div class="col-sm-12">
                                  <select class="form-select" name="changedcoin" >
                                      <option>Select Currency 2</option>

                                      @foreach ($datacs as $datac)
                                      <option>{{ $datac->coinName }}</option>
                                      @endforeach
                                  </select>                                
                              </div>
                              <small>This is the currency that is being exchanged for the original cryptocurrency, this can be either a cryptocurrency or a local currency.

                                  
                              </small>
                            </div>
                            <div class="form-group row mt-4">
                                <p>STEP 2</p>
                              <h4 class="box-title">Enter amount
                              </h4>
                              
                              <div class="col-sm-12">
                                <input class="form-control" type="number" name ="selleramount" placeholder="Enter Amount from seller">                             
                              </div>
                              <small>The total amount which the seller is sending.</small>
                            </div>
                            <div class="form-group row">
                                
                              
                              <div class="col-sm-12">
                                <input class="form-control" type="number" name ="buyeramount" placeholder="Enter Amount from buyer">                             
                              </div>
                              <small>The total amount which the buyer is sending.</small>
                            </div>
                            <div class="form-group row mt-4">
                                <p>STEP 3</p>
                              <h4 class="box-title">Enter Email
                              </h4>
                              
                              <div class="col-sm-12">
                                <input class="form-control" type="email" name ="partneremail" placeholder="Enter Email">                             
                              </div>
                              <small>An invitation will be sent to this email to join this trade.</small>
                            </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Select Role</label>
                                <div class="col-sm-12">
                                    <select class="form-select" name="role" >
                                        <option>Select Role</option>
  
                                        
                                        <option>Buyer</option>
                                        <option>Seller</option>

                                    </select>         
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Escrow Fee Split</label>
                                <div class="col-sm-12">
                                    <select class="form-select" name="fee" >
                                        <option>Select Fee Split</option>
  
                                        
                                        <option>Buyer Pays</option>
                                        <option>Seller Pays</option>
                                        <option>50/50</option>


                                    </select>         
                                </div>
                              </div>
                              <small>
                                Escrow Fee: 10.00% of transaction.</small>

                             
                              <div class="form-group row mt-4">
                                <div class="col-sm-10">
                                  <button type="submit" class="btn btn-primary">Proceed Trade</button>
                                </div>
                              </div>
                         </form>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.box-body -->
                </div>
               
               
                <!-- /.box -->

              </div>
          </div>
      </section>
      <!-- /.content -->
    
    </div>
</div>

@include("user.footer")

