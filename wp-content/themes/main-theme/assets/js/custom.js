// очистит url от ид блока после перехода к нему
// $('a[href^="#"]').on('click', function (t) {
//     t.preventDefault();
//     t = $(this).attr("href");
//     $("html,body").animate({
//         scrollTop: $(t).offset().top - 40
//     }, "slow")
//     history.pushState('', document.title, window.location.pathname + window.location.search);
// });



[...document.querySelectorAll('[data-href]')].forEach(button => {
    button.addEventListener('click', (event)=> {
        return window.open(event.target.getAttribute('data-href'))
    })
})



// tab button
const tabButton = document.querySelectorAll('[data-tab]')
const tabContent = document.querySelectorAll('[data-item]')

tabButton.length > 0 && tabButton[0].classList.add('active');
tabContent.length > 0 && tabContent[0].classList.add('active');

tabButton.forEach(button => {
    const buttonIcon = button.querySelector('span');
    button.addEventListener('click', (evt)=>{
        if(evt.target == button) {
            switchActiveTab(evt.target)
        } else if (evt.target.parentNode == button) {
            switchActiveTab(evt.target.parentNode)
        } else if(evt.target.parentNode == buttonIcon) {
            switchActiveTab(buttonIcon.parentNode)
        }
    });
});
function switchActiveTab (event) {
    clearActiveClass(tabButton)
    clearActiveClass(tabContent)
    event.classList.add('active')
    clearActiveClass(tabContent)
    if(!tabContent[event.dataset.tab].classList.contains('active')){
        tabContent[event.dataset.tab].classList.add('active');
    }
}
function clearActiveClass ($ArrElements) {
    $ArrElements.forEach(el => {
        el.classList.remove('active')
    })
}

[...document.querySelectorAll('[data-list]')].forEach(list => {
    list.addEventListener('click', (event) => {
        if(event.target.dataset.btn === "more") {
            list.querySelector('[data-list-content]').classList.toggle('cl--opened')
        }
    })
})

const casinoList = document.querySelectorAll('[data-casino-item]');
casinoList.forEach($el => {
    $el.addEventListener('click', evt => {
        if(evt.target.classList.contains('js-lc-more')) {
            $el.classList.toggle('cl--opened')
        }
    })
})