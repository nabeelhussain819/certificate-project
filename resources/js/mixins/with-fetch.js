import routeHelpers from '~/mixins/route-helpers'
import nullHelper from '~/mixins/null-helpers'
import notifications from '~/mixins/notifications'
export default {
  mixins: [routeHelpers, nullHelper, notifications],
  data() {
    return {
      entity: {},
      loading: false,
      params: {},
      fetchIdFromParams: true,
      fetchMethod: () => {},
    }
  },
  mounted() {
    if (this.fetchIdFromParams) {
      this.checkCreated()
    }
  },
  methods: {
    checkCreated() {
      const entityId = this.$route.params.id
      if (this.isGuid(entityId)) {
        this.entityId = entityId
        this.isCreated = true
        this.fetch(entityId)
      }
    },
    fetch(id) {
      if (this.isFunction(this.beforeFetch)) {
        this.beforeFetch()
      }
      this.loading = true
      this.fetchMethod(id)
        .then((response) => {
          this.entity = response.data

          if (this.isFunction(this.getEntity)) {
            this.getEntity(response)
          }

          if (this.isFunction(this.afterFetch)) {
            this.afterFetch(response)
          }
        })
        .catch(this.error)
        .finally(() => (this.loading = false))
    },
  },
}
