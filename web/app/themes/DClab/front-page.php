<?php get_header() ?>

<main class="container-fluid">
  <div class="row dclab__breadcrumb"></div>
  <div class="row dclab__articles">
    <div class="col-1 h-100 w-100"></div>
    <div class="col-10 h-100 w-100">
      <div class="row h-100 justify-content-between">

        <div class="col-4 h-100 w-100">
          <div class="titre__accueil d-flex align-items-center justify-content-center text-capitalize">
            <h2>Actualités</h2>
          </div>
          <?php $args = [
            'post_type' => 'post',
          ]
          ?>
          <?php $queryPosts = new WP_Query($args); ?>
          <?php if ($queryPosts->have_posts()) : ?>
            <?php while ($queryPosts->have_posts()) : $queryPosts->the_post() ?>
              <?php  // dump($queryPosts)
              ?>
              <?php // global $wp_query ; dump($wp_query)
              ?>
              <?php // global $post ; dump($post)
              ?>
              <?php // dump(get_post_meta( get_the_ID()))<
              ?>
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
                    <p class="dclab__author font-weight-bold indigo-text"><?php the_author() ?><span class="dclab__ecole">[<?php dclab_ecole_post() ?>]</span><span class="dclab__labs">[<?php dclab_lab_post() ?>]</span></p>
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

        <div class="col-4 h-100 w-100">
          <div class="titre__accueil d-flex align-items-center justify-content-center text-capitalize">
            <h2>forums</h2>
          </div>
          <?php $args = [
            'post_type' => 'topic',
          ]
          ?>
          <?php $queryEvent = new WP_Query($args); ?>
          <?php if ($queryEvent->have_posts()) : ?>
            <?php while ($queryEvent->have_posts()) : $queryEvent->the_post() ?>
              <?php //  dump($queryEvent)
              ?>
              <?php // global $wp_query ; dump($wp_query)
              ?>
              <?php // global $post ; dump($post)
              ?>
              <?php // dump(get_post_meta( get_the_ID()))
              ?>
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
                    <p class="dclab__author font-weight-bold indigo-text"><?php the_author() ?><span class="dclab__ecole">[<?php dclab_ecole_post() ?>]</span><span class="dclab__labs">[<?php dclab_lab_post() ?>]</span></p>
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

        <div class="col-4 h-100 w-100">
          <div class="titre__accueil d-flex align-items-center justify-content-center text-capitalize">
            <h2>évènements</h2>
          </div>
          <?php $args = [
            'post_type' => 'tribe_events',
          ]
          ?>
          <?php $queryForum = new WP_Query($args); ?>
          <?php if ($queryForum->have_posts()) : ?>
            <?php while ($queryForum->have_posts()) : $queryForum->the_post() ?>
              <?php //  dump($queryForum)
              ?>
              <?php // global $wp_query ; dump($wp_query)
              ?>
              <?php // global $post ; dump($post)
              ?>
              <?php // dump(get_post_meta( get_the_ID()))
              ?>
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
                    <p class="dclab__author font-weight-bold indigo-text"><?php the_author() ?><span class="dclab__ecole">[<?php dclab_ecole_post() ?>]</span><span class="dclab__labs">[<?php dclab_lab_post() ?>]</span></p>
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
    </div>
    <div class="col-1 h-100 w-100"></div>

  </div>
</main>

<?php get_footer() ?>
