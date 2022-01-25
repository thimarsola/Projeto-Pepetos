<section class="testimonial bg-light-gray-500 py-s">
	<div class="container">

		<!-- header -->
		 <header class="testimonial__header d-none">
			 <h2>O que dizem sobre nós!</h2>
		 </header>
		<!-- end of header -->
      
      <!-- content -->
       <div class="testimonial__content owl-carousel">
          <?php
          $jsonTestimonial = file_get_contents(__DIR__ . "/../../includes/testimonial.json");
          $testimonialList = json_decode($jsonTestimonial, true);
          
          foreach ($testimonialList['testimonial'] as $item):
          ?>
          
          <!-- card -->
           <div class="testimonial__content__card">
              <!-- image -->
               <div class="testimonial__content__card__image">
                  <?= picture($item['image'], 'Veja que lindo este depoimento', 'img-fluid'); ?>
               </div> 
              <!-- end of image -->
              
              <!-- body -->
               <div class="testimonial__content__card__body bg-white-500 radius-lg">
                  <p class="t-justify mb-5">"<?= $item['description']; ?>"</p>
                  <p class="testimonial__content__card__body__title mb-1 clr-dark-blue-500 l-small">
                     <span></span>
                     <?= $item['author']; ?>
                  </p>
                  <p class="t-small l-small"><?= $item['since']; ?></p>
                  <i class="icon-testimonial f-5 clr-primary-500"></i>
               </div> 
              <!-- end of body -->
           </div> 
          <!-- end of card -->
          
          <?php endforeach; ?>
       </div> 
      <!-- end of content -->

	</div>
</section>