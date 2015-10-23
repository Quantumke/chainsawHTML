<!doctype html><html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>CONTACT FORM</title>
<meta name="description" content="Wanna talk to me about a web project or hire me for a freelance? Just fill the form below or send an email to rafael@caferati.me and let&#x27;s talk."/>
<meta id="viewport" name="viewport" content="width=device-width,minimum-scale=0.8,maximum-scale=1,user-scalable=no"/>
<link rel="stylesheet" href="css/main.css">

<link async rel="import" href="build1896.html?v=59"/>
<script>var wrap=null;document.head.createShadowRoot||document.write("<script src='js/webcomponents.min.js'><\/script>"),function(e,t,a,n,c,s,o){e.GoogleAnalyticsObject=c,e[c]=e[c]||function(){(e[c].q=e[c].q||[]).push(arguments)},e[c].l=1*new Date,s=t.createElement(a),o=t.getElementsByTagName(a)[0],s.async=1,s.src=n,o.parentNode.insertBefore(s,o)}(window,document,"script","../www.google-analytics.com/analytics.js","ga"),ga("create","UA-51484092-1","auto"),ga("require","displayfeatures"),ga("send","pageview");</script>
<script src="js/custom.js"></script>
<script src="//www.powr.io/powr.js" powr-token="c747eb50e5" external-type="html"></script>
<script src="dist/sweetalert-dev.js"></script>
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
 <link rel="stylesheet" href="dist/example.css">
</head>
<body class="page-exit animating">
<header id="page-header" class="hidden" data-title="Message| Benson Mburu">

<nav>
<a href="index.html"><span>about</span></a>
<a href="work.html"><span>work</span></a>
 <a href="labs.html"><span>labs</span></a>
 <a href="contact.html"><span>contact</span></a>

 </nav>
 <div class="burger"><i></i> <i></i> <i></i></div>
 </header>
 <main id="page-content">
 <section class="current">
 <div>
 <div class="page-control">
 <a href="labs.html" class="prev">
 <span>Labs</span>
 <em></em></a></div>
 <div class="content pages" id="contact">
 <section class="centered">
 <div class="wrapper">
 <header>
 <h1>Contact Me</h1>

 </header>
   <?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages
	  **************************************************************************/
      if (isset($_GET['msg'])) {
	  $msg =$_GET['msg'];// mysql_real_escape_string($_GET['msg']);
	  echo "<div><p>SUCCESFUL</p></div>

      ";
	  }
	  /******************************* END ********************************/
			?>

 <div class="lets-talk">

<form id="myForm" method="post" action="post.php">
 <ul class="input-block">

 <li class="active name">
 <div class="label cf_">

 <i class="i-svg user" data-icon="user,"></i>
 <label title="Name">Fill in your name</label></div>
 <i class="i-svg common" data-icon="user,"></i>
  <textarea placeholder="Enter Your name" name="name"></textarea>
 </li>
 <li class="email"><div class="label cf_"><i class="i-svg mail" data-icon="envelope,"></i><label title="email">Please enter your email address</label></div>
 <i class="i-svg common" data-icon="envelope,"></i>
  <textarea placeholder="Enter your Email" name="email"></textarea>

 <li class="msg">
 <div class="label cf_">
 <i class="i-svg msg" data-icon="edit,"></i>
 <label title="message">Please Write Your Message</label></div>
 <i class="i-svg common" data-icon="edit,"></i>
 <textarea placeholder="message" name="message"></textarea>
     </li></ul>
  </form>

 <div class="submit"><awesome-button color="teal" width="100" disabled="true">Next</awesome-button>
 <awesome-button  onclick="myFunction()" color="teal" disabled="true" progress="true">Submit your message</awesome-button></div>
 <input type="button" value="Submit form">
<li class="custom-icon">
		<div class="ui">
			<p>A message with a custom icon</p>
			<button>Try me!</button>
		</div>
		<pre><span class="attr">swal</span>({
&nbsp;&nbsp;title: <span class="str">"Sweet!"</span>,
&nbsp;&nbsp;text: <span class="str">"Here's a custom image."</span>,
&nbsp;&nbsp;imageUrl: <span class="str">"images/thumbs-up.jpg"</span>
});</pre>
	</li>



 <div class="status"></div>

 <div class="share"><p>You can also find me on</p>
 <awesome-button width="130" type="facebook" target="_blank" href="https://www.facebook.com/r.caferati">Facebook</awesome-button>
 <awesome-button type="linkedin" width="130" target="_blank" href="https://www.linkedin.com/in/rcaferati">Linkedin</awesome-button>
 <awesome-button type="twitter" width="120" target="_blank" href="https://twitter.com/rcaferati">Twitter</awesome-button>
 <awesome-button type="github" width="120" target="_blank" href="https://github.com/rcaferati">Github</awesome-button></div>

 </div></div></section></div></div>

 </section></main>
 <div id="page-loader" class="avatar-loader">
 <div class="avatar">
 <div class="avatar-wrapper">
 </div></div></div>
 <script>

document.querySelector('button.download').onclick = function(){
	$("html, body").animate({ scrollTop: $("#download-section").offset().top }, 1000);
};

document.querySelector('.showcase.normal button').onclick = function(){
	alert("Oops... Something went wrong!");
};

document.querySelector('.showcase.sweet button').onclick = function(){
	swal("Oops...", "Something went wrong!", "error");
};

document.querySelector('ul.examples li.message button').onclick = function(){
	swal("Here's a message!");
};

document.querySelector('ul.examples li.timer button').onclick = function(){
	swal({
		title: "Auto close alert!",
		text: "I will close in 2 seconds.",
		timer: 2000,
		showConfirmButton: false
	});
};

document.querySelector('ul.examples li.title-text button').onclick = function(){
	swal("Here's a message!", "It's pretty, isn't it?");
};

document.querySelector('ul.examples li.success button').onclick = function(){
	swal("Good job!", "You clicked the button!", "success");
};

document.querySelector('ul.examples li.warning.confirm button').onclick = function(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes, delete it!',
		closeOnConfirm: false
	},
	function(){
		swal("Deleted!", "Your imaginary file has been deleted!", "success");
	});
};

document.querySelector('ul.examples li.warning.cancel button').onclick = function(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes, delete it!',
		cancelButtonText: "No, cancel plx!",
		closeOnConfirm: false,
		closeOnCancel: false
	},
	function(isConfirm){
    if (isConfirm){
      swal("Deleted!", "Your imaginary file has been deleted!", "success");
    } else {
      swal("Cancelled", "Your imaginary file is safe :)", "error");
    }
	});
};

document.querySelector('ul.examples li.custom-icon button').onclick = function(){
	swal({
		title: "Sweet!",
		text: "Here's a custom image.",
		imageUrl: 'example/images/thumbs-up.jpg'
	});
};

document.querySelector('ul.examples li.message-html button').onclick = function(){
	swal({
		title: "HTML <small>Title</small>!",
		text: 'A custom <span style="color:#F8BB86">html<span> message.',
		html: true
	});
};

document.querySelector('ul.examples li.input button').onclick = function(){
	swal({
		title: "An input!",
		text: 'Write something interesting:',
		type: 'input',
		showCancelButton: true,
		closeOnConfirm: false,
		animation: "slide-from-top",
		inputPlaceholder: "Write something",
	},
	function(inputValue){
		if (inputValue === false) return false;

		if (inputValue === "") {
			swal.showInputError("You need to write something!");
			return false;
		}

		swal("Nice!", 'You wrote: ' + inputValue, "success");

	});
};

document.querySelector('ul.examples li.theme button').onclick = function() {
	swal({
		title: "Themes!",
		text: "Here's the Twitter theme for SweetAlert!",
		confirmButtonText: "Cool!",
		customClass: 'twitter'
	});
};

document.querySelector('ul.examples li.ajax button').onclick = function() {
  swal({
    title: 'Ajax request example',
    text: 'Submit to run ajax request',
    type: 'info',
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true,
  }, function(){
    setTimeout(function() {
      swal('Ajax request finished!');
    }, 2000);
  });
};

</script>
 <script>
function myFunction() {
    document.getElementById("myForm").submit();
}
</script>
 <script async data-require="false" data-main="https://caferati-two-caferati.netdna-ssl.com/scripts/build-59" src="js/require.js"></script>
 <script>var SRT={};SRT.o=Date.now(),SRT.a=setTimeout(function(){SRT.r=document.getElementById("page-loader"),SRT.r=SRT.r.querySelectorAll(".avatar"),SRT.r[0].classList.add("active")},1e3),SRT.f=setTimeout(function(){SRT.s=Date.now(),SRT.d=900,SRT.r[0].classList.add("first")},1900),SRT.s=setTimeout(function(){SRT.s=Date.now(),SRT.d=1350,SRT.r[0].classList.contains("first")&&SRT.r[0].classList.add("second")},3250),SRT.t=setTimeout(function(){SRT.s=Date.now(),SRT.d=1350,SRT.r[0].classList.contains("second")&&SRT.r[0].classList.add("third")},4550);var DATA={scripts:[""],partials:["control"],filter:{list:[]},prev:{},next:{},template:"contact",index:4,name:"contact"};</script></body>

</html>
