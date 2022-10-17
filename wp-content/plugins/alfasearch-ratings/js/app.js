document.addEventListener('DOMContentLoaded', () => {
    const tabButton = document.querySelectorAll('[data-tab]')
    const tabContent = document.querySelectorAll('[data-item]')

    tabButton.length > 0 && tabButton[0].classList.add('active');
    tabContent.length > 0 && tabContent[0].classList.add('active');

    tabButton.forEach(button => {
        button.addEventListener('click', (evt)=>{
            switchActiveTab(evt)
        });
    });
    function switchActiveTab (event) {
        clearActiveClass(tabButton)
        clearActiveClass(tabContent)
        event.target.classList.add('active')
        clearActiveClass(tabContent)
        if(!tabContent[event.target.dataset.tab].classList.contains('active')){
            tabContent[event.target.dataset.tab].classList.add('active');
        }
    }
    function clearActiveClass ($ArrElements) {
        $ArrElements.forEach(el => {
            el.classList.remove('active')
        })
    }

})