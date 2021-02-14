<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<title>colorPicker</title>
</head>

<body>


<div style="display: block; position: absolute; width: 250px; top: 30%; left: 40%; padding: 4px; border: solid 1px #b3b3b3;">
<div id="primary_block" style="position: relative;">
	<div id="line" style="position: absolute; left: 200px; cursor: pointer;">
		<div id="arrows" style="position: absolute; top: 0; margin-top: -4px; left: -11px; width: 40px; cursor: pointer;">
			<div class="left_arrow" style="width:0; height:0; position:absolute; border-bottom:6px solid transparent; border-left:10px solid black; border-top:6px solid transparent; border-right:8px solid transparent; cursor: pointer;"></div>
			<div class="right_arrow" style="width:0; height:0; left:23px; position:absolute; border-bottom:6px solid transparent; border-left:10px solid transparent; border-top:6px solid transparent; border-right:10px solid black; cursor: pointer;"></div>
		</div>
	</div>

	<div id="block_picker" style="background-color:red; height:180px; width:180px;">
		<img src="bgGradient.png" style="width:180px;">
		<div id="circle" style="width:8px; height:8px; border:1px solid black; border-radius:50%; position:absolute; left:0; top:0; cursor: default;"></div>
	</div>

	<div id="out_color" style="width: 180px; height: 20px; background-color: #FFF; border: solid 1px #b3b3b3; margin-top: 10px;"></div>
	
	<div style="display: -webkit-box; display: flex; margin-top: 10px;">
	
		<div nameid="postM_1" style="display: block; width: 50px; text-decoration: none; text-align: center; padding: 5px; border: solid 1px #b3b3b3; border-radius: 3px; font: 12px Arial, Helvetica, sans-serif; font-weight: bold; color: #737373; box-shadow: 0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; background-image: -webkit-linear-gradient(top, #ffffff 0%, #e3e3e3 100%); cursor: pointer;">
			ок
		</div>

		<div nameid="postM_1" style="display: block; width: 50px; margin-left: 10px; text-decoration: none; text-align: center; padding: 5px; border: solid 1px #b3b3b3; border-radius: 3px; font: 12px Arial, Helvetica, sans-serif; font-weight: bold; color: #737373; box-shadow: 0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; background-image: -webkit-linear-gradient(top, #ffffff 0%, #e3e3e3 100%); cursor: pointer;">
			отмена
		</div>
	</div>			
</div>
</div>



<script type="text/javascript" src="picker.js"></script>
<script type="text/javascript">
picker.init();
</script>
</body>
</html>
