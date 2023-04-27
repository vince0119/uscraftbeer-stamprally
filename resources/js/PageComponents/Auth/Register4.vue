<template>
    <p class="t-center strong">登録を受付いたしました。<br>メールに記載のURLから<br>登録確認を行ってください。</p>
    <p class="formwrap__note">登録されたメールアドレスにご登録確認メールをお送りいたしました。登録確認が終わるまで登録は完了しておりません。数分経ってもメールが届かない場合は、メール配信時のトラブルやメールアドレスの入力ミスなどの可能性がございますので、お手数ですが<a href="../member_registration1/index.html">こちら</a>から再度メールアドレスの登録を行ってください。また、お使いのメールソフトの設定により、迷惑メールに振り分けられている場合もございます。</p>
</template>

<script>
import UserLayout from '@/Layouts/User.vue'
import BreezeValidationErrors from '@/Components/ValidationErrors.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    layout: UserLayout,

    components: {
        Link,
    },

    data() {
        return {
        }
    },

    methods: {
    }
}
</script>
