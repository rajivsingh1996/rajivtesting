<html>
<head>
<script>
function showcountry(str) {
    if (str == "") {
        document.getElementById("txthint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
<select name="country" onchange="showUser(this.value)">
  <option value="">Select a country:</option>
  <option value="1">india</option>
  <option value="2">aus</option>
  <option value="3">eng</option>
  <option value="4">afrika</option>
  <option value="1">news</option>
  <option value="2">south</option>
  <option value="3">pok</option>
  <option value="4">china</option>
  <option value="3">bangaladesh</option>
  <option value="4">usa</option>
  </select>
</form>
<br>
<div id="txthint"><b>country info will be listed here...</b></div>

</body>
</html>