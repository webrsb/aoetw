<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>學院</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>學院</b>或稱為<b>大學</b>，在<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >後能建造。<nuxt-link to="/building/University">學院</nuxt-link
            >可研發<nuxt-link to="/techs">科技</nuxt-link>強化<nuxt-link
              to="/building"
              >建築</nuxt-link
            >和<nuxt-link to="/units/Archer_Units">遠距離單位</nuxt-link>。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            學院中的<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link
            >在現今遠距離作戰當道的情況下常是玩家優先研發的技術，以<nuxt-link
              to="/units/Crossbowman"
              >弩兵</nuxt-link
            >或是<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
            >當主力的打法，學院通常會一上<nuxt-link to="/techs/age/Castle_Age"
              >城堡</nuxt-link
            >就蓋。而上了帝王後<nuxt-link to="/techs/Chemistry">化學</nuxt-link
            >的研發可讓攻擊更具破壞力，重點是可以獲取<nuxt-link
              to="/units/Hand_Cannoneer"
              >火槍兵</nuxt-link
            >、<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link
            >與<nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link
            >這種高威力<nuxt-link to="/units/Gunpowder_Unit">火藥兵種</nuxt-link
            >。<nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link
            >可讓<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
            >射程+1在後期也很有效用；而其他如<nuxt-link to="/techs/Murder_Holes"
              >近射孔</nuxt-link
            >、<nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link
            >則不符合當前戰術所以不常研發。
          </p>
          <h3>可訓練的單位與技術</h3>
          <div class="hrn1"></div>
          <div class="row">
            <div class="col-md-6">
              <div class="n1">
                <h4>
                  <nuxt-link to="/techs/age/Castle_Age"></nuxt-link>城堡時代
                </h4>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/masonry.png"
                      alt=""
                    /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/fortified_wall.png"
                      alt=""
                    /><nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ballistics.png"
                      alt=""
                    /><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/guard_tower.png"
                      alt=""
                    /><nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/heated_shot.png"
                      alt=""
                    /><nuxt-link to="/techs/Heated_Shot">火箭</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/murder_holes.png"
                      alt=""
                    /><nuxt-link to="/techs/Murder_Holes">近射孔</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/treadmill_crane.png"
                      alt=""
                    /><nuxt-link to="/techs/Treadmill_Crane"
                      >磨坊水車</nuxt-link
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="n1">
                <h4>
                  <nuxt-link to="/techs/age/Imperial_Age"></nuxt-link>帝王時代
                </h4>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/architecture.png"
                      alt=""
                    /><nuxt-link to="/techs/Architecture">建築學</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/chemistry.png"
                      alt=""
                    /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/siege_engineers.png"
                      alt=""
                    /><nuxt-link to="/techs/Siege_Engineers"
                      >攻城工程師</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/keep.png" alt="" /><nuxt-link
                      to="/building/Keep"
                      >大型箭塔</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/arrowslits.png"
                      alt=""
                    /><nuxt-link to="/techs/Arrowslits">箭狹槽</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/bombard_tower_tech.png"
                      alt=""
                    /><nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>
                  </li>
                </ul>
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
                    src="~assets/masonry.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>(+10%)
                  <br />
                  <img
                    class="gg"
                    src="~assets/architecture.png"
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
                    src="~assets/masonry.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link
                  >(護甲+1/+1，+3建築護甲) <br />
                  <img
                    class="gg"
                    src="~assets/architecture.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Architecture">建築學</nuxt-link
                  >(護甲+1/+1，+3建築護甲)
                </td>
              </tr>
              <tr>
                <td class="tta1">
                  <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
                </td>
                <td class="tta4">
                  <img
                    class="gg"
                    src="~assets/tower_watch.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>(+4)
                  <br />
                  <img
                    class="gg"
                    src="~assets/town_patrol.png"
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
                <td class="tta1" style="width:10%">建造速率</td>
                <td class="tta4">
                  <img
                    class="gg"
                    src="~assets/treadmill_crane.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Treadmill_Crane">磨坊水車</nuxt-link
                  >(+20%建造效率)
                </td>
              </tr>
            </table>

            <div class="col-md-12">
              <h3>文明加成</h3>
              <div class="hrn1"></div>
              <div class="n1">
                <ul>
                  <li>
                    <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
                    >：在封建/<nuxt-link to="/techs/age/Castle_Age"
                      >城堡</nuxt-link
                    >/<nuxt-link to="/techs/age/Imperial_Age"
                      >帝王時代</nuxt-link
                    >，學院增加20%/30%40%的<nuxt-link to="/elements/Hit_points"
                      >血量</nuxt-link
                    >。
                  </li>
                  <li>
                    <nuxt-link to="/civs/Chinese">中國</nuxt-link
                    >：學院的技術在<nuxt-link to="/techs/age/Castle_Age"
                      >城堡</nuxt-link
                    >/帝王時代分別便宜15%/20%
                  </li>
                  <li>
                    <nuxt-link to="/civs/Malians">馬利</nuxt-link
                    >：學院建築花費便宜15%
                  </li>
                  <li>
                    <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
                    >：學院建造速度快30%
                  </li>
                </ul>
              </div>
              <h3>團隊加分</h3>
              <div class="hrn1"></div>
              <div class="n1">
                <ul>
                  <li>
                    <nuxt-link to="/civs/Malians">馬利</nuxt-link
                    >：團隊學院的工作效率快80%
                  </li>
                </ul>
              </div>
              <h3>趣事</h3>
              <div class="hrn1"></div>
              <div class="n1">
                <ul>
                  <li>
                    非洲<nuxt-link to="/civs">文明</nuxt-link
                    >的學院原形為<nuxt-link to="/civs/Malians">馬利</nuxt-link
                    >的<a
                      href="https://en.wikipedia.org/wiki/Sankore_Madrasah"
                      target="_blank"
                      >桑科爾大學</a
                    >。
                  </li>
                </ul>
              </div>
              <h3>歷史</h3>
              <div class="hrn1"></div>
              <div class="n1">
                <div class="ien">
                  <em
                    >"在<nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link
                    >最暗淡的日子裡，歐洲大部分地區的教育已經消失了。只剩散居在獨立寺院的祭司和僧侶通過抄寫舊稿提高讀寫能力，同時保存了書籍。查理曼大帝試圖建立一所學校來培養能夠幫助他控制帝國的人才來扭轉這一趨勢，但是這個實驗在北方和東方的新一波野蠻人的侵略下失敗了。第一批高等教育中心是與劍橋，牛津，帕多瓦和巴黎等大教堂城鎮有相關連。未來的牧師和教會領袖接受拉丁文，聖經，基督教哲學和其他基督教著作的教育。醫學，科學和數學則直到很久以後才進入課程。第一批從這些大學畢業的學生領導了教會，並繼續教導出一批又一批受過教育的人，他們成為一代又一代歐洲國王的顧問和行政人員"</em
                  >
                  <p style="text-align: right;margin-top: 10px;">
                    -世紀帝國II手稿。
                  </p>
                </div>
              </div>
              <h3>圖庫</h3>
              <div class="hrn1"></div>
              <div class="n1">
                <div class="row">
                  <div class="col-md-4">
                    <gallery
                      ><img
                        class="imgn hg"
                        src="~assets/Universityaokaoc.jpg"
                        alt=""
                    /></gallery>
                    <p>
                      <em
                        ><nuxt-link to="/games/aok">帝王世紀</nuxt-link
                        >的所有學院。</em
                      >
                    </p>
                  </div>
                  <div class="col-md-4">
                    <gallery
                      ><img class="imgn hg" src="~assets/University.jpg" alt=""
                    /></gallery>
                    <p>
                      <em
                        >在<nuxt-link to="/techs/age/Castle_Age"
                          >城堡時代</nuxt-link
                        >的HD版學院。</em
                      >
                    </p>
                  </div>
                  <div class="col-md-4">
                    <gallery
                      ><img
                        class="imgn hg"
                        src="~assets/UniversityImperialAgeHD.jpg"
                        alt=""
                    /></gallery>
                    <p>
                      <em
                        >在帝王時代的<nuxt-link to="/games/aoc"
                          >征服者入侵</nuxt-link
                        >前版本的學院。</em
                      >
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <gallery
                      ><img
                        class="imgn hg"
                        src="~assets/UniversityImperialAgeDLC.jpg"
                        alt=""
                    /></gallery>
                    <p><em>在帝王時代HD後版本的學院。 </em></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                學院
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/university.png" alt="" />
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
            <td class="unit4">研究</td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">60秒</td>
          </tr>
          <tr>
            <td class="unit3">功能</td>
            <td class="unit4">
              強化<nuxt-link to="/building">建築物</nuxt-link>與軍事單位
            </td>
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
            <td class="unit4">所有時代:2100</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">
              <img class="gg" src="~assets/castle_age.png" width="30" alt="" />2
              <br />
              <img
                class="gg"
                src="~assets/imperial_age.png"
                width="30"
                alt=""
              />3
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">
              <img class="gg" src="~assets/castle_age.png" width="30" alt="" />9
              <br />
              <img
                class="gg"
                src="~assets/imperial_age.png"
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

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allbuilding' })

export default {
  components: {}
}
</script>
<style></style>
