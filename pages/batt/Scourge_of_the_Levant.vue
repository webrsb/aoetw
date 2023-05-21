<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>黎凡特的災禍</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>黎凡特的災禍</b>是<nuxt-link to="/batt/Tamerlane"
              >帖木兒戰役</nuxt-link
            >的第五關。德里之戰後，<nuxt-link to="/units/hero/Tamerlane"
              >帖木兒</nuxt-link
            >的軍隊轉向黎凡特地區，呼應土庫曼族的請求抵禦顎圖曼<nuxt-link
              to="/civs/Turks"
              >土耳其</nuxt-link
            >帝國，並洗劫黎凡特地區的所有城市。
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
                3000<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >／2000<nuxt-link to="/resource/Food">食物</nuxt-link
                >／1000<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／500<nuxt-link to="/resource/Stone">石料</nuxt-link>
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
                <div class="p6"></div>
                玩家1
              </td>
              <td class="tc6" colspan="6">
                <nuxt-link to="/civs/Tatars">韃靼人</nuxt-link>（紫色)
              </td>
            </tr>
            <tr>
              <td col class="tc4" colspan="4" style="background:#ea6153;">
                敵對
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家2
              </td>
              <td class="tc6">
                奇里乞亞亞美尼亞（藍色）<nuxt-link to="/civs/Byzantines"
                  >拜占庭</nuxt-link
                >
              </td>
              <td class="tc6" width="14%">
                <div class="p2"></div>
                玩家3
              </td>
              <td colspan="3" class="tc6">
                喬治亞（紅色）<nuxt-link to="/civs/Persians">波斯</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家4
              </td>
              <td class="tc6">
                阿勒波（黃色）<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>
              </td>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家5
              </td>
              <td colspan="3" class="tc6">大馬士革（青色）薩拉森</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家6
              </td>
              <td class="tc6">巴格達（橙色）薩拉森</td>
              <td class="tc6" width="14%">
                <div class="p3"></div>
                玩家7
              </td>
              <td colspan="3" class="tc6">馬木路克（綠色）薩拉森</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              <nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >x10、<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >x10、<nuxt-link to="/units/Keshik">怯薛</nuxt-link
              >x10、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
              >x10、<nuxt-link to="/units/Monk">僧侶</nuxt-link>x4、<nuxt-link
                to="/units/Capped_Ram"
                >裝甲衝撞車</nuxt-link
              >x2、<nuxt-link to="/units/Onager">中型投石車</nuxt-link
              >x2、<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>x2
            </dd>
          </dl>
          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                用劫掠、收取貢品或其他方法獲得10000<nuxt-link
                  to="/resource/Gold"
                  >黃金</nuxt-link
                >。
              </li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                帖木兒的勢力人口上限為200。
              </li>
              <li>
                本劇本開始時，您沒有任何<nuxt-link to="/units/Villager"
                  >村民</nuxt-link
                >。四處偵查，尋找願意加入您的本地人，或是利用<nuxt-link
                  to="/units/Monk"
                  >僧侶</nuxt-link
                ><nuxt-link to="/elements/Conversion">招降</nuxt-link
                >敵方的<nuxt-link to="/units/Villager">村民</nuxt-link>。
              </li>
              <li>趁著許多對手依然弱小且毫無準備時，盡早發動攻擊。</li>
              <li>
                地圖上只有少量礦點。您可以透過搶劫貿易站、掃蕩敵人城鎮或收集<nuxt-link
                  to="/Relic"
                  >聖物</nuxt-link
                >獲得更多黃金。
              </li>
              <li>
                敵人的黃金收入絕大部份來自貿易。您可以斷絕他們的商道，甚至使其完全關閉，效果更好。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                帖木兒的軍隊(1，紫色)在地圖北部黑海附近紮營。本地漁民在短期內會為軍隊提供口糧，但必須盡早擴張。
              </li>
              <li>
                正東南方是光榮不再的喬治亞(3，紅色)。他們的軍隊裝備破舊，不是帖木兒大軍的對手。
              </li>
              <li>
                地圖東邊是巴格達城(6，橙色)的領地，這座處於駱駝兵和<nuxt-link
                  to="/units/Crossbowman"
                  >弩兵</nuxt-link
                >保護下的城市非常富有。
              </li>
              <li>
                西端是奇里乞亞亞美尼亞(2，藍色)的地盤。他們的軍隊包含劍兵和<nuxt-link
                  to="/units/Light_Cavalry"
                  >輕騎兵</nuxt-link
                >，以<nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link
                >為核心。
              </li>
              <li>
                奇里乞亞亞美尼亞東邊是阿勒坡城(4，黃色)。阿勒坡的軍隊由<nuxt-link
                  to="/armor/Armor_Class_Spearman"
                  >長槍兵</nuxt-link
                >所組成，在帖木兒面前不值一提。
              </li>
              <li>
                大馬士革(5，青色)位於西南方。他們的駱駝兵和<nuxt-link
                  to="/units/Cavalry_Archer"
                  >馬弓騎兵</nuxt-link
                >在初期或許能構成一定威脅，但他們完全離不開貿易。
              </li>
              <li>
                馬木路克蘇丹國(7，綠色)是您最危險的敵人。他們的軍事基地是大馬士革南側的屏障和補給點，會用<nuxt-link
                  to="/units/Mameluke"
                  >阿拉伯奴隸兵</nuxt-link
                >，輕騎兵和<nuxt-link to="/units/Siege_Onager"
                  >重型投石車</nuxt-link
                >來迎擊帖木兒的軍隊。
              </li>
              <li>本地或許有一些居民願意加入您，前提是您找得到他們。</li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              本關類似<nuxt-link to="/batt/Attila_the_Huna">阿提拉</nuxt-link
              >的第三關「君士坦丁堡的城牆」，目標是收集10000的黃金，破壞重要<nuxt-link to="/building">建築</nuxt-link
              >以及毀滅勢力都能得到<nuxt-link to="/resource/Gold"
                >黃金</nuxt-link
              >。
            </li>
            <li>
              開場全軍南下先把喬治亞的基地破壞怠盡，然後往湖的南邊可以找到自己的基地。湖裡有個<nuxt-link
                to="/Relic"
                >遺跡</nuxt-link
              >，派一支<nuxt-link to="/units/Monk">僧侶</nuxt-link>搭<nuxt-link
                to="/units/Transport_Ship"
                >運輸船</nuxt-link
              >將之供奉在<nuxt-link to="/building/Monastery">修道院</nuxt-link
              >裡面。之後就是開始發展並圍一下基地，然後在西側淺灘處和東南方樹林那邊蓋<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >禦敵，可以考慮用剛剛掠奪的黃金買石頭（尤其困難難度最好一開始就買石頭來蓋，並且生出一些<nuxt-link
                to="/units/Halberdier"
                >戟兵</nuxt-link
              >來幫忙抵禦敵人的駱駝部隊），如果可能的話就塞幾隻<nuxt-link
                to="/units/Archer"
                >弓兵</nuxt-link
              >進去。在穩住基地的同時，可以派軍隊四處掠奪。地圖的最下方還可以找到4位村民和一個礦點以及<nuxt-link to="/Relic">遺跡</nuxt-link
              >，可利用這些村民為我們採礦，但是要派兵保護他們。
            </li>
            <li>
              本關達成目標的方式很多，如果想省黃金好提早完成任務，可以直接用戟兵、<nuxt-link
                to="/units/Elite_Skirmisher"
                >戰矛兵</nuxt-link
              >和<nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link
              >等垃圾兵配合<nuxt-link to="/units/Trebuchet"
                >巨型投石機</nuxt-link
              >進攻（但仍需研發相關<nuxt-link to="/techs">科技</nuxt-link
              >，而且巨投壞了就要修），任務很快就能完成；相對地如果出黃金兵種，那完成任務的速度就會往後延，但是可以享受掠奪的爽快感，而且敵人的重要設施被打壞後都有不同的悲痛語音可以聽。
            </li>
          </ul>
          <p>以下是設施被破壞後可以獲得的黃金數：</p>
          <ul>
            <li>每擊殺部隊至一定的數量（可重覆觸發）：200黃金</li>
            <li>
              破壞任一市場、<nuxt-link to="/building/Dock">碼頭</nuxt-link
              >、<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
              >、<nuxt-link to="/building/Monastery">修道院</nuxt-link>：500黃金
            </li>
            <li>
              破壞任一<nuxt-link to="/building/Castle">城堡</nuxt-link
              >：1000黃金
            </li>
            <li>破壞大馬士革的清真寺：1500黃金</li>
            <li>
              破壞巴格達的<nuxt-link to="/building/Wonder">世界奇觀</nuxt-link
              >：1500黃金
            </li>
            <li>任一勢力滅亡：1000黃金</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">黎凡特的災禍</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Tamerlane/Scourge_of_the_Levant_map.png" alt="" />
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
              <nuxt-link to="/games/de">決定版</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Tamerlane">帖木兒</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Tatars">韃靼</nuxt-link>
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
              帖木兒第五章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Sultan_of_Hindustan"
                >印度斯坦的蘇丹</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/A_Titan_Amongst_Mortals">神在人間</nuxt-link>
            </td>
          </tr>
        </table>
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
