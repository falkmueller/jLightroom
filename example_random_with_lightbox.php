<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>jLightroom</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    
    <style type="text/css">
        .jlr {font-size: 0;}

.jlr .jlr_item {
    font-size: 1rem;
    display: inline-block;
    box-sizing: border-box;     
    padding: 5px;
}

.jlr img.jlr_img {
    height: 200px;
    opacity: 0;

}

.jlr img.jlr_loaded {
     -webkit-transition: opacity 1s ease-in;
    -moz-transition: opacity 1s ease-in;
    -o-transition: opacity 1s ease-in;
    -ms-transition: opacity 1s ease-in;
    transition: opacity 1s ease-in;
    opacity: 1;
}
        </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      

        
        <h2>random example</h2>
        
        <div id="jLightroom" class="jlr gray_out">
            <?php for($i=0;$i<29;$i++){ 
                $img = rand(500, 1000).'x'.rand(500, 1000);
                ?><a href="https://dummyimage.com/<?php echo $img; ?>" data-lightbox="lb1" class="jlr_item"><img src="https://dummyimage.com/<?php echo $img; ?>" class="jlr_img" /></a><?php } ?>
        </div>
      

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="jquery.lightroom.js"></script>
    
    <script type="text/javascript">
        $("#jLightroom").lightroom({
            image_container_selector: ".jlr_item",
            img_selector: "img.jlr_img",
            img_class_loaded: "jlr_loaded",
            img_space: 5,
            init_callback: function(elem){}
        }).init();
    </script>
  </body>
</html>