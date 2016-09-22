<?php
    require 'php/connect.inc.php';
    require 'php/sessionlogin.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <style type="text/css">
        .center {
            margin-top: 0; 
            margin-bottom: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 100%;
        }


        p {
            font-size: 1em;
        }



        #displayResult:hover {
            cursor: pointer;
        }

        .item{
            width: 100%;
            height: calc(100vh - 50px);
        }

    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scrolling Nav - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/svgLoader.css">
    <link rel="stylesheet" type="text/css" href="css/modal.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/accordion.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/flipbox.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<!-- 
                    <a id="stepsNav" class="navbar-brand page-scroll" href="#page-top" style="color: #3b5998; float:none; display: inline-block; margin:0; left:50%; position: absolute; transform: translate(-50%);"><b>Steps ˅</b></a>

                    background:url('img/abc.jpg') no-repeat center bottom;
-->

<body style="overflow:hidden;  background-size: 100%; background-attachment: fixed;"  id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" >

    <!-- Navigation -->
    <!-- navbar navbar-default navbar-fixed-top || navbar navbar-default navbar-fixed-top top-nav-collapse-->

    <nav class="navbar navbar-default navbar-fixed-top top-nav-collapse" role="navigation" >
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="pageTopNav" style="color:black;" class="navbar-brand page-scroll"  href="#page-top" ><b>e-Launch</b></a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>  
                </ul>
                <a class="btn btn-default page-scroll" onclick="logout();" style="float:right; margin:8px 10px; background-color: #2196F3; color: white;">Logout</a>
                <a class="btn btn-default page-scroll" href="http://e-launch.freeforums.net/" style="float:right; margin:8px 10px; background-color: #2196F3; color: white;">Forum</a>
            </div>
            <!-- /.navbar-collapse -->
                            
        </div>
        <!-- /.container -->
    </nav>

    <section id="intro" class="intro-section" style="background:url(img/intro-bg2.jpg); background-size:cover;">
        <div class="container">
            <div class="row" >
                <div class="col-md-12" >
                            <br><br><br><br><br><br><br>
                            <h1 class="text-left" style="color: white; font-size:60px;">
                                Welcome to e-Launch.
                            </h1>
                            <h1 class="text-left" style="color: white; font-size: 48px;">
                                We help
                              <a  style="color: white; border-bottom: 5px solid #337ab7; text-decoration: none;" class="typewrite" data-period="1500" data-type='[ "to check your business name.", "to check your domain name.", "find you suitable service providers." ]'>
                                <span class="wrap"></span>
                              </a>
                            </h1>


                    </div>
                </div>
                <h1 class="text-left" >
                    <a id="videoButton" class="youtube btn page-scroll" href="#myModalVideo" data-toggle="modal" style=" font-size:20px; margin:8px 0px;  border-color: transparent; color: white;">
                        <img src="img/video.png" style="width:30px; height:30px;">
                        Video
                    </a>
                    <a class="btn btn-default page-scroll" href="#main" style=" font-size:20px; margin:8px 0px; border-color: #2196F3; background-color:#2196F3; color: white;" onclick="hideTnCPage();">Get Started</a>
                </h1>
                <br><br><br><br>
                <h4 class="text-right" style="position: relative;">
                    <a class="page-scroll" style="color: white; border-bottom: 2px solid #337ab7;" onclick="unHideTnCPage();" href="#termsandconditions">Terms & Conditions</a>
                </h4>
        </div>

    </section>

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <iframe width="400" height="300" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal HTML -->
    <div id="myModalVideo" class="modal" style="z-index:2000;">
        <div class="modal-dialog" >

                    <iframe id="video" width="720" height="576" src="//www.youtube.com/embed/KZYsjDnBw9M" frameborder="0" allowfullscreen></iframe>

        </div>
    </div>

<div id="main"  style="margin-left:0; margin-right:0; padding:0; width:100%; height: 100vh; overflow-y: auto; background-size:cover;">  
        <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="row">
            <div class="progress" id="progress1">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                </div>
                <span class="progress-type">Overall Progress</span>
                <span class="progress-completed">0%</span>
            </div>
        </div>
        <div class="row">
            <div class="row step">
                <div id="div1" class="col-md-2 activestep" onclick="javascript: resetActive(event, 0, 'step-1');">
                    <span  class="fa fa-pencil"></span>
                    <p>Register ABN</p>
                </div>
                <div id="div2" class="col-md-2" onclick="javascript: resetActive(event, 20, 'step-2');">
                    <span class="fa fa-globe"></span>
                    <p>Register Domain Name</p>
                </div>
                <div id="div3" class="col-md-2" onclick="javascript: resetActive(event, 40, 'step-3');">
                    <span class="fa fa-wpforms"></span>
                    <p>Website Setup</p>
                </div>
                <div id="div4" class="col-md-2" onclick="javascript: resetActive(event, 60, 'step-4');">
                    <span class="fa fa-dollar"></span>
                    <p>Advertising</p>
                </div>
                <div id="div5" class="col-md-2" onclick="javascript: resetActive(event, 80, 'step-5');">
                    <span class="fa fa-institution"></span>
                    <p>Finance & Legal</p>
                </div>
                <div id="last" class="col-md-2" onclick="javascript: resetActive(event, 100, 'step-6');">
                    <span class="fa fa-star"></span>
                    <p>Congratulation</p>
                </div>
            </div>
        </div>
        <div class="row setup-content step activeStepInfo" id="step-1">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center">
                    <h1>STEP 1</h1>
                    <h3 class="underline">What Do I Name My Business?</h3>
                    
                        
                        <div id="div-abn-check" > 
                            <form id="form-abn-check">
                                <input id="inputName" title="Search" type="text" placeholder="Search" name="inputname" style="border: 1px solid #b9b9b9; width:70%; height:40px; font-size:35px;">
                                <h1 id="blob" class="blob blob-5"></h1>
                            </form>

                            <div class="row">      
                            <u><h1 id="displayAbnName" style="margin-bottom:20px;"></h1></u>                  
                                <h1 id="displayAvailable" onclick="slideAbnNext()" class="btn btn-default" role="button" style="visibility:collapse;"> </h1>
                                <h1 id="displayUnavailable" style="visibility:collapse;"> </h1>
                            </div>

                            <div class="clear"> </div>
                        </div>
                    <div class="row">
                        <div class="col-md-2" style="border:none;"></div>
                        <div class="col-md-8">
                            <h3 class="title text-left" style="margin-top:0;"> Captivating Business Name</h3>
                            <p class="text-justify" style="font-size:18px;">
                            Choosing the right name for your business is as important as the idea itself. It represents the business itself and will be the very first impression it creates to the customer.
                            </p>

                            <p class="text-justify" style="align: text-bottom; font-size:18px;">
                            Considerations associated with selecting the right online trading name (business name):
                                <ol class="text-justify">
                                    <li>Availability of both business and domain name.</li>
                                    <li>Memorable business name.</li>
                                </ol>
                            </p>

                            <h3 class="title text-left" style="margin-top:0;"> Registering an ABN</h3>            
                            <p class="text-justify"  style="font-size:18px;">
                            The very first step of setting up your online business is to apply for an ABN and a business name. 
                            An Australian Business Number (ABN) is required prior to business name registration. You can lodge your 
                            ABN application through the Australian Business Register and use the ASIC connect platform to register your business name. 
                            </p>

                            <p class="text-justify"  style="font-size:18px;">
                            For more details, please go to 
                            <a href = "https://abr.gov.au/For-Business,-Super-funds---Charities/Applying-for-an-ABN/" >
                                Australian Business Register 
                            </a>
                            Website.
                            </p>
                            
                            <p class="source" style="font-size:10px"> 
                                Source: 
                                <a href="http://www.asic.gov.au/for-business/registering-a-business-name/steps-to-register-your-business-name/">
                                http://www.asic.gov.au/for-business/registering-a-business-name/steps-to-register-your-business-name/
                                </a>
                            </p>

                        </div>
                        <div class="col-md-2" style="border:none;"></div>
                    </div>

                     <a class="btn btn-default page-scroll" style=" font-size:20px; margin:8px 0px; border-color: #2196F3; background-color:#2196F3; color: white;" onclick="step1to2();">Next Step</a>

                </div>
            </div>
        </div>
        <div class="row setup-content step hiddenStepInfo" id="step-2">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center">
                    <h1>STEP 2</h1>
                    <h3 class="underline">Domain Name Registration</h3>
                                
                        <div id="div-domain-check" style="color:black;"> 
                            <form id="form-domain-check">
                                <input id="inputDomainName" type="text" placeholder="Suggestions" name="domainname" style="border: 1px solid #b9b9b9; width:70%; height:40px; font-size:35px;">
                                <!-- 
                                <img class="img-middle" src="img/cross_lines.png" width="auto" height="30" margin="30" onclick="clearInput()">
                                -->
                            </form>
                            <div class="clear"> </div>
                              <br>
                        </div>
                    
                                   
                            <div class="row">
                                <div class="col-md-2" style="border:none;"></div>
                                <div class="col-md-8">
                                    <div class="table-results" >
                                        <div id='blob' style="text-align:center;" class="blob blob-5"></div>
                                        <table class="text-left tg" id="domainsTable" cellspacing="5"></table>
                                    </div>
                                    <img src="img/domains.png" width="100%">
                                    <p class="text-justify" style="font-size:18px;"> When starting a new website, one of the first and most important decisions you have to make is choosing a domain name. That choice will impact the website’s success in nearly every area, included search engine optimization (SEO) and social media marketing (SMM). Let’s examine how a domain name impacts SEO and SMM and then analyze the factors that make a good domain name.
                                    First of all, it has to be unforgettable. Secondly, if possible, it must be unique so that your clients can easily remember it. Lastly, it should be simple, easy to pronounce and no complicated spelling or punctuation characters like hyphen if possible.
                                    </p>
                                </div>
                                <div class="col-md-2" style="border:none;"></div>
                            </div>

                        <a class="btn btn-default page-scroll" style=" font-size:20px; margin:8px 0px; border-color: #2196F3; background-color:#2196F3; color: white;" onclick="step2to3();">Next Step</a>

                </div>
            </div>
        </div>
        <div class="row setup-content step hiddenStepInfo" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center">
                    <h1>STEP 3</h1>
                    <h3 class="underline">How can we help you?</h3>
                    <div  style="font-size: 24px; transform:matrix(1,0,0,1,0,0)"> 
                        I need to create a website and 
                        <select id="websiteCriterionSelection" onchange="websiteCriterionSelectionChange();" style="border-top: none; border-left: none; border-right:none; border-bottom: 3px solid #2196F3; outline:none !important; color: black;">
                            <option id="opt0" value="0" selected ">I would like to do it myself.</option>
                            <option id="opt1" value="1" >I would like professionals to assist me.</option>
                            <option id="opt1" value="2" >I would like to learn more.</option>
                        </select>

                    </div>

                    <div id="onlineServiceProviders"  style="margin-top:20px; padding:20px;">

                        <div class="row" >
                            <div class="col-md-4">
                                <div class="websiteLinks ">
                                    <a style="margin:auto;" href="https://wordpress.com/" ><img class="img-responsive" src="img/logo/wordpress-logo.png" height="70px" width="100%" style="display:block; margin: auto auto;" ></a>             
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="websiteLinks" >
                                    <a style="margin:auto;" href="https://www.google.com.au/webdesigner/"><img src="img/logo/google-web-designer.jpg" height="125px" width="inherit"> </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="websiteLinks" >
                                    <a style="margin:auto;" href="https://sites.envato.com/"><img src="img/logo/envato-logo.png" height="70px" width="inherit"> </a>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top:20px;">
                            <div class="col-md-4">
                                <div  class="websiteLinks" >
                                    <a style="margin:auto;" href="https://www.weebly.com/au"><img src="img/logo/weebly-logo.png" height="70px" width="inherit"> </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="websiteLinks" >
                                    <a style="margin:auto;" href="http://www.wix.com/"><img src="img/logo/wix-logo.jpg" height="auto" width="125px"> </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="websiteLinks" >
                                    <a style="margin:auto;" href="http://imcreator.com/"><img src="img/logo/imcreator-logo.jpg" height="auto" width="125px"> </a>
                                </div>
                            </div>
                        </div>


                        
                    </div>

                    <div id="offlineServiceProviders" class="hide">
                        <div  style="padding:5" align="center" id="findhotels">
                                  <input align="center" class="btn btn-default" 
                                  margin:0 0 0 65px;" id="service" placeholder="Enter a type of service provide " type="text" style="visibility:collapse; width:1px;">
                                  <input style="margin:20px 0px 10px 0px; width:70%;" align="center" class="btn btn-default" id="autocomplete" placeholder="Enter a region" onblur="note_click(this);" onclick="note_click(this)" type="text" />
                                  <button class="btn btn-default" id="clear" onclick="doReset()" style="visibility:collapse; width:1px;"> Clear All</button>
                        </div>

                        <div id="locationField"></div>

                        <div id="controls"></div>
                        <div class="row">
                            <section id="sectionMap" class="col-md-12" style="padding:0;">
                                <div id="map" style="height:400px; width:inherit;"></div>
                            </section>
                            <section id="sectionListing" class="col-md-0" style="padding:0;">
                                <div id="listing" style="overflow:auto; overflow-x:hidden; height:400px; width:0px;opacity:0.85; ">
                                <table class="table" id="resultsTable">
                                    <tbody id="results"></tbody>
                                </table>
                                </div>
                            </section>
                        </div>

                        <select id="country" style="visibility:hidden;">
                            <option value="all">All</option>
                            <option value="au">Australia</option>
                        </select>

                        <div style="display: none">
                          <div id="info-content">
                            <table>
                              <tr id="iw-url-row" class="iw_table_row">
                                <td id="iw-icon" class="iw_table_icon"></td>
                                <td id="iw-url"></td>
                              </tr>
                              <tr id="iw-address-row" class="iw_table_row">
                                <td class="iw_attribute_name">Address:</td>
                                <td id="iw-address"></td>
                              </tr>
                              <tr id="iw-phone-row" class="iw_table_row">
                                <td class="iw_attribute_name">Telephone:</td>
                                <td id="iw-phone"></td>
                              </tr>
                              <tr id="iw-rating-row" class="iw_table_row">
                                <td class="iw_attribute_name">Rating:</td>
                                <td id="iw-rating"></td>
                              </tr>
                              <tr id="iw-website-row" class="iw_table_row">
                                <td class="iw_attribute_name">Website:</td>
                                <td id="iw-website"></td>
                              </tr>
                            </table>
                          </div>
                        </div>

                        <div class="theme-buy">
                          <a class="btn btn-primary btn-large theme-login" href="javascript:;">Check Your Bookmarks</a>
                        </div>
                        <div class="theme-popover" style="display: none;">
                         <div class="theme-poptit">
                              <a href="javascript:;" title="关闭" class="close">×</a>
                         </div>
                         <div class="theme-popbod dform">
                               <table class = "table" id= "result_table">
                                <tr>
                                <th>Website Development Service</th>
                                <th>Location</th>
                                <th></th>
                                </tr>
                                </table>
                           </div>
                        </div>

                    </div>

                    <div id="learnMore" class="row hide" style="margin-top:30px;  ">

                        <div class="col-md-2" style="border:none;"></div>
                        <div class="col-md-8">

                            <div class="row featurette" style="border-top:1px solid #ccc; padding:30px 0px;">
                                <div class="col-md-7">
                                  <h2 class="featurette-heading text-left">Creating a good website <span class="text-muted"></span></h2>
                                  <p class="lead text-justify" style="font-size:18px;">
                                    For a startup company or any company, having a proper website is essential. For new online business, it's essential to impress your clients so that they are interested in your products and services.</p>
                                </div>
                                <div class="col-md-5">
                                  <img class="featurette-image img-responsive center-block" style="height: 200px; width:200px;"" data-src="holder.js/500x500/auto" alt="250x250" src="img/ok-512.png" data-holder-rendered="true">
                                </div>
                              </div>

                            <div class="row featurette" style="border-top:1px solid #ccc; padding:30px 0px;">

                                <div class="col-md-5">
                                  <img class="featurette-image img-responsive center-block" style="height: 200px; width:200px;"" data-src="holder.js/500x500/auto" alt="250x250" src="img/certified.jpg" data-holder-rendered="true">
                                </div>
                                <div class="col-md-7">
                                  <h2 class="featurette-heading text-left">Good Practices<span class="text-muted"></span></h2>
                                  <p class="lead text-justify" style="font-size:18px;">
                                    Having a good website name and good user interation are the few good practices an owner should take into account. The navigation of the website has to be user-friendly and easy to user. Utilizing search bar and other controls would enhance the user experience and would be beneficial to the business. Also, including your contact details would ensure easy communication between customers and yourself.</p>
                                </div>
                              </div>

                              <div class="row featurette" style="border-top:1px solid #ccc; padding:30px 0px;">
                                <div class="col-md-7">
                                  <h2 class="featurette-heading text-left">FAQ Section<span class="text-muted"></span></h2>
                                  <p class="lead text-justify" style="font-size:18px;">
                                    FAQ is an important element in your website as it dissolves the questions your clients are facing. A FAQ can consist of either general information such as the information about your products and services, or a more specific information concerning business opportunities or information tailored only for your business.</p>
                                </div>
                                <div class="col-md-5">
                                  <img class="featurette-image img-responsive center-block" style="height: 200px; width:200px;"" data-src="holder.js/500x500/auto" alt="250x250" src="img/faq.png" data-holder-rendered="true">
                                </div>
                              </div>


                            <div class="row featurette" style="border-top:1px solid #ccc; border-bottom:1px solid #ccc;  padding:30px 0px;">

                                <div class="col-md-5">
                                  <img class="featurette-image img-responsive center-block" style="height: 200px; width:200px;"" data-src="holder.js/500x500/auto" alt="250x250" src="img/favorites-list.png" data-holder-rendered="true">
                                </div>
                                <div class="col-md-7">
                                  <h2 class="featurette-heading text-left">Review & Feedback<span class="text-muted"></span></h2>
                                  <p class="lead text-justify" style="font-size:18px;">
                                    The website should have customer reviews and testimonials so that customers can give honest feedback about your products and services. This assists in attracting more customers in the future as they have a benchmark to compare with and to be able to rely on. Not only that, these feedbacks are valuable pieces of information that a business should take into account to improve their business.</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-2" style="border:none;"></div>

                    </div>


                    <a class="btn btn-default page-scroll" style=" font-size:20px; margin:8px 0px; border-color: #2196F3; background-color:#2196F3; color: white;" onclick="step3to4();"">Next Step</a>

                </div>
            </div>
        </div>
        <div class="row setup-content step hiddenStepInfo" id="step-4">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center">
                    <h1>STEP 4</h1>
                    <h3 class="underline">The 3 Laws of Advertising</h3>
                    <div class="row">
                            <div class="col-md-2" style="border:none;"></div>
                            <div class="col-md-8">
                                <h4 class="title text-left"><b>1. Friend not Foe</b></h4>
                                <p class="text-justify">
                                    Treat your clients as if they are your own friends, by providing information about your products with valuable contents as well as tips on how to use their product to ensure that the clients know it works when they purchase your product.
                                </p>
                                <h4 class="title text-left"><b>2. Good isn't enough, Great is.</b></h4>
                                <p class="text-justify">
                                    Ensure to give high quality pictures and details of the products as this creates a good impression towards the customers and encourage them to buy items. Products that lack quality will drive customers away and this is the last thing a business want.
                                </p>
                                <h4 class="title text-left"><b>3. Social Media and Social Commerce</b></h4>
                                <p class="text-justify">
                                    There should be a clear distinction between these platforms. Misusing any of it will be destructive. Speaking of social media, try to avoid selling on that platform. The last thing you would want to do is to force your customers to buy your products/services, which might drive them away. Rather, promote your website on social media platform so that the customers can visit and buy things.
                                </p>

                                <button class="accordion">Email Registration</button>
                                    <div class="panel">
                                        <p class="text-justify">Registering an <b>email</b> address  is fundamental to a business' operation as it serves as a communication platform to others.</p>
                                        <p class="text-justify">
                                        <a href="https://accounts.google.com/SignUp?" target="_blank"><img src="img/logo/Gmail_logo.png" style="width:80px; height:40px;"></a>
                                        <a href="https://login.live.com/" target="_blank"><img src="img/logo/Hotmail_logo.jpg" style="width:150px; height:40px;"></a>
                                        </p>
                                    </div>
                                    <button class="accordion">Social Media Advertising</button>
                                    <div class="panel">
                                        <p class="text-justify"> <b>Google Adwords</b>, <b>Facebook</b>, <b>Twitter</b> and <b>Instagram</b> are the top few social media platform which would significantly improve the presence of an online business. <b><i>"57% of consumers say they’re influenced to think more highly of business after seeing positive comments or praise online." 
                                        (<a href="http://www.business2community.com/social-media/47-superb-social-media-marketing-stats-facts-01431126#peiZuWd88Kb3FBcG.97" target="_blank">Source</a>)</i></b>
                                        Therefore, it is important that a new business takes on the social media as a tool to help promote their online business.</p>
                                        <a href="https://www.google.com.au/adwords/" target="_blank"><img src="img/logo/Adwords_logo.jpg" style="width:80px; height:40px;"></a>
                                        <a href="https://www.facebook.com/business/overview" target="_blank"><img src="img/logo/Facebook_logo.jpg" style="width:100px; height:40px;"></a>
                                        <a href="https://business.twitter.com/en.html" target="_blank"><img src="img/logo/Twitter_logo.jpg" style="width:100px; height:40px;"></a>
                                        <a href="https://business.instagram.com/" target="_blank"><img src="img/logo/Instagram_logo.png" style="width:80px; height:40px;"></a>
                                    </div>
                                    <button class="accordion">Other Advertising Strategies</button>
                                    <div class="panel">
                                        <p class="text-justify"><b>Newspaper Ads</b></p>
                                        <p class="text-justify">Advertising through the newspaper ads allows you to target avid newspaper readers and is a simple way to get your online business known to others.</p>
                                        <p class="text-justify"><b>Radio Ads</b></p>
                                        <p class="text-justify">Radio advertisement is a very powerful tool to spread your online business out and known to others.</p>
                                    </div>

                                <div class="col-md-2" style="border:none;"></div>
                            </div>
                    </div>

                    <a class="btn btn-default page-scroll" style=" font-size:20px; margin:8px 0px; border-color: #2196F3; background-color:#2196F3; color: white;" onclick="step4to5();">Next Step</a>

                </div>
            </div>
        </div>
        <div class="row setup-content step hiddenStepInfo" id="step-5">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center">
                    <h1>STEP 5</h1>
                    <h3 class="underline">Finance & Legal</h3>
                    <div class="row">
                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                            <div class="flipper">
                                <div class="front" >
                                    <img src="img/paymentgateway.png" height="90%" width="100%">
                                    <p style="font-size:20px;"><b>Payment Gateway</b></p>
                                </div>
                                <div class="back" style="background-color: #2196F3;"  onclick="showPaymentGateway();">
                                    <!--
                                    <p class="text-center" style="color: white; font-size: 20px; vertical-align: middle; "></p>
                                    -->
                                    <a  style="color: white; line-height: 250px;">
                                        
                                        <p style="font-size: 24px;vertical-align: middle;  text-align:center;">View More</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                            <div class="flipper">
                                <div class="front">
                                    <img src="img/auspost.jpg" height="90%"  width="100%">
                                    <p style="font-size:20px;"><b>Shipping</b></p>
                                </div>
                                <div class="back" style="background:#2196F3;" onclick="showShipping();">
                                    <a  style="color: white; line-height: 250px;" >  
                                        <p style="font-size: 24px;vertical-align: middle;  text-align:center;">View More</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                            <div class="flipper">
                                <div class="front">
                                    <img src="img/trademark.png" height="90%"  width="100%">
                                    <p style="font-size:20px;"><b>Intellectual Property</b></p>
                                </div>
                                <div class="back" style="background:#2196F3;" onclick="showTrademark();">
                                    <a style="color: white; line-height: 250px;" >  
                                        <p style="font-size: 24px;vertical-align: middle;  text-align:center;">View More</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="featurette-divider" style="border:1px solid #2196F3;">

                    <div id="paymentgateway" class="row hide">
                        <div class="row">
                            <div class="col-md-2" style="border:none;"></div>
                            <div class="col-md-8">
                                <p style="font-size:20px;"> <b>Payment Gateway</b> is an ecommerce platform that facilitates all payment transactions occurring on your website. Always consider product restrictions, transaction and set up fees.</p>
                            </div>
                            <div class="col-md-2" style="border:none;"></div>
                        </div>
                         <div class="row " style="margin-top:20px;">
                            <div class="col-md-2" style="border:none;"></div>
                            <div class="col-md-4">
                                <div  class="infoLinks" >
                                    <a style="margin:auto;" href="https://www.paypal.com/"><img src="img/paypal.png" height="70px" width="inherit"> </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="infoLinks" >
                                    <a style="margin:auto;" href="http://www.securepay.com.au/"><img src="img/securepay.png" height="auto" width="125px"> </a>
                                </div>
                            </div>
                            <div class="col-md-2" style="border:none;"></div>
                        </div>
                        <div class="row " style="margin-top:20px;">
                            <div class="col-md-2" style="border:none;"></div>
                            <div class="col-md-4">
                                <div  class="infoLinks" >
                                    <a style="margin:auto;" href="https://www.eway.com.au/"><img src="img/eway.png" height="70px" width="inherit"> </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="infoLinks" >
                                    <a style="margin:auto;" href="https://www.merchantwarrior.com/"><img src="img/merchantwarrior.png" height="auto" width="125px"> </a>
                                </div>
                            </div>
                            <div class="col-md-2" style="border:none;"></div>
                        </div>
                    </div>

                    <div id="shipping" class="row hide" >
                        <div class="row">
                            <div class="col-md-2" style="border:none;"></div>
                            <div class="col-md-8">
                                <p style="font-size:20px;"> Be sure to check for <b>shipping</b> restrictions and policies prior to engaging in the service of shipping companies. </p>
                            </div>
                            <div class="col-md-2" style="border:none;"></div>
                        </div>
                         <div class="row " style="margin-top:20px;">
                            <div class="col-md-2" style="border:none;"></div>
                            <div class="col-md-4">
                                <div  class="infoLinks" style="display:block;" >
                                    <a style="margin:auto;" href="https://www.paypal.com/"><img src="img/auspost.png" height="70px" width="inherit"> </a>
                                    <p style="margin-top:10px;"><b>Australia Post</b> provides reliable and affordable postal, retail, financial and travel services. </p>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="infoLinks" style="display:block;">
                                    <a style="margin:auto;" href="http://www.securepay.com.au/"><img src="img/fedex.png" height="auto" width="125px"> </a>
                                    <p style="margin-top:10px;"><b>FedEx</b> is an international shipping company providing fast and reliable express delivery and air freight services.</p>
                                </div>
                            </div>
                            <div class="col-md-2" style="border:none;"></div>
                        </div>
                        
                    </div>     

                    <div id="trademark" class="row hide" >
                        <div class="row">
                            <div class="col-md-2" style="border:none;"></div>
                            <div class="col-md-8">
                                <h2 style="font-size:20px;"><b>Trademarks</b>, <b>patents</b> and <b>copyrights</b> offer protection for owners of intellectual property.</h2>
                                <p class="text-left" style="font-size:16px;">
                                     
                                    <b>Patent</b> protects an invention and innovations or improvements thereon by providing the inventor with a set of exclusive rights which prevent others from making, using, offering for sale, or selling the invention without the consent of the inventor. An idea in itself can not be patented. The idea must be materialized into an invention, innovative product, device or process that offers new solutions to a problem in order for the registrant to be able to seek the patent.  Patents protect products in the fields of machinery, manufacturing, composition of matter (a combination of chemicals), and processes (methods of manufacturing).
                                </p>
                                <p class="text-left" style="font-size:16px;">
                                    <b>Trademark</b> protects an owner’s right to exclusively use images, logos, phrases or words used to distinguish a particular good or service in the market. 
                                </p>
                                <p class="text-left" style="font-size:16px;">
                                    <b>Copyrights</b> protect works of authorship and cover: a) works of art (2 or 3 dimensional), b) photos, pictures, graphic designs, drawings and other forms of images; c) songs, music and sound recordings of all kinds; d) books, manuscripts, publications and other written works; and e) plays, movies, shows, and other performance arts. 
                                </p>
                            </div>
                            <div class="col-md-2" style="border:none;"></div>
                        </div>
                          
                    </div>
               

                    <a class="btn btn-default page-scroll" style=" font-size:20px; margin:8px 0px; border-color: #2196F3; background-color:#2196F3; color: white;" onclick="step5to6();">Next Step</a>
                </div>
            </div>
        </div>
        <div class="row setup-content step hiddenStepInfo" id="step-6">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center">
                    <h1>STEP 6</h1>
                    <h3 class="underline">Congratulations</h3>
                    Congratulations on completing it. Please do send us feedback on the overall process.
                </div>
            </div>
        </div>
    </div>


</div>




     <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close" style="color:black;">x</span>
              <p id="p-url" style= "font-weight: bold;"> </p>
              <p>Choose one of the options below for the domain registrar you'd like to use.</p>
       
              <a id="a-iwmn" class="modal-link" href="https://iwantmyname.com/search?domain=" target="_blank"> 
                <img class="img-modal-link" src="img/logo/iwantmyname.png">
              </a>

              <a id="a-godaddy" class="modal-link" href="https://iwantmyname.com/search?domain=" target="_blank"> 
                <img class="img-modal-link" src="img/logo/godaddy.png">
              </a>

              <a id="a-hostgator" class="modal-link" href="https://iwantmyname.com/search?domain=" target="_blank"> 
                <img class="img-modal-link" src="img/logo/hostgator.png">
              </a>

              <a id="a-namecheap" class="modal-link" href="https://iwantmyname.com/search?domain=" target="_blank"> 
                <img class="img-modal-link" src="img/logo/namecheap.png">
              </a>

              <a id="a-easyname" class="modal-link" href="https://iwantmyname.com/search?domain=" target="_blank"> 
                <img class="img-modal-link" src="img/logo/easyname.png">
              </a>

              <a id="a-domaincom" class="modal-link" href="https://iwantmyname.com/search?domain=" target="_blank"> 
                <img class="img-modal-link" src="img/logo/domaincom.png">
              </a>

            </div>
        </div>


    
<div id="termsandconditions" class="container hide" style="margin-left:0; margin-right:0; padding:0; width:100%; height: 100vh; overflow-y: auto;">  
    <section  class="termsandconditions-section" style=" background-color: transparent;">

        <div class="carousel slide" data-interval="false">
            <div class="carousel-inner">
                <div class="container item active">

                    <div class="row" style="margin-top:20px;">
                        
                        <div class="col-md-2"></div>
                        
                        <div class="col-md-8 text-left">
                            <h2>Terms & Conditions</h2>
                            Please read these Terms and Conditions carefully before using the http://www.e-launch.tk website operated by Team Alpha (18A). Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use our service. By accessing or using the service you agree to be bound by these Terms.

                            <h3>1. Privacy Agreement</h3>
                            E-launch will only collect personal information from an individual if it is necessary for the provision of services to that individual, or to carry out E-launch functions. E-launch will take reasonable steps to collect personal information directly from the individual the information concerns. 
                            'Personal information' means information or opinion about an individual whose identity is apparent, or can reasonably be ascertained, from that information or opinion. Some examples of Personal Information are your name, sex, date of birth, address, financial details, marital status, education and employment history. Some Personal Information is called 'Sensitive Information' and is given extra protection under the law. This includes information about an individual’s racial or ethnic origin, religious beliefs, political views, sexual preferences, membership of unions and criminal record.
                                                    
                            <h3>2. Links to External Websites </h3>
                            Our Service may contain links to third ­party web sites or services that are not owned or controlled by e-launch. E-launch has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that e-launch shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.

                            <h3>3. Terms of Use</h3>
                            <ol type="i">
                                <li>The site makes info cxfcxrmation available to you as a service, the site and the information are provided on an "as is" and "as available" basis. Your use of the site and the information is done at entirely your own risk.
                                </li>
                                <li>We do not give any warranty or make any representation whatsoever with regard to the site and the information. </p>
                                <li>We are not responsible for any adverse consequences arising out of your use of any information contained on the site. To the extent permitted by law, we exclude all responsibility and liability for such information.
                                </li>
                                <li>We reserve the right to cease operating, or change the manner of operation of, the whole or any part of the site at any time. 
                                </li>
                                <li>The site contains links to third party websites, navigating you away from the site. We have no control over any third party website and no responsibility for any content contained in any third party website. We are not liable for any loss or damage suffered by you from accessing, using and/or relying on the content of any third party website. By using any of these links, you acknowledge that you are doing so at your own risk. The inclusion of any link does not imply our endorsement, approval, recommendation or preference of the linked website or any association with the person who runs or manages that website.
                                </li>
                            </ol>
                          

                            <h3>4. Unauthorised Use of Site</h3>
                            <p>While using the site, you agree that you will not use the site for any purpose that is unlawful or prohibited by these terms of use. 
                            <p>Without limiting the foregoing, you agree that you will not:</p>
                                <ol type="a">
                                    <li>use the site to send spam, chain letters, pyramid schemes or other unsolicited communications of any kind;</li>
                                    <li>use the site to abuse, defame, threaten, stalk, harass, breach the confidence of, or otherwise violate the legal rights, of others;</li>
                                    <li>introduce any ‘viruses’, ‘worms’, ‘Trojan Horses’ or any other harmful or destructive items into the site;</li>
                                    <li>interfere with or disrupt networks connected to the site;</li>
                                    <li>attempt to modify, reverse engineer or reverse assemble any part of the site;</li>
                                    <li>conduct yourself in a manner that will, or is reasonably likely to, negatively affect the site or other users of the site; and/or</li>
                                    <li>violate any applicable laws or regulations.</li>
                                </ol>
                            </p>

                            <h2>Legal Disclaimer</h2>
                            <p>
                            All material provided on e-launch is provided for information purposes only. Although every effort is made to ensure that all information provided is accurate and up to date, e-launch is not responsible for the accuracy of the information. E-launch does not accept any liability for any form of loss or damage that may result from any person’s reliance on the information contained on our website. 
                            </p>
                            <p>
                            Some pages on e-launch contain links to external websites that are not affiliated with e-launch. E-launch makes no claim with respect to the accuracy, suitability or authenticity of any information or materials contained in external links. E-launch does not accept any liability for any form of loss or damage that may result from any person’s reliance on the information contained in any external links.
                            </p>
                            <p>
                            E-launch recommend that you verify all information and obtain independent advice before acting upon any information contained on the e-launch website, or any external link.
                            </p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
</div>  

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

    <!-- Carousel Controller -->
    <script src="js/CarouselController.js"></script>

     <!-- Section Controller -->
    <script src="js/SectionController.js"></script>   

    <!-- Step 1: ABNApi Javascript -->
    <script src="js/common.js"></script>

    <!-- Step 1: ABNApi Javascript -->
    <script src="js/ABNApi.js"></script>

    <!-- Step 2: DomainApi Javascript -->
    <script src="js/DomainApi.js"></script>


    <!-- Accordion Javascript -->
    <script src="js/accordion.js"></script>

    <!-- Bookmark Javascript -->
    <script src="js/bookmark.js"></script>

    <!-- LoginLogout Javascript -->
    <script src="js/LoginLogout.js"></script>

    <!-- json_parse Javascript -->
    <script src="js/json_parse.js"></script>

    <!-- Google Map Javascript & Api -->
    <script src="js/GoogleMapApi - User.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNFgwjA81nVhc9E_5gYv_XVUSk45qpIJo&signed_in=true&libraries=places&callback=initMap" async defer></script>

<script type="text/javascript">
    
    function addResult(result, i) {
      var results = document.getElementById('results');
      var markerLetter = String.fromCharCode('A'.charCodeAt(0) + i);
      var markerIcon = MARKER_PATH + markerLetter + '.png';
      var user_NUM = <?php echo $_SESSION['user_id'];?>;
      var tr = document.createElement('tr');
      tr.style.backgroundColor = (i % 2 === 0 ? '#F0F0F0' : '#FFFFFF');
      tr.style.width ='802px';
      //tr.onclick = function() {
      //  google.maps.event.trigger(markers[i], 'click');
      // };
      console.log(result);
      var iconTd = document.createElement('td');
      var businessTd = document.createElement('td');
      var nameTd = document.createElement('td');
      var addressTd = document.createElement('td');
      var vicinityTd = document.createElement('td');
      var collectButtonTd = document.createElement('td');
      vicinityTd.setAttribute("id",i.toString());
      var collectButton = document.createElement('button');
      var buttonID = 'collectButton'+ i;
      collectButton.setAttribute("id",buttonID);
      collectButton.setAttribute("title",'Bookmark');
      collectButton.setAttribute("value",i);
      collectButton.setAttribute("class","btn btn-default fa fa-bookmark-o");
      var icon = document.createElement('img');
      icon.src = markerIcon;
      icon.setAttribute('class', 'placeIcon');
      icon.setAttribute('className', 'placeIcon');
      var business = document.createTextNode("Name:");
      var name = document.createTextNode(result.name);
      var address = document.createTextNode("Address:");
      var vicinity = document.createTextNode(result.vicinity);
      collectButton.onclick = function(){goodplus(i,result.name,result.vicinity,user_NUM);
        //addToTable(result.name,result.vicinity); 
        //alert ("This service provided");
      };
      //document.getElementById(buttonID).onclick = function(){alert("aaa");};
      iconTd.appendChild(icon);
      businessTd.appendChild(business);
      nameTd.appendChild(name);
      addressTd.appendChild(address);
      vicinityTd.appendChild(vicinity);
      collectButtonTd.appendChild(collectButton);
      tr.appendChild(iconTd);
      tr.appendChild(businessTd);
      tr.appendChild(nameTd);
      tr.appendChild(addressTd);
      tr.appendChild(vicinityTd);
      tr.appendChild(collectButtonTd);
      results.appendChild(tr);
    }

      jQuery(document).ready(function($) {
        $('.theme-login').click(function(){
          $('.theme-popover-mask').fadeIn(100);
          $('.theme-popover').slideDown(200);
        })
        $('.theme-poptit .close').click(function(){
          $('.theme-popover-mask').fadeOut(100);
          $('.theme-popover').slideUp(200);
        })
      })

    <?php
    $userID = $_SESSION['user_id'];
    if ($result = $mysqli->query("SELECT business_name,business_address FROM user_bookmark where user_id = '$userID'")) {
      while ($row = $result->fetch_object()){
      $brs[] = $row;
    }
        if(!empty($brs))
          $str = json_encode($brs);
        else
            echo "<script type='text/javascript'>alert('Oops,no record found!');</script>";
    }
    ?>
    var json_str1 = '<?php echo $str;?>';
    var jsonObject1 = json_parse(json_str1);
    var div = document.getElementById("div_1");
    var table = document.getElementById("result_table");
    if(jsonObject1.length==0)
        console.log('Oops,no record found in this area!');
    else{
        for(var i=0; i<jsonObject1.length;i++)
        {
            table.insertRow();
            table.rows[i+1].insertCell();
            table.rows[i+1].cells[0].appendChild(document.createTextNode(jsonObject1[i].business_name));
            table.rows[i+1].insertCell();
            table.rows[i+1].cells[1].appendChild(document.createTextNode(jsonObject1[i].business_address));
        }
    }

</script>


</body>

</html>
