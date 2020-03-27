<template>
    <div>
        <div class="container mt-2" v-for="articulo in articulos" :key="articulo.id">
            <div class="card mt-2">            
                <div class="card-body">
                    <h5 class="card-title">{{ articulo.titulo }}</h5>
                    <p class="card-text">
                        {{ articulo.descripcion }}                        
                    </p>
                    <router-link :to="{ name: 'blog', params: { slug: articulo.slug } }" class="btn btn-primary">Leer articulo</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            articulos: null
        }
    },
    methods: {
        fill() {
            axios.get('/api/blog')
            .then(response => {
                this.articulos = response.data.data
            })
        }
    },
    mounted() {
        this.fill();
    },
}
</script>