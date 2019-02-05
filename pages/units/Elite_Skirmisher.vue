<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>戰矛兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            戰矛兵（HD稱為精銳戰矛兵，升級前叫做戰矛兵，在HD以前玩家習慣講矛兵，升級為戰矛兵。）是
            <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>對抗
            <nuxt-link to="/units/Archer_Units">弓箭手</nuxt-link
            >的單位，對<nuxt-link to="/units/Archer_Units">弓箭手</nuxt-link>和
            <nuxt-link to="/Cavalry_units/Archer">馬弓騎兵</nuxt-link
            >都有額外的加成，非常適合對付其他遠程單位。
          </p>
          <p>
            除了
            <nuxt-link to="/civs/Turks">土耳其人</nuxt-link
            >，所有文明都有戰矛兵。
          </p>
          <p>
            <nuxt-link to="/civs/Vietnamese">越南</nuxt-link
            >和他的同盟有<nuxt-link to="/units/Imperial_Skirmisher"
              >帝王戰矛兵</nuxt-link
            >。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            除了對付 <nuxt-link to="/units/Archer">弓箭手</nuxt-link>、
            <nuxt-link to="/units/Spearman">長槍兵</nuxt-link
            >與其他遠程單位外，戰矛兵顯得非常虛弱，他們攻擊、射速都低還有最小射程，對步兵及騎兵單位難以有效的進行傷害，但非常克制弓箭手。
          </p>
          <p>
            由於戰矛兵生產不用黃金，所以是一個垃圾兵單位，在缺少黃金時期，是非常重要的兵種，由於成本低、訓練時間短，在某些情況下，可以用數量壓制對手。
          </p>
          <p>
            戰矛兵對槍兵有額外的傷害，雙方數量少時，槍兵將獲勝，但數量一多起來，戰矛兵將克制槍兵。
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
              <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              近戰單位、<nuxt-link to="/units/Siege_Weapons"
                >攻城器單位</nuxt-link
              >。
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
              /><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1)
              <br />
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
              /><nuxt-link to="/techs/Bracer">護腕</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Chemistry.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1)
              <br />
              <img
                src="~assets/CastleAgeUnique.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Atlatl">擲矛器</nuxt-link>(+1，<nuxt-link
                to="/civs/Aztecs"
                >阿茲特克</nuxt-link
              >限定)
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
              /><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1)
              <br />
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
              /><nuxt-link to="/techs/Bracer">護腕</nuxt-link>(+1)
              <br />
              <img
                src="~assets/CastleAgeUnique.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Atlatl">擲矛器</nuxt-link>(+1，<nuxt-link
                to="/civs/Aztecs"
                >阿茲特克</nuxt-link
              >限定)
              <br />
              <img
                src="~assets/CastleAgeUnique.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Yeomen">義勇騎兵</nuxt-link>(+1,<nuxt-link
                to="/civs/Britons"
                >不列顛</nuxt-link
              >限定)
              <br />
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
              >:對移動目標命中率上升
              <br />
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
              >(+1/+1)
              <br />
              <img
                class="gg"
                src="~assets/Leatherarcherarmor.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Leather_Archer_Armor">弓兵皮甲</nuxt-link
              >(+1/+1)
              <br />
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
        </table>

        <h3>剋射手系的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對射手系的額外傷害，按造傷殺力排列。
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
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/HuskarlIcon.jpg" alt="" />
                    <nuxt-link to="/units/Huskarl">精銳哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
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
              </div>
              <div class="col-md-6">
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
                <div style="margin:12px 0px;"><strong>+0攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/KnightIcon.jpg" alt="" />
                    <nuxt-link to="/units/Knight">騎士</nuxt-link>→
                    <img class="gg" src="~assets/CavalierIcon.jpg" alt="" />
                    <nuxt-link to="/units/Cavalier">騎兵</nuxt-link>→
                    <img class="gg" src="~assets/PaladinIcon.jpg" alt="" />
                    <nuxt-link to="/units/Paladin">遊俠</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/CataphractIcon.jpg" alt="" />
                    <nuxt-link to="/units/Knight">聖騎兵</nuxt-link>→
                    <img class="gg" src="~assets/CataphractIcon.jpg" alt="" />
                    <nuxt-link to="/units/Paladin">精銳聖騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/TarkanIcon.jpg" alt="" />
                    <nuxt-link to="/units/Knight">韃靼騎兵</nuxt-link>→
                    <img class="gg" src="~assets/TarkanIcon.jpg" alt="" />
                    <nuxt-link to="/units/Paladin">精銳韃靼騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Huns">匈奴</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/New_Boyar.png" alt="" />
                    <nuxt-link to="/units/Knight">貴族鐵騎</nuxt-link>→
                    <img class="gg" src="~assets/New_Boyar.png" alt="" />
                    <nuxt-link to="/units/Paladin">精銳貴族鐵騎</nuxt-link
                    >(<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/GbetoIcon.png" alt="" />
                    <nuxt-link to="/units/Knight">飛刀女獵手</nuxt-link>→
                    <img class="gg" src="~assets/GbetoIcon.png" alt="" />
                    <nuxt-link to="/units/Paladin">精銳飛刀女獵手</nuxt-link
                    >(<nuxt-link to="/civs/Malians">馬利</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        團隊加成:<nuxt-link to="/civs/Persians">波斯</nuxt-link
        >在團隊加成裡，給予以下單位+2額外攻擊vs<nuxt-link
          to="/units/Archer_Units"
          >射手單位</nuxt-link
        >。
        <div class="n1">
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
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>：生產快15%。
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>：成本便宜25%。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對戰矛兵有利的科技在城堡/帝王時代各便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：兵工廠升級科技免黃金
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>：<nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >免費。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link
              >：戰矛兵在城堡/帝王時代的血量增加15%/20%。免費<nuxt-link
                to="/techs/Conscription"
                >徵兵制度</nuxt-link
              >。
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
              >能夠加速<nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link
              >的研究時間(快25%)
            </li>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link
              >：戰矛兵生產快20%。研發<nuxt-link to="/techs/Thumb_Ring"
                >拇指環</nuxt-link
              >速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>：戰矛兵<nuxt-link
                to=""
                >視野</nuxt-link
              >+2。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >和<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>快80%。
            </li>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >：戰矛兵對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >攻擊+1。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：戰矛兵更不容易被招降。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link
              >:可升級為<nuxt-link to="/units/Imperial_Skirmisher"
                >帝王戰矛兵</nuxt-link
              >。
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
            <li>
              矛兵對<nuxt-link to="/armor/Armor_Class_Spearman">槍兵</nuxt-link
              >攻擊+3。
            </li>
            <li>引入<nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>。</li>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>:引進<nuxt-link
                to="/techs/Yeomen"
                >義勇騎兵</nuxt-link
              >，只能在帝王時代研發。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/techs/Yeomen">義勇騎兵</nuxt-link>搬移到城堡時代。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
              >:矛兵有+15％的射擊速度，4.8版本後被移除。
            </li>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link
              >:4.8版本前<nuxt-link to="/techs/Pavise">巨盾</nuxt-link
              >會影響矛兵，4.8版本後移除。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              矛兵是所有單位最便宜的，與<nuxt-link
                to="/armor/Armor_Class_Spearman"
                >槍兵</nuxt-link
              >相同，所需60資源，且不用黃金。
            </li>
            <li>
              攻擊只有2是所有陸上單位最低的，與<nuxt-link
                to="/units/Battering_Ram"
                >輕型衝撞車</nuxt-link
              >相同。
            </li>
            <li>
              血量30，與飛刀女獵手、爪刀勇士和弓兵相同，是遊戲中最少血量的單位。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">戰矛兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/EliteSkirmisherIcon.jpg" width="45" alt="" />
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
            <td class="unit4">除了土耳其之外的所有文明</td>
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
                src="~assets/Feudal-age-reseach.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">22秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木</td>
            <td class="unit4">35</td>
          </tr>
          <tr>
            <td class="unit3">肉</td>
            <td class="unit4">25</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">數據</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">35</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Attack">攻擊</nuxt-link>
            </td>
            <td class="unit4">3(遠程)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +5對<nuxt-link to="/armor/Armor_Class_Archer">弓箭手</nuxt-link>
              <br />+4對<nuxt-link to="/armor/Armor_Class_Spearman"
                >槍兵類</nuxt-link
              >
              <br />+2對<nuxt-link to="/armor/Armor_Class_Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>
            </td>
            <td class="unit4">3.05</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">5</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3">最小射程</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">90%</td>
          </tr>
          <tr>
            <td class="unit3">投射物速度</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.96</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">單位演變</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">從升級</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/SkirmisherIcon.jpg"
                alt=""
              /><nuxt-link to="/Eliteunits/Skirmisher">矛兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Imperialskirmishericon.png"
                alt=""
              /><nuxt-link to="/units/Imperial_Skirmisher"
                >帝王戰矛兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Imperialskirmisherresearch.png"
                alt=""
              />300木450金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">50秒</td>
          </tr>
        </table>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4">
            <gallery src="~assets/Skirmishers_Line.png"
              ><img class="imgn hg" src="~assets/Skirmishers_Line.png" alt=""
            /></gallery>
            <p><em>矛兵系</em></p>
          </div>
          <div class="col-md-4">
            <gallery src="~assets/Eliteskirmisher.png"
              ><img class="imgn hg" src="~assets/Eliteskirmisher.png" alt=""
            /></gallery>
            <p><em>一群戰矛兵</em></p>
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
