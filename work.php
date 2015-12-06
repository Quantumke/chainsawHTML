<?php error_reporting(E_ALL);
include 'conn.php'
?>
<!doctype html><html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>My Portfolio | Ben</title>
<meta name="description" content="From Web Components and UX design to Meteorjs and Coffeescript, check out my latest web projects."/>
<meta id="viewport" name="viewport" content="width=device-width,minimum-scale=0.8,maximum-scale=1,user-scalable=no"/>
<link rel="stylesheet" href="css/main.css">
<script src="js/d3.js"></script>

<script src="js/custom.js"></script>
<link rel="stylesheet" href="css/font-awesome-4.4.0/css/font-awesome.css">
<link async rel="import" href="build1896.html?v=59"/>
<script>var wrap=null;document.head.createShadowRoot||document.write("<script src='js/webcomponents.min.js'><\/script>"),function(e,t,a,n,c,s,o){e.GoogleAnalyticsObject=c,e[c]=e[c]||function(){(e[c].q=e[c].q||[]).push(arguments)},e[c].l=1*new Date,s=t.createElement(a),o=t.getElementsByTagName(a)[0],s.async=1,s.src=n,o.parentNode.insertBefore(s,o)}(window,document,"script","../www.google-analytics.com/analytics.js","ga"),ga("create","UA-51484092-1","auto"),ga("require","displayfeatures"),ga("send","pageview");

    </script>

</head>
<body class="page-exit animating">

<header id="page-header" class="hidden" data-title="Portfolio | Benson Mburu">
<nav>

<a href="index.php"><span onclick="gohome()">about</span></a>
<a href="work.php"><span onclick="goportofolio()">work</span></a>
 <a href="labs.php"><span onclick="golabs">labs</span></a>
 <a href="contact.php"><span onclick="gocontact">contact</span></a>

 </nav>
 <div class="burger"><i></i> <i></i> <i></i></div>
 </header>
 <main id="page-content">
 <section class="current">
 <div>
 <div class="page-control">
 <a href="labs.php" class="next"><span>Labs</span> <em></em></a>
 <a href="index.php" class="prev"><span onclick="gohome()">Home</span> <em></em></a>

 </div>
 <div class="content pages" id="work">
 <section class="centered">
 <div class="wrapper">
 <header><h1>PORTFOLIO</h1>
 <div class="filters">
 <ul>
 <li class="active" title="Show All Projects">
 <span>Show All</span>
 </li>

 <li title="Filter by HTML5"><span>HTML</span></li>
 <li title="Filter by Android"><span>Android</span></li>
 <li title="Filter by Java"><span>Java</span>
 </li><li title="Filter by Django"><span>Django</span>
 </li><li title="Filter by Ruby"> <span>Ruby</span>
 </li><li title="Filter by Laravel"><span>Laravel</span> </li>
<li title ="Filter by php"><span>Php</span></li>
<li title="FIlter by python"><span>Python</span></li>
<li title="FIlter by meteor"><span>Meteor</span></li>
 <small>Click On a Tab To Sort By Technology .</small></li>
 </div>
 </header>

<?php

$sql = "SELECT * from portfolio";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

   ?>

 <ul class="grid-list cf_">
<script>

     function viewmore()
	{

		window.location.href="more.php?id=<?php echo $row["id"] ?>";
	}


     </script>
 <li class="item l_" onclick="viewmore()">
 <h2><?php echo $row["title"] ?></h2>
 <a href="" onclick="viewmore()" class="screen">
 <span data-text="<?php echo $row["title"] ?>">
 <i></i> <i></i> <i></i>
 </span>
 <div class="thumb" style="background-image:url(admin/../img/<?php echo $row["img"] ?>)">
 <div class="tags">
 <div>
 <ul>
     <li><?php echo $row["technology"]?></li>
     <br>
 <i class="fa fa-github"></i>
 </ul>
 </div></div>

 <div style="background-image:url(admin/../img/<?php echo $row["img"] ?>)" class="imgs"></div></div>

 <em class="fwa hidden">Best Practices</em></a></li>
 <?php
 }
} else {
    echo "0 results";
}
$conn->close();
?>




 </section></div>
 </div>
 </section>
 </main>
 <div id="page-loader" class="avatar-loader"><div class="avatar">
 <div class="avatar-wrapper">
  </div>

  </div></div>

   <script async data-require="false" data-main="https://caferati-two-caferati.netdna-ssl.com/scripts/build-59" src="js/require.js">
    </script>
 <script>var SRT={};SRT.o=Date.now(),SRT.a=setTimeout(function(){SRT.r=document.getElementById("page-loader"),SRT.r=SRT.r.querySelectorAll(".avatar"),SRT.r[0].classList.add("active")},1e3),SRT.f=setTimeout(function(){SRT.s=Date.now(),SRT.d=900,SRT.r[0].classList.add("first")},1900),SRT.s=setTimeout(function(){SRT.s=Date.now(),SRT.d=1350,SRT.r[0].classList.contains("first")&&SRT.r[0].classList.add("second")},3250),SRT.t=setTimeout(function(){SRT.s=Date.now(),SRT.d=1350,SRT.r[0].classList.contains("second")&&SRT.r[0].classList.add("third")},4550);var DATA={scripts:[""],partials:["control"],filter:{list:["WEB COMPONENTS","HTML5","SASS","LESS","SVG","REQUIREJS","BACKBONEJS","METEORJS","COFFEESCRIPT","SOCKETIO","MONGODB","PHP","MYSQL","UX DESIGN","UI/UX ANIMATIONS","GAME DESIGN","WEBSITE","WEBAPP"],name:"filter by skill"},prev:{link:"/",name:"About"},next:{link:"/labs",name:"Labs"},template:"list",index:2,name:"work"};</script></body>
