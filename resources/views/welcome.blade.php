<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Test COR</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
      <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>

      </header>

      <div class="app-body">
        <div class="sidebar">
          <nav class="sidebar-nav">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/') }}"><i class="icon-speedometer"></i> Dashboard <span class="badge badge-primary">TEST</span></a>
              </li>

            </ul>
          </nav>
          <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>

        <!-- Main content -->
        <main class="main">

          <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                          Sopa de Letra
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-12 col-lg-6">
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="callout callout-info">
                                    <strong class="h4">Entrada</strong>
                                    <div class="chart-wrapper">
                                      <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                    </div>
                                  </div>
                                </div>
                                <!--/.col-->
                              </div>
                              <!--/.row-->
                              <hr class="mt-0">
                              <textarea id="entrada" name="entrada" class="form-control" rows="10"></textarea>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="callout callout-info">
                                    <strong class="h4">Resultados</strong>
                                    <div class="chart-wrapper">
                                      <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                    </div>
                                  </div>
                                </div>
                                <!--/.col-->
                              </div>
                              <!--/.row-->
                              <hr class="mt-0">
                              <div id="response">
                                      
                              </div>
                              
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-12 text-center mt-4">
                                <button id="calcular" type="button" class="btn btn-primary btn-lg btn-block">Calcular</button>
                            </div>  
                          </div>

                        </div>
                      </div>
                    </div>
                    <!--/.col-->
                </div>
            </div>
          </div>
          <!-- /.conainer-fluid -->
        </main>

      </div>

      <footer class="app-footer">
        <span>Realizado por Daniel Guzman</span>
        <span class="ml-auto">Powered by <a href="http://coreui.io">CoreUI</a></span>
      </footer>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
