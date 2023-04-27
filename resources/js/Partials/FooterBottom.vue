<template>
    <footer class="footer">
        <FollowUs v-if="haveFollowUs" />
        <p class="footer__note">未成年者の飲酒は法律で禁止されています。飲酒運転は法律で禁止されています。妊娠中や授乳期の飲酒は、胎児・乳児の発育に悪影響を与えるおそれがあります。<br>※画像はすべてイメージです。</p>
        <div class="footer__logo"><a href="https://uscraftbeer.jp/"> <img src="/user/img/logo_acbe.svg" alt="American Craft Beer Experience 2021"> </a> </div>
        <div class="footer__copyright">
            <div class="footer__copyright--usda"> <a href="https://www.fas.usda.gov/" target="_blank">Campaign organized in partnership with the United States Department of Agriculture’s Foreign Agricultural Service <i class="fas fa-external-link-alt"></i></a> <a href="https://www.fas.usda.gov/" target="_blank"> <img src="/user/img/logo_usda.png" alt="USDA"> </a> </div>
            <div class="footer__copyright--logo"> <a href="https://www.brewersassociation.org/" target="_blank"> <img src="/user/img/logo_brewers_association.svg" alt="Brewers Association"> </a> <img src="/user/img/logo_independent-craft.svg" alt="INDEPENDENT"> </div>
            <div class="footer__copyright--txt">
                <p>© 2021 Brewers Association</p>
            </div>
        </div>
    </footer>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import FollowUs from '@/Partials/FollowUs.vue';

export default {
    components: {
        Link,
        FollowUs
    },
    props: {
        haveFollowUs: Boolean,
    }
}
</script>
