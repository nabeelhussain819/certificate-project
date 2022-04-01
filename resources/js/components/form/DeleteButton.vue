<template>
  <a-popconfirm
    placement="topLeft"
    ok-text="Yes"
    cancel-text="No"
    @confirm="confirm"
  >
    <template slot="title">
      <p>{{ text }}</p>
    </template>
    <a-button html-type="button" ghost type="danger">{{ btnText }}</a-button>
  </a-popconfirm>
</template>
<script>
const defaultText = 'Delete'
export default {
  props: {
    text: {
      default: 'Are you sure to delete this task?',
      type: String,
    },
    btnText: { default: defaultText, type: String },
  },
  data() {
    return {}
  },
  methods: {
    confirm() {
      this.$emit('delete')
    },
  },
}
</script>
