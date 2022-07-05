@include("user.head")

@include("user.header")
	
@include("user.sidebar")
<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->	  
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h4 class="page-title">My Profile</h4>
                  
              </div>
              
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
          <div class="row">				
              <div class="col-xl-4 col-lg-5">
                <!-- Profile Image -->
                <div class="box">
                  <div class="box-body box-profile">
                    <img class="rounded img-fluid mx-auto d-block max-w-150" src="{{ auth()->user()->photo }}" alt="User profile picture">

                    <h3 class="profile-username text-center my-10">{{ auth()->user()->lastname.' ' .auth()->user()->firstname }}</h3>

                    <h4 class="text-center mt-0"><i class="fa fa-envelope-o me-10"></i>{{ auth()->user()->email }}</h4>

                    <div class="row social-states">
                        <div class="col-6 text-end"><a href="#" class="link text-white"><i class="ion ion-ios-people-outline"></i> 254</a></div>
                        <div class="col-6 text-start"><a href="#" class="link text-white"><i class="ion ion-images"></i> 54</a></div>
                    </div>

                    
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
              <div class="col-xl-8 col-lg-7">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title">Personal details</h4>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                   
                     <form action="{{ route("profileimage") }}" method="post" enctype="multipart/form-data">
                       @csrf
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Profile Picture</label>
                          <input class="form-control" type="file" name="file" id="file">
                        </div>
                        <button type="submit" class="mb-3 btn btn-primary">
                          <i class="ti-save-alt"></i> Save
                        </button>
                     </form>
                    <div class="row">
                      <div class="col-12">
                         <form action="{{ route('profile') }}" method="post">
                           @csrf
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="text" name ="firstname" value="{{ auth()->user()->firstname }}" placeholder="{{ auth()->user()->firstname }}">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="text" name ="lastname" value="{{ auth()->user()->lastname }}" placeholder="{{ auth()->user()->lastname }}">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="text" name ="usertname"value="{{ auth()->user()->username }}" placeholder="{{ auth()->user()->username }}" disabled>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email Address</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="email" name ="email" placeholder="{{ auth()->user()->email }}" value="{{ auth()->user()->email }}" disabled>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="tel" name ="phone" value="{{ auth()->user()->phone }}" placeholder="{{ auth()->user()->phone }}">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                  <button type="submit" class="btn btn-primary">Update Info</button>
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
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title">Security</h4>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="row">
                      <div class="col-12">
                          <form action="{{ route("profilepass") }}" method="post">
                            @csrf
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Old Password</label>
                              <div class="col-sm-10">
                                <input class="form-control" name="current_password"  type="password" placeholder="**********">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">New Password</label>
                              <div class="col-sm-10">
                                <input class="form-control" name="password" type="text" placeholder="**********">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Confirm Password</label>
                              <div class="col-sm-10">
                                <input class="form-control"  name="password_confirmation"  type="text" placeholder="**********">
                              </div>
                            </div>
                            
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label"></label>
                              <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Password</button>
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
               
                <!-- /.box -->

              </div>
          </div>
      </section>
      <!-- /.content -->
    
    </div>
</div>

@include("user.footer")

