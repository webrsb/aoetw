<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>蛇鳥之神</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>蛇鳥之神</b>是《<nuxt-link to="/games/aoc"
              >世紀帝國II：征服者入侵</nuxt-link
            >》<nuxt-link to="/batt/Montezumaa">蒙特蘇馬戰役</nuxt-link
            >的第三個場景。本<nuxt-link to="/batt">戰役</nuxt-link
            >是以羽蛇神的名字做命名，因為前一章科爾特斯在抵達之後被誤認為是羽蛇神的化身。
          </p>
          <p>
            這戰役首要的目標是擊敗特拉斯卡拉，遊戲接下來會給予一個二選一的任務，一個是收集20匹馬並帶到插旗子的地方(左下)阻止<nuxt-link
              to="/civs/Spanish"
              >西班牙人</nuxt-link
            >繼續訓練<nuxt-link to="/units/Conquistador">征服者</nuxt-link
            >，另一個是直接擊敗西班牙人。另外系統還要玩家保護同盟塔巴斯科避免他們被擊敗(史稱中央之戰)，不過即使他們落敗了也不會影響玩家。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <ul>
            <li>
              起始時代:
              <img
                src="~assets/Imperial-age-research.jpg"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >(難度:標準)；
              <img
                src="~assets/Castle-age-reseach.jpg"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              >(難度:中、難)
            </li>
            <li>
              起始資源:<nuxt-link to="/resource/Wood">木頭</nuxt-link
              >:200，<nuxt-link to="/resource/Food">食物</nuxt-link
              >:200，<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >:200，<nuxt-link to="/resource/Stone">石頭</nuxt-link>:200
            </li>
            <li>人口上限:75</li>
            <li>
              開場擁有單位:
              <ul>
                <li>
                  <img
                    src="~assets/VillagerMaleIcon.jpg"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Villager">村民</nuxt-link>6個
                </li>
                <li>
                  <img
                    src="~assets/EagleWarriorIcon.jpg"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>1個
                </li>
              </ul>
            </li>
            <li>大地之母單位:無</li>
          </ul>
          <h3>AI</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #ea6153;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p3">玩家1</div>
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>（綠色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#2980b9;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p2">玩家2</div>
              </td>
              <td class="tc6">特拉斯卡拉(紅色)阿茲特克</td>
              <td class="tc6">
                <div class="p1">玩家3</div>
              </td>
              <td class="tc6">
                科爾特斯(藍色)<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#2980b9;">同盟</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p8">玩家4</div>
              </td>
              <td class="tc6">
                塔巴斯科(橙色)<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>
              </td>
            </tr>
          </table>

          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>擊敗特拉斯卡拉。</li>
              <li>
                擊敗特拉斯卡拉，選擇以下任務擇一完成即可獲得勝利:
                <ul>
                  <li>蒐集20匹被困在牆後的馬並帶回插旗子的地方。</li>
                  <li>直接擊敗西班牙人。</li>
                </ul>
              </li>
            </ol>
          </div>
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>密集的雨林有許多美洲豹，要特別小心！</li>
              <li>
                科爾特斯距離你的盟友塔巴斯科很近，可以的話盡量救援你的盟友，但如果塔巴斯科被擊敗了也不要灰心。
              </li>
              <li>不要屠殺那些還有一點用的西班牙馬匹。</li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                你的<nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
                >回報:蒙特蘇馬(綠色)在南面一開始有一個堡壘，在地區中央有一大片懸崖，北部是你的盟友塔巴斯科(橙色)。西部是你敵人特拉斯卡拉(紅色)的城市。東部是西班牙人科爾特斯(藍色)，而他們的動機不明。
              </li>
              <li>
                塔巴斯科在地圖的北邊，他們座落在敵人之間，他們會在特定時間點被敵人擊敗，然後自殺身亡，只會留下一些不能訓練單位的建築物(例如:<nuxt-link
                  to="/building/House"
                  >房屋</nuxt-link
                >、<nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link
                >、<nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link>)。
              </li>
              <li>
                特拉斯卡拉在地圖的西邊，他們訓練<nuxt-link to="/units/Archer"
                  >弓兵</nuxt-link
                >、<nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
                >、<nuxt-link to="/units/Monk">僧侶</nuxt-link
                >和鷹勇士。早期的進攻可以減緩他們訓練軍隊。
              </li>
              <li>
                西班牙人科爾特斯位在地圖東部。他們非常強大，擁有征服者、<nuxt-link
                  to="/units/Bombard_Cannon"
                  >火砲</nuxt-link
                >和固定數量的<nuxt-link to="/units/Cannon_Galleon"
                  >火砲戰船</nuxt-link
                >，這些都是"新世界"文明沒有的。要打敗他們的騎兵和劍兵會需要<nuxt-link
                  to="/units/Siege_Weapons"
                  >攻城武器</nuxt-link
                >，因為他們的堡壘有<nuxt-link to="/building/Bombard_Tower"
                  >火砲塔</nuxt-link
                >保護。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              科爾特斯有四座馬圈（用木柵欄建造），一個在地圖的北部，或者科爾代斯基地的西面（就在塔巴斯科的基地的河對面），科爾特斯基地東南有兩個，東北則有一個。作為你的盟友，塔巴斯科，會摧毀部分西方的馬圈，這是你最容易從那裡取出馬匹。但是當馬匹變成你的時候，你的敵人如果看見可能會攻擊馬匹。如果要拿取東南方的馬圈的話就需要對付科爾特斯的征服者和火砲。一旦你清除了科爾特斯的防守就可輕易地奪取東北方的馬圈。
            </li>
            <li>
              科爾特斯征服者可以用<nuxt-link to="/units/Spearman"
                >長槍兵</nuxt-link
              >，<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
              >和<nuxt-link to="/building/Castle">城堡</nuxt-link
              >對付。另一方面，他們的火砲是一個巨大的威脅，因為他們的射程遠超過箭塔和城堡，比<nuxt-link
                to="/units/Trebuchet"
                >巨型投石機</nuxt-link
              >更有效率，因此你必須讓你的步兵隨時準備攻擊他們。然而，你也可以嘗試用你的僧侶來<nuxt-link
                to="/elements/Conversion"
                >招降</nuxt-link
              >這些<nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link
              >，因為你不能自己製造它們。招降火砲需要研究<nuxt-link
                to="/techs/Redemption"
                >信仰救贖</nuxt-link
              >（因為火砲是攻城單位），為了你僧侶的安全，在招降之前盡量將你的僧侶移動到火砲附近，讓火砲不能攻擊僧侶。受傷的火砲只能由村民修理。而征服者可以被僧侶治療，因為他們被認為是“<nuxt-link
                to="/units/Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >”。
            </li>
          </ul>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              科爾特斯因為前<nuxt-link to="/civs/Mayans">馬雅人</nuxt-link
              >先知雅克希蘭而被誤認為是羽蛇神，但由於他的激進觀點雅克希蘭因而被流放。雅克希蘭把自己的信仰強加在一小部分先知和其他流亡者身上。這些信仰在阿茲台克人的土地上成立了一個小型的邪教組織，直到貿易接觸將這個信仰轉移到內地，之後開枝散葉深深地影響當地。這個信仰導致了蒙特蘇瑪赦免和接受科爾特斯。
            </li>
            <li>即使塔巴斯科不被敵人攻擊，他們最後仍然會自殺。</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                蛇鳥之神
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/蒙特蘇馬三.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">情景信息</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Montezumaa">蒙特蘇馬</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">玩家顏色</td>
            <td class="unit4"><font color="green">綠色</font></td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                戰役關卡編號
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>第三章第三
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Triple_Alliance">三國同盟</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/La_Noche_Triste">悲傷之夜</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡，裕暉協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbatt',
  components: {}
}
</script>
<style></style>
