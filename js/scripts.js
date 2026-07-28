"use strict";
const header = document.querySelector('header');
let winWidth;
function setWinWidth() {
    return window.innerWidth;
}
const visited = localStorage.getItem('visited');
/* === SET TOP of MENU === */
const headerMenu = document.querySelector('#header__menu-mob');
function topOfMenu() {
    const headerHeight = header.getBoundingClientRect().height;
    headerMenu.style.top = headerHeight + 'px';
}
/* === // SET TOP of MENU === */
/* === add ARROW-BTNs to LINKS in HEADER-MENU === */
const headerMenuLisWithChildren_a = header.querySelectorAll('li.menu-item-has-children > a');
headerMenuLisWithChildren_a.forEach(link => {
    var _a;
    const btnWrap = document.createElement('div');
    btnWrap.classList.add('arrow-btn-wrap');
    const btnElement = document.createElement('button');
    btnElement.classList.add('arrow-btn', 'closed');
    btnWrap.insertAdjacentElement('beforeend', btnElement);
    link.insertAdjacentElement('afterend', btnWrap);
    const subMenu = (_a = link.parentElement) === null || _a === void 0 ? void 0 : _a.querySelector('.sub-menu');
    subMenu === null || subMenu === void 0 ? void 0 : subMenu.classList.add('closed');
});
/* === // add ARROW-BTNs to LINKS in HEADER-MENU === */
/* === TOGGLE SUB-MENU ( toggle HEIGHT ) === */
const arrowBtns = document.querySelectorAll('.arrow-btn');
arrowBtns === null || arrowBtns === void 0 ? void 0 : arrowBtns.forEach(btn => {
    var _a;
    const subMenu = (_a = btn.closest('li')) === null || _a === void 0 ? void 0 : _a.querySelector('.sub-menu');
    const subMenuLis = subMenu.querySelectorAll('li');
    btn.addEventListener('click', function () {
        let heightsSum = 0;
        if (btn.classList.contains('closed')) {
            btn.classList.remove('closed');
            btn.classList.add('opened');
        }
        else {
            btn.classList.remove('opened');
            btn.classList.add('closed');
        }
        if (subMenu.classList.contains('closed')) {
            subMenu.classList.remove('closed');
            subMenu.classList.add('opened');
            subMenuLis.forEach(li => {
                const liHeight = li.getBoundingClientRect().height;
                heightsSum += liHeight;
            });
            subMenu.style.height = heightsSum + 'px';
        }
        else {
            subMenu.classList.remove('opened');
            subMenu.classList.add('closed');
            subMenu.style.height = 0 + 'px';
        }
    });
});
/* === // TOGGLE SUB-MENU ( toggle HEIGHT ) === */
/* === SET HEIGHT of PARALLAX WINDOWs === */
const parallaxWindows = document.querySelectorAll('.parallax-window');
function parallaxWindowsHeight() {
    parallaxWindows === null || parallaxWindows === void 0 ? void 0 : parallaxWindows.forEach(window => {
        const winWidth = window.getBoundingClientRect().width;
        const winHeight = winWidth * (9 / 16);
        window.style.height = winHeight + 'px';
    });
}
/* === // SET HEIGHT of PARALLAX WINDOWs === */
/* === TOGGLE OPENERs to CLOSE and OPEN === */
const openerSenders = document.querySelectorAll('[data-opener-sender]');
const openerReceivers = document.querySelectorAll('[data-opener-receiver]');
openerSenders === null || openerSenders === void 0 ? void 0 : openerSenders.forEach((sender) => {
    const senderDataAtt = sender.getAttribute('data-opener-sender');
    const receiver = document.querySelector(`[data-opener-receiver="${senderDataAtt}"]`);
    sender.addEventListener("click", function () {
        if (sender.classList.contains("closed")) {
            sender.classList.remove("closed");
            sender.classList.add("opened");
        }
        else if (sender.classList.contains("opened")) {
            sender.classList.remove("opened");
            sender.classList.add("closed");
        }
        if (receiver === null || receiver === void 0 ? void 0 : receiver.classList.contains('closed')) {
            receiver.classList.remove('closed');
            receiver.classList.add('opened');
        }
        else if (receiver === null || receiver === void 0 ? void 0 : receiver.classList.contains('opened')) {
            receiver.classList.remove('opened');
            receiver.classList.add('closed');
        }
    });
});
/* === // TOGGLE OPENERs to CLOSE and OPEN === */
/* === add PLACEHOLDER and set REQUIRED to TEXTAREA === */
const textarea = document.querySelector('form textarea#message');
textarea === null || textarea === void 0 ? void 0 : textarea.setAttribute('placeholder', 'Ihre Nachricht *');
const required = textarea === null || textarea === void 0 ? void 0 : textarea.getAttribute('aria-required');
if (required === 'true') {
    textarea === null || textarea === void 0 ? void 0 : textarea.setAttribute('required', 'true');
}
/* === // add PLACEHOLDER and set REQUIRED to TEXTAREA === */
/* === add HOVER to SUBMIT BTN in CONTACT-FORM === */
const formSubmitBtn = document.querySelector('form input[type=submit]');
formSubmitBtn === null || formSubmitBtn === void 0 ? void 0 : formSubmitBtn.addEventListener('mouseover', function () {
    var _a;
    const arrowSpan = (_a = formSubmitBtn.parentElement) === null || _a === void 0 ? void 0 : _a.querySelector('span.arrow');
    arrowSpan === null || arrowSpan === void 0 ? void 0 : arrowSpan.classList.add('show');
});
formSubmitBtn === null || formSubmitBtn === void 0 ? void 0 : formSubmitBtn.addEventListener('mouseout', function () {
    var _a;
    const arrowSpan = (_a = formSubmitBtn.parentElement) === null || _a === void 0 ? void 0 : _a.querySelector('span.arrow');
    arrowSpan === null || arrowSpan === void 0 ? void 0 : arrowSpan.classList.remove('show');
});
/* === // add HOVER to SUBMIT BTN in CONTACT-FORM === */
/* === add CLASSes to TEXT-IMG-ZIG-ZAG === */
const textImgZigZags = document.querySelectorAll('.text-img-zig-zag');
textImgZigZags === null || textImgZigZags === void 0 ? void 0 : textImgZigZags.forEach(block => {
    const textContentPs = block.querySelectorAll('p');
    textContentPs === null || textContentPs === void 0 ? void 0 : textContentPs.forEach(p => {
        p.classList.add('col-12', 'col-md-10', 'col-lg-9', 'col-xl-7');
    });
    textContentPs[0].classList.add('ps-lg-5', 'pe-lg-5', 'pe-xl-8', 'pe-xxl-10', 'pe-xxxl-11');
    for (let i = 1; i < textContentPs.length; i++) {
        if (i % 2 == 0) {
            textContentPs[i].classList.add('offset-xl-5', 'ps-lg-5', 'pe-lg-5', 'pe-xl-8', 'pe-xxl-10', 'pe-xxxl-11');
        }
        else {
            textContentPs[i].classList.add('offset-lg-3', 'offset-md-2', 'offset-xl-0', 'pe-lg-5', 'ps-lg-5', 'ps-xl-8', 'ps-xxl-10', 'ps-xxxl-11');
        }
    }
});
/* === // add CLASSes to TEXT-IMG-ZIG-ZAG === */
/* === add CLASSes to SERVICES-OVERVIEW-BLOCKs === */
const servicesOverviewBlocks = document.querySelectorAll('.services-overview-block');
servicesOverviewBlocks === null || servicesOverviewBlocks === void 0 ? void 0 : servicesOverviewBlocks.forEach(block => {
    var _a, _b, _c, _d, _e, _f, _g, _h, _j, _k, _l, _m, _o, _p, _q, _r, _s, _t, _u, _v;
    const servicesEntries = block.querySelectorAll('.services__entry');
    (_a = servicesEntries[0]) === null || _a === void 0 ? void 0 : _a.classList.add('col-lg-9');
    (_c = (_b = servicesEntries[0]) === null || _b === void 0 ? void 0 : _b.querySelector('.services__entry__link')) === null || _c === void 0 ? void 0 : _c.classList.add('flex-lg-row');
    (_e = (_d = servicesEntries[0]) === null || _d === void 0 ? void 0 : _d.querySelector('.services__entry__img')) === null || _e === void 0 ? void 0 : _e.classList.add('col-lg-6');
    (_g = (_f = servicesEntries[0]) === null || _f === void 0 ? void 0 : _f.querySelector('.services__entry__strings')) === null || _g === void 0 ? void 0 : _g.classList.add('col-lg-6', 'ps-lg-5', 'ps-xl-6', 'ps-xxl-7', 'mt-lg-0');
    (_h = servicesEntries[1]) === null || _h === void 0 ? void 0 : _h.classList.add('offset-lg-6', 'mtn-lg-6', 'mtn-xl-8', 'mtn-xxl-9', 'mtn-xxxl-11');
    (_k = (_j = servicesEntries[1]) === null || _j === void 0 ? void 0 : _j.querySelector('.services__entry__strings')) === null || _k === void 0 ? void 0 : _k.classList.add('mt-lg-4', 'mt-xl-5', 'mt-xxl-6');
    const entry_1_nextSibling = (_l = servicesEntries[1]) === null || _l === void 0 ? void 0 : _l.nextElementSibling;
    if (entry_1_nextSibling != undefined) {
        if (!entry_1_nextSibling.classList.contains('services-quote')) {
            (_m = servicesEntries[1]) === null || _m === void 0 ? void 0 : _m.classList.add('mb-lg-7', 'mb-xl-8');
        }
    }
    (_o = block.querySelector('.services-quote.d-lg-block')) === null || _o === void 0 ? void 0 : _o.classList.add('col-lg-5');
    (_p = servicesEntries[2]) === null || _p === void 0 ? void 0 : _p.classList.add('col-lg-9', 'offset-lg-3');
    (_r = (_q = servicesEntries[2]) === null || _q === void 0 ? void 0 : _q.querySelector('.services__entry__link')) === null || _r === void 0 ? void 0 : _r.classList.add('flex-lg-row');
    (_t = (_s = servicesEntries[2]) === null || _s === void 0 ? void 0 : _s.querySelector('.services__entry__img')) === null || _t === void 0 ? void 0 : _t.classList.add('col-lg-6');
    (_v = (_u = servicesEntries[2]) === null || _u === void 0 ? void 0 : _u.querySelector('.services__entry__strings')) === null || _v === void 0 ? void 0 : _v.classList.add('col-lg-6', 'ps-lg-5', 'ps-xl-6', 'ps-xxl-7');
});
/* === // add CLASSes to SERVICES-OVERVIEW-BLOCKs === */
/* === add CLOSE-EVENT to AVIS === */
const avis = document.querySelector('#avis');
const avisBtn = avis === null || avis === void 0 ? void 0 : avis.querySelector('#avis__btn');
avisBtn === null || avisBtn === void 0 ? void 0 : avisBtn.addEventListener('click', function () {
    avis.style.display = 'none';
});
/* === // add CLOSE-EVENT to AVIS === */
/* === ANIMATION at FIRST VISIT === */
const fader = document.querySelector('#fader');
const fader_bg = document.querySelector('#fader-bg');
const topString = fader === null || fader === void 0 ? void 0 : fader.querySelector('#img-top');
const topString__img = topString.querySelector('img');
const bottomString = fader === null || fader === void 0 ? void 0 : fader.querySelector('#img-bottom');
const bottomString__img = bottomString.querySelector('img');
const logoContainer = fader === null || fader === void 0 ? void 0 : fader.querySelector('#video-container');
const logoVideo = fader === null || fader === void 0 ? void 0 : fader.querySelector('#video-container video');
const headerLogoTop = document.querySelector('#header__logo__top');
const headerLogoBottom = document.querySelector('#header__logo__bottom');
fader === null || fader === void 0 ? void 0 : fader.addEventListener('click', function () {
    const headerLogoTop_top = headerLogoTop.getBoundingClientRect().top;
    const headerLogoTop_width = headerLogoTop.getBoundingClientRect().width;
    const headerLogoBottom_top = headerLogoBottom.getBoundingClientRect().top;
    const headerLogoBottom_width = headerLogoBottom.getBoundingClientRect().width;
    const headerHeight = header.getBoundingClientRect().height;
    const topStringHeight = topString.getBoundingClientRect().height;
    topString.classList.add('show');
    bottomString.classList.add('show');
    bottomString.style.top = `calc(50% + 20px + ${topStringHeight}px)`;
    setTimeout(function () {
        logoContainer.classList.add('show');
        logoVideo === null || logoVideo === void 0 ? void 0 : logoVideo.play();
        setTimeout(function () {
            logoContainer.classList.add('rise');
            fader.style.height = headerHeight + 'px';
            topString.style.top = headerLogoTop_top + 'px';
            topString__img.style.width = headerLogoTop_width + 'px';
            bottomString.style.top = headerLogoBottom_top + 'px';
            bottomString__img.style.width = headerLogoBottom_width + 'px';
            setTimeout(function () {
                fader.classList.add('hide');
                fader_bg.classList.add('hide');
                setTimeout(function () {
                    fader.classList.add('d-none');
                    fader_bg.classList.add('d-none');
                }, 2000);
            }, 2000);
        }, 2500);
    }, 2000);
});
/* === // ANIMATION at FIRST VISIT === */
/* === adjust LEFT and TOP of QUICK-CALL-PANE === */
const quickCallPanes = document.querySelectorAll('.quick-call-pane');
function adjustQuickCallPane() {
    quickCallPanes === null || quickCallPanes === void 0 ? void 0 : quickCallPanes.forEach(pane => {
        const paneWidth = 510;
        const targetVal = pane.getAttribute('data-opener-receiver');
        const triggerElem = document.querySelector(`[data-opener-sender="${targetVal}"]`);
        const top = triggerElem.getBoundingClientRect().top;
        const height = triggerElem.getBoundingClientRect().height;
        const left = triggerElem.getBoundingClientRect().left;
        pane.style.top = top + height + 'px';
        if ((winWidth - left) <= paneWidth) {
            pane.style.left = (winWidth - paneWidth) + 'px';
        }
        else {
            pane.style.left = left + 'px';
        }
        checkFullWidthQuickCallPane(pane);
    });
}
/* === // adjust LEFT and TOP of QUICK-CALL-PANE === */
/* === set WIDTH 100% of QUICK-CALL-PANE if WINWIDTH is small === */
function checkFullWidthQuickCallPane(pane) {
    if (winWidth <= 480) {
        pane.classList.add('quick-call-pane--full');
    }
    else {
        pane.classList.remove('quick-call-pane--full');
    }
}
;
/* === // set WIDTH 100% of QUICK-CALL-PANE if WINWIDTH is small === */
/* === add CLOSE-EVENT to QUICK-CALL-PANE === */
quickCallPanes.forEach(pane => {
    const closeBtn = pane.querySelector('.quick-call-pane__btn');
    closeBtn.addEventListener('click', function () {
        pane.classList.remove('opened');
        pane.classList.add('closed');
    });
});
/* === // add CLOSE-EVENT to QUICK-CALL-PANE === */
window.addEventListener('load', function () {
    winWidth = setWinWidth();
    topOfMenu();
    adjustQuickCallPane();
    parallaxWindowsHeight();
    if (visited === 'true') {
        fader.classList.remove("d-block");
        fader.classList.add("d-none");
        fader_bg.classList.remove("d-block");
        fader_bg.classList.add("d-none");
    }
    localStorage.setItem('visited', 'true');
});
window.addEventListener('resize', function () {
    winWidth = setWinWidth();
    topOfMenu();
    adjustQuickCallPane();
    parallaxWindowsHeight();
});
