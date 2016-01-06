<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>GPortfolio</title>

  <!--bootstrap-->
  <link href="{{ asset('/public/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>

  <!--font awesome-->
  <link href="{{ asset('/public/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"/>

  <!--stylesheet-->
  <link href="{{ asset('/public/assets/css/mainstyle.css') }}" rel="stylesheet"/>
</head>
<body>

  <!--main wrapper-->
  <div class="main-wrapper">

    <!--header-->
    <header class="header-cover">
      <div class="container">
        <div class="header-inner">
          <h1>Hai, nama saya <span class="text-color-primary">Pri Anton Subardio</span>.</h1>
          <h1>Semacam <strong>web programmer</strong> asli Purwokerto.</h1>
        </div>
      </div>

      <div class="button-area">
        <a href="#"><i class="fa fa-angle-down"></i></a>
      </div>
    </header>
    <!--end: header-->
    <!--about-->
    <section class="about">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h2><strong class="text-color-primary">Lorem ipsum</strong> dolor sit amet</h2>

            <p>With respect, Master Wayne, perhaps this is a man that you don’t fully understand, either. A long time ago, I was in Burma. My friends and I were working for the local government. They were trying to buy the loyalty of tribal leaders by bribing them with precious stones. But their caravans were being raided in a forest north of Rangoon by a bandit. So we went looking for the stones. But in six months, we never met anyone who traded with him. One day, I saw a child playing with a ruby the size of a tangerine. The bandit had been throwing them away.</p>

            <p>Well, because he thought it was good sport. Because some men aren’t looking for anything logical, like money. They can’t be bought, bullied, reasoned, or negotiated with. Some men just want to watch the world burn.</p>
          </div>
        </div>
      </div>
    </section>
    <!--end: about-->
    <!--portfolio-->
    <section class="portfolio">
      <div class="container">
        <h2>My Work</h2>
        <div class="text-big text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
        <!--portfolio loop-->
        <div class="portfolio-loop">
          <div class="row">

            <div class="col-md-4 col-sm-6">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="{{ asset('/public/assets/img/portfolio_1.png') }}" class="thumb-img">
                  </div>
                  <div class="caption">
                    <div class="title">Lorem ipsum dolor sit amet</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 col-sm-6">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="{{ asset('/public/assets/img/portfolio_2.png') }}" class="thumb-img">
                  </div>
                  <div class="caption">
                    <div class="title">Lorem ipsum dolor sit amet</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 col-sm-6">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="{{ asset('/public/assets/img/portfolio_3.png') }}" class="thumb-img">
                  </div>
                  <div class="caption">
                    <div class="title">Lorem ipsum dolor sit amet</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 col-sm-6">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="{{ asset('/public/assets/img/portfolio_4.png') }}" class="thumb-img">
                  </div>
                  <div class="caption">
                    <div class="title">Lorem ipsum dolor sit amet</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 col-sm-6">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="{{ asset('/public/assets/img/portfolio_5.jpg') }}" class="thumb-img">
                  </div>
                  <div class="caption">
                    <div class="title">Lorem ipsum dolor sit amet</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4 col-sm-6">
              <a href="#">
                <div class="portfolio-item">
                  <div class="thumb">
                    <img src="{{ asset('/public/assets/img/portfolio_6.jpg') }}" class="thumb-img">
                  </div>
                  <div class="caption">
                    <div class="title">Lorem ipsum dolor sit amet</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>
        <!--end: portfolio loop-->

        <div class="portfolio-more text-center">
          <a href="#">[ MORE ]</a>
        </div>
      </div>
    </section>
    <!--end: portfolio-->
    <!--contact-->
    <section class="contact">
      <div class="container">
        <h2>GET <strong>CONNECTED</strong></h2>

        <div class="row">
          <div class="col-md-6">
            <div class="contact-social-media">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

              <div class="contact-item">
                <span class="fa fa-envelope fa-fw contact-icon"></span> contact@codepolitan.com
              </div>

              <div class="contact-item">
                <span class="fa fa-phone fa-fw contact-icon"></span> +62 8999 129 220
              </div>

              <div class="contact-item">
                <span class="fa fa-linkedin fa-fw contact-icon"</span>CodePolitan
              </div>

              <div class="contact-item">
                <span class="fa fa-facebook fa-fw contact-icon"></span> CodePolitan
              </div>

              <div class="contact-item">
                <span class="fa fa-twitter fa-fw contact-icon"></span> @CodePolitan
              </div>

              <div class="contact-item">
                <span class="fa fa-google-plus fa-fw contact-icon"></span> +CodePolitan
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <form class="contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email address">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="3" placeholder="Message"></textarea>
              </div>

              <button type="submit" class="btn btn-default btn-lg">SEND</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--end: contact-->
    <!--footer-->
    <footer class="footer">
      <div class="container">
        Copyright &copy; 2016 - All right reserved.
      </div>
    </footer>
  </div>
  <!--end: main wrapper-->

  <!--jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!--bootstrap js-->
  <script src="{{ asset('/public/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
