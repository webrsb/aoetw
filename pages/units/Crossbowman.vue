<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>弩兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>弩兵</b>在<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >的<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
            >訓練，可以有效率的屠殺
            <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>與<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >，但對抗<nuxt-link to="/units/Knight">騎士</nuxt-link>、
            <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>與<nuxt-link
              to="/units/Siege_Weapons"
              >攻城器</nuxt-link
            >較弱。
          </p>
          <p>
            除了<nuxt-link to="/civs/Spanish">西班牙人</nuxt-link
            >之外，所有<nuxt-link to="/civs">文明</nuxt-link>都有弩兵。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            升級弩兵後，本來訓練<nuxt-link to="/units/Archer">弓兵</nuxt-link
            >要35秒而縮短到27秒，所以升級弩兵非常重要。與馬和<nuxt-link
              to="/units/Infantry_Units"
              >步兵</nuxt-link
            >等近戰類兵種的配合，更可以凸顯<nuxt-link to="/units/Archer_Units"
              >遠程</nuxt-link
            >弩兵的威力，由近戰提供防護，遠程提供火力掩護，一直以來是世紀帝國最好的搭配。
          </p>
          <p>
            <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >，弩兵仍是一種主力兵種，尤其團戰你在外家時，雖然一開始數量不多時，容易被高<nuxt-link
              to="/elements/Hit_points"
              >血量</nuxt-link
            >、高防禦與高攻擊的<nuxt-link to="/units/Knight">騎士</nuxt-link
            >殺爆，但弩兵數量一但起來，配合地形與控兵則可以與
            <nuxt-link to="/units/Knight">騎士</nuxt-link
            >一戰，甚至控制戰場。混搭一些<nuxt-link to="/units/Spearman"
              >槍兵</nuxt-link
            >或是<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >也是不錯的組合，而對方有
            <nuxt-link to="/units/Mangonel">投石車</nuxt-link
            >來時，最好趕快出點<nuxt-link to="/units/Knight">騎士</nuxt-link
            >反制，因為<nuxt-link to="/units/Mangonel">投石車</nuxt-link
            >將大面積的殺傷你的弩兵。
          </p>
          <p>
            <nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
            >是非常有效對付弩兵的單位，而且不用<nuxt-link to="/resource/Gold"
              >黃金</nuxt-link
            >，但缺點就是只能拿來殺弩兵，打其他單位顯得無力。
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
                >弩砲</nuxt-link
              >、<nuxt-link to="/units/Mangonel">投石車</nuxt-link>、
              <nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link
              >、<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link
              >、<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>、
              <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>。
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
              /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1) <br />
              <img
                src="~assets/CastleAgeUnique.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Obsidian_Arrows">黑曜石之箭</nuxt-link
              >:<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
              ><nuxt-link to="/units/Archer_Units">弓兵單位</nuxt-link
              >對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >和
              <nuxt-link to="/armor/Armor_Class_stone_defense"
                >石頭建築</nuxt-link
              >攻擊+6，<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定
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
              /><nuxt-link to="/techs/Yeomen">義勇騎兵</nuxt-link>(+1,<nuxt-link
                to="/civs/Britons"
                >不列顛</nuxt-link
              >限定)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">開火速度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Thumb_Ring.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>(+18%)
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
              <img
                src="~assets/CastleAgeUnique.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Pavise">巨盾</nuxt-link>
              (+1/+1，<nuxt-link to="/games/ak">非洲王國</nuxt-link
              >資料片後的<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)
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

        <h3>剋射手系的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對<nuxt-link to="/armor/Armor_Class_Archer"
            >射手</nuxt-link
          >系的額外傷害，按造傷殺力排列。
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
                    <nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>→
                    <img class="gg" src="~assets/CataphractIcon.jpg" alt="" />
                    <nuxt-link to="/units/Cataphract">精銳聖騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/TarkanIcon.jpg" alt="" />
                    <nuxt-link to="/units/Tarkan">韃靼騎兵</nuxt-link>→
                    <img class="gg" src="~assets/TarkanIcon.jpg" alt="" />
                    <nuxt-link to="/units/Tarkan">精銳韃靼騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Huns">匈奴</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/New_Boyar.png" alt="" />
                    <nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>→
                    <img class="gg" src="~assets/New_Boyar.png" alt="" />
                    <nuxt-link to="/units/Boyar">精銳貴族鐵騎</nuxt-link
                    >(<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/GbetoIcon.png" alt="" />
                    <nuxt-link to="/units/Gbeto">飛刀女獵手</nuxt-link>→
                    <img class="gg" src="~assets/GbetoIcon.png" alt="" />
                    <nuxt-link to="/units/Gbeto">精銳飛刀女獵手</nuxt-link
                    >(<nuxt-link to="/civs/Malians">馬利</nuxt-link>限定)
                  </li>
                </ul>
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
                <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
                >：弩兵生產快15%。
              </li>
              <li>
                <nuxt-link to="/civs/Britons">不列顛</nuxt-link
                >：弩兵自<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
                >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
                >有額外+1/+2的射程。
              </li>
              <li>
                <nuxt-link to="/civs/Chinese">中國</nuxt-link>：弩兵<nuxt-link
                  to="/techs"
                  >科技</nuxt-link
                >在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
                >/帝王時代各便宜15%/20%。
              </li>
              <li>
                <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
                >：弩兵<nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link
                >快18%。
              </li>
              <li>
                <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>：弩兵在<nuxt-link
                  to="/techs/age/Castle_Age"
                  >城堡</nuxt-link
                >/帝王時代各便宜20%/30%。
              </li>
              <li>
                <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
                >：弩兵花費黃金成本少15%。
              </li>
              <li>
                <nuxt-link to="/civs/Turks">土耳其</nuxt-link>：<nuxt-link
                  to="/techs/Chemistry"
                  >化學</nuxt-link
                >免費。
              </li>
              <li>
                <nuxt-link to="/civs/Vietnamese">越南</nuxt-link
                >：弩兵在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
                >/帝王時代的血量增加15%/20%。免費<nuxt-link
                  to="/techs/Conscription"
                  >徵兵制度</nuxt-link
                >。
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
                >能夠加速<nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link
                >的研究時間(快25%)
              </li>
              <li>
                <nuxt-link to="/civs/Britons">不列顛</nuxt-link
                >：弩兵生產和升級快20%。研發<nuxt-link to="/techs/Thumb_Ring"
                  >拇指環</nuxt-link
                >速度快20%。
              </li>
              <li>
                <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>：弩兵<nuxt-link
                  to="/los.php"
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
                >：弩兵對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                  >標準建築</nuxt-link
                >攻擊+1。
              </li>
              <li>
                <nuxt-link to="/civs/Teutons">條頓</nuxt-link
                >：弩兵更不容易被招降。
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
              <li>訓練增加到35秒。</li>
              <li>
                對<nuxt-link to="/armor/Armor_Class_Spearman">槍兵類</nuxt-link
                >的攻擊+3。
              </li>
              <li>
                引入<nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>。
              </li>
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
                <nuxt-link to="/civs/Britons">不列顛</nuxt-link>:<nuxt-link
                  to="/techs/Yeomen"
                  >義勇騎兵</nuxt-link
                >移到了城堡時代。
              </li>
              <li>
                <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>:引進<nuxt-link
                  to="/techs/Obsidian_Arrows"
                  >黑曜石之箭</nuxt-link
                >。弩兵對
                <nuxt-link to="/armor/Armor_Class_Standard_Building"
                  >標準建築</nuxt-link
                >攻擊+4。
              </li>
            </ul>
            <h3>
              <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
            </h3>
            <ul>
              <li>
                <nuxt-link to="/civs/Italians">義大利</nuxt-link>:<nuxt-link
                  to="/techs/Pavise"
                  >巨盾</nuxt-link
                >現在會加成弩兵。
              </li>
              <li>
                <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>:<nuxt-link
                  to="/techs/Obsidian_Arrows"
                  >黑曜石之箭</nuxt-link
                >現在給弩兵對
                <nuxt-link to="/armor/Armor_Class_Standard_Building"
                  >標準建築</nuxt-link
                >攻擊+6。4.8版後增加對<nuxt-link
                  to="/armor/Armor_Class_stone_defense"
                  >石頭建築</nuxt-link
                >攻擊+6
              </li>
            </ul>
          </div>
          <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                就<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >而言，弓兵是全遊戲最便宜的<nuxt-link to="/units/Archer_Units"
                  >遠距離單位</nuxt-link
                >。
              </li>
              <li>
                30hp，全遊戲生命最低的單位，與<nuxt-link to="/units/Skirmisher"
                  >矛兵</nuxt-link
                >、<nuxt-link to="/units/Karambit_Warrior">爪刀勇士</nuxt-link
                >、<nuxt-link to="/units/Gbeto">飛刀女獵手</nuxt-link>並列。
              </li>
              <li>弓兵是唯一沒有任何防禦的遠距離單位。</li>
              <li>
                在最初的世紀帝國裡面，<nuxt-link to="/units/Archer"
                  >弓箭手</nuxt-link
                >和弩兵原本是兩種不同的兵種，弓箭手是便宜、射速快但不準確的垃圾單位，而弩兵則是花費木與金的黃金單位，準確度高、攻擊力強，但比較慢。
              </li>
            </ul>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>
              “弩是一種導彈武器，由連接到木材末端的一側的弓形物組成。弩像現代步槍一樣抵在肩膀上，然後用板機擊發彈藥。弩是在<nuxt-link
                to="/civs/Chinese"
                >中國</nuxt-link
              >古代發明的，但直到中世紀才在歐洲廣泛使用。它發射短的鑿子，石頭或金屬球而不是箭矢。這是一個強大的武器，但比最好的弓範圍更短。不過它使用簡單，製作相對便宜，而且依舊致命。一個只有練習弩幾個小時的農民也能很容易就殺死一個身著盔甲的並受過戰爭訓練的精銳騎士。歐洲的騎士一度試圖讓教會禁止武器。英國國王獅心王理查德就是在圍攻期間被弩槍所傷最後死亡。“
            </p>
          </div>
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Archerline.png" alt=""
              /></gallery>
              <p>
                <em><nuxt-link to="/units/Archer_Units">弓兵系</nuxt-link></em>
              </p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Crossbowman.png" alt=""
              /></gallery>
              <p><em>一群弩兵</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">弩兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/CrossbowmanIcon.jpg" width="45" alt="" />
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
              除了<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>之外的所有文明
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
                width="25px"
                src="~assets/Archery-range-logo.jpg"
                alt=""
              /><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">27秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木</td>
            <td class="unit4">25</td>
          </tr>
          <tr>
            <td class="unit3">金</td>
            <td class="unit4">45</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">35</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">5(遠程)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +3對<nuxt-link to="/armor/Armor_Class_Spearman">槍兵類</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">射速</td>
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
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">85%</td>
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
            <td class="unit4">0</td>
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
            <td class="unit3">視野</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">從升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/ArcherIcon.jpg" alt="" /><nuxt-link
                to="/units/Archer"
                >弓兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img class="gg" src="~assets/ArbalestIcon.jpg" alt="" /><nuxt-link
                to="/units/Arbalest"
                >強弩兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Arbalest-research.jpg"
                alt=""
              />350<nuxt-link to="/resource/Food">食物</nuxt-link>300黃金
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
export default {
  layout: 'allunit',
  components: {}
}
</script>
<style></style>
