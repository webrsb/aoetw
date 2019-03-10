<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>勘查（再次征服）</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>勘查（再次征服）</b>是<nuxt-link to="/games/aoc"
              >征服者入侵</nuxt-link
            ><nuxt-link to="/batt">戰役</nuxt-link
            ><nuxt-link to="/units/hero/El_Cid">熙德</nuxt-link>的第六個關卡。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="15%">起始時代：</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源：</td>
              <td class="tc2">
                <nuxt-link to="/resource/Wood">木頭</nuxt-link>500、<nuxt-link
                  to="/resource/Food"
                  >食物</nuxt-link
                >500、<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >600、<nuxt-link to="/resource/Stone">石頭</nuxt-link>600
              </td>
              <td class="tc1" width="15%">人口上限：</td>
              <td class="tc2" width="5%">125</td>
            </tr>
          </table>

          <p></p>
          <h3>AI</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #ea6153;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p2">玩家1</div></td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>（紅色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #ffd700;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="12%"><div class="p2">玩家2</div></td>
              <td class="tc6" width="38%">熙德遺體（紅色）西班牙</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#2980b9;">敵對</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p5">玩家3</div></td>
              <td class="tc6">
                黑衛隊軍隊（藍綠色）<nuxt-link to="/civs/Turks"
                  >土耳其</nuxt-link
                >
              </td>
              <td class="tc6"><div class="p4" width="12%">玩家4</div></td>
              <td class="tc6" width="38%">
                黑衛隊<nuxt-link to="/units/Naval_Vessels">海軍</nuxt-link
                >（黃色）土耳其
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p3">玩家5</div></td>
              <td class="tc6">約瑟夫（綠色）土耳其</td>
            </tr>
            <tr></tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              <nuxt-link to="/units/Cavalier">騎兵</nuxt-link>x6、<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >x6、<nuxt-link to="/units/Heavy_Camel">重裝駱駝騎兵</nuxt-link
              >x6、<nuxt-link to="/units/Two-Handed_Swordsman"
                >雙手劍兵</nuxt-link
              >x8、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>x4、
            </dd>
            <dd>
              <nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link
              >x3、<nuxt-link to="/units/Fast_Fire_Ship">快速火戰船</nuxt-link
              >x3、<nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link
              >x2、<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>x2。
            </dd>
            <dt>大地之母單位：</dt>
            <dd>無。</dd>
          </dl>
          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>打敗約瑟夫的三支部隊，瓦倫西亞就可以維持自由。</li>
              <li>
                熙德的遺體（在<nuxt-link to="/building/Castle">城堡</nuxt-link
                >附近）不能受到損毀，好讓瓦倫西亞的人民可以知道，他們已經失去他的領袖。
              </li>
            </ol>
          </div>
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>從瓦倫西亞堡壘往外擴張獲得更多資源。</li>
              <li>首先集中在陸地作戰，之後在橫渡海洋到約瑟夫基地。</li>
              <li>
                西班牙<nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
                >十分強大，你可以用來進攻約瑟夫。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                熙德（紅色）在瓦倫西亞有他所需要的全部建築物，讓他可以很快就生產軍隊。
              </li>
              <li>
                黑衛陸軍就在瓦倫西亞的北部是最近的威脅，是由<nuxt-link
                  to="/units/Cavalry_Archer"
                  >馬弓騎兵</nuxt-link
                >，<nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>組成的。
              </li>
              <li>
                黑衛海軍在瓦倫西亞西部，可以登陸，海軍比陸軍還要好防守，海軍除了一些騎兵外還有<nuxt-link
                  to="/units/Monk"
                  >僧侶</nuxt-link
                >。
              </li>
              <li>
                約瑟夫是最強的敵人，他可能會用軍艦攻擊瓦倫西亞，他的堡壘也十分危險，由駱駝騎兵、馬弓騎兵和僧侶組成，他可能利用<nuxt-link
                  to="/units/Fire_Ship"
                  >火戰船</nuxt-link
                >和火砲戰船掩護強行登陸。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              一開始你會有一隻小部隊可以進行防守，要注意熙德屍體不能受到，。
            </li>
            <li>
              一開始黑衛陸軍，對你會比較大的威脅，他們會有<nuxt-link
                to="/units/Siege_Onager"
                >重型投石車</nuxt-link
              >要特別注意。
            </li>
            <li>木頭上取得較為稀少，需要向外擴張才能有更多的木頭。</li>
            <li>
              一開始已經有配置很多的<nuxt-link to="/building/Fish_Trap"
                >漁網</nuxt-link
              >供玩家直接捕魚，可以多生幾艘漁船，不過記得小心黑衛海軍的騷擾。
            </li>
            <li>這戰役主要是武力取勝 ，並且保護熙德屍體。</li>
            <li>
              建議先將黑衛陸軍殲滅後，再向海外擴張，陸地上的黃金足夠讓你生產高質量的軍隊或海軍。
            </li>
            <li>
              要注意大海中的三座塔，攻擊和射程高的嚇人，而且它們都會自行修復。在這裡用地圖中以北至南介紹：
            </li>
            <ul>
              <li>
                Tower of Despair 絕望之塔 ▶HP：2299／2299 ▶ATK：8＋4 ▶射程：6＋3
              </li>
              <li>
                Tower of Desolation 孤獨之塔 ▶HP：4235／4235 ▶ATK：8＋4
                ▶射程：13＋3
              </li>
              <li>
                Tower of Agony 痛苦之塔 ▶HP：4235／4235 ▶ATK：8＋39 ▶射程：13＋3
              </li>
            </ul>
          </ul>
          <h3>遊戲內細節</h3>
          <div class="hrn1"></div>
          <ul>
            <li>一開始他們就會瘋狂的騷擾你 你的部隊可以在外巡邏，以防不測。</li>
            <li>
              在有一定基礎的經濟<nuxt-link to="/techs">科技</nuxt-link
              >後，可以向外擴張，由於城外馬上就有一座城堡，還有上方的<nuxt-link
                to="/units/Siege_Weapons"
                >攻城器</nuxt-link
              >具，是初期對城內有較大威脅的兩個地方要特別注意。
            </li>
            <li>
              當你戰勝黑衛陸軍後，可以開始建造海軍由火砲戰船再加上幾艘戰艦，將海上的防禦塔先行拔掉以防在載送軍隊途中有誤。
            </li>
            <li>
              由於約瑟夫軍隊頗為強大，建議可以用海軍破壞一些他們比較外圍的<nuxt-link
                to="/building/Barracks"
                >軍營</nuxt-link
              >或防禦建築，再派陸軍上岸。
            </li>
            <li>
              由於他們多由<nuxt-link to="/units/Heavy_Camel"
                >重裝駱駝騎兵</nuxt-link
              >、馬弓騎兵，騎兵組成的軍隊，在陸軍廝殺我們不占地利，建議可以派幾隻村民就近蓋軍營、<nuxt-link
                to="/building/Stable"
                >馬廄</nuxt-link
              >、城堡，就近生產。
            </li>
            <li>
              這場戰役主要是以前期防守，中期擴張，後期殲滅敵方為主，打法上可以多變，可依照個人喜好進行。
            </li>
          </ul>
          <h3>快速破關</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              <a
                href="https://www.youtube.com/watch?v=jQgFU0tbcj0"
                target="_blank"
                >此影片是快速通關打法，可以根據個人遊戲體驗斟酌使用（part.1）</a
              >
            </li>
            <li>
              <a
                href="https://www.youtube.com/watch?v=YS2epCEYwJ0"
                target="_blank"
                >此影片是快速通關打法，可以根據個人遊戲體驗斟酌使用（part.2）</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                勘查（再次征服）
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle"><img src="~assets/EIC 6.jpg" alt="" /></div>
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
              <nuxt-link to="/batt/El_Cida">熙德</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
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
              <nuxt-link to="/batt/Battles_of_the_Conquerors"
                >征服者戰役</nuxt-link
              >第二章之六
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/King_of_Valencia">瓦倫西亞之主</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">N/A</td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由Wun協助編輯。</div>
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
