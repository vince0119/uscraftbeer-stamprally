<template>
    <div class="bgStamp"></div>
    <div class="ttlbox">
        <div class="ttlbox__logo"><img src="/user/img/logo_acbe.svg" alt="American Craft Beer Experience 2021"></div>
        <div class="ttlbox__ttl">
            <h1><img src="user/img/logo_stamprally_01.svg" alt="ビアスタイル スタンプラリー"></h1>
        </div>
    </div>
    <div class="formwrap">
        <Register1 :form="form" v-if="currentPage == 'Register1'" @pageDone="(...args) => pageDone(...args)"/>
        <Register2 :form="form" v-if="currentPage == 'Register2'" @pageDone="(...args) => pageDone(...args)"/>
        <Register3 :form="form" v-if="currentPage == 'Register3'" @pageDone="(...args) => pageDone(...args)" @pageBack="pageBack"/>
        <Register4 v-if="currentPage == 'Register4'"/>
    </div>
</template>

<script>
import UserLayout from '@/Layouts/User.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';
import Register1 from '@/PageComponents/Auth/Register1.vue'
import Register2 from '@/PageComponents/Auth/Register2.vue'
import Register3 from '@/PageComponents/Auth/Register3.vue'
import Register4 from '@/PageComponents/Auth/Register4.vue'

export default {
    layout: UserLayout,

    components: {
        Head,
        Link,
        Register1,
        Register2,
        Register3,
        Register4
    },

    data() {
        return {
            currentPage: 'Register1',
            form: this.$inertia.form({
                email: '',
                password: '',
                checkAgree: false,
            })
        }
    },

    methods: {
        pageDone(page, data) {
            this.currentPage = 'Register' + (page + 1);
            // if (page === 2) {
            //     this.form.email = data.email;
            //     this.form.password = data.password;
            // }
            if (page === 3) {
                this.form.post(this.route('register'), {
                    // onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            }
        },
        pageBack(page) {
            this.currentPage = 'Register' + (page - 1);
        }
    }
}
</script>
