<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>真命天子</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>真命天子</b>是《<nuxt-link to="/games/ak"
              >世紀帝國II：非洲王國</nuxt-link
            >》<nuxt-link to="/batt/Yodita">游娣特戰役</nuxt-link
            >的第二個場景。<nuxt-link to="/batt">戰役</nuxt-link>中<nuxt-link
              to="/units/hero/Yodit"
              >游娣特</nuxt-link
            >必須給敘利亞王子Zanobis留下深刻的印象，以便與他結婚並鞏固她的地位。
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
              <div class="p4"></div>
              玩家2
            </td>
            <td class="tc6">
              伊克什德（黃色）<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>
            </td>
            <td class="tc6" width="14%">
              <div class="p6"></div>
              玩家3
            </td>
            <td class="tc6">諾帕夏（紫色）衣索比亞</td>
          </tr>
          <tr>
            <td class="tc6" width="14%">
              <div class="p2"></div>
              玩家4
            </td>
            <td class="tc6">貝賈部落（紅色）衣索比亞</td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
          </tr>
          <tr>
            <td class="tc6" width="14%">
              <div class="p5"></div>
              玩家5
            </td>
            <td class="tc6">海盜（青色）薩拉森</td>
            <td class="tc6" width="14%">
              <div class="p8"></div>
              玩家6
            </td>
            <td class="tc6">敵對的貝賈部落（橘色）衣索比亞</td>
          </tr>
          <tr>
            <td class="tc6" width="14%">
              <div class="p7"></div>
              玩家7
            </td>
            <td class="tc6">入侵者（灰色）薩拉森</td>
          </tr>
        </table>

        <h3>主要任務</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              尋訪周圍的城市並聽取他們的訴求。滿足他們的要求，這樣能讓游娣特聲名遠播
            </li>
            <li>
              選擇性任務
              <ol>
                <li>
                  找到兩件<nuxt-link to="/elements/Relic">遺跡</nuxt-link
                  >並將他們守護在阿達哈的寺廟裏面(最東邊的有一座<nuxt-link
                    to="/building/Castle"
                    >城堡</nuxt-link
                  >的貝賈城)。
                </li>
                <li>
                  摧毀四座海盜<nuxt-link to="/building/Dock">碼頭</nuxt-link
                  >，結束他們對阿達哈的騷擾。
                </li>
                <li>拯救示巴女王，並將她帶回最北邊的貝賈村。</li>
                <li>
                  在你<nuxt-link to="/building/Harbor">海港</nuxt-link
                  >的西南方的貝賈村建造5座塔樓，以保護他們不受敵人的侵擾。
                </li>
                <li>打敗伊克什德人，向諾帕夏人證明你自己。</li>
                <li>打敗諾帕夏人，向伊克什德人證明你自己。</li>
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
              >回報：公主游娣特(綠色)起步於<nuxt-link to="/techs/age/Feudal_Age"
                >封建時代</nuxt-link
              >，有兩個營地:一個位於南邊平原，另一個則在紅海邊上。這兩個營地的位置都易攻難守，你要提防敵人早期的襲擊。
            </li>
            <li>
              貝賈牧民(紅色)在地圖東半部的沙漠聚居。他們是遠近出名的商人，他們的營地守衛著一條沿著紅海海岸的古老貿易路線。他們同時控制著阿達哈城，這是東部的一個重要港口。
            </li>
            <li>
              諾帕夏的努比亞帝國(紫色)控制著地圖西邊的卡斯爾伊布林城，我們尚不知道他們是敵是友，但是他們有一支以<nuxt-link
                to="/units/Shotel_Warrior"
                >彎刀勇士</nuxt-link
              >為主，各色單位為輔的大軍守衛著他們的領土不受伊克什德人的侵犯。
            </li>
            <li>
              埃及的伊克什德王朝(黃色)控制著阿斯旺城，這是一座橫跨西北部的尼羅河城池。一支由<nuxt-link
                to="/units/Camel_Rider"
                >駱駝騎兵</nuxt-link
              >、<nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link
              >和艦兵組成的隊伍層好幾次入侵努比亞，但都以失敗告終。
            </li>
            <li>
              阿拉伯海到(青色)控制著紅海東岸的雙堡壘。他們有一群令人聞風喪膽的<nuxt-link
                to="/units/War_Galley"
                >弩砲戰船</nuxt-link
              >覬覦著過往的商船。
            </li>
            <li>
              不是所有的貝賈部落都是有好的，很多敵對的部落(橘色)守衛寶藏並搶劫沙漠中的商隊，而其他入侵者(灰色)則經常襲擊附近的村莊掠奪財富。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                真命天子
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Yodit/The_Right_Partner_map.png" alt="" />
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
              <nuxt-link to="/batt/Yodita">游娣特</nuxt-link>
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
            <td class="unit4">
              <nuxt-link to="/games/ak">非洲王國</nuxt-link>第四章之二
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Path_of_Exile">亡命天涯</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/A_Fallen_Crown">皇冠落地</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由賜齡、裕暉協助編輯</div>
        <div class="row"></div>
      </div>
      <div class="col-md-12">
        <h3>攻略</h3>
        <div class="hrn1"></div>
        <ul>
          <li>
            這場玩家須完成五個任務即可獲勝，玩法類似<nuxt-link
              to="/batt/Genghis_Khana"
              >成吉思汗(戰役)</nuxt-link
            >的第一關<nuxt-link to="/batt/Crucible">統一各部</nuxt-link
            >。開局玩家在南邊及北邊各有一個營地，玩家重心應該放在南邊的營地，北邊營地只有兩名<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >、三艘<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
            >及一些軍隊，盡量利用北邊採集金礦跟<nuxt-link to="/resource/Stone"
              >石礦</nuxt-link
            >，漁船捕魚，南邊營地則砍樹打獵種田，<nuxt-link to="/building/Mill"
              >磨坊</nuxt-link
            >下方的池塘有很多<nuxt-link to="/units/animal/Ostrich"
              >鴕鳥</nuxt-link
            ><nuxt-link to="/units/animal/Zebra">斑馬</nuxt-link
            >及大象，但也要小心有<nuxt-link to="/units/animal/Lion"
              >獅子</nuxt-link
            ><nuxt-link to="/units/animal/Crocodile">鱷魚</nuxt-link
            >攻擊村民。兩台<nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link
            >到右邊的貝賈<nuxt-link to="/building/Market">市集</nuxt-link
            >進行貿易，並盡快晉升到<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >建造<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
            >爆經濟。海盜(青色)及入侵者(灰色)開局不久後就會攻擊北方營地，北邊的營地很快就會陷落，但也不要灰心，在南方營地建造由<nuxt-link
              to="/units/Crossbowman"
              >弩兵</nuxt-link
            >、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>、<nuxt-link
              to="/units/Elite_Skirmisher"
              >戰矛兵</nuxt-link
            >及<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >組成的混合部隊就能抵擋入侵者的攻擊。
          </li>
          <li>
            入侵者的部隊由<nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link
            >、<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>、<nuxt-link
              to="/units/Skirmisher"
              >矛兵</nuxt-link
            >，<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
            >，<nuxt-link to="/units/hero/Archers_of_the_Eyes">神弓手</nuxt-link
            >及<nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link
            >組成。而且部隊會從地圖的三個地方直接產生，分別是西方諾帕夏城後面的旗幟；北方被綁架的示巴女王旁邊以及東南方一個小池塘周圍有敵對的貝賈部落部隊及一些野生動物處。玩家如果有石礦的話可以在這些地方圍牆並在牆後建造城堡或<nuxt-link
              to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >駐守1~2名弩兵就可以避免他們騷擾玩家城鎮。
          </li>
        </ul>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Invader_spot_1.jpg"
                alt=""
            /></gallery>
            <p class="text-center"><em>東南邊的入侵者重生處（圍牆處）。</em></p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Invader_spot_2.jpg"
                alt=""
            /></gallery>
            <p class="text-center"><em>北邊的入侵者重生處（圍牆處）。</em></p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Invader_spot_4.jpg"
                alt=""
            /></gallery>
            <p class="text-center"><em>西邊的入侵者重生處。</em></p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Invader_spot_3.jpg"
                alt=""
            /></gallery>
            <p class="text-center">
              <em
                >入侵者<nuxt-link to="/units/Naval_Vessels">船隻</nuxt-link
                >重生處。</em
              >
            </p>
          </div>
        </div>
        <li>
          海盜先不管放著，他們不會對玩家有任何威脅，之後再處理。優先目標是擴展人口到150，建造由弩兵、重裝長槍兵、僧侶及<nuxt-link
            to="/units/Capped_Ram"
            >裝甲衝撞車</nuxt-link
          >（唯一一種這個場景在城堡時代就可以訓練的<nuxt-link
            to="/techs/age/Imperial_Age"
            >帝王時代</nuxt-link
          >部隊），這個場景沒有<nuxt-link to="/units/Mangonel">投石車</nuxt-link
          >可以使用。玩家很快面臨<nuxt-link to="/resource/Gold">黃金</nuxt-link
          >短缺的問題，首要目標先解決地圖上的所有敵對的貝賈部落部隊並開採附近的礦產，用裝甲衝撞車撞毀箭塔（箭塔都沒有城垛射孔），順手拿走兩個遺跡並把示巴女王護送回部落。同時在剛剛說的地圖北方及東南方的點圍牆，蓋箭塔或是駐守弩兵射殺所有剛出來的入侵者部隊，也一起完成幫東南邊的貝賈部落建造五座塔防禦村落的任務。遺跡先放在自己的<nuxt-link
            to="/building/Monastery"
            >修道院</nuxt-link
          >來獲得更多黃金，另外也生產一些貿易車隊到示巴女王的村落貿易黃金。
        </li>
        <li>
          下個目標是在伊克什德和諾帕夏選擇一國將其滅掉。伊克什德有兩座城堡而諾帕夏有一座，但現在在你眼中實在沒什麼，直接將他們的城鎮夷為平地吧!有趣的是滅掉一國之後若將另一國的外交狀態改為敵隊玩家可以攻擊他們，但他們的部隊跟<nuxt-link
            to="/building"
            >建築</nuxt-link
          >都不會反擊。順帶一提如果直接在兩國的<nuxt-link to="/building/Gate"
            >城門</nuxt-link
          >前蓋城堡電腦會直接把外交狀態改為敵對並攻擊玩家，所以最好先有一些部隊準備迎擊。
        </li>
        <li>
          現在可以轉頭消滅海盜了。由<nuxt-link to="/units/Demolition_Ship"
            >爆破船</nuxt-link
          >、<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link
          >及弩砲戰船的混合部隊就能拆掉海盜的所有<nuxt-link to="/building"
            >建築物</nuxt-link
          >，當你在進攻海盜時入侵者時不時會派四艘弩砲戰船來援助海盜，不過也不能阻擋你甚麼。之後再把遺跡放到東邊的貝賈部落的修道院裡面就可以贏得戰役！
        </li>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/The_queen.jpg"
                alt=""
            /></gallery>
            <p class="text-center"><em>救出女王！</em></p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/The_pirate.jpg"
                alt=""
            /></gallery>
            <p class="text-center"><em>毀掉海盜的碼頭！</em></p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/CastleFight.jpg"
                alt=""
            /></gallery>
            <p class="text-center">
              <em>如果直接在城門前起城堡會直接變為敵對狀態喔！</em>
            </p>
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
