<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
          <h1>騎士</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>騎士是城堡時代兵種，可訓練於馬廄，在城堡時代最優勢的兵種之一，也是最廣泛使用的兵種，對於僧侶、駱駝、長槍兵較劣勢。</p>
            <p><strong>  不可生產文明:</strong>  <a href="/civs/Aztecs">阿茲特克</a>、<a href="/civs/Incas">印加</a>、
              <a
              href="/civs/Mayans">馬雅</a>、<a href="/civs/Indians">印度</a>。</p>
          </div>
          <h3>戰術</h3>
          <div class="hrn1"></div>
          <div class="n1">騎士在城堡時代是最常出現的兵種之一，憑藉其高攻擊力，生命值和防禦力，可以輕鬆抵擋大部分兵種。也是主力兵種，俗稱的馬爆的馬就是指騎士。</div>
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
              <td class="tta4"><a href="/units/Infantry_Units">步兵</a>、<a href="/units/Archer_Units">弓兵</a>、
                <a
                href="/units/Villager">村民</a>、<a href="/units/Siege_Weapons">攻城器單位</a>、<a href="/Cavalry_units/Archer">馬弓騎兵</a>、
                  <a
                  href="/units/Light_Cavalry">輕騎兵</a>。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><a href="/units/Boyar">貴族鐵騎</a>、<a href="/units/Pikeman">重裝長槍兵</a>、<a href="/units/Kamayuk">槍隊長</a>、
                <a
                href="/units/Berserk">狂戰士</a>、<a href="/Genoese_units/Crossbowman">熱那亞弩手</a>、<a href="/Teutonic_units/Knight">條頓武士</a>、
                  <a
                  href="/units/Mameluke">奴隸兵</a>、<a href="/units/Camel">駱駝騎兵</a>、<a href="/units/Monk">僧侶</a>和<a href="/War_unitsanimal/Elephant">戰象</a>。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">生命值</td>
              <td class="tta4">
                <img class="gg" src="~assets/Bloodlines.png" width="30" alt=""><a href="/techs/Bloodlines">品種</a>(+20)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攻擊力</td>
              <td class="tta4">
                <img class="gg" src="~assets/Forging.jpg" width="30" alt=""><a href="/techs/Forging">鍛造</a>(+1)
                <br/>
                <img class="gg" src="~assets/Ironcasting.jpg" width="30" alt=""><a href="/techs/Iron_Casting">鑄造</a>(+1)
                <br/>
                <img class="gg" src="~assets/Blastfurnace.jpg" width="30" alt=""><a href="/techs/Blast_Furnace">鼓風爐</a>(+2)
                <br/>
                <img src="~assets/Unique-tech.jpg" class="gg" alt=""><a href="/techs/Farimba">驃悍精神</a>：馬廄單位攻擊+5。<a href="/civs/Malians">馬利</a>限定
                <br/>
                <img src="~assets/Unique-tech.jpg" class="gg" alt=""><a href="/techs/Manipur_Cavalry">曼尼普爾騎兵</a>:騎兵對<a href="/armor/Armor_Class_Building">建築</a>和
                <a
                href="/armor/Armor_Class_Standard_Building">標準建築</a>攻擊+3。<a href="/civs/Burmese">緬甸</a>限定</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">防禦</td>
              <td class="tta4">
                <img class="gg" src="~assets/Scalebardingarmor.jpg" width="30" alt=""><a href="/techs/Scale_Barding_Armor">騎兵鱗甲</a>(+1/+1)
                <br/>
                <img class="gg" src="~assets/Chainbardingarmor.jpg" width="30" alt=""><a href="/techs/Chain_Barding_Armor">騎兵鎖甲</a>(+1/+1)
                <br/>
                <img class="gg" src="~assets/Platebardingarmor.jpg" width="30" alt=""><a href="/techs/Plate_Barding_Armor">騎兵板甲</a>(+1/+2)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">速度</td>
              <td class="tta4">
                <img class="gg" src="~assets/Husbandry.jpg" width="30" alt=""><a href="/techs/Husbandry">畜牧培育</a>(+10%)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">招降抵抗</td>
              <td class="tta4">
                <img class="gg" src="~assets/Faith.jpg" alt=""><a href="/techs/Faith">忠誠信仰</a>
                <br/>
                <img class="gg" src="~assets/Heresy.png" width="30" alt=""><a href="/techs/Heresy">異端邪說</a> 
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">生產速度</td>
              <td class="tta4">
                <img class="gg" src="~assets/Conscription.jpg" width="30" alt=""><a href="/techs/Conscription">徵兵制度</a>(+33%)
                <br/>
                <img class="gg" src="~assets/CastleAgeUnique.png" alt=""><a href="/techs/Chivalry">騎士精神</a>：馬廄工作速率快40%。<a href="/civs/Franks">法蘭克</a>限定</td>
            </tr>
          </table>
          <h3>剋騎士的單位與建築</h3> 
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對騎士的額外傷害，按照傷殺力排列。
            <div class="n1">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+32攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HalberdierIcon.jpg" alt=""><a href="/units/Halberdier">戟兵</a>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+22攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/PikemanIcon.jpg" alt=""><a href="/units/Pikeman">重裝長槍兵</a>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+18攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HeavyCamelIcon.jpg" alt=""><a href="/Heavy_units/Camel">重裝駱駝騎兵</a>→
                      <img class="gg" src="~assets/ImperialCamelIcon.jpg"
                      alt=""> <a href="/Imperial_units/Camel">帝王駱駝騎兵</a>(帝王駱駝騎兵是<a href="/indians.php">印度</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+15攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/SpearmanIcon.jpg" alt=""><a href="/units/Spearman">長槍兵</a>
                    </li>
                    <li>
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg" alt=""><a href="/units/Cannon_Galleon">火砲戰船</a>→
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg"
                      alt=""> <a href="/Elite_units/Cannon_Galleon">精銳火砲戰船</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+12攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Saracenmamluk_icon.png" alt=""><a href="/units/Mameluke">精銳奴隸兵</a>(<a href="/civs/Saracens">薩拉森</a>限定)</li>
                    <li>
                      <img class="gg" src="~assets/Kamayuk_Icon.jpg" alt=""><a href="/units/Kamayuk">精銳槍隊長</a>(<a href="/civs/Incas">印加</a>限定)</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CamelIcon.jpg" alt=""><a href="/units/Camel">駱駝騎兵</a>
                    </li>
                    <li>
                      <img class="gg" src="~assets/Saracenmamluk_icon.png" alt=""><a href="/units/Mameluke">奴隸兵</a>(<a href="/civs/Saracens">薩拉森</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+8攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Kamayuk_Icon.jpg" alt=""><a href="/units/Kamayuk">槍隊長</a>(<a href="/civs/Incas">印加</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+7攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/New_Genoese_Crossbowman.png" alt=""><a href="/Genoese_units/Crossbowman">精銳熱那亞弩手</a>(<a href="/civs/Italians">義大利</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+5攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/New_Genoese_Crossbowman.png" alt=""><a href="/Genoese_units/Crossbowman">熱那亞弩手</a>(<a href="/civs/Italians">義大利</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+4攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/EliteEagleWarriorIcon.jpg" alt=""><a href="/Elite_units/Eagle_Warrior">精銳鷹勇士</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+3攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/EagleWarriorIcon.jpg" alt=""><a href="/units/Eagle_Warrior">鷹勇士</a> 
                    </li>
                  </ul>
                </div>
              </div>
            </div>以下技術可讓以下單位對騎士有額外攻擊力
            <div class="n1">
              <img class="gg" src="~assets/CastleAgeUnique.png" width="22" alt=""> <a href="/techs/Chieftains">酋長</a> 
              <div width="22" style="margin:12px 0px;"><strong>+5攻擊</strong>(<a href="/civs/Vikings">維京</a>限定)</div>
              <ul>
                <li>
                  <img class="gg" src="~assets/MilitiaIcon.jpg" alt=""><a href="/units/Militia">民兵</a>→
                  <img class="gg" src="~assets/ManAtArmsIcon.jpg"
                  width="22" alt=""> <a href="/units/Man-at-Arms">裝甲步兵</a>→
                  <img class="gg" src="~assets/LongswordsManIcon.jpg"
                  alt=""> <a href="/units/Long_Swordsman">長劍兵</a>→
                  <img class="gg" src="~assets/2HandedswordsmanIcon.jpg"
                  alt=""> <a href="/units/Two-Handed_Swordsman">雙手劍兵</a>→
                  <img class="gg" src="~assets/ChampionIcon.jpg"
                  alt=""> <a href="/units/Champion">劍兵勇士</a> 
                </li>
                <li>
                  <img class="gg" src="~assets/SpearmanIcon.jpg" alt=""><a href="/units/Spearman">長槍兵</a>→
                  <img class="gg" src="~assets/PikemanIcon.jpg"
                  alt=""> <a href="/units/Pikeman">重裝長槍兵</a> 
                </li>
                <li>
                  <img class="gg" src="~assets/VBRSK.jpg" alt=""><a href="/units/Berserk">狂戰士</a>→
                  <img class="gg" src="~assets/VBRSK.jpg" alt=""> <a href="/units/Berserk">精銳狂戰士</a>(<a href="/civs/Vikings">維京</a>限定)</li>
                <li>
                  <img class="gg" src="~assets/CondottieroNewIcon.jpg" alt=""> <a href="/units/Condottiero">傭兵</a>(如果和<a href="/civs/Italians">義大利</a>同盟的話)</li>
              </ul>
            </div>
          </div>
          <h3>文明加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><a href="/civs/Berbers">柏柏</a>：城堡/帝王時代便宜15%/20%。</li>
              <li><a href="/civs/Burmese">緬甸</a>：<a href="/techs/Faith">忠誠信仰</a>便宜50%。</li>
              <li><a href="/civs/Celts">賽爾特</a>：只要在一個賽爾特單位的視野下，羊群不會被牽走</li>
              <li><a href="/civs/Chinese">中國</a>：對騎士有利的科技研發在城堡/帝王時代各便宜15%/20%。</li>
              <li><a href="/civs/Franks">法蘭克</a>：騎士血量多20%，研發<a href="/techs/Chivalry">騎士精神</a>後，
                <a
                href="/techs/Husbandry">畜牧技術</a>的研發速度和升級<a href="/units/Cavalier">騎兵</a>的時間都加快40%</li>
              <li><a href="/civs/Magyars">馬扎爾</a>：免費<a href="/techs/Forging">鍛造</a>、<a href="/techs/Iron_Casting">鑄造</a>和
                <a
                href="/techs/Blast_Furnace">鼓風爐</a>科技</li>
              <li><a href="/civs/Portuguese">葡萄牙</a>：騎士黃金成本便宜15%。</li>
              <li><a href="/civs/Spanish">西班牙</a>：兵工廠升級科技免黃金</li>
              <li><a href="/civs/Vietnamese">越南</a>：徵兵制度免費。</li>
            </ul>
          </div>
          <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><a href="/civs/Berbers">柏柏</a>：<a href="/techs/Kasbah">聚居堡壘</a>能夠加速<a href="/techs/Conscription">徵兵制度</a>的研究時間(快25%)。</li>
              <li><a href="/civs/Franks">法蘭克</a>：騎士+2視野。</li>
              <li><a href="/civs/Huns">匈奴</a>：騎士生產效率和升級快20%，<a href="/techs/Bloodlines">品種</a>與
                <a
                href="/techs/Husbandry">畜牧技術</a>研發快20%。</li>
              <li><a href="/civs/Persians">波斯</a>：騎士對<a href="/armor/Armor_Class_Archer">射手類</a>+2攻擊。</li>
              <li><a href="/civs/Teutons">條頓</a>：騎士對僧侶抵抗力更強。</li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
             <h3><em><a href="/games/aoc">征服者入侵</a></em></h3> 
            <ul>
              <li><a href="/techs/Bloodlines"></a>血統引進。</li>
              <li><a href="/techs/Heresy"></a>異端邪說引進。</li>
            </ul>
             <h3><em><a href="/games/aof">失落的帝國</a></em></h3> 
            <ul>
              <li><a href="/civs/Franks">法蘭克</a>：引進<a href="/techs/Chivalry">騎士精神</a>。</li>
            </ul>
             <h3><em><a href="/games/ak">非洲王朝</a></em></h3> 
            <ul>
              <li><a href="/civs/Berbers">柏柏</a>：一開始騎士在城堡/帝王時代都是便宜20%。在4.8版本後更改為在城堡/帝王時代各便宜15%/20%。。</li>
            </ul>
          </div>
          <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>儘管騎士在遊戲中配備著劍，但他們在馬背上作戰的主要武器是長矛。騎兵隊最初是使用長矛作戰直到後來換成劍。</li>
              <li>騎士是遊戲中唯四沒有任何攻擊加成的單位(剩下的是<a href="/units/Militia">民兵</a>、<a href="/units/Boyar">貴族鐵騎</a>和
                <a
                href="/units/Turtle_Ship">龜甲船</a>)。</li>
            </ul>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>“騎士是一名穿著裝甲戰士，想在中世紀社會成為騎士必須在訓練和地位上達到一定的最低限度。當成為騎士時，領主會賦予他們土地，以換取每年的數個禮拜為領主辦事，通過用這種方式劃出土地，一個高級領主可以在需要時召喚一定的士兵為他作戰。騎士們大部分時間都是為戰鬥而訓練，他們在比賽中練習戰爭技巧，並為了榮耀和獎賞而戰。因為很少有人能夠承擔戰爭的裝備和訓練，騎士們在中世紀的戰場上佔據了幾個世紀的統治地位，以長矛兵，長弓兵，弩手和火槍兵為代表的新戰術的演變，使得重騎兵的統治力最後終結。“</p>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">騎士</div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/KnightIcon.jpg" alt="" width="45">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">單位介紹</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">類型</td>
              <td class="unit4"><a href="/units/Cavalry_Units">騎兵</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4">請看介紹</td>
            </tr>
            <tr>
              <td class="unit3">時代</td>
              <td class="unit4">
                <img class="gg" src="~assets/Castle-age-reseach.jpg" alt=""><a href="/techsage/Castle_Age">城堡時代</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練於</td>
              <td class="unit4">
                <img class="gg" class="gg" src="~assets/Stable-logo.jpg" alt=""><a href="/building/Stable">馬廄</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練時間</td>
              <td class="unit4">30秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">成本</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">食物</td>
              <td class="unit4">60</td>
            </tr>
            <tr>
              <td class="unit3">黃金</td>
              <td class="unit4">75</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">數據</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">100</td>
            </tr>
            <tr>
              <td class="unit3">攻擊</td>
              <td class="unit4">10(近戰)</td>
            </tr>
            <tr>
              <td class="unit3">攻速</td>
              <td class="unit4">1.83</td>
            </tr>
            <tr>
              <td class="unit3">近防</td>
              <td class="unit4">2</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">2</td>
            </tr>
            <tr>
              <td class="unit3">防禦類型</td>
              <td class="unit4"><a href="/armor/Armor_Class_Cavalry">騎兵</a>
              </td>
            </tr>
            <tr>
              <tr>
                <td class="unit3">跑速
                </td>
                <td class="unit4">1.35</td>
              </tr>
              <tr>
                <td class="unit3">視野</td>
                <td class="unit4">4</td>
              </tr>
              <tr>
                <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                  <div class="unititle2">單位演變</div>
                </td>
              </tr>
              <tr>
                <td class="unit3">升級到</td>
                <td class="unit4">
                  <img class="gg" src="~assets/CavalierIcon.jpg" alt=""><a href="/units/Cavalier">騎兵</a>
                </td>
              </tr>
              <tr>
                <td class="unit3">升級成本</td>
                <td class="unit4">
                  <img class="gg" src="~assets/Cavalier-research.jpg" alt="">300食物300黃金</td>
              </tr>
              <tr>
                <td class="unit3">升級時間</td>
                <td class="unit4">100秒</td>
              </tr>
          </table>
        </div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-12">
            <div class="col-md-4"> <a href="/img/Knightline.png"><img class="imgn hg" src="~assets/Knightline.png" alt=""></a> 
              <p><em>騎士系。</em>
              </p>
            </div>
            <div class="col-md-4"> <a href="/img/Knight.png"><img class="imgn hg" src="~assets/Knight.png" alt=""></a> 
              <p><em>一群騎士。</em>
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