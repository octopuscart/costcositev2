<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="manifest" href="<?php echo base_url(); ?>/manifest.webmanifest">
        <meta name="theme-color" content="#c7ecff">
        <meta name="author" content="Costco Development Team">
        <!-- Document Title -->
        <?php
        meta_tags();
        ?>
        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "Sofware Company",
            "name": "Costco International Limited",
            "author": {
            "@type": "Person",
            "name": "Mr. Bari"
            },
            "datePublished": "2020-11-10",
            "description": "Top Custom Web and App Development Company",
            "prepTime": "PT20M"
            }
        </script>

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/rs-plugin/css/settings.css" media="screen" />

        <!-- StyleSheets -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/ionicons.min.css">


        <link href="<?php echo base_url(); ?>assets/theme/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/theme/css/plugin.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/theme/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <!-- template-style-->
        <link href="<?php echo base_url(); ?>assets/theme/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/theme/css/responsive.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/theme/css/custom.css" rel="stylesheet">

    </head>

</head>
<body>
    <!--Start Preloader -->
    <div class="onloadpage" id="page_loader">
        <div class="pre-content">
            <div class="logo-pre"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo" class="img-fluid" /></div>
            <div class="pre-text-"><span></span></div>
        </div>
    </div>
    <!--End Preloader -->
    <!--Start Header -->
    <header class="nav-bg-b main-header navfix fixed-top menu-white header-pr">
        <div class="container-fluid m-pad">
            <div class="menu-header">
                <div class="dsk-logo"><a class="nav-brand" href="<?php echo site_url("/"); ?>">
                        <img src="<?php echo base_url(); ?>assets/images/white-logo.png" alt="Logo" class="mega-white-logo"/>
                        <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo" class="mega-darks-logo"/>
                    </a></div>
                <div class="custom-nav" role="navigation">
                    <ul class="nav-list">

                        <li class=""><a href="#" class="menu-links">INSIGHTS</a></li>
                        <li class="sbmenu"><a href="#" class="menu-links">SERVICES</a>
                            <div class="nx-dropdown">
                                <div class="sub-menu-section">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="sub-menu-center-block">

                                                <div class="sub-menu-column">
                                                    <div class="menuheading">IT SERVICES</div>
                                                    <ul>
                                                        <?php
                                                        $services1 = [
                                                            array("title" => "Artificial intelligence", "link" => site_url("service/artificial-intelligence-solution")),
                                                            array("title" => "Business ERP Solutions", "link" => site_url("service/artificial-intelligence-solution")),
                                                            array("title" => "IT Solutions & Consultancy", "link" => site_url("service/artificial-intelligence-solution")),
                                                            array("title" => "Business Hosting & Email Services", "link" => site_url("service/artificial-intelligence-solution")),
                                                            array("title" => "Software Design & Development", "link" => site_url("service/artificial-intelligence-solution")),
                                                            array("title" => "Mobile Apps Development", "link" => site_url("service/artificial-intelligence-solution")),
                                                            array("title" => "Social Media Marketing", "link" => site_url("service/artificial-intelligence-solution")),
                                                            array("title" => "Digital Marketing", "link" => site_url("service/artificial-intelligence-solution")),];
                                                        foreach ($services1 as $key => $value) {
                                                            ?>
                                                            <li><a href="<?php echo $value["link"]; ?>"><?php echo $value['title'] ?></a></li>  
                                                            <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-column">
                                                    <div class="menuheading">&nbsp;</div>
                                                    <ul>
                                                        <?php
                                                        $services2 = [
                                                            array("title" => "Ecommerce Development", "image" => "icon-3.png", "class" => "cd1"),
                                                            array("title" => "Graphics Designing", "image" => "grf-icon.png", "class" => "cd2"),
                                                            array("title" => "Video Editing", "image" => "icon-4.png", "class" => "cd3"),
                                                            array("title" => "Email Marketing", "image" => "eml-mkrt.svg", "class" => "cd4"),
                                                            array("title" => "Direct Marketing", "image" => "d-mkrt.svg", "class" => "cd5"),
                                                            array("title" => "Blogging - Content Writing", "image" => "blog.svg", "class" => "cd6"),
                                                            array("title" => "Business Accounting", "image" => "icon-5.png", "class" => "cd7"),
                                                            array("title" => "Education Consultancy Services", "image" => "icon-7.png", "class" => "cd8"),];
                                                        foreach ($services2 as $key => $value) {
                                                            ?>
                                                            <li><a href="digital-agency.html"><?php echo $value['title'] ?></a></li>

                                                            <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-column" style="    border-left: 5px solid #004ae6;">
                                                    <div class="menuheading">Business Solutions</div>

                                                    <ul>
                                                        <?php
                                                        $services3 = [
                                                            array("title" => 'COMPANY FORMATION', "link"=>site_url("service/company-formation")),
                                                            array("title" => 'COMPANY SECRETRAIAL SERVICES',"link"=>site_url("service/secretarial-service")),
                                                            array("title" => 'Accounting & Taxation', "link"=>site_url("service/accounting-and-taxation")),
                                                            array("title" => 'VISA & IMIGRATION CONSULTACY', "link"=>site_url("service/immigration")),
                                                            array("title" => 'VIRTUAL OFFICE', "link"=>site_url("service/company-formation")),
                                                            array("title" => 'LEGAL ADVISORY', "link"=>site_url("service/company-formation")),];
                                                        foreach ($services3 as $key => $value) {
                                                            ?>
                                                            <li><a href="<?php echo $value['link'] ?>"><?php echo $value['title'] ?></a></li>

                                                            <?php
                                                        }
                                                        ?>


                                                    </ul>
                                                </div>
                                                <div class="sub-menu-column">
                                                    <div class="menuheading">&nbsp;</div>
                                                    <ul>
                                                        <?php
                                                        $services4 = [
                                                            array("title" => 'CORPORATE ADMINISTRATION', "image" => "icon-3.png", "class" => "cd1"),
                                                            array("title" => 'BANK ACCOUNT OPENING', "image" => "grf-icon.png", "class" => "cd2"),
                                                            array("title" => 'Notarize & Legalize Documents', "image" => "icon-4.png", "class" => "cd3"),
                                                            array("title" => 'Trademark Registration', "image" => "eml-mkrt.svg", "class" => "cd4"),
                                                            array("title" => 'Address & Mail Forwarding', "image" => "d-mkrt.svg", "class" => "cd5"),
                                                            array("title" => 'Transfer an Existing Company', "image" => "blog.svg", "class" => "cd6"),
                                                        ];
                                                        foreach ($services4 as $key => $value) {
                                                            ?>
                                                            <li><a href="digital-agency.html"><?php echo $value['title'] ?></a></li>

                                                            <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" "><a href="#" class="menu-links">INDUSTRIES</a></li>
                        <li class=" "><a href="#" class="menu-links">WORKS</a></li>
                        <li class=" "><a href="#" class="menu-links">CONTACT US</a></li>
                        <li><a href="#" class="menu-links right-bddr">&nbsp;</a>
                            <!--menu right border-->

                        <li><a href="#" class="btn-br bg-btn3 btshad-b2 lnk">Request A Quote <span class="circle"></span></a> </li>
                    </ul>
                </div>
                <div class="mobile-menu2">
                    <ul class="mob-nav2">
                        <li><a href="#" class="btn-round- trngl btn-br bg-btn btshad-b1" id="mobilepopup"><i class="fas fa-envelope-open-text" aria-label="Contact Us"></i></a></li>
                        <li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
                    </ul>
                </div>
            </div>
            <!--Mobile Menu-->
            <nav id="main-nav">
                <ul class="first-nav">
                    <li class=""><a href="#" class="menu-links">INSIGHTS</a></li>
                    <li class=" "><a href="#" class="menu-links">SERVICES</a></li>
                    <li class=" "><a href="#" class="menu-links">INDUSTRIES</a></li>
                    <li class=" "><a href="#" class="menu-links">WORKS</a></li>
                    <li class=" "><a href="#" class="menu-links">CONTACT US</a></li>
                </ul>

            </nav>
        </div>
    </header>