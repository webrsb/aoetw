<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>倫巴聯盟</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>倫巴聯盟</b>為<nuxt-link to="/batt/Barbarossa"
              >巴巴羅薩戰役</nuxt-link
            >的第四關劇情關卡。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="14%">
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                2,000<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >，1,000<nuxt-link to="/resource/Food">食物</nuxt-link
                >，400<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >，800<nuxt-link to="/resource/Stone">石頭</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">75</td>
            </tr>
          </table>

          <h3>AI</h3>
          <!--<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: #ff911d; margin-left: 5px;"></span>:中立</p>!-->
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p2">玩家1</div></td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Teutons">條頓人</nuxt-link>（紅色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="12%"><div class="p8">玩家2</div></td>
              <td class="tc6" width="38%">
                <nuxt-link to="/batt/Henry_the_Lion">猛獅亨利</nuxt-link
                >（橘色）<nuxt-link to="/civs/Teutons">條頓</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr></tr>
            <tr>
              <td class="tc6"><div class="p6">玩家3</div></td>
              <td class="tc6">
                威尼斯（紫色）<nuxt-link to="/civs/Byzantines"
                  >拜占庭</nuxt-link
                >
              </td>
              <td class="tc6" width="12%"><div class="p3">玩家4</div></td>
              <td class="tc6" width="38%">帕度亞（綠色）條頓</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p4">玩家5</div></td>
              <td class="tc6">
                佛<nuxt-link to="/units/hero/Roland">羅蘭</nuxt-link
                >（黃色）<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
              </td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場單位：</dt>
            <dd>
              7位<nuxt-link to="/units/Villager">村民</nuxt-link>、2位<nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >、8位<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
              >、3艘<nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
              >、3位<nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
              >。
            </dd>
            <dt>大地之母單位：</dt>
            <dd>
              6艘<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
              >、5位村民、5台<nuxt-link to="/units/Onager">中型投石車</nuxt-link
              >、5位騎士、4艘運輸船、4艘<nuxt-link to="/units/War_Galley"
                >弩砲戰船</nuxt-link
              >、3位條頓武士、2位<nuxt-link to="/units/Scout_Cavalry"
                >斥候</nuxt-link
              >、2艘<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>。
            </dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                在威尼斯、帕度亞或佛羅蘭的<nuxt-link to="/building/Stone_Wall"
                  >城牆</nuxt-link
                >之內建造奇觀。
              </li>
            </ol>
          </div>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              倫巴人在軍事上已經領先於你，所以你首先要建造防禦工事，然後再訓練你的軍隊。
            </li>
          </ul>
          <h2>芝麻小事</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                倫巴聯盟（<nuxt-link to="/civs/Italians">義大利</nuxt-link
                >語：Lega
                Lombarda）是一個成立於1167年的中世紀聯盟，其目的是為了對抗霍亨斯陶芬家族的神聖羅馬帝國皇帝在義大利擴張勢力的企圖。在其巔峰時期，北義大利的多數城市都加入了同盟，並且得到了教皇的支持。隨著第三位、也是最後一位霍亨斯陶芬皇帝腓特烈二世在1250年去世，同盟的使命完成，並隨後解散。
              </li>
              <li>
                往東走就能得到一批額外的援助：包括<nuxt-link
                  to="/units/Naval_Vessels"
                  >海軍</nuxt-link
                >、陸軍與村民。在可見範圍內，有兩個地方可以重建你的基地：一是原先基地的南方、二則位於東北，需要穿越海洋，而且靠近帕度亞。東北方的區域適合建造<nuxt-link
                  to="/building/Castle"
                  >城堡</nuxt-link
                >，既可以擋住敵人從陸上的進攻、也能抵遇海上的來襲，更是遠離猛獅亨利。
              </li>
              <li>
                記得要控制好你的船隊，他們若逕行穿越海洋，很可能被威尼斯人的砲塔擊沉。帕度亞會佔領你的舊基地，並不會馬上就開始積極進攻，你會有時間可以重建你的城鎮。在北方建造你的城鎮，在樹林中、甚至在地圖的邊緣，可以避免威尼斯人侵略性的海上攻擊。在河岸上建立城堡，靠近帕度亞，並且可以抵禦渡河攻擊的敵軍，研發相關的<nuxt-link
                  to="/techs"
                  >科技</nuxt-link
                >，運用條頓城堡卓越的射程，可以讓你省下不少事。
              </li>
              <li>
                建議生產的單位是<nuxt-link to="/units/Halberdier"
                  >戟兵</nuxt-link
                >、<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
                >與<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
                >（<nuxt-link to="/units/Paladin">遊俠</nuxt-link
                >），如此一來既可以對復帕度亞的騎兵、<nuxt-link
                  to="/units/Siege_Weapons"
                  >攻城武器</nuxt-link
                >，也能夠處理猛獅亨利的條頓武士。在你的士兵的護衛下，運用<nuxt-link
                  to="/units/Trebuchet"
                  >巨型投石機</nuxt-link
                >摧毀帕度亞的城牆，搭配城堡與軍隊，你應該很輕鬆就能消耗敵人的資源，摧毀他們的城鎮後，蓋好<nuxt-link
                  to="/building/Wonder"
                  >世界奇觀</nuxt-link
                >，便可輕鬆取勝。
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                倫巴聯盟
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle"><img src="~assets/BRA 4.jpg" alt="" /></div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">情景信息</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/batt">戰役</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/batt/Barbarossa">巴巴羅薩</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Teutons">條頓人</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                戰役關卡編號
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>第五章之四
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Pope_and_Antipope">教皇與僭稱教皇</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Barbarossas_March">紅鬍子的行軍</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、竺叡協助編輯。</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的倫巴第聯盟資訊
            <div style="margin-left: 10px;">
              <em
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E4%BC%A6%E5%B7%B4%E7%AC%AC%E5%90%8C%E7%9B%9F"
                    target="_blank"
                    >倫巴第聯盟</a
                  ></strong
                ></em
              >
            </div>
          </div>
        </div>
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
