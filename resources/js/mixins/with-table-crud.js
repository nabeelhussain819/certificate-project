import routeHelpers from '~/mixins/route-helpers'
import notifications from '~/mixins/notifications'

export default {
  mixins: [routeHelpers, notifications],

  data() {
    return {
      data: [],
      loading: false,
      columns: [],
      pagination: false,
      actionLink: '',
      params: {},
    }
  },
  mounted() {
    this.fetch()
  },
  methods: {
    fetch(params = {}) {
      this.loading = true
      this.apiService
        .get(this.params)
        .then((response) => {
          this.$emit('afterFetch', response)
          this.data = response.data
        })
        .catch(this.error)
        .finally(() => {
          this.$emit('finally')
          this.loading = false
        })
    },
  },
}
