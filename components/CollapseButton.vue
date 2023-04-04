<template>
  <b-button
    class="m-1"
    :class="visible ? null : 'collapsed'"
    :aria-expanded="visible ? 'true' : 'false'"
    aria-controls="collapse-4"
    :variant="variant"
    @click="visible=!visible">{{ text }}
  </b-button>
  <b-collapse v-model="visible">
    <slot></slot>
  </b-collapse>
</template>

<script setup lang="ts">
  import type { ButtonVariant } from 'bootstrap-vue-next'
  interface CollapseButtonProps {
    text: string
    variant: ButtonVariant
  }
  withDefaults(defineProps<CollapseButtonProps>(), {
    text: '',
    variant: 'primary'
  })
  const visible = ref(false)
</script>
