<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>北地傳奇(1000)</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>北地傳奇</b>(1000)是<nuxt-link
              to="/batt/Battles_of_the_Conquerors"
              >征服者的戰役</nuxt-link
            >之一，描述<nuxt-link to="/civs/Vikings">維京人</nuxt-link
            ><nuxt-link to="/units/hero/Erik_the_Red">紅衣艾立克</nuxt-link
            >前往新大陸並且拓展殖民地的故事。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="15%">起始時代:</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源:</td>
              <td class="tc2">
                <nuxt-link to="/resource/Wood">木材</nuxt-link>200，<nuxt-link
                  to="/resource/Food"
                  >食物</nuxt-link
                >300，<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >200，<nuxt-link to="/resource/Stone">石頭</nuxt-link>300
              </td>
              <td class="tc1" width="15%">人口上限:</td>
              <td class="tc2" width="5%">75</td>
            </tr>
          </table>

          <h3>開場</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              <img
                style="margin: 2px;"
                width="22"
                src="~assets/Elcidicon.png"
                alt=""
              />紅衣艾立克
            </li>
            <li>
              <img
                style="margin: 2px;"
                width="22"
                src="~assets/VillagerMaleIcon.png"
                alt=""
              /><nuxt-link to="/units/Villager">村民</nuxt-link>X3
            </li>
            <li>
              <img
                style="margin: 2px;"
                width="22"
                src="~assets/VBRSK.png"
                alt=""
              /><nuxt-link to="/units/Berserk">狂戰士</nuxt-link>X2
            </li>
          </ul>
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
                玩家1
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Vikings">維京</nuxt-link>（紅色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6">無</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p1"></div>
                玩家2
              </td>
              <td class="tc6">
                <nuxt-link to="/civs/Britons">英國</nuxt-link>（藍色）<nuxt-link
                  to="/civs/Britons"
                  >不列顛</nuxt-link
                >
              </td>
              <td class="tc6">
                <div class="p3"></div>
                玩家3
              </td>
              <td class="tc6">格陵蘭（綠色）維京</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p6"></div>
                玩家4
              </td>
              <td class="tc6">斯格林斯（紫色）塞爾特</td>
            </tr>
          </table>

          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>紅衣艾立克必須生還。</li>
              <li>漂洋過海將紅衣艾立克運送到新大陸，建立一個新的殖民地。</li>
              <li>
                在這個新的世界裡，維京必須建造一個<nuxt-link
                  to="/building/Town_Center"
                  >城鎮中心</nuxt-link
                >，一個市場，和12個房子。
              </li>
            </ol>
          </div>
          <h3>次要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>無。</li>
            </ol>
          </div>
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/civs/Vikings">挪威</nuxt-link
                >的資源很快就會用盡，你必須殖民別的大陸，來維持維京民族的繁榮。
              </li>
              <li>由吟詩人提及一個遙不可及的海洋。</li>
              <li>
                維京人只能升級到<nuxt-link to="/techs/age/Castle_Age"
                  >城堡時代</nuxt-link
                >。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                紅衣艾立克統治的維京人(紅色)只有少量<nuxt-link to="/building"
                  >建築</nuxt-link
                >與少數<nuxt-link to="/units/Berserk">狂戰士</nuxt-link
                >的保護他們免受惡狼的傷害，儘管戰士還沒有人來騷擾你，但是格陵蘭的維京人可能襲擊你的海岸。
              </li>
              <li>不列顛(藍色)雖然正規作戰還不行，但是奇襲還是很有經驗的。</li>
              <li>
                格陵蘭(綠色)很神祕，那裏的維京人很有多<nuxt-link
                  to="/units/Longboat"
                  >維京大戰船</nuxt-link
                >。
              </li>
              <li>一種野人(紫色)傳說也住在新大陸上。</li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              開始時的地方有許多野味，你可以狩獵，但是要用狂戰士保護你的<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >不受野狼傷害。
            </li>
            <li>
              挪威(開始的地區)是沒有黃金的，你必須盡快到別的島嶼去搶資源。
            </li>
            <li>
              如果使用簡單模式，你會有個<nuxt-link to="/building/Castle"
                >城堡</nuxt-link
              >，中等模式會有多餘的石頭，困難模式則是只有300石頭。
            </li>
            <li>
              沒事不要亂蓋<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
              >，一旦蓋好就會有隻<nuxt-link to="/units/hero/Ornlu_the_Wolf"
                >灰狼歐魯</nuxt-link
              >來襲擊你，而且就連紅衣艾立克都打不贏他。
            </li>
            <li>
              襲擊英國是個好選擇，他們的防禦非常弱，幾個<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >就可以拿下。
            </li>
            <li>
              困難模式下，格陵蘭會不定期送弩砲跟狂戰士過來攻擊你，最好建造防禦建築，或是趕緊離開該島。
            </li>
            <li>
              格陵蘭有許多維京大戰船，最好能夠建立一支像樣的<nuxt-link
                to="/units/Naval_Vessels"
                >海軍</nuxt-link
              >。
            </li>
            <li>
              敵人有海軍，而且海中有海蟲，拉打的時候記得不要越線，載著紅衣艾利克的<nuxt-link
                to="/units/Transport_Ship"
                >運輸船</nuxt-link
              >要百般保護，不要讓他沈船了。
            </li>
            <li>
              如果已經有了軍隊，就趕緊登陸格陵蘭島，越早擊敗格陵蘭，你就能拿到越多地圖上剩餘的資源。
            </li>
            <li>
              格陵蘭在困難模式下非常難以擊敗，集中摧毀他們的城堡與城鎮中心，逼迫他投降。
            </li>
            <li>
              由於格陵蘭島的樹木分布破碎，所以城鎮中心可以更好的掩護你的部隊。
            </li>
            <li>
              擊敗格陵蘭後就可以放慢腳步，因為斯格林斯並不會發展，也不會出動部隊打你。
            </li>
            <li>
              一旦你登陸新大陸，所有的斯格林斯部隊會開始活動、搜索並且擊敗所有來犯的敵人，最好準備足夠建立城堡的石頭與村民再去。
            </li>
            <li>
              斯格林斯只有<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
              >，城堡是最好的防禦，或是城鎮中心也可以。
            </li>
            <li>
              不需要跟斯格林斯硬碰硬，<nuxt-link to="/building/Stone_Wall"
                >石牆</nuxt-link
              >圍起來，蓋好該蓋的建築即可獲勝。
            </li>
            <li>
              若是玩中等模式，可以直接帶著紅衣艾立克跟幾個村民，從格陵蘭島跟海蟲的夾縫中通過格陵蘭，抵達新大陸之後用開始時的石頭建造城堡，然後就可以輕鬆獲勝(不需要擊敗格陵蘭)。
            </li>
          </ul>
          <h3>遊戲內細節</h3>
          <div class="hrn1"></div>
          <ul>
            <li>很神奇的，遊戲沒有把冰島畫出來。</li>
            <li>
              格陵蘭島的草其實長在島的南端，所以遊戲中北方有一堆樹木是不合史實的。
            </li>
            <li>
              紅衣艾立克的<nuxt-link to="/elements/Hit_points">血量</nuxt-link
              >會隨著時代升級而變高，但是永遠打不過那隻狼王(你還算個毛的維京戰士)。
            </li>
            <li>
              在這個關卡中，灰狼歐魯(也就是<nuxt-link to="/batt/Genghis_Khana"
                >成吉思汗</nuxt-link
              >第一關裏頭的那隻)會襲擊你的村莊，觸發條件是你蓋好兵工廠。
            </li>
            <li>
              這個關卡之所以有名，估計是因為有鹿會攻擊你的建築(起因似乎是因為狼王劇情上的bug)。
            </li>
            <li>
              那隻會攻擊你<nuxt-link to="/building/Outpost">哨站</nuxt-link
              >的鹿會無限重生，可以作為食物來源，雖然毫無效率可言。
            </li>
            <li>
              遊戲中所謂的海蟲，就是只有從地圖上面才可以看到的海上龍，你的任何<nuxt-link
                to="/units/Naval_Vessels"
                >船隻</nuxt-link
              >踏進去都會立刻被摧毀。
            </li>
            <li>只有玩家的船隻會被海蟲吞噬。</li>
            <li>
              摧毀英國的<nuxt-link to="/building/Market">市集</nuxt-link
              >將會給你黃金，而且總數將近3000。
            </li>
            <li>
              大多數玩家不知道為甚麼斯格林斯永遠不會被擊敗，那是因為在地圖左下有個孤島，上面有一個叫做Lonely
              Hermit的<nuxt-link to="/units/Woad_Raider">菘藍武士</nuxt-link
              >，殺死他後就可以擊敗斯格林斯。
            </li>
            <li>如果你聽的是中文語音，那你就可以享受那神奇的艾立克口音。</li>
          </ul>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              這場<nuxt-link to="/batt">戰役</nuxt-link
              >的英文名稱Vindlandsaga，正是取自新大陸的名稱Vindland。
            </li>
            <li>
              這場戰役描寫的是紅衣艾立克(又名紅鬍子、紅魔、紅髮)拓展格陵蘭與其子萊夫-艾瑞克森開發新大陸的故事。
            </li>
            <li>
              這場戰役中的玩家初始所在地是挪威，而所謂的"新大陸"是位於今天加拿大的紐芬蘭島(Newfoundland，也就是新找到的島)，古時候稱作文蘭（Vinland）
            </li>
            <li>
              根據北歐史詩紀載，紅衣艾利克生於挪威，定居挪威，因為其子的謀殺罪名離開挪威，並且航向格陵蘭(當時沒有人知道格陵蘭的存在)。
            </li>
            <li>
              艾立克定居格陵蘭後，希望有更多人來此定居，便把這島嶼取名為格陵蘭(Greenland)意思是常綠之島，以吸引北歐移民投入開發，而最終吸引4000多人來到這裡定居。
            </li>
            <li>
              遊戲中的格陵蘭(綠色)其實是因紐特人(注意：愛斯基摩人是蔑稱，盡量少用)，並不是維京人。
            </li>
            <li>
              紅衣艾立克其實在早在986年就建立一個格陵蘭村落，而且並沒有發生戰鬥。
            </li>
            <li>其實真正到達新大陸的只有萊夫-艾瑞克森，紅衣艾利克沒有。</li>
            <li>
              古時候的文蘭島是肥沃且常綠的，加上沒有人居住，並不像遊戲中描述"一個漫長而且血腥的冬天"，事實上，那時的文蘭島冬天根本只是結點霜的程度而已。
            </li>
            <li>
              有些人認為萊夫-艾瑞克森是真正第一個發現新大陸的人，而非哥倫布。
            </li>
            <li>當時的維京人是以基督教為主。</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                北地傳奇(1000)
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Battles_of_the_Conquerors/Vinlandsaga_map.png" alt="" />
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
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Battles_of_the_Conquerors"
                >征服者的戰役</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>
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
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>第四章之二
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Tours_732">都爾戰役(732)</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Hastings_1066">哈斯汀斯戰役(1066)</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Dennis協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的紅衣艾立克
            <div style="margin-left: 10px;">
              <i
                ><b
                  ><a href="http://tinyurl.com/ybpfxxqq" target="_blank"
                    >紅鬍子艾瑞克</a
                  ></b
                ></i
              >
            </div>
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
