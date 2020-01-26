<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>垛孔</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>垛孔</b>可於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在<nuxt-link to="/building/University">學院</nuxt-link
            >研發。可移除<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
            >和<nuxt-link to="/building/Castle">城堡</nuxt-link>的最小射程限制。
          </p>
          <p>
            垛孔於實戰中幾乎不會用，因為可以用交叉火力掩護代替，或是使用近戰單位保護(<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >也可)，在城堡或箭塔旁邊蓋牆或其他<nuxt-link to="/building"
              >建築物</nuxt-link
            >也可以；另外這100<nuxt-link to="/resource/Stone">石頭</nuxt-link
            >拿去蓋額外的<nuxt-link to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >爆經濟會比研發該<nuxt-link to="/techs">科技</nuxt-link>有用的多。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：該科技在<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >花費便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>：該科技免費。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link
              >：該科技研發時間快80%
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>成本為200食物/200石頭</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>成本為成本200食物/100石頭</li>
          </ul>
          <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                垛孔英文為：Murder
                Holes(謀殺孔)，日文為殺人孔(さつじんこう)，聽起來讓人不寒而慄。
              </li>
              <li>
                就算研發<nuxt-link to="/civs/Persians">波斯</nuxt-link
                >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
                ><nuxt-link to="/techs/Boiling_Oil">沸油</nuxt-link
                >，在沒有垛孔的狀況下，城堡沒有辦法對已經在最小範圍內的<nuxt-link
                  to="/units/Battering_Ram"
                  >衝撞車</nuxt-link
                >造成傷害(就不能直接把油潑上去嗎?!)
              </li>
              <li>
                其實這科技名稱完全是弄錯了，原文Murder Holes是指<nuxt-link
                  to="/building"
                  >建築</nuxt-link
                >中的一個洞，可以從那邊丟入沸油等武器攻擊敵人，而不是讓<nuxt-link
                  to="/units/Archer"
                  >弓箭手</nuxt-link
                >可以向下攻擊敵人，這種科技應該名字叫做：Machicolations，中文可能翻譯為：突堞、堞口;
                堞眼。
              </li>
            </ul>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>
              中古世紀歐洲城堡或要塞中，會在天井設置一個洞孔，從敵人的頭上丟下『石頭、沸油、加熱過的砂石、箭矢或是熟石灰等』用來攻擊敵人。油當時是很珍貴的資源，故很少使用。
            </p>
            <p>
              <nuxt-link to="/techs/Hoardings">外架式柵樓</nuxt-link
              >是在防御者可以與之戰鬥的<nuxt-link to="/building/Stone_Wall"
                >城牆</nuxt-link
              >和塔樓的頂部建造的防禦工事。他們需要伸出牆壁的垂直平面，以便能夠攻擊牆壁底部的敵人。在外架式柵樓的底部是被稱為垛孔的陷阱門。這些可以打開，防御者可以射箭，扔石頭，開水或燒沙直接向下。沒有垛孔，靠牆底部的敵人就會相對安全。
            </p>
          </div>
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="row">
              <div class="col-md-4">
                <gallery
                  ><img
                    class="imgn hg"
                    src="~assets/1024px-Bodiam_murder_holes.jpg"
                    alt=""
                /></gallery>
                <p>
                  <em
                    ><a href="http://tinyurl.com/y8vlw8g3" target="_blank"
                      >博丁安堡</a
                    >的垛孔(博丁安堡為遊戲中，<nuxt-link to="/civs/Britons"
                      >不列顛</nuxt-link
                    >、<nuxt-link to="/civs/Franks">法蘭克</nuxt-link
                    >等西歐建築城堡的原形)</em
                  >
                </p>
              </div>
              <div class="col-md-4">
                <gallery
                  ><img
                    class="imgn hg"
                    src="~assets/Machicolation_Of_Wejter_Tower.jpg"
                    alt=""
                /></gallery>
                <p><em>真正的垛孔(博丁安堡那個是Murder Holes)</em></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">垛孔</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Murderholes.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="/techs">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/castle_age.png"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/university.png"
                alt=""
              /><nuxt-link to="/building/University">學院</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">60秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">石材</td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">移除箭塔和城堡的最小射程限制。</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alltech',
  components: {}
}
</script>
<style></style>
