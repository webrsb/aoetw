<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>戰旗飄揚</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>戰旗飄揚</b>是<nuxt-link to="/batt/Kotyan_Khan"
              >可泰安汗戰役</nuxt-link
            >的第一關。<nuxt-link to="/civs/Mongols">蒙古人</nuxt-link
            >的入侵讓<nuxt-link to="/civs/Cumans">庫曼人</nuxt-link
            >一敗塗地，此時可泰安汗出面召集庫曼部落來對抗這個入侵者。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                無
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">不適用</td>
            </tr>
          </table>

          <h3>AI</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p2"></div>
                玩家1
              </td>
              <td class="tc6" colspan="6">
                庫曼人（綠色）
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p2"></div>
                玩家2
              </td>
              <td class="tc6">
                基輔（紅色）<nuxt-link to="/civs/Slavs">斯拉夫人</nuxt-link>
              </td>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家3
              </td>
              <td class="tc6">加利西亞沃里尼亞王國（藍色）斯拉夫人</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家4
              </td>
              <td class="tc6">庫曼部落（青色）庫曼人</td>
            </tr>
            <tr>
              <td col class="tc4" colspan="4" style="background:#ea6153;">
                敵對
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家5
              </td>
              <td class="tc6">
                韃靼斥侯（黃色）<nuxt-link to="/civs/Tatars">韃靼人</nuxt-link>
              </td>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家6
              </td>
              <td colspan="3" class="tc6">
                <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>斥侯（橙色）蒙古人
              </td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              可泰安汗、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >x2、<nuxt-link to="/units/Steppe_Lancer">草原騎兵</nuxt-link
              >x3、<nuxt-link to="/units/Kipchak">欽察</nuxt-link>x3
            </dd>
          </dl>
          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>只有可泰安汗能夠招募軍隊。如果他死去，您將會失敗。</li>
              <li>
                拜訪所有庫曼部落，招募軍隊。您必須盡快動身，敵人也在試圖征服這些部落。
              </li>
              <li>拜訪基輔羅斯公國和加利西亞沃里尼公國。</li>
              <li>說服基輔和加利西亞沃里尼亞王國對抗蒙古人的戰爭。</li>
              <li>釋放被蒙古人俘虜的羅斯王子。</li>
              <li>
                摧毀基輔(2，紅色)北邊的蒙古<nuxt-link to="/building/Watch_Tower"
                  >箭塔</nuxt-link
                >。
              </li>
              <li>
                摧毀蒙古<nuxt-link to="/building/Castle">城堡</nuxt-link
                >，把蒙古人趕出該地區。
              </li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                西庫曼部落只會與可泰安對話。不過，您依然可以先派其他<nuxt-link
                  to="/units/Cavalry_Units"
                  >騎兵</nuxt-link
                >探索地圖，找到所有的部落，然後再派可泰安去見他們。這個區域有一些敵對勢力，但都可以輕易避開。
              </li>
              <li>
                蒙古人突如其來的迅速擴張嚴重打擊了庫曼的士氣。如果蒙古斥侯趕在可泰安之前抵達某個部落，該部落就會臣服，並變為你的敵對勢力。
              </li>
              <li>
                欽察<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
                >的<nuxt-link to="/elements/Attack">攻擊力</nuxt-link
                >低於大部份騎乘<nuxt-link to="/units/Archer">弓兵</nuxt-link
                ><nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>。
              </li>
              <li>
                直接向蒙古城堡發動進攻大多會失敗。在佔領城堡前，先假裝失敗而撤退，試著把傲慢的蒙古和韃靼守軍引到城堡之外。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                可泰安汗(1，綠色)起初的兵力很少，他必須拜託分散在烏克蘭大草原上的庫曼部落(4，青色)，聚集更多力量。
              </li>
              <li>
                基輔羅斯公國(2，紅色)和加利西亞沃里尼亞王國(3，藍色)位於北方較遠處。目前他們尚未和庫曼敵對，但也並不友善。要贏得他們的信任，得先發出善意的信號。
              </li>
              <li>
                蒙古人(6，橙色)在東方紮營。在準備好必要的攻城裝備前，您得避開那裡。韃靼斥侯(5，黃色)會從營地大批出動，恐赫逼迫庫曼部落。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              首先可泰安汗要去拜訪所有的<nuxt-link to="/civs/Cumans"
                >庫曼</nuxt-link
              >部落，讓他們加入我軍。先是場搶人大戰，腳步絕對不能停，因為<nuxt-link
                to="/civs/Tatars"
                >韃靼人</nuxt-link
              >也會同時出動來搶人，先搶先贏，高難度之下有可能會有幾個部落會被搶。九個部落都搶完了，再去拜訪紅色和藍色。
            </li>
            <li>
              先拜訪紅色，紅色會拒絕和可泰安汗結盟，再去拜訪藍色，藍色會要可泰安汗救出王子，送他回去後再去拜訪紅色，紅色會要可泰安汗清掉北方的<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >，兩者都是注意一下柵欄後的<nuxt-link to="/units/Monk"
                >僧侶</nuxt-link
              >和<nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >，用可泰安汗去坦並攻擊他們。在紅色和藍色中間有個<nuxt-link
                to="/building/Monastery"
                >修道院</nuxt-link
              >和<nuxt-link to="/units/Monk">僧侶</nuxt-link
              >，受傷的部隊可以去那邊醫治。
            </li>
            <li>
              當紅色的要求達成後會送可泰安汗12隻<nuxt-link to="/units/Pikeman"
                >重裝長槍兵</nuxt-link
              >和4台<nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link
              >，任務目標轉成摧毀蒙古城堡。先將大部份守軍誘出城堡的射程範圍後擊殺，然後確保城寨內都沒兵後再將<nuxt-link
                to="/units/Battering_Ram"
                >衝車</nuxt-link
              >派出去把城堡推平就能結束本關。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰旗飄揚</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              （地圖待補）
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰役資訊</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/de">決定版</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Kotyan_Khan">可泰安汗</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Cumans">庫曼</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰役關卡編號</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">
              可泰安汗第一章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">N/A</td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Battle_at_the_Kalka_River"
                >卡爾卡河戰役</nuxt-link
              >
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbatt',
  components: {}
}
</script>
<style></style>
