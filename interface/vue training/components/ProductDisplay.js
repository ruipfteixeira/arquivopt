app.component('product-display', {
    props: {
        premium: {
            type: Boolean,
            required: true
        }
    },
    template:
    /*html*/
    `<div class="product-display">
        <div class="product-container">
          <div class="product-image">
            <img :src="image">
          </div>
          <div class="product-info">
            <h1>{{ product }}</h1>
            <a :href="url">Parlamento</a>
            <p v-if="inventory > 10">In stock</p>

            <p>Shipping: {{ shipping() }}</p>

            <ul>
                <li v-for="detail in details">
                    {{ detail }}
                </li>
            </ul>
            <div
                v-for="variant in variants"
                :key="variant.id"
                @mouseover="updateImage(variant.image)"
                class="color-circle"
                :style="{ backgroundColor: variant.color}">

            </div>
            <button class="button" v-on:click="addToCart">Add to cart</button>
            <button class="button" v-if="cart > 0" v-on:click="removeFromCart">Remove from cart</button>
          </div>
        </div>
        <review-list :reviews="reviews"></review-list>
        <review-form @review-submitted="addReview"></review-form>
      </div>`,
      data() {
        return {
            product: 'Socks',
            image: './assets/images/parliament1.png',
            url: 'https://www.parlamento.pt',
            inventory: 100,
            details: ['50% cotton', '30% wool', '20% polyester'],
            variants: [
                {id: 2234, color:'green', image: './assets/images/parliament1.png'},
                {id: 2235, color:'blue', image: './assets/images/parliament2.png'}
            ],
            reviews:[]
        }
    },
    methods: {
        addToCart() {
            this.$emit('add-to-cart')
        },
        removeFromCart() {
            this.$emit('remove-from-cart')
        },
        updateImage(variantImage) {
            this.image = variantImage
        },
        shipping() {
            if(this.premium) {
                return 'Free'
            }
            return 2.99
        },
        addReview(review) {
            this.reviews.push(review)
        }
    }
})