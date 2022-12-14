<?php echo $path; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>F-plus Portfolio</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo $path; ?>img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <style>
    /* ----------------------------------------------
:: Template Name: F-plus Portfolio Template
:: Template Author: Colorlib
:: Template Author URI: https://colorlib.com
:: Version: v1.0.0
:: Last Updated: 12-04-2017
---------------------------------------------- */

/* -------- [Master Stylesheet] --------
:: 1.0 Base CSS
:: 2.0 Top Header Area CSS
:: 3.0 Menu Area CSS
:: 4.0 Wellcome Area CSS 
:: 5.0 Top Feature Area CSS 
:: 6.0 Blog Area CSS 
:: 7.0 Instagram Area CSS 
:: 8.0 Footer Social Area CSS 
:: 9.0 Goole Map Area CSS
:: 10.0 Sidebar Area CSS
:: 11.0 Breadcumb Area CSS
:: 12.0 Paginatio Area CSS
:: 13.0 Contact Area CSS
:: 14.0 Single Blog CSS
----------------------------------- */

/* ***** Fonts ***** */

@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700');

/* ***** Import CSS ***** */

@import '<?php echo $path; ?>css/bootstrap/bootstrap.min.css';
@import '<?php echo $path; ?>css/others/animate.css';
@import '<?php echo $path; ?>css/others/magnific-popup.css';
@import '<?php echo $path; ?>css/others/owl.carousel.min.css';
@import '<?php echo $path; ?>css/others/font-awesome.min.css';
@import '<?php echo $path; ?>css/others/pe-icon-7-stroke.css';

/* --------------------
:: 1.0 Base CSS
-------------------- */

* {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Montserrat', sans-serif;
    position: relative;
    z-index: auto;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    color: #000000;
    line-height: 1.3;
}

p {
    color: #606060;
    font-size: 18px;
    line-height: 2;
    font-weight: 400;
}

.section-padding-120 {
    padding-top: 120px;
    padding-bottom: 120px;
}

.section-padding-120-0 {
    padding-top: 120px;
    padding-bottom: 0;
}

.section-padding-0-120 {
    padding-top: 0;
    padding-bottom: 120px;
}

.section-padding-100 {
    padding-top: 100px;
    padding-bottom: 100px;
}

.section-padding-100-0 {
    padding-top: 100px;
    padding-bottom: 0;
}

.section-padding-0-100 {
    padding-top: 0;
    padding-bottom: 100px;
}


img {
    max-width: 100%;
    height: auto;
}

.mt-15 {
    margin-top: 15px;
}

.mt-30 {
    margin-top: 30px;
}

.mt-40 {
    margin-top: 40px;
}

.mt-50 {
    margin-top: 50px;
}

.mt-100 {
    margin-top: 100px;
}

.mt-150 {
    margin-top: 150px;
}

.mr-15 {
    margin-right: 15px;
}

.mr-30 {
    margin-right: 30px;
}

.mr-50 {
    margin-right: 50px;
}

.mr-100 {
    margin-right: 100px;
}

.mb-15 {
    margin-bottom: 15px;
}

.mb-30 {
    margin-bottom: 30px;
}

.mb-50 {
    margin-bottom: 50px;
}

.mb-100 {
    margin-bottom: 100px;
}

.ml-15 {
    margin-left: 15px;
}

.ml-30 {
    margin-left: 30px;
}

.ml-50 {
    margin-left: 50px;
}

.ml-100 {
    margin-left: 100px;
}

ul,
ol {
    margin: 0;
    padding: 0;
}


#scrollUp {
    bottom: 10%;
    font-size: 15px;
    right: 0;
    width: 40px;
    background-color: #ff6c00;
    color: #fff;
    text-align: center;
    height: 40px;
    line-height: 40px;
    border-radius: 2px 0 0 2px;
}

a,
a:hover,
a:focus,
a:active {
    text-decoration: none;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    font-weight: 600;
    outline: none;
}

li {
    list-style: none;
}

.fplus-table {
    display: table;
    height: 100%;
    left: 0;
    position: relative;
    top: 0;
    width: 100%;
    z-index: 2;
}

.fplus-table-cell {
    display: table-cell;
    vertical-align: middle;
}

.section-heading {
    position: relative;
    z-index: 1;
    margin-bottom: 55px;
}

.section-heading h4 {
    text-transform: uppercase;
    letter-spacing: 4px;
    margin-bottom: 25px;
    line-height: 1;
}

.section-heading-line {
    width: 50px;
    height: 2px;
    background-color: #000;
    margin: 0 auto;
}

#preloader {
    overflow: hidden;
    background-color: rgba(249, 249, 249, 0.97);
    height: 100%;
    left: 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 999999;
}

#preloader img {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -16.5px;
    margin-left: -14px;
    z-index: 8;
}

.bg-gray {
    background-color: #f9f9f9;
}

.fplus-load {
    -webkit-animation: 2000ms linear 0s normal none infinite running fplus-load;
    animation: 2000ms linear 0s normal none infinite running fplus-load;
    background: transparent none repeat scroll 0 0;
    border-color: #dddddd #dddddd #ff6c00;
    border-radius: 50%;
    border-style: solid;
    border-width: 4px;
    height: 80px;
    position: relative;
    width: 80px;
    z-index: 9;
    top: 50%;
    left: 50%;
    margin-top: -40px;
    margin-left: -40px;
}

@-webkit-keyframes fplus-load {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@keyframes fplus-load {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

/* Header & Menu Area CSS */

.header_area {
    position: fixed;
    width: 100%;
    z-index: 9999;
    height: 100px;
    top: 0;
    left: 0;
    overflow-x: hidden;
}

.logo_area > a {
    width: 100px;
    height: 100px;
    background-color: #ff6c00;
    position: relative;
    z-index: 2;
}

.logo_area > a:before {
    width: 9000px;
    height: 100px;
    background-color: #ff6c00;
    position: absolute;
    z-index: 1;
    content: '';
    top: 0;
    right: 100px;
}

.menu-open-close {
    width: 100px;
    background-color: #ebebeb;
    height: 100px;
}

/*
.fplus-menu-area {
    position: fixed;
    width: 100%;
    background-color: transparent;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 999;
}
*/

.fplus-main-menu {
    width: 50%;
    background-color: rgba(255, 255, 255, 0.95);
    position: fixed;
    left: -55%;
    top: 0;
    padding-left: 15%;
    z-index: 999;
    -webkit-transition-duration: 1000ms;
    transition-duration: 1000ms;
}

.header-social-info {
    width: 50%;
    background-color: rgba(255, 255, 255, 0.95);
    right: -55%;
    position: fixed;
    height: 100%;
    top: 0;
    z-index: 999;
    padding-right: 15%;
    -webkit-transition-duration: 1000ms;
    transition-duration: 1000ms;
}

.fplus-menu-area.menu-open .fplus-main-menu {
    left: 0;
}

.fplus-menu-area.menu-open .header-social-info {
    right: 0;
}

.fplus-menu-area .navbar {
    padding: 0;
}

.fplus-menu-area ul.navbar-nav {
    -webkit-box-orient: vertical!important;
    -webkit-box-direction: normal!important;
    -ms-flex-direction: column!important;
    flex-direction: column!important;
}

.fplus-menu-area .nav-item .nav-link {
    color: #959595;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-weight: 500;
    padding: 10px 0;
}

.fplus-menu-area .nav-item .nav-link:hover,
.fplus-menu-area .nav-item.active .nav-link {
    color: #000;
    font-weight: 500;
}

.fplus-menu-area .nav-item .dropdown-toggle {
    color: #ff6c00;
}

.fplus-menu-area .dropdown-item {
    padding: 5px 15px;
    font-weight: 500;
    color: #959595;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.header-social-info .h-social-icon > a {
    color: #959595;
    margin-bottom: 30px;
    display: block;
}

.header-social-info .h-social-icon > a:hover {
    color: #ff6c00;
}

#nav-icon {
    width: 40px;
    height: 30px;
    position: relative;
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    -webkit-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
    cursor: pointer;
}

#nav-icon span {
    display: block;
    position: absolute;
    height: 5px;
    width: 100%;
    background-color: #000;
    border-radius: 9px;
    opacity: 1;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    left: 0;
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    -webkit-transition: .25s ease-in-out;
    transition: .25s ease-in-out;
}

#nav-icon span:nth-child(1) {
    top: 0px;
}

#nav-icon span:nth-child(2) {
    top: 12.5px;
}

#nav-icon span:nth-child(3) {
    top: 25px;
}

#nav-icon.open span:nth-child(1) {
    top: 12px;
    -webkit-transform: rotate(135deg);
    transform: rotate(135deg);
}

#nav-icon.open span:nth-child(2) {
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    left: -100px;
}

#nav-icon.open span:nth-child(3) {
    top: 12px;
    -webkit-transform: rotate(-135deg);
    transform: rotate(-135deg);
}


/* Hero Area CSS */

.fplus-hero-area {
    width: 100%;
    height: 770px;
    background-size: cover;
    background-position: center center;
    position: relative;
    z-index: 1;
}

.hero-content-area {
    width: calc(50% - 15px);
    background-color: #fff;
    padding: 80px 0 50px 0;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 9;
}

.hero-content-area .hero-text h2 {
    font-size: 48px;
    margin-bottom: 90px;
    font-weight: 700;
}

.hero-content-area .hero-text > a,
.load-more-btn {
    font-size: 12px;
    text-transform: uppercase;
    color: #ff6c00;
    letter-spacing: 4px;
}

.hero-content-area .hero-text > a:hover,
.load-more-btn:hover {
    color: #000000;
}

.hero-content-area .hero-text {
    width: 540px;
}

/* About Us Area */

.fplus-about-us-area .about-us-content {
    background-color: #fff;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.15);
    border-radius: 2px;
}

.fplus-about-us-area .about-us-thumb > img {
    border-radius: 2px 0 0 2px;
}

.fplus-about-us-area .about-us-text {
    padding: 15px 60px;
}

.fplus-about-us-area .about-us-text p {
    margin-bottom: 0;
}

.fplus-single-feature {
    padding: 30px 30px 25px;
    background-color: #fff;
    margin-top: 70px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.15);
}

.feature-title > img {
    max-width: 35px;
    margin-right: 20px;
}

.feature-title {
    margin-bottom: 25px;
}

.feature-title > h5 {
    margin-bottom: 0;
    color: #ff6c00;
}

.fplus-single-feature > p {
    margin-bottom: 0;
    font-size: 14px;
}

/* Projects Area CSS */

.fplus-projects-menu {
    padding: 35px 15px;
    background-color: #fff;
    box-shadow: 0px -1px 1px rgba(0, 0, 0, 0.1);
}

.fplus-projects-menu button.btn {
    font-size: 12px;
    font-weight: 600;
    background-color: transparent;
    color: #959595;
    text-transform: uppercase;
    border: none;
    padding: 0 20px;
    letter-spacing: 2px;
    cursor: pointer;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
}

.fplus-projects-menu button.btn:hover,
.fplus-projects-menu button.btn:focus,
.fplus-projects-menu button.btn.active {
    color: #000000;
    box-shadow: none;
}

.fplus-portfolio {
    margin-left: -15px;
    margin-right: -15px;
}

.fplus-portfolio .single_gallery_item {
    box-shadow: 0 2px 1px rgba(0, 0, 0, 0.1);
    position: relative;
    z-index: 1;
    overflow: hidden;
}

.fplus-portfolio .single_gallery_item img {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
}

.gallery-hover-overlay {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: rgba(255, 255, 255, 0.95);
    padding: 50px;
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
}

.gallery-hover-overlay .port-more-view > a {
    font-size: 26px;
    color: #ff6c00;
    width: 40px;
    height: 40px;
    display: block;
}

.gallery-hover-overlay .port-hover-text > a {
    font-size: 12px;
    color: #959595;
    text-transform: uppercase;
    margin-bottom: 15px;
    display: block;
    letter-spacing: 2px;
}

.gallery-hover-overlay .port-hover-text > h3 {
    color: #ff6c00;
    margin-bottom: 0;
}

.fplus-portfolio .single_gallery_item:hover .gallery-hover-overlay {
    opacity: 1;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

.fplus-portfolio .single_gallery_item:hover img {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}

/* Method Area CSS */

.fplus-method-text {
    margin-top: 80px;
}

.fplus-method-text h4 {
    margin-bottom: 40px;
}

.fplus-method-text p {
    margin-bottom: 0;
}

.fplus-method-video {
    width: 100%;
    height: 500px;
    background-color: #5b5454;
    position: relative;
    z-index: 1;
    border-radius: 3px;
    margin-top: 80px;
    background-size: cover;
    background-position: center center;
}

.fplus-method-video:after {
    background-color: rgba(255, 108, 0, 0.9);
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    position: absolute;
    content: '';
    border-radius: 3px;
    z-index: -1;
}

.video-play-btn {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 500px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.video-play-btn > a {
    color: #fff;
    font-size: 70px;
}

/* Clients Area CSS */

.fplus-clients-logo {
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -ms-grid-row-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.single-clients-logo {
    -ms-flex-preferred-size: 16.66666666666667%;
    flex-basis: 16.66666666666667%;
    height: 180px;
    width: 16.66666666666667%;
    border: 1px solid #ebebeb;
    background-color: #fff;
    margin-right: -1px;
    margin-top: -1px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding: 5px;
}

/* Blog Area CSS */

.fplus-single-blog-area {
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.15);
    position: relative;
    z-index: 1;
}

.fplus-single-blog-area > img {
    width: 100%;
}

.fplus-blog-content {
    padding: 30px;
}

.fplus-blog-content h5 {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 25px;
}

.post-author-img {
    width: 40px;
    height: 40px;
    margin-right: 15px;
}

.post-author-name-date h6 {
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 10px;
}

.post-author-name-date p {
    font-size: 12px;
    line-height: 1;
    margin-bottom: 0;
    font-weight: 300;
}

.post-author-name-date p > a {
    color: #000
}

/* Contact Area CSS */

.fplus-contact-area {
    position: relative;
    z-index: 1;
    min-height: 237.5px;
}

.contact_from {
    background-color: #fff;
    padding: 80px;
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.15);
    position: absolute;
    z-index: 99;
    top: 0;
}

#googleMap {
    width: 100%;
    height: 600px;
}

.contact_input_area .form-group .form-control {
    padding: 10px 0;
    line-height: 1;
    border: none;
    border-bottom: 1px solid #959595;
    border-radius: 0;
    font-size: 12px;
    color: #959595;
    font-weight: 300;
}

.contact_input_area .form-group textarea.form-control {
    height: 100px;
}

.contact_input_area .form-group .form-control:active,
.contact_input_area .form-group .form-control:focus {
    box-shadow: none;
    border-bottom: 1px solid #000000;
    color: #000000;
}

.contact_input_area button {
    width: 200px;
    height: 50px;
    background-color: #ff6c00;
    color: #fff;
    font-size: 12px !important;
    text-transform: uppercase;
    line-height: 50px;
    padding: 0 !important;
    letter-spacing: 2px;
    cursor: pointer;
    border-radius: 0 !important;
    margin-top: 50px;
}

/*Footer Area CSS */

.fplus-footer-area {
    padding: 60px 0;
    background-color: #252525;
    position: relative;
    z-index: 1;
}

.footer-nav-widget ul > li > a {
    color: rgba(255, 255, 255, 0.8);
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 10px 0;
    display: block;
}

.footer-nav-widget ul > li > a:hover {
    color: rgba(255, 255, 255, 1);
}

.subscribe-widget p {
    color: #fff;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 10px 0;
    margin-bottom: 0;
}

.subscribe-widget form {
    position: relative;
    z-index: 1;
}

.subscribe-widget input {
    border: none;
    background-color: transparent;
    padding: 10px 0;
    font-size: 12px;
    width: 100%;
    color: #fff;
    font-size: 12px;
    letter-spacing: 1px;
    border-bottom: 1px solid #fff;
}

.subscribe-widget form button {
    background-color: transparent;
    border: none;
    color: #fff;
    cursor: pointer;
    position: absolute;
    padding: 10px 0;
    right: 0;
    font-size: 12px;
    top: 0;
    z-index: 9;
}

.footer-social-widget {
    margin-top: 30px;
}

.footer-social-widget > a {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.8);
    margin-right: 30px;
}

.footer-social-widget > a:hover,
.footer-social-widget > a:focus {
    color: rgba(255, 255, 255, 1);
}

.footer-social-widget > a:last-child {
    margin-right: 0;
}

/* Single Portfolio Area CSS */

.fplus-single-portfolio-area {
    position: relative;
    z-index: 1;
}

.fplus-portfolio-share > a {
    display: inline-block;
    font-size: 12px;
    text-transform: uppercase;
    color: #000;
    padding: 30px;
    border: 1px solid #ebebeb;
    float: left;
    margin-right: -1px;
    letter-spacing: 1px;
}

.fplus-portfolio-share > a:hover {
    color: #fff;
    border: 1px solid #ff6c00;
    background-color: #ff6c00;
}

.fplus-portfolio-share > a:first-child {
    color: #000;
    background-color: #ebebeb;
    cursor: default;
}

.fplus-portfolio-share > a:hover:first-child {
    color: #000;
    border: 1px solid #ebebeb;
    background-color: #ebebeb;
}

.fplus-portfolio-content-area {
    width: calc(50% - 15px);
    position: absolute;
    background-color: #fff;
    right: 0;
    bottom: 100px;
    z-index: 99;
    box-shadow: -2px 2px 5px rgba(0, 0, 0, 0.15);
}

.single-portfolio-text {
    padding: 80px 0 80px 80px;
    width: 540px;
}

.single-portfolio-text p {
    font-size: 12px;
    text-transform: uppercase;
    color: #000;
    margin-bottom: 30px;
    line-height: 1;
    letter-spacing: 1px;
}

.single-portfolio-text h2 {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 130px;
    line-height: 1;
}

.project-meta-data > div {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    min-width: 33.3333333333333%;
    text-align: center;
}

.project-meta-data > div > p {
    border: 1px solid #ebebeb;
    padding: 20px 10px;
    margin-bottom: 0;
    margin-left: -1px;
    margin-top: -1px;
    color: #959595;
}

.project-meta-data > div > p:first-child {
    background-color: #ebebeb;
    color: #000;
}

.fplus-project-single-thumb {
    position: relative;
    z-index: 1;
}

.fplus-project-single-thumb img {
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.15);
}

/* Static Page Area CSS */

.fplus-static-welcome-area {
    background-position: center center;
    background-size: cover;
    width: 100%;
    height: 550px;
    position: relative;
    z-index: 1;
}

.static-page-area {
    position: relative;
    z-index: 99;
    padding-bottom: 175px;
}

.static-content {
    padding: 80px 100px;
    background-color: #fff;
    box-shadow: 2px 3px 4px rgba(0, 0, 0, 0.15);
    margin-top: -175px;
    z-index: 9;
}

.static-content h3 {
    font-size: 30px;
    line-height: 1.5;
    margin-bottom: 50px;
}

.static-content p:last-of-type {
    margin-bottom: 0;
}

.static-content blockquote {
    margin: 0;
    text-align: center;
    padding: 40px 0;
    margin: 80px 0;
    border-top: 2px solid #ebebeb;
    border-bottom: 2px solid #ebebeb;
}

.static-content blockquote h5 {
    margin: 30px 0;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.5;
}

.static-content blockquote p {
    line-height: 1;
    font-size: 18px;
    color: #959595 !important;
}
    </style>

    <!-- Responsive CSS -->
    <link href="<?php echo $path; ?>css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="fplus-load"></div>
        <img src="<?php echo $path; ?>img/core-img/h-logo.png" alt="logo">
    </div>

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="logo_area">
                        <a class="d-flex align-items-center justify-content-center" href="index.html"><img src="<?php echo $path; ?>img/core-img/h-logo.png" alt="logo"></a>
                    </div>
                    <div class="menu-open-close d-flex align-items-center justify-content-center">
                        <div id="nav-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ****** Header Area End ****** -->

    <!-- ****** Menu Area Start ****** -->
    <div class="fplus-menu-area">
        <!-- Menu -->
        <div class="fplus-main-menu h-100 d-flex align-items-center">
            <nav class="navbar navbar-expand-lg">
                <div class="" id="fplus-nav">
                    <ul class="navbar-nav" id="fplusNav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="fplusDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu" aria-labelledby="fplusDropdown">
                                <a class="dropdown-item" href="index.html">Home</a>
                                <a class="dropdown-item" href="single-portfolio.html">Single Portfolio</a>
                                <a class="dropdown-item" href="static-page.html">Static Page</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#clients">Our Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#news">Recent News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Header Social Icon -->
        <div class="header-social-info d-flex align-items-center justify-content-end">
            <div class="h-social-icon">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- ****** Menu Area End ****** -->

    <!-- ****** Welcome Area Start ****** -->
    <section class="fplus-hero-area" style="background-image: url(<?php echo $path; ?>img/bg-img/hero-1.jpg);" id="home">
        <div class="hero-content-area d-flex justify-content-end">
            <div class="hero-text">
                <h2>For More Agency</h2>
                <a href="#projects" class="view-portfolio-btn" id="scrollDown"><i class="fa fa-plus" aria-hidden="true"></i> View Portfolio</a>
            </div>
        </div>
    </section>
    <!-- ****** Welcome Area End ****** -->

    <!-- ****** About Us Area Start ****** -->
    <section class="fplus-about-us-area bg-gray section-padding-120" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>About Us</h4>
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="about-us-content wow fadeInLeftBig" data-wow-delay="0.5">
                <div class="row no-gutters align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="about-us-thumb wow fadeIn" data-wow-delay="1s">
                            <img src="<?php echo $path; ?>img/bg-img/about-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="about-us-text wow fadeIn" data-wow-delay="1.5s">
                            <h4>Who We Are</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus eget purus id felis dignissim convallis. Suspendisse et augue dui. Morbi gravida sed justo vel venenatis. Ut tempor pretium maximus. Donec libero diam, faucibus vitae lectus nec, accumsan gravida dui. Nam interdum mi eget lacus aliquet, sit amet ultricies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- Single Feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="fplus-single-feature wow fadeInUp" data-wow-delay="1s">
                        <div class="feature-title d-flex align-items-center">
                            <img src="<?php echo $path; ?>img/icons/wallet.svg" alt="">
                            <h5>Reasonable pricing</h5>
                        </div>
                        <p>Ed consectetur dapibus venenatis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae</p>
                    </div>
                </div>
                <!-- Single Feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="fplus-single-feature wow fadeInUp" data-wow-delay="1.5s">
                        <div class="feature-title d-flex align-items-center">
                            <img src="<?php echo $path; ?>img/icons/credit-card.svg" alt="">
                            <h5>eCommerce support</h5>
                        </div>
                        <p>Ed consectetur dapibus venenatis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae</p>
                    </div>
                </div>
                <!-- Single Feature -->
                <div class="col-12 col-lg-4">
                    <div class="fplus-single-feature wow fadeInUp" data-wow-delay="2s">
                        <div class="feature-title d-flex align-items-center">
                            <img src="<?php echo $path; ?>img/icons/switching-user.svg" alt="">
                            <h5>User-friendly admin</h5>
                        </div>
                        <p>Ed consectetur dapibus venenatis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** About Us Area End ****** -->

    <!-- ****** Gallery Area Start ****** -->
    <section class="fplus-projects-area bg-gray section-padding-0-120" id="projects">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>Projects</h4>
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fplus-projects-menu">
            <div class="text-center portfolio-menu">
                <button class="btn active" data-filter="*">All Fields</button>
                <button class="btn" data-filter=".branding">branding</button>
                <button class="btn" data-filter=".design">editorial design</button>
                <button class="btn" data-filter=".graphic">graphic design</button>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row no-gutters fplus-portfolio">
                <!-- Single gallery Item Start -->
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item branding wow fadeInUp" data-wow-delay="0.2s">
                    <img src="<?php echo $path; ?>img/portfolio-img/p-1.jpg" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="single-portfolio.html"><img src="<?php echo $path; ?>img/icons/plus.png" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="#">branding</a>
                            <h3>One Branding Identity</h3>
                        </div>
                    </div>
                </div>
                <!-- Single gallery Item Start -->
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item branding wow fadeInUp" data-wow-delay="0.4s">
                    <img src="<?php echo $path; ?>img/portfolio-img/p-2.jpg" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="single-portfolio.html"><img src="<?php echo $path; ?>img/icons/plus.png" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="#">branding</a>
                            <h3>One Branding Identity</h3>
                        </div>
                    </div>
                </div>
                <!-- Single gallery Item Start -->
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item design wow fadeInUp" data-wow-delay="0.6s">
                    <img src="<?php echo $path; ?>img/portfolio-img/p-3.jpg" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="single-portfolio.html"><img src="<?php echo $path; ?>img/icons/plus.png" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="#">design</a>
                            <h3>One Branding Identity</h3>
                        </div>
                    </div>
                </div>
                <!-- Single gallery Item Start -->
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item graphic wow fadeInUp" data-wow-delay="0.8s">
                    <img src="<?php echo $path; ?>img/portfolio-img/p-4.jpg" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="single-portfolio.html"><img src="<?php echo $path; ?>img/icons/plus.png" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="#">graphic</a>
                            <h3>One Branding Identity</h3>
                        </div>
                    </div>
                </div>
                <!-- Single gallery Item Start -->
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item design wow fadeInUp" data-wow-delay="1s">
                    <img src="<?php echo $path; ?>img/portfolio-img/p-5.jpg" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="single-portfolio.html"><img src="<?php echo $path; ?>img/icons/plus.png" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="#">design</a>
                            <h3>One Branding Identity</h3>
                        </div>
                    </div>
                </div>
                <!-- Single gallery Item Start -->
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item graphic wow fadeInUp" data-wow-delay="1.2s">
                    <img src="<?php echo $path; ?>img/portfolio-img/p-6.jpg" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="single-portfolio.html"><img src="<?php echo $path; ?>img/icons/plus.png" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="#">graphic</a>
                            <h3>One Branding Identity</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="#" class="load-more-btn text-center d-block mt-50"><i class="fa fa-plus" aria-hidden="true"></i> Load More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Gallery Area End ****** -->

    <!-- ****** Method Area Start ****** -->
    <div class="fplus-method-area bg-gray" id="method">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>Methods</h4>
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fplus-method-content bg-white text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="fplus-method-text">
                            <h4>How We Work</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus eget purus id felis dignissim convallis. Suspendisse et augue dui. Morbi gravida sed justo vel venenatis.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-10">
                        <div class="fplus-method-video wow fadeInUp" data-wow-delay="1s" style="background-image: url(<?php echo $path; ?>img/bg-img/video.jpg);">
                            <div class="video-play-btn">
                                <a href="https://youtu.be/ZydsX1qjoBI" class="video--play--btn"><i class="pe-7s-play" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Method Area End ****** -->

    <!-- ****** Clients Area Start ****** -->
    <section class="fplus-clients-area bg-gray section-padding-120" id="clients">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>Our clients</h4>
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="fplus-clients-logo d-flex">
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="<?php echo $path; ?>img/clients-img/1.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="<?php echo $path; ?>img/clients-img/2.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="<?php echo $path; ?>img/clients-img/3.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="<?php echo $path; ?>img/clients-img/4.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="<?php echo $path; ?>img/clients-img/5.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="<?php echo $path; ?>img/clients-img/2.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="<?php echo $path; ?>img/clients-img/4.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="<?php echo $path; ?>img/clients-img/5.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="<?php echo $path; ?>img/clients-img/2.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="<?php echo $path; ?>img/clients-img/1.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="<?php echo $path; ?>img/clients-img/4.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="<?php echo $path; ?>img/clients-img/3.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Clients Area End ****** -->

    <!-- ****** Blog Area Start ****** -->
    <section class="fplus-blog-area bg-gray section-padding-0-120" id="news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>Recent News</h4>
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="fplus-single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Blog Thumbnail -->
                        <img src="<?php echo $path; ?>img/blog-img/blog-1.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="fplus-blog-content">
                            <h5>How Did van Gogh???s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            <div class="post-meta-data d-flex align-items-center">
                                <div class="post-author-img">
                                    <img src="<?php echo $path; ?>img/blog-img/post-author.jpg" alt="">
                                </div>
                                <div class="post-author-name-date">
                                    <h6>Lora Palmer</h6>
                                    <p>on <a href="#">Sep 29, 2017</a> at <a href="#">9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="fplus-single-blog-area wow fadeInUp" data-wow-delay="1s">
                        <!-- Blog Thumbnail -->
                        <img src="<?php echo $path; ?>img/blog-img/blog-2.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="fplus-blog-content">
                            <h5>How Did van Gogh???s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            <div class="post-meta-data d-flex align-items-center">
                                <div class="post-author-img">
                                    <img src="<?php echo $path; ?>img/blog-img/post-author.jpg" alt="">
                                </div>
                                <div class="post-author-name-date">
                                    <h6>Lora Palmer</h6>
                                    <p>on <a href="#">Sep 29, 2017</a> at <a href="#">9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Post Area -->
                <div class="col-12 col-lg-4">
                    <div class="fplus-single-blog-area wow fadeInUp" data-wow-delay="1.5s">
                        <!-- Blog Thumbnail -->
                        <img src="<?php echo $path; ?>img/blog-img/blog-3.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="fplus-blog-content">
                            <h5>How Did van Gogh???s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            <div class="post-meta-data d-flex align-items-center">
                                <div class="post-author-img">
                                    <img src="<?php echo $path; ?>img/blog-img/post-author.jpg" alt="">
                                </div>
                                <div class="post-author-name-date">
                                    <h6>Lora Palmer</h6>
                                    <p>on <a href="#">Sep 29, 2017</a> at <a href="#">9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Blog Area End ****** -->

    <!-- ****** Contact Area Start ****** -->
    <section class="fplus-contact-area bg-gray" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>Contact</h4>
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fplus-contact-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="contact_from wow fadeInDown" data-wow-delay="1.5s">
                            <form action="mail.php" method="post" id="main_contact_form">
                                <!-- Message Input Area Start -->
                                <div class="contact_input_area">
                                    <div id="success_fail_info"></div>
                                    <div class="row">
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="number" id="number" placeholder="Telephone" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Google Maps -->
        <div id="googleMap" class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s"></div>
    </section>
    <!-- ****** Contact Area End ****** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class="fplus-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="about-us-widget">
                        <img src="img/core-img/logo.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="footer-nav-widget">
                        <nav>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Team</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="footer-nav-widget">
                        <nav>
                            <ul>
                                <li><a href="#">Clients</a></li>
                                <li><a href="#">Method</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="subscribe-widget">
                        <p>Subscribe</p>
                        <form action="#">
                            <input type="email" name="s-email" id="subscribeEmail" placeholder="Enter your email">
                            <button type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <div class="footer-social-widget">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-12 text-center text-white"><small><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- Jquery-2.2.4 js -->
    <script src="<?php echo $path; ?>js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo $path; ?>js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="<?php echo $path; ?>js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo $path; ?>js/others/plugins.js"></script>
    <!-- Google Maps js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk"></script>
    <script src="<?php echo $path; ?>js/google-map/map-active.js"></script>
    <!-- Active JS -->
    <script src="<?php echo $path; ?>js/active.js"></script>
</body>