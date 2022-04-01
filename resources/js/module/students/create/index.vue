<template>
    <a-form
        :label-col="{ span: 5 }"
        :wrapper-col="{ span: 17 }"
        @submit="onSubmit"
        :form="form"
    >
        <a-form-item label="First Name">
            <a-input
                v-decorator="[
                    'first_name',
                    {
                        rules: [{ required: true }],
                    },
                ]"
            ></a-input>
        </a-form-item>
        <a-form-item label="Last Name">
            <a-input
                v-decorator="[
                    'last_name',
                    {
                        rules: [{ required: true }],
                    },
                ]"
            ></a-input>
        </a-form-item>
        <a-form-item label="Place of Birth">
            <a-input
                v-decorator="[
                    'place_of_birth',
                    {
                        rules: [{ required: true }],
                    },
                ]"
            ></a-input>
        </a-form-item>
        <a-form-item label="Date Of Birth"
            ><a-date-picker
                class="w-100"
                v-decorator="[
                    'date_of_birth',
                    {
                        rules: [{ required: true }],
                    },
                ]"
            />
        </a-form-item>
        <a-form>
            <a-form-item class="text-right">
                <ActionButton class="text-right" />
            </a-form-item>
        </a-form>
    </a-form>
</template>

<script>
import ActionButton from "../../../components/form/ActionButton";
export default {
    components: { ActionButton },
    data() {
        return {
            form: this.$form.createForm(this, { name: "studentCreate" }),
        };
    },
    methods: {
        onSubmit(e) {
            e.preventDefault();
            this.form.validateFields((err, values) => {
                if (!err) {
                    this.loading = true;
                    console.log(values);
                    // PurchaseOrderServices.create(values)
                    //     .then(response => {
                    //         notification(this, response.message);
                    //         location.reload();
                    //     })
                    //     .catch(error => {
                    //         errorNotification(this, error);
                    //     })
                    //     .finally(() => (this.loading = false));
                }
            });
        },
    },
};
</script>
