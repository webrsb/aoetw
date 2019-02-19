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
            港灣大商站是非洲王國資料片中，葡萄牙人於帝王時代可以建造的特殊建築物。不需村民蒐幫忙蒐集資源，港灣大商站每秒會給玩家0.8食物、0.8木材、0.45黃金和0.25石頭，也就是每分鐘會給48食物、48木材27黃金和15石頭。不過港灣大商站需要佔用20人口。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <li>
                除了礙於人口限制之外，玩家可以建造多少個港灣大商站是沒有限制的。
                只要玩家擁有至少一個人口空間，玩家仍然可以建造一座港灣大商站（排隊的單位還是會算入這個空間）。雖然佔據20人口讓蓋港灣大商站看起來似乎不值得，但它給與免費的黃金跟石頭讓人很難評估它的實際價值。
              </li>
              <li>
                港灣大商站最適合黃金和石頭等資源耗盡的後期遊戲。
                玩家必須確保將其放在防守良好的地方，以保護緩慢的資源源源不斷的進入口袋。
              </li>
              <li>
                港灣大商站可以被敵人招降，不過葡萄牙人可以研究異端邪說避免港灣大商站被敵人利用。如果玩家招降了港灣大商站，則人口將被強迫增加20人。
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
              >(護甲+1/+1，+3建築護甲) <br />
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
            <td class="tta1">招降抵抗</td>
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

        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Masonry"
                >磚瓦技術</nuxt-link
              >、<nuxt-link to="/techs/Architecture">建築學</nuxt-link>和
              <nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
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
            <li>港灣大商站每秒給玩家0.7食物、0.7木材、0.45黃金和0.45石材。</li>
            <li>4.8版後港灣大商站建造花費250黃金和250石材。</li>
            <li>
              4.8版後港灣大商站每秒給玩家0.8食物、0.8木材、0.45黃金和0.25石材
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
                <img src="~assets/Feitoriaicon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">概要</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
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
            <td class="unit3">石頭</td>
            <td class="unit4">250</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">250</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2"><nuxt-link to="">數據</nuxt-link></div>
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
            <td class="unit3">近防</td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">10</td>
          </tr>
          <tr>
            <td class="unit3">護甲類別</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link>
              <br />
              <nuxt-link to="/armor/Armor_Class_Standard_Building"
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
