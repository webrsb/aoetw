<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>兵分三路</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p></p>
          <p>
            <b>兵分三路</b>為<nuxt-link to="/batt/Le_Loi">黎利戰役</nuxt-link
            >的第五關劇情關卡，此關描述<nuxt-link to="/civs/Vietnamese"
              >越南</nuxt-link
            ><nuxt-link to="/units/hero/Le_Loi">黎利</nuxt-link
            >奪下茶隆關，進佔明廷交趾布政使司首府「乂安」的經過。
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
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                900<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／700<nuxt-link to="/resource/Food">食物</nuxt-link
                >／600<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／550<nuxt-link to="/resource/Stone">石礦</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">200</td>
            </tr>
          </table>

          <p></p>
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
                <nuxt-link to="/civs/Vietnamese">越南人</nuxt-link>（黃色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p8">玩家2</div></td>
              <td class="tc6">
                <nuxt-link to="/batt/The_Dai_Viet_Uprising">大越義軍</nuxt-link
                >（橘色）越南
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#999999;">中立</td>
            </tr>
            <tr></tr>
            <tr>
              <td class="tc6"><div class="p7">玩家7</div></td>
              <td class="tc6">
                哀牢國（灰色）<nuxt-link to="/civs/Khmer">高棉</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr></tr>
            <tr>
              <td class="tc6" width="12%"><div class="p3">玩家3</div></td>
              <td class="tc6" width="38%">東都（綠色）越南</td>
              <td class="tc6" width="12%"><div class="p1">玩家4</div></td>
              <td class="tc6" width="38%">
                柳升將軍（藍色）<nuxt-link to="/civs/Chinese">中國</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p5">玩家5</div></td>
              <td class="tc6">乂安府（水藍）越南</td>
              <td class="tc6"><div class="p6">玩家6</div></td>
              <td class="tc6">
                <nuxt-link to="/units/hero/Wang_Tong">王通</nuxt-link
                >將軍（紫色）中國
              </td>
            </tr>
          </table>

          <p></p>
          <h3>開場</h3>
          <p>
            。 <nuxt-link to="/units/hero">英雄</nuxt-link> -<nuxt-link
              to="/units/hero/Le_Trien"
              >李篆</nuxt-link
            >x1、<nuxt-link to="/units/hero/Bui_Bi">裴備</nuxt-link
            >x1、劉仁㴬x1、<nuxt-link to="/units/hero/Dinh_Le">丁禮</nuxt-link
            >x1
          </p>
          <p>
            。 軍事單位 -<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
            >x5、<nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link
            >x2、<nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link
            >x0-9（視大越義軍的控兵而定）、<nuxt-link to="/units/Rattan_Archer"
              >藤甲弓兵</nuxt-link
            >x5-10（視大越義軍的控兵而定）
          </p>
          <p>
            。 經濟單位 - <nuxt-link to="/units/Villager">村民</nuxt-link>x5
          </p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>攻破乂安府。</li>
              <li>擊敗明軍大將王通。</li>
            </ol>
          </div>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              把資源區分散於三個大本營至關重要，在初期我方並沒有軍力兼顧三者。
            </li>
            <li>
              一兩個城鎮被攻陷並不影響戰局，只要還有一座<nuxt-link
                to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >尚存，就有東山再起的機會。
            </li>
            <li>截斷明廷援軍至關重要，因為王通極需要援軍。</li>
          </ul>
        </div>
        <h2>斥候</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              大越將領已經在三路都安營紮寨:
              李篆將軍駐守北路，準備阻擊明朝南下的援軍；丁禮一路往東插入明軍兩大陣地之間，但他的位置可能會被兩路明軍夾擊；<nuxt-link
                to="/units/hero/Luu_Nhan_Chu"
                >劉仁澍</nuxt-link
              >和裴備則進軍西路，準備攻打乂安府的西門。
            </li>
            <li>
              乂安府（淺藍）地處南端， 有重兵把守， 固若金湯.
              他們城內儲存大量黑火藥，更有神機營訓練<nuxt-link
                to="/units/Bombard_Cannon"
                >火砲</nuxt-link
              >和<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>部隊。
            </li>
            <li>
              征夷大將軍王通（紫色）親率重騎兵、諸葛弩、<nuxt-link
                to="/units/Elite_Skirmisher"
                >精銳戰矛兵</nuxt-link
              >和<nuxt-link to="/units/Halberdier">斧槍兵</nuxt-link
              >鎮守東都（綠色）。
            </li>
            <li>
              柳升大將（藍色）奉明廷之命，持帥印南下助王通大將軍伐越.
              他會不時地派遣糧草兵甲助王通將軍一臂之力，所以如果我們不截斷他們的援兵之路的話王通大將的軍隊就會變得異常強大。
            </li>
            <li>
              哀牢國（灰色）並不參戰，但是如果我們從他們國土上穿越過去的話，他們還是會無法容忍的。他們的軍隊以大象和<nuxt-link
                to="/units/Infantry_Units"
                >步兵</nuxt-link
              >為主。
            </li>
          </ul>
          <h2>細節</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>大越義軍（橘色）將控制交給玩家後就會棄權。</li>
              <li>
                儘管科技樹上並未寫明，但在本關中乂安府（水藍）作為越南人，卻能夠訓練<nuxt-link
                  to="/units/Gunpowder_Unit"
                  >火藥單位</nuxt-link
                >。用以呼應時代。
              </li>
              <li>
                關卡類似<nuxt-link to="/batt/Joan_of_Arc">聖女貞德</nuxt-link
                >第六關：<nuxt-link to="/batt/A_Perfect_Martyr"
                  >完美的烈士</nuxt-link
                >。有大量英雄在劇情中登場，有各自的特色語音對白。
              </li>
              <li>哀牢為寮國的古稱。</li>
              <li>
                李篆（？-1427），黎利部將，作戰十分勇猛，人稱「君子劍」。在圍攻「東都（今河內市）」時中伏陣歿。以<nuxt-link
                  to="/units/Champion"
                  >劍兵勇士</nuxt-link
                >形象在劇情中登場
              </li>
              <li>
                丁禮（？-1427），黎利部將。在圍攻東都時因為救援友軍遭遇埋伏，被俘虜後斬首。以<nuxt-link
                  to="/units/Paladin"
                  >遊俠</nuxt-link
                >形象在劇情中登場。
              </li>
              <li>
                劉仁㴬（？-1433），一作劉仁澍。黎利部將。後黎開國元勛之一、在太祖死後被任命為五大輔臣之一，死於朝廷內的政治清算。以<nuxt-link
                  to="/units/Arbalest"
                  >強弩兵</nuxt-link
                >形象在劇情中登場
              </li>
              <li>
                裴備（？-？），黎利謀臣，以東方<nuxt-link to="/units/Monk"
                  >僧侶</nuxt-link
                >形象在劇情中登場。具有普通僧侶的能力，但不受<nuxt-link
                  to="/building/Monastery"
                  >修道院</nuxt-link
                ><nuxt-link to="/techs">科技</nuxt-link>的影響。
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                兵分三路
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/(map)Le_Loi_5.A_Three_Pronged_Attack.jpg"
                  alt=""
                />
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
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/batt">戰役</nuxt-link></td>
            <td class="unit4"><nuxt-link to="/batt/Le_Loi">黎利</nuxt-link></td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Vietnamese">越南人</nuxt-link>
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
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>第四章之五
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Reaching_South">揮師南下</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Final_Fortress">決戰東都</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由亞諭、裕暉協助編輯。</div>
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
