<section id="galeria" class="gallery py-s">
   <div class="container">
      <!-- header -->
       <header class="gallery__header d-flex ai-center jc-center f-column">
          <h2 class="f-7 t-center">Nossos Pepetos</h2>
          <div class="line bg-green-500"></div>
       </header> 
      <!-- end of header -->

      <!-- row -->
      <div class="gallery__row grid mt-5">
         <?php for ($i = 1; $i < 9; $i++):  ?>
            <!-- image -->
            <a href="<?= image('imagem-galeria-' . str_pad($i, 2, 0, STR_PAD_LEFT) . '.jpg'); ?>" title="Conheça um pouco mais sobre a Pepetos" class="gallery__row__card radius-lg">
               <?= picture('imagem-clinica-'. str_pad($i, 2, 0, STR_PAD_LEFT), 'Conheça um pouco mais sobre a Pepetos'); ?>
            </a>
            <!-- end of image -->
         <?php endfor; ?>
      </div>
      <!-- end of row -->
   </div>
</section>