import { isEmpty } from '~/services/Helpers'
export default {
  methods: {
    created(values) {
      return !isEmpty(values)
    },
    isEmpty,
    isGuid(value) {
      const regex = /[a-f0-9]{8}(?:-[a-f0-9]{4}){3}-[a-f0-9]{12}/i
      const match = regex.exec(value)
      return match != null
    },
    isFunction(func) {
      return typeof func === 'function'
    },
   
  },
}
