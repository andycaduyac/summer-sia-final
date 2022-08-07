<template>
    <div class="container text-white mt-3 p-2 rounded-2 h-100" style="background-color: rgba(0,0,0, 0.4); backdrop-filter: blur(5px);">
        <div class="container-fluid">
            <section>
                <p id="contact">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Contact Page</p>
                <br>
                <p style="font-size:1.2em">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;For Enquiries: </p>
                <p style="font-size:1.2em">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;andycaduyac@gmail.com</p>
            </section>
            
        </div>
    </div>
</template>

<script setup>
    import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
}
</script>

<style>
    #contact{
        font-size: 2.1em;
        margin-top: 120px;
    }
</style>