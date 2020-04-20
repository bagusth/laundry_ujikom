    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <!--Font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--Material Icons-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <div class="content">
          <style type="text/css">
                body,
                html {
                    margin: 0;
                    padding: 0;
                    height: 100%;
                    background: #7b32a8;
                }
                .user_card {
                    height: 500px;
                    width: 350px;
                    margin-top: auto;
                    margin-bottom: auto;
                    background: #ffffff;
                    position: relative;
                    display: flex;
                    justify-content: center;
                    flex-direction: column;
                    padding: 10px;
                    box-shadow: 0 8px 12px 8px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    border-radius: 5px;

                }
                .brand_logo_container {
                    position: absolute;
                    height: 170px;
                    width: 170px;
                    top: -75px;
                    border-radius: 50%;
                    background: #7b32a8;
                    padding: 10px;
                    text-align: center;
                }
                .brand_logo {
                    height: 150px;
                    width: 150px;
                    border-radius: 50%;
                    border: 2px solid white;
                }
                .form_container {
                    margin-top: 70px;
                }
                .login_btn {
                    width: 100%;
                    background: #7b32a8;
                    color: white;
                    margin:10px;
                    border-radius: 2rem;
                }
                .login_btn:focus {
                    box-shadow: none;
                    outline: 0px;
                }
                .login_container {
                    padding: 0 2rem;
                }
                .input-group-text {
                    background: #7b32a8;
                    color: white;
                    border: 5px;
                    border-radius: 4rem 4rem ;
                }
                .input_user,
                .input_pass:focus {
                    box-shadow: 100px;
                    outline: 10px;
                }
                .register{
                    font-size: 12px;
                }
            </style>
            <!-- Remove This Before You Start -->
            @if(\Session::has('error'))
                <div class="alert alert-danger">
                    <div>{{Session::get('error')}}</div>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <div>{{Session::get('success')}}</div>
                </div>
            @endif  
        <body>
            <div class="container h-100">
                <div class="d-flex justify-content-center h-100">
                    <div class="user_card">
                        <div class="d-flex justify-content-center">
                            <div class="brand_logo_container">
                                <img src="https://image.freepik.com/vector-gratis/laundry-logo-design-vector_18099-148.jpg" class="brand_logo" alt="Logo">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center form_container">
                            <form action="{{ url('registerPost') }}" method="post">
                                @csrf
                                <div class="input-group mt-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                                    </div>
                                    <label for="nama"></label>
                                    <input type="text" name="nama" id="nama" class="form-control input_user" value="" placeholder="name">
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <label for="username"></label>
                                    <input type="username" name="username" id="username" class="form-control input_user" value="" placeholder="username">
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <label for="password"></label>
                                    <input type="password" name="password" class="form-control input_pass" id="password"   value="" placeholder="password">
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <label for="id_outlet"></label>
                                    <input type="text" name="id_outlet" id="id_outlet" class="form-control input_user" value="1" placeholder="id_outlet" readonly>
                                </div>
                                <div class="input-group dropdown mt-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-plus"></i></span>
                                    </div>
                                    <label for="role"></label>
                                    <select name="role" id="role" class="form-control input_user">
                                        <option value="">Select Your Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="kasir">Kasir</option>
                                        <option value="owner">Owner</option>
                                    </select>
                                </div>
                                <div class="d-flex justify-content-center mt-3 login_container">
                                    <button type="submit" name="button" class="btn login_btn">Register</button>
                                </div>
                                <div class="register justify-content-center ml-4 login_container">
                                    <label>Have an account ? </label>
                                    <label><a href="{{url('login')}}"> Login</a></label>
                                </div>

                            </form>
                        </div>
                

                    </div>
                </div>
            </div>
        </body>
    </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
