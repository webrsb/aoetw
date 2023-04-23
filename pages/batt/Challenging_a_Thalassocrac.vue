<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>滔天巨浪</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>滔天巨浪</b>為<nuxt-link to="/batt/Suryavarman_I"
              >蘇利耶跋摩一世戰役</nuxt-link
            >的第四關劇情關卡，此關描述<nuxt-link to="/units/hero/Suryavarman_I"
              >蘇利耶跋摩一世</nuxt-link
            >登基後，與<nuxt-link to="/civs/Indians">印度</nuxt-link
            >盟友征服鄰近海上強權的經過。
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
                600<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／1,000<nuxt-link to="/resource/Food">食物</nuxt-link
                >／600<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／700<nuxt-link to="/resource/Stone">石礦</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">130</td>
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
                <div class="p5"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Khmer">高棉人</nuxt-link>（水藍）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p3"></div>
                玩家2
              </td>
              <td class="tc6">朱羅大軍（綠色）印度</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6">
                <div class="p8"></div>
                玩家3
              </td>
              <td class="tc6">
                單馬令王國（橘色）<nuxt-link to="/civs/Malay">馬來</nuxt-link>
              </td>
              <td class="tc6">
                <div class="p1"></div>
                玩家4
              </td>
              <td class="tc6">參佛齊帝國（藍色）馬來</td>
            </tr>
          </table>

          <h3>開場</h3>
          <p>
            。 軍事單位 -<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
            >x12、<nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link
            >x4、<nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link
            >x1、<nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link
            >x13、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
            >x16、<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
            >x8、<nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link
            >x1、<nuxt-link to="/units/Monk">僧侶</nuxt-link>x1
          </p>
          <p>
            。 經濟單位&nbsp;-&nbsp;<nuxt-link to="/units/Villager"
              >村民</nuxt-link
            >x5
          </p>
          <p>
            。
            <nuxt-link to="/units/Naval_Vessels">海軍單位</nuxt-link>
            -<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>x2、<nuxt-link
              to="/units/Transport_Ship"
              >運輸船</nuxt-link
            >x1、<nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link
            >x4、<nuxt-link to="/units/Heavy_Demolition_Ship"
              >重裝爆破船</nuxt-link
            >x1 、<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>x2
          </p>
        </div>
        <div>
          <h2>主要任務</h2>
          <div class="n1">
            <ol>
              <li>打敗單馬令王國。</li>
              <li>打敗參佛齊帝國。</li>
              <li>援助朱羅盟軍，不要讓他們被殲滅。</li>
            </ol>
          </div>
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                單馬令王國在高棉的領土上有兩個據點，若你能把他們拔掉的話，整個東北陸地就都掌握在高棉手中了。
              </li>
              <li>
                此次<nuxt-link to="/batt">戰役</nuxt-link
                >以海戰為主，在訓練、<nuxt-link to="/building">建築</nuxt-link
                >、研究時都要有所側重。
              </li>
              <li>
                打下地圖中央島嶼能夠讓你搶奪上面的豐富礦產（黃金與石頭）。
              </li>
              <li>
                大部分陸地都靠近沿海，因此用<nuxt-link
                  to="/units/Cannon_Galleon"
                  >火砲戰船</nuxt-link
                >進行岸轟可以協助你清除敵方防禦工事。
              </li>
              <li>
                要隨時注意海上的戰況以及突發事件，如果援軍遲遲不來，前線陣地也很難堅守。
              </li>
            </ul>
            <h2>斥候</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  高棉軍隊（水藍）駐紮在高棉帝國的南方海岸線，隨時準備出征暹羅灣。他們能夠應付一開始的陸戰，但想乘風破浪征服大洋彼岸的單馬令與參佛齊則必須抓緊機會訓練<nuxt-link
                    to="/units/Naval_Vessels"
                    >海軍</nuxt-link
                  >。
                </li>
                <li>
                  朱羅（綠色）大軍是高棉的盟友，他們剛在與單馬令王國交戰的前線傳回捷報；他們已經殺入王國境內並建立了馬來群島上的一座要塞。他們的象兵、劍士、弓箭手與輕騎不負眾望屢建奇功，但要想抵擋單馬令與參佛齊的反撲，則還很艱難。及需要高棉軍的協助。
                </li>
                <li>
                  單馬令王國（橘色）在和朱羅大軍的交鋒中剛吃了敗仗。但他們主力尚存、還在推進。在高棉的西北角建立了兩座大營。他們的輕裝步兵和<nuxt-link
                    to="/units/Elite_Skirmisher"
                    >戰矛兵</nuxt-link
                  >會在路上騷擾我軍，同時以海軍分隔高棉與朱羅的盟軍使他們無法相顧。
                </li>
                <li>
                  參佛齊（藍色）是地圖南邊的一個海上帝國。他們由象兵、弓箭手和<nuxt-link
                    to="/units/Mangonel"
                    >投石車</nuxt-link
                  >堅守陣地、牢不可破，不畏任何來自路上的進攻。同時他們還有令人聞風喪膽的海軍和固若金湯的<nuxt-link
                    to="/building/Dock"
                    >碼頭</nuxt-link
                  >，自古以來稱霸南洋未逢敵手。
                </li>
              </ul>
              <h2>細節</h2>
              <div class="hrn1"></div>
              <div class="n1">
                <ul>
                  <li>
                    本關名稱＂Challenging a
                    Thalassocracy＂字面上的翻譯應該為「挑戰制海權」，意指蘇利耶跋摩一世劍指馬來的征途。
                  </li>
                  <li>
                    制海權是通關的要件；而要取得制海權就不得不拔下兩座小島上的守軍。
                  </li>
                  <li>
                    從「高棉帝國遠征參佛齊來看」地圖應該是以現實世界中的「暹羅灣」為藍本。但因為遊戲空間所限，導致暹羅灣的比例失真，顯得比現實更為狹小。而帕岸島與蘇梅島則顯得放大許多。
                  </li>
                  <li>
                    單馬令王國 -
                    馬來半島古國名稱，位於現今洛坤府（馬來半島中段，東濱暹羅灣）在戰役章節的時代中為自治王國，在後來先後成為參佛齊與泰國阿踰陀耶王朝附庸。
                  </li>
                  <li>
                    參佛齊帝國 -
                    於7-12世紀稱霸馬來半島的治權，在我國大宋典籍中被稱為「室利佛逝」，朝貢行動規律不輟。在宋代有紀錄的進貢便至少有28次之多。由於地處蘇門答臘東部、緊扼著麻六甲海峽與巽他海峽，掌握了貿易利潤，成為國力的厚實基礎。並挾強大的海上力量雄踞馬來，廣納鄰近勢力為藩屬。一直到13世紀滿者伯夷崛起後國力才逐漸走下坡。
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                滔天巨浪
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Suryavarman_I-4.jpg" alt="" />
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
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Suryavarman_I">蘇利耶跋摩一世</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Khmer">高棉人</nuxt-link>
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
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>第二章之四
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/A_Dangerous_Mission">九死一生</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Nirvanapada">千古偉業</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由亞諭、裕暉協助編輯。</div>
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
