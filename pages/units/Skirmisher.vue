<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>矛兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>矛兵</b
            ><nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
            >於<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
            >訓練，能有效對付<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
            >。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            除了對付<nuxt-link to="/units/Archer">弓箭手</nuxt-link
            >外，矛兵顯得非常虛弱，他們攻擊、<nuxt-link
              to="/elements/Rate_of_Fire"
              >射速</nuxt-link
            >都低還有最小射程，對<nuxt-link to="/units/Infantry_Units"
              >步兵</nuxt-link
            >及<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link
            >難以有效的進行傷害，但非常克制<nuxt-link to="/units/Archer_Units"
              >弓箭手單位</nuxt-link
            >。
          </p>
          <p>
            由於矛兵生產不用<nuxt-link to="/resource/Gold">黃金</nuxt-link
            >，所以是一個<nuxt-link to="/units/Trash_Unit">垃圾兵單位</nuxt-link
            >，在缺少<nuxt-link to="/resource/Gold">黃金</nuxt-link
            >時期，是非常重要的兵種，由於成本低、訓練時間短，在某些情況下，可以用數量壓制對手。在<nuxt-link
              to="/maps/Arabia"
              >阿拉伯</nuxt-link
            >單挑時矛兵甚至比弓兵還來的好用。
          </p>
          <p>
            矛兵對<nuxt-link to="/armor/Armor_Class_Spearman">槍兵</nuxt-link
            >有額外的傷害，雙方數量少時，<nuxt-link to="/units/Spearman"
              >槍兵</nuxt-link
            >將獲勝，但數量一多起來，矛兵將克制槍兵。
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
            <td class="tta1" style="width:10%">
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
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Atlatl"
                >擲矛器</nuxt-link
              >(+1，<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊範圍</td>
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
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Atlatl"
                >擲矛器</nuxt-link
              >(+1，<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
              <br />
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Yeomen"
                >義勇騎兵</nuxt-link
              >(+1,<nuxt-link to="/civs/Britons">不列顛</nuxt-link>限定) <br />
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Andean_Sling"
                >安地斯彈弓</nuxt-link
              >:矛兵和<nuxt-link to="/units/Slinger">投石手</nuxt-link
              >取消最小射程，<nuxt-link to="/civs/Incas">印加</nuxt-link>限定
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">命中率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/ballistics.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link
              >:對移動目標命中率上升<br />
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
                src="~assets/padded_archer_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Padded_Archer_Armor">弓兵護甲</nuxt-link
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
              /><nuxt-link to="/techs/Ring_Archer_Armor">弓兵鏈甲</nuxt-link
              >(+1/+2)
              <br />
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Tower_Shields">塔盾</nuxt-link
              >:長槍兵系和矛兵遠程護甲+2。<nuxt-link to="/civs/Lithuanians"
                >立陶宛</nuxt-link
              >限定
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
              /><nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link>(+33%)
            </td>
          </tr>
        </table>

        <h3>剋射手系的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對<nuxt-link to="/armor/Armor_Class_Archer"
            >射手</nuxt-link
          >系的額外傷害，按造殺傷力排列。
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
                      src="~assets/Elite_cannon_galleonicon.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >
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
              </div>
              <div class="col-md-6">
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
                    <img class="gg" src="~assets/SkirmisherIcon.png" alt="" />
                    矛兵
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+0攻擊</strong></div>
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
                    /><nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/PaladinIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Paladin">遊俠</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CataphractIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/CataphractIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Cataphract"
                      >精銳拜占庭聖騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/TarkanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Tarkan">答剌罕騎兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/TarkanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Tarkan">精銳答剌罕騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Huns">匈人</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/New_Boyar.png"
                      alt=""
                    /><nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/New_Boyar.png"
                      alt=""
                    /><nuxt-link to="/units/Boyar">精銳貴族鐵騎</nuxt-link
                    >(<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GbetoIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Gbeto">飛刀女獵手</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/GbetoIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Gbeto">精銳飛刀女獵手</nuxt-link
                    >(<nuxt-link to="/civs/Malians">馬利</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <nuxt-link to="/elements/Team_Bonus">團隊加分</nuxt-link>:<nuxt-link
          to="/civs/Persians"
          >波斯</nuxt-link
        >在團隊加分裡，給予以下單位+2額外攻擊vs<nuxt-link
          to="/units/Archer_Units"
          >射手單位</nuxt-link
        >。
        <div class="n1">
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
                  /><nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link>→
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
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>：生產快11%。
            </li>
            <li>
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link
              >：兵工廠矛兵科技升級所需食物-50%。
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>：成本便宜25%。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對矛兵有利的<nuxt-link to="/techs">科技</nuxt-link
              >在封建/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >各便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">朝鮮</nuxt-link
              >：矛兵木材成本便宜20%。矛兵護甲升級免費。
            </li>
            <li>
              <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link
              >：矛兵移動速度提高10%。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：矛兵科技研發速度+30%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >升級科技免黃金。
            </li>
            <li>
              <nuxt-link to="/civs/Tatars">韃靼</nuxt-link
              >：矛兵高地戰鬥傷害+50%。<nuxt-link to="/techs/Thumb_Ring"
                >拇指環</nuxt-link
              >免費。
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>：<nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >免費。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link
              >：矛兵血量增加20%。<nuxt-link to="/techs/Conscription"
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
              >能夠加速<nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link
              >的研究時間(快25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link
              >：矛兵生產快20%。研發<nuxt-link to="/techs/Thumb_Ring"
                >拇指環</nuxt-link
              >速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>：<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >提升矛兵護甲和攻擊的科技研發快80％。
            </li>
            <li>
              <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link>：<nuxt-link
                to="/techs/Heresy"
                >異端邪說</nuxt-link
              >與<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>研發快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >和<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>快80%。
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>：矛兵<nuxt-link
                to="/elements/Line_of_Sight"
                >視野</nuxt-link
              >+2。
            </li>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >：矛兵對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >攻擊+2。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：矛兵更不容易被招降。
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
            <li>升級到戰矛兵成本為250W/160G。</li>
          </ul>
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
              <nuxt-link to="/techs/Yeomen">義勇騎兵</nuxt-link>搬移到<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>4.8版本後升級戰矛兵成本為200W/100G。</li>
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
          <h3>
            <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>升級戰矛兵成本增加為230W/130G。</li>
            <li>
              <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link
              >：引入<nuxt-link to="/techs/Tower_Shields">塔盾</nuxt-link>。
            </li>
            <li>
              (39284更新)
              <nuxt-link to="/civs/Koreans">朝鮮</nuxt-link
              >弓兵的木材成本從–15%改為-20%。
            </li>
            <li>
              (36906更新) 立陶宛的塔盾中矛兵遠程護甲從+1增至+2。
            </li>
            <li>
              (42848更新) 朝鮮矛兵護甲升級免費。
            </li>
            <li>
              (42848更新)
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link
              >團隊加分中<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
              >工作效率從+50%增加成+80%。
            </li>
            <li>
              (42848更新) 保加利亞兵工廠科技升級所需食物-50%。
            </li>
            <li>
              (42848更新)
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>科技研發速度
              +30%。
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
              血量30，與<nuxt-link to="/units/Gbeto">飛刀女獵手</nuxt-link
              >、<nuxt-link to="/units/Karambit_Warrior">爪刀勇士</nuxt-link
              >和弓兵相同，是遊戲中最少血量的單位。
            </li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" src="~assets/Skirmishers_Line.png" alt=""
            /></gallery>
            <p><em>矛兵系</em></p>
          </div>
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" src="~assets/Skirmisher.png" alt=""
            /></gallery>
            <p><em>一群矛兵</em></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">矛兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/SkirmisherIcon.png"
                  alt=""
                />
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
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/feudal_age.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/archery_range.png"
                alt=""
              /><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">22秒</td>
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
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">25</td>
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
            <td class="unit4">30</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Attack">攻擊</nuxt-link>
            </td>
            <td class="unit4">
              2(<nuxt-link to="/units/Archer_Units">遠程</nuxt-link>)
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +3對<nuxt-link to="/armor/Armor_Class_Archer">弓箭手</nuxt-link
              ><br />+3對<nuxt-link to="/armor/Armor_Class_Spearman"
                >槍兵類</nuxt-link
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
            <td class="unit4">4</td>
          </tr>

          <tr>
            <td class="unit3">最小射程</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">90%</td>
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
            <td class="unit4">3</td>
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
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">6</td>
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
                src="~assets/EliteSkirmisherIcon.png"
                alt=""
              /><nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/elite_skirmisher.png"
                alt=""
              />230木材130黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">50秒</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allunit' })

export default {
  components: {}
}
</script>
<style></style>
