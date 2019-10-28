<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>狼山江(919)</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>狼山江</b>為是《<nuxt-link to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >》中<nuxt-link to="/batt/Battles_of_the_Forgotten"
              >失落的帝國的戰役</nuxt-link
            >的其中一個<nuxt-link to="/batt">戰役</nuxt-link
            >。時間為中國的五代十國時期，玩家扮演的吳越國必須保護建造神殿奇觀的建築材料。
          </p>
          <p>
            直到他們到達寺廟聖地的施工建築陣地，在這之前貨物不能被敵軍擊沉，不然此關宣告失敗。
          </p>
          <p>
            每批貨物在遊戲開始後每25分鐘到達不同的地方，在這關卡中，玩家自身，盟友和敵人都是<nuxt-link
              to="/civs/Chinese"
              >中國人</nuxt-link
            >。
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
                <nuxt-link to="/techs/age/Feudal_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                400<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／200<nuxt-link to="/resource/Food">食物</nuxt-link
                >／300<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／0<nuxt-link to="/resource/Stone">石礦</nuxt-link>
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
                <div class="p1"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Turks">中國人</nuxt-link>（藍色）
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p7"></div>
                玩家7
              </td>
              <td class="tc6">吳越人（灰色）中國</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">中立</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家4
              </td>
              <td class="tc6">寺廟聖地（黃色）中國</td>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家5
              </td>
              <td class="tc6">佃農（水藍色）中國</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr></tr>
            <tr>
              <td class="tc6" width="12%">
                <div class="p8"></div>
                玩家2
              </td>
              <td class="tc6" width="38%">彭彥章（橘色）中國</td>
              <td class="tc6" width="12%">
                <div class="p3"></div>
                玩家3
              </td>
              <td class="tc6" width="38%">
                河盜（綠色）中國
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p6"></div>
                玩家6
              </td>
              <td class="tc6">吳國陸軍（紫色）中國</td>
              <td class="tc6">
                <div class="p2"></div>
                玩家8
              </td>
              <td class="tc6">
                吳國水軍（紅色）中國
              </td>
            </tr>
          </table>

          <h3>開場</h3>
          <p>
            5位<nuxt-link to="/units/Chu_Ko_Nu">中國連弩兵</nuxt-link
            >，5位<nuxt-link to="/units/Villager">村民</nuxt-link
            >，2艘<nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
            >，6艘<nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link
            >，4艘<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link
            >，3艘<nuxt-link to="/units/Demolition_Ship">神風船</nuxt-link>。
          </p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>在第一批船運過來之前你有25分鐘的時間清除封鎖河道的敵軍。</li>
              <li>為第一批船運保駕護航並送到寺廟聖地。</li>
              <li>為其餘的四批船運護航，它們每艘出現的間隔是25分鐘。</li>
              <li>建造封神殿並守衛好它。</li>
            </ol>
          </div>
        </div>
        <h2>次要任務</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ol>
            <li>找來能點燃火油的引信。</li>
            <li>找一位工匠來鑄造噴火筒。</li>
            <li>找造船匠。</li>
            <li>給河盜2000金子來收買他們。</li>
            <li>只要貿易工廠（水藍色）還在，他們就能給你建造龍舟。</li>
            <li>
              只要農民的市場還在，他們就會給你提供<nuxt-link to="/resource/Food"
                >食物</nuxt-link
              >。
            </li>
          </ol>
        </div>

        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              偵查你起始點的環境，可能會找到一些願意加入你的義士俠客。
            </li>
            <li>
              為了保護河運，你既可以摧毀敵人封鎖河道的塔和<nuxt-link
                to="/units/Naval_Vessels"
                >船隻</nuxt-link
              >，也可以用你自己的船去吸引敵人火力，趁機迅速把貨運搶送過去。
            </li>
            <li>
              船運從陸地對岸過來而且會在不同的地點出現。你最好把敵人的<nuxt-link
                to="/units/Naval_Vessels"
                >戰船</nuxt-link
              >都消滅，因為一旦有貨運船被擊沉你就失敗了。
            </li>
            <li>
              你可以考慮拉攏河盜，但是他們的胃口不小。
            </li>
            <li>
              到處偵察一下。點擊灰色的單位可以出現各種支線任務，完成那些任務可以得到額外的獎勵。
            </li>
            <li>
              有傳言說這附近有個道士正在煉製一種秘密武器，如果你能得到他的協助的話或許這場仗會更有把握。
            </li>
          </ul>

          <h2>斥候</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                吳國水軍（紅色）佔據河灘，封鎖了所有的河上要道。
              </li>
              <li>
                吳國陸軍（紫色）有強大的陸上陣地，並有大批軍隊在操練待命。
              </li>
              <li>
                河盜（綠色）的水鬼大營位於東北，他們還有小批人馬在陸地上蹲守著各種重要的資源。
              </li>
              <li>
                位於東南部的寺廟聖地（黃色）願意助你一臂之力，但是他們自己沒有軍隊，也需要你的幫助。
              </li>
              <li>
                在這片地區有幾座佃農（藍綠色）的村莊，若你能保他們太平的話他們也可以為你出力。
              </li>
            </ul>
            <h3>此關任務概念解說</h3>
            <div class="hrn1"></div>
            <ul>
              <li>
                玩家從地圖西邊的一群<nuxt-link to="/units/Naval_Vessels"
                  >海軍</nuxt-link
                >部隊開始，有25分鐘的時間來清理第一批路上敵軍與阻礙（貨運船為一個同盟運輸船，第一批貨從與玩家相同的起點開始，將前往寺廟聖地）。
              </li>
              <li>
                為此，玩家必須在他們面前的狹窄水道中摧毀敵軍船隻和<nuxt-link
                  to="/building/Watch_Tower"
                  >箭塔</nuxt-link
                >，玩家可在起始點稍微東邊一點可遇上<nuxt-link
                  to="/units/Trebuchet"
                  >巨型投石機</nuxt-link
                >與2位精銳中國連弩兵，有了<nuxt-link to="/units/Trebuchet"
                  >投石機</nuxt-link
                >將會遇上箭塔時較輕鬆些，還有一些敵軍海軍在地圖中間的開闊水域中。
              </li>
              <li>
                玩家前進河道右側地圖的佃農村落一旦玩家發現就會切換為玩家所有，之後當第一艘運輸船抵達時，此時所有玩家在該村落的<nuxt-link
                  to="/building"
                  >建築物</nuxt-link
                >和單位將被轉換回為佃農，即便玩家失去了一切，先前採集的資源仍然不會消失。
              </li>
              <li>
                但在此同時，寺廟聖地的陣地將轉換為玩家所用，因此玩家將擁有一個更完善的基地基地有足夠的房舍支援100人口單位，而這關劇情的最大人口上限是150。
              </li>
              <li>
                在那之後，每25分鐘，每一艘盟軍運輸船將陸續抵達寺廟聖地的奇觀施工地點。第二艘運輸船將出現在地圖東北邊緣的海盜定居點後方，第三艘位於吳國水軍基地半島後面的西北邊，第四艘是玩家的起始點，第五艘是吳國陸軍<nuxt-link
                  to="/building/Gate"
                  >城門</nuxt-link
                >前的西南邊緣，那裡是一條帶有“海堤大橋”的小河。如果任何這些材料運輸船被擊沉，玩家將會任務失敗。當所有材料船運都到了，玩家必須派多位村民建立一個聖殿奇觀。完成後，即可贏得此關勝利。
              </li>
            </ul>
            <h3>攻略</h3>
            <div class="hrn1"></div>
            <ul>
              <li>
                首先，在玩家面前的水路不遠處就能夠碰上吳國的一些<nuxt-link
                  to="/units/Naval_Vessels"
                  >船艦</nuxt-link
                >，利用火戰船上前衝鋒，弩砲戰船掩護擊破敵軍，直到玩家進入第一座敵軍箭塔的射程前先到河道右側地圖的佃農村落利用村民補充資源。
              </li>
              <li>
                同時將運輸船與村民一起向河道起始點右測和向下探索，玩家可發現一些單位，2位精銳中國連弩兵與一台巨型投石機。卸下村民，在那塊小土地上收集<nuxt-link
                  to="/resource/Gold"
                  >黃金</nuxt-link
                >和<nuxt-link to="/resource/Wood">木材</nuxt-link
                >。帶上巨型投石機與其他中國連弩兵掩護前進並帶到前方水道的小沼澤地點。這樣，玩家可以輕鬆夷平箭塔。
              </li>
              <li>
                將第二艘運輸船的單位卸下到右側並帶到現在屬於玩家的佃農村落。開始與那裡的村民一起收集食物，並使用八個精銳中國連弩兵殺死北方的<nuxt-link
                  to="/units/Infantry_Units"
                  >步兵</nuxt-link
                >部隊。
              </li>
              <li>
                同時，建造一個<nuxt-link to="/building/Monastery"
                  >修道院</nuxt-link
                >訓練3-4位<nuxt-link to="/units/Monk">僧侶</nuxt-link
                >和蓋一座<nuxt-link to="/building/Market">市集</nuxt-link
                >，出售與轉賣不同資源來利用修補船隻節省兵力。這些策略於後面的路上都可運用。
              </li>
            </ul>
            <h3>攻略A</h3>
            <div class="hrn1"></div>
            <ul>
              <li>
                玩家必須清除水路上的任何阻礙並等待運輸船出現，然後護送運輸船，護送過程中可能會難免犧牲一些單位。
              </li>
              <li>
                玩家將擁有寺廟聖地建築群後面的基地。吳國陸軍將會從寺廟聖地後方侵犯，建立完善的防禦工事與建築配合單位防守各城門。
                (例如<nuxt-link to="/building/Castle">城堡</nuxt-link
                >駐守<nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link
                >與<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
                >，騎兵可於遇上對方<nuxt-link to="/units/Siege_Weapons"
                  >攻城武器</nuxt-link
                >協同出城防禦)
              </li>
              <li>
                彭彥章會生產許多船艦，但不會建造任何新建築物，所以集中火力在他們的<nuxt-link
                  to="/building/Dock"
                  >碼頭</nuxt-link
                >上讓戰況較容易掌控（火炮戰船在此關真的很有幫助）。
              </li>
              <li>
                當機會來臨時，支付2000黃金的代價給河盜組成同盟，有了他們的支援，會更容易就摧毀吳國其他的港口基地。
              </li>
            </ul>
            <h3>攻略B</h3>
            <div class="hrn1"></div>
            <ul>
              <li>
                在確認下一批運輸船到達之前，將所有船舶置於旗幟前水道中的緊湊排列。
              </li>
              <li>
                將河道完全阻擋，讓運輸船不能通過。通過仔細的排位，讓運輸船可以被困住，因為它只能使用幾艘船完全無法移動，並且仍然能夠通過玩家自己的運輸船繞過那個位置。
              </li>
              <li>
                玩家應該保持遊戲中船通過前後的安全，因為玩家如果讓運輸船通過，船就不能被抓住了。
              </li>
              <li>
                例如可排4艘以上的船隻可以阻擋河流的狹窄區域（位於玩家起始點的河道前4個吳國水軍的箭塔之間）。只要運輸船停在那裡，玩家就可以隨心所欲地發展。
              </li>
              <li>
                彭彥章將會派遣一些需要一點注意力的零星船艦攻勢，不然一般敵人此時將不會有其他動作。
              </li>
              <li>
                這意味著玩家可以在不同的水路建造碼頭，並與擁有大量<nuxt-link
                  to="/units/Trade_Cog"
                  >貿易商旅</nuxt-link
                >的寺廟聖地建立一條貿易路線並將大量資金投入到<nuxt-link
                  to="/techs"
                  >科技</nuxt-link
                >研發。
              </li>
              <li>
                例如，更容易等到玩家能夠負擔得起<nuxt-link to="/techs/Spies"
                  >間諜</nuxt-link
                >叛國者科技，而不是艱難地探索地圖。所以這部分為較輕鬆類型的遊戲玩家的策略。
              </li>
              <li>
                在完全消滅每一個敵人之前，沒有必要讓被困的運輸船前的船陣鬆開。
              </li>
              <li>
                殲滅所有敵軍後然後讓運輸船通過，將遊戲時間速度設置為較快速(EX:8倍)並等待所有運輸船隻到達奇觀指地點，在寺廟上放置多位村民來建造奇觀並且等待關卡結束。
              </li>
            </ul>
            <h3>龍舟任務</h3>
            <div class="hrn1"></div>
            <ul>
              <li>
                在玩家起始點的水道口，可以看到南岸一個灰色的冒煙區。這其實本關遊戲中沒有實際意義（也不必在那裡做任何事情），只是為了這個龍舟任務的故事劇情的前導，說玩家在這裡找到了可燃的焦油。
              </li>
              <li>
                現在玩家需要火藥點燃它，找一個工匠建造一個火焰噴射器和一個碼頭來建造這特殊的龍舟船隻。
              </li>
              <li>
                找到地圖上寺廟聖地城門南邊的僧侶進行第一項任務，工匠在東邊的佃農村落北方。
                （佃農村落將定期生產500食物，只要他們的市場沒有被摧毀），造船廠就在地圖最北端。只要找齊前面的所有條件這個港口就會生產龍舟（一種特殊的火戰船，具有高防護裝甲，對建築物攻擊有額外傷害）只要他們的碼頭沒有被摧毀，它就會慢慢生產支援玩家。
              </li>
              <li>
                這主要是出於故事劇情目的，因為這是歷史上第一次使用黑色火藥（古希臘人在船舶戰鬥中使用類似的戰術，但不使用黑色火藥）。
              </li>
              <li>
                但是對於整個遊戲玩法來說，這個龍舟任務可以忽略，因為玩家必須在地圖的各個角落尋找他們(這意味著通常玩家已經發展至後期了）
              </li>
              <li>
                但此任務支援的龍舟在海上還是有一定的支援性，這就取決於玩家的選擇與活用。
              </li>
            </ul>
            <h3>遊戲內細節</h3>
            <div class="hrn1"></div>
            <ul>
              <li>
                這是目前世紀帝國2全系列中唯一一場玩家扮演中國<nuxt-link
                  to="/civs"
                  >文明</nuxt-link
                >的官方戰役關卡。
              </li>
              <li>
                在其他官方戰役中國文明都是玩家的敵人或盟友，例如:<nuxt-link
                  to="/batt/Genghis_Khana"
                  >成吉思汗(戰役)</nuxt-link
                >的<nuxt-link to="/batt/Into_China">進入中國</nuxt-link
                >關卡，<nuxt-link to="/civs/Koreans">韓國</nuxt-link
                >戰役<nuxt-link to="/batt/Noryang_Point_1598">洛陽點</nuxt-link
                >(露梁海戰)的鄧子龍將軍，<nuxt-link to="/civs/Vietnamese"
                  >越南</nuxt-link
                ><nuxt-link to="/batt/Le_Loi">黎利戰役</nuxt-link>的大明勢力。
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">狼山江(919)</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/LA3.jpg" width="100%" alt="" />
              </div>
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
              <nuxt-link to="/batt/Battles_of_the_Forgotten"
                >失落的帝國的戰役</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Persians">中國</nuxt-link>
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第七章之五
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Honfoglalas_895">征服家園(895)</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Kaesong_936">開城(936)</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由賜齡、裕暉協助編輯。</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的此關戰役其他資訊
            <div style="margin-left: 10px;">
              <em
                ><strong
                  ><a
                    href="https://en.wikipedia.org/wiki/Battle_of_Langshan_Jiang"
                    target="_blank"
                    >維基百科上狼山江之戰(英文)</a
                  ></strong
                ></em
              >、<em
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E9%92%B1%E9%95%A0"
                    target="_blank"
                    >錢鏐</a
                  ></strong
                ></em
              >、<em
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/zh-tw/%E5%BD%AD%E5%BD%A6%E7%AB%A0"
                    target="_blank"
                    >彭彥章</a
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
