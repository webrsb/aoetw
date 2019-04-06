<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>爆炸桶</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <b>爆炸桶</b>是<nuxt-link to="/units/Siege_Weapons"
            >攻城武器單位</nuxt-link
          >，可以在<nuxt-link to="/building/Castle">城堡</nuxt-link
          >訓練，他比大多數的<nuxt-link to="/units/Siege_Weapons"
            >攻城武器</nuxt-link
          >都還要快，對目標進行自殺性攻擊，對<nuxt-link
            to="/building/Stone_Wall"
            >牆</nuxt-link
          ><nuxt-link to="/building">建築物</nuxt-link
          >及攻城武器造成毀滅性的傷害，是遊戲內少數的自殺單位。
        </div>
        <h3>介紹影片</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/d8QmDVdj0lc"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen
          ></iframe>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            對於建築物和攻城武器，爆炸桶是非常適合的攻擊武器，雖然看起來爆炸桶是用爆炸來造成區域性的攻擊，但實際上並沒有，他的攻擊非常的小，與遊戲內其他有<nuxt-link
              to="/elements/Area_of_Effect"
              >擴散效果</nuxt-link
            >的單位不同。而<nuxt-link to="/units/Archer_Units"
              >遠距離兵種</nuxt-link
            >對於爆炸桶相當有威脅。
          </p>
          <p>
            爆炸桶是一個偷襲很好用的武器，他可以迅速的破壞<nuxt-link
              to="/building/Stone_Wall"
              >石牆</nuxt-link
            >，只要兩個爆炸桶便可以摧毀一塊<nuxt-link to="/building/Stone_Wall"
              >石牆</nuxt-link
            >，並且神不知鬼不覺，讓對方無法反應。
          </p>
          <p>
            而對<nuxt-link to="/building/Castle">城堡</nuxt-link
            >進行攻擊時，最好使用交錯隊形，這樣比較不會被城堡射倒。
          </p>
          <p>
            爆炸桶外觀與只能再地圖編輯器中找到的<nuxt-link
              to="/units/hero/Saboteur"
              >破壞者</nuxt-link
            >相同，只是<nuxt-link to="/units/hero/Saboteur">破壞者</nuxt-link
            >強太多，且速度更快，攻擊更高，也有<nuxt-link
              to="/elements/Area_of_Effect"
              >擴散效果</nuxt-link
            >。而<nuxt-link to="/units/Demolition_Ship">神風船</nuxt-link
            >則是價格較高，但攻擊範圍更大、速度更快。事實上，<nuxt-link
              to="/units/Demolition_Ship"
              >神風船</nuxt-link
            >是遊戲中最快的單位。
          </p>
        </div>
        <h3>摧毀建築所需的數量</h3>
        <div class="hrn1"></div>
        <div class="col-md-6">
          <div class="n1 bonuses">
            <strong
              >沒有研究<nuxt-link to="/techs/Siege_Engineers"
                >攻城工程師</nuxt-link
              ></strong
            >
            <ul>
              括號內為研發<nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link
              >與<nuxt-link to="/techs/Architecture">建築學</nuxt-link
              >後
              <li>
                <nuxt-link to="/building/Town_Center"
                  ><img
                    class="gg"
                    src="~assets/Towncentericon.png"
                    alt=""
                  />城鎮中心</nuxt-link
                >:5(6)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Stonewallicon.png"
                  alt=""
                /><nuxt-link to="/building/Stone_Wall">石牆</nuxt-link>:2
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Stonewallicon.png"
                  alt=""
                /><nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link>:2
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Watchtowericon.png"
                  alt=""
                /><nuxt-link to="/building/Watch_Tower">暸望箭塔</nuxt-link
                >:2(3)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Watchtowericon.png"
                  alt=""
                /><nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link
                >:3(4)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Watchtowericon.png"
                  alt=""
                /><nuxt-link to="/building/Keep">大型箭塔</nuxt-link>:5(6)
              </li>
              <li>
                <img class="gg" src="~assets/Castleicon.png" alt="" /><nuxt-link
                  to="/building/Castle"
                  >城堡</nuxt-link
                >:8(12)
              </li>
              <li>
                <img class="gg" src="~assets/Wondericon.png" alt="" /><nuxt-link
                  to="/building/Wonder"
                  >世界奇觀</nuxt-link
                >:10(12)
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="n1 bonuses">
            <strong>研究攻城工程師</strong>
            <ul>
              括號內為研發磚瓦技術與建築學後
              <li>
                <nuxt-link to="/building/Town_Center"
                  ><img
                    class="gg"
                    src="~assets/Towncentericon.png"
                    alt=""
                  />城鎮中心</nuxt-link
                >:4(5)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Stonewallicon.png"
                  alt=""
                /><nuxt-link to="/building/Stone_Wall">石牆</nuxt-link>:2
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Stonewallicon.png"
                  alt=""
                /><nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link>:2(3)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Watchtowericon.png"
                  alt=""
                /><nuxt-link to="/building/Watch_Tower">暸望箭塔</nuxt-link>:2
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Watchtowericon.png"
                  alt=""
                /><nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>:3
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Watchtowericon.png"
                  alt=""
                /><nuxt-link to="/building/Keep">大型箭塔</nuxt-link>:4
              </li>
              <li>
                <img class="gg" src="~assets/Castleicon.png" alt="" /><nuxt-link
                  to="/building/Castle"
                  >城堡</nuxt-link
                >:7(9)
              </li>
              <li>
                <img class="gg" src="~assets/Wondericon.png" alt="" /><nuxt-link
                  to="/building/Wonder"
                  >世界奇觀</nuxt-link
                >:7(9)
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
              >、近戰單位特別是<nuxt-link to="/units/Magyar_Huszar"
                >馬扎爾驃騎兵</nuxt-link
              >。
            </td>
          </tr>
          <tr class="tta">
            <td colspan="2" style="text-align: center;">
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
                src="~assets/Siegeengineers.jpg"
                alt=""
              /><nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link
              >:對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
              >攻擊加成+40%。 <br />
            </td>
          </tr>
          <tr></tr>
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

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>：生產快15%。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對爆炸桶有利的<nuxt-link to="/techs">科技</nuxt-link
              >在<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >便宜20%。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：花費<nuxt-link to="/resource/Gold">黃金</nuxt-link>成本少15%。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>：<nuxt-link
                to="/techs/Conscription"
                >徵兵制度</nuxt-link
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
              >能夠加速爆炸桶訓練速度和<nuxt-link to="/techs/Conscription"
                >徵兵制度</nuxt-link
              >的研究時間(快25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研發<nuxt-link
                to="/techs/Siege_Engineers"
                >攻城工程師</nuxt-link
              >的速度快80%。
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
            <li>成本為80F/20G</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>成本為65F/20G</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            中世紀火藥的主要用途是作為火器和大砲的推進劑，但最終也被用作炸藥。爆炸桶可以用來破壞城堡門和其他障礙物。“petard”這個詞來源於<nuxt-link
              to="/civs/Franks"
              >法國</nuxt-link
            >的一個詞，意思是破風。在非常危險的情況下，一個裝甲人員會將爆炸桶送到攻擊點並點燃導火線。如果保險絲發生故障或電荷由於某種原因提前關閉，那麼這個爆炸桶就會沒法發揮作用，俗話說就是:“被他自己的屁股吊起來”，這是今天當計劃或操作發生故障時仍然會使用的一句話。
          </p>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Petard.png" alt=""
              /></gallery>
              <p><em>一群爆炸桶</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                爆炸桶
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/PetardIcon.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2" style="color:#fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Siege_Weapons">攻城器</nuxt-link>，自殺單位
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
                src="~assets/Castleicon.png"
                width="45"
                alt=""
              /><nuxt-link to="/building/Castle">城堡</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">25秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2" style="color:#fff;">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">65</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">20</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2" style="color:#fff;">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">50</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Attack">攻擊</nuxt-link>
            </td>
            <td class="unit4">25(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +900對<nuxt-link to="/armor/Armor_Class_wall_and_gate"
                >牆與門</nuxt-link
              >
              <br />+500對<nuxt-link to="/armor/Armor_Class_Building"
                >建築</nuxt-link
              >
              <br />+100對<nuxt-link to="/armor/Armor_Class_Castle"
                >城堡</nuxt-link
              >
              <br />+60<nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                >攻城武器</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Area_of_Effect">擴散範圍</nuxt-link>
            </td>
            <td class="unit4">0.5</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">無</td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.8</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">4</td>
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
