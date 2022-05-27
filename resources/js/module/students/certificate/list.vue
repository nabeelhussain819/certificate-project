<template>
    <a-table :loading="loading" :pagination="false" :columns="studentsColumn" :dataSource="dataSource">
        <span slot="title">
            <a-row>
                <a-col :span="12">
                    <h3>{{ this.student.name }}</h3>
                </a-col>
                <a-col class="text-right" :span="12">
                    <a-button @click="showCertificateModa" type="primary">
                        <a-icon type="printer" /> Generate New
                        Certificate
                    </a-button>
                </a-col>
            </a-row>
        </span>
        <span slot="action" slot-scope="text, record">
            <a-tooltip>
                <template slot="title">PDF</template>
                <a target="_blank" :href="`storage/${record.student.guid}/pdf/${record.guid}.pdf`">
                    <a-button type="danger">
                        <a-icon type="file-pdf" />
                    </a-button>
                </a>
            </a-tooltip>
            <a-tooltip>
                <template slot="title">QR Code </template>
                <a target="_blank" :href="`storage/${record.student.guid}/qr/${record.guid}.png`">
                    <a-button v-on:click="studentView(record)" type="primary">
                        <a-icon type="printer" />
                    </a-button>
                </a>
            </a-tooltip>
        </span>
    </a-table>
</template>

<script>
import CertificateService from "../../../services/API/CertificateServices";

const studentsColumn = [
    {
        title: "Type",
        dataIndex: "types.alias",
        key: "type",
    },
    {
        title: "Hörverstehen",
        key: "Hörverstehen",
        dataIndex: "reading",
    },
    {
        title: "Schriftlicher Ausdruck",
        key: "Schriftlicher_Ausdruck",
        dataIndex: "writing",
    },
    {
        title: "Mündlicher Ausdruck",
        key: "Mündlicher_Ausdruck",
        dataIndex: "oral",
    },
    {
        title: "Leseverstehen",
        key: "Leseverstehen",
        dataIndex: "listening",
    },
    {
        title: "Sprachbausteine ",
        key: "Sprachbausteine",
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
        this.$emit("loadCertificate", this.fetchStudentCertificate);
        this.fetchStudentCertificate();
    },
    methods: {
        studentView(record) {
            this.$emit("certificateView", record);
        },
        fetchStudentCertificate() {
            this.loading = true;
            CertificateService.showStudentCertificate(this.student.id)
                .then((certificates) => {
                    this.dataSource = certificates;
                })
                .finally(() => (this.loading = false));
        },
        showCertificateModa() {
            this.$emit("showCertificateModa", true);
        },
    },
};
</script>
