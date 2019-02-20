<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>城門</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            城門是世紀帝國II進入封建時代可以建造的防禦性建築，他可以建在城牆上，可以讓同盟通過同時阻擋敵人。
          </p>
          <p>當石牆升級成垛牆時，城門也會升級生命值從2700變成4000。</p>
          <p>
            城門除了哥德之外的所有文明都可以使用，垛牆和升級過的城門除了<nuxt-link
              to="/civs/Goths"
              >哥德</nuxt-link
            >、<nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
            <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、<nuxt-link
              to="/civs/Malay"
              >馬來</nuxt-link
            >和<nuxt-link to="/civs/Persians">波斯</nuxt-link
            >以外的文明都可以使用。
          </p>
          <p>
            城門在友方單位靠近時會自動開啟讓他們通過，並在門下沒有任何單位時(我方或敵方)關上。為了避免敵方單位尾隨友方單位進門後佔住城門變成防守漏洞，可以將城門鎖定(可再次解鎖)；然而阻擋敵方單位時我方單位也無法通過該城門。
          </p>
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
            <td class="tta4">除了僧侶外的全部單位。</td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">生命值</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Great_Wall">長城</nuxt-link>:+30%
              HP，<nuxt-link to="/civs/Chinese">中國</nuxt-link>限定
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
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：城門在封建/城堡/帝王時代多20%/30%/40%的血量。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：在城堡/帝王時代，對城門有利的技術價格便宜15％/20％。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>：城門建築速度快33%
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：城門造價便宜15%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：城門建築速度快30%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Treadmill_Crane"
                >滑輪起重機</nuxt-link
              >和升級
              <nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link
              >科技的團隊速度提高80%。
            </li>
            <li><nuxt-link to="/civs/Mayans">馬雅</nuxt-link>：城門便宜50%</li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>城門從封建時代都是2750HP。</li>
            <li>升級到垛牆需要200食物和100石材。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>升級到垛牆需要200食物和100木材。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>城門(非升級過)在封建/城堡/帝王的HP分別是1375/2750/2750。</li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>:引入<nuxt-link
                to="/techs/Great_Wall"
                >長城</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>：石牆建築速度快33%
              。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            城門與城牆蓋在一起，以方便部隊進出要塞。城門可能是防守位置中最脆弱的部分，所以通常會在附近布置部隊保護。最普遍類型的城門是一個由絞車提起地重型金屬網的。城門會因為自己的重量和沿著溝槽放好位子。
            通常在城門後面上方會有一條狹長的通道。任何設法越過城門的攻擊者將容易遭受狹窄通道內士兵的射擊。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                城門
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Palisadegateicon.png" width="45" alt="" />
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
            <td class="unit4">防禦建築</td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">除了哥德以外的所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">使用</td>
            <td class="unit4">防止敵方單位進入，讓友方單位通過</td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">30秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">石材</td>
            <td class="unit4">30</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">4x1</td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                width="22"
                alt=""
              />1375 <br />
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="22"
                alt=""
              />2750/4000(升級) <br />
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                width="22"
                alt=""
              />2750/4000(升級)
            </td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>(+20)
              <br />
              <nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
              <br />
              <nuxt-link to="/armor/Armor_Class_stone_defense"
                >石頭建築</nuxt-link
              >
              <br />
              <nuxt-link to="/armor/Armor_Class_wall_and_gate"
                >牆與門</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面賜齡協助編輯</div>
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
                src="~assets/Stonewallaokaoc.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有文明的城門和石牆(帝王世紀和征服者入侵資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="180"
                src="~assets/Fortifiedwallaokaoc.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  >升級過的所有文明的城門和石牆(帝王世紀和征服者入侵資料片)。</em
                >
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="200"
                  src="~assets/Stonewallhd.jpg"
                  alt=""
              /></gallery>
              <div class="lightbox-caption" style="width:220px">
                <p><em>所有文明的城門和石牆(HD擴充資料片)。</em></p>
              </div>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="200"
                  src="~assets/Fortifiedwallhd.jpg"
                  alt=""
              /></gallery>
              <div class="lightbox-caption" style="width:220px">
                <p><em>升級過的所有文明的城門和石牆(HD擴充資料片)。</em></p>
              </div>
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
