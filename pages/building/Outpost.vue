<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>哨站</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>哨站</b>是屬於世紀帝國II中的<nuxt-link to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >。不過不像箭塔能攻擊敵人，它主要的目的是警告玩家敵人的來襲動向。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              哨站對於在遊戲初期堅看重要區域的安全性是非常有用的。他們也常用來監視重要的資源區域，以敵方偷偷擴張領地。
              隨著遊戲的進展，他們變得不太常見，因為<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >能更好的取代它們的工作。 此外，他們需要花費<nuxt-link
                to="/resource/Stone"
                >石頭</nuxt-link
              >，那還不如花在<nuxt-link to="/building/Castle">城堡</nuxt-link
              >，<nuxt-link to="/building/Stone_Wall">城牆</nuxt-link
              >和箭塔上更有價值。通常玩家會使用<nuxt-link to="/building/House"
                >房屋</nuxt-link
              >和採集點(<nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link
              >或<nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link
              >，<nuxt-link to="/building/Palisade_Wall">木牆</nuxt-link
              >也可)來代替哨站探索地圖跟擴張<nuxt-link to="/los.php"
                >視野</nuxt-link
              >。
            </li>
            <li>
              完全升級的哨站有20的視野範圍。只有箭塔和城堡有超越它們的視野範圍。
            </li>
          </ul>
        </div>
        <h3>更多數據</h3>
        <div class="hrn1"></div>
        <div class="n1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tta1" colspan="2" style="text-align: center;">
              <div class="unititle">劣勢與優勢</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">強勢(容易對抗)</td>
            <td class="tta4">無</td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">全部單位。</td>
          </tr>
          <tr>
            <td class="tta1" colspan="2" style="text-align: center;">
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
            <td class="tta1">視野</td>
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
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：研發<nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >的花費便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：哨站在<nuxt-link to="/techs/age/Dark_Age">黑暗</nuxt-link
              >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >增加10%/20%/30%/40% HP
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對哨站有利的<nuxt-link to="/techs">科技</nuxt-link
              >在封建/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代各便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link>：哨站石頭花費-15%。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link
              >：哨站建造速度快33%。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：哨站<nuxt-link
                to="/resource/Wood"
                >木頭</nuxt-link
              >花費-15%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>：<nuxt-link
                to="/techs/Town_Watch"
                >城鎮瞭望</nuxt-link
              >和<nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link
              >在封建/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代研發快10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：哨站建造速度快30%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
              >：哨站+3視野。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：同盟<nuxt-link
                to="/building/University"
                >學院</nuxt-link
              >研究<nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link
              >、<nuxt-link to="/techs/Architecture">建築學</nuxt-link
              >和<nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
              >的速度快80%。
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
              哨站花費25<nuxt-link to="/resource/Wood">木材</nuxt-link
              >和25石頭。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>哨站花費25木材和10石頭。</li>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>哨站花費25木材和5石頭。</li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>:哨站建造速度快33%
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            公元500年世界上的人口比今天的世界還少得多，而且有很多空曠和荒涼的土地。為了密切關注邊界，地方領主建立了哨站，可以提前預警攻擊並回報定居者和<nuxt-link
              to="/units/Trade_Cart"
              >貿易車隊</nuxt-link
            >的移動情況。
            隨著土地人口變得越來越稠密，哨站逐漸被邊界上的城堡和城鎮所取代。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                哨站
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Outposticon.png" width="45" alt="" />
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
            <td class="unit4">箭塔</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">使用</td>
            <td class="unit4">獲得附近視野</td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">15秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木材</td>
            <td class="unit4">25</td>
          </tr>
          <tr>
            <td class="unit3">石材</td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">1x1</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">500</td>
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
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">
              <img src="~assets/Dark-age-logo-small.jpg" width="22" alt="" />6
              <br />
              <img src="~assets/Feudal-age-reseach.jpg" width="22" alt="" />8
              <br />
              <img src="~assets/Castle-age-reseach.jpg" width="22" alt="" />10
              <br />
              <img
                src="~assets/Imperial-age-research.jpg"
                width="22"
                alt=""
              />12
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
                src="~assets/Outpostlosdarkage.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  ><nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link
                  >哨站的視野範圍。</em
                >
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="180"
                src="~assets/Outpostlosfu.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  >帝王時代哨站的視野範圍(有研發<nuxt-link
                    to="/techs/Town_Patrol"
                    >城鎮巡邏</nuxt-link
                  >)。</em
                >
              </p>
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
