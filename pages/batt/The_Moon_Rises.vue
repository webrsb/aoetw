<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>撥雲見月</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b><nuxt-link to="/batt/The_Moon_Rises">撥雲見月</nuxt-link></b
            >是《<nuxt-link to="/games/aof">世紀帝國II：失落的帝國</nuxt-link
            >》中<nuxt-link to="/batt/Draculaa">德古拉戰役</nuxt-link
            >的第四關<nuxt-link to="/batt">戰役</nuxt-link>。
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
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                2000／<nuxt-link to="/resource/Wood">木頭</nuxt-link>2000
                <nuxt-link to="/resource/Food">食物</nuxt-link>／1000
                <nuxt-link to="/resource/Gold">黃金</nuxt-link>／500
                <nuxt-link to="/resource/Stone">石頭</nuxt-link>
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
              <td class="tc6">
                <div class="p2"></div>
                玩家1：
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>（紅色）
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p4"></div>
                玩家2：
              </td>
              <td class="tc6" width="35%">
                瓦拉幾亞鄉村（黃色）斯拉夫
              </td>
              <td class="tc6" width="15%">
                <div class="p3"></div>
                玩家6：
              </td>
              <td class="tc6" width="35%">
                匈牙利（綠色）<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p5"></div>
                玩家3：
              </td>
              <td class="tc6">拉杜總督（青色）斯拉夫</td>
              <td class="tc6">
                <div class="p1"></div>
                玩家4：
              </td>
              <td class="tc6">蘇丹穆罕默德二世（藍色）土耳其</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p6"></div>
                玩家5：
              </td>
              <td class="tc6">鄂圖曼帝國（紫色）土耳其</td>
              <td class="tc6">
                <div class="p7"></div>
                玩家7：
              </td>
              <td class="tc6">阿金奇騎兵（灰色）土耳其</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <li>起始地點：騎士x6、重裝長槍兵x9、戰矛兵x3</li>
            <li>中央地方：僧侶x4</li>
            <li>盟友市集：貿易車隊x3（三處市集各1輛）</li>
            <li>北方基地：貴族鐵騎x4、重裝長槍兵x8、戰矛兵x8、中型投石車x2</li>
            <li>西南基地：騎士x5、馬騎弓兵x5、輕騎兵x10、重型弩砲x2</li>
            <li>東方基地：貴族鐵騎x4、重裝長槍兵x8、戰矛兵x4、重型弩砲x2</li>
          </dl>
          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>贏得與鄂圖曼軍隊的初戰。</li>
              <li>確保您所有的城堡在倒數結束前屹立不倒。</li>
              <li>
                次要任務：只要您一直保護瓦拉幾亞村落，他們就會一直為您提供資源。或者，您可以洗劫瓦拉幾亞村落，將他們招降為您的村民。
              </li>
            </ul>
          </div>

          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                佛拉德‧德古拉的人口上限為200人，但他的防禦策略禁止他生產巨型投石機、衝撞車、戰艦和炸藥桶。
              </li>
              <li>鄂圖曼進攻營地裡有防禦工事，襲擊他們等於是自殺。</li>
              <li>
                由於破壞夾雜著春雨，使當地沙灘和橋樑大都無法通行，這分散了敵人的注意力，將他們集中到了佛拉德的要塞，但同時也使每個要塞都更加難攻。
              </li>
              <li>
                充分利用每個要塞附近獨特的地理位置來掠奪敵軍，並弱化他們的攻擊力。
              </li>
              <li>
                眾所周知，瓦拉幾亞農民用途多樣，可根據用途來抵禦體力充沛的敵人。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                為了讓瓦拉幾亞免遭土耳其的進攻，佛拉德‧德古拉(1，紅色)建造了三個要塞：北部開放地區的弗格拉什，東部森林覆蓋的拉斯諾夫，以及西南山區的伯恩納里。這些城堡被四面八方圍攻了：
              </li>
              <li>
                德古拉的對手兄弟拉杜總都(3，青色)，利用貴族鐵騎、重裝長槍兵和衝撞車從西部和北部攻擊弗格拉什。
              </li>
              <li>
                鄂圖曼帝國主力軍隊(5，紫色)利用馬騎弓兵、騎士和炸藥桶從東部威脅拉斯諾夫，而且可能建造巨型投石機。
              </li>
              <li>
                「征服者」蘇丹穆罕默德二世(4，藍色)從南部前往伯恩納里。他的精銳先鋒由長劍兵、土耳其火槍兵和火砲組成。
              </li>
              <li>
                有幾個瓦拉幾亞村莊(2，黃色)給德古拉的軍隊提供供給，也是潛在的貿易伙伴。他們在攻擊間隙被鄂圖曼帝國的阿金奇騎兵(7，灰色)抓獲。
              </li>
              <li>
                匈牙利(6，綠色)承諾幫助德古拉對抗土耳其人，但最近沒有任何消息。
              </li>
            </ul>
          </div>

          <h3>攻略</h3>
          <div class="hrn1"></div>

          <div class="n1">
            <ul>
              <li>
                首先拿下一開始的會戰後，任務目標要您守下三個城堡60分鐘，只要任一城堡被攻破就算失敗。而對於黃色的村莊有兩個選擇：保護黃色的村莊不被灰色攻破可以定期獲得他們的資源進貢；或是改中立然後摧毀他們的城鎮中心洗劫部落以及用僧侶招降村民（改敵對我方軍隊會一併把村民殺死）。
              </li>
              <li>
                兩種做法各有優缺，保護村民可以不用煩惱經濟的事，等進貢就好，但高難度下敵人攻勢猛烈使得資源容易短缺；如果洗劫部落則無法獲得貢品和貿易且需分神在經濟方面，但有村民可以發展經濟、蓋軍事建築及修城堡。如果要保護黃色，可以多造幾輛貿易車隊在東北方的市集貿易。高難度下通常來不及分神保護黃色，但只要東北方的村莊還在，依然可以得到貢品。
              </li>
              <li>
                而在地圖北方基地西側、西南方基地的西南側、東方基地的東北側有遺跡，可以派僧侶去回收。
              </li>
              <li>大約過了一半時間，匈牙利的軍隊會轉移給我方控制。</li>
              <li>基地的防禦面如下：</li>
              <ol>
                <li>
                  青色會使用重裝長槍兵、精銳貴族鐵騎、重型衝撞車從西邊和北邊進攻北方的基地，全部造戟兵應對即可，或是也可以配合僧侶招降貴族鐵騎、甚至用投石車配弩兵由牆內往外攻擊衝車和士兵。
                </li>
                <li>
                  藍色會用劍兵勇士、精銳土耳其火槍兵和火砲進攻西南側基地，使用重裝騎士應對並配僧侶治療。可擺一支別動隊在西側遺跡的地方，專門拆後方的火砲。
                </li>
                <li>
                  紫色會用重裝騎士、重裝馬騎弓兵、炸藥桶和巨型投石機由右側和下方攻擊東方的基地。因為沒有牆，所以這邊最難守。多的兵盡量往這裡送，匈牙利的支援部隊也全部派來這邊。控一下馬弓和城堡擊殺炸藥桶，然後一樣派幾支騎兵做別動隊，專門拆巨投。
                </li>
              </ol>
            </ul>
          </div>
          <h3>決定版變更點</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                之前是幾個場景連結的分階段篇章，決定版整個重製，改成只要守下基地60分就能過關。
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">撥雲見月</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">決定版地圖待補</div>
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Draculaa">德古拉戰役</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第二章之四
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Breath_of_the_Dragon"
                >龍之喘息</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Night_Falls">暗夜降臨</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、賜齡協助編輯。</div>
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
