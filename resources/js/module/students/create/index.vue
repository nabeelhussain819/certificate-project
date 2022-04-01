<template>
    <a-spin :spinning="loading">
        <a-form
            :label-col="{ span: 5 }"
            :wrapper-col="{ span: 19 }"
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

            <a-form-item
                :label-col="{ span: 0 }"
                :wrapper-col="{ span: 24 }"
                class="text-right"
            >
                <ActionButton
                    class="text-right"
                    :is-created="isCreated"
                    :loading="loading"
                    text="Save Student"
                />
            </a-form-item>
        </a-form>
    </a-spin>
</template>

<script>
import ActionButton from "../../../components/form/ActionButton";
import StudentServices from "../../../services/API/StudentServices";
import notifications from "../../../mixins/notifications";
export default {
    components: { ActionButton },
    mixins: [notifications],
    data() {
        return {
            form: this.$form.createForm(this, { name: "studentCreate" }),
            loading: false,
            isCreated: false,
        };
    },
    methods: {
        onSubmit(e) {
            this.loading = true;
            e.preventDefault();
            this.form.validateFields((err, values) => {
                if (!err) {
                    this.loading = true;

                    StudentServices.create(values)
                        .then((response) => {
                            this.success(response.message);
                            this.$emit("closeModal", false);
                        })
                        .catch(this.error)
                        .finally(() => (this.loading = false));
                }
                this.loading = false;
            });
        },
    },
};
</script>
