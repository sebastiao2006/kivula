@extends('layouts.app')
@section('title', 'Kivula')
@section('content')
<main class="main">



  <!-- Hero Section -->
  <section id="hero-product" class="hero-product hero-product3 section accent-background">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100" id="particles-js">


      <div class="row gy-5 justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2><span>Welcome to </span><span class="accent">Kivula</span></h2>
          <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
          <div class="d-flex">
            <a href="#about" class="btn-get-started">Agendar Reunião</a>
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Assistir Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2">
          <img src="{{ asset('assets/img/hero-im.svg') }}" class="img-fluid" alt="">
        </div>
      </div>
  
  
    
  
  

    </div>
 


  </section><!-- /Hero Section -->


   <!-- About Section -->
   <section id="about" class="about section">


    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3>Kivula Consultoria de TI</h3>
{{--           <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt=""> --}}
          <p style="font-size: 18px">A Kivula Consultoria de TI é uma empresa especializada em desenvolvimento web com Inteligência Artificial (IA), fornecendo soluções inovadoras e personalizadas  para impulsionar negócios na era digital.</p>
          <p style="font-size: 18px">Combinamos tecnologia de ponta com IA para criar plataformas web inteligentes, automatizadas e eficientes, proporcionando experiências digitais mais dinâmicas e intuitivas. Nossos serviços incluem desenvolvimento de websites e aplicativos web, integração de IA para automação de processos, chatbots inteligentes, análise preditiva e muito mais.</p>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
          <div class="content ps-0 ps-lg-5">
            <div class="position-relative mt-4">
              <img src="{{ asset('assets/img/capa14.png') }}" class="img-fluid rounded-4" alt="">
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

      <!-- Faq Section -->
      <section class="faq-9 faq section light-background" id="faq">

        <div class="container">
          <div class="row">
  
            <div class="col-lg-5" data-aos="fade-up">
              <h2 class="faq-title">Have a question? Check out the FAQ</h2>
              <p class="faq-description">Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
              <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
                <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z" fill="currentColor"></path>
                </svg>
              </div>
            </div>
  
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
              <div class="faq-container">
  
                <div class="faq-item faq-active">
                  <h3>Como um SGE pode melhorar a gestão acadêmica da escola?</h3>
                  <div class="faq-content">
                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item">
                  <h3>É possível acompanhar o desempenho dos alunos em tempo real no SGE?</h3>
                  <div class="faq-content">
                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item">
                  <h3>O sistema permite a comunicação entre pais, alunos e professores?</h3>
                  <div class="faq-content">
                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item">
                  <h3>O SGE pode ser integrado a outras plataformas educacionais?</h3>
                  <div class="faq-content">
                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item">
                  <h3>Quais são as principais funcionalidades de um SGE para a administração escolar?</h3>
                  <div class="faq-content">
                    <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item">
                  <h3>Como um SGE garante a segurança dos dados acadêmicos e administrativos?</h3>
                  <div class="faq-content">
                    <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
              </div>
            </div>
  
          </div>
        </div>
      </section><!-- /Faq Section -->



    <section id="pricing" class="pricing section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Pricing</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row g-4 justify-content-center">
  
            <!-- Basic Plan -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="pricing-card">
                <h3>Basic Plan</h3>
                <div class="price">
                  <span class="currency">$</span>
                  <span class="amount">9.9</span>
                  <span class="period">/ month</span>
                </div>
                <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam.</p>
  
                <h4>Featured Included:</h4>
                <ul class="features-list">
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Duis aute irure dolor
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Excepteur sint occaecat
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Nemo enim ipsam voluptatem
                  </li>
                </ul>
  
                <a href="#" class="btn btn-primary">
                  Buy Now
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
  
            <!-- Standard Plan -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="pricing-card popular">
                <div class="popular-badge">Most Popular</div>
                <h3>Standard Plan</h3>
                <div class="price">
                  <span class="currency">$</span>
                  <span class="amount">19.9</span>
                  <span class="period">/ month</span>
                </div>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
  
                <h4>Featured Included:</h4>
                <ul class="features-list">
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Lorem ipsum dolor sit amet
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Consectetur adipiscing elit
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Sed do eiusmod tempor
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Ut labore et dolore magna
                  </li>
                </ul>
  
                <a href="#" class="btn btn-light">
                  Buy Now
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
  
            <!-- Premium Plan -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="pricing-card">
                <h3>Premium Plan</h3>
                <div class="price">
                  <span class="currency">$</span>
                  <span class="amount">39.9</span>
                  <span class="period">/ month</span>
                </div>
                <p class="description">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
  
                <h4>Featured Included:</h4>
                <ul class="features-list">
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Temporibus autem quibusdam
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Saepe eveniet ut et voluptates
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Nam libero tempore soluta
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Cumque nihil impedit quo
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Maxime placeat facere possimus
                  </li>
                </ul>
  
                <a href="#" class="btn btn-primary">
                  Buy Now
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
  
          </div>
  
        </div>
  
      </section><!-- /Pricing Section -->




  </main>
@endsection