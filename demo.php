<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <title>document</title>
        <link rel="stylesheet" href="note.css" />

        <style>
            * {
                margin: 0;
                padding: 0;
            }
            body {
                background: url("C:\Users\aishha\Desktop/bca.jpg") no-repeat;
                background-color: cover;
            }
            /*Navbar */
            .navbar {
                display: flex;
                height: 50px;
                justify-content: center;
                align-items: center;
                background-color: whitesmoke;
            }
            .navbar ul {
                display: flex;
                list-style: none;
                font-size: 1.1rem;
                font-family: "Time New Roman", Times, serif;
            }
            .navbar ul li {
                padding: 10px 0px;
            }
            .navbar ul li a {
                padding: 10px 30px;
                text-decoration: none;
                color: black;
            }
            .navbar ul li a:hover {
                background-color: blueviolet;
                color: white;
            }
            /* Button */
            #btn {
                padding: 10px 25px;
                font-family: "Times New Roman", Times, serif;
                font-size: 1rem;
                background-color: blueviolet;
                position: relative;
                color: white;
                border: none;
                outline: none;
                cursor: pointer;
                margin-right: 10px;
            }
            /* Drop down menu */
            #dropdown {
                position: absolute;
                top: 41px;
                left: 0;
            }
            #dropdown > ul {
                display: block;
                background-color: blueviolet;
            }
            #dropdown ul {
                display: none;
            }
            #dropdown > ul li {
                padding: 15px;
            }
            #dropdown ul li a {
                color: white;
                padding: 10px 30px;
            }
            #dropdown ul li a:hover {
                background-color: white;
                color: black;
            }
            .show {
                display: block;
            }
            #submenu {
                display: none;
            }
            #dropdown ul li:hover #submenu {
                display: block;
                position: absolute;
                left: 135px;
                width: 200px;
            }



            .wrapper {
              width:400px;
              cursor:pointer;
            }

            .main-nav {
              position:relative;
              border:1px solid rgba(0, 0, 0 , 0.2);
              padding:15px;
              background: rgba(0, 0, 0, 0.78);
              color: #fefefe;
            }

            .main-nav:hover {
              background: rgba(0, 0, 0, 0.9);
            }

            .main-nav > span {
              position:absolute;
              top: 17px;
              right:20px;
              cursor:pointer;
            }

            .wrapper ul {
              display:none;
              margin-top:-1px;
              background: rgba(0, 0, 0, 0.78);
              color: #fefefe;
            }

            .wrapper  li {
              border-bottom:1px solid rgba(0, 0, 0, 0.1);
            }

            .wrapper a, .wrapper a:visited {
              text-decoration:none;
              padding-left:0;
              color: #fefefe;
              padding:15px;
              display:block;
              transition: all .3s ease-in-out;
              -moz-transition: all .3s ease-in-out;
              -webkit-transition: all .3s ease-in-out;
            }

            .wrapper a:hover {
              background: rgba(0, 0, 0, 0.9);
              transition: all .3s ease-in-out;
              -moz-transition: all .3s ease-in-out;
              -webkit-transition: all .3s ease-in-out;
            }
        </style>
    </head>
    <body>
        <nav class="navbar">
            <ul>
                <!-- <button id="btn" onclick="show()">
                    BCA
                    <div id="dropdown" >
                        <ul class="dropdown-content">
                            <li>
                                <a href="http://#">1st Semester</a>
                                <div id="submenu">
                                    <ul>
                                        <li><a href="http://#">Notes</a></li>
                                        <li><a href="http://#">Syallbus</a></li>
                                        <li><a href="http://#">Model Questions</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="http://#">2nd Semester</a>
                                <div class="submenu">
                                    <ul>
                                        <li><a href="http://#">Notes</a></li>
                                        <li><a href="http://#">Syallbus</a></li>
                                        <li><a href="http://#">Model Questions</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="http://#">3rd Semester</a>
                                <div class="submenu">
                                    <ul>
                                        <li><a href="http://#">Notes</a></li>
                                        <li><a href="http://#">Syallbus</a></li>
                                        <li><a href="http://#">Model Questions</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="http://#">4th Semester</a>
                                <div class="submenu">
                                    <ul>
                                        <li><a href="http://#">Notes</a></li>
                                        <li><a href="http://#">Syallbus</a></li>
                                        <li><a href="http://#">Model Questions</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="http://#">5th Semester</a>
                                <div class="submenu">
                                    <ul>
                                        <li><a href="http://#">Notes</a></li>
                                        <li><a href="http://#">Syallbus</a></li>
                                        <li><a href="http://#">Model Questions</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="http://#">6th Semester</a>
                                <div class="submenu">
                                    <ul>
                                        <li><a href="http://#">Notes</a></li>
                                        <li><a href="http://#">Syallbus</a></li>
                                        <li><a href="http://#">Model Questions</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="http://#">7th semester</a>
                                <div class="submenu">
                                    <ul>
                                        <li><a href="http://#">Notes</a></li>
                                        <li><a href="http://#">Syallbus</a></li>
                                        <li><a href="http://#">Model Questions</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="http://#">8th Semester</a>
                                <div class="submenu">
                                    <ul>
                                        <li><a href="http://#">Notes</a></li>
                                        <li><a href="http://#">Syallbus</a></li>
                                        <li><a href="http://#">Model Questions</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </button> -->
                <div class="wrapper">
                  <div class="main-nav">Menu<span><img src="https://res.cloudinary.com/trobes/image/upload/v1547223073/drop-down-arrow.png"/></span></div>
                  <ul>
                    <li>
                        <a href="http://#">1st Semester</a>
                        <div id="submenu">
                            <ul>
                                <li><a href="http://#">Notes</a></li>
                                <li><a href="http://#">Syallbus</a></li>
                                <li><a href="http://#">Model Questions</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="http://#">2nd Semester</a>
                        <div class="submenu">
                            <ul>
                                <li><a href="http://#">Notes</a></li>
                                <li><a href="http://#">Syallbus</a></li>
                                <li><a href="http://#">Model Questions</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="http://#">3rd Semester</a>
                        <div class="submenu">
                            <ul>
                                <li><a href="http://#">Notes</a></li>
                                <li><a href="http://#">Syallbus</a></li>
                                <li><a href="http://#">Model Questions</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="http://#">4th Semester</a>
                        <div class="submenu">
                            <ul>
                                <li><a href="http://#">Notes</a></li>
                                <li><a href="http://#">Syallbus</a></li>
                                <li><a href="http://#">Model Questions</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="http://#">5th Semester</a>
                        <div class="submenu">
                            <ul>
                                <li><a href="http://#">Notes</a></li>
                                <li><a href="http://#">Syallbus</a></li>
                                <li><a href="http://#">Model Questions</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="http://#">6th Semester</a>
                        <div class="submenu">
                            <ul>
                                <li><a href="http://#">Notes</a></li>
                                <li><a href="http://#">Syallbus</a></li>
                                <li><a href="http://#">Model Questions</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="http://#">7th semester</a>
                        <div class="submenu">
                            <ul>
                                <li><a href="http://#">Notes</a></li>
                                <li><a href="http://#">Syallbus</a></li>
                                <li><a href="http://#">Model Questions</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="http://#">8th Semester</a>
                        <div class="submenu">
                            <ul>
                                <li><a href="http://#">Notes</a></li>
                                <li><a href="http://#">Syallbus</a></li>
                                <li><a href="http://#">Model Questions</a></li>
                            </ul>
                        </div>
                    </li>
                  </ul>
                </div>
                <li><a href="http://#">Home</a></li>
                <li><a href="http://#">Services</a></li>
                <li><a href="http://#">About us</a></li>
                <li><a href="http://#">contact us</a></li>
                <li><a href="http://#">Register</a></li>
                <li><a href="http://#">Login</a></li>
            </ul>
        </nav>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
           



            $('.main-nav').on('click',function(){
              $('.wrapper ul').slideToggle(280);
            });

        </script>
    </body>
</html>
