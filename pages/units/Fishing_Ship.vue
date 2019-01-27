<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>漁船</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            漁船在海上算是一個弱小的單位，負責捕魚增加肉的生產，可以在<a
              href="/building/Dock"
              >碼頭</a
            >訓練。
          </p>
          <p>
            漁船可以建造類似於水上農田的魚網，雖然魚網需要更長的時間建設，但比較多食物。漁船捕魚的速度比從魚網捕魚還要快，大概與村民捕魚或是種田一樣。
          </p>
          <p>
            值得一提的是幾個文明，<a href="/civs/Japanese">日本</a
            >的漁船工作效率極高，而<a href="/civs/Italians">義大利</a
            >的漁船相當便宜，
            <a href="/civs/Malay">馬來</a>的漁網有無限的食物採集量。
          </p>
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
            <td class="tta4">無。</td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">任何東西。</td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">工作速率</td>
            <td class="tta4">
              <img
                style="margin: 2px;"
                class="gg"
                src="~assets/Gillnetsicon.jpg"
                alt=""
              /><a href="/techs/Gillnets">流刺網</a>(+25%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">護甲</td>
            <td class="tta4">
              <img
                style="margin: 2px;"
                class="gg"
                src="~assets/Careening.jpg"
                alt=""
              /><a href="/techs/Careening">傾側維修術</a>(護甲+0/+1)
              <br />
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
                style="margin: 2px;"
                alt=""
              /><a href="/techs/Carrack">克拉克帆船</a>(護甲+1/+1，<a
                href="/civs/Portuguese"
                >葡萄牙</a
              >限定)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <img
                style="margin: 2px;"
                class="gg"
                src="~assets/Drydock.jpg"
                alt=""
              /><a href="/Dry_building/Dock">旱碼頭</a>(+15%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">抗招降能力</td>
            <td class="tta4">
              <img class="gg" src="~assets/Faith.jpg" width="30" alt="" /><a
                href="/techs/Faith"
                >忠誠信仰</a
              >
              <br />
              <img class="gg" src="~assets/Heresy.png" width="30" alt="" /><a
                href="/techs/Heresy"
                >異端邪說</a
              >
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">訓練速度</td>
            <td class="tta4">
              <img
                style="margin: 2px;"
                class="gg"
                src="~assets/Shipwright.jpg"
                alt=""
              /><a href="/techs/Shipwright">造船匠</a>(+54%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">造價減少</td>
            <td class="tta4">
              <img
                style="margin: 2px;"
                class="gg"
                src="~assets/Shipwright.jpg"
                alt=""
              /><a href="/techs/Shipwright">造船匠</a>(-20%)
            </td>
          </tr>
        </table>

        <h3>剋漁船的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對漁船的額外傷害，按照傷殺力排列。
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+40攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Bombardtowericon.png"
                      alt=""
                    /><a href="/building/Bombard_Tower">火炮塔</a>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/BombardCannonIcon.jpg"
                      alt=""
                    /><a href="/units/Bombard_Cannon">火砲</a>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+17攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/HalberdierIcon.jpg" alt="" /><a
                      href="/units/Halberdier"
                      >戟兵</a
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+16攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/PikemanIcon.jpg" alt="" /><a
                      href="/units/Pikeman"
                      >重裝長槍兵</a
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/GalleonAoE2.jpg" alt="" /><a
                      href="/units/Galleon"
                      >重型弩炮戰船</a
                    >
                  </li>
                  <li>
                    <img src="~assets/LongboatIcon.jpg" class="gg" alt="" /><a
                      href="/units/Longboat"
                      >精銳維京大戰船</a
                    >(<a href="/civs/Vikings">維京</a>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Watchtowericon.png" alt="" /><a
                      href="/units/Keep"
                      >大型箭塔</a
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/SpearmanIcon.jpg" alt="" /><a
                      href="/units/Spearman"
                      >長槍兵</a
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/HeavyCamelIcon.jpg" alt="" />
                    <a href="/Heavy_units/Camel">重裝駱駝騎兵</a>→
                    <img
                      class="gg"
                      src="~assets/ImperialCamelIcon.jpg"
                      alt=""
                    />
                    <a href="/Imperial units/Camel">帝王駱駝騎兵</a>(後者<a
                      href="/civs/Indians"
                      >印度</a
                    >限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/WarGalley.jpg"
                      width="22"
                      alt=""
                    /><a href="/War_units/Galley">弩炮戰船</a>
                  </li>
                  <li>
                    <img class="gg" src="~assets/LongboatIcon.jpg" alt="" /><a
                      href="/units/Longboat"
                      >維京大戰船</a
                    >(<a href="/civs/Vikings">維京</a>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/Watchtowericon.png" alt="" /><a
                      href="/units/Guard_Tower"
                      >防禦箭塔</a
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Dockicon.png"
                      width="22"
                      alt=""
                    /><a href="/building/Dock">海港</a>(<a href="/civs/Malay"
                      >馬來</a
                    >限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Galley.jpg" alt="" /><a
                      href="/units/Galley"
                      >戰船</a
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Ballistaelephanticon.png"
                      alt=""
                    /><a href="/Ballista_unitsanimal/Elephant">弩炮象</a>→
                    <img
                      class="gg"
                      src="~assets/Ballistaelephanticon.png"
                      alt=""
                    /><a href="/Ballista_unitsanimal/Elephant">精銳弩炮象</a>(<a
                      href="/civs/Khmer"
                      >高棉</a
                    >限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+7攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/CaravelIcon2.jpg" alt="" /><a
                      href="/units/Caravel"
                      >精銳卡拉維爾戰船</a
                    >(<a href="/civs/Portuguese">葡萄牙</a>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/Watchtowericon.png" alt="" /><a
                      href="/units/Watch_Tower"
                      >瞭望箭塔</a
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/CaravelIcon2.jpg" alt="" /><a
                      href="/units/Caravel"
                      >卡拉維爾戰船</a
                    >(<a href="/civs/Portuguese">葡萄牙</a>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/CamelIcon.jpg" alt="" /><a
                      href="/units/Camel"
                      >駱駝騎兵</a
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/New_Genoese_Crossbowman.png"
                      alt=""
                    /><a href="/Genoese_units/Crossbowman">精銳熱那亞弩手</a>(<a
                      href="/civs/Italians"
                      >義大利</a
                    >限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/New_Genoese_Crossbowman.png"
                      alt=""
                    /><a href="/Genoese_units/Crossbowman">熱那亞弩手</a>(<a
                      href="/civs/Italians"
                      >義大利</a
                    >限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/FastFireShipIcon.jpg"
                      alt=""
                    /><a href="/units/Fast_Fire_Ship">快速火戰船</a>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/FireShipIcon.jpg"
                      width="22"
                      alt=""
                    /><a href="/units/Fire_Ship">火戰船</a>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EliteEagleWarriorIcon.jpg"
                      alt=""
                    /><a href="/Elite_units/Eagle_Warrior">精銳鷹勇士</a>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/FireGalleyIcon.jpg" alt="" /><a
                      href="/units/Fire_Galley"
                      >火蒙衝</a
                    >→
                    <img
                      class="gg"
                      src="~assets/EagleWarriorIcon.jpg"
                      alt=""
                    /><a href="/units/Eagle_Warrior">鷹勇士</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        以下技術可讓以下單位對漁船有額外攻擊力
        <div class="n1">
          <div class="col-md-12">
            <div class="col-md-4">
              <img src="~assets/Heatedshot.png" width="22" alt="" /><a
                href="/techs/Heated_Shot"
                >預熱射擊</a
              >
              <div style="margin:12px 0px;"><strong>+13攻擊</strong></div>
              <ul>
                <li>
                  <img class="gg" src="~assets/Watchtowericon.png" alt="" /><a
                    href="/units/Keep"
                    >大型箭塔</a
                  >
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
              <ul>
                <li>
                  <img class="gg" src="~assets/Watchtowericon.png" alt="" /><a
                    href="/units/Guard_Tower"
                    >防禦箭塔</a
                  >
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
              <ul>
                <li>
                  <img class="gg" src="~assets/Watchtowericon.png" alt="" /><a
                    href="/units/Watch_Tower"
                    >瞭望箭塔</a
                  >
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/Castleicon.png"
                    width="22"
                    alt=""
                  /><a href="/building/Castle">城堡</a>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Dockicon.png"
                    width="22"
                    alt=""
                  /><a href="/building/Harbor">海港</a>(<a href="/civs/Malay"
                    >馬來</a
                  >限定)
                </li>
              </ul>
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li><a href="/civs/Berbers">柏柏</a>：漁船移動速度提高10％。</li>
            <li>
              <a href="/civs/Byzantines">緬甸</a>：研究<a href="/techs/Faith"
                >忠誠信仰</a
              >便宜50％。
            </li>
            <li><a href="/civs/Celts">賽爾特</a>：在視野內的動物不會被轉化</li>
            <li>
              <a href="/civs/Chinese">中國</a>：有利於漁船的科技在城堡/帝王便宜
              15/20％
            </li>
            <li>
              <a href="/civs/Italians">義大利</a>：漁船便宜20％。研究<a
                href="/techs/Gillnets"
                >流刺網</a
              >， <a href="/Dry building/Dock">旱碼頭</a>和<a
                href="/techs/Shipwright"
                >造船匠</a
              >便宜50％。
            </li>
            <li>
              <a href="/civs/Japanese">日本</a
              >：漁船具有2倍HP和裝甲+2。漁船的工作效率在黑暗/封建/城堡/帝王提高5%/10%/15%/20%
            </li>
            <li>
              <a href="/civs/Persians">波斯</a
              >：漁船訓練的速度在封建/城堡/帝王提高10%/15%/20%，<a
                href="/techs/Careening"
                >傾側維修術</a
              >和
              <a href="/techs/Gillnets">流刺網</a
              >的研究速度在城堡/帝王提高15%/20％。研究<a
                href="/Dry building/Dock"
                >旱碼頭</a
              >快20％。
            </li>
            <li><a href="/civs/Portuguese">葡萄牙</a>：漁船有+10％HP。</li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <a href="/civs/Teutons">條頓</a>：隊伍中的漁船對招降的抵抗力更強。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><a href="/games/aok">世紀帝國</a></em>
          </h3>
          <ul>
            <li>
              漁船可以完成村民未建造完成的建築物如果該建築物是在岸邊的話。
            </li>
            <li><a href="/techs/Shipwright">造船匠</a>減少20%船隻木材成本。</li>
          </ul>
          <h3>
            <em><a href="/games/aoc">征服者入侵</a></em>
          </h3>
          <ul>
            <li>
              1.0版本<a href="/techs/Shipwright">造船匠</a
              >還可減少35%的船隻訓練時間。
            </li>
            <li>引入<a href="/techs/Heresy">異端邪說</a>。</li>
          </ul>
          <h3>
            <em><a href="/games/aof">失落的帝國</a></em>
          </h3>
          <ul>
            <li>漁船再也不能建造任何建築物。</li>
            <li>引入<a href="/techs/Gillnets">流刺網</a>。</li>
            <li><a href="/civs/Italians">義大利</a>:漁船視野+2。</li>
          </ul>
          <h3>
            <em><a href="/games/ak">非洲王朝</a></em>
          </h3>
          <ul>
            <li>
              <a href="/civs/Italians">義大利</a
              >:4.8版本後漁船現在便宜33%並移除+2視野。
            </li>
          </ul>
          <h3>
            <em><a href="/games/aor">王者崛起</a></em>
          </h3>
          <ul>
            <li>
              <a href="/civs/Italians">義大利</a>:5.5版本後漁船現在便宜20%。
            </li>
            <li>
              <a href="/civs/Malay">馬來</a
              >:最初漁船便宜33%，5.3版本後該利益被移除。
            </li>
            <li>
              <a href="/news/ver5-8">5.8版</a>後義大利魚船花費60W → 64W
              (其他文明 75W)
            </li>
            <li><a href="/news/ver5-8">5.8版</a>火蒙衝對漁船傷害 3hp → 1hp</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="ien">
            <p>
              中世紀造船，航海技術和導航技術大幅改善。這些進步的結果是漁船的捕魚範圍和效率更大。歐洲，北非和亞洲海岸的豐富水域提供了豐富的海產，可以通過乾燥和鹽漬來保存。保存的魚，特別是鱈魚，在中世紀後期成為重要的貿易品。
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle"><a href="/Fishing Ship.php">漁船</a></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/FishingShipIcon.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2"><a href="#">單位介紹</a></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">平民、<a href="/units/Naval_Vessels">船</a></td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/Dark-age-logo-small.jpg" alt="" /><a
                href="/techsage/Dark_Age"
                >黑暗時代</a
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img class="gg" src="~assets/Dockicon.png" alt="" /><a
                href="/building/Dock"
                >碼頭</a
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2"><a href="#">成本</a></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木</td>
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2"><a href="#">數據</a></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3">防禦類型</td>
            <td class="unit4"><a href="/armor/Armor_Class_Ship">船</a></td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.26</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">5</td>
          </tr>
        </table>

        <div class="thanks">
          <p>感謝! 此頁面由莊晉瑋協助編輯</p>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <h3>圖庫</h3>
      <div class="hrn1"></div>
      <div class="n1">
        <div class="col-md-12">
          <div class="col-md-4">
            <a href="/img/Fishingship.png"
              ><img class="imgn hg" src="~assets/Fishingship.png" alt=""
            /></a>
            <p><em>一群漁船。</em></p>
          </div>
          <div class="col-md-4">
            <a href="/img/Fishingshipworking.png"
              ><img class="imgn hg" src="~assets/Fishingshipworking.png" alt=""
            /></a>
            <p><em>工作中的漁船。</em></p>
          </div>
          <div class="col-md-4">
            <a href="/img/Fishingshipworkingtrap.png"
              ><img
                class="imgn hg"
                src="~assets/Fishingshipworkingtrap.png"
                alt=""
            /></a>
            <p><em>收集漁網食物的漁船。</em></p>
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
