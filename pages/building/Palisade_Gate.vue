<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>木門</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>木門</b>是在《<nuxt-link to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >》資料片中出現的防禦性<nuxt-link to="/building">建築</nuxt-link
            >，他可以建在<nuxt-link to="/building/Palisade_Wall">木牆</nuxt-link
            >上，可以讓同盟通過同時阻擋敵人。木門在友方單位靠近時會自動開啟讓他們通過，並在門下沒有任何單位時(我方或敵方)關上。為了避免敵方單位尾隨有方單位進門後佔住<nuxt-link
              to="/building/Gate"
              >城門</nuxt-link
            >變成防守漏洞，可以將木門鎖定(可再次解鎖)；然而阻擋敵方單位時我方單位也無法通過該木門。
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
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Hit_points">生命值</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Great_Wall">長城</nuxt-link>:+30%
              HP，<nuxt-link to="/civs/Chinese">中國</nuxt-link>限定
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">工作速率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Treadmillcrane.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
              >(+20%工作效率)
            </td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：木門在<nuxt-link to="/techs/age/Dark_Age">黑暗</nuxt-link
              >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >多10%/20%/30%/40%的<nuxt-link to="/elements/Hit_points"
                >血量</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對木門有利的技術在<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代價格便宜15％/20％。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>：木門建築速度快33%
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：木門造價便宜15%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：木門建築速度快30%。
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
              >的速度提高80%。
            </li>
            <li><nuxt-link to="/civs/Mayans">馬雅</nuxt-link>：木門便宜50%</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                木門
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Palisadegateicon.png" width="45" alt="" />
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
            <td class="unit4">防禦</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">功能</td>
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
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">20</td>
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
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Wun和賜齡協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="180"
                src="~assets/Palisadegate.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>木門和木牆。</em></p>
            </div>
          </div>
        </div>
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
