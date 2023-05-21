<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>百夫長</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>百夫長</b>首次在《<nuxt-link to="/games/aof"
              >世紀帝國II:失落的帝國</nuxt-link
            >》登場。百夫長是一個不能被訓練的<nuxt-link to="/units"
              >單位</nuxt-link
            >，只在地圖編輯器 跟<nuxt-link to="/batt/Alarica"
              >阿拉里克</nuxt-link
            >"<nuxt-link to="/batt/All_Roads_Lead_to_a_Besieged_City"
              >冷河戰役</nuxt-link
            >"以及<nuxt-link to="/batt/Baria">巴里</nuxt-link>"<nuxt-link
              to="/batt/The_Rebellion_of_Melus"
              >邁勒斯叛變</nuxt-link
            >"的<nuxt-link to="/batt">戰役</nuxt-link
            >中出現。百夫長的外表與<nuxt-link to="/units/Cataphract"
              >拜占庭聖騎兵</nuxt-link
            >幾乎一樣，而 它的狀態與<nuxt-link to="/units/Cataphract"
              >精銳拜占庭聖騎兵</nuxt-link
            >相去不遠，只有長相稍微不同而已。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle" style="color: #fff">百夫長</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Centurionicon.png" class="img-fluid" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">首次出現</td>
            <td class="unit4">
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2" style="color: #fff;">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">12(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +12對<nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
              <br />+10對<nuxt-link to="/armor/Armor_Class_Condottiero"
                >傭兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">攻速</td>
            <td class="unit4">1.73</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry_Archer">騎兵</nuxt-link
              >(+16) <br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.35</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">5(精銳)</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-12">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Centurion.png" alt=""
              /></gallery>
              <p><em>一群百夫長</em></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'alledmap' })

export default {
  components: {}
}
</script>
<style></style>
