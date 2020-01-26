<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>土耳其火槍兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>土耳其火槍兵</b>是<nuxt-link to="/civs/Turks">土耳其</nuxt-link
            >的<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
            >，能夠在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >的<nuxt-link to="/building/Castle">城堡</nuxt-link
            >中訓練。是個有高攻擊和近戰裝甲的<nuxt-link
              to="/units/Gunpowder_Unit"
              >火藥單位</nuxt-link
            >。
          </p>
          <p>
            土耳其火槍兵可以在<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >升級為<nuxt-link to="/units/Janissary">精銳土耳其火槍兵</nuxt-link
            >。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              土耳其火槍兵跟<nuxt-link to="/units/Hand_Cannoneer"
                >火槍兵</nuxt-link
              >一樣有強大<nuxt-link to="/elements/Attack">攻擊力</nuxt-link
              >但非常脆弱且命中率低。不過如果是對近距離的敵人一群的火槍兵能直接殺死他們或造成嚴重損傷。他們適合對付<nuxt-link
                to="/armor/Armor_Class_Infantry"
                >步兵</nuxt-link
              >不過<nuxt-link to="/units/Hand_Cannoneer"></nuxt-link
              >火槍兵實際上做得比他們好。土耳其火槍兵不適合對抗<nuxt-link
                to="/units/Archer_Units"
                >弓箭手</nuxt-link
              >和<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >因為前者有遠程射程而後者速度很快，<nuxt-link
                to="/units/Bombard_Cannon"
                >火砲</nuxt-link
              >跟<nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >對土耳其火槍兵也是致命的威脅。不過複數的土耳其火槍兵可以在受到太多傷害之前殺死上面單位。
            </li>
            <li>
              <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>、<nuxt-link
                to="/units/Samurai"
                >日本武士</nuxt-link
              >和<nuxt-link to="/units/Condottiero">傭兵</nuxt-link
              >都對土耳其火槍兵有攻擊加成。
            </li>
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
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>、<nuxt-link
                to="/building"
                >建築物</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>、<nuxt-link
                to="/units/Scorpion"
                >弩砲</nuxt-link
              >、<nuxt-link to="/units/Mangonel">投石車</nuxt-link>、<nuxt-link
                to="/units/Samurai"
                >日本武士</nuxt-link
              >、<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>、<nuxt-link
                to="/units/Condottiero"
                >傭兵</nuxt-link
              >、<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>。
            </td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/padded_archer_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Padded_Archer_Armor">弓兵布甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/leather_archer_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Leather_Archer_Armor">弓兵皮甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/ring_archer_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Ring_Archer_Armor">弓兵環甲</nuxt-link
              >(+1/+2)
            </td>
          </tr>

          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Conversion">招降</nuxt-link>抵抗
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/faith.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link><br />
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
                src="~assets/conscription.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>(+33%)
            </td>
          </tr>
        </table>

        <h3>剋土耳其火槍兵的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對土耳其火槍兵的額外傷害，按造殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+15攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >精銳日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HuskarlIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Huskarl">精銳哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/CondottieroIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link
                    >(<nuxt-link to="/civs/Italians">義大利</nuxt-link
                    >和同盟限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HuskarlIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GenitourIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Imperialskirmishericon.png"
                      alt=""
                    /><nuxt-link to="/units/Imperial_Skirmisher"
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
                      src="~assets/EliteSkirmisherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GenitourIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SkirmisherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          以下<nuxt-link to="/elements/Team_Bonus">團隊加分</nuxt-link
          >可讓以下單位對土耳其火槍兵有額外攻擊力
          <div class="n1">
            <nuxt-link to="/civs/Persians">波斯</nuxt-link
            >在團隊加分裡，給予以下單位+2額外攻擊vs<nuxt-link
              to="/units/Archer_Units"
              >射手單位</nuxt-link
            >。
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/KnightIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Knight">騎士</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/CavalierIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Cavalier">騎兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/PaladinIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Paladin">遊俠</nuxt-link>
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
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link
              >：土耳其火槍兵HP+25%。
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
              >能夠提高土耳其火槍兵的生產速度還有加速<nuxt-link
                to="/techs/Conscription"
                >徵兵制度</nuxt-link
              >的研究時間(快25%)
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：土耳其火槍兵更不容易被招降。
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link
              >：土耳其火槍兵訓練速度快20%。
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
              土耳其火槍兵有15的攻擊(精銳是18)。非精銳土耳其火槍兵對<nuxt-link
                to="/armor/Armor_Class_Infantry"
                >步兵單位</nuxt-link
              >有額外+4攻擊，精銳土耳其火槍兵則對<nuxt-link
                to="/armor/Armor_Class_Infantry"
                >步兵單位</nuxt-link
              >有額外+8攻擊並對<nuxt-link to="/armor/Armor_Class_Building"
                >建築</nuxt-link
              >額外+3攻擊。
            </li>
            <li>土耳其火槍兵有55%的命中率。</li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link
              >：土耳其火槍兵HP+50%。不過團隊加分不影響精銳土耳其火槍兵。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              土耳其火槍兵現在有17的攻擊(精銳是22)。不過移除對<nuxt-link
                to="/armor/Armor_Class_Infantry"
                >步兵單位</nuxt-link
              >和<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link
              >額外加成攻擊。
            </li>
            <li>土耳其火槍兵%的命中率調降為50%。</li>
            <li>引進<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link></li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link
              >：土耳其火槍兵現在HP+25%。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link
              >：精銳土耳其火槍兵現在會受<nuxt-link to="/civs/Turks"
                >土耳其</nuxt-link
              >的團隊加分了。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              土耳其火槍兵最初的設定是成為重裝步行<nuxt-link to="/units/Archer"
                >弓箭手</nuxt-link
              >，而不是特殊的火槍兵，因為更符合世紀帝國II中世紀時代的歷史。土耳其火槍兵也可以升級為特殊的火槍兵，後來由於已經有特殊<nuxt-link
                to="/units/Archer_Units"
                >射手單位</nuxt-link
              >存在而改變。
            </li>
            <li>
              當十個土耳其火槍兵駐紮到<nuxt-link to="/civs/Teutons"
                >條頓</nuxt-link
              >人的<nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link
              >時火砲塔會射出三個砲彈!
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            土耳其軍隊中的一些最好的部隊是土耳其火槍兵，這些人是兒童時被捉來當奴隸，然後沉浸在伊斯蘭教的統治下並成為狂熱的戰士，他們穿著與眾不同的白色頭飾，並在音樂伴奏下進行戰鬥，他們徒步並使用各種不同的武器，這些武器最遠曾到達中東。軍隊是土耳其火槍兵的整個生命，他們以他們的能力感到自豪，他們成功地攻占君士坦丁堡以及領導土耳其成功抵抗馬耳他和維也納的襲擊。
          </p>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Janissary.png" alt=""
              /></gallery>
              <p><em>一群土耳其火槍兵</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  src="~assets/20060421130007janissry2.jpg"
                  alt=""
              /></gallery>
              <p><em>一群攻擊中的土耳其火槍兵</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Jan1.jpg" alt=""
              /></gallery>
              <p><em>土耳其火槍兵初級軍官</em></p>
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
              <div class="unititle" style="color: #fff">土耳其火槍兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/JanissaryIcon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/castle.png"
                width="45"
                alt=""
              /><nuxt-link to="/building/Castle">城堡</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">17秒</td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">55</td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">44/50(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">
              17/22(精銳)(<nuxt-link to="/units/Archer_Units">遠程</nuxt-link>)
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Ram">衝撞車</nuxt-link
              >攻擊+2/+3(精銳)
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">3.49</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">4/0(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">8</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">50%</td>
          </tr>
          <tr>
            <td class="unit3">發射速度</td>
            <td class="unit4">5.5</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">1/2(精銳)</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">防禦類別</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">弓兵</nuxt-link>
              <br /><nuxt-link to="/armor/Armor_Class_Gunpowder_Unit"
                >火藥單位</nuxt-link
              >
              <br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.96</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">10</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/JanissaryIcon.png"
                alt=""
              />精銳土耳其火槍兵
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/elit_unique_unit.png"
                alt=""
              />850食物750黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">55秒</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
