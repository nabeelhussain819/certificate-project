<template>
    <a-table
        :loading="loading"
        :pagination="false"
        :columns="studentsColumn"
        :dataSource="dataSource"
    >
        <span slot="action" slot-scope="text, record">
            <a-tooltip>
                <template slot="title">PDF</template>
                <a-button v-on:click="studentView(record)" type="primary">
                    <a-icon type="file-pdf" />
                </a-button>
            </a-tooltip>
            <a-tooltip>
                <template slot="title">QR Code </template>
                <a-button v-on:click="studentView(record)" type="primary">
                    <a-icon type="printer" />
                </a-button>
            </a-tooltip>
        </span>
    </a-table>
</template>

<script>
import CertificateServices from "../../../services/API/CertificateServices";
const studentsColumn = [
    {
        title: "Type",
        dataIndex: "types.name",
        key: "type",
    },
    {
        title: "Listening",
        key: "listening",
        dataIndex: "listening",
    },
    {
        title: "Writing",
        key: "writing",
        dataIndex: "writing",
    },
    {
        title: "Oral",
        key: "oral",
        dataIndex: "oral",
    },
    {
        title: "Reading",
        key: "reading",
        dataIndex: "reading",
    },
    {
        title: "Language Module",
        key: "language_module",
        dataIndex: "language_module",
    },
    {
        title: "Action",
        key: "action",
        scopedSlots: { customRender: "action" },
    },
];
export default {
    props: {
        student: { type: Object, require: true },
        data: { type: Object, require: true },
    },
    data() {
        return {
            loading: true,
            studentsColumn,
            dataSource: [],
        };
    },
    mounted() {
        this.fetchStudentCertificate();
    },
    methods: {
        studentView(record) {
            this.$emit("certificateView", record);
        },
        fetchStudentCertificate() {
            this.loading = true;
            CertificateServices.showStudentCertificate(this.student.id)
                .then((certificates) => {
                    this.dataSource = certificates;
                })
                .finally(() => (this.loading = false));
        },
    },
};
</script>
