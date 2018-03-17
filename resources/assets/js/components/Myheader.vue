<template>

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="http://localhost">
                <img src="http://bulma.io/images/bulma-logo.png" alt="Mufeed" width="112" height="28">
            </a>


            <router-link class="navbar-item" to="/home">Home</router-link>
            <router-link class="navbar-item" to="/about">About</router-link>


            <div class="navbar-burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

</template>