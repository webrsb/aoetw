<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>獵狼</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>獵狼</strong>是《世紀帝國 II HD:
            <nuxt-link to="/games/aok">帝王世紀</nuxt-link
            >》中的一名動物<nuxt-link to="/units/hero">英雄</nuxt-link
            >，可以在許多<nuxt-link to="/batt">戰役</nuxt-link
            >和戰役編輯器中找到。由於它屬於英雄單位，因此不能被<nuxt-link
              to="/elements/Conversion"
              >招降</nuxt-link
            >且會<nuxt-link to="/Regeneration">回血</nuxt-link>(在<nuxt-link
              to="/units/Conquistador"
              >征服者</nuxt-link
            >資料片後) 。
          </p>
          <p>
            遊戲中將獵狼歸類為<nuxt-link to="/armor/Armor_Class_Infantry"
              >步兵單位</nuxt-link
            >，所以它會受到<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link
            >加成的影響雖然在遊戲中看不出來。
          </p>
        </div>
        <h3>出現場景</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/batt/Genghis_Khana">成吉思汗</nuxt-link
              >的第四個戰役"遊牧民族的西遷"，<nuxt-link to="/units/hero/Subotai"
                >速不臺</nuxt-link
              >一開始會帶著兩隻獵狼。
            </li>
            <li>
              在"蒙古治下的和平"，在遊戲進行45分鐘後，速不臺會帶著許多<nuxt-link
                to="/units/Petard"
                >爆炸桶</nuxt-link
              >和獵狼來支援。
            </li>
            <li>
              在“<nuxt-link to="/batt/The_Great_Ride">偉大的騎士</nuxt-link
              >”中，玩家在中間找到了<nuxt-link
                to="/units/hero/Scythian_Wild_Woman"
                >斯基泰的野女人</nuxt-link
              >之後，給他們6個<nuxt-link to="/units/Villager">村民</nuxt-link
              >，他們會給許多爆炸桶和獵狼作為回報。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                獵狼
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Wolf-icon-aoe2.jpg" width="80" alt="" />
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
              <nuxt-link to="">動物<br />英雄</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
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
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">8(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">開火速率</td>
            <td class="unit4">2.03</td>
          </tr>
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
            <td class="unit4">無</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
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
