export default {
  methods: {
    goto(url, query = {}) {
      this.$router.push({ path: url, query })
    },
    goBack() {
      this.$router.go(-1)
    },
  },
}
