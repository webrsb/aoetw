<template>
  <section>
    <div class="tit">
      <p class="tt2">Aoetw</p>
      <span class="tt">完整、準確的世紀帝國百科全書 </span>
    </div>
    <div class="container" style=" margin-bottom: 30px; ">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-12">
            <p>
              <span style="text-align: center; color:#dc3545;"
                ><a href="https://discord.gg/ymNuMVg"
                  ><img width="100" src="~assets/discord.png" alt="" />
                  Discord語音聊天群</a
                >，歡迎各位前來約戰、聊天與發問問題。</span
              >
            </p>
          </div>
          <div class="col-md-12" style="text-align: right;font-size: 25px;">
            已有758篇條目
          </div>
          <div class="row">
            <div class="col-md-3 col-xs-6 ititle" style="text-align: center;">
              <h3><nuxt-link to="/civs">文明</nuxt-link></h3>
              <nuxt-link to="/civs"
                ><img
                  width="100"
                  src="~assets/u1.jpg"
                  alt="..."
                  class="img-circle"
              /></nuxt-link>
            </div>
            <div class="col-md-3 col-xs-6 ititle" style="text-align: center;">
              <h3><nuxt-link to="/units">單位</nuxt-link></h3>
              <nuxt-link to="/units"
                ><img
                  width="100"
                  src="~assets/u2.jpg"
                  alt="..."
                  class="img-circle"
              /></nuxt-link>
            </div>
            <div class="col-md-3 col-xs-6 ititle" style="text-align: center;">
              <h3><nuxt-link to="/techs">科技</nuxt-link></h3>
              <nuxt-link to="/techs"
                ><img
                  width="100"
                  src="~assets/u3.jpg"
                  alt="..."
                  class="img-circle"
              /></nuxt-link>
            </div>
            <div class="col-md-3 col-xs-6 ititle" style="text-align: center;">
              <h3><nuxt-link to="/bulding">建築</nuxt-link></h3>
              <nuxt-link to="/bulding"
                ><img
                  width="100"
                  src="~assets/u4.jpg"
                  alt="..."
                  class="img-circle"
              /></nuxt-link>
            </div>
            <div class="col-md-3 col-xs-6 ititle" style="text-align: center;">
              <h3><nuxt-link to="/batt">戰役</nuxt-link></h3>
              <nuxt-link to="/batt"
                ><img
                  width="100"
                  src="~assets/u5.jpg"
                  alt="..."
                  class="img-circle"
              /></nuxt-link>
            </div>
            <div class="col-md-3 col-xs-6 ititle" style="text-align: center;">
              <h3><nuxt-link to="/ar">戰術技巧</nuxt-link></h3>
              <nuxt-link to="/ar"
                ><img
                  width="100"
                  src="~assets/u6.jpg"
                  alt="..."
                  class="img-circle"
              /></nuxt-link>
            </div>
            <div class="col-md-3 col-xs-6 ititle" style="text-align: center;">
              <h3><nuxt-link to="/talk">討論區</nuxt-link></h3>
              <nuxt-link to="/talk"
                ><img
                  width="100"
                  src="~assets/u7.jpg"
                  alt="..."
                  class="img-circle"
              /></nuxt-link>
            </div>
            <div class="col-md-3 col-xs-6 ititle" style="text-align: center;">
              <h3><nuxt-link to="/hkbb">工作人員</nuxt-link></h3>
              <nuxt-link to="/hkbb"
                ><img
                  width="100"
                  src="~assets/u8.jpg"
                  alt="..."
                  class="img-circle"
              /></nuxt-link>
            </div>
          </div>
        </div>
        <br />
      </div>
    </div>
    <div class="container">
      <div
        class="row nw"
        style="margin-top: 0px;        border-top: 1px solid #c7c7c7;"
      >
        <div class="col-md-2 ititle2">
          <div class="nw">
            <h4 style="margin-top:30px;"><strong>特色條目</strong></h4>
            <ul>
              <li><nuxt-link to="/top">世界知名玩家</nuxt-link></li>
              <li><nuxt-link to="/fotw">台港知名玩家</nuxt-link></li>
              <li><nuxt-link to="/history">歷屆大賽結果</nuxt-link></li>
              <li><nuxt-link to="/civs/bestciv">文明強弱分析</nuxt-link></li>
              <li><nuxt-link to="/maps/">地圖列表</nuxt-link></li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 ititle2">
          <div class="nw">
            <h4 style="margin-top:30px;"><strong>每周精選</strong></h4>
            <ul>
              <li><nuxt-link to="/Taunts.php">嘲諷語音</nuxt-link></li>
              <li><nuxt-link to="/Regeneration.php">回血</nuxt-link></li>
              <li><nuxt-link to="/Garrison.php">駐軍</nuxt-link></li>
              <li><nuxt-link to="/building/Wonder">世界奇觀</nuxt-link></li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 ititle2">
          <div class="nw">
            <h4 style="margin-top:30px;"><strong>遊戲版本</strong></h4>
            <ul>
              <li>
                <img class="gg" src="~assets/KingsIcon.png" alt="" /><nuxt-link
                  to="/games/aok"
                  >帝王世紀</nuxt-link
                >
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/ConquerorsIcon.png"
                  alt=""
                /><nuxt-link to="/games/aoc">征服者入侵</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/ForgottenIcon.png"
                  alt=""
                /><nuxt-link to="/games/aof">失落的帝國</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/AfricanIcon.png"
                  alt=""
                /><nuxt-link to="/games/ak">非洲王朝</nuxt-link>
              </li>
              <li>
                <img class="gg" src="~assets/RajaIcon.png" alt="" /><nuxt-link
                  to="/games/aor"
                  >王者崛起</nuxt-link
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 ititle2">
          <div class="nw">
            <h4 style="margin-top:30px;"><strong>最新消息</strong></h4>
            <ul>
              <li>
                各文明的<nuxt-link to="/tree/vie">科技樹</nuxt-link>完成拉！
              </li>
              <li>
                2018年9月7日:5.8改版上線，<nuxt-link to="/news/ver5-8"
                  >改版內容</nuxt-link
                >
              </li>
              <li>新增<a href="http://aoetw.com/save/">記錄檔上傳區</a></li>
              <li>
                2018年1月25日:5.7改版上線，<nuxt-link to="/news/ver5-7"
                  >改版內容</nuxt-link
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div
        class="row nw"
        style="margin-top: 0px;        border-top: 1px solid #c7c7c7;"
      >
        <div class="col-md-8 ititle3">
          <div class="nw">
            <h4 style="margin-top:30px;text-align: left;">
              <strong>你知道嗎？</strong>
            </h4>
            <div class="row" style="">
              <div class="col-md-8">
                <ul style="text-align:left;">
                  <li>
                    <nuxt-link to="/civs/Persians">哪一個文明</nuxt-link
                    >是遊戲內最怕打垃圾兵消耗的文明？
                  </li>
                  <li>
                    <nuxt-link to="/civs/Slavs">哪一個文明</nuxt-link
                    >先出現在三代，後來才在二代擴充？
                  </li>
                  <li>
                    <nuxt-link to="/units/Gbeto">哪一個單位</nuxt-link
                    >血量全遊戲最少，卻擁有傲人的攻擊？
                  </li>
                  <li>
                    <nuxt-link to="/units/Trade_Cog">哪一個單位</nuxt-link
                    >是遊戲中移動速度最快的單位？
                  </li>
                  <li>
                    獨輪推車<nuxt-link to="/techs/Wheelbarrow"
                      >最佳研發時機</nuxt-link
                    >怎麼看？
                  </li>
                </ul>
                <br />
                <p style="text-align: right;font-size: 15px;">
                  <a href="http://tinyurl.com/y95wnoxq">我要投稿</a>&nbsp;
                  <span style="text-align: right;font-size: 15px;"
                    ><nuxt-link to="/uknow">歷史存檔</nuxt-link></span
                  >
                </p>
              </div>
              <div class="col-md-4">
                <img
                  src="~assets/MansaMusa.jpg"
                  style="float: right;"
                  width="200"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ititle2">
          <div class="nw">
            <h4 style="margin-top:30px;"><strong>參與Aoetw</strong></h4>
            <p>
              Aoetw是一個內容自由、任何人都能參與的協作計劃，其目標是建立一個完整、準確的世紀帝國百科全書。
            </p>
            <p>
              Aoetw的成長依靠您的參與，無論是創建新條目、編輯現有條目，或者為條目增加插圖，您都可以為Aoetw作出貢獻。
            </p>
            <p style="text-align: right;font-size: 15px;">
              <nuxt-link to="/wan">加入Aoetw</nuxt-link>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  components: {}
}
</script>

<style>
.tit {
  background: url(~assets/title3.jpg);
  width: 100%;
  height: 284px;
  text-align: center;
  color: aliceblue;
  padding-top: 50px;
}

.tt2 {
  font-size: 30px;
  font-weight: bold;
  margin-right: 530px;
}

.tt {
  font-size: 45px;
  font-weight: bold;
}
</style>
