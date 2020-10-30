<head>
    <meta charset=UTF-8"></meta>
    <title>About</title>
    <meta name="description" content="Online OCRis a free online OCR (Optical Character Recognition) service, can analyze the text in any image file that you upload, and then convert the text from the image into text that you can easily edit on your computer"></meta>
    <meta name="keywords" content="ocr, newocr, pdf to ocr, pdf to text"></meta>
    <meta name="rating" content="general" />
    <meta http-equiv="content-language" content="en" />
    <meta name="distribution" content="global" />
    <meta name="author" content="Mukesh Kushwah">
    <?php
    require_once './head.php';
    ?> 
</head>


<body class="index-page sidebar-collapse">
    <?php
    require_once './header.php';
    ?> 

    <div class="">
        <div class="section section-signup" style="background-image: linear-gradient(to bottom, #f6a821, #c96f33, #8b4234, #472325, #000000); background-size: cover; background-position: top center; min-height: 700px;">

            <div class="container">
                <div class="container text-center">
                        <div class="row justify-content-md-center">
                            <div class="col-md-12 col-lg-12">
                                <h1 style="font-family: Arial"><b>About Online OCR</b></h1>
                                <h5 style="font-family: Ubuntu; text-align: justify">
Online OCR is a free online OCR (Optical Character Recognition) service, can analyze the text in any image file that you upload, and then convert the text from the image into text that you can easily edit on your computer
                                </h5>
                                
                            </div>
                        </div>
                    </div>
                
            </div>








                
          
            <div class="container text-center">
                <h2 class="title text-primary">Comment ... </h2>
               
                <div class="row">
                    <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                        <form class="form" method="post" action="message.php">
                                
                                <br>
                                <div class="card-body">
                                    <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons users_circle-08"></i>
                                        </span>
                                        <input type="text" value="" name="name" class="form-control" placeholder="Your Name..." class="form-control" required=""/>
                                    </div>
                                    <br>
                                    <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_email-85"></i>
                                        </span>
                                        <input type="text" value="" name="email" class="form-control" placeholder="Your Email..." class="form-control" required=""/>
                                    </div>
                                    <br>
                                    <div class="col-md-12 form-group label-floating">
                                        <label class="control-label">Your Message...</label>
                                        <textarea input="text" name="message" value="" style="width: 100%; height:80px;"  class="form-control" class="form-control" required=""/></textarea>
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button class="btn btn-primary btn-round" type="submit" value="message" class="form-control" />
                                    <i class="now-ui-icons ui-395_favourite-28"></i><b>Post Message</b>
                                    </button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php
    require_once './footer.php';
    ?>
    
    
    <script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</body>
