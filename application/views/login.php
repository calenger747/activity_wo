<!DOCTYPE html>
<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Quixlab - Login</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="<?php echo base_url();?>assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="<?php echo base_url();?>assets/images/favicon.png" rel="shortcut icon" />
</head>

</head>
<body class="bg-light-gray" id="body">
    <div class="container d-flex flex-column justify-content-between vh-100">
      <div class="row justify-content-center mt-5">
        <div class="col-xl-5 col-lg-6 col-md-10">
          <div class="card">
            <div class="card-header bg-primary">
              <div class="app-brand">
                <a href="<?php echo base_url(); ?>Login">
                  <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33"
                    viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                      <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                      <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                  </svg>
                  <span class="brand-name">Login User</span>
                </a>
              </div>
            </div>
            <div class="card-body p-5">
              <h4 class="text-dark mb-4">Sign In</h4>
              <div id="responseDiv" class="alert text-center" style="display:none;">
                <button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
                <span id="message"></span>
              </div>
              <form id="logForm">
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input type="text" class="form-control input-lg" name="nip" id="username" aria-describedby="emailHelp" placeholder="Username">
                  </div>
                  <div class="form-group col-md-12 ">
                    <input type="password" class="form-control input-lg" name="pass" id="password" placeholder="Password">
                  </div>
                  <div class="col-md-12">
                    <button type="submit" name="login" class="btn btn-lg btn-primary btn-block mb-4"><span id="logText"></span></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright pl-0">
        <p class="text-center">
          &copy; 2019 Copyright Sleek Dashboard Bootstrap Template
        </p>
      </div>
    </div>
</body>
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#logText').html('Sign In');
    $('#logForm').submit(function(e){
      e.preventDefault();
      $('#logText').html('Checking ...');
      var url = '<?php echo base_url(); ?>';
      var user = $('#logForm').serialize();
      var login = function(){
        $.ajax({
          type: 'POST',
          url: url + 'Login/auth_login',
          dataType: 'json',
          data: user,
          success:function(response){
            $('#message').html(response.message);
            $('#logText').html('Login');
            if(response.error){
              $('#responseDiv').removeClass('alert-success').addClass('alert-danger').show();
            }
            else{
              $('#responseDiv').removeClass('alert-danger').addClass('alert-success').show();
              $('#logForm')[0].reset();
              setTimeout(function(){
                location.reload();
              }, 2000);
            }
          }
        });
      };
      setTimeout(login, 1000);
    });

    $(document).on('click', '#clearMsg', function(){
      $('#responseDiv').hide();
    });
  });
</script>
</html>