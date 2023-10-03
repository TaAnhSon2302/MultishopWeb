@include('layouts/client/header')
 <!-- Breadcrumb Start -->
 <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <span class="breadcrumb-item active">Sign in</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <div class="container-fluid ">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Sign in</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form  p-100">
                    <div id="success"></div>
                    <form>
                        <div class="control-group p-1">
                          <label  for="username">Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="user_name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group p-1">
                           <label  for="password">Password</label>
                            <input type="password" class="form-control" placeholder="********" name="user_password"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <a class="font-weight-bold p-1" href="">Not registered ?</a>
                        <div class="p-1">
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton"> Sign in</button>
                            <a class="font-weight-bold" href="">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
@include('layouts/client/footer')