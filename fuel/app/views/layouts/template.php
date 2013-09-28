<!doctype html>
<html>

<?php echo View::forge('partials/head',array('title' => $title)) ?> 


  <body class="theme-satblue" data-layout-sidebar="fixed" data-layout-topbar="fixed">
  
    <?php echo View::forge('partials/top_nav') ?>

    <?php echo View::forge('partials/sidebar') ?> 

    
    <div id="main">
      <div class="container-fluid">
        <!-- <div class="page-header">
           <div class="pull-left">
            <h1><?php // echo $title; ?></h1>
          </div> 
           <div class="pull-right">
            <ul class="minitiles">
              <li class='grey'>
                <a href="#"><i class="icon-cogs"></i></a>
              </li>
              <li class='lightgrey'>
                <a href="#"><i class="icon-globe"></i></a>
              </li>
            </ul>
            <ul class="stats">
              <li class='satgreen'>
                <i class="icon-money"></i>
                <div class="details">
                  <span class="big">$324,12</span>
                  <span>Balance</span>
                </div>
              </li>
              <li class='lightred'>
                <i class="icon-calendar"></i>
                <div class="details">
                  <span class="big">February 22, 2013</span>
                  <span>Wednesday, 13:56</span>
                </div>
              </li>
            </ul>
          </div> 
        </div> -->
          <?php if (Session::get_flash('success')): ?>
              <div class="alert alert-success ">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <p>
                <?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
                </p>
              </div>
          <?php endif; ?>
          <?php if (Session::get_flash('error')): ?>
                  <div class="alert alert-error">
                  <button type="button" class="close" data-dismiss="alert">x</button>
                    <p>
                    <?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
                    </p>
    
                  </div>
          <?php endif; ?>
          

        <div class="row-fluid">
          <div class="span12">
            <div class="box">
              
              <div class="box-content">
                <?php echo $content; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div></div>
    

    <?php echo Asset::js("custom.js");?>
  </body>
</html>

