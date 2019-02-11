<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>黑暗時代</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            黑暗時代是遊戲內第一個時代，在大多數地圖開始時玩家都有三個<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >(<nuxt-link to="/civs/Chinese">中國</nuxt-link>是六個、
            <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>是四個)、一個<nuxt-link
              to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >和一個<nuxt-link to="/units/Scout_Cavalry">斥候騎兵</nuxt-link>。
            <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、<nuxt-link
              to="/civs/Mayans"
              >馬雅</nuxt-link
            >和<nuxt-link to="/civs/Incas">印加</nuxt-link
            >因為沒有騎馬單位所以會以
            <nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link>替代斥候騎兵。
          </p>
          <p>
            斥候騎兵/鷹斥候在到達<nuxt-link to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >前都無法訓練。如果最初的城鎮中心被摧毀了，可以重蓋一個新的。
          </p>
        </div>
        <h3>可建造建築</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <strong>民用建築</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/Houseicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/House">房屋</nuxt-link>:提供人口空間
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Millicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Mill">磨坊</nuxt-link
              >：讓村民收集食物的收集點
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Farmicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Farm">農田</nuxt-link>：提供食物
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Lumbercampicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link
              >:讓村民收集木材的收集點
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Miningcampicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link
              >:讓村民收集礦石的收集點
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Dockicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Dock">碼頭</nuxt-link>:訓練和升級船隻
            </li>
            <h4>1.碼頭演進到封建時代後就屬於軍事建築物。</h4>
          </ul>
          <strong>軍事建築</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/Barracks-logo.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/building/Barracks">軍營</nuxt-link
              >:訓練和升級步兵單位
            </li>
          </ul>
          <strong>防禦建築</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/Outposticon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Outpost">哨站</nuxt-link
              >:簡單的箭塔，提醒敵人來犯
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Palisadewallicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Palisade_Wall">木牆</nuxt-link
              >：阻擋敵人一小段時間
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Palisadegateicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Palisade_Gate">木門</nuxt-link
              >：可與木牆蓋在一起，讓友方單位通過
            </li>
          </ul>
        </div>
        <h3>可生產單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <strong>一般單位</strong>
          <p>城鎮中心</p>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/VillagerMaleIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Villager">村民</nuxt-link
              >：建造建築物和收集食物。
            </li>
          </ul>
          <p>碼頭</p>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/FishingShipIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
              >：從魚群收集食物。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/TransportShipIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
              >：運載單位。
            </li>
            <h4>
              1.在<nuxt-link to="/games/aok">帝王世紀</nuxt-link>和<nuxt-link
                to="/games/aoc"
                >征服者入侵</nuxt-link
              >資料片中，運輸船要在封建時代才能訓練而不是黑暗時代。
            </h4>
          </ul>
          <strong>軍事單位</strong>
          <p>軍營</p>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/MilitiaIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Militia">民兵</nuxt-link>：基本步兵單位。
            </li>
          </ul>
          <h3>可研發科技</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>城鎮中心</p>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Loom.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Loom">織布技術</nuxt-link
                >：增加村民生命值。
              </li>
            </ul>
            <h3>策略</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  黑暗時代在文明的技術和多樣性方面提供的很少。一般來說玩家應該追求經濟的快速發展，因為他們的選擇是非常有限的。主要收集的資源是木材（更多的房屋支持更多的村民和建築物進入封建時代）和食物（創造更多的村民和推進到封建時代）。黃金只有在玩家想要進行黑暗時代的快攻的時候才需要，而石頭則是用來塔攻的。大約十六到二十二名村民是大多數文明的良好開端。在資源上如何分配村民將完全取決於地圖的情況，所用的文明也將影響玩家選擇的策略，不過快速訓練和指派任務給村民永遠是第一優先。玩家應該在一開始建立農場並先打鹿和野豬，不僅收集食物速度更快也能節省木材。
                </li>
                <li>
                  如果地圖包括捕魚作為食物來源，建造一個碼頭和使用漁船是可行的，因為漁船比村民能更快地收集食物。而且，它讓村民能收集其他資源。此外，建議研發織布技術強化村民，避免村民意外死亡(被狼/豬咬死，被民兵/斥候騎兵砍死)。
                </li>
                <li>
                  儘管黑暗時代讓所有的玩家幾乎沒有軍事能力，但也可以用民兵和村民快攻敵方玩家。這樣的策略可能是有風險的，因為在遊戲中期投入軍隊的時間和資源可能最後有去無回。但是如果成功，它可以快速結束遊戲。偷豬是另一個很好的策略，讓斥候騎兵偷走一些野豬，並把它們帶回到玩家的營地。攻擊村民是另一個有用的戰術。
                </li>
              </ul>
            </div>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>
              西羅馬帝國在西元五世紀滅亡之後，西歐陷入了一個充滿野蠻，沒有法律和經濟退縮的漫長時期-黑暗時代。羅馬人的基礎設施，包括公共工程，法院，執法，教育，書面記錄，造幣和貿易，基本上已經消失。萊茵河和多瑙河以北的日耳曼侵略者取代了以當地強大戰士組成的部落政治結構。之後經濟逐漸復甦的主要因素有三個：出現擁有大範圍領地的傑出領袖，保守和傳播殘存教育的基督教會（羅馬和愛爾蘭的基督教教會），和以農業為基礎振興起來的經濟（特別是羊毛和布交易）。
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#5b2167f0;text-align: center;"
            >
              <div class="unititle" style="color: #fff">黑暗時代</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Dark-age-logo-small.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#5b2167f0;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">時代介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一個</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
        </table>

        <div></div>
        <div class="thanks">
          感謝! 此頁面由賜齡協助編輯
          <div></div>
        </div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-12">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/DarkAge.jpg" alt=""
              /></gallery>
              <p><em>每個文明在黑暗時代的樣子。</em></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allage',
  components: {}
}
</script>
<style></style>
