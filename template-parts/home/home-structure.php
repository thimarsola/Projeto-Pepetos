<section class="structure py-s">
	<div class="container">
		<!-- row -->
		 <div class="structure__row grid">
			 <!-- content -->
			  <div class="structure__row__content">
				  <!-- header -->
				  <header class="structure__row__content__header">
					  <h2 class="f-7">Nossa estrutura</h2>
					  <div class="line bg-green-500"></div>
				  </header>
				  <!-- end of header -->

				  <!-- body -->
				  <div class="structure__row__content__body my-5 t-justify">
                      <p>Com mais de 500 m² e em um dos melhores bairros de São Caetano do Sul, montamos uma estrutura completa, em que cada espaço foi pensado cuidadosamente para Pepetos de todos os portes, idades e condições físicas.</p>
                      <p>Para permitir uma melhor experiência para os Pepetos e seus tutores, oferecemos serviços integrados de creche, hotel, banho & tosa, natação e adestramento, além de contar com uma veterinária responsável de plantão 24h/dia.</p>
                      <br>
                      <p>A Pepetos conta com:</p>
                      <ul>
                          <li>Área aberta espaçosa, com playground, lago recreativo e área verde.</li>
                          <li>Área semi-aberta, integrada à área aberta e à piscina</li>
                          <li>Áreas cobertas nos andares inferior e superior com playground </li>
                          <li>Suítes equipadas para hospedagens segura e sem grades.</li>
                          <li>Piscina aquecida e com cromoterapia</li>
                          <li>Copa para alimentação exclusiva dos cães</li>
                          <li>Espaço de banho e tosa, integrado ao daycare.</li>
                      </ul>
                      <br>
                      <p>Todas as áreas são bem arejadas e equipadas com brinquedos e aparelhos adequados para os cães, garantindo a segurança de todos os alunos e hóspedes.</p>
				  </div>
				  <!-- end of body -->

				  <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), CONTACT["whatsapp"]["message"] . ' para o agendamento de uma visita!', 'Agende uma visita', 'btn btn-primary-500'); ?>

			  </div>
			 <!-- end of content -->

             <!-- images -->
              <div class="structure__row__images">
	              <?php for ($i = 1; $i < 5; $i++): ?>
                      <!-- image -->
		              <?= picture('imagem-estrutura-' . str_pad($i, 2, 0, STR_PAD_LEFT), 'Conheça nossa estrutura', 'img-fluid radius-lg'); ?>
                      <!-- end of image -->
	              <?php endfor; ?>
              </div>
             <!-- end of images -->
		 </div>
		<!-- end of row -->
	</div>
</section>