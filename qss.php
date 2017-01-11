<!DOCTYPE html> 
<html>
  <head>
    <!--[if IE]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <title>N Jobs|Live the dream</title> 

      <link href='https://fonts.googleapis.com/css?family=Josefin+Sans|Source+Sans+Pro' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/css_font/css/font-awesome.min.css">
      <link rel="stylesheet" href="slider/dist/skippr.css">
      <link href="css/main.css" rel="stylesheet" type="text/css"/> 
  </head>
  <body style="height: 100%;">
    <header id="mainHeader">
      <?php 
        include("includes/head_content.php");
      ?>
    </header> 
    <div class="sectTitleWrap">
      <p class="sectTitle" style="font-size: 24px;">Quick Services</p>
      <p class="sectTitle_mini"  style="font-size: 13px; letter-spacing: 0px;">Your choice transactions available <span class="green">FAST</span> at the tips of your fingers.</p>
    </div>
    <div class="sectWrap" style="position: fixed; top: 200px;">
      <div class="sectInnerWrap">
      <form id="frmQss" method="post" enctype="application/x-www-form-urlencoded" action="qssroller.php">
        <input class="" type="number" name="rn" required placeholder="Input phone number you want to recharge">
        <input type="hidden" name="ta" required value="000000000000000::::::::::::11111111111111">
        <select class="field-style" required class="myFormx" name="cas">
          <option value="" selected="selected">Select A Network</option>
          <option value="01" >MTN</option>
          <option value="02" >GLO</option>
          <option value="03" >AIRTEL</option>
          <option value="04" >ETISALAT</option>
        </select>
        <input type="number" class="field-style"  required name="ama" required placeholder="Input amount">
        <input type="email" class="field-style" required name="emA" required placeholder="Input Email">
        <input type="password" class="field-style" name="Wap" required placeholder="Input Password">
        <input type="hidden" class="field-style" name="tra" required value="qss:fa0df13c4933be4108c7714769b">
        <input type="hidden" class="field-style" name="traieieeeeeeeeeee" required value="*************s:fa0df13c4">
        <input type="hidden" class="field-style" name="trahdhdgdh" required placeholder="010101****0101">      <br>
        <div style="display: block;">
          <button class="btn button2">BUY</button>
          <button class="btn button2">BUY</button>
          <button class="btn button2">BUY</button>
        </div>
      </form>
      </div>
    <footer id="footerMainWrap" class="sectWrap" style="bottom: 0px; position: fixed;">
      <div style="width: 100%; background: #111111; margin-top: 20px; padding: 10px 0px;">
        <div class="sectInnerWrap" style="min-height: 10px; font-size: 12px; color: #3d3d3d; padding: 10px 0px; position: relative;">
          <p style="position: absolute; left: 0px;">Copyrights <span style="font-weight: bold; color: #b8e351;">Nmobile</span> 2016. All rights reserved.</p>
        </div>
      </div>
    </footer>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('#topMenuICO').on('click', function(){
          var e = document.getElementById('main_menu');

          if(e.style.display == 'block')
            e.style.display = 'none';
          else
            e.style.display = 'block';
          return false;
        });
      });
    </script>
  </body>
</html>
