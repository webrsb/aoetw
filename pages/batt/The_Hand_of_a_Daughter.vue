<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>于歸之喜</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>于歸之喜</b>是《<nuxt-link to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >》<nuxt-link to="/batt/Sforzaa">斯福爾札戰役</nuxt-link
            >的第三關劇情關卡。
          </p>
          <p>
            在本關中，<nuxt-link to="/units/hero/Francesco_Sforza"
              >法蘭切斯科·斯福爾札</nuxt-link
            >會跟以前一樣，幫助米蘭公國對抗威尼斯，但這次同時要跟他的好對手：卡馬尼奧拉戰鬥。
          </p>
          <p>
            <nuxt-link to="/batt">戰役</nuxt-link>開始時你會有兩個<nuxt-link
              to="/techs/Spies"
              >間諜</nuxt-link
            >：格雷米奧與西蒙，他們要通過守衛，並且留下一份假的偵查報告給卡馬尼奧拉。在間諜回到斯福爾扎那裏以後，玩家要準備部隊抵禦威尼斯人的入侵，同時準備發動對卡馬尼奧拉部隊的攻擊。
          </p>
          <p>
            這次戰役中，玩家不能建立<nuxt-link to="/units/Naval_Vessels"
              >海軍</nuxt-link
            >，因此只能依靠<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
            >，<nuxt-link to="/building/Castle">城堡</nuxt-link
            >和地面部隊來防禦敵方海軍，同時防止米蘭公國的海軍被擊敗。
          </p>
          <p>
            這戰役有BUG，如果玩家在兩個間諜潛入卡馬尼奧拉基地時存檔，遊戲有時候會崩潰。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="13%">
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                2,000<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／2,000<nuxt-link to="/resource/Food">食物</nuxt-link
                >／2,000<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／300<nuxt-link to="/resource/Stone">石頭</nuxt-link>。
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">150</td>
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
                <nuxt-link to="/civs/Italians">義大利人</nuxt-link>（藍色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家2
              </td>
              <td class="tc6" width="40%">
                卡馬尼奧拉的營地（橘色）<nuxt-link to="/civs/Italians"
                  >義大利</nuxt-link
                >
              </td>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家4
              </td>
              <td class="tc6" width="40%">斯福爾扎的間諜（藍色）義大利</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家5
              </td>
              <td class="tc6" width="40%">米蘭公國（黃色）義大利</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家3
              </td>
              <td class="tc6" width="40%">
                卡馬尼奧拉的衛軍（橘色）<nuxt-link to="/civs/Spanish"
                  >西班牙</nuxt-link
                >
              </td>
              <td class="tc6" width="14%">
                <div class="p6"></div>
                玩家6
              </td>
              <td class="tc6" width="40%">
                威尼斯海軍（紫色）<nuxt-link to="/civs/Byzantines"
                  >拜占庭</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p6"></div>
                玩家7
              </td>
              <td class="tc6" width="40%">威尼斯主艦隊（紫色）義大利</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場單位：</dt>
            <dd>西蒙·格雷米奧。（HP：100、ATK：6+56、裝甲：0+2／1+2）</dd>
            <dt>大地之母單位：</dt>
            <dd>無</dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>西蒙與格雷米奧必須存活。</li>
              <li>第一部分：卡馬尼奧拉的營地。</li>
              <li>把偽造的偵察報告放在卡馬尼奧拉的營帳內。</li>
              <li>
                帶間諜們回到瀑布附近的開始地點，這樣他們能駛回斯福爾扎的軍隊。
              </li>
              <li>第二部分：威尼斯艦隊。</li>
              <li>你有20分鐘來組建你的軍隊，準備抵抗威尼斯人的進攻。</li>
              <li>摧毀7艘威尼斯人的重型戰艦。</li>
              <li>不要讓米蘭艦隊被摧毀了。</li>
              <li>第三部分：卡馬尼奧拉的復仇</li>
              <li>打敗卡馬尼奧拉的軍隊。</li>
            </ol>
          </div>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              你的兩個間諜（格雷米奧和西蒙）在下水道的排水口處。你必須沿溝渠到營地。
            </li>
            <li>
              你的兵種們在戰霧裡前行。如果他們進入敵人<nuxt-link
                to="/elements/Line_of_Sight"
                >視野</nuxt-link
              >，你很可能被守衛發現。
            </li>
            <li>
              你很難一次點擊就選中所有的兵種們，圍繞他們拖拉出一個方框一般這都管用。
            </li>
            <li>
              當一個守衛走向你，你只有5秒鐘時間殺死他否則警報會響。一旦警報響了，其他的守衛會衝向你所在的地方。
            </li>
            <li>不要走進暗處。</li>
            <li>
              <nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >可以砍到樹木，特別在適宜的區域可以清除出來建立防禦。
            </li>
            這片區域<nuxt-link to="/resource/Stone">石礦</nuxt-link
            >產量很少，你無法接近軍艦，
            <li>
              必須依賴士兵們的血肉之軀來擊退敵船。好好利用石材建築：造一座塔並駐紮5名<nuxt-link
                to="/units/Archer"
                >弓箭手</nuxt-link
              >，比造5座塔划算。
            </li>
            <li>
              <nuxt-link to="/units/Genoese_Crossbowman">熱那亞弩手</nuxt-link
              >生命力高，有防穿透攻擊的盔甲，適合對付大型戰艦，而且省下一些其它防禦工事來建造城堡也是值得的。
            </li>
            <li>
              打漁的回報可以很高，但你需要用陸軍來保護你的<nuxt-link
                to="/units/Naval_Vessels"
                >船隻</nuxt-link
              >不受威尼斯巡邏艦的威脅。
            </li>
          </ul>
        </div>
        <h2>斥候</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              你開始有兩個間諜（藍色），需要滲透他們進入卡馬尼奧拉的<nuxt-link
                to="/building/Barracks"
                >軍營</nuxt-link
              >（橘色）。避開巡邏兵守衛。
            </li>
            <li>威尼斯艦隊（紫色）在這片區域內，戰鬥一觸即發。</li>
          </ul>
        </div>
        <h2>戰術</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              開始時，玩家有兩個間諜，格雷米奧與西蒙，他們位於瀑布之上，他們的任務是將假偵察報告送到卡馬尼奧拉的營地，以誤導卡馬尼奧拉。他們將不得不沿著骯髒，污染的河流走進軍營。
            </li>
            <li>
              他們兩個都必須生還，雖然他們有很強的<nuxt-link
                to="/elements/Attack"
                >攻擊力</nuxt-link
              >，但他們的視野很小。當他們遇到卡馬尼奧拉的衛軍時，必須在5秒內殺死他們，否則會發出警報，附近的所有卡馬尼奧拉士兵都會衝向兩名入侵者，玩家不可能一次殺死所有敵人。
            </li>
            <li>
              有一些<nuxt-link to="/units/Trebuchet">投石機</nuxt-link
              >面向一座城堡（兩個都屬於“卡馬尼奧拉的營地”），玩家可以點擊<nuxt-link
                to="/building/Outpost"
                >哨站</nuxt-link
              >用投石機摧毀城堡，此時投石機將由“<nuxt-link to="/batt/Sforzaa"
                >斯福爾札</nuxt-link
              >的間諜”接管。有幾個米蘭<nuxt-link to="/building/Mill"
                >磨坊</nuxt-link
              >，點擊哨站會破壞磨坊。再往西，有一個擠滿投石機的地方，
            </li>
            <li>
              點擊哨站來摧毀他們。在北部，有一排水管，點擊哨站將破壞水管的一塊。
            </li>
            <li>
              有一個洞穴，如果兩個間諜進入，他們會到達地圖的西邊，那裡有許多牛和羊，靠近每一群都會把牠們全部殺死，並從大地之母那裡得到500食物。（但這樣做不值得，因為最好讓<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >晚些時候宰殺牠們並收集更多的食物）。洞穴南部是一座小教堂，可以治療間諜的傷口（回復<nuxt-link
                to="/elements/Hit_points"
                >生命值</nuxt-link
              >）。
            </li>
            <li>
              當私人帳篷（一個帳篷）被揭露時，玩家不應該走最短的路線到達那裡，因為那會驚動卡馬尼奧拉的衛隊。相反，玩家應該採取後方的路線潛入，路上會有木<nuxt-link
                to="/building/Gate"
                >城門</nuxt-link
              >擋著。玩家應該摧毀木城門以方便等一下入侵。一旦玩家到達帳篷，點擊它進入地圖的東北側。間諜會在離開之前留下假報告（通過點擊間諜）。然後這兩名間諜必須安全離開營地並返回他們一開始在的瀑布。
            </li>
            <li>
              這兩名間諜將返回斯福爾扎在西南部的營地進行報告，並且玩家要開始建立基地並生產部隊以防禦威尼斯人。玩家必須摧毀至少七艘威尼斯的<nuxt-link
                to="/units/War_Galley"
                >弩砲戰船</nuxt-link
              >，同時要保護西部米蘭的海軍（弩砲戰船）不被擊潰。由於玩家在這此戰役中無法建立海軍，所以對付敵方海軍的唯一方法就是建造箭塔，城堡或者使用熱那亞弩手等<nuxt-link
                to="/units/Archer_Units"
                >遠程單位</nuxt-link
              >。
            </li>
            <li>
              一旦威尼斯<nuxt-link to="/units/Naval_Vessels">戰船</nuxt-link
              >被摧毀，玩家必須準備面對卡馬尼奧拉並擊敗他的軍隊。此時，玩家基地附近的米蘭<nuxt-link
                to="/building/Dock"
                >碼頭</nuxt-link
              >將由“卡馬尼奧拉的衛軍”接管。
            </li>
            <li>
              雖然黃金和石頭在周圍環境相當有限，但玩家可以在東面再發現另外三座金礦，由威尼斯箭塔守衛。通過摧毀箭塔並殺死所有周圍的士兵，玩家可以在那裡安全地開採黃金。地圖東部有許多黃金和石頭。除此之外，玩家可以與南部的米蘭<nuxt-link
                to="/building/Market"
                >市集</nuxt-link
              >進行交易。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                于歸之喜
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Sforza_3.jpg" alt="" />
              </div>
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第四章之三
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/O_Fortuna">命運女神</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Ambrosian_Republic"
                >安布羅共和國</nuxt-link
              >
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、Dennis協助編輯。</div>
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
