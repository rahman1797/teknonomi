<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login Dashboard Admin Teknonomi</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('assets/ADM_TEMP/plugins/bootstrap/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('assets/ADM_TEMP/plugins/node-waves/waves.css')?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url('assets/ADM_TEMP/plugins/animate-css/animate.css')?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url('assets/ADM_TEMP/css/style.css')?>" rel="stylesheet">
</head>
<style type="text/css">
  body {
    background-image: url("../assets/ADM_TEMP/images/logback.jpg");
    background-size:     cover;
    background-repeat:   no-repeat;
  }
</style>
<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Login</a>
            <small>Teknonomi Admin Dashboard</small>

            <!-- <?PHP print_r($_SESSION); ?> -->

        </div>
        <div class="card">
            <div class="body">

              <!-- <form id="sign_in" method="POST" action="<?php echo base_url('ADM/sessLogin') ?>" name="loginForm"> -->
                <form id="sign_in" method="POST" onsubmit="return Login()" name="loginForm">
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username_user" id="username_user" placeholder="Username/email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <input type="submit" class="btn btn-block bg-blue waves-effect" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url('assets/ADM_TEMP/plugins/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('assets/ADM_TEMP/plugins/bootstrap/js/bootstrap.js')?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url('assets/ADM_TEMP/plugins/node-waves/waves.js')?>"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url('assets/ADM_TEMP/plugins/jquery-validation/jquery.validate.js')?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url('assets/ADM_TEMP/js/admin.js')?>"></script>
    <script src="<?php echo base_url('assets/ADM_TEMP/js/pages/examples/sign-in.js')?>"></script>

    <!-- Sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
  

  function Login()
  {
   var username = $("#username_user").val();
   var pass = $("#pass").val();
   
   if(username != "" && pass != "")
   { 
      $.ajax
      ({
        type:'post',
        url:"<?php echo base_url('ADM/sessLogin') ?>",
        data:{
            // postinput : var
            username_user:username, 
            pass:pass
        },
       
       success:function(response) {
        if(response == 'sukses')
        {
          swal({
            title: "Sukses!",
            text: "Selamat Datang!",
            icon: "success",
            button: "Lanjutkan!"
          }).then(function() {
              window.location = "index";
          });
          
        }
        
        else
        {
          
          swal ( "Maaf" ,  "username/password salah" ,  "error" );
        }
        
        }
      });
   }

   return false;
  }
</script>

</body>
