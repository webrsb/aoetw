<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>運金船</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>運金船</strong
            >是世紀帝國II中一個不可排除的單位，只能在情景編輯器中使用。通過前往其他玩家的<nuxt-link
              to="/building/Dock"
              >碼頭</nuxt-link
            >並返回，通過使用一個長的像垃圾箱的東西來獲取金幣，其外觀類似於普通的貿易船。
          </p>
          <p>
            與標準貿易船相比，它們的移動速度稍慢，但是它們所攜帶的<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >遠多於相應碼頭上的黃金。然而，他們的速度不能通過研究大篷車來提高。
          </p>
        </div>
        <div class="n1">
          <h2>冷知識</h2>
          <p>
            運金船的圖標和外觀在世紀帝國中被很多海上貿易單位重複使用，所以這個外觀真的很爛，就如同運金船的英文（junk)的另一個意思“垃圾”。然而實際上這個詞的意思是指一種<nuxt-link
              to="/civs/Chinese"
              >中國</nuxt-link
            >古代帆船，如今這種帆船還在被使用。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                運金船
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Junkicon.jpg" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Naval_Vessels">海軍</nuxt-link>船舶
            </td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2" style="color: #fff;">統計</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">無</td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.21</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">7</td>
          </tr>
        </table>

        <div class="thanks"></div>
      </div>
    </div>
    <div class="wiki" style="margin-top: 5px;">
      <div style="float: left;">
        <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
      </div>
      <div style="margin-left: 60px;">
        維基百科上的運金船
        <div style="margin-left: 10px;">
          <i
            ><strong
              ><a
                href="https://en.wikipedia.org/wiki/Junk_(ship)"
                target="_blank"
                >運金船</a
              >
            </strong>
          </i>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alledmap',
  components: {}
}
</script>
<style></style>
