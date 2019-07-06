<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>瓦倫西亞之主</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>瓦倫西亞之主</b>是<nuxt-link to="/batt/El_Cida"
              >熙德戰役</nuxt-link
            >的第五個關卡。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="14%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                <nuxt-link to="/resource/Food">食物</nuxt-link>300，<nuxt-link
                  to="/resource/Gold"
                  >黃金</nuxt-link
                >300，<nuxt-link to="/resource/Stone">石頭</nuxt-link>400
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">75</td>
            </tr>
          </table>

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
              <td class="tc6" width="12%"><div class="p8">玩家2</div></td>
              <td class="tc6" width="38%">
                雷利達（橘色）<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>
              </td>
              <td class="tc6" width="12%"><div class="p3">玩家3</div></td>
              <td class="tc6" width="38%">
                蒂里亞（綠色）<nuxt-link to="/civs/Persians">波斯</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6" width="12%"><div class="p4">玩家5</div></td>
              <td class="tc6" width="38%">瓦倫西亞（黃色）西班牙</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#2980b9;">敵對</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p6">玩家2</div></td>
              <td class="tc6" colspan="3">
                貝倫格爾（紫色）<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
              </td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              <nuxt-link to="/units/hero">英雄</nuxt-link>:<nuxt-link
                to="/units/hero/El_Cid"
                >熙德</nuxt-link
              >。
            </dd>
            <dt>大地之母單位：</dt>
            <dd>
              <nuxt-link to="/units/Knight">騎士</nuxt-link>x4、<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >x8、<nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link
              >x3、<nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link
              >x3、<nuxt-link to="/units/Missionary">傳教士</nuxt-link
              >x2、<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>x4。
            </dd>
          </dl>
          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>熙德必須活著。</li>
              <li>熙德必須再次尋找一個可以居住的新城市。</li>
              <li>協助蒂里亞抵抗貝倫格爾伯爵。</li>
              <li>熙德必須要流亡並建立一個新基地。</li>
              <li>
                防禦瓦倫西亞，以抗抵貝倫格爾，直到<nuxt-link
                  to="/building/Wonder"
                  >世界奇觀</nuxt-link
                >完成為止。
              </li>
            </ol>
          </div>
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                熙德不再為薩拉森服從，你的<nuxt-link to="/tree/vie"
                  >科技樹</nuxt-link
                >又再次是西班牙的模式。
              </li>
              <li>尋找願意加入錫德的軍隊和村民，需要軍隊奪回瓦倫西亞。</li>
              <li>知道何時打、何時撤退。</li>
              <li>
                貝倫格爾伯爵的軍隊是強大的，不過他沒有自己的<nuxt-link
                  to="/units/Naval_Vessels"
                  >海軍</nuxt-link
                >。因此，要從地中海取得大量的食物，不過建立一支你自己的海軍就並非必要。
              </li>
              <li>
                貝倫格爾在山上的堡壘難以抗拒，儘管你可以直接偷襲減緩它的速度，但並不是好選擇。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>熙德（紅色）獨自一人且蒙達米特無法幫忙。</li>
              <li>
                南面的幾個西班牙小鎮可能提供同盟，蒂里亞（綠色）、雷利達（橙色）、瓦倫西亞（黃色），但沒有一個城鎮可以提供強大軍隊。
              </li>
              <li>
                熙德的敵人還是貝倫格爾伯爵（紫色）。貝倫格爾在北邊有一個防禦堅固的城市，很難攻破。因此，使用其他的方法比較有可能獲得勝利。貝倫格爾擁有陣容堅強的弓兵、步兵和騎士以及數量龐大的<nuxt-link
                  to="/units/Siege_Weapons"
                  >攻城武器</nuxt-link
                >。你應該好好地加強防禦工事。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              一開始在到達小城鎮後，開始將所有的軍隊村民往南移走，因為一開始部隊沒辦法跟敵方抗衡。
            </li>
            <li>
              到達南邊後會有騎士，<nuxt-link to="/units/Camel"
                >駱駝騎兵</nuxt-link
              >加入你們，你們在往上方將會到達瓦倫西亞城。
            </li>
            <li>到達後開始建造自己基地，基礎經濟和防禦工事都不能缺少。</li>
            <li>
              對方以<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
              >騎兵，弓箭手為主的兵種組成的部隊，到後期對方會有<nuxt-link
                to="/units/Paladin"
                >遊俠</nuxt-link
              >軍隊等等更高等的兵種。
            </li>
            <li>可以透過捕魚來增加自己食物的生產。</li>
            <li>以防禦為主，別讓他們攻進城內，直到同盟建造出世界奇觀。</li>
          </ul>
          <h3>遊戲內細節</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              由於一開始軍隊無法跟對方抗衡，所以以逃命為主別跟對方有所衝突，沿途可蓋一些<nuxt-link
                to="/building/Stone_Wall"
                >城牆</nuxt-link
              >延緩他們的速度。
            </li>
            <li>
              到達城內先開始組建自己的經濟為主，剩下軍隊以守城為主，建議可以蓋<nuxt-link
                to="/building/Keep"
                >大型箭塔</nuxt-link
              >、<nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link
              >來加強防禦。
            </li>
            <li>
              由於對方軍隊組成會有攻城武器，需要組建一支騎兵以進行高機動性的支援。
            </li>
            <li>剩下軍隊以步兵、弓箭手防守為主，別讓敵方攻陷城內。</li>
            <li>
              這是一個防禦型的<nuxt-link to="/batt">戰役</nuxt-link
              >，一直到同盟建造出世界奇觀為止，而在同盟建造世界奇觀期間必須保護他們，以防被敵方破壞屠殺。
            </li>
            <li>
              不建議主動出擊，資源上黃金不會很多，石頭也是，所以要生產高質量軍隊和攻城器具相對困難，石頭也大多用在防禦工事上為主。
            </li>
          </ul>
          <h3>快速破關</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              <a
                href="https://www.youtube.com/watch?v=nQ0M4bGCTB8"
                target="_blank"
                >此影片是快速通關打法，可以根據個人遊戲體驗斟酌使用。</a
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
                瓦倫西亞之主
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle"><img src="~assets/EIC 5.jpg" alt="" /></div>
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
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>第二章之五
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Black_Guards">黑衛隊</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Reconquista">勘查</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由Wun、裕暉協助編輯。</div>
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
