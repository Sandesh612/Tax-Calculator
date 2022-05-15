<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?>

<body background="image/background.jpg" class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card">
      <div class="login-logo">
        <h1>Login</h1>
      </div>
      <div class="card-body login-card-body">
        <form action="" id="login-form">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" required placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" required placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->

            <button type="submit" class="form__button2">Login</button>

            <!-- /.col -->
          </div>
          <div class="row">
            <!-- /.col -->
            <button onclick="location.href='../Main Page/Home.php'" type="button" class="form__button2">
              Cancel
            </button>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <style>
    .form__button2 {
      width: 50%;
      padding: 0.5rem 2rem;
      font-weight: bold;
      font-size: 1.1rem;
      color: #ffffff;
      border: none;
      border-radius: var(--border-radius);
      outline: none;
      cursor: pointer;
      background: green;

      margin-top: 10px;
    }
  </style>
  <!-- /.login-box -->
  <script>
    $(document).ready(function() {
      $('#login-form').submit(function(e) {
        e.preventDefault()
        start_load()
        if ($(this).find('.alert-danger').length > 0)
          $(this).find('.alert-danger').remove();
        $.ajax({
          url: 'ajax.php?action=login',
          method: 'POST',
          data: $(this).serialize(),
          error: err => {
            console.log(err)
            end_load();

          },
          success: function(resp) {
            if (resp == 1) {
              location.href = 'index.php?page=home';
            } else {
              $('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
              end_load();
            }
          }
        })
      })
    })
  </script>
  <?php include 'footer.php' ?>

</body>

</html>