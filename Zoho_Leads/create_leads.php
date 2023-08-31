<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="leads.php" method="post" name="myForm" id="myForm">
    <label>First_Name</label><br>
    <input type="text" name="fname" id="fname" /><br>
    <label>Last_Name</label><br>
    <input type="text" name="lname" id="lname" /><br>
    <label>Company</label><br>
    <input type="text" name="company" id="company" /><br>
    <label>Email</label><br>
    <input type="email" name="email" id="email" /><br>
    <label>Phone</label><br>
    <input type="number" name="phone" id="phone" /><br>
    <input type="button" name="smt" value="Submit" id="smt" />
</form>
<div id="err"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
var form=$("#myForm");
$("#smt").click(function(){
    $.ajax({
        type:"POST",
        url:form.attr("action"),
        data:form.serialize(),
        success: function(response){
        	if (response === 'true') {
        alert('Lead created successfully!');
    } else {
        alert('Lead creation failed.');
    } 
        }
    });
});
});
</script>
</body>
</html>