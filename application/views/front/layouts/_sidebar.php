<div class="col-lg-4">
   <div class="right_sidebar">

      <aside class="r_widgets news_widgets">
         
      <?php
      if ($popular != null) { ?>
         <div class="main_title2">
            <h2>Most Popular News</h2>
         </div>
         <div class="choice_item">
            <img class="img-fluid" src="<?= base_url("assets/uploads/file/$popular->gambar_name") ?>" alt="">
            <div class="choice_text">
               <div class="date">
                  <a class="gad_btn" href="<?= base_url("blog/category/$popular->slug") ?>"><?= $popular->nama_kategori ?></a>
                  <a href="#" class="float-right"><i class="fa fa-calendar" aria-hidden="true"></i><?= mediumdate_indo($popular->date) ?></a>
               </div>
               <a href="<?= base_url("blog/read/$popular->seo_title") ?>">
                  <h4><?= $popular->title ?></h4>
               </a>
               <p><?= character_limiter($popular->konten, 150) ?></p>
            </div>
         </div>
      <?php
      }
      ?>
         <div class="main_title2 mb-5">
            <h2>Trending Now</h2>
         </div>
         <div class="news_slider owl-carousel">
            <?php foreach ($trending as $t) : ?>
               <div class="item">
                  <div class="choice_item">
                     <img src="<?= base_url() ?>assets/uploads/file/<?= $t->gambar_name ?>" alt="">
                     <div class="choice_text">
                        <a href="<?= base_url("blog/read/$t->seo_title") ?>">
                           <h4><?= $t->title ?></h4>
                        </a>
                        <div class="date">
                           <a href="<?= base_url("blog/read/$t->seo_title") ?>"><i class="fa fa-calendar" aria-hidden="true"></i><?= mediumdate_indo($t->date) ?></a>
                        </div>
                     </div>
                  </div>
               </div>
            <?php endforeach ?>
         </div>
      </aside>

      <!-- <aside class="r_widgets social_widgets mt-5">
         <div class="main_title2">
            <h2>Social Networks</h2>
         </div>
         <ul class="list">
            <?php foreach ($sosmed as $key => $data) { ?>
               <li><a href="<?= $data->link ?>" target="_blank"><i class="fa <?= $data->icon ?>"></i><?= $data->nama_sosmed ?><span></span></a></li>
            <?php } ?>
         </ul>
      </aside> -->

   </div>
</div>