<template>
    <Head title="スタンプラリーログイン｜アメリカン クラフトビア エクスペリエンス 2021 - ACBEJAPAN" />

    <div class="bgStamp"></div>
    <div class="ttlbox">
        <div class="ttlbox__logo"><img src="/user/img/logo_acbe.svg" alt="American Craft Beer Experience 2021"></div>
        <div class="ttlbox__ttl">
            <h1><img src="/user/img/logo_stamprally_01.svg" alt="ビアスタイル スタンプラリー"></h1>
        </div>
    </div>
    <div class="formwrap">
        <div v-if="hasErrors">
            <Err v-for="(error, key) in errors" :msg="error"/>
        </div>
        <form @submit.prevent="submit">
            <input type="text" v-model="form.email" placeholder="メールアドレス">
            <Err v-if="v$.form.email.$errors[0]"  :msg="v$.form.email.$errors[0].$message"/>
            <input type="password" v-model="form.password"  placeholder="パスワード">
            <Err v-if="v$.form.password.$errors[0]" :msg="v$.form.password.$errors[0].$message"/>
            <label class="checkbox">
                <input type="checkbox" v-model="form.remember"><span class="checkmark"></span><p>ログイン状態を保存する</p>
            </label>
            <input type="submit" value="ログイン" class="btn">
        </form>
        <p class="repass t-center"><a href="../repass1/index.html">パスワードを忘れた場合はこちら</a></p>
        <div class="registration t-center">
            <p>アカウントをお持ちでない方は</p>
            <Link :href="route('register')" class="btn">会員登録（無料）</Link>
        </div>
    </div>
</template>

<script>
import Err from '@/Components/Err.vue'
import UserLayout from '@/Layouts/User.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'
import { useVuelidate } from '@vuelidate/core'
import { helpers, required, email, minLength } from '@vuelidate/validators'
import { password } from '@/rulesValidate.js'

export default {
    layout: UserLayout,

    components: {
        Head,
        Link,
        Err,
    },

    props: {
        canResetPassword: Boolean,
        status: String,
        errors: Object,
    },
    setup () {
        return { v$: useVuelidate() }
    },
    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false
            })
        }
    },

    validations () {
        return {
            form: {
                email: { 
                    required: helpers.withMessage(this.$getMSG('rules.required', {':attribute': 'メールアドレス'}), required),
                    email: helpers.withMessage(this.$getMSG('rules.email', {':attribute': 'メールアドレス'}), email),
                     }, 
                password: {
                    required: helpers.withMessage(this.$getMSG('rules.required', {':attribute': 'パスワード'}), required),
                    minLength: minLength(8), 
                    password
                },
            },
        }
    },

    computed: {
        hasErrors() {
            return Object.keys(this.errors).length > 0
        },
    },

    methods: {
        submit() {
            this.v$.$touch();
            if (!this.v$.$invalid) {
                this.form.post(this.route('login'), {

                })
            }
        }
    }
}
</script>
