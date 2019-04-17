<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>城門</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>城門</b>是世紀帝國II進入<nuxt-link to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >可以建造的防禦性<nuxt-link to="/building">建築</nuxt-link
            >，他可以建在<nuxt-link to="/building/Stone_Wall">城牆</nuxt-link
            >上，可以讓同盟通過同時阻擋敵人。
          </p>
          <p>
            當<nuxt-link to="/building/Stone_Wall">石牆</nuxt-link
            >升級成<nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link
            >時，城門也會升級<nuxt-link to="/elements/Hit_points"
              >生命值</nuxt-link
            >從2700變成4000。
          </p>
          <p>
            城門除了<nuxt-link to="/civs/Goths">哥德</nuxt-link
            >之外的所有<nuxt-link to="/civs">文明</nuxt-link
            >都可以使用，垛牆和升級過的城門除了哥德、<nuxt-link to="/civs/Huns"
              >匈奴</nuxt-link
            >、<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、<nuxt-link
              to="/civs/Malay"
              >馬來</nuxt-link
            >和<nuxt-link to="/civs/Persians">波斯</nuxt-link
            >以外的文明都可以使用。
          </p>
          <p>
            城門在友方單位靠近時會自動開啟讓他們通過，並在門下沒有任何單位時(我方或敵方)關上。為了避免敵方單位尾隨友方單位進門後佔住城門變成防守漏洞，可以將城門鎖定(可再次解鎖)；然而阻擋敵方單位時我方單位也無法通過該城門。
          </p>
        </div>
        <h3>更多數據</h3>
        <div class="hrn1"></div>
        <div class="n1"></div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">劣勢與優勢</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">強勢(容易對抗)</td>
            <td class="tta4">無</td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              除了<nuxt-link to="/units/Monk">僧侶</nuxt-link>外的全部單位。
            </td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">生命值</td>
            <td class="tta4">
              <p>
                <img
                  src="~assets/CastleAgeUnique.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Great_Wall">長城</nuxt-link>(+30%
                HP/<nuxt-link to="/civs/Chinese">中國</nuxt-link>限定)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">建造速率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Treadmillcrane.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
              >(+20%建造效率)
            </td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：城門封建/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >多20%/30%/40%的<nuxt-link to="/elements/Hit_points"
                >血量</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：在<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代，城門的技術價格便宜15％/20％。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>：城門建築速度快33%
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：城門造價便宜15%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：城門建築速度快30%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Treadmill_Crane"
                >滑輪起重機</nuxt-link
              >團隊速度提高80%。
            </li>
            <li><nuxt-link to="/civs/Mayans">馬雅</nuxt-link>：城門便宜50%</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                城門
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Gateicon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">概要</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">防禦建築</td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">除了哥德以外的所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">封建時代</td>
          </tr>
          <tr>
            <td class="unit3">使用</td>
            <td class="unit4">防止敵方單位進入，讓友方單位通過</td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">30秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">石材</td>
            <td class="unit4">30</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">4x1</td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">
              封建時代1375 <br /><nuxt-link to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >2750/4000(升級) <br />帝王時代2750/4000(升級)
            </td>
          </tr>
          <tr>
            <td class="unit3">近戰護甲</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠程護甲</nuxt-link></td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
            <td class="unit4">
              建築(+20) <br /><nuxt-link
                to="/armor/Armor_Class_standard_building"
                >標準建築</nuxt-link
              >
              <br />石造防禦 <br /><nuxt-link
                to="/armor/Armor_Class_wall_and_gate"
                >城門和城牆</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">6</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbuilding',
  components: {}
}
</script>
<style></style>
