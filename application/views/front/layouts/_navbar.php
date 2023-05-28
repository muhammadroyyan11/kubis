<nav class="navbar navbar-light navbar-expand-lg navbar-light bg-light fixed-top home">
   <div class="container">
      <a class="d-flex w-50" href="<?= site_url('home') ?>">
         <img src="<?= base_url() ?>assets/img/logo.png" width="140" height="65" class="d-inline-block align-top" alt="" style="">
         <!-- <h3>Kubis</h3> -->
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
         <ul class="navbar-nav w-100 justify-content-center">
            <li class="nav-item">
               <a class="nav-link" href="<?= site_url('home') ?>">Home</a>
            </li>
            <?php
            foreach ($category as $key => $data) { ?>
               <li class="nav-item">
                  <a class="nav-link" href="<?= site_url('blog/category/$data->slug') ?>"><?= $data->nama_kategori ?></a>
               </li>
            <?php } ?>
            <!-- <li class="nav-item">
               <a class="nav-link" href="<?= site_url('blog') ?>">Berita</a>
            </li> -->
            <!-- <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Kategori
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <?php
                  foreach ($category as $key => $data) { ?>
                     <a class="dropdown-item" href="<?= site_url("blog/category/$data->slug") ?>"><?= $data->nama_kategori ?></a>
                  <?php } ?>
               </div>
            </li> -->
            <li class="nav-item">
               <a class="nav-link" href="<?= site_url('contact') ?>">About</a>
            </li>
         </ul>
         <div class="custom-control custom-switch mr-5">
         </div>
         <!-- <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
            <?php
            foreach ($sosmed as $key => $data) { ?>
               <li class="nav-item">
                  <a class="nav-link" href="<?= $data->link ?>" target="_blank">
                     <i class="fa <?= $data->icon ?>"></i>
                  </a>
               </li>
            <?php }
            ?>
         </ul> -->
         <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
            <!-- <form class="form-inline"> -->
            <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="id_berita" autocomplete="off"> -->
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></i></button>
            <!-- </form> -->
            <script>
               $(function() {
                  var availableTutorials = [
                     "ActionScript",
                     "Bootstrap",
                     "C",
                     "C++",
                  ];
                  $("#id_berita").autocomplete({
                     source: availableTutorials
                  });
               });
            </script>
         </ul>


      </div>
   </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <input type="text" placeholder="search here" name="" id="" autofocus>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            Search Suggest
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
         </div>
      </div>
   </div>
</div>