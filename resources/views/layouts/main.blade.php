<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" class="css">
    <title>@yield('title')</title>
  </head>
  <body>


    <div class="container-fluid">
            <!----header-->
        <div class="row">
            <div class="col-md-12 bg-primary py-5"> 
            <div class="dropdown float-right">
            <div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="bi bi-file-earmark-person-fill"></i> USER
  </button>
  <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="#"> {{Auth::user()->name ?? "" }}</a>
    <a class="dropdown-item" href="/user"> Ubah Password </a>
    <a class="dropdown-item" href="/logout" >logout</a>
  </div>
</div>
</div>
            </div>
        </div>
    </div>

      <!--Konten/Body-->
<div class="row">
    <div class="col-md-2">
        <div class="row mt-4">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link {{ $key == "home" ? "active" : "" }}" id="v-pills-home-tab" href="/home">Home</a>
                    <a class="nav-link {{ $key == "movies" ? "active" : "" }}" id="v-pills-profile-tab" href="/movies">Penjualan</a>
                    <a class="nav-link" id="v-pills-messages-tab" href="#">Messages</a>
                    <a class="nav-link" id="v-pills-settings-tab" href="#">Settings</a>
                </div>
            </div>
        </div>
    </div>

            
        <!---Artikel-->
        <div class="col-md-10">
            <div class="card mt-">
                <div class="card-header">DUTA BUKU</div>
                <div class="card-body">
                    DUTABUKU_575
                    @yield('artikel')
                      </div>
                </div>

                
            </div>
        </div>


        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js">
    </script>
    <script>
      new DataTable('#example');
    </script>
  </body>
</html>