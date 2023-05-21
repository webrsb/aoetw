<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>圍攻巴黎</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>圍攻巴黎</b>（舊譯：巴黎攻城戰）為<nuxt-link
              to="/batt/Joan_of_Arc"
              >聖女貞德戰役</nuxt-link
            >的第五關劇情關卡，此關任務內容為貞德與法軍前往巴黎市區解救難民，並護送至康比涅的任務。
          </p>
        </div>
        <h2>遊戲者</h2>

        <table class="table-bordered" width="100%">
          <tr>
            <td class="tc4" colspan="4" style="background: #2980b9;">
              玩家本身
            </td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p1"></div>
              玩家1
            </td>
            <td class="tc6" colspan="3">
              <nuxt-link to="/civs/Franks">法蘭克人</nuxt-link>（藍色）
            </td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
          </tr>
          <tr>
            <td class="tc6" width="12%">
              <div class="p5"></div>
              玩家4
            </td>
            <td class="tc6" width="38%">
              康比涅（藍綠色）<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
            </td>
            <td class="tc6" width="12%">
              <div class="p4"></div>
              玩家5
            </td>
            <td class="tc6" width="38%">國王的手下（黃色）法蘭克</td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background:#ea6153;">中立</td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p2"></div>
              玩家3
            </td>
            <td class="tc6">
              <nuxt-link to="/civs/Britons">英格蘭人</nuxt-link
              >（紅色）<nuxt-link to="/civs/Britons">不列顛</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p6"></div>
              玩家2
            </td>
            <td class="tc6">
              勃根地（紫色）法蘭克/<nuxt-link to="/civs/Burgundians"
                >勃根地</nuxt-link
              >
            </td>
          </tr>
        </table>

        <h2>戰役說明</h2>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <h3>開場設定</h3>
            <ul>
              <li>
                <strong>起始時代：</strong>
                <img
                  class="gg"
                  src="~assets/imperial_age.png"
                  alt=""
                /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </li>
              <li><strong>起始資源：</strong>無</li>
              <li><strong>人口上限：</strong>75</li>
            </ul>
          </div>
          <div class="col-md-6">
            <h3>起始單位</h3>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Joanofarcicon.png"
                  alt=""
                /><nuxt-link to="/units/hero/Joan_of_Arc_Champion"
                  >聖女貞德</nuxt-link
                >
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Lorddegravilleicon.png"
                  alt=""
                /><nuxt-link to="/units/hero/Lord_de_Graville"
                  >格拉維爾‧德領主</nuxt-link
                >
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Jeandelorrain.png"
                  alt=""
                /><nuxt-link to="/units/hero/Jean_de_Lorrain"
                  >約翰‧德‧洛林</nuxt-link
                >
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/LightCavalryIcon.png"
                  alt=""
                /><nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>*1
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/CavalierIcon.png"
                  alt=""
                /><nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link>*4
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/PaladinIcon.png"
                  alt=""
                /><nuxt-link to="/units/Paladin">遊俠</nuxt-link>*6
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/PikemanIcon.png"
                  alt=""
                /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>*18
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/CrossbowmanIcon.png"
                  alt=""
                /><nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>*20
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/BombardCannonIcon.png"
                  alt=""
                /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>*4
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/TrebuchetPackedIcon.png"
                  alt=""
                /><nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>*2
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <h3>大地之母</h3>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/VillagerMaleIcon.png"
                  alt=""
                /><nuxt-link to="/units/Villager">村民</nuxt-link>*10
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/ManAtArmsIcon.png"
                  alt=""
                /><nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link>*16
              </li>
              <li>
                <img class="gg" src="~assets/KnightIcon.png" alt="" /><nuxt-link
                  to="/units/Knight"
                  >騎士</nuxt-link
                >*2
              </li>
              <li>
                <img class="gg" src="~assets/TAXEM.png" alt="" /><nuxt-link
                  to="/units/Throwing_Axeman"
                  >擲斧兵</nuxt-link
                >*2
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/HeavyScorpionIcon.png"
                  alt=""
                /><nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link>*2
              </li>
            </ul>
          </div>
        </div>
        <h3>主要任務</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ol>
            <li>貞德必須活著。</li>
            <li>
              巴黎避難的<nuxt-link to="/units/Villager">村民</nuxt-link
              >正嘗試逃離英格蘭人人的專制統治，至少找出六位難民。
            </li>
            <li>
              在巴黎要能夠跟國王的增援部隊會合的地方，就只有在河道上的橋樑南邊。
            </li>
            <li>
              護衛貞德和至少六名難民前往康比涅 (旗子中間的方塊)。
            </li>
          </ol>
        </div>
        <h3>任務提示</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>不要嘗試擊敗每一支英格蘭人部隊。要把焦點集中在你的目標。</li>
            <li>
              看守你的<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
              >。如果你沒有攻城武器的話，敵軍的<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >將會是一個棘手的問題。
            </li>
            <li>如果面對著強大的反抗時，就逃走吧！一定要逃走！</li>
          </ul>
          <h3>細節</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              勃艮第的預設外交立場為同盟，原因不明。但只要他們看到一個玩家的單位，他們就會改變它外交關係並進行攻擊。在這之前先與勃艮第的外交關係改成中立，這樣就可以殲滅勃根地在康比涅城外的所有單位。
            </li>
          </ul>
          <h3>決定版變更點</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              和英格蘭的外交關係更改成中立，城中的大地之母軍隊由民兵變成裝甲步兵，並且都有封建時代的科技。國王的手下在樹林隱藏的民兵也沒了，但支援完玩家後仍不會被擊敗。
            </li>
            <li>
              (44725更新)：如果有下載西方霸主的DLC，勃根地的文明會轉變成正確的<nuxt-link
                to="/civs/Burgundians"
                >勃根地</nuxt-link
              >人。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                圍攻巴黎
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Joan_of_Arc/The_Siege_of_Paris_map.png" alt="" />
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
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/batt">戰役</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/batt/Joan_of_Arc">聖女貞德</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
            </td>
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
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>第二章之五
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Rising">龍飛鳳起</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/A_Perfect_Martyr">遺芳餘烈</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、亞諭協助編輯。</div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allbatt' })

export default {
  components: {}
}
</script>
<style></style>
