<template>
  <div class="container">
    <div class="row" style=" margin-top:20px">
      <div class="col-md-12">
        <table class="table-bordered" width="100%">
          <tbody>
            <tr>
              <td class="unit" colspan="2" style="background-color:#1161b7;">
                <div class="unititle2">
                  世紀帝國II的資源
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">
                <nuxt-link to="/resource/Food">食物</nuxt-link>
              </td>
              <td class="unit4">
                <nuxt-link to="/resource/Berry_Bush">漿果叢</nuxt-link>•
                <nuxt-link to="/units/animal">野生動物</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">
                <nuxt-link to="/resource/Wood">木材</nuxt-link>
              </td>
              <td class="unit4">
                <nuxt-link to="/resource/Tree">樹木</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">
                <nuxt-link to="/resource/Gold">金礦</nuxt-link>
              </td>
              <td class="unit4">
                <nuxt-link to="/elements/Relic">遺跡</nuxt-link>•
                <nuxt-link to="/building/Market">市集</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">
                <nuxt-link to="/resource/Stone">石礦</nuxt-link>
              </td>
              <td class="unit4">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allre' })

export default {
  components: {}
}
</script>
<style></style>
