<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>達納罕</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>達納罕</b>是個<nuxt-link to="/units/Archer_Units"
              >馬弓騎兵英雄</nuxt-link
            >，只在《<nuxt-link to="/games/ak">世紀帝國II：非洲王國</nuxt-link
            >》資料片中的地圖編輯器和<nuxt-link to="/batt">戰役</nuxt-link
            >"摔落的皇冠"裡<nuxt-link to="/units/hero/Yodit">優娣忒</nuxt-link
            >的陣營中出現，達納罕的名字是以建立在九世紀中葉的同名埃塞俄比亞王國的<nuxt-link
              to="/civs/Ethiopians"
              >衣索比亞</nuxt-link
            >統治者所以命名。
          </p>
          <p>
            在遊戲中達納罕的外型很獨特不過類似<nuxt-link
              to="/units/Elephant_Archer"
              >象弓騎兵</nuxt-link
            >，他會受到所有<nuxt-link to="/units/Cavalry_Archer"
              >馬弓騎兵</nuxt-link
            >、<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>和<nuxt-link
              to="/units/Cavalry_Units"
              >騎兵</nuxt-link
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
                達納罕
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Dagnajanicon.png" width="80" alt="" />
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
              <nuxt-link to=""
                >弓兵<br /><nuxt-link to="/armor/Armor_Class_Cavalry"
                  >騎兵</nuxt-link
                ><br />英雄</nuxt-link
              >
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
            <td class="unit4">930</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">
              12(<nuxt-link to="/units/Archer_Units">遠程</nuxt-link>)
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_standard_building"
                >標準建築</nuxt-link
              >+4 <br />對<nuxt-link to="/armor/Armor_Class_stone_defense"
                >石頭建築</nuxt-link
              >+4
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.5</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3">射程範圍</td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">100%</td>
          </tr>
          <tr>
            <td class="unit3">投射物速度</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link
              >(-2)<br /><nuxt-link to="/armor/Armor_Class_Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_War_Elephant"
                >戰象</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.9</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">7</td>
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
