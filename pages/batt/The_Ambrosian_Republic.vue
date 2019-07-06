<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>安布羅共和國</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>安布羅共和國</b>是<nuxt-link to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >中<nuxt-link to="/batt/Sforzaa">斯福爾札戰役</nuxt-link>的第四關。
          </p>
          <p>
            <nuxt-link to="/batt">戰役</nuxt-link>名稱來自於同名的<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >安布羅共和國，當飛利浦.瑪麗亞.維斯康提公爵死後，米蘭公國被共和國取代的故事。此戰役描繪了帕維亞的攻占，比阿琴薩的圍困和卡拉法吉歐的圍困。
          </p>
          <p>
            <nuxt-link to="/units/hero/Francesco_Sforza"
              >法蘭切斯科·斯福爾札</nuxt-link
            >現在是安布羅共和國的上尉，附近大部分的<nuxt-link
              to="/civs/Italians"
              >義大利</nuxt-link
            >城鎮都站在威尼斯人的那邊，而克雷莫納仍然忠於米蘭（共和國），在斯福爾扎為了共和國征服帕維亞之前，他們在衝突中保持中立。
          </p>
          <p>
            在斯福爾扎贏得帕維亞的效忠之後，玩家必須摧毀比阿琴薩的四座<nuxt-link
              to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >以再次征服他們。然後玩家將前往克雷莫納，準備圍攻特雷維格里奧，瓦伊拉泰和莫茲紮尼卡（全部由威尼斯控制）。
          </p>
          <p>
            之後，玩家在圍攻卡拉瓦吉歐之前必須打敗威尼斯入侵克雷莫納的<nuxt-link
              to="/units/Naval_Vessels"
              >海軍</nuxt-link
            >。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="15%">起始時代：</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源：</td>
              <td class="tc2">750黃金</td>
              <td class="tc1" width="15%">人口上限：</td>
              <td class="tc2" width="5%">70</td>
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
                <nuxt-link to="/civs/Italians">義大利人</nuxt-link>（藍色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="12%"><div class="p2">玩家2</div></td>
              <td class="tc6" width="38%">帕維亞（紅色）義大利</td>
              <td class="tc6"><div class="p4" width="12%">玩家3</div></td>
              <td class="tc6" width="38%">克雷其納城（黃色）義大利</td>
            </tr>
            <tr>
              <td class="tc6" width="12%"><div class="p8">玩家4</div></td>
              <td class="tc6" width="38%">當地人（橘色）義大利</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6" width="12%"><div class="p3">玩家5</div></td>
              <td class="tc6" width="38%">比阿琴薩城（綠色）義大利</td>
              <td class="tc6" width="12%"><div class="p5">玩家6</div></td>
              <td class="tc6" width="38%">卡拉法吉歐（水藍色）義大利</td>
            </tr>
            <tr>
              <td class="tc6" width="12%"><div class="p6">玩家7</div></td>
              <td class="tc6" width="38%">威尼斯人（紫色）義大利</td>
              <td class="tc6" width="12%"><div class="p7">玩家8</div></td>
              <td class="tc6" width="38%">反抗軍（灰色）義大利</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場單位：</dt>
            <dd>
              法蘭切斯科.斯福爾扎、12位<nuxt-link to="/units/Condottiero"
                >義大利傭兵</nuxt-link
              >、6位<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>。
            </dd>
            <dt>大地之母單位：</dt>
            <dd>24位義大利傭兵</dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>法蘭切斯科.斯福爾扎必須存活。</li>
              <li>
                帶斯福爾扎去帕維亞的<nuxt-link to="/building/Castle"
                  >城堡</nuxt-link
                >。
              </li>
              <li>圍攻比阿琴薩城，摧毀4座塔。</li>
              <li>摧毀3座威尼斯城堡：莫茲扎尼卡，瓦伊拉泰和特雷維格里奧。</li>
              <li>摧毀威尼斯海軍。</li>
              <li>摧毀卡拉法吉歐的城堡。</li>
              <li>
                帶斯福爾扎去去往佈雷西亞城（卡拉法吉歐東北方）道路上的火炬處。
              </li>
            </ol>
            <h2>次要任務</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ol>
                <li>
                  洗劫叛亂的村莊，摧毀他們的2個集市，4座<nuxt-link
                    to="/building/Mill"
                    >磨坊</nuxt-link
                  >，1個鐵匠鋪和一個<nuxt-link to="/building/Town_Center"
                    >城鎮中心</nuxt-link
                  >。
                </li>
                <li>
                  點擊帕維亞的<nuxt-link to="/units/Siege_Weapons"
                    >攻城武器</nuxt-link
                  >工廠，用200黃金買進一尊<nuxt-link to="/units/Bombard_Cannon"
                    >火砲</nuxt-link
                  >。
                </li>
                <li>點擊克雷莫納城的靶場，花50黃金買進火槍兵。</li>
                <li>
                  點擊比阿琴薩城的<nuxt-link to="/building/Stable"
                    >馬廄</nuxt-link
                  >，用100黃金購買<nuxt-link to="/units/Knight">騎士</nuxt-link
                  >。
                </li>
                <li>點擊當地人的靶場，用30黃金購買弩手。</li>
                <li>
                  點擊當地人的<nuxt-link to="/building/Barracks">軍營</nuxt-link
                  >，用40黃金購買<nuxt-link to="/units/Long_Swordsman"
                    >長劍兵</nuxt-link
                  >。
                </li>
                <li>
                  一些新的護手劍從達爾馬提亞被買走，運往瓦伊拉泰的鐵匠鋪。
                </li>
                <li>駐紮5個士兵到帕維亞城堡裡，以防帕維亞城叛亂。</li>
                <li>莫茲扎尼卡的鐵匠鋪裡有新的圓盾。</li>
              </ol>
            </div>
          </div>
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                保護好你的義大利傭兵，你不能再繼續購買或者招募他們。然而，如果你證明自己是個明主，其他義大利傭兵可能會投奔你。
              </li>
              <li>
                明智的使用你的火砲，即使當比阿琴薩城淪陷後你也需要用到他們。
              </li>
              <li>
                打敗威尼斯艦隊唯一的方法就是用你的火砲炮擊他們或者用炮兵守住淺灘處。利用岸邊的山丘來取得有利位置。
              </li>
              <li>
                你的軍隊得到的所有獎賞都只會影響最開始的義大利<nuxt-link
                  to="/units/Condottiero"
                  >僱傭兵</nuxt-link
                >。
              </li>
              <li>你只限於城堡時代。</li>
            </ul>
          </div>
          <h2>斥候</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                法蘭切斯科.斯福爾扎的意大利僱傭兵駐紮在西北邊，他們收到命令要征服加入威尼斯的叛軍基地。
              </li>
              <li>
                帕維亞（紅色）是沿路上的第一個勢力他們對你保持中立，但可以被和平招安。
              </li>
              <li>
                克雷莫納城（黃色）在南邊且是你唯一的堅定不移的盟友。你可以從那裡購買意大利傭兵但也必須保護他們不受威尼斯的攻擊。
              </li>
              <li>當地人（橘色）雖然友好但也有敵對的反叛軍（灰色）。</li>
              <li>
                比阿琴薩城（綠色）位於帕維亞的東南方且對你敵對，但他只有一小支守備軍。一旦防禦被攻破，他很容易就淪陷了。
              </li>
              <li>
                卡拉法吉歐（青綠色）位於北方，擁有一支強大的守備軍，而且可能有威尼斯軍隊的直接支持。
              </li>
              <li>
                東邊的威尼斯（紫色）城堡有中等規模的守備軍，流言說他們貯藏了很多武器和盔甲。
              </li>
            </ul>
            <h2>戰術</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  開始時，法蘭切斯科·斯福爾札在西部帶領傭兵和火槍兵，<nuxt-link
                    to="/batt/Sforzaa"
                    >斯福爾札</nuxt-link
                  >必須前往帕維亞城堡遊說他們效忠。然後，玩家將控制南門的火砲，他們將開始轟炸比阿琴薩。玩家要通過摧毀4個比阿琴薩的<nuxt-link
                    to="/building/Watch_Tower"
                    >瞭望箭塔</nuxt-link
                  >來重新征服他們。
                </li>
                <li>
                  在整個遊戲過程中，玩家必須隨時駐守五個單位在帕維亞的城堡中，以維持他們的忠誠度，並使用他們的<nuxt-link
                    to="/units//building/Siege_Workshop"
                    >攻城器製造所</nuxt-link
                  >，點擊該<nuxt-link to="/building">建築</nuxt-link
                  >將花費200黃金產生一個火砲。否則，帕維亞將反抗玩家。
                </li>
                <li>
                  一旦玩家重新征服了比阿琴薩，玩家可以使用進入馬廄（有標記），點擊該建築可以消耗100黃金產生一個騎士。此時，玩家將準備圍剿威尼斯控制的特雷維格里奧，瓦伊拉泰和莫茲紮尼卡，以摧毀他們的城堡。另外，玩家可以選擇摧毀他們的鐵匠鋪以獲得一些鐵匠鋪技術。
                </li>
                <li>
                  然後，玩家將訪問克雷莫納，以使用<nuxt-link
                    to="/building/Archery_Range"
                    >射箭場</nuxt-link
                  >，點擊該建築將花費50黃金產生一個火槍兵。
                </li>
                <li>
                  此時，玩家還可以使用他們的軍營和射箭場，點擊兩個建築將分別產生長劍兵（每人40黃金）和<nuxt-link
                    to="/units/Genoese_Crossbowman"
                    >熱那亞弩手</nuxt-link
                  >（每人30黃金）。
                </li>
                <li>
                  在三座威尼斯城堡全部被毀後，威尼斯海軍上將安德里亞-奎裡尼將帶來一隊<nuxt-link
                    to="/units/War_Galley"
                    >弩砲戰船</nuxt-link
                  >和<nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
                  >來圍攻克雷莫納，殲滅他們，保護克雷莫納。雖然玩家不能建立海軍，但可以通過駐紮熱那亞弩手在克雷莫納的箭塔輕鬆防守。
                </li>
                <li>
                  擊敗威尼斯海軍後，玩家要摧毀卡拉法吉歐的城堡。他們的防守非常好，在這次戰役中是最強大的敵人。一旦玩家進入該城市，將會有來自城市東北部的威尼斯救援隊伍，包括<nuxt-link
                    to="/units/Champion"
                    >劍兵勇士</nuxt-link
                  >、傭兵和火槍兵。
                </li>
                <li>
                  當卡拉法吉歐城堡被摧毀時，他們會投降，並且斯福爾札必須到卡拉法吉歐東北部的火炬手那裏以前往布雷西亞，才能贏得戰役。
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
                安布羅共和國
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Sforza_4.jpg" alt="" />
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第四章之四
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Hand_of_a_Daughter">于歸之喜</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/A_New_Duk_of_Milan">米蘭新公爵</nuxt-link>
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
