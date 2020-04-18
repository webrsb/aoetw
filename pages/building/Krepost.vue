<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>營壘</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>營壘</b>是《<nuxt-link to="/games/de"
              >世紀帝國II：決定版</nuxt-link
            >》中，<nuxt-link to="/civs/Bulgarians">保加利亞人</nuxt-link
            >於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >可以建造的特殊<nuxt-link to="/building">建築物</nuxt-link
            >和防禦建築。它是城堡的縮小版，可以訓練<nuxt-link
              to="/units/Konniks"
              >保加利亞騎兵</nuxt-link
            >，<nuxt-link to="/elements/Garrison">駐軍</nuxt-link
            >可達20人，且不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >，但不能研發<nuxt-link to="/techs">科技</nuxt-link>。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <li>
                在進攻方面上，堡壘的性能可能會優於<nuxt-link
                  to="/building/Castle"
                  >城堡</nuxt-link
                >，因為建築時間更短，並且一個城堡的成本幾乎等同堡壘。另外，堡壘與城堡訓練<nuxt-link
                  to="/units/Konniks"
                  >保加利亞騎兵</nuxt-link
                >的時間是相同的，這使得能更容易地實現堡推。和城堡一樣，堡壘會根據駐紮單位來提升射箭數量。
              </li>
              <li>
                在防禦方面上，堡壘的<nuxt-link to="/elements/Attack"
                  >攻擊力</nuxt-link
                >，射程和<nuxt-link to="/elements/Hit_points">生命值</nuxt-link
                >比城堡小，並且不能製造<nuxt-link to="/units/Trebuchet"
                  >巨型投石機</nuxt-link
                >。除非沒有足夠的<nuxt-link to="/resource/Stone">石頭</nuxt-link
                >建造城堡，或是想要用相同的資源控圖或控制資源區，還是要建造城堡以製造巨型投石機。
              </li>
              <li>
                <nuxt-link to="/units/Siege_Weapons">攻城器單位</nuxt-link
                >能用比城堡大約一半的時間摧毀堡壘，因此要像城堡和<nuxt-link
                  to="/building/Watch_Tower"
                  >箭塔</nuxt-link
                >一樣，最好把堡壘建在隘口或障礙物（城牆、懸崖、森林）後面，以免受非遠距離單位攻擊。
              </li>
              <li>
                堡壘也是升級<nuxt-link to="/techs/age/Imperial_Age"
                  >帝王時代</nuxt-link
                >的條件，因為它被視為城堡，如果玩家想快速升級帝王時代的話，則應考慮建造堡壘而非其他建築物。
              </li>
            </div>
            <h3>箭數</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <p>
                營壘可以根據駐紮單位來提升射箭數量，沒有任何駐紮時可以射出5支箭。每支箭造成9傷害(根據被傷害單位<nuxt-link
                  to="/armor"
                  >遠程護甲</nuxt-link
                >減少)。
              </p>
              <p>以下列出駐紮達最大時，不同單位提供的箭數量。</p>
              <table class="table-bordered" width="100%">
                <tr class="tta">
                  <td>單位類型</td>
                  <td>單位數量</td>
                  <td>未升級時的箭數</td>
                  <td>全滿時的箭數#</td>
                </tr>
                <tr>
                  <td class="tta1">
                    <img
                      class="gg"
                      src="~assets/VillagerMaleIcon.png"
                      width="30"
                      alt=""
                    /><nuxt-link to="/units/Villager">村民</nuxt-link>
                  </td>
                  <td class="tta2">20</td>
                  <td class="tta3">14(額外9)</td>
                  <td class="tta4">11(額外6)</td>
                </tr>
                <tr>
                  <td class="tta1">
                    <img
                      class="gg"
                      src="~assets/ArcherIcon.png"
                      width="30"
                      alt=""
                    /><nuxt-link to="/units/Archer">弓兵</nuxt-link>
                  </td>
                  <td class="tta2">20</td>
                  <td class="tta3">12(額外7)</td>
                  <td class="tta4">17(額外12)</td>
                </tr>
                <tr>
                  <td class="tta1">
                    <img
                      class="gg"
                      src="~assets/CavalryArcherIcon.png"
                      width="30"
                      alt=""
                    /><nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>
                  </td>
                  <td class="tta2">20</td>
                  <td class="tta3">15(額外10)</td>
                  <td class="tta4">21(額外16)</td>
                </tr>
              </table>

              #全滿的意思是<nuxt-link to="/techs/Fletching">絕世好箭</nuxt-link
              >，<nuxt-link to="/techs/Bodkin_Arrow">羽箭</nuxt-link
              >，<nuxt-link to="/techs/Bracer">強力護腕</nuxt-link>，<nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >和<nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>皆已升級。
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
                  >，<nuxt-link to="/units/Monk">僧侶</nuxt-link
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
                    src="~assets/Bracer.jpg"
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
                    src="~assets/heated_shot.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Heated_Shot">火箭</nuxt-link
                  >(+4，僅對<nuxt-link to="/units/Naval_Vessels">船隻</nuxt-link
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
                    src="~assets/Bracer.jpg"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Bracer">強力護腕</nuxt-link>(+1)
                  <br />
                  <img
                    class="gg"
                    src="~assets/Murderholes.jpg"
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
                    src="~assets/Ballistics.jpg"
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
                  >(+1/+1，+3建築護甲) <br />
                  <img
                    class="gg"
                    src="~assets/architecture.png"
                    width="30"
                    alt=""
                  /><nuxt-link to="/techs/Architecture">建築學</nuxt-link
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
                  >提升營壘攻擊、射程的科技研發快50％。
                </li>
                <li>
                  <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link
                  >：<nuxt-link to="/techs/Herbal_Medicine">草藥治療</nuxt-link
                  >研發快20%。
                </li>
                <li>
                  <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                    to="/techs/Masonry"
                    >磚瓦技術</nuxt-link
                  >、<nuxt-link to="/techs/Architecture">建築學</nuxt-link
                  >和<nuxt-link to="/techs/Treadmill_Crane">磨坊水車</nuxt-link
                  >團隊速度提高80%。
                </li>
              </ul>
            </div>
            <h3>更新日誌</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <h3>
                <em><nuxt-link to="/games/aok">決定版</nuxt-link></em>
              </h3>
              <ul>
                <li>
                  (34055更新) 營壘尺寸由4x4改為3x3，且不能被招降。
                </li>
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
                營壘
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/feitoria.png" class="img-fluid" alt="" />
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
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">150秒</td>
          </tr>
          <tr>
            <td class="unit3">功能</td>
            <td class="unit4">
              訓練<nuxt-link to="/units/Konniks">保加利亞騎兵</nuxt-link
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
              <nuxt-link to="/resource/Stone">石頭</nuxt-link>
            </td>
            <td class="unit4">350</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">3x3</td>
          </tr>
          <tr>
            <td class="unit3">生命值</td>
            <td class="unit4">2600</td>
          </tr>
          <tr>
            <td class="unit3">駐軍</td>
            <td class="unit4">20</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">
              9(<nuxt-link to="/units/Archer_Units">遠程</nuxt-link>)
            </td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3">最小範圍</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">8</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">11</td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>（+8）
              <br /><nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
              <br /><nuxt-link to="/armor/Armor_Class_Castle">城堡</nuxt-link>
            </td>
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
            ><img
              class="imgn hg"
              width="180"
              src="~assets/Feitoria_-_Copie.png"
              alt=""
          /></gallery>
          <div class="lightbox-caption" style="width:220px">
            <p><em>遊戲中的營壘。</em></p>
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
