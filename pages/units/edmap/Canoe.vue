<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>獨木舟</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>獨木舟</b>不能被玩家建造。獨木舟曾在<nuxt-link
              to="/batt/El_Doradoa"
              >黃金國戰役</nuxt-link
            >與法蘭西斯科．阿爾梅達<nuxt-link to="/batt">戰役</nuxt-link
            >中多次出現， 同時也能在地圖編輯器中找到。史前的美洲<nuxt-link
              to="/civs"
              >文明</nuxt-link
            >會使用獨木舟，之後非洲的原住民也短暫使用過獨木舟。
          </p>
          出現戰役:
          <ul>
            <li>
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>:在<nuxt-link
                to="/techs/El_Dorado"
                >黃金國</nuxt-link
              >戰役中兩個著名的場景分別是在<nuxt-link to="/batt/The_Split"
                >分離告別</nuxt-link
              >伊瑪拉部落的獨木舟，以及<nuxt-link to="/batt/The_Cannibals"
                >食人族</nuxt-link
              >
              中洛斯內格羅斯居民用獨木舟積極守護他們在亞<nuxt-link
                to="/units/animal/Wild_Horse"
                >馬</nuxt-link
              >遜河的地盤。
            </li>
            <li>
              <nuxt-link to="/games/ak">非洲王國</nuxt-link
              >:法蘭西斯科．阿爾梅達的<nuxt-link to="/batt/Lion_of_Africa"
                >非洲雄獅</nuxt-link
              >戰役中關契斯人用<nuxt-link to="/units/Gbeto"
                >飛刀女獵手</nuxt-link
              >、<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
              >和一些獨木舟守護著 他們的自然資源。
            </li>
            <li>
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>:<nuxt-link
                to="/units/hero/Bayinnaung"
                >勃印曩</nuxt-link
              ><nuxt-link to="/batt/The_Mandalay_Cobra">猛蛇出洞</nuxt-link
              >戰役中獨木舟位於將蒲甘城一分為二的河的東側，靠近東吁勇士和<nuxt-link
                to="/units/hero/Dragon_Ship"
                >龍船</nuxt-link
              >的地方。
            </li>
          </ul>
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="row">
              <div class="col-md-4">
                <gallery
                  ><img class="imgn hg" src="~assets/Canoegroup.png" alt=""
                /></gallery>
                <p><em>一群獨木舟。</em></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">獨木舟</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Canoeicon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                <nuxt-link to="/units">單位</nuxt-link>介紹
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Naval_Vessels">船</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">首次出現</td>
            <td class="unit4">
              <nuxt-link to="/techs/games/aof">失落的帝國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">70</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">7(遠攻)</td>
          </tr>
          <tr>
            <td class="unit3">傷害加成</td>
            <td class="unit4">
              +9對<nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link>
              <br />+7對<nuxt-link to="/armor/Armor_Class_Building"
                >建築</nuxt-link
              >
              <br />+4對<nuxt-link to="/armor/Armor_Class_Ram"
                >衝撞車</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>
            </td>
            <td class="unit4">3.05秒/次</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="NOLINKS">射程</nuxt-link></td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">準確率</td>
            <td class="unit4">100%</td>
          </tr>
          <tr>
            <td class="unit3">投射物速度</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link><br />
              <nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">15</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">8</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alledmap',
  components: {}
}
</script>
<style></style>
