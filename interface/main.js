// {}

const app = Vue.createApp({
    data() {
        return {
            cart: 0,
            product: 'Socks',
            image: './assets/images/parliament1.png',
            url: 'https://www.parlamento.pt',
            inventory: 100,
            details: ['50% cotton', '30% wool', '20% polyester'],
            variants: [
                {id: 2234, color:'green', image: './assets/images/parliament1.png'},
                {id: 2235, color:'blue', image: './assets/images/parliament2.png'}
            ]
        }
    },
    methods: {
        addToCart() {
            this.cart += 1
        },
        removeFromCart() {
            this.cart -= 1
        },
        updateImage(variantImage) {
            this.image = variantImage
        }
    }
})