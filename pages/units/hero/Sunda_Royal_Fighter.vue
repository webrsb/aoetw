<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>巽他皇家侍衛</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>巽他皇家侍衛</b>是個<nuxt-link to="/units/Infantry_Units"
              >步兵英雄</nuxt-link
            >，在《<nuxt-link to="/games/aor">世紀帝國II：王者崛起</nuxt-link
            >》資料片中出現。
          </p>
          <p>
            巽他皇家侍衛具有高攻、高裝甲、高生命和極快的移動速度。巽他皇家侍衛不能被<nuxt-link
              to="/elements/Conversion"
              >招降</nuxt-link
            >而且會自行<nuxt-link to="/elements/Regeneration">回血</nuxt-link>。
          </p>
        </div>
        <h3>出現場景和陣營</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            巽他皇家侍衛會出現在<nuxt-link to="/batt/Bayinnaunga"
              >勃印曩</nuxt-link
            >和<nuxt-link to="/batt/Gajah_Madaa">加查·馬達</nuxt-link
            >的<nuxt-link to="/batt">戰役</nuxt-link>中。
          </p>
          <strong><li>加查·馬達</li></strong>
          <p>
            巽他皇家侍衛在戰役"風雲變色"作為Sunda王子的<nuxt-link
              to="/techs/Squires"
              >護衛</nuxt-link
            >要保護王子不受加查·馬達，這個試著奪取政權的人的迫害。
          </p>
          <strong><li>勃印曩</li></strong>
          <p>
            巽他皇家侍衛在戰役"餓虎撲食"中四散在地圖上，玩家可以招降他們。而在戰役"猛蛇出洞"他們會跟龍舟、<nuxt-link
              to="/units/edmap/Canoe"
              >獨木舟</nuxt-link
            >和<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >一起出現。在"白象化身"戰役也能看到牠們的身影。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                巽他皇家侍衛
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/Sundaroyalfightericon.png"
                  width="80"
                  alt=""
                />
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
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
              ><br /><nuxt-link to="/units/hero">英雄</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>
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
            <td class="unit4">90</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">15(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Eagle_Warrior"
                >鷹勇士</nuxt-link
              >+2 <br />對<nuxt-link to="/armor/Armor_Class_standard_building"
                >標準建築物</nuxt-link
              >+1
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.2</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">3</td>
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
