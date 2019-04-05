<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>攻城器製造所</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>攻城器製造所</b>是專門製造<nuxt-link to="/units/Siege_Weapons"
              >攻城武器</nuxt-link
            >的場所，其單位對<nuxt-link to="/armor/Armor_Class_Building"
              >建築物</nuxt-link
            >有強大的破壞力。
          </p>
          <p>
            因為舊快捷鍵的關係，一搬玩家稱攻城器製造所為「BK」，即使他們因為新快捷鍵不再用BK作為攻城器製造所的快捷鍵了。
          </p>
        </div>
        <h3>可訓練的單位與技術</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-3">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Castle_Age"></nuxt-link>城堡時代
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/BatteringRamIcon.jpg"
                    width="30"
                    alt=""
                  /><nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/MangonelIcon.jpg"
                    width="30"
                    alt=""
                  /><nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/ScorpionIcon.jpg"
                    width="30"
                    alt=""
                  /><nuxt-link to="/units/Scorpion">弩砲</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Siegetowericon.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Imperial_Age"></nuxt-link>帝王時代
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/CappedRamIcon.jpg"
                    width="30"
                    alt=""
                  /><nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/SiegeRamIcon.jpg"
                    width="30"
                    alt=""
                  /><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/OnagerIcon.jpg"
                    width="30"
                    alt=""
                  /><nuxt-link to="/units/Onager">中型投石車</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/SiegeOnagerIcon.jpg"
                    width="30"
                    alt=""
                  /><nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/HeavyScorpionIcon.jpg"
                    width="30"
                    alt=""
                  /><nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/BombardCannonIcon.jpg"
                    width="30"
                    alt=""
                  /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
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
            <td class="tta4">全部</td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:20%">
              <nuxt-link to="/elements/Hit_points">生命值</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Masonry.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>(+10%) <br />
              <img
                class="gg"
                src="~assets/Architecture.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Architecture">建築學</nuxt-link>(+10%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:20%">護甲</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Masonry.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link
              >(護甲+1/+1，+3<nuxt-link to="/building">建築</nuxt-link>護甲)
              <br />
              <img
                class="gg"
                src="~assets/Architecture.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Architecture">建築學</nuxt-link
              >(護甲+1/+1，+3建築護甲)
            </td>
          </tr>
          <tr>
            <td class="tta1"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Townwatch.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>(+4)
              <br />
              <img
                class="gg"
                src="~assets/Townpatrol.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link>(+4)
            </td>
          </tr>
          <tr>
            <td class="tta1">
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
            <td class="tta1" style="width:10%">建造速率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Treadmillcrane.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
              >(+20%建造效率)
            </td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>：<nuxt-link
                to="/units/Siege_Weapons"
                >攻城器單位</nuxt-link
              >生產速度快15%。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：研發<nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：攻城器製造所在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >多20%/30%/40%的<nuxt-link to="/elements/Hit_points"
                >血量</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：<nuxt-link
                to="/techs"
                >科技</nuxt-link
              >在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代各便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link
              >：蓋攻城器製造所不用<nuxt-link to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link
              >：蓋攻城器製造所成本減少15% (170<nuxt-link to="/resource/Wood"
                >木材</nuxt-link
              >即可建造)。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：蓋攻城器製造所建築速度快30%、<nuxt-link
                to="/units/Gunpowder_Unit"
                >火藥單位</nuxt-link
              ><nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link
              >快15%(<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>)。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>：研究<nuxt-link
                to="/techs/Town_Watch"
                >城鎮瞭望</nuxt-link
              >和<nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link
              >的速度在<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >分別快10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
              >：攻城器製造所單位成本減少15%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link
              >：攻城器製造所單位生產速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Masonry"
                >磚瓦技術</nuxt-link
              >、<nuxt-link to="/techs/Architecture">建築學</nuxt-link
              >和<nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
              >速度快80%。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
              >：攻城器製造所<nuxt-link to="/elements/Garrison">駐軍</nuxt-link
              >單位多5個(總共15個)。
            </li>
          </ul>
        </div>
        <h3>特殊科技</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>：<nuxt-link
                to="/techs/Ironclad"
                >鋼鐵甲</nuxt-link
              >(400木材，350<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >)→攻城器製造所單位近身裝甲值+4。
            </li>
            <li>
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>：<nuxt-link
                to="/techs/Drill"
                >演習</nuxt-link
              >(500木材，450黃金)→攻城器製造所單位移動速度快50%。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>：<nuxt-link
                to="/techs/Furor_Celtica"
                >塞爾特狂暴</nuxt-link
              >(750<nuxt-link to="/resource/Food">食物</nuxt-link
              >，450黃金)→攻城器製造所單位生命值40%。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>：<nuxt-link
                to="/techs/Shinkichon"
                >神機箭</nuxt-link
              >(800木材，500黃金)→<nuxt-link to="/units/Mangonel"
                >投石車</nuxt-link
              >攻擊距離+1 。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：<nuxt-link
                to="/techs/Rocketry"
                >火箭術</nuxt-link
              >(750木材，750黃金)→諸葛努手攻擊+2，弩砲攻擊+4。
            </li>
            <li>
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>：<nuxt-link
                to="/techs/Torsion_Engines"
                >扭力彈射器</nuxt-link
              >(1000食物，600黃金)→攻城器製造所單位傷害範圍變大
            </li>
            <li>
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>：<nuxt-link
                to="/techs/Double_Crossbow"
                >雙弩箭</nuxt-link
              >(700食物，400黃金)→<nuxt-link to="/units/Ballista_Elephant"
                >弩砲象</nuxt-link
              >與弩砲發射雙箭(第二發傷害比第一發低)。
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
            <li>攻城器製造所無論在哪個時代都是2100HP。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>首次出現。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              攻城器製造所在<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代分別有1800/2100HP。
            </li>
            <li>引入<nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link>。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="ien">
            <em
              >"城堡和城鎮的設立造成了軍隊想要有能破壞要塞和高牆的攻城部隊。如果沒有這樣的攻城武器，奪取城堡無論在金錢跟時間上都是種磨耗，攻方只能慢慢消耗守方力量直到他們投降。
              而攻城的能力常會受到戰事的長短，向攻城軍隊提供補給的費用，營地發生疾病造成的損失以及天氣的限制而有所影響。<nuxt-link
                to="/units/Battering_Ram"
                >衝撞車</nuxt-link
              >，<nuxt-link to="/units/Trebuchet">投石機</nuxt-link
              >和其他攻城武器的出現能快速破壞防禦結構和為戰事快速畫下結局。攻城武器可在攻城器製造所訓練"</em
            >
            <p style="text-align: right;margin-top: 10px;">-世紀帝國II手稿。</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                攻城器製造所
              </div>
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
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">概要</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">軍事</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">前置建築</td>
            <td class="unit4">
              <nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木</td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
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
              />1800 <br />
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
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="30"
                alt=""
              />2 <br />
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                width="30"
                alt=""
              />3
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="30"
                alt=""
              />9 <br />
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
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
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
            <gallery
              ><img
                class="imgn hg"
                width="180"
                src="~assets/Siegeworkshopaokaoc.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  >所有攻城器製造所(<nuxt-link to="/games/aok"
                    >帝王世紀</nuxt-link
                  >和<nuxt-link to="/games/aoc">征服者入侵</nuxt-link
                  >資料片)。</em
                >
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Siege_workshops_hd.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有攻城器製造所(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Spritesheet_siege_workshop.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p><em>各式攻城器製造所和駐紮單位時的樣子。</em></p>
            </div>
          </div>
        </div>
      </div>
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
