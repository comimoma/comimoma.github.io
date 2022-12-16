<? header ("Content-type: text/css");?>
<?php
   // include page data
   $data = $_SERVER['DOCUMENT_ROOT'];
   $data .= "/database.php";
   include_once($data);
?>
body {
    min-height: 100vh;
}

.bg-darkred{
    background-color: firebrick;
}

.masterhead {
    background-color: none;
    background: linear-gradient(
      rgba(255, 50, 50, 0.4), 
      rgba(255, 250, 250, 0.1)), 
      url(<?php 
            $today=strtotime("Now");
            $imgPath = "../img/";
            if (date("s", $today) >= 15 and date("s", $today) < 30){
                echo $imgPath . $MasterImg[0];
            } elseif (date("s", $today) >= 30 and date("s", $today) < 45) {
                echo $imgPath . $MasterImg[1];
            } elseif (date("s", $today) >= 45 and date("s", $today) < 60) {
                echo $imgPath . $MasterImg[2];
            } else {
                echo $imgPath . $MasterImg[3];
            }
          ?>), 
      firebrick;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: center 50%;
    background-size: 100%;
    -webkit-transition: background-size 1.5s;
    -moz-transition: background-size 1.5s;
    -o-transition: background-size 1.5s;
    transition: background-size 1.5s;
}

.masterhead:hover {
    background-size: 95%;
}

.text-md-black{
    color: rgba(0,0,0,.55);
}

.text-md-white{
    color: rgba(255,255,255,.55);
}

.contact-max-width{
    max-width: 540px;
}

section{
    scroll-margin-top: 75px;
}

@media(min-width: 768px) {
    .masterhead {
        height: auto;
        padding-bottom: 4rem!important;
    }
    .masterhead-title {
        height: auto;
        padding-top: 4rem!important;
    }
    .masterhead-title h3 {
        font-size: calc(1.425rem + 0.85vw);
    }
    .masterhead-title h1 {
        font-size: calc(1.5rem + 1.75vw);
    }
}

@media (min-width: 1200px) {
    .masterhead {
        height: auto;
        padding-bottom: 10rem!important;
        background-position: center 10%;
    }
    .masterhead-title {
        height: auto;
        padding-top: 10rem!important;
    }
    .masterhead-title h3 {
        font-size: calc(1.675rem + 1.35vw);
    }
    .masterhead-title h1 {
        font-size: calc(1.75rem + 2.25vw);
    }
}

.timeline {
  position: relative;
  padding: 0;
  list-style: none;
}
.timeline:before {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 40px;
  width: 2px;
  margin-left: -1.5px;
  content: "";
  background-color: #e9ecef;
}
.timeline > li {
  position: relative;
  min-height: 50px;
  margin-bottom: 30px;
}
.timeline > li:after, .timeline > li:before {
  display: table;
  content: " ";
}
.timeline > li:after {
  clear: both;
}
.timeline > li .timeline-panel {
  position: relative;
  float: right;
  width: 100%;
  padding: 0 20px 0 100px;
  text-align: left;
}
.timeline > li .timeline-panel:before {
  right: auto;
  left: -15px;
  border-right-width: 15px;
  border-left-width: 0;
}
.timeline > li .timeline-panel:after {
  right: auto;
  left: -14px;
  border-right-width: 14px;
  border-left-width: 0;
}
.timeline > li .timeline-image {
  position: absolute;
  z-index: 100;
  left: 0;
  width: 80px;
  height: 80px;
  margin-left: 0;
  text-align: center;
  color: white;
  border: 7px solid lightpink;
  border-radius: 50%;
  background-color: firebrick;
}
.timeline > li .timeline-image h4, .timeline > li .timeline-image .h4 {
  font-size: 10px;
  line-height: 14px;
  margin-top: 12px;
}
.timeline > li.timeline-inverted > .timeline-panel {
  float: right;
  padding: 0 20px 0 100px;
  text-align: left;
}
.timeline > li.timeline-inverted > .timeline-panel:before {
  right: auto;
  left: -15px;
  border-right-width: 15px;
  border-left-width: 0;
}
.timeline > li.timeline-inverted > .timeline-panel:after {
  right: auto;
  left: -14px;
  border-right-width: 14px;
  border-left-width: 0;
}
.timeline > li:last-child {
  margin-bottom: 0;
}
.timeline .timeline-heading h4, .timeline .timeline-heading .h4 {
  margin-top: 0;
  color: inherit;
}
.timeline .timeline-heading h4.subheading, .timeline .timeline-heading .subheading.h4 {
  text-transform: none;
}
.timeline .timeline-body > ul,
.timeline .timeline-body > p {
  margin-bottom: 0;
}

@media (min-width: 768px) {
  .timeline:before {
    left: 50%;
  }
  .timeline > li {
    min-height: 100px;
    margin-bottom: 30px;
  }
  .timeline > li .timeline-panel {
    float: left;
    width: 41%;
    padding: 0 20px 20px 30px;
    text-align: right;
  }
  .timeline > li .timeline-image {
    left: 50%;
    width: 100px;
    height: 100px;
    margin-left: -50px;
  }
  .timeline > li .timeline-image h4, .timeline > li .timeline-image .h4 {
    font-size: 13px;
    line-height: 18px;
    margin-top: 16px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    float: right;
    padding: 0 30px 20px 20px;
    text-align: left;
  }
}
@media (min-width: 992px) {
  .timeline > li {
    min-height: 150px;
  }
  .timeline > li .timeline-panel {
    padding: 0 20px 20px;
  }
  .timeline > li .timeline-image {
    width: 150px;
    height: 150px;
    margin-left: -75px;
  }
  .timeline > li .timeline-image h4, .timeline > li .timeline-image .h4 {
    font-size: 18px;
    line-height: 26px;
    margin-top: 30px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    padding: 0 20px 20px;
  }
}
@media (min-width: 1200px) {
  .timeline > li {
    min-height: 170px;
  }
  .timeline > li .timeline-panel {
    padding: 0 20px 20px 100px;
  }
  .timeline > li .timeline-image {
    width: 170px;
    height: 170px;
    margin-left: -85px;
  }
  .timeline > li .timeline-image h4, .timeline > li .timeline-image .h4 {
    margin-top: 40px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    padding: 0 100px 20px 20px;
  }
}

.page-link {
    color: rgba(0,0,0,.55)!important;
    border: none!important;
}
.page-link:hover {
    color: black!important;
    font-weight:bold!important;
    background-color:rgba(0,0,0,.1)!important;
    border-color: none!important;
}


.breadcrumb_link {
    color: #6c757d;
    text-decoration: none;
}
.breadcrumb_link:hover {
    color: black;
    font-weight:bold!important;
    text-decoration: none;
}


.product_navbar {
    text-decoration: none;
    color: rgba(0,0,0,.55);
}
.product_navbar:hover {
    text-decoration: none;
    color: black;
    font-weight:bold!important;
}