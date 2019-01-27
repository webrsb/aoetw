<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
          <h1>日本武士</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>日本武士是<nuxt-link to="/civs/Japanese">日本</nuxt-link>的特殊單位，能夠在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>的
              <nuxt-link to="/building/Castle">城堡</nuxt-link>中訓練。日本武士是一個對特殊單位有相當高攻擊的單位。日本武士可以在<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>升級為精銳日本武士。</p>
          </div>
          <h3>戰術要點</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>日本武士乍看之下，戰鬥能力似乎比同時代兵營中的步兵（城堡時代的<nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>和帝國時代的
                <nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>）要遜色一些，日本文明利益對步兵的攻擊速度加成才使他們在戰鬥中獲得與人一搏的作戰能力。然而，由於他們對特殊單位的攻擊加成（普通+10，精銳+12），日本武士在後期以特殊單位為主的戰鬥中表現會更好。</li>
              <li>日本武士天生具有比大多數步兵更快的攻擊速度，再結合日本文明利益25％更快的攻擊速度，讓他們攻擊如閃電般的快速。然而，在面對<nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link>、
                <nuxt-link to="/War_unitsanimal/Elephant">波斯戰象</nuxt-link>這些特殊單位仍是十分頭痛，對<nuxt-link to="/units/Knight">騎士</nuxt-link>和<nuxt-link to="/units/Archer_Units">弓箭手</nuxt-link>也是同樣情況。</li>
              <li>日本武士搭配<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>可有效對付<nuxt-link to="/units/Knight">騎士</nuxt-link>，不過面對弓兵還是需要
                <nuxt-link to="/units/Scorpion">弩炮</nuxt-link>和遠程單位協助(日本射箭場科技全滿)。</li>
              <li>日本武士對<nuxt-link to="/Imperial_units/Camel">帝王駱駝騎兵</nuxt-link>和<nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link>不會有攻擊加成。</li>
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
              <td class="tta4"><nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link>、<nuxt-link to="/building/bulding">建築物</nuxt-link>和<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><nuxt-link to="/units/Archer">弓兵</nuxt-link>、<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>和<nuxt-link to="/units/Knight">騎士</nuxt-link>。</td>
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
                </td>
              </tr>
              <tr>
                <td class="tta1" style="width:10%">生產速度</td>
                <td class="tta4">
                  <img class="gg" src="~assets/Conscription.jpg" width="30" alt=""><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>(+33%)</td>
              </tr>
          </table>
          <h3>剋日本武士的單位與建築</h3>
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對日本武士的額外傷害，按造傷殺力排列。
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
            </div>技術:以下技術會給以下單位對日本武士有額外攻擊。
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
          </div>
          <h3>文明加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Japanese">日本</nuxt-link>：日本武士攻速快33%。</li>
            </ul>
          </div>
          <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link>能夠提高日本武士的生產速度還有加速
                <nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>的研究時間(快25%)。</li>
              <li><nuxt-link to="/civs/Goths">哥德</nuxt-link>：研發科技<nuxt-link to="/techs/Tracking">追縱技術</nuxt-link>、<nuxt-link to="/techs/Squires">護衛</nuxt-link>、
                <nuxt-link to="/techs/Arson">縱火</nuxt-link>的時間快20%。</li>
              <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：日本武士更不容易被招降。</li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
             <h3><em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em></h3>
            <ul>
              <li>日本武士的訓練時間是16秒。</li>
              <li>日本武士有0的遠程護甲，開火速率2.03，移動速度為0.9。</li>
              <li>日本武士對<nuxt-link to="/armor/Armor_Class_Unique_Unit">特殊單位</nuxt-link>攻擊+5(精銳+6)。</li>
            </ul>
            <h3><em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em></h3>
            <ul>
              <li>日本武士現在的訓練時間是9秒。</li>
              <li>日本武士現在有1的遠程護甲，開火速率1.93，移動速度為1。</li>
              <li>日本武士對<nuxt-link to="/armor/Armor_Class_Unique_Unit">特殊單位</nuxt-link>攻擊+10(精銳+12)。</li>
              <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
            </ul>
            <h3><em><nuxt-link to="/games/aok">非洲王朝</nuxt-link></em></h3>
            <ul>
              <li>引入<nuxt-link to="/techs/Arson">縱火</nuxt-link>。</li>
            </ul>
          </div>
          <h3>豆知識</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>當日本武士死亡時，他的動畫會顯示他用刀刺自己，然後倒在地上。 這是他們的儀式自殺手段，被稱為seppuku（“切腹”），另一個說法是hara-kiri。</li>
              <li>日本武士原本設計是同時擁有近戰和範圍攻擊，但開發者最終因為不符合平衡和覺得麻煩而取消了範圍攻擊。</li>
              <li>日本武士是遊戲中唯一一個對特殊單位有攻擊加成的單位。攻速更高達1.425秒一下，與日本傭兵並列為遊戲中攻速最快的近戰單位。</li>
            </ul>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>當騎士在歐洲成為貴族和戰士的統治地位時，日本同時發生了類似的社會和軍事變革。一個軟弱的中央政府和地方土地的爭奪使得日本當地一個被稱為武士的軍事統治階級崛起。
              這些出身高貴的男子不斷受到軍事訓練，還有各種文化藝術洗禮，他們非常重視榮譽和傳統，歐洲騎士們則以騎士精神為代表。武士使用各種各樣的武器戰鬥，包括弓和他們由最堅韌的鋼做的獨特彎曲的劍。
              他們在戰場上尋找強大的敵人進行個人對決，並被灌輸在戰場上視死如歸的意志，以增加他們的侵略性。</p>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle" style="color: #fff">日本武士</div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/SMURI.jpg" width="45" alt="">
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
              <td class="unit4"><nuxt-link to="/civs/Japanese">日本</nuxt-link>
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
              <td class="unit4">9秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle2" style="color: #fff">成本</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">食物</td>
              <td class="unit4">60</td>
            </tr>
            <tr>
              <td class="unit3">黃金</td>
              <td class="unit4">30</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle2" style="color: #fff">數據</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">60/80(精銳)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊</td>
              <td class="unit4">8/12(精銳)(近戰)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊加成</td>
              <td class="unit4">對<nuxt-link to="/Armor_Class_standard_building.php">標準建築</nuxt-link>+2/+3(精銳)
                <br/>對<nuxt-link to="/armor/Armor_Class_Eagle_Warrior">鷹勇士</nuxt-link>+2/+3(精銳)
                <br/>對<nuxt-link to="/armor/Armor_Class_Unique_Unit">特殊單位</nuxt-link>+10/+12(精銳)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊速度</td>
              <td class="unit4">1.45</td>
            </tr>
            <tr>
              <td class="unit3">近防</td>
              <td class="unit4">1</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">1</td>
            </tr>
            <tr>
              <td class="unit3">護甲分類</td>
              <td class="unit4"><nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
                <br/> <nuxt-link to="/armor/Armor_Class_Unique_Unit">特殊單位</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">跑速</td>
              <td class="unit4">1</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">4/5(精銳)</td>
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
                <img class="gg" src="~assets/SMURI.jpg" width="45" alt="">精銳日本武士</td>
            </tr>
            <tr>
              <td class="unit3">升級成本</td>
              <td class="unit4">
                <img class="gg" src="~assets/Elite-unique-research.jpg" alt="">950食物875黃金</td>
            </tr>
            <tr>
              <td class="unit3">升級時間</td>
              <td class="unit4">60秒</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        </div>
        <div class="col-md-12">
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-4"> <nuxt-link to="/img/Samurai_2014-12-03_00001.jpg"><img class="imgn hg" width="180" src="~assets/Samurai_2014-12-03_00001.jpg" alt=""></nuxt-link> 
              <div
              class="lightbox-caption" style="width:220px" ;>
                <p><em>一群日本武士。</em>
                </p>
            </div>
          </div>
          <div class="col-md-4"> <nuxt-link to="/img/Samurai_Beta.jpg"><img class="imgn hg" width="180" src="~assets/Samurai_Beta.jpg" alt=""></nuxt-link> 
            <div
            class="lightbox-caption" style="width:220px" ;>
              <p><em>日本武士。</em>
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