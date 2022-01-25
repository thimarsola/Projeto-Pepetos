<section class="veterinary py-s">
   <div class="container">

      <!-- row -->
      <div class="veterinary__row grid">

         <!-- container -->
         <div class="veterinary__row__container">
            <!-- header -->
            <header class="veterinary__row__container__header">
               <h2 class="f-7">Conheça a nossa Veterinária</h2>
               <div class="line bg-green-500"></div>
            </header>
            <!-- end of header -->

            <!-- body -->
            <div class="veterinary__row__container__body my-5 t-justify">
               <p>A Pepetos conta com a responsável técnica, Médica Veterinária Dra Bianca Pechinin, profissional bastante conhecida no ABC por seu trabalho sólido médico e comportamental com os cães. Com sua clínica própria bem próxima a nós, realiza atendimentos de todo tipo e com descontos exclusivos para alunos da creche.</p>
            </div>
            <!-- end of body -->

            <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), CONTACT["whatsapp"]["message"] . ' para o agendamento de uma visita!', 'Agende uma visita', 'btn btn-primary-500'); ?>

         </div>
         <!-- end of container -->
         
         <!-- image -->
         <div class="veterinary__row__image">
            <?= picture('imagem-veterinaria', 'Conheça mais sobre a Pepetos', 'img-fluid radius-lg'); ?>
         </div>
         <!-- end of image -->

      </div>
      <!-- end of row -->

   </div>
</section>