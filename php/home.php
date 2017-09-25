<?php
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Zion - Lets the truth reval </title>

    <!-- Bootstrap core CSS -->
    <link href="/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="/dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/theme_1.css" rel="stylesheet">
    <link rel="stylesheet" href="/packaged/css/semantic.css" type="text/css"/>


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="font-family: monospace">
      
       <?php include 'header.php'?>   
  
      <div class="">
      <div class="row">
           <div class="col-sm-2">
<?php include 'homeleftmenu.php'; ?>

           </div>
          <div class="col-sm-9">
              
        
              <div>
  <div class="ui inverted form">
    <div class="ui info message">
      <div class="header">We had some issues</div>
      <ul class="list">
        <li>Please enter your first name</li>
    
      </ul>
    </div>
     
    <div class="ui segment green">
      <div >
<!--          <label class="ui big">Reveal it!</label>-->
<form method="post">
<input placeholder="Let the world know truth" name="hallos" id="hallos" type="text"> 
      
      </div>
        <div style="margin-top: 5px;" class="ui green submit button pull-right" id="revail">Revail</div> 
        
    </div>
    
  </div>
</div>
             
              <div  class="ui segment inverted " id="hallosSection">        
                  <?php
                  $results_lines=getHallos();
                  
                  
                  foreach ($results_lines as $row) 
                   {
                    ?>

                <div class="ui segment green " id="hallo"<?php echo $row['id']?> >
                 <span><?php echo $row['summary'] ?><ul class="nav nav-pills pull-right"><li><img src="/images/Heart_SH.png" width="25px"/><span class="badge">240</span></li><li><img src="/images/hate.jpg" width="25px"/><span class="badge">240</span></li></ul></span>
                 

</div>
                  <?php
                    }
                    ?>
                
                
              </div>
        </div><!-- /.col-sm-4 -->
 
         
      </div>
      </div>
      
    <div id="footer">
      <div class="container">
        <p class="text-muted"></p>
      </div>
    </div>

     
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script>
      
                 


        $( "#revail" ).click(function() {
    text=$( "#hallos").val();
    alert(text);
    $.ajax({
  type: "POST",
  url: "posthallos.php",
  data: { hallos: text }
})
  .done(function( msg ) {
//      hallo='<div class="ui segment green " id="hallo" > <span>'+text+'<ul class="nav nav-pills pull-right"><li><img src="/images/Heart_SH.png" width="25px"/><span class="badge">240</span></li><li><img src="/images/hate.jpg" width="25px"/><span class="badge">240</span></li></ul></span></div>';
//      hallosSection.html(hallo+$("#hallosSection").html());
    alert( "Data Saved: " + msg );
  });
});
        </script>
      
  </body>
</html>
