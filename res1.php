<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Resize &amp; Fixed Header (shrinking header) - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        /* =Reset default browser CSS. Based on work by Eric Meyer: http://meyerweb.com/eric/tools/css/reset/index.html
-------------------------------------------------------------- */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
  background: transparent;
  border: 0;
  margin: 0;
  padding: 0;
  vertical-align: baseline; }

body {
  line-height: 1; }

h1, h2, h3, h4, h5, h6 {
  clear: both;
  font-weight: normal; }

ol, ul {
  list-style: none; }
 

blockquote {
  quotes: none; }

blockquote:before, blockquote:after {
  content: '';
  content: none; }

del {
  text-decoration: line-through; }

/* tables still need 'cellspacing="0"' in the markup */
table {
  border-collapse: collapse;
  border-spacing: 0; }

a img {
  border: none; }

/* =Scss Variables
-------------------------------------------------------------- */
/* =Global
-------------------------------------------------------------- */
*,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

body {
  background-color: #3cb5f9;
  color: #505050;
  font-family: "Ubuntu", sans-serif;
  font-weight: 300;
  font-size: 16px;
  line-height: 1.8; }

/* Headings */
h1, h2, h3, h4, h5, h6 {
  line-height: 1;
  font-weight: 300; }

a {
  text-decoration: none;
  color: #3cb5f9; }

a:hover {
  color: #0793e2; }

/* =Template
-------------------------------------------------------------- */
#wrapper {
  width: 100%;
  margin: 0 auto; }

#main {
  background-color: #fff;
  padding-top: 150px; }

.container {
  width: 80%;
  margin: 0 auto;
  padding: 0 30px; }

section {
  padding: 60px 0; }
  section h1 {
    font-weight: 700;
    margin-bottom: 10px; }
  section p {
    margin-bottom: 30px; }
    section p:last-child {
      margin-bottom: 0; }
  section.color {
    background-color: #3cb5f9;
    color: white; }

/* =Info Bar
-------------------------------------------------------------- */
#info-bar {
  background-color: #3cb5f9; }
  #info-bar a {
    color: white;
    font-size: 14px;
    text-transform: uppercase;
    display: inline-block;
    margin: 0;
    padding: 10px; }
    #info-bar a:hover {
      background-color: #0793e2; }
  #info-bar span.all-tutorials,
  #info-bar span.back-to-tutorial {
    display: block;
    width: 50%; }
  #info-bar span.all-tutorials {
    float: left;
    text-align: left; }
  #info-bar span.back-to-tutorial {
    float: right;
    text-align: right; }

/* =Header
-------------------------------------------------------------- */
header {
  width: 100%;
  height: 150px;
  overflow: hidden;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999;
  background-color: #0683c9;
  -webkit-transition: height 0.3s;
  -moz-transition: height 0.3s;
  -ms-transition: height 0.3s;
  -o-transition: height 0.3s;
  transition: height 0.3s; }
  header h1#logo {
    display: inline-block;
    height: 150px;
    line-height: 150px;
    float: left;
    font-family: "Oswald", sans-serif;
    font-size: 60px;
    color: white;
    font-weight: 400;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s; }
  header nav {
    display: inline-block;
    float: right; }
    header nav a {
      line-height: 150px;
      margin-left: 20px;
      color: #9fdbfc;
      font-weight: 700;
      font-size: 18px;
      -webkit-transition: all 0.3s;
      -moz-transition: all 0.3s;
      -ms-transition: all 0.3s;
      -o-transition: all 0.3s;
      transition: all 0.3s; }
      header nav a:hover {
        color: white; }
  header.smaller {
    height: 75px; }
    header.smaller h1#logo {
      width: 150px;
      height: 75px;
      line-height: 75px;
      font-size: 30px; }
    header.smaller nav a {
      line-height: 75px; }

/* =Footer
-------------------------------------------------------------- */
/* =Extras
-------------------------------------------------------------- */
.clearfix:after {
  visibility: hidden;
  display: block;
  content: "";
  clear: both;
  height: 0; }

/* =Media Queries
-------------------------------------------------------------- */
@media all and (max-width: 660px) {
  /* =Header
  -------------------------------------------------------------- */
  header h1#logo {
    display: block;
    float: none;
    margin: 0 auto;
    height: 100px;
    line-height: 100px;
    text-align: center; }
  header nav {
    display: block;
    float: none;
    height: 50px;
    text-align: center;
    margin: 0 auto; }
    header nav a {
      line-height: 50px;
      margin: 0 10px; }
  header.smaller {
    height: 75px; }
    header.smaller h1#logo {
      height: 40px;
      line-height: 40px;
      font-size: 30px; }
    header.smaller nav {
      height: 35px; }
      header.smaller nav a {
        line-height: 35px; } }
@media all and (max-width: 600px) {
  .container {
    width: 100%; }

  #info-bar a {
    display: block; }
  #info-bar span.all-tutorials,
  #info-bar span.back-to-tutorial {
    width: 100%; }
  #info-bar span.all-tutorials,
  #info-bar span.back-to-tutorial {
    float: none;
    text-align: center; }
  #info-bar span.all-tutorials {
    border-bottom: solid 1px #0793e2; } }

    .box {  background:#fff;
  transition:all 0.2s ease;
  border:2px dashed #dadada;
  margin-top: 10px;
  box-sizing: border-box;
  border-radius: 5px;
  background-clip: padding-box;
  padding:0 20px 20px 20px;
  min-height:340px;
}
    .notice {padding: 15px;
    background-color: #fafafa;
    border-left: 6px solid #7f7f84;
    margin-bottom: 10px;
    -webkit-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
       -moz-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
            box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
}
.notice-danger {border-color: #d73814;
}
.notice-info {border-color: #45ABCD;
}
.notice-sm {padding: 10px;
    font-size: 80%;
}
.notice-success {border-color: #80D651;
}
.notice-warning {border-color: #FEAF20;
}
    .twPc-Arrange {    box-sizing: border-box;
    display: table;
    margin: 0;
    min-width: 100%;
    padding: 0;
    table-layout: auto;
}
.twPc-ArrangeSizeFit {    display: table-cell;
    padding: 0;
    vertical-align: top;
}
.twPc-StatLabel {    color: #8899a6;
    font-size: 10px;
    letter-spacing: 0.02em;
    overflow: hidden;
    text-transform: uppercase;
    transition: color 0.15s ease-in-out 0s;
}
.twPc-StatValue {    display: block;
    font-size: 18px;
    font-weight: 500;
    transition: color 0.15s ease-in-out 0s;
}
.twPc-avatarImg {    border: 2px solid #fff;
    border-radius: 7px;
    box-sizing: border-box;
    color: #fff;
    height: 72px;
    width: 72px;
}
.twPc-avatarLink {    background-color: #fff;
    border-radius: 6px;
    display: inline-block !important;
    float: left;
    margin: -30px 5px 0 8px;
    max-width: 100%;
    padding: 1px;
    vertical-align: bottom;
}
.twPc-bg {    background-image: url("https://pbs.twimg.com/profile_banners/50988711/1384539792/600x200");
    background-position: 0 50%;
    background-size: 100% auto;
    border-bottom: 1px solid #e1e8ed;
    border-radius: 4px 4px 0 0;
    height: 95px;
    width: 100%;
}
.twPc-block {    display: block !important;
}
.twPc-button {    margin: -35px -10px 0;
    text-align: right;
    width: 100%;
}
.twPc-div {    background: #fff none repeat scroll 0 0;
    border: 1px solid #e1e8ed;
    border-radius: 6px;
    height: 200px;
    max-width: 340px; // orginal twitter width: 290px;
}
.twPc-divName {    font-size: 18px;
    font-weight: 700;
    line-height: 21px;
}
.twPc-divStats {    margin-left: 11px;
    padding: 10px 0;
}
.twPc-divUser {    margin: 5px 0 0;
}
ul.twPc-Arrange {    list-style: outside none none;
    margin: 0;
    padding: 0;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
</script>
</head>



<body>

<div id="wrapper">

<header>
    <div class="container clearfix">
        <h1 id="logo">Princy Diana</h1>
        <nav>
          <p>&nbsp;</p>
          <p>Resume</p>
      </nav>
    </div>
</header><!-- /header -->

<div id="main">
    <div id="content">
        <section>
            <div class="container">
                <div class="col-md-4 text-center">
                  <div class="box">
                    <div class="box-content">
                      <h1 class="tag-title">About</h1>
                      <hr />
                      <p align="left"><strong>Born</strong> Princy Diana (/princy daɪˈænə/; born September 6,1997) age 19 </p>
                      <p align="left"><strong>Residence </strong> Kumbakonam</p>
                      <p align="left"><strong>Occupation</strong> Student, Sastra University</p>
                      <p align="left"><strong>Hometown</strong> Sankarapuram, Villupuram Dt</p>
                      <p align="left"><strong>Religion</strong> Christianity</p>
                      <p align="left"><strong>Parent(s)</strong> Mary Das, Amalorpava Das </p>
                      <p align="left"><strong>Website</strong> princydiana.com</p>
                      <p align="left"> <br />
                      </p>
                    </div>
                  </div>
                </div> 
                <div class="col-md-4 text-center">
                  <div class="box">
                    <div class="box-content">
                      <h1 class="tag-title">Early Life</h1>
                      <hr />
                      <p>Princy was born on September 6,1997, in Kallakurichi, and was raised at Sankarapuram. She is the first child of Mary and Amalorpava Das. Princy has a sibling Jenny (born 2000). Mary worked as a teacher. With her income maintaned her family.</p>
                      <p>Princy attended Adaikala Anna Elementary Catholic School in her  hometown. Growing up, continued her studies in AKT Matric Hr sec School. Passed out higher education in 2015.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-center">
                  <div class="box">
                    <div class="box-content">
                      <h1 class="tag-title">Beliefs</h1>
                      <hr />
                      <p>Princy identifies herself as a faithful adherent of Christianity, said she communicates with God via prayer, and that "He's the reason I'm here&quot;</p>
                      <p>&nbsp;</p>
                    </div>
                  </div>
                </div> 
                <p>&nbsp;</p>
                <h1>&nbsp;</h1>
            </div>
        </section>
        <section class="color">
            <div class="container">
                <p align="left"><strong>Born</strong> Princy Diana (/princy daɪˈænə/; born September 6,1997) age 19 </p>
                <p align="left"><strong>Residence </strong> Kumbakonam</p>
                <p align="left"><strong>Occupation</strong> Student, Sastra University</p>
                <p align="left"><strong>Hometown</strong> Sankarapuram, Villupuram Dt</p>
                <p align="left"><strong>Religion</strong> Christianity</p>
                <p align="left"><strong>Parent(s)</strong> Mary Das, Amalorpava Das </p>
                <p align="left"><strong>Website</strong> princydiana.com</p>
                <h1>&nbsp;</h1>
            </div>
        </section>
        <section>
            <div class="container">
                <h1>About </h1>
                <p>&nbsp;</p>
                <div class="container">
                  <div class="notice notice-success"> <strong>Music</strong> Pop, Selena Gomez, Taylor Swift</div>
                  <div class="notice notice-danger"> <strong>Movies</strong> Adventure Humor Hollywood </div>
                  <div class="notice notice-info">
                    <p><strong>Interested In</strong> Programming, Maths, Surfing, Music, Photography</p>
                  </div>
                  <div class="notice notice-warning"><strong>Aim </strong>Developer, Editor </div>
                  <div class="notice notice-sm"><strong>Contact princydiana.com</strong></div>
                </div>
                <p>&nbsp;</p>
            </div>
        </section>
        <section class="color">
            <div class="container">
              <h1><strong>Favorite Qoutes</strong></h1>
              <p>If life gives 100 resons to cry, then let's show life that we have 1000 reasons to Smile</p>
              <p>By grace throgh faith </p>
              <p>Born to be Awesome not Perfect</p>
            </div>
        </section>
        <section>
            <div class="container">
              <h1>About who I am inside</h1>
              <div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <div class="panel panel-default">
                  <!-- List group -->
                  <ul class="list-group">
                    <li class="list-group-item">Motivating
                      <div class="material-switch pull-right">
                        <label for="someSwitchOptionDefault" class="label-default"></label>
                      </div>
                    </li>
                    <li class="list-group-item">Sometimes Creative too!
                      <div class="material-switch pull-right">
                        <label for="someSwitchOptionPrimary" class="label-primary"></label>
                      </div>
                    </li>
                    <li class="list-group-item">Hardworking
                      <div class="material-switch pull-right">
                        <label for="someSwitchOptionSuccess" class="label-success"></label>
                      </div>
                    </li>
                    <li class="list-group-item"> Positve Thinking
                      <div class="material-switch pull-right">
                        <div align="left"></div>
                        <label for="someSwitchOptionInfo" class="label-info"></label>
                      </div>
                    </li>
                    <li class="list-group-item">Approaching Attitude
                      <div class="material-switch pull-right">
                        <label for="someSwitchOptionWarning" class="label-warning"></label>
                      </div>
                    </li>
                    <li class="list-group-item">Will to do
                      <div class="material-switch pull-right">
                        <label for="someSwitchOptionDanger" class="label-danger"></label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <p>&nbsp;</p>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<h1>Qualifications and other Interests</h1>
                <div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                  <div class="panel panel-default">
                    <!-- List group -->
                    <ul class="list-group">
                      <li class="list-group-item">SSLC 98%,HSC 96%,
                        SGPA 8.908
                        <div class="material-switch pull-right">
                    <label for="someSwitchOptionDefault2" class="label-default"></label>
                        </div>
                      </li>
                      <li class="list-group-item">
                        Chess District Winner
                        <div class="material-switch pull-right">
                    <label for="someSwitchOptionPrimary" class="label-primary"></label>
                        </div>
                      </li>
                      <li class="list-group-item">
                        Well in C++ and Java
                        <div class="material-switch pull-right">
                    <label for="someSwitchOptionSuccess" class="label-success"></label>
                        </div>
                      </li>
                      <li class="list-group-item">
                      Badminton Player
                      <div class="material-switch pull-right">
                          <div align="left"></div>
                          <label for="someSwitchOptionInfo" class="label-info"></label>
                        </div>
                      </li>
                      <li class="list-group-item">Good Programming Skills
                        <div class="material-switch pull-right">
                          <label for="someSwitchOptionWarning" class="label-warning"></label>
                        </div>
                      </li>
                      <li class="list-group-item">Will to do
                        <div class="material-switch pull-right">
                          <label for="someSwitchOptionDanger" class="label-danger"></label>
                        </div>
                      </li>
                    </ul>
                  </div>
              </div>
                <p>&nbsp;</p>
            </div>
          <p>&nbsp;</p>
          <h1>Contact</h1>
          <p>&nbsp;</p>
          <div class="container">
            <div class="row">
              <h1>Twitter Profile Card</h1>
              <p>You can use with Twitter API, bot or manual.</p>
              <!-- code start -->
              <div class="twPc-div"> <a class="twPc-bg twPc-block"></a>
                <div>
                  <div class="twPc-button">
                    <!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
                    <a href="https://twitter.com/mertskaplan" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Follow @princydiana</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    <!-- Twitter Button -->
                  </div>
                  <a title="Mert Salih Kaplan" href="https://twitter.com/mertskaplan" class="twPc-avatarLink"> <img alt="Mert Salih Kaplan" src="../../Users/Administrator/Documents/Exam Forum/Images/3d-wallpaper.jpg" class="twPc-avatarImg"> </a>
                  <div class="twPc-divUser">
                    <div class="twPc-divName"> <a href="https://twitter.com/mertskaplan">Princy Diana Das</a> </div>
                  <span> <a href="https://twitter.com/mertskaplan">@princydiana</a></span> </div>
                  <div class="twPc-divStats">
                    <ul class="twPc-Arrange">
                      <li class="twPc-ArrangeSizeFit"> <a href="https://twitter.com/mertskaplan" title="9.840 Tweet"> <span class="twPc-StatLabel twPc-block">Tweets</span> <span class="twPc-StatValue">9.840</span> </a> </li>
                      <li class="twPc-ArrangeSizeFit"> <a href="https://twitter.com/mertskaplan/following" title="885 Following"> <span class="twPc-StatLabel twPc-block">Following</span> <span class="twPc-StatValue">885</span> </a> </li>
                      <li class="twPc-ArrangeSizeFit"> <a href="https://twitter.com/mertskaplan/followers" title="1.810 Followers"> <span class="twPc-StatLabel twPc-block">Followers</span> <span class="twPc-StatValue">1.810</span> </a> </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- code end -->
            </div>
          </div>
          <script type="text/javascript">

          </script>
<p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </section>
    </div>
</div><!-- #main -->


<footer>
<div id="info-bar">
    <div class="container clearfix">
        <span class="all-tutorials"><a href="http://bootsnipp.com/cppratikcp">&larr; all tutorials</a></span>
        <span class="back-to-tutorial"><a href="https://www.facebook.com/pratik.chauhan.cp">CHUAHAN PRATIK</a></span>
    </div>
</div><!-- /#top-bar -->
</footer><!-- /footer -->



</div><!-- /#wrapper -->
<script type="text/javascript">
/*!
 * classie v1.0.0
 * class helper functions
 * from bonzo https://github.com/ded/bonzo
 * MIT license
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true, unused: true */
/*global define: false */

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})