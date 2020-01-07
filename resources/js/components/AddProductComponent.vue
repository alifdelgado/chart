<template>
    <form @submit.prevent="createProduct" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" v-model="product.name" id="name" class="form-control shadow">
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="number" name="year" v-model="product.year" id="year" class="form-control shadow">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" v-model="product.price" id="price" class="form-control shadow">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block shadow">Create Product</button>
        </div>
    </form>
</template>

<script>
    export default {
        data(){
            return {
                product: {}
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            createProduct(){
                let uri = '/products/store'
                axios.post(uri, this.product).then(response => {
                    window.location.reload();
                });
            }
        }
    }
</script>
