<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>亞馬遜族</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>亞馬遜族</b>為<nuxt-link to="/batt/El_Doradoa"
              >黃金國戰役</nuxt-link
            >的第三關劇情關卡， 雖然時間和<nuxt-link to="/resource/Food"
              >食物</nuxt-link
            >是寶貴的（根據部隊的數量，食物會按時間耗盡），但如果小心處理，這場<nuxt-link
              to="/batt"
              >戰役</nuxt-link
            >可以很容易地在短時間內完成。
          </p>
          <p>
            然而，本次戰役中，默認情況下所有單位都設置為“不還擊狀態”，因此即使受到敵人攻擊，單位也不會反擊，除非玩家命令他們攻擊或切換為“攻擊狀態”或“防禦狀態”。
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
                <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">25食物</td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">0</td>
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
              <td class="tc6"><div class="p1">玩家1</div></td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Incas">印加人</nuxt-link>（藍色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="12%"><div class="p4">玩家5</div></td>
              <td class="tc6" width="38%">
                當地的貿易站（水藍色）<nuxt-link to="/civs/Incas"
                  >印加</nuxt-link
                >
              </td>
              <td class="tc6" width="12%"><div class="p6">玩家6</div></td>
              <td class="tc6" width="38%">寺廟（紫色）印加</td>
            </tr>
            <tr>
              <td class="tc6" width="12%"><div class="p1">玩家8</div></td>
              <td class="tc6" width="38%">
                <nuxt-link to="/civs/Spanish">西班牙人</nuxt-link
                >（藍色）<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">中立</td>
            </tr>

            <tr>
              <td class="tc6" width="12%"><div class="p3">玩家3</div></td>
              <td class="tc6" width="38%">亞馬遜供給隊（綠色）印加</td>
              <td class="tc6" width="12%"><div class="p4">玩家4</div></td>
              <td class="tc6" width="38%">漁夫（黃色）印加</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6"><div class="p2">玩家2</div></td>
              <td class="tc6">亞馬遜族（紅色）印加</td>
              <td class="tc6"><div class="p7">玩家7</div></td>
              <td class="tc6">亞馬遜巡邏隊（灰色）印加</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場單位：</dt>
            <dd>
              法蘭西斯科.德.奧雷利亞納、2位<nuxt-link to="/units/Champion"
                >劍兵勇士</nuxt-link
              >、4位<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
              >、3位<nuxt-link to="/units/Conquistador">西班牙征服者</nuxt-link
              >、2艘<nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link>。
            </dd>
            <dt>大地之母單位：</dt>
            <dd>無。</dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>法蘭西斯科.德.奧雷利亞納必須活著。</li>
              <li>
                把前方村莊的全體<nuxt-link to="/units/Villager">村民</nuxt-link
                >都殺死。
              </li>
              <li>搜尋食物維持你的部隊。</li>
              <li>到達河東岸的小島，說服亞馬遜族人讓你通過那。</li>
              <li>A:破壞6處食物來源處（綠色和黃色的）。</li>
              <li>B:善待6個食物來源處（綠色和黃色的）。</li>
            </ol>
          </div>
          <h2>次要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>要想獲得食物，你可以找：</li>
              <ul>
                <li>漁夫：點擊村民來談判，或者直接殺死村民掠奪食物。</li>
                <li>
                  聖壇：點擊<nuxt-link to="/Berry_Bush.php">果樹叢</nuxt-link
                  >表示要離開聖壇，點擊聖物表示要洗劫聖壇。
                </li>
                <li>亞馬遜供給隊：點擊村民或者酋長表示談判。</li>
              </ul>
              <li>直接殺死村民可以搶奪食物，一些供給者會給你特定的指示。</li>
              <li>殺死北邊的美洲豹。</li>
              <li>帶一輛運輸船到貿易工廠來換100食物。（需要點擊貿易工廠）</li>
              <li>幫牧羊人找回她的羊駝。</li>
              <li>把貨物運送給南邊的礦工。</li>
              <li>去往火山口，設法平息它。</li>
            </ol>
          </div>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>叢林茂密，所以很難探索它。</li>
            <li>
              儘管你會找到一些食物，但都不多，最終你還是要逃離這片叢林的。
            </li>
            <li>你可以帶少一點人馬，那樣你就不需要消耗那麼多食物了。</li>
            <li>
              算好你完成的善行和惡行，西邊角落的旗幟樹木能幫你計數。
              <p>（善和惡的每一類任務都需要完成6件）</p>
            </li>
            <li>最好別去惹那些敵對勢力。</li>
            <li>大部分的食物提供者都可以和你交流，你只需要點擊他們。</li>
          </ul>
        </div>
        <h2>斥候</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              法蘭西斯科•德•奧雷利亞納（藍色）帶著一小撮部隊在西邊的船裡開始征途。他們希望找到深入河流的方法。但是，他們的食物所剩無幾了，他的士兵都快餓死了。
            </li>
            <li>
              據說這片區域居住可怕的亞馬遜族，一個由女性勇士（部落）統治的部落。她們很好鬥，但可以說服她們合作。她們的從屬部落（灰色）倒是會攻擊他們發現的一切入侵者。
            </li>
            <li>
              這片區域沒有其它大部落了。但是一些小部落（綠色）、貿易站（青藍色）、寺廟（紫色）和漁夫（黃色）遍佈地圖。你可以設法從這些地方搞到食物。
            </li>
            <li>
              什麼<nuxt-link to="/techs">科技</nuxt-link
              >都用不上，你只能停留在黑暗時代。
            </li>
          </ul>
          <h2>戰術</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/units/hero/Francisco_de_Orellana"
                  >法蘭切斯科·德·奧雷亞納</nuxt-link
                >和他的探險隊在沿著亞馬遜河的探險途中缺乏食物，為了維持部隊而不得不尋找食物，同時遇到被稱為“亞馬遜”的本土女戰士（在前面的場景中提到過），她們的名稱來自於河流。河流受到亞馬遜女戰士的嚴密保護，因此玩家必須說服他們開放並讓玩家通過，要麼做6個“善行”取悅她們，要麼做6個“惡行”來威脅她們。
              </li>
              <li>
                奧雷亞納和他的探險隊現在有兩艘運輸船，分別是“聖佩德羅號”和“維多利亞號”。當部隊少糧食的時候，他們發現亞馬遜河受到被稱為“亞馬遜”的女戰士的嚴密監視。因此，他們不得不撤退，在南岸登陸尋找食物，同時想辦法通過亞馬遜河。
              </li>
              <li>
                玩家必須殺死部隊所在村莊的所有村民，以獲得75單位食物，並繼續在其他地方尋找食物。
              </li>
              <li>
                如果玩家接近本地交易站，那麼商人（一個<nuxt-link
                  to="/units/Petard"
                  >爆炸桶</nuxt-link
                >）會建議善待其他本地村民，這將被視為“善行”。
              </li>
              <li>
                如果玩家靠近西部的神廟，盲人牧師（<nuxt-link to="/units/Monk"
                  >僧侶</nuxt-link
                >）會要求玩家幫他為他失去的眼睛復仇，這將被視為“惡行”。
              </li>
              <li>
                玩家必須積累6項“善行”或6項“惡行”，以說服亞馬遜女戰士開放河流並讓玩家通過。每次行為都會在地圖的西部角落標出記號。一件“善行”會在地面的右側放置一面紅色的太陽旗，而一個“惡行”會在地面的左側放置一面藍旗。
              </li>
              <li>
                玩家必須點擊商人和盲人牧師與他們交談。一旦盲人牧師被選中，並且他提出了他的要求，他就會消失，所有四隻<nuxt-link
                  to="/units/animal/Turkey"
                  >火雞</nuxt-link
                >都會被送給玩家並立即被宰殺。除了這四隻火雞之外，玩家發現的任何火雞都會被宰殺。每個被宰殺的火雞會給玩家5食物（來自大地之母的貢品）。
              </li>
              <li>
                有幾個神社，它們其實是遺物和漿果灌木叢。點擊<nuxt-link
                  to="/elements/Relic"
                  >遺跡</nuxt-link
                >將意味著掠奪，因此算作“惡行＂。點擊漿果灌木就意味著離開，因此是一件“善行＂。
              </li>
              <li>
                除了掠奪神社之外，惡行很容易完成，簡單地殺死每個村莊的所有村民，從他們身上掠奪一些食物。
              </li>
              <li>
                如果玩家選擇行善，玩家必須點擊相關人員來處理他／她的問題。只需點擊漁村的漁民即可獲得食物，而與綠色村莊（亞馬遜供給隊）打交道則需要履行任務，以得到回報的食物。看到酋長（紫色的曼科-印加-尤潘基）就點擊他。
              </li>
              <li>
                亞馬遜河南岸，綠色村莊內的紫色酋長會要求玩家將他們的<nuxt-link
                  to="/units/Trade_Cart"
                  >貿易車隊</nuxt-link
                >帶到東南部的<nuxt-link to="/building/Mining_Camp"
                  >採礦營地</nuxt-link
                >旁邊。在玩家登陸的村莊北部的女村民要求將她遺失的羊駝帶回北部。
              </li>
              <li>
                羊駝農場東邊的一位貿易商（一位男性村民）會提議從玩家那裡購買一艘運輸船，代價是100單位食物。如果玩家給他兩艘運輸船，他們中的一個將被返還給玩家。
              </li>
              <li>
                北部<nuxt-link to="/building/Barracks">軍營</nuxt-link
                >附近的獵人會要求幫助他殺死附近的美洲虎。
              </li>
              <li>
                東部的村莊會要求幫助他們調查他們南部的火山，火山一直在摧毀他們的莊稼，因此必須找出一個讓火山平靜的辦法。
              </li>
              <li>
                玩家必須前往火山，並摧毀巨石（標記為屬於綠色玩家的<nuxt-link
                  to="/civs/Mongols"
                  >蒙古</nuxt-link
                >包）。
              </li>
              <li>
                一路上，玩家會遇到紅色<nuxt-link to="/units/edmap/Canoe"
                  >獨木舟</nuxt-link
                >或灰色亞馬遜巡邏隊（主要是<nuxt-link
                  to="/units/edmap/Amazon_Warrior"
                  >亞馬遜戰士</nuxt-link
                >或亞馬遜<nuxt-link to="/units/Archer_Units">弓箭手</nuxt-link
                >）的抵抗。要記得，在這場戰役裡面，玩家的單位默認設置為“不還擊狀態”，因此如果玩家無法避免與亞馬遜戰鬥（儘管遊戲提示建議避開）玩家必須手動攻擊他們，或設置為“進攻”或“防衛”狀態。
              </li>
              <li>
                只要亞馬遜族同意讓玩家通過河流，他們就會與玩家成為同盟，玩家可以安全地通過河道東邊的通道（標有藍旗），奧雷亞納應該到那裡去。然後戰役就會勝利。
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
                亞馬遜族
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle"><img src="~assets/EI_3.jpg" alt="" /></div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                情景信息
              </div>
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
              <nuxt-link to="/batt/El_Doradoa">黃金國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Incas">印加人</nuxt-link>
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第五章之三
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Split">分離告別</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Cannibals">食人族</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、Dennis協助編輯。</div>
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
