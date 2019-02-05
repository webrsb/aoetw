<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>投石機</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          投石機或稱巨型投石機是遊戲內最兇猛的遠程攻城武器，於<nuxt-link
            to="/techs/age/Imperial_Age"
            >帝王時代</nuxt-link
          >可以在<nuxt-link to="/building/Castle">城堡</nuxt-link
          >生產。其無與倫比的射程距離，可以摧毀絕大部分的建築。
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            投石機高達１７的射程範圍，只有<nuxt-link to="/civs/Turks"
              >土耳其</nuxt-link
            >的<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>與
            <nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
            >勉強能與之抗衡。它是遊戲中攻擊最高的單位，而且對建築物有很高的加成傷害，但最重要的是它可以在安全的距離內摧毀敵人的城堡與火砲塔等危險的建築，其實也可以拿來打一些難纏的攻城武器，如
            <nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link
            >與火砲，但投石機的準確率很低，拿來戰鬥的場面並不常見。
          </p>
          <p>
            投石機剛從城堡訓練出來時，是以未組裝的型態出現。它必須花費大約７.5秒的時間去組裝，在此時間它無法攻擊或移動。不過如果要移動，可以立即取消組裝。日本人的特殊科技<nuxt-link
              to="/techs/Kataparuto"
              >彈射器</nuxt-link
            >，研發後投石機組裝拆解(快4倍)和開火的速率(快33%)都加快。不過這項科技無法影響英雄單位
            <nuxt-link to="/units/hero/God_s_Own_Sling">神之弓</nuxt-link
            >與<nuxt-link to="/units/hero/Bad_Neighbor">壞鄰居</nuxt-link
            >，可能是因為平衡的關係，但無所謂，你幾乎不會使用到它。
          </p>
          <p>
            投石機可以把樹木摧毀，只是效率非常的慢，投石車能更有效率地完成這項任務，不過<nuxt-link
              to="/civs/Huns"
              >匈奴</nuxt-link
            >與<nuxt-link to="/civs/Turks">土耳其</nuxt-link
            >人沒有中型投石車，要摧毀樹木就必須倚靠投石機了。
          </p>
          <p>
            投石機造價昂貴，且緩慢防禦又低，但是能摧毀路上的所有建築。跟所有攻城武器一樣，村民可以修復它。
          </p>
          <p>
            騎兵是攻擊投石機最好的單位，因為跑得快攻擊又高。因此保護投石機通常會用<nuxt-link
              to="/units/Halberdier"
              >戟兵</nuxt-link
            >或大量的弓箭手。由於投石機的遠防與血量都非常的高，遠距離單位對投石機的效果並不好。
            攻城武器也可以拿來打擊投石機，因為有相當的加成，<nuxt-link
              to="/units/Siege_Ram"
              >重型衝撞車</nuxt-link
            >甚至因為擴散攻擊，可以一次撞爆整排的投石機。如果真的沒有其他單位，那拿步兵來攻擊也可以，但因為速度的關係，其實不理想（
            <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>、<nuxt-link
              to="/units/Woad_Raider"
              >松蘭武士</nuxt-link
            >、<nuxt-link to="/units/Condottiero">傭兵</nuxt-link>與
            <nuxt-link to="/units/Gbeto">飛刀女獵手</nuxt-link
            >例外）。如果面對一群弓箭手，那最好將投石機展開，以等待救援，因為展開組裝後的投石機遠防將會高很多。
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
            <td class="tta4">
              <nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
              >，群聚單位。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              近戰單位特別是<nuxt-link to="/units/Magyar_Huszar"
                >馬札爾驃騎兵</nuxt-link
              >和<nuxt-link to="/units/Mangonel">鷹勇士</nuxt-link>、
              <nuxt-link to="/units/Mangudai">火炮</nuxt-link>、<nuxt-link
                to="/units/Mangonel"
                >投石車</nuxt-link
              >。
            </td>
          </tr>
          <tr class="tta">
            <td class="" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊力</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Siegeengineers.jpg"
                alt=""
              /><nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link
              >:對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
              >攻擊加成+20%。
              <br />
              <img
                class="gg"
                src="~assets/Chemistry.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1)
              <br />
              <img src="~assets/Unique-tech.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Warwolf"
                >戰狼</nuxt-link
              >:巨型投石機有範圍傷害。<nuxt-link to="/civs/Britons"
                >不列顛</nuxt-link
              >限定
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">射程</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Siegeengineers.jpg"
                alt=""
              /><nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link
              >(+1)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">開火速率</td>
            <td class="tta4">
              <img src="~assets/Unique-tech.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Kataparuto"
                >彈射器</nuxt-link
              >(+33%，<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">命中率</td>
            <td class="tta4">
              <img src="~assets/Unique-tech.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Warwolf"
                >戰狼</nuxt-link
              >:對靜止單位有100%命中率。<nuxt-link to="/civs/Britons"
                >不列顛</nuxt-link
              >限定
            </td>
          </tr>

          <tr></tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Ironclad">鋼鐵甲</nuxt-link
              >:攻城武器近戰護甲+4，<nuxt-link to="/civs/Teutons"
                >條頓</nuxt-link
              >限定
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">招降抵抗</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Faith.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
              <br />
              <img
                class="gg"
                src="~assets/Heresy.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>
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
          <tr>
            <td class="tta1" style="width:10%">其他</td>
            <td class="tta4">
              <img src="~assets/Unique-tech.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Kataparuto"
                >彈射器</nuxt-link
              >:巨型投石機組裝/拆解速度加快四倍，<nuxt-link to="/civs/Japanese"
                >日本</nuxt-link
              >限定
            </td>
          </tr>
        </table>

        <h3>剋巨型投石機的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對巨型投石機的額外傷害，按造傷殺力排列。
          <div class="n1">
            <div class="col-md-12">
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
                      >輕形衝撞車</nuxt-link
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
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangonelIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Mangonel">輕形投石車</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/OnagerIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Onager">中型投石車</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/SiegeOnagerIcon.jpg"
                      alt=""
                    /><nuxt-link to="/Siege_units/Onager">重型投石車</nuxt-link>
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
                      >精銳馬札爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>限定)
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
                      >馬札爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EagleScoutIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Scout">鷹斥侯</nuxt-link>→
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
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>：生產快15%。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">賽爾特</nuxt-link
              >：巨型投石機攻擊速度快20%
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對巨型投石機有利的科技在帝王時代便宜20%。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link
              >：巨型投石機對單位命中率+35%。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：巨型投石機黃金成本便宜15%。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>：<nuxt-link
                to="/techs/Conscription"
                >徵兵制度</nuxt-link
              >免費。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速訓練巨型投石機和
              <nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link
              >的研究時間(快25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研發<nuxt-link
                to="/techs/Siege_Engineers"
                >攻城工程師</nuxt-link
              >和 <nuxt-link to="/techs/Chemistry">化學</nuxt-link>的速度快80%。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">條頓</nuxt-link
              >：巨型投石機對僧侶的招降有較好的抗性。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li><nuxt-link to="/techs/Heresy"></nuxt-link>異端邪說引進。</li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>：引進<nuxt-link
                to="/techs/Kataparuto"
                >彈射器</nuxt-link
              >
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li><nuxt-link to="/techs/Heresy"></nuxt-link>異端邪說引進。</li>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>：引進<nuxt-link
                to="/techs/Warwolf"
                >戰狼</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>新科技：<nuxt-link
                to="/techs/Ironclad"
                >鋼鐵甲</nuxt-link
              >
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>投石機是唯一一個被摧毀時，會像建築物一樣損壞時著火的單位。</li>
            <li>
              投石機是遊戲內射程最遠的單位，共有16的距離，加上<nuxt-link
                to="/techs/Siege_Engineers"
                >攻城工程師</nuxt-link
              >就有17的範圍，只有
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>的<nuxt-link
                to="/units/Elite_Cannon_Galleon"
                >精銳火砲戰船</nuxt-link
              >能與之匹敵。
            </li>
            <li>
              如果投石機在砲彈擊中目標前就收和，那麼目標就不會受到傷害，這在日本投石機研發過彈射器後很常見，算是一個BUG。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            中世紀最強大的非火藥攻城器是巨型投石機，這是一種巨大的彈射器式的武器，有一個長長的投擲手臂和一個用繩索懸掛的吊袋，當手臂鬆開時，手臂向上向前揮動。作用在吊袋上的離心力增加了被釋放的炮彈射程和高度，投石車丟出的石頭會落在目標上，對牆壁，塔樓和其他建築物造成很大的損害，巨型投石機是昂貴複雜的機器，需要專家來建造和操作，他們在使用前需要進行零件和所需的組裝，英格蘭的愛德華一世拒絕蘇格蘭斯特林城堡的投降，因為這樣他可以觀看他最近獲得的巨型投石機對斯特林城堡的蹂躪。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle"><nuxt-link to="">投石機</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/TrebuchetPackedIcon.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2" style="color:#fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Siege_Weapons">攻城器</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
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
            <td class="unit4">50秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2" style="color:#fff;">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木</td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit3">金</td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2" style="color:#fff;">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +250對<nuxt-link to="/armor/Armor_Class_standard_building"
                >一般建築物</nuxt-link
              >
            </td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3">射速</td>
            <td class="unit4">10</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3">開火間隔</td>
            <td class="unit4">6</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">16</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3">最小射程</td>
            <td class="unit4">4</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">對建築:80% <br />對單位:15%</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3">射彈速度</td>
            <td class="unit4">3.5</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">2(未組裝) <br />1(攻擊姿態)</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">8(未組裝) <br />150(攻擊姿態)</td>
          </tr>
          <tr>
            <td class="unit3">防禦類型</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                >攻城武器</nuxt-link
              >
              <br /><nuxt-link to="/armor/Armor_Class_Ram">衝撞車</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.8</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">19</td>
          </tr>
        </table>
      </div>
    </div>
    <div class="col-md-12">
      <h3>圖庫</h3>
      <div class="hrn1"></div>
      <div class="n1">
        <div class="col-md-12">
          <div class="col-md-4">
            <nuxt-link to="/img/Trebpacked.png"
              ><img class="imgn hg" src="~assets/Trebpacked.png" alt=""
            /></nuxt-link>
            <p><em>普通的投石機</em></p>
          </div>
          <div class="col-md-4">
            <nuxt-link to="/img/ Trebunpacket.jpg"
              ><img class="imgn hg" src="~assets/Trebunpacket.jpg" alt=""
            /></nuxt-link>
            <p><em>組裝好的投石機</em></p>
          </div>
          <div class="col-md-4">
            <nuxt-link to="/img/ Trebdamaged.jpg"
              ><img class="imgn hg" src="~assets/Trebdamaged.jpg" alt=""
            /></nuxt-link>
            <p><em>巨型投石機受傷時會像建築物一樣起火</em></p>
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
