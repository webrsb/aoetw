<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>純塔</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>純塔</b
            >為世紀帝國II非常經典的戰術之一，也叫做<b>塔攻</b>，之所以叫做純塔，顧名思義為只有<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >去插塔，不出其他兵種，省下建造<nuxt-link to="/building/Barracks"
              >軍營</nuxt-link
            >或其他軍事單位的成本與時間。取而代之的是更多的村民與更多的塔給予對手壓迫。
          </p>
          <ul>
            <li>
              <img src="~assets/Watchtowericon.png" alt="" /><nuxt-link
                to="/building/Watch_Tower"
                >暸望箭塔</nuxt-link
              >:射程極遠，只要建起來即可封住大多的資源，駐紮村民後基本不怕任何兵種。
            </li>
          </ul>
        </div>
        <h3>概述</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            塔攻在國際玩家間非常流行，也歷久不衰，塔攻的變化非常多，可以搭配很多兵種組合，而這邊講的是純塔攻，一般來說純塔攻少了其他兵種的掩護，可能會比較危險，但卻可以有更多的村民去蓋塔，家裡也更多的人挖<nuxt-link
              to="/resource/Stone"
              >石頭</nuxt-link
            >，<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
            >將一隻一隻地蓋。且塔攻升級會比一般升級還快，一般正常封快約21~22P，純塔攻要要20P才會有威力。塔攻講求控制力、反應力與手速，手速快的玩家才能在對方村民來拆塔時，立刻蓋起<nuxt-link
              to="/building/Palisade_Wall"
              >木牆</nuxt-link
            >防禦。
          </p>
          <strong
            ><span
              class="glyphicon glyphicon-plus"
              aria-hidden="true"
              style="color: #3c763d; margin-right: 5px;"
            ></span
            >什麼時候可以打塔攻</strong
          >
          <ul>
            <li>
              對手地形不好時:如果對手<nuxt-link to="/resource/Gold"
                >黃金</nuxt-link
              >石頭甚至<nuxt-link to="/resource/Wood">木材</nuxt-link
              >都在外面，那不用懷疑，塔攻是很好的選擇。
            </li>
            <li>
              你選到塔攻<nuxt-link to="/civs">文明</nuxt-link>時:<nuxt-link
                to="/civs/Spanish"
                >西班牙</nuxt-link
              >與<nuxt-link to="/civs/Koreans">韓國</nuxt-link
              >都是相當典型的塔攻文明，不塔攻很可惜。
            </li>
          </ul>
          <strong
            ><span
              class="glyphicon glyphicon-plus"
              aria-hidden="true"
              style="color: #3c763d; margin-right: 5px;"
            ></span
            >什麼時候不要打塔攻</strong
          >
          <ul>
            <li>對手地形很好時:塔不到東西的情況下，經濟將會慢慢被拉開。</li>
            <li>正式比賽時:塔攻風險高，大型比賽較不容易看到。</li>
          </ul>
          <strong
            ><span
              class="glyphicon glyphicon-plus"
              aria-hidden="true"
              style="color: #3c763d; margin-right: 5px;"
            ></span
            >插塔的地點</strong
          >
          <ul>
            <li>首選石頭區，因為塔攻最好用塔防。</li>
            <li>任何點都可以，那怕是兩塊田，有塔到就是賺了。</li>
          </ul>
        </div>
        <h3>反制</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            塔攻一般來說只要第一支塔沒有起來，那麼便沒有威力，所以不斷的擴大<nuxt-link
              to="/elements/Line_of_Sight"
              >視野</nuxt-link
            >向外探索，找到對方前置村民，用村民與<nuxt-link to="/units/Militia"
              >民兵</nuxt-link
            ><nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
            >等予以殲滅，那麼塔攻就會失敗。如果發現對方起塔了，請務必立刻去挖石頭與研發<nuxt-link
              to="/techs/Town_Watch"
              >城鎮瞭望</nuxt-link
            >，因為最好防塔的方法就是塔守。如果前方守住了，那麼對方經濟便跟不上你，他家裡空虛，生產一隊斥候或小弓將可帶來可怕的破壞。
          </p>
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
                <li>8~9p:2人伐木</li>
                <li>10p:殺豬</li>
                <li>11~14p:4人採果</li>
                <li>15p:殺第二頭豬</li>
                <li>16~19p:殺豬</li>
                <li>20p:蓋採石場</li>
                <li>升織布點封建</li>
                <li>最終封建前配置:7人前置2木5石5果</li>
                <li>PS:可以趕鹿盡量趕鹿</li>
              </ul>
            </div>
            <div class="col-md-6">
              <strong>升級後流程</strong>
              <ul>
                <li>點封建後，看距離派村民出發</li>
                <li>上封建後在敵人資源區起塔</li>
                <li>最好一次起兩塔互相掩護</li>
                <li>不斷起連環塔</li>
              </ul>
            </div>
          </div>
          <h3>適合文明</h3>
          <div class="hrn1"></div>
          <div class="n1">
            一般來說，所有文明都適合，但以下文明更適合一點。
            <ul>
              <li>韓國:箭塔蓋得快，採石頭有加成，村民有視野優勢。</li>
              <li>
                西班牙:建築快30%，對塔很有優勢，存的石頭也可以上<nuxt-link
                  to="/techs/age/Castle_Age"
                  >城堡</nuxt-link
                >出<nuxt-link to="/units/Conquistador">征服者</nuxt-link>。
              </li>
              <li>
                <nuxt-link to="/civs/Incas">印加</nuxt-link
                >:暴力塔、經濟強、村民血厚、石頭省、鷹勇遠，延伸閱讀<a
                  target="_blank"
                  href="https://www.ptt.cc/bbs/AOE/M.1541222470.A.E27.html"
                  >鉛筆塔。</a
                >
              </li>
              <li>
                <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>:升級相當快速。
              </li>
              <li>
                <nuxt-link to="/civs/Teutons">條頓</nuxt-link
                >:箭塔可以駐紮10個人。
              </li>
              <li>
                <nuxt-link to="/civs/Malay">馬來</nuxt-link>:升級比蒙古還快
              </li>
            </ul>
          </div>
          <h3>影片</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="row">
              <div class="col-md-4">
                <h4>第三人稱講解:<br />台灣第一雲-韓國純塔</h4>
                <iframe
                  width="100%"
                  src="https://www.youtube.com/embed/NvWDawdSDbc"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="col-md-4">
                <h4>經典戰術<br />條頓19P10人塔</h4>
                <iframe
                  width="100%"
                  src="https://www.youtube.com/embed/pdcDViG6ghM"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="col-md-4">
                <h4>西班牙第一高手vs天才少年<br />馬來魔塔</h4>
                <iframe
                  width="100%"
                  src="https://www.youtube.com/embed/LSk5n6osCeY"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="col-md-4">
                <h4>
                  <nuxt-link to="/civs/Vietnamese">越南</nuxt-link
                  >第一高手Bact<br />擋高手塔攻
                </h4>
                <iframe
                  width="100%"
                  src="https://www.youtube.com/embed/7avjDSIPzZ0"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="col-md-4">
                <h4>超高手MBL韓國超極純塔<br />VS Daut</h4>
                <iframe
                  width="100%"
                  src="https://www.youtube.com/embed/tc30gSyj7Vo"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="col-md-4">
                <h4>
                  <nuxt-link to="/civs/Chinese">中國</nuxt-link
                  >超高大屌哥<br />西班牙純塔塔死Viper
                </h4>
                <iframe
                  width="100%"
                  src="https://www.youtube.com/embed/eSsqrfMhArs"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="col-md-4">
                <h4>越南高手ACCM韓國純塔<br />vs 對方圍死</h4>
                <iframe
                  width="100%"
                  src="https://www.youtube.com/embed/WQEPr5Yq_x0"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="col-md-4">
                <h4>天才少年反制阿根廷高手<br />Nicov8人塔全軍覆沒</h4>
                <iframe
                  width="100%"
                  src="https://www.youtube.com/embed/gwJorR99Lqg"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="col-md-4">
                <h4>世界第一Viper vs lyx<br />馬來純塔</h4>
                <iframe
                  width="100%"
                  src="https://www.youtube.com/embed/Rms_EGcwI88"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="col-md-4">
                <h4>
                  天才少年Liereyy<br /><nuxt-link to="/ar/armstar"
                    >裝甲開局</nuxt-link
                  >抓到<br />Viper塔攻
                </h4>
                <iframe
                  width="100%"
                  src="https://www.youtube.com/embed/ejtv5KkN2eo"
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
              <div class="unititle">純塔</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Watchtowericon.png" width="45" alt="" />
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
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link><br /><nuxt-link
                to="/civs/Spanish"
                >西班牙</nuxt-link
              >
              <br /><nuxt-link to="/civs/Malay">馬來</nuxt-link>
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
            <td class="unit4">看地形</td>
          </tr>
          <tr>
            <td class="unit3">操控難易度</td>
            <td class="unit4">難</td>
          </tr>
          <tr>
            <td class="unit3">優點</td>
            <td class="unit4">
              幾乎任何<nuxt-link to="/civs">文明</nuxt-link>可用
            </td>
          </tr>
          <tr>
            <td class="unit3">缺點</td>
            <td class="unit4">吃運氣地形</td>
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
