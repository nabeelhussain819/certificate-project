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
        data: { type: Array },
    },
    data() {
        return {
            studentsColumn,
        };
    },
    methods: {
        studentView() {},
    },
};
</script>
