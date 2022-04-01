<template>
    <div>
        <a-spin :spinning="loading">
            <a-card title="Students">
                <a-button
                    slot="extra"
                    @click="handleCreateModal(true)"
                    type="primary"
                    >Add Student</a-button
                >
                <list :data="data" @print="getCertificate" />
            </a-card>
        </a-spin>
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
import CertificateService from "../../services/API/CertificateServices";
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
            loading: true,
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
            this.loading = true;
            StudentServices.get(params)
                .then((response) => {
                    this.data = response.data;
                })
                .finally(() => (this.loading = false));
        },
        getCertificate(student) {
            window.location = `/certificate/student/${student.id}`;
            // CertificateService.getStudentCertificate(student.id).then((response) => {
            //     console.log(response);
            // });
        },
    },
};
</script>
