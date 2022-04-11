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
const studentsColumn = [
    {
        title: "Name",
        dataIndex: "name",
        key: "name",
    },
    {
        title: "Date of birth",
        dataIndex: "dob",
        key: "dob",
    },
    {
        title: "Place Of Birth",
        dataIndex: "place_of_birth",
        key: "place_of_birth",
    },
    {
        title: "Action",
        key: "action",
        scopedSlots: { customRender: "action" },
    },
];
export default {
    props: {
        data: { type: Array },
    },
    data() {
        return {
            studentsColumn,
        };
    },
    methods: {
        studentView(record) {
            this.$emit("certificateView", record);
        },
    },
};
</script>
