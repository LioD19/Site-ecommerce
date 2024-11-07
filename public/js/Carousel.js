class Carousel {

    /**
     * @param {HTMLElement} element 
     * @param {Object} options 
     * @param {Object} [options.slidesToScroll] Nombre d'élément a faire defiler
     * @param {Object} [options.slidesVisible] Nombre d'élément visible dans un slide
     * @param {boolean} [options.loop=false] doit-on boucler en fin de slide ?
     * @param {boolean} [options.loop=infinite=false]
     * @param {boolean} [options.pagination=false]
     */
    constructor (element, options = {}) {
        this.element = element
        this.options = Object.assign({}, {
            slidesToScroll: 1,
            slidesVisible: 1,
            loop: false,
            pagination: false,
            navigation:true,
            infinite: false
        }, options)
        let children = [].slice.call(element.children)
        this.isMobile = false
        this.currentSlide = 0
        this.moveCallBacks = []

        //Modification du DOM
        this.root = this.createDivWithClass('carousel')
        this.panorama = this.createDivWithClass('panorama__container')
        this.root.setAttribute('tabindex', '0')
        this.root.appendChild(this.panorama)
        this.element.appendChild(this.root)
        this.items = children.map((child) => {
            let item = this.createDivWithClass('carousel__item')
            item.appendChild(child)
            return item
        });
        if(this.options.infinite) {
            let offset = this.options.slidesVisible * 2 - 1
            this.items = [
                ...this.items.slice(this.items.length - offset).map(item => item.cloneNode(true)),
                ...this.items,                
                ...this.items.slice(0, offset).map(item => item.cloneNode(true))
            ]
            this.gotToItem(offset, false)
        }
        this.items.forEach(item => this.panorama.appendChild(item))
        this.setStyle()
        if(this.options.navigation) {
            this.createNavigation()
        }
        if(this.options.pagination) {
            this.createPagination()
        }

        //Evenement
        this.moveCallBacks.forEach(cb => cb(this.currentSlide))
        this.onWindowResize()
        window.addEventListener('resize', this.onWindowResize.bind(this))
        this.root.addEventListener('keyup', (e) => {
            if(e.key === 'ArrowRight' || e.key === 'Right') {
                this.next()
            }else if(e.key === 'ArrowLeft' || e.key === 'Left') {
                this.prev()
            }
        })
        if(this.options.infinite) {
            this.panorama.addEventListener('transitionend', this.resetInfinte.bind(this))
        }
    }

    setStyle() {
        let ratio = this.items.length / this.slidesVisible
        this.panorama.style.width = (ratio * 100) + "%"
        this.items.forEach(item => item.style.width = ((100 / this.slidesVisible) / ratio) + "%")
    }

    /**
     * Crée la navigation
     */
    createNavigation () {
        let nextButton = this.createDivWithClass('carousel__next')
        let prevButton = this.createDivWithClass('carousel__prev')
        this.root.appendChild(nextButton)
        this.root.appendChild(prevButton)
        nextButton.addEventListener('click', this.next.bind(this))
        prevButton.addEventListener('click', this.prev.bind(this))
        if(this.options.loop === true) {
            return 
        }
        this.onMove(index => {
            if(index === 0){
                prevButton.classList.add('carousel__prev--hidden')
            }else{                
                prevButton.classList.remove('carousel__prev--hidden')
            }
            if(this.items[this.currentSlide + this.slidesVisible] === undefined) {
                nextButton.classList.add('carousel__next--hidden')
            }else {
                nextButton.classList.remove('carousel__next--hidden')
            }
        })
    }

    /**
     * Crée la pagination Dans le DOM
     */
    createPagination () {
        let pagination = this.createDivWithClass('carousel__pagination')
        let buttons = []
        this.root.appendChild(pagination)
        for(let i = 0; i < this.items.length; i = i + this.options.slidesToScroll) {
            let button = this.createDivWithClass('carousel__pagination__button')
            button.addEventListener('click', () => this.gotToItem(i))
            pagination.appendChild(button)
            buttons.push(button)
        }
        this.onMove(index => {
          let activeButton =  buttons[Math.floor(index / this.options.slidesToScroll)]
          if(activeButton) {
            buttons.forEach(button => button.classList.remove('carousel__pagination__button--active'))
            activeButton.classList.add('carousel__pagination__button--active')
          }
        })
    }

    next() {
        this.gotToItem(this.currentSlide + this.slidesToScroll)
    }

    prev() {
        this.gotToItem(this.currentSlide - this.slidesToScroll)
    }

    /**
     * decale le slide vers l'élément suivant
     * @param {number} index 
     */
    gotToItem(index, animation = true) {
        if(index < 0) {
            if(this.options.loop) {
                index = this.items.length - this.slidesVisible
            }else {
                return
            } 
        }else if(index >= this.items.length || (this.items[this.currentSlide + this.slidesVisible] === undefined && index > this.currentSlide)) {
            if(this.options.loop) {
                index = 0
            }else {
                return
            }
        }
        let translateX = index * -100 / this.items.length
        if(animation === false) {
            this.panorama.style.transition = 'none'
        }
        this.panorama.style.transform = 'translate3d('+ translateX + '%, 0, 0)'
        this.panorama.offsetHeight
        if(animation === false) {
            this.panorama.style.transition = ''
        }
        this.currentSlide = index
        this.moveCallBacks.forEach(cb => cb(index))

    }

    resetInfinte () {

    }

    onMove(cb) {
        this.moveCallBacks.push(cb)
    }

    onWindowResize() {
        let mobile = window.innerWidth < 900
        if(mobile !== this.isMobile) {
            this.isMobile = mobile
            this.setStyle()
            this.moveCallBacks.forEach(cb => cb(this.currentSlide))
        }
    }

    createDivWithClass(className) {
        let div = document.createElement('div')
        div.setAttribute('class', className)
        return div
    }

    get slidesToScroll () {
        return this.isMobile ? 2 : this.options.slidesToScroll
    }

    get slidesVisible () {
        return this.isMobile ? 2 : this.options.slidesVisible
    }

}

let onReady = function () {
    new Carousel(document.querySelector('.carousel1'), {
        slidesVisible: 3,
        slidesToScroll: 3,
    })
} 

if(document.readyState !== 'loading') {
    onReady()
}

document.addEventListener('DOMContentLoaded', onReady)
