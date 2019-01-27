<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
          <h1>條頓武士</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>條頓武士是<nuxt-link to="/civs/Teutons">條頓</nuxt-link>的特殊單位，能夠在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>的
              <nuxt-link to="/building/Castle">城堡</nuxt-link>中訓練。條頓武士是一個移動緩慢，配有高裝甲及高攻擊力的單位。條頓武士可以在<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>升級為精銳條頓武士。</p>
          </div>
          <h3>戰術要點</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>條頓武士是遊戲中最強大的步兵單位。在完全升級後有100 HP，21攻擊力，13的近戰護甲和6的遠程護甲。他們能比完全升級的<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>更輕易地擊敗完全升級的遊俠，但
                <nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>的CP值還是較高。</li>
              <li>條頓武士的高護甲高攻擊和高生命值讓他們在任何1V1的戰鬥中都可輕鬆獲勝。然而在面對如<nuxt-link to="/War_unitsanimal/Elephant">戰象</nuxt-link>、
                <nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link>、<nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>；或是一群對他們有攻擊加成的步兵單位如<nuxt-link to="/units/Samurai">日本武士</nuxt-link>或
                  <nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>，條頓武士還是得俯首稱臣。</li>
              <li>條頓武士最大的缺點是在於大量的盔甲降低了他們的移動速度，幾乎所有遠程單位都可以用打帶跑的方式耗死他們。條頓武士對僧侶的招降也毫無招架之力。然而，條頓的團隊加成可讓敵方僧侶難以招降我方單位。</li>
              <li>條頓騎士可與遊俠搭配，因為弓箭手對他們毫無威脅。但最好的伙伴也許是攻城武器。他們可以支援條頓騎士面對幾乎任何威脅。<nuxt-link to="/units/Scorpion">弩炮</nuxt-link>和
                <nuxt-link to="/units/Mangonel">投石車</nuxt-link>攻擊弓箭手，<nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link>可以提供庇護和分散敵方單位注意。<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>也可以對付敵方遠程單位。對這個組合來說，最大的威脅也是對方的攻城武器，特別是
                  <nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>和<nuxt-link to="/units/Mangonel">投石車</nuxt-link>，因為它們能在條頓武士碰到它們前就給予部隊極大傷害。</li>
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
              <td class="tta4"><nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>、<nuxt-link to="/building/bulding">建築物</nuxt-link>和近戰單位。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><nuxt-link to="/units/Archer">弓兵</nuxt-link>、<nuxt-link to="/units/Scorpion">弩炮</nuxt-link>、<nuxt-link to="/units/Mangonel">投石車</nuxt-link>、
                <nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>、<nuxt-link to="/units/Conquistador">征服者</nuxt-link>、<nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link>、
                  <nuxt-link to="/units/Slinger">投石手</nuxt-link>和<nuxt-link to="/units/Monk">僧侶</nuxt-link>。</td>
            </tr>
            <tr class="tta">
              <td class="" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攻擊力</td>
              <td class="tta4">
                <img class="gg" src="~assets/Forging.jpg" width="30" alt=""><nuxt-link to="/techs/Forging">鍛造</nuxt-link>(+1)
                <br/>
                <img class="gg" src="~assets/Ironcasting.jpg" width="30" alt=""><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>(+1)
                <br/>
                <img class="gg" src="~assets/Blastfurnace.jpg" width="30" alt=""><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>(+2)
                <br/>
                <img class="gg" src="~assets/Arson.jpg" width="30" alt=""><nuxt-link to="/techs/Arson">縱火</nuxt-link>:步兵+2攻擊vs<nuxt-link to="/Armor_Class_standard_building.php">標準建築</nuxt-link> 
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">防禦</td>
              <td class="tta4">
                <img class="gg" src="~assets/Scalemailarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link>(+1/+1)
                <br/>
                <img class="gg" src="~assets/Chainmailarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Chain_Mail_Armor">步兵鎖甲</nuxt-link>(+1/+1)
                <br/>
                <img class="gg" src="~assets/Platemailarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link>(+1/+2)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">速度</td>
              <td class="tta4">
                <img class="gg" src="~assets/Squires.jpg" width="30" alt=""><nuxt-link to="/techs/Squires">護衛</nuxt-link>(+10%)</td>
              <tr>
                <td class="tta1" style="width:10%">視野</td>
                <td class="tta4">
                  <img class="gg" src="~assets/Tracking.jpg" width="30" alt=""><nuxt-link to="/techs/Tracking">追縱技術</nuxt-link>(+2)</td>
              </tr>
              <tr>
                <td class="tta1" style="width:10%">招降抵抗</td>
                <td class="tta4">
                  <img class="gg" src="~assets/Faith.jpg" width="30" alt=""><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
                  <br/>
                  <img class="gg" src="~assets/Heresy.png" width="30" alt=""><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link> 
                </td>
              </tr>
              <tr>
                <td class="tta1" style="width:10%">生產速度</td>
                <td class="tta4">
                  <img class="gg" src="~assets/Conscription.jpg" width="30" alt=""><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>(+33%)</td>
              </tr>
          </table>
          <h3>剋條頓武士的單位與建築</h3>
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對條頓武士的額外傷害，按造傷殺力排列。
            <div class="n1">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+15攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg" alt=""><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>→
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg"
                      alt=""><nuxt-link to="/Elite_units/Cannon_Galleon">精銳火砲戰船</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+12攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CataphractIcon.jpg" alt=""><nuxt-link to="/units/Cataphract">精銳聖騎兵</nuxt-link>(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/SMURI.jpg" alt=""><nuxt-link to="/units/Samurai">精銳日本武士</nuxt-link>(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+11攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/JaguarWarriorIcon.jpg" alt=""><nuxt-link to="/units/Jaguar_Warrior">精銳豹勇士</nuxt-link>(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+10攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HandCannoneerIcon.jpg" alt=""><nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>
                    </li>
                    <li>
                      <img class="gg" src="~assets/Slingericon.png" alt=""><nuxt-link to="/units/Slinger">投石手</nuxt-link>(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/JaguarWarriorIcon.jpg" alt=""><nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/SMURI.jpg" alt=""><nuxt-link to="/units/Samurai">日本武士</nuxt-link>(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CataphractIcon.jpg" alt=""><nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+2攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/PlumedArcherIcon.jpg" alt=""><nuxt-link to="/Plumed_units/Archer">精銳羽毛箭射手</nuxt-link>(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+1攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/PlumedArcherIcon.jpg" alt=""><nuxt-link to="/Plumed_units/Archer">羽毛箭射手</nuxt-link>(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>以下技術可讓以下單位對條頓武士有額外攻擊力
          <div class="n1">
            <img class="gg" src="~assets/Unique-tech.jpg" width="22" alt=""> <nuxt-link to="/techs/Parthian_Tactics">後勤學</nuxt-link> 
            <div style="margin:12px 0px;"><strong>+6攻擊</strong>
            </div>
            <ul>
              <li>
                <img class="gg" src="~assets/CataphractIcon.jpg" alt=""><nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>→
                <img class="gg" src="~assets/CataphractIcon.jpg"
                alt=""><nuxt-link to="/units/Cataphract">精銳聖騎兵</nuxt-link>(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)</li>
            </ul>
          </div>
          <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link>能夠提高條頓武士的生產速度還有加速
                <nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>的研究時間(快25%)。</li>
              <li><nuxt-link to="/civs/Goths">哥德</nuxt-link>：研發科技<nuxt-link to="/techs/Tracking">追縱技術</nuxt-link>、<nuxt-link to="/techs/Squires">護衛</nuxt-link>、
                <nuxt-link to="/techs/Arson">縱火</nuxt-link>的時間快20%。。</li>
              <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：條頓武士更不容易被招降。</li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
             <h3><em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em></h3>
            <ul>
              <li>條頓武士的移動速度為0.65。</li>
              <li>條頓武士現在的訓練時間為19秒。</li>
              <li>條頓武士(非精銳)的HP為70。</li>
            </ul>
            <h3><em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em></h3>
            <ul>
              <li>條頓武士現在的訓練時間為12秒。</li>
              <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
            </ul>
            <h3><em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em></h3>
            <ul>
              <li>條頓武士(非精銳)現在的HP為80。</li>
            </ul>
            <h3><em><nuxt-link to="/games/aok">非洲王朝</nuxt-link></em></h3>
            <ul>
              <li>引入<nuxt-link to="/techs/Arson">縱火</nuxt-link>。</li>
              <li>4.8版本後條頓武士的移動速度為0.7。</li>
            </ul>
          </div>
          <h3>豆知識</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>條頓武士是以十字軍作為模板。 然而，不像歷史ㄧ樣他們沒有配備盾牌。</li>
              <li>條頓騎士似乎穿著hauberk（在一件surcoat和斗篷下）。鎖子甲可輕易的抵擋用刀刃武器（特別是中東文明使用的彎刀）的攻擊，但是很容易被箭矢和尖銳武器（以及火槍）所刺穿。
                這也許可以解釋為什麼日爾曼騎士擅於對近戰攻擊，但不擅於對箭矢和火槍卻很弱。</li>
            </ul>
          </div>
          <h3>歷史</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <div class="ien"><em>“在基督教十字軍進入聖地之後，德國十字軍形成了一個名叫條頓騎士團的戰士僧侶的制度，這一制度讓十字軍放棄了在東地中海的戰鬥，並把注意力轉移到了東歐，通過戰鬥他們將基督教帶到了波羅的海的地區和森林，那裏之後成為了現在的普魯士，他們建造了城堡以便控制周圍鄉村，條頓武士用他們的生命雕刻出一個持續到二十世紀的帝國。</em>
              <p
              style="text-align: right;margin-top: 10px;">-世紀帝國II手稿。</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle" style="color: #fff">條頓武士</div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/Crusade_avatar.png" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle2" style="color: #fff">單位介紹</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">類型</td>
              <td class="unit4"><nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4"><nuxt-link to="/civs/Teutons">條頓</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">時代</td>
              <td class="unit4">
                <img class="gg" src="~assets/Castle-age-reseach.jpg" alt=""><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練於</td>
              <td class="unit4">
                <img class="gg" src="~assets/Castleicon.png" width="45" alt=""><nuxt-link to="/building/Castle">城堡</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練時間</td>
              <td class="unit4">12秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle2" style="color: #fff">成本</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">食物</td>
              <td class="unit4">85</td>
            </tr>
            <tr>
              <td class="unit3">黃金</td>
              <td class="unit4">40</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle2" style="color: #fff">數據</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">80/100(精銳)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊</td>
              <td class="unit4">12/17(精銳)(近戰)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊加成</td>
              <td class="unit4">對<nuxt-link to="/Armor_Class_standard_building.php">標準建築</nuxt-link>+4
                <br/>對<nuxt-link to="/armor/Armor_Class_Eagle_Warrior">鷹勇士</nuxt-link>+4</td>
            </tr>
            <tr>
              <td class="unit3">攻擊速度</td>
              <td class="unit4">2.03</td>
            </tr>
            <tr>
              <td class="unit3">近防</td>
              <td class="unit4">5/10(精銳)</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">2</td>
            </tr>
            <tr>
              <td class="unit3">護甲分類</td>
              <td class="unit4"><nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
                <br/> <nuxt-link to="/armor/Armor_Class_Unique_Unit">特殊單位</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">跑速</td>
              <td class="unit4">0.7</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">3/5(精銳)</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><nuxt-link to="#">單位演變</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">升級到</td>
              <td class="unit4">
                <img class="gg" src="~assets/Crusade_avatar.png" width="45" alt="">精銳條頓武士</td>
            </tr>
            <tr>
              <td class="unit3">升級成本</td>
              <td class="unit4">
                <img class="gg" src="~assets/Elite-unique-research.jpg" alt="">1200食物600黃金</td>
            </tr>
            <tr>
              <td class="unit3">升級時間</td>
              <td class="unit4">50秒</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        </div>
        <div class="col-md-12">
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-4"> <nuxt-link to="/img/Tk.png"><img class="imgn hg" width="180" src="~assets/Tk.png" alt=""></nuxt-link> 
              <div
              class="lightbox-caption" style="width:220px" ;>
                <p><em>一群條頓武士。</em>
                </p>
            </div>
          </div>
          <div class="col-md-4"> <nuxt-link to="/img/Units_9.jpg"><img class="imgn hg" width="180" src="~assets/Units_9.jpg" alt=""></nuxt-link> 
            <div
            class="lightbox-caption" style="width:220px" ;>
              <p><em>條頓武士的3D圖。</em>
              </p>
          </div>
        </div>
        <div class="col-md-4"> <nuxt-link to="/img/Teutonic_Knight_real_life.jpg"><img class="imgn hg" width="180" src="~assets/Teutonic_Knight_real_life.jpg" alt=""></nuxt-link> 
          <div
          class="lightbox-caption" style="width:220px" ;>
            <p><em>畫家筆下的條頓武士。</em>
            </p>
        </div>
      </div>
    </div>
    </div>
    
</template>
<script>
export default {
  layout: 'allunit',
  components: {
  }
}
</script>
<style>
</style>