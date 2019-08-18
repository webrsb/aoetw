<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>西域之君</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>西域之君</b>為<nuxt-link to="/batt/Alaric"
              >阿拉里克戰役</nuxt-link
            >的第三關劇情關卡，在這個<nuxt-link to="/batt">戰役</nuxt-link
            >中，<nuxt-link to="/batt/Alaric">阿拉里克</nuxt-link
            >最初被設計要集結阿陶爾夫帶來的軍隊，同時要防禦來自哥德同鄉薩魯斯的敵軍。然後阿拉里克的軍隊必須前進到拉文納南部的港口，路上收集一些傭兵。
          </p>
          <p>
            在打敗位於港口的薩魯斯士兵後，阿拉里克要去拉文納會見羅馬皇帝，在拉文納遇上薩魯斯士兵後，他就會發現他又被皇帝背叛了。阿拉里克將接管當地村莊，準備通過摧毀薩魯斯的堡壘來擊敗他們。
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
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                2,000<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／2,000<nuxt-link to="/resource/Food">食物</nuxt-link
                >／2,000<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／1,000<nuxt-link to="/resource/Stone">石頭</nuxt-link>
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
                <div class="p1"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Goths">哥德人</nuxt-link>（藍色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="12%">
                <div class="p2"></div>
                玩家2
              </td>
              <td class="tc6" width="38%">
                平民（紅色）<nuxt-link to="/civs/Italians">義大利</nuxt-link>
              </td>
              <td class="tc6" width="12%">
                <div class="p6"></div>
                玩家4
              </td>
              <td class="tc6" width="38%">拉文納（紫色）義大利</td>
            </tr>
            <tr>
              <td class="tc6" width="12%">
                <div class="p5"></div>
                玩家5
              </td>
              <td class="tc6" width="38%">阿拉里克（水藍色）</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6">
                <div class="p3"></div>
                玩家3
              </td>
              <td class="tc6">薩魯斯（綠色）哥德</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場單位：</dt>
            <dd>
              阿拉里克（<nuxt-link to="/units/Cavalier">騎兵</nuxt-link
              >）、1位貼身侍衛（<nuxt-link to="/units/Magyar_Huszar"
                >馬扎爾鏢騎</nuxt-link
              >）、2位<nuxt-link to="/units/Knight">騎士</nuxt-link
              >、2位<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >、4位<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
              >、3位<nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link
              >、3位<nuxt-link to="/units/Condottiero">義大利傭兵</nuxt-link
              >、2位<nuxt-link to="/units/Genoese_Crossbowman"
                >熱那亞弩手</nuxt-link
              >。
            </dd>
            <dt>大地之母單位：</dt>
            <dd>
              5位騎士、4位熱那亞弩手、5位傭兵、6艘<nuxt-link
                to="/units/Transport_Ship"
                >運輸船</nuxt-link
              >、7艘<nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link
              >、1艘<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>。
            </dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>阿拉里克必須存活。</li>
              <li>去東邊和阿陶爾夫的手下會面</li>
              <li>阿拉里克要安全的到達北邊的村莊</li>
              <li>
                帶阿拉里克到拉文納的<nuxt-link to="/building/Harbor"
                  >海港</nuxt-link
                >
              </li>
              <li>帶阿拉里克到拉文納的皇宮</li>
              <li>帶阿拉里克的南部的義大利小鎮</li>
              <li>摧毀薩魯斯的防禦工事</li>
            </ol>
          </div>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>制定戰術，小心行事，多聽你手下的意見，最好走大道。</li>
            <li>
              阿拉里克的上尉阿陶爾夫已經派了一些部隊和<nuxt-link
                to="/units/Scout_Cavalry"
                >斥候</nuxt-link
              >走在阿拉里克前面了，這些部隊有的在附近靜候命令，有的在港口備船等候。
            </li>
            <li>
              據說薩魯斯的手下駐紮在拉文納外面，選擇一條安全通往港口的航線可以讓你避開惡戰。
            </li>
            <li>
              薩魯斯在拉文納的海域有很多的戰船，所以你最好遠離拉文納，免遭襲擊。
            </li>
            <li>哥德人只能升級至城堡時代。</li>
          </ul>
        </div>
        <h2>斥候</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              阿拉里克（水藍色）帶領一小部隊出現在西邊，準備在拉文納和皇帝相遇。
            </li>
            <li>
              阿拉里克（藍綠色）帶領一小部隊出現在西邊，準備在拉文納和皇帝相遇。
            </li>
            <li>市郊有幾個小村莊，有的願意協助你完成任務。</li>
            <li>
              薩魯斯的部隊（綠色）是你的主要敵人，他們有許多步兵，騎兵和<nuxt-link
                to="/units/Archer_Units"
                >弓兵</nuxt-link
              >在郊外巡邏，一旦發現你就會衝過來交戰，薩魯斯自己則控制著拉文納城西南的一座要塞。
            </li>
          </ul>
          <h2>戰術</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                開始時玩家擁有在地圖西邊的阿拉里克與他的軍隊，正要前往東邊的老百姓港口去會見阿陶爾夫的軍隊。路上收集一些大地之母軍隊，你也會碰到薩魯斯（特殊騎兵表示）與其軍隊的襲擊。小支來襲及阿拉里克的部隊是很好處理的，但是大部隊會一直站在主要幹道的地方，玩家應該走進森林以避開他們。
              </li>
              <li>
                玩家會在港口收到一些士兵，用運輸船帶著所有士兵，在弩砲戰船跟火戰船伴隨之下護送阿拉里克到拉文納南邊的港口。玩家應該盡量避開拉文納，因為駐守在拉文納海岸的薩魯斯大軍根本不可能擊敗。玩家還是會被薩魯斯的<nuxt-link
                  to="/building/Watch_Tower"
                  >瞭望箭塔</nuxt-link
                >攻擊到，但那可以很快地避開。東邊有一些大地之母的傭兵對無聊的生活感到厭倦，並準備好加入阿拉里克。
              </li>
              <li>
                目的地港口實際上由薩魯斯控制，玩家將不得不擊敗那裡的部隊。阿拉里克知道羅馬皇帝不在港口，他將不得不前往拉文納和皇帝見面。然而，當他到達<nuxt-link
                  to="/building/Gate"
                  >城門</nuxt-link
                >（被上鎖）的時候，有一些薩魯斯的部隊追捕他。阿拉里克得知皇帝再次背叛了他。玩家必須把他帶到西部的老百姓村莊。
              </li>
              <li>
                意大利老百姓村莊將被玩家接管，從而成為玩家的基地。城鎮西邊的士兵在玩家接管村莊之後，會立刻開始跟薩魯斯士兵交戰。玩家應該開始生產部隊，好用來摧毀薩魯斯的堡壘以擊敗他。同時，薩魯斯會再次從西方侵入玩家村莊，因此玩家最好在那裡建立防禦工事。
              </li>
              <li>這個戰役的石頭稀少，只有玩家的村莊有。</li>
              <li>
                玩家村莊內的黃金也很稀少，但可以在西北方的村莊找到，位於薩魯斯堡壘以北的某個地方，如果不准備和他們戰鬥的話，玩家應該避開薩魯斯的大支巡邏部隊。玩家還可以在薩魯斯的港口與他的<nuxt-link
                  to="/building/Market"
                  >市集</nuxt-link
                >進行貿易，或者在薩魯斯的港口建立<nuxt-link to="/building/Dock"
                  >碼頭</nuxt-link
                >，並與海上的老百姓碼頭進行貿易。記得要摧毀所有薩魯斯的軍事<nuxt-link
                  to="/building"
                  >建築</nuxt-link
                >和碼頭，以防止他在那裡建立軍隊或海軍。
              </li>
            </ul>
            <h2>趣事</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  水藍色的AI阿拉里克有個中型衝撞車在地圖北端當作佔位單位。在原版的<nuxt-link
                    to="/batt/Battles_of_the_Forgotten"
                    >失落的帝國戰役</nuxt-link
                  >中，玩家開始時有個弓兵作為佔位單位，他會駐守在剛剛提到的中型衝撞車裡面。
                </li>
                <li>
                  在玩家用運輸船躲避拉文納的時候，偶爾會有所有敵人突然消失，然後玩家直接勝利的情形，這可能起因於一個bug。（<nuxt-link
                    to="/games/aof"
                    >失落的帝國</nuxt-link
                  >非正式MOD限定）
                </li>
                <li>
                  失落的帝國MOD裡面的大地之母是<nuxt-link to="/civs/Saracens"
                    >薩拉森</nuxt-link
                  >，而HD版本是哥德，這導致了戰船外觀上的差異。
                  <ul>
                    <li>薩拉森（中東）彎刀。</li>
                    <li>哥特人（中歐）十字架。</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                西域之君
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Alaric_3.jpg" alt="" />
              </div>
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
              <nuxt-link to="/batt/Alaric">阿拉里克</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Goths">哥德人</nuxt-link>
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
            <td class="unit4">失落的帝國第一章之三</td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Legionaries_on_the_Horizon"
                >羅馬軍團隨時殺到</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Sack_of_Rome">洗劫羅馬</nuxt-link>
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
