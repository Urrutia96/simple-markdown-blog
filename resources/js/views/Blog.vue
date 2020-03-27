<template>
    <div class="container mt-2">
        <div class="card mt-2">            
            <div class="card-body">
                <h5 class="card-title">{{ articulo.titulo }}</h5>
                <p v-html="articulo.content"></p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            articulo: null
        }
    },
    methods: {
        fill(){
            axios.get('/api/blog/'+this.$route.params.slug)
            .then(response => {
                this.articulo = response.data.data
            });
        }
    },
    created() {
        this.fill();
    },
}
</script>