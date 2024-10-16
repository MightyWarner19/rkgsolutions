 <?php 
    if ($_POST['email']) { 
        $ToEmail = 'info@ralphbooks.com'; 
        $EmailSubject = 'Contact Form From Ralphbooks[QuickBooks Cloud Hosting]'; 
        $mailheader = "From: ".$_POST["email"]."\r\n"; 
        $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $MESSAGE_BODY = "Name: ".$_POST["name"]."<br>";
        $MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>";
        $MESSAGE_BODY .= "tel: ".$_POST["tel"]."<br>";
        $MESSAGE_BODY .= "Select Service: ".$_POST["support"]."<br>";
           
        $MESSAGE_BODY .= "Message: ".nl2br($_POST["message"])."<br>"; 
        mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
    $msg= "You are succesfull submited";
    
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60a6299b185beb22b30f0dcb/1f64h533j';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZND4VQN3L1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZND4VQN3L1');
</script>

    <title>QuickBooks Cloud Hosting</title>
    
    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link href="css/style-magnific-popup.css" rel="stylesheet">


    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700&display=swap" rel="stylesheet">

    <!-- Font Favicon -->
    <link rel="shortcut icon" href="images/qbfavicon.png">
    
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KT3BB57');</script>
<!-- End Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-199733179-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-199733179-1');
</script>

<!-- bing Tag Start -->
<script>
    (function(w,d,t,r,u)
    {
        var f,n,i;
        w[u]=w[u]||[],f=function()
        {
            var o={ti:"134575908"};
            o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")
        },
        n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function()
        {
            var s=this.readyState;
            s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)
        },
        i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)
    })
    (window,document,"script","//bat.bing.com/bat.js","uetq");
</script>
<!-- bing Tag End-->

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KT3BB57"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <!--begin header -->
    <header class="header">

        <!--begin navbar-fixed-top -->
        <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top">
            
            <!--begin container -->
            <div class="container">

                    <!--begin logo -->
                    <a class="navbar-brand" href="https://rkgaccountingsolution.com/dubai/">
					<img src="images/qbklogo.jpeg" alt="logo" width="150px">
					</a>
                    <!--end logo -->

                    <!--begin navbar-toggler -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                    <!--end navbar-toggler -->

                    <!--begin navbar-collapse -->
                    <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                        
                        <!--begin navbar-nav -->
                        <ul class="navbar-nav ml-auto">

                            <li><a href="https://rkgaccountingsolution.com/dubai/">HOME</a></li>

                            <li><a href="https://rkgaccountingsolution.com/dubai/#about">ABOUT</a></li>
							<li><a href="#features">FEATURES</a></li>
                          
						   <li><a href="https://rkgaccountingsolution.com/dubai/#pricing">PRICING</a></li>
                            <li><a href="https://rkgaccountingsolution.com/dubai/#contact">CONTACT</a></li>
                                               

                            <li class="discover-link"><a href="tel:+9718000120110" class="discover-btn">Call Now: +971-800-0120-110</a></li>

                        </ul>
                        <!--end navbar-nav -->

                    </div>
                    <!--end navbar-collapse -->

            </div>
    		<!--end container -->
            
        </nav>
    	<!--end navbar-fixed-top -->
        
    </header>
    <!--end header -->

  
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width:100%;
  border-radius: 5px;
  margin-top: 93px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}
</style>


<div class="jumbotron">
<div class="row">    
    <div class="col-12 col-md-12">
        <div class="card">    </br></br>
            <div class="text-center">
              <br><br>  
              <h1 class="display-5">Thank You!</h1>
              <p class="lead">Our Team Will Contact You Soon</p>
              <hr style="height:2px;background-color:red">
              <p>
                Having trouble? <a href="https://rkgaccountingsolution.com/dubai/">Contact us</a> | Call Us: <a href="tel:+971-800-0120-110">+971-800-0120-110</a>
              </p>
              <p class="lead">
                <a class="btn btn-primary btn-sm" href="https://rkgaccountingsolution.com/dubai/" role="button">Continue to homepage</a>
              </p>
              <br><br><br>
            </div>
        </div>
    </div>
    
   
</div>
</div>


    <!--======================================== 

           Footer

    ========================================-->

      <!--begin footer -->
    <div class="footer">
            
        <!--begin container -->
        <div class="container">
        
            <!--begin row -->
            <div class="row">
            
                <!--begin col-md-5 -->
                <div class="col-md-3">
                   
                  <p> <i class="fa fa-map-marker-alt"></i> <b>USA Office</b></p>
                  <p>19135 Calvert Street,</br> Tarzana CA-91335, USA</p>
                   <p><b>Call: </b><a href="tel:+18005164196">+1 (800)-516-4196</a></p>
				   <br>
                     <p> <i class="fa fa-map-marker-alt"></i> <b>Dubai Office</b></p>
                  <p>Office #1001 Escape Tower,</br>, Business Bay Dubai 31319 , UAE</p>
                   <p><b>Call: </b><a href="tel:+9718000120110">+971 (800)-0120-110</a></p>
                    
                    
                </div>
                <!--end col-md-5 -->
                
                <!--begin col-md-2 -->
                <div class="col-md-6">
                   <p style="text-align:center;text-align:justify;padding: 10px;">All licenses are issued directly by Intuit. RalphAccounting is an authorized ProAdvisor for all Intuit QuickBooks products.Ralph Accounting is an Intuit ®️ Certified QuickBooks®️ ProAdvisor ®️ for certain Intuit®️ products. The Intuit®️logo, Intuit®️, QuickBooks®️, ProAdvisor ®️, are the registered logos, trademarks, and brand names of Intuit Inc and are mentioned on this website are solely used for reference purpose as per Intuit®️ Certified QuickBooks®️ ProAdvisor®️ agreement. Other third-party logos are used for reference purposes only and belong to their respective owners. We assume no liability or responsibility for any errors in the content of this website or such other  materials. </br>With questions call: +971-800-0120-110.</p>
                   
                   
                </div>
                <!--end col-md-2 -->
                
                <!--begin col-md-5 -->
                <div class="col-md-3">
                                         
                    <!--begin footer_social -->
                    <ul class="footer_social">

                        <li>Follow us:</li>

                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>

                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>

                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                        <li><a href="#"><i class="fab fa-skype"></i></a></li><br><br>
                      <li><a href="privacy-policy.php">Privacy Policy</a></li> | <li><a href="term&condition.php">T&C</a></li> | <li><a href="refund-policy.php">Refund Policy</a></li>  | 
                       <li><a href="certification.php">Certification</li>

                    </ul>
                    <!--end footer_social -->
                    
                </div>
                <!--end col-md-5 -->
                
            </div>
            <!--end row -->
<div class="row">
            
                <!--begin col-md-5 -->
                <div class="col-md-2">
                   
                 
                    
                    
                </div>
                <!--end col-md-5 -->
                
                <!--begin col-md-2 -->
                <div class="col-md-8">
                    
                    <p style="text-align:center">© 2022 Ralph Accounting All rights reserved.</p>
                   
                </div>
                <!--end col-md-2 -->
                
                <!--begin col-md-5 -->
                <div class="col-md-2">
                                         
                    
                </div>
                <!--end col-md-5 -->
                
            </div>
        </div>
        <!--end container -->
               
    </div>
    <!--end footer -->

<!-- Load JS here for greater good =============================-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo-min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/wow.js"></script>
<script src="js/plugins.js"></script>
<script src="js/custom.js"></script>


</body>
</html>


