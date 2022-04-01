<template>
    <div>
        <a-card title="Student">
            <a-button
                slot="extra"
                @click="handleCreateModal(true)"
                type="primary"
                >Add Student</a-button
            >
            <list />
        </a-card>
        <a-modal
            @cancel="handleCreateModal(false)"
            :footer="null"
            :width="650"
            :visible="showModalCreate"
            title="Create Student"
            ><create />
        </a-modal>
    </div>
</template>
<script>
import list from "./list";
import create from "./create";
export default {
    components: {
        list,
        create,
    },
    data() {
        return {
            showModalCreate: false,
        };
    },
    methods: {
        handleCreateModal(show) {
            this.showModalCreate = show;
        },
    },
};
</script>
