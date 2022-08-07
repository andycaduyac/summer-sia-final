<script setup>

import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'



</script>

<template>
<div class="container text-white mt-3 p-2 rounded-2 w-auto h-100" style="background-color: rgba(0,0,0, 0.4); backdrop-filter: blur(5px);">
    <div class="container-fluid">
        <h2 class="d-flex justify-content-center">Home</h2>
        <hr>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/pokeball1.jpg" class="d-block w-100" id="carousel-image">
                </div>
                <div class="carousel-item">
                <img src="img/poke-image.jpg" class="d-block w-100" id="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
    </div>

        
    
</div>

    
</template>

    
<script>
    export default {
        layout: Layout
    }
</script>