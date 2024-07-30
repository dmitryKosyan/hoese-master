!function () { "use strict"; (() => { const e = document.querySelector(".header__burger-block"), t = document.querySelector(".header__menu-popup"), o = document.querySelector(".header__burger-close"), c = document.querySelector(".header__burger-inner"); e.addEventListener("click", (() => { t.classList.toggle("header__active-burger"), c.classList.toggle("header__active-bg"), o.classList.toggle("header__active-close"), console.log("hello") })) })(), function () { const e = document.querySelectorAll(".cost__checkbox"), t = document.querySelector(".cost__plus"), o = document.querySelector(".cost__minus"), c = document.querySelector(".cost__total-number"), n = document.querySelector(".cost__area-count"), r = []; let l = 0; e.forEach((t => { t.addEventListener("click", (() => { t.checked && (r.push(+t.value), l = r.reduce(((e, t) => e + t), 0)), t.checked || (r.pop(+t.value), l = 0, n.textContent = 0, c.textContent = 0, e.forEach((e => { e.checked = !1 }))) })) })), t.addEventListener("click", (() => { n.textContent++, c.textContent = l * +n.textContent })), o.addEventListener("click", (() => { n.textContent--, +n.textContent <= 0 && (n.textContent = 0), c.textContent = l * +n.textContent })) }() }();


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
    const orderButton = document.querySelector('.works__link')
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
function orderFormTwo() {
    const orderButton = document.querySelector('.cost__link')
    const contactForm = document.querySelector('.contacts__two-form')
    const www = document.querySelector('.contacts__two-name')
    const ggg = document.querySelector('.contacts__two-email ')
    const rrr = document.querySelector('.contacts__two-button')

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
orderFormTwo();