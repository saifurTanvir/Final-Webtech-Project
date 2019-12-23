<button value=<?php echo "bal"; ?> id="b1" onclick="f1(this.value)">Click</button>
<div id="test"></div>
<script type="text/javascript">
	function f1(value) {
		var data = document.getElementById('b1').value;
		document.getElementById("test").innerHTML = data;
	}
	
</script>