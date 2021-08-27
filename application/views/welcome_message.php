<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>

<div class="jumbotron text-center">
  <h1></h1>
  <p></p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-md-2 text-center"></div>
    <div class="col-md-8 text-center">
    	<img src="<?=base_url();?>assets/logo/mplussoft-i-pvt-ltd-logo.jpeg" class="img-responsive" alt="Image" style="width: 50%;">
      <h1 id="clock" style="font-size: 100px;font-weight: bold;">
      	
      </h1>
      <p></p>
      <p class="h2 text-center" style="font-size: 45px;">
      	<b><?=date('l, F d, Y')?></b>
      </p>
      <p>
      	<?php
      		date_default_timezone_set("Asia/Kolkata"); 
      		$t = date('H');
      		if($t>4 && $t<12){$message = 'Good Morning';}
      		else if($t>=12 && $t<16){$message = 'Good Afternoon';}
      		else if($t>=16 && $t<20){$message = 'Good Evening';}
      		else if($t>=20 && $t<=4){$message = 'Good Night';}  
          else {$message='Welcome';}
      	?>
      	
      </p>
      <h2>
        <?=$message;?>
      </h2>
      <p>
      <div class="input-group mb-3">
		  <input id="searchq" type="text" class="form-control p-2" placeholder="Search the web..." style="font-size: 24px;">
		  <div class="input-group-append">
		    <button id="btn_search" class="btn btn-info" type="submit">
		    	<i class="fa fa-search fa-lg"></i>
		    </button>
		  </div>
		</div>
      </p>
    </div>
    <div class="col-md-2 text-center"></div>
  </div>
</div>
<div class="jumbotron text-center fixed-bottom mb-0">
  <h1></h1>
  <p></p> 
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<script>
	
	$('#btn_search').click(function (e) {
		var searchq = $('#searchq').val();
		if(searchq!=''){
			window.location.href = "https://www.google.com/search?q="+searchq;
		}
	});

</script>
<script type="text/javascript">
	function currentTime() {
  let date = new Date(); 
  let hh = date.getHours();
  let mm = date.getMinutes();
  let ss = date.getSeconds();
  let session = "AM";

  if(hh == 0){
      hh = 12;
  }
  // if(hh > 12){
  //     hh = hh - 12;
  //     session = "PM";
  //  }

   hh = (hh < 10) ? "0" + hh : hh;
   mm = (mm < 10) ? "0" + mm : mm;
   ss = (ss < 10) ? "0" + ss : ss;
    
   //let time = hh + ":" + mm + ":" + ss + " " + session;

   let time = hh + ":" + mm + ":" + ss + " ";

  document.getElementById("clock").innerText = time; 
  let t = setTimeout(function(){ currentTime() }, 1000);
}
currentTime();
</script>
</body>
</html>
