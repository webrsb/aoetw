<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>始兮終兮</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>始兮終兮</b>是《<nuxt-link to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >》－<nuxt-link to="/batt/Sforzaa">斯福爾札戰役</nuxt-link
            >的第一關。
          </p>
          <p>
            這場<nuxt-link to="/batt">戰役</nuxt-link>描繪了<nuxt-link
              to="/units/hero/Francesco_Sforza"
              >法蘭切斯科·斯福爾札</nuxt-link
            >親眼看見了他父親：穆齊奧-<nuxt-link to="/batt/Sforzaa"
              >斯福爾札</nuxt-link
            >在佩斯卡拉河中被淹死。玩家作為法蘭切斯科·斯福爾札，必須讓所有以前在穆齊奧部隊中服役的五個隊長在法蘭切斯科的旗幟下重新團結。
          </p>
          <p>
            戰役開始時，斯福爾札父子領導一小隊<nuxt-link to="/units/Condottiero"
              >傭兵</nuxt-link
            >，當他們到達河流時，父親穆齊奧堅持要渡過河流，儘管他的兒子法蘭切斯科警告他會有洪水。兒子無助地目睹他的父親被水流沖走，並拒絕接受他父親已經去世。約翰尼斯將軍會來表示哀悼，但是他聲明：以前服務於穆齊奧-斯福爾札的將軍們沒有義務自動向兒子服務。因此，法蘭切斯科·斯福爾札在攻擊突襲者之前，正在努力說服包括約翰尼斯在內的五名將軍。這種情況有點類似<nuxt-link
              to="/batt/Genghis_Khana"
              >成吉思汗(戰役)</nuxt-link
            >的第一關：<nuxt-link to="/batt/Crucible">統一各部</nuxt-link>。
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
              <td class="tc2">無</td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">0</td>
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
                <nuxt-link to="/civs/Italians">義大利人</nuxt-link>（藍色）
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
              <td class="tc6" width="38%">村莊（紅色）義大利</td>
              <td class="tc6" width="12%">
                <div class="p4"></div>
                玩家4
              </td>
              <td class="tc6" width="38%">
                約翰尼斯將軍（黃色）<nuxt-link to="/civs/Franks"
                  >法蘭克</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc6" width="12%">
                <div class="p5"></div>
                玩家5
              </td>
              <td class="tc6" width="38%">伯恩托摩將軍（水藍色）義大利</td>
              <td class="tc6" width="12%">
                <div class="p6"></div>
                玩家6
              </td>
              <td class="tc6" width="38%">路易蓋希將軍（紫色）義大利</td>
            </tr>
            <tr>
              <td class="tc6" width="12%">
                <div class="p7"></div>
                玩家7
              </td>
              <td class="tc6" width="38%">馬爾塞洛將軍（灰色）義大利</td>
              <td class="tc6" width="12%">
                <div class="p8"></div>
                玩家8
              </td>
              <td class="tc6" width="38%">吉他諾將軍（橘色）義大利</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6" width="12%">
                <div class="p3"></div>
                玩家3
              </td>
              <td class="tc6" width="38%">突襲者（綠色）法蘭克</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場單位：</dt>
            <dd>法蘭切斯科·斯福爾扎、10位義大利傭兵。</dd>
            <dt>大地之母單位：</dt>
            <dd>無</dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>說服所有將軍再次加入。</li>
              <li>殺死約翰尼斯的營地西邊的匪首然後帶回殺死他的證據。</li>
              <li>
                找一個<nuxt-link to="/units/Monk">僧侶</nuxt-link
                >然後帶他去伯恩托摩的堡壘，僧侶必須活下去。
              </li>
              <li>找到5輛廢棄的貨物車，把能用的輪子帶回給路易蓋希。</li>
              <li>給吉他諾的馬帶回乾淨的水。</li>
              <li>找到6堆乾草給馬爾塞洛的馬。</li>
              <li>
                摧毀西邊的卡馬尼奧拉<nuxt-link to="/building/Castle"
                  >城堡</nuxt-link
                >。
              </li>
            </ol>
          </div>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              你可以點擊當地人（紅色）詢問他們有關村郊的情況。有些人會給你有用的信息，然而另一些人則是胡說八道。
            </li>
            <li>
              在一些任務中，你需要保護特定的單位。你需要貨物車來裝乾草，需要僧侶來治癒傷者。如果你失去這兩樣中的任一個，你都會輸。
            </li>
            <li>
              在整個場景裡你會控制特定數量的兵種，只有完成任務之後才會得到增援。所以，合理指揮軍隊至關重要。
            </li>
            <li>
              一些請求要在另一些請求之前被完成。例如，只有在你向路易蓋希證明你的勇氣之後你才能使用他水渠裡的水。
            </li>
            <li>
              西邊的突襲者的軍事基地防禦非常之好，所以在你將所有諸侯豪傑納入麾下之前不應該去攻擊它。
            </li>
          </ul>
        </div>
        <h2>斥候</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              斯福爾扎率意大利傭兵團向西挺進攻打卡馬尼奧拉，但是他們需要設法過河。
            </li>
            <li>
              小村的<nuxt-link to="/units/Villager">村民</nuxt-link
              >（紅色）知曉附近地形，所以他們肯定能有用處。義大利傭兵在城郊安營紮寨。
            </li>
            <li>約翰尼斯將軍（黃色）已經佔據了村莊西邊的營地。</li>
            <li>伯恩托摩將軍（青綠色）棲身於沼澤以北的廢棄據點裡。</li>
            <li>路易蓋希將軍（紫色）帶著他的攻城武器駐紮在東邊的懸崖附近。</li>
            <li>馬爾塞洛將軍（灰色）佔領了村莊東邊的一座老舊的瞭望塔。</li>
            <li>吉他諾將軍和他的騎兵駐紮在沼澤南邊的一座舊穀倉裡。</li>
            <li>
              突襲者（綠色）受雇於卡馬尼奧拉，在地圖西邊的大營一擁而出，現正在劫掠村莊。他們的步兵，弓箭手和<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >是敵不過強大的意大利傭兵，但是要攻破他們的軍防基地就必須帶上攻城武器。
            </li>
          </ul>
          <h2>戰術</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>為了說服約翰尼斯將軍，玩家必須殺死他營地西邊的強盜領袖。</li>
              <li>
                為了說服瑪律賽洛將軍，玩家必須使用他借給玩家的<nuxt-link
                  to="/units/Trade_Cart"
                  >貿易車隊</nuxt-link
                >為他收集一些乾稻草。 如果貿易車隊死亡，玩家將輸掉戰役。
              </li>
              <li>
                為了說服伯恩托摩將軍，玩家必須為他的副手帶來大夫（在村莊的外面，約翰尼斯將<nuxt-link
                  to="/building/Barracks"
                  >軍營</nuxt-link
                >地附近的<nuxt-link to="/building/Monastery">修道院</nuxt-link
                >旁的一名僧侶）。大夫在完成任務後將繼續為玩家服務。如果大夫在被帶到伯恩托摩將軍的城堡前死亡，玩家將輸掉戰役。
              </li>
              <li>
                為了說服路易蓋希將軍，玩家必須派斯福爾札從破車中收集五個輪子。請注意，有些車輪已損壞。玩家必須在完成吉他諾將軍的任務之前完成這項任務。
              </li>
              <li>
                為了說服吉他諾將軍，玩家必須從路易蓋希將軍營地的水渠中取水給他們。
              </li>
              <li>
                東部有一個山洞，是能讓斯福爾扎通往東南部競技場的通道，在那裡他必須殺死一隻熊並摧毀兩塊石頭路障，才能露出一部分敵方基地。在玩家完成這些之後，出口會被標記起來。這個任務是可做可不做的。
              </li>
              <li>
                在說服五名將軍之後，玩家必須摧毀突襲者的堡壘。玩家可能需要在全面進攻之前引誘敵人離開巢穴並殺死他們。一旦玩家完成任務，每個將軍將向法蘭切斯科·斯福爾札臨終夙願效忠，並且贏得戰役的勝利。
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
                始兮終兮
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Sforza_1.jpg" alt="" />
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
            <td class="unit4">失落的帝國第四章之一</td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">N/A</td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/O_Fortuna">命運女神</nuxt-link>
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
