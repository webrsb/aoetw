<template>
  <div class="container">
    <div class="row" style=" margin-top:20px">
      <div class="col-md-12">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31708f;">
              <div class="unititle" style="color: #fff;">關於數據</div>
            </td>
          </tr>
          <tr>
            <td style="text-align: center;padding: 20px ">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>· 
              <nuxt-link to="/elements/Attack">攻擊</nuxt-link>·
              <nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>·
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>·
              <nuxt-link to="/armor">防禦類型</nuxt-link>·
              <nuxt-link to="/elements/Area_of_Effect">擴散範圍</nuxt-link>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <!-- /container -->
</template>
