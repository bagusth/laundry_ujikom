    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

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
                    height: 400px;
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
                    margin-top: 50px;
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
                            <form action="{{ url('loginPost') }}" method="post">
                                @csrf
                                <div class="input-group mt-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <label for="username"></label>
                                    <input type="username" name="username" id="username" class="form-control input_user" value="" placeholder="username">
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <label for="alamat"></label>
                                    <input type="password" name="password" class="form-control input_pass" id="password"   value="" placeholder="password">
                                </div>
                                <div class="d-flex justify-content-center mt-3 login_container">
                                    <button type="submit" name="button" class="btn login_btn">Login</button>
                                </div>
                                <div class="register justify-content-center login_container">
                                    <label>Wanna make an account ?</label>
                                    <label><a href="{{url('register')}}">Register here</a></label>
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
