<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>長弓兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <b>長弓兵</b>是<nuxt-link to="/civs/Britons">不列顛人</nuxt-link
          >的<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
          >。徒步<nuxt-link to="/units/Archer_Units">遠程單位</nuxt-link
          >，射程很遠。因此伴隨著低<nuxt-link to="/elements/Hit_points"
            >生命值</nuxt-link
          >。 <br />
          <br />長弓兵能夠在<nuxt-link to="/techs/age/Imperial_Age"
            >帝王時代</nuxt-link
          >升級成精銳長弓兵。
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            長弓兵是英格蘭與威爾士的弓箭手，擁有強大的攻擊與很遠的射程，這些士兵長久來為<nuxt-link
              to="/civs/Britons"
              >英國</nuxt-link
            >立下不朽的汗馬功。
          </p>
          <p>
            普通的長弓兵與<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
            >的射程相同，但升級到精銳後就增加1的射程。通過<nuxt-link
              to="/building/Blacksmith"
              >兵工廠</nuxt-link
            >與<nuxt-link to="/civs/Britons">不列顛</nuxt-link>本身的<nuxt-link
              to="/civs"
              >文明</nuxt-link
            >加成，<nuxt-link to="/units/Longbowman">精銳長弓兵</nuxt-link
            >射程高達12，甚至超越<nuxt-link to="/building/Castle"
              >城堡</nuxt-link
            >、<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
            >與<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>。
          </p>
          <p>
            單獨行動的長弓兵影響力非常的小，相對地成群結隊能夠帶來致命威脅，因為在承受攻擊前，長距離的優勢能先殲滅敵人。
          </p>
          <p>
            在近戰單位的保護下，長弓兵能夠完美的輸出給予對手沉痛的打擊。倘若沒有保護的近戰單位，組織的長弓兵能夠利用風箏技巧打擊接近的敵人，但面對<nuxt-link
              to="/units/Cavalry_Archer"
              >馬弓騎兵</nuxt-link
            >與移動快速<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link
            >，難以發揮效果。
          </p>
          <p>
            長弓兵最好選擇堅守崗位模式，避免隨意地攻擊後，破壞本身的陣型讓敵人趁虛而入。由於<nuxt-link
              to="/civs/Britons"
              >不列顛人</nuxt-link
            >缺乏<nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link
            >，缺乏100%命中率與提升<nuxt-link to="/elements/Rate_of_Fire"
              >攻擊速度</nuxt-link
            >，最好避免與其他擁有<nuxt-link to="/techs/Thumb_Ring"
              >拇指環</nuxt-link
            >科技的弓手對射。
          </p>
          <p>
            長弓兵在面對<nuxt-link to="/units/Siege_Weapons">攻城器</nuxt-link
            >，例如<nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link
            >與<nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link
            >時，能夠在<nuxt-link to="/units/Siege_Weapons">攻城器</nuxt-link
            >攻擊範圍外先摧毀目標。但長弓兵在攻城器的攻擊範圍下，將會承受毀滅性的打擊。
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
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>、<nuxt-link
                to="/units/Archer_Units"
                >弓兵</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>、<nuxt-link
                to="/units/Samurai"
                >日本武士</nuxt-link
              >、<nuxt-link to="/units/Siege_Weapons">攻城器</nuxt-link
              >、<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >、<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>、<nuxt-link
                to="/units/Eagle_Warrior"
                >鷹勇士</nuxt-link
              >、<nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>。
            </td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Attack">攻擊力</nuxt-link>
            </td>
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
              /><nuxt-link to="/techs/Yeomen">義勇騎兵</nuxt-link
              >(+1，<nuxt-link to="/civs/Britons">不列顛</nuxt-link>限定)
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
              >:對移動目標命中率上升
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
                src="~assets/Faith.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
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

        <h3>剋長弓兵的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對長弓兵的額外傷害，按造殺傷力排列。
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
                    <img
                      class="gg"
                      src="~assets/HuskarlIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Huskarl">精銳哥德衛隊</nuxt-link
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
                    <img
                      class="gg"
                      src="~assets/HuskarlIcon.jpg"
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
                      src="~assets/GenitourIcon.jpg"
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
                      src="~assets/EliteSkirmisherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GenitourIcon.jpg"
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
                      src="~assets/SkirmisherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          以下<nuxt-link to="/elements/Team_Bonus">團隊加分</nuxt-link
          >可讓以下單位對長弓兵有額外攻擊力
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
                      src="~assets/KnightIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Knight">騎士</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/CavalierIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Cavalier">騎兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/PaladinIcon.jpg"
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
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link
              >：長弓兵自<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >有額外+1/+2的射程。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏人</nuxt-link>：
              <img
                src="~assets/CastleAgeUnique.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link
              >能夠提高長弓兵的生產速度還有加速<nuxt-link
                to="/techs/Conscription"
                >徵兵制度</nuxt-link
              >和<nuxt-link to="/techs/Yeomen">義勇騎兵</nuxt-link
              >的研究時間(快25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>：長弓兵<nuxt-link
                to="/los.php"
                >視野</nuxt-link
              >+2。
            </li>
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
              >：長弓兵對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >攻擊+1。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：長弓兵抵抗招降能力增加。
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
            <li>訓練時間為19秒。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/units/Longbowman">長弓兵</nuxt-link
              >獲得+2的攻擊vs<nuxt-link to="/armor/Armor_Class_Spearman"
                >槍兵</nuxt-link
              >
            </li>
            <li>
              <img
                src="~assets/CastleAgeUnique.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Yeomen">義勇騎兵</nuxt-link>引入。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>訓練時間為18秒。</li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              不列顛長弓兵具有恐怖的力量，一般的長弓拉個滿月大致需100—120磅，也就是45—55公斤的力，最強的達到200磅（90公斤）在現在的弓箭愛好者用70磅（約32kg）的弓已經非常吃力了，一般用的是40~50磅左右的弓（這也奧運會男子射箭項目用弓的磅數），在戰場上能用120磅的長弓連續射出十幾二十支箭是非常恐怖的事情。
            </li>
            <li>
              事實上，長弓兵在戰場上一次性射出十幾二十支箭，射完一輪基本上已經脫力了。
            </li>
            <li>
              遊戲中的長弓兵箭袋都是背上身上，而現實中的長弓兵箭袋都是掛在腰間。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-12">
            長弓兵的長弓一般長5英尺（1.5米）左右，大致齊眉，個別的長達1.8—2米，比歐洲常見的4尺弓要長。這是單體弓增強威力的必然選擇。為了追求較強的彈力，就必須使用堅硬的材質，不易彎曲，所以必須做得長一些。一般的長弓拉個滿月大致需100—120磅，也就是45—55公斤的力，最強的達到180磅（80公斤）。在現在的弓箭愛好者用70磅（約32kg）的弓已經非常吃力了，一般用的是40~50磅左右的弓（這也奧運會男子射箭項目用弓的磅數），在戰場上能用120磅的長弓連續射出十幾二十支箭是非常恐怖的事情。
          </div>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Longbowman.png" alt=""
              /></gallery>
              <p><em>一群長弓兵</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Longbowman_range.jpg" alt=""
              /></gallery>
              <p><em>與其他兵種的最大射程比較</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  src="~assets/Longbowman_real_life.jpg"
                  alt=""
              /></gallery>
              <p><em>現實的長弓兵，請注意他的箭袋在腰間</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">長弓兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/LongbowmanIcon.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Archer_Units">射手</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>
            </td>
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
                src="~assets/Castleicon.png"
                width="45"
                alt=""
              /><nuxt-link to="/building/Castle">城堡</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">18秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">35</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">40</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">35, 40(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">6, 7(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +2對<nuxt-link to="/armor/Armor_Class_Spearman">槍兵類</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">5, 6(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">70%, 80%(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">發射速度</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0, 1(精銳)</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.96</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">7, 8(精銳)</td>
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
                src="~assets/LongbowmanIcon.jpg"
                alt=""
              />精銳長弓兵
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Elite-unique-research.jpg"
                alt=""
              />850<nuxt-link to="/resource/Food">食物</nuxt-link>850<nuxt-link
                to="/resource/Gold"
                >黃金</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">60秒</td>
          </tr>
        </table>
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
