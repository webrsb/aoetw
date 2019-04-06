<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>米蘭新公爵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>米蘭新公爵</b>是<nuxt-link to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >中<nuxt-link to="/batt/Sforzaa">斯福爾札戰役</nuxt-link
            >的第五關。（也是此章節的最後一關）
          </p>
          <p>
            這次戰役非常困難，因為玩家必須要在持續不斷的攻擊中建立防禦基地，並要出去控制周邊地區。一旦完成那部分，玩家必須擊敗強大而意外的來自新陣營的攻擊，然後戰勝城市，贏下這次戰役與系列。
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
              <td class="tc2">無</td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">125</td>
            </tr>
          </table>

          <p></p>
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
                <nuxt-link to="/civs/Italians">義大利人</nuxt-link>（藍色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p6">玩家2</div></td>
              <td class="tc6" colspan="3">威尼斯人（紫色）義大利</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr></tr>
            <tr>
              <td class="tc6" width="10%"><div class="p4">玩家3</div></td>
              <td class="tc6" width="40%">米蘭城（黃色）義大利</td>
              <td class="tc6" width="10%"><div class="p3">玩家4</div></td>
              <td class="tc6" width="40%">米蘭軍隊（綠色）義大利</td>
            </tr>
            <tr>
              <td class="tc6" width="10%"><div class="p7">玩家5</div></td>
              <td class="tc6" width="40%">米蘭村莊（灰色）義大利</td>
              <td class="tc6" width="10%"><div class="p2">玩家6</div></td>
              <td class="tc6" width="35%">
                阿比亞泰格拉索（紅色）<nuxt-link to="/civs/Franks"
                  >法蘭克</nuxt-link
                >
              </td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場單位：</dt>
            <dd>
              法蘭切斯科.斯福爾扎、1位弗朗切斯科.斯福爾扎、1位<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >、4位<nuxt-link to="/units/Knight">騎士</nuxt-link
              >、5位<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
              >、8位<nuxt-link to="/units/Genoese_Crossbowman"
                >熱那亞弩手</nuxt-link
              >、3位<nuxt-link to="/units/Villager">村民</nuxt-link>。
            </dd>
            <dt>大地之母單位：</dt>
            <dd>無</dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>法蘭切斯科.斯福爾扎必須存活。</li>
              <li>
                包圍米蘭直到他們斷絕<nuxt-link to="/resource/Food"
                  >食物</nuxt-link
                >。
              </li>
              <li>尋找重要的攻擊點，然後切斷米蘭的供給資源。</li>
              <li>要在威尼斯的進攻中堅持下來直到米蘭人投降。</li>
              <li>
                帶斯福爾扎到米蘭<nuxt-link to="/building/Castle">城堡</nuxt-link
                >。
              </li>
            </ol>
            <h2>次要任務</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ol>
                <li>摧毀保衛穀倉的塔，奪取米蘭穀倉。</li>
                <li>摧毀貿易站和貿易車。</li>
                <li>
                  點擊克雷莫納城的靶場，花50金子買進<nuxt-link
                    to="/units/Hand_Cannoneer"
                    >火槍兵</nuxt-link
                  >。
                </li>
                <li>打敗阿比亞泰格拉索</li>
              </ol>
            </div>
          </div>
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/building/Dock">碼頭</nuxt-link>和<nuxt-link
                  to="/building/Siege_Workshop"
                  >攻城武器工廠</nuxt-link
                >已被禁用，所以嘗試攻擊米蘭城就等於自殺。
              </li>
              <li>從現在起威尼斯人是我們的盟軍了。但他們值得信任嗎？</li>
              <li>節約兵力和資源很重要。</li>
              <li>
                保護你的<nuxt-link to="/units/hero">英雄</nuxt-link
                >！最好把他放在你大本營的建築裡，不要讓他四處遊蕩，否則容易被殺。
              </li>
              <li>
                地圖上跟你搶奪資源的主要對手就是阿比亞泰格拉索。你應該盡早攻打他們。
              </li>
            </ul>
          </div>
          <h2>斥候</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                米蘭城（綠色）在你的大營的正前方。它防禦固若金湯，<nuxt-link
                  to="/building/Stone_Wall"
                  >城牆</nuxt-link
                >難以攻破。米蘭的共和軍（黃色）會不惜一切代價來保衛城池。
              </li>
              <li>
                阿比亞泰格拉索是在米蘭西方的運河沿岸上的小城。在米蘭城外也有幾個小營地。
              </li>
            </ul>
            <h2>戰術</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ol>
                <li>
                  開始時，玩家從地圖西南部分，四面楚歌。米蘭城（黃色）在地圖中央，城內有米蘭軍隊（綠色），周邊環繞著他的同盟們（阿比亞泰格拉索-紅色、米蘭村莊-灰色）。
                </li>
                <li>
                  玩家的目標不是直接攻擊米蘭，而是打敗與其同盟的支持者。最初的主要威脅是阿比亞泰格拉索，在米蘭西部擁有一座城市。開始後不久，玩家將獲得三名村民。
                </li>
                <li>
                  玩家會經常受到攻擊，但可以在附近找到<nuxt-link
                    to="/resource/Gold"
                    >黃金</nuxt-link
                  >，<nuxt-link to="/resource/Stone">石頭</nuxt-link
                  >和其他資源。用來建立一些初始的防禦（在起始位置北邊的山頂起一座城堡，並用<nuxt-link
                    to="/building/Watch_Tower"
                    >箭塔</nuxt-link
                  >圍繞之）有助於阻止敵人的攻擊。
                </li>
                <li>
                  玩家應該在箭塔或是城堡駐紮<nuxt-link to="/units/Archer"
                    >弓箭手</nuxt-link
                  >增加火力，並建造一座<nuxt-link to="/building/Monastery"
                    >修道院</nuxt-link
                  >來訓練<nuxt-link to="/units/Monk">僧侶</nuxt-link
                  >，然後<nuxt-link to="/elements/Conversion">招降</nuxt-link
                  >敵人的軍事單位。
                </li>
                <li>
                  痛苦將會持續一段時間，玩家將不得不持續打響<nuxt-link
                    to="/building/Town_Center"
                    >城鎮中心</nuxt-link
                  >的鈴聲，以保護被綠色與阿比亞泰格拉索攻擊的村民。米蘭軍隊是無法被攻擊的（他們位於米蘭城內），而紅色將發出穩定的攻勢。
                </li>
                <li>
                  幸運的是，阿比亞泰格拉索始終停留在<nuxt-link
                    to="/techs/age/Feudal_Age"
                    >封建時代</nuxt-link
                  >，所以他們的部隊很弱，很容易被招降，成為玩家的戰力。
                </li>
                <li>
                  在阻止數十次襲擊並建立經濟之後，是時候反擊了。阿比亞泰格拉索應該是第一個目標。他們位於玩家起始位置的北部/西北部，位於地圖的上角。米蘭城在該地區有很多防禦（<nuxt-link
                    to="/building/Bombard_Tower"
                    >火砲塔</nuxt-link
                  >、<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link
                  >和許多弩手）。一旦玩家摧毀了阿比亞泰格拉索敵人的城鎮中心，他們就會投降。他們也有<nuxt-link
                    to="/elements/Relic"
                    >遺跡</nuxt-link
                  >，最好拿走。
                </li>
                <li>
                  一旦阿比亞泰格拉索被摧毀，玩家將會收到一些關於切斷米蘭道路的消息。摧毀阿比亞泰格拉索是三個任務的其中一個。
                </li>
                <li>
                  在摧毀阿比亞泰格拉索之後，玩家還有兩個更小的任務可以完成：在玩家起始位置的東南方有一個小基地（由箭塔和士兵守衛），裡面是貿易工廠；以及最東北部有一個小基地，裡面有三個<nuxt-link
                    to="/building/Mill"
                    >磨坊</nuxt-link
                  >（也有箭塔守衛）。玩家也可以先完成這另外兩個，因為這樣做會定期提供食物和<nuxt-link
                    to="/resource/Wood"
                    >木材</nuxt-link
                  >。
                </li>
                <li>
                  貿易工廠將會提供穩定的60木材與60食物，玩家必須在米蘭村莊的<nuxt-link
                    to="/building/Market"
                    >市集</nuxt-link
                  >旁建立一個市集（上述的那個東南方小基地）
                </li>
                <li>
                  為了確保食物的貢品，玩家必須保護上述東北方小基地內的三座磨坊，這些磨坊在箭塔被毀後會轉換為玩家一方。最好建立<nuxt-link
                    to="/building/Gate"
                    >城門</nuxt-link
                  >與塔來防禦那裏。
                </li>
                <li>
                  玩家必須決定是先攻擊東北方和東南方的灰色基地來獲得穩定收入，還是先開始對阿比亞泰格拉索的攻擊。無論哪種方式，阿比亞泰格拉索是一個更加麻煩的目標，灰色的基地永遠不會攻擊你。
                </li>
                <li>
                  玩家在完成三個目標的過程中，應該繼續構建防禦工事。一旦剩餘的兩個目標被完成，從而切斷米蘭城的交通，一些重要的對話隨之而來。威尼斯人將會背叛玩家，並將部隊派往玩家的基地。玩家的主力應該立即返回，確保城堡和箭塔有弓箭手或村民駐紮，以阻止威尼斯人的強大來襲。
                </li>
                <li>
                  大約10分鐘的戰鬥後，米蘭城將主動要求休戰，並要求<nuxt-link
                    to="/batt/Sforzaa"
                    >斯福爾札</nuxt-link
                  >來到他們的城堡。然後戰役就會勝利。
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                米蘭新公爵
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Sforza_5.jpg" alt="" />
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
              <nuxt-link to="/batt/Sforzaa">斯福爾札</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Italians">義大利人</nuxt-link>
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第四章之五
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Ambrosian_Republic"
                >安布羅共和國</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">N/A</td>
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
