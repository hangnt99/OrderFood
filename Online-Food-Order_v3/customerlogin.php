    <?php
include('login_u.php'); 

if(isset($_SESSION['login_user2'])){
header("location: foodlist.php"); 
}
?>

<!DOCTYPE html>
<html>

  <head>
    <title> Guest Login | Le Cafe' </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type = "text/css" href ="css/managerlogin.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>

    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Le Cafe'</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Trang chủ</a></li>
       
            <li><a href="contactus.php">Liên hệ</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Đăng ký <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Đăng ký</a></li>
              <li> <a href="managersignup.php"> Manager Đăng ký</a></li>
      
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Đăng nhập</a></li>
              <li> <a href="managerlogin.php"> Manager Đăng nhập</a></li>
   
            </ul>
            </li>
          </ul>
        </div>

      </div>
    </nav>
    <div>
    <div style="text-align: center;background-color: #eee;margin-left: 300px;margin-right: 300px;border-radius: 25px;padding: 10px;" >
    <h1 style="font-size: 40px;">Chào mừng bạn đến với </h1>
     <h1 style="font-size: 50px;"><span class="edit"> Le Cafe' </span></h1>
        <p style="font-size: 15px;"><i>Đăng nhập để tiếp tục.</i></p>
      </div>

      <div>
            <div style="margin-left: 500px;margin-right: 500px;" >
              <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
              <div class="panel panel-primary">
                <div class="panel-heading"> Đăng nhập </div>
                  <div class="panel-body">
                    <form action="" method="POST">
                      <div class="row">
                        <div class="form-group col-xs-12">
                          <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Tên đăng nhập: </label>
                          <div class="input-group">
                            <input class="form-control" id="username" type="text" name="username" placeholder="" required="" autofocus="">
                            <span class="input-group-btn">
                               <label class="btn btn-primary">
                                  <span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                                  </span>
                            </span>
                          </div>           
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="form-group col-xs-12">
                          <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Mật khẩu: </label>
                          <div class="input-group">
                            <input class="form-control" id="password" type="password" name="password" placeholder="" required="">
                            <span class="input-group-btn">
                            <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
                            </span>
                          </div>           
                        </div>
                      </div>
                      <br>
                      <div style="text-align: center;">
                          <button style="t"class="btn btn-primary" name="submit" type="submit" value=" Login ">Xác nhận</button>
                          <br><br>
                          <label >hoặc</label> <br>
                          <label><a href="customersignup.php">Tạo tài khoản mới.</a></label>
                      </div>
                    </form>
                  </div>  
                </div>
              </div>  
            </div>      
        </div>
  </div>
</body>
</html>