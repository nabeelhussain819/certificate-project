<template>
    <div>
        <a-card title="Student">
            <a-button
                slot="extra"
                @click="handleCreateModal(true)"
                type="primary"
                >Add Student</a-button
            >
            <list :data="data" />
        </a-card>
        <a-modal
            :destroyOnClose="true"
            @cancel="handleCreateModal(false)"
            :footer="null"
            :width="650"
            :visible="showModalCreate"
            title="Create Student"
            ><create @closeModal="closeOnCreate" />
        </a-modal>
    </div>
</template>
<script>
import list from "./list";
import create from "./create";
import StudentServices from "../../services/API/StudentServices";
export default {
    components: {
        list,
        create,
    },
    data() {
        return {
            showModalCreate: false,
            data: [],
        };
    },
    mounted() {
        this.fetch();
    },
    methods: {
        handleCreateModal(show) {
            this.showModalCreate = show;
        },
        closeOnCreate(show) {
            this.handleCreateModal(show);
            this.fetch();
        },
        fetch(params = {}) {
            StudentServices.get(params).then((response) => {
                console.log(response.data);
                this.data = response.data;
            });
        },
    },
};
</script>
