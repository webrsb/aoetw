<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>世紀帝國II：王者崛起</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>《世紀帝國II：王者崛起》</b
            >，譯名很多又稱<b>拉惹崛起</b>，是世紀帝國II第四張資料片，也是最新的資料片，發行於2016年12月19日。本資料片新增了四個東南亞<nuxt-link
              to="/civs"
              >文明</nuxt-link
            >且更新了<nuxt-link to="/civs/Indians">印度</nuxt-link
            >種族的建築風格，遊戲中也增加了一些新單位、建築和物件。
          </p>
          <p>拉惹為南亞、東南亞以及印度等地對國王、君主或酋長的稱呼。</p>
        </div>
        <h2>新增元素</h2>
        <div class="hrn1"></div>
        <h3>文明</h3>
        <div class="n1">
          <ul>
            <li>
              <strong><nuxt-link to="/civs/Burmese">緬甸</nuxt-link>:</strong
              >登上權力顛峰，掀起詭譎的叛亂，恢復緬甸君主的輝煌。
            </li>
            <li>
              <strong><nuxt-link to="/civs/Khmer">高棉</nuxt-link>:</strong
              >建造世界上最大的宗教建築，使用那些強大的<nuxt-link
                to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >。
            </li>
            <li>
              <strong><nuxt-link to="/civs/Malay">馬來</nuxt-link>:</strong
              >重建東南亞最大的帝國，在這地區留下你的印記，從這個島嶼跳到這個島嶼，統治整個東南亞地區。
            </li>
            <li>
              <strong><nuxt-link to="/civs/Vietnamese">越南</nuxt-link>:</strong
              >率領<nuxt-link to="/civs/Vietnamese">越南人</nuxt-link
              >民脫離明帝國獨立，用強大的<nuxt-link to="/units/Archer_Units"
                >遠程</nuxt-link
              >部隊進行游擊戰。
            </li>
          </ul>
        </div>
        <h3>單位</h3>
        <div class="n1">
          <p><nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link></p>
          <ul>
            <li>
              <img class="gg" src="~assets/Arambaiicon.png" alt="" /><nuxt-link
                to="/units/Arambai"
                >飛鏢騎兵</nuxt-link
              >:緬甸的特殊單位，能夠在<nuxt-link to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >的<nuxt-link to="/building/Castle">城堡</nuxt-link
              >中訓練。<nuxt-link to="/units/Arambai">飛鏢騎兵</nuxt-link
              >是<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >部隊破壞力極高但命中低，對<nuxt-link to="/armor/Armor_Class_Ram"
                >衝撞車系列</nuxt-link
              >有加成傷害。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Ballistaelephanticon.png"
                alt=""
              /><nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link
              >:高棉的特殊單位，能夠在城堡時代的城堡中訓練。<nuxt-link
                to="/units/Ballista_Elephant"
                >弩砲象</nuxt-link
              >這是一種混合型單位是由<nuxt-link to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >加攻城武器混合型單位，攻擊模式類似弩砲，弩砲象是可以伐木的。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Karambitwarrioricon.png"
                alt=""
              /><nuxt-link to="/units/Karambit_Warrior">爪刀勇士</nuxt-link
              >:為馬來的特殊單位。是遊戲裡只佔半個人口的單位，便宜/快速的單位，缺點是過於脆弱。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/RattanarcherIcon2.png"
                alt=""
              /><nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link
              >:越南的特殊單位，是個有非常高<nuxt-link to="/armor"
                >遠程護甲</nuxt-link
              >的<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Imperialskirmishericon.png"
                alt=""
              /><nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link
              >:<nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link
              >是越南第二個特殊單位，可以在<nuxt-link
                to="/building/Archery_Range"
                >射箭場</nuxt-link
              >訓練，是<nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
              >的升級，是一個反<nuxt-link to="/armor/Armor_Class_Archer/"
                >弓箭手</nuxt-link
              >的<nuxt-link to="/units/Archer_Units">遠程單位</nuxt-link>。
            </li>
          </ul>
        </div>
        <p>一般單位</p>
        <ul>
          <li>
            <img
              class="gg"
              src="~assets/Battleelephanticon.png"
              alt=""
            /><nuxt-link to="/units/Battle_Elephant">茅象伕</nuxt-link
            >:東南亞特殊單位，城堡時代兵種，可訓練於<nuxt-link
              to="/building/Stable"
              >馬廄</nuxt-link
            >，與<nuxt-link to="/civs/Persians">波斯</nuxt-link
            >戰像相似但攻擊範圍較小，他們移動緩慢容易受到範圍傷害的單位攻擊，也容易被<nuxt-link
              to="/units/Monk"
              >僧侶</nuxt-link
            ><nuxt-link to="/elements/Conversion">招降</nuxt-link>。
          </li>
        </ul>
        <p>建築</p>
        <ul>
          <li>
            <img width="25px" src="~assets/HarborIcon.png" alt="" /><nuxt-link
              to="/building/Harbor"
              >海港</nuxt-link
            >:<nuxt-link to="/civs/Malay">馬來人</nuxt-link
            >進入城堡時代研發完<nuxt-link to="/techs">科技</nuxt-link
            >"海上霸主"可以建造的特殊軍事經濟復合式<nuxt-link to="/building"
              >建築物</nuxt-link
            >。<nuxt-link to="/building/Harbor">海港</nuxt-link>比<nuxt-link
              to="/building/Dock"
              >碼頭</nuxt-link
            >有更多的<nuxt-link to="/elements/Hit_points">生命值</nuxt-link
            >和<nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link
            >，而且能以箭矢攻擊來犯的敵方單位。
          </li>
        </ul>
        <h3>戰役</h3>
        <p>
          <em>主要文章:<nuxt-link to="/batt">戰役</nuxt-link></em>
        </p>
        <ul>
          <li><nuxt-link to="/batt/Gajah_Mada">加查·馬達</nuxt-link></li>
          <li>
            <nuxt-link to="/batt/Suryavarman_I">蘇利耶跋摩一世</nuxt-link
            >:西元十一世紀初，高棉王國四分五裂、強敵環伺。只有蘇利耶跋摩王子有能力與魄力一一打敗各路勁敵光復高棉。然而打江山易，守江山難。蘇利耶跋摩能否擴大基業，吞併強鄰。開創屬於自己的千秋霸業呢？
          </li>
          <li>
            <nuxt-link to="/batt/Bayinnaunga">勃印曩</nuxt-link
            >:曾經有一位拉闍想把四分五裂的國家重新統一起來，但由於有內奸背叛，他未竟的使命要由他最忠誠的侍衛來完成。有沒有可能，讓一位將領繼承王位，並建立起東南亞歷史上最大的國家？
          </li>
          <li>
            <nuxt-link to="/batt/Le_Loi">黎利</nuxt-link
            >:當大越陷於內亂紛爭之際，明朝趁虛而入佔據了整片地區。而今，想要重獲獨立自由，就要依靠一個人，一位名叫黎利的有志貴族青年。他能否平息內鬥，抵抗明朝大軍並帶領大越再次獨立？
          </li>
        </ul>
        <h3>平衡更動</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p><strong>種族平衡</strong></p>
          <ul>
            <li><nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link></li>
            <ul>
              <li>
                <nuxt-link to="/units/Monk">僧侶</nuxt-link>不適用軍事<nuxt-link
                  to="/units"
                  >單位</nuxt-link
                >訓練速度快15%的<nuxt-link to="/civs">文明</nuxt-link>加成。
              </li>
              <li>
                獲得<nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link>。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link></li>
            <ul>
              <li>
                <nuxt-link to="/building/Stable">馬廄</nuxt-link
                >單位訓練成本在<nuxt-link to="/techs/age/Castle_Age"
                  >城堡</nuxt-link
                >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
                >減少15/20%。
              </li>
              <li>
                獲得<nuxt-link to="/techs/Ring_Archer_Armor">弓兵鏈甲</nuxt-link
                >。
              </li>
              <li>
                非精銳的<nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
                ><nuxt-link to="/elements/Attack">攻擊力</nuxt-link
                >-1，射程範圍+1。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link></li>
            <ul>
              <li>
                <nuxt-link to="/techs/Greek_Fire">希臘之火</nuxt-link
                >造價降低為250肉300金(之前是250肉400金)。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link></li>
            <ul>
              <li>弩炮穿透範圍增加0.3個大小。</li>
              <li>
                (精銳)<nuxt-link to="/units/Shotel_Warrior">彎刀勇士</nuxt-link
                >對<nuxt-link to="/building">建築物</nuxt-link
                >的攻擊加成降為0/1(之前是2/3)。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Franks">法蘭克</nuxt-link></li>
            <ul>
              <li>
                (精銳)<nuxt-link to="/units/Throwing_Axeman">擲斧兵</nuxt-link
                >+10HP。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Huns">匈人</nuxt-link></li>
            <ul>
              <li>
                (精銳)<nuxt-link to="/units/Tarkan">答剌罕騎兵</nuxt-link
                >+1<nuxt-link to="/armor">遠程護甲</nuxt-link>。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Incas">印加</nuxt-link></li>
            <ul>
              <li>
                <nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>速度+0.05。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Indians">印度</nuxt-link></li>
            <ul>
              <li>新的印度<nuxt-link to="/building">建築</nuxt-link>風格。</li>
              <li>
                印度的<nuxt-link to="/building/Wonder">世界奇觀</nuxt-link
                >果爾。古姆巴斯移至戰役編輯器，並由新的世界奇觀代替。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Italians">義大利</nuxt-link></li>
            <ul>
              <li>
                <nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link
                >造價便宜20%(之前是15%)。
              </li>
              <li>
                移除<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
                >的+2<nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link
                >並以造價減少25<nuxt-link to="/resource/Wood">木材</nuxt-link
                >做代替。
              </li>
              <li>
                <nuxt-link to="/units/Condottiero">傭兵</nuxt-link
                >的訓練時間由11秒增加為16秒。
              </li>
              <li>
                <nuxt-link to="/units/Genoese_Crossbowman">熱那亞弩手</nuxt-link
                >的造價由50木材50黃金降為45木材45黃金。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Japanese">日本</nuxt-link></li>
            <ul>
              <li>
                獲得<nuxt-link to="/techs/Treadmill_Crane">磨坊水車</nuxt-link
                ><nuxt-link to="/techs">科技</nuxt-link>。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Malians">馬利</nuxt-link></li>
            <ul>
              <li>
                無法訓練<nuxt-link to="/units/Halberdier">戟兵</nuxt-link>。
              </li>
              <li>
                <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link
                >木材花費-15%不適用在<nuxt-link to="/building/Farm"
                  >農田</nuxt-link
                >上。
              </li>
              <li>
                <nuxt-link to="/units/Gbeto">精銳飛刀女獵手</nuxt-link
                >攻擊力由14降為13。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Mongols">蒙古</nuxt-link></li>
            <ul>
              <li>
                <nuxt-link to="/units/Mangudai">精銳蒙古突騎</nuxt-link
                >的<nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link
                >從0增加到5。
              </li>
              <li>
                (精銳)<nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link
                >重新獲得對<nuxt-link to="/units/Siege_Weapons"
                  >攻城武器</nuxt-link
                >的攻擊加成。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Persians">波斯</nuxt-link></li>
            <ul>
              <li>
                波斯<nuxt-link to="/units/War_Elephant">戰象</nuxt-link
                >在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
                >就有<nuxt-link to="/elements/Area_of_Effect"
                  >踐踏傷害</nuxt-link
                >。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link></li>
            <ul>
              <li>
                <nuxt-link to="/building/Feitoriaicon_Feitoria"
                  >港灣大商站</nuxt-link
                >的建築成本改為250黃金250石頭(之前是250黃金250木材)。
              </li>
              <li>
                港灣大商站的資源產速率為每秒0.8食物、0.8木材、0.4黃金及0.25石頭(之前是每秒0.7食物、0.7木材、0.4黃金及0.45石頭)。
              </li>
              <li>
                <nuxt-link to="/techs/Arquebus">火繩槍</nuxt-link>對<nuxt-link
                  to="/armor/Armor_Class_Gunpowder_Unit"
                  >火藥單位</nuxt-link
                >的影響變小(<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link
                >依然有作用但投射物速度降低到75%)。
              </li>
              <li>(精銳)風琴炮的最小射程為1。</li>
              <li>
                移除(精銳)風琴炮對<nuxt-link to="/units/Infantry_Units"
                  >步兵單位</nuxt-link
                >的+1攻擊加成。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Saracens">薩拉森</nuxt-link></li>
            <ul>
              <li>
                精銳薩拉森<nuxt-link to="/units/Mameluke"
                  >阿拉伯奴隸兵</nuxt-link
                >的開火間隔增加為5(之前是0)。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link></li>
            <ul>
              <li>
                <nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link
                >移動速度由1.35升為1.4。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Spanish">西班牙</nuxt-link></li>
            <ul>
              <li>
                因為團隊加成從貿易獲得的<nuxt-link to="/resource/Gold"
                  >黃金</nuxt-link
                >量由33%改為25%。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link></li>
            <ul>
              <li>
                <nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
                >的移動速度由0.65提升為0.7。
              </li>
            </ul>
            <li><nuxt-link to="/civs/Turks">土耳其</nuxt-link></li>
            <ul>
              <li>黃金礦工的工作速率由快15%提升為20%。</li>
            </ul>
            <li><nuxt-link to="/civs/Vikings">維京</nuxt-link></li>
            <ul>
              <li>
                <nuxt-link to="/techs/Chieftains">酋長</nuxt-link
                >現在會影響所有的<nuxt-link to="/armor/Armor_Class_Infantry"
                  >步兵單位</nuxt-link
                >。
              </li>
            </ul>
          </ul>
          <p><strong>一般平衡</strong></p>
          <ul>
            <li>
              <nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link
              >的訓練成本由300木材160黃金降為200木材160黃金。
            </li>
            <li>金合歡樹提供150木(之前是100木)。</li>
            <li>自爆筏移動速度由1.6降為1.5。</li>
            <li>
              <nuxt-link to="/units/Fire_Galley">火艨艟</nuxt-link>的<nuxt-link
                to="/units/Archer_Units"
                >遠程</nuxt-link
              >護甲由5降為4。
            </li>
            <li>
              自爆筏的傷害會根據自爆筏的<nuxt-link to="/elements/Area_of_Effect"
                >爆炸半徑</nuxt-link
              >而遞減。
            </li>
            <li>自爆筏的爆炸半徑由1.5增為2.5。</li>
            <li>自爆筏的遠程裝甲由3降為2。</li>
            <li>自爆筏的HP由50降為45。</li>
            <li>
              修正<nuxt-link to="/units/War_Wagon">精銳馬戰車</nuxt-link
              >的<nuxt-link to="/armor/Armor_Class_Cavalry_Archer"
                >馬弓騎兵護甲</nuxt-link
              >分類。
            </li>
            <li>
              修正標槍<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >的<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >護甲分類。
            </li>
            <li>
              修正<nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link
              >的<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
              >護甲分類。
            </li>
            <li>
              <nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link
              >獲得對<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
              >的額外攻擊加成，如此<nuxt-link to="/techs/Parthian_Tactics"
                >安息人戰術</nuxt-link
              >才能正確的影響其他文明的<nuxt-link to="/units/Camel_Rider"
                >駱駝</nuxt-link
              ><nuxt-link to="/units/Armor_Class_Cavalry_Archer"
                >弓騎兵</nuxt-link
              >。例如柏柏第一戰役中的薩拉森駱駝弓騎兵。
            </li>
            <li>
              修正<nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link
              >對<nuxt-link to="/armor/Armor_Class_Camel">駱駝護甲</nuxt-link
              >的攻擊加成。
            </li>
            <li>
              修正<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
              >對<nuxt-link to="/armor/Armor_Class_Camel">駱駝</nuxt-link
              >護甲的攻擊加成。
            </li>
            <li>
              修正<nuxt-link to="/units/hero/Eastern_Swordsman"
                >東方劍士</nuxt-link
              >和<nuxt-link to="/units/hero/Nordic_Swordsman"
                >北歐劍士</nuxt-link
              >對<nuxt-link to="/armor/Armor_Class_standard_building"
                >標準建築</nuxt-link
              >護甲的攻擊加成。
            </li>
            <li>
              槍隊長對<nuxt-link to="/armor/Armor_Class_War_Elephant"
                >戰象單位</nuxt-link
              >攻擊額外+20。
            </li>
            <li>
              <nuxt-link to="/units/Trade_Cog">貿易商旅</nuxt-link
              >回到<nuxt-link to="/building/Dock">碼頭</nuxt-link>後會馬上掉頭。
            </li>
            <li>貿易馬車現在有較小的碰撞半徑(比較不會卡在路上)。</li>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克人</nuxt-link
              >的標槍騎兵現在的訓練速度加快了。
            </li>
            <li>
              修正<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              >/<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>/<nuxt-link
                to="/units/Arbalester"
                >強弩兵</nuxt-link
              >對石造建築護甲的攻擊加成。
            </li>
            <li>
              <nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link
              >的建造時間與<nuxt-link to="/building/Stone_Wall">石牆</nuxt-link
              >一樣(都10秒，之前是11秒/10秒)。
            </li>
            <li>
              特定方向<nuxt-link to="/building/Gate">城門</nuxt-link
              >的建築時間不會再比其他方向的快了。
            </li>
            <li>
              衣索比亞的矛兵不再有更快的開火速率，只有徒步<nuxt-link
                to="/units/Archer"
                >弓兵</nuxt-link
              >有。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">朝鮮</nuxt-link
              >的"防禦工事建造速度加快33%"的文明加成現在只影響垛牆的建造速度。
            </li>
            <li>
              印度的<nuxt-link to="/armor/Armor_Class_Camel">駱駝騎兵</nuxt-link
              >護甲會加在他們已經不存在的<nuxt-link to="/armor/Armor_Class_Ship"
                >船艦護甲</nuxt-link
              >上。現在已經移除<nuxt-link to="/units/Naval_Vessels"
                >船艦</nuxt-link
              >護甲了
            </li>
            <li>
              <nuxt-link to="/armor/Armor_Class_Condottiero">傭兵</nuxt-link
              >現在可以吃到馬利的護甲文明加成。
            </li>
            <li>風琴炮現在可以吃到土耳其的團隊加乘效果。</li>
            <li>
              波斯不會再有時侯使用薩拉森<nuxt-link to="/units/Villager"
                >村民</nuxt-link
              >的語音。
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link
              >的文明加成會對所有類型和方向的城門有影響。
            </li>
            <li>
              <nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link
              >的第二發箭矢的攻擊力不再是1而是2。
            </li>
            <li>
              <nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link
              >現在可以吃到土耳其的團隊加成。
            </li>
            <li>印加在遊玩"所有科技"的遊戲開局時不再會有一頭羊駝。</li>
            <li>
              龜甲傳會受到傭兵及<nuxt-link to="/units/Samurai"
                >日本武士</nuxt-link
              >的額外傷害加成。
            </li>
            <li>
              傭兵可以得到酋長所給對<nuxt-link to="/units/Cavalry_Units"
                >騎兵單位</nuxt-link
              >的額外傷害。
            </li>
            <li>
              <nuxt-link to="/units/Militia">民兵系</nuxt-link
              >列可以得到酋長所給對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝單位</nuxt-link
              >的額外傷害。
            </li>
            <li>
              在<nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link
              >修理<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
              >不再需要花費<nuxt-link to="/resource/Stone">石頭</nuxt-link>。
            </li>
            <li>
              西班牙、匈人、馬雅、印加、馬札爾、斯拉夫、衣索比亞還有馬利的<nuxt-link
                to="/armor/Armor_Class_Monk"
                >僧侶</nuxt-link
              >現在恢復信仰的速度與其他文明相同。
            </li>
          </ul>
          <p><strong>科技變動</strong></p>
          <ul>
            <li>
              <nuxt-link to="/techs/Arrowslits">箭狹槽</nuxt-link
              >研發成本由150肉150木升為250肉250木。
            </li>
            <li>
              箭狹槽從以下文明的科技術移除:衣索比亞、<nuxt-link to="/civs/Goths"
                >哥德</nuxt-link
              >、匈人、印度、馬札爾、馬利、瑪雅、蒙古、波斯、葡萄牙和斯拉夫。
            </li>
            <li>箭狹槽現在只能在帝王時代研發。</li>
            <li>箭狹槽現在會影響第二發箭矢。</li>
            <li>
              箭狹槽給予<nuxt-link to="/building/Watch_Tower"
                >瞭望箭塔</nuxt-link
              >/<nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link
              >/<nuxt-link to="/building/Keep">大型箭塔</nuxt-link
              >的攻擊力由2/4/6降為1/2/3。
            </li>
            <li>
              升級為<nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
              >的成本由250木材160黃金降為200木材100黃金。
            </li>
            <li>
              <nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
              >的研發成本由250食物降為150食物，研發時間由50秒降為40秒。
            </li>
            <li>
              <nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link
              >現在會受到彈道學的影響。
            </li>
            <li>
              <nuxt-link to="/techs/Yasama">射箭孔</nuxt-link
              >對箭塔的影響從3支箭降為2支箭。
            </li>
            <li>
              <nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link
              >不再對研發他的玩家有加成。
            </li>
            <li>
              <nuxt-link to="/techs/Pavise">巨盾</nuxt-link
              >的效果(徒步弓兵遠程護甲+1/+1)不再影響矛兵。
            </li>
            <li>
              酋長現在會影響<nuxt-link to="/units/Berserk">狂戰士</nuxt-link
              >對駱駝騎兵的攻擊力。
            </li>
            <li>
              <nuxt-link to="/techs/Yeomen">義勇騎兵</nuxt-link
              >現在會影響箭塔射出的第二發箭矢。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#356a98">
              <div class="unititle2">
                世紀帝國II：王者崛起
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img width="100%" src="~assets/001-105.jpg" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#356a98">
              <div class="unititle2" style="color: #fff;">遊戲介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">開發商</td>
            <td class="unit4">Skybox Labs <br />Forgotten <br />Empires LLC</td>
          </tr>
          <tr>
            <td class="unit3">發行</td>
            <td class="unit4">微軟</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#356a98;">
              <div class="unititle2" style="color: #fff;">發行日期</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">steam版本</td>
            <td class="unit4">2016年12月19日</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#356a98;">
              <div class="unititle2" style="color: #fff;">前作與擴充</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">擴充</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link><br /><nuxt-link
                to="/games/aoc"
                >征服者入侵</nuxt-link
              ><br /><nuxt-link to="/games/aof">失落的帝國</nuxt-link
              ><br /><nuxt-link to="/games/ak">非洲王國</nuxt-link>
              <br /><nuxt-link to="/games/de">決定版</nuxt-link>
              <br /><nuxt-link to="/games/delw">西方霸主</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'foot',
  components: {}
}
</script>
<style></style>
