<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>火槍兵</h1> 
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>火槍兵，是一個強大的火藥單位，可以在<nuxt-link to="/techsage/Imperial_Age">帝王時代</nuxt-link>研發<nuxt-link to="/techs/Chemistry">化學</nuxt-link>後於
              <nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>訓練。他擁有強大的攻擊力但命中率不高且射速緩慢，是可怕的<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>殺手。</p>
          </div>
          <h3>文明可訓練與否</h3> 
          <div class="hrn1"></div>
          <div class="row">
            <div class="col-md-12">
              <div class="n1">
                 <h4><strong><span class="glyphicon glyphicon-ok okc" aria-hidden="true"></span><span class="" style="margin-left: 2px;">可訓練</span></strong></h4>  <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、 <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、 <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、
                <nuxt-link to="/civs/Goths">哥德</nuxt-link>、 <nuxt-link to="/civs/Indians">印度</nuxt-link>、 <nuxt-link to="/civs/Italians">義大利</nuxt-link>、
                  <nuxt-link to="/civs/Japanese">日本</nuxt-link>、 <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、 <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、 <nuxt-link to="/civs/Malians">馬利</nuxt-link>、
                    <nuxt-link to="/civs/Persians">波斯</nuxt-link>、 <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、 <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
                      <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、 <nuxt-link to="/civs/Teutons">條頓</nuxt-link>、 <nuxt-link to="/civs/Turks">土耳其</nuxt-link>。</div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="n1">
                 <h4><strong><span class="glyphicon glyphicon-remove noc" aria-hidden="true"></span><span class="" style="margin-left: 2px;">不可訓練</span></strong></h4>  <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、 <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、 <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
                <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>、 <nuxt-link to="/civs/Chinese">中國</nuxt-link>、 <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
                  <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、 <nuxt-link to="/civs/Incas">印加</nuxt-link>、 <nuxt-link to="/Magyar.php">馬札爾</nuxt-link>、 <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
                    <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、 <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、 <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、 <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>、
                      <nuxt-link to="/civs/Vikings">維京</nuxt-link>。</div>
            </div>
          </div>
           <h3>戰術</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <p>雖然火槍兵手拿的是火器，卻也被視為弓箭手，所以 <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>和 <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>對火槍兵也有加成傷害，哥德衛隊的高遠防也可以防禦火槍兵的攻擊。而身為火藥單位的他，也會被
              <nuxt-link to="/units/Condottiero">傭兵</nuxt-link>所剋制。作為一個步行遠程單位，也怕<nuxt-link to="/units/Onager">投石車</nuxt-link>與<nuxt-link to="/units/Scorpion">弩砲</nuxt-link>的攻擊，遇上
                <nuxt-link to="/units/Watch_Tower">箭塔</nuxt-link>和<nuxt-link to="/building/Castle">城堡</nuxt-link>也束手無策。</p>
            <p>值得一提的是，他對步兵的+10攻擊，對傭兵無效。</p>
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
              <td class="tta4"><nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>、<nuxt-link to="/units/Scorpion">弩炮</nuxt-link>、<nuxt-link to="/units/Onager">投石車</nuxt-link>、重型
                <nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link>、<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>、<nuxt-link to="/units/Condottiero">傭兵</nuxt-link>。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攻擊範圍</td>
              <td class="tta4">
                <img src="~assets/Unique-tech.jpg" class="gg" alt=""><nuxt-link to="/techs/Shatagni">印度火槍</nuxt-link>(+1，<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">命中率</td>
              <td class="tta4">
                <img class="gg" src="~assets/Unique-tech.jpg" width="30" alt=""><nuxt-link to="/techs/Arquebus">火繩槍</nuxt-link>:火藥單位對移動目標的命中率提升，<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">防禦</td>
              <td class="tta4">
                <img class="gg" src="~assets/Paddedarcherarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Padded_Archer_Armor">弓兵布甲</nuxt-link>(+1/+1)
                <br/>
                <img class="gg" src="~assets/Leatherarcherarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Leather_Archer_Armor">弓兵皮甲</nuxt-link>(+1/+1)
                <br/>
                <img class="gg" src="~assets/Ringarcherarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Ring_Archer_Armor">弓兵環甲</nuxt-link>(+1/+2)</td>
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
          <h3>剋火槍兵的單位</h3>
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對火槍兵的額外傷害，按造傷殺力排列。
            <div class="n1">
              <div class="row">
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+15攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg" alt=""> <nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>→
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg"
                      alt=""> <nuxt-link to="/Elite_units/Cannon_Galleon">精銳火砲戰船</nuxt-link>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+10攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HuskarlIcon.jpg" alt=""> <nuxt-link to="/units/Huskarl">精銳哥德衛隊</nuxt-link>(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" style="margin: 2px;" src="~assets/CondottieroNewIcon.jpg"
                      alt=""><nuxt-link to="/units/Condottiero">傭兵</nuxt-link>(<nuxt-link to="/civs/Italians">義大利</nuxt-link>和同盟限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+6攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HuskarlIcon.jpg" alt=""> <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+5攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/GenitourIcon.jpg" alt=""> <nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link>(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)</li>
                    <li>
                      <img class="gg" src="~assets/Imperialskirmishericon.png" alt=""> <nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link>(<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>和同盟限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+4攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/EliteSkirmisherIcon.jpg" alt=""> <nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/GenitourIcon.jpg" alt=""> <nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+3攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/SkirmisherIcon.jpg" alt=""> <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>
                    </li>
                  </ul>
                </div>
              </div>
            </div>團隊加成:<nuxt-link to="/civs/Persians">波斯</nuxt-link>在團隊加成裡，給予以下單位+2額外攻擊vs<nuxt-link to="/units/Archer_Units">射手單位</nuxt-link>:
            <div
            class="n1">
              <div class="row">
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+2攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/KnightIcon.jpg" alt=""> <nuxt-link to="/units/Knight">騎士</nuxt-link>→
                      <img class="gg" src="~assets/CavalierIcon.jpg"
                      alt=""> <nuxt-link to="/units/Cavalier">騎兵</nuxt-link>→
                      <img class="gg" src="~assets/PaladinIcon.jpg"
                      alt=""> <nuxt-link to="/units/Paladin">遊俠</nuxt-link> 
                  </ul>
                </div>
              </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li><nuxt-link to="/civs/Aztecs">義大利</nuxt-link>：火槍兵便宜20%。</li>
            <li><nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>：火槍兵的黃金成本少15%。</li>
            <li><nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：兵工廠升級科技免黃金。火槍兵的開火速度快18%。</li>
            <li><nuxt-link to="/civs/Turks">土耳其</nuxt-link>：火槍兵HP+25%。<nuxt-link to="/techs/Chemistry">化學</nuxt-link>免費。</li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link>能夠加速<nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>的研究時間(快25%)</li>
            <li><nuxt-link to="/civs/Britons">不列顛</nuxt-link>：火槍兵生產快20%。研發<nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>速度快20%。</li>
            <li><nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link to="/techs/Chemistry">化學</nuxt-link>和<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>快80%。</li>
            <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：火槍兵更不容易被招降。</li>
            <li><nuxt-link to="/civs/Turks">土耳其</nuxt-link>:火槍兵訓練速度快20％。</li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3><em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em></h3>
          <ul>
            <li>訓練火槍兵前還有一個火槍兵的科技需要研發。</li>
            <li>擁有55％的命中率。</li>
            <li>火槍兵對<nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>有+8的額外攻擊。</li>
            <li><nuxt-link to="/civs/Turks">土耳其</nuxt-link>:火槍兵的HP+50％。</li>
          </ul>
          <h3><em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em></h3>
          <ul>
            <li>訓練火槍兵只要研發化學就好，不用額外的科技。</li>
            <li>現在命中率達65％。</li>
            <li>對步兵額外攻擊+10。</li>
            <li>火槍兵對<nuxt-link to="/armor/Armor_Class_Spearman">槍兵</nuxt-link>有+1攻擊。</li>
            <li>火槍兵對<nuxt-link to="/armor/Armor_Class_Ram">衝撞車</nuxt-link>+2攻擊。</li>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
            <li><nuxt-link to="/civs/Turks">土耳其</nuxt-link>:火槍兵現在的HP+25％。</li>
          </ul>
          <h3><em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em></h3>
          <ul>
            <li><nuxt-link to="/civs/Italians">義大利</nuxt-link>:火槍兵成本便宜15％。</li>
          </ul>
          <h3><em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em></h3>
          <ul>
            <li><nuxt-link to="/civs/Italians">義大利</nuxt-link>:在4.8版本後，火槍兵便宜20％。</li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>儘管中國是第一個發明火槍的文明，但因為平衡的目的，無法使用火槍兵。且火藥為中國三大發明。</li>
            <li>印加人即使在所有科技下也無法訓練火槍兵，因為投石手取代了火槍兵的生產格子。</li>
            <li>所有有火槍兵的文明都有火砲，除了日本。</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle"><nuxt-link to="#">火槍兵</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/HandCannoneerIcon.jpg" width="45" alt="">
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
            <td class="unit4"><nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">請看介紹</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/Imperial-age-research.jpg" alt=""><nuxt-link to="/techsage/Imperial_Age">帝王時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img class="gg" width="25px" src="~assets/Archery-range-logo.jpg" alt=""><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">34秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">肉</td>
            <td class="unit4">45</td>
          </tr>
          <tr>
            <td class="unit3">金</td>
            <td class="unit4">50</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">35</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">17(遠程)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">+10對<nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
              <br/>+2對 <nuxt-link to="/armor/Armor_Class_Ram">衝撞車</nuxt-link>
              <br/>+1對<nuxt-link to="/armor/Armor_Class_Spearman">槍兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>
            </td>
            <td class="unit4">3.49</td>
          </tr>
          <tr>
            <td class="unit3">開火間隔</td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">65%</td>
          </tr>
          <tr>
            <td class="unit3">投射物速度</td>
            <td class="unit4">5.5</td>
          </tr>
          <tr>
            <td class="unit3">近防
            </td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/Armor_Class.php">防禦類型</nuxt-link>
            </td>
            <td class="unit4"><nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link>
              <br/> <nuxt-link to="/armor/Armor_Class_Gunpowder_Unit">火藥單位</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速
            </td>
            <td class="unit4">0.96</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link>
            </td>
            <td class="unit4">9</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="#">單位演變</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">所需要的科技</td>
            <td class="unit4">
              <img class="gg" src="~assets/Chemistry.jpg" alt=""><nuxt-link to="/techs/Chemistry">化學</nuxt-link>
            </td>
          </tr>
        </table>
        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4"> <nuxt-link to="/img/Handcannoneer.png"><img class="imgn hg" src="~assets/Handcannoneer.png" alt=""></nuxt-link> 
            <p><em>一群火槍兵</em>
            </p>
          </div>
          <div class="col-md-4"> <nuxt-link to="/img/Hand_Cannon.png"><img class="imgn hg" src="~assets/Hand_Cannon.png" alt=""></nuxt-link> 
            <p><em>元朝遺留下的火炮</em>
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