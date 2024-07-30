!function () { "use strict"; (() => { const e = document.querySelector(".header__burger-block"), t = document.querySelector(".header__menu-popup"), c = document.querySelector(".header__burger-close"), o = document.querySelector(".header__burger-inner"); e.addEventListener("click", (() => { t.classList.toggle("header__active-burger"), o.classList.toggle("header__active-bg"), c.classList.toggle("header__active-close") })) })(), function () { const e = document.querySelectorAll(".types__variable-description"), t = document.querySelectorAll(".types__item"), c = document.querySelectorAll(".types__info"); t.forEach((t => { t.addEventListener("click", (() => { c.forEach((e => { e.classList.remove("active"), t.id === e.id && e.classList.add("active") })), e.forEach((e => { e.classList.remove("active"), t.id === e.id && e.classList.add("active") })) })) })) }(); const e = document.querySelectorAll(".cost__checkbox"), t = document.querySelector(".cost__area-count"), c = document.querySelector(".cost__button.plus"), o = document.querySelector(".cost__button.minus"), n = document.querySelector(".cost__total-price"), r = []; let l = 0; c.addEventListener("click", (e => { t.textContent++, n.textContent = l * +t.textContent })), o.addEventListener("click", (() => { t.textContent--, +t.textContent <= 0 && (t.textContent = 0), n.textContent = l * +t.textContent })), e.forEach((e => { e.addEventListener("click", (() => { e.checked && r.push(+e.value), e.checked || r.pop(+e.value), l = r.reduce(((e, t) => e + t), 0) })) })) }();
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
function order() {
    const orderButton = document.querySelector('.cost__total-link')
    const contactForm = document.querySelector('.contacts__form')
    const www = document.querySelector('.contacts__name')
    const ggg = document.querySelector('.contacts__email')
    const rrr = document.querySelector('.contacts__button')

    orderButton.addEventListener('click', (event) => {
        contactForm.style.display = "flex";
        event.stopPropagation();
    })
    document.addEventListener('click', (e) => {
        if (e.target !== www && e.target !== ggg && e.target !== rrr && e.target !== contactForm) {
            contactForm.style.display = "none";
        }
    })
}
order();