!function () { "use strict"; const e = document.querySelectorAll(".type-board__item"), t = document.querySelectorAll(".type-board__img-block"); e.forEach((e => { e.addEventListener("click", (() => { t.forEach((t => { t.classList.remove("active"), e.id === t.id && t.classList.add("active") })) })) })), document.querySelectorAll(".cost__item").forEach((e => { const t = e.querySelector(".cost__item-img"), c = e.querySelector(".cost__table-head"); t.addEventListener("click", (() => { c.classList.toggle("cost__table-active"), t.classList.toggle("rotate") })) })), (() => { const e = document.querySelector(".header__burger-block"), t = document.querySelector(".header__menu-popup"), c = document.querySelector(".header__burger-close"), o = document.querySelector(".header__burger-inner"); e.addEventListener("click", (() => { t.classList.toggle("header__active-burger"), o.classList.toggle("header__active-bg"), c.classList.toggle("header__active-close"), console.log("hello") })) })() }();
const burger = () => {
    const burger = document.querySelector('.header__burger-block')
    const popup = document.querySelector('.header__menu-popup')
    const close = document.querySelector('.header__burger-close')
    const bgInner = document.querySelector('.header__burger-inner')
    burger.addEventListener('click', () => {
        popup.classList.toggle('header__active-burger')
        bgInner.classList.toggle('header__active-bg')
        close.classList.toggle('header__active-close')
        console.log('hello')
    })

}
burger()