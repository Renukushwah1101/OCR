<head>
    <meta charset=UTF-8"></meta>
    <title>Contact to Online OCR </title>
    <meta name="description" content="Online OCR is a free online OCR (Optical Character Recognition) service, can analyze the text in any image file that you upload, and then convert the text from the image into text that you can easily edit on your computer"></meta>
    <meta name="keywords" content="ocr, newocr, pdf to ocr, pdf to text"></meta>
    <meta name="rating" content="general" />
    <meta http-equiv="content-language" content="en" />
    <meta name="distribution" content="global" />
    <meta name="author" content="Renu Kushwah">
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
                <div class="card col-lg-12" style="background-image: linear-gradient(to bottom, #f371ff, #ff7be4, #ff8bcf, #ff9cc2, #f5aebd, #f3abb5, #f1a9ae, #eea7a6, #f7908d, #fc7773, #ff5c57, #ff3a3a);">                
                    <div class="row">
                        <div class="col-lg-8">
                            <form class="form" method="post" action="message.php">
                                <div class="header text-center">
                                    <h4 class="title title-up">Let's Talk</h4>
                                </div>
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
    </div>
<?php
require_once './footer.php';
?>
</body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
