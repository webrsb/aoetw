<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>投石手</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            投石手是<nuxt-link to="/civs/Incas">印加</nuxt-link
            >的第二個獨特單位，可於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在
            <nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
            >生產，是一個反步兵的遠程單位。值得一提的是，投石手沒有精銳升級。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            投石手對於步兵的攻擊+10，是早期最為強大的反步兵單位，可以擊敗除了<nuxt-link
              to="/units/Huskarl"
              >哥德衛隊</nuxt-link
            >與<nuxt-link to="/units/Condottiero">傭兵</nuxt-link
            >以外大部分的步兵，另一個潛在的敵人是
            <nuxt-link to="/units/Samurai">日本武士</nuxt-link
            >，因為日本武士對於特殊兵種有相當高的加成。
          </p>
          <p>
            在某些方面，它的定位相當類似於
            <nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
            >，但投石手在城堡時代即可生產，也相當便宜，而受到
            <nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link
            >(僅支援靜態準度由90%提升到100%，不支援射速提高)與
            <nuxt-link to="/techs/Ballistics">彈道學</nuxt-link
            >的影響，他更為的精準。當
            <nuxt-link to="">護琬科技</nuxt-link
            >研發後，射程還比火槍兵還遠。但他的攻擊力仍遠低於火槍兵，即使受益於
            <nuxt-link to="/techs/Chemistry">化學</nuxt-link>的加成。如同
            <nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
            >一樣，投石手有最小的攻擊範圍，但這不是一個嚴重的問題，他可以通過研發
            <nuxt-link to="/techs/Andean_Sling">安地斯彈弓</nuxt-link>來解決。
          </p>
          <p>
            投石手是俗稱的<nuxt-link to="/civs/Incas">印加</nuxt-link
            >三寶之一，還有 <nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>與
            <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
            >，這三個單位都扮演著相當重要的腳色，槍隊長是反騎兵、鷹勇士反弓兵，而投石手是優秀的反步兵單位，這種組合幾乎可以擊敗所有軍隊，但可惜的是面對
            <nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>及<nuxt-link
              to="/units/Cataphract"
              >聖騎兵</nuxt-link
            >，他們又顯得如此渺小。
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
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>。<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>、<nuxt-link
                to="/units/Scorpion"
                >弩炮</nuxt-link
              >、<nuxt-link to="/units/Onager">投石車</nuxt-link>、
              <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>、<nuxt-link
                to="/units/Cavalry_Units"
                >騎兵單位</nuxt-link
              >、<nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>、、
              <nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link>。
            </td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊力</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Fletching.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/Bodkinarrow.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Bracer.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bracer">護腕</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/Chemistry.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊範圍</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Fletching.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/Bodkinarrow.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Bracer.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bracer">護腕</nuxt-link>(+1) <br />
              <img
                src="~assets/CastleAgeUnique.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Andean_Sling">安地斯彈弓</nuxt-link
              >:矛兵和投石手取消最小射程，<nuxt-link to="/civs/Incas"
                >印加</nuxt-link
              >限定
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">命中率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Ballistics.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link
              >:對移動目標命中率上升 <br />
              <img
                class="gg"
                src="~assets/Thumb_Ring.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link
              >:命中率提升到100%
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Paddedarcherarmor.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Padded_Archer_Armor">弓兵布甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/Leatherarcherarmor.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Leather_Archer_Armor">弓兵皮甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/Ringarcherarmor.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Ring_Archer_Armor">弓兵環甲</nuxt-link
              >(+1/+2) <br />
              <img src="~assets/Unique-tech.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Couriers"
                >信使</nuxt-link
              >(+1/+2，從<nuxt-link to="/games/ak">非洲王朝</nuxt-link
              >資料片開始)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <img src="~assets/Unique-tech.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Couriers"
                >信使</nuxt-link
              >(+10%，只在<nuxt-link to="/games/aof">失落的帝國</nuxt-link
              >資料片有)
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
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link> <br />
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
        </table>

        <h3>剋投石手的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對投石手的額外傷害，按造傷殺力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+15攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/SMURI.jpg" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >精銳日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/HuskarlIcon.jpg" alt="" />
                    <nuxt-link to="/units/Huskarl">精銳哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/SMURI.jpg" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/HuskarlIcon.jpg" alt="" />
                    <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/GenitourIcon.jpg" alt="" />
                    <nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Imperialskirmishericon.png"
                      alt=""
                    />
                    <nuxt-link to="/units/Imperial_Skirmisher"
                      >帝王戰矛兵</nuxt-link
                    >(<nuxt-link to="/civs/Vietnamese">越南</nuxt-link
                    >和同盟限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EliteSkirmisherIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/GenitourIcon.jpg" alt="" />
                    <nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/SkirmisherIcon.jpg" alt="" />
                    <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          以下團隊加成可讓以下單位對投石手有額外攻擊力
          <div class="n1">
            團隊加成:<nuxt-link to="/civs/Persians">波斯</nuxt-link
            >在團隊加成裡，給予以下單位+2額外攻擊vs<nuxt-link
              to="/units/Archer_Units"
              >射手單位</nuxt-link
            >:
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/KnightIcon.jpg" alt="" />
                    <nuxt-link to="/units/Knight">騎士</nuxt-link>→
                    <img class="gg" src="~assets/CavalierIcon.jpg" alt="" />
                    <nuxt-link to="/units/Cavalier">騎兵</nuxt-link>→
                    <img class="gg" src="~assets/PaladinIcon.jpg" alt="" />
                    <nuxt-link to="/units/Paladin">遊俠</nuxt-link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：
              <img
                src="~assets/CastleAgeUnique.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link
              >能夠加速<nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link
              >的研究時間(快25%)
            </li>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link
              >：投石手生產快20%。研發<nuxt-link to="/techs/Thumb_Ring"
                >拇指環</nuxt-link
              >速度快20%。
            </li>
            <li><nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>：視野+2。</li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：
              <img
                class="gg"
                src="~assets/Chemistry.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>和
              <img
                class="gg"
                src="~assets/Ballistics.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>研究快80%。
            </li>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >：投石手對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >攻擊+1。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：投石手更不容易被招降。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>需要城堡才能訓練。</li>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link>:<nuxt-link
                to="/techs/Couriers"
                >信使</nuxt-link
              >給予投石手+10％的移動速度。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>不需要城堡即可訓練。</li>
            <li>外觀改變。</li>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link>:<nuxt-link
                to="/techs/Couriers"
                >信使</nuxt-link
              >給予投石手+1/+2的防禦。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              投石手是少數幾個沒有精銳的特殊單位之一，其他是<nuxt-link
                to="/units/Imperial_Skirmisher"
                >帝王戰矛兵</nuxt-link
              >、
              <nuxt-link to="/units/Imperial_Camel">帝王駱駝騎兵</nuxt-link
              >和<nuxt-link to="/units/Condottiero">傭兵</nuxt-link>。
            </li>
            <li>
              投石手是少數幾個完全沒有防禦的特殊單位之一，其他是<nuxt-link
                to="/units/Imperial_Camel"
                >帝王駱駝騎兵</nuxt-link
              >和<nuxt-link to="/units/Gbeto">飛刀女獵手</nuxt-link>。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle"><nuxt-link to="">投石手</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Slingericon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">單位介紹</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4"><nuxt-link to="/civs/Incas">印加</nuxt-link></td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img
                class="gg"
                width="25px"
                src="~assets/Archery-range-logo.jpg"
                alt=""
              /><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">25秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">肉</td>
            <td class="unit4">30</td>
          </tr>
          <tr>
            <td class="unit3">金</td>
            <td class="unit4">40</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">數據</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">40</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">5(遠程)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +10對<nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
              <br />+10對<nuxt-link to="/armor/Armor_Class_Condottiero"
                >傭兵</nuxt-link
              >
              <br />+3對
              <nuxt-link to="/armor/Armor_Class_Ram">衝撞車</nuxt-link>
              <br />+1對<nuxt-link to="/armor/Armor_Class_Spearman"
                >槍兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">射速</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">開火間隔</td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">最小範圍</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">90%</td>
          </tr>
          <tr>
            <td class="unit3">發射速度</td>
            <td class="unit4">5.5</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">防禦類型</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link> <br />
              <nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊兵種</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.96</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">7</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" src="~assets/Slinger.png" alt=""
            /></gallery>
            <p><em>一群投石手</em></p>
          </div>
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" src="~assets/Slingers_Attack.png" alt=""
            /></gallery>
            <p><em>一群投石手正攻擊採礦營地</em></p>
          </div>
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" src="~assets/Sling_weapon.jpg" alt=""
            /></gallery>
            <p><em>真實的投石器</em></p>
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
