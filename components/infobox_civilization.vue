<template>
  <table class="table-bordered" width="100%">
    <tbody>
      <tr v-if="$slots.name">
        <td class="unit" colspan="2" style=" background-color:#e6992c;">
          <div class="unititle2"><slot name="name" /></div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <div class="unititle">
            <slot v-if="$slots.name" name="image" />
            <p v-if="$slots.name">
              <em><slot name="caption" /></em>
            </p>
          </div>
        </td>
      </tr>
      <tr>
        <td class="unit" colspan="2" style=" background-color:#e6992c;">
          <div class="unititle2">概要</div>
        </td>
      </tr>
      <tr v-if="$slots.name">
        <td class="unit3">建築風格</td>
        <td class="unit4"><slot name="arch" /></td>
      </tr>
      <tr v-if="$slots.name">
        <td class="unit3">分類文明</td>
        <td class="unit4"><slot name="continent" /></td>
      </tr>
      <tr v-if="$slots.name">
        <td class="unit3">特殊單位</td>
        <td class="unit4">
          <slot name="focus" />
        </td>
      </tr>
      <tr v-if="$slots.name">
        <td class="unit3">首選戰略</td>
        <td class="unit4"><slot name="strategy" /></td>
      </tr>
      <tr v-if="$slots.name">
        <td class="unit3">特殊技術</td>
        <td class="unit4">
          <slot name="tech" />
        </td>
      </tr>
    </tbody>
  </table>
</template>
<script>
export default {
  mounted () {
  }
}
</script>
<style>
</style>
