<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>亞歷山大·涅夫斯基</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>亞歷山大·涅夫斯基</strong>是《<nuxt-link to="/games/aoc"
              >世紀帝國II：征服者入侵</nuxt-link
            >》<nuxt-link to="/batt">戰役</nuxt-link>編輯器中的一名<nuxt-link
              to="/units/Cavalry_Units"
              >騎兵英雄</nuxt-link
            >。他是以亞歷山大·雅羅<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
            >·涅夫斯基（Alexander Yaroslavich
            Nevsky，1221-1263），一個被普遍認為是基輔羅斯的關鍵人物為模板。亞歷山大·涅夫斯基（Alexander
            Nevski）因其對德國和瑞典侵略者的軍事勝利而獲得傳奇般的地位而聞名，同時對欽察汗國也禮尚往來。由於他屬於<nuxt-link
              to="/units/hero"
              >英雄</nuxt-link
            >單位，因此不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >且會<nuxt-link to="/elements/Regeneration">回血</nuxt-link>。
          </p>
          <p>
            亞歷山大·涅夫斯基是擁有最強裝甲素質的英雄單位，擁有近戰防禦8，遠攻防禦6，這讓他成為了地圖編輯器玩家的愛好英雄之一。
          </p>
          <p>
            亞歷山大·涅夫斯基會受<nuxt-link to="/units/Cavalry_Units"
              >騎兵</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link>加成的影響。
          </p>
        </div>
        <div></div>
        <div></div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                亞歷山大·涅夫斯基
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Hero_2_Icon.png" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              ><br /><nuxt-link to="/units/hero">英雄</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">230</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">12(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">8</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">速度</td>
            <td class="unit4">1.3</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">4</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        <div>
          <div></div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allhero' })

export default {
  components: {}
}
</script>
<style></style>
