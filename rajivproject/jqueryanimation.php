<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("button").click(function(){
    var div = $("div");  
    div.animate({left: '100px'}, "slow");
    //div.animate({right:'1000px'},"slow");
    div.animate({fontSize:'3em'}, "slow");
  });
});
</script> 
</head>
<body>

<button>Start Animation</button>

<p> element to the right, and then increases the font size of the text !</p>

<div style="background:yellow;height:100px;width:200px;position:absolute;"> HI RAJIV!!</div>

</body>
</html>
