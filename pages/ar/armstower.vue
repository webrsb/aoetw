<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>裝甲塔</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>裝甲塔</strong
            >是遊戲內一種非常兇猛的戰術，顧名思義就是上封建後利用<nuxt-link
              to="/units/Man-at-Arms"
              >裝甲步兵</nuxt-link
            >掩護<nuxt-link to="/units/Villager">村民</nuxt-link
            >蓋塔，癱瘓其經濟，其特點是高風險但高報酬，在一般<nuxt-link
              to="/maps/Arabia"
              >阿拉伯</nuxt-link
            >單挑中非常熱門。
          </p>
          <ul>
            <li>
              <img
                src="~assets/ManAtArmsIcon.png"
                width="25"
                alt=""
              /><nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link
              >:封建初期近戰王者，不怕少量<nuxt-link to="/units/Scout_Cavalry"
                >斥候</nuxt-link
              >與<nuxt-link to="/units/Spearman">槍兵</nuxt-link
              >，但比較怕<nuxt-link to="/units/Archer">弓兵</nuxt-link
              >，殺村民非常快。在封建中後期後因為走得慢逐漸沒用。
            </li>
            <li>
              <img width="25px" src="~assets/tower.png" alt="" /><nuxt-link
                to="/building/Watch_Tower"
                >暸望台</nuxt-link
              >:遊戲說明<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
              >為防禦建築，其實為非常兇猛的進攻手段，射程高達8，可以輕易封鎖任何資源點，駐紮村民後也不怕<nuxt-link
                to="/techs/age/Feudal_Age"
                >封建時代</nuxt-link
              >任何兵種，唯獨如果缺乏保護很容易被村民拆掉，可以養成在箭塔底下蓋牆的好習慣。
            </li>
          </ul>
        </div>
        <h3>概述</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            裝甲塔在現今的打法中非常盛行，靠著其兇猛的威力，讓敵人喘不過氣來。國際上的高手Nicov更是裝甲塔的代表。
          </p>
          <strong
            ><span
              class="glyphicon glyphicon-plus"
              aria-hidden="true"
              style="color: #3c763d; margin-right: 5px;"
            ></span
            >什麼時候該打裝甲塔</strong
          >
          <div>
            <ol>
              <li>
                對方地形差:如對方<nuxt-link to="/resource/Gold">黃金</nuxt-link
                ><nuxt-link to="/resource/Stone">石頭</nuxt-link
                ><nuxt-link to="/resource/Wood">木頭</nuxt-link
                >靠外，地形不好圍，直接給對方壓力。
              </li>
              <li>
                對方失誤時:對手打豬死村民或是死斥候、或是被偷豬，可能導致升級慢，趁勝追擊。
              </li>
              <li>自己地形差:如家裡無險可守，不如就把戰場壓到對方家。</li>
              <li>
                對方想直城:對方想圍死直接上<nuxt-link to="/techs/age/Castle_Age"
                  >城堡</nuxt-link
                >，就強行進攻阻止對方。
              </li>
            </ol>
          </div>
          <strong
            ><span
              class="glyphicon glyphicon-plus"
              aria-hidden="true"
              style="color: #3c763d; margin-right: 5px;"
            ></span
            >什麼時候不該打裝甲塔</strong
          >
          <div>
            <ol>
              <li>對方地形好:如對方黃金石頭木頭都在裡面，你都封不到。</li>
              <li>自己失誤時:裝甲塔很吃升級，如果升級不好還是換別的打法好。</li>
            </ol>
          </div>
          <strong
            ><span
              class="glyphicon glyphicon-plus"
              aria-hidden="true"
              style="color: #3c763d; margin-right: 5px;"
            ></span
            >裝甲塔第一隻塔蓋哪裡</strong
          >
          <ul>
            <p>
              蓋哪裡都可以，主要以建立根據地，可以繼續連環塔下去為主。通常對方是馬國，如<nuxt-link
                to="/civs/Magyars"
                >馬扎爾</nuxt-link
              >、<nuxt-link to="/civs/Mongols">蒙古</nuxt-link
              >，建議可以蓋在果樹區。如果對方打弓就先封金為主，但最重要的還是哪邊地形好封就插哪。
            </p>
            <p>一般來說，果樹與田往往比樹木、黃金重要。</p>
          </ul>
        </div>
        <h3>流程</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-12">
              <em
                ><p style="padding: 0px 10px;">
                  流程只是大概，沒有一定，每場地形地物都不同，重要的還是找到最適合自己的流程與打法!
                </p></em
              >
            </div>
            <div class="col-md-6">
              <strong>村民升級流程</strong>
              <ul>
                <li>2~7p:6人採集羊肉</li>
                <li>8~11p:4人伐木</li>
                <li>12p:殺豬</li>
                <li>13~16p:4人採果</li>
                <li>17p:殺第二頭豬</li>
                <li>18~19p:殺豬</li>
                <li>
                  20p:蓋<nuxt-link to="/building/Barracks">軍營</nuxt-link>
                </li>
                <li>21~22採黃金</li>
                <li>升織布點封建</li>
              </ul>
            </div>
            <div class="col-md-6">
              <strong>升級後流程</strong>
              <ul>
                <li>
                  點封建後開始出3~4<nuxt-link to="/units/Militia"
                    >民兵</nuxt-link
                  >，通常21p打3裝甲，22p打4裝甲
                </li>
                <li>如沒有趕鹿，可考慮1~2種田，3~4村民出發敵人家</li>
                <li>民兵出發</li>
                <li>採肉村民分四個出去採石頭</li>
                <li>上封建後升級裝甲步兵</li>
                <li>配合裝甲步兵，直接在對方資源點插塔</li>
                <li>之後連環插塔</li>
                <li>村民出來就種田</li>
              </ul>
            </div>
          </div>
          <h3>適合文明</h3>
          <div class="hrn1"></div>
          <div class="n1">
            一般來說，所有<nuxt-link to="/civs">文明</nuxt-link
            >都適合，但<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
            >有加成的文明更好。
            <ul>
              <li>
                <nuxt-link to="/civs/Burmese">緬甸</nuxt-link
                >:上封建步兵自動+1攻擊，裝甲步兵非常恐怖，免費伐木技術自動省下100食物50木。
              </li>
              <li>
                <nuxt-link to="/civs/Japanese">日本</nuxt-link
                >:經濟不錯，上封建步兵攻擊快25%。
              </li>
              <li>
                <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
                >:軍營效率快25%，一開始多50黃金。
              </li>
              <li>
                馬扎爾:步兵與<nuxt-link to="/units/Cavalry_Units"
                  >騎兵</nuxt-link
                >免費+1攻擊，但經濟不如緬甸好。
              </li>
              <li>
                <nuxt-link to="/civs/Incas">印加</nuxt-link
                >:箭塔便宜，經濟不錯，村民受<nuxt-link to="/building/Blacksmith"
                  >兵工廠</nuxt-link
                >影響。
              </li>
              <li><nuxt-link to="/civs/Goths">哥德</nuxt-link>:步兵便宜。</li>
              <li>塞爾特:步兵走的快，經濟好。</li>
            </ul>
          </div>
          <h3>影片</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="row">
              <div class="col-md-4">
                <h4>Liereyy緬甸帝王級裝甲塔</h4>
                <iframe
                  width="100%"
                  src="https://www.youtube.com/embed/j3jh2qZcxEs"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="col-md-4">
                <h4>偷豬後的哥德裝甲塔</h4>
                <iframe
                  width="100%"
                  src="https://www.youtube.com/embed/Eo2qLprhh_0"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="col-md-4">
                <h4>觀戰視角雲的阿茲裝甲塔</h4>
                <iframe
                  width="100%"
                  src="https://www.youtube.com/embed/F7Ua17OrIZQ"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="col-md-4">
                <h4>雲的緬甸裝甲塔教學</h4>
                <iframe
                  width="100%"
                  src="https://www.youtube.com/embed/iVWkc_zGeyU"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="col-md-4">
                <h4>緬甸裝甲塔 10分鐘KO</h4>
                <iframe
                  width="100%"
                  src="https://www.youtube.com/embed/jB1v14bwujo"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="col-md-4">
                <h4>越南高手反制雲的裝甲塔</h4>
                <iframe
                  width="100%"
                  src="https://www.youtube.com/embed/ovFVHc7gRVY"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="col-md-4">
                <h4>巴西高手St4rk漂亮擋裝甲塔</h4>
                <iframe
                  width="100%"
                  height="315"
                  src="https://www.youtube.com/embed/CNgCrvNeI3o"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#5cb85c;">
              <div class="unititle2">
                裝甲塔
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img width="120px" src="~assets/ManAtArmsIcon.png" alt="" />
                <img width="120px" src="~assets/tower.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#5cb85c;">
              <div class="unititle2">戰術介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">適合<nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link><br /><nuxt-link
                to="/civs/Japanese"
                >日本</nuxt-link
              >
              <br /><nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              ><br /><nuxt-link to="/civs/Incas">印加</nuxt-link
              ><br /><nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">威力</td>
            <td class="unit4">非常強</td>
          </tr>
          <tr>
            <td class="unit3">操控難易度</td>
            <td class="unit4">難</td>
          </tr>
          <tr>
            <td class="unit3">優點</td>
            <td class="unit4">
              幾乎任何<nuxt-link to="/civs">文明</nuxt-link>可用，威力極大
            </td>
          </tr>
          <tr>
            <td class="unit3">缺點</td>
            <td class="unit4">吃控制力與運氣</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allar',
  components: {}
}
</script>
<style></style>
