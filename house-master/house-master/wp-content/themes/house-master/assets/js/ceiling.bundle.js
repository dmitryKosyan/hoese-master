!function () { "use strict"; (() => { const t = document.querySelector(".header__burger-block"), e = document.querySelector(".header__menu-popup"), o = document.querySelector(".header__burger-close"), n = document.querySelector(".header__burger-inner"); t.addEventListener("click", (() => { e.classList.toggle("header__active-burger"), n.classList.toggle("header__active-bg"), o.classList.toggle("header__active-close"), console.log("hello") })) })(), function () { const t = document.querySelectorAll(".cost__area-button"), e = document.querySelector(".cost__button.plus"), o = document.querySelector(".cost__button.minus"), n = document.querySelector(".corner-plus"), c = document.querySelector(".corner-minus"), r = document.querySelector(".ligth-plus"), u = document.querySelector(".ligth-minus"), l = document.querySelector(".big__ligth-plus"), s = document.querySelector(".big__ligth-minus"), _ = document.querySelector(".pipe__plus"), a = document.querySelector(".pipe__minus"); let i = document.querySelector(".cost__area-count"), d = document.querySelector(".cost__area-count.corners"), m = document.querySelector(".cost__area-count.ligth"), g = document.querySelector(".big__ligth"), y = document.querySelector(".pipe__count"), x = document.querySelector(".cost__total-price"); t.forEach((t => { const q = t.querySelector(".cost__button.plus"), C = t.querySelector(".cost__button.minus"); q.addEventListener("click", (t => { t.target === _ && y.textContent++, t.target === r && m.textContent++, t.target === n && d.textContent++, t.target === e && i.textContent++, t.target === l && g.textContent++, x.textContent = 20 * +i.textContent + 10 * (+d.textContent - 4) + 10 * +m.textContent + 10 * g.textContent + 10 * +y.textContent })), C.addEventListener("click", (t => { t.target === o && (i.textContent--, +i.textContent <= 0 && (i.textContent = 0)), t.target === a && (y.textContent--, +y.textContent <= 0 && (y.textContent = 0)), t.target === c && (d.textContent--, +d.textContent <= 4 && (d.textContent = 4)), t.target === u && (m.textContent--, +m.textContent <= 0 && (m.textContent = 0)), t.target === s && (g.textContent--, +g.textContent <= 0 && (g.textContent = 0)), x.textContent = 20 * +i.textContent + 10 * (+d.textContent - 4) + 10 * +m.textContent + 10 * g.textContent + 10 * +y.textContent })) })) }(), function () { const t = document.querySelector(".type__items").querySelectorAll(".type__item"), e = document.querySelectorAll(".type__img-block"); t.forEach((t => { t.addEventListener("click", (() => { e.forEach((e => { e.classList.remove("active"), t.id === e.id && e.classList.add("active") })) })) })) }(), document.querySelectorAll(".questions__item").forEach((t => { const e = t.querySelector(".questions__icon"), o = t.querySelector(".questions__text"); e.addEventListener("click", (() => { e.classList.toggle("rotate"), o.classList.toggle("full__text") })) })) }();
const burger = () => {
    const burger = document.querySelector('.header__burger-block')
    const popup = document.querySelector('.header__menu-popup')
    const close = document.querySelector('.header__burger-close')
    const bgInner = document.querySelector('.header__burger-inner')
    burger.addEventListener('click', () => {
        popup.classList.toggle('header__active-burger')
        bgInner.classList.toggle('header__active-bg')
        close.classList.toggle('header__active-close')

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