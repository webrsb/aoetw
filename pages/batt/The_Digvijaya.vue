<template>
  <div class="container">
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-12">
        <h1>逐鹿迪格維傑之地</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>逐鹿迪格維傑之地</b>為<nuxt-link
              to="/batt/Battles_of_the_Forgotten"
              >失落的帝國戰役</nuxt-link
            >中<nuxt-link to="/units/hero/Prithviraj">布里斯比羅吉</nuxt-link
            >劇情<nuxt-link to="/batt">戰役</nuxt-link>的第二關。
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
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源：</td>
              <td class="tc2">
                100<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >／100<nuxt-link to="/resource/Food">食物</nuxt-link>
              </td>
              <td class="tc1" width="15%">人口上限：</td>
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
              <td class="tc6">
                <div class="p8"></div>
                玩家1
              </td>
              <td class="tc6" colspan="4">
                主角（橘色）<nuxt-link to="/civs/Indians">印度</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p2"></div>
                玩家2
              </td>
              <td class="tc6" width="35%">印度村莊（紅色）印度</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p6"></div>
                玩家3
              </td>
              <td class="tc6">加哈達瓦拉人（紫色）印度</td>
              <td class="tc6">
                <div class="p1"></div>
                玩家4
              </td>
              <td class="tc6">喀什米爾人（藍色）印度</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p4"></div>
                玩家5
              </td>
              <td class="tc6" width="35%">昌德拉人（黃色）印度</td>
              <td class="tc6" width="15%">
                <div class="p5"></div>
                玩家6
              </td>
              <td class="tc6" width="35%">帕拉羅摩人（水藍色）印度</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p3"></div>
                玩家7
              </td>
              <td class="tc6" width="35%">
                伽色尼人（綠色）<nuxt-link to="/civs/Turks">土耳其</nuxt-link>
              </td>
              <td class="tc6" width="15%">
                <div class="p7"></div>
                玩家8
              </td>
              <td class="tc6" width="35%">
                索蘭基人（灰色）<nuxt-link to="/civs/Persians">波斯</nuxt-link>
              </td>
            </tr>
          </table>

          <h3>開場：</h3>
          <p>
            布里斯比羅吉、1名<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >、2位斥<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
            >、3位<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
            >、4位<nuxt-link to="/units/Knight">騎士</nuxt-link>、5位<nuxt-link
              to="/units/Spearman"
              >長槍兵</nuxt-link
            >、6位<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
            >、4輛<nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link
            >、11位<nuxt-link to="/units/Villager">村民</nuxt-link>
          </p>
          <h3>大地之母單位：</h3>
          <p>5位村民、4輛貿易車隊</p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>征服除了伽色尼人（綠）之外的4個敵對勢力。</li>
              <li>
                你一開始就有的那兩座<nuxt-link to="/building/Castle"
                  >城堡</nuxt-link
                >不能都被摧毀。
              </li>
              <li>布里斯比羅吉必須活著。</li>
            </ol>
          </div>
        </div>
        <h2>次要任務</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ol>
            <li>
              摧毀加哈達瓦拉人（紫）用於控制南部<nuxt-link to="/building/Market"
                >市集</nuxt-link
              >的<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
              >，以幫助喀什米爾人（藍）。
            </li>
            <li>
              帶25位<nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link
              >給加哈達瓦拉人 （紫）。
            </li>
            <li>
              殺死加哈達瓦拉人（紫）的首領，以便<nuxt-link
                to="/elements/Conversion"
                >招降</nuxt-link
              >昌德拉人（黃）。
            </li>
            <li>在帕拉羅摩人（水藍）附近插著旗幟的山頭那建造一座城堡。</li>
            <li>
              給索蘭基人（灰）1,000石頭， 1,000黃金和1,000<nuxt-link
                to="/resource/Wood"
                >木材</nuxt-link
              >，幫助他們建造紀念碑。
            </li>
            <li>把聖物交給帕拉羅摩人（水藍）以便交換索求巨型投石器。</li>
          </ol>
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                黃金很少，所以你多半得依靠貿易獲得收入，必要的時候可以賣掉一些食物和木材。
              </li>
              <li>
                大部分的資源都能在你營地四周的郊野那裡找到，但是要小心敵人的侵擾。圍牆內的城鎮可保護村民免遭敵人毒手。
              </li>
              <li>
                你可以掃蕩敵軍，也可以勸降他們。<nuxt-link
                  to="/units/Scout_Cavalry"
                  >斥候</nuxt-link
                >應該會給你一些有用的軍事情報。
              </li>
            </ul>
          </div>
        </div>
        <h2>斥候回報</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              索蘭基人（灰）的統治者想建造一座紀念碑，但是他們沒有足夠的資源來完成。
            </li>
            <li>
              帕拉羅摩人（水藍）懂得製造巨型投石器，但是他們正苦於遭受鄰邦的侵襲。
            </li>
            <li>
              北邊喀什米爾人（藍）有著很多資源，物產豐富。他們想和其它印度城邦貿易，而其它的國王卻不希望這個對手進入他們的市集。
            </li>
            <li>
              索蘭基人（灰）有強大的防禦工事，但是陷入了與加哈達瓦拉人（紫）的苦戰中。他們希望有人出手相助。
            </li>
            <li>
              加哈達瓦拉人（紫）在一位強大的拉吉普特王——曲女城的賈伊金德的帶領下，所向披靡、從不屈服。若沒有賈伊金德的話，他的子民可能就不會這麼冷血好戰了。
            </li>
            <li>
              伽色尼人（綠）是北印度一直以來的威脅。除非完成他們的野心--「征服全印度」，不然他們是不會善罷甘休的。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                九合諸侯
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <center><img src="~assets/Prithviraj/The_Digvijaya_map.png" alt="" /></center>
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
            <td class="unit4">
              <nuxt-link to="/batt/Prithviraj">布里斯比羅吉</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Indians">印度</nuxt-link>
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第六章之二
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/A_Promising_Warrior">英雄出少年</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Elopement">私奔</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由小蛇，竺叡協助編輯。</div>
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
