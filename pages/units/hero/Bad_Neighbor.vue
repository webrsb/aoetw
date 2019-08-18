<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>壞鄰居</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>壞鄰居</b>是一個在<nuxt-link to="/batt/Saladina"
              >沙拉丁戰役</nuxt-link
            >最終關：<nuxt-link to="/batt/The_Lion_and_the_Demon"
              >獅子與惡魔</nuxt-link
            >登場的<nuxt-link to="/units/hero">英雄</nuxt-link
            >單位。壞鄰居的原型是一台參與了
            <a href="http://tinyurl.com/yd7zm48f" target="_blank">阿卡圍城戰</a
            >的<nuxt-link to="/units/Trebuchet">投石機</nuxt-link>（<nuxt-link
              to="/units/hero/God_s_Own_Sling"
              >神之弓</nuxt-link
            >也是）。雖然壞鄰居以投石機的外表出現，但是他有幾個特點。當他組裝後，他像其他的英雄單位一樣無法被<nuxt-link
              to="/elements/Conversion"
              >招降</nuxt-link
            >且會自動<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >，防禦仍是2/8，與一般的投石機(1/150)不同。壞鄰居在未組裝時<nuxt-link
              to="/elements/Hit_points"
              >血量</nuxt-link
            >會掉一半(300->150)，並且失去所有英雄單位該有的能力，此外他還會擁有1的近戰<nuxt-link
              to="/elements/Attack"
              >攻擊力</nuxt-link
            >（雖然你永遠用不到，因為在未組裝的狀態下令壞鄰居攻擊會使他開始組裝）。
          </p>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              雖然壞鄰居的確有在<a
                href="http://tinyurl.com/yd7zm48f"
                target="_blank"
                >阿卡圍城戰</a
              >中被使用，但在史實中他是由腓力二世所擁有，而不是<nuxt-link
                to="/units/hero/Richard_the_Lionheart"
                >獅心王查理</nuxt-link
              >。
            </li>
            <li>
              壞鄰居和<nuxt-link to="/units/hero/God_s_Own_Sling"
                >神之弓</nuxt-link
              >長達20的射程在遊戲中無人能及。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                壞鄰居
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Badneighboricon.png" width="80" alt="" />
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
              <nuxt-link to="/units/Siege_Weapons">攻城器</nuxt-link><br />英雄
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
            <td class="unit3">血量</td>
            <td class="unit4">150 (組裝前）<br />300 (組裝後)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">
              1近戰 (組裝前) <br />200<nuxt-link to="/units/Archer_Units"
                >遠程</nuxt-link
              >
              (組裝後)
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +250對<nuxt-link to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >
              (組裝後)
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">1 (組裝前) <br />10 (組裝後)</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">16 (組裝前) <br />20 (組裝後)</td>
          </tr>
          <tr>
            <td class="unit3">最小射程</td>
            <td class="unit4">3 (組裝後)</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">80%對建築物<br />92%對單位</td>
          </tr>

          <tr>
            <td class="unit3">發射速度</td>
            <td class="unit4">3.5</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">8</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Siege_Weapon">攻城器</nuxt-link
              >(組裝前) <br />無 (組裝後)
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.8 (組裝前) <br />0 (組裝後)</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">18 (組裝前) <br />21 (組裝後)</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Steven、眠協助編輯</div>
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
