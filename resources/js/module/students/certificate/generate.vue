<template>
    <a-spin :spinning="loading">
        <a-form
            :label-col="{ span: 5 }"
            :wrapper-col="{ span: 19 }"
            @submit="onSubmit"
            :form="form"
        >
            <a-form-item label="Type">
                <a-select>
                    <a-select-option
                        v-decorator="[
                            'type',
                            {
                                rules: [{ required: true }],
                            },
                        ]"
                        v-for="certificate in types"
                        :key="certificate.id"
                        value="certificate.id"
                        >{{ certificate.name }}</a-select-option
                    >
                </a-select>
            </a-form-item>
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
import CertificateService from "../../../services/API/CertificateServices";
import notifications from "../../../mixins/notifications";
export default {
    components: { ActionButton },
    mixins: [notifications],
    data() {
        return {
            form: this.$form.createForm(this, { name: "generateCertificate" }),
            loading: false,
            isCreated: false,
            types: [],
        };
    },
    mounted() {
        this.fetchTypes();
    },
    methods: {
        fetchTypes() {
            CertificateService.getTypes().then((types) => {
                this.types = types;
            });
        },
        onSubmit(e) {
            this.loading = true;
            e.preventDefault();
            this.form.validateFields((err, values) => {
                if (!err) {
                    this.loading = true;
                    console.log("values", values);
                    // StudentServices.create(values)
                    //     .then((response) => {
                    //         this.success(response.message);
                    //         this.$emit("closeModal", false);
                    //     })
                    //     .catch(this.error)
                    //     .finally(() => (this.loading = false));
                }
                this.loading = false;
            });
        },
    },
};
</script>
