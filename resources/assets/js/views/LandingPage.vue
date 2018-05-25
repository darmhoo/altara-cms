<template>
   <!-- <div class="top-left logo"> <img src="assets/altara_logo.png" alt=""></div> -->
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Altara 1.0
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Catalog</a>
                    <a href="http://altaracredit.com">Website</a>
                    <a href="https://laravel-news.com">CMS</a>
            </div>
        </div>
        </div>
</template>
<script type="text/javascript">
export default {
  components: {},
  data() {
    return {};
  },
  computed: {},
  watch: {},
  created() {},
  methods: {}
};
</script>
<style>

.full-height {
  height: 100vh;
}

.flex-center {
  align-items: center;
  display: flex;
  justify-content: center;
}

.position-ref {
  position: relative;
}

.top-right {
  position: absolute;
  right: 10px;
  top: 18px;
}

.content {
  text-align: center;
}

.title {
  font-size: 84px;
}

.links > a {
  color: #003366;
  padding: 0 25px;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.1rem;
  text-decoration: none;
  text-transform: uppercase;
}

.m-b-md {
  margin-bottom: 30px;
}
</style>
