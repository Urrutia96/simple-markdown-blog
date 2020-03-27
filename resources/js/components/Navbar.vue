<template>
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <router-link class="navbar-brand" :to="{ name: 'home' }">Simple Blog</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <router-link class="p-2" :to="{ name: 'home' }">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="p-2" :to="{ name: 'publicar' }">Publicar</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
</template>

<script>
    export default {
        name: 'Navbar'
    }
</script>
