<template>
    <div class="navwrap">
        <nav>
            <div class="navbtn"><a href="/stamp/index.html"><img src="/user/img/nav_icon_stamp.svg" alt="スタンプ">
                <p>スタンプ</p>
                </a> </div>
            <div class="navbtn"><a href="/spot/index.html"><img src="/user/img/nav_icon_spot.svg" alt="スポット">
                <p>スポット</p>
                </a> </div>
            <ul class="g-nav">
                <div class="g-nav__main">
                    <div class="g-nav__logo">
                    	<a href="/index.html"><img src="/user/img/logo_stamprally_02.svg" alt="ビアスタイルスタンプラリー"></a>
                    </div>
                    <li><a href="/index.html#application">スタンプラリー参加方法</a></li>
                    <li><a href="/index.html#overview">スタンプラリー概要</a></li>
                    <li><Link :href="route('privacy')" >プライバシーポリシー</Link></li>
                    <li><Link :href="route('rule')" >利用規約</Link></li>
                    <li><a href="/member_delete/index.html">退会</a></li>
                    <li><a href="https://uscraftbeer.jp/">アメリカン クラフトビア エクスペリエンス 2021 公式サイト</a></li>
                    <li v-show="userAuth"><Link :href="route('logout')" method="post">Logout</Link></li>
                    <li v-show="!userAuth"><Link :href="route('login')" >Login</Link></li>
                </div>
            </ul>
            <!-- ハンバーガーメニュー部分 -->
            <div class="navbtn g-nav__btn">
                <div> <span></span><span></span><span></span></div>
                <p>メニュー</p>
            </div>
        </nav>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Link,
    },
    computed: {
        userAuth() {
            return this.$page.props.auth.user;
        },
    },

    mounted() {
    },
}
</script>
