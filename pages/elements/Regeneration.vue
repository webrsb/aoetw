<template>
  <div class="container">
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-12">
        <h1>回血（Regeneration）</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            回血，指的是一個單位能夠在不需要<nuxt-link to="/units/Monk"
              >僧侶</nuxt-link
            >的情況下自我修復生命值的能力，首先在世紀帝國II中引入。具有回血的軍事單位在激烈戰鬥中是極有價值的，並且也是在戰役關卡中不可或缺的。
          </p>
        </div>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            隨著<nuxt-link to="/games/aoc">征服者入侵</nuxt-link
            >版本發布，所有英雄都獲得了回血能力，使其在戰役場景中非常有價值。通常，英雄也是必須存活的單位，回血能力極大地幫助了玩家，可以使用英雄在前線上戰鬥（而不是只能保護他們）。
          </p>
          <p>
            在常規軍事單位中，回血是一種相當獨特的功能。<nuxt-link
              to="/civs/Vikings"
              >維京</nuxt-link
            >文明的<nuxt-link to="/units/Berserk">狂戰士</nuxt-link
            >是唯一擁有先天回血能力的單位，可以透過研發<nuxt-link
              to="/techs/Berserkergang"
              >狂戰士幫</nuxt-link
            >科技，進一步提升每分鐘的恢復血量。此外，<nuxt-link
              to="/civs/Berbers"
              >柏柏</nuxt-link
            >文明一旦<nuxt-link to="/techs/Maghrabi_Camels"
              >馬格拉比駱駝</nuxt-link
            >科技研發後，相關駱駝單位（<nuxt-link to="/units/Camel_Rider"
              >駱駝騎兵</nuxt-link
            >及<nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link
            >）即可獲得回血能力。
          </p>
          <h4>再生率</h4>
          <p>
            受傷單位進駐建築物內部後會慢慢恢復HP，箭塔、城鎮中心每分鐘治療6的<nuxt-link
              to="/elements/Hit_points"
              >生命值</nuxt-link
            >，而<nuxt-link to="/building/Castle">城堡</nuxt-link
            >治療速度則是每分鐘治療12的生命值，研發<nuxt-link
              to="/techs/Herbal_Medicine"
              >草藥治療</nuxt-link
            >技術後可更進一步提高<nuxt-link to="/elements/Regeneration"
              >回血</nuxt-link
            >率。箭塔、城鎮中心變成每分鐘回復24HP，城堡則是每分鐘回復48HP。
          </p>
          <p>僧侶回復友方生命的速度是每分鐘150HP。</p>
          <ul>
            <li>
              <nuxt-link to="/units/hero">英雄</nuxt-link>：每分鐘回血30HP
            </li>
            <li>
              <nuxt-link to="/units/Berserk">狂戰士</nuxt-link
              >：每分鐘回血20HP（研發<nuxt-link to="/techs/Berserkergang"
                >狂戰士幫</nuxt-link
              >科技後→每分鐘回血40HP）
            </li>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>駱駝單位：<nuxt-link
                to="/units/Camel_Rider"
                >駱駝騎兵</nuxt-link
              >每分鐘回血15HP、<nuxt-link to="/units/Camel_Archer"
                >駱駝弓騎兵</nuxt-link
              >每分鐘回血15HP（需先研發<nuxt-link to="/techs/Maghrabi_Camels"
                >馬格拉比駱駝</nuxt-link
              >科技）
            </li>
          </ul>
        </div>
        <table class="table-bordered" border="1" width="100%">
          <tr>
            <td
              style="border: 1px solid #495057;background: #FF6633;color: #FFFFFF; vertical-align: middle"
              colspan="7"
              class="unit"
            >
              <div style="text-align: center">
                <strong>可生產的回血單位</strong>
              </div>
            </td>
          </tr>
          <tr>
            <td
              style="border: 1px solid #495057;"
              width="33%"
              bgcolor="#FFFFFF"
            >
              <div class="unititle">
                <gallery>
                  <img src="~assets/Berserk.png" class="imgn" />
                </gallery>
              </div>
            </td>
            <td
              style="border: 1px solid #495057;"
              width="33%"
              bgcolor="#FFFFFF"
            >
              <div class="unititle">
                <gallery>
                  <img src="~assets/Camel.png" class="imgn" />
                </gallery>
              </div>
            </td>
            <td
              style="border: 1px solid #495057;"
              width="33%"
              bgcolor="#FFFFFF"
            >
              <div class="unititle">
                <gallery>
                  <img
                    src="~assets/Tumblr_nxo1o0aN0R1tnh0y7o6_400.png"
                    class="imgn"
                  />
                </gallery>
              </div>
            </td>
          </tr>
          <tr>
            <td
              style="border: 1px solid #495057;"
              width="33%"
              bgcolor="#FFFFFF"
            >
              <div class="unititle">
                <center>
                  <nuxt-link to="/units/Berserk">狂戰士</nuxt-link>
                </center>
              </div>
            </td>
            <td
              style="border: 1px solid #495057;"
              width="33%"
              bgcolor="#FFFFFF"
            >
              <div class="unititle">
                <center>
                  <nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link>
                </center>
              </div>
            </td>
            <td
              style="border: 1px solid #495057;"
              width="33%"
              bgcolor="#FFFFFF"
            >
              <div class="unititle">
                <center>
                  <nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link>
                </center>
              </div>
            </td>
          </tr>
          <tr>
            <td
              width="33%"
              height="27"
              bgcolor="#FFFFFF"
              style="border: 1px solid #495057;"
            >
              <div class="unititle">
                <center>
                  <nuxt-link to="/civs/Vikings">維京</nuxt-link>文明<br />
                  ＊研發<nuxt-link to="/techs/Berserkergang">狂戰士幫</nuxt-link
                  >科技→回血量提升
                </center>
              </div>
            </td>
            <td
              style="border: 1px solid #495057;"
              width="33%"
              bgcolor="#FFFFFF"
            >
              <div class="unititle">
                <center>
                  <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>文明<br />
                  ＊需先研發<nuxt-link to="/techs/Maghrabi_Camels"
                    >馬格拉比駱駝</nuxt-link
                  >科技
                </center>
              </div>
            </td>
            <td
              style="border: 1px solid #495057;"
              width="33%"
              bgcolor="#FFFFFF"
            >
              <div class="unititle">
                <center>
                  <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>文明<br />
                  ＊需先研發<nuxt-link to="/techs/Maghrabi_Camels"
                    >馬格拉比駱駝</nuxt-link
                  >科技
                </center>
              </div>
            </td>
          </tr>
        </table>
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
