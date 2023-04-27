<template>
    <p class="t-center strong">会員登録</p>
    <form action="" method="get">
        <input type="text"  v-model="form.email" placeholder="メールアドレス">
        <Err v-for="error of v$.form.email.$errors" :msg="error.$message"/>
        <input type="password"  v-model="form.password" placeholder="パスワード">
        <Err v-for="error of v$.form.password.$errors" :msg="error.$message"/>
        <p class="formwrap__note">パスワードは8文字以上、アルファベットと数字を混在してください。</p>
        <input type="submit" value="確認" class="btn" @click.prevent="pageDone">
    </form>
    <p class="formwrap__note">入力されたメールアドレスに本登録を行うためのメールが送信されます。迷惑メールフィルタを利用されている場合は、ドメイン「@uscraftbeer.jp」からのメールを受信できるよう設定をお願いします。</p>
</template>

<script>
import UserLayout from '@/Layouts/User.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';
import { helpers, required, email, minLength } from '@vuelidate/validators'
import { password } from '@/rulesValidate.js'
import { useVuelidate } from '@vuelidate/core'

export default {
    props: {
        form: Object,
    },
    layout: UserLayout,
    emits: ['pageDone'],
    components: {
        Link,
    },
    setup () {
        return { v$: useVuelidate() }
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

    data() {
        return {
        }
    },

    methods: {
        pageDone() {
            this.v$.$touch();
            if (!this.v$.$invalid) {
                this.$emit('pageDone', 2);
            }
        }
    }
}
</script>
