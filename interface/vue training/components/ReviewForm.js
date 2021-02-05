// {}

app.component('review-form', {
    template:
    /*html*/
    `<form class="review-form" @submit.prevent="onSubmit">
        <h3>Leave a review</h3>
        <label for="name" v-model="name">Name:</label>
        <input id="name">

        <label for="review" v-model="review">Review:</label>
        <textarea id="review"></textarea>

        <label for="rating" v-model.number="rating">Rating:</label>
        <select id="rating">
            <option>5</option>
            <option>4</option>
            <option>3</option>
            <option>2</option>
            <option>1</option>
        </select>

        <input class="button" type="submit" value="submit">
    </form>`,
    data() {
        return {
            name: '',
            review: '',
            rating: null
        }
    },
    methods: {
        onSubmit() {
            let productReview = {
                name: this.name,
                review: this.review,
                rating: this.rating
            }
            this.$emit('review-submitted', productReview)
            
            this.name = ''
            this.review = ''
            this.rating = null
        }
    }
})