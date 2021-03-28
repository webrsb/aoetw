<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>城堡與國王</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>城堡與國王</b>是<nuxt-link to="/games/delw">西方霸主</nuxt-link
            >DLC新增的<nuxt-link to="/batt">戰役</nuxt-link>中，<nuxt-link
              to="/batts/Edward_Longshanks"
              >長腿愛德華</nuxt-link
            >的第三關。
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
                500<nuxt-link to="/resource/Wood">木材</nuxt-link>/500<nuxt-link
                  to="/resource/Food"
                  >食物</nuxt-link
                >/500<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >/200<nuxt-link to="/resource/Stone">石料</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">150</td>
            </tr>
          </table>

          <h3>AI</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p2"></div>
                玩家1
              </td>
              <td class="tc6" colspan="6">
                <nuxt-link to="/civs/Britons">不列顛人</nuxt-link>（紅色)
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家2
              </td>
              <td class="tc6">
                邊境領主（藍色）<nuxt-link to="/civs/Sicilians"
                  >西西里人</nuxt-link
                >
              </td>
              <td class="tc6" width="14%">
                <div class="p7"></div>
                玩家6
              </td>
              <td colspan="3" class="tc6">城堡建築工（灰色）不列顛人</td>
            </tr>
            <td col class="tc4" colspan="4" style="background:#ea6153;">
              敵對
            </td>
            <tr>
              <td class="tc6" width="14%">
                <div class="p3"></div>
                玩家3
              </td>
              <td class="tc6">威爾斯軍隊（綠色）不列顛人</td>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家4
              </td>
              <td colspan="3" class="tc6">
                盧埃林‧阿普‧格魯菲德（黃色）不列顛人
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家5
              </td>
              <td class="tc6">
                達菲德‧阿普‧格魯菲德（青色）不列顛人
              </td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              長腿愛德華、<nuxt-link to="/units/Knight">騎士</nuxt-link
              >x5、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
              >x10、<nuxt-link to="/units/Longbowman">長弓兵</nuxt-link>x10
            </dd>
          </dl>
          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                前往第一座<nuxt-link to="/building/Castle">城堡</nuxt-link
                >的位置。
              </li>
              <li>在建築工建造第一座城堡時保護他們。</li>
              <li>前往第二座城堡的位置。</li>
              <li>在建築工建造第二座城堡時保護他們。</li>
              <li>前往第三座城堡的位置。</li>
              <li>在建築工建造第三座城堡時保護他們。</li>
              <li>必須守住全部三座城堡。</li>
              <li>選擇通往勝利的道路：</li>
              <ol>
                <li>打敗威爾斯軍隊。</li>
                <li>殺死盧埃林‧阿普‧格魯菲德和達菲德‧阿普‧格魯菲德。</li>
              </ol>
            </ul>
            <p>次要任務</p>
            <ul>
              <li>
                殺死威爾斯村民（3，綠色），阻止他們替盧埃林和達菲德的部隊運送補給。
              </li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                愛德華國王可以升級到<nuxt-link to="/techs/age/Imperial_Age"
                  >帝王時代</nuxt-link
                >，且人口上限為150人。無法建造<nuxt-link to="/building/Castle"
                  >城堡</nuxt-link
                >和<nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
                >，但英格蘭石匠正在為您建造一些城堡。
              </li>
              <li>
                抓緊時間行軍，守衛建造中的各個城堡。建築工死亡則代表失敗。
              </li>
              <li>
                威爾斯人擅長打了就跑的機動戰術。您要利用地形優勢，並讓會戰以您希望的方式進行。
              </li>
              <li>
                供養威爾斯軍隊的農民也會為他們的指揮官的扈從提供資源。劫掠農民可以重創敵方的戰爭補給。
              </li>
              <li>
                權衡您的勝利之路。您只需要擊敗一個敵人就能粉碎威爾斯軍隊，但也可以透過擊殺兩名威爾斯親王來結束戰爭。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                愛德華國王（1，紅色）已經帶著一支軍隊抵達威爾斯，他來監督幾個地方的要賽建造工座。必須不惜一切代價保護執行這項工作的石匠（6，灰色）。
              </li>
              <li>
                幾個英格蘭封臣和盟方的邊境領主（2，藍色）坐擁南邊和東南方向的土地。他們會帶著劍兵、<nuxt-link
                  to="/units/Elite_Skirmisher"
                  >戰矛兵</nuxt-link
                >和<nuxt-link to="/units/Knight">騎士</nuxt-link
                >幫助愛德華防守堡壘。
              </li>

              <li>
                盧埃林‧阿普‧格魯菲德這名威爾斯親王（4，黃色）控制著圭內德的西部地區。一支由<nuxt-link
                  to="/units/Infantry_Units"
                  >步兵</nuxt-link
                >和<nuxt-link to="/units/Archer_Units">弓兵單位</nuxt-link
                >組成的部隊將會誓死保護他的安全。
              </li>
              <li>
                盧埃林的兄弟達菲德（5，青色)在北方的一個隱匿處活動。他的個人扈從由重裝<nuxt-link
                  to="/armor/Armor_Class_Cavalry"
                  >騎兵</nuxt-link
                >組成。
              </li>
              <li>
                威爾斯軍隊（3，綠色）的營地在西北方向。一段時間後，成群的<nuxt-link
                  to="/units/Light_Cavalry"
                  >輕騎兵</nuxt-link
                >、劍兵和戰矛兵便會帶著成隊的<nuxt-link
                  to="/units/Siege_Weapons"
                  >攻城武器</nuxt-link
                >發起進攻。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              一開始會要玩家依序守護三座建造中<nuxt-link to="/building/Castle"
                >城堡</nuxt-link
              >的工人直到城堡落成，在這期間迎擊威爾斯的軍隊，這三座城堡在整個遊戲中也都不能倒。全都蓋完後就能建立自己的基地、發展，並升級時代。雖然有盟友幫忙，但期間三座城堡附近都還是要有軍隊守著。敵方最常攻來的方向是中間的城堡，可將大部份的軍力駐紮在此。
            </li>
            <li>
              之後有兩個任務目標：打敗綠色或是殺死青色和黃色躲在城堡的<nuxt-link
                to="/units/hero"
                >英雄</nuxt-link
              >單位。期間會有一個次要任務要殺死綠色的<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >以斷補給。大約有25隻左右的<nuxt-link to="/units/Cavalier"
                >重裝騎士</nuxt-link
              >就可以直搗黃龍。再來完成其中一個任務即可，通常如果完成殺死村民的任務，綠色很快就會投降。如果選擇要殺那兩個人，黃色的基地會被森林隔開要用<nuxt-link
                to="/units/Mangonel"
                >投石車</nuxt-link
              >開路。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">城堡與國王</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              （地圖待補）
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰役資訊</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/delw">西方霸主</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batts/Edward_Longshanks">長腿愛德華</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰役關卡編號</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">
              長腿愛德華第三章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/A_Man_of_God">上帝的子民</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Toom_Tabard">空外套</nuxt-link>
            </td>
          </tr>
        </table>
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
