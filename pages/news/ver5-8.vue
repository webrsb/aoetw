<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>HD Patch 5.8改版資訊</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>5.8改版</b
            >於2018年9月7日正式上線，除了一些遊戲優化外，還大幅修正了一些遊戲平衡，把<nuxt-link
              to="/civs/Koreans"
              >朝鮮</nuxt-link
            >和塔攻都削弱了不少，<nuxt-link to="/units/Arambai"
              >飛鏢騎兵</nuxt-link
            >與<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
            >再度被弱化。
            <a
              href="https://steamcommunity.com/app/221380/discussions/1/1743342466037998931/"
              target="_blank"
              >原文</a
            >
          </p>
          <p>
            <a
              href="https://forum.gamer.com.tw/C.php?bsn=1122&snA=14418&tnum=1"
              target="_blank"
              >資料來源</a
            >並參考PTT Lanchi與<a
              href="http://www.hawkaoe.net/bbs/forum.php?mod=viewthread&tid=143802"
              target="_blank"
              >翔鷹論壇</a
            >的翻譯
          </p>
        </div>
        <h3>改版內容</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h4><strong>單位平衡</strong></h4>
          削弱
          <ul>
            <li>
              <img
                src="~assets/EagleScoutIcon.png"
                class="gg"
                alt=""
              /><nuxt-link to="/units/Eagle_Scout">鷹斥侯</nuxt-link
              >在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              >生產時間從32s → 35s(跟鷹勇士一樣了)
            </li>
            <li>
              <img src="~assets/tower.png" class="gg" alt="" /><nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >花費25W 125S → 50W 125S
            </li>
            <li>
              <img
                src="~assets/Arambaiicon.png"
                class="gg"
                alt=""
              />飛鏢騎兵花費55W 60G → 80W 60G
            </li>
            <li>
              <img
                src="~assets/Karambitwarrioricon.png"
                class="gg"
                alt=""
              /><nuxt-link to="/units/Karambit_Warrior">爪刀勇士</nuxt-link>花費
              25F 10G → 30F 15G
            </li>
            <li>
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Incas">印加</nuxt-link
              ><nuxt-link to="/techs/Fabric_Shields">金冠</nuxt-link>花費400F 200G →
              600F 600G
            </li>
            <li>
              <img src="~assets/tower.png" class="gg" alt="" />朝鮮蓋塔時間60s →
              75s (其他<nuxt-link to="/civs">文明</nuxt-link>
              80s)
            </li>
            <li>
              <img
                src="~assets/FishingShipIcon.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Italians">義大利</nuxt-link>魚船花費60W →
              64W (其他文明 75W)
            </li>
            <li>
              <img src="~assets/coinage.png" class="gg" alt="" /><nuxt-link
                to="/techs/Coinage"
                >鑄幣術</nuxt-link
              >移至城堡時代, 銀行技術移至<nuxt-link to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >
            </li>
            <li>
              <img src="~assets/farm.png" class="gg" alt="" /><nuxt-link
                to="/civs/Mayans"
                >馬雅</nuxt-link
              ><nuxt-link to="/units/Villager">農夫</nuxt-link
              >效率修正成跟其他文明差不多
            </li>
            <li>
              <img
                src="~assets/FireGalleyIcon.png"
                class="gg"
                alt=""
              /><nuxt-link to="/units/Fire_Galley">火艨艟</nuxt-link
              >對<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>傷害 3hp →
              1hp
            </li>
            <li>
              <img
                src="~assets/CamelArcherIcon.png"
                class="gg"
                alt=""
              /><nuxt-link to="/units/Camel_Archer">精銳駱駝弓騎兵</nuxt-link
              >生產時間 21s → 25s
            </li>
            <li>
              <img src="~assets/CamelIcon.png" class="gg" alt="" /><nuxt-link
                to="/civs/Indians"
                >印度</nuxt-link
              ><nuxt-link to="/armor/Armor_Class_Camel">駱駝</nuxt-link
              ><nuxt-link to="/armor">近防</nuxt-link>加成 +1 → +0
            </li>
            <li>
              <img src="~assets/farm.png" class="gg" alt="" /><nuxt-link
                to="/civs/Slavs"
                >斯拉夫</nuxt-link
              ><nuxt-link to="/building/Farm">農田</nuxt-link>加成倍率1.31 →
              1.28
            </li>
          </ul>
          增強
          <ul>
            <li>
              <img
                src="~assets/RattanarcherIcon2.png"
                class="gg"
                alt=""
              /><nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link
              >/精銳<nuxt-link to="/elements/Hit_points">血量</nuxt-link> 35/40
              → 40/45
            </li>
            <li>
              <img
                src="~assets/archery_range.png"
                class="gg"
                alt=""
              /><nuxt-link to="/civs/Vietnamese">越南</nuxt-link
              ><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
              >單位血量加成原本+10%/+15%/+20% → 皆 +20%
            </li>
            <li>
              <img src="~assets/ArbalestIcon.png" class="gg" alt="" /><nuxt-link
                to="/civs/Khmer"
                >高棉</nuxt-link
              >得到強弩
            </li>
            <li>
              <img
                src="~assets/Siegetowericon.png"
                class="gg"
                alt=""
              /><nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link>半徑0.5 →
              0.45 (變瘦，比較不會卡)
            </li>
            <li>
              <img
                src="~assets/lame.png"
                class="gg"
                alt=""
              />印加羊駝不再綁定鷹斥侯
            </li>
            <li>
              <img
                src="~assets/ElephantArcherIcon.png"
                class="gg"
                alt=""
              /><nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link
              >係對反<nuxt-link to="/armor/Armor_Class_Archer">弓箭手</nuxt-link
              >類傷害的抵抗增加（從-2到0）；減少了對<nuxt-link
                to="/armor/Armor_Class_Cavalry"
                >反騎兵</nuxt-link
              >弓箭手類傷害的抵抗（從0到-2）
            </li>
            <li>
              <img
                src="~assets/Saracenmamluk_icon.png"
                class="gg"
                alt=""
              /><nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link
              >移除「騎兵」<nuxt-link to="/armor">防禦類型</nuxt-link
              >(原本會受到 剋騎兵傷害 但有 11 防禦)，受到來自<nuxt-link
                to="/units/Halberdier"
                >戟兵</nuxt-link
              >的傷害減少5點
            </li>
          </ul>
          其他
          <ul>
            <li>
              在沙漠且破裂的地形上的建築，被攻擊傷害+20%(<a
                href="https://www.youtube.com/watch?v=x7LWDiKiPy4"
                target="_blank"
                >影片說明</a
              >)
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allwide',
  components: {}
}
</script>
<style></style>
