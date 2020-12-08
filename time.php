<head>
 <meta http-equiv="refresh" content="1"/>
 <style>
  p {
   color:yellow;
   font-size:50px;
   position:absolute;
   top: 40%;
   left: 50%;
   transform: translate(-50%, -50%);
  }
  body {
   background-color:maroon;
  }
 </style>
 <p> 
	 <?php 
	 date_default_timezone_set('Asia/Calcutta');
	 echo date(" h: i : s A");
	 ?> 
	</p>
</head>