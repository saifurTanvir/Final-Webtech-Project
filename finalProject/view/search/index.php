<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>student search</title>
</head>
<body>
  <table border="1px">
    <tr>
      <td colspan="2"><h1 style="color: red">Search Student Using Student Id And Subject</h1></td>
    </tr>
    <tr>
      <td colspan="2"><div id="data"></div></td>
    </tr>
    <tr>
      <td colspan="2"><div id="data2"></div></td>
    </tr>

    <tr>
      <td><b>Select Subject: </b></td>
      <td>
      <select name="subject" id="subject" style="width: 173px">
          <option value="">Demo</option>
        <?php
          $conn = mysqli_connect('localhost', 'root', '', 'sms');
          $sql1 = "select * from subject where teacherid='{$_SESSION['id']}'";
          $result1 = mysqli_query($conn, $sql1);

          while($user1 = mysqli_fetch_assoc($result1)){
            ?>
            <option value="<?php echo $user1["subject"]; ?>"> <?php echo $user1["subject"]; ?></option>

            <?php

          }

        ?>
      </select>
      </td>
    </tr>

    <tr>
      <td><b>Student ID: </b></td>
      <td><input type="text" name="" onkeyup="search(this.value)" />


      </td>
    </tr>
  </table>

  
  
  
  <table border="1 px" style="margin-left: 240px">
  	<tr>
    	<td id="v0" onclick="check(this.innerHTML)" style="background-color: green"></td>
    </tr>
    <tr>
    	<td id="v1" onclick="check(this.innerHTML)" style="background-color: green"> </td>
    </tr>

    <tr>
    	<td id="v2" onclick="check(this.innerHTML)" style="background-color: green"></td>
    </tr>

    <tr>
    	<td id="v3" onclick="check(this.innerHTML)" style="background-color: green"></td>
    </tr>

    <tr>
    	<td id="v4" onclick="check(this.innerHTML)" style="background-color: green"></td>
    </tr>
    
  </table>
    
    
  <script type="text/javascript">
  
    function search(val){
      
      var xhttp = new XMLHttpRequest();
      xhttp.open("POST", "search.php", true);
      xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhttp.send('key='+val);
    
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var str = this.responseText;
          //document.getElementById('data').innerHTML = this.responseText;
          var splitData = str.split("|");   
          var length = splitData.length;
          //document.getElementById("data2").innerHTML = length;

          //document.getElementById("first").innerHTML = splitData[0];
          if(str != ""){
          	if(length <= 5 ){
              var i = 0;
	          	for(i = 0; i < 5; i++){
	          		var catchVeriable = "v"+i;
	          		document.getElementById(catchVeriable).innerHTML = splitData[i];
	          	}
	          }
	          else{
              var i = 0;
	          	for(i = 0; i < length; i++){
	          		var catchVeriable = "v"+i;   		
         			  document.getElementById(catchVeriable).innerHTML = splitData[i];
	          	}
	          }
          }
                   
        }
      };
    }

    function check(value) {
      //var sub = document.getElementById("subject").value;
      var e = document.getElementById("subject");
      var sub = e.options[e.selectedIndex].text;
     // alert(sub);
      if(sub == "Demo"){
        alert("Select Subject Please!");
      }
      else{
          //document.getElementById("data").innerHTML = "Okay Man, You are a boss!!!";
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../../action/teacher/searchResult.php", true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        //1.3-string send to php
        
        xhttp.send("bal="+value+"&subject="+sub);
      
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            document.getElementById('data').innerHTML = this.responseText;
          }
        };
      }

    	
    }
  </script>
</body>
</html>