   <!--================ Home Banner Area =================-->
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <?php $no = 0; ?>
         <?php foreach ($featured as $f) : ?>
            <?php $no++;  ?>
            <div class="carousel-item <?php if ($no <= 1) {
                                          echo "active";
                                       } ?> ">
               <div class="row align-items-center my-5">
                  <div class="col-lg-8">
                     <img class="img-fluid mb-4 mb-lg-0" src="<?= base_url() ?>assets/uploads/file/<?= $f->gambar_name ?>" alt="" width="800" height="800">
                  </div>
                  <div class="col-lg-4">
                     <div class="container">
                        <div class="date text-center">
                           <a class="gad_btn" href="<?= base_url("blog/category/$f->slug") ?>"><?= $f->nama_kategori ?></a>
                           <a href="<?= base_url("blog/read/$f->seo_title") ?>"><i class="fa fa-calendar" aria-hidden="true"></i><?= mediumdate_indo($f->date) ?></a>
                        </div>
                        <h1 class="font-weight-light text-center"><?= $f->title ?></h1>
                        <p><?= character_limiter($f->konten, 200) ?></p>
                        <div class="row">
                           <div class="col text-center">
                              <a href="<?= base_url("blog/read/$f->seo_title") ?>" class="genric-btn danger circle arrow">Read More<span class="lnr lnr-arrow-right"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php endforeach ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </a>
   </div>
   <!--================ End Home Banner Area =================-->

   <!--================ Subscribe Area =================-->
   <hr>
   <!--================ End Subscribe Area =================-->

   <!--================ Choice Area =================-->
   <section class="choice_area mt-4">
      <div class="container">
         <div class="main_title2">
            <h2>Editor's Choice</h2>
         </div>
         <div class="row choice_inner">
            <?php foreach ($choice as $c) : ?>
               <div class="col-lg-3">
                  <div class="choice_item">
                     <img class="img-fluid choice" src="<?= base_url() ?>assets/uploads/file/<?= $c->gambar_name ?>" alt="">
                     <div class="choice_text">
                        <div class="date">
                           <a class="gad_btn" href="<?= base_url("blog/category/$c->slug") ?>"><?= $c->nama_kategori ?></a>
                           <a href="<?= base_url("blog/read/$c->seo_title") ?>" class="float-right">
                              <i class="fa fa-calendar" aria-hidden="true"></i><?= mediumdate_indo($c->date) ?>
                           </a>
                        </div>
                        <a href="<?= base_url("blog/read/$c->seo_title") ?>">
                           <h4><?= $c->title ?></h4>
                        </a>
                        <p><?= character_limiter($c->konten, 70) ?></p>
                     </div>
                  </div>
               </div>
            <?php endforeach ?>
         </div>
      </div>
   </section>
   <!--================End Choice Area =================-->

   <!--================News Area =================-->
   <section class="news_area mt-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-8">

               <!-- Last News -->
               <div class="main_title2">
                  <h2>Last News</h2>
               </div>
               <div class="magazine-view">
                  <?php foreach ($lastNews as $ln) : ?>
                     <div class='fbt_magazine-blog-post fbt-index-post row align-items-center justify-content-between'>
                        <div class='col-xl-6 col-md-5'>
                           <div class='fbt-post-thumbnail'>
                              <a href='#'>
                                 <img alt='<?= $ln->title ?>' class='post-thumbnail lazyloaded' src='<?= base_url() ?>assets/uploads/file/<?= $ln->gambar_name ?>'>
                              </a>
                           </div>
                        </div>
                        <div class='col-xl-6 col-md-7'>
                           <div class='fbt-post-caption mt-3 mt-md-0'>
                              <a href="<?= base_url("blog/category/$ln->slug") ?>" class="gad_btn">Komunitas</a>
                              <div class="choice_text">
                                 <a href='<?= base_url("blog/read/$ln->seo_title") ?>'>
                                    <h4><?= $ln->title ?></h4>
                                 </a>
                              </div>
                              <div class='post-meta mb-2'>
                                 <span class='post-author'><?= $ln->nama_lengkap ?></span> - 
                                 <span class='post-date published'><?= mediumdate_indo($ln->date) ?></span>
                              </div>
                              <p class='post-excerpt'>
                              <p><?= character_limiter($ln->konten, 100) ?></p>
                              </p>
                           </div>
                        </div>
                     </div>
                  <?php endforeach ?>
               </div>
               <!-- <div class="latest_news">
                  <?php foreach ($lastNews as $ln) : ?>
                     <div class="media">
                        <div class="d-flex">
                           <img class="img-fluid" src="<?= base_url() ?>assets/uploads/file/<?= $ln->gambar_name ?>" alt="">
                        </div>
                        <div class="media-body">
                           <div class="choice_text">
                              <div class="date">
                                 <a class="gad_btn" href="<?= base_url("blog/category/$ln->slug") ?>"><?= $ln->nama_kategori ?></a>
                                 <a href="<?= base_url("blog/read/$ln->seo_title") ?>" class="float-right"><i class="fa fa-calendar" aria-hidden="true">
                                    </i><?= mediumdate_indo($ln->date) ?>
                                 </a>
                              </div>
                              <a href="<?= base_url("blog/read/$ln->seo_title") ?>">
                                 <h4><?= $ln->title ?></h4>
                              </a>
                              <p><?= character_limiter($ln->konten, 100) ?></p>
                           </div>
                        </div>
                     </div>
                  <?php endforeach ?>
               </div> -->
               <!-- End of Last News -->

               <div class="row mt-5">
                  <div class="col text-center">
                     <a href="<?= base_url('blog') ?>" class="genric-btn danger-border circle arrow">More View<span class="lnr lnr-arrow-right"></span></a>
                  </div>
               </div>

            </div>

            <!-- ================Sidebar================== -->
            <?php $this->load->view('front/layouts/_sidebar', $trending) ?>
            <!-- ================End of Sidebar================== -->

         </div>
      </div>
   </section>
   <!--================End News Area =================-->