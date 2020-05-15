<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>港灣大商站</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>港灣大商站</b>是《<nuxt-link to="/games/ak"
              >世紀帝國II：非洲王國</nuxt-link
            >》資料片中，<nuxt-link to="/civs/Portuguese">葡萄牙人</nuxt-link
            >於<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >可以建造的特殊<nuxt-link to="/building">建築物</nuxt-link
            >。不需<nuxt-link to="/units/Villager">村民</nuxt-link
            >蒐幫忙蒐集資源，港灣大商站每秒會給玩家1.6<nuxt-link
              to="/resource/Food"
              >食物</nuxt-link
            >、1<nuxt-link to="/resource/Wood">木材</nuxt-link>、0.7<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >和0.3<nuxt-link to="/resource/Stone">石頭</nuxt-link
            >，也就是每分鐘會給96食物、60木材42黃金和18石頭。不過港灣大商站需要佔用20人口。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <li>
                除了礙於人口限制之外，玩家可以建造多少個港灣大商站是沒有限制的。只要玩家擁有至少一個人口空間，玩家仍然可以建造一座港灣大商站（排隊的單位還是會算入這個空間）。雖然佔據20人口讓蓋港灣大商站看起來似乎不值得，但它給與免費的黃金跟石頭讓人很難評估它的實際價值。
              </li>
              <li>
                港灣大商站最適合黃金和石頭等資源耗盡的後期遊戲。玩家必須確保將其放在防守良好的地方，以保護緩慢的資源源源不斷的進入口袋。
              </li>
              <li>
                港灣大商站可以被敵人<nuxt-link to="/elements/Conversion"
                  >招降</nuxt-link
                >，不過葡萄牙人可以研究<nuxt-link to="/techs/Heresy"
                  >異端邪說</nuxt-link
                >避免港灣大商站被敵人利用。如果玩家招降了港灣大商站，則人口將被強迫增加20人。
              </li>
            </div>
          </div>
        </div>
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
              /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>(+10%) <br />
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
              >(護甲+1/+1，+3<nuxt-link to="/armor/Armor_Class_Building"
                >建築護甲</nuxt-link
              >) <br />
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
            <td class="tta1">招降抵抗</td>
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

        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
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
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>港灣大商站建造花費250木材和250黃金</li>
            <li>港灣大商站每秒給玩家0.7食物、0.7木材、0.45黃金和0.45石頭。</li>
            <li>4.8版後港灣大商站建造花費250黃金和250石頭。</li>
            <li>
              4.8版後港灣大商站每秒給玩家0.8食物、0.8木材、0.45黃金和0.25石頭
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aok">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              (35584更新) 港灣大商站每秒給玩家1.6食物、1木材、0.7黃金和0.3石頭
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                港灣大商站
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
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">120秒</td>
          </tr>
          <tr>
            <td class="unit3">功能</td>
            <td class="unit4">給予免費資源</td>
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
            <td class="unit4">250</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">250</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">5x5</td>
          </tr>
          <tr>
            <td class="unit3">生命值</td>
            <td class="unit4">5200</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">10</td>
          </tr>
          <tr>
            <td class="unit3">護甲類別</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
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

        <div class="thanks">感謝！本頁面由賜齡協助完成。</div>
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
            <p><em>遊戲中的港灣大商站。</em></p>
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
