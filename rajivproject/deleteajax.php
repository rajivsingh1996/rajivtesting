<?php
 $servername = "localhost";
$username = "root";
$password = "";
$db = "mydb";
$mysqli = new mysqli($servername,$username,$password,$db);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
  
} else {
  echo "Connected successfully\n";
}
?>
<html>
<div class='container'>
 <table border='1' >
  <tr style='background: whitesmoke;'>
   <th>id</th>
   <th>username</th>
   <th>password</th>
  </tr>

  <!DOCTYPE html>
 
<html>
<head>
    <meta name="viewport" content="width=device-width"/>
    <title>Index</title>
    <style type="text/css">
        body {
            font-family: Arial;
            font-size: 10pt;
        }
 
        .table {
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
 
        .table th {
            background-color: #F7F7F7;
            color: #333;
            font-weight: bold;
        }
 
        .table th, .table td {
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <table id="tblwelcome" class="table" cellpadding="0" cellspacing="0">
        <tr>
            <th style="width:100px"> Id</th>
            <th style="width:150px">username</th>
            <th style="width:150px">password</th>
            <th style="width:40px"></th>
        </tr>
        @foreach (welcome welcome in Model)
        {
            <tr>
                <td class="welcomeId">
                    <span>@welcome.Id</span>
                </td>
                <td class="username">
                    <span>@welcome.username</span>
                </td>
                <td class="password">
                    <span>@customer.password</span>
                </td>
                <td>
                    <a class="Delete" href="javascript:;">Delete</a>
                </td>
            </tr>
        }
    </table>
    <table border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width: 150px">
               username<br/>
                <input type="text" id="txtusername" style="width:140px"/>
            </td>
            <td style="width: 150px">
                Country:<br/>
                <input type="text" id="txtpassword" style="width:140px"/>
            </td>
            <td style="width: 200px">
                <br/>
                <input type="button" id="btnAdd" value="Add"/>
            </td>
        </tr>
    </table>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.cdnjs.com/ajax/libs/json2/20110223/json2.js"></script>
    <script type="text/javascript">
        $(function () {
            //Remove the dummy row if data present.
            if ($("#tblwelcome tr").length > 2) {
                $("#tblwelcome tr:eq(1)").remove();
            } else {
                var row = $("#tblwelcome tr:last-child");
                row.find(".Delete").hide();
                row.find("span").html('&nbsp;');
            }
        });
 
        function AppendRow(row, welcomeId, username, password) {
            //Bind CustomerId.
            $(".welcomeId", row).find("span").html(welcomeId);
 
            //Bind Name.
            $(".username", row).find("span").html(username);
            $(".username", row).find("input").val(username);
 
            //Bind Country.
            $(".password", row).find("span").html(password);
            $(".password", row).find("input").val(password\);
 
            row.find(".Delete").show();
            $("#tblCustomers").append(row);
        };
 
        //Add event handler.
        $("body").on("click", "#btnAdd", function () {
            var txtName = $("#txtusername");
            var txtCountry = $("#txtpassword");
            $.ajax({
                type: "POST",
                url: "/Home/InsertCustomer",
                data: '{name: "' + txtName.val() + '", welcome: "' + txtwelcome.val() + '" }',
                welcomeType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (r) {
                    var row = $("#tblwelcome tr:last-child");
                    if ($("#tblwelcome tr:last-child span").eq(0).html() != "&nbsp;") {
                        row = row.clone();
                    }
                    AppendRow(row, r.welcomeId, r.usename, r.password);
                    txtName.val("");
                    txtCountry.val("");
                }
            });
        });
 
        //Delete event handler.
        $("body").on("click", "#tblwelcome .Delete", function () {
            if (confirm("Do you want to delete this row?")) {
                var row = $(this).closest("tr");
                var welcomeId = row.find("span").html();
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: '{welcomeId: ' + welcomeId + '}',
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {
                        if ($("#tblwelcome tr").length > 2) {
                            row.remove();
                        } else {
                            row.find(".Delete").hide();
                            row.find("span").html('&nbsp;');
                        }
                    }
                });
            }
        });
    </script>
</body>
</html>