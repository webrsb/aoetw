<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>君士坦丁堡的城牆</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>君士坦丁堡的城牆</b>為<nuxt-link to="/batt/Attila_the_Huna"
              >阿提拉戰役</nuxt-link
            >的第三關劇情關卡，此關原型為公元447年<nuxt-link to="/civs/Huns"
              >匈奴</nuxt-link
            >與東羅馬帝國的維特河<nuxt-link to="/batt">戰役</nuxt-link
            >（今保加利亞維特河）。
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
                1,000<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >，1,000<nuxt-link to="/resource/Food">食物</nuxt-link
                >，1,200<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >，200<nuxt-link to="/resource/Stone">石頭</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">75</td>
            </tr>
          </table>

          <h3>AI</h3>
          <!--<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: #ff911d; margin-left: 5px;"></span>:中立</p>!-->
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p4">玩家1</div></td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Huns">匈奴人</nuxt-link>（黃色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr></tr>
            <tr>
              <td class="tc6"><div class="p1" width="12%">玩家2</div></td>
              <td class="tc6" width="38%">
                君士坦丁堡（藍色）<nuxt-link to="/civs/Byzantines"
                  >拜占庭</nuxt-link
                >
              </td>
              <td class="tc6"><div class="p3" width="12%">玩家3</div></td>
              <td class="tc6" width="38%">
                馬西安堡（綠色）<nuxt-link to="/civs/Goths">哥德</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p2">玩家4</div></td>
              <td class="tc6">菲利普堡（紅色）拜占庭</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場單位：</dt>
            <dd>
              3位<nuxt-link to="/units/Villager">村民</nuxt-link>、3位<nuxt-link
                to="/units/Tarkan"
                >韃靼騎兵</nuxt-link
              >、1位憎侶。
            </dd>
            <dt>大地之母單位：</dt>
            <dd>無</dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>從羅馬人的身上取得的貢金，要儲集到 10,000 單位黃金。</li>
            </ol>
          </div>
        </div>
        <h2>次要目標</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>無</li>
          </ul>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              雖然你的目的是聚歛黃金，但不要捨不得把它們花在軍隊的訓練上。匈奴人是由勒索羅馬人來賺取黃金，而不是靠儲蓄！
            </li>
            <li>
              只要破壞羅馬的市鎮中心、港口、市場和類似的<nuxt-link
                to="/building"
                >建築物</nuxt-link
              >，就可以迫使羅馬人乖乖的交出貢金。儘管他們會反抗，但在你能夠聚集到
              10,000 單位黃金之前，你都不能停止對羅馬人的勒索。
            </li>
            <li>你無法單靠貿易來取得你所需要的黃金。</li>
            <li>
              匈奴人無法演進到<nuxt-link to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h2>斥候</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              匈奴人 (黃色) 有一個小型的城鎮，在初期他們它防禦來自馬西安堡的攻擊
              (綠色)。雖然馬西安堡並沒有強大的軍隊，但他們的城鎮築有<nuxt-link
                to="/building/Stone_Wall"
                >城牆</nuxt-link
              >，讓它能防禦匈奴人初期的攻擊。不過，當你破壞了<nuxt-link
                to="/building/Gate"
                >城門</nuxt-link
              >之後，這個城鎮也就毀了。
            </li>
            <li>
              菲力普堡 (紅色) 雖然在初期只有少數的<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >作防禦，但他們會訓練<nuxt-link to="/units/Infantry_Units"
                >步兵</nuxt-link
              >和<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>等軍隊。
            </li>
            <li>
              君士坦丁堡 (藍色)
              是最大的威脅。這個城市是以堅固難破的城牆而聞名，不過你沒有必要真的去摧毀它。只要能從羅馬人身上勒索金錢，你就能取得最後的勝利。
            </li>
          </ul>
          <h2>芝麻小事</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                擊敗馬西安堡（綠色）用起始資源立即開始訓練<nuxt-link
                  to="/units/Knight"
                  >騎士</nuxt-link
                >。選擇性的建立<nuxt-link to="/building/Archery_Range"
                  >射箭場</nuxt-link
                >來訓練<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
                >。立即開始反擊馬西亞諾波利斯。蓋<nuxt-link
                  to="/units//building/Siege_Workshop"
                  >攻城器製造所</nuxt-link
                >來生產<nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link
                >來摧毀馬西安堡的<nuxt-link to="/building">建築</nuxt-link
                >，與此同時更不能忘記經濟發展。石頭可以在菲利普堡郊外找到，黃金則是在君士坦丁堡外。
              </li>
              <li>
                擊敗菲利普堡(紅色)用打倒馬西安堡所得得到的黃金進貢來重新<nuxt-link
                  to="/batt/Training_the_Troops"
                  >訓練軍隊</nuxt-link
                >並入侵菲利普堡。善用騎士與馬弓騎兵(或是用輕騎兵省黃金)殺人，並用衝撞車攻擊塔與<nuxt-link
                  to="/building/Town_Center"
                  >城鎮中心</nuxt-link
                >。一旦菲利普堡被擊敗了，就派兩個<nuxt-link to="/units/Monk"
                  >僧侶</nuxt-link
                >去取得<nuxt-link to="/Relic">遺跡</nuxt-link
                >。君士坦丁堡城郊有個<nuxt-link to="/building/Monastery"
                  >修道院</nuxt-link
                >，可以摧毀它來得到供品。
              </li>
              <li>
                擊敗君士坦丁堡（藍色）雖然任務提示和對話堅決反對攻擊君士坦丁堡，有一點耐心的話，打敗他們是完全可能的。在城門外建一座<nuxt-link
                  to="/building/Castle"
                  >城堡</nuxt-link
                >。用馬弓騎兵引誘在外牆內防守的<nuxt-link
                  to="/units/Crossbowman"
                  >弩兵</nuxt-link
                >、僧侶與<nuxt-link to="/units/Mangonel">投石車</nuxt-link
                >，解決他們之後，就派衝撞車攻擊城門與塔。衝進城鎮後，開始引誘僧侶與<nuxt-link
                  to="/units/Cataphract"
                  >聖騎兵</nuxt-link
                >，它們對付大群馬弓騎兵毫無招架之力。用衝撞車攻擊<nuxt-link
                  to="/building/Wonder"
                  >世界奇觀</nuxt-link
                >前的城堡。這些應該夠玩家取得足夠的黃金進貢來贏得戰役。
              </li>
              <li>匈奴在此關可以透過一些方式來搶奪黃金與其他資源：</li>
              <li>
                每摧毀一個<nuxt-link to="/building/Dock">碼頭</nuxt-link
                >(君士坦丁堡城外)會得到500黃金
              </li>
              <li>每摧毀一個市場(君士坦丁堡城外)會得到500黃金</li>
              <li>摧毀君士坦丁堡北方的一個碼頭，會得到1000黃金進貢</li>
              <li>每摧毀一個城鎮中心會得到3000黃金</li>
              <li>第一個城堡建好之後，羅馬會進貢給你500黃金</li>
              <li>摧毀往返於菲力波皮利斯與君士坦丁堡的貿易車會得到500黃金</li>
              <li>摧毀所有君士坦丁堡的貿易工廠會得到500黃金進貢</li>
              <li>摧毀君士坦丁堡城外的修道院會得到1000黃金</li>
              <li>
                當你在君士坦丁堡的世界奇觀旁派遣部隊，君士坦丁堡會為了勸阻你不要摧毀世界奇觀而進貢1000黃金
              </li>
              <li>當你真的摧毀世界奇觀，你會掠奪5000黃金</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                君士坦丁堡的城牆
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Attila.3.jpg" alt="" />
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
              <nuxt-link to="/batt/Attila_the_Huna">阿提拉</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4"><nuxt-link to="/civs/Huns">匈奴人</nuxt-link></td>
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
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>第一章之三
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Great_Ride">偉大的騎士</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/A_Barbarian_Betrothal">蠻族的婚約</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁由裕暉、竺叡、Dennis協助編輯</div>
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
