<template>
    <a-spin :spinning="loading">
        <a-form :label-col="{ span: 6 }" :wrapper-col="{ span: 18 }" @submit="onSubmit" :form="form">
            <a-form-item label="Type">
                <a-select v-decorator="[
                    'certificate_type_id',
                    {
                        rules: [{ required: true }],
                    },
                ]" @select="onTypeSelect">
                    <a-select-option v-for="certificate in types" :key="certificate.id"
                        :data-hasLanguageModule="certificate.has_module">{{ certificate.alias }}
                    </a-select-option>
                </a-select>
            </a-form-item>
            <a-form-item label="Leseverstehen">
                <a-input v-decorator="[
                    'Leseverstehen',
                    {
                        rules: [{ required: true }],
                    },
                ]"></a-input>
            </a-form-item>
            <a-form-item label="Hörverstehen">
                <a-input v-decorator="[
                    'Hörverstehen',
                    {
                        rules: [{ required: true }],
                    },
                ]"></a-input>
            </a-form-item>
            <a-form-item v-if="hasLanguageModule" label="Geburtsort">
                <a-input v-decorator="[
                    'Geburtsort',
                    {
                        rules: [{ required: true }],
                    },
                ]"></a-input>
            </a-form-item>
            <a-form-item label="Schriftlicher Ausdruck">
                <a-input v-decorator="[
                    'Schriftlicher_Ausdruck',
                    {
                        rules: [{ required: true }],
                    },
                ]"></a-input>
            </a-form-item>
            <a-form-item label="Mündlicher Ausdruck">
                <a-input-number width="100%" v-decorator="[
                    'Mündlicher_Ausdruck',
                    {
                        rules: [{ required: true }],
                    },
                ]"></a-input-number>
            </a-form-item>
            <a-form-item :label-col="{ span: 0 }" :wrapper-col="{ span: 24 }" class="text-right">
                <ActionButton class="text-right" :is-created="isCreated" :loading="loading"
                    text="Generate Certificate" />
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
    props: {
        student: {
            type: Object,
        },
    },
    components: { ActionButton },
    mixins: [notifications],
    data() {
        return {
            form: this.$form.createForm(this, { name: "generateCertificate" }),
            loading: false,
            isCreated: false,
            types: [],
            hasLanguageModule: false,
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
            let url = ` /certificate/student/${this.student.id}?`;

            this.form.validateFields((err, values) => {
                if (!err) {
                    this.loading = true;
                    CertificateService.getStudentCertificate(
                        this.student.id,
                        values
                    ).then((values) => {
                        // console.log(values);
                    });

                    // for (const key in values) {
                    //     url += `${key}=${values[key]}&`;
                    // }
                    // window.location = url;
                    this.success("Downloading");
                    this.$emit("closeModal", false);
                }
                this.loading = false;
            });
            this.loading = false;
        },
        onTypeSelect(type, record) {
            this.hasLanguageModule =
                record.data.attrs["data-hasLanguageModule"];
        },
    },
};
</script>
