<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шабайкина - Тестовое задание</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="header__info">
            <ul class="header__top_list">
                <li> <span>режим работы:</span>  ежедневно с 10:00 до 22:00</li>
                <li> <span>тел:</span> +7(499)394-30-29</li>
                <li> <span>email:</span> info@snilsa.net</li>
                <li> <span>наш адрес:</span> ул.Сходненская, д. 50</li>
            </ul>
        </div>
        <div class="header__body">
            <a href="#" class="header__logo">
                <img src="src/logo.png" alt="Snils.su страховое свидетельство государственного пенсионного страхования">
            </a>
            <div class="header__burger">
                <span></span>
            </div>
        </div>
        <nav class="header__list">
            <ul class="header__bottom_list">
                <li> <a href="#"> Главная</a></li>
                <li class="header__sub"> <a class="dropdown" href="#1" >Вопросы и ответы</a> <div class="dropbtn"></div>
                    <ul class="header__bottom_sub_menu">
                        <li><a href="#2">Порядок работы</a></li>
                        <li><a href="#3">Контакты</a></li>
                        <li><a href="#4">Сделать заявку</a></li>
                    </ul>
                </li> <!--Такие ссылки для демонстрации работы скрипта по определению активной страницы-->
                <li><a href="#2">Порядок работы</a></li>
                <li><a href="#3">Контакты</a></li>
                <li><a href="#4">Сделать заявку</a></li>
            </ul>
        </nav>
    </header>
    <div class="bkg">
        <div class="container">
            <h1>Страховое свидетельство государственного пенсионного страхования</h1>
        </div>
    </div>
    <div class="first_block container">
        <div class="first_block__head">
            Снилс, что за документ и зачем он нужен?
        </div>
        <p class="first_block__text_1" >СНИЛС − номер лицевого счёта гражданина Российской Федерации, используемый в системе пенсионного страхования. Он становится основой для 
            сосредоточения максимально полной информации о рабочем стаже человека и уровне страховых отчислений (взносов), производимых на его имя. 
            Таким образом, вопрос, нужен ли СНИЛС, даже не стоит.</p>
        <div class="first_block__body">
            <img src="src/snils.png" alt="Снилс, что за документ и зачем нужен?">
            <div class="first_block__info">
                <p class="first_block__text_2">
                    Внешне СНИЛС представляет собой зелёную карту − страховое свидетельство государственного пенсионного страхования. Указанный документ необходим для решения таких задач:
                </p>
                <ul class="first_block__list">
                    <li>Перевод средств работнику в счёт будущей пенсии;</li>
                    <li>Регистрация лица на портале госуслуг;</li>
                    <li>Обмен информацией о том или ином гражданине между разными 
                        инстанциями и структурами</li>
                    <li>Получение всех видов социальных пособий (государственной помощи)</li>
                </ul>
            </div>
        </div>
        <span class="first_block__text_3">Теперь вы понимаете, какой СНИЛС важный документ, и наверняка займётесь вопросом его оформления.</span>
    </div>
    <div class="second_block">
        <div class="container">
            <p class="second_block__text_1">Теперь вы понимаете, какой СНИЛС важный документ,  и наверняка займётесь вопросом его оформления. Процесс 
                оформления документа зависит от того, трудоустроены 
                 ли вы или не работаете на официальных основаниях.</p>
            <h2>
                Как и где сделать снилс?
            </h2>
            <div class="second_block__body">
                <div class="second_block__info_1">
                    <img src="src/second_block_1.png" alt="Как и где сделать снилс, если вы трудоустроены">
                    <span>
                        Вы трудоустроены
                    </span>
                    <p>
                        Вам не придётся заботиться об этом процессе. Сделать СНИЛС 
                        через 2 недели после приёма на работу должен ваш руководитель (требуется заполнение анкеты АДВ-1 и паспорт).
                    </p>
                </div>
                <div class="second_block__info_2">
                    <img src="src/second_block_2.png" alt="Как и где сделать снилс, если вы не работаетена официальных основаниях">
                    <span>
                        Не работает на официальных основаниях
                    </span>
                    <p>Если же вы не работаете, то должны сами обратиться в отделение Пенсионного 
                        фонда по месту регистрации. Перечень документов минимален и включает в 
                        себя: 1) анкету застрахованного лица, которая составляется по форме АДВ-1; 2) паспорт.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="third_block">
        <div class="container">
            <img class="third_block__img_1" src="src/third_block.png" alt="Задать вопрос менеджеру">
            <div class="third_block__img_2"></div>
            <span class = "third_block__text_1">Если у вас есть вопросы, задайте их нашим менеджерам</span>
            <form>
                <span>Задать вопрос менеджеру</span>
                <hr>
                <input type="text" placeholder = 'Ваше имя*'>
                <input type="text" placeholder = 'Телефон*'>
                <textarea  rows="5" placeholder = 'Ваш вопрос...'></textarea>
                <input class = "third_block__submit" type="submit" value="Отправить запрос">
            </form>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>