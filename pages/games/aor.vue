<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>世紀帝國II：王者崛起</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>《世紀帝國II：王者崛起》</b
            >，譯名很多又稱<b>拉惹崛起</b>，是世紀帝國II第四張資料片，也是最新的資料片，發行於2016年12月19日。本資料片新增了四個東南亞<nuxt-link
              to="/civs"
              >文明</nuxt-link
            >且更新了<nuxt-link to="/civs/Indians">印度</nuxt-link
            >種族的建築風格，遊戲中也增加了一些新單位、建築和物件。
          </p>
          <p>拉惹為南亞、東南亞以及印度等地對國王、君主或酋長的稱呼。</p>
        </div>
        <h2>新增元素</h2>
        <div class="hrn1"></div>
        <h3>文明</h3>
        <div class="n1">
          <ul>
            <li>
              <strong><nuxt-link to="/civs/Burmese">緬甸</nuxt-link>:</strong
              >登上權力顛峰，掀起詭譎的叛亂，恢復緬甸君主的輝煌。
            </li>
            <li>
              <strong><nuxt-link to="/civs/Khmer">高棉</nuxt-link>:</strong
              >建造世界上最大的宗教建築，使用那些強大的<nuxt-link
                to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >。
            </li>
            <li>
              <strong><nuxt-link to="/civs/Malay">馬來</nuxt-link>:</strong
              >重建東南亞最大的帝國，在這地區留下你的印記，從這個島嶼跳到這個島嶼，統治整個東南亞地區。
            </li>
            <li>
              <strong><nuxt-link to="/civs/Vietnamese">越南</nuxt-link>:</strong
              >率領<nuxt-link to="/civs/Vietnamese">越南人</nuxt-link
              >民脫離明帝國獨立，用強大的<nuxt-link to="/units/Archer_Units"
                >遠程</nuxt-link
              >部隊進行游擊戰。
            </li>
          </ul>
        </div>
        <h3>單位</h3>
        <div class="n1">
          <p><nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link></p>
          <ul>
            <li>
              <img class="gg" src="~assets/Arambaiicon.png" alt="" /><nuxt-link
                to="/units/Arambai"
                >飛鏢騎兵</nuxt-link
              >:緬甸的特殊單位，能夠在<nuxt-link to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >的<nuxt-link to="/building/Castle">城堡</nuxt-link
              >中訓練。<nuxt-link to="/units/Arambai">飛鏢騎兵</nuxt-link
              >是<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >部隊破壞力極高但命中低，對<nuxt-link to="/armor/Armor_Class_Ram"
                >衝撞車系列</nuxt-link
              >有加成傷害。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Ballistaelephanticon.png"
                alt=""
              /><nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link
              >:高棉的特殊單位，能夠在城堡時代的城堡中訓練。<nuxt-link
                to="/units/Ballista_Elephant"
                >弩砲象</nuxt-link
              >這是一種混合型單位是由<nuxt-link to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >加攻城武器混合型單位，攻擊模式類似弩砲，弩砲象是可以伐木的。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Karambitwarrioricon.png"
                alt=""
              /><nuxt-link to="/units/Karambit_Warrior">爪刀勇士</nuxt-link
              >:為馬來的特殊單位。是遊戲裡只佔半個人口的單位，便宜/快速的單位，缺點是過於脆弱。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/RattanarcherIcon2.png"
                alt=""
              /><nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link
              >:越南的特殊單位，是個有非常高<nuxt-link to="/armor"
                >遠程護甲</nuxt-link
              >的<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Imperialskirmishericon.png"
                alt=""
              /><nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link
              >:<nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link
              >是越南第二個特殊單位，可以在<nuxt-link
                to="/building/Archery_Range"
                >射箭場</nuxt-link
              >訓練，是<nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
              >的升級，是一個反<nuxt-link to="/armor/Armor_Class_Archer/"
                >弓箭手</nuxt-link
              >的<nuxt-link to="/units/Archer_Units">遠程單位</nuxt-link>。
            </li>
          </ul>
        </div>
        <p>一般單位</p>
        <ul>
          <li>
            <img
              class="gg"
              src="~assets/Battleelephanticon.png"
              alt=""
            /><nuxt-link to="/units/Battle_Elephant">茅象伕</nuxt-link
            >:東南亞特殊單位，城堡時代兵種，可訓練於<nuxt-link
              to="/building/Stable"
              >馬廄</nuxt-link
            >，與<nuxt-link to="/civs/Persians">波斯</nuxt-link
            >戰像相似但攻擊範圍較小，他們移動緩慢容易受到範圍傷害的單位攻擊，也容易被<nuxt-link
              to="/units/Monk"
              >僧侶</nuxt-link
            ><nuxt-link to="/elements/Conversion">招降</nuxt-link>。
          </li>
        </ul>
        <p>建築</p>
        <ul>
          <li>
            <img width="25px" src="~assets/Dockicon.png" alt="" /><nuxt-link
              to="/building/Harbor"
              >海港</nuxt-link
            >:<nuxt-link to="/civs/Malay">馬來人</nuxt-link
            >進入城堡時代研發完<nuxt-link to="/techs">科技</nuxt-link
            >"海上霸主"可以建造的特殊軍事經濟復合式<nuxt-link to="/building"
              >建築物</nuxt-link
            >。<nuxt-link to="/building/Harbor">海港</nuxt-link>比<nuxt-link
              to="/building/Dock"
              >碼頭</nuxt-link
            >有更多的<nuxt-link to="/elements/Hit_points">生命值</nuxt-link
            >和<nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link
            >，而且能以箭矢攻擊來犯的敵方單位。
          </li>
        </ul>
        <h3>戰役</h3>
        <p>
          <em>主要文章:<nuxt-link to="/batt">戰役</nuxt-link></em>
        </p>
        <ul>
          <li><nuxt-link to="/batt/Gajah_Madaa">加查·馬達</nuxt-link></li>
          <li>
            <nuxt-link to="/units/hero/Suryavarman_I">蘇利耶跋摩一世</nuxt-link
            >:西元十一世紀初，高棉王國四分五裂、強敵環伺。只有蘇利耶跋摩王子有能力與魄力一一打敗各路勁敵光復高棉。然而打江山易，守江山難。蘇利耶跋摩能否擴大基業，吞併強鄰。開創屬於自己的千秋霸業呢？
          </li>
          <li>
            <nuxt-link to="/batt/Bayinnaunga">勃印曩</nuxt-link
            >:曾經有一位拉闍想把四分五裂的國家重新統一起來，但由於有內奸背叛，他未竟的使命要由他最忠誠的侍衛來完成。有沒有可能，讓一位將領繼承王位，並建立起東南亞歷史上最大的國家？
          </li>
          <li>
            <nuxt-link to="/units/hero/Le_Loi">黎利</nuxt-link
            >:當大越陷於內亂紛爭之際，明朝趁虛而入佔據了整片地區。而今，想要重獲獨立自由，就要依靠一個人
            － 一位名叫<nuxt-link to="/units/hero/Le_Loi">黎利</nuxt-link
            >的有志貴族青年。他能否平息內鬥，抵抗明朝大軍並帶領大越再次獨立？
          </li>
        </ul>
        <h3>平衡更動</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p><strong>種族平衡</strong></p>
          <p><strong>一般平衡</strong></p>
          <p><strong>科技變動</strong></p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#356a98">
              <div class="unititle2">
                世紀帝國II：王者崛起
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img width="100%" src="~assets/001-105.jpg" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#356a98">
              <div class="unititle2" style="color: #fff;">遊戲介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">開發商</td>
            <td class="unit4">Skybox Labs <br />Forgotten <br />Empires LLC</td>
          </tr>
          <tr>
            <td class="unit3">發行</td>
            <td class="unit4">微軟</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#356a98;">
              <div class="unititle2" style="color: #fff;">發行日期</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">steam版本</td>
            <td class="unit4">2016年12月19日</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#356a98;">
              <div class="unititle2" style="color: #fff;">前作與擴充</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">擴充</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link><br /><nuxt-link
                to="/games/aoc"
                >征服者入侵</nuxt-link
              ><br /><nuxt-link to="/games/aof">失落的帝國</nuxt-link
              ><br /><nuxt-link to="/games/ak">非洲王國</nuxt-link>
              <br /><nuxt-link to="/games/de">決定版</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'foot',
  components: {}
}
</script>
<style></style>
