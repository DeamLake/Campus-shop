
<!doctype html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>登录</title>

    <link rel="stylesheet" href="/libs/bootstrap/css/bootstrap.min.css">
    <script src="/libs/jquery-3.4.0.min.js"></script>
    <script src="/libs/bootstrap/js/bootstrap.min.js"></script>
    
    <style>
      .reg-bar { width: 300px; margin: 20px auto 0; font-size: 14px; overflow: hidden;}
        .reg-bar a { color: #222; text-decoration: none; }
        .reg-bar a:hover { text-decoration: underline; }
        .reg-bar .reg { float: left; }
        .reg-bar .forget { float: right; }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div id="Layer1" style="position:absolute; width:100%; height:100%; z-index:-1">    
       <img src="/images/back.jpg" height="100%" width="100%"/>    
    </div>
    <form class="form-signin" action="index.php?r=login/do_login" method="post">
      <img class="mb-4" src="/images/headphoto.png" alt="" width="108" height="108">
      <h1 class="h3 mb-3 font-weight-normal">用户登录</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input name="userId" type="text" id="inputEmail" class="form-control" placeholder="Id" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
      <div class="reg-bar mb-3">
            <a class="reg" href="index.php?r=login/go_to_regist">立即注册</a>
            <a class="forget" href="javascript:">忘记密码</a>
        </div>
      <p class="mt-5 mb-3 text-muted">&copy; 2020</p>

    </form>
</body>
</html>
