<section id="servicos" class="services bg-dark-blue-500 py-s">
    <div class="container">
        <!-- header -->
         <header class="services__header d-flex f-column ai-center mb-7">
             <h2 class="f-7 clr-white-500 t-center">Nossos Serviços</h2>
             <div class="line bg-green-500"></div>
         </header>
        <!-- end of header -->

        <!-- row -->
         <div class="services__row grid">
             <?php
             $jsonServices = file_get_contents(__DIR__ . "/../../includes/services.json");
             $servicesList = json_decode($jsonServices, true);

             foreach ($servicesList['services'] as $service):
             ?>

             <!-- card -->
              <article class="services__row__card">
                  <!-- image -->
                   <div class="services__row__card__image radius-lg shadow">
                       <?= picture($service['image'], 'conheça mais sobre esse nosso serviço', 'img-fluid'); ?>
                   </div>
                  <!-- end of image -->

                  <!-- content -->
                   <div class="services__row__card__content bg-white-500 radius-lg shadow t-center">
                       <!-- header -->
                        <header class="services__row__card__content__header mb-1">
                            <h3 class="f-3"><?= $service['title']; ?></h3>
                        </header>
                       <!-- end of header -->

                       <!-- body -->
                        <div class="services__row__card__content__body">
                            <p class="t-small mb-2"><?= $service['description'];  ?></p>
	                        <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), CONTACT["whatsapp"]["message"] . ' sobre o serviço de ' . $service['title'] . '!', 'Saiba mais', 'link-primary-500 t-bold'); ?>

                        </div>
                       <!-- end of body -->
                   </div>
                  <!-- end of content -->
              </article>
             <!-- end of card -->

             <?php endforeach; ?>
         </div>
        <!-- end of row -->
    </div>
</section>