const nav = document.querySelector('#nav')
const navToggle = document.querySelector('#navToggle')

pathName = unescape(window.location.href);
docName = pathName.substring( pathName.lastIndexOf('/') + 1, pathName.length );

if (pathName != "http://activebox2/content/about.php" && pathName != "http://activebox2/content/team.php") {
    
    //Фиксированная шапка
    const header = document.querySelector("#header");
    const btn = document.querySelector(".btn--long");
    const intro = document.querySelector("#Intro");

    function addHeaderFixed() {
        let scrollPos = window.scrollY;
        let introH = intro.clientHeight;

        if (scrollPos > introH) {
            header.classList.add('fixed');
        } else {
            header.classList.remove('fixed');
        }
    }

    window.addEventListener("scroll", addHeaderFixed);
    document.addEventListener("DOMContentLoaded", addHeaderFixed);

    //Плавный скролл
    const anchors = document.querySelectorAll('a[href*="#"]')

    for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault()
        
        const blockID = anchor.getAttribute('href').substr(1)

        document.getElementById(blockID).scrollIntoView({
        behavior: 'smooth',      
        block: 'start'
        })

        if (nav.classList.contains('show')) {
            nav.classList.remove('show')
        }
        else nav.classList.add('show')

    })
    }

    //Слайдер
    const slider = $('#reviewsSlider');

    slider.slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 4000
    });

    //Форма
    const formLink = document.querySelector('#intro__formLink');

    formLink.addEventListener('click', function() {
        let introForm = document.querySelector('#introForm')

        if (introForm.classList.contains('active')) {
            introForm.classList.remove('active')
        }
        else introForm.classList.add('active');      
    })

      //Вывод даты
    var time = setInterval(function() {

        
        let footerDate = $('#footerDate');

        var date = new Date();
        Year = date.getFullYear();
        Month = date.getMonth();
        Day = date.getDate();
        Hours = date.getHours();
        let fHours = Hours;
        Minutes = date.getMinutes();
        let fMinutes = Minutes;
        Seconds = date.getSeconds();
        let fSeconds = Seconds;
    
        switch (Month)
        {
            case 0: fMonth="January"; break;
            case 1: fMonth="February"; break;
            case 2: fMonth="March"; break;
            case 3: fMonth="April"; break;
            case 4: fMonth="May"; break;
            case 5: fMonth="June"; break;
            case 6: fMonth="July"; break;
            case 7: fMonth="August"; break;
            case 8: fMonth="September"; break;
            case 9: fMonth="October"; break;
            case 10: fMonth="November"; break;
            case 11: fMonth="December"; break;          
        }
        switch (Hours)
        {
            case 0: fHours="00"; break;
            case 1: fHours="01"; break;
            case 2: fHours="02"; break;
            case 3: fHours="03"; break;
            case 4: fHours="04"; break;
            case 5: fHours="05"; break;
            case 6: fHours="06"; break;
            case 7: fHours="07"; break;
            case 8: fHours="08"; break;
            case 9: fHours="09"; break;       
        }
        switch (Minutes)
        {
            case 0: fMinutes="00"; break;
            case 1: fMinutes="01"; break;
            case 2: fMinutes="02"; break;
            case 3: fMinutes="03"; break;
            case 4: fMinutes="04"; break;
            case 5: fMinutes="05"; break;
            case 6: fMinutes="06"; break;
            case 7: fMinutes="07"; break;
            case 8: fMinutes="08"; break;
            case 9: fMinutes="09"; break;        
        }
        switch (Seconds)
        {
            case 0: fSeconds="00"; break;
            case 1: fSeconds="01"; break;
            case 2: fSeconds="02"; break;
            case 3: fSeconds="03"; break;
            case 4: fSeconds="04"; break;
            case 5: fSeconds="05"; break;
            case 6: fSeconds="06"; break;
            case 7: fSeconds="07"; break;
            case 8: fSeconds="08"; break;
            case 9: fSeconds="09"; break;        
        }
        footerDate.text("Today is " + Day + " " + fMonth
        + " " + Year + "y." + "   " + fHours + ":" + fMinutes + ":" + fSeconds); 
     }, 1000);

     // Works__content - show
    let works = document.querySelector(".works");

    works.addEventListener('mouseover', function(event) {
        if(event.target)
        {
            event.target.classList.add('active');
        }
        
    });
    works.addEventListener('mouseout', function(event) {
        if(event.target)
        {
            event.target.classList.remove('active');
        }
        
    });
}

//Бургер меню
navToggle.addEventListener('click', function(e) {
    e.preventDefault()
    if (nav.classList.contains('show')) {
        nav.classList.remove('show')
    }
    else nav.classList.add('show')    
})

//Form actions
$('.form__button').hover(
    function(){
        $('.form__button').css('background-color', 'rgba(0, 113, 240, 0.7)');
    },
    function(){
        $('.form__button').css('background-color', '#0071f0');
    }
);

//Show authorize form
const login_icon = document.getElementById('header__login');
const modal_form = document.querySelector('.modal__form');
login_icon.addEventListener('click', function() {

    modal_form.classList.add('show');
})

document.getElementById('close__modal').addEventListener('click', function() {
    modal_form.classList.remove('show');
})

const exit_but = document.getElementById('exit');
exit_but.addEventListener('click', function() {
    exit_but.classList.add('clicked');
})
  // //Проверка ввода email
    // function validateEmail(email) {
    //     // var reg = /^[a-z 0-9][a-z 0-9\.\-_] * [a-z 0-9]@[a-z 0-9][a-z 0-9] + \.[a-z]{2,}$/igmu;
    //     // var reg  = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //     // var reg = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/i;
    //     // var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    //     // var reg = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    //     // var reg = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i;
    //     var reg = /^[A-Z][A-Z0-9._%+-]+@[A-Z0-9-]+\.[A-Z]{2,4}$/i;
    //     return reg.test(email);
    // }
    // function validatePhone(phone) {
    //     var reg = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
    //     return reg.test(phone);
    // }

    // // function validate() {
    // //     var email = $("#email").val();
    // //     var phone = $("#phone").val();      
    // //     if (validateEmail(email) && validatePhone(phone)) {
    // //         alert("Your contacts accepted");
    // //     } else {
    // //         alert("Incorrect data!");
    // //     }
    // //     return false;
    // // }
    // // $("#formButton").bind("click", validate);