<?php

#$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Clínica Ruman</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">clínica<span>ruman.</span></a>

         <nav class="nav">
            <a href="#home">início</a>
            <a href="#about">sobre</a>
            <a href="#services">serviços</a>
            <a href="#reviews">comentários</a>
            <a href="#contact">contato</a>
         </nav>

         <a href="https://wa.me/5511998263229" target="_blank" class="link-btn" >Marque uma Consulta</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">
      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>Deixe-nos realizar o seu sonho</h3>
            <p>Do sorriso perfeito, com os melhores profissionais da área</p>
            <a href="#contact" class="link-btn">Agende um horário</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="imagens/doutor.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>Sobre nós</span>
            <h3>Soluções de saúde completas para toda família</h3>
            <p>Possuimos os melhores protocolos em saúde, se utilizando de profissionais cuiodadosamente selecionados, para um atendimento de qualidade premium</p>
            <a href="#contact" class="link-btn">Agendar</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">Nossos Serviços</h1>

   <div class="box-container container">

      <div class="box">
         <img src="imagens/icon-1.svg" alt="">
         
         <a id="redirecionamento" href="consulta.html">Sobre consultas</a>
         <p>Atendemos apenas convênios médicos, dentre eles: Bradesco Saúde, Amil, Unimed Seguros, Notredame entre outros</p>
      </div>
         <div class="box">
         <img src="imagens/icon-2.svg" alt="">
         <a id="redirecionamento" title="visite nossa área de especialidades" href="especialidades.html">Especialidades</a>
         <p>Na Clínica Ruman nós temos 4 tipos de profissionais: Clínico Geral, Buco-maxílo-facial, Odontologia, Ortodontia</p>
      </div>

      <div class="box">
         <img src="imagens/icon-3.svg" alt="">
         <a id="redirecionamento" title="visite nossa área de agendamentos" href="agendamentos.html">Agendamentos</a>
         <p>Estamos abertos de segunda a segunda das 8hrs até 20hrs, com atendimento presencial e online</p>
      </div>

      <div class="box">
         <img src="imagens/icon-4.svg" alt="">
         <a id="redirecionamento" title="visite nossa área de invisalign" href="invisalign.html">Invisalign</a>
         <p>Trabalhamos também com Invisalign que alinha os dentes de forma mais previsível e confortável possível</p>
      </div>

      <div class="box">
         <img src="imagens/icon-5.svg" alt="">
         <a id="redirecionamento" title="visite nossa área de consultas online" href="consultaonline.html">Consulta Online</a>
         <p>Na Clínica Ruman nós também trabalhamos com tele-medicína, ou seja, fazemos atendimentos remotos!</p>
      </div>

      <div class="box">
         <img src="imagens/icon-6.svg" alt="">
         <a id="redirecionamento" title="visite nossa área de siso" href="siso.html">Extração de Siso</a>
         <p>O paciente pode escolher fazer o procedimento na clínica com anestasia local, ou em centro cirurgico com anestesia geral</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">Especialidades</h1>

   <div class="box-container container">

      <div class="box">
         <img src="imagens/process-1.png" alt="">
         <h3>Ortodontia</h3>
         <p>Ortodontia é uma especialidade odontológica que corrige a posição dos dentes e dos ossos maxilares posicionados de forma inadequada</p>
      </div>

      <div class="box">
         <img src="imagens/process-2.png" alt="">
         <h3>Buco-maxílo-facial</h3>
         <p>bucomaxilofacial é uma especialidade odontológica de caráter médico que trata cirurgicamente as doenças da cavidade bucal, do crânio, face e pescoço</p>
      </div>

      <div class="box">
         <img src="imagens/process-3.png" alt="">
         <h3>implantodontia</h3>
         <p>implantodontia é a área da Odontologia que trata da reabilitação oral por meio do implante dentário</p>
      </div>

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> Comentários </h1>

   <div class="box-container container">

      <div class="box">
         <img src="imagens/Imagem-bebe.png" alt="">
         <p>Thais quando adolecente tinha pânico de dentista, até qu eencontrou a Clínica Ruman, hoje já é mamãe e trouxe a família inteira para a nossa equiper cuidar.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-stSar-half-alt"></i>
         </div>
         <h3>Thais</h3>
         <span>Paciente</span>
      </div>

      <div class="box">
         <img src="imagens/julia.png" alt="">
         <p>Aos 9 anos a equipe da Clínica Ruman diagnosticou que a Júlia tinha maxila atésica, ela ficou em tratamento até os 14 anos. Hoje ela tem esse sorriso lindo, saudável e perfeito.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Júlia Ruman</h3>
         <span>Paciente</span>
      </div>

      <div class="box">
         <img src="imagens/loira.png" alt="">
         <p>Uma linda transformação, em uma linda mulher, essa é Cibele. Fez ortognática há 4anos com nossa équipe da Clínica Ruman.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Cibele</h3>
         <span>Paciente</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">Fale conosco</h1>

   <form action="https://formsubmit.co/pacientes.clinicaruman@gmail.com" method="POST">
 
      <span>nome:</span>
      <input type="text" name="name" placeholder="seu nome" class="box" required>
      <span>email:</span>
      <input type="email" name="email" placeholder="seu email" class="box" required>
      <span>número:</span>
      <input type="number" name="number" placeholder="seu número" class="box" required>
      <span>data:</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="Enviar Mensagem" name="submit" class="link-btn">
   </form>  

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>contatos</h3>
         <p>(11) 3681-2169</p>
         <p>(11) 99826-3229</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>nosso endereço</h3>
         <p>Av. Hilário Pereira de Souza, 406 - Torre Osasco, Conjunto 2515 - Centro, Osasco - SP, 06010-170</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>Horário de Funcionamento</h3>
         <p>8hrs até 20hrs</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>Endereço de Email</h3>
         <p>pacientes.clinicaruman@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy;Copyright: 2022 por Clínica Ruman. Todos os diretos reservados. |  Dr. Rafael Ruman - CRO 83379 <?php echo date('Y'); ?> by <span>Mr. Rafael</span>  </div>

</section>

<!-- footer section ends -->










<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>