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
                <list :data="data" @certificateView="getCertificate" />
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
        <a-modal
            :destroyOnClose="true"
            @cancel="handleGenerateCertificateModal(false)"
            :footer="null"
            :width="650"
            :visible="showGenerateCertificateModal"
            title="Generate Certificate"
            ><generate-certificate
                :student="student"
                @closeModal="handleGenerateCertificateModal"
            />
        </a-modal>
        <a-modal
            :width="1200"
            :visible="showCertificatesModal"
            @cancel="handleCertificatesModal(false)"
            title="Certificates"
        >
            <certificate-list :student="student" />
        </a-modal>
    </div>
</template>
<script>
import list from "./list";
import create from "./create";
import generateCertificate from "./certificate/generate";
import certificateList from "./certificate/list";
import CertificateService from "../../services/API/CertificateServices";
import StudentServices from "../../services/API/StudentServices";
export default {
    components: {
        list,
        create,
        generateCertificate,
        certificateList,
    },
    data() {
        return {
            showModalCreate: false,
            showGenerateCertificateModal: false,
            showCertificatesModal: false,
            data: [],
            loading: true,
            student: {},
        };
    },
    mounted() {
        this.fetch();
    },
    methods: {
        handleGenerateCertificateModal(show) {
            this.showGenerateCertificateModal = show;
        },
        handleCertificatesModal(show) {
            this.showCertificatesModal = show;
        },
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
            // console.log("student", student);
            this.student = student;
            this.handleCertificatesModal(true);
            // window.location = `/certificate/student/${student.id}`;
            // CertificateService.getStudentCertificate(student.id).then(
            //     (response) => {
            //         console.log(response);
            //     }
            // );
        },
    },
};
</script>
