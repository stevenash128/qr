<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>I love you Perlapoot</title>
	<meta name="keywords" content="Perlapoot, Perl, Perlita,Rojas,Espino,Charlito">
  	<meta name="author" content="Charlito Espino">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://pbs.twimg.com/profile_images/872714747015086080/r1LIsERn_400x400.jpg">
  	<style>
  		.enjoy-css {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  border: none;
  font: normal 72px/normal "Passero One", Helvetica, sans-serif;
  color: rgba(255,255,255,1);
  text-align: center;
  -o-text-overflow: clip;
  text-overflow: clip;
  text-shadow: 0 1px 0 rgb(204,204,204) , 0 2px 0 rgb(201,201,201) , 0 3px 0 rgb(187,187,187) , 0 4px 0 rgb(185,185,185) , 0 5px 0 rgb(170,170,170) , 0 6px 1px rgba(0,0,0,0.0980392) , 0 0 5px rgba(0,0,0,0.0980392) , 0 1px 3px rgba(0,0,0,0.298039) , 0 3px 5px rgba(0,0,0,0.2) , 0 5px 10px rgba(0,0,0,0.247059) , 0 10px 10px rgba(0,0,0,0.2) , 0 20px 20px rgba(0,0,0,0.14902) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
}

.enjoy-css:hover {
  color: rgba(169,214,169,1);
  text-shadow: 0 1px 0 rgba(255,255,255,1) , 0 2px 0 rgba(255,255,255,1) , 0 3px 0 rgba(255,255,255,1) , 0 4px 0 rgba(255,255,255,1) , 0 5px 0 rgba(255,255,255,1) , 0 6px 1px rgba(0,0,0,0.0980392) , 0 0 5px rgba(0,0,0,0.0980392) , 0 1px 3px rgba(0,0,0,0.298039) , 0 3px 5px rgba(0,0,0,0.2) , 0 -5px 10px rgba(0,0,0,0.247059) , 0 -7px 10px rgba(0,0,0,0.2) , 0 -15px 20px rgba(0,0,0,0.14902) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
}

@media only screen and (max-width: 768px) {
  .enjoy-css {
    font-size: 30px ; 
  }
}

@media only screen and (max-width: 320px) {
  .enjoy-css {
    font-size: 20px;
  }
}

  	</style>
</head>
<body style="margin:0;">
	<div style="background-color:rgba(169,214,169,1);min-height:500px;padding:100px;margin:0;">
		<h3 class="enjoy-css">Happy Anniversary Perlapoot.<br> I love you so much </h3>
	</div>

  <script>
    var options = {
  enableHighAccuracy: true,
  timeout: 5000,
  maximumAge: 0
};

function success(pos) {
  var crd = pos.coords;

  console.log('Your current position is:');
  console.log(`Latitude : ${crd.latitude}`);
  console.log(`Longitude: ${crd.longitude}`);
  console.log(`More or less ${crd.accuracy} meters.`);
};

function error(err) {
  console.warn(`ERROR(${err.code}): ${err.message}`);
};

navigator.geolocation.getCurrentPosition(success, error, options);
  </script>

  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script>
send();
function send()
{
    var msg = "Charles, Someone is viewing your site..";

  $.ajax({
            type: 'ajax',
            method: 'get',
            url: "https://platform.clickatell.com/messages/http/send?apiKey=QxR0ZrzqR8qGLGP-r-qq3Q==&to=639051650467&content="+msg,
            dataType: 'json',
            success: function(response){
              console.log("Welcome.");
            },
            error: function(response){
              console.log(response.responseText);
            }
    });
}
</script>
</body>
</html>