
<?php
$con= mysqli_connect("localhost","root","password","mydb") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' "); 
?>

<?php
$con= mysqli_connect("localhost","root","password","mydb") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' "); 
?>
<style >
*{
  box-sizing:border-box;
  -moz-box-sizing:border-box;
  -webkit-box-sizing:border-box;
  font-family:arial;
}
body{background:url("http://www.galaxiastudio.com/wp-content/uploads/2014/03/2252.jpg")}
h1{
  color:#AAA173;
  text-align:center;
  font-faimly:icon;
}

.login-form{
  width:350px;
  padding:40px 30px;
  background:rgba(235,235,205,0.7);
  border-radius:4px;
  -moz-border-radius:4px;
  -webkit-border-radius:4px;
  margin:50px auto;
}
.form-group{
  position: relative;
  margin-bottom:15px;
}
.form-control{
  width:100%;
  height:50px;
  border:none;
  padding:5px 7px 5px 15px;
  background:#fff;
  color:#666;
  border:2px solid #E0D68F;
  border-radius:4px;
  -moz-border-radius:4px;
  -webkit-border-radius:4px;
}
.form-control:focus, .form-control:focus + .fa{
  border-color:#10CE88;
  color:#10CE88;
}
.form-group .fa{
  position: absolute;
  right:15px;
  top:17px;
  color:#999;
}
.log-status.wrong-entry {
  -webkit-animation: wrong-log 0.3s;
  -moz-animation: wrong-log 0.3s;
  -ms-animation: wrong-log 0.3s;
  animation: wrong-log 0.3s;
}
.log-status.wrong-entry .form-control, .wrong-entry .form-control + .fa {
  border-color: #ed1c24;
  color: #ed1c24;
}
@keyframes wrong-log {
  0% { left: 0px;}
  20% {left: 15px;}
  40% {left: -15px;}
  60% {left: 15px;}
  80% {left: -15px;}
  100% {left: 0px;}
}
@-ms-keyframes wrong-log {
  0% { left: 0px;}
  20% {left: 15px;}
  40% {left: -15px;}
  60% {left: 15px;}
  80% {left: -15px;}
  100% {left: 0px;}
}
@-moz-keyframes wrong-log {
  0% { left: 0px;}
  20% {left: 15px;}
  40% {left: -15px;}
  60% {left: 15px;}
  80% {left: -15px;}
  100% {left: 0px;}
}
@-webkit-keyframes wrong-log {
  0% { left: 0px;}
  20% {left: 15px;}
  40% {left: -15px;}
  60% {left: 15px;}
  80% {left: -15px;}
  100% {left: 0px;}
}
.log-btn{
  background:#0AC986;
  dispaly:inline-block;
  width:100%;
  font-size:16px;
  height:50px;
  color:#fff;
  text-decoration:none;
  border:none;
  border-radius:4px;
  -moz-border-radius:4px;
  -webkit-border-radius:4px;
}

.link{
  text-decoration:none;
  color:#9D8E79;
  display:block;
  text-align:right;
  font-size:12px;
  margin-bottom:15px;
}
.link:hover{
  text-decoration:underline;
  color:#8C918F;
}
.alert{
  display:none;
  font-size:12px;
  color:#f00;
  float:left;
}


</style></head><body>
        <!-- LOGIN MODULE -->
        
        <div class="login-form">
            <h1>Login</h1>
            <div class="form-group ">
              <input type="text" class="form-control" placeholder="Username " id="Username">
              <i class="fa fa-user"></i>
            </div>
            <div class="form-group log-status">
              <input type="password" class="form-control" placeholder="Password" id="Password">
              <i class="fa fa-lock"></i>
            </div>
             <span class="alert">Invalid Credentials</span>
            
            <button type="button" class="log-btn" >Log in</button>
            
           
          </div>
       
       
       <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  
<script >/* LOGIN - MAIN.JS - dp 2017 */
  $(document).ready(function(){
        $('.log-btn').click(function(){
            $('.log-status').addClass('wrong-entry');
           $('.alert').fadeIn(500);
           setTimeout( "$('.alert').fadeOut(1500);",3000 );
        });
        $('.form-control').keypress(function(){
            $('.log-status').removeClass('wrong-entry');
        });

    });

</script>
</body></html>