<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>神之弓</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>神之弓</strong>是《<nuxt-link to="/games/aok"
              >世紀帝國II：帝王世紀</nuxt-link
            >》中的一個<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link
            ><nuxt-link to="/units/hero">英雄</nuxt-link>，可以在<nuxt-link
              to="/batt"
              >戰役</nuxt-link
            >"獅子與惡魔"和戰役編輯器中找到。神之弓是以兩架參加阿卡圍城戰的巨型投石機中的其中一台同名的神之弓(另一台為<nuxt-link
              to="/units/hero/Bad_Neighbor"
              >壞鄰居</nuxt-link
            >)做命名的。
          </p>
          <p>
            神之弓在組裝後屬於英雄單位，因此不能被<nuxt-link
              to="/elements/Conversion"
              >招降</nuxt-link
            >且會<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >，裝甲也是2/8而不是像一般的巨投是1/150。組裝狀態的神之弓有300HP，未組裝的則是150HP(未組裝的HP都是未組裝狀態時的一半)。另外在未組裝狀態下的神之弓不能回血也可以被招降，<nuxt-link
              to="/elements/Attack"
              >攻擊力</nuxt-link
            >顯示為1但事實上也不能攻擊。神之弓在被下令攻擊後的組裝時間非常短，兩個狀態都可以被<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >修復。
          </p>
        </div>
        <h3>豆知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              神之弓實際上被命名為上帝的投石者。在阿卡圍城戰中與壞鄰居一起聽命於狮心王理查，然而實際上他們是屬於<nuxt-link
                to="/civs/Franks"
                >法國</nuxt-link
              >的菲利普二世（Philip
              II）而非獅心娃里查，這個國王知後將中世紀的法國變成歐洲最強大的國家之一而聞名，也是第三次十字軍東征的核心人物。
            </li>
            <li>神之弓20的攻擊範圍與壞鄰居並列遊戲中最遠的攻擊距離。</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                神之弓(組裝狀態)
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
              <nuxt-link to=""
                ><nuxt-link to="/units/Siege_Weapons">攻城單位</nuxt-link
                ><br />英雄</nuxt-link
              >
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
            <td class="unit4">100(未組裝) <br />300(組裝)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">
              1(近戰，未組裝) <br />200(<nuxt-link to="/units/Archer_Units"
                >遠程</nuxt-link
              >，組裝)
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link
              >+250(組裝)
            </td>
          </tr>
          <tr>
            <td class="unit3">開火速率</td>
            <td class="unit4">1(未組裝) <br />10(組裝)</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">射程範圍</td>
            <td class="unit4">16(未組裝) <br />20(組裝)</td>
          </tr>
          <tr>
            <td class="unit3">最小射程</td>
            <td class="unit4">3(組裝)</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">對建築80% <br />對單位92%</td>
          </tr>
          <tr>
            <td class="unit3">投射物速度</td>
            <td class="unit4">3.5(組裝)</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">8</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                >攻城單位</nuxt-link
              >(未組裝)<br />無(組裝)
            </td>
          </tr>
          <tr>
            <td class="unit3">速度</td>
            <td class="unit4">0.8(未組裝) <br />0(組裝)</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">18(未組裝) <br />21(組裝)</td>
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
