<section id="contato" class="contact bg-dark-blue-500 py-5 clr-white-500">
   <div class="container">
      <!-- header -->
       <header class="contact__header d-none">
          <h2>Vamos conversar?</h2>
       </header> 
      <!-- end of header -->
      
      <!-- brand -->
      <div class="contact__brand d-flex ai-center jc-center mb-5">
         <img src="<?= image('logo-rodape.svg', 'svg'); ?>" alt="Logo Pepetos">
      </div>
      <!-- end of brand -->

      <!-- row -->
      <div class="contact__row grid">
         <!-- card -->
         <div class="contact__row__card">
            <!-- icon -->
            <div class="contact__row__card__icon bg-light-blue-500 clr-dark-blue-500">
               <i class="icon-location f-6 l-small"></i>
            </div>
            <!-- end of icon -->

            <!-- body -->
            <div class="contact__row__card__body">
               <p>
                  <a rel="nofollow noopener noreferrer" href="<?= CONTACT['addressLink']; ?>" target="_blank" class="link-white-500" title="Vamos agendar uma visita?"><?= CONTACT['address']; ?></a>
               </p>
            </div>
            <!-- end of body -->
         </div>
         <!-- end of card -->

         <!-- card -->
         <div class="contact__row__card">
            <!-- icon -->
            <div class="contact__row__card__icon bg-light-blue-500 clr-dark-blue-500">
               <i class="icon-telephone f-6 l-small"></i>
            </div>
            <!-- end of icon -->

            <!-- body -->
            <div class="contact__row__card__body">
               <p>Fixo:
                  <a rel="nofollow noopener noreferrer" href="tel:<?= formatPhone(CONTACT['phone']['01']); ?>" target="_blank" class="link-white-500" title="Podemos conversar pelo telefone?"><?= CONTACT['phone']['01']; ?></a>
               </p>
               <p>Celular:
                  <a rel="nofollow noopener noreferrer" href="tel:<?= formatPhone(CONTACT['whatsapp']['number']); ?>" target="_blank" class="link-white-500" title="Podemos conversar pelo celular?"><?= CONTACT['whatsapp']['number']; ?></a>
               </p>
            </div>
            <!-- end of body -->
         </div>
         <!-- end of card -->

         <!-- card -->
         <div class="contact__row__card">
            <!-- icon -->
            <div class="contact__row__card__icon bg-light-blue-500 clr-dark-blue-500">
               <i class="icon-clock f-6 l-small"></i>
            </div>
            <!-- end of icon -->

            <!-- body -->
            <div class="contact__row__card__body">
               <p>Segunda à Sexta: 7h00 às 19h00</p>
            </div>
            <!-- end of body -->
         </div>
         <!-- end of card -->
      </div>
      <!-- end of row -->
   </div>
</section>