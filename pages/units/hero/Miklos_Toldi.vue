<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>米克羅斯·陶笛</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>米克羅斯·陶笛</b>是個<nuxt-link to="/units/Cavalry_Units"
              >騎兵英雄</nuxt-link
            >，在《<nuxt-link to="/games/ak">世紀帝國II：非洲王國</nuxt-link
            >》資料片之後版本的地圖編輯器出現，米克羅斯·陶笛的名字是以建立匈牙利王國的貴族所命名，該貴族被匈牙利人們傳頌為擁有強大力量的傳奇<nuxt-link
              to="/units/hero"
              >英雄</nuxt-link
            >。
          </p>
          <p>
            在遊戲中米克羅斯·陶笛的外型是<nuxt-link to="/units/Magyar_Huszar"
              >馬扎爾驃騎兵</nuxt-link
            >，他會受到所有<nuxt-link to="/units/Cavalry_Units"
              >騎兵單位</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link
            >加成的影響。他不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >而且會自行<nuxt-link to="/elements/Regeneration">回血</nuxt-link>。
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
                米克羅斯·陶笛
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Magyar_Huszar_icon.jpg" width="80" alt="" />
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
              <nuxt-link to="/games/ak">非洲王國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">統計</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">285</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">14(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/units/Siege_Weapons">攻城單位</nuxt-link>+8
              <br />對<nuxt-link to="/armor/Armor_Class_Ram">衝撞車</nuxt-link
              >+2
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">1.83</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.5</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
