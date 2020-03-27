<template>
    <div class="container mt-2">
        <div class="card mt-2">            
            <div class="card-body">
                <h5 class="card-title">Publicar nuevo Articulo</h5>
                
                <form @submit.prevent="enviar">
                    <div class="form-group">
                        <label for="titulo">titulo</label>
                        <input type="text" class="form-control" v-model="titulo" id="titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea v-model="decripcion" class="form-control" id="descripcion" rows="3" placeholder="Breve descripcion para el incio"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Contenido / MarkDown</label>
                        <vue-simplemde v-model="content" ref="markdownEditor" />
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import VueSimplemde from 'vue-simplemde'
export default {
    components: {
        VueSimplemde
    },
    data() {
        return {
           titulo: "" ,
           descripcion: "",
           content: ""
        }
    },
    methods: {
        enviar(){
            axios.post('/api/blog', {
                titulo: this.titulo,
                descripcion: this.descripcion,
                content: this.content
            }).then(response => {
                if(response.data.error){
                    
                }else{
                    this.$router.push({ name: 'blog', params: {slug: response.data.data.slug} });
                }
            })
        }
    },
}
</script>

<style>
  @import '~simplemde/dist/simplemde.min.css';
</style>