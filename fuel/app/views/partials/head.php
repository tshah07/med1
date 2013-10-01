 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <!-- Apple devices fullscreen -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <!-- Apple devices fullscreen -->
  <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

  <title><?php echo $title; ?></title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo Uri::base();?>css/bootstrap.min.css">
  <!-- Bootstrap responsive -->
  <link rel="stylesheet" href="<?php echo Uri::base();?>css/bootstrap-responsive.min.css">
  <!-- jQuery UI -->
  <link rel="stylesheet" href="<?php echo Uri::base();?>css/plugins/jquery-ui/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo Uri::base();?>css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
  <!-- dataTables -->
  <link rel="stylesheet" href="<?php echo Uri::base();?>css/plugins/datatable/TableTools.css">
  <!-- chosen -->
  <link rel="stylesheet" href="<?php echo Uri::base();?>css/plugins/chosen/chosen.css">
  <!-- Theme CSS -->
  <link rel="stylesheet" href="<?php echo Uri::base();?>css/style.css">
  <!-- Color CSS -->
  <link rel="stylesheet" href="<?php echo Uri::base();?>css/themes.css">
  <!-- Notify -->
  <link rel="stylesheet" href="<?php echo Uri::base();?>css/plugins/gritter/jquery.gritter.css">
  <!-- Tagsinput -->
  <link rel="stylesheet" href="<?php echo Uri::base();?>css/plugins/tagsinput/jquery.tagsinput.css">
  <!-- select2 -->
  <link rel="stylesheet" href="<?php echo Uri::base();?>css/plugins/select2/select2.css">

  <!-- jQuery -->
  <script src="<?php echo Uri::base();?>js/jquery.min.js"></script>
  
  <!-- Nice Scroll -->
  <script src="<?php echo Uri::base();?>js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- imagesLoaded -->
  <script src="<?php echo Uri::base();?>js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
  <!-- jQuery UI -->
  <script src="<?php echo Uri::base();?>js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
  <script src="<?php echo Uri::base();?>js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
  <script src="<?php echo Uri::base();?>js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
  <script src="<?php echo Uri::base();?>js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
  <script src="<?php echo Uri::base();?>js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
  <script src="<?php echo Uri::base();?>js/plugins/jquery-ui/jquery.ui.datepicker.min.js"></script>
  <!-- slimScroll -->
  <script src="<?php echo Uri::base();?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo Uri::base();?>js/bootstrap.min.js"></script>
  <!-- Bootbox -->
  <script src="<?php echo Uri::base();?>js/plugins/bootbox/jquery.bootbox.js"></script>
  <!-- dataTables -->
  <script src="<?php echo Uri::base();?>js/plugins/datatable/jquery.dataTables.min.js"></script>
  <script src="<?php echo Uri::base();?>js/plugins/datatable/TableTools.min.js"></script>
  <script src="<?php echo Uri::base();?>js/plugins/datatable/ColReorderWithResize.js"></script>
  <script src="<?php echo Uri::base();?>js/plugins/datatable/ColVis.min.js"></script>
  <script src="<?php echo Uri::base();?>js/plugins/datatable/jquery.dataTables.columnFilter.js"></script>
  <script src="<?php echo Uri::base();?>js/plugins/datatable/jquery.dataTables.grouping.js"></script>
  <!-- Chosen -->
  <script src="<?php echo Uri::base();?>js/plugins/chosen/chosen.jquery.min.js"></script>

  

  <!-- Notify -->
  <script src="<?php echo Uri::base();?>js/plugins/gritter/jquery.gritter.min.js"></script>

  <!-- Masked inputs -->
  <script src="<?php echo Uri::base();?>js/plugins/maskedinput/jquery.maskedinput.min.js"></script>

  <!-- Validation -->
  <script src="<?php echo Uri::base();?>js/plugins/validation/jquery.validate.min.js"></script>
  <script src="<?php echo Uri::base();?>js/plugins/validation/additional-methods.min.js"></script>

  <!-- TagsInput -->
  <script src="<?php echo Uri::base();?>js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
  <!-- Custom file upload -->
  <script src="<?php echo Uri::base();?>js/plugins/fileupload/bootstrap-fileupload.min.js"></script>
  <!-- select2 -->
  <script src="<?php echo Uri::base();?>js/plugins/select2/select2.min.js"></script>
  <!-- Theme framework -->
  <script src="<?php echo Uri::base();?>js/eakroko.min.js"></script>
  <!-- Theme scripts -->
  <script src="<?php echo Uri::base();?>js/application.js"></script>
  <!-- Just for demonstration -->
  <script src="<?php echo Uri::base();?>js/demonstration.js"></script>
  <!-- Ajax for submission plugin -->
  <script src="http://malsup.github.com/jquery.form.js"></script> 

  <script type="text/javascript">


    $(document).ready(function(){

        $('.statefull').button();

        $(".statefull").click(function(){
                  $(this).button('loading');
                  
              });

       
    })

     
  </script>

  <style>
      /** { margin:0; padding:0; }
      body { padding: 30px; }
      table { width:500px; height:500px; padding:20px; background:#f1f1f1; color:#000;  }
      */
      #overlay { 
        display:none; 
        position:absolute; 
        background:#fff; 
      }
      #img-load { 
        position:absolute; 
      }
      
</style>



  <!--[if lte IE 9]>
    <script src="<?php// echo Uri::base();?>js/plugins/placeholder/jquery.placeholder.min.js"></script>
    <script>
      $(document).ready(function() {
        $('input, textarea').placeholder();
      });
    </script>
  <![endif]-->
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo Uri::base();?>img/favicon.ico" />
  <!-- Apple devices Homescreen icon -->
  <link rel="apple-touch-icon-precomposed" href="<?php echo Uri::base();?>img/apple-touch-icon-precomposed.png" />

</head>