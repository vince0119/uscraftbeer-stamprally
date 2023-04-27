<template>
    <Head title="スタンプラリー｜アメリカン クラフトビア エクスペリエンス 2021 - ACBEJAPAN" />
    <div class="bgStamp"></div>
    <div class="logobox">
        <a href="https://www.brewersassociation.org/" target="_blank"> 
            <img src="/user/img/logo_brewers_association.svg" alt="Brewers Association"> </a>
        </div>
    <div class="ttlbox">
        <div class="ttlbox__logo"><img src="/user/img/logo_acbe.svg" alt="American Craft Beer Experience 2021"></div>
        <div class="ttlbox__ttl">
            <h1><img src="/user/img/logo_stamprally_01.svg" alt="ビアスタイル スタンプラリー"></h1>
        </div>
        <div class="ttlbox__img"><img src="/user/img/beerstyle_01.png" alt="ビアスタイルのイメージ"></div>
        <div class="ttlbox__txt">
            <p>アメリカンクラフトビールを<br>もっとおいしく、楽しく！</p>
        </div>
        <div class="ttlbox__btn">
            <Link :href="route('login')" class="btn bgyellow txtbrown">ログインしてスタンプをGET!</Link>
        </div>
        <!--START スタンプが4つ集まったら現れる-->
            <div class="wrap"><div class="applicationarea">
            <p>スタンプが集まりました！<br>プレゼントに応募しましょう！</p>
            <a href="form/index.html" class="btn txtbrown bgyellow">応募はこちら</a>
            </div></div>
            <!--END スタンプが4つ集まったら現れる-->
    </div>
    <div class="bglightyellow">
        <div class="wrap">
            <div class="wrapbox intro">
                <h2>アメリカンクラフトビールを巡る<br>デジタルスタンプラリー</h2>
                <p class="t-center">他にはない独自のクラフトビールが<br>生まれ続ける地 アメリカの<br>個性豊かなクラフトビールを飲んで<br>スタンプラリーに参加しよう！<br>4つ以上集めてプレゼントをゲット！<br>全8種類集めた方は確率アップ！</p>
                <div class="intro__img"><img src="/user/img/img_present_01.png" alt="プレゼントのイメージ"></div>
            </div>
        </div>
    </div>
    <div id="application" class="wrap">
        <div class="method">
            <h2>参加方法</h2>
            <div class="method__box">
                <div class="method__box--img"><img src="/user/img/method_01.png" alt="参加方法"></div>
                <div class="method__box--txt">
                    <p>スタンプラリーに登録</p>
                    <p>利用規約に同意し、メールアドレスとパスワードを入力して登録後、スタンプラリー開始！</p><a href="member_registration1/index.html" class="btn txtbrown bgyellow">新規登録</a>
                </div>
            </div>
            <div class="method__box">
                <div class="method__box--img"><img src="/user/img/method_02.png" alt="参加方法"></div>
                <div class="method__box--txt">
                    <p>お店でQRコードを読み取ろう</p>
                    <p><a href="spot/index.html">スタンプスポットになっているお店</a>に行って、設置されているPOPからQRコードを読み取ろう。一度スタンプを取得したお店でも20分経つと再度取得が可能になります！</p>
                </div>
            </div>
            <div class="method__box">
                <div class="method__box--img"><img src="/user/img/method_03.png" alt="参加方法"></div>
                <div class="method__box--txt">
                    <p>ビアスタイルスタンプをGET！</p>
                    <p>8種類のビアスタイルのスタンプから1種類がランダムにゲットできます。どのビアスタイルが出るかお楽しみに！</p>
                </div>
            </div>
            <div class="method__box">
                <div class="method__box--img"><img src="/user/img/method_04.png" alt="参加方法"></div>
                <div class="method__box--txt">
                    <p>プレゼントに応募</p>
                    <p>4個のスタンプを集めると、応募フォームへのボタンが表示されます。フォームに必要事項を入力して応募完了！</p>
                </div>
            </div>
            <div class="method__txtbox">
                <p>さらに抽選に応募したあともWチャンス！</p>
                <p>8個全てのスタンプをゲットすると、再度抽選に応募が可能になり当選確率が2倍になります！</p>
            </div>
            
        </div>
    </div>
    <div class="bglightyellow">
        <div id="overview" class="wrap">
            <div class="wrapbox application">
                <h2>スタンプラリー概要</h2>
                <dl>
                    <dt>応募締切</dt>
                    <dd>2021年12月28日（火）23:59<br>（スタンプ4個での抽選応募、スタンプ8個でのWチャンスの応募とも12月28日（火）までとなります）</dd>
                </dl>
                <dl>
                    <dt>賞品・当選者数</dt>
                    <dd>アメリカンクラフトビール6本セット 24名様<br>※商品の内容、本数は変更になる場合があります。</dd>
                </dl>
                <dl>
                    <dt>参加・応募資格</dt>
                    <dd>スタンプラリーの参加、及び抽選への応募は満20歳以上の方に限定させていただきます。20歳未満の方はご参加いただけません。</dd>
                </dl>
                <dl>
                    <dt>スタンプラリー スポットリスト</dt>
                    <dd><a href="/spot/index.html">スタンプラリースポットリストページ</a>からご確認ください。</dd>
                </dl>
                <dl>
                    <dt>当選者連絡</dt>
                    <dd>2022年1月中旬に、厳正な抽選のうえ当選者の方にのみご連絡をいたします。<br>ご連絡は抽選応募の際に入力いただいたメールアドレスにご連絡をさせていただきます。<br>当選メールを受け取った方は期限内にメールでお名前、プレゼント送付先のご住所、電話番号をお送りください。 </dd>
                </dl>
                <dl>
                    <dt>応募規約・注意事項</dt>
                    <dd>
                        <p>・ご応募は各1回までとさせていただきます。</p>
                        <p>・当選するのはお一人様1回限りです。</p>
                        <p>・スタンプラリーにご参加いただくにはモバイルサイトへのアクセスができる環境が必要となります。</p>
                        <p>・スタンプの取得にはQRコードを読み込むことが可能な携帯電話・スマートフォンが必要となります。</p>
                        <p>・スタンプラリーのご参加にはメールアドレスとパスワードの登録が必要となります。</p>
                        <p>・ご利用の環境によってはスタンプラリーにご参加いただけない場合がございます。</p>
                        <p>・同一の店舗でも20分時間を置くことで再度スタンプが取得可能になります。同一の店舗で何回スタンプを取得してもプレゼント抽選には応募いただけます。</p>
                        <p>・取得できるスタンプのデザインは8種類の中からランダムになります。</p>
                        <p>・ご応募の際には必ずご連絡のつくメールアドレスをご記載ください。</p>
                        <p>・次の場合ご応募、または当選権利が無効となりますのでご注意ください。<span>・プレゼント抽選に応募いただいた際のメールアドレスが使用できないものであった場合</span><span>・当選ご連絡後、期限内にご返信をいただけなかった場合</span><span>・その他、ご応募に際して不正な行為があった場合</span></p>
                        <p>・賞品の発送先は、日本国内の住所に限らせていただきます。</p>
                        <p>・賞品の換金および当選の権利の譲渡はできません。</p>
                        <p>・抽選に関するお問い合わせにはお答えできません。</p>
                        <p>・本キャンペーンに応募された場合には、本規約に同意したものとみなします。万が一同意いただけない場合は応募をご遠慮ください。</p>
                        <p>・やむを得ない理由により、応募者に事前に通知することなく本キャンペーンを変更または中止することがあります。</p>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import UserLayout from '@/Layouts/User.vue'

export default {
    layout: UserLayout,
    components: {
      Head,
      Link,
    },
    props: {
    },

}
</script>
