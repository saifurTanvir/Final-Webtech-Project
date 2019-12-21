<!DOCTYPE html>
<html>
<head>
  <title>student search</title>
</head>
<body>
  <h1>Search Student Using Student Id And Subject</h1>
  <div id="data">Test</div>
  <div id="data2">Test</div>

  <table>
    <tr>
      <td><b>Select Subject: </b></td>
      <td>
      <select name="subject">
        <option value="">Demo</option>
        <option value="Data Structure[F]">Data Structure[F]</option>
        <option value="Algorithm[K]">Algorithm[K]</option>
        <option value="C++">C++</option>
      </select>
      </td>
    </tr>
    <tr>
      <td><b>Student ID: </b></td>
      <td><input type="text" name="" onkeyup="search(this.value)" /></td>
    </tr>
  </table>

  
  
  
  <table border="1 px" >
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
          document.getElementById('data').innerHTML = this.responseText;
          var splitData = str.split("|");   
          var length = splitData.length;
          document.getElementById("data2").innerHTML = length;

          //document.getElementById("first").innerHTML = splitData[0];
          if(str != ""){
          	if(length <= 5 ){
	          	for(var i = 0; i < 5; i++){
	          		var catchVeriable = "v"+i;
	          		document.getElementById(catchVeriable).innerHTML = splitData[i];
	          	}
	          }
	          else{
	          	for(var i = 0; i < length; i++){
	          		var catchVeriable = "v"+i;   		
         			  document.getElementById(catchVeriable).innerHTML = splitData[i];
	          	}
	          }
          }
                   
        }
      };
    }

    function check(value) {
    	//document.getElementById("data").innerHTML = "Okay Man, You are a boss!!!";
    	var xhttp = new XMLHttpRequest();
		xhttp.open("POST", "../../action/teacher/searchResult.php", true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		//1.3-string send to php
		xhttp.send("bal="+value);
	
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			 	//alert(this.responseText);
			 	document.getElementById('data').innerHTML = this.responseText;
			}
		};
    }
  </script>
</body>
</html>