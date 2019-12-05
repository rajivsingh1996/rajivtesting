<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#btn1").click(function(){
    $("#test1").text("HI RAJIV SINGH!");
  });
  $("#btn2").click(function(){
    $("#test2").html("<b>HI TABASSUM!</b>");
  });
  $("#btn3").click(function(){
    $("#test3").val("HEENA");
  });
});
</script>
</head>
<body>

<p id="test1">This is a first paragraph.</p>
<p id="test2">This is second paragraph.</p>

<p>Input field: <input type="text" id="test3" value="Mickey Mouse"></p>

<button id="btn1">Set Text</button>
<button id="btn2">Set HTML</button>
<button id="btn3">Set Value</button>

</body>
</html>
