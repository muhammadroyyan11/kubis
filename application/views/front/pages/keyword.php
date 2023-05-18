<?php
$url = $this->uri->segment(3);

if (isset($url)) {
   $query = $this->db->where('slug', $url)->get('kategori')->row();
   $title = "About " . $query->nama_kategori;
} else {
   $title = '';
}
?>

<!--================News Area =================-->
<section class="news_area p_100">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <div class="main_title2">
               <h2>Result <?= $title ?></h2>
            </div>
            <div class="magazine-view">
               <?php foreach ($post as $ln) : ?>
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

            <!-- Pagination -->
            <div class="row mt-5">
               <div class="col">
                  <nav aria-label="Page navigation example">
                     <?= $pagination ?>
                  </nav>
               </div>
            </div>
            <!-- End of Pagination -->

         </div>
         <!-- ================Sidebar================== -->
         <?php $this->load->view('front/layouts/_sidebar', $trending) ?>
         <!-- ================End of Sidebar================== -->
      </div>
   </div>
</section>
<!--================End News Area =================-->