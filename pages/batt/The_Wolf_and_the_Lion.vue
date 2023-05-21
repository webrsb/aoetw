<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>狼與獅</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>狼與獅</b>是<nuxt-link to="/games/delw">西方霸主</nuxt-link
            >DLC新增的<nuxt-link to="/batt">戰役</nuxt-link>中，<nuxt-link
              to="/batt/The_Grand_Dukes_of_the_West"
              >大公爵</nuxt-link
            >的第二關。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="28%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                無
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">200</td>
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
                <div class="p6"></div>
                玩家1
              </td>
              <td class="tc6" colspan="6">
                <nuxt-link to="/civs/Burgundians">勃根地人</nuxt-link>（紫色)
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p7"></div>
                玩家2
              </td>
              <td colspan="3" class="tc6">
                法蘭西農民（灰色）<nuxt-link to="/civs/Franks"
                  >法蘭克人</nuxt-link
                >
              </td>
            </tr>
            <td col class="tc4" colspan="4" style="background:#ea6153;">
              中立
            </td>
            <tr>
              <td class="tc6" width="14%">
                <div class="p2"></div>
                玩家3
              </td>
              <td class="tc6">
                英格蘭傭兵（灰色）<nuxt-link to="/civs/Britons"
                  >不列顛人</nuxt-link
                >
              </td>
            </tr>
            <td col class="tc4" colspan="4" style="background:#ea6153;">
              敵對
            </td>
            <tr>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家4
              </td>
              <td class="tc6">剝皮者（橙色）法蘭克人</td>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家5
              </td>
              <td colspan="3" class="tc6">
                阿馬尼亞克的伯納德（藍色）法蘭克人
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家6
              </td>
              <td class="tc6">
                波旁的約翰（青色）法蘭克人
              </td>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家7
              </td>
              <td class="tc6">
                阿朗松的約翰（黃色）法蘭克人
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p3"></div>
                玩家8
              </td>
              <td class="tc6">
                奧爾良的查理（綠色）法蘭克人
              </td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              無畏的約翰、<nuxt-link to="/units/Coustillier"
                >馬上輕裝兵 </nuxt-link
              >x9、<nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link
              >x18、<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
              >x10、<nuxt-link to="/units/Monk">僧侶</nuxt-link>x2
            </dd>
          </dl>

          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>將剝皮者逐出法蘭西島。</li>
              <li>
                請從以下任務中選擇一項：<br />
                ─打敗阿馬尼亞克的伯納德。<br />
                ─打敗阿馬尼亞克的伯納德的三個盟友：波旁的約翰、阿朗松的約翰和奧爾良的查理。<br />
                ─奪取4件<nuxt-link to="/Relic">聖物</nuxt-link
                >，並將他們放入您的<nuxt-link to="/building/Monastery"
                  >修道院</nuxt-link
                >。
              </li>
            </ul>
            <p>次要任務</p>
            <ul>
              <li>獲得中立村莊的控制權，獲取額外資源。</li>
              <li>
                向英格蘭傭兵（3，紅色）獻上500<nuxt-link to="/resource/Gold"
                  >黃金</nuxt-link
                >。<br />
                →向英格蘭傭兵（3，紅色）獻上300黃金。
              </li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                勃根地人可以升級至<nuxt-link to="/techs/age/Imperial_Age"
                  >帝王時代</nuxt-link
                >，人口上限為200人。
              </li>
              <li>
                開局階段要專注於解放法蘭西島。您需要一個基地才能向阿馬尼亞克發起進攻！
              </li>
              <li>
                地圖上遍布著中立村莊。如果您能設法占領村莊，其中的居民將會為您生產資源。村莊的控制權取決於中心火炬為誰<nuxt-link
                  to="/elements/Conversion"
                  >招降</nuxt-link
                >。務必注意您的敵人也可以佔領村莊或從您的手中奪回村莊。
              </li>
              <li>獲得勝利的方法不只一種。不是一定得完全消滅所有的敵人。</li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                無畏的約翰的部隊（1，紫色）已經在巴黎西邊集結完畢，他們的目標是終結剝皮者為法蘭西島帶來的恐怖。
              </li>
              <li>
                剝皮者（4，橙色）是來自法蘭西南部的傭兵，受阿馬尼亞克的伯納德僱傭。他們的<nuxt-link
                  to="/units/Man-at-Arms"
                  >裝甲步兵</nuxt-link
                >、<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
                >和<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
                >率先控制了西邊的聖克盧
              </li>

              <li>
                中立村莊（2，灰色）遍布於地圖各處。控制這些村莊可以為您帶來優勢（詳見提示3）。
              </li>
              <li>
                阿馬尼亞克的伯納德（5，藍色）是敵方聯盟的領袖，他已將軍隊集結在北邊。他的軍隊中含有重裝<nuxt-link
                  to="/armor/Armor_Class_Cavalry"
                  >騎兵</nuxt-link
                >。伯納德還可以製造<nuxt-link to="/units/Trebuchet"
                  >巨型投石機</nuxt-link
                >。
              </li>
              <li>
                另外三名有影響力的公爵與伯納德組成了聯盟。波旁的約翰（6，青色）控制著東南方的大片領土，並且有一支主要由<nuxt-link
                  to="/units/Infantry_Units"
                  >步兵</nuxt-link
                >構成的大型軍隊。阿朗松的約翰（7，黃色）控制著地圖的西部。他會派出弩兵、<nuxt-link
                  to="/units/Pikeman"
                  >重裝長槍兵</nuxt-link
                >和<nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link
                >來攻擊您。奧爾良的查理（8，綠色）在南邊紮營。他的部隊含有<nuxt-link
                  to="/units/Knight"
                  >騎士</nuxt-link
                >、<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
                >和<nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link>。
              </li>
              <li>
                英格蘭傭兵（3，紅色）被發現於西北方向。或許可以招募他們，但可能需要不小的花費。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              首先必須將橘色的軍隊消滅，接著中間基地的控制權就會轉給玩家，但多已半毀要注意。之後勝利條件三選一：打敗藍色、或是他的三個盟友、或是收集四<nuxt-link
                to="/Relic"
                >聖物</nuxt-link
              >。建議是直接擊敗藍色，雖然全敵人就只有他會升<nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >，但只要打敗一個敵人即可。
            </li>

            <li>
              由於基地位於中央會面臨多面的進攻，初期先盡可能挖石並在重要地點蓋<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >防守，原則上放在基地西南方渡口的懸崖上、東南的<nuxt-link
                to="/resource/Stone"
                >石礦</nuxt-link
              >區附近和北方的<nuxt-link to="/resource/Gold">金礦</nuxt-link
              >區附近都蓋一個，以防萬一南方金礦處也再補一個，西南和東南要常駐幾隻<nuxt-link
                to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >因為會推出<nuxt-link to="/units/Battering_Ram">衝車</nuxt-link
              >來打（東南方要注意<nuxt-link to="/armor/Armor_Class_Spearman"
                >長槍兵</nuxt-link
              >）。有餘力在再派遣小部隊占領其他村莊，初期可以先派部隊拿下右上方的兩個村莊讓資源多一些進帳。英格蘭傭兵要先給500黃金才會幫忙作戰，但給了之後每隔一段時間都會再要求300黃金，但不給會轉敵對，最好是給免得多被一國攻擊。
            </li>

            <li>
              基地穩固後就攻擊藍色，在前線的村莊附近建立攻擊陣地和城堡以掩護第一波的迎擊，然後用騎兵、<nuxt-link
                to="/units/Hand_Cannoneer"
                >火槍兵</nuxt-link
              >和<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link
              >打進去。如果能把北方的城堡先打下來的話就能讓<nuxt-link
                to="/civs/Britons"
                >英國</nuxt-link
              >軍隊打進去，一起幫忙殲滅藍色。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">狼與獅</div>
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
              <nuxt-link to="/games/delw">西方霸主</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Grand_Dukes_of_the_West">大公爵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Burgundians">勃根地</nuxt-link>
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
              勃根地第二章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/A_Kingdom_Divided">王國分裂</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Cleansing_of_Paris">掃蕩巴黎</nuxt-link>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allbatt' })

export default {
  components: {}
}
</script>
<style></style>
