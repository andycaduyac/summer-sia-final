<template>
<div class="container text-white mt-2 p-2 rounded-2 h-100" style="background-color: rgba(0,0,0, 0.4); backdrop-filter: blur(5px);">
    <div class="container">
        <h3 class="d-flex justify-content-center">Pokémon</h3>

        <hr>
        <!-- <ul v-for="pokemon in pokemons" :key="pokemon.id" >
            <li >
                {{pokemon.generation}}
                <ul>
                    <li>
                        {{pokemon.pokemon1}}
                    </li>
                    <li>
                        {{pokemon.pokemon2}}
                    </li>
                    <li>
                        {{pokemon.pokemon3}}
                    </li>
                </ul>
                
            </li>
        </ul> -->
        <div class="d-flex justify-content-between">
            <div class="card bg-dark" style="width: 20rem;" v-for="pokemon in pokemons" :key="pokemon.id">
            <div class="card-body" >
                <h5 class="card-title">{{pokemon.generation}}</h5>
                <ul>
                    <li>{{pokemon.pokemon1}}</li> 
                    <li>{{pokemon.pokemon2}}</li> 
                    <li>{{pokemon.pokemon3}}</li>
                </ul>
            </div>
            </div>
        
        </div>

</div>
    
</div>
   
</template>


<script setup>
    import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
    props: {
        pokemons: Array
    }
}
</script>
<style>
.card {
    width: 375px;
}
</style>