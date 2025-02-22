<!DOCTYPE html>
<html lang="ru">
  

<head> 
    <meta charset="UTF-8">
    <meta name="vievport" content="vidth=device-vidth, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="statia2.css">
  
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap" rel="stylesheet">
    
  <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
  <link rel = "shortcut icon" href = "icon.jpg">  

<title>Бегемотя</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel = "stylesheet" href = "kursach.css">

  <div class="header">
    <div class="logo">
      <img src="logo.png">
    </div>

<!-- шапка -->
<nav role="navigation" class="primary-navigation">

  <ul>
    <li><a href="index.php">Главная</a></li>
    <li><a href="form.php">Профиль</a></li>
    <li><a href="categories.php">Игрушки</a></li>
    <li><a href="O-nas.php">О нас</a></li>
    <li><a href="obsuzhdenie.php">Обсуждение</a></li>
    <?php if($_SESSION['user']['role'] == 'admin') { ?>
    <li><a href="products.php">Добавление продукта</a></li>
    <?php } ?>
  </ul>
</nav>
</div>
</head>

<body>
<div class="stzagolovok"> 
  <h1>Как выбрать интерактивную игрушку?</h1>
</div>

<div class="imagest1"> 
    <img src="imagest1.jpg">
</div>

<div class="stpodzagolovok1">
Техноигрушки развивают физические и умственные навыки детей. Они разрабатывают моторику, речь, тренируют память. Производители предлагают гаджеты в виде героев сериалов, мультфильмов и мира животных. Не обошлось и без классического варианта – дочки-матери.
<br>
Умные игрушки учат ребенка нескольким вещам:
<br>
двигаться;
<br>
различать звуки и слова;
<br>
учить песни и стишки;
<br>
алфавиту.
<br>
А главное, они учат ребенка самостоятельности. Кроха с раннего возраста учится управлять, принимать решения, заботиться. Наблюдая за игрой малыша, родители распознают задатки тех или иных способностей. Это позволяет выбрать направление дальнейшего обучения.
<br>
Интерактивные игрушки делятся:
<br>
на возрастные категории;
<br>
гаджеты для девочек и мальчиков;
<br>
обучающие или развивающие;
<br>
по принципу использования.
<br>
<div class="imagest2"> 
    <img src="imagest2.jpg">
</div>
<h2>Выбираем по возрасту</h2>
Для малышей 1 года и старше производители предлагают небольших и симпатичных представителей мира животных. Крохи могут играть с гаджетами, поющими песенки, рассказывающими небольшие стишки. Они не только развлекают ребенка, пока родители заняты. Малыш пытается копировать поведение понравившегося объекта и старается повторять песни и стихи. Так развивается память, речь.
Для ребенка старше 3 лет выбирают забавы более сложные. 
Малыши уже имеют небольшой опыт просмотра теле- и видеоигр, мультфильмов. 
Для этой возрастной категории выбирают развивающие и обучающие развлечения. Это забавные киногерои, образы из популярных мультфильмов и комиксов. Они станут друзьями крохи и будут развивать его интерес к окружающему миру. В этом возрасте важно приучить малышей заботиться об окружающих. Для них создают кукол, требующих элементарных навыков ухода. Такие игрушки смеются и плачут, пьют молоко и пачкают пеленки. 
Играя такими пупсами, малыш учится заботе, ответственности, долгу и сочувствию.
<br>
<br>
<blockquote>
    <p>Часть компаний предлагает с этого возраста приучать детей к компьютерам. Выбор такой техноигрушки зависит от навыков и способностей малыша. Некоторые дети в этом возрасте, следуя примеру родителей, пытаются нажимать кнопки клавиатуры и экрана. Но не все имеют большую тягу к таким развлечениям. К тому же просмотр картинок может привести к проблемам со зрением. Выбирать такие суперигрушки ребенку в 3-4 года или подождать, решают родители.</p>
    <footer>— <cite></cite></footer>
  </blockquote>
<br>
Для младших школьников логично выбирать технозабавы, наделенные искусственным интеллектом. Это роботы, которые развивают интерес детей к изобретению новых «живых» машин, миникомпьютеры, трансформеры. Игрушки, наделенные искусственным интеллектом, помогают:
<br>
понять основные принципы программирования;
<br>
экспериментировать;
<br>
искать оригинальные решения;
<br>
работать со смартфонами.
<br>
В процессе игры у школьника развиваются лидерские качества, навыки работы на компьютере. Ребенок приучается к IT-технологиям. У него пропадет страх перед работой на настоящем гаджете. Такие навыки помогают адаптироваться к современным требованиям. Игрушки в форме телефона и глобуса развивают познания об окружающем мире, готовят к школе или помогают в изучении школьной программы.
<br>
<div class="imagest3"> 
    <img src="imagest3.jpg">
</div>
<h2>Девочки-мальчики</h2>
Привычные куклы и пупсы для девочек сейчас «научились» говорить, плакать, выражать эмоции. Они реагируют на голос и поведение человека. Игра такими суперигрушками развивает ответственность и приучает к заботе о слабых и беспомощных.
Машинки и роботы для мальчиков управляются пультом. Они выполняют десятки действий. Определение таких игрушек, как предназначенные для мальчиков, условное. Многие девочки с удовольствием проводят время с техноигрушками.
<h2>Из чего сделан гаджет</h2>
Материал играет важную роль для детской вещи. Открывая окружающий мир, малыш пробует вещи на зуб. Он может грызть и пытаться откусить часть понравившейся игрушки. Особенно в период, когда у ребенка режутся зубы.
<h2>Бренды</h2>
Важный вопрос – кто сделал вещь – приобретает особое значение, когда речь идет о товарах для детей. Западные производители гарантируют высокое качество материала, длительное использование игрушками, даже если малыши пытаются их сломать или разобрать (что они часто любят делать). Но такие суперзабавы стоят дорого.
<br>
Американская компания Mattel – лидер в данном секторе рынка. Фирма длительное время занимается разработкой и выпуском суперигрушек для детей. Выбирая товар этого бренда, родители дают малышу качественную и безопасную интерактивную игрушку.
<br>
Компания Hasbro – это еще один американский производитель для потребителей детского возраста. Эта фирма придумала хиты, ставшие отдельными субкультурами. Монополия, Покемоны, трансформеры-автороботы – детища этого концерна. Изделия фирмы рассчитаны на все возрастные категории, развивают различные качества: умение анализировать и считать ходы наперед, преодолевать препятствия, сочувствовать и заботиться. Покупая суперигрушку бренда, родители заботятся о развитии интеллекта ребенка, его умении адаптироваться в социуме.
<br>
<br>
<blockquote>
    <p>Яркие и пластичные материалы производят из химических веществ. Часть из них токсична и вызывает раздражение и болезни после соприкосновения с кожей. Детские товары не должны вызывать такие реакции.</p>
    <footer>— <cite></cite></footer>
  </blockquote>
</div>
<div class="imagestend"> 
    <img src="imagestend.jpg">
</div>

</div>
</body>
</html>