<template>
    <a-table :columns="studentsColumn" :dataSource="data">
        <span slot="action" slot-scope="text, record">
            <a-button v-on:click="studentView(record)" type="link"
                ><a-icon type="appstore" theme="filled" />
            </a-button>
        </span>
    </a-table>
</template>

<script>
const studentsColumn = [
    {
        title: "First Name",
        dataIndex: "date_of_payment",
        key: "date_of_payment",
    },
    {
        title: "Last Name",
        dataIndex: "received_amount",
        key: "received_amount",
    },
    {
        title: "Action",
        key: "action",
        scopedSlots: { customRender: "action" },
    },
];
export default {
    data() {
        return {
            data: [],
            studentsColumn,
        };
    },
    methods: {
        studentView() {},
    },
};
</script>
