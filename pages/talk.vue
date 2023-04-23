<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>Aoetw討論區</h1>
        <div class="hrn1"></div>
        <div>
          <ul>
            <li><s>任何問題或是網頁有錯誤都歡迎在這邊討論</s></li>
            <li>
              目前討論區故障了，請移步至<br /><a
                href="https://discord.gg/ymNuMVg"
                target="_blank"
                ><img width="100" src="~assets/discord.png" alt="" />
                Discord語音聊天群</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-12">
        <iframe
          ref="forum_embed"
          src="javascript:void(0)"
          scrolling="no"
          frameborder="0"
          width="100%"
          height="600"
        ></iframe>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'footn' })

export default {
  head() {
    return {
      title: '討論區 - Aoetw'
    }
  },
  mounted() {
    this.$refs.forum_embed.src =
      'https://groups.google.com/forum/embed/?place=forum/aoetw' +
      '&showsearch=true&showpopout=true&showtabs=false' +
      '&parenturl=' +
      encodeURIComponent(window.location.href)
  },
  components: {}
}
</script>
<style></style>
