<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
</head> -->
<!-- <body> -->
    
<div class="sidebar">
        <h1 class="logo">Green<span>- Farming</span></h1>
        <i class="fa fa-chevron-left menu-icon"></i>
        <ul class="sidenav">
            <li class="active"><i class="fa fa-home"></i><a href="#"> Dashboard
                    <span class="span1"><i class="fa fa-angle-right"></i></span>


                </a>

            </li>

            <ul class="dropdown">
                <li><a href="#"><span class="dot"></span> Home</a></li>
                <li><a href="#"><span class="dot"></span> Gallery</a></li>
                <li><a href="#"><span class="dot"></span> Contact</a></li>
            </ul>

            <li><i class="fa fa-file"></i><a href="#"> Layout</a></li>
            <p class="app">App Ans Pages</p>
            <li><i class="fa fa-calendar"></i><a href="#"> Calendar</a></li>
            <li><i class="fa fa-clone"></i><a href="#"> Invoice</a></li>
            <li><i class="fa fa-user"></i><a href="#"> User</a></li>
            <li><i class="fa fa-shield"></i><a href="#"> Permission</a></li>
            <li><i class="fa fa-file-text"></i><a href="#"> Pages</a></li>
            <li><i class="fa fa-lock"></i><a href="#"> Authentications</a></li>
            <!-- <li><i class="fa fa-square-o"></i><a href="#"> Modal Examples</a></li> -->

        </ul>
    </div>

    <div class="main">
        <div class="main-top">
            <input type="text" name="" class="input" placeholder="Search">
            <div class="top-right">

                <i class="fa fa-bell-o topicon bell"></i>
                <div class="notification-div">
                    <p>Success!Your registration is now complete!</p>
                    <p>Here's some information you may find useful!</p>
                </div>


                <a href="#" class="user1">
                    <img src="images/one.png" class="user">
                    <div class="profile-div">
                        <p><i class="fa fa-user"></i> &nbsp;&nbsp;Profile</p>
                        <p><i class="fa fa-cog"></i> &nbsp;&nbsp;Settings</p>
                        <p><i class="fa fa-power-off"></i> &nbsp;&nbsp;Log Out</p>
                    </div>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>


        <div class="cong-box">
            <div class="content">
                <p class="head">Congratulations Bipin! 🎉</p><br>
                <p>You have done 82% more sales today.
                    Check your new badge in your profile.</p>
                <button class="btn">View Badges</button>
            </div>
            <img src="../images/bipin.jpg" style="height:100px;width:100px;border-radius:50%;">
            <!-- border:5px solid black; -->
        </div>

        <div class="com-box">
            <div class="com-inner">
                <i class="fa fa-cubes"></i>
                <p>Orders</p>
                <p>$1,356</p>
                <p><i class="fa fa-long-arrow-down downar"></i> -14.25%</p>
            </div>
        </div>
        <div class="com-box">
            <div class="com-inner">
                <i class="fa fa-desktop"></i>
                <p>Sales</p>
                <p>$846.1</p>
                <p style="color: green;"><i class="fa fa-long-arrow-up upnar"></i> +28.25%</p>
            </div>
        </div>


        <div class="table-box">
            <table>

                <thead>
                    <tr>
                        <th scope="col" width="50px">ID</th>
                        <th scope="col" width="100px">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                        <th scope="col" width="70px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Account">#3412</td>
                        <td data-label="Due Date"><img src="../images/bipin.jpg" class="tab-img">Bipin</td>
                        <td data-label="Period">25/03-2023</td>
                        <td data-label="Due Date">$294.10</td>
                        <td data-label="Amount" style="position: relative;"><span class="pe"></span>inactive</td>
                        <td data-label="Period"><i class="fa fa-gear ticon"></i>
                            &nbsp;
                            <i class="fa fa-angle-down ticon"></i>
                        </td>
                    </tr>

                    <tr class="active-tr">
                        <td data-label="Account">#3413</td>
                        <td data-label="Due Date"><img src="../images/ashishSir.jpg" class="tab-img">Ashish</td>
                        <td data-label="Period">08/01-2023</td>
                        <td data-label="Due Date">$114.00</td>
                        <td data-label="Amount" style="position: relative;"><span class="de"></span>active</td>
                        <td data-label="Period"><i class="fa fa-gear  ticon"></i>
                            &nbsp;
                            <i class="fa fa-angle-down ticon"></i>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Account">#3414</td>
                        <td data-label="Due Date"><img src="../images/rajan.jpg" class="tab-img">Rajan</td>
                        <td data-label="Period">11/01/2023</td>
                        <td data-label="Due Date">$86.38</td>
                        <td data-label="Amount" style="position: relative;"><span class="pe"></span>inactive</td>
                        <td data-label="Period"><i class="fa fa-gear ticon"></i>
                            &nbsp;
                            <i class="fa fa-angle-down ticon"></i>
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Account">#3415</td>
                        <td data-label="Due Date"><img src="../images/naresh.jpg" class="tab-img">Naresh</td>
                        <td data-label="Period">016/05/2023</td>
                        <td data-label="Due Date">$64.00</td>
                        <td data-label="Amount" style="position: relative;"><span class="pe"></span>inactive</td>
                        <td data-label="Period"><i class="fa fa-gear ticon"></i>
                            &nbsp;
                            <i class="fa fa-angle-down ticon"></i>
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Account">#3416</td>
                        <td data-label="Due Date"><img src="../images/sulav.jpg" class="tab-img">Sulav</td>
                        <td data-label="Period">03/02/2023</td>
                        <td data-label="Due Date">$164.00</td>
                        <td data-label="Amount" style="position: relative;"><span class="de"></span>active</td>
                        <td data-label="Period"><i class="fa fa-gear  ticon"></i>
                            &nbsp;
                            <i class="fa fa-angle-down ticon"></i>
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Account">#3417</td>
                        <td data-label="Due Date"><img src="../images/suyogSir.jpg" class="tab-img">Suyog</td>
                        <td data-label="Period">21/02/2023</td>
                        <td data-label="Due Date">$124.00</td>
                        <td data-label="Amount" style="position: relative;"><span class="pe"></span>inactive</td>
                        <td data-label="Period"><i class="fa fa-gear ticon"></i>
                            &nbsp;
                            <i class="fa fa-angle-down ticon"></i>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>


        <div class="t-sale">

            <div class="content-box-1">
                <br>
                <p class="head-1">Total Sale </p>

                <div class="circle-wrap">
                    <div class="circle">
                        <div class="mask full">
                            <div class="fill"></div>
                        </div>
                        <div class="mask half">
                            <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center;"><button class="btn">Veiw All</button></div>
        </div>
    </div>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".span1").click(function () {
                $(".dropdown").slideToggle(500);
            });
        });

        $('.sidenav li').click(function () {
            $('.sidenav li').removeClass("active");
            $(this).addClass("active");
        });
    </script>

    <script type="text/javascript">
        $(".menu-icon").click(function (e) {
            e.preventDefault();
            $(".menu-icon").toggleClass("menuicon");
            $(".main").toggleClass("main-width");
            $(".sidebar").toggleClass("active1");
            $(".sidenav li a").toggleClass("anchor");
            $(".sidenav li").toggleClass("lislide");
            $(".sidenav p").toggleClass("apphide");
            $(".logo span").toggleClass("headspan");
            $(".logo").toggleClass("lm");

        });
    </script>
    <script>
        $(document).ready(function () {
            $(".user").click(function () {
                $(".profile-div").toggle(1000);
            });
            $(".bell").click(function () {
                $(".notification-div").toggle(1000);
            });
        });
    </script>
<!-- </body>
</html> -->