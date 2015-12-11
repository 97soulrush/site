<?php
    session_start();

  if (isset($_GET['l'])) {
    session_unset();

    header('Location: index.php');
  }
?>

<!DOCTYPE html>
   <html>
      <head>
         <title>Welcome to Hermie</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="w3.css">
         <link rel="stylesheet" href="w3-theme-teal.css">
         <link rel="stylesheet" href="responsive-nav.css">
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <script src="responsive-nav.js"></script>
	 <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	 <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	 <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	 <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	 <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	 <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	 <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	 <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	 <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
	 <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	 <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
	 <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	 <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	 <link rel="manifest" href="/manifest.json">
	 <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	 <meta name="msapplication-TileColor" content="#00aba9">
	 <meta name="msapplication-TileImage" content="/mstile-144x144.png">
	 <meta name="theme-color" content="#ffffff">
      </head>
         <body>
            <header class="w3-container w3-teal">
                             
               <h1><a href="http://teammoby.projects.codetn.org/"><img src='logov4.png' style='width:11%'/></a><b>Hermie</b>  |  Track and Validate Service Hours</h1>
<?php 
                  include("../includes/nav.php");
               ?>   
            </header>
        
            <div class="w3-container" style="background-image:url('clean-up.jpg');background-repeat: no-repeat; background-size: cover; height: 580px">
<br/>
<br/>
<br/>
<br/>
<br/>      
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>    
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>                
<div class="w3-container w3-center" >
    <?php
       if ($_SESSION['user_type'] == 1) {
         echo '<b><a href="input.php" class="w3-btn w3-teal" style = "padding:10px; border:2px solid teal; text-decoration:none; color:#00CC99;font-size:30px; border-radius:25px">Add a log</a></b>';
       } elseif ($_SESSION['user_type'] == 2) {
         echo '<b><a href="logs.php" class="w3-btn w3-teal" style = "padding:10px; border:2px solid teal; text-decoration:none; color:#00CC99;font-size:30px; border-radius:25px">My logs</a></b>';
       } else {
         echo '<b><a href="signup.php" class="w3-btn w3-teal" style = "padding:10px; border:2px solid teal; text-decoration:none; color:#00CC99;font-size:30px; border-radius:25px">Sign Me Up!</a></b>';
       }
    ?>
               </div>
            </div>
    <footer class="w3-container w3-teal">

   <p style="text-align:center">Hermie | Your Service Hour Tracking Assistant<br/>
   Team Moby&copy; All Rights Reserved - Results May Vary | <b><i>Please seek medical help for service hours lasting longer than four hours</i></b></p>
</footer> 

            <script>
               var nav = responsiveNav(".nav-collapse", { // Selector
               animate: true, // Boolean: Use CSS3 transitions, true or false
               transition: 284, // Integer: Speed of the transition, in milliseconds
               label: "<i class='material-icons'>&#xE5D2;</i>", // String: Label for the navigation toggle
               insert: "before", // String: Insert the toggle before or after the navigation
               customToggle: "", // Selector: Specify the ID of a custom toggle
               closeOnNavClick: false, // Boolean: Close the navigation when one of the links are clicked
               openPos: "relative", // String: Position of the opened nav, relative or static
               navClass: "nav-collapse", // String: Default CSS class. If changed, you need to edit the CSS too!
               navActiveClass: "js-nav-active", // String: Class that is added to  element when nav is active
               jsClass: "js", // String: 'JS enabled' class which is added to  element
               init: function(){}, // Function: Init callback
               open: function(){}, // Function: Open callback
               close: function(){} // Function: Close callback
               });            
           </script>
         
         </body>
</html> 
