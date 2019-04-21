<html>

<head>
    <title>ΕΠΙΛΟΓΗ ΧΑΡΤΗ</title>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap.min.css">
	<script src="lib/jquery.min.js"></script>
	<script src="lib/bootstrap.min.js"></script>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />

</head>

<body>
    <br/>
    <div class="container">
      <form>
	    <div class="form-group">

	      <label for="mapchoice">ΕΠΙΛΟΓΗ ΧΑΡΤΗ ΠΕΛΟΠΟΝΝΗΣΟΥ:</label>
	      <select class="form-control" id="mapchoice">
            <option selected>Επιλογή Χάρτη:</option>
	        <option>ΔΕΞΑΜΕΝΩΝ</option>
	        <option>ΔΡΟΜΟΛΟΓΗΣΗΣ</option>
	      </select>

	    </div>
	  </form>
   </div>

 <br/>

 <iframe name="pageContent" id="pageContent" src="#" frameborder=0 width="100%" height="100%"></iframe>

  <script type="text/javascript">

   $(document).ready(function(){

     $('#mapchoice').change(function(){

	   var selected=$('#mapchoice option:selected').val();

	   if (selected=="ΔΕΞΑΜΕΝΩΝ"){          $("#pageContent").attr("src","tanks.php");

       }else if (selected=="ΔΡΟΜΟΛΟΓΗΣΗΣ"){
         $("#pageContent").attr("src","router.php");
	   }
     });
   })


   </script>

</body>

</html>