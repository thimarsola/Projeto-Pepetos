<section id="diferenciais" class="differentials">
    <!-- header -->
    <header class="differentials__header bg-primary-500 py-s">
        <div class="container">
            <!-- content -->
            <div class="differentials__header__content">
                <h2 class="f-7">Conheça os nossos diferenciais</h2>
            </div>
            <!-- end of content -->
        </div>
    </header>
    <!-- end of header -->

    <!-- content -->
    <div class="differentials__content">
       <div class="container">
          <!-- row -->
          <div class="differentials__content__row owl-carousel">
             <?php
             $jsonDifferentials = file_get_contents(__DIR__ . "/../../includes/differentials.json");
             $differentialsList = json_decode($jsonDifferentials, true);

             foreach ($differentialsList['differentials']  as $item ):
                ?>

                <!-- card -->
                <article class="differentials__content__row__card radius-lg">
                   <!-- image -->
                   <div class="differentials__content__row__card__image">
                      <?= picture($item['image'], $item['description'], 'img-fluid'); ?>
                   </div>
                   <!-- end of image -->

                   <!-- body -->
                   <div class="differentials__content__row__card__body">
                      <!-- header -->
                      <header class="differentials__content__row__card__body__header">
                         <h3><?= $item['description']; ?></h3>
                      </header>
                      <!-- end of header -->
                   </div>
                   <!-- end of body -->
                </article>
                <!-- end of card -->

             <?php endforeach; ?>
          </div>
          <!-- end of row -->
       </div>
    </div>
    <!-- end of content -->
</section>