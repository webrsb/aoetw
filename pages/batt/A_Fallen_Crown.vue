<template>
  <div class="container">
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-12">
        <h1>摔落的皇冠</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>摔落的皇冠</strong>是《<nuxt-link to="/games/ak"
              >世紀帝國II：非洲王國</nuxt-link
            >》<nuxt-link to="/batt/Yodita">優娣忒戰役</nuxt-link
            >的第三個場景。<nuxt-link to="/batt">戰役</nuxt-link>中<nuxt-link
              to="/units/hero/Yodit"
              >優娣忒</nuxt-link
            >必須面對阿克蘇姆國王<nuxt-link to="/units/hero/Dagnajan"
              >達納罕</nuxt-link
            >及他的盟友貝根德爾王國，同時還要處理該地區的內戰，最後要阻止達納罕到達西方的路口。
          </p>
        </div>
        <h3>AI</h3>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tc4" colspan="4" style="background: #2980b9;">
              玩家本身
            </td>
          </tr>
          <tr>
            <td class="tc6" width="14%">
              <div class="p3"></div>
              玩家1
            </td>
            <td class="tc6" colspan="3">
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>（綠色）
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
            <td class="tc6">達爾金達人(橘色)衣索比亞</td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background: #999999;">中立</td>
          </tr>
          <tr>
            <td class="tc6" width="14%">
              <div class="p4"></div>
              玩家3
            </td>
            <td class="tc6">阿羅迪亞商人(黃色)衣索比亞</td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
          </tr>

          <tr>
            <td class="tc6" width="14%">
              <div class="p6"></div>
              玩家4
            </td>
            <td class="tc6">
              阿羅迪亞叛軍(紫色)<nuxt-link to="/civs/Saracens"
                >薩拉森</nuxt-link
              >
            </td>
            <td class="tc6" width="14%">
              <div class="p2"></div>
              玩家5
            </td>
            <td class="tc6">達納罕(紅色)衣索比亞</td>
          </tr>
          <tr>
            <td class="tc6" width="14%">
              <div class="p5"></div>
              玩家6
            </td>
            <td class="tc6">貝根德爾王國(青色)衣索比亞</td>
            <td class="tc6" width="14%">
              <div class="p7"></div>
              玩家7
            </td>
            <td class="tc6">東正教憎侶(灰色)衣索比亞</td>
          </tr>
        </table>

        <h3>主要任務</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>在達納罕軍隊出發之前削弱他們的力量。你還有45分。</li>
            <li>殺死達納罕。</li>
            <li>
              選擇性任務
              <ol>
                <li>
                  摧毀貝根德爾帝國的養象場(青色)，達納罕的<nuxt-link
                    to="/units/War_Elephant"
                    >戰象</nuxt-link
                  >軍隊會被移除。
                </li>
                <li>
                  摧毀東南方東正教僧侶的<nuxt-link to="/building/Wonder"
                    >世界奇觀</nuxt-link
                  >，達納罕的僧侶會被移除。
                </li>
                <li>選擇支持阿羅迪亞商人或阿羅迪亞叛軍。</li>
                <li>攻擊達納罕的六個營地以削弱他的軍隊。</li>
              </ol>
            </li>
          </ul>
        </div>
        <h3>斥候</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              你的<nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
              >回報:我們的人手和<nuxt-link to="/units/Villager">村民</nuxt-link
              >會在北邊抵達，那是一片不毛之地。這裡資源稀缺，所以我們需要調用所有可發掘的資源來獲得勝利。
            </li>
            <li>
              貝根德爾王國(青色)在東邊的一座綠穀中，他是我們敵軍的同盟。他們會拖住我們，好讓達納罕的大軍逢修整備戰。所以最好的辦法是突擊他們，他們的軍隊包括劍兵、<nuxt-link
                to="/units/Crossbowman"
                >弩兵</nuxt-link
              >和<nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link>。
            </li>
            <li>
              在我們南邊，我們發現達爾金達人(橘色)已經加固了達納罕通往他的帝國的要道。現在幫助他們保戶要道以阻止敵軍進攻是你的首要任務。
            </li>
            <li>
              阿羅迪亞帝國內有反叛軍作亂。他與我們並無關係，但是我們最好能做出選擇，是支持帝國還是反叛軍，這樣才能聯合另一方來擴展我們在此地的利益。阿羅迪亞商人(黃色)在西邊建立了一個貿易站，在更北一點阿羅迪亞叛軍(紫色)則建立了他們的<nuxt-link
                to="/building/Barracks"
                >軍營</nuxt-link
              >。
            </li>
            <li>
              達納罕(青色)是強大的阿克蘇姆帝國的國王。他在沿河有幾個前哨，在那裏他聚集軍隊攻擊達爾金達帝國。這花費了他很長一段時間準備軍隊，但是一旦他就緒了就會戰無不勝。他的軍隊裡有大象和僧侶，所以我們的擔心不是沒有理由的。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">摔落的皇冠</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Yodit_3.png" alt="" />
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
              <nuxt-link to="/games/ak">非洲王國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Yodita">優娣忒</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">玩家顏色</td>
            <td class="unit4">
              <div class="p3"></div>
              綠色
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
            <td class="unit4">非洲王國第四章之三</td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Right_Partner">最佳搭檔</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Broken_Stelae">毀壞的石碑</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡，裕暉協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>攻略</h3>
        <div class="hrn1"></div>
        <ul>
          <li>
            開場玩家有5名村民、四名<nuxt-link to="/units/Shotel_Warrior"
              >彎刀勇士</nuxt-link
            >及三名<nuxt-link to="/units/Archer">弓兵</nuxt-link
            >。直接往地圖右上走直到遇到兩名弓兵及一隻<nuxt-link
              to="/units/Pikeman"
              >重裝長槍兵</nuxt-link
            >守衛著<nuxt-link to="/elements/Relic">遺跡</nuxt-link
            >，快速解決他們後直接在此蓋<nuxt-link to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >。除了收集資源外要記得圍牆，此場景沒有<nuxt-link
              to="/building/Stone_Wall"
              >石牆</nuxt-link
            >，要善用<nuxt-link to="/building">建築物</nuxt-link>跟<nuxt-link
              to="/building/Palisade_Wall"
              >木牆</nuxt-link
            >保護自己，然而因為地形關係很多地方都不能蓋建築物，而且樹木也很分散，玩家要謹慎計畫建築位子。往右下走會碰到貝根德爾的<nuxt-link
              to="/building/Gate"
              >城門</nuxt-link
            >，貝根德爾的軍隊由弓兵及<nuxt-link to="/units/Man-at-Arms"
              >裝甲步兵</nuxt-link
            >組成，建造一支弓兵及<nuxt-link to="/units/Skirmisher"
              >矛兵</nuxt-link
            >的混合部隊能暫時擋住他們的攻擊，玩家現在要專注晉升到<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >。
          </li>
          <li>
            城堡時代後馬上升級弩兵跟兩台<nuxt-link to="/units/Mangonel"
              >投石車</nuxt-link
            >，並升級相關弓兵<nuxt-link to="/techs">科技</nuxt-link
            >，記得也蓋<nuxt-link to="/building/Monastery">修道院</nuxt-link
            >把遺跡放裡面，然後打掉最近的貝根德爾營地。在這裡蓋<nuxt-link
              to="/building/Castle"
              >城堡</nuxt-link
            >等軍事建築物以及四座<nuxt-link to="/building/Dock">碼頭</nuxt-link
            >，達納罕大軍要經過的路都有水域，所以建造<nuxt-link
              to="/units/Galleon"
              >重型弩砲戰船</nuxt-link
            >跟<nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
            >沿岸轟炸是可以的。升級到<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >並建造你的海軍。摧毀城堡跟<nuxt-link to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >之後你會發現達納罕的大軍對你的海軍將束手無策。
          </li>
          <div class="row">
            <div class="col-md-6">
              <gallery
                ><img
                  position="centered"
                  class="imgn hg"
                  width="500"
                  src="~assets/Noreth_Camp.jpg"
                  alt=""
              /></gallery>
              <em>在北邊遺跡處開始玩家的城鎮。</em>
            </div>
            <div class="col-md-6">
              <gallery
                ><img
                  position="centered"
                  class="imgn hg"
                  width="500"
                  src="~assets/Bombarding.jpg"
                  alt=""
              /></gallery>
              <p><em>轟炸達納罕大軍。</em></p>
            </div>
          </div>
          <li>
            如果剛剛的轟炸沒有殺掉達納罕，沒有關係，往西北方向來到達爾金達人的城堡，路上會遇到阿爾迪亞的叛軍，解決他們！在城堡這裡部屬多台<nuxt-link
              to="/units/Siege_Onager"
              >重型投石車</nuxt-link
            >以及許多的<nuxt-link to="/units/Arbalester">強弩兵</nuxt-link
            >，然後靜待達納罕的到來，並直接將它斬落馬下。或是玩家也可主動出擊殺死達納罕。此場景唯一目標就是殺死達納罕，不論建造甚麼部隊只要專注在騎大象的國王身上即可。
          </li>
          <li>
            阿爾羅迪亞商人及叛軍在這個場景幾乎沒有作用，幫助商人可以跟他們的<nuxt-link
              to="/building/Market"
              >市集</nuxt-link
            >貿易，幫助叛軍每付給他們300<nuxt-link to="/resource/Gold"
              >黃金</nuxt-link
            >他們便會派出1名<nuxt-link to="/units/Imperial_Camel_Rider"
              >帝王駱駝騎兵</nuxt-link
            >、2名<nuxt-link to="/units/Heavy_Camel_Rider"
              >重裝駱駝騎兵</nuxt-link
            >及3名<nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link
            >進攻達納罕的營地，兩個對玩家的利益猶如杯水車薪，可以不用理會。
          </li>
          <li>
            有時候會有bug導致達納罕的軍隊困在地圖某處動彈不得。有時達納罕也會想要"獨自走走"而離開大軍到地圖的某個角落。玩家可要費神好好找這位國王了。
          </li>
        </ul>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Die_die_die.jpg"
                alt=""
            /></gallery>
            <p><em>用禮炮(投石車)送達納罕上路!</em></p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/The_lonely_king.jpg"
                alt=""
            /></gallery>
            <p><em>在地圖邊緣耍搞自閉的國王(笑)!</em></p>
          </div>
        </div>
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
