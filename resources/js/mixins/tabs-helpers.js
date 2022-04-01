import { isEmpty } from '~/services/Utilities'
export default {
    methods: {
        isEmpty,
        handleActiveTab() {
            const view = this.$route
            if (!isEmpty(view.query.view)) {

                this.activeTab = view.query.view
            }
        },
    },
}
