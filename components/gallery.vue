<template>
  <div>
    <div @click="showModal" class="gallery">
      <slot></slot>
    </div>
    <b-modal
      v-model="modalShow"
      size="lg"
      class="bigModel"
      hide-footer
      centered
      title="相片圖庫"
    >
      <div ref="gallery" class="bigimg"><slot></slot></div>
      <div slot="modal-footer"></div>
    </b-modal>
  </div>
</template>
<script>
export default {
  data() {
    return {
      modalShow: false
    }
  },
  methods: {
    showModal() {
      this.modalShow = true
    },
    hideModal() {
      this.modalShow = false
    }
  }
}
</script>
<style>
.gallery {
  cursor: pointer;
}

.bigimg > img {
  width: auto;
  min-width: 300px;
  margin: 0 auto;
  max-width: 100%;
}

@media (min-width: 992px) {
  .bigModel .modal-lg {
    max-width: 1024px;
  }
}
</style>
