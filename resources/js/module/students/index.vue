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
            :destroyOnClose="true"
            :width="1200"
            :visible="showCertificatesModal"
            @cancel="handleCertificatesModal(false)"
            title="Certificates Details"
        >
            <certificate-list
                @loadCertificate="loadCertificate"
                @showCertificateModa="handleGenerateCertificateModal"
                :student="student"
            />
        </a-modal>
    </div>
</template>
<script>
import list from "./list";
import create from "./create";
import generateCertificate from "./certificate/generate";
import certificateList from "./certificate/list";
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
            fetchCerticates: () => {},
        };
    },
    mounted() {
        this.fetch();
    },
    methods: {
        handleGenerateCertificateModal(show) {
            if (!show && this.showCertificatesModal) {
                // bit jugard
                const func = this.fetchCerticates
                setTimeout(function () {
                   func();
                }, 1000);
            }
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
        },
        loadCertificate(fetchMethod) {
            this.fetchCerticates = fetchMethod;
        },
    },
};
</script>
