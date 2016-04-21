<?php 

		$title = "About";
	    $sidebar="<script src='http://maps.googleapis.com/maps/api/js'></script>
					<script>
					function initialize() {
					  var mapProp = {
					    center:new google.maps.LatLng(24.8615,67.0099),
					    zoom:5,
					    mapTypeId:google.maps.MapTypeId.ROADMAP
					  };
					  var map=new google.maps.Map(document.getElementById('googleMap'),mapProp);
					}
					google.maps.event.addDomListener(window, 'load', initialize);
					</script>
					</head>

					<body>
					<div id='googleMap' style='width:250px;height:400px;'></div>";
    	$content ='
    		<img class="imgRight" src="../images/man.jpg"/>
    		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
    		Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, 
    		when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
    		It has survived not only five centuries, but also the leap into electronic typesetting,
    		 remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
    		 sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
    		 PageMaker including versions of Lorem Ipsum.</p>
    		 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
    		Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, 
    		when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
    		It has survived not only five centuries, but also the leap into electronic typesetting,
    		 remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
    		 sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
    		 PageMaker including versions of Lorem Ipsum.</p>
    		 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
    		Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, 
    		when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
    		It has survived not only five centuries, but also the leap into electronic typesetting,
    		 remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
    		 sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
    		 PageMaker including versions of Lorem Ipsum.</p>
    	';

	 include 'template.php';
 ?>