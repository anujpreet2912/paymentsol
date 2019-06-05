<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width-device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0 ">
<title>Paypal Integration Test</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style type="text/css">
  .container {margn-top:100px;
        padding:50px;}
  .list-group-items {padding:5px;}
  .list-group{list-style:none;}
  .price{font-size=72px;}
  .currency{font-size=72px; 
              position:relative; top=-30px;}
  .card{width:350px;}
  

</style>
</head>
<body>
<div class ="container">
   <div class="row justify-content-center">
      <div class="col-md-6 col-offset-6">
         <div class="card">
           <div class= "card-header text-center">
             <h3 class="price"><span class="currency">$</span></h3>
           </div>
            <div class="card-block text-center">
                <div class="card-title">
                   wordpress plugin
                </div>
                <ul class="list-group">
                  <li class="list-group-items"> Feature 1</li>
                  <li class="list-group-items"> Feature 2</li>
                  <li class="list-group-items"> Feature 3</li>
                  <li class="list-group-items"> Feature 4</li>
                  <li class="list-group-items"> Feature 5</li>
                  </ul>
                 </br>
               <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="GH6AAK8L88RJE">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>



            </div>
         </div>
      </div>
   </div>
</div>
</body>
</html>
<?php  ?>