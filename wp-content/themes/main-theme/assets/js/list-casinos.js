class ShowMore {
    constructor(container, items, countShow){
        this.$container = document.querySelector(container)
        this.$items = this.$container.querySelectorAll(items)
        this.countShow = countShow
    }
    init() {
        if (this.$items.length <= this.countShow) {
            this.$container.querySelector('button').remove()
            return
        } else {
            this.$container.querySelector('button').innerHTML = this.$items.length - this.countShow + "+"
        }
        this.$items.forEach(($el, index) => {
            $el.classList.add('d-n')
            if(index < this.countShow ){
                this.$items[index].classList.remove('d-n')
            }
        })
        this.$container.addEventListener('click', (e) => {
            if(e.target.classList.contains('js-more-options')) {
                this.showElement(this.$items)
            }
            e.target.remove()
        })
    }
    showElement($el) {
        $el.forEach(($el) => {
            $el.classList.remove('d-n')
        })
    }
}

new ShowMore('[data-cbFlags]', 'span.cb__flag', 21).init()
new ShowMore('[data-deposit-methods]', 'span.cb__pay', 5).init()
new ShowMore('[data-withdrawal-methods]', 'span.cb__pay', 5).init()
