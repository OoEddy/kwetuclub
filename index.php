<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tournament";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Specer Template">
    <meta name="keywords" content="Specer, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Specer | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="search-btn search-switch">
            <i class="fa fa-search"></i>
        </div>
        <div class="header__top--canvas">
            <div class="ht-info">
                <ul>
                    <li>20:00 - May 19, 2019</li>
                    <li><a href="#">Sign in</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="ht-links">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <ul class="main-menu mobile-menu">
            <li class="active"><a href="./index.html">Home</a></li>
            <li><a href="./club.html">Club</a></li>
            <li><a href="./schedule.html">Schedule</a></li>
            <li><a href="./result.html">Results</a></li>
            <li><a href="#">Sport</a></li>
            <li><a href="#">Pages</a>
                <ul class="dropdown">
                    <li><a href="./blog.html">Blog</a></li>
                    <li><a href="./blog-details.html">Blog Details</a></li>
                    <li><a href="#">Schedule</a></li>
                    <li><a href="#">Results</a></li>
                </ul>
            </li>
            <li><a href="./contact.html">Contact Us</a></li>
        </ul>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ht-info">
                            <ul>
                                <li>20:00 - May 19, 2019</li>
                                <li><a href="#">Sign in</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ht-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-vimeo"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <ul class="main-menu">
                                <li class="active"><a href="./index.html">Home</a></li>
                                <li><a href="./club.html">Club</a></li>
                                <li><a href="./schedule.html">Schedule</a></li>
                                <li><a href="./result.html">Results</a></li>
                                <li><a href="#">Sport</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./blog.html">Blog</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                        <li><a href="#">Schedule</a></li>
                                        <li><a href="#">Results</a></li>
                                    </ul>
                                </li>
                                <li><a href="./contact.html">Contact Us</a></li>
                            </ul>
                            <div class="nm-right search-switch">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas-open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/hero/hero-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hs-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="hs-text">
                                        <h4>30 september 2019 / 9:00 GMT+0000</h4>
                                        <h2>Airrosten VS Lerenort in London</h2>
                                        <a href="#" class="primary-btn">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Trending News Section Begin -->
    <div class="trending-news-section">
        <div class="container">
            <div class="tn-title"><i class="fa fa-caret-right"></i> Trending News</div>
            <div class="news-slider owl-carousel">
                <div class="nt-item">Vinyl Banners With Its Different Types Kinds And Applications</div>
                <div class="nt-item">Banners With Its Different Types Kinds And Applications</div>
            </div>
        </div>
    </div>
    <!-- Trending News Section End -->

    <!-- Match Section Begin -->
    <section class="match-section set-bg" data-setbg="img/match/match-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ms-content">
                        <h4>Next Match</h4>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="left-team">
                                            <img src="img/match/tf-1.jpg" alt="">
                                            <h6>Cambodia</h6>
                                        </td>
                                        <td class="mt-content">
                                            <div class="mc-op">Ucraina vs England</div>
                                            <h4>VS</h4>
                                            <div class="mc-op">15 September 2019</div>
                                        </td>
                                        <td class="right-team">
                                            <img src="img/match/tf-2.jpg" alt="">
                                            <h6>Qatar</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="left-team">
                                            <img src="img/match/tf-3.jpg" alt="">
                                            <h6>Australia</h6>
                                        </td>
                                        <td class="mt-content">
                                            <div class="mc-op">Ucraina vs England</div>
                                            <h4>VS</h4>
                                            <div class="mc-op">15 September 2019</div>
                                        </td>
                                        <td class="right-team">
                                            <img src="img/match/tf-4.jpg" alt="">
                                            <h6>Iraq</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="left-team">
                                            <img src="img/match/tf-5.jpg" alt="">
                                            <h6>Ucraina</h6>
                                        </td>
                                        <td class="mt-content">
                                            <div class="mc-op">Ucraina vs England</div>
                                            <h4>VS</h4>
                                            <div class="mc-op">15 September 2019</div>
                                        </td>
                                        <td class="right-team">
                                            <img src="img/match/tf-6.jpg" alt="">
                                            <h6>Jordan</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ms-content">
                        <h4>Recent Results</h4>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="left-team">
                                            <img src="img/match/tf-1.jpg" alt="">
                                            <h6>Darussalam</h6>
                                        </td>
                                        <td class="mt-content">
                                            <div class="mc-op">Ucraina vs England</div>
                                            <h4>1 : 2</h4>
                                            <div class="mc-op">15 September 2019</div>
                                        </td>
                                        <td class="right-team">
                                            <img src="img/match/tf-2.jpg" alt="">
                                            <h6>Ucraina</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="left-team">
                                            <img src="img/match/tf-3.jpg" alt="">
                                            <h6>Japan</h6>
                                        </td>
                                        <td class="mt-content">
                                            <div class="mc-op">Ucraina vs England</div>
                                            <h4>1 : 2</h4>
                                            <div class="mc-op">15 September 2019</div>
                                        </td>
                                        <td class="right-team">
                                            <img src="img/match/tf-4.jpg" alt="">
                                            <h6>Philippines</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="left-team">
                                            <img src="img/match/tf-5.jpg" alt="">
                                            <h6>Kyrgyz</h6>
                                        </td>
                                        <td class="mt-content">
                                            <div class="mc-op">Ucraina vs England</div>
                                            <h4>1 : 2</h4>
                                            <div class="mc-op">15 September 2019</div>
                                        </td>
                                        <td class="right-team">
                                            <img src="img/match/tf-6.jpg" alt="">
                                            <h6 class="mi-right">Pakistan</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Match Section End -->
    <!-- Latest Section Begin -->
    <section class="latest-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title">
                        <h3>Club <span>Ranking</span></h3>
                    </div>
                    <div class="points-table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="th-o">Pos</th>
                                    <th class="th-o">Team</th>
                                    <th class="th-o">P</th>
                                    <th class="th-o">W</th>
                                    <th class="th-o">L</th>
                                    <th class="th-o">D</th>
                                    <th class="th-o">F</th>
                                    <th class="th-o">A</th>
                                    <th class="th-o">Gp</th>
                                    <th class="th-o">PTS</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $result = mysqli_query($conn,"SELECT * FROM ranks ORDER BY Points DESC");
                                    $i=1;
                                    while($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row["Position"]; ?></td>
                                    <td><?php echo $row["Team"]; ?></td>
                                    <td><?php echo $row["Played"]; ?></td>
                                    <td><?php echo $row["Win"]; ?></td>
                                    <td><?php echo $row["Lose"]; ?></td>
                                    <td><?php echo $row["Draw"]; ?></td>
                                    <td><?php echo $row["F"]; ?></td>
                                    <td><?php echo $row["A"]; ?></td>
                                    <td><?php echo $row["Difference"]; ?></td>
                                    <td><?php echo $row["Points"]; ?></td>
                                </tr>
                                <?php
                                $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="#" class="p-all">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="fs-logo">
                        <div class="logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li><i class="fa fa-envelope"></i> Info.colorlib@gmail.com</li>
                            <li><i class="fa fa-copy"></i> +(12) 345 6789 10</li>
                            <li><i class="fa fa-thumb-tack"></i> 40 Baria Sreet 133/2 New York City, United State</li>
                        </ul>
                        <div class="fs-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-tumblr"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-1">
                    <div class="fs-widget">
                        <h4>Top Club</h4>
                        <ul class="fw-links">
                            <li><a href="#">Brazil</a></li>
                            <li><a href="#">Germany</a></li>
                            <li><a href="#">Italy</a></li>
                            <li><a href="#">Argentina</a></li>
                            <li><a href="#">France</a></li>
                        </ul>
                        <ul class="fw-links">
                            <li><a href="#">England</a></li>
                            <li><a href="#">Netherlands</a></li>
                            <li><a href="#">Hungary</a></li>
                            <li><a href="#">Croatia</a></li>
                            <li><a href="#">Poland</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="fs-widget">
                        <h4>Recent News</h4>

                        <div class="fw-item">
                            <h5><a href="#">England win shows they have the spark to go far at World Cup</a></h5>
                            <ul>
                                <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                <li><i class="fa fa-edit"></i> 3 Comment</li>
                            </ul>
                        </div>
                        <div class="fw-item">
                            <h5><a href="#">Sri Lanka v Australia: Cricket World Cup 2019 – live!</a></h5>
                            <ul>
                                <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                <li><i class="fa fa-edit"></i> 3 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright-option">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="co-widget">
                            <ul>
                                <li><a href="#">Copyright notification</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="fa fa-close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>