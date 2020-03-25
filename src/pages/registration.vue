<template>
    <div>
        <navbar />
        <registration-form @submit="onSubmit" />
    </div>
</template>

<script>
import { RegistrationForm, Navbar } from './../components';

export default {
    components: {
        RegistrationForm,
        Navbar,
    },
    data: () => ({}),
    methods: {
        onSubmit(formData) {},
    },
};
</script>