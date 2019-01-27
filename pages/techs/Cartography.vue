<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>製圖學</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            製圖學可以研究於<nuxt-link to="/building/Market">市集</nuxt-link
            >。功能是看到盟友的視野。
          </p>
          <p>
            在遊戲早期這是個非常有用的科技，尤其是在多人連線時，重點是他不用成本。
          </p>
        </div>
        <h3>可研發文明</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <span
                  class="glyphicon glyphicon-ok okc"
                  aria-hidden="true"
                ></span
                ><span class="okcc" style="margin-left: 2px;">可研發</span>
              </h4>
              所有文明
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <span
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span
                ><span class="nocc" style="margin-left: 2px;">不可研發</span>
              </h4>
              無
            </div>
          </div>
        </div>
        >
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>：在<nuxt-link
                to="/techsage/Dark_Age"
                >黑暗時代</nuxt-link
              >時及擁有免費的製圖學。
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
            <li>成本為100F/100G。</li>
            <li>需要60秒研發的時間。</li>
            <li></li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>免費且立即完成。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>5.7版本後建立市場後，立即完成。</li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              在5.7以前很多玩家就算是玩單挑，也會研發製圖學，因為Free Carto。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            大約在15,000至10,000年前，出現了使用線條和簡單符號的原始地圖，文字產生以後，和符號一起標註於地圖之上。
          </p>
          <p>
            在一些東方古老的國家，如中國、埃及、巴比倫等，由於農業的發展，需要大量土地，產生了簡易的測量工具和方法。其後，行政管理、貿易和戰爭更是促進了對地圖的需要。刻畫在陶片上的巴比倫地圖大約是2500年前的遺物，上面刻有山脈、河流、城市和海洋；中國歷史上記載的鑄造在九鼎上的地圖，距今也有4000多年的歷史。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle"><nuxt-link to="#">製圖學</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Cartography.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="#">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">請看介紹</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techsage/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <nuxt-link to="/building/Market">市集</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">1秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">金</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">影響</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">看到盟友的視野。</td>
          </tr>
        </table>
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
