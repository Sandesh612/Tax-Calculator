<!-- Navbar -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="image/logo.PNG" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="css/calculate.css" />
    <!-- Load an icon library -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Tax Sansar</title>
    <script defer src="js/calculate.js"></script>
  </head>
  <body>
    <!-- Navigation section Start -->
    <nav class="navbar">
      <div class="logo">
        <a href="Main Page/Home.php">
          <img src="Main Page/image/logo.png" alt="logo of tax sansar" />
        </a>
      </div>
      <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>
      <div class="navbar-lists">
        <ul>
          <li>
            <a href="Main Page/Home.php"><i class="fa fa-fw fa-home"></i>Home</a>
          </li>
          <li>
            <a href="index.php"><i class="fa fa-newspaper-o"></i> News</a>
          </li>
          <li>
            <a href="admin/login.php"><i class="fa fa-fw fa-user"></i>Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </body>
</html>  
  <style>
    * {
  box-sizing: border-box;
}
body {
  margin: 0;
  padding: 0;
  background-color: rgba(225, 224, 224, 0.783);
}
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: rgb(255, 255, 255);
  color: white;
  font-family: Arial, Helvetica, sans-serif;
}
.logo a {
  display: flex;
  height: 80px;
  width: 100px;
}
.navbar-lists ul {
  margin: 0;
  padding: 0;
  display: flex;
}
.navbar-lists li {
  list-style: none;
}
.navbar-lists li a {
  text-decoration: none;
  color: rgb(0, 0, 0);
  padding: 1rem;
  display: block;
}
.navbar-lists li:hover {
  background-color: rgb(32, 211, 95);
}

.toggle-button {
  position: absolute;
  top: 1.3rem;
  right: 1rem;
  display: none;
  flex-direction: column;
  justify-content: space-between;
  width: 30px;
  height: 21px;
}
.toggle-button .bar {
  height: 3px;
  width: 100%;
  background-color: rgb(0, 0, 0);
  border-radius: 10px;
}
@media (max-width: 500px) {
  .toggle-button {
    display: flex;
  }
  .navbar-lists {
    display: none;
    width: 100%;
  }
  .navbar {
    flex-direction: column;
    align-items: flex-start;
  }
  .navbar-lists ul {
    width: 100%;
    flex-direction: column;
    background-color: rgba(35, 88, 114, 0.062);
  }
  .navbar-lists li {
    text-align: center;
    border-top: 1px solid rgba(169, 162, 162, 0.4);
  }
  .navbar-lists li a {
    padding: 0.5rem 1rem;
  }
  .navbar-lists.active {
    display: flex;
  }
}

     .cart-img {
          width: calc(25%);
          max-height: 13vh;
          overflow: hidden;
          padding:0px ;
      }
      .cart-img img{
        width: 100%;
      }
      .cart-qty {
        font-size: 14px
      }

  </style>
  <!-- /.navbar -->

