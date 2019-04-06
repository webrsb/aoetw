<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>村民</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>村民</b>訓練於<nuxt-link to="/techs/age/Dark_Age"
              >黑暗時代</nuxt-link
            >的<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
            >，村民作為唯一能夠建築與收集資源的單位，是所有<nuxt-link to="/civs"
              >文明</nuxt-link
            >的核心單位，男女性別隨機出現
          </p>
          <p>
            所有文明開始時都有三位村民，除了<nuxt-link to="/civs/Chinese"
              >中國人</nuxt-link
            >和<nuxt-link to="/civs/Mayans">馬雅人</nuxt-link
            >(初始時分別擁有六個與四個村民)雖然他們在戰鬥中作用不大，且會在遭到攻擊時停止一切作業，但他們能夠修復受損的<nuxt-link
              to="/units/Siege_Weapons"
              >攻城武器</nuxt-link
            >，或於前線建造軍事<nuxt-link to="/building">建築物</nuxt-link
            >來加強軍隊。
          </p>
          <p>
            <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>的<nuxt-link
              to="/techs/untech"
              >特殊科技</nuxt-link
            ><nuxt-link to="/techs/Supremacy">霸權</nuxt-link
            >，能夠讓村民具有戰鬥力。
          </p>
        </div>
        <h3>任務與單位名稱</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>當村民接到不同的任務時，會有不同的單位名稱</p>
          <ul>
            <li>村民 - 攻擊敵方單位或建築物或野生動物</li>
            <li>建築工 - 建造建築物</li>
            <li>
              <nuxt-link to="/units/Villager">農夫</nuxt-link> - 從<nuxt-link
                to="/building/Farm"
                >農田</nuxt-link
              >收集<nuxt-link to="/resource/Food">食物</nuxt-link>
            </li>
            <li>
              漁夫 - 從<nuxt-link to="/units/animal/fish">魚類</nuxt-link
              >收集食物
            </li>
            <li>漿果收集員 - 從灌木叢收集食物</li>
            <li>
              伐木工 - 從樹收集<nuxt-link to="/resource/Wood">木材</nuxt-link>
            </li>
            <li>
              礦工 - 從金礦或<nuxt-link to="/resource/Stone">石礦</nuxt-link
              >收集<nuxt-link to="/resource/Gold">黃金</nuxt-link>或<nuxt-link
                to="/resource/Stone"
                >石頭</nuxt-link
              >
            </li>
            <li>
              牧羊人 - 召集<nuxt-link to="/units/animal/Sheep">綿羊</nuxt-link
              >至<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
              >或是<nuxt-link to="/building/Mill">磨坊</nuxt-link
              >旁，殺死綿羊收集食物
            </li>
            <li>獵人 - 攻擊並從野生動物中收集食物</li>
          </ul>
          <li>修理工 - 修復建築物</li>
        </div>
        <h3>收集資源效率</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>村民收集資源的速率有所不同，以下列出所有收集速率(降冪)</p>
        </div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td>村民類型</td>
            <td>資源</td>
            <td>收集效率</td>
          </tr>
          <tr>
            <td class="ttb1">塞爾特伐木工</td>
            <td class="ttb2">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="ttb3">0.449</td>
          </tr>
          <tr>
            <td class="tta1">伐木工</td>
            <td class="tta2">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="tta3">0.39</td>
          </tr>
          <tr>
            <td class="ttb1">
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>礦工
            </td>
            <td class="ttb2">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="ttb3">0.455</td>
          </tr>
          <tr>
            <td class="tta1">礦工</td>
            <td class="tta2">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="tta3">0.379</td>
          </tr>
          <tr>
            <td class="ttb1">
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>礦工
            </td>
            <td class="ttb2">
              <nuxt-link to="/resource/Stone">石頭</nuxt-link>
            </td>
            <td class="ttb3">0.431</td>
          </tr>
          <tr>
            <td class="tta1">礦工</td>
            <td class="tta2">
              <nuxt-link to="/resource/Stone">石頭</nuxt-link>
            </td>
            <td class="tta3">0.359</td>
          </tr>
          <tr>
            <td class="ttb1">
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>獵人
            </td>
            <td class="ttb2">食物</td>
            <td class="ttb3">0.612</td>
          </tr>
          <tr>
            <td class="ttb1">
              <nuxt-link to="/civs/Indians">印度</nuxt-link>漁夫
            </td>
            <td class="ttb2">食物</td>
            <td class="ttb3">0.490</td>
          </tr>
          <tr>
            <td class="tta1">漁夫</td>
            <td class="tta2">食物</td>
            <td class="tta3">0.426</td>
          </tr>
          <tr>
            <td class="ttb1">
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>牧羊人
            </td>
            <td class="ttb2">食物</td>
            <td class="ttb3">0.413</td>
          </tr>
          <tr>
            <td class="tta1">獵人</td>
            <td class="tta2">食物</td>
            <td class="tta3">0.408</td>
          </tr>
          <tr>
            <td class="ttb1">
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>漿果收集員
            </td>
            <td class="ttb2">食物</td>
            <td class="ttb3">0.388</td>
          </tr>
          <tr>
            <td class="ttb1">
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>農民
            </td>
            <td class="ttb2">食物</td>
            <td class="ttb3">0.367</td>
          </tr>
          <tr>
            <td class="tta1">牧羊人</td>
            <td class="tta2">食物</td>
            <td class="tta3">0.330</td>
          </tr>
          <tr>
            <td class="tta1">農民</td>
            <td class="tta2">食物</td>
            <td class="tta3">0.319</td>
          </tr>
          <tr>
            <td class="tta1">漿果收集員</td>
            <td class="tta2">食物</td>
            <td class="tta3">0.310</td>
          </tr>
        </table>

        <p>
          請注意，農田的實際收集率將由於需要在農田四處走動而降低。步行時間是村民在技術上來說屬於閒置，並不收集資源的時間。考慮步行時間在內，農夫的平均收集率約是0.3003食物/秒（研發<nuxt-link
            to="/techs"
            >科技</nuxt-link
          ><nuxt-link to="/techs/Wheelbarrow">獨輪推車</nuxt-link
          >將增加13.6%的效率，約為0.34）。同時考慮到農夫需要額外的步行時間才能到達農田的聚集點（和背面），他們的淨糧食產量實際上更低(可參考測試一)。
        </p>
        <p>
          測試一：無獨輪、以TC旁最佳蓋法一圈8田為方法，村從TC放出來第一格田自己走到定點，48秒後回TC放肉(走回TC的時間不在48S內)共採肉94，速率0.24
        </p>
        <p>
          註1：<nuxt-link to="/techs/Wheelbarrow">獨輪推車</nuxt-link
          >對於伐木、採礦增加的效率約只有3%，遠低於農夫的效果
        </p>
        <p>
          註2：相較近場村民捕魚的0.426，<nuxt-link to="/units/Fishing_Ship"
            >漁船</nuxt-link
          >近海捕魚為0.280，漁船深海捕魚為0.487，漁船<nuxt-link
            to="/building/Fish_Trap"
            >魚網</nuxt-link
          >為0.206
        </p>
        <h3>建築物</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-3">
            <div class="n1">
              <h4><nuxt-link to="/techs/age/Dark_Age"></nuxt-link>黑暗時代</h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/Houseicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/House">房屋</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Millicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Mill">磨坊</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Farmicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Farm">農田</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Miningcampicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Lumbercampicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Dockicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Dock">碼頭</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Barracks-logo.jpg"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Barracks">軍營</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Outposticon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Outpost">哨站</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Palisadewallicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Palisade_Wall">木牆</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Palisadegateicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Palisade_Gate">木門</nuxt-link>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Feudal_Age"></nuxt-link>封建時代
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/Acheryrangeicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Stableicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Stable">馬廄</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Blacksmithicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Marketicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Market">市集</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Watchtowericon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Stonewallicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Stone_Wall">石牆</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Gateicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Gate">城門</nuxt-link>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Castle_Age"></nuxt-link>城堡時代
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/Castleicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Castle">城堡</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Siegeworkshopicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Siege_Workshop"
                    >攻城器製造所</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Watchtowericon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Stonewallicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Monasteryicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Monastery">修道院</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Universityicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/University">學院</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Towncentericon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Dockicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Harbor">海港</nuxt-link>(<nuxt-link
                    to="/civs/Malay"
                    >馬來</nuxt-link
                  >限定)
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Imperial_Age"></nuxt-link>帝王時代
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/Wondericon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Wonder">世界奇觀</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Watchtowericon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Keep">大型箭塔</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Bombardtowericon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Feitoriaicon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/building/Feitoriaicon_Feitoria"
                    >港灣大商站</nuxt-link
                  >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
                </li>
              </ul>
            </div>
          </div>
        </div>
        <p>
          更多村民可以更快地建造建築物。如果t是一個村民建造一個建築物所需的時間，n是村民使用的數量，那麼建築時間將是3t/(n+2)。這意味著第一位村民的建築速度是其他額外村民的三倍。所以，若要建造多個建築物，讓村民分散建築更有效率，除非要快速建造一座關鍵建築（如<nuxt-link
            to="/building/Castle"
            >城堡</nuxt-link
          >或<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>）。
        </p>
        <h3>修復</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div>
            村民可以修理建築物，攻城武器和<nuxt-link to="/units/Naval_Vessels"
              >船隻</nuxt-link
            >。這樣做可以節省資源。但是修復建築物可能會比建造一個新建築慢得多。村民可以從兩格遠的地方修理單位，這主要是為了修復船隻，也可以修理一個完全被圍牆包圍的建築，例如<nuxt-link
              to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >。
          </div>
          <ul>
            <li>成本</li>
          </ul>
          <div>
            將一幢建築物由<nuxt-link to="/elements/Hit_points">生命值</nuxt-link
            >1修復至生命值滿需要建築成本的一半。部分維修將花費適當的費用（因此只修理一半的HP成本為原始建築成本的25％）。
          </div>
          <div>
            在維修過程中，費用會從資源庫存中扣除，而不是在開始時支付。如果一個玩家在維修期間耗盡資源，村民將停止維修並保持閒置狀態，直到他們被重新分配工作。
          </div>
          <div>
            折扣也適用，例如法蘭克玩家將只支付244石頭以完全修復<nuxt-link
              to="/building/Castle"
              >城堡</nuxt-link
            >，升級建築物生命值的升級不會影響維修成本。
          </div>
          <ul>
            <li>速度</li>
            對於建築物來說，第一個村民將會每分鐘修復750點生命值，而任何額外的村民將會增加375點/分鐘（只有一半的速度）。無論<nuxt-link
              to="/armor/Armor_Class_Building"
              >建築類</nuxt-link
            >型，升級或原始生命值如何，這都是一樣的。
            <li>
              <nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link>
            </li>
            不影響修理速度。
            <div>
              在大多數情況下，新建築的建築速度要快於修復工程，儘管成本較高（例如更換損壞的牆體部分），但建造新建築的速度可能會更快。
            </div>
            <div>
              攻城武器和<nuxt-link to="/units/Naval_Vessels">船艦</nuxt-link
              >的修理速度是建築物速度的25％，所以第一個村民是187.5 HP
              /分鐘，任何額外的村民將加上93.75 HP /分鐘。
            </div>
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
              大多數<nuxt-link to="/building">建築物</nuxt-link>，<nuxt-link
                to="/units/Skirmisher"
                >矛兵</nuxt-link
              >，<nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link
              >系，<nuxt-link to="/units/Spearman">長槍兵</nuxt-link
              >，<nuxt-link to="/units/Trebuchet">投石機</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">幾乎所有單位</td>
          </tr>
          <tr class="tta">
            <td class="tta4" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攜帶能力</td>
            <td class="tta4">
              <div>
                <img
                  class="gg"
                  src="~assets/Wheelbarrow.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Wheelbarrow">獨輪推車</nuxt-link>(+3)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Handcart.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Hand_Cart">手推車</nuxt-link>(+7)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Heavyplow.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Heavy_Plow">重犁</nuxt-link
                >(+1)(食物限定)
              </div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">收集速度</td>
            <td class="tta4">
              <li>木材:</li>
              <div>
                <img
                  class="gg"
                  src="~assets/Doublebitaxe.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Double-Bit_Axe">雙刃斧</nuxt-link>(+20%)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Bowsaw.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Bow_Saw">弓鋸</nuxt-link>(+20%)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Twomansaw.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Two-Man_Saw">雙人鋸</nuxt-link>(+10%)
              </div>
              <li>石頭:</li>
              <div>
                <img
                  class="gg"
                  src="~assets/Stonemining.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Stone_Mining">採石技術</nuxt-link>(+15%)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Stone_Shaft_Mining.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Stone_Shaft_Mining">礦井採石</nuxt-link
                >(+15%)
              </div>
              <li>黃金:</li>
              <div>
                <img
                  class="gg"
                  src="~assets/Goldmining.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Gold_Mining">採金技術</nuxt-link>(+15%)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Goldshaftmining.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Gold_Shaft_Mining">礦井採金</nuxt-link
                >(+15%)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/CastleAgeUnique.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Sultans">蘇丹</nuxt-link
                >(+10%，<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
              </div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">生命值</td>
            <td class="tta4">
              <div>
                <img
                  class="gg"
                  src="~assets/Loom.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Loom">織布技術</nuxt-link>(+15)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Unique-tech.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Supremacy">霸權</nuxt-link
                >(+40，<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>限定)
              </div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Attack">攻擊力</nuxt-link>
            </td>
            <td class="tta4">
              <div>
                <img
                  class="gg"
                  src="~assets/Sappers.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Sappers">坑道工兵</nuxt-link
                >(攻擊建築物和防禦工事造成的傷害+15)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Forging.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Forging">鍛造</nuxt-link>(+1，<nuxt-link
                  to="/civs/Incas"
                  >印加</nuxt-link
                >限定)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Ironcasting.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link
                >(+1，<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Blastfurnace.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link
                >(+1，<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Unique-tech.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Supremacy">霸權</nuxt-link
                >(+6，<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>限定)
              </div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <div>
                <img
                  class="gg"
                  src="~assets/Loom.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Loom">織布技術</nuxt-link>(+1/+2)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Scalemailarmor.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link
                >(+1/+1，<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Chainmailarmor.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Chain_Mail_Armor">步兵鎖甲</nuxt-link
                >(+1/+1，<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Platemailarmor.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link
                >(+1/+2，<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Unique-tech.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Supremacy">霸權</nuxt-link
                >(+2/+2，<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>限定)
              </div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <div>
                <img
                  class="gg"
                  src="~assets/Wheelbarrow.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Wheelbarrow">獨輪推車</nuxt-link>(+10%)
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Handcart.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Hand_Cart">手推車</nuxt-link>(+10%)
              </div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Conversion">招降</nuxt-link>抵抗
            </td>
            <td class="tta4">
              <div>
                <img
                  class="gg"
                  src="~assets/Faith.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
              </div>
              <div>
                <img
                  class="gg"
                  src="~assets/Heresy.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">其他</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Treadmillcrane.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
              >(建築速度加快30%)
            </td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>：村民攜帶+5。
            </li>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >：村民移動速度提高了10％。
            </li>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link
              >：牧羊人工作速度提高了25％。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link
              >：伐木工工作速度提高15％。即使其他玩家的單位在旁邊，村民也可以取得其他玩家的牲畜。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：開始有6村民，但少200食物和50木材。
            </li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link
              >：漿果收集員工作速度提高了25％。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>：獵人攻擊<nuxt-link
                to="/units/animal/Wild_Boar"
                >野豬</nuxt-link
              >和野生大象時+5傷害，可多攜帶15食物。
            </li>
            <li>
              <nuxt-link to="/civs/Indians">印度</nuxt-link>：在<nuxt-link
                to="/techs/age/Dark_Age"
                >黑暗</nuxt-link
              >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >，村民便宜5％/ 10％/ 15％/
              20％。漁夫收集速度提高15％，且可多攜帶15食物。
            </li>
            <li>
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link
              >：村民可以駐守在<nuxt-link to="/building/House">房屋</nuxt-link
              >內。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link
              >：村民視線+3。礦工收集石頭快20％。建築速度快25％ 。
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link
              >：村民一擊殺死猛獸。
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link
              >：開始多1村民，但是少50食物。自然資源可收集時間延長15%。
            </li>
            <li>
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link
              >：獵人收集速度提高50％。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>：在封建/<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代，村民的創造速度提高了10％/ 15％/ 20％。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
              >：農夫收集速度提高15%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：建築速度提高30%
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link
              >：礦工收集黃金速度提高20%。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >：免費獨輪推車與<nuxt-link to="/techs/Hand_Cart"
                >手推車</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link
              >：村民攻擊與防禦隨著<nuxt-link to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >升級。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link
              >：農田建造速度加快50%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：村民更不容易被招降。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>
              村民對<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
              >、牆與城堡有+3的攻擊。
            </li>
            <li>土耳其的村民挖金速度快15％。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>村民對箭塔、牆與城堡有+6的攻擊。</li>
            <li>
              韓國村民最初有+2<nuxt-link to="/los.php">視野</nuxt-link
              >，1.0c後變成+3視野。
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅人</nuxt-link
              >有20％的資源額外採集量。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              村民現在可以駐進<nuxt-link to="/units/Battering_Ram"
                >衝撞車</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link
              >村民有15％的額外資源採集量。
            </li>
            <li>韓國村民蓋箭塔與城堡快25％。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>土耳其村民採金快20。</li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>村民是遊戲中唯一有分男女的單位。</li>
            <li>
              村民是遊戲中三個有多種3D模組的單位之一，村民有兩個3D模組(男與女)，另兩個是<nuxt-link
                to="/units/Monk"
                >僧侶</nuxt-link
              >(正常與撿拾<nuxt-link to="/elements/Relic">遺跡</nuxt-link
              >)和<nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link
              >(正常與有貨物)。
            </li>
            <li>
              男性和女性村民在戰鬥與收集時使用不同的武器。男村民使用匕首而女村民使用刀。
            </li>
            <li>
              女性村民是遊戲中僅有的兩個常規女性單位之一，另一個是<nuxt-link
                to="/units/Gbeto"
                >飛刀女獵手</nuxt-link
              >。
            </li>
            <li>村民只有25個基本生命值，是所有單位中最低的。</li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Villagerfemale.png" alt=""
              /></gallery>
              <em>女村民</em>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Villagermale.png" alt=""
              /></gallery>
              <em>男村民</em>
            </div>
          </div>
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
              <div class="unititle" style="color: #fff;">村民</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <b-tabs no-fade>
                  <b-tab title="男村民">
                    <img src="~assets/VillagerMaleIcon.jpg" width="45" alt="" />
                  </b-tab>
                  <b-tab title="女村民">
                    <img
                      src="~assets/VillagerFemaleIcon.jpg"
                      width="45"
                      alt=""
                    />
                  </b-tab>
                </b-tabs>
              </div>
            </td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">村民</td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">全部</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Dark-age-logo-small.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Towncentericon.png"
                width="30"
                alt=""
              /><nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">25秒</td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle2" style="color: #fff;">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">50</td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle2" style="color: #fff;">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">25</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">3(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_stone_defense"
                >石頭建築</nuxt-link
              >+6 <br />對<nuxt-link to="/armor/Armor_Class_Building"
                >建築</nuxt-link
              >+3
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.8</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">4</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Dennis協助編輯</div>
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
