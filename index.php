<!DOCTYPE html><html lang='en' class=''>
<head>
<head>
    <title>Send a Message</title>
</head>
<style class="cp-pen-styles">
.qr-code-generator {
width: 500px;
margin: 0 auto;
}

.qr-code-generator * {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}

#qrcode {
width: 128px;
height: 128px;
margin: 0 auto;
text-align: center;
}

#qrcode a {
font-size: 0.8em;
}

.qr-url, .qr-size {
padding: 0.5em;
border: 1px solid #ddd;
border-radius: 2px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}

.qr-url {
width: 79%;
}

.qr-size {
width: 20%;
}

.generate-qr-code {
display: block;
width: 100%;
margin: 0.5em 0 0;
padding: 0.25em;
font-size: 1.2em;
border: none;
cursor: pointer;
background-color: #e5554e;
color: #fff;
}</style></head><body>
<div class="qr-code-generator">

<input type="text" class="qr-url" placeholder="URL or Text">
<input type="number" class="qr-size" value="128" min="20" max="500">

<button class="generate-qr-code">Generate</button>



<br>

<div id="qrcode"></div>


<!-- <input type="file" accept="image/*" capture="camera" /> -->

</div>

<canvas class="my-4" id="myChart" width="900" height="380"></canvas>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/130527/qrcode.js'></script>
<script >$('.generate-qr-code').on('click', function(){

// Clear Previous QR Code
$('#qrcode').empty();

// Set Size to Match User Input
$('#qrcode').css({
'width' : $('.qr-size').val(),
'height' : $('.qr-size').val()
})

// Generate and Output QR Code
$('#qrcode').qrcode({width: $('.qr-size').val(),height: $('.qr-size').val(),text: $('.qr-url').val()});

});
//# sourceURL=pen.js
//



</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a97714dd7591465c70821cf/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
</body></html>