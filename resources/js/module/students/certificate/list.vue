<template>
    <a-table :columns="studentsColumn" :dataSource="data">
        <span slot="action" slot-scope="text, record">
            <a-tooltip>
                <template slot="title">View Certificate </template>
                <a-button v-on:click="studentView(record)" type="primary">
                    <a-icon type="safety-certificate" />
                </a-button>
            </a-tooltip>
        </span>
    </a-table>
</template>

<script>
import CertificateServices from "../../../services/API/CertificateServices";
const studentsColumn = [
    {
        title: "First Name",
        dataIndex: "first_name",
        key: "first_name",
    },
    {
        title: "Last Name",
        dataIndex: "last_name",
        key: "last_name",
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
            studentsColumn,
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
            CertificateServices.showStudentCertificate(this.student.id).then(
                (response) => {
                    console.log(response);
                }
            );
        },
    },
};
</script>
