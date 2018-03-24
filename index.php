<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="node_modules/bootstrap3/dist/js/bootstrap.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <title>flowingo.com</title>
  </head>
  <body class="color-page">
    <div class="container-fluid">
      <header>
        <div class="row">
          <div class="col-lg-12 header">
            <div class="container">
              <button type="button" class="btn btn-info btn-lg">Open Modal</button>
              <ul class="list-inline pull-right header-authorization">
                <li><a href="#" data-toggle="modal" data-target="#Modal-authorization"><i class="fa fa-lock width" aria-hidden="true"></i>вход</a></li>
                <li><a href="#" data-toggle="modal" data-target="#Modal-registration"><i class="fa fa-pencil width" aria-hidden="true"></i>регистрация</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-4 col-xs-8">
                  <img class="logo" src="src/basic-pic/log.png" alt="Log">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-8 hidden-xs">
                  <ul class="list-inline number">
                    <li><img  src="/src/operator/life.png" alt="">093 55 55 555</li>
                    <li><img class="mb-3" src="/src/operator/kievstar.png" alt="">067 77 77 777</li>
                    <li><img  src="/src/operator/mtc.png" alt="">099 99 99 999</li>
                  </ul>
                  <form class="pull-right feedback" action="" method="post">
                    <label for="call">Обраный звонок:</label>
                    <input type="text" id="call" placeholder="введите номер">
                    <button type="button" name="button"><i class="fa fa-phone" aria-hidden="true"></i></button>
                  </form>
                </div>
                <div class="col-lg-2 col-md-2 hidden-sm col-xs-4">
                  <ul class="list-unstyled work-time">
                    <li>часы работы</li>
                    <li>c 8:00 до 20:00</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 hidden-xs undulating">
            <ul class="list-inline text-center">
              <li><a href="#">О нас</a></li>
              <li><a href="#">Цветы</a></li>
              <li><a href="#">Доставка</a></li>
              <li><a href="#">Оплата</a></li>
              <li><a href="#">Вопросы</a></li>
              <li><a href="#">Контакты</a></li>
            </ul>
          </div>
        </div>
      </header>
      <main class="mt-25">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="src/basic-pic/slid.jpg" alt="slid_1" style="width:100%;">
                  </div>
                  <div class="item">
                    <img src="src/basic-pic/slid.jpg" alt="slid_2" style="width:100%;">
                  </div>
                  <div class="item">
                    <img src="src/basic-pic/slid.jpg" alt="slid_3" style="width:100%;">
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <p class="text-center offers">Лучшие предложения</p>
            </div>
          </div>
          <div class="row products">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-2 goods">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p>
                        <img class="flowing-about-first" src="src/goods/1.png" alt="goods_1">
                      </p>
                    </div>
                  </div>
                  <div class="row mt-20">
                    <div class="col-lg-7 vertical-align-price">
                      <p>Сияние</p>
                      <p>50грн.</p>
                    </div>
                    <div class="col-lg-5 text-center">
                      <button type="button" name="button" class="buy">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 goods">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p>
                        <img class="flowing-img" src="src/goods/2.png" alt="goods_2">
                      </p>
                    </div>
                  </div>
                  <div class="row mt-10">
                    <div class="col-lg-7 vertical-align-price">
                      <p>Лето</p>
                      <p>70грн.</p>
                    </div>
                    <div class="col-lg-5 text-center">
                      <button type="button" name="button" class="buy">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 goods">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p>
                        <img class="flowing-img" src="src/goods/3.png" alt="goods_3">
                      </p>
                    </div>
                  </div>
                  <div class="row mt-10">
                    <div class="col-lg-7 vertical-align-price">
                      <p>Гранд при</p>
                      <p>170грн.</p>
                    </div>
                    <div class="col-lg-5 text-center ">
                      <button type="button" name="button" class="buy">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 goods">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p>
                        <img class="flowing-img" src="src/goods/4.png" alt="goods_4">
                      </p>
                    </div>
                  </div>
                  <div class="row mt-10">
                    <div class="col-lg-7 vertical-align-price">
                      <p>Бабочка</p>
                      <p>30грн.</p>
                    </div>
                    <div class="col-lg-5 text-center">
                      <button type="button" name="button" class="buy">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row products">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-3 goods">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p class="">
                        <img class="flowing-about-first" src="src/goods/1.png" alt="goods_1">
                      </p>
                    </div>
                  </div>
                  <div class="row mt-20">
                    <div class="col-lg-7 vertical-align-price">
                      <p>Сияние</p>
                      <p>50грн.</p>
                    </div>
                    <div class="col-lg-5 text-center">
                      <button type="button" name="button" class="buy">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 goods">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p>
                        <img class="flowing-img" src="src/goods/2.png" alt="goods_2">
                      </p>
                    </div>
                  </div>
                  <div class="row mt-10">
                    <div class="col-lg-7 vertical-align-price">
                      <p>Летp</p>
                      <p>70грн.</p>
                    </div>
                    <div class="col-lg-5 text-center">
                      <button type="button" name="button" class="buy">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 goods">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p>
                        <img class="flowing-img" src="src/goods/3.png" alt="goods_3">
                      </p>
                    </div>
                  </div>
                  <div class="row mt-10">
                    <div class="col-lg-7 vertical-align-price">
                      <p>Гранд при</p>
                      <p>170грн.</p>
                    </div>
                    <div class="col-lg-5 text-center ">
                      <button type="button" name="button" class="buy">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 goods">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p>
                        <img class="flowing-img" src="src/goods/4.png" alt="goods_4">
                      </p>
                    </div>
                  </div>
                  <div class="row mt-10">
                    <div class="col-lg-7 vertical-align-price">
                      <p>Бабочка</p>
                      <p>30грн.</p>
                    </div>
                    <div class="col-lg-5 text-center ">
                      <button type="button" name="button" class="buy">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <p class="text-center offers">Новости</p>
            </div>
          </div>
          <!--Должна быть вертикальная каретка!  -->
          <div class="row">
            <div class="col-lg-9">
              <div class="row align-news">
                <div class="col-lg-1">
                  <span>
                    <img src="src/news/news1.png" alt="avatar">
                  </span>
                </div>
                <div class="col-lg-8">
                  <ul class="list-unstyled news-inf">
                    <li class="news-h1"><strong>Lorem ipsum dolor sit amet!</strong></li>
                    <li class="news-data">8.08.2014</li>
                  </ul>
                </div>
              </div>
              <div class="row align-news">
                <div class="col-lg-1">
                  <span>
                    <img class="news" src="src/news/news2.png" alt="avatar">
                  </span>
                </div>
                <div class="col-lg-8">
                  <ul class="list-unstyled news-inf">
                    <li class="news-h1"><strong>Dolor sit amet!</strong></li>
                    <li class="news-data">8.08.2014</li>
                    <li class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <img class="pull-right mt-10"src="src/social-net/vk.png" alt="VK_share">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <p class="text-center offers">О нас</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <p>Lorem ipsum operator/dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur  adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </main>
      <footer>
        <div class="row footer">
          <div class="col-lg-12">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <span><img class="icon-vk" src="/src/social-net/vkk.png" alt="VK"></span>
                  <span><img class="mt-13" src="/src/social-net/fcc.png" alt="FB"></span>
                  <span class="reserved"><strong>Flowingo 2018 all rights reserved</strong></span>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 hidden-xs about-us-footer">
                  <ul class="list-inline text-center">
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Цветы</a></li>
                    <li><a href="#">Доставка</a></li>
                    <li><a href="#">Оплата</a></li>
                    <li><a href="#">Вопросы</a></li>
                    <li><a href="#">Контакты</a></li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <p class="footer-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <!-- Modal content-->
                  <!-- Modal -->
<div id="Modal-authorization" class="modal fade" role="dialog">
  <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Авторизация</h4>
     </div>
     <div class="modal-body">
       <!-- <p>Авторизация</p> -->
         <div class="row">
          <div class="col-lg-6  center-authorization">
            <form class="" action="actions/auth.php" method="post">
              <div class="input-group group-authorization">
                <span class="input-group-btn">
                  <label for="login" class="btn btn-default" for="login" type="button"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
                </span>
                <input id="login" name="login" type="text" class="form-control" placeholder="Введите логин">
              </div><!-- /input-group -->
            <div class="input-group group-authorization">
              <span class="input-group-btn">
                <label for="password" class="btn btn-default" for="login" type="button"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
              </span>
              <input id="password" name="password" type="password" class="form-control" placeholder="Введите пароль">
            </div><!-- /input-group -->
            <button class="btn btn-default  btn-enter-account" type="submit">Авторизоваться</button>
          </form>
          </div><!-- /.col-lg-6 -->
       </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
     </div>
   </div>

 </div>
</div>
                </div>

                <!--second modal  -->
<div id="Modal-registration" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Регистрация</h4>
      </div>
        <div class="modal-body">
        <!-- <p>Регистрация</p> -->
          <div class="row">
            <div class="col-lg-6  center-authorization">
              <form class="" action="actions/registration.php" method="post">
                <div class="input-group group-authorization">
                  <span class="input-group-btn">
                    <label for="login" class="btn btn-default" for="login" type="button"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
                  </span>
                  <input id="email" name="email" type="text" class="form-control" placeholder="Введите логин">
                </div><!-- /input-group -->
                <div class="input-group group-authorization">
                  <span class="input-group-btn">
                    <label for="password" class="btn btn-default" for="login" type="button"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
                  </span>
                  <input id="password" name="password" type="password" n class="form-control" placeholder="Введите пароль">
                </div><!-- /input-group -->
                <div class="input-group group-authorization">
                  <span class="input-group-btn">
                    <label for="confirm-password" class="btn btn-default" for="login" type="button"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
                  </span>
                  <input id="confirm_password" name="confirm_password" type="password" class="form-control" placeholder="Подтвердите пароль">
                </div>
                <button class="btn btn-default  btn-enter-account" type="submit">Зарегистрироваться</button>
              </form>
            </div><!-- /.col-lg-6 -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
</div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
