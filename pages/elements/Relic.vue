<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>遺跡</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div style="float: right; margin: 10px;">
          <gallery
            ><img class="imgn hg" width="250" src="~assets/Relic.jpg" alt=""
          /></gallery>
          <p><em>一個在草地上的遺跡</em></p>
        </div>
        <div class="n1">
          <p>
            <strong>遺跡</strong>是遊戲中的特殊物品，可以透過<nuxt-link
              to="/units/Monk"
              >僧侶</nuxt-link
            >搬到<nuxt-link to="/building/Monastery">修道院</nuxt-link
            >中，讓它來生產<nuxt-link to="/resource/Gold">黃金</nuxt-link>。
          </p>
        </div>
        <h3>概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            遺跡外表看起來像是白色的獎杯，在隨機地圖模式中會隨機分散在地圖各地，標準遊戲共有五個遺跡。遺跡只能用僧侶搬運，當它被放置在修道院中時，會每兩秒產生一個黃金，如果你有更多的遺跡，就會生產更多的黃金。
          </p>
          <p>
            在標準遊戲中，你只要收集到所有遺跡，那麼將啟動一個200年的倒數計時，你只要在200年內仍持有遺跡，那麼將獲得勝利，如果和同盟一起獲得遺跡，那麼你們將一起勝利。但請注意，遊戲勝利選擇武力征服，那麼收集遺跡將不能取得勝利，你必須擊敗所有敵人。
          </p>
        </div>
        <h3>策略</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>實戰中，通常不會一開始就去收集遺跡，因為並不划算。</p>
          <p>
            成本上來說，撿遺跡的成本，修道院175<nuxt-link to="/resource/Wood"
              >木頭</nuxt-link
            >，僧侶100黃金，在<nuxt-link to="/armor/Armor_Class_Castle"
              >城堡</nuxt-link
            >初期的大戰中，一兵一卒都是非常珍貴的，這175木材和100黃金，可在城堡初期發展經濟或軍事，例如起<nuxt-link
              to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >爆經濟，或是拿去生軍事單位，對戰局的影響都遠超過撿遺跡。
          </p>
          <p>
            其次是控制力，城堡初期是相當耗費控制力的，一般來說，玩家沒有足夠的控制力去做這麼多事情，控軍事單位就耗掉大部分的時間，如果主力是<nuxt-link
              to="/units/Crossbowman"
              >弩兵</nuxt-link
            >那耗費的控制力將會更多。首先遺跡要去搬，且遺跡不一定很近，有的非常遠，中間也有可能被敵人擊殺，最後還要把遺跡搬回來，這中間將耗費非常多的控制力，一樣道理，那些控制力去控馬多殺敵人幾隻<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >，去爆經濟對於初期的戰局，能獲得更大的回報。
          </p>
          <p>
            功能面來說，撇除前面的原因，即使出了僧侶，也不會立即去撿遺跡，除非它非常近，因為僧侶通常出來就直接上戰場，僧侶可<nuxt-link
              to="/elements/Conversion"
              >招降</nuxt-link
            >可補血，非常好用，對於一隻軍隊的幫助非常大，例如，五隻<nuxt-link
              to="/units/Camel_Rider"
              >駱駝</nuxt-link
            >配五隻<nuxt-link to="/units/Conquistador">西班牙征服者</nuxt-link
            >，明顯的是西班牙征服者可以擊敗駱駝，但配五隻駱駝一隻僧侶打六隻西班牙征服者那情況就相當不一樣，僧侶號稱最強防守兵種，如果因為撿遺跡而錯失戰機，那可能輸掉整場比賽。所以回歸到最原始的功能面，僧侶就該做他該做的事情，招降和補血，行有餘力等戰局穩定時才會撿遺跡。
          </p>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            宗教上的重要人物的物品或遺體遺骨，在敬奉（veneration）之氣氛下被作為實體的紀念物小心保存。聖髑是佛教、印度教、巫覡宗敎等許多宗教的一些類型的重要方面。拉丁語reliquiae意為"remains"（剩餘物，遺體遺骨）。聖髑盒（reliquary）是保有一個或數個聖髑的朝聖地（shrine）。
          </p>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allen' })

export default {
  components: {}
}
</script>
<style></style>
