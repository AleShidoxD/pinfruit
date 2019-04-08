<html>
<?php
$link=mysqli_connect('localhost','root','','mydb') or die ("Error en el sistema".mysql_error());
$query1="SELECT * FROM imagenes WHERE imagen LIKE 'lol.jpg'";
$resultado=mysqli_query($link,$query1) or die ("No se que pasa sinceramente".mysql_error());
$fila=mysqli_fetch_row($resultado);
?>
<head>
	
<head>
    <meta charset="utf-8">
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="estilo_css.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
 
    <style type="text/css">
        body{
    margin-top: 100px;
    width:100%;
    height:100%;
}
.carousel-inner,.carousel,.carousel-item,.container,.fill {
    height:100%;
    min-height:400px;
    width:100%;
    background-position:center center;
    background-size:cover;
}
.slide-wrapper{display:inline;}
.slide-wrapper .container{padding:0;}
.carousel-inner> .carousel-item.carousel-item-next ,
.carousel-inner > .carousel-item.active.carousel-item-right{ 
    transform: translate3d(0, 100%, 0); -webkit-transform: translate3d(0, 100%, 0); -ms-transform: translate3d(0, 100%, 0); -moz-transform: translate3d(0, 100%, 0); -o-transform: translate3d(0, 100%, 0);  top: 0;
    
}
.carousel-inner > .carousel-item.carousel-item-prev ,
.carousel-inner > .carousel-item.active.carousel-item-left{ 
    transform: translate3d(0,-100%, 0); -webkit-transform: translate3d(0,-100%, 0);  -moz-transform: translate3d(0,-100%, 0);-ms-transform: translate3d(0,-100%, 0); -o-transform: translate3d(0,-100%, 0); top: 0;
    
}
.carousel-inner > .carousel-item.next.carousel-item-left ,
.carousel-inner > .carousel-item.carousel-item-prev.carousel-item-right ,
.carousel-inner > .carousel-item.active{
    transform:translate3d(0,0,0); -webkit-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);; -moz-transform:translate3d(0,0,0); -o-transform:translate3d(0,0,0); top:0;
    
}

/*------------------------------- vertical carousel indicators ------------------------------*/
.carousel-indicators{
    position:absolute;
    top:0;
    bottom:0;
    margin:auto;
    height:20px;
    right:10px; left:auto;
    width:auto;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
}
.carousel-indicators li{
    display:block; margin-bottom:5px; border:1px solid #00a199; 
    
}
.carousel-indicators li.active{
    margin-bottom:5px; background:#00a199;
    
}
img{
    width: 100%;
    height: 100%;
}
    </style>

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>}
    <header>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a href="search.php">Búsqueda
                    <img id="fotoperf" src="pics/manzanita.png">
                </a>
            </li>
            <li class="nav-item">
                <a href="myprofile.php">Perfil
                    <img id="fotoperf" src="pics/perfil.png">
                </a>
            </li>
            <li class="nav-item">
                <a href="timeline.php">
                    <p>Pinfruit</p>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="alta.php">Mis frutitas
                    <img id="fotoperf" src="pics/config.png">
                </a>
            </li>
            <li class="nav-item">
                <a href="logout.php">Salir
                    <img id="fotoperf" src="pics/salida.png">
                </a>
            </li>
        </ul>       
    </header>

<section class="slide-wrapper">
    <h1 style="text-align: center;">XD </h1>
    <div class="container">
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="fill" style=" background-color:#48c3af;"><?php echo "<img src='pics/$fila[3]'> "?></div>
                </div>
                <div class="carousel-item">
                    <div class="fill" style=" background-color:#b33f4a;">2</div>
                </div>
                <div class="carousel-item">
                    <div class="fill" style=" background-color:#7fc2f4;">3</div>
                </div>
                <div class="carousel-item">
                    <div class="fill" style=" background-color:#e47794;">4</div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">

$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
</script>
</body>
</html>
