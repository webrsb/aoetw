<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>城堡</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <b>城堡</b>能夠在<nuxt-link to="/techs/age/Castle_Age"
            >城堡時代</nuxt-link
          ><nuxt-link to="/building">建築</nuxt-link
          >，在遊戲中期及後期是非常重要的建築，提供強大的防禦和獨特的技術與單位。
          <br />不能被<nuxt-link to="/elements/Conversion">招降</nuxt-link
          >、<nuxt-link to="/elements/Garrison">駐軍</nuxt-link>可達20人。
          <br />弒君模式遊戲中，遊戲開始時，每位玩家都會在<nuxt-link
            to="/building/Town_Center"
            >城鎮中心</nuxt-link
          >附近擁有一座城堡。<br />不同的<nuxt-link to="/civs">文明</nuxt-link
          >城堡的建築風格會有不同
        </div>
        <h3>可生產單位與可研發科技</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-6">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Castle_Age"></nuxt-link>城堡時代
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/elit_unique_unit.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/PetardIcon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/units/Petard">炸藥桶</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/unique_tech.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/untech">城堡特殊科技</nuxt-link>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Imperial_Age"></nuxt-link>帝王時代
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/elit_unique_unit.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/units/Unique_Unit">精銳特殊單位</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/TrebuchetPackedIcon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/unique_tech_imperial.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/untech">帝王特殊科技</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/hoardings.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Hoardings">圍牆</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/sappers.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Sappers">兵工學</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/conscription.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/spies_treason.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Spies">間諜</nuxt-link>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>：<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >訓練速度提高10％。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：研究<nuxt-link
                to="/techs/Herbal_Medicine"
                >草藥治療</nuxt-link
              >便宜50％。
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>：<nuxt-link
                to="/techs/age/Dark_Age"
                >黑暗</nuxt-link
              >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >的城堡HP分別增加10%/20%/30%/40%。<nuxt-link
                to="/techs/Town_Watch"
                >城鎮瞭望</nuxt-link
              >免費。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對城堡有利的科技成本在城堡/帝王時代分別便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>：城堡便宜25％。
            </li>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link>：城堡便宜15％。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link
              >：城鎮瞭望和<nuxt-link to="/techs/Town_Patrol"
                >城鎮巡邏</nuxt-link
              >研發在城堡/帝王時代分別快15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：城堡單位的黃金成本便宜15%。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">朝鮮</nuxt-link
              >：建築速度提高了33％。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：建築速度提高了30％。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>：<nuxt-link
                to="/techs/Murder_Holes"
                >近射孔</nuxt-link
              >、免費。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>：<nuxt-link
                to="/techs/Conscription"
                >徵兵技術</nuxt-link
              >免費。
            </li>
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
              >可提高城堡的工作效率25%。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：<nuxt-link
                to="/building/University"
                >學院</nuxt-link
              >裡對城堡有加成的<nuxt-link to="/techs">科技</nuxt-link
              >研發速度快80%。
            </li>
            <li>
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>：<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >提升城堡攻擊的科技研發快50％。
            </li>
            <li>
              <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link>：<nuxt-link
                to="/techs/Herbal_Medicine"
                >草藥治療</nuxt-link
              >研發快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Cumans">庫曼</nuxt-link>：研發<nuxt-link
                to="/techs/Cuman_Mercenaries"
                >庫曼傭兵</nuxt-link
              >後，隊伍成員能在城堡免費生產10名精銳<nuxt-link
                to="/units/Kipchaks"
                >欽察</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h3>戰術和建築位置</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              城堡位置有時攸關整場勝負，請謹慎思考，一般來說如果是生產較慢速的城堡兵如<nuxt-link
                to="/units/Longbowman"
                >不列顛長弓兵</nuxt-link
              >與<nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link
              >，城堡可蓋前線，如果是快速移動的部隊則盡可能蓋自己家防守，如：<nuxt-link
                to="/units/Plumed_Archer"
                >馬雅羽毛箭射手</nuxt-link
              >、<nuxt-link to="/units/Conquistador">西班牙征服者</nuxt-link
              >、<nuxt-link to="/units/Arambai">緬甸飛鏢騎兵</nuxt-link
              >。<nuxt-link to="/civs/Chinese">中國</nuxt-link
              >高手大屌哥就曾因為城堡蓋錯位置，輸了整場比賽。當然影響建築位置的原因很多，這只是其中一點。
            </li>
            <li>
              通常來說，建立在高地的城堡會比低地的城堡更加難以攻陷。應該說城堡請一定要蓋在高地。
            </li>
            <li>
              <nuxt-link to="/armor/Armor_Class_Ram">衝撞車系</nuxt-link
              >能對城堡造成毀滅性破壞，部署你的近戰單位來保護城堡，在城堡時代僵持時，最好在城堡後面出<nuxt-link
                to="/units/Mangonel"
                >投石車</nuxt-link
              >以防大量<nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link
              >來襲。
            </li>
            <li>
              <nuxt-link to="/units/Trebuchet">投石機</nuxt-link
              >是城堡最大的威脅，善用你的<nuxt-link to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >去摧毀正在攻擊的投石機。
            </li>
            <li>
              城堡是非常強大的防禦建築，但同時也耗費高昂，在市場買進<nuxt-link
                to="/resource/Stone"
                >石頭</nuxt-link
              >的費用非常不划算，所以，封鎖敵方的石頭來源就能制止敵方建築城堡。
            </li>
            <li>
              城堡通常會建設在基地外圍，作為圍牆的一部分保護基地內的生產單位。
            </li>
            <li>
              你也可以將城堡建設在基地內，以防止敵人的快速部隊繞過外圍防禦工事進入基地屠殺生產單位。
            </li>
            <li>
              當有經濟優勢時，選擇在敵方的資源點附近建設城堡也是不錯的選擇，但是要注意保護你的<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >，讓他們不在城堡還沒建造起來前就被殺死。
            </li>
            <li>
              <nuxt-link to="/maps/Rivers">河流</nuxt-link
              >地圖的城堡通常建設在各河道的交叉點附近，以制止敵方<nuxt-link
                to="/units/Naval_Vessels"
                >船艦</nuxt-link
              >入侵。
            </li>
          </ul>
        </div>
        <h3>箭數</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            城堡可以根據駐紮單位來提升射箭數量，沒有任何駐紮時可以射出4支箭。每支箭造成11傷害(根據被傷害單位<nuxt-link
              to="/armor"
              >遠程護甲</nuxt-link
            >減少)。
          </p>
          <p>以下列出駐紮達最大時，不同單位提供的箭數量。</p>
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td>單位類型</td>
              <td>單位數量</td>
              <td>箭數</td>
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/VillagerMaleIcon.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/units/Villager">村民</nuxt-link>
              </td>
              <td class="tta2">20</td>
              <td class="tta3">14(額外9)</td>
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/ArcherIcon.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/units/Archer">弓兵</nuxt-link>
              </td>
              <td class="tta2">20</td>
              <td class="tta3">12(額外7)</td>
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/CrossbowmanIcon.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>
              </td>
              <td class="tta2">20</td>
              <td class="tta3">14(額外9)</td>
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/ArbalestIcon.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/units/Arbalester">強弩兵</nuxt-link
                ><img
                  class="gg"
                  src="~assets/CavalryArcherIcon.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>
              </td>
              <td class="tta2">20</td>
              <td class="tta3">15(額外10)</td>
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/HandCannoneerIcon.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>
              </td>
              <td class="tta2">20</td>
              <td class="tta3">21(額外16)</td>
            </tr>
          </table>

          <nuxt-link to="/civs/Teutons">條頓</nuxt-link>的特殊技術：<strong
            ><nuxt-link to="/techs/Crenellations">砲門垛口</nuxt-link></strong
          >，讓<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
          >駐紮也有增加箭數效果，同種類的步兵駐紮滿20人可以增加7支箭。
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
            <td class="tta1">強勢(容易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Naval_Vessels">船隻</nuxt-link>，<nuxt-link
                to="/units/Archer_Units"
                >弓兵系</nuxt-link
              >，<nuxt-link to="/units/Monk">僧侶</nuxt-link>，虛弱的近戰單位。
            </td>
          </tr>
          <tr>
            <td class="tta1">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
              >，<nuxt-link to="/units/Tarkan">答剌罕騎兵</nuxt-link
              >，<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>，<nuxt-link
                to="/units/War_Elephant"
                >戰象</nuxt-link
              >，<nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>。
            </td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:20%">
              <nuxt-link to="/elements/Hit_points">生命值</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/masonry.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>(+10%) <br />
              <img
                class="gg"
                src="~assets/architecture.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Architecture">建築學</nuxt-link>(+10%)
              <br />
              <img
                class="gg"
                src="~assets/hoardings.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Hoardings">圍牆</nuxt-link>(+1000)
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/elements/Attack">攻擊力</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/fletching.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Fletching">絕世好箭</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/bodkin_arrow.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bodkin_Arrow">羽箭</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Bracer.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bracer">強力護腕</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/chemistry.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/heated_shot.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Heated_Shot">火箭</nuxt-link
              >(+4，僅對<nuxt-link to="/units/Naval_Vessels">船隻</nuxt-link>)
            </td>
          </tr>
          <tr>
            <td class="tta1">射程</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/fletching.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Fletching">絕世好箭</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/bodkin_arrow.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bodkin_Arrow">羽箭</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Bracer.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bracer">強力護腕</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/murder_holes.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Murder_Holes">近射孔</nuxt-link
              >:消除最小射程<br />
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Crenellations">砲門垛口</nuxt-link
              >(+3，<nuxt-link to="/civs/Teutons">條頓</nuxt-link>限定)
            </td>
          </tr>
          <tr>
            <td class="tta1">射箭頻率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/unique_tech.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Stronghold">堡壘</nuxt-link
              >(+25%，<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>限定)
            </td>
          </tr>
          <tr>
            <td class="tta1">準確度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/ballistics.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link
              >:較易擊中移動目標
            </td>
          </tr>
          <tr>
            <td class="tta1">護甲</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/masonry.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link
              >(+1/+1，+3建築護甲) <br />
              <img
                class="gg"
                src="~assets/architecture.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Architecture">建築學</nuxt-link
              >(+1/+1，+3建築護甲)
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/tower_watch.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>(+4)
              <br />
              <img
                class="gg"
                src="~assets/town_patrol.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link>(+4)
            </td>
          </tr>
          <tr>
            <td class="tta1">建造速度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/treadmill_crane.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Treadmill_Crane">磨坊水車</nuxt-link
              >(+20%)
            </td>
          </tr>
          <tr>
            <td class="tta1">工作效率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/conscription.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link>(+33%)
              <br />
              <img
                class="gg"
                src="~assets/unique_tech.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link
              >(+25%，<nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >與其同盟限定)
            </td>
          </tr>
          <tr>
            <td class="tta1">其他</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Herbalmedicine.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Herbal_Medicine">草藥治療</nuxt-link
              >:駐紮單位治療速度加快<br />
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Crenellations">砲門垛口</nuxt-link
              >:駐紮步兵可增加箭數，條頓限定
            </td>
          </tr>
        </table>

        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>城堡視野+10。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              引入<nuxt-link to="/techs/Herbal_Medicine">草藥治療</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>:引入<nuxt-link
                to="/techs/Crenellations"
                >砲門垛口</nuxt-link
              >。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>城堡現在有11的視野範圍。</li>
            <li>
              <nuxt-link to="/techs/Chemistry">化學</nuxt-link
              >現在會加成城堡的攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>:引入<nuxt-link
                to="/techs/Stronghold"
                >堡壘</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">朝鮮</nuxt-link>:城堡建造速度快33%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>:引入<nuxt-link
                to="/techs/Boiling_Oil"
                >沸油</nuxt-link
              >。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>:移除<nuxt-link
                to="/techs/Boiling_Oil"
                >沸油</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>:<nuxt-link
                to="/techs/Herbal_Medicine"
                >草藥治療</nuxt-link
              >免費。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">朝鮮</nuxt-link
              >:不再擁有城堡建造速度更快的文明加成。
            </li>
          </ul>
          <h3>
            <em>決定版</em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >(37650更新)：軍事單位加快訓練速度由15%減為10%。
            </li>
          </ul>
        </div>
        <h3>建築風格</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>西歐城堡類似英格蘭博丁安城堡正門。</li>
            <li>
              中歐城堡擁有塊狀的結構，有四座高碉樓和兩座矮碉樓，跟英格蘭的羅切斯特城堡有著相似之處(雖然這座城堡屬於西歐)。
            </li>
            <li>東歐的城堡類似於波蘭的馬爾堡城堡，擁有土褐色的外表。</li>
            <li>南歐城堡似乎是建立在意大利帕爾馬的Torrechiara城堡。</li>
            <li>
              東亞城堡與<nuxt-link to="/civs/Japanese">日本</nuxt-link
              >大阪城的天守閣有著相似之處，即使中國、<nuxt-link
                to="/civs/Koreans"
                >朝鮮</nuxt-link
              >與<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>表示黑人問號。
            </li>
            <li>
              美洲城堡近似於<nuxt-link to="/civs/Mayans">馬雅</nuxt-link
              >文明的金字塔神廟祭壇，但不是任何一座現實中的城堡。
            </li>
            <li>
              中東城堡最像敘利亞的<nuxt-link to="/units/Knight">騎士</nuxt-link
              >堡。
            </li>
            <li>
              <nuxt-link to="/civs/Indians">印度</nuxt-link
              >城堡最有可能參考德里紅堡(雖然遊戲中不是紅色的)。
            </li>
            <li>東南亞城堡似乎建立在一個寺廟上，有明顯的佛教風格。</li>
            <li>跟美洲文明一樣，非洲城堡似乎沒有現實建築長那樣的。</li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>城堡是最貴的軍事建築。</li>
            <li>
              東亞文明的城堡擺明就是<nuxt-link to="/resource/Wood"
                >木頭</nuxt-link
              >做的，卻還是要花費650石頭。
            </li>
            <li>
              南美城堡看起來是金字塔神廟祭壇，因為南美文明從來沒有真正建造過城堡來防禦。（歷史中戰俘會被帶上金字塔頂部的神殿，祭師當場剖開「祭品」的胸膛，取出血淋淋還在跳動的心臟獻給神）。
            </li>
            <li>
              由於<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >的城堡缺乏任何能增加<nuxt-link to="/elements/Hit_points"
                >生命值</nuxt-link
              >和護甲的科技（<nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link
              >、<nuxt-link to="/techs/Architecture">建築學</nuxt-link
              >、<nuxt-link to="/techs/Hoardings">圍牆</nuxt-link
              >），可以說是所有文明中最差的城堡。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="ien">
            <em
              >"第一座城堡出現於公元9世紀的歐洲，是對當地主要堡壘的改善。城堡在戰術上是防禦性的，但也具有戰略上的攻擊性。因為如果有防禦妥當它們是難以奪取的。它們也提供了一個安全的基地，武裝部隊可以透過這個基地擴大對地方的控制。一位領主都有他們專屬的武裝部隊效忠於他。十世紀到十一世紀時城堡遍布歐洲，以應付來自北部和東部的軟弱的中央政權和野蠻人的襲擊。國王花費了中世紀的剩餘時間試圖奪回當地領主手中的城堡控制權。十五世紀的<nuxt-link
                to="/units/Bombard_Cannon"
                >火砲</nuxt-link
              >發展終於讓城堡變得不再是那麼無堅不摧。"</em
            >
            <p style="text-align: right;margin-top: 10px;">-世紀帝國II手稿。</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                城堡
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/castle.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">概要</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">軍事<br />防禦建築</td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">200秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Stone">石頭</nuxt-link>
            </td>
            <td class="unit4">650</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">4x4</td>
          </tr>
          <tr>
            <td class="unit3">生命值</td>
            <td class="unit4">4800</td>
          </tr>
          <tr>
            <td class="unit3">駐軍</td>
            <td class="unit4">20</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">
              11(<nuxt-link to="/units/Archer_Units">遠程</nuxt-link>)
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Spearman">長槍兵</nuxt-link>+2
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">8</td>
          </tr>
          <tr>
            <td class="unit3">最小範圍</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">準確性</td>
            <td class="unit4">100%</td>
          </tr>
          <tr>
            <td class="unit3">投射物速度</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">8</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">11</td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>（+8）
              <br /><nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
              <br /><nuxt-link to="/armor/Armor_Class_Castle">城堡</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">11</td>
          </tr>
        </table>

        <div class="thanks">感謝！本頁面由順宗與Dennis協助完成。</div>
      </div>
    </div>
    <div class="col-md-12">
      <h3>圖庫</h3>
      <div class="hrn1"></div>
      <div class="row">
        <div class="col-md-4">
          <gallery
            ><img
              class="imgn hg"
              width="180"
              src="~assets/Castleaokaoc.jpg"
              alt=""
          /></gallery>
          <div class="lightbox-caption" style="width:220px">
            <p>
              <em
                >所有城堡(<nuxt-link to="/games/aok">帝王世紀</nuxt-link
                >和<nuxt-link to="/games/aoc">征服者入侵</nuxt-link
                >資料片)。</em
              >
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <gallery
            ><img class="imgn hg" width="200" src="~assets/Castlehd.jpg" alt=""
          /></gallery>
          <div class="lightbox-caption" style="width:220px">
            <p><em>所有城堡(HD擴充資料片)。</em></p>
          </div>
        </div>
        <div class="col-md-4">
          <gallery
            ><img
              class="imgn hg"
              width="200"
              src="~assets/Spritesheet_castle.jpg"
              alt=""
          /></gallery>
          <div class="lightbox-caption" style="width:185px">
            <p><em>城堡在一般地圖/下雪地圖和駐紮單位時的樣子。</em></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allbuilding' })

export default {
  components: {}
}
</script>
<style></style>
