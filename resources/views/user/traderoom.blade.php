@include("user.head")

@include("user.header")
	
@include("user.sidebar")

<div class="content-wrapper">
    <div class="container-full">

     <!-- Main content -->
		<section class="invoice printableArea">
            <div class="row">
              <div class="col-12">
                <div class="bb-1 clearFix">
                  <div class="text-end pb-15">
                     <a href="{{ route('deposit', ['id' => $data->tradeid]) }}">
                        <button class="btn btn-success" type="button"> <span><i class="fa fa-money"></i> Pay</span> </button>
                    </a>
                      <a href="{{ route('dashboard') }}">
                        <button id="print2" class="btn btn-danger" type="button"> <span><i class="fa fa-close"></i> Close Trade</span> </button>
                      </a>
                  </div>	
                </div>
              </div>
              <div class="col-12">
                <div class="page-header">
                  <h2 class="d-inline"><span class="fs-30">Trade ID</span></h2>
                  <div class="pull-right text-end">
                      <h4>{{ $data->tradeid }}</h4>
                  </div>	
                </div>
              </div>
              <!-- /.col -->
            </div>
           
            <div class="row">
              <div class="col-12 table-responsive">
                
               @if($data->tradeactivation != 'Active2')
               <table class="table table-bordered">
                <tbody>
                <tr>
                  
                  <th></th>
                  <th>Owner</th>
                  <th >Trader</th>
                  
                </tr>
                <tr>
                  <td><strong>Role</strong></td>
                  @if ($data->role == 'Buyer')
                      <td >Buyer</td>
                      <td >xxxx</td>
                  @else
                      <td >Seller</td>
                      <td >xxx</td>
                  
                  @endif
                </tr>
                <tr>
                  <td><strong>Name: </strong></td>
                  <td>{{ $data->name }}</td>
                  <td>xxxx</td>
                  
                </tr>
                <tr>
                  
                      <td><strong>Email Address: </strong></td>
                      <td>{{ $data->email }}</td>
                      <td>xxxx</td>
                      
                    
                <tr>
                  <td><strong>Escrow Amount:</strong></td>
                  @if ($data->role == 'Buyer')

                  <td >${{ $data->buyeramount }}</td>
                  <td >xxxx</td>
                      @else
                          <td >${{ $data->selleramount }}</td>
                          <td >xxxx</td>
                      
                      @endif
                      </tr>
                      <tr>
                          <td><strong>Fees Split:</strong></td>
                              @if ($data->fee == 'Seller Pays')
                              <td >100% of escrow fee</td>
                              <td >xxxx</td>
                      @elseif ($data->fee == 'Buyer Pays')
                          
                          <td >100% of escrow fee</td>
                          <td >xxxx</td>
                      
                      
                      @else
                              <td >50% of escrow fee</td>
                              <td >xxxx</td>
                      @endif
                      </tr>
                      <tr>
                          <td><strong>Fees Payable (10.00%):</strong></td>
                      
                          @if ($data->fee == 'Seller Pays')
                          <td >${{ $data->selleramount * 10 /100}}</td>
                          <td >xxxx</td>
                          
                          
                      @elseif ($data->fee == 'Buyer Pays')
                                  <td >${{ $data->buyeramount * 10 /100}}</td>
                                  <td >xxxx</td>
                  
                      @elseif ($data->role == 'Buyer' && $data->fee == '50/50' )
                              <td >${{ $data->buyeramount * 5/100 }}</td>
                              <td >xxxx</td>
                      @elseif ($data->role == 'Seller' && $data->fee == '50/50' )
                            <td >${{ $data->selleramount * 5/100 }}</td>
                                    <td >xxxx</td>
                      @endif
                      </tr>
                      <tr>
                          <td><strong>Total amount payable:</strong></td>
                          @if ($data->fee == 'Seller Pays')
                          <td >${{ $data->selleramount * 10 /100 + $data->selleramount}}</td>
                          <td >xxxx</td>
                          
                          
                      @elseif ($data->fee == 'Buyer Pays')
                                  <td >${{ $data->buyeramount * 10 /100 + $data->buyeramount}}</td>
                                  <td >xxxx</td>
                  
                      @elseif ($data->role == 'Buyer' && $data->fee == '50/50' )
                              <td >${{ $data->buyeramount * 5/100 + $data->buyeramount}}</td>
                              <td >xxxx</td>
                      @elseif ($data->role == 'Seller' && $data->fee == '50/50')
                          <td >${{ $data->selleramount * 5/100 + $data->selleramount}}</td>
                              <td >xxxx</td>
                      @endif
                </tr>
                <tr>
                  <td><strong>Coin Sending:</strong></td>
                  <td>{{ $data->originalcoin }}</td>                     
                   <td>xxx</td>
                </tr>
                <tr>
                  <tr>
                      <td><strong>Coin Receiveing:</strong></td>
                          <td>{{ $data->changedcoin }}</td>
                          <td>xxx</td>
                    </tr>
                    <tr>
                  <td><strong>Payment Status:</strong></td>
                      <td>{{ $data->status }}</td>
                      <td>xxx</td>
                </tr>
                <tr>
                  <td><strong>Withdrawal Status:</strong></td>
                      <td>{{ $data->withdrawstatus }}</td>
                      <td>xxx</td>
                </tr>
                </tbody>
              </table>
              @else
              <table class="table table-bordered">
                <tbody>
                <tr>
                  
                  <th></th>
                  <th>Owner</th>
                  <th >Trader</th>
                  
                </tr>
                <tr>
                  <td><strong>Role</strong></td>
                  @if ($data->role == 'Buyer')
                      <td >Buyer</td>
                      <td >Seller</td>
                  @else
                      <td >Seller</td>
                      <td >Buyer</td>
                  
                  @endif
                </tr>
                <tr>
                  <td><strong>Name: </strong></td>
                  <td>{{ $data->name }}</td>
                  <td>{{ $datai->name }}</td>
                  
                </tr>
                <tr>
                  
                      <td><strong>Email Address: </strong></td>
                      <td>{{ $data->email }}</td>
                      <td>{{ $datai->email }}</td>
                      
                    
                <tr>
                  <td><strong>Escrow Amount:</strong></td>
                  @if ($data->role == 'Buyer')

                  <td >${{ $data->buyeramount }}</td>
                  <td >${{ $data->selleramount }}</td>
                      @else
                          <td >${{ $data->selleramount }}</td>
                          <td >${{ $data->buyeramount }}</td>
                      
                      @endif
                      </tr>
                      <tr>
                          <td><strong>Fees Split:</strong></td>
                              @if ($data->fee == 'Seller Pays')
                              <td >100% of escrow fee</td>
                              <td >0% of escrow fee</td>
                      @elseif ($data->fee == 'Buyer Pays')
                          
                          <td >0% of escrow fee</td>
                          <td >100% of escrow fee</td>
                      
                      
                      @else
                              <td >50% of escrow fee</td>
                              <td >50% of escrow fee</td>
                      @endif
                      </tr>
                      <tr>
                          <td><strong>Fees Payable (10.00%):</strong></td>
                      
                          @if ($data->fee == 'Seller Pays')
                          <td >${{ $data->selleramount * 10 /100}}</td>
                          <td >$0 (0% of total escrow fee)</td>
                          
                          
                      @elseif ($data->fee == 'Buyer Pays')
                                  <td >$0 (0% of total escrow fee)</td>
                                  <td >${{ $data->buyeramount * 10 /100}}</td>
                        @elseif ($data->role == 'Seller')
                                    <td >${{ $data->selleramount * 5/100 }}</td>
                                    <td >${{ $data->buyeramount * 5/100 }}</td>
                            @elseif ($data->role == 'Buyer' && $data->fee == '50/50' )
                                    <td >${{ $data->buyeramount * 5/100 }}</td>
                                    <td >${{ $data->selleramount * 5/100 }}</td>
                            @elseif ($data->role == 'Seller' && $data->fee == '50/50' )
                                  <td >${{ $data->selleramount * 5/100 }}</td>
                                          <td >${{ $data->buyeramount * 5/100 }}</td>
                      @endif
                      </tr>
                      <tr>
                          <td><strong>Total amount payable:</strong></td>
                          @if ($data->fee == 'Seller Pays')
                          <td >${{ $data->selleramount * 10 /100 + $data->selleramount}}</td>
                          <td >${{  $data->buyeramount}}</td>
                          
                          
                      @elseif ($data->fee == 'Buyer Pays')
                                  <td >${{ $data->selleramount}}</td>
                                  <td >${{ $data->buyeramount * 10 /100 + $data->buyeramount}}</td>
                  
                      @elseif ($data->role == 'Buyer' && $data->fee == '50/50' )
                              <td >${{ $data->buyeramount * 5/100 + $data->buyeramount}}</td>
                              <td >${{ $data->selleramount * 5/100 +  $data->selleramount}}</td>
                              @elseif ($data->role == 'Seller' && $data->fee == '50/50')
                          <td >${{ $data->selleramount * 5/100 +  $data->selleramount }}</td>
                          <td >${{ $data->buyeramount * 5/100 +  $data->buyeramount}}</td>
                          @endif
                </tr>
                <tr>
                  <td><strong>Coin Sending:</strong></td>
                      <td>{{ $data->originalcoin }}</td>
                      <td>{{ $data->changedcoin }}</td>
                </tr>
                <tr>
                  <tr>
                      <td><strong>Coin Receiveing:</strong></td>
                          <td>{{ $data->changedcoin }}</td>
                          <td>{{ $data->originalcoin }}</td>
                    </tr>
                    <tr>
                  <td><strong>Payment Status:</strong></td>
                      <td>{{ $data->status }}</td>
                      <td>{{ $data->status }}</td>
                </tr>
                <tr>
                  <td><strong>Withdrawal Status:</strong></td>
                      <td>{{ $data->withdrawstatus }}</td>
                      <td>{{ $data->withdrawstatus }}</td>
                </tr>
                </tbody>
              </table>
              @endif
              </div>
              <!-- /.col -->
            </div>
            <div class="row">
              
              <!-- /.col -->
            </div>
            <div class="row" >
              <div class="col-6">
                  <a href="{{ route('deposit', ['id' => $data->tradeid]) }}">
                <button type="button" class="btn btn-success"><i class="fa fa-credit-card"></i> Submit Payment
                </button>
            </a>
              </div>
            </div>
          </section>
          <!-- /.content -->
    </div>
    
</div> 

@include("user.footer")

