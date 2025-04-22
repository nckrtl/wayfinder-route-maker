<script setup lang="ts"></script>

<template>
    <div class="max-w-3xl mx-auto flex justify-center gap-8">
        <Link :href="Controllers.HomeController.show()">Home</Link>
        <Link :href="Controllers.AboutController.show()">About</Link>
        <Link :href="Controllers.ContactController.show()">Contact</Link>
        <Link :href="Controllers.HomeController.redirect()"
            >Redirect to Home</Link
        >
    </div>
</template>
