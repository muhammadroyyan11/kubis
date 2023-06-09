<!--================Home Banner Area =================-->
<!-- <section class="banner_area">
   <div class="banner_inner d-flex align-items-center" style="background-image: url(<?= base_url('images/banner/') ?>)">
      <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
      <div class="container">
         <div class="banner_content text-center">
            <h2>News Details</h2>
            <div class="page_link">
               <a href="<?= base_url('home') ?>">Home</a>
               <a href="<?= base_url("blog/read/$posting->seo_title") ?>">News Details</a>
            </div>
         </div>
      </div>
   </div>
</section> -->
================End Home Banner Area =================

<!--================News Area =================-->
<section class="news_area single-post-area mt-5 mt-100">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <div class="main_blog_details">
               <img class="img-fluid" src="<?= base_url("assets/uploads/file/$posting->gambar_name") ?>" alt="">
               <h4><?= $posting->title ?></h4>
               <div class="user_details">
                  <div class="float-left">
                     viewers : <?= $posting->viewers ?></a>
                  </div>
                  <div class="float-right">
                     <div class="media">
                        <div class="media-body">

                           <p><?= mediumdate_indo($posting->date) ?></p>
                        </div>
                     </div>
                  </div>
               </div>
               <p><?= $posting->konten ?></p>
            </div>
            <div id="disqus_thread"></div>
            <script>
               (function() { // DON'T EDIT BELOW THIS LINE
                  var d = document,
                     s = d.createElement('script');
                  s.src = 'https://kubis-id.disqus.com/embed.js';
                  s.setAttribute('data-timestamp', +new Date());
                  (d.head || d.body).appendChild(s);
               })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
         </div>

         <!-- ================Sidebar================== -->
         <?php $this->load->view('front/layouts/_sidebar', $trending) ?>
         <!-- ================End of Sidebar================== -->

      </div>
   </div>
</section>
<!--================End News Area =================-->