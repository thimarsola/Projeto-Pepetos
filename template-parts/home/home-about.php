<section id="quem-somos" class="about py-s">
	<div class="container">

        <!-- row -->
         <div class="about__row grid">

             <!-- image -->
              <div class="about__row__image">
	              <?= picture('imagem-quem-somos', 'Conheça mais sobre a Pepetos', 'img-fluid radius-lg'); ?>
              </div>
             <!-- end of image -->

             <!-- container -->
              <div class="about__row__container">
                  <!-- header -->
                   <header class="about__row__container__header">
                       <h2 class="f-7">Quem somos</h2>
                       <div class="line bg-green-500"></div>
                   </header>
                  <!-- end of header -->

                  <!-- body -->
                   <div class="about__row__container__body my-5 t-justify">
                       <p>Dois APAIXONADOS por animais, em especial os cães. E foi essa paixão que fez com que os amigos e sócios Diego e Patrícia criassem um espaço voltado especialmente para eles.</p>
                       <p>Os Pepetos, apelido carinhoso para os vários cães da Patrícia, deram origem ao nome da Empresa. Eles, que infelizmente viviam sozinhos em casa o dia inteiro enquanto todos trabalhavam, foram a inspiração para criar um espaço divertido, seguro, cheio de amor, brincadeiras e aprendizado.</p>
                       <p>O propósito da Pepetos é promover uma melhor qualidade de vida aos cães, permitindo que tenham uma vida saudável e feliz, e com isso, retribuir todo carinho que recebemos dos nossos melhores amigos.</p>
                   </div>
                  <!-- end of body -->

	              <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), CONTACT["whatsapp"]["message"], 'Vamos conversar?', 'btn btn-primary-500'); ?>

              </div>
             <!-- end of container -->

         </div>
        <!-- end of row -->

	</div>
</section>