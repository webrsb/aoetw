<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>貴族首領</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>貴族首領</strong>是《<nuxt-link to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >》<nuxt-link to="/batt/Bukhara_557">布哈拉戰役</nuxt-link
            >中的<nuxt-link to="/units/Cavalry_Units">騎兵英雄</nuxt-link
            >，可以在<nuxt-link to="/building">建築</nuxt-link
            >中以1500<nuxt-link to="/resource/Gold">黃金</nuxt-link
            >雇用10位貴族首領。他也能在<nuxt-link to="/batt">戰役</nuxt-link
            >編輯器中使用。貴族首領擁有<nuxt-link to="/units/Cataphract"
              >拜占庭聖騎兵</nuxt-link
            >的外觀，也受<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link>的加成。由於他屬於<nuxt-link
              to="/units/hero"
              >英雄</nuxt-link
            >單位，因此不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >且會<nuxt-link to="/elements/Regeneration">回血</nuxt-link>。
          </p>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            從公元224年到公元651年的薩珊王朝（Sassanid），擁有一個叫做wuzurgan的貴族階層，是以Sassanid軍隊的軍事支柱Savaran或Aswaran所組成;
            這些貴族效忠於阿斯瓦蘭軍團和沙阿的高級軍官。Aswaran的軍隊從徒步弓箭手到重騎兵，甚至是<nuxt-link
              to="/units/War_Elephant"
              >戰象</nuxt-link
            >，大部分都是騎兵，這些歷史都在遊戲中的設計反映出來。Aswarans在一對一的戰鬥中也非常熟練，也都是無與倫比的弓箭手，Aswaran的所有成員都穿著板甲，包括他們的馬匹。因為他們是貴族，所以可能是中世紀西歐和中歐的中世紀<nuxt-link
              to="/units/Knight"
              >騎士</nuxt-link
            >的先驅。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                貴族首領
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Savaranicon.png" width="80" alt="" />
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>
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
            <td class="unit4">170</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">15(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>+15
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">1.73</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
              >(+16)<br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">速度</td>
            <td class="unit4">1.35</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">5</td>
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
export default {
  layout: 'allhero',
  components: {}
}
</script>
<style></style>
