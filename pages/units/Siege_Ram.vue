<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>重型衝撞車</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            重型衝撞車，俗稱大衝車。要等到帝王時期花費1000的食物才能研發，在許多高手心目中，有沒有重型衝撞車為判定一個文明，後帝王強不強的關鍵原因之一。除了對於建築物強大的破壞力，給對手的視覺震撼力也是相當可怕。
          </p>
          <p>重型衝撞車移動速度與駐紮數量前後比較</p>
          <ul>
            <li>
              駐紮步兵數量0→移動速度0.6 (<nuxt-link to="/units/War_Elephant"
                >戰象</nuxt-link
              >移動速度0.6)
            </li>
            <li>
              駐紮步兵數量1→移動速度0.65 (<nuxt-link to="/units/Scorpion"
                >弩砲</nuxt-link
              >、
              <nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
              >移動速度0.65)
            </li>
            <li>
              駐紮步兵數量2→移動速度0.7(<nuxt-link to="/units/Monk"
                >僧侶</nuxt-link
              >0.7)
            </li>
            <li>駐紮步兵數量3→移動速度0.75</li>
            <li>
              駐紮步兵數量4→移動速度0.8(<nuxt-link to="/units/Villager"
                >村民</nuxt-link
              >、<nuxt-link to="/units/Trebuchet">巨型投石機0.8</nuxt-link>)
            </li>
            <li>駐紮步兵數量5→移動速度0.85</li>
            <li>
              駐紮步兵數量6→移動速度0.9(<nuxt-link to="/units/Champion"
                >劍兵勇士</nuxt-link
              >0.9)
            </li>
          </ul>
        </div>
        <h3>文明可訓練與否</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><span
                    class="glyphicon glyphicon-ok okc"
                    aria-hidden="true"
                  ></span
                  ><span class="" style="margin-left: 2px;"
                    >可訓練</span
                  ></strong
                >
              </h4>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、
              <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>、
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>、
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
              <nuxt-link to="/civs/Incas">印加</nuxt-link>、
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>、
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>、
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>。
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><span
                    class="glyphicon glyphicon-remove noc"
                    aria-hidden="true"
                  ></span
                  ><span class="" style="margin-left: 2px;"
                    >不可訓練</span
                  ></strong
                >
              </h4>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>、
              <nuxt-link to="/civs/Indians">印度</nuxt-link>、
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>、
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、
              <nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>、
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>、
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>、
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>。
            </div>
          </div>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            重型衝撞車是帝王中期強大的攻城武器，與<nuxt-link
              to="/units/Capped_Ram"
              >裝甲衝撞車</nuxt-link
            >相比，其傷害半徑從1.5提高至2，駐軍數量也從5增加至6。其讓對方產生的心理壓力更是可怕。更重要的是，起始移動速度從0.5提升至0.6，當駐紮數量到達當6人時(全部都放步兵)，移動速度會增加至0.9，這樣的速度可以媲美
            <nuxt-link to="/units/Champion">劍兵勇士</nuxt-link
            >，你不用再為了移動速度問題，困擾是否要將步兵駐紮在衝撞車內，且生命值變成270，耐打程度有顯助的提升。
          </p>
          <p>
            蒙古文明若有發展特殊科技<nuxt-link to="/techs/Drill">演習</nuxt-link
            >，會強烈建議你將步兵放置在重型衝撞車，因為原始的重型衝撞車移動速度為0.6~0.9，當發展特殊科技「
            <nuxt-link to="/techs/Drill">演習</nuxt-link
            >」之後，重型衝撞車移動速度為0.9~1.2，故駐軍後的蒙古重型衝撞車，移動速度會比研發護衛技術的劍兵勇士還來的快。
          </p>
          <p>
            賽爾特文明也非常適合研發重型衝撞車，賽爾特不只有生產快速的優勢，更有特殊科技
            <nuxt-link to="/techs/Furor_Celtica">「賽爾特狂暴」</nuxt-link
            >，讓賽爾特重型衝撞車的生命值從原本的270強化到405，耐打程度絕對超乎你的想像。
          </p>
          <p>如果衝撞車被招降，裡面的單位則會被趕出來，不會被一起招降。</p>
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
              >和<nuxt-link to="/units/Trebuchet">投石機</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>、<nuxt-link
                to="/units/Mangonel"
                >投石車</nuxt-link
              >、近戰單位特別是
              <nuxt-link to="/units/Magyar_Huszar">馬札爾驃騎兵</nuxt-link>。
            </td>
          </tr>
          <tr class="tta">
            <td class="" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">生命值</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Furor_Celtica">賽爾特狂暴</nuxt-link
              >:攻城器製造所的單位+40% HP。<nuxt-link to="/civs/Celts"
                >賽爾特</nuxt-link
              >限定
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
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Torsion_Engines">扭力彈射器</nuxt-link
              >:攻城器製造所的單位傷害範圍增加(輕型衝撞車和攻城塔除外)，
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>限定
            </td>
          </tr>
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
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Drill">演習</nuxt-link
              >:攻城器製造所的單位移動速度+50%，<nuxt-link to="/civs/Mongols"
                >蒙古</nuxt-link
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
        </table>

        <h3>剋輕型衝撞車的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對輕型衝撞車的額外傷害，按造傷殺力排列。
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
                    /><nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>
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
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >：重型衝撞車訓練速度快15%。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">賽爾特</nuxt-link
              >：重型衝撞車攻擊速度快20%
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：ˇ對重型衝撞車有利的科技在帝王時代便宜20%。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
              >：重型衝撞車成本減少15%。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Celts">賽爾特</nuxt-link
              >：攻城器製造所單位生產速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研發<nuxt-link
                to="/techs/Siege_Engineers"
                >攻城工程師</nuxt-link
              >的速度快80%。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">條頓</nuxt-link
              >：其軍事單位對僧侶的招降有較好的抗性。
            </li>
          </ul>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3>
              <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
            </h3>
            <ul>
              <li>1.0c版後火砲塔算遠攻，對衝撞車傷害大幅降低。</li>
              <li>1.0c版後研發重型衝撞車需要1000肉，不需要黃金。</li>
              <li>步兵、弓兵可以駐紮在衝撞車裡面。</li>
              <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link></li>
              <li>
                <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>:<nuxt-link
                  to="/techs/Furor_Celtica"
                  >賽爾特狂暴</nuxt-link
                >給予重型衝撞車多50%的HP。
              </li>
              <li>蒙古：<nuxt-link to="/techs/Drill">演習</nuxt-link>引進。</li>
            </ul>
            <h3>
              <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
            </h3>
            <ul>
              <li>現在村民可以駐紮在衝撞車裡面。</li>
              <li>
                <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>:<nuxt-link
                  to="/techs/Furor_Celtica"
                  >賽爾特狂暴</nuxt-link
                >:給予重型衝撞車多40%的HP。
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
              <li>
                駐紮單位：世紀帝國二初期，衝撞車是沒辦法被駐紮的，到了征服者入侵位資料片之後，衝撞車才可以駐軍(步兵、徒步弓兵，不包含村民，僧侶、國王、炸藥桶)，而到了失落的帝國才能讓村民駐軍衝撞車。另外有國外的網友在實驗衝撞車單位時，發現了一有趣的現象，長弓兵駐軍的衝撞車會跟馬路三寶或酒罪人士一樣，不斷的失控去卡別台衝撞車。(
                <a href="https://www.youtube.com/watch?v=aPK2RnpEgPA"
                  >見實驗影片</a
                >)。
              </li>
              <li>
                <nuxt-link to="">移動速度</nuxt-link
                >：步兵駐軍後的衝撞車移動速度比弓兵駐軍的衝撞車快，簡單來說，只有步兵駐軍才能堤升衝撞車的移動速度，且任何種類的步兵駐紮衝撞車後的速度都是一樣的。
              </li>
              <li>攻擊2，是陸上最弱的攻擊。</li>
              <li>防禦-3，是所有單位近防最低的。</li>
            </ul>
          </div>
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4">
                <gallery
                  ><img class="imgn hg" src="~assets/Splashdamageram.jpg" alt=""
                /></gallery>
                <p><em>各類型衝撞車與其傷害。</em></p>
              </div>
              <div class="col-md-4">
                <gallery
                  ><img class="imgn hg" src="~assets/Siegeram.png" alt=""
                /></gallery>
                <p><em>一群重型衝撞車。</em></p>
              </div>
              <div class="col-md-4">
                <gallery
                  ><img class="imgn hg" src="~assets/Ramline.png" alt=""
                /></gallery>
                <p><em>衝撞車系。</em></p>
              </div>
            </div>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>
              衝車、或稱撞車，屬於古代攻城器械，在四輪車上安裝撞木，前裹鐵皮，以衝撞的力量破壞城牆或城門的攻城主要兵器。
            </p>
            <p>
              《三國演義》第九十七回敘述：孔明大怒曰：「汝燒吾雲梯，吾卻用『衝車』之法！」
            </p>
            <p>
              諸葛亮攻擊陳倉的武器，也是歷代進行攻城的時候使用的重要戰車，在陳倉，被郝昭用鏈球式磨盤所破。今天的通用輪式裝甲車略有其風，只是沒有它這樣巨大。
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">重型衝撞車</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/SiegeRamIcon.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">單位介紹</div>
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
            <td class="unit4">請看介紹。</td>
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
                src="~assets/Siege-workshop-logo.jpg"
                alt=""
              /><nuxt-link to="/building/Siege_Workshop"
                >攻城器製造所</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">36秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木</td>
            <td class="unit4">160</td>
          </tr>
          <tr>
            <td class="unit3">金</td>
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">270</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">4(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +200 vs
              <nuxt-link to="/armor/Armor_Class_standard_building"
                >一般建築物</nuxt-link
              >(每1個步兵進駐攻擊+10，最多+40) <br />+65 vs
              <nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                >攻城武器</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">傷害半徑</td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3">攻擊速度</td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">-3</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">195</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                >攻城武器</nuxt-link
              >
              <br />
              <nuxt-link to="/armor/Armor_Class_Ram">衝撞車</nuxt-link>(+2)
            </td>
          </tr>
          <tr>
            <td class="unit3">駐軍數量</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.6</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">從升級</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/CappedRamIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由JuneRain六月雨協助編輯</div>
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
