<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>象轎</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            象轎是<nuxt-link to="/civs/Burmese">緬甸</nuxt-link
            >的特殊科技，可於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Battle_Elephant"
              >矛象伕</nuxt-link
            >護甲+1近戰護甲/+1遠程護甲。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              象轎讓矛象伕有+1/+1防禦，可以有更高的耐受度與續戰力。由於緬甸有全滿科技的矛象伕(除了<nuxt-link
                to="/techs/Heresy"
                >異端邪說</nuxt-link
              >)，這讓矛象伕的作戰能力更上層樓。象轎研發不需要黃金(不像
              <nuxt-link to="/techs/Plate_Barding_Armor">騎兵板甲</nuxt-link
              >和<nuxt-link to="/techs/Chain_Barding_Armor">騎兵鎖甲</nuxt-link
              >)，所以在很多狀況下都可以優先研發。
            </li>
            <li>
              矛象伕也可用來對付攻城武器，因為他們能承受更多的炮火。另一個帝王特殊科技<nuxt-link
                to="/techs/Manipur_Cavalry"
                >曼尼普爾騎兵</nuxt-link
              >則讓矛象伕的每次攻擊能對
              <nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
              >有更多傷害。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速象轎的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              最初成本為：200F/300W，並提供+1/+2的防禦，5.7版後成本為400F/300W，並提供+1/+1的防禦。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            象轎，英語Howdah來自阿拉伯語(هودج（hawdaj）)意思是指駱駝攜帶的床，通常安放於大象或是駱駝背部，過去常被有錢人當做座騎或是用於戰爭或打獵，也是一種炫富的象徵，因此上面會裝飾昂貴的寶石。
          </p>
          <p>
            目前象轎主要在東南亞被用於旅遊觀光用途，因此動物保護團體曾多次公開批評，因為象轎會對大象的脊椎、肺或是其他器官造成永久的傷害，並加速動物的死亡。
          </p>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-12">
            <div class="col-md-4">
              <a target="_blank" href="/img/Howdah_of_the_Golconda_Sultanate_Qutb_Shahi_dynasty.jpg"
                ><img
                  class="imgn hg"
                  src="~assets/Howdah_of_the_Golconda_Sultanate_Qutb_Shahi_dynasty.jpg"
                  alt=""
              /></a>
              <p><em>沙希王朝(Qutb_Shahi_dynasty)的象轎。</em></p>
            </div>
            <div class="col-md-4">
              <a target="_blank" href="/img/Death_of_the_Nabob_of_the_Carnatic_by_Paul_Philippoteaux.jpg"
                ><img
                  class="imgn hg"
                  src="~assets/Death_of_the_Nabob_of_the_Carnatic_by_Paul_Philippoteaux.jpg"
                  alt=""
              /></a>
              <p>
                <em
                  ><a href="http://tinyurl.com/y9lkr244">卡那提克戰爭</a
                  >中被廣泛使用。</em
                >
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle"><nuxt-link to="">象轎</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/CastleAgeUnique.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/Castleicon.png" alt="" /><nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木材</td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">矛象伕護甲+1/+1。</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alltech',
  components: {}
}
</script>
<style></style>
