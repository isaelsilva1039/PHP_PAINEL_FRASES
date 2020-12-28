<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="styles.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section class="login-block">
  <div class="container">
    <div class="row">
      <div class="col-md-4 login-sec">
        <h2 class="text-center">Login Now</h2>
        <form class="login-form" method="POST" action="painel-adm/controle/recebe_login.php">
          <div class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase">Email</label>
            <input type="text" name="email" class="form-control" placeholder="E-Mail">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
            <input type="password" name="senha" class="form-control" placeholder="Senha">
          </div>


          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              <small>Relembra Me</small>
            </label>
            <button type="submit" class="btn btn-login float-right">Entrar</button>
          </div>
          <?php
          
          if ($_GET == null ) {
          } else {
            
            if (!empty($_GET['login'] == 'erro') || isset($_GET['login'])  || !empty($_GET)  || $_GET['login'] != 'sim'  ){?>
                  <br><br><br>
                <div class="msg" style="background: red; color: white; border-radius: 20px" >Ops ! Email ou senha Incoreto</div>
            <?php 
            }
          }
          ?>
        </form>
        <div class="copy-text">Created with <i class="fa fa-heart"></i> by Grafreez</div>
      </div>
      <div class="col-md-8 banner-sec">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>This is Heaven</h2>
                  <p>Quer bota em pratica suas ideias de frases e de poesias. Vem comigo</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>This is Heaven</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>This is Heaven</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
</section>