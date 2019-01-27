<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>攻城器製造所</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            攻城器製造所是專門製造攻城武器的場所，其單位對建築物有強大的破壞力。
          </p>
          <p>
            因為舊快捷鍵的關係，一搬玩家稱攻城器製造所為「BK」，即使他們因為新快捷鍵不再用BK作為攻城武器製造所的快捷鍵了。
          </p>
        </div>
        <h3>可訓練的單位與技術</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-3">
            <div class="n1">
              <h4><a href="/techsage/Castle_Age"></a>城堡時代</h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/BatteringRamIcon.jpg"
                    width="30"
                    alt=""
                  /><a href="/units/Battering_Ram">衝撞車</a>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/MangonelIcon.jpg"
                    width="30"
                    alt=""
                  /><a href="/units/Mangonel">輕型投石車</a>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/ScorpionIcon.jpg"
                    width="30"
                    alt=""
                  /><a href="/units/Scorpion">弩砲</a>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Siegetowericon.png"
                    width="30"
                    alt=""
                  /><a href="/units/Siege_Tower">攻城塔</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="n1">
              <h4><a href="/techsage/Imperial_Age"></a>帝王時代</h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/CappedRamIcon.jpg"
                    width="30"
                    alt=""
                  /><a href="/units/Capped_Ram">裝甲衝撞車</a>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/SiegeRamIcon.jpg"
                    width="30"
                    alt=""
                  /><a href="/units/Siege_Ram">重型衝撞車</a>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/OnagerIcon.jpg"
                    width="30"
                    alt=""
                  /><a href="/units/Onager">中型投石車</a>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/SiegeOnagerIcon.jpg"
                    width="30"
                    alt=""
                  /><a href="/Siege_units/Onager">重型投石車</a>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/HeavyScorpionIcon.jpg"
                    width="30"
                    alt=""
                  /><a href="/units/Heavy_Scorpion">重型弩砲</a>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/BombardCannonIcon.jpg"
                    width="30"
                    alt=""
                  /><a href="/units/Bombard_Cannon">火砲</a>
                </li>
              </ul>
            </div>
          </div>
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
            <td class="tta4">無</td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">全部。</td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:20%">生命值</td>
            <td class="tta4">
              <img class="gg" src="~assets/Masonry.jpg" width="30" alt="" /><a
                href="/techs/Masonry"
                >磚瓦技術</a
              >(+10%)
              <br />
              <img
                class="gg"
                src="~assets/Architecture.jpg"
                width="30"
                alt=""
              /><a href="/techs/Architecture">建築學</a>(+10%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:20%">護甲</td>
            <td class="tta4">
              <img class="gg" src="~assets/Masonry.jpg" width="30" alt="" /><a
                href="/techs/Masonry"
                >磚瓦技術</a
              >(護甲+1/+1，+3建築護甲)
              <br />
              <img
                class="gg"
                src="~assets/Architecture.jpg"
                width="30"
                alt=""
              /><a href="/techs/Architecture">建築學</a>(護甲+1/+1，+3建築護甲)
            </td>
          </tr>
          <tr>
            <td class="tta1">視野</td>
            <td class="tta4">
              <img class="gg" src="~assets/Townwatch.jpg" width="30" alt="" /><a
                href="/techs/Town_Watch"
                >城鎮瞭望</a
              >(+4)
              <br />
              <img
                class="gg"
                src="~assets/Townpatrol.jpg"
                width="30"
                alt=""
              /><a href="/techs/Town_Patrol">城鎮巡邏</a>(+4)
            </td>
          </tr>
          <tr>
            <td class="tta1">招降抵抗</td>
            <td class="tta4">
              <img class="gg" src="~assets/Faith.jpg" width="30" alt="" /><a
                href="/techs/Faith"
                >忠誠信仰</a
              >
              <br />
              <img class="gg" src="~assets/Heresy.png" width="30" alt="" /><a
                href="/techs/Heresy"
                >異端邪說</a
              >
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">建造速率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Treadmillcrane.jpg"
                width="30"
                alt=""
              /><a href="/techs/Treadmill_Crane">踏輪起重機</a>(+20%建造效率)
            </td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <a href="/civs/Aztecs">阿茲特克</a>：攻城器單位生產速度快15%。
            </li>
            <li>
              <a href="/civs/Burmese">緬甸</a>：研發<a href="/techs/Faith"
                >忠誠信仰</a
              >便宜50%。
            </li>
            <li>
              <a href="/civs/Byzantines">拜占庭</a
              >：攻城器製造所在封建/城堡/帝王時代多20%/30%/40%的血量。
            </li>
            <li>
              <a href="/civs/Chinese">中國</a
              >：科技在城堡/帝王時代各便宜15%/20%。
            </li>
            <li>
              <a href="/civs/Khmer">高棉</a>：蓋攻城器製造所不用
              <a href="/building/Blacksmith">兵工廠</a>。
            </li>
            <li>
              <a href="/civs/Malians">馬利</a>：蓋攻城器製造所成本減少15%
              (170木材即可建造)。
            </li>
            <li>
              <a href="/civs/Spanish">西班牙</a
              >：蓋攻城器製造所建築速度快30%、火藥單位攻擊速度快15%(<a
                href="/units/Bombard_Cannon"
                >火砲</a
              >)。
            </li>
            <li>
              <a href="/civs/Persians">波斯</a>：研究<a href="/techs/Town_Watch"
                >城鎮瞭望</a
              >和<a href="/techs/Town_Patrol">城鎮巡邏</a
              >的速度在封建/城堡/帝王分別快10%/15%/20%。
            </li>
            <li>
              <a href="/civs/Slavs">斯拉夫</a>：攻城器製造所單位成本減少15%。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <a href="/civs/Celts">賽爾特</a>：攻城器製造所單位生產速度快20%。
            </li>
            <li>
              <a href="/civs/Malians">馬利</a>：研究<a href="/techs/Masonry"
                >磚瓦技術</a
              >、<a href="/techs/Architecture">建築學</a>和
              <a href="/techs/Treadmill_Crane">踏輪起重機</a>速度快80%。
            </li>
            <li>
              <a href="/civs/Slavs">斯拉夫</a
              >：攻城器製造所駐軍單位多5個(總共15個)。
            </li>
          </ul>
        </div>
        <h3>特殊科技</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <a href="/civs/Teutons">條頓</a>：<a href="/techs/Ironclad"
                >鋼鐵甲</a
              >(400木材，350黃金)→攻城器製造所單位近身裝甲值+4。
            </li>
            <li>
              <a href="/civs/Mongols">蒙古</a>：<a href="/techs/Drill">演習</a
              >(500木材，450黃金)→攻城器製造所單位移動速度快50%。
            </li>
            <li>
              <a href="/civs/Celts">賽爾特</a>：<a href="/techs/Furor_Celtica"
                >賽爾特狂暴</a
              >(750食物，450黃金)→攻城器製造所單位生命值40%。
            </li>
            <li>
              <a href="/civs/Koreans">韓國</a>：<a href="/techs/Shinkichon"
                >神機箭</a
              >(800木材，500黃金)→投石車攻擊距離+1 。
            </li>
            <li>
              <a href="/civs/Chinese">中國</a>：<a href="/techs/Rocketry"
                >火箭術</a
              >(750木材，750黃金)→諸葛努手攻擊+2，弩砲攻擊+4。
            </li>
            <li>
              <a href="/civs/Ethiopians">衣索比亞</a>：<a
                href="/techs/Torsion_Engines"
                >扭力彈射器</a
              >(1000食物，600黃金)→攻城器製造所單位傷害範圍變大
            </li>
            <li>
              <a href="/civs/Khmer">高棉</a>：<a href="/techs/Double_Crossbow"
                >雙弩箭</a
              >(700食物，400黃金)→弩砲象與弩砲發射雙箭(第二發傷害比第一發低)。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><a href="/games/aok">帝王世紀</a></em>
          </h3>
          <ul>
            <li>攻城器製造所無論在哪個時代都是2100HP。</li>
          </ul>
          <h3>
            <em><a href="/games/aoc">征服者入侵</a></em>
          </h3>
          <ul>
            <li><a href="/techs/Heresy">異端邪說</a>首次出現。</li>
          </ul>
          <h3>
            <em><a href="/games/aof">失落的帝國</a></em>
          </h3>
          <ul>
            <li>攻城器製造所在城堡/帝王時代分別有1800/2100HP。</li>
            <li>引入<a href="/units/Siege_Tower">攻城塔</a>。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="ien">
            <em
              >"城堡和城鎮的設立造成了軍隊想要有能破壞要塞和高牆的攻城部隊。如果沒有這樣的攻城武器，奪取城堡無論在金錢跟時間上都是種磨耗，攻方只能慢慢消耗守方力量直到他們投降。
              而攻城的能力常會受到戰事的長短，向攻城軍隊提供補給的費用，營地發生疾病造成的損失以及天氣的限制而有所影響。衝撞車，投石機和其他攻城武器的出現能快速破壞防禦結構和為戰事快速畫下結局。攻城武器可在攻城器製造所訓練"</em
            >
            <p style="text-align: right;margin-top: 10px;">-世紀帝國II手稿。</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle"><a href="#">攻城器製造所</a></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Siegeworkshopicon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2"><a href="#">概要</a></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">軍事</td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4"><a href="/techsage/Castle_Age">城堡時代</a></td>
          </tr>
          <tr>
            <td class="unit3">前置建築</td>
            <td class="unit4"><a href="/building/Blacksmith">兵工廠</a></td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2"><a href="#">成本</a></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木</td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2"><a href="#">數據</a></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">4x4</td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="30"
                alt=""
              />1800
              <br />
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                width="30"
                alt=""
              />2100
            </td>
          </tr>
          <tr>
            <td class="unit3">駐軍</td>
            <td class="unit4">10</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="30"
                alt=""
              />2
              <br />
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                width="30"
                alt=""
              />3
            </td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="30"
                alt=""
              />9
              <br />
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                width="30"
                alt=""
              />10
            </td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
            <td class="unit4">
              <a href="/armor/Armor_Class_Building">建築</a> <br />
              <a href="/Armor_Class_standard_building.php">標準建築</a>
            </td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由JuneRain六月雨協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4">
            <a href="/img/Siegeworkshopaokaoc.png"
              ><img
                class="imgn hg"
                width="180"
                src="~assets/Siegeworkshopaokaoc.png"
                alt=""
            /></a>
            <div class="lightbox-caption" style="width:220px" ;>
              <p><em>所有攻城器製造所(帝王世紀和征服者入侵資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <a href="/img/Siege_workshops_hd.png"
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Siege_workshops_hd.png"
                alt=""
            /></a>
            <div class="lightbox-caption" style="width:220px" ;>
              <p><em>所有攻城器製造所(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <a href="/img/Spritesheet_siege_workshop.png"
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Spritesheet_siege_workshop.png"
                alt=""
            /></a>
            <div class="lightbox-caption" style="width:185px" ;>
              <p><em>各式攻城器製造所和駐紮單位時的樣子。</em></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"></div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbuilding',
  components: {}
}
</script>
<style></style>
