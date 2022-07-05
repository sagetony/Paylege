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
                    <h4 class="box-title">Enter Transaction ID
                    </h4>
                    
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                   
                     
                    <div class="row">
                      <div class="col-12">
                         <form action="{{ route('jointrade') }}" method="post">
                           @csrf
                             
                           
                            <div class="form-group row mt-4">
                              
                              <div class="col-sm-12">
                                <input class="form-control" type="text" name ="id" placeholder="Enter Transaction ID">                             
                              </div>
                            </div>
                             
                             
                              <div class="form-group row mt-4">
                                <div class="col-sm-10">
                                  <button type="submit" class="btn btn-primary">Join Trade</button>
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

