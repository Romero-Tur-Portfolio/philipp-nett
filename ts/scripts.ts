const header = document.querySelector('header') as HTMLElement;

let winWidth: number;

function setWinWidth(): number {
    return window.innerWidth;
}

const visited = localStorage.getItem('visited');




/* === SET TOP of MENU === */

const headerMenu = document.querySelector('#header__menu-mob') as HTMLElement;

function topOfMenu(): void {
    const headerHeight = header.getBoundingClientRect().height;
    headerMenu.style.top = headerHeight + 'px';
}


/* === // SET TOP of MENU === */




/* === add ARROW-BTNs to LINKS in HEADER-MENU === */

const headerMenuLisWithChildren_a = header.querySelectorAll('li.menu-item-has-children > a') as NodeListOf<HTMLElement>;

headerMenuLisWithChildren_a.forEach( link => {
    const btnWrap = document.createElement('div');
    btnWrap.classList.add('arrow-btn-wrap');

    const btnElement = document.createElement('button');
    btnElement.classList.add('arrow-btn', 'closed');    
    btnWrap.insertAdjacentElement('beforeend', btnElement);

    link.insertAdjacentElement('afterend', btnWrap);

    const subMenu = link.parentElement?.querySelector('.sub-menu');
    subMenu?.classList.add('closed');
});

/* === // add ARROW-BTNs to LINKS in HEADER-MENU === */




/* === TOGGLE SUB-MENU ( toggle HEIGHT ) === */

const arrowBtns = document.querySelectorAll('.arrow-btn');

arrowBtns?.forEach( btn => {
    const subMenu = btn.closest('li')?.querySelector('.sub-menu') as HTMLElement;
    const subMenuLis = subMenu.querySelectorAll('li') as NodeListOf<HTMLElement>;
    btn.addEventListener('click', function(){
        let heightsSum: number = 0;
        if( btn.classList.contains('closed') ){
            btn.classList.remove('closed');
            btn.classList.add('opened');
        } else {
            btn.classList.remove('opened');
            btn.classList.add('closed');
        }

        if( subMenu.classList.contains('closed') ){
            subMenu.classList.remove('closed');
            subMenu.classList.add('opened');

            subMenuLis.forEach( li => {
                const liHeight = li.getBoundingClientRect().height;
                heightsSum += liHeight;
            });

            subMenu.style.height = heightsSum + 'px';

        } else {
            subMenu.classList.remove('opened');
            subMenu.classList.add('closed');
            subMenu.style.height = 0 + 'px';
        }
    });
});

/* === // TOGGLE SUB-MENU ( toggle HEIGHT ) === */




/* === SET HEIGHT of PARALLAX WINDOWs === */

const parallaxWindows = document.querySelectorAll('.parallax-window') as NodeListOf<HTMLElement>;

function parallaxWindowsHeight(): void {
    parallaxWindows?.forEach( window => {
        const winWidth = window.getBoundingClientRect().width;
        const winHeight: number = winWidth * (9/16);
        window.style.height = winHeight + 'px';
    });
}

/* === // SET HEIGHT of PARALLAX WINDOWs === */




/* === TOGGLE OPENERs to CLOSE and OPEN === */

const openerSenders = document.querySelectorAll('[data-opener-sender]');
const openerReceivers = document.querySelectorAll('[data-opener-receiver]');
    
openerSenders?.forEach( (sender) => {
    const senderDataAtt = sender.getAttribute('data-opener-sender');
    const receiver = document.querySelector(`[data-opener-receiver="${senderDataAtt}"]`);
    sender.addEventListener("click", function(){
        if(sender.classList.contains("closed")){
            sender.classList.remove("closed");
            sender.classList.add("opened");
        } else if ( sender.classList.contains("opened") ){
            sender.classList.remove("opened");
            sender.classList.add("closed");
        }
        
        if( receiver?.classList.contains('closed') ){
            receiver.classList.remove('closed');
            receiver.classList.add('opened');
        } else if ( receiver?.classList.contains('opened') ){
            receiver.classList.remove('opened');
            receiver.classList.add('closed');
        }
    });
});

/* === // TOGGLE OPENERs to CLOSE and OPEN === */




/* === add PLACEHOLDER and set REQUIRED to TEXTAREA === */

const textarea = document.querySelector('form textarea#message');
textarea?.setAttribute('placeholder', 'Ihre Nachricht *');
const required: string | undefined | null = textarea?.getAttribute('aria-required');

if( required === 'true' ) {
    textarea?.setAttribute('required', 'true');
}

/* === // add PLACEHOLDER and set REQUIRED to TEXTAREA === */




/* === add HOVER to SUBMIT BTN in CONTACT-FORM === */

const formSubmitBtn = document.querySelector('form input[type=submit]') as HTMLElement;

formSubmitBtn?.addEventListener('mouseover', function(){
    const arrowSpan = formSubmitBtn.parentElement?.querySelector('span.arrow');
    arrowSpan?.classList.add('show');
});

formSubmitBtn?.addEventListener('mouseout', function(){
    const arrowSpan = formSubmitBtn.parentElement?.querySelector('span.arrow');
    arrowSpan?.classList.remove('show');
});

/* === // add HOVER to SUBMIT BTN in CONTACT-FORM === */




/* === add CLASSes to TEXT-IMG-ZIG-ZAG === */

const textImgZigZags = document.querySelectorAll('.text-img-zig-zag') as NodeListOf<HTMLElement>;

textImgZigZags?.forEach( block => {
    const textContentPs = block.querySelectorAll('p') as NodeListOf<HTMLElement>;
    textContentPs?.forEach( p => {
        p.classList.add('col-12', 'col-md-10', 'col-lg-9', 'col-xl-7');
    });

    textContentPs[0].classList.add('ps-lg-5', 'pe-lg-5', 'pe-xl-8', 'pe-xxl-10', 'pe-xxxl-11');

    for( let i=1; i < textContentPs.length; i++ ){
        if( i % 2 == 0 ){
            textContentPs[i].classList.add('offset-xl-5', 'ps-lg-5', 'pe-lg-5', 'pe-xl-8', 'pe-xxl-10', 'pe-xxxl-11');
        } else {
            textContentPs[i].classList.add('offset-lg-3', 'offset-md-2', 'offset-xl-0', 'pe-lg-5', 'ps-lg-5', 'ps-xl-8', 'ps-xxl-10', 'ps-xxxl-11');
        }
    }
});

/* === // add CLASSes to TEXT-IMG-ZIG-ZAG === */




/* === add CLASSes to SERVICES-OVERVIEW-BLOCKs === */

const servicesOverviewBlocks = document.querySelectorAll('.services-overview-block');

servicesOverviewBlocks?.forEach( block => {
    const servicesEntries = block.querySelectorAll('.services__entry');

    servicesEntries[0]?.classList.add('col-lg-9');
    servicesEntries[0]?.querySelector('.services__entry__link')?.classList.add('flex-lg-row');
    servicesEntries[0]?.querySelector('.services__entry__img')?.classList.add('col-lg-6');
    servicesEntries[0]?.querySelector('.services__entry__strings')?.classList.add('col-lg-6', 'ps-lg-5', 'ps-xl-6', 'ps-xxl-7', 'mt-lg-0');

    servicesEntries[1]?.classList.add('offset-lg-6', 'mtn-lg-6', 'mtn-xl-8', 'mtn-xxl-9', 'mtn-xxxl-11');
    servicesEntries[1]?.querySelector('.services__entry__strings')?.classList.add('mt-lg-4', 'mt-xl-5', 'mt-xxl-6');

    const entry_1_nextSibling = servicesEntries[1]?.nextElementSibling;
    if( entry_1_nextSibling != undefined ){
        if( !entry_1_nextSibling.classList.contains('services-quote') ){
            servicesEntries[1]?.classList.add('mb-lg-7', 'mb-xl-8');
        }
    }

    block.querySelector('.services-quote.d-lg-block')?.classList.add('col-lg-5');

    servicesEntries[2]?.classList.add('col-lg-9', 'offset-lg-3');
    servicesEntries[2]?.querySelector('.services__entry__link')?.classList.add('flex-lg-row');
    servicesEntries[2]?.querySelector('.services__entry__img')?.classList.add('col-lg-6');
    servicesEntries[2]?.querySelector('.services__entry__strings')?.classList.add('col-lg-6', 'ps-lg-5', 'ps-xl-6', 'ps-xxl-7');

});

/* === // add CLASSes to SERVICES-OVERVIEW-BLOCKs === */




/* === add CLOSE-EVENT to AVIS === */

const avis = document.querySelector('#avis') as HTMLElement;
const avisBtn = avis?.querySelector('#avis__btn') as HTMLElement;
avisBtn?.addEventListener('click', function(): void {
    avis.style.display = 'none';
});

/* === // add CLOSE-EVENT to AVIS === */




/* === ANIMATION at FIRST VISIT === */

const fader = document.querySelector('#fader') as HTMLElement;
const fader_bg = document.querySelector('#fader-bg') as HTMLElement;
const topString = fader?.querySelector('#img-top') as HTMLElement;
const topString__img = topString.querySelector('img') as HTMLElement;
const bottomString = fader?.querySelector('#img-bottom') as HTMLElement;
const bottomString__img = bottomString.querySelector('img') as HTMLElement;
const logoContainer = fader?.querySelector('#video-container') as HTMLElement;
const logoVideo = fader?.querySelector('#video-container video') as HTMLVideoElement | null;

const headerLogoTop = document.querySelector('#header__logo__top') as HTMLElement;

const headerLogoBottom = document.querySelector('#header__logo__bottom') as HTMLElement;


fader?.addEventListener('click', function(): void {
    
    const headerLogoTop_top = headerLogoTop.getBoundingClientRect().top;
    const headerLogoTop_width = headerLogoTop.getBoundingClientRect().width;

    const headerLogoBottom_top = headerLogoBottom.getBoundingClientRect().top;
    const headerLogoBottom_width = headerLogoBottom.getBoundingClientRect().width;

    const headerHeight: number = header.getBoundingClientRect().height;
    const topStringHeight: number = topString.getBoundingClientRect().height;    
    
    topString.classList.add('show');
    bottomString.classList.add('show');
    bottomString.style.top = `calc(50% + 20px + ${topStringHeight}px)`;

    setTimeout(function(): void {
        logoContainer.classList.add('show');
        logoVideo?.play();

        setTimeout(function(): void {
            logoContainer.classList.add('rise');
            fader.style.height = headerHeight + 'px';

            topString.style.top = headerLogoTop_top + 'px';
            topString__img.style.width = headerLogoTop_width + 'px';

            bottomString.style.top = headerLogoBottom_top + 'px';
            bottomString__img.style.width = headerLogoBottom_width + 'px';

            setTimeout(function(): void {
                fader.classList.add('hide');
                fader_bg.classList.add('hide');

                setTimeout(function(): void {
                    fader.classList.add('d-none');
                    fader_bg.classList.add('d-none');
                }, 2000);
            }, 2000);

        }, 2500)

    }, 2000);
});

/* === // ANIMATION at FIRST VISIT === */




/* === adjust LEFT and TOP of QUICK-CALL-PANE === */

const quickCallPanes = document.querySelectorAll('.quick-call-pane') as NodeListOf<HTMLElement>;

function adjustQuickCallPane(): void {
    quickCallPanes?.forEach( pane => {
        const paneWidth = 510;
        const targetVal = pane.getAttribute('data-opener-receiver');
        const triggerElem = document.querySelector(`[data-opener-sender="${targetVal}"]`) as HTMLElement;
        const top = triggerElem.getBoundingClientRect().top as number;
        const height = triggerElem.getBoundingClientRect().height as number;
        const left = triggerElem.getBoundingClientRect().left as number;

        pane.style.top = top + height + 'px';

        if( (winWidth - left) <= paneWidth ){
            pane.style.left = (winWidth - paneWidth) + 'px';
        } else {
            pane.style.left = left + 'px';
        }

        checkFullWidthQuickCallPane(pane);
    });
}

/* === // adjust LEFT and TOP of QUICK-CALL-PANE === */




/* === set WIDTH 100% of QUICK-CALL-PANE if WINWIDTH is small === */

function checkFullWidthQuickCallPane(pane: HTMLElement): void {
    if( winWidth <= 480 ){
        pane.classList.add('quick-call-pane--full');
    } else {
        pane.classList.remove('quick-call-pane--full');
    }
};

/* === // set WIDTH 100% of QUICK-CALL-PANE if WINWIDTH is small === */




/* === add CLOSE-EVENT to QUICK-CALL-PANE === */

quickCallPanes.forEach( pane => {
    const closeBtn = pane.querySelector('.quick-call-pane__btn') as HTMLElement;
    closeBtn.addEventListener('click', function(): void {
        pane.classList.remove('opened');
        pane.classList.add('closed');
    });
});

/* === // add CLOSE-EVENT to QUICK-CALL-PANE === */




window.addEventListener('load', function(): void {

    winWidth = setWinWidth();
    topOfMenu();
    adjustQuickCallPane();
    parallaxWindowsHeight();
    
    if( visited === 'true' ){
        fader.classList.remove("d-block");
        fader.classList.add("d-none");
        fader_bg.classList.remove("d-block");
        fader_bg.classList.add("d-none");
    }
    
    localStorage.setItem('visited', 'true');
});

window.addEventListener('resize', function(): void {
    winWidth = setWinWidth();
    topOfMenu();
    adjustQuickCallPane();
    parallaxWindowsHeight();
})