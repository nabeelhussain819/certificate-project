import routeHelpers from '~/mixins/route-helpers'
import nullHelper from '~/mixins/null-helpers'
import notifications from '~/mixins/notifications'
export default {
  mixins: [routeHelpers, nullHelper, notifications],
  data() {
    return {
      entityId: null,
      isCreated: false,
      entity: {},
      loading: false,
      btnLoading: false,
      formLayout: 'vertical',
      fetchIdFromParams: true,
      // afterUpdate: null,
      // afterCreate: null,
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
    upsert(values) {
      if (this.isFunction(this.beforeUpsert)) {
        this.beforeUpsert(values)
      }
      if (this.isCreated) {
        return this.update(values)
      }
      return this.create(values)
    },
    fetch(id) {
      this.loading = true
      this.apiService
        .getById(id)
        .then((response) => {
          this.entity = response.data

          if (this.isFunction(this.getEntity)) {
            this.getEntity(response)
          }
        })
        .finally(() => (this.loading = false))
    },
    create(values) {
      this.btnLoading = true
      this.loading = true
      this.apiService
        .create(values)
        .then((response) => {
          this.success(response.message)
          if (!this.isEmpty(this.gotoLink)) {
            this.goto(`${this.gotoLink}/${response.data.globalId}`)
          }
          if (this.isFunction(this.afterCreate)) {
            this.afterCreate(response)
            this.btnLoading = false
            this.loading = false
          }
        })
        .catch(this.error)
        .finally(() => {
          // this.btnLoading = false
          // this.loading = false
        })
    },
    update(values) {
      this.btnLoading = true
      this.apiService
        .update(this.entityId, values)
        .then((response) => {
          this.success(response.message)
          if (!this.isEmpty(this.gotoLink)) {
            this.goto(`${this.gotoLink}`)
          }
          if (this.isFunction(this.afterUpdate)) {
            this.afterUpdate(response)
            this.btnLoading = false
            this.loading = false
          }
        })
        .catch(this.error)
        .finally(() => {
          
        })
    },
    onSubmit(e) {
      this.loading = true
      e.preventDefault()
      this.form.validateFields((err, values) => {
        if (!err) {
          this.upsert(values)
        } else {
          this.loading = false
        }
      })
      // this.loading = false
    },
    onDelete() {
      this.apiService
        .destroy(this.entityId)
        .then((response) => {
          this.success(response.message)
          if (this.isFunction(this.afterDelete)) {
            this.afterDelete(response)
          }
        })
        .catch(this.error)
    },
    loadEntityExternally(model) {
      if (!this.isEmpty(model)) {
        this.entity = model
        this.isCreated = true
        this.entityId = model.id
      }
    },
  },
}
