<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
          <h1>菘藍武士</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>菘藍武士是<nuxt-link to="/civs/Celts">賽爾特</nuxt-link>的特殊單位，能夠在城堡時代的城堡中訓練。</p>
            <p>菘藍武士是一個速度快和對建築物有高攻擊力的單位，而且生產快速。</p>
            <p>菘藍武士可以在<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>升級為精銳菘藍武士。</div>
          <h3>戰術要點</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>菘藍武士是整個遊戲中數一數二快的步兵單位，他們可以有效的執行游擊戰，高攻擊力和HP的條件下讓他們可以應付大多數的步兵單位，也能輕易地摧毀攻城武器和巨型投石機。然而在對上騎兵和更強的步兵單位(如:
                <nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>、<nuxt-link to="/Teutonic_units/Knight">條頓武士</nuxt-link>、<nuxt-link to="/units/Samurai">日本武士</nuxt-link>)時，請隨侍做好撤退的準備遠離他們，對上弓兵時也請避戰因為菘藍武士的護甲十分薄弱。</li>
            </ul>
          </div>
          <h3>更多數據</h3>
          <div class="hrn1"></div>
          <div class="n1"></div>
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td class="" colspan="2" style="text-align: center;">
                <div class="unititle">劣勢與優勢</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">強勢(容易對抗)</td>
              <td class="tta4"><nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>、<nuxt-link to="/units/Halberdier">戟兵</nuxt-link>、<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>、
                <nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link>、<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link>、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>和
                  <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4">大量<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>、<nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>、
                <nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>、<nuxt-link to="/units/Conquistador">西班牙征服者</nuxt-link>、<nuxt-link to="/units/Slinger">投石手</nuxt-link>、重型
                  <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>、<nuxt-link to="/units/Samurai">日本武士</nuxt-link>、<nuxt-link to="/units/Berserk">狂戰士</nuxt-link>、
                    <nuxt-link to="/Teutonic_units/Knight">條頓武士</nuxt-link>、<nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
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
                <img class="gg" src="~assets/Arson.jpg" width="30" alt=""><nuxt-link to="/techs/Arson">縱火</nuxt-link>:步兵+2攻擊vs<nuxt-link to="/armor/Armor_Class_standard_building">標準建築</nuxt-link> 
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
          <h3>剋菘藍武士的單位與建築</h3>
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對菘藍武士的額外傷害，按造傷殺力排列。
            <div class="n1">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+15攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg" alt=""><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>→
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg"
                      alt=""><nuxt-link to="/units/Elite_Cannon_Galleon">精銳火砲戰船</nuxt-link> 
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
              </div>以下技術可給以下單位對菘藍武士有額外攻擊加成:
              <div class="n1">
                <img class="gg" src="~assets/Unique-tech.jpg" width="22" alt=""> <nuxt-link to="/techs/Parthian_Tactics">後勤學</nuxt-link> 
                <div style="margin:12px 0px;"><strong>+6攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/CataphractIcon.jpg" alt=""><nuxt-link to="/units/Cataphract">聖騎兵(精銳)</nuxt-link>(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)</li>
                </ul>
              </div>
            </div>
          </div>
          <h3>文明加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Celts">賽爾特</nuxt-link>：菘藍武士移動速度快+15%。</li>
            </ul>
          </div>
          <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link>能夠提高菘藍武士的生產速度還有加速
                <nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>的研究時間(快25%)。</li>
              <li><nuxt-link to="/civs/Goths">哥德</nuxt-link>：研發科技<nuxt-link to="/techs/Tracking">追縱技術</nuxt-link>、<nuxt-link to="/techs/Arson">縱火</nuxt-link>的時間快20%。</li>
              <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：菘藍武士更不容易被招降。</li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
             <h3><em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em></h3>
            <ul>
              <li>菘藍武士訓練時間為16。</li>
              <li>菘藍武士移動速度為1.03。</li>
              <li>菘藍武士的遠城護甲為0。</li>
            </ul>
            <h3><em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em></h3>
            <ul>
              <li>菘藍武士訓練時間為10。</li>
              <li>菘藍武士移動速度為1.2。</li>
              <li>菘藍武士的遠城護甲為1。</li>
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
            <p>菘藍武士臉上的塗裝早在中世紀之前的1000年皮克特人就曾使用木材作為塗在臉上的顏料，而不是在中世紀時期的蘇格蘭人做的。</p>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>“Woad是在不列顛群島發現的一種植物，可以從中提取藍色色素，賽爾特戰士在戰鬥前用這種色素塗抹自己，讓自己看起來更加可怕並且使他們的敵人感到不安。賽爾特戰士一直在襲擊英國和歐洲的發展地區
              例如，蘇格蘭人最初是愛爾蘭侵略者，他們從英國北部的皮克特人手中奪取的土地最後成為蘇格蘭;當英國人試　著征服居住在中世紀愛爾蘭，威爾士和蘇格蘭的賽爾特人時，英國騎士對賽爾特人來說是一個很頭痛的麻煩，賽爾特人轉而採用游擊戰術，襲擊英國營地，並在英國援軍到達之前撤退;這樣的策略徹底地摧毀了邊界地區的安寧，最著名的菘藍武士是蘇格蘭的威廉華萊士，他不間斷地席吉了英格蘭北部地區十年之久“。</p>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle" style="color: #fff">菘藍武士</div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/WBRSK.jpg" width="45" alt="">
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
              <td class="unit4"><nuxt-link to="/civs/Celts">賽爾特</nuxt-link>
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
              <td class="unit4">10秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle2" style="color: #fff">成本</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">食物</td>
              <td class="unit4">65</td>
            </tr>
            <tr>
              <td class="unit3">黃金</td>
              <td class="unit4">25</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle2" style="color: #fff">數據</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">65/80(精銳)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊</td>
              <td class="unit4">8/13(精銳)(近戰)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊加成</td>
              <td class="unit4">對<nuxt-link to="/armor/Armor_Class_standard_building">標準建築</nuxt-link>+2/+3(精銳)
                <br/>對<nuxt-link to="/armor/Armor_Class_Eagle_Warrior">鷹勇士</nuxt-link>+2/+3(精銳)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊速度</td>
              <td class="unit4">2.03</td>
            </tr>
            <tr>
              <td class="unit3">近防</td>
              <td class="unit4">0</td>
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
              <td class="unit4">1.38</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">3/5(精銳)</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><nuxt-link to="">單位演變</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">升級到</td>
              <td class="unit4">
                <img class="gg" src="~assets/WBRSK.jpg" width="45" alt="">精銳菘藍武士</td>
            </tr>
            <tr>
              <td class="unit3">升級成本</td>
              <td class="unit4">
                <img class="gg" src="~assets/Elite-unique-research.jpg" alt="">1000食物800黃金</td>
            </tr>
            <tr>
              <td class="unit3">升級時間</td>
              <td class="unit4">45秒</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        </div>
        <div class="col-md-12">
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-4"> <nuxt-link to="/img/Woadraider.png"><img class="imgn hg" width="180" src="~assets/Woadraider.png" alt=""></nuxt-link> 
              <div
              class="lightbox-caption" style="width:220px" >
                <p><em>一群菘藍武士。</em>
                </p>
            </div>
          </div>
          <div class="col-md-4"> <nuxt-link to="/img/Elite_Woad_Raider.jpg"><img class="imgn hg" width="200" src="~assets/Elite_Woad_Raider.jpg" alt=""></nuxt-link> 
            <div
            class="lightbox-caption" style="width:185px" >
              <p><em>精銳菘藍武士。</em>
              </p>
          </div>
        </div>
        <div class="col-md-4"> <nuxt-link to="/img/Woad.jpg"><img class="imgn hg" width="200" src="~assets/Woad.jpg" alt=""></nuxt-link> 
          <div
          class="lightbox-caption" style="width:185px" >
            <p><em>菘藍武士3D圖。</em>
            </p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="col-md-4"> <nuxt-link to="/img/Woadraiders.png"><img class="imgn hg" width="180" src="~assets/Woadraiders.png" alt=""></nuxt-link> 
          <div
          class="lightbox-caption" style="width:220px" >
            <p><em>歷史記載的菘藍武士手稿。</em>
            </p>
        </div>
      </div>
      <div class="col-md-4"> <nuxt-link to="/img/Pictish_Warrior.jpg"><img class="imgn hg" width="200" src="~assets/Pictish_Warrior.jpg" alt=""></nuxt-link> 
        <div
        class="lightbox-caption" style="width:185px" >
          <p><em>畫家筆下的皮克特人可能是菘藍武士的發想。</em>
          </p>
      </div>
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