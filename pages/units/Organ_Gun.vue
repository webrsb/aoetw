<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>風琴砲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            風琴砲<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
            >的特殊單位，能夠在<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >的
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >中訓練。風琴砲是攻城武器部隊前方範圍傷害，對衝撞車系列有加成傷害，少數在城堡時代就可訓練的火藥單位。
          </p>
          <p><em>風琴砲介紹影片</em></p>
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/WmBVPT6IlUw"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen
          ></iframe>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              風琴砲跟<nuxt-link to="/civs/Khmer">高棉</nuxt-link>的<nuxt-link
                to="/units/Ballista_Elephant"
                >弩砲象</nuxt-link
              >，同樣是特殊單位屬攻城武器單位。跟大部分攻城武器的優勢和劣勢一樣擁有範圍射程對大量單位效果好。
            </li>
            <li>
              風琴砲算是目前少數難以使用的特殊單位，原因是其功效跟<nuxt-link
                to="/units/Mangonel"
                >輕型投石車</nuxt-link
              >、<nuxt-link to="/units/Scorpion">弩砲</nuxt-link
              >，僅多出近防2遠防升級後也只有6，優勢是需要的資源比較便宜只需要80木材60黃金、訓練時間比較短只需要21秒。
            </li>
            <li>
              風琴砲在特定情況下量產傷害是不錯的，但也僅此在量產後才有效果比其他攻城器單位真的是屬於劣勢。
            </li>
          </ul>
        </div>
        <h3>更多數據</h3>
        <div class="hrn1"></div>
        <div class="n1"></div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">劣勢與優勢</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">強勢(容易對抗)</td>
            <td class="tta4">
              大量需集中單位、<nuxt-link to="/units/Villager">村民</nuxt-link
              >、<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Samurai">日本武士</nuxt-link>、<nuxt-link
                to="/units/Condottiero"
                >傭兵</nuxt-link
              >、<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link>、
              <nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>、<nuxt-link
                to="/units/Huskarl"
                >哥德衛隊</nuxt-link
              >
            </td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊距離</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Siegeengineers.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link
              >(+1)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">命中率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Arquebus">火繩槍</nuxt-link
              >:可提升火藥單位對移動中目標命中率，<nuxt-link
                to="/civs/Portuguese"
                >葡萄牙</nuxt-link
              >限定 <br />
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">招降抵抗</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Heresy.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link> <br />
              <img
                class="gg"
                src="~assets/Faith.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">生產速度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Conscription.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>(+33%)
            </td>
          </tr>
        </table>

        <h3>剋手風琴砲的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對手風琴砲的額外傷害，按造傷殺力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+65攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SiegeRamIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+60攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PetardIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Petard">爆炸桶</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+50攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CappedRamIcon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+40攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/BatteringRamIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Battering_Ram"
                      >輕型衝撞車</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+20攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/BombardCannonIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangonelIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/OnagerIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Onager">中型投石車</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/SiegeOnagerIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/SMURI.jpg" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >精銳日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/CondottieroNewIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link
                    >(<nuxt-link to="/civs/Italians">義大利</nuxt-link
                    >和同盟限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/SMURI.jpg" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Magyar_Huszar_icon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Magyar_Huszar"
                      >精銳馬扎爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EliteEagleWarriorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Elite_Eagle_Warrior"
                      >精銳鷹勇士</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangudaiIcon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mangudai">精銳蒙古突騎</nuxt-link
                    >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Magyar_Huszar_icon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Magyar_Huszar"
                      >馬扎爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EagleScoutIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/EagleWarriorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangudaiIcon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link
                    >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <p>葡萄牙:風琴砲黃金成本便宜15%。</p>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠提高風琴砲的生產速度和
              <nuxt-link to="/techs/Arquebus">火繩槍</nuxt-link>及<nuxt-link
                to="/techs/Conscription"
                >徵兵制度</nuxt-link
              >的速度(+25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研發<nuxt-link
                to="/techs/Siege_Engineers"
                >攻城工程師</nuxt-link
              >的速度+80%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：風琴砲更不容易被招降。
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link
              >：風琴砲生產速度+20%。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>手風琴砲有1的擴散攻擊。</li>
            <li>
              手風琴砲<nuxt-link to="/armor/Armor_Class_Infantry"
                >步兵單位</nuxt-link
              >攻擊+1。
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link
              >:手風琴砲一開始不售土耳其的團隊加分影響。直到4.8改版後才開始有影響訓練速度(+20%)。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              手風琴砲對<nuxt-link to="/building">建築物</nuxt-link
              >不再有攻擊加成。
            </li>
            <li>手風琴砲的最小攻擊距離為1。</li>
            <li>5.7改版後手風琴砲現在有2的擴散攻擊。</li>
          </ul>
        </div>
        <h3>豆知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              所有可攻擊的攻城單位中手風琴砲是唯一對<nuxt-link to="/building"
                >建築物</nuxt-link
              >沒有攻擊加成的單位。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            一種排砲，通常被稱為Ribauldequin、rabauld、ribault、ribaudkin、organ
            gun，被認為最早的機砲，許多小口徑的鐵桶平行放置在木製平台上，當它齊射時可以射出一雨鐵彈，在14和15世紀使用。主要是作為殺傷人員的槍。“風琴槍”這個名字提到了火砲與管風琴（一種著名的樂器）的相似之處。此砲最早被人知道是由英格蘭的愛德華三世的軍隊於1339年在百年戰爭的時候於法國使用。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle" style="color: #fff">風琴砲</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/OrganGunIcon.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castleicon.png"
                width="45"
                alt=""
              /><nuxt-link to="/building/Castle">城堡</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">21秒</td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木材</td>
            <td class="unit4">80</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">60/70(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">16/20(精銳)(遠程)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Ram">衝撞車系</nuxt-link>+1
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊速度</td>
            <td class="unit4">3.45</td>
          </tr>
          <tr>
            <td class="unit3">開火間隔</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3">最小射程</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">50%</td>
          </tr>
          <tr>
            <td class="unit3">發射速度</td>
            <td class="unit4">5.5</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">4/6(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">裝甲類型</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                >攻城武器</nuxt-link
              >
              <br /><nuxt-link to="/armor/Armor_Class_Gunpowder_Unit"
                >火藥單位</nuxt-link
              >
              <br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.85</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">9</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img class="gg" src="~assets/OrganGunIcon.jpg" alt="" />精銳風琴砲
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Elite-unique-research.jpg"
                alt=""
              />1200食物500黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">45秒</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由熊協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  src="~assets/Tumblr_nxo1o0aN0R1tnh0y7o8_500.png"
                  alt=""
              /></gallery>
              <p><em>一群手風琴砲。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/6.jpg" alt=""
              /></gallery>
              <p><em>手風琴砲正防禦著敵人的突襲。</em></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allunit',
  components: {}
}
</script>
<style></style>
