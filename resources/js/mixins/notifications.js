import { isEmpty } from '../services/helpers'

const placement = 'bottomLeft'
export default {
  methods: {
    success(description, message = 'Success') {
      return this.$notification.open({
        message,
        description,
        placement,
        // icon: (
        //   <a-icon
        //     type="check-circle"
        //     theme="twoTone"
        //     two-tone-color="#52c41a"
        //   />
        // ),
      })
    },

    error(err) {
      let description = ''

      if (err.response) {
        description = getResponseError(err)
      } else {
        description = err
      }
      //  this.$confirm({ content: description, type: 'error' })
      this.$notification.open({
        message: `Error`,
        description,
        placement,
        class: 'error-notification',
        // icon: <a-icon type="smile" style="color: #108ee9" />,
      })
    },
  },
}

function getResponseError(err) {
  if (!isEmpty(err.response) && !isEmpty(err.response.data)) {
    const genericError = err.response.data.errors
    if (!isEmpty(genericError)) {
      let description = ''
      for (const key in genericError) {
        description += `${genericError[key][0]},`
      }
      return description
    }
  }

  const genericException = err.response.data
  if (!isEmpty(genericException)) {
    return genericException.message
  }
}
