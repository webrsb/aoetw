<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>城樓</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>城樓</b>是《<nuxt-link to="/games/delw"
              >世紀帝國II：決定版 西方霸主</nuxt-link
            >》中，僅有<nuxt-link to="/civs/Sicilians">西西里</nuxt-link
            >可以於<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
            >建造的軍事<nuxt-link to="/building">建築</nuxt-link
            >和防禦建築。它是城堡的縮小版，取代了西西里的<nuxt-link
              to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >系，可以訓練<nuxt-link to="/units/Serjeant">薩金特衛兵</nuxt-link
            >，不能研發<nuxt-link to="/techs">科技</nuxt-link
            >。另外可以由<nuxt-link to="/units/Villager">村民</nuxt-link
            >和薩金特衛兵建造。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <li>
                相比<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
                >，城樓成本花費遠超過箭塔，攻擊和箭矢速度也和箭塔一樣。但是城樓在<nuxt-link
                  to="/techs/age/Castle_Age"
                  >城堡時代</nuxt-link
                >時能多射一支箭，在<nuxt-link to="/techs/age/Imperial_Age"
                  >帝王時代</nuxt-link
                >時能多射兩支箭。城樓尺寸是四格，比起一格的箭塔能允許更多人建造和維修，但同時也會受到更多單位攻擊。城樓能<nuxt-link
                  to="/elements/Garrison"
                  >駐軍</nuxt-link
                >10人，在駐守<nuxt-link to="/units/Villager">村民</nuxt-link
                >或<nuxt-link to="/units/Archer">弓兵</nuxt-link
                >的情況下可以提升額外箭數，但在封建時代時額外箭數最多是4（與箭塔相同），另外城堡時代能射7支箭，帝王時代能射11支箭。
              </li>
              <li>
                與箭塔系不同，箭塔必須在<nuxt-link to="/building/University"
                  >大學</nuxt-link
                >研發科技才可升級，而城樓在升級時代後會立即得到更多<nuxt-link
                  to="/elements/Hit_points"
                  >血量</nuxt-link
                >，從封建時代的1000提升到城堡時代的1500，帝王時代則到2250。同時每升級一時代會+1/+1<nuxt-link
                  to="/armor"
                  >護甲</nuxt-link
                >，也受益於<nuxt-link to="/techs/Arrowslits">箭狹槽</nuxt-link
                >、<nuxt-link to="/techs/Chemistry">化學</nuxt-link>、<nuxt-link
                  to="/techs/Heated_Shot"
                  >火箭</nuxt-link
                >。
              </li>
              <li>
                與箭塔系一樣，城樓不能算是升級時代的條件。
              </li>
              <li>
                城樓能夠訓練<nuxt-link to="/civs/Sicilians">西西里</nuxt-link
                >特殊單位<nuxt-link to="/units/Serjeant">薩金特衛兵</nuxt-link
                >，他可以建造城樓，因此衍生出類似<nuxt-link to="/ar/towerrush"
                  >塔攻</nuxt-link
                >的打法-城樓攻，這打法的配置和策略大致與塔攻相似，通過在對手資源點上壓城樓，再訓練薩金特衛兵繼續壓城樓攻擊。
              </li>
              <li>
                全滿的<nuxt-link to="/building/Keep">大型箭塔</nuxt-link
                >在攻擊和命中率上比沒有駐軍的城樓好，但駐軍的城樓能完全壓制大型箭塔。
              </li>
              <li>
                在防禦方面，最好把城樓建在隘口或障礙物（城牆、懸崖、森林）後面，以免受非遠距離單位攻擊。而城樓不利於反制塔攻，因為光一個城樓就要了玩家全部初始<nuxt-link
                  to="/resource/Stone"
                  >石頭</nuxt-link
                >，對手可以刪除建造中的箭塔並在其他地方重建，除非玩家更早採集石頭或通過<nuxt-link
                  to="/building/Market"
                  >市場</nuxt-link
                >購買。在建好城樓的情況下，城樓有較多血量和可以訓練薩金特衛兵反攻箭塔。另外，建造城樓的時間也比建造箭塔的時間多10秒
                (箭塔建造時間是80秒)。
              </li>
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

              <tr></tr>
              <tr>
                <td class="tta1" style="width:30%">強勢(容易對抗)</td>
                <td class="tta4">
                  <nuxt-link to="/units/Naval_Vessels">船隻</nuxt-link
                  >，<nuxt-link to="/units/Archer_Units">弓兵系</nuxt-link
                  >，虛弱的近戰單位。
                </td>
              </tr>
              <tr>
                <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
                <td class="tta4">
                  <nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
                  >，<nuxt-link to="/units/Tarkan">答剌罕騎兵</nuxt-link
                  >，<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
                  >，<nuxt-link to="/units/War_Elephant">戰象</nuxt-link
                  >，<nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
                  >。
                </td>
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
                </td>
              </tr>
              <tr>
                <td class="tta1">
                  <nuxt-link to="/elements/Attack">攻擊力</nuxt-link>
                </td>
                <td class="tta4">
                  <img
                    class="gg"
                    src="~assets/fletching.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Fletching">絕世好箭</nuxt-link>(+1)
                  <br />
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
                  /><nuxt-link to="/techs/Bracer">強力護腕</nuxt-link>(+1)
                  <br />
                  <img
                    class="gg"
                    src="~assets/chemistry.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1) <br />
                  <img
                    class="gg"
                    src="~assets/arrowslits.png"
                    alt=""
                  /><nuxt-link to="/techs/Arrowslits">箭狹槽</nuxt-link
                  >(+3)<br />
                  <img
                    class="gg"
                    src="~assets/heated_shot.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Heated_Shot">火箭</nuxt-link
                  >(+125%，僅對<nuxt-link to="/units/Naval_Vessels"
                    >船隻</nuxt-link
                  >)
                </td>
              </tr>
              <tr>
                <td class="tta1">射程</td>
                <td class="tta4">
                  <img
                    class="gg"
                    src="~assets/fletching.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Fletching">絕世好箭</nuxt-link>(+1)
                  <br />
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
                  /><nuxt-link to="/techs/Bracer">強力護腕</nuxt-link>(+1)
                  <br />
                  <img
                    class="gg"
                    src="~assets/murder_holes.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Murder_Holes">近射孔</nuxt-link
                  >:消除最小射程
                </td>
              </tr>
              <tr>
                <td class="tta1">準確度</td>
                <td class="tta4">
                  <img
                    class="gg"
                    src="~assets/ballistics.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link
                  >:較易擊中移動目標
                </td>
              </tr>
              <tr>
                <td class="tta1">護甲</td>
                <td class="tta4">
                  <img
                    class="gg"
                    src="~assets/masonry.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link
                  >(+1/+1，+3建築護甲)
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
                  抗<nuxt-link to="/elements/Conversion">招降</nuxt-link>能力
                </td>
                <td class="tta4">
                  <img
                    class="gg"
                    src="~assets/faith.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
                </td>
              </tr>
              <tr>
                <td class="tta1">建造速度</td>
                <td class="tta4">
                  <img
                    class="gg"
                    src="~assets/treadmill_crane.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Treadmill_Crane">磨坊水車</nuxt-link
                  >(+20%)
                </td>
              </tr>
              <tr>
                <td class="tta1">工作效率</td>
                <td class="tta4">
                  <img
                    class="gg"
                    src="~assets/conscription.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link
                  >(+33%)
                </td>
              </tr>
              <tr>
                <td class="tta1">其他</td>
                <td class="tta4">
                  <img
                    class="gg"
                    src="~assets/Herbalmedicine.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Herbal_Medicine">草藥治療</nuxt-link
                  >:駐紮單位治療速度加快
                </td>
              </tr>
            </table>

            <h3>團隊加分</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link
                  >：<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
                  >提升城樓攻擊、射程的科技研發快80％。
                </li>
                <li>
                  <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link
                  >：<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link
                  >和<nuxt-link to="/techs/Herbal_Medicine">草藥治療</nuxt-link
                  >研發快20%。
                </li>
                <li>
                  <nuxt-link to="/civs/Malians">馬利</nuxt-link>：<nuxt-link
                    to="/building/University"
                    >大學</nuxt-link
                  >研究有利於城樓的科技提高快80%。
                </li>
              </ul>
            </div>
            <h3>更新日誌</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <h3>
                <em><nuxt-link to="/games/delw">西方霸主</nuxt-link></em>
              </h3>
              <ul>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                城樓
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Kreposticon.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">概要</div>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Sicilians">西西里</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">90秒</td>
          </tr>
          <tr>
            <td class="unit3">功能</td>
            <td class="unit4">
              訓練<nuxt-link to="/units/Serjeant">薩金特衛兵</nuxt-link
              ><br />攻擊敵方
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
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Stone">石頭</nuxt-link>
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
            <td class="unit4">2x2</td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/feudal_age.png"
                width="30"
                alt=""
              />1000 <br />
              <img
                class="gg"
                src="~assets/castle_age.png"
                width="30"
                alt=""
              />1500 <br />
              <img
                class="gg"
                src="~assets/imperial_age.png"
                width="30"
                alt=""
              />2250
            </td>
          </tr>
          <tr>
            <td class="unit3">駐軍</td>
            <td class="unit4">10</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">
              5(<nuxt-link to="/units/Archer_Units">遠程</nuxt-link>)
            </td>
          </tr>

          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Ship">船隻</nuxt-link>+7
              <br />對<nuxt-link to="/armor/Armor_Class_Fishing_Ship"
                >漁船</nuxt-link
              >+7 <br />對<nuxt-link to="/armor/Armor_Class_Spearman"
                >長槍兵</nuxt-link
              >+2 (僅第一發箭)<br />對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝單位</nuxt-link
              >+1 <br />對<nuxt-link to="/armor/Armor_Class_stone_defense"
                >石頭建築</nuxt-link
              >+5 (除第一發箭外)
              <br />
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">8</td>
          </tr>
          <tr>
            <td class="unit3">最小範圍</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">100%</td>
          </tr>
          <tr>
            <td class="unit3">箭矢速度</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">
              <img class="gg" src="~assets/feudal_age.png" width="30" alt="" />1
              <br />
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
              <img class="gg" src="~assets/feudal_age.png" width="30" alt="" />7
              <br />
              <img class="gg" src="~assets/castle_age.png" width="30" alt="" />8
              <br />
              <img
                class="gg"
                src="~assets/imperial_age.png"
                width="30"
                alt=""
              />9
            </td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>
              <br /><nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
              <br /><nuxt-link to="/armor/Armor_Class_stone_defense"
                >石頭建築</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">10</td>
          </tr>
        </table>

        <div class="thanks">感謝！本頁面由singsing612協助完成。</div>
      </div>
    </div>
    <div class="col-md-12">
      <h3>圖庫</h3>
      <div class="hrn1"></div>
      <div class="n1">
        <div class="col-md-4">
          <gallery
            ><img class="imgn hg" width="180" src="~assets/Krepost.jpg" alt=""
          /></gallery>
          <div class="lightbox-caption" style="width:220px">
            <p><em>遊戲中的城樓。</em></p>
          </div>
        </div>
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
