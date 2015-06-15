<?php
//definir slider
$slider = array(
    "ejemplo1.jpg", //primer slider 0 indice ejemplo1.jpg imagen debe estar en carpeta "images/slider"
    "ejemplo2.png", //primer slider 0 indice ejemplo1.jpg imagen debe estar en carpeta "images/slider"
    "ejemplo3.jpg", //primer slider 0 indice ejemplo1.jpg imagen debe estar en carpeta "images/slider"
    "ejemplo4.png", //primer slider 0 indice ejemplo1.jpg imagen debe estar en carpeta "images/slider"
    "ejemplo5.png", //primer slider 0 indice ejemplo1.jpg imagen debe estar en carpeta "images/slider"
);
$ind = null;
$sli = null;
$i = 0;
foreach ($slider as $slide) {
    $active = ($i == 0) ? "class='active'" : null;
    $ind .= "<li data-target='#slider-home' data-slide-to='$i' $active></li>";
    $item_active = ($i == 0) ? " active" : null;
    $sli .= '<div class="item' . $item_active . '"><img class="img-responsive" src="images/slider/' . $slide . '" /></div>';
    $i++;
}
?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-6 col-lg-offset-3 text-center">
        <div id="slider-home" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php echo $ind; //indicador ?>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php echo $sli; //imagenes ?>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#slider-home" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#slider-home" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>        
</div>
