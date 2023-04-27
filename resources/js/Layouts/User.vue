<template>
    <Navbar />
    <slot />
    <FooterBottom :haveFollowUs="!isPageAuth" />
    <link v-if="isPageAuth" rel="stylesheet" href="/user/css/stamprally_sub.css">
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Navbar from '@/Partials/Navbar.vue';
import FooterBottom from '@/Partials/FooterBottom.vue';

export default {
    components: {
        Link,
        Navbar,
        FooterBottom,
    },

    data() {
        return {
        }
    },

    computed: {
        userAuth() {
            return this.$page.props.auth.user;
        },
        isPageAuth() {
            return ['Auth/Login', 'Auth/Register'].includes(this.$page.component)
        }
    }
}
</script>
