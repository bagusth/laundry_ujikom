
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
                /* Top Nav */
                /* Add a black background color to the top navigation */
                .topnav {
                background-color: #333;
                overflow: hidden;
                }

                /* Style the links inside the navigation bar */
                .topnav a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
                }

                /* Add an active class to highlight the current page */
                .active {
                background-color: #4CAF50;
                color: white;
                }

                /* Hide the link that should open and close the topnav on small screens */
                .topnav .icon {
                display: none;
                }

                /* Dropdown container - needed to position the dropdown content */
                .dropdown {
                float: left;
                overflow: hidden;
                }

                /* Style the dropdown button to fit inside the topnav */
                .dropdown .dropbtn {
                font-size: 17px;
                border: none;
                outline: none;
                color: white;
                padding: 14px 16px;
                background-color: inherit;
                font-family: inherit;
                margin: 0;
                }

                /* Style the dropdown content (hidden by default) */
                .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
                }

                /* Style the links inside the dropdown */
                .dropdown-content a {
                float: none;
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
                }

                /* Add a dark background on topnav links and the dropdown button on hover */
                .topnav a:hover, .dropdown:hover .dropbtn {
                background-color: #555;
                color: white;
                }

                /* Add a grey background to dropdown links on hover */
                .dropdown-content a:hover {
                background-color: #ddd;
                color: black;
                }

                /* Show the dropdown menu when the user moves the mouse over the dropdown button */
                .dropdown:hover .dropdown-content {
                display: block;
                }

                /* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
                @media screen and (max-width: 600px) {
                .topnav a:not(:first-child), .dropdown .dropbtn {
                    display: none;
                }
                .topnav a.icon {
                    float: right;
                    display: block;
                }
                }

                /* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
                @media screen and (max-width: 600px) {
                .topnav.responsive {position: relative;}
                .topnav.responsive a.icon {
                    position: absolute;
                    right: 0;
                    top: 0;
                }
                .topnav.responsive a {
                    float: none;
                    display: block;
                    text-align: left;
                }
                .topnav.responsive .dropdown {float: none;}
                .topnav.responsive .dropdown-content {position: relative;}
                .topnav.responsive .dropdown .dropbtn {
                    display: block;
                    width: 100%;
                    text-align: left;
                }
                }    

                /* Side Nav */
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
            <a href="{{url('owner/home')}}"><i class="fa fa-home"></i>&nbsp;Dashboard</a>
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
    
