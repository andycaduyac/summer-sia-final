<template>
    <nav class="navbar navbar-expand-md py-3 bg-secondary">
        <div class="container">
            <a class="navbar-brand text-white" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                        <li class="nav-item px-2">
                        <Link class="nav-link" :class="{'selected': $page.component == 'Home'}"  href="/"  style="color:white;">HOME</Link>
                        </li>
                        <li class="nav-item px-2">
                        <Link class="nav-link" :class="{'selected': $page.component == 'Pokemon'}"  href="/pokemon"  style="color:white;">POKÉMON</Link>
                        </li>
                        <li class="nav-item px-2">
                        <Link class="nav-link" :class="{'selected': $page.component == 'Contact'}"  href="/contact"  style="color:white;">CONTACT</Link>
                        </li>
                    </ul>
                
            </div>
        </div>
    </nav>
<slot />
    <!-- <section class="container bg-white p-3 rounded-3 mt-4">
        
        <footer class="text-center mt-5">
            Copyright &copy; 2022.  All rights reserved.
        </footer>
    </section> -->

    

    
</template>

<script setup>
    import { Link } from "@inertiajs/inertia-vue3";
</script>