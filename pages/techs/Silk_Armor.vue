<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>絲護甲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>絲護甲</b>是<nuxt-link to="/civs/Tatars">韃靼</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Scout_Cavalry"
              >斥侯騎兵</nuxt-link
            >系、<nuxt-link to="/units/Steppe_Lancer">草原騎兵</nuxt-link
            >、<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
            >、<nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>和<nuxt-link
              to="/units/Kipchak"
              >欽察</nuxt-link
            >的<nuxt-link to="/armor">遠程護甲</nuxt-link>及近戰護甲都+1。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              因為韃靼人擁有完整的<nuxt-link to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >弓兵科技，這項科技是提供額外的遠程護甲，加上免費的<nuxt-link
                to="/techs/Parthian_Tactics"
                >安息人戰術</nuxt-link
              >，全滿的<nuxt-link to="/units/Heavy_Cavalry_Archer"
                >重裝馬弓騎兵</nuxt-link
              >擁有+7遠程護甲，能更易擊敗敵方<nuxt-link to="/units/Archer_Units"
                >弓兵</nuxt-link
              >。加上<nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link
              >遠防+1、高地戰鬥傷害+50%和馬弓騎兵+2視線的文明加成，使韃靼的馬弓騎兵能與其他的弓兵、馬弓騎兵文明分庭抗禮。
            </li>
            <li>
              這項科技本身就像兵工廠的科技，但考慮到其成本，它可能會優先於<nuxt-link
                to="/techs/Ring_Archer_Armor"
                >弓兵鏈甲</nuxt-link
              >和<nuxt-link to="/techs/Plate_Barding_Armor">鐵鎧甲</nuxt-link
              >，尤其是想使用輕騎兵和馬弓騎兵的組合時。如果只想著重於馬弓騎兵或<nuxt-link
                to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >時，就應優先考慮研發<nuxt-link to="/techs/Ring_Archer_Armor"
                >弓兵鏈甲</nuxt-link
              >和<nuxt-link to="/techs/Plate_Barding_Armor">鐵鎧甲</nuxt-link
              >。但無論如何，最好還是先研發<nuxt-link
                to="/techs/Leather_Archer_Armor"
                >弓兵皮甲</nuxt-link
              >和<nuxt-link to="/techs/Chain_Barding_Armor">鏈鎧甲</nuxt-link
              >，然後再研發絲護甲（因為成本少）。
            </li>
            <li>
              另外，絲護甲也會影響<nuxt-link to="/units/Genitour"
                >標槍騎兵</nuxt-link
              >和<nuxt-link to="/units/Kipchak">欽察</nuxt-link
              >，因此和<nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >或<nuxt-link to="/civs/Cumans">庫曼</nuxt-link
              >同盟會使這兩個單位都處於最佳狀態。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速絲護甲的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              最初絲護甲只影響馬弓騎兵和斥侯系。
            </li>
            <li>
              (36202更新) 絲護甲會影響草原騎兵。
            </li>
            <li>
              (42848更新) 絲護甲從遠程護甲+1變成遠程和近戰護甲各+1。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">絲護甲</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/unique_tech.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="/techs">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Ethiopians">韃靼</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle.png" alt="" /><nuxt-link
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
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              <nuxt-link to="/units/Scout_Cavalry">斥侯騎兵</nuxt-link
              >系、<nuxt-link to="/units/Steppe_Lancer">草原騎兵</nuxt-link
              >、<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >、<nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
              >和<nuxt-link to="/units/Kipchak">欽察</nuxt-link>的<nuxt-link
                to="/armor"
                >遠程護甲</nuxt-link
              >+1
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! singsing612</div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'alltech' })

export default {
  components: {}
}
</script>
<style></style>
