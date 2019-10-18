<?php

    date_default_timezone_set('America/Toronto');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
        
        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="Convergence.Tech is a digital transformation company based in Toronto, Canada. Partnering with clients and leveraging today's leading technologies along with deep industry-specific expertise, Convergence enables innovation to take place so that organizations can become digital leaders. Operating globally, with active projects worldwide, our team also works closely with government bodies, humanitarian agencies, and corporations.">

        <link rel="icon" type="image/png" href="https://convergence.tech/img/icons/favicon-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="https://convergence.tech/img/icons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="https://convergence.tech/img/icons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="https://convergence.tech/img/icons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="https://convergence.tech/img/icons/favicon-16x16.png" sizes="16x16">
        <link rel="image_src" href="https://convergence.tech/img/icons/share.jpg">

        <link rel="apple-touch-icon" href="https://convergence.tech/img/icons/apple-touch-icon-180x180.png">
        <link rel="apple-touch-icon" sizes="76x76" href="https://convergence.tech/img/icons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="https://convergence.tech/img/icons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="https://convergence.tech/img/icons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="https://convergence.tech/img/icons/apple-touch-icon-180x180.png">

        <title>Convergence - Blockchain Technology and Digital ID Solutions</title>

        <!-- Facebook Open Graph -->
        <meta property="og:locale" content="en_CA">
		<meta property="og:type" content="website">
        <meta property="og:title" content="Convergence - Blockchain Technology and Digital ID Solutions">
        <meta property="og:site_name" content="Convergence">
        <meta property="og:description" content="Convergence.Tech is a digital transformation company based in Toronto, Canada. Partnering with clients and leveraging today's leading technologies along with deep industry-specific expertise, Convergence enables innovation to take place so that organizations can become digital leaders. Operating globally, with active projects worldwide, our team also works closely with government bodies, humanitarian agencies, and corporations.">
        <meta property="og:url" content="https://convergence.tech/">
        <meta property="og:image" content="https://convergence.tech/img/icons/share.jpg">

        <!-- Fonts -->
        <link href="/lib/fontawesome/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

        <!-- CSS -->
        <link href="/lib/misc/hamburgers.min.css" rel="stylesheet">
        <link href="/lib/common.css?ver=20191002" rel="stylesheet">
        
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
        
        <!-- Smooth Scroll -->
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
        
        <!-- Fancybox -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script type="text/javascript">
		
			$("[data-fancybox]").fancybox({
				// Options will go here
			});
			
		</script>
        
        <!-- Menu -->
		<script>

			$(document).ready(function(){
                
                var $hamburger = $(".hamburger");
                $hamburger.on("click", function(e) {
                    $hamburger.toggleClass("is-active");
                    $('#mobile-menu').toggleClass("open-it");
                });
                
                $('#mobile-navigation a').click(function() {
                    $hamburger.toggleClass("is-active");
					$('#mobile-menu').removeClass('open-it');
				});
                
                if ($(window).width() > 1249) {
                    var headerOffset = 50;
                    var shadowOffset = 100;
                } else if ($(window).width() > 1023) {
                    var headerOffset = 30;
                    var shadowOffset = 60;
                }
                
                if ($(window).width() > 1023) {
                    if ($(window).scrollTop() >= headerOffset) {
                        $('#header').addClass('sticky');
                    } else {
                        $('#header').removeClass('sticky');
                    }
                    if ($(window).scrollTop() >= shadowOffset) {
                        $('#header-shadow').addClass('sticky');
                    } else {
                        $('#header-shadow').removeClass('sticky');
                    }

                    $(window).scroll(function() {
                        if ($(window).scrollTop() >= headerOffset) {
                            $('#header').addClass('sticky');
                        } else {
                            $('#header').removeClass('sticky');
                        }
                        if ($(window).scrollTop() >= shadowOffset) {
                            $('#header-shadow').addClass('sticky');
                        } else {
                            $('#header-shadow').removeClass('sticky');
                        }
                    });
                } else {
                    $('#header').removeClass('sticky');
                    $('#header-shadow').removeClass('sticky');
                }
                
                $(window).resize(function() {
                    if ($(window).width() > 1249) {
                        var headerOffset = 50;
                        var shadowOffset = 100;
                    } else if ($(window).width() > 1023) {
                        var headerOffset = 30;
                        var shadowOffset = 60;
                    }
                    
                    if ($(window).width() > 1023) {
                        if ($(window).scrollTop() >= headerOffset) {
                            $('#header').addClass('sticky');
                        } else {
                            $('#header').removeClass('sticky');
                        }
                        if ($(window).scrollTop() >= shadowOffset) {
                            $('#header-shadow').addClass('sticky');
                        } else {
                            $('#header-shadow').removeClass('sticky');
                        }

                        $(window).scroll(function() {
                            if ($(window).scrollTop() >= headerOffset) {
                                $('#header').addClass('sticky');
                            } else {
                                $('#header').removeClass('sticky');
                            }
                            if ($(window).scrollTop() >= shadowOffset) {
                                $('#header-shadow').addClass('sticky');
                            } else {
                                $('#header-shadow').removeClass('sticky');
                            }
                        });
                    } else {
                        $('#header').removeClass('sticky');
                        $('#header-shadow').removeClass('sticky');
                    }
                });
                
            });
                
        </script>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116294904-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-116294904-1');
        </script>

    </head>
    <body>

        <div id="mobile-menu">
            <div id="mobile-menu-wrapper">
                <div id="mobile-navigation">
                    <a href="#about">About</a>
                    <a href="#products">Products</a>
                    <a href="#news">News</a>
                    <a href="#team">Team</a>
                    <a href="#contact">Contact</a>
                    <a href="https://drive.google.com/file/d/1m8xVqV2RMTWrKbECKf3RZsdcy44eM21S/view" target="_blank">Digital ID Paper</a>
                </div>
            </div>
        </div>
        <header id="header">
            <div id="header-wrapper" class="wrapper">
                <div id="logo"><a href="#top"><img src="/img/common/logo.png" srcset="/img/common/logo@2x.png 2x" alt="Convergence"></a></div>
                <div id="menu-button">
                    <div id="menu-button-wrapper">
                        <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div id="navigation">
                    <a data-scroll href="#about">About</a><a data-scroll href="#products">Products</a><a data-scroll href="#news">News</a><a data-scroll href="#team">Team</a><a data-scroll href="#contact">Contact</a><a href="https://drive.google.com/file/d/1m8xVqV2RMTWrKbECKf3RZsdcy44eM21S/view" target="_blank">Digital ID Paper</a>
                </div>
                <div class="clear"></div>
            </div>
        </header>  
        <div id="header-fill"></div>
        <div id="header-shadow"></div>
        <div id="header-size"></div>
        <div id="intro" class="common-pad">
            <div id="intro-wrapper" class="wrapper">
                <div id="intro-content">
                    <h1>Your Trusted Digital <br>Transformation Partner</h1>
                </div>
            </div>
        </div>
        <div id="about" class="common-pad">
            <div id="about-wrapper" class="wrapper">
                <div id="about-title" class="title-top">
                    <h2>About</h2>
                </div>
                <div id="about-content">
                    Convergence.Tech is a digital transformation company based in Toronto, Canada. Partnering with clients and leveraging today's leading technologies along with deep industry-specific expertise, Convergence enables innovation to take place so that organizations can become digital leaders. Operating globally, with active projects worldwide, our team also works closely with government bodies, humanitarian agencies, and corporations.<br>
                    <br>
                    Possessing extensive consultancy experience, Convergence advises, develops, and implements technology solutions on a global scale; to include complex regions such as India, Mongolia, and Afghanistan.<br>
                    <br>
                    Many of these solutions get powered by blockchain technology and get centered on environmental impact and sustainability initiatives.<br>
                    <br>
                    Our technology solutions are focused on traceability as well as digital identity.
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div id="products" class="common-pad">
            <div id="products-wrapper" class="wrapper">
                <div id="products-line"></div>
                <div id="products-title" class="title-top">
                    <h2>Products</h2>
                </div>
                <div id="products-content">
                    <div id="products-transformation" class="products-item">
                        <h3>Digital Transformation</h3>
                        Digital transformation often gets misunderstood; there has been a significant focus on the digital part thus far, but with scant regard for the transformational implications of it on the rest of the organization, and ultimately on those the organization serves. This misunderstanding is exactly why scarcely 1 in 8 digital transformation efforts are successful.<br>
                        <br>
                        Convergence's approach to digital transformation considers both the digital and the transformation facets of digital transformation. Our expertise and a deep understanding of the drivers of digital transformation allow us to help customers understand why an organization should undertake it. To successfully integrate digitization, your organization must consider important contemporary aspects like ethics and governance (corporate governance, IT governance, and data governance). These, as well as ensuring the alignment of your digital vision, are a critical factor for achieving success.<br>
                        <br>
                        Ultimately, digital transformation leverages new technology to create new markets, to create new or enhanced lines of business, or to create new or enhanced means of getting an organization’s products and services to those it serves. The results of digital transformation are therefore seen through the client/customer/citizen’s eyes as consistent, sustainable and satisfying service experiences, and through the organization’s eyes as enhanced revenue lines, optimized costing, and increased risk control. In other words, digital transformation is a process of two-way value creation. It is our goal to ensure that the probability of your digital transformation success significantly exceeds 1 in 8, enabling your initiative to not only create value for those you serve, but for your organization too.
                    </div>
                    <div id="products-group">
                        <div id="products-backbone" class="products-item">
                            <h3>Backbone - Traceability Platform</h3>
                            Backbone provides the foundation and a secure data layer to enable robust end-to-end traceability solutions.  Whether plugging into an existing ERP system or integrating directly with sensing technologies, Backbone enables the secure registration of assets and well as the acquisition, storage, and verification of data.<br>
                            <br>
                            Active use cases include: fibers, commodities, and healthcare supplies.
                        </div>
                        <div id="products-trybe" class="products-item">
                            <h3>Trybe.ID - Digital Identity</h3>
                            Trybe is a self-sovereign, digital identity(SSI) product, that offers individuals as well as corporates and governments a familiar interface to interacting with one another while seamlessly sharing and verifying credentials.<br>
                            <br>
                            Trybe features RESTful APIs for ease of integration with existing IT systems as well as external web and mobile interfaces.<br>
                            <br>
                            Our primary goal is to make SSI simple.<br>
                            <br>
                            Active use cases include: academic credentials.
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div id="news" class="common-pad">
            <div id="news-wrapper" class="wrapper">
                <div id="news-line"></div>
                <div id="news-title" class="title-top">
                    <h2>News</h2>
                </div>
                <div id="news-content">
                    <div id="news-content-wrapper">
                        <div id="news-flex">
                            <div class="news-item">
                                <div class="news-item-wrapper">
                                    <div class="news-item-img">
                                        <a href="https://blogs.lse.ac.uk/businessreview/2018/04/13/using-blockchain-to-make-land-registry-more-reliable-in-india/" target="_blank"><img src="/img/common/news-lse@2x.jpg" alt="Using blockchain to make land registry more reliable in India" class="lse"></a>
                                    </div>
                                    <div class="news-item-text">
                                        <a href="https://blogs.lse.ac.uk/businessreview/2018/04/13/using-blockchain-to-make-land-registry-more-reliable-in-india/" target="_blank">Using blockchain to make land registry more reliable in India</a>
                                    </div>
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="news-item-wrapper">
                                    <div class="news-item-img">
                                        <a href="https://www.adaptation-undp.org/scaling-climate-action-fresh-compact-between-undp-and-private-sector-partners-accelerate-data-and" target="_blank"><img src="/img/common/news-undp@2x.jpg" alt="Scaling up climate action: Fresh compact between UNDP and private sector partner" class="undp"></a>
                                    </div>
                                    <div class="news-item-text">
                                        <a href="https://www.adaptation-undp.org/scaling-climate-action-fresh-compact-between-undp-and-private-sector-partners-accelerate-data-and" target="_blank">Scaling up climate action: Fresh compact between UNDP and private sector partner</a>
                                    </div>
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="news-item-wrapper">
                                    <div class="news-item-img">
                                        <a href="https://startupheretoronto.com/type/profiles/blockchain-learning-group-and-blockscale-solutions-empowering-approach-to-deciphering-blockchain-for-businesses-and-governments/" target="_blank"><img src="/img/common/news-startup@2x.jpg" alt="Toronto Startup Transforms Governments with Blockchain" class="startup"></a>
                                    </div>
                                    <div class="news-item-text">
                                        <a href="https://startupheretoronto.com/type/profiles/blockchain-learning-group-and-blockscale-solutions-empowering-approach-to-deciphering-blockchain-for-businesses-and-governments/" target="_blank">Toronto Startup Transforms Governments with Blockchain</a>
                                    </div>
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="news-item-wrapper">
                                    <div class="news-item-img">
                                        <img src="/img/common/news-default@2x.jpg" alt="" class="default">
                                    </div>
                                    <div class="news-item-text">
                                        Coming Soon...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="team" class="common-pad">
            <div id="team-wrapper" class="wrapper">
                <div id="team-line"></div>
                <div id="team-title" class="title-top">
                    <h2>Team</h2>
                </div>
                <div id="team-content">
                    <div id="team-list">
                        <!-- Chami Akmeemana -->
                        <div class="team-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-chami-a.jpg" alt="Chami Akmeemana">
                            </div>
                            <div class="team-item-text">
                                <h3>Chami Akmeemana</h3>
                                Chief Executive Officer
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-chami-a" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Jim Whitestone -->
                        <div class="team-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-jim-w.jpg" alt="Jim Whitestone">
                            </div>
                            <div class="team-item-text">
                                <h3>Jim Whitestone</h3>
                                Chief Environmental and Financial Economist
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-jim-w" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Leigh Parker -->
                        <div class="team-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-leigh-p.jpg" alt="Leigh Parker">
                            </div>
                            <div class="team-item-text">
                                <h3>Leigh Parker</h3>
                                Head of Marketing and Growth
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-leigh-p" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Guy Pearce -->
                        <div class="team-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-guy-p.jpg" alt="Guy Pearce">
                            </div>
                            <div class="team-item-text">
                                <h3>Guy Pearce</h3>
                                Chief Digital Transformation Officer
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-guy-p" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Dave Tiffin -->
                        <div class="team-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-dave-t.jpg" alt="Dave Tiffin">
                            </div>
                            <div class="team-item-text">
                                <h3>Dave Tiffin</h3>
                                Program Manager
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-dave-t" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Maryam Nizam -->
                        <div class="team-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-maryam-n.jpg" alt="Maryam Nizam">
                            </div>
                            <div class="team-item-text">
                                <h3>Maryam Nizam</h3>
                                Sales and Growth Consultant
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-maryam-n" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Erik Zvaigzne -->
                        <div class="team-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-erik-z.jpg" alt="Erik Zvaigzne">
                            </div>
                            <div class="team-item-text">
                                <h3>Erik Zvaigzne</h3>
                                VP, Product
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-erik-z" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Adam Lemmon -->
                        <div class="team-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-adam-l.jpg" alt="Adam Lemmon">
                            </div>
                            <div class="team-item-text">
                                <h3>Adam Lemmon</h3>
                                VP, Technology & Operations
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-adam-l" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Murtaza Tawawala -->
                        <div class="team-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-murtaza-t.jpg" alt="Murtaza Tawawala">
                            </div>
                            <div class="team-item-text">
                                <h3>Murtaza Tawawala</h3>
                                Head of Operations
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-murtaza-t" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="advisors-title">
                        <div id="advisors-line"></div>
                        <span>Advisors</span>
                    </div>
                    <div id="advisors-list">
                        <!-- Steve Orsini -->
                        <div class="advisors-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-steve-o.jpg" alt="Steve Orsini">
                            </div>
                            <div class="team-item-text">
                                <h4>Government</h4>
                                <h3>Steve Orsini</h3>
                                Former Cabinet Secretary, Ontario Public Service
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-steve-o" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Christian Buhagiar -->
                        <div class="advisors-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-christian-b.jpg" alt="Christian Buhagiar">
                            </div>
                            <div class="team-item-text">
                                <h4>Supply Chain and Logistics</h4>
                                <h3>Christian Buhagiar</h3>
                                CEO, Supply Chain Management Association
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-christian-b" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Sandra Ketchen -->
                        <div class="advisors-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-sandra-k.jpg" alt="Sandra Ketchen">
                            </div>
                            <div class="team-item-text">
                                <h4>Supply Chain and Logistics</h4>
                                <h3>Sandra Ketchen</h3>
                                Senior Vice President Operations, SE Health
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-sandra-k" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Indy Obhi -->
                        <div class="advisors-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-indy-o.jpg" alt="Indy Obhi">
                            </div>
                            <div class="team-item-text">
                                <h4>Supply Chain and Logistics</h4>
                                <h3>Indy Obhi</h3>
                                Global Head of Operations - Rolls Royce, Ceva
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-indy-o" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Dr. Jonathan Reichental -->
                        <div class="advisors-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-jonathan-r.jpg" alt="Dr. Jonathan Reichental">
                            </div>
                            <div class="team-item-text">
                                <h4>Smart Cities</h4>
                                <h3>Dr. Jonathan Reichental</h3>
                                Former CIO, City of Palo Alto
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-jonathan-r" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Dave Mowat -->
                        <div class="advisors-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-dave-m.jpg" alt="Dave Mowat">
                            </div>
                            <div class="team-item-text">
                                <h4>Financial Services</h4>
                                <h3>Dave Mowat</h3>
                                Former President and CEO, ATB Financial, Board Member, Telus
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-dave-m" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Tony Gaffney -->
                        <div class="advisors-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-tony-g.jpg" alt="Tony Gaffney">
                            </div>
                            <div class="team-item-text">
                                <h4>Financial Services</h4>
                                <h3>Tony Gaffney</h3>
                                Managing Partner, Board and CEO Services at Odgers Berndtson Canada, former CEO AON Hewitt, Board member PC Financial Bank
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-tony-g" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Susan Wolburgh Jenah -->
                        <div class="advisors-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-susan-w.jpg" alt="Susan Wolburgh Jenah">
                            </div>
                            <div class="team-item-text">
                                <h4>Financial Services</h4>
                                <h3>Susan Wolburgh Jenah</h3>
                                Board of Directors of Laurentian Bank of Canada, Aecon Group Inc. and Aequitas Innovations and NEO Exchange. Governor of the U.S. Financial Industry Regulatory Authority (FINRA)
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-susan-w" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Lynn Nagle -->
                        <div class="advisors-item">
                            <div class="team-item-img">
                                <img src="/img/common/team-lynn-n.jpg" alt="Lynn Nagle">
                            </div>
                            <div class="team-item-text">
                                <h4>Healthcare</h4>
                                <h3>Lynn Nagle</h3>
                                Director, Digital Health and Virtual Learning, University of New Brunswick, Fredericton, NB Adjunct Professor, Lawrence S. Bloomberg Faculty of Nursing, University of Toronto, Toronto, Ontario Adjunct Professor, Western University, London, Ontario
                                <div class="team-item-link">
                                    <i class="fas fa-user-circle"></i> <a data-fancybox data-touch="false" data-src="#profile-lynn-n" href="javascript:;">view profile</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact" class="common-pad">
            <div id="contact-wrapper" class="wrapper">
                <div id="contact-title" class="title-top">
                    <h2>Contact</h2>
                </div>
                <div id="contact-content">
                    Looking to find out more information or how Convergence - or Blockchain Learning Group - can help transform your strategies into action, please contact us at<br>
                    <a href="tel:+16472399319" class="contact-link">+1 (647) 239-9319</a><br><a href="mailto:contactus@convergence.tech" class="contact-link">contactus@convergence.tech</a>
                    <div id="contact-social">
                        <a href="https://twitter.com/__convergence__" target="_blank"><i class="fab fa-twitter"></i></a><a href="https://www.linkedin.com/company/convergencetech/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div id="logos">
            <div id="partner-logos" class="logos-block">
                <div class="logos-title">
                    Partners
                </div>
                <div id="partners-content" class="logos-list">
                    <a href="https://www.tech.gov.sg/" target="_blank"><img src="/img/logos/govtech.png" alt="GovTech" class="govtech"></a><a href="https://sovrin.org/" target="_blank"><img src="/img/logos/sovrin.png" alt="Sovrin" class="sovrin"></a><a href="https://www.undp.org/content/undp/en/home.html" target="_blank"><img src="/img/logos/undp.png" alt="United Nations Development Programme" class="undp"></a><a href="https://textileexchange.org/" target="_blank"><img src="/img/logos/textileexchange.png" alt="Textile Exchange" class="textileexchange"></a>
                </div>
            </div>
            <div id="clients-logos" class="logos-block">
                <div class="logos-title">
                    Clients
                </div>
                <div id="clients-content" class="logos-list">
                    <a href="https://www.tmx.com/" target="_blank"><img src="/img/logos/tmx.png" alt="Sovrin" class="tmx"></a><a href="https://www.undp.org/content/undp/en/home.html" target="_blank"><img src="/img/logos/undp.png" alt="United Nations Development Programme" class="undp"></a><a href="https://www.agl.com.au/" target="_blank"><img src="/img/logos/agl.png" alt="AGL" class="agl"></a><a href="https://www.linamar.com/" target="_blank"><img src="/img/logos/linamar.png" alt="Linamar" class="linamar"></a><a href="https://www.ontario.ca/page/government" target="_blank"><img src="/img/logos/ontario.png" alt="Government of Ontario" class="ontario"></a><a href="https://www.toronto.ca/" target="_blank"><img src="/img/logos/toronto.png" alt="City of Toronto" class="toronto"></a>
                </div>
            </div>
        </div>
        <footer id="footer" class="common-pad">
            <div id="footer-wrapper" class="wrapper">
                &copy; <?php echo date("Y"); ?> Convergence.Tech Inc.<br>
                Site By <a href="http://takeoverstudio.com" target="_blank" title="Website by Takeover Studio">Takeover</a>
            </div>
        </footer>
        
        <!-- Chami Akmeemana -->
        <div id="profile-chami-a" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Chami Akmeemana</h3>
                Chami Akmeemana is the CEO of Blockchain Learning Group and Convergence. He is a Blockchain and AI Specialist. He pursued a Ph.D. in Bioceramic Engineering at Queen Mary, University of London, until deciding to forgo an academic career in favor of Law Enforcement. In 2002, he joined London’s Metropolitan Police.<br>
                <br>
                Chami has had 4 successful exits over the last decade and is passionate about the intersection of technology, business and social good. His experience includes serving as Director of Regulatory and Government Affairs at ConsenSys Inc; Fintech Advisor to the Ontario Securities Commission; Managing Director, Fintech and Blockchain at the Global Risk Institute; and Regulatory Advisor to the Republic of Liberland.<br>
                <br>
                Chami is also the Chairman of the Blockchain Association Australia and an Advisory Board member of doc.ai.
            </div>
        </div>
        <!-- Jim Whitestone -->
        <div id="profile-jim-w" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Jim Whitestone</h3>
                Jim Whitestone is the former Assistant Deputy Minister of the Climate Change and Environmental Policy Division at the Ontario Ministry of the Environment and Climate Change. He led teams that were responsible for the development and implementation of a range of climate change related policies and programs including Ontario’s cap and trade program with California and Quebec and GreenOn to finance the deployment of low carbon technologies. His other policy and program responsibilities included Great Lakes water quality including the Canada-Ontario Lake Erie Action Plan towards U.S.-Canada binational commitment to reduce nutrient loadings, promotion of zero-waste and circular economy through extended producer responsibility, source protection for drinking water, toxics reduction, renewable fuels for transportation and buildings, indigenous relations and inter-governmental affairs. He also led Ontario’s participation with the Canadian delegation at UN COP 13 Climate Change Conference in Bali and worked on developing carbon offsets to help finance reforestation in the Sierra Gorda Biosphere Reserve in Mexico. Mr. Whitestone completed his Master’s Degree at Michigan State University and a Bachelor’s Degree at the University of Guelph in Agricultural and Resource Economics. He has a Certificate of Business from the University of Toronto and a Sustainable Investment Professional Certificate from Concordia University.
            </div>
        </div>
        <!-- Leigh Parker -->
        <div id="profile-leigh-p" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Leigh Parker</h3>
                Leigh Parker is a Brand and Marketing Strategist who partners with CEOs, executives, and all partners in the value chain to grow personal and professional brands, human-to-human. After spending over a decade working in PR and marketing, Leigh knows what truly drives today's digital economy. Leigh has landed coverage in print and broadcast outlets globally and is renowned for her crisp, engaging and insightful content. Leigh holds multiple qualifications in communications and journalism earned through both Australians and U.K. educational institutes, including Cambridge. Joining Convergence Tech in Q3 2019 as its Head of Marketing & Growth, Leigh brings a unique combination of sales and marketing savvy, first-hand familiarity with sourcing, developing and bringing products to market, and a wealth of experience in building startups into global success stories. She also possesses extensive experience in the management of vendor relationships, covering a broad spectrum from e-commerce platforms to suppliers, logistics providers, and distributors. Leigh can establish new sales channels and build business systems and infrastructures. She also holds an impressive and proven record of driving growth and paving the way for the creation of future global, sustainable, and ethical distribution channels. Passionate about her role, Leigh actively leads the effort to get the word out about how Convergence Tech’s software can help solve the many challenges faced. She strives to ensure that both the company and its personalized solutions continue to evolve at the necessary pace to meet the customers’ ever-evolving needs. Leigh’s philosophy is simple, "Marketing is about bridging the gaps between consumers requirements, and what brands produce; it's not just about product innovation, but also about innovating business models, processes, culture, and management." 
            </div>
        </div>
        <!-- Guy Pearce -->
        <div id="profile-guy-p" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Guy Pearce</h3>
                Guy has served on governance boards in banking, financial services and a not for profit, and as CEO of a financial services organization. He has played an active role in 10 enterprise digital transformation programs, experiences which led him to create a Digital Transformation course for the University of Toronto SCS. He is a regular speaker at McMaster University on topics such as big data, blockchain, digital transformation and IT governance, and has rich experience in the regulatory requirements for data governance, through regulations such as BCBS239 and GDPR. His experience in enterprise technology and in leveraging data for business benefit extends to the conceptualization, design, development and deployment of enterprise BI, CRM and credit systems impacting 5,000 users at 1,300 branches, big data analytics enabling $95 million in incremental value in six months by big data fusion, and BI value enablement creating $50 million in incremental value in four months, to name a few. He readily shares his experiences by conferences and by publications in journals such as the ICD’s Director Journal, the NACD’s Directorship, and ISACA Journal, and is the recipient of the 2019 ISACA Michael Cangemi best author award for contributions to the field of IT governance. Guy holds a BSc (Comp Sc) from the University of the Witwatersrand (SA), a BCom (Econ and Quants) from the University of South Africa, a MBA from Heriot-Watt University (UK), and is Certified in the Governance of Enterprise IT (CGEIT). 
            </div>
        </div>
        <!-- Dave Tiffin -->
        <div id="profile-dave-t" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Dave Tiffin</h3>
                An ‘end to end’ implementation leader for the design and delivery of large-scale transformation initiatives. Dave led the Ontario Government’s implementation of its Cap and Trade program for Greenhouse Gas Emissions, introducing Ontario into the North American GHG Emissions Trading market successfully in 2017 raising $472 million at its first allowance auction. Previously, Dave led a seamless migration and oversight of Ontario’s $60 million Driver Examination Services to the private sector. Dave holds a Bachelor’s Degree in Economics from the University of Western Ontario and a Master’s Degree in Business Administration from York University. Dave has a unique depth and breadth of experience in leading and managing all facets of large program development and project management stemming from over 30 years of experience at four Government of Ontario ministries including; Environment and Climate Change,Transportation, Economic Development and Trade, and Agriculture and Food. 
            </div>
        </div>
        <!-- Maryam Nizam -->
        <div id="profile-maryam-n" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Maryam Nizam</h3>
                Maryam is an operations and growth leader with a proven track record and extensive experience in growth stage and startup organizations across diverse industries. In her most recent role as Senior Vice President of Operations at Citco Fund Services, the world’s leading Alternative Investment Fund Administrator, Maryam was responsible for managing customer success and acquisition while also driving process transformation and product innovation to scale and optimize operational capacity. Being a lover of all things food and an avid follower of emerging technologies, Maryam co-founded The Revolving Kitchen, a digital market place that automates the commercial kitchen rental process and connects aspiring food entrepreneurs with established players in the restaurant industry. Maryam has a Bachelor of Arts in Economics & International Relations from the University of Toronto and a Master in Business Administration from York University & Northwestern University. 
            </div>
        </div>
        <!-- Erik Zvaigzne -->
        <div id="profile-erik-z" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Erik Zvaigzne</h3>
                Erik has 15 years of experience in corporate IT and systems development, having worked extensively in the government sector as a technical lead and project manager on the ideation, design, delivery, and operations of large-scale enterprise technology solutions. His diverse experience includes building out systems involving sensor networks to aggregate data for flood forecasting, public-facing web based government services portals, and a blockchain-based traceability solutions leveraging mobile devices and RFID technologies for clients in Canada and abroad. 
            </div>
        </div>
        <!-- Adam Lemmon -->
        <div id="profile-adam-l" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Adam Lemmon</h3>
                Adam currently leads technology and operations at both Convergence and Blockchain Learning Group. He is a driven engineer and educator, with a background in Mechatronic Systems and Software Engineering. He has been active in the Blockchain ecosystem for several years and has been involved in a variety of initiatives spanning both software education and development globally.<br>
                <br>
                His development experience includes projects varying from Decentralized Exchanges to Supply Chain to Land Registries with companies such as Oraclize and Convergence in collaboration with several international development organizations such as the United Nations Development Programme(UNDP) and many local governments.
            </div>
        </div>
        <!-- Murtaza Tawawala -->
        <div id="profile-murtaza-t" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Murtaza Tawawala</h3>
                Murtaza brings over 20 years of experience in training, marketing, project management and product development for both global firms and Canadian companies. He is an accomplished training and marketing professional with extensive experience in the technology, insurance, financial, transportation and retail industries.
            </div>
        </div>
        <!-- Steve Orsini -->
        <div id="profile-steve-o" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Steve Orsini</h3>
                Steve joined Canopy Growth in March 2019 as the Senior Vice-President and Chief of Staff, International. In this role, he is responsible for advancing the company’s international operations and government relations in Africa, Asia-Pacific, Europe and Latin America, including Mexico. In April 2019, Steve was appointed Distinguished Fellow, Munk School of Global Affairs and Public Policy at the University of Toronto. In May, he was appointed to the Advisory Board of the Blockchain Learning Group. In June, Steve joined the C.D. Howe Institute as a Senior Fellow to continue his advisory role in advancing public policy to promote sustainable economic growth. Steve has more than 30 years of experience in the public service, where he held numerous leadership positions. As Secretary of Cabinet, Head of the Ontario Public Service and Clerk of the Executive Council, Steve reported to the Ontario Premier and was responsible for 65,000 public- service employees. Steve also served as Ontario’s Deputy Minister (DM) of Finance and Secretary of the Treasury Board, and DM of the Ministry of Revenue and Associate DM for Taxation, Pensions and Agencies (e.g., Liquor Control Board of Ontario and Ontario Lottery and Gaming Corporation). He has also held several positions at the Ontario Hospital Association, including Vice-President of Policy and Public Affairs.<br>
                <br>
                Steve has a BA in Urban and Regional Planning and a Master’s in Environmental Studies (economic development). He completed the Canadian Securities Course, Parts I and II of the CICA Tax Course and the Harvard Health Care Leadership Program.
            </div>
        </div>
        <!-- Dave Mowat -->
        <div id="profile-dave-m" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Dave Mowat</h3>
                Dave Mowat was the President and CEO of ATB Financial for 11 years, which, through more than 5,000 team members provides a full range of banking services to more than 725,000 customers. ATB has grown to assets of more than $50 billion and is the largest, provincially based financial institution in Alberta.<br>
                <br>
                Under his leadership, ATB transformed into a technology leader, committed to make banking work for people. It also became a bank obsessed with its customers and the experience they received. Community involvement and support for numerous community causes were a hallmark of ATB. As a leader, Mowat brought a strong commitment that growing team member engagement and customer advocacy were the most sustainable and successful ways to a strong bottom line.<br>
                <br>
                Mowat was named Canada’s #1 CEO in 2016 by Glassdoor and was honoured as Business Person of the Year in 2014 by Alberta Venture. In 2017, Mowat was conferred with an Honorary Doctor of Laws degree from the University of Alberta.<br>
                <br>
                In 2016, Mowat headed Alberta’s Royalty Review panel that, after months of study and consultation with stakeholders and the public, the province adopted the panel's recommendation of an innovative new approach to Alberta’s oil and natural gas royalty structure.<br>
                <br>
                Mowat is involved with numerous boards, including Telus, STARS, Alberta Blue Cross, the Citadel Theatre in Edmonton, and the National Music Centre in Calgary. He was also involved with Dogs With Wings, and in 2016 was the puppy raiser for Vaughn, a black lab service puppy who was part of the organization’s program to train service dogs to make life better for blind and autistic children.<br>
                <br>
                Mowat and wife Sandy have raised three children and now enjoy travelling, golf and riding road bikes together. 
            </div>
        </div>
        <!-- Tony Gaffney -->
        <div id="profile-tony-g" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Tony Gaffney</h3>
                Tony has a proven record of creating value, in diverse industries and geographies by; setting direction, igniting growth, leading change, driving performance, servicing clients and empowering employees.<br>
                <br>
                Tony is particularly adept at capitalizing on digital and technology disruptions, both as a market disrupter and industry incumbent. He was most recently CEO of Aon Hewitt, Canada. Before joining Aon Hewitt, Tony was a Managing Partner at Accenture, and has served as the President and CEO of Bell Nexxia and as the CEO of BCE Emergis. He has also held international leadership positions with MCI Telecommunications, SHL Systemhouse Inc., and Andersen Consulting.<br>
                <br>
                Tony holds a Bachelor of Engineering (B.A.I.) degree and M.A. from Trinity College Dublin, and is a graduate of the Rotman Corporate Directors program (ICD.D).
            </div>
        </div>
        <!-- Susan Wolburgh Jenah -->
        <div id="profile-susan-w" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Susan Wolburgh Jenah</h3>
                Susan Wolburgh Jenah is a leader in the securities and financial services industry. Throughout her 30 year career as a senior regulator, chief executive officer and lawyer, she influenced the direction of capital markets regulation and standards of investor protection in Canada and internationally. Susan has also served on a wide variety of corporate, crown corporation and not-for-profit boards and government-appointed expert advisory committees. Susan is currently a member of the Board of Directors of Laurentian Bank of Canada, Aecon Group Inc. and Aequitas Innovations and NEO Exchange. She is a Governor of the U.S. Financial Industry Regulatory Authority (FINRA) and serves as Chair of FINRA’s Regulatory Operations Oversight Committee. She is a member of the Independent Review Committee of Vanguard Investments Canada.<br>
                <br>
                Susan was the founding President and CEO of the Investment Industry Regulatory Organization of Canada (IIROC) which was formed from the merger of two predecessor regulatory organizations. Prior to serving as CEO of IIROC, Susan held progressively senior roles at the Ontario Securities Commission (OSC), including Vice Chair, Acting Chair, General Counsel and Director of International Affairs, representing the OSC on various international standard-setting committees. Susan is actively engaged in her community serving as Vice-Chair of the Humber River Hospital, as a member of the C.D.Howe National Advisory Council and as a Mentor for the Catalyst Women on Board Program. She is a frequent speaker at corporate governance and industry conferences in Canada and abroad.<br>
                <br>
                Susan received her ICD.D designation in 2004 and is a recipient of the 2011 Osgoode Hall Law School Gold Key Award for Achievement.
            </div>
        </div>
        <!-- Christian Buhagiar -->
        <div id="profile-christian-b" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Christian Buhagiar</h3>
                Over the course of his 25 year career, Christian has focused on growing organizations and their reputations, launching products and initiatives, and building relationships.<br>
                <br>
                Currently, Christian is the President and Chief Executive Officer of Canada’s Supply Chain Management Association (SCMA), Canada’s largest professional association for the supply chain sector. He is also a member of the steering committee of scale ai, Canada’s investment and innovation supercluster focused on accelerating the application of artificial intelligence for supply chains.<br>
                <br>
                He previously served as Vice President of Education at Canada’s Institute of Corporate Directors (ICD), where he also developed the Canadian Foundation for Governance Research and served as the Foundation’s inaugural Executive Director. He has also served as the Director of Research Planning, Communications and Government Relations at York University, and as the Director of Production for the UK-based firm Marcus Evans. Christian has also worked in the public sector, having served the Ontario Government as Chief of Staff to the Parliamentary Assistant for Health and Long-Term Care and to the Parliamentary Assistant for Native Affairs. Prior to these positions, he served the Government of Canada as special political assistant to the Minister of State for Environment and to the Minister of State for Employment and Immigration.<br>
                <br>
                Christian is also an experienced board member, having served on 10 boards across the NFP and government sectors, ranging in size from under $1 million to over $1 billion. Most recently he served on the Board of Directors of Scarborough and Rouge Hospital. He previously served as Vice Chairman of The Scarborough Hospital, Chairman of Housing Services Inc., and as a member of the Board of Directors of Toronto Community Housing Corporation (TCHC), North America’s second largest social housing corporation.<br>
                <br>
                Christian has studied in Canada, the U.S., Israel, and Belgium, is a graduate of the ICD-Rotman Directors Education Program, and holds a Masters Professional Director certification from the American College of Corporate Directors.
            </div>
        </div>
        <!-- Sandra Ketchen -->
        <div id="profile-sandra-k" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Sandra Ketchen</h3>
                Sandra Ketchen is the Senior Vice President of Operations for SE Health. In this role, she is responsible for execution across SE Health’s national operating network which encompasses more than 8000 nurses, personal support workers and other healthcare professionals delivering care within client homes, assisted living homes, or virtually through client contact centers. She is accountable for client satisfaction and quality of care, while driving continuous improvement and productivity gains to achieve financial performance.<br>
                <br>
                Prior to joining SE Health, Ms. Ketchen spent more than 20 years in global operations and supply chain roles, most recently as Senior Vice President of Products for ATS Automation Tooling Systems. Prior to this, she spent 16 years with Celestica, Inc., a global electronics contract manufacturer, holding a variety of senior management roles culminating as Vice President and General Manager for Celestica’s international Healthcare business.<br>
                <br>
                Currently, Ms. Ketchen also participates as a Director on the Boards for VentureLAB and NGen (Next Generation Manufacturing Canada).<br>
                <br>
                Ms. Ketchen has a Master in Business Administration from York University, a Master of Engineering degree from McMaster University, and a Bachelor of Applied Science in Chemical Engineering from the University of Waterloo.
            </div>
        </div>
        <!-- Indy Obhi -->
        <div id="profile-indy-o" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Indy Obhi</h3>
                Indy Obhi is an accomplished operational leader within the Supply Chain and Logistics Sector. Having worked within a number of different sectors; retail, industrial, FMCG, Oil and Gas and Aerospace, he has recognised the cultural variances, opportunities and limitations on a global scale. Having started his career at Fedex in 1995, Indy has maintained his ambition to work within a logistics industry. After receiving his BSC (1st Class Honors) at Lincoln university and the his MBA (Finance) at Leicester University in 2013, Indy has focused his vision in enhancing operational, financial and quality controls to deliver a better experience to the end customer. He now works for CEVA Logistics, one of the largest logistics and transportation service providers in the world. When he’s not travelling or behind his laptop, you will find Indy pursuing his second passion; education. Indy is an NED for Sitelearn UK as well as a part owner with his wife, of a local children’s nursery in the UK; Montessori Explorers Nursery. After all that, is you still want to find Indy, he’s more than likely spending time with his two young boys or hacking divots on a golf course.
            </div>
        </div>
        <!-- Dr. Jonathan Reichental -->
        <div id="profile-jonathan-r" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Dr. Jonathan Reichental</h3>
                Currently the Chief Information Officer (CIO) for the City of Palo Alto, is a multiple award-winning technology leader whose 25-year career has spanned both the private and public sectors. In 2017, he was named one of the top 100 CIOs in the world and in 2016 he was named one of the top 20 most influential CIO's in the United States. Dr. Reichental is also recognized as a global thought leader on a number of emerging trends including urban innovation and blockchain technology. Dr. Reichental works with his teams to apply technology innovation in organizations to create new value and to enable work to be more meaningful and fun.
            </div>
        </div>
        <!-- Lynn Nagle -->
        <div id="profile-lynn-n" class="team-profile">
            <div class="team-profile-wrapper">
                <h3>Lynn Nagle</h3>
                With more than 35 years of healthcare experience, she is nationally and internationally known for her work in health and nursing informatics. She brings expertise from many different clinical and academic settings, has participated in and led the development of numerous digital health initiatives, as well as research focused on the adoption of digital health solutions in practice environments. Dr. Nagle teaches in undergraduate and graduate programs focused in nursing, health administration and informatics. Prior to establishing her own health informatics consulting practice, she was the CIO and Senior Vice-President for Technology and Knowledge Management at Mount Sinai Hospital in Toronto. She has numerous professional publications and presentations to her credit and in recognition of her work was named one of the top 10 Women Leaders in Digital Health in Canada in 2017.    
            </div>
        </div>
        
        <!-- Smooth Scroll -->
        <script>
            var scroll = new SmoothScroll('a[href*="#"]', {
                header: '#header-size',
                speed: 500,
                speedAsDuration: true,
                easing: 'easeInOutCubic',
                updateURL: false
            });
        </script>
        
    </body>
</html>
