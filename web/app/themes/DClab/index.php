<?php get_header() ?>

<main class="container-fluid">
  <div class="row dclab__breadcrumb"></div>
  <div class="row dclab__articles">
    <div class="col-1 h-100 w-100"></div>
    <div class="col-10 h-100 w-100">
      <div class="row h-100 justify-content-between">

        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post() ?>

            <article>
              <div class="card h-100 card-cascade">
                <div class="view view-cascade overlay">
                  <?= get_the_post_thumbnail(get_the_ID(), 'post-thumbnail', ['class' => 'card-img-top']) ?>
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <div class="card-body card-body-cascade text-center">
                  <!-- Title -->
                  <h4 class="card-title"><strong><?php the_title() ?></strong></h4>
                  <!-- Subtitle -->
                  <p class="dclab__author font-weight-bold indigo-text"><?php the_author() ?></p>
                  <!-- Text -->
                  <p class="card-text"><?= wp_trim_excerpt() ?></p>
                </div>
                <!-- Card footer -->
                <div class="card-footer text-muted d-flex align-items-center justify-content-around">
                  <p><?php dclab_time_post() ?></p>
                  <a href="<?php the_permalink()  ?>" class="orange-text d-flex flex-row-reverse">
                    <div class="waves-effect waves-light"><?= __('Lire', 'dclab')  ?><i class="fas fa-angle-double-right ml-2"></i></div>
                  </a>
                </div>
              </div>
            </article>

          <?php endwhile ?>
        <?php endif ?>
      </div>
    </div>
    <div class="col-1 h-100 w-100"></div>

  </div>
</main>

<?php get_footer() ?>
