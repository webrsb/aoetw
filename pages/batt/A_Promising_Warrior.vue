<template>
  <div class="container">
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-12">
        <h1>英雄出少年</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>英雄出少年</strong>為<nuxt-link
              to="/batt/Battles_of_the_Forgotten"
              >失落的帝國戰役</nuxt-link
            >中<nuxt-link to="/batt/Prithviraj">布里斯比羅吉</nuxt-link
            >劇情<nuxt-link to="/batt">戰役</nuxt-link>的第一關。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="15%">起始時代:</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源:</td>
              <td class="tc2">
                0<nuxt-link to="/resource/Wood">木頭</nuxt-link>，0<nuxt-link
                  to="/resource/Food"
                  >食物</nuxt-link
                >，0<nuxt-link to="/resource/Gold">黃金</nuxt-link>，0<nuxt-link
                  to="/resource/Stone"
                  >石頭</nuxt-link
                >
              </td>
              <td class="tc1" width="15%">人口上限:</td>
              <td class="tc2" width="5%">0/0</td>
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
              <td class="tc6">
                <div class="p8"></div>
                玩家1
              </td>
              <td class="tc6" colspan="8">
                主角（橘色）<nuxt-link to="/civs/Indians">印度</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p3"></div>
                玩家2
              </td>
              <td class="tc6" width="35%">索梅西瓦王（綠色）印度</td>
              <td class="tc6" width="15%">
                <div class="p4"></div>
                玩家3
              </td>
              <td class="tc6" width="35%">印度城（黃色）印度</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p5"></div>
                玩家4
              </td>
              <td class="tc6" width="35%">印度村（水藍色）印度</td>
              <td class="tc6" width="15%">
                <div class="p7"></div>
                玩家5
              </td>
              <td class="tc6" width="35%">兆汗軍（灰色）印度</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p2"></div>
                玩家6
              </td>
              <td class="tc6">
                賓德夫•索蘭基（紅色）印度
              </td>
              <td class="tc6">
                <div class="p1"></div>
                玩家7
              </td>
              <td class="tc6">科蒂西瓦神廟（藍色）印度</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p6"></div>
                玩家8
              </td>
              <td class="tc6" width="35%">匪幫（紫色）印度</td>
            </tr>
          </table>

          <h3>開場</h3>
          <p>金德‧伯勒達伊、布里斯比羅吉。</p>
          <p>大地之母單位:無</p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>去找大師尋求指引。</li>
              <li>去狩獵場。</li>
              <li>打敗賓德夫‧索蘭基。</li>
              <li>布里斯比羅吉必須活著。</li>
              <li>金德‧伯勒達伊必須活著。</li>
            </ol>
          </div>
        </div>
        <h2>次要任務</h2>
        <div class="hrn1"></div>
        <div class="n1">
          （依照玩家選擇不同將會有不同次要任務目標劇情）

          <p>A路線</p>
          <ol>
            <li>解救礦城，以便能順利修補橋樑。</li>
            <li>去青藍色村莊看一下。</li>
            <li>去看一下這座村莊的致富之源。</li>
            <li>帶金德‧伯勒達伊去騎驢。</li>
            <li>
              帶<nuxt-link to="/units/hero/Prithvi">布里斯比</nuxt-link>去騎馬。
            </li>
            <li>走進樹林去與某人會面。</li>
            <li>
              打敗<nuxt-link to="/units/hero/Sanyogita">姍優姬妲</nuxt-link
              >的勇士，俘獲她的愛慕之心。
            </li>
            <li>學會盲射的絕技。</li>
          </ol>
          <p>B路線</p>
          <ol>
            <li>
              把船帶到西邊的<nuxt-link to="/building/Dock">碼頭</nuxt-link>去。
            </li>
            <li>殺死老虎。</li>
            <li>殺死狼群之王。</li>
          </ol>
          <p>C路線</p>
          <ol>
            <li>解救河對岸的城鎮（黃色）。</li>
            <li>
              尋獲<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link>。
            </li>
          </ol>
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>最好把你的軍隊集中起來，分散著的陣型比較危險。</li>
              <li>保護好大夫。</li>
              <li>
                你可以做隨便哪個任務，但是一旦你深入執行一個劇情分支，其它的分支劇情可能就無效了。
              </li>
              <li>
                不同的分支有不同的結局，本次戰役一共有三種不同的勝利方式。
              </li>
              <li>
                如果你要去狩獵，就多留點<nuxt-link to="/units/Archer"
                  >弓箭手</nuxt-link
                >；如果你準備要去攻打賓德夫‧索蘭基，那就多保留點近戰單位。
              </li>
              <li>打獵時你可以讓布里斯比羅吉吃草莓和果子來恢復體力及療傷。</li>
            </ul>
          </div>
        </div>
        <h2>斥候回報</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              你是一個頗有抱負，想通過狩獵捕獸來證明自己實力的年輕王子（橙色）。
            </li>
            <li>
              你父王（綠色）覺得你該去山地那拜見拉姆‧普羅希特大師（黃色）。
            </li>
            <li>傳言說有一個新的敵人殺來德里了，他在河南邊駐紮了營地。</li>
            <li>有幾座橋可以過河——一座在德里港，還有一座在東邊的礦城那。</li>
            <li>本關你只能升級為封建時代。</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                英雄出少年
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Prithviraj_1.jpg" alt="" />
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">布里斯比羅吉</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Indians">印度人</nuxt-link>
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第六章之一
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">N/A</td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Digvijaya">逐鹿迪格維傑之地</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由小蛇，竺叡協助編輯</div>
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
