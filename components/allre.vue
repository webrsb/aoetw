<template>
  <div class="container">
    <!-- Example row of columns -->
    <div class="row" style=" margin-top:20px">
      <div class="col-md-12">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#1161b7;">
              <div class="unititle" style="color: #fff;">世紀帝國的資源</div>
            </td>
          </tr>
          <tr>
          <td style="text-align: center;padding: 20px "><nuxt-link to="/resource/Food">食物·</nuxt-link><nuxt-link to="/resource/Wood">木材·</nuxt-link><nuxt-link to="/resource/Gold">金礦·</nuxt-link><nuxt-link to="/resource/Stone">石礦</nuxt-link>
          </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allre',
  components: {}
}
</script>
<style></style>