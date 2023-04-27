<template>
    <p class="t-center strong">会員登録</p>
    <form action="" method="get">
        <p>登録内容はこちらでお間違いないでしょうか。よろしければ、送信ボタンをクリックしてください。</p>
        <!--ここに確認データが表示されます-->
        <input type="submit" value="送信" class="btn" @click.prevent="pageDone">
        <input type="submit" value="戻る" class="btn" @click.prevent="pageBack">
    </form>
    <p class="formwrap__note">入力されたメールアドレスに本登録を行うためのメールが送信されます。迷惑メールフィルタを利用されている場合は、ドメイン「@uscraftbeer.jp」からのメールを受信できるよう設定をお願いします。</p>
</template>

<script>
import UserLayout from '@/Layouts/User.vue'
import BreezeValidationErrors from '@/Components/ValidationErrors.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    props: {
        form: Object,
    },
    layout: UserLayout,
    emits: ['pageDone', 'pageBack'],

    components: {
        Link,
    },

    data() {
        return {
        }
    },

    methods: {
        pageDone() {
            this.$emit('pageDone', 3);
        },
        pageBack() {
            this.$emit('pageBack', 3);
        }
    }
}
</script>
