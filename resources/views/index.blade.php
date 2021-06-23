@extends('layouts.app')

@section('title')Главная страница@endsection


@section('content')

  <!-- Шапка -->
  <header class="pb-5">    
    <div class="header-background">

      <!-- Меню "Вне холста" -->
      <div class="d-flex d-md-none justify-content-between">

        <!-- Кнопка вызова меню -->
        <div class="container d-flex justify-content-between align-items-center">
          <h1><a href="index.html" class="color-white">VETPET</a></h1>
          <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-list text-white"></i></button>
        </div>

        <!-- Внутренности меню -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">

          <!-- Заголовок и кнопка зкрытия -->
          <div class="offcanvas-header">
            <h5 class="px-3 fw-bold">Меню</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <!-- Меню -->
          <div class="offcanvas-body">
            <div class="py-4">
              <a class="nav-link active" aria-current="page" href="#">Услуги</a>
            </div>

            <div class="pb-4">
                <a class="nav-link" href="#">Врачи</a>
            </div>

            <div class="pb-4">
                <a class="nav-link" href="#">О клинике</a>                                
            </div>

            <div class="pb-4">
                <a class="nav-link" href="/reviews">Отзывы</a>                                
            </div>

            <div class="pb-4">
                <a class="nav-link" href="#">Вопросы</a>                                
            </div>

            <div class="pb-4">
                <a class="nav-link" href="#">Контакты</a>                                
            </div>

          </div>

        </div>
      </div>

      <!-- Контейнер для навигационной панели и шапки -->
      <div class="container h-100">

        <!-- Навигационная панель -->
        <div class="row d-none d-md-flex align-items-center py-2">

          <!-- Логотип -->
          <div class="col-2 col-lg-1">
            <h1><a href="/" class="color-white">VETPET</a></h1>
          </div>

          <!-- Кнопки навигации -->
          <div class="col d-flex justify-content-center">
            <div class="nav">
              
              <div class="px-3"><a href="#services" class="nav-line">Услуги</a></div>
              <div class="px-3"><a href="#aboutclinic" class="nav-line">О нас</a></div>              
              <div class="px-3"><a href="#doctors" class="nav-line">Врачи</a></div>
              <div class="px-3"><a href="#review" class="nav-line">Отзывы</a></div>
              <div class="px-3"><a href="#question" class="nav-line">Вопросы</a></div>
              <div class="px-3"><a href="#contact" class="nav-line">Контакты</a></div>

            </div>
          </div>

          <div class="col-1"></div>

        </div>

        <!-- Наполнение интро -->
        <div class="row ">

          <!-- Информация в интро -->
          <div class="col-12 col-md-5 col-lg-6 d-flex align-items-center">

            <!-- Текст в интро и кнопки -->
            <div class="text-white text-intro py-6">
              <p class="pb-2"><i class="bi bi-geo-alt-fill"></i> Новосибирск</p>
              <h2>Ветеринарная <br> клиника</h2>
              <p class="pb-5">Кроглосуточная забота о ваших питомцах</p>

              <!-- Кнопки в интро -->
              <div class=" d-flex d-md-block d-lg-flex align-items-center ">
                <button type="button" class="btn btn-appointment">Записаться на прием</button>
                <div class="ps-2 ps-md-5 pt-0 pt-md-2 pt-lg-0"><a class="text-white" href="tel:+7(383)2133212">+7 (383) 213-32-12</a></div>                 
              </div>

            </div>
          
          </div>

          <!-- Волна и собака -->
          <div class="col-md-6 col-12 d-flex justify-content-lg-end justify-content-center"> 

            <img class="pt-4 d-none d-md-flex" src="./img/Dog.png" alt="sobaken">  
            <div class="wave"></div>

          </div>
        </div>

      </div>
    </div>

  </header>

  <main>

    <!-- Иконка скролла -->
    <section class="d-none d-md-block icon-scroll mb-5 ">
      <div class="mouse">
        <div class="wheel"></div>
      </div>
      <div class="icon-arrows">
        <span></span>
      </div>
    </section>

    <!-- Акции -->
    <section id="action" class="container py-5">

      <div class="variable-width slider">

        <!-- 1 -->
        @include('components.discount')

        <!-- 2 -->            
        <div class="d-flex justify-content-center">
          <div class="card d-flex align-items-start flex-column">
            
            <div class="pb-4">
              <p class="discount">Бесплатно</p>
              <p class="discount-inner">Обработаем вашего питомца от блох и клещей</p>
            </div>

            <div class="d-flex w-100 align-items-center justify-content-between">
              <button type="submit" class="btn-discount"><span class="btn-discount-inner">Подробнее об акции</span></button>
              <span class="color-white">до 1 сентября</span>
            </div>

          </div>
        </div>

        <!-- 3 -->           
        <div class="d-flex justify-content-center">
          <div class="card d-flex align-items-start flex-column">

            <div class="pb-4">
              <p class="discount">10% скидка</p>
              <p class="discount-inner">На вакцинацию и чипирование домашних животных</p>
            </div>

            <div class="d-flex w-100 align-items-center justify-content-between">
              <button type="submit" class="btn-discount"><span class="btn-discount-inner">Подробнее об акции</span></button>
              <span class="color-white">до 20 июля</span>
            </div>

          </div>
        </div>
      
        <!-- 4 -->
        <div class="d-flex justify-content-center">
          <div class="card d-flex align-items-start flex-column">

            <div class="pb-4">
              <p class="discount">Test</p>
              <p class="discount-inner">Test test test</p>
              <p class="discount-inner">Test test test</p>
            </div>

            <div class="d-flex w-100 align-items-center justify-content-between">
              <button type="submit" class="btn-discount"><span class="btn-discount-inner">Подробнее об акции</span></button>
              <span class="color-white">до 30 июня</span>
            </div>

          </div>
        </div>
              
        <!-- 5 -->
        <div class="d-flex justify-content-center">
          <div class="card d-flex align-items-start flex-column">

            <div class="pb-4">
              <p class="discount">Test 2</p>
              <p class="discount-inner">Test test test</p>
              <p class="discount-inner">Test test test</p>
            </div>

            <div class="d-flex w-100 align-items-center justify-content-between">
              <button type="submit" class="btn-discount"><span class="btn-discount-inner">Подробнее об акции</span></button>
              <span class="color-white">до 24 июня</span>
            </div>

          </div>
        </div>

      </div>

    </section>

    <!-- Услуги клиники -->
    <section id="services" class="container py-5">
      <h6 class="text-center">Услуги клиники</h6>

      <!-- Слайдер навигации -->
      <div class="slider slider-nav py-5">

        <!-- Терапия -->
        <div class="slider-services-nav">
          <img class="img-fluid rounded mx-auto d-block" src="./img/Терапия-nav.png" alt="Терапия-nav">
          <p>Терапия</p>
        </div>

        <!-- Лаборатория -->
        <div class="slider-services-nav">
          <img class="img-fluid rounded mx-auto d-block" src="./img/Лаборатория-nav.png" alt="Лаборатория-nav">
          <p>Лаборатория</p>
        </div>

        <!-- Вакцинацию -->
        <div class="slider-services-nav">
          <img class="img-fluid rounded mx-auto d-block" src="./img/Вакцинация-nav.png" alt="Вакцинация-nav">
          <p>Вакцинацию</p>
        </div>

        <!-- Чипирование -->
        <div class="slider-services-nav">
          <img class="img-fluid rounded mx-auto d-block" src="./img/Чипирование-nav.png" alt="Чипирование-nav">
          <p>Чипирование</p>
        </div>

        <!-- Хирургия -->
        <div class="slider-services-nav">
          <img class="img-fluid rounded mx-auto d-block" src="./img/Хирургия-nav.png" alt="Хирургия-nav">
          <p>Хирургия</p>
        </div>

        <!-- Дерматолог -->
        <div class="slider-services-nav">
          <img class="img-fluid rounded mx-auto d-block" src="./img/Дерматолог-nav.png" alt="Дерматолог-nav">
          <p>Дерматолог</p>
        </div>

        <!-- Ренген -->
        <div class="slider-services-nav">
          <img class="img-fluid rounded mx-auto d-block" src="./img/Ренген-nav.png" alt="Ренген-nav">
          <p>Ренген</p>
        </div>

        <!-- Стоматология -->
        <div class="slider-services-nav">
          <img class="img-fluid rounded mx-auto d-block" src="./img/Зубной-nav.png" alt="Зубной-nav">
          <p>Стоматология</p>
        </div>

      </div>

      <!-- Тело слайдера -->
      <div class="slider slider-for">

        <!-- 1 -->
        <div class="d-block d-md-flex align-items-center">

          <!-- Картинка -->
          <div class="px-3 px-lg-5">
            <img class="img-fluid" src="./img/therapy.png" alt="">
          </div>

          <!-- Описание услуги -->
          <div class="px-2 px-lg-5 py-4">
            <p class="services-text">Терапия</p>
            <p class="color-grey py-3 text-align-justify">Лаборатория выполняет более 100 видов исследований для клинико-диагностических целей.</p>
            <p class="color-grey text-align-justify">Для анализов применяются только оригинальные реактивы и расходные материалы.</p>

            <!-- Кнопки -->
            <div class="d-flex pt-4 align-items-center">
              <button type="button" onClick='location.href="reviews.html#feedbackform"' class="btn btn-details">Подробнее</button>     
              <p class="ps-5">от 300 руб.</p>   
            </div>

          </div>
        </div>

        <!-- 2 -->
        <div class="d-block d-md-flex align-items-center">

          <!-- Картинка -->
          <div class="px-3 px-lg-5">
            <img class="img-fluid" src="./img/laboratory.png" alt="">
          </div>

          <!-- Описание услуги -->
          <div class="px-2 px-lg-5 py-4">
            <p class="services-text">Срочные анализы</p>
            <p class="color-grey py-3 text-align-justify">Лаборатория выполняет более 100 видов исследований для клинико-диагностических целей.</p>
            <p class="color-grey text-align-justify">Для анализов применяются только оригинальные реактивы и расходные материалы.</p>

            <!-- Кнопки -->
            <div class="d-flex pt-4 align-items-center">
              <button type="button" onClick='location.href="reviews.html#feedbackform"' class="btn btn-details">Подробнее</button>     
              <p class="ps-5">от 300 руб.</p>    
            </div>
          </div>
        </div>

        <!-- 3 -->
        <div class="d-block d-md-flex align-items-center">

          <!-- Картинка -->
          <div class="px-3 px-lg-5">
            <img class="img-fluid" src="./img/vaccination.png" alt="">
          </div>

          <!-- Описание услуги -->
          <div class="px-2 px-lg-5 py-4">
            <p class="services-text">Вакцинация</p>
            <p class="color-grey py-3 text-align-justify">Лаборатория выполняет более 100 видов исследований для клинико-диагностических целей.</p>
            <p class="color-grey text-align-justify">Для анализов применяются только оригинальные реактивы и расходные материалы.</p>

            <!-- Кнопки -->
            <div class="d-flex pt-4 align-items-center">
              <button type="button" onClick='location.href="reviews.html#feedbackform"' class="btn btn-details">Подробнее</button>     
              <p class="ps-5">от 300 руб.</p>    
            </div>
          </div>
        </div>

        <!-- 4 -->
        <div class="d-block d-md-flex align-items-center">

          <!-- Картинка -->
          <div class="px-3 px-lg-5">
            <img class="img-fluid" src="./img/chipping.png" alt="">
          </div>

          <!-- Описание услуги -->
          <div class="px-2 px-lg-5 py-4">
            <p class="services-text">Чипирование</p>
            <p class="color-grey py-3 text-align-justify">Лаборатория выполняет более 100 видов исследований для клинико-диагностических целей.</p>
            <p class="color-grey text-align-justify">Для анализов применяются только оригинальные реактивы и расходные материалы.</p>

            <!-- Кнопки -->
            <div class="d-flex pt-4 align-items-center">
              <button type="button" onClick='location.href="reviews.html#feedbackform"' class="btn btn-details">Подробнее</button>     
              <p class="ps-5">от 300 руб.</p>    
            </div>
          </div>
        </div>

        <!-- 5 -->
        <div class="d-block d-md-flex align-items-center">

          <!-- Картинка -->
          <div class="px-3 px-lg-5">
            <img class="img-fluid" src="./img/surgery.png" alt="">
          </div>

          <!-- Описание услуги -->
          <div class="px-2 px-lg-5 py-4">
            <p class="services-text">Хирургия</p>
            <p class="color-grey py-3 text-align-justify">Лаборатория выполняет более 100 видов исследований для клинико-диагностических целей.</p>
            <p class="color-grey text-align-justify">Для анализов применяются только оригинальные реактивы и расходные материалы.</p>

            <!-- Кнопки -->
            <div class="d-flex pt-4 align-items-center">
              <button type="button" onClick='location.href="reviews.html#feedbackform"' class="btn btn-details">Подробнее</button>     
              <p class="ps-5">от 300 руб.</p>    
            </div>
          </div>
        </div>

        <!-- 6 -->
        <div class="d-block d-md-flex align-items-center">

          <!-- Картинка -->
          <div class="px-3 px-lg-5">
            <img class="img-fluid" src="./img/dentist.png" alt="">
          </div>

          <!-- Описание услуги -->
          <div class="px-2 px-lg-5 py-4">
            <p class="services-text">Дерматолог</p>
            <p class="color-grey py-3 text-align-justify">Лаборатория выполняет более 100 видов исследований для клинико-диагностических целей.</p>
            <p class="color-grey text-align-justify">Для анализов применяются только оригинальные реактивы и расходные материалы.</p>

            <!-- Кнопки -->
            <div class="d-flex pt-4 align-items-center">
              <button type="button" onClick='location.href="reviews.html#feedbackform"' class="btn btn-details">Подробнее</button>     
              <p class="ps-5">от 300 руб.</p>    
            </div>
          </div>
        </div>

        <!-- 7 -->
        <div class="d-block d-md-flex align-items-center">

          <!-- Картинка -->
          <div class="px-3 px-lg-5">
            <img class="img-fluid" src="./img/x-ray.png" alt="">
          </div>

          <!-- Описание услуги -->
          <div class="px-2 px-lg-5 py-4">
            <p class="services-text">Ренген</p>
            <p class="color-grey py-3 text-align-justify">Лаборатория выполняет более 100 видов исследований для клинико-диагностических целей.</p>
            <p class="color-grey text-align-justify">Для анализов применяются только оригинальные реактивы и расходные материалы.</p>

            <!-- Кнопки -->
            <div class="d-flex pt-4 align-items-center">
              <button type="button" onClick='location.href="reviews.html#feedbackform"' class="btn btn-details">Подробнее</button>     
              <p class="ps-5">от 300 руб.</p>    
            </div>
          </div>
        </div>

        <!-- 8 -->
        <div class="d-block d-md-flex align-items-center">

          <!-- Картинка -->
          <div class="px-3 px-lg-5">
            <img class="img-fluid" src="./img/dentist.png" alt="">
          </div>

          <!-- Описание услуги -->
          <div class="px-2 px-lg-5 py-4">
            <p class="services-text">Стоматолог</p>
            <p class="color-grey py-3 text-align-justify">Лаборатория выполняет более 100 видов исследований для клинико-диагностических целей.</p>
            <p class="color-grey text-align-justify">Для анализов применяются только оригинальные реактивы и расходные материалы.</p>

            <!-- Кнопки -->
            <div class="d-flex pt-4 align-items-center">
              <button type="button" onClick='location.href="reviews.html#feedbackform"' class="btn btn-details">Подробнее</button>     
              <p class="ps-5">от 300 руб.</p>    
            </div>
          </div>
        </div>

      </div>      

    </section>

    <!-- О клинике -->
    <section id="aboutclinic" class="container py-5">
      <h6 class="text-center pb-5">О клинике</h6>
      <div class="row d-flex align-items-center">
        <!-- Картинка -->        
        <div class="col-6 d-none d-lg-block px-5">
          <img class="img-fluid" src="./img/laboratory.png" alt="laboratory">
        </div>

        <!-- Описание --> 
        <div class="col-12 col-lg-6">
          <p class="text-align-justify pb-3 color-grey">«VETPET» – современная ветеринарная клиника, отвечающая строгим европейским стандартам. У нас есть собственная лаборатория, УЗИ, рентген, оснащенное всем необходимым хирургическое отделение. Наши сотрудники постоянно проходят курсы повышения квалификации, совершенствуют свои навыки, осваивают новые терапевтические, хирургические и диагностические методики. </p>
          <p class="text-align-justify color-grey">Врачи нашей Ветеринарной клиники «VETPET» ответственно подходят к лечению каждого пациента, проводят все необходимые диагностические исследования и назначают лечение с учетом индивидуальных особенностей организма. Внимательное отношение, профессионализм и искренняя забота о здоровье ваших питомцев являются основополагающими принципами работы нашей клиники.</p>
        
          <!-- Преимущества --> 
          <div class="row row-cols-1 row-cols-md-2  pt-3">

            <div class="col">
              <div class="advantage">
                <img class="pe-3" src="./img/Врач.png" alt="Врач">
                <p>Квалифицированные врачи</p>
              </div>
              <div class="advantage">
                <img class="pe-3" src="./img/Часы.png" alt="Часы">
                <p>Круглосуточный прием</p>
              </div>
              <div class="advantage">
                <img class="pe-3" src="./img/Оборудование.png" alt="Оборудование">
                <p>Соврменное оборудование</p>
              </div>
            </div>

            <div class="col">
              <div class="advantage">
                <img class="pe-3" src="./img/Лаборатория.png" alt="Лаборатория">
                <p>Срочные анализы</p>
              </div>
              <div class="advantage">
                <img class="pe-3" src="./img/Вызов.png" alt="Вызов">
                <p>Вызов врача на дом</p>
              </div>
              <div class="advantage">
                <img class="pe-3" src="./img/Аптерка.png" alt="Аптека">
                <p>Ветеринарная аптека</p>
              </div>
            </div>

          </div>
        
        </div>
      </div>

    </section>

    <!-- Команда врачей -->
    <section id="doctors" class="container py-5">
      <h6 class="text-center pb-2">Команда врачей</h6>

      <p class="text-center color-grey">Сотрудники клиники - преданные своему делу, любящие животных, прилагают максимум усилий для сохранения жизни и здоровья ваших питомцев.</p>

      <!-- Слайдер -->
      <div class="responsive slider pt-5">

        <!-- 1 -->
        <div class="text-center">
          <img class="img-fluid px-md-3 pb-3" src="./img/laboratory.png" alt="">
          <p class="fw-bold">Ситникова Наталья</p>
          <p class="fw-bold color-blue">Главный ветеринарный врач клиники</p>
          <p class="doctor-info">Травматолог, офтальмолог</p>
          <p class="doctor-info">Стаж 25 лет</p>
        </div>

        <!-- 2 -->            
        <div class="text-center">
          <img class="img-fluid px-md-3 pb-3" src="./img/laboratory.png" alt="">
          <p class="fw-bold">Плотников Сергей</p>
          <p class="fw-bold color-blue">Ветеринарный врач</p>
          <p class="doctor-info">Хирург, эндохирург</p>
          <p class="doctor-info">Стаж 22 года</p>
        </div>

        <!-- 3 -->           
        <div class="text-center">
          <img class="img-fluid px-md-3 pb-3" src="./img/laboratory.png" alt="">
          <p class="fw-bold">Макетов Олег</p>
          <p class="fw-bold color-blue">Ветринарный врач</p>
          <p class="doctor-info">Кардиолог, ренгенолог</p>
          <p class="doctor-info">Стаж 11 лет</p>
        </div>
      
        <!-- 4 -->
        <div class="text-center">
          <img class="img-fluid px-md-3 pb-3" src="./img/laboratory.png" alt="">
          <p class="fw-bold">Лимененко Юлия</p>
          <p class="fw-bold color-blue">Ветринарный врач</p>
          <p class="doctor-info">Травматолог, офтальмолог</p>
          <p class="doctor-info">Стаж 14 лет</p>
        </div>

      </div>

    </section>

    <!-- Отзывы наших клиентов -->
    <section id="review" class="container py-5">
      <h6 class="text-center pb-5">Отзывы наших клиентов</h6>

      <!-- Пример отзыва 1 -->
      <div class="review-card d-grid justify-content-center mb-4">

        <div class="d-grid justify-content-center pb-3">
          <span class="review-name">Ксения</span>
        </div>
        
        <p class="review-text">Хочу поблагодарить персонал клиники и отдельно Ситникову Наталью за чуткое и доброе отношение к животным. 
          Пользуюсь услугами клиники уже четыре года, за все время могу сказать только хорошее, животных действительно лечат!
        </p>

      </div>

      <!-- Пример отзыва 2 -->
      <div class="review-card d-grid justify-content-center mb-5">

        <div class="d-grid justify-content-center pb-3">
          <span class="review-name">Олег</span>
        </div>
        
        <span class="review-text">Замечательная ветеринарная клиника VetPet! Доброжелательный, отзывчивый персонал. 
          Всегда проконсультируют по телефону, нежели во многих других, стоит позвонить даже выслушать не хотят. Рекомендую, сразу приезжайте.
        </span>

      </div>

      <!-- Кнопки -->
      <div class="d-flex justify-content-center">
        <button type="button" onClick='location.href="/reviews#feedbackform"' class="btn btn-details">Оставить свой отзыв</button>     
        <button type="button" onClick='location.href="/reviews"'  class="btn ms-sm-5">Другие отзывы</button>    
      </div>


    </section>

    <!-- Вопросы и ответы -->
    <section id="question" class="container py-5 d-none d-lg-block">
      <h6 class="text-center pb-5">Вопросы и ответы</h6>

      <!-- https://bootstrap-4.ru/docs/5.0/components/list-group/#javascript-behavior -->

      <div class="row">

        <!-- Список вопросов -->
        <div class="col nav d flex-column nav-pills align-items-center justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active py-4" id="question-1-tab" data-bs-toggle="pill" data-bs-target="#question-1" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Принимаете ли экзотических животных?</button>
          <button class="nav-link py-4" id="question-2-tab" data-bs-toggle="pill" data-bs-target="#question-2" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Нужен ветпаспорт для обслуживания?</button>
          <button class="nav-link py-4" id="question-3-tab" data-bs-toggle="pill" data-bs-target="#question-3" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Можно сделать бесплатные прививки?</button>
          <button class="nav-link py-4" id="question-4-tab" data-bs-toggle="pill" data-bs-target="#question-4" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Оформляете справки для переезда?</button>
          <button class="nav-link py-4" id="question-5-tab" data-bs-toggle="pill" data-bs-target="#question-5" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Есть услуги инструктора по вязке?</button>
          <button class="nav-link py-4" id="question-6-tab" data-bs-toggle="pill" data-bs-target="#question-6" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Можно оставить животное на передержку?</button>
        </div>

        <!-- Карточки ответов -->
        <div class="col tab-content mx-3" id="v-pills-tabContent">

          <!-- Вопрос 1. Принимаете ли экзотических животных? -->
          <div class="tab-pane fade show active" id="question-1" role="tabpanel" aria-labelledby="question-1-tab">
            <div class="question-card">
              <p class="question-text">Принимаете ли экзотических животных?</p>
              <p class="pb-3 color-grey">Паспорт оформляется в ветклинике одновременно с проведением первой вакцинации животного.
                В случае отсутствия паспорта, персонал клиники предложит оформление документов.</p>
              <p class="pb-3 color-grey">Дополнительная информация по оформлению ветеринарного паспорта по телефону.</p>
              <img class="img-fluid rounded mx-auto d-block" src="./img/kot.png" alt="">
            </div>
          </div>

          <!-- Вопрос 2. Нужен ветпаспорт для обслуживания? -->
          <div class="tab-pane fade" id="question-2" role="tabpanel" aria-labelledby="question-2-tab">
            <div class="question-card">
              <p class="question-text">Нужен ветпаспорт для обслуживания?</p>
              <p class="pb-3 color-grey">Паспорт оформляется в ветклинике одновременно с проведением первой вакцинации животного.
                В случае отсутствия паспорта, персонал клиники предложит оформление документов.</p>
              <p class="pb-3 color-grey">Дополнительная информация по оформлению ветеринарного паспорта по телефону.</p>
              <img class="img-fluid rounded mx-auto d-block" src="./img/kot.png" alt="">
            </div>
          </div>

          <!-- Вопрос 3. Можно сделать бесплатные прививки? -->
          <div class="tab-pane fade" id="question-3" role="tabpanel" aria-labelledby="question-3-tab">
            <div class="question-card">
              <p class="question-text">Можно сделать бесплатные прививки?</p>
              <p class="pb-3 color-grey">Паспорт оформляется в ветклинике одновременно с проведением первой вакцинации животного.
                В случае отсутствия паспорта, персонал клиники предложит оформление документов.</p>
              <p class="pb-3 color-grey">Дополнительная информация по оформлению ветеринарного паспорта по телефону.</p>
              <img class="img-fluid rounded mx-auto d-block" src="./img/kot.png" alt="">
            </div>
          </div>

          <!-- Вопрос 4. Оформляете справки для переезда? -->
          <div class="tab-pane fade" id="question-4" role="tabpanel" aria-labelledby="question-4-tab">
            <div class="question-card">
              <p class="question-text">Оформляете справки для переезда?</p>
              <p class="pb-3 color-grey">Паспорт оформляется в ветклинике одновременно с проведением первой вакцинации животного.
                В случае отсутствия паспорта, персонал клиники предложит оформление документов.</p>
              <p class="pb-3 color-grey">Дополнительная информация по оформлению ветеринарного паспорта по телефону.</p>
              <img class="img-fluid rounded mx-auto d-block" src="./img/kot.png" alt="">
            </div>
          </div>

          <!-- Вопрос 5. Есть услуги инструктора по вязке? -->
          <div class="tab-pane fade" id="question-5" role="tabpanel" aria-labelledby="question-5-tab">
            <div class="question-card">
              <p class="question-text">Есть услуги инструктора по вязке?</p>
              <p class="pb-3 color-grey">Паспорт оформляется в ветклинике одновременно с проведением первой вакцинации животного.
                В случае отсутствия паспорта, персонал клиники предложит оформление документов.</p>
              <p class="pb-3 color-grey">Дополнительная информация по оформлению ветеринарного паспорта по телефону.</p>
              <img class="img-fluid rounded mx-auto d-block" src="./img/kot.png" alt="">
            </div>
          </div>

          <!-- Вопрос 6. Можно оставить животное на передержку? -->
          <div class="tab-pane fade" id="question-6" role="tabpanel" aria-labelledby="question-6-tab">
            <div class="question-card">
              <p class="question-text">Можно оставить животное на передержку?</p>
              <p class="pb-3 color-grey">Паспорт оформляется в ветклинике одновременно с проведением первой вакцинации животного.
                В случае отсутствия паспорта, персонал клиники предложит оформление документов.</p>
              <p class="pb-3 color-grey">Дополнительная информация по оформлению ветеринарного паспорта по телефону.</p>
              <img class="img-fluid rounded mx-auto d-block" src="./img/kot.png" alt="">
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <!-- Оставить заявку -->
    <section id="services" class="container py-5">
      <div class="row d-flex align-items-center">

        <!-- Форма заполнения заявки -->
        <div class="col-12 col-lg-6">
          <form class="feedback text-center" id="#order" action="{{ route('order-form') }}" method="post">

            <h6 class="text-white">Оставьте заявку</h6>
            <p class="text-white pb-4">Оставьте свои контактные данные и мы свяжемся с Вами в течение 10 минут.</p>

            @include('components.messages_order')

            <!-- Поля ввода -->
            <div class="application-form">
              {{ csrf_field() }}
              <input type="text" class="form-control" id="name_order" name="name_order" placeholder="Ваше имя">
              <input type="text" class="form-control my-3" id="pet_order" name="pet_order"  placeholder="Ваш питомец">
              <input type="text" class="form-control number" id="phone_order" name="phone_order" placeholder="Номер телефона">
            </div>

            <button type="submit" class="btn btn-appointment my-4">Отправить</button>

          </form>
        </div>

        <!-- Картинка -->
        <div class="col-6 d-none d-lg-block px-5">
          <img class="img-fluid" src="./img/laboratory.png" alt="">
        </div>

      </div>

    </section>

    <!-- Подвал -->
    <footer class="footer-background d-flex flex-column" id="footer">
      <section id="contact" class="container">
        
        <h6 class="text-center py-5">Контакты</h6>
        
        <!-- Контакты -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 pb-5">

          <!-- Местонахождение -->
          <div class="col d-flex align-items-center justify-content-lg-center py-2">
            <i class="bi bi-geo-alt-fill color-blue"></i>
            <span class="contacts-inner">Новосибирск</span>
          </div>

          <!-- Часы работы -->
          <div class="col d-flex align-items-center justify-content-lg-center py-2">
            <i class="bi bi-clock-fill color-blue"></i>
            <span class="contacts-inner">Круглосуточно</span>
          </div>

          <!-- Номер телефона -->
          <div class="col d-flex align-items-center justify-content-lg-center py-2">
            <i class="bi bi-telephone-fill color-blue"></i>
            <div class="phone_number d-flex align-content-center">
              <span class="contacts-inner">+7 (383) 213-32-12</span>
            </div>
          </div>

          <!-- Почта -->
          <div class="col d-flex align-items-center justify-content-lg-center py-2">
            <i class="bi bi-envelope-fill color-blue"></i>
            <span class="contacts-inner">info@vetpetclinic.com</span>
          </div>
          
        </div>
        
      </section>
      
      <!-- Карта -->
      <div class="map container d-flex justify-content-center" id="map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2a5efd96a79fe1f7db584e48b12257d52308b4d70c1463e7a0656d74af5f2c7c&amp;width=100%&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
      </div>

      <!-- Подвал -->
      <section class="container py-4 py-lg-5">
        <div class="d-block d-lg-flex text-center justify-content-between align-items-center">

        <h1>VETPET</h1>

        <!-- Кнопки навигации -->
        <div class="col d-none d-lg-flex justify-content-lg-center py-3">
          <div class="px-3"><a href="#action" class="nav-line">Услуги</a></div>
          <div class="px-3"><a href="#services" class="nav-line">Врачи</a></div>
          <div class="px-3"><a href="#aboutclinic" class="nav-line">О нас</a></div>
          <div class="px-3"><a href="#review" class="nav-line">Отзывы</a></div>
          <div class="px-3"><a href="#question" class="nav-line">Вопросы</a></div>
          <div class="px-3"><a href="#contact" class="nav-line">Контакты</a></div>
        </div>

        <!-- Кнопки соцсетей -->
        <div class="wrapper">
          <div class="icon facebook">
            <div class="tooltip">Facebook</div>
            <span><i class="fab fa-facebook-f"></i></span>
          </div>
          <div class="icon twitter">
            <div class="tooltip">Twitter</div>
            <span><i class="fab fa-twitter"></i></span>
          </div>
          <div class="icon instagram">
            <div class="tooltip">Instagram</div>
            <span><i class="fab fa-instagram"></i></span>
          </div>
        </div>

      </div>

      <div class="copyright2 text-center w-100 mt-2"><p>© 2021, Все права защищены. Согласие на обработку персональных данных</p></div>
    </section>
      
    </footer>
  </main>

  <!-- JavaScript -->
  <script src="/libs/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
  <script src="/libs/jquery.min.js"></script>
  <script src="/libs/slick/slick.min.js"></script>
  <script src="/libs/jquery.maskedinput.js"></script>

  <script>
    //Код jQuery, установливающий маску для ввода телефона элементу input
    //1. После загрузки страницы,  когда все элементы будут доступны выполнить...
    $(function(){
      //2. Получить элемент, к которому необходимо добавить маску
      $("#phone_order").mask("8(999) 999-99-99");
    });
  </script>

  <script>
    $(document).ready(function(){
      $(function() {

        $('.variable-width').slick({
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 1,
          centerMode: true,
          centerPadding: '24px',
          variableWidth: true
        });
      });

      $('.responsive').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 450,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });

      $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        asNavFor: '.slider-nav'
      });

      $('.slider-nav').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        focusOnSelect: true,
        responsive: [
        {
            breakpoint: 1400,
            settings: {
              slidesToShow: 6
            }
          },
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 5
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 4
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3
            }
          },
          {
            breakpoint: 425,
            settings: {
              slidesToShow: 2
            }
          }
        ]
      });
    });
  </script>