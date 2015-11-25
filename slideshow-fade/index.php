<html>
    <head>
    <title></title>
    <script type="text/javascript" src="plugins/jquery.js"></script>
    <script type="text/javascript" src="plugins/cycle-plugin.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
	$('#fade').cycle();
	});
</script>
<style type="text/css">
		#fade { border: 0px solid orange; padding: 5px; }
		#fade img{ width:100%}
</style>
    </head>
    <body>
    <div id="fade" style="float-left;"> <img src="images/image1.gif"> <img src="images/image2.gif"> <img src="images/image3.gif"> </div>
</body>
</html>