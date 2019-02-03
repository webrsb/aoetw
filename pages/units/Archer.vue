<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>弓兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          弓兵於<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
          >的<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
          >訓練，雖然血量與攻擊都不高。但因為是遠程單位，而使得他格外具有威脅性，早期克制
          <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
          >及有效屠殺對方<nuxt-link to="/units/Villager">村民</nuxt-link
          >的明智選擇。
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          弓兵由於是遠程兵種，在<nuxt-link to="/techs/age/Feudal_Age"
            >封建時代</nuxt-link
          >就相當的致命，可以有效屠殺<nuxt-link to="/units/Villager"
            >村民</nuxt-link
          >來擾亂敵人的經濟，在數量成形前比較怕
          <nuxt-link to="/units/Scout_Cavalry">斥侯</nuxt-link>與<nuxt-link
            to="/units/Skirmisher"
            >矛兵</nuxt-link
          >，但在數量成形後，相對不怕
          <nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link>。相較於
          <nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
          >，弓兵比較不怕對手圍牆。而成本上不花費食物，可以讓玩家更快的推進到<nuxt-link
            to="/units/Scout_Cavalry"
            >城堡時代</nuxt-link
          >。即使對方上了城堡出了
          <nuxt-link to="/units/Knight">騎士</nuxt-link
          >，依靠著大量弓兵，對方還是會有所忌憚。而弓兵駐紮<nuxt-link
            to="/units/Watch_Tower"
            >箭塔</nuxt-link
          >裡則可以放出更多的箭矢，增加威力。
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
                to="/units/Scout_Cavalry"
                >斥侯</nuxt-link
              >、 <nuxt-link to="/units/Eagle_Scout">鷹斥侯</nuxt-link>。
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
              /><nuxt-link to="/techs/Obsidian_Arrows">黑曜石之箭</nuxt-link
              >:射箭場弓兵單位對<nuxt-link
                to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >和
              <nuxt-link to="/armor/Armor_Class_stone_defense"
                >石造建築</nuxt-link
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
              <br />
              <img
                src="~assets/CastleAgeUnique.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Pavise">巨盾</nuxt-link>
              (+1/+1，非洲王朝資料片後的<nuxt-link to="/civs/Italians"
                >義大利</nuxt-link
              >限定)
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
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>：弓兵生產快15%。
            </li>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link
              >：弓兵自城堡/帝王時代有額外+1/+2的射程。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：弓兵科技在封建/城堡/帝王時代各便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
              >：弓兵射速快18%。
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link
              >：弓兵在封建/城堡/帝王時代各便宜10%/20%/30%。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：弓兵花費黃金成本少15%。
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>：<nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >免費。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link
              >：弓兵在封建/城堡/帝王時代的血量增加10%/15%/20%。免費<nuxt-link
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
              >：弓兵生產和升級快20%。研發<nuxt-link to="/techs/Thumb_Ring"
                >拇指環</nuxt-link
              >速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>：弓兵<nuxt-link
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
              >：弓兵對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >攻擊+1。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：弓兵更不容易被招降。
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
            <li>訓練時間為27秒。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>訓練增加到35秒。</li>
            <li>
              對<nuxt-link to="/armor/Armor_Class_Spearman">槍兵系</nuxt-link
              >的攻擊+3。
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
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>:<nuxt-link
                to="/techs/Yeomen"
                >義勇騎兵</nuxt-link
              >移到了城堡時代。
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>:引進<nuxt-link
                to="/techs/Obsidian_Arrows"
                >黑曜石之箭</nuxt-link
              >。弓兵對
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
              >現在會加成弓兵。
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>:<nuxt-link
                to="/techs/Obsidian_Arrows"
                >黑曜石之箭</nuxt-link
              >現在給弓兵對
              <nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >攻擊+6。4.8版後增加對<nuxt-link
                to="/armor/Armor_Class_stone_defense"
                >石造建築</nuxt-link
              >攻擊+6
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>就木頭而言，弓兵是全遊戲最便宜的遠距離單位。</li>
            <li>
              30HP，全遊戲生命最低的單位，與矛兵、爪刀勇士、飛刀女獵手並列。
            </li>
            <li>弓兵是唯一沒有任何防禦的遠距離單位。</li>
            <li>
              在最初的世紀帝國裡面，弓箭手和弩兵原本是兩種不同的兵種，弓箭手是便宜、射速快但不準確的垃圾單位，而弩兵則是花費木與金的黃金單位，準確度高、攻擊力強，但比較慢。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            “弓在羅馬淪陷後依然是重要的軍事武器，但在被茂密森林覆蓋的歐洲地區則不然。弓箭手可以從遠處，從牆壁或其他掩體後面，以及在叢林中作戰。
            他們通常在襲擊的戰鬥中不具決定性，因為他們無法像步兵那樣直接擊倒敵人。他們主要擔任防禦部隊或是在軍隊交鋒時能破壞敵方陣型的輕裝部隊。如果在衝突發生之前，弓兵能造成敵人傷亡並消耗對方的精力，那麼友軍就更有可能擊倒敵人並獲得勝利。在守衛和攻擊城堡時，弓箭手也非常有用“
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle"><nuxt-link to="">弓兵</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/ArcherIcon.jpg" width="45" alt="" />
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
              <nuxt-link to="/units/Archer_Units">射手</nuxt-link>
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
                src="~assets/Feudal-age-reseach.jpg"
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
                width="25px"
                src="~assets/Archery-range-logo.jpg"
                alt=""
              /><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">35秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
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
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">30</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">4(遠程)</td>
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
            <td class="unit3">開火間隔</td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">80%</td>
          </tr>
          <tr>
            <td class="unit3">投射物速度</td>
            <td class="unit4">7</td>
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
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.96</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/CrossbowmanIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Crossbowman-research.jpg"
                alt=""
              />125食物75黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">33秒</td>
          </tr>
        </table>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4">
            <nuxt-link to="/img/Archerline.png"
              ><img class="imgn hg" src="~assets/Archerline.png" alt=""
            /></nuxt-link>
            <p><em>弓兵系</em></p>
          </div>
          <div class="col-md-4">
            <nuxt-link to="/img/Archer.png"
              ><img class="imgn hg" src="~assets/Archer.png" alt=""
            /></nuxt-link>
            <p><em>一群弓兵</em></p>
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
