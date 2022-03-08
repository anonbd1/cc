<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<html>
<head>

	<title>Stripe Checker</title>
	<link href="style.css" rel="stylesheet" id="bootstrap-css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
body{background:linear-gradient(-45deg,#ee7752,#e73c7e,#23a6d5,#23d5ab);background-size:400% 400%;animation:gradient 15s ease infinite;height:100vh}@keyframes gradient{0%{background-position:0 50%}50%{background-position:100% 50%}100%{background-position:0 50%}}h1{font-size:48px;line-height:.8em;font-weight:400;text-align:center;padding:18px 0;margin:100px 0 0 -2px}h3{font-family:Michroma,sans-serif;text-transform:uppercase;font-size:24px;line-height:1.2;line-spacing:1em;margin:0;text-align:center}
</style>
</head>
<body text=red>
	<br>
      <center> <div class="row col-md-12">
<div class="card col-sm-12">
  <h1 class="card-body h1"><font size="300px">hackerbd</font>
</h1>
  <div class="card-body">
<div class="md-form">
  <div class="col-md-12">
<center>  <div class="md-form">
    <span>Approved CVV:</span>&nbsp<span id="cLive" class="badge badge-success">0 </span>
    <span>Approve CCN:</span>&nbsp<span id="cWarn" class="badge badge-warning">0 </span>
    <span>Declined:</span>&nbsp<span id="cDie" class="badge badge-danger">0 </span>
    <span>Checked:</span>&nbsp<span id="total" class="badge badge-info">0 </span>
    <span>Total:</span>&nbsp<span id="carregadas" class="badge badge-dark">0 </span>
</div><br><textarea type="text" style="text-align: center; background-color: rgba(255, 255, 255, .1);color:yellow ; maxlength="700" 
placeholder="Enter Cards Here";" id="lista" class="md-textarea form-control" rows="4" placeholder="Enter Cards"></textarea>
 </center>
&nbsp;
</div>
<center>
<button class="btn btn-warning" style="width: 200px; outline: none;" id="testar" onclick="start()" ><b>START</b></button>
</center>
</div>
</div>
</center>
&nbsp;&nbsp;<br>&nbsp;&nbsp;<br>
<div class="col-md-12">
<div class="card">
<div style="position: absolute;
        top: 0;
        right: 0;">
	<button id="mostra" class="btn btn-success">Show</button><br>
		</div>
	<div style="position: absolute;
	top: 0;
	left: 0;">
</div>
  <div class="card-body">
    <h6 style="font-weight: bold;color:green" class="card-title">Approved CVV: <span  id="cLive2" class="badge badge-success">0</span></h6>
    <div id="bode"><span id=".aprovadas" class="aprovadas"></span>
</div>
  </div>
</div>
</div>
&nbsp;&nbsp;&nbsp;</br>

<div class="col-md-12">
<div class="card">
<div style="position: absolute;
        top: 0;
        right: 0;">
	<button id="mostra3" class="btn btn-warning">Show</button><br>
		</div>
	<div style="position: absolute;
	top: 0;
	left: 0;">
</div>
  <div class="card-body">
    <h6 style="font-weight: bold;color:yellow;" class="card-title">Approve CCN: <span  id="cWarn2" class="badge badge-warning">0</span></h6>
    <div id="bode3"><span id=".edrovadas" class="edrovadas"></span>
</div>
  </div>
</div>
</div>
&nbsp;&nbsp;&nbsp;</br>

<div class="col-md-12">
<div class="card">
	<div style="position: absolute;
        top: 0;
        right: 0;">
	<button id="mostra2" class="btn btn-danger">Show</button><br>
	</div>
	<div style="position: absolute;
	top: 0;
	left: 0;">
</div>
  <div class="card-body">

    <h6 style="font-weight: bold; color: red;" class="card-title">Declined: <span id="cDie2" class="badge badge-danger">0</span></h6>
    <div id="bode2"><span id=".reprovadas" class="reprovadas"></span>
    </div>
  </div>
</div>
</div>
  </div>
</div>
</div>
<br>
</center>
<script  src="/script.js"></script>
<script type="text/javascript">

$(document).ready(function(){

  $("#bode").hide();
  $("#esconde").show();
  
  $('#mostra').click(function(){
  $("#bode").slideToggle();
  });
  
  $('#mostra3').click(function(){
  $("#bode3").slideToggle();
  });
  
   $('#mostra2').click(function(){
  $("#bode2").slideToggle();
  });

});

</script>

<script title="ajax do checker">
    function start() {
        var linha = $("#lista").val();
        var linhastart = linha.split("\n");
        var total = linhastart.length;
        var ap = 0;
        var ed = 0;
        var rp = 0;
        linhastart.forEach(function(value, index) {
            setTimeout(
                 function() {
					var sec = $("#sec").val();
                    $.ajax({
                        url: 'chk.php?lista=' + value,
                        type: 'GET',
                        async: true,
                        success: function(resultado) {
                            if (resultado.match("#CVV")) {
                                removelinha();
                                ap++;
                                aprovadas(resultado + "");
                            }else if(resultado.match("#CCN")){
                            	removelinha();
                            ed++;
                                edrovadas(resultado + "");
                             }else {
                                removelinha();
                                rp++;
                                reprovadas(resultado + "");
                            }
                            $('#carregadas').html(total);
                            var fila = parseInt(ap) + parseInt(ed) + parseInt(rp);
                            $('#cLive').html(ap);
                            $('#cWarn').html(ed);
                            $('#cDie').html(rp);
                            $('#total').html(fila);
                            $('#cLive2').html(ap);
                            $('#cWarn2').html(ed);
                            $('#cDie2').html(rp);
                        }
                    });
                }, 2500 * index);
        });
    }
    function aprovadas(str) {
        $(".aprovadas").append(str + "<br>");
    }
    function reprovadas(str) {
        $(".reprovadas").append(str + "<br>");
    }
    function edrovadas(str) {
        $(".edrovadas").append(str + "<br>");
    }
    function removelinha() {
        var lines = $("#lista").val().split('\n');
        lines.splice(0, 1);
        $("#lista").val(lines.join("\n"));
    }
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
<footer>
    <center><span class="badge badge-dark rainbow_text_animated "><h3>hackerbd Team </h1></span> <a href="logout.php">Click here</a> to Logout.


</footer>
</body>
</html>
