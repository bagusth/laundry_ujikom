
<head>

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/38a8ef37d9.js" crossorigin="anonymous"></script>
    <!--Material Icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

                <style type="text/css">
                    #member{
                        float: left;
                        margin-top:5px;
                        margin-right:15px;
                        }
                    #wel{
                        color:white;
                        }
                    /* The sidebar menu */
                    .sidebar {
                    height: 100%; /* 100% Full-height */
                    width: 0; /* 0 width - change this with JavaScript */
                    position: fixed; /* Stay in place */
                    z-index: 1; /* Stay on top */
                    top: 0;
                    left: 0;
                    background-color: #fff; /* Black*/
                    overflow-x: hidden; /* Disable horizontal scroll */
                    padding-top: 60px; /* Place content 60px from the top */
                    transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
                    }

                    /* The sidebar links */
                    .sidebar a {
                    padding: 8px 8px 8px 32px;
                    text-decoration: none;
                    font-size: 13px;
                    color: #000;
                    display: block;
                    transition: 0.3s;
                    }

                    /* When you mouse over the navigation links, change their color */
                    .sidebar a:hover {
                    background-color: #7b32a8;
                    color:#fff;
                    }

                    /* Position and style the close button (top right corner) */
                    .sidebar .closebtn {
                    position: absolute;
                    top: 0;
                    right: 25px;
                    font-size: 36px;
                    margin-left: 40px;
                    }

                    /* The button used to open the sidebar */
                    .openbtn {
                    font-size: 13px;
                    cursor: pointer;
                    background-color: #7b32a8;
                    color: white;
                    padding: 10px 15px;
                    border: none;
                    }

                    .openbtn:hover {
                    background-color: #ff7c47;
                    }

                    /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
                    #main {
                    transition: margin-left 1.5s; /* If you want a transition effect */
                    padding: 20px;
                    }

                    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
                    @media screen and (max-height: 450px) {
                    .sidebar {padding-top: 15px;}
                    .sidebar a {font-size: 18px;}
                    }
                    .bg-alt{
                        background-color:#7b32a8; 
                    }
                </style>

</head>

            <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="{{url('admin/home')}}"><i class="fa fa-home"></i>&nbsp;Dashboard</a>
                <a href="{{url('admin/member/index_member')}}"><i class="fa fa-user"></i>&nbsp;Registrasi Member</a>
                <a href="{{url('admin/transaksi/indexTransaksi')}}"><i class="fa fa-credit-card"></i>&nbsp;Transaksi</a>
                <a href="{{url('admin/outlet/indexOutlet')}}"><i class="fas fa-store"></i>&nbsp;Outlet</a>
                <a href="{{url('admin/paket/indexPaket')}}"><i class="fa fa-dropbox"></i>&nbsp;Paket/Produk</a><br><br><br><br>
                <br><br><br><br><br><br><br><br><br><br>
                <a href="{{url('logout')}}"><i class="fa fa-power-off"></i>&nbsp;Logout</a>   
            </div>

            <div id="main">
                <button class="openbtn" onclick="openNav()">&#9776;</button>          
                    <div class="container">
                        @yield('content')
                    </div>        
                                     
            </div>        
            
        <script>

        /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
        function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        }

        /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
        function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        }    
        </script>
        
